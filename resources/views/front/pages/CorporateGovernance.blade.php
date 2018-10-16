@extends('front.layouts.app')

@section('title')
    Board of Directors
@endsection


@section('content')
 
 <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h2  style="color: #000;padding-bottom: 3%;">CORPORATE GOVERNANCE COMPLIANCE REPORT</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-lg-7">
                    <table class="text-center">
                        <tbody>
                          <tr>
                            <td><a href="{{ URL::to('/public/front/Corp_Governance.pdf') }}"  style="color: #000;">Corporate Governance</a></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
 
 
@endsection


