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
                            <h2  style="color: #000;padding-bottom: 3%;">{{ $financial->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-8">
                  <div class="pull-left hadding-title">YEARLY BREAKDOWN REPORTS</div>
                  
                  <div class="content">
                    <div class="pull-left hadding-title"  style="color: #000;">{{ $financial->first  }}</div>
                    <div class="pull-right"> <a  style="color: #000;margin-right: -80px;" target="_blank" href="{{$financial->first_pdf}}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #000;">{{$financial->half}}</div>
                    <div class="pull-right"> <a  style="color: #000;" target="_blank" href="{{$financial->half_pdf}}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #000;">{{ $financial->third }}</div>
                    <div class="pull-right"> <a  style="color: #000;" target="_blank" href="{{ $financial->third_pdf }}">Download</a> </div>
                  </div>
                  
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"  style="color: #000;">{{ $financial->anual_report }}</div>
                    <div class="pull-right"> <a  style="color: #000;" target="_blank" href="{{$financial->anual_report_pdf}}">Download</a> </div>
                  </div>
                  <br>
                  
                  <div class="content2">
                    <div class="pull-left hadding-title"><a  style="color: #000;" href="{{ route('financial') }}">Back</a></div>
                  </div>

                </div>
            </div>
        </div>
    </section>
 
 
@endsection


