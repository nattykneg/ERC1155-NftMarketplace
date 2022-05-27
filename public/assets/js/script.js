var AdminAddress = '0x29BfbAD48374FA41f2b25aC72c08E8E362d58865';
var nftContactAddress = '0xE2B05e88031713052c6D9107920115eb16b9A6D0';   
const web3 = new Web3(window.ethereum);
// // mainnet 
// const bsc_web3 = new Web3('https://mainnet.infura.io/v3/af36a1edf8f74fdaaa066e3481955cbc');
// testnet
const bsc_web3 = new Web3('https://ropsten.infura.io/v3/af36a1edf8f74fdaaa066e3481955cbc');
// const bsc_web3 = new Web3('https://data-seed-prebsc-1-s1.binance.org:8545');

$(document).ready(function () {
    // Add smooth scrolling to all links
    $("nav a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 100
            }, 1000, function () {


            });
            return false;
        } // End if
    });
});

function getContractABI() {
    return $.getJSON(window.location.origin + "/assets/js/abi.json", function (abi) {
        return abi;
    });
}

function initSwiperJs() {
    var ShortcodesTag = document.createElement("script");
    ShortcodesTag.src = location.origin + "/assets/nft/js/shortcodes.js";
    document.getElementsByTagName("head")[0].appendChild(ShortcodesTag);
    
    var MainTag = document.createElement("script");
    MainTag.src = location.origin + "/assets/nft/js/main.js";
    document.getElementsByTagName("head")[0].appendChild(MainTag);
    
    var SwiperTag = document.createElement("script");
    SwiperTag.src = location.origin + "/assets/nft/js/swiper.js";
    document.getElementsByTagName("head")[0].appendChild(SwiperTag);
}

function isMobileDevice() {
    return 'ontouchstart' in window || 'onmsgesturechange' in window;
}

async function verifyNetwork() {
    if (isMobileDevice() && !window.ethereum) {
        window.location.href = "https://metamask.app.link/dapp/dapp.bitsport.gg/nft/explore"

        return false;
    } else if (window.ethereum) {
        try {
            // check if the chain to connect to is installed
            await window.ethereum.request({
                method: 'wallet_switchEthereumChain',
                params: [{ chainId: '0x3' }], // chainId must be in hexadecimal numbers
            });
            
            return true;
        } catch (error) {
            // This error code indicates that the chain has not been added to MetaMask
            // if it is not, then install it into the user MetaMask
            if (error.code === 4902) {
                try {
                    await window.ethereum.request({
                        method: 'wallet_addEthereumChain',
                        params: [{
                            "chainId": "0x61", // 56 in decimal
                            "chainName": "Testnet Smart Chain",
                            "rpcUrls": [
                                "https://data-seed-prebsc-1-s1.binance.org:8545"
                            ],
                            "nativeCurrency": {
                                "name": "Binance Coin",
                                "symbol": "BNB",
                                "decimals": 18
                            },
                            "blockExplorerUrls": [
                                "https://testnet.bscscan.com"
                            ]
                        }]
                    });

                    return true;
                } catch (addError) {
                    return false;
                }
            } else {
                return false;
            }
        }
    } else {
        // if no window.ethereum then MetaMask is not installed
        alert('MetaMask is not installed. Please consider installing it: https://metamask.io/download.html');
        return false;
    }
}

// wishlist == wl
function getWlStatistics(wlTotalCnts, wlAll) {
    var nftIgos = {};
    
    wlTotalCnts.forEach(wishlistItem => {
        nftIgos[wishlistItem.nftId] = { total: wishlistItem.count };
    });

    wlAll.forEach(wishlistItem => {
        nftIgos[wishlistItem.nftId][wishlistItem.walletAddress] = 1;
    });

    return nftIgos;
}