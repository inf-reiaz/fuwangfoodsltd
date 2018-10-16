
    <!--
        =====================
        Footer  Area Start
        =====================
    -->
    
    <section class="footer-top-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget-one">
                        <img style="float: left;" src="/public/front/img/logo.png"  height="100%" width="100%"  alt="">
                        <p class="text-left" style="display: inline-block;">
                            <strong>Fu-Wang Building</strong><br>
                            <strong>House: </strong><span> 55, Road: 17  <br> Banani C/A, Dhaka-1213</span><br>
                            <strong>Tel: </strong><span> 9889958, 9889864, 9887359-60, 58815476 </span><br>
                            <strong>Fax: </strong><span> 880-02-9847451</span><br>
                            <strong>E-mail:  </strong><span>info@fuwangfoodsltd.com</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-recent">
                        <h2>Hit Count</h2>
                        
                        <span>
                        </span>
                        
                        <img src="http://simplehitcounter.com/hit.php?uid=2293488&f=16777215&b=0" border="0" height="25" width="100" alt="diaper cake">
                        
                        <div class="shareprice">
                            
                             <table class="table">
                                  <tr>
                                    <!--<th style="color: #fff;font-size: 18px;margin-top: 10px;margin-bottom: 10px;">Share Price</th>-->
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 20px;margin-bottom: 10px;">Share Price</h3>
                                    <th></th>
                                  </tr>
                                  <?php $SharePrice = App\SharePrice::find(1); ?>
                                  <tr>
                                      <th style="padding-left: 45px;">{{ $SharePrice->product_name }} Ltd</th>
                                      <th>{{ $SharePrice->price }}</th>
                                  </tr>
                            </table>
                            
                            
                        </div>
                            
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-recent">
                        <h2 style="float: right;">product gallery</h2>
                        <div style="display: inline-block;">
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/01.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/02.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/03.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/04.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/05.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/06.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/07.jpg" alt="">
                            </div>
                        </a>
                        <!-- single recent post -->
                        <a href="#">
                            <div class="recent-area">
                                <div class="footer-overflow"></div>
                                <img src="/public/front/img/recent/08.jpg" alt="">
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="footer-icon text-center">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-icon text-center">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </div>
                    <!-- footer social link -->
                    
                </div>
            </div>
        </div>
    </section>

    <footer class="fotter-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="pull-left reserve-area">
                        <span >&copy;</span> Copyright Reserved By Fu-Wang Foods Ltd. 2017 <span>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="reserve-area">
                        <a class="" style="color: #f19d34" href="{{ route('home') }}">Admin Login</a> 
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="reserve-area">
                         Design and Development :<a style="color: #ab3e41;" href="http://digimarkint.com/" target="_blank"> <span> <strong> Digimark Interactive</strong></span> </a> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!--
        =====================
        Footer  Area End
        =====================
    -->

    <!-- ======= All js ======= -->