<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    @include('frontend.layouts.nft-head')

    <body class="body header-fixed is_dark">
        <!-- preloade -->
        <div class="preload preload-container">
            <div class="preload-logo"></div>
        </div>
        <!-- /preload -->

        <!-- wrapper -->
        <div id="wrapper">
            <div id="page" class="clearfix">
                @include('frontend.layouts.nft-header')
                @yield('content')
                @include('frontend.layouts.nft-footer') 
            </div>

            @yield('modal')
        </div>
        <!-- /wrapper -->

        <a id="scroll-top"></a>

        @include('frontend.layouts.nft-footer-script') 
    </body>
</html>