@extends('front.layouts.app')

@section('title')
    Product Description
@endsection

@section('css')
    <style>
        .page-title-area {
            padding: 68px 0 58px;
        }
        
        .img-responsive.img-center {
            display: block;
            margin: 0 auto;
        }
        
        .m-t-n-50{
            margin-top: -50px;
        }
        
        #singlprdt-wraper-sec{
            margin-bottom: 50px;
        }
        
    </style>
@endsection



@section('content')
<!---for menu bar -->
   <section class="page-title-area" data-paroller-factor="0.5" style="background-position: center 0px;"></section>
<!---for menu bar -->
    

    <!--about section-->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="main-title">
                        <h1>{{ $product->product_name }}</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section-->
    
    
    <section id="singlprdt-wraper-sec">
			
				<div id="singlprdt-sec">
			<div class="container wraper">					
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">								
						<div class="prdSngl-img">									
							<img src="{{ $product->product_image }}" alt="">
						</div>				
					</div>						
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">									
						<div class="prdSngl">									
							<div class="prdt-dsc">
								<h2 style="margin: 20px 0px;"> Product Description </h2>
                                <p>{!! $product->product_description !!}</p>
                                <h2 style="margin: 20px 0px;">Product Cart</h2>
         
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>NAME OF SKU</th>
                                        <th>WT/PKT</th>
                                        <th>PKT/CTN</th>
                                        <th>MRP/PKT</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{!! implode('<br>',explode('/',$product->sku)) !!}</td>
                                        <td>{!! implode(' gm<br>',explode('/',$product->pkt)) !!} gm</td>
                                        <td>{!! implode('<br>',explode('/',$product->ctn)) !!}</td>
                                        <td>{!! implode('TK <br>',explode('/',$product->mrp)) !!} TK</td>
                                      </tr>
                                    </tbody>
                                  </table>
							</div>
						</div>				
					</div>
															
				</div>
			</div>
		</div>
		<!--  PRODUCT PAGE  SECTION END -->			
	</section>
    
    
    <section class="related-service section-padding">
        <div class="container">
            <div class="row">
                
                <?php $products = App\Product::where('cat_name', '=', $product->cat_name)->inRandomOrder()->limit(3)->get(); ?>
                @foreach($products as $p)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a class="" href="{{ route('productdescription',$p->slug) }}">
                        <div class="pro-grid single-member-dec wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="{{ $p->product_image }}" alt="">
                                <div class="member-overly pro-grid-overly">
                                    <h3>{{ $p->product_name }}</h3>
                                </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
  

@endsection


