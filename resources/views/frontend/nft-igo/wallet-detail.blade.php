@extends('frontend.layouts.nft-master')
@section('title') BitSport &trade; | Peer to Peer competitive eSports platform @endsection
@section('head')
    <meta name="csrf_token"  content="{{ csrf_token() }}" />
@endsection

@section('content')
    <div class="tf-section sc-explore-1">
        <div class="themesflat-container">
            <div class="row" id="nftList"></div>
        </div>
    </div>

    <script>
        var nftIgos = {};
        var selectedSupply = 0;
        var walletId = <?php echo json_encode($walletId); ?>;
        var wlTotalCnts = <?php echo $wlTotalCnts; ?>;   // wishlist total count
        var wlAll = <?php echo $wlAll; ?>;               // wishlist all
        var nftWishlists = getWlStatistics(wlTotalCnts, wlAll);

        async function getWalletNft() {
            const contractABI = await getContractABI();
            const contract = new bsc_web3.eth.Contract(contractABI, nftContactAddress);

            const owner = ethers.utils.getAddress(walletId);
            nftIgos = await contract.methods.getBitsportsByOwner(owner).call();
            console.log('nftIgos', nftIgos);
            if (nftIgos.length) {
                var selectedAddress = localStorage.getItem('account');

                for (let index = 0; index < nftIgos.length; index++) {
                    if (parseInt(nftIgos[index].supply) == 0) continue;

                    var nftIgo = nftIgos[index];
                    var metadata = await $.ajax({ 
                        url: ('https://ipfs.io/ipfs/' +  nftIgo.tokenURI),
                        dataType: "json"
                    });

                    var nftItemName = metadata.name;
                    var nftImageUrl = 'assets/nft/images/nftigo/' + metadata.localUrl;
                    var nftItemUrl = '{{ route("nft-item", ":nftId") }}';
                        nftItemUrl = nftItemUrl.replace(':nftId', nftIgo.tokenId);
                    var nftImageExtension = metadata.localUrl.slice(metadata.localUrl.length - 3);
                    var wishlistCount = nftWishlists[nftIgo.tokenId] ? nftWishlists[nftIgo.tokenId].total : 0
                    var is_wishlist = (wishlistCount > 0 && nftWishlists[nftIgo.tokenId][selectedAddress]) ? 'active' : '';
                    
                    var nftImageElement = ``;
                    if (nftImageExtension == 'mp4') {
                        nftImageElement =   `<video autoplay loop muted playsinline>
                                                <source src="{{ URL::asset('` + nftImageUrl + `') }}" type="video/mp4">
                                            </video>`
                    } else {
                        nftImageElement = `<img src="{{ URL::asset('` + nftImageUrl + `') }}" alt="Image">`
                    }

                    var nftItem =   `<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="` + nftItemUrl + `">`
                                                    + nftImageElement + 
                                                `</a>
                                                <button class="wishlist-button heart ` + is_wishlist + `" name="nft-wishlist-` + nftIgo.tokenId + `">
                                                    <span class="number-like">`+ wishlistCount + `</span>
                                                </button>
                                            </div>
                                            <div class="card-title">
                                                <h5>
                                                    <a href="` + nftItemUrl + `">
                                                        "` + nftItemName + `"
                                                    </a>
                                                </h5>
                                                <div class="tags">eth</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ URL::asset('assets/nft/images/avatar/avt-main.png') }}" alt="Image">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> 
                                                            <a href="#">Bitsport</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Floor Price</span>
                                                    <h5> ` + nftIgo.price / Math.pow(10, 18) + ` ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="button-place-bid" onclick="nftToggle('` + nftIgo.tokenId + `')">
                                                    <a href="#" data-toggle="modal" data-target="#nftModal" class="sc-button style bag fl-button pri-3">
                                                        <span>Send NFT</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                    $('#nftList').append(nftItem);
                }

                initSwiperJs();
            }
        }

        function nftToggle(tokenId) {
            for (let index = 0; index < nftIgos.length; index++) {
                if (nftIgos[index].tokenId == tokenId) {
                    var nftIgo = nftIgos[index];

                    var nftPrice = nftIgo.price / Math.pow(10, 18);
                    $('#nftPrice').text(nftPrice + ' ETH');
                    $('#nftSupply').text('( max ' + nftIgo.supply + ' )');
                    $("#sendNft").attr("onclick","sendNft(event, '" + tokenId + "')");
                    selectedSupply = nftIgo.supply;
                }
            }
        }

        async function sendNft(event, tokenId) {
            event.preventDefault();

            var verify = await verifyNetwork();
            if (verify) {
                const contractABI = await getContractABI();
                const contract = new web3.eth.Contract(contractABI, nftContactAddress);

                ethereum.request({ method: 'eth_requestAccounts' })
                    .then((accounts) => {
                        var receiver = ethers.utils.getAddress($("#receiver").val());
                        var nftId = parseInt(tokenId);
                        var nftCount = parseInt($("#nftCount").val());

                        if (nftCount > selectedSupply) {
                            alert("Please set less amount than max amount");                      
                        } else {
                            contract.methods.send(receiver, nftId, nftCount)
                                .send({ from: accounts[0] })
                                    .on('receipt', function (result) {
                                        $("#nftSuccess").click();
                                    })
                                    .catch((error) => {});
                        }
                    })
                    .catch((error) => { 
                        console.log(error);
                    });
            } else {
                alert("Something went wrong!");
            }
        }

        getWalletNft();
    </script>
@endsection

@section('modal')
    <!-- Modal Popup Bid -->
    <div class="modal fade popup" id="nftSuccessModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3 class="text-center">Minting Completed Successfully.</h3>
                    <p class="text-center">Your Mystery Gamer has been minted to your wallet.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="nftModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3>Send Now</h3>
                    <fieldset>
                        <h4 class="title-infor-account color-popup">Receiver Wallet Address</h4>
                        <input type="text" id="receiver" placeholder="0x1E4f571134.....">
                    </fieldset>
                    <fieldset>
                        <h4 class="title-infor-account color-popup">
                            Token Amount <span id="nftSupply"></span>
                        </h4>
                        <input type="number" id="nftCount">
                    </fieldset>
                    <div class="hr"></div>
                    <a href="#" id="sendNft" class="btn btn-primary">Send</a>
                    <a href="#" id="nftSuccess" class="btn btn-primary" style="display: none;" data-toggle="modal" data-target="#nftSuccessModal" data-dismiss="modal" aria-label="Close"></a>
                </div>
            </div>
        </div>
    </div>
@endsection