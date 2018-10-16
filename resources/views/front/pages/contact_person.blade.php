@extends('front.layouts.app')

@section('title')
    Contact Person
@endsection


@section('content')
 
 <section class="section" style="margin-bottom: 50px">
        <div class="container">
            <div class="row">
                
                  <h1 class="table-title text-center text-uppercase" style="margin-bottom: 5%;">Contact Person for Investors</h1>
                  
                <!--pdf-->
                <iframe src="/public/front/Contact_for_Investors.pdf" style="width:100%; height:500px;" frameborder="0"></iframe>
                <!--pdf-->
                
            </div>
        </div>
    </section>
 
 
@endsection


