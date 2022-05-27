@extends('frontend.layouts.nft-master')
@section('title') BitSport &trade; NFT-IGO | Initial Gamers Offering @endsection
@section('head')
    <meta name="csrf_token"  content="{{ csrf_token() }}" />
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
@endsection

@section('content')
    <section class="flat-title-page style2"> 
        <img class="bgr-gradient gradient1" src="{{ URL::asset('assets/nft/images/backgroup-secsion/bg-gradient1.png') }}" alt=""> 
        <img class="bgr-gradient gradient2" src="{{ URL::asset('assets/nft/images/backgroup-secsion/bg-gradient2.png') }}" alt=""> 
        <img class="bgr-gradient gradient3" src="{{ URL::asset('assets/nft/images/backgroup-secsion/bg-gradient3.png') }}" alt="">
        <div class="shape item-w-16"></div>
        <div class="shape item-w-22"></div>
        <div class="shape item-w-32"></div>
        <div class="shape item-w-48"></div>
        <div class="shape style2 item-w-51"></div>
        <div class="shape style2 item-w-51 position2"></div>
        <div class="shape item-w-68"></div>
        <div class="overlay"></div>
        <div class="swiper-container mainslider home auctions">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="themesflat-container ">
                            <div class="wrap-heading flat-slider flex">
                                <div class="content">
                                    <h2 class="heading">
                                        <span id="text1"></span>
                                        <span id="text2"></span> your
                                    </h2>
                                    <h1 class="heading mb-style">
                                        <span class="tf-text s1">Mysterious Gamer </span>                                          
                                    </h1>
                                    <h1 class="heading">on the MetaVerse</h1>
                                    <p class="sub-heading mg-t-29 mg-bt-44"> More than just NFT's. Mint, power up, earn alongside your favorite gamers in the Metaverse. </p>
                                    <div class="flat-bt-slider flex style2">
                                        <a href="#explore" class="sc-button header-slider style style-1 rocket fl-button pri-1"> 
                                            <span>Mint Now</span> 
                                        </a>
                                        <a href="https://discord.gg/Jfwe82raRY" class="sc-button header-slider style style-1 note fl-button pri-1"> 
                                            <span>Join Discord</span> 
                                        </a>
                                    </div>
                                </div>
                                <div class="image"> 
                                    <img class="img-bg" src="{{ URL::asset('assets/nft/images/backgroup-secsion/img-bg-sliderhome2.png') }}" alt="Image"> 
                                    <video controls autoplay="true" muted="muted" loop>
                                                <source src="{{ URL::asset('assets/nft/images/box-item/mystcom.mp4') }}" type="video/mp4">
                                            </video> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <a id="about"></a>
    <section class="tf-box-icon bg-box-icon-color tf-section">
        <div class="themesflat-container">
            <div class="sc-box-icon-inner">
                <div class="sc-box-icon">
                    <div class="image">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="6.10352e-05" width="56" height="56" rx="16" fill="#5142FC" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M34.9222 26.0179H39.1035C39.5983 26.0179 39.9995 26.3981 39.9995 26.8672V29.8195C39.9937 30.2863 39.5959 30.6634 39.1035 30.6688H35.0182C33.8252 30.684 32.7821 29.9098 32.5115 28.8085C32.376 28.1247 32.5662 27.4192 33.0312 26.881C33.4961 26.3427 34.1883 26.0268 34.9222 26.0179ZM35.1034 29.122H35.4981C36.0047 29.122 36.4154 28.7327 36.4154 28.2525C36.4154 27.7722 36.0047 27.3829 35.4981 27.3829H35.1034C34.8611 27.3802 34.6277 27.4696 34.4554 27.631C34.2831 27.7925 34.1861 28.0127 34.1861 28.2423C34.186 28.7242 34.5951 29.1164 35.1034 29.122Z" fill="#F9F9FA" fill-opacity="0.4" />
                            <path d="M34.9227 24.2788H40C40 20.3154 37.5573 18.0001 33.4187 18.0001H22.5813C18.4427 18.0001 16 20.3154 16 24.2283V32.7718C16 36.6847 18.4427 39.0001 22.5813 39.0001H33.4187C37.5573 39.0001 40 36.6847 40 32.7718V32.4079H34.9227C32.5662 32.4079 30.656 30.5972 30.656 28.3636C30.656 26.13 32.5662 24.3193 34.9227 24.3193V24.2788Z" fill="white" />
                            <path d="M28.4582 24.2789H21.6849C21.1766 24.2734 20.7675 23.8812 20.7676 23.3993C20.7734 22.923 21.1824 22.5398 21.6849 22.5399H28.4582C28.9649 22.5399 29.3756 22.9292 29.3756 23.4094C29.3756 23.8896 28.9649 24.2789 28.4582 24.2789Z" fill="#948BFB" /> 
                        </svg>
                    </div>
                    <h3 class="heading">
                        <a href="#">Mint BitSport NFT-IGO Cards</a>
                    </h3>
                    <p class="content">BitSport NFT IGO (Initial Gamers Offering) is a great way to power up and earn alongside iconic gamers in the MetaVerse. Connect your wallet to mint your favourite gamer's BitSport NFT-IGO Cards.</p>
                </div>
                <div class="sc-box-icon">
                    <div class="image">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="6.10352e-05" width="56" height="56" rx="16" fill="#47A432" />
                            <path d="M23.104 16.0001H19.048C17.368 16.0001 16 17.3801 16 19.0732V23.164C16 24.868 17.368 26.236 19.048 26.236H23.104C24.796 26.236 26.1519 24.868 26.1519 23.164V19.0732C26.1519 17.3801 24.796 16.0001 23.104 16.0001Z" fill="white" />
                            <path d="M23.104 29.7637H19.048C17.368 29.7637 16 31.1329 16 32.8369V36.9277C16 38.6197 17.368 39.9997 19.048 39.9997H23.104C24.796 39.9997 26.1519 38.6197 26.1519 36.9277V32.8369C26.1519 31.1329 24.796 29.7637 23.104 29.7637Z" fill="white" />
                            <path d="M36.9516 16.0001H32.8956C31.2036 16.0001 29.8477 17.3801 29.8477 19.0732V23.164C29.8477 24.868 31.2036 26.236 32.8956 26.236H36.9516C38.6316 26.236 39.9996 24.868 39.9996 23.164V19.0732C39.9996 17.3801 38.6316 16.0001 36.9516 16.0001Z" fill="white" fill-opacity="0.4" />
                            <path d="M36.9516 29.7637H32.8956C31.2036 29.7637 29.8477 31.1329 29.8477 32.8369V36.9277C29.8477 38.6197 31.2036 39.9997 32.8956 39.9997H36.9516C38.6316 39.9997 39.9996 38.6197 39.9996 36.9277V32.8369C39.9996 31.1329 38.6316 29.7637 36.9516 29.7637Z" fill="white" /> 
                        </svg>
                    </div>
                    <h3 class="heading">
                        <a href="#">Earn Infinite Dividends</a>
                    </h3>
                    <p class="content">Earn auto shared dividends and constant rewards on lifetime earnings off your IGO Icons on BitSport, just by holding their NFT-IGO Cards in your wallet. BitSport NFT-IGO Cards are the first ever dividends / rewards backed supercharged NFTs; Now we have reasons to hold NFT's! </p>
                </div>
                <div class="sc-box-icon mg-bt">
                    <div class="image">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="16" fill="#9835FB" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.396 23.8885C19.396 21.1625 21.061 19.3955 23.638 19.3955H32.354C34.94 19.3955 36.605 21.1625 36.605 23.8885V29.1905C36.159 28.8125 34.812 27.8715 34.624 27.7595C33.224 26.9195 31.544 27.2995 30.454 28.7195C30.359 28.8445 28.782 31.1445 28.224 31.4885C28.095 31.5685 27.959 31.6115 27.814 31.6315C27.464 31.6615 27.127 31.4815 26.554 31.0985C26.224 30.8885 25.864 30.6495 25.454 30.4795C23.749 29.7665 22.45 30.9445 21.758 31.7345C21.749 31.7425 19.812 34.1045 19.781 34.1415C19.538 33.5505 19.396 32.8675 19.396 32.1025V23.8885ZM38 23.8885C38 20.3625 35.731 18.0005 32.354 18.0005H23.638C20.271 18.0005 18 20.3625 18 23.8885V32.1025C18 33.6745 18.447 35.0135 19.238 36.0095C19.247 36.0185 19.247 36.0285 19.256 36.0285C20.043 37.0135 21.166 37.6665 22.519 37.8995C22.531 37.9015 22.543 37.9035 22.556 37.9055C22.903 37.9625 23.262 38.0005 23.638 38.0005H32.354C32.535 38.0005 32.7 37.9665 32.874 37.9535C33.078 37.9365 33.289 37.9325 33.483 37.8985C33.74 37.8545 33.976 37.7775 34.215 37.7035C34.319 37.6705 34.43 37.6505 34.53 37.6125C34.773 37.5205 34.996 37.4015 35.217 37.2795C35.297 37.2355 35.383 37.1995 35.461 37.1505C35.678 37.0145 35.875 36.8555 36.068 36.6895C36.132 36.6345 36.201 36.5845 36.262 36.5265C36.45 36.3475 36.616 36.1505 36.775 35.9445C36.824 35.8795 36.876 35.8195 36.923 35.7525C37.076 35.5345 37.208 35.2995 37.33 35.0545C37.364 34.9835 37.4 34.9145 37.433 34.8425C37.546 34.5855 37.64 34.3165 37.72 34.0345C37.741 33.9585 37.762 33.8835 37.78 33.8055C37.851 33.5145 37.902 33.2145 37.935 32.9005C37.939 32.8625 37.95 32.8275 37.954 32.7895C37.961 32.7045 37.96 32.6195 37.965 32.5345C37.973 32.3885 38 32.2535 38 32.1025V23.8885Z" fill="white" />
                            <path d="M24.5048 27.0001C25.8663 27.0001 27 25.87 27 24.5151C27 23.8356 26.7151 23.2132 26.2607 22.7615C25.8081 22.2935 25.1764 22.0001 24.4787 22.0001C23.1085 22.0001 22 23.1041 22 24.4687C22 24.6492 22.0213 24.8239 22.0591 24.9937C22.2878 26.1257 23.3081 27.0001 24.5048 27.0001Z" fill="white" fill-opacity="0.4" /> 
                        </svg>
                    </div>
                    <h3 class="heading">
                        <a href="#">Powerup your Gamers</a>
                    </h3>
                    <p class="content">Your NFT-IGO gamers are your weapons of victory in the Metaverse, encourage and cheer your gamers to more wins on BitSport's main DApp. Every victory increases the worth of gamers’ NFT-IGO Cards. </p>
                </div>
                <div class="sc-box-icon">
                    <div class="image">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="16" fill="#DF4949" />
                            <rect x="21" y="22" width="13" height="4" fill="white" fill-opacity="0.4" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.125 16H31.8375C35.225 16 37.9625 17.284 38 20.5478V38.7631C38 38.9671 37.95 39.1711 37.85 39.3511C37.6875 39.6391 37.4125 39.8551 37.075 39.9511C36.75 40.0471 36.3875 39.9991 36.0875 39.8311L27.9875 35.9432L19.875 39.8311C19.6888 39.9259 19.475 39.9871 19.2625 39.9871C18.5625 39.9871 18 39.4351 18 38.7631V20.5478C18 17.284 20.75 16 24.125 16ZM23.2753 25.1437H32.6878C33.2253 25.1437 33.6628 24.7225 33.6628 24.1958C33.6628 23.6678 33.2253 23.2478 32.6878 23.2478H23.2753C22.7378 23.2478 22.3003 23.6678 22.3003 24.1958C22.3003 24.7225 22.7378 25.1437 23.2753 25.1437Z" fill="white" /> 
                        </svg>
                    </div>
                    <h3 class="heading">
                        <a href="#">Exclusive Access to your Icons</a>
                    </h3>
                    <p class="content">Get exclusive access pass to events, exhibitions and tournaments of NFT-IGO icons you hold. Unlock early access to rewards and drops from your Icons.</p>
                </div>
            </div>
        </div>
    </section>
    <a id="explore"></a>
    <div class="tf-section sc-explore-1">
        <div class="themesflat-container">
            <div class="row" id="nftList"></div>
        </div>
    </div>


     <a id="roadmap"></a>
   <div class="col-md-12">
                    <h2 class="tf-title-heading ct style-2 fs-30 mg-bt-10">
                        RoadMap
                    </h2>
                    <h5 class="sub-title help-center mg-bt-32 ">
                        Follow the Journey
                    </h5> 
                </div>

<div class="form-create-item">
                                 
                                <div class="flat-tabs tab-create-item">
                                   
                                    <ul class="menu-tab tabs">
                                        <li class="tablinks active"><span class="icon-fl-tag"></span>Phase 1</li>
                                        <li class="tablinks"><span class="icon-fl-clock"></span>Phase 2</li>
                                        <li class="tablinks"><span class="icon-fl-clock"></span>Phase 3</li>
                                    </ul>
                                    <div class="content-tab">
                                        <div class="content-inner">
                                                  <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Community Building</a></h3>
                                        <div class="status">Launch of our Discord Campaigns & NFT-IGO Platform</span></div>
                                        <div class="time">Mon March 21, 2022 to Fri 25 March, 2022 </div>
                                    </div>
                                </div>
                                <div class="button-active icon icon-1"></div>
                            </div>

                            

                            <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Giveaway / Campaigns</a></h3>
                                        <div class="status">Organically Grow the community with Campaigns & Giveaways</span></div>
                                        <div class="time">Mon March 21, 2022 to Sat 30 April, 2022</div>
                                    </div>
                                </div>
                                <div class="button-active icon icon-1"></div>
                            </div>

                            <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">7000 Mystery Gamer Launch</a></h3>
                                        <div class="status">Unleashing of 7,000 BitSport Mystery NFT-IGO Cards collection</span></div>
                                        <div class="time">Mon March 21, 2022</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                            <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">UnknownCarl Card Rollout</a></h3>
                                        <div class="status">Rolling out of “Unknown Carl’s” NFT-IGO Cards collections</span></div>
                                        <div class="time">March 21 2022</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                             <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Announcing Strategic / Influencer partnerships</a></h3>
                                        <div class="status">Strategic NFT-IGO Cards partnership with Gaming Influencers, Recording Artists, Musicians, and a social network cumulative reach of over 10 Million onboard organically.</span></div>
                                        <div class="time">March 30 2022</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>


                                        </div>
                                        <div class="content-inner">
                                                
                                               

                               <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Mystery IGO Card Reveal</a></h3>
                                        <div class="status">Revealing of the 7,000 BitSport Mystery NFT-IGO Cards Collection</span></div>
                                        <div class="time">May 5 2022</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                             <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">NFT-IGO Access Tournaments</a></h3>
                                        <div class="status">Global “ NFT-IGO Cards access tournaments” in the Meterverse for gamers</span></div>
                                        <div class="time">May 15 2022</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                             <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Grand Raffle Draw</a></h3>
                                        <div class="status">A Grand Raffle draw for Gold & Platinum Card Holders for an “All expense Paid Dubai trip to the BitSport Lounge</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                             <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Dubai Non-Fungible Tournaments</a></h3>
                                        <div class="status">Physical tournaments in Dubai with NFT-IGO Cards as tickets for spectators.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                            <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">Influencer Insta Duel</a></h3>
                                        <div class="status">Insta-Duel collaborations organized by BitSport with top gaming influencers & recording artists via their NFT-IGO Cards while leveraging on their audience.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                            <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">NFT-IGO Trophy Contest</a></h3>
                                        <div class="status">The BitSports’ “NFT-IGO Trophy Contest” roll-out via P2P-Challenge leaderboard for gamers.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>


                                        </div>
                                        <div class="content-inner">

                                              <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#l">BitSport Foundation Programme Launch </a></h3>
                                        <div class="status">Charity for over 10,000 gamers in Africa & India (Building World Class Gaming HUB in Africa and India)</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                              <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">BitSport Developer Program Foundation</a></h3>
                                        <div class="status">BitSport will launch it's bespoke Developers program Foundation.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                              <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">BitSport In-App Game MarketPlace</a></h3>
                                        <div class="status">BitSport will release an updated Mobile App  & In-App Game Marketplace for collectibles.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                              <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">BitSport Collectibles Roll-Out </a></h3>
                                        <div class="status">Collectibles will be officially rolled out on the BitSport Mobile App and DApp.</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>

                              <div class="sc-card-activity style1">
                                <div class="content">
                                    
                                    <div class="infor">
                                        <h3> <a href="#">PlayChain Test-net Launch</a></h3>
                                        <div class="status">BitSport will launch PlayChain protocol testnet</span></div>
                                        <div class="time">TBA</div>
                                    </div>
                                </div>

                                <div class="button-active icon icon-1"></div>
                            </div>
                                               
                                        </div>
                                    </div>
                                </div>
                             </div>

            <section class="tf-section top-seller home4 s2 mobie-style">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="tf-title style2 mb-25 text-left">
                                As seen Trending on:</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="tf-box">
                                <div class="box-item">
                                    <div class="sc-author-box style-3 pd-0">
                                        <div class="author-avatar">
                                            <a href="https://nftcalendar.io/event/premium-unknowncarl-bitsport-nft-igo/">
                                                <img src="https://i.imgur.com/9bkFpmB.png" alt="Image" class="avatar">
                                            </a>
                                            <div class="badge"><i class="ripple"></i></div>
                                        </div>
                                        <div class="author-infor">
                                            <h5 class="fs-16"><a href="https://nftcalendar.io/event/premium-unknowncarl-bitsport-nft-igo/">NFT Calendar</a></h5>
                                            <span class="price">Trending</span>
                                        </div>
                                    </div>
                                </div>   
                                <div class="box-item pl-17">
                                    <div class="sc-author-box style-3 pd-0">
                                        <div class="author-avatar">
                                            <a href="#">
                                                <img src="https://i.imgur.com/klAxvgR.jpg" alt="Image" class="avatar">
                                            </a>
                                            <div class="badge"><i class="ripple"></i></div>
                                        </div>
                                       <div class="author-infor">
                                            <h5 class="fs-16"><a href="#">Yahoo Finance!</a></h5>
                                            <span class="price">Trending</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item pl-34">
                                    <div class="sc-author-box style-3 pd-0">
                                        <div class="author-avatar">
                                            <a href="#">
                                                <img src="https://i.imgur.com/z9zu6s4.png" alt="Image" class="avatar">
                                            </a>
                                            <div class="badge"><i class="ripple"></i></div>
                                        </div>
                                      <div class="author-infor">
                                            <h5 class="fs-16"><a href="#">Coin Telegraph</a></h5>
                                            <span class="price">Trending</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item pl-51">
                                    <div class="sc-author-box style-3 pd-0">
                                        <div class="author-avatar">
                                            <a href="#">
                                                <img src="https://i.imgur.com/ytAgEYA.png" alt="Image" class="avatar">
                                            </a>
                                            <div class="badge"><i class="ripple"></i></div>
                                        </div>
                                      <div class="author-infor">
                                            <h5 class="fs-16"><a href="#">Forbes</a></h5>
                                            <span class="price">Trending</span>
                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>


                    </div>
                </div>     
            </section>

    <a id="faq"></a>
   <section class="tf-section wrap-accordion">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="tf-title-heading ct style-2 fs-30 mg-bt-10">
                        Frequently Asked Questions
                    </h2>
                    <h5 class="sub-title help-center mg-bt-32 ">
                        Learn more about BitSport IGO-NFT via some Frequently Asked Questions
                    </h5> 
                </div>
                <div class="col-md-12">
                    <div class="flat-accordion2">
                        <div class="flat-toggle2">
                            <h6 class="toggle-title active">What is BitSport NFT IGO?</h6>
                            <div class="toggle-content">
                                <p>BitSport NFT-IGO is a first of it's kind super charged NFT's attributed to Iconic Gamers on BitSport. Gamers can decide to issue different editions of their NFT-IGO on BitSport with preset dividends and rewards. By minting a Gamers NFT-IGO, you are supporting and super-charging thier gaming career which will in turn boost their earning potentials on BitSport, wallets holding the gamers NFT-IGO will receive a share of the NFT-IGO's edition dividends automatically on every earnings for the gamers lifetime on BitSport. </p>
                            </div>
                        </div>
                        <div class="flat-toggle2">
                            <h6 class="toggle-title">How do I mint BitSport NFT-IGO?</h6>
                            <div class="toggle-content">
                                <p>You will need a MetaMask wallet and some ETH to mint BitSport NFT-IGO. To download Meta mask visit 
                                    <a href="https://metamask.io">MetaMask.io</a>
                                </p>
                            </div>
                        </div>
                        <div class="flat-toggle2">
                            <h6 class="toggle-title">How can I get ETH (Ether) ?</h6>
                            <div class="toggle-content">
                                <p>First, you must purchase Ethereum (ETH) through an online exchange. We recommend using Coinbase or Binance. Once you have purchased ETH you will need to transfer it to your MetaMask wallet to Mint BitSport NFT-IGO</p>
                            </div>
                        </div>
                        <div class="flat-toggle2">
                            <h6 class="toggle-title">How Long until I receive my BitSport NFT-IGO ?</h6>
                            <div class="toggle-content">
                                <p>Depending on the amount of transactions pending on the blockchain, it can take few seconds or up to 48 hours for the NFT to land in your wallet. This is totally normal, once the transaction has been confirmed on the Blockchain, BitSPort NFT-IGO will automatically arrive in your wallet. Thank you for being patient!</p>
                            </div>
                        </div>
                        <div class="flat-toggle2">
                            <h6 class="toggle-title">After Minting what's next?</h6>
                            <div class="toggle-content">
                                <p>BitSport NFT-IGO is unlike any other NFT's, it's a super charged NFT which reward/incentivizes it's holders with BFI and BITP dividends based on performance from thier mysterious or favorite gamer in the Metaverse. Player reveal will happen according to the roadmap and dividend stage will be activated following reveal while revealed gamer starts their earning journey into the MetaVerse.</p>
                            </div>
                        </div>
                        <div class="flat-toggle2">
                            <h6 class="toggle-title">What is BFI and BITP ?</h6>
                            <div class="toggle-content">
                                <p>BFI and BITP are the governance and in-game cryptocurrencies for the BitSport gaming ecosystem.</p>
                            </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <script type="text/javascript">
        const elts = {
            text1: document.getElementById("text1"),
            text2: document.getElementById("text2")
        };

        const texts = [
            "Meet",
            "Mint",
        ];

        const morphTime = 1;
        const cooldownTime = 0.25;

        let textIndex = texts.length - 1;
        let time = new Date();
        let morph = 0;
        let cooldown = cooldownTime;

        elts.text1.textContent = texts[textIndex % texts.length];
        elts.text2.textContent = texts[(textIndex + 1) % texts.length];

        function doMorph() {
            morph -= cooldown;
            cooldown = 0;

            let fraction = morph / morphTime;

            if (fraction > 1) {
                cooldown = cooldownTime;
                fraction = 1;
            }

            setMorph(fraction);
        }

        function setMorph(fraction) {
            elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
            elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

            fraction = 1 - fraction;
            elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
            elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

            elts.text1.textContent = texts[textIndex % texts.length];
            elts.text2.textContent = texts[(textIndex + 1) % texts.length];
        }

        function doCooldown() {
            morph = 0;

            elts.text2.style.filter = "";
            elts.text2.style.opacity = "100%";

            elts.text1.style.filter = "";
            elts.text1.style.opacity = "0%";
        }

        function animate() {
            requestAnimationFrame(animate);

            let newTime = new Date();
            let shouldIncrementIndex = cooldown > 0;
            let dt = (newTime - time) / 1000;
            time = newTime;

            cooldown -= dt;

            if (cooldown <= 0) {
                if (shouldIncrementIndex) {
                    textIndex++;
                }

                doMorph();
            } else {
                doCooldown();
            }
        }

        animate();
    </script>

    <script type="text/javascript">
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