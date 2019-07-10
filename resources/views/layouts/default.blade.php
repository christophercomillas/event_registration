<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                @include('includes.header');
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        @include('includes.menu')
                        <div class="pcoded-content">
                            @include('includes.content')
                        </div>
                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footerjs')
    </body>
</html>