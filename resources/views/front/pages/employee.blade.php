@extends('front.layouts.app')

@section('title')
    Career
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
        .register-wrapper {
            margin-top: 30px;
        }
        
        .send_btn_custom:hover{
            color: #fff;
            
        }
        
        .job_title_section{
            margin-top: 30px;
            margin-bottom: 30px;
        }

        
        .loginmodal-container {
          padding: 30px;
          max-width: 350px;
          width: 100% !important;
          background-color: #F7F7F7;
          margin: 0 auto;
          border-radius: 2px;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          overflow: hidden;
          font-family: roboto;
        }
        
        .loginmodal-container h1 {
          text-align: center;
          font-size: 1.8em;
          font-family: roboto;
        }
        
        .loginmodal-container input[type=submit] {
          width: 100%;
          display: block;
          margin-bottom: 10px;
          position: relative;
        }
        
        .loginmodal-container input[type=text], input[type=password] {
          height: 44px;
          font-size: 16px;
          width: 100%;
          margin-bottom: 10px;
          -webkit-appearance: none;
          background: #fff;
          border: 1px solid #d9d9d9;
          border-top: 1px solid #c0c0c0;
          /* border-radius: 2px; */
          padding: 0 8px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
        }
        
        .loginmodal-container input[type=text]:hover, input[type=password]:hover {
          border: 1px solid #b9b9b9;
          border-top: 1px solid #a0a0a0;
          -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
          -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
          box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .loginmodal {
          text-align: center;
          font-size: 14px;
          font-family: 'Arial', sans-serif;
          font-weight: 700;
          height: 36px;
          padding: 0 8px;
        /* border-radius: 3px; */
        /* -webkit-user-select: none;
          user-select: none; */
        }
        
        .loginmodal-submit {
          /* border: 1px solid #3079ed; */
          border: 0px;
          color: #fff;
          text-shadow: 0 1px rgba(0,0,0,0.1); 
          background-color: #4d90fe;
          padding: 17px 0px;
          font-family: roboto;
          font-size: 14px;
          /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
        }
        
        .loginmodal-submit:hover {
          /* border: 1px solid #2f5bb7; */
          border: 0px;
          text-shadow: 0 1px rgba(0,0,0,0.3);
          background-color: #357ae8;
          /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
        }
        
        .loginmodal-container a {
          text-decoration: none;
          color: #666;
          font-weight: 400;
          text-align: center;
          display: inline-block;
          opacity: 0.6;
          transition: opacity ease 0.5s;
        } 
        
        .login-help{
          font-size: 12px;
        }
        
        .m-20{
            margin: 20px;
        }
        
    </style>
@endsection



@section('content')
<!---for menu bar -->
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>
<!---for menu bar -->



    
    <div class="contact-details-area section-padding" data-paroller-factor="0.5" style="background-position: center -144px;">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <!-- Number Info -->
                        <div class="contact-info">
                            <a href="#emp">
                                <i class="fa fa-user-o" style="color: #fff;" aria-hidden="true"></i>
                                <span class="text-uppercase" style="font-size: 25px;font-family: Poppins;font-weight: 800;">employee recruitment</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <!-- Mail Info -->
                        <div class="contact-info">
                            <a href="#dis">
                                <i class="fa fa-rocket"  style="color: #fff;" aria-hidden="true"></i>
                                <span class="text-uppercase" style="font-size: 25px;font-family: Poppins;font-weight: 800;"> Distributor Recruitment</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <!-- Address Info -->
                        <div class="contact-info">
                            <a href="" data-toggle="modal" data-target="#resume-modal">
                                <i class="fa fa-wpexplorer"  style="color: #fff;" aria-hidden="true"></i>
                                <span style="font-size: 25px;font-family: Poppins;font-weight: 800;">RESUME BOX</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
 
    <section id="emp"  class="register-area1 section-padding" data-paroller-factor="0.5" data-paroller-direction="horizontal" style="background-position: -144px center;">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <h1 class="text-uppercase" style="margin-top:100px;margin-bottom:20px;">employee recruitment</h1>
                </div>
                
                @if($ctgA)
                    @foreach($ctgA as $a)
                        <div class="col-lg-12 col-md-12">
                        <div class="m-20"></div>
                        <h3>{{ $a->title }}</h3>
                        <div class="m-20"></div>
                        <p>Deadline: {{ $a->deadline }}</p>
                        
                        <p>
                            {!! $a->description !!}
                        </p>
    
                        <span>
                            <a href="{{ $a->bd_jobs_link }}" target="_blank" class="send_btn send_btn_custom sent-button reg-button hvr-outline-out wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">bd jobs</a>
                        </span>

                        <span>
                            <a href="#" data-toggle="modal" data-target="#mep-rec-modal" class="send_btn send_btn_custom sent-button reg-button hvr-outline-out wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">apply on site</a>
                        </span>
                        
                        <div class="m-20"></div>
                        
                    </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </section>
    
    <section id="dis"  class="register-area1 section-padding" data-paroller-factor="0.5" data-paroller-direction="horizontal" style="background-position: -144px center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="text-uppercase" style="margin-top:100px;margin-bottom:20px;">Distributor recruitment</h1>
                </div>
                
                @if($ctgB)
                    @foreach($ctgB as $b)
                    
                        <div class="col-lg-12 col-md-12">
                            <div class="m-20"></div>
                            <h3>{{ $b->title }}</h3>
                            <div class="m-20"></div>
                            <p>Deadline: {{ $b->deadline }}</p>
                            
                            <p>
                                {{ $b->description }}
                            </p>
                            
                            <span>
                                <a href="{{ $b->bd_jobs_link }}" target="_blank" class="send_btn send_btn_custom sent-button reg-button hvr-outline-out wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">bd jobs</a>
                            </span>
                            
                            <span>
                                <a href="" data-toggle="modal" data-target="#distributor-recruitment-modal" class="send_btn send_btn_custom sent-button reg-button hvr-outline-out wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">apply on site</a>
                            </span>
                            
                            <div class="m-20"></div>
                            
                        </div>
                
                    @endforeach
                @endif
                
                
                
            </div>
        </div>
    </section>
    
        <!--EMPLOYEE RECRUITMENT-modal-->
        <div class="modal fade" id="mep-rec-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
            	      
            	      
                <div class="col-lg-12 col-md-12">
                    <!-- Register part -->
                    <div class="register-wrapper">
                        <h2>Apply as Employee</h2>
                            
                        <!--<h3>Job Title</h3>-->
                        
                        <form action="" >
                        
                            <div class="register-form">
                                <label>Your full name</label>
                                <input type="text" name="name" value="">
                            </div>
                            
                            <div class="register-form">
                                <label>Phone number</label>
                                <input type="number" name="Phone number" value="">
                            </div>
                                                    
                                                    
                          <div class="form-group">
                            <label for="exampleInputFile">Upload Your CV With Photo</label>
                            <input type="file" id="exampleInputFile">
                          </div>
                            
                            <button type="submit" class="send_btn send_btn_custom sent-button btn-block" style="visibility: visible; animation-name: fadeInDown;">apply as Employee</button>
                            
                        </form>
                    </div>
                </div>
            	      
		
			</div>
		</div>
        <!--EMPLOYEE RECRUITMENT-modal-->
        
        <!--Distributor recruitment-modal-->
        <div class="modal fade" id="distributor-recruitment-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
            	      
            	      
                <div class="col-lg-12 col-md-12">
                    <!-- Register part -->
                    <div class="register-wrapper">
                        <h2>Apply as DISTRIBUTOR </h2>
                            
                        <!--<h3>Job Title</h3>-->
                        
                        <form action="" >
                        
                            <div class="register-form">
                                <label>Your full name</label>
                                <input type="text" name="name" value="">
                            </div>
                            
                            <div class="register-form">
                                <label>Phone number</label>
                                <input type="number" name="Phone number" value="">
                            </div>
                                            
                            <div class="register-form">
                                <label>Division</label>
                                <input type="text" name="Division" value="">
                            </div>
                                            
                            <div class="register-form">
                                <label>District</label>
                                <input type="text" name="District" value="">
                            </div>
                                                    
                                                    
                          <!--<div class="form-group">-->
                          <!--  <label for="exampleInputFile"></label>-->
                          <!--  <input type="file" id="exampleInputFile">-->
                            
                          <!--</div>-->
                            
                            <button type="submit" class="send_btn send_btn_custom sent-button btn-block" style="visibility: visible; animation-name: fadeInDown;">apply as Employee</button>
                            
                        </form>
                    </div>
                </div>
            	      
		
			</div>
		</div>
        <!--Distributor recruitment-modal-->
        
        <!--resume-modal-->
        <div class="modal fade" id="resume-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
            	      
            	      
                <div class="col-lg-12 col-md-12">
                    <!-- Register part -->
                    <div class="register-wrapper" id="resume_box">
                        <h2>Uplode Your Resume</h2>
                        
                        
                        <form action="{{ action('PublicPagesController@ResuumeBox') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="register-form">
                                <label>RECRUITMENT TYPE</label>
                                
                                <select class="form-control" name="recruitment">
                                	<option selected="selected" disabled="disabled" hidden="hidden" value="">Select....</option>
                                	<option value="employee_recruitment">EMPLOYEE RECRUITMENT</option>
                                	<option value="distributor_recruitment">DISTRIBUTOR RECRUITMENT</option>
                                </select>
                                
                            </div>
                            
                            <div class="register-form">
                                <label>Your full name</label>
                                <input type="text" name="name">
                            </div>
                            
                            <div class="register-form">
                                <label>Email address</label>
                                <input type="email" name="email">
                            </div>
                            
                            <div class="register-form-bottom">
                                <div class="register-form register-form-float-right">
                                    <label>Mobile no.</label>
                                    <input type="text" name="mob_number">
                                </div>
                                <div class="register-form register-form-float-left">
                                    <label>City</label>
                                    <input type="text" name="city">
                                </div>
                            </div>
                            
                            <div class="register-form-bottom">
                                <div class="register-form register-form-float-left">
                                    <label>Zip Code</label>
                                    <input type="text" name="zip_code">
                                </div>
                                <div class="register-form register-form-float-right">
                                    <label>Country</label>
                                    <input type="text" name="country">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Your Resume With Photo</label>
                                <input type="file" name="cv">
                            </div>
                          
                            <button type="submit" class="sent-button reg-button hvr-outline-out">Send</button>
                            
                        </form>    
                    
                    </div>
                </div>
            	      
		
			</div>
		</div>
        <!--resume-modal-->

    
@endsection


@section('my_js')

    <script>
    $(document).ready(function(){

        
        // $('#save-btn').click(function(event) {
        //     event.preventDefault();
            
        //     var form = $('#resume_box form'),
        //         url = form.attr('action');
                
        //     console.log(url);
        //     $.ajax({
        //         url: url,
        //         method: 'POST',
        //         data: form.serialize(),
        //         success: function(response) {
        //                 showMessage("Todo list has been created.");
        //                 form.trigger('reset');
        //         }
        //     });
        // });

    });
    </script>
    
@endsection