<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DobaIfUa &mdash; Житло на короткий термiн</title>

    @include('layouts/metaData')
    @include('layouts.styles')
</head>
<body>

<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <header id="fh5co-header-section" class="sticky-banner">
            @include('layouts/header')
        </header>

        @yield('content')

        <footer>
            @include('layouts/footer')
        </footer>



    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

@include('layouts/scripts')




</body>
</html>

