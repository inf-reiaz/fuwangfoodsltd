@extends('front.layouts.app')

@section('title')
    Services Details
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
        
        .check-list li::before{
            color: #e20612;
            content: "";
        }
        
        .Shrimpo-services-info p a {
            color: #e20612;
        }
        
        /*.check-list li::before {*/
        /*    color: #a7753a;*/
        /*    content: "";*/
        /*    font-family: fontawesome;*/
        /*    font-size: 16px;*/
        /*    left: 0;*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*}*/
    </style>
@endsection



@section('content')
<!---for menu bar -->
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>
<!---for menu bar -->
    
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1>Services Details</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<section class="service-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Shrimpo-services-info">
                        <div class="service-top-bg"></div>
                        <div class="sevices-title">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate sapien nec nisi consequat</h2>
                        </div>
                        <!--<div class="services-social-icons">-->
                        <!--    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
                        <!--    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
                        <!--    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                        <!--    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->
                        <!--    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>-->
                        <!--</div>-->
                        <p> et gravida augue gravida. Aenean posuere suscipit metus, sed plaerat leo dignissim sed. Aliquam placerat vestibulum tristique. Mauris fermentum magna et nulla tristique, et mattis risus scelerisque. Praesent eget mi diam. Nunc lobortis lectus vel enim semper pharetra. Cras tempus turpis est, in rhoncus lacus pharetra at. Pellentesque arcu est, <a href="#">tristique sed efficitur sit amet, fermentum at massa.</a> Etiam sit amet vestibulum tortor. Nulla porta posuere metus eget aliquet. Phasellus ut urna vitae enim porta tempus. Proin lacinia elementum dui, nec vehicula massa tincidunt vitae.</p>
                        <p>Maecenas ac leo magna. Vivamus tristique sollicitudin mauris, vitae condimentum nulla aliquam at. Etiam sapien augue, sagittis a cursus et, sodales sit amet odio. Duis laoreet, dolor sit amet rutrum scelerisque, enim quam faucibus lorem, nec accumsan sapien nisl sit amet tortor. <a href="#">Nullam non est in leo tempor luctus. Mauris tristique</a> lorem quis faucibus posuere. Sed nec tortor metus. Nullam nec libero quis nibh facilisis rhoncus. Cras nec sagittis risus, id dictum elit. Donec rhoncus tellus eu semper convallis. Duis ac elit ac nibh aliquet tristique. Nam eget nibh ut dui mattis ultrices ut volutpat ligula. Vivamus in leo id mi placerat vulputate.</p>
                        <ul class="check-list">
                            <li>Nullam congue, neque non tincidunt convallis.</li>
                            <li>augue dui pulvinar justo, quis tempus odio dolor id enim. </li>
                            <li>Mauris ex mi, aliquam id sem ac, iaculis pretium mauris. Duis arcu lorem.</li>
                            <li>vehicula varius malesuada eu, consequat eu lacus. Orci varius natoque penatibus et magnis dis parturient montes</li>
                            <li>nascetur ridiculus mus. Aenean cursus pretium lectus.</li>
                        </ul>
                        <p>Nulla interdum sollicitudin augue. Morbi ullamcorper molestie porttitor. Ut pharetra vulputate euismod. Vestibulum finibus facilisis ipsum non bibendum. Nunc eu tincidunt nibh, eu placerat felis. Nullam mattis, sapien at auctor condimentum, purus tellus sodales nibh, sit amet fringilla lacus felis fringilla nulla.</p>
                        <p><a href="#">Integer in lorem id nisl dignissim tincidunt ut quis ipsum.</a> Vestibulum eget leo in mauris pretium ullamcorper eu sit amet leo. Quisque commodo ipsum massa, eu volutpat lorem lobortis consectetur. In vitae nibh id neque dictum interdum. Proin efficitur semper nisi ut pellentesque. Maecenas in mi ac arcu bibendum condimentum id ut dui. Vivamus vitae leo ut tortor efficitur facilisis.</p>
                        <p>Donec sed ornare nulla, sit amet tempus felis. Nulla vel tincidunt risus, in condimentum diam. Curabitur eget laoreet libero, id maximus augue. Mauris eros nunc, suscipit ut diam id, blandit tristique ligula. Sed pulvinar vestibulum sapien ut finibus. Pellentesque commodo, ipsum ac rhoncus faucibus, dolor elit euismod nisi, at tempor purus nibh quis diam. Duis porttitor odio mattis sapien hendrerit, vitae pharetra lorem laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eget lorem auctor, placerat augue nec, sagittis leo. Donec aliquam arcu odio, id venenatis leo rutrum id. In egestas a eros ut tristique. Sed et tortor dolor. Aliquam at vulputate elit. Proin scelerisque viverra lectus at ornare. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


