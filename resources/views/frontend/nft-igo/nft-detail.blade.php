@extends('frontend.layouts.nft-master')
@section('title') BitSport NFT-IGO | SuperCharged Rewards / Dividends backed GameFi NFT @endsection
@section('head')
    <meta name="csrf_token"  content="{{ csrf_token() }}" />
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
@endsection

@section('content')
    <!-- title page -->
    <section class="flat-title-page inner">
        <div class="overlay"></div>
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading mg-bt-12">
                        <h1 class="heading text-center">NFT IGO</h1>
                    </div>
                    <div class="breadcrumbs style2">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Explore</a></li>
                            <li>BitSport NFT-IGO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>                    
    </section>

    <!-- tf item details -->
    <div class="tf-section tf-item-details">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="content-left">
                        <div class="media" id="nftImage"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="content-right">
                        <div class="sc-item-details">
                            <h2 id="nftName" class="style2"></h2>
                            <div class="meta-item">
                                <div class="left">
                                    <span class="viewed eye">
                                        <?php echo count($viewTotalCnts) ? $viewTotalCnts[0]->count : 0 ?>
                                    </span>
                                    <span class="liked heart wishlist-button mg-l-8" id="selected-wishlist">
                                        <span class="number-like">100</span>
                                    </span>
                                </div>
                              <!--from https://www.buttons.social--><script>document.write('<a href="https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(document.URL)+'"target="_blank"title="Facebook"style="display:inline-block;vertical-align:middle;width:2em;height:2em;border-radius:4%;background:#3b5998;"><svg style="display:block;fill:#fff;height:44%;margin:28% auto;" viewBox="0 -256 864 1664"><path transform="matrix(1,0,0,-1,-95,1280)" d="M 959,1524 V 1260 H 802 q -86,0 -116,-36 -30,-36 -30,-108 V 927 H 949 L 910,631 H 656 V -128 H 350 V 631 H 95 v 296 h 255 v 218 q 0,186 104,288.5 104,102.5 277,102.5 147,0 228,-12 z" /></svg></a> <a href="https://twitter.com/share?url='+encodeURIComponent(document.URL)+'&text='+encodeURIComponent(document.title)+'"target="_blank"title="Twitter"style="display:inline-block;vertical-align:middle;width:2em;height:2em;border-radius:4%;background:#1b95e0;"><svg style="display:block;fill:#fff;height:36%;margin:32% auto;" viewBox="0 -256 1576 1280"><path transform="matrix(1,0,0,-1,-44,1024)" d="m 1620,1128 q -67,-98 -162,-167 1,-14 1,-42 0,-130 -38,-259.5 Q 1383,530 1305.5,411 1228,292 1121,200.5 1014,109 863,54.5 712,0 540,0 269,0 44,145 q 35,-4 78,-4 225,0 401,138 -105,2 -188,64.5 -83,62.5 -114,159.5 33,-5 61,-5 43,0 85,11 Q 255,532 181.5,620.5 108,709 108,826 v 4 q 68,-38 146,-41 -66,44 -105,115 -39,71 -39,154 0,88 44,163 Q 275,1072 448.5,982.5 622,893 820,883 q -8,38 -8,74 0,134 94.5,228.5 94.5,94.5 228.5,94.5 140,0 236,-102 109,21 205,78 -37,-115 -142,-178 93,10 186,50 z" /></svg></a> <a href="whatsapp://send?text='+encodeURIComponent(document.URL)+'"title="WhatsApp"style="display:inline-block;vertical-align:middle;width:2em;height:2em;border-radius:4%;background:#43d854;"><svg style="display:block;fill:#fff;height:44%;margin:28% auto;" viewBox="0 -256 1536 1548"><path transform="matrix(1,0,0,-1,0,1158)" d="m 985,562 q 13,0 98,-44 84,-44 89,-53 2,-5 2,-15 0,-33 -17,-76 -16,-39 -71,-65.5 -55,-26.5 -102,-26.5 -57,0 -190,62 -98,45 -170,118 -72,73 -148,185 -72,107 -71,194 v 8 q 3,91 74,158 24,22 52,22 6,0 18,-1 12,-2 19,-2 19,0 26.5,-6 7.5,-7 15.5,-28 8,-20 33,-88 25,-68 25,-75 0,-21 -34.5,-57.5 Q 599,735 599,725 q 0,-7 5,-15 34,-73 102,-137 56,-53 151,-101 12,-7 22,-7 15,0 54,48.5 39,48.5 52,48.5 z M 782,32 q 127,0 244,50 116,50 200,134 84,84 134,200.5 50,116.5 50,243.5 0,127 -50,243.5 -50,116.5 -134,200.5 -84,84 -200,134 -117,50 -244,50 -127,0 -243.5,-50 Q 422,1188 338,1104 254,1020 204,903.5 154,787 154,660 154,457 274,292 L 195,59 437,136 Q 595,32 782,32 z m 0,1382 q 153,0 293,-60 139,-60 240,-161 101,-101 161,-240.5 Q 1536,813 1536,660 1536,507 1476,367.5 1416,228 1315,127 1214,26 1075,-34 935,-94 782,-94 587,-94 417,0 L 0,-134 136,271 Q 28,449 28,660 q 0,153 60,292.5 60,139.5 161,240.5 101,101 240.5,161 139.5,60 292.5,60 z" /></svg></a> <a href="https://telegram.me/share/url?url='+encodeURIComponent(document.URL)+'&text='+encodeURIComponent(document.title)+'"target="_blank"title="Telegram"style="display:inline-block;vertical-align:middle;width:2em;height:2em;border-radius:4%;background:#39a7da;"><svg style="display:block;fill:#fff;height:42%;margin:29% auto;" viewBox="0 -256 1150 817.4"><path d="m 824.4,511.7 147,-693 c 6,-29.3 3,-50.3 -10,-63 -13,-12.7 -31,-15 -52,-7 L 45.45,81.65 c -19.3,7.3 -32.5,15.7 -39.504,25.05 -7,9.3 -7.8,18.2 -2.5,26.5 5.3,8.3 16.004,14.8 32.004,19.5 l 220.95,69 513,-323 c 14,-9.3 25,-11.3 32,-6 5,3.3 3,8.25 -4,14.95 l -415,375.05 0,0 0,0 -16,228 c 15.3,0 30.3,-7 45,-22 l 108,-104 224,165 c 43,24 70,11 81,-38 z" /></svg></a> <a href="mailto:?body='+encodeURIComponent(document.URL)+'%0A%0A'+encodeURIComponent(document.querySelector('meta[name=description]')?document.querySelector('meta[name=description]').content:'')+'&subject='+encodeURIComponent(document.title)+'"title="Mail"style="display:inline-block;vertical-align:middle;width:2em;height:2em;border-radius:4%;background:#555;"><svg style="display:block;fill:#fff;height:36%;margin:32% auto;" viewBox="0 -256 1792 1408"><path transform="matrix(1,0,0,-1,0,1024)" d="M 1792,826 V 32 q 0,-66 -47,-113 -47,-47 -113,-47 H 160 Q 94,-128 47,-81 0,-34 0,32 V 826 Q 44,777 101,739 463,493 598,394 655,352 690.5,328.5 726,305 785,280.5 844,256 895,256 h 1 1 q 51,0 110,24.5 59,24.5 94.5,48 35.5,23.5 92.5,65.5 170,123 498,345 57,39 100,87 z m 0,294 q 0,-79 -49,-151 -49,-72 -122,-123 -376,-261 -468,-325 -10,-7 -42.5,-30.5 -32.5,-23.5 -54,-38 Q 1035,438 1004.5,420 974,402 947,393 q -27,-9 -50,-9 h -1 -1 q -23,0 -50,9 -27,9 -57.5,27 -30.5,18 -52,32.5 -21.5,14.5 -54,38 Q 649,514 639,521 548,585 377,703.5 206,822 172,846 110,888 55,961.5 0,1035 0,1098 q 0,78 41.5,130 41.5,52 118.5,52 h 1472 q 65,0 112.5,-47 47.5,-47 47.5,-113 z" /></svg></a>');</script><!--end buttons.social-->
                            </div>
                            <div class="client-infor sc-card-product">
                                <div class="meta-info">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ URL::asset('assets/nft/images/avatar/avt-main.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span>Created By</span>
                                            <h6>
                                                <a href="author02.html">BitSport</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p id="tokenDescription"><?php echo $nftigo->description; ?></p>
                            <div class="meta-item-details style2">
                                <div class="item meta-price">
                                    <span class="heading">Mint Price</span>
                                    <div class="price">
                                        <div class="price-box">
                                            <h5 id="nftPrice"></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item count-down">
                                    <span class="heading style-2">Mint Ends</span>
                                    <span class="js-countdown" data-timer="416400" data-labels=" :  ,  : , : , "></span>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#nftModal" id="selectedNft" class="sc-button loadmore style bag fl-button pri-3">
                                <span>Mint Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /tf item details -->

    <div class="tf-section sc-explore-1">
        <div class="themesflat-container">
            <div class="row" id="nftList"></div>
        </div>
    </div>

    <script>
        var nftIgos = {};
        var selectedNftPrice = 0;
        var wlTotalCnts = <?php echo $wlTotalCnts; ?>;   // wishlist total count
        var wlAll = <?php echo $wlAll; ?>;               // wishlist all
        var nftWishlists = getWlStatistics(wlTotalCnts, wlAll);

        async function getNftAll() {
            const contractABI = await getContractABI();
            const contract = new bsc_web3.eth.Contract(contractABI, nftContactAddress);

            nftIgos = await contract.methods.getBitsports().call();
            console.log("nftIgos", nftIgos);
            if (nftIgos.length) {
                var selectedAddress = localStorage.getItem('account');

                for (let index = 0; index < nftIgos.length; index++) {
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
                        nftImageElement =   `<video controls autoplay="true" muted="muted" loop>
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
                                                        <span>Mint Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                    $('#nftList').append(nftItem);
                }
            }

            initSwiperJs();
        }

        async function getSelectedNft() {
            const contractABI = await getContractABI();
            const contract = new bsc_web3.eth.Contract(contractABI, nftContactAddress);

            var nftIgoTotalCount = 0;
            var nftIgoCurrentCount = 0;

            var tokenId = <?php echo $nftigo->nftId; ?>;
            var nftIgo = await contract.methods.getBitsport(parseInt(tokenId)).call();
            if (nftIgo.length) {
                var metadata = await $.ajax({ 
                    url: ('https://ipfs.io/ipfs/' +  nftIgo.tokenURI),
                    dataType: "json"
                });

                var nftItemName = metadata.name;
                var nftImageUrl = 'assets/nft/images/nftigo/' + metadata.localUrl;
                var nftItemUrl = '{{ route("nft-item", ":nftId") }}';
                    nftItemUrl = nftItemUrl.replace(':nftId', nftIgo.tokenId);
                var nftImageExtension = metadata.localUrl.slice(metadata.localUrl.length - 3);
                var selectedAddress = localStorage.getItem('account');
                var wishlistCount = nftWishlists[nftIgo.tokenId] ? nftWishlists[nftIgo.tokenId].total : 0
                var is_wishlist = (wishlistCount > 0 && nftWishlists[nftIgo.tokenId][selectedAddress]) ? 'active' : '';

                var nftImageElement = ``;
                if (nftImageExtension == 'mp4') {
                    nftImageElement =   `<video controls autoplay="true" muted="muted" loop style="width: 100%;">
                                            <source src="{{ URL::asset('` + nftImageUrl + `') }}" type="video/mp4">
                                        </video>`
                } else {
                    nftImageElement = `<img src="{{ URL::asset('` + nftImageUrl + `') }}" alt="Image">`
                }

                $('#nftImage').append(nftImageElement);
                document.getElementById('nftName').innerText = `“` + nftItemName + `”`;
                document.getElementById('nftPrice').innerHTML =  nftIgo.price / Math.pow(10, 18) + ` ETH`;
                $("#selectedNft").attr("onclick","nftToggle('" + nftIgo.tokenId + "')");

                var selectedNftItem = $("#selected-wishlist");
                selectedNftItem.attr("name", "nft-wishlist-" + nftIgo.tokenId);
                selectedNftItem.addClass(is_wishlist);
                selectedNftItem.find("span").text(wishlistCount);
            }
        }

        function setNftView() {
            ethereum.request({ method: 'eth_requestAccounts' })
                .then((accounts) => {
                    var _token = $("#_token").val().trim();
                    var nftId = <?php echo $nftigo->nftId; ?>;
                    var walletAddress = accounts[0];
                    $.ajax({
                        type: "POST",
                        url: '/nft/view',
                        data: { 
                            _token,
                            nftId,
                            walletAddress
                        },
                        success: function () {},
                        error: function () {}
                    });
                })
                .catch((error) => { 
                    console.log(error);
                });    
        }

        function nftToggle(tokenId) {
            for (let index = 0; index < nftIgos.length; index++) {
                if (nftIgos[index].tokenId == tokenId) {
                    var nftIgo = nftIgos[index];

                    selectedNftPrice = nftIgo.price / Math.pow(10, 18);
                    $('#nftPrice').text(selectedNftPrice + ' ETH');
                    $('#nftSupply').text(nftIgo.supply + ' available');
                    $('#nftTotalPrice').text(selectedNftPrice + ' ETH');
                    $("#nftCount").attr("onchange","setNftCount(event, '" + tokenId + "')");
                    $("#buyNft").attr("onclick","buyNft(event, '" + tokenId + "')");
                }                
            }
        }

        function setNftCount(event, tokenId) {
            var nftCount = event.currentTarget.value;
            $('#nftTotalPrice').text((selectedNftPrice * nftCount).toFixed(2) + ' ETH');
        }

        async function buyNft(event, tokenId) {
            event.preventDefault();

            var verify = await verifyNetwork();
            if (verify) {
                const contractABI = await getContractABI();
                const contract = new web3.eth.Contract(contractABI, nftContactAddress);

                var nftCount = parseInt($("#nftCount").val());
                var nftTotalPrice = (selectedNftPrice * nftCount).toFixed(2);
                ethereum.request({ method: 'eth_requestAccounts' })
                    .then((accounts) => {
                        var nftValue = ethUnit.toWei(nftTotalPrice, 'ether');
                        var nftId = parseInt(tokenId);
                        contract.methods.buy(nftId, nftCount)
                            .send({ from: accounts[0], value: nftValue })
                                .on('receipt', function (result) {
                                    $("#nftSuccess").click();
                                })
                                .catch((error) => {
                                    alert(error.message);
                                    console.log(error);
                                });
                    })
                    .catch((error) => { 
                        console.log(error);
                    });
            }
        }

        getNftAll();
        getSelectedNft();
        setNftView();
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
                    <h3>Mint Now</h3>
                    <p class="text-center">
                        Current Mint price is <span id="nftPrice" class="price color-popup"></span>
                    </p>
                    <p>
                        Enter quantity. <span id="nftSupply" class="color-popup"></span>
                    </p>
                    <input type="number" id="nftCount" class="form-control quantity" value="1">
                    <div class="hr"></div>
                    <div class="d-flex justify-content-between">
                        <p> Total Minting Amount:</p>
                        <p id="nftTotalPrice" class="text-right price color-popup"></p>
                    </div>
                    <a href="#" id="buyNft" class="btn btn-primary">Mint</a>
                    <a href="#" id="nftSuccess" class="btn btn-primary" style="display: none;" data-toggle="modal" data-target="#nftSuccessModal" data-dismiss="modal" aria-label="Close"></a>
                </div>
            </div>
        </div>
    </div>
@endsection