@extends('layouts.master')

<!-- head -->

@section('title')

    NFT IGO

@endsection

<!-- title -->



@section('head')

    <meta name="csrf_token"  content="{{ csrf_token() }}" />

    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

    <link href="{{ URL::asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />

@endsection



<style>

    .adds {

        padding-top: 22px;

    }



    .bootstrap-switch {

        height: 34px;

    }



    .channel-ul {

        background: #3399ff;

        padding: 20px;

    }



    ul .channel-li {

        background: #cce5ff;

        margin: 5px;

    }



    .channel-li:hover {

        background-color: #330066;

        color : #fff;

    }

</style>



@section('content')

    <div class="page-content-wrapper">

        <!-- BEGIN CONTENT BODY -->

        <div class="page-content" style="min-height: 1603px;">

            <!-- BEGIN PAGE HEAD-->

            <div class="page-head">

                <!-- BEGIN PAGE TITLE -->

                <div class="page-title">

                    <h1>Mint NFT IGO</h1>

                </div>

                <!-- END PAGE TITLE -->

            </div>

            <!-- END PAGE HEAD-->

            

            <!-- BEGIN PAGE BREADCRUMB -->

            <ul class="page-breadcrumb breadcrumb">

                <li>

                    <a href="{{url('admin-dashboard')}}">Home</a>

                    <i class="fa fa-circle"></i>

                </li>

                <li>

                    <span class="active">Mint NFT IGO</span>

                </li>

            </ul>

            <!-- END PAGE BREADCRUMB -->



            <!-- BEGIN PAGE BASE CONTENT -->

            <div class="row">

                <div class="col-md-12">

                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet light bordered">

                        <div class="portlet-title">

                            <div class="caption font-blue-sunglo">

                                <i class="icon-settings font-blue-sunglo"></i>

                                <span class="caption-subject bold uppercase"> User NFT Price</span>

                            </div>

                        </div>



                        @if(session('success'))

                            <div class="alert alert-success">

                                {{ session('success') }}

                            </div>

                        @endif



                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{route($nftprice ? 'admin-nftprice.update' : 'admin-nftprice.store')}}">

                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="form-body row">

                                    <div class="form-group col-md-6">

                                        @if($nftprice)

                                            <input type="hidden" name="priceId" value="{{$nftprice->id}}">

                                            <input type="text" class="form-control" placeholder="0.15" name="nftprice" value="{{$nftprice->price}}" > 

                                        @else

                                            <input type="text" class="form-control" placeholder="0.15" name="nftprice" >

                                        @endif

                                    </div>

                                    <div class="form-group col-md-6">

                                        <button type="submit" class="btn blue form-control" style="width: 80px;">Set</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>



                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet light bordered">

                        <div class="portlet-title">

                            <div class="caption font-blue-sunglo">

                                <i class="icon-settings font-blue-sunglo"></i>

                                <span class="caption-subject bold uppercase"> Mint NFT IGO</span>

                            </div>

                        </div>



                        @if(session('success'))

                            <div class="alert alert-success">

                                {{ session('success') }}

                            </div>

                        @endif



                        <div class="portlet-body form">

                            <form id="nftform" method="post" onsubmit="mintNft(event)">

                                <div class="form-body row">

                                    <div class="form-group col-md-6">

                                        <label>Name</label> 

                                        <input type="text" class="form-control" placeholder="NFT Name" name="name" >

                                    </div>



                                    <div class="form-group col-md-6">

                                        <label>Participation Currency</label> 

                                        <select class="form-control cateid" name="currency" value="ETH" >

                                            <option value="ETH">ETH</option>

                                            <option value="BNB">BNB</option>

                                        </select>

                                    </div>



                                    <div class="form-group col-md-6">

                                        <label>NFT Avartar</label>

                                        <input type="file" class="form-control" placeholder="NFT Avartar" name="nft_avatar" >

                                    </div>



                                    <div class="form-group col-md-6">

                                        <label>Price</label> 

                                        <input type="text" class="form-control" placeholder="1.50" name="price" >

                                    </div>

                                </div>



                                <div class="form-actions">

                                    <button type="submit" class="btn blue">Submit</button>

                                    <a class="btn default" href="{{ route('admin-nft.index') }}">Cancel</a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            <!-- END PAGE BASE CONTENT -->

        </div>

        <!-- END CONTENT BODY -->

    </div>



    <script type="text/javascript">

        function mintNft(event) {

            event.preventDefault();

            

            var name        = event.target.elements.name.value;

            var currency    = event.target.elements.currency.value;

            var nftAvatar   = event.target.elements.nft_avatar.files[0];

            var price       = event.target.elements.price.value;



            if (!name || !currency || !nftAvatar || !price) {

                alert('Please enter everything correctly');

                return;

            }



            if (!window.ethereum || !window.ethereum.selectedAddress) {

                alert("Please connect Metamask before minting");

                return;

            }



            const contractABI = await getContractABI();

            const contract = new web3.eth.Contract(contractABI, nftContactAddress);



            var formData = new FormData();

            formData.append('file', nftAvatar);

            $.ajax({

                type: 'POST',

                url: "https://ipfs.infura.io:5001/api/v0/add",

                data: formData,

                processData: false,

                contentType: false,

                success: function (rAvatar) {



                    var nftInfo = {

                        imageUrl: rAvatar.Hash,

                        name: 'name',

                    }

                    formData = new FormData();

                    formData.append("file", JSON.stringify(nftInfo));

                    $.ajax({

                        type: 'POST',

                        url: "https://ipfs.infura.io:5001/api/v0/add",

                        data: formData,

                        processData: false,

                        contentType: false,

                        success: function (metadata) {



                            ethereum.request({ method: 'eth_requestAccounts' })

                                .then((accounts) => {



                                    const nftName = name;

                                    const nftHash = metadata.Hash;

                                    const nftPrice = ethUnit.toWei(price, 'ether');

                                    const nftValue = AdminAddress.toUpperCase() == accounts[0].toUpperCase() ? ethUnit.toWei('0', 'ether') : ethUnit.toWei(price, 'ether');

                                    const nftSale = false;

                                    const nftSupply = 1;



                                    contract.methods.mintBitsport(nftName, nftHash, nftPrice, nftSale, nftSupply)

                                        .send({ from: accounts[0], value: nftValue })

                                        .on('receipt', function (result) {



                                            var _token = $("#_token").val().trim();

                                            console.log('result', result);

                                            var nftId = result.events.Transfer.returnValues.tokenId;



                                            $.ajax({

                                                type: "POST",

                                                url: '/store-nft',

                                                data: { 

                                                    _token, 

                                                    name: name, 

                                                    currency: currency, 

                                                    about: 'text', 

                                                    stats: 'text', 

                                                    price: price,

                                                    nftId: nftId

                                                },

                                                success: function (res) {

                                                    alert("NFT IGO created Successfully!");

                                                    location.reload();

                                                },

                                                error: function (error) {}

                                            });

                                        })

                                        .catch((error) => {});

                                })

                                .catch((error) => {});

                        },

                        error: function (error) {  }

                    })

                },

                error: function (error) {  }

            })

        }

    </script>

@endsection



@section('script')

  <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>

  <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

@endsection



@section('script_bottom')

    <script src="{{ asset('js/custome.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

@endsection