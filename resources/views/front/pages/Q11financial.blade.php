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
                        <h1  style="color: #0099CC;padding-bottom: 3%;">Financial Statement 2011 - 2012</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <table class="">
                        <thead>
                          <tr>
                            <th> <h4 style="padding-bottom: 20px;">YEARLY BREAKDOWN REPORTS</h4></th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <tr>
                            <td><a href="{{ URL::to('/public/front/Quarterly_11.pdf') }}"  style="color: #0099CC;">Quarterly-2011</a></td>
                          </tr>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/Audit_f_st.pdf') }}"  style="color: #0099CC;">Audited Financial Statement 2011-2012</a></td>
                          </tr>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/A_R_2011_2012.pdf') }}"  style="color: #0099CC;">Anual Report 2011-2012</a></td>
                          </tr>
                          <tr>
                            <td><a href="{{ route('financial') }}"  style="color: #0099CC;">Back</a></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="col-lg-8">
                  
                  <div class="content">
                    <div class="pull-left hadding-title">Download the Documents</div>
                    <div class="pull-right"> <a target="_blank" href="{{ URL::to('/public/front/Q3_Y_UN-2011.pdf') }}">*.PDF</a> </div>
                  </div>

                </div>
            </div>
        </div>
    </section>
 
 
@endsection


