@extends('front.layouts.app')

@section('title')
    Financial
@endsection

@section('css')
<style>
  .content {
      margin-top: 50px;
      width: 90%;
      
  }
  
  .content2{
    margin-top: 10px;
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
                        <h2  style="color: #0099CC;padding-bottom: 3%;">Financial Statements (Un-Audited) 1st Qtr. Financial Statements 2013</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-8">
                  <div class="pull-left hadding-title">YEARLY BREAKDOWN REPORTS</div>
                  <div class="content">
                    <div class="pull-left hadding-title"  style="color: #0099CC;">First Quarter 2013</div>
                    <div class="pull-right"> <a  style="color: #0099CC;margin-right: -80px;" target="_blank" href="{{ URL::to('/public/front/Q1_Y_UN-2013.pdf') }}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #0099CC;">Half Yearly 2013</div>
                    <div class="pull-right"> <a  style="color: #0099CC;" target="_blank" href="{{ URL::to('/public/front/H2_Y_UN-2013.pdf') }}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #0099CC;">3rd Quarterly</div>
                    <div class="pull-right"> <a  style="color: #0099CC;" target="_blank" href="{{ URL::to('/public/front/Third_Quarter_2014.pdf') }}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #0099CC;">Anual Report 2013-2014</div>
                    <div class="pull-right"> <a  style="color: #0099CC;" target="_blank" href="{{ URL::to('/public/front/A_R_2013_2014.pdf') }}">Download</a> </div>
                  </div>
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"><a  style="color: #0099CC;" href="{{ route('financial') }}">Back</a></div>
                  </div>

                </div>
            </div>
        </div>
    </section>
 
 
@endsection


