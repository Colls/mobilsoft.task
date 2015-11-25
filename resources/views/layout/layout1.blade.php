<!-- header start -->
<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {!! Html::favicon('favicon.ico') !!}
    <title>Mobilsoft task</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('css/myCss.css') !!}
    @yield('css')
</head>

<body>
<header class="text-center">
    <h4>Отчётная страница</h4>
</header>
<!-- header end -->

<!-- content start -->
<div class="main-container container">
    @yield('content')
</div>
<!-- content end -->
<!-- footer start -->
<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="copyright text-muted text-center">@Mobilsoft.task  {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>

<!-- Custom Theme JavaScript -->
{!! Html::script('js/jquery214.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/commonScript.js') !!}
@yield('js')

</body>
</html>
<!-- footer end -->
