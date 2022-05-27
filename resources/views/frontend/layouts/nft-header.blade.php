<header id="header_main" class="header_1 js-header">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">                              
                <div id="site-header-inner"> 
                    <div class="wrap-box flex">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="https://dapp.bitsport.gg/nft/explore/" rel="home" class="main-logo">
                                    <img id="logo_header" src="{{ URL::asset('assets1/images/football/logo.png') }}" alt="nft-gaming" width="133" height="56"
                                        data-retina="{{ URL::asset('assets1/images/football/logo.png') }}" data-width="133"
                                        data-height="56">
                                </a>
                            </div>
                        </div>
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="https://dapp.bitsport.gg/nft/explore/">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="https://dapp.bitsport.gg">DApp</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="ttps://dapp.bitsport.gg/nft/explore/#faq">FAQ</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="https://dapp.bitsport.gg/nft/explore/#about">About NFT-IGO</a>
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->   
                        <div class="flat-search-btn flex">
                            <div class="sc-btn-top mg-r-12 popup-user" id="site-header"></div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function configMetamask() {
        if (isMobileDevice() && !window.ethereum) {
            $("#site-header")[0].innerHTML =    `<a href="https://metamask.app.link/dapp/dapp.bitsport.gg/nft/explore" id="connectMetamask" class="sc-button header-slider style style-1 wallet fl-button pri-1">
                                                    <span>Connect Wallet</span>
                                                </a>`;   
        } else {
            $("#site-header")[0].innerHTML =    `<a href="#" class="sc-button header-slider style style-1 wallet fl-button pri-1" id="connectMetamask" onclick="connectMetamask(event)">
                                                    <span>Connect Wallet</span>
                                                </a>`;
        }
    }

    async function connectMetamask(event) {
        if (event) { 
            event.preventDefault(); 
        }

        if (window.ethereum) {
            var verify = await verifyNetwork();
            if (verify) {
                var accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                var walletAddress = accounts[0].slice(0, 6) + '...' + accounts[0].slice(accounts[0].length - 6);
                localStorage.setItem("account", accounts[0]);

                $("#site-header")[0].innerHTML =    `<a href="#" class="sc-button header-slider style style-1 wallet fl-button pri-1" onclick="toggleWallet()">
                                                        <span>` + walletAddress + `</span>
                                                    </a>`;
                var walletUrl = '{{ route("nft-wallet", ":walletId") }}';
                walletUrl = walletUrl.replace(':walletId', accounts[0]);
                var walletPopup =   `<div class="admin_active" id="header_admin" style="display: block;">
                                        <div class="header_avatar">
                                            <div class="popup-user">
                                                <div class="avatar_popup mt-20">
                                                    <div class="links">
                                                        <a href="` + walletUrl + `">
                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.774902 18.333C0.774902 18.7932 1.14762 19.1664 1.60824 19.1664C2.06885 19.1664 2.44157 18.7932 2.44157 18.333C2.44157 15.3923 4.13448 12.7889 6.77329 11.5578C7.68653 12.1513 8.77296 12.4997 9.94076 12.4997C11.113 12.4997 12.2036 12.1489 13.119 11.5513C13.9067 11.9232 14.6368 12.4235 15.2443 13.0307C16.6611 14.4479 17.4416 16.3311 17.4416 18.333C17.4416 18.7932 17.8143 19.1664 18.2749 19.1664C18.7355 19.1664 19.1083 18.7932 19.1083 18.333C19.1083 15.8859 18.1545 13.5845 16.4227 11.8523C15.8432 11.2725 15.1698 10.7754 14.4472 10.3655C15.2757 9.3581 15.7741 8.06944 15.7741 6.66635C15.7741 3.44979 13.1569 0.833008 9.94076 0.833008C6.72461 0.833008 4.10742 3.44979 4.10742 6.66635C4.10742 8.06604 4.60379 9.35154 5.42863 10.3579C2.56796 11.9685 0.774902 14.9779 0.774902 18.333V18.333ZM9.94076 2.49968C12.2381 2.49968 14.1074 4.36898 14.1074 6.66635C14.1074 8.96371 12.2381 10.833 9.94076 10.833C7.6434 10.833 5.77409 8.96371 5.77409 6.66635C5.77409 4.36898 7.6434 2.49968 9.94076 2.49968V2.49968Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span>My NFT</span>
                                                        </a>
                                                        <a class="mt-10" href="{{ route('nft-explore') }}">
                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.774902 18.333C0.774902 18.7932 1.14762 19.1664 1.60824 19.1664C2.06885 19.1664 2.44157 18.7932 2.44157 18.333C2.44157 15.3923 4.13448 12.7889 6.77329 11.5578C7.68653 12.1513 8.77296 12.4997 9.94076 12.4997C11.113 12.4997 12.2036 12.1489 13.119 11.5513C13.9067 11.9232 14.6368 12.4235 15.2443 13.0307C16.6611 14.4479 17.4416 16.3311 17.4416 18.333C17.4416 18.7932 17.8143 19.1664 18.2749 19.1664C18.7355 19.1664 19.1083 18.7932 19.1083 18.333C19.1083 15.8859 18.1545 13.5845 16.4227 11.8523C15.8432 11.2725 15.1698 10.7754 14.4472 10.3655C15.2757 9.3581 15.7741 8.06944 15.7741 6.66635C15.7741 3.44979 13.1569 0.833008 9.94076 0.833008C6.72461 0.833008 4.10742 3.44979 4.10742 6.66635C4.10742 8.06604 4.60379 9.35154 5.42863 10.3579C2.56796 11.9685 0.774902 14.9779 0.774902 18.333V18.333ZM9.94076 2.49968C12.2381 2.49968 14.1074 4.36898 14.1074 6.66635C14.1074 8.96371 12.2381 10.833 9.94076 10.833C7.6434 10.833 5.77409 8.96371 5.77409 6.66635C5.77409 4.36898 7.6434 2.49968 9.94076 2.49968V2.49968Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span>NFT Explore</span>
                                                        </a>
                                                        <a class="mt-10" href="#" onclick="disconnectMetamask(event)">
                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.9668 18.3057H2.49168C2.0332 18.3057 1.66113 17.9335 1.66113 17.4751V2.52492C1.66113 2.06644 2.03324 1.69437 2.49168 1.69437H9.9668C10.4261 1.69437 10.7973 1.32312 10.7973 0.863828C10.7973 0.404531 10.4261 0.0332031 9.9668 0.0332031H2.49168C1.11793 0.0332031 0 1.15117 0 2.52492V17.4751C0 18.8488 1.11793 19.9668 2.49168 19.9668H9.9668C10.4261 19.9668 10.7973 19.5955 10.7973 19.1362C10.7973 18.6769 10.4261 18.3057 9.9668 18.3057Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M19.7525 9.40904L14.7027 4.42564C14.3771 4.10337 13.8505 4.10755 13.5282 4.43396C13.206 4.76036 13.2093 5.28611 13.5366 5.60837L17.1454 9.16982H7.47508C7.01578 9.16982 6.64453 9.54107 6.64453 10.0004C6.64453 10.4597 7.01578 10.8309 7.47508 10.8309H17.1454L13.5366 14.3924C13.2093 14.7147 13.2068 15.2404 13.5282 15.5668C13.691 15.7313 13.9053 15.8143 14.1196 15.8143C14.3306 15.8143 14.5415 15.7346 14.7027 15.5751L19.7525 10.5917C19.9103 10.4356 20 10.2229 20 10.0003C20 9.77783 19.9111 9.56603 19.7525 9.40904Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <span>Disconnect</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`
                $('.flat-search-btn').append(walletPopup);   
            } else {
                alert("Please add BSC Testnet to your metamask app!");
            }
        } else {
            alert("Please Install Metamask!");
        }
    }

    function disconnectMetamask(event) {
        event.preventDefault(); 
        toggleWallet();

        localStorage.setItem("account", '');
        $("#site-header")[0].innerHTML =    `<a href="#" class="sc-button header-slider style style-1 wallet fl-button pri-1" id="connectMetamask" onclick="connectMetamask(event)">
                                                <span>Connec Wallet</span>
                                            </a>`;
        $("#header_admin").remove();
    }

    function toggleWallet() {
        if(!$('.avatar_popup').hasClass('visible')){
                $('.avatar_popup').toggleClass('visible');
                event.preventDefault();
            } else
                $('.avatar_popup').removeClass('visible');
    }

    configMetamask();
    if (window.ethereum && localStorage.getItem('account')) {
        connectMetamask();
    }
</script>