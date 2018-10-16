@extends('front.layouts.app')

@section('title')
    Financial
@endsection


@section('content')
 
 <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h2  style="color: #000;padding-bottom: 3%;" class="text-uppercase">Informations All About Shareholding</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-lg-8">
                    <table class="text-center">
                        <tbody>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/Free_Float.pdf') }}"  style="color: #000;">Free Float Securities Holding</a></td>
                          </tr>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/S_Holding5.pdf') }}"  style="color: #000;">Share Holding 5% or more</a></td>
                          </tr>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/S_Holding10.pdf') }}"  style="color: #000;">Share Holding 10% or more</a></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
 
 
@endsection


