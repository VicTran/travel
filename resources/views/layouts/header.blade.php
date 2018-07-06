<div id="popup-search-box-id" class="popup-search-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="popup-search-box-inner">
                    <form action="http://static.crazycafe.net/crazycafe/travel/mail.php">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="search" placeholder="Search here...">
                            </div>
                            <div class="col-md-2">
                                <button type="submit"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <span class="close-btn-search"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" @if(isset($pageIndex)) welcome-area  @else page-welcome-area @endif">
    <div class="header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="mainmenu">
                        <ul id="slicknav-menu-list">
                            <li><a href="{{route('index')}}">Home</a>
                                <!-- <ul>
                                    <li><a href="index-2.html">Hompage two</a></li>
                                    <li><a href="index-3.html">Hompage three</a></li>
                                </ul> -->
                            </li>
                            <li><a href="{{route('tours.index')}}">Tours</a></li>
                            <li><a href="{{route('page.search')}}">Search Tour</a></li>
                            <li><a href="{{route('hotels.index')}}">Hotels</a></li>
                            <li><a href="{{route('page.about')}}">About</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-8 col-xs-6">
                    <div class="header-right">
                        <a href="#" class="travel-cart"><img src="assets/img/cart-icon-img.png" alt=""><span>0</span></a>
                        <a href="#" class="search-icon-header"><i class="zmdi zmdi-search"></i></a>
                        <ul class="language-selector">
                            <li><a href="#" class="header-flug"><img src="assets/img/flug-1.jpg" alt=""><i class="zmdi zmdi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#"><img src="assets/img/flug-2.jpg" alt=""> <span>India</span></a></li>
                                    <li><a href="#"><img src="assets/img/flug-3.jpg" alt=""> <span>NewZealand</span></a></li>
                                    <li><a href="#"><img src="assets/img/flug-4.jpg" alt=""> <span>Sri Lanka</span></a></li>
                                    <li><a href="#"><img src="assets/img/flug-5.jpg" alt=""> <span>Zimbabwe</span></a></li>
                                </ul>
                            </li>
                        </ul>
                        <a href="login.html">Login</a>
                        <a href="register.html">Register</a>
                    </div>
                    <div class="slicknav-menu-wrap"></div>
                </div> -->
            </div>
        </div>
    </div>
    @yield('slide-index')



</div>
