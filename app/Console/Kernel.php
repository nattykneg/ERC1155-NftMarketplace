<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\RevokedMatches;
use File;

use DB;
use App\Models\Deposit;
use App\User;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $cronLog = storage_path('logs/cron1.log');
        // if (!File::exists($cronLog)) {
        //     File::put($cronLog, '');
        // }
        $schedule->call(function () {
            // $cronLog = storage_path('logs/cron2.log');
            // if (!File::exists($cronLog)) {
            //     File::put($cronLog, '');
            // }
            // dispatch(new RevokedMatches());
        // })->cron('* * * * *');
            $this->new();
        })->everyFiveMinutes();
    }

    public function getTransactions($address) {
        $contractAddress = '0xd7eed0fcde8d805b6798cda396968c25335cd379';
        $apiKey = 'RBGDQVHMMB1SVCRJ1CGGZDZUGRPRFD394C';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.bscscan.com/api?module=account&action=tokentx&contractaddress='.$contractAddress.'&address='.$address.'&page=1&offset=95&startblock=0&endblock=999999999&sort=desc&apikey='.$apiKey,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($curl);
        $jsonVal = json_decode($response, true); 
        curl_close($curl); 

        return $jsonVal;
    }

    public function getResultTransaction($txhash) {
        $apiKey = 'RBGDQVHMMB1SVCRJ1CGGZDZUGRPRFD394C';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.bscscan.com/api?module=transaction&action=gettxreceiptstatus&txhash='.$txhash.'&apikey='.$apiKey,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($curl);
        $jsonVal = json_decode($response, true); 
        curl_close($curl); 

        return $jsonVal;
    }

    public function new() {
        $addresses = DB::table('coin_addresses')->where('coin','BTP')->get();
        if (count($addresses) > 0) {
            foreach ($addresses as $address) {
                $transactions = $this->getTransactions($address->address);
                // dd(count($transactions['result']));die;
                if (isset($transactions) && $transactions['status'] == '1' && count($transactions['result']) > 0) {
                    foreach ($transactions['result'] as $transaction) {
                        // dd($transaction['timeStamp']);die;
                        if($transaction['to'] == $address->address) {
                            $deposit = Deposit::where([
                                'address' => $address->address,
                                'txid' => $transaction['hash'],
                                'coin_type' => 'BTP',
                                'time' => $transaction['timeStamp']
                            ])->first();
                            if (!$deposit) {
                                $data =
                                Deposit::create([
                                    'user_id' => $address->user_id,
                                    'address' => $address->address,
                                    'txid' => $transaction['hash'],
                                    'coin_type' => 'BTP',
                                    'amount' => (double)$transaction['value']/1000000000000000000,
                                    'time' => $transaction['timeStamp']
                                ]);
                                $result = $this->getResultTransaction($transaction['hash']);
                                if($result['status'] == "1") {
                                    Deposit::where('id',$data->id)->update(['status'=>100]);
                                    User::where('id',$address->user_id)->increment('mbtc',(double)$transaction['value']/1000000000000000000);
                                } else {
                                    Deposit::where('id',$data->id)->update(['status'=>-1]);
                                }
                            } else {
                                // dd((double)$transaction['value']/1000000000000000000);die;
                                if($deposit['status'] == 0) {
                                    $result = $this->getResultTransaction($deposit['txid']);
                                    if($result['status'] == "1") {
                                        Deposit::where('id',$deposit['id'])->update(['status'=>100, 'amount'=>(double)$transaction['value']/1000000000000000000]);
                                        User::where('id',$address->user_id)->increment('mbtc',(double)$transaction['value']/1000000000000000000);
                                    } else {
                                        Deposit::where('id',$deposit['id'])->update(['status'=>-1]);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        // dd($addresses);die;
    }
    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
