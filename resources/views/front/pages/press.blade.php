@extends('front.layouts.app')

@section('title')
    Press
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
        
        .blog-details>img {
            width: 100%;
            max-width: 40%;
            margin: 0 auto;
            display: block;
        }
        
    </style>
@endsection



@section('content')
<!---for menu bar -->
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>
<!---for menu bar -->
    
    <section class="about-area section-padding1" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1>Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="blog-news-area"  style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @foreach($press as $p)
                    <div class="blog-details">
                       <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                        <img src="{{ $p->image }}" alt="">
                        <h2>
                            {{ $p->title }}
                        </h2>
                        <b> 
                            <span class="separator"></span> <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a> {{ date('M j, Y', strtotime($p->created_at)) }} 
                        </b>
                        <p>
                            
			            {{ substr(strip_tags($p->description), 0, 350) }}{{ strlen(strip_tags($p->description)) > 350 ? '...' : "" }}
			
                        </p>
                        <a href="{{ route('presssingle',$p->slug) }}">Continue Reading<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>    

@endsection


