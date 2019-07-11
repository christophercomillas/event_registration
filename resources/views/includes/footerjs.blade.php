        <!--[if lt IE 10]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
                <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="../files/assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="../files/assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="../files/assets/images/browser/ie.png" alt="">
                            <div>IE (9 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/waves.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        {{-- <script src="{{ asset('js/jquery.flot.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.tooltip.min.js') }}"></script> --}}
        <script src="{{ asset('js/chartist.js') }}"></script>
        <script src="{{ asset('js/chartist.js') }}"></script>
        <script src="{{ asset('js/amchart/amcharts.js') }}"></script>
        <script src="{{ asset('js/serial.js') }}"></script>
        <script src="{{ asset('js/light.js') }}"></script>
        <script src="{{ asset('js/pcoded.min.js') }}"></script>
        <script src="{{ asset('js/vertical-layout.min.js') }}"></script>
        {{-- <script src="{{ asset('js/custom-dashboard.min.js') }}"></script> --}}
        <script src="{{ asset('js/script.min.js') }}"></script>

        @stack('extra-js')