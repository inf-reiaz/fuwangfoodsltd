@extends('front.layouts.app')

@section('title')
    Financial
@endsection

@section('css')
<style>
  .content {
      margin-top: 10%;
      width: 90%;
  }
    
  .hadding-title {
      font-size: 20px;
      color: #000;
      font-weight: 400;
  }
  
  .content-padding{
    /*padding-top: 10%;*/
  }
</style>
@endsection

@section('content')
 
 <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1  style="padding-bottom: 3%;">Informations All About Financial</h1>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-lg-6">
                    <table class="text-center">
                        <thead>
                          <tr>
                            <th> <h4 style="padding-bottom: 20px;"> SELECT YEAR FOR F/REPORTS</h4></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($financials as $f)
                          <tr>
                            <td><a class="pull-left" href="{{ action('PublicPagesController@Q12financial',$f->id) }}"  style="color: #000;">{{ $f->title }}</a></td>
                          </tr>
                          
                          @endforeach
                          
                          
                          <tr>
                            <td><a class="pull-left" target="_blank" href="/public/front/PRICE_SENSITIVE_INFORMATION.pdf"  style="color: #000;">PRICE SENSITIVE INFORMATION</a></td>
                          </tr>
                          
                          <tr>
                             <td><a class="pull-left"  target="_blank" href="/public/front/Commercial_Operation_of_Products.pdf"  style="color: #000;">COMMERCIAL OPERATION OF PRODUCTS</a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                </div>
                
                <div class="col-lg-6">
                  <div class="content">
                    <div class="pull-right hadding-title">Fuwang Foods Rights share Application Form's</div>
                    <div class="pull-right"> <a target="_blank" style="color: #000;"   href="{{ URL::to('/public/front/Application.pdf') }}">Download Pdf</a> </div>
                    <br>
                     <div class="pull-right"> <a target="_blank" style="color: #000;" href="{{ URL::to('/public/front/Application.doc') }}">Download doc <span style="margin-right: 20px;margin-left:20px;">|| </span> </a> </div>
                  </div>
                  <div class="content content-padding">
                    <div class="pull-right hadding-title">20th Annual General Meeting Proxy Form</div>
                    <br>
                    <div class="pull-right"> <a href="{{ URL::to('public/front/proxy_forms.pdf') }}" style="color: #000;">Download Pdf</a> </div>
                  </div>
                  
                  <div class="content content-padding">
                    <div class="pull-right hadding-title">4th EGM Proxy Form</div>
                    <br>
                    <div class="pull-right"> <a href="{{ URL::to('public/front/proxy_forms.pdf') }}" style="color: #000;">Download Pdf</a> </div>
                  </div>
                  
                </div>
                
            </div>
            
        </div>
    </section>
 
 
@endsection


