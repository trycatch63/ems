<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('/front/') }}/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/coin-slider.css" />
    <script type="text/javascript" src="{{ asset('/front/') }}/js/cufon-yui.js"></script>
    <script type="text/javascript" src="{{ asset('/front/') }}/js/cufon-aller.js"></script>
    <script type="text/javascript" src="{{ asset('/front/') }}/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('/front/') }}/js/script.js"></script>
    <script type="text/javascript" src="{{ asset('/front/') }}/js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
    @include('front.includes.header')
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                @yield('content')
            </div>
                @include('front.includes.sidebar')
            <div class="clr"></div>
        </div>
    </div>
    @include('front.includes.footer')
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
