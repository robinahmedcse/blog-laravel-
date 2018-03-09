<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Red Blog Theme</title>
        <meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
        <meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
        <link href="{{asset('public/forntEnd/')}}/templatemo_style.css" rel="stylesheet" type="text/css" />

    </head>
 <body>

<div id="templatemo_top_wrapper">
    @include('forntEnd.includes.top-menu')
</div>

@include('forntEnd.includes.header')

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

          @yield('mainContaint')


            <div id="templatemo_sidebar">

@include('forntEnd.includes.BlogCategory')
@include('forntEnd.includes.recentBlog')
@include('forntEnd.includes.ads')               
            </div>

            <div class="cleaner"></div>

        </div>

    </div>

    <div id="templatemo_main_bottom"></div>

</div>

@include('forntEnd.includes.footer')


</html>