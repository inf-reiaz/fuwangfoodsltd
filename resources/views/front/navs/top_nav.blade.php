<header class="tp-main-menu header-menu-2 sticky-header sticky-header-2">

        <div class="tp-row-logo">
            <div class="container ">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-top-openh">
                        <div class="wrap-top-openh">
                            <ul class="wrap-top-social">
                                <li><span class="top-socail-text">Follow Us :</span></li>
                                <li class="footer-follow-icon"><a target="_blank" href="https://www.facebook.com/FuWangFoodLtd/?ref=br_rs"><i class="fa fa-facebook fa-follow-icon"></i></a></li>
                                <li class="footer-follow-icon"><a href="#"><i class="fa fa-twitter fa-follow-icon"></i></a></li>
                                <li class="footer-follow-icon"><a href="#"><i class="fa fa-linkedin fa-follow-icon"></i></a></li>
                                <li class="footer-follow-icon"><a href="#"><i class="fa fa-youtube-play fa-follow-icon"></i></a></li>
                                <li class="footer-follow-icon"><a href="#"><i class="fa fa-google-plus fa-follow-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-top-logo">
                        <div class="wrap-top-logo">
                            <a href="" title="TagPoint HTML Template"><img src="/public/front/img/logo.png" alt="tagpoint template"></a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-top-contact">
                        <div class="wrap-top-contact pull-right">
                            <span class="topcontact-phone"><i class="fa fa-phone"></i>9889958 </span>
                            <span class="topcontact-email"><i class="fa fa-send"></i><a style="color: gray;"  title="Contact Us">info@fuwangfoodsltd.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="tp-menu tp-menu_2">
            <div class="container container-header">
                <nav class="tp-mainnav row-navigation">
                    <ul class="get_quotesearch tp_csq">
                        <li class="col-search"><i class="fa fa-search tp-top-icon"></i>
                            <div class="search-content search-content_2" style="display: none;">
                                <form class="tp-top-search" action="#">

                                    <input type="text" name="topsearch" id="topsearch" class="top-search">
                                    <label class="ltop-search" for="topsearch">Search Here</label>
                                    <button class="top-search-btn" type="submit"></button>
                                </form>
                            </div>
                        </li>
                        <li class="get-quote"><a href="http://mail.fuwangfoodsltd.com/webmail/src/login.php" target="_blank">WebMail</a></li>
                        <li class="phone_menu"><i class="fa fa-navicon"></i></li>
                    </ul>
                    
                    
                    <ul class="tpnav tpnav_2">
                        
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}"  ><a href="{{ URL::to('/') }}">Home </a></li>
                        <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About us</a></li>
                        <li class="sub-menu
                            
                            {{ Request::path() == 'product-description/econo-sweet-bread' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/white-bread' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/butter-bun' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/vanilla-butter-bun' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/peanut-butter-bun' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/mini-bread' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/sweet-bread' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/chanachur' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/cookies-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/dai-salt-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/energy-plus-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/horlicks-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/milk-marie-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/choco-toast' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/non-stop-crispy-toast' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/sandwich-toast' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/Spicy%20Toast' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/Swis-Cheese-Cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/toast-biscuit' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/american-cheese-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/any-time-slice-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/chocolate-slice-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/dry-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/fruit-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/jerry-cake' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/play-glucosekoko-chocolate-bar' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/doraemon-chocolate-waf' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/choco-pie' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/walkers-dairy-milk' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/laschcha-shemai' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/18-eighteen-plus' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/jeera-plus' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/rock-energy-drink' ? 'active' : '' }} 
                            {{ Request::path() == 'product-description/economy-noodles-single' ? 'active' : '' }} 
                            
                        "> <a href="#" title="Features">products  </a>
                            <div  id="do-nicescrol" class="tp-sub-menu full-menu" style="display: none; height: 350px;">
                                <div class="row tp-row-menu">
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">Bread </h3>
                                        <?php $products = App\Product::where('cat_name', 'bread')->get(); ?>
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">Biscuit & Chanachur</h3>
                                        <?php $products = App\Product::where('cat_name', 'biscuit_chanachur')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">toast </h3>
                                        <?php $products = App\Product::where('cat_name', 'toast')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">cake </h3>
                                        <?php $products = App\Product::where('cat_name', 'cake')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">chocolate </h3>
                                        <?php $products = App\Product::where('cat_name', 'choclate')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">Others & Drinks </h3>
                                        <?php $products = App\Product::where('cat_name', 'others_drinks')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <h3 class="sub-menu-title">Noodles</h3>
                                        <?php $products = App\Product::where('cat_name', 'noodles')->get(); ?>
                                        
                                        <ul class="sub-list">
                                            @foreach($products as $product)
                                                <li><a  href="{{route('productdescription',$product->slug)}}">{{ $product->product_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>

                        </li>
                        
                        <li class="sub-menu
                            {{ Request::path() == 'financial' ? 'active' : '' }}
                            {{ Request::path() == 'board-of-directors' ? 'active' : '' }}
                            {{ Request::path() == 'corporate-governance' ? 'active' : '' }}
                            {{ Request::path() == 'contact-person-for-inestors' ? 'active' : '' }}
                        ">
                            
                            <a href="#">Financial</a>
                            <ul class="tp-sub-menu " style="display: none;">
                                <li class="sub-item"><a href="{{ route('financial') }}">financial </a></li>
                                <li class="sub-item"><a href="{{ route('TopManagement') }}">FWF Top Management </a></li>
                                <li class="sub-item"><a href="{{ route('shareholding') }}">Shareholding</a></li> 
                                <li class="sub-item"><a href="{{ route('BoardOfDirectors') }}">Board of Directors</a></li>
                                
                                <li class="sub-menu sub-item"><a href="">BOARD OF DIRECTORS' COMMITTEE</a>
                                    <ul class="tp-sub-menu " style="display: none; margin-left: 100%;margin-top: -20%;">
                                        <li class="sub-item"><a href="{{ route('AuditCommittee') }}">Audit Committee</a></li>
                                        <li class="sub-item"><a href="{{ route('Nomination') }}">Nomination & Remuneration Committee</a></li>
                                    </ul>
                                </li>
                                
                                <li class="sub-item"><a href="{{ route('CorporateGovernance') }}">Corporate Governance</a></li>
                                <li class="sub-item"><a href="{{ route('ContactPersonForInestors') }}">CONTACT PERSON FOR investors</a></li>
                                <li class="sub-item"><a href="{{ route('ContactPersonForInestors') }}">investors</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="sub-menu 
                            {{ Request::path() == 'fuwang-foods' ? 'active' : '' }} 
                            {{ Request::path() == 'fuwang-beverage' ? 'active' : '' }}
                            {{ Request::path() == 'fuwang-foods-chocolate-div' ? 'active' : '' }}
                            {{ Request::path() == 'fuwang-foods' ? 'active' : '' }}
                        
                        "><a href="#">our concern</a>
                            <ul class="tp-sub-menu " style="display: none;">
                                <li class="sub-item"><a href="{{ route('fuwangfoods') }}">Fuwang Foods</a></li>
                                <li class="sub-item"><a href="{{ route('fuwangbeverage') }}">Fuwang Beverage</a></li>
                                <li class="sub-item"><a href="{{ route('chocolatediv') }}">Fuwang Foods (Chocolate Div)</a></li>
                                <li class="sub-item"><a href="{{ route('fuwangfoods') }}">Fuwang Foods (Drinks Div)</a></li>
                                <li class="sub-item"><a href="{{ route('fuwangfoods') }}">Fuwang Foods (Printing Div)</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::path() == 'our-press' ? 'active' : '' }}"><a href="{{ route('press') }}"> Events </a></li>
                        <li class="{{ Request::path() == 'career' ? 'active' : '' }}"><a href="{{ route('employee') }}">Career</a></li>
                        <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">contact us</a></li>
                        <!--<li><a href="http://mail.fuwanggroup.com/" target="_blank">WebMail</a></li>-->

                    </ul>
                    

                </nav>
            </div>
        </div>

    </header>
    
    
    
    