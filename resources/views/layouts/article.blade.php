
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">



    {{--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    {{--<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    @section('styl')
        @show
    <title>文章管理 @yield('title')</title>

</head>
<body>
{{--主体--}}
<div class="container">
    {{--导航--}}
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="#">测试</a>
                </li>
                <li class="disabled">
                    <a href="#">AA</a>
                </li>
                <li class="dropdown pull-right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        拉下1<strong class="caret"></strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">拉下</a>
                        </li>
                        <li>
                            <a href="#">斯蒂芬</a>
                        </li>
                        <li>
                            <a href="#">梵蒂冈</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">无法</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="jumbotron well">
            <h2>文章管理 - @yield('header')</h2>
            </div>

        </div>

    </div>
    {{--内容--}}
    <div class="row clearfix">
        <div class="col-md-2 column">
            {{--侧边栏--}}
            @section('leftmenu')
            <div class="btn-group btn-group-vertical btn-group-lg">
                <button class="btn btn-default" type="button">
                    <em class="glyphicon glyphicon-align-left"></em>文章管理</button>
                {{--默认选择 在<a>--}}
                {{--{{Request::getPathInfo()=='article/index' ? 'active':''}}--}}
                <button class="btn btn-default" type="button">
                    <em class="glyphicon glyphicon-align-center"></em> 用户管理</button>
                <button class="btn btn-default" type="button">
                    <em class="glyphicon glyphicon-align-right"></em> 检查</button>
                <button class="btn btn-default" type="button">
                    <em class="glyphicon glyphicon-align-justify"></em> 学习
                </button>
            </div>
                @show
        </div>
        {{--文章--}}
        <div class="col-md-10 column">
    @yield('content')
        </div>
    </div>
    {{--页尾--}}
    <div class="jumbotron">
        @section('footer')
        <div class="col-md-12 column text-center">
        文章管理的页尾 联系我 QQ:1239181489
        </div>
            @show
    </div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@section('javescript')
    @show
</body>
</html>
