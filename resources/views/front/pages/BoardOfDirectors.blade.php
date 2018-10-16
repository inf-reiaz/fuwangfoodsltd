@extends('front.layouts.app')

@section('title')
    Board of Directors
@endsection


@section('content')


 <section class="section about-area section-padding" >
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1  style="padding-bottom: 3%;">Board Of Directors</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                
                <div class="col-md-12">
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th width="300px">Name</th>
                            <th width="300px">Designation </th>
                            <th width="300px">Photo</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach($bord as $b)
                          <tr>
                            <td width="300px">{{ $b->name }}</td>
                            <td width="300px">{{ $b->designation }}</td>
                            <td width="300px">
                                <img src="{{$b->photo}}" style="height: 100px;">
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


