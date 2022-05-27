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
                <div class="col-md-12 ">
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
                            <form onsubmit="mintNftIgo(event)" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label> 
                                            <input type="text" class="form-control" placeholder="NFT IGO Name" name="name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="image" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Price</label> 
                                            <input type="text" class="form-control" placeholder="0.15" name="price" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Total Supply</label> 
                                            <input type="number" class="form-control" name="supply" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dividends</label> 
                                            <input type="number" class="form-control" name="dividend" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>End Date</label> 
                                            <input type="text" id="endDate" class="form-control" placeholder="End Date" name="endDate" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Description</label> 
                                            <textarea type="text" class="form-control" placeholder="Description" name="description" style="height: 200px;" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue">Submit</button>
                                    <a class="btn default" href="{{ route('admin-nftigo.index') }}">Cancel</a>
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
        async function mintNftIgo(event) {
            event.preventDefault();

            var name                    = event.target.elements.name.value;
            var image                   = event.target.elements.image.files[0];
            var price                   = event.target.elements.price.value;
            var supply                  = event.target.elements.supply.value;
            var dividend                = event.target.elements.dividend.value;
            var endDate                 = event.target.elements.endDate.value;
            var description             = event.target.elements.description.value;

            // var name                    = "Name 1";
            // var image                   = "Image";
            // var price                   = 0.15;
            // var supply                  = 1000;
            // var dividend                = 10;
            // var endDate                 = '2022-02-25 14:45:52';
            // var description             = "description";

            if (!name || !image || !price || !supply || !dividend || !endDate || !description) {
                alert('Please enter everything correctly');
                return;
            }

            if (!window.ethereum || !window.ethereum.selectedAddress) {
                alert("Please connect Metamask before minting");
                return;
            }

            var verify = await verifyNetwork();
            if (verify) {
                const contractABI = await getContractABI();
                const contract = new web3.eth.Contract(contractABI, nftContactAddress);

                var formData = new FormData();
                formData.append('file', image);
                formData.append('_token', $("#_token").val().trim());

                $.ajax({
                    type: "POST",
                    url: '/upload-nftigo',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        var localUrl = response;
                        console.log(localUrl, 'localUrl');
                        if (localUrl.status) {

                            formData = new FormData();
                            formData.append('file', image);
                            $.ajax({
                                type: 'POST',
                                url: "https://ipfs.infura.io:5001/api/v0/add",
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (ipfsUrl) {
                                    console.log(ipfsUrl, 'ipfsUrl');

                                    var imgData = {
                                        ipfsUrl: ipfsUrl.Hash,
                                        localUrl: localUrl.fileName,
                                        name: name
                                    }
                                    formData = new FormData();
                                    formData.append('file', JSON.stringify(imgData));
                                    $.ajax({
                                        type: 'POST',
                                        url: "https://ipfs.infura.io:5001/api/v0/add",
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                        success: function (metadata) {
                                            console.log('metadata', metadata);

                                            ethereum.request({ method: 'eth_requestAccounts' })
                                                .then((accounts) => {
                                                    const nftHash = metadata.Hash;
                                                    // const nftHash = "QmctoFdK74ADi8dLY6VBsPihWiz49J8erHHkDFk3Gy2Ruz";
                                                    const nftPrice = ethUnit.toWei(price, 'ether');
                                                    const nftSupply = parseInt(supply);
                                                    contract.methods.mint(nftHash, nftPrice, nftSupply)
                                                        .send({ from: accounts[0] })
                                                        .on('receipt', function (result) {
                                                            console.log(result);

                                                            var _token = $("#_token").val().trim();
                                                            var nftId = result.events.TransferSingle.returnValues.id;

                                                            $.ajax({
                                                                type: "POST",
                                                                url: '/store-nftigo',
                                                                data: { 
                                                                    _token, 
                                                                    name, 
                                                                    price, 
                                                                    supply, 
                                                                    dividend, 
                                                                    endDate, 
                                                                    description, 
                                                                    nftId
                                                                },
                                                                success: function (res) {
                                                                    alert("NFT IGO created Successfully!");
                                                                    location.reload();
                                                                },
                                                                error: function (data) {},
                                                            });
                                                        })
                                                        .catch((error) => {
                                                            console.log(error);
                                                        });
                                                }).catch((error) => {
                                                    if (error.code === 4001) {
                                                        alert('Please connect to MetaMask.');
                                                    } else {
                                                        alert(error);
                                                    }
                                                });
                                        },
                                        error: function (error) {  }
                                    })  
                                },
                                error: function (error) {  }
                            })   
                        } else {
                            alert("Server Error");                            
                        }
                    },
                    error: function () {},
                });
            } else {
                alert("Something went wrong");
            }
        }
    </script>
@endsection

@section('script')
  <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
@endsection

@section('script_bottom')
    <script>
        $('#endDate').datetimepicker({
            use24hours: true,
            format: 'yyyy-mm-dd hh:ii:ss'
        });
    </script>
@endsection