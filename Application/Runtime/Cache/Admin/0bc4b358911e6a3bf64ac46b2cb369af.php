<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - 表单验证 jQuery Validation</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/novel/Public/Admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/novel/Public/Admin/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="/novel/Public/Admin/css/animate.css" rel="stylesheet">
    <link href="/novel/Public/Admin/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/novel/Public/Admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Beaut-zihan</strong>
                             </span>  <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a href="profile.html">个人资料</a>
                                </li>
                                <li><a href="contacts.html">联系我们</a>
                                </li>
                                <li><a href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="login.html">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            H+
                        </div>

                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">主页</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index_1.html">主页示例一</a>
                            </li>
                            <li><a href="index_2.html">主页示例二</a>
                            </li>
                            <li><a href="index_3.html">主页示例三</a>
                            </li>
                            <li><a href="index_4.html">主页示例四</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span><span class="label label-danger pull-right">2.0</span></a>
                    </li>                    
                    <li>
                        <a href="index.html#"><i class="fa fa fa-globe"></i> <span class="nav-label">v2.0新增</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="toastr_notifications.html">Toastr通知</a>
                            </li>
                            <li><a href="nestable_list.html">嵌套列表</a>
                            </li>
                            <li><a href="timeline_v2.html">时间轴</a>
                            </li>
                            <li><a href="forum_main.html">论坛</a>
                            </li>
                            <li><a href="code_editor.html">代码编辑器</a>
                            </li>
                            <li><a href="modal_window.html">模态窗口</a>
                            </li>
                            <li><a href="validation.html">表单验证</a>
                            </li>
                            <li><a href="tree_view_v2.html">树形视图</a>
                            </li>
                            <li><a href="chat_view.html">聊天窗口</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">图表</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_echarts.html">百度ECharts</a>
                            </li>
                            <li><a href="graph_flot.html">Flot</a>
                            </li>
                            <li><a href="graph_morris.html">Morris.js</a>
                            </li>
                            <li><a href="graph_rickshaw.html">Rickshaw</a>
                            </li>
                            <li><a href="graph_peity.html">Peity</a>
                            </li>
                            <li><a href="graph_sparkline.html">Sparkline</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="mailbox.html">收件箱</a>
                            </li>
                            <li><a href="mail_detail.html">查看邮件</a>
                            </li>
                            <li><a href="mail_compose.html">写信</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">小工具</span></a>
                    </li>
                    <li class="active">
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_basic.html">基本表单</a>
                            </li>
                            <li class="active"><a href="form_validate.html">表单验证</a>
                            </li>
                            <li><a href="form_advanced.html">高级插件</a>
                            </li>
                            <li><a href="form_wizard.html">步骤条</a>
                            </li>
                            <li><a href="form_webuploader.html">百度WebUploader</a>
                            </li>
                            <li><a href="form_file_upload.html">文件上传</a>
                            </li>
                            <li><a href="form_editors.html">富文本编辑器</a>
                            </li>
                            <li><a href="form_simditor.html">simditor</a>
                            </li>
                            <li><a href="form_avatar.html">头像裁剪上传</a>
                            </li>
                            <li><a href="layerdate.html">日期选择器layerDate</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.html">联系人</a>
                            </li>
                            <li><a href="profile.html">个人资料</a>
                            </li>
                            <li><a href="projects.html">项目</a>
                            </li>
                            <li><a href="project_detail.html">项目详情</a>
                            </li>
                            <li><a href="file_manager.html">文件管理器</a>
                            </li>
                            <li><a href="calendar.html">日历</a>
                            </li>
                            <li><a href="faq.html">帮助中心</a>
                            </li>
                            <li><a href="timeline.html">时间轴</a>
                            </li>
                            <li><a href="pin_board.html">标签墙</a>
                            </li>
                            <li><a href="invoice.html">单据</a>
                            </li>
                            <li><a href="login.html">登录</a>
                            </li>
                            <li><a href="register.html">注册</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-files-o"></i> <span class="nav-label">其他页面</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="search_results.html">搜索结果</a>
                            </li>
                            <li><a href="lockscreen.html">登录超时</a>
                            </li>
                            <li><a href="404.html">404页面</a>
                            </li>
                            <li><a href="500.html">500页面</a>
                            </li>
                            <li><a href="empty_page.html">空白页</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="typography.html">排版</a>
                            </li>
                            <li><a href="icons.html">字体图标</a>
                            </li>
                            <li><a href="iconfont.html">阿里巴巴矢量图标库</a>
                            </li>
                            <li><a href="draggable_panels.html">拖动面板</a>
                            </li>
                            <li><a href="buttons.html">按钮</a>
                            </li>
                            <li><a href="tabs_panels.html">选项卡 & 面板</a>
                            </li>
                            <li><a href="notifications.html">通知 & 提示</a>
                            </li>
                            <li><a href="badges_labels.html">徽章，标签，进度条</a>
                            </li>
                            <li><a href="layer.html">Web弹层组件layer</a>
                            </li>
                            <li><a href="tree_view.html">树形视图</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">栅格</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="table_basic.html">基本表格</a>
                            </li>
                            <li><a href="table_data_tables.html">数据表格(DataTables)</a>
                            </li>
                            <li><a href="table_jqgrid.html">jqGrid</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-picture-o"></i> <span class="nav-label">图库</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic_gallery.html">基本图库</a>
                            </li>
                            <li><a href="carousel.html">图片切换</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.html#">三级菜单 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="index.html#">二级菜单</a>
                            </li>
                            <li>
                                <a href="index.html#">二级菜单</a>
                            </li>
                            <li>
                                <a href="index.html#">二级菜单</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="webim.html"><i class="fa fa-comments"></i> <span class="nav-label">即时通讯</span><span class="label label-danger pull-right">New</span></a>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_builder.html">表单构建器</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="form_validate.html#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/novel/Public/Admin/img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 项目已处理完结
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/novel/Public/Admin/img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 这是一条测试信息
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i>  <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>表单验证</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">主页</a>
                        </li>
                        <li>
                            <a>表单</a>
                        </li>
                        <li>
                            <strong>表单验证</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>jQuery Validate 简介</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="tabs_panels.html#">选项1</a>
                                        </li>
                                        <li><a href="tabs_panels.html#">选项2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <p>jquery.validate.js 是一款优秀的jQuery表单验证插件。它具有如下特点：</p>
                                <ul>
                                    <li>安装简单</li>
                                    <li>内置超过20种数据验证方法</li>
                                    <li>直列错误提示信息</li>
                                    <li>可扩展的数据验证方法</li>
                                    <li>使用内置的元数据或插件选项来指定您的验证规则</li>
                                    <li>优雅的交互设计</li>
                                </ul>
                                <p>官网：<a href="http://jqueryvalidation.org/" target="_blank">http://jqueryvalidation.org/</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>简单示例</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="form_basic.html#">选项1</a>
                                        </li>
                                        <li><a href="form_basic.html#">选项2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal m-t" id="commentForm">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">姓名：</label>
                                        <div class="col-sm-8">
                                            <input id="cname" name="name" minlength="2" type="text" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail：</label>
                                        <div class="col-sm-8">
                                            <input id="cemail" type="email" class="form-control" name="email" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">网站：</label>
                                        <div class="col-sm-8">
                                            <input id="curl" type="url" class="form-control" name="url">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">说明：</label>
                                        <div class="col-sm-8">
                                            <textarea id="ccomment" name="comment" class="form-control" required="" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <p class="m-t">更多示例请访问官方示例页面：<a href="http://jqueryvalidation.org/files/demo/" target="_blank">查看</a>
                                </p>
                                <p>中文API可参考：<a href="http://www.w3cschool.cc/jquery/jquery-plugin-validate.html" target="_blank">http://www.w3cschool.cc/jquery/jquery-plugin-validate.html</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>完整验证表单</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="form_basic.html#">选项1</a>
                                        </li>
                                        <li><a href="form_basic.html#">选项2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal m-t" id="signupForm">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">姓氏：</label>
                                        <div class="col-sm-8">
                                            <input id="firstname" name="firstname" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">名字：</label>
                                        <div class="col-sm-8">
                                            <input id="lastname" name="lastname" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">用户名：</label>
                                        <div class="col-sm-8">
                                            <input id="username" name="username" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">密码：</label>
                                        <div class="col-sm-8">
                                            <input id="password" name="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">确认密码：</label>
                                        <div class="col-sm-8">
                                            <input id="password" name="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">确认密码：</label>
                                        <div class="col-sm-8">
                                            <input id="confirm_password" name="confirm_password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail：</label>
                                        <div class="col-sm-8">
                                            <input id="email" name="email" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">同意协议：</label>
                                        <div class="col-sm-8">
                                            <input type="checkbox" class="checkbox" id="agree" name="agree">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
                </div>
                <div>
                    <strong>Copyright</strong> H+ &copy; 2014
                </div>
            </div>

        </div>
    </div>


    </div>

    <!-- Mainly scripts -->
    <script src="/novel/Public/Admin/js/jquery-2.1.1.min.js"></script>
    <script src="/novel/Public/Admin/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/novel/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/novel/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/novel/Public/Admin/js/hplus.js?v=2.2.0"></script>
    <script src="/novel/Public/Admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="/novel/Public/Admin/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/novel/Public/Admin/js/plugins/validate/messages_zh.min.js"></script>
    <script>
        //以下为修改jQuery Validation插件兼容Bootstrap的方法，没有直接写在插件中是为了便于插件升级
        $.validator.setDefaults({
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function (element) {
                element.closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: "span",
            errorClass: "help-block m-b-none",
            validClass: "help-block m-b-none"


        });

         //以下为官方示例
        $().ready(function () {
            // validate the comment form when it is submitted
            $("#commentForm").validate();

            // validate signup form on keyup and submit
            $("#signupForm").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    topic: {
                        required: "#newsletter:checked",
                        minlength: 2
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "请输入你的姓",
                    lastname: "请输入您的名字",
                    username: {
                        required: "请输入您的用户名",
                        minlength: "用户名必须两个字符以上"
                    },
                    password: {
                        required: "请输入您的密码",
                        minlength: "密码必须5个字符以上"
                    },
                    confirm_password: {
                        required: "请再次输入密码",
                        minlength: "密码必须5个字符以上",
                        equalTo: "两次输入的密码不一致"
                    },
                    email: "请输入您的E-mail",
                    agree: "必须同意协议后才能注册"
                }
            });

            // propose username by combining first- and lastname
            $("#username").focus(function () {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = firstname + "." + lastname;
                }
            });
        });
    </script>

    <script type="text/javascript" src="/novel/Public/Admin/http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>