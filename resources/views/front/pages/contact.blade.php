@extends('front.layouts.app')

@section('title')
    Contact
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
    .m-b-30{
        margin-bottom: 30px;
    }
    
    .contact-details-area {
        background: rgba(0, 0, 0, 0) url(/public/front/img/contact-bg-1.jpg) repeat scroll 0 0;
        position: relative;
        background-size: cover;
    }
    
    </style>
@endsection



@section('content')
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>

    
    
    <div class="contact-details-area section-padding" data-paroller-factor="0.5" style="background-position: center -144px;">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <!-- Number Info -->
                        <div class="contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>9887359-60</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <!-- Mail Info -->
                        <div class="contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="support%40domain.html"><span>info@fuwangfoodsltd.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-flex wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <!-- Address Info -->
                        <div class="contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>House: 55, Road: 17 Banani C/A, Dhaka-1213</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-form-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                            
                    <div style="margin-bottom:30px">
                        <h3>Head Office:</h3>
                        <p>
                            Fu-Wang Foods Ltd. <br>
                            House: 55, Road: 17 <br> 
                            Banani C/A, Dhaka-1213 <br>
                            Tel: 58815476, 9887359 <br>
                            9887360,9889958,9889864 <br>
                            Fax: 880-02-9847451 <br>
                            E-mail: info@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Chittagong Branch :</h3>
                        <p>
                            Md. Anower Hossain <br>
                            Branch In-Charge <br> 
                            Khan Mansion 380/C, Gulbag R/A, <br>
                            Bapari-para, Agrabad Access Road, <br>
                            Chittagong.<br>
                            Mobile:01974077038 & 01701222960 <br>
                            Email : ctgbranch@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Gazipur Food & Beverage Factory:</h3>
                        <p>
                            Hotapara,Gazipur Sadar, Gazipur.<br>
                            Phone: 9289229 Mobile: 01914-077137 <br>
                            Email : info@fuwangfoodsltd.com <br>
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Sylhet Branch:</h3>
                        <p>
                            Mr.Md.Helal Uddin Ahmed<br>
                            Branch In-charge<br>
                            Milion Monjil,Rasos:4,   <br>                       
                            Tamabil Road, East Mirabazar,Sylhet<br>
                            Mobile: 01673795770,01974077330<br>
                            Email : sylhet@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Feni Depo :</h3>
                        <p>
                            MR.Md.Rashedul Hasan<br>
                            In-Charge Feni Depo<br>
                            Khan Plaza <br>
                            Circuit House Road,Mohipal,Feni.<br>
                            Mobile:01911120107, 01843357777<br>
                            Email : info@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Bogra Branch:</h3>
                        <p>
                            Mr.Md. Afrose Ali Mridha <br>
                            Branch In-charge<br>
                            Shapru Cottage<br>
                            4/18 Jaleswritala, (Kalibari More), Bogra.<br>
                            Mobile:01914077280, 01714-087115<br>
                            Email : bogra@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Jessore Branch:</h3>
                        <p>
                            Mr.A.H.M Anisuzzaman<br>
                            Branch In-Change<br>
                            House: 95, Puraton Kashba<br>
                            Kathal Tola, Dhaka Road Jessore.<br>
                            Mobile:01974077135, 01912-855820<br>
                            Email : jessore@fuwangfoodsltd.com
                        </p>
                    </div>
                    
                    <div class="m-b-30"></div>
                    <div style="margin-bottom:30px">
                        <h3>Rangpur Branch:</h3>
                        <p>
                           Mr.Md. Reja-un-Nabi <br>
                            Branch In-charge<br>
                            House: 170, Lane:1, Bus Terminal Road<br>
                            (East Side of Molatool Madrasha)<br>
                            North Babu Kha, Rangpur.<br>
                            Mobile:01614-077152, 01914-077152<br>
                            Email : rangpur@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Mymensing Branch:</h3>
                        <p>
                           Mr.Md.Badruzzaman Talukder<br>
                            Branch In-charge<br>
                            B: 9/12; Basic Industrial Area<br>
                            Maskanda, Maymensing.<br>
                            Mobile:01614-077146, 01914077146<br>
                            Email : mymensing@fuwangfoodsltd.com
                        </p>
                    </div>
                    <div style="margin-bottom:30px">
                        <h3>Barisal Branch:</h3>
                        <p>
                           Mr.Md.Faridul Islam <br>
                            Branch In-charge<br>
                            H:938/22,Farjana Bhaban<br>
                            Kazipara, C&B Road<br>
                            Barishal Sadar, Barisal.<br>
                            Mobile:01939-660015, 01974077153<br>
                            Email : barishal@fuwangfoodsltd.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
                    
                 
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-content">
                                        <input name="name" placeholder="YOUR NAME*" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-content">
                                        <input name="email" placeholder="YOUR EMAIL*" required="" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-content">
                                        <input name="subject" placeholder="YOUR SUBJECT*" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-content">
                                        <input name="website" placeholder="YOUR WEBSITE*" required="" type="url">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-message">
                                        <textarea class="field-element " data-gramm="true" spellcheck="false" data-gramm_editor="true" name="message" placeholder="YOUR MESSEGE GOES HERE..." required=""></textarea>
                                    </div>
                                    <button type="submit" class="sent-button hvr-outline-out wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
    
    
    

@endsection


