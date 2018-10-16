<!doctype html>
<html lang="en" class="no-js">
<head>
    @include('front.partials._head')
</head>
<body>
    
    
    <!--
		=====================
		Preloader Area Start
		=====================
	-->
    <!--
		=====================
		Preloader Area End
		=====================
	-->

    <!--=====================
		Header Area Start
		=====================-->
		
	@include('front.navs.top_nav')
    
    <!--=====================
		Header Area End
		=====================-->
    
    @yield('content')
    

	@include('front.partials.footer')
    
    @include('front.partials._js')
    
</body>
</html>
