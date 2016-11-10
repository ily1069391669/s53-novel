<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>登录页面</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/novel/Public/Admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/novel/Public/Admin/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <link href="/novel/Public/Admin/css/animate.css" rel="stylesheet">
    <link href="/novel/Public/Admin/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">H+</h1>

            </div>
            <h3>欢迎使用 H+</h3>

            <form class="m-t" role="form" action="<?php echo U('Admin/Index/do_login');?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" name="log_name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/novel/Public/Admin/js/jquery-2.1.1.min.js"></script>
    <script src="/novel/Public/Admin/js/bootstrap.min.js?v=3.4.0"></script>

    <script type="text/javascript" src="/novel/Public/Admin/http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>