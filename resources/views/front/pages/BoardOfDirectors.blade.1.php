@extends('front.layouts.app')

@section('title')
    Board of Directors
@endsection


@section('content')


 <section class="section about-area section-padding" >
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1  style="padding-bottom: 3%;">Contact Person for Investors</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                  <!--<h1 class="table-title text-center text-uppercase" style="margin-bottom: 5%;">Contact Person for Investors</h1>-->
                  
                <!--pdf-->
                <iframe src="/public/front/BoardofDirectors.pdf" style="width:100%; height:500px;" frameborder="0"></iframe>
                <!--pdf-->
                
            </div>
        </div>
    </section>
 
@endsection


