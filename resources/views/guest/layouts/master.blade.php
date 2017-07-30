<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        @include('guest.layouts.page_head')
        @yield('css')
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        @include('guest.layouts.sidebar')
        <!-- BEGIN CONTENT -->
        <div class="content">
            @yield('contents')
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2017 &copy; Processer - Develope by ChikaTeam.
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        @include('guest.layouts.js')
        @yield('js')
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>