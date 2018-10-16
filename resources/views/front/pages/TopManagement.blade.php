@extends('front.layouts.app')

@section('title')
    BOARD OF DIRECTORS
@endsection

@section('css')
    <style>

.my_tooltip {
    position: relative;
    display: inline-block;
}

.my_tooltip .my_tooltiptext {
    visibility: hidden;
    width: 500px;
	height: 200px;
    background-color: gray;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 15px;
    position: absolute;
    z-index: 1;
    top: -5px;
    right: 100%;
}

.my_tooltip:hover .my_tooltiptext {
    visibility: visible;
}
</style>
@endsection


@section('content')
 
 <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h2  style="color: #000;padding-bottom: 3%;" class="text-uppercase">FWF TOP MANAGEMENT</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-md-12">
                    <h4 class="text-center" style="padding-top:30px;padding-bottom: 30px;">FWF MANAGEMENT</h4>
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th width="300px">Name</th>
                            <th width="300px">Other Status & Address</th>
                            <th width="300px">Photo</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          @foreach($topmanagements as $b)
                          
                          <tr>
                            <td width="300px">{{ $b->name_title }}</td>
                            <td width="300px">{{ $b->other }}</td>
                            <td width="300px" class="my_tooltip">
                              <span class="my_tooltiptext">
                                  {{ $b->popup }}
                              </span>
                               <img src="{{ $b->photo }}" style="height: 100px;">
                            </td>
                          </tr>
                          
                          @endforeach
                          
                        </tbody>
                      </table>
                    
                </div>
                
            </div>
        </div>
    </section>


 
@endsection