@extends('front.layouts.app')

@section('title')
    Press
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
        
        .section-padding {
            overflow: hidden;
            padding-top: 35px;
        }
        
        .blog-details>img {
            width: 80%;
            margin: 0 auto;
            display: block;
        }

    </style>
@endsection



@section('content')
<!---for menu bar -->
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>
<!---for menu bar -->
    
     <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1>FU-WANG FOODS LTD</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="blog-news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-content blog-details">
                        <img src="{{ $press->image }}" alt="">
                        <h2>{{ $press->title }}</h2>
                        <div class="cat-get-info"> <i class="fa fa-calendar" aria-hidden="true"></i></a>{{ date('M j, Y', strtotime($press->created_at)) }} 
                        </div>
                        
                        <p>
                            {{ $press->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
@endsection


