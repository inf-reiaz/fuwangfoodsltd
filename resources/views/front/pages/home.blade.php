@extends('front.layouts.app')

@section('title')
    Home
@endsection

@section('content')

    

    <!--=====================
        Slider Area Start
        =====================-->
        
    <div class="slider-area">
        <div class="slider-content owl-carousel">
            <!-- single slider part -->
            <div class="single-slider">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="slider-overflow"></div>
                        <img src="/public/front/img/slider/01.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-lg-offset-0 col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider part -->
            <div class="single-slider">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="slider-overflow"></div>
                        <img src="/public/front/img/slider/02.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-lg-offset-0 col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider part -->
            <div class="single-slider">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="slider-overflow"></div>
                        <img src="/public/front/img/slider/03.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-lg-offset-0 col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--
        =====================
        Slider Area End
        =====================
    -->

    <!--
        =====================
        About  Area Start
        =====================
    -->
    
    <!--about section-->
        @include('front.partials._about')
    <!--about section-->
    
    <!--
        =====================
        About  Area End
        =====================
    -->

    <!--
        =====================
        Service  Area Start
        =====================
    -->
    <!--
        =====================
        Service  Area End
        =====================
    -->

    <!--
        =====================
        Progress  Area Start
        =====================
    -->
    
    <section class="progress-area section-padding" data-paroller-factor="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single progress part -->
                    <div class="single-progress-dec text-center">
                        <i class="icon-Products" aria-hidden="true"></i>
                        <span class="counter">68</span>
                        <h3>Products</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single progress part -->
                    <div class="single-progress-dec text-center">
                        <i class="icon-Employee" aria-hidden="true"></i>
                        <span class="counter">25</span>
                        <h3>Brands</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single progress part -->
                    <div class="single-progress-dec text-center">
                        <i class="icon-Team" aria-hidden="true"></i>
                        <span class="counter1">1656</span>
                        <h3>Members</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single progress part -->
                    <div class="single-progress-dec text-center">
                        <i class="icon-Factory" aria-hidden="true"></i>
                        <span class="counter">1</span>
                        <h3>Factories</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="team-members-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1>fu-wang pioneers</h1>
                        <p> </p>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3" style="margin-left: 45px;">
                    <!-- single member part -->
                    <div class="single-member-dec">
                        <img src="/public/front/img/member/chairman.jpg" alt="">
                        <!--<h3>john doe</h3>-->
                        <div class="member-overly text-center">
                            <h3>Mr. Abdul Quader</h3>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>           

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single member part -->
                    <div class="single-member-dec">
                        <img src="/public/front/img/member/arif.png" alt="">
                        <!--<h3>thom muller</h3>-->
                        <div class="member-overly text-center">
                            <h3>Dr.Arif Ahmed Chowdhury,CIP</h3>
                            <p>Managing Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single member part -->
                    <div class="single-member-dec">
                        <img src="/public/front/img/member/kamal.png" alt="">
                        <!--<h3>Robert Doe</h3>-->
                        <div class="member-overly text-center">
                            <h3>Mr.Kamal Kanti Mondal</h3>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single member part -->
                    <div class="single-member-dec">
                        <img src="/public/front/img/member/biplod.png" alt="">
                        <!--<h3>finn balor</h3>-->
                        <div class="member-overly text-center">
                            <h3>Mr.Biplob Chakraborty</h3>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- single member part -->
                    <div class="single-member-dec">
                        <img src="/public/front/img/member/quazi.png" alt="">
                        <!--<h3>finn balor</h3>-->
                        <div class="member-overly text-center">
                            <h3>Mr. Quazi Tafazzal Hossain</h3>
                            <p>Independent Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--
        ============================
        Team Members  Area End
        ============================
    -->

    <!--
        =====================
        Get Info  Area Start
        =====================
    -->
    <section class="info-area" data-paroller-factor="0.5" data-paroller-direction="horizontal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="info-content text-center">
                        <h3>Be With Us</h3>
                        <p> </p>
                        <a class="shrimpo-btn hvr-outline-out" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="subscribe-box text-center">
                        <input type="text" placeholder="subscribe with us">
                        <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
        =====================
        Get Info  Area End
        =====================
    -->
    
@endsection


