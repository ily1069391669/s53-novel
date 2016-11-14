<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta name="robots" content="all">
<meta name="googlebot" content="all">
<meta name="baiduspider" content="all">
<!-- 启用IE 标准模式 -->
<meta http-equiv="X-UA-Compatible" content="edge">
<!-- 设置编码 utf-8 -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="本页版权 www.qidian.com 起点中文网所有。All Rights Reserved" />
<meta name="keywords" content="子不语小说网注册,帐号注册,子不语帐号" />
<meta name="description" content="子不语小说网，为你带来网络文学最新、最热、最具人气的优秀小说" />
<title>帐号注册 | 子不语小说网</title>
<link rel="stylesheet" type="text/css" href="/zyjbook/Public/Home/css/global.css?v=20160222" />
<script type="text/javascript" defer src="/zyjbook/Public/Home/js/loginBase.js?v=20160222"></script>
<style>
/*性别按钮特效*/
#sex:active {
  -webkit-transform: scale(1.5);
  -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}
</style>


</head>
<body>
<div class="header">
  <div class="header_inner">
    <div class="logo">
      <h1 class="logo_img"><a href="http://www.qidian.com/">子不语小说网</a></h1>
      <h2><strong>子不语注册</strong><i>reg.zibuyu.com</i></h2>
    </div>
  </div>
</div> 
<link rel="stylesheet" type="text/css" href="/zyjbook/Public/Home/css/global.css?v=20160222" />
<link rel="stylesheet" type="text/css" href="/zyjbook/Public/Home/css/login_base.css?v=20160222" />
<link rel="stylesheet" type="text/css" href="/zyjbook/Public/Home/css/reg.css?v=20160222" />
<script type="text/javascript">
    // sdo数据采集使用
	var ___UserId = 0;
</script>



<script src="/zyjbook/Public/Home/js/jquery.js?v=20160222" type="text/javascript"></script>
 <script src="/zyjbook/Public/Home/js/Utility.js?v=20160222" type="text/javascript"></script>
<script src="/zyjbook/Public/Home/js/common.js?v=20160222" type="text/javascript"></script>
<script src="/zyjbook/Public/Home/js/RegV2.js?v=20160222" type="text/javascript"></script>

  <!-- 网站内容 -->
    <div class="content reg_area">
        <div class="content_inner">
            <div class="steps step2">
                <ol>
                    <li class="active" style="margin-left: 135px;"><i class="step3_icon"></i><span class="ts_txt">填写注册信息</span></li>
                </ol>
            </div>
            <form action="<?php echo U('Register/insert');?>" method="post">
            <div class="reg_form_box cf">
                <div class="step_cont phone_step01">
                    <!-- 昵称 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">昵称</span>
                        <input class="input_text gray_txt" onblur="check(this)" name="log_name" type="text" id="txtphonepwd"
                            value="" placeholder="1-16个字符,支持中英文数字、减号或下划线" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" ><span></span>
                        <!--密码强度 class为rankLow为弱rankMiddle中-->
                        <span class="tips" style="display: inline-block;"><i class="pwd_strength rankLow"
                            style="display: none"></i><i class="pwd_strength rankMiddle" style="display: none;">
                            </i><i class="pwd_strength rankHigh" style="display: none;"></i></span>
                        <!--密码输入提示class="default"为默认class="yes"密码输入正确class="no"密码输入错误提示-->
                        <div class="pwd_tips hide" id="pwd_tips" style="display: none">
                            <span class="default" id="pwd_tip1">长度为6-18个字符</span> <span class="yes" id="pwd_tip3">
                                不能包含空格</span> <span class="no" id="pwd_tip2">不能是9位以下纯数字</span>
                        </div>
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <!-- 昵称 end -->

                    <!-- 真实姓名 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">真实姓名</span>
                        <input class="input_text gray_txt" name="username" type="text" id="txtphonepwd"
                            value="" placeholder="请填写您的真实姓名" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" >
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <!-- 真实姓名 end -->
               
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">密码</span>
                        <input class="input_text gray_txt" name="password" type="password" id="txtphonepwd"
                            value="" placeholder="6-18位大小写字母、符号或数字" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" >
                        <!--密码强度 class为rankLow为弱rankMiddle中-->
                        <span class="tips" style="display: inline-block;"><i class="pwd_strength rankLow"
                            style="display: none"></i><i class="pwd_strength rankMiddle" style="display: none;">
                            </i><i class="pwd_strength rankHigh" style="display: none;"></i></span>
                        <!--密码输入提示class="default"为默认class="yes"密码输入正确class="no"密码输入错误提示-->
                        <div class="pwd_tips hide" id="pwd_tips" style="display: none">
                            <span class="default" id="pwd_tip1">长度为6-18个字符</span> <span class="yes" id="pwd_tip3">
                                不能包含空格</span> <span class="no" id="pwd_tip2">不能是9位以下纯数字</span>
                        </div>
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <div class="form_line  form_pwd_line">
                        <span class="form_lable">确认密码</span>
                        <input class="input_text gray_txt" name="repassword" type="password" id="txtphonepwd2"
                            value="" placeholder="请再次输入密码" onblur="QRegister.CheckPassword2('txtphonepwd','txtphonepwd2');"
                            onfocus="QRegister.HideError('txtphonepwd2');" >
                        <span class="tips" style="display: none"><i class="tips_icon warn_icon"></i>不能是9位以下纯数字
                        </span>
                    </div>

                    <!-- 性别 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">性别</span>
                        <input id="sex" type="radio" name="sex" value="0" checked / style="margin-top:10px;">女&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input id="sex" type="radio" name="sex" value="1" / style="margin-top:10px;">男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="sex" type="radio" name="sex" value="2" / style="margin-top:10px;">保密
                    </div>
                    <!-- 性别 end -->

                    <!-- 地址 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">地址</span>
                        <input class="input_text gray_txt" name="address" type="text" id="txtphonepwd"
                            value="" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"  placeholder="请填写您的现居地址" 
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" >
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <!-- 地址 end -->

                    <!-- 电话 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">手机号码</span>
                        <input class="input_text gray_txt" name="phone" type="text" id="txtphonepwd"
                            value="" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"  placeholder="+86" 
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" >
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <!-- 电话 end -->

                    <!-- 邮箱 start -->
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">邮箱</span>
                        <input class="input_text gray_txt" name="email" type="text" id="txtphonepwd"
                            value="" onfocus="QRegister.ShowPswError('txtphonepwd', 0);"  placeholder="请输入您的邮箱" 
                            onblur="QRegister.CheckPassword('txtphonepwd');" onkeyup="QRegister.ShowPswError('txtphonepwd', 0);" >
                        <span class="tips" style="display: none"><i class="tips_icon true_icon"></i></span>
                    </div>
                    <!-- 邮箱 end -->



                    <div class="form_line form_agree">
                        <input id="agree" type="checkbox" checked="true" name="agree" onclick="$('.form_agree label').css('border', '0px');">
                        <label for="agree">
                            我已阅读并同意<a href="pact.php?appId=10&areaId=1&unionDisplay=&returnurl=http%3A%2F%2Favd.qidian.com%2FOALoginJump.aspx%3Fqd_skip%3D1%26ReturnUrl%3Dhttp%253A%252F%252Factivity.qidian.com%252Fnewuser%252Findex" target="_blank">《子不语小说网用户服务协议》</a></label>
                    </div>
                    <div class="form_line">
                        <!--按钮不可点状态class='btn btn_disabled' input为disabled 可点状态class="btn btn_default"-->
                        <input type="submit" name="button" id="btnPhoneRegister" value="立即注册" class="btn btn_default"
                            onclick="QRegister.PhoneRegister.Register();">
                    </div>
                    <div class="form_line">
                        
                </div>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript">

var osel=document.getElementById("selcountry");
var oul=document.getElementById("countrylist");
var aMenu2=oul.getElementsByTagName('div');
oul.onmouseover=osel.onmouseover=function()
{
	oul.style.display='block' ;
};
oul.onmouseout=osel.onmouseout=function()
{
	oul.style.display='none';
};
for(var i=0; i<aMenu2.length; i++)
{
	aMenu2[i].index=i;
	aMenu2[i].onclick=function()
	{	
		osel.innerHTML=this.innerHTML;		
		oul.style.display='none'
	};
};

// 判断昵称对错
function check(obj)
{
    var log_name = obj.value;
    var ajax = new XMLHttpRequest();
    ajax.open('post','RegisterController.class.php',true);
    // 使用POST时，需要添加POST的请求头部文件
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.send("username="+username);
    ajax.onreadystatechange=function()
    {
        if (ajax.status == 200 && ajax.readyState == 4) 
        {
           var result = ajax.responseText;
                        if(result == 1){
                            obj.nextSibling.innerHTML = "<span style='color:red'>×</span>";
                        }else{
                            obj.nextSibling.innerHTML = "<span style='color:green'>√</span>";
                        } 
        }
    }
}





</script>
<!-- 底部版权 -->
<div id="footer">
  <div class="foot">
    <p class="alink">
    	
   	</p>
    <p class="copy_right">Copyright © 2012-2016 Qidian.com All Rights Reserved.  上海子不语信息科技有限公司 版权所有<br>
      增值电信业务经营许可证沪B2-20080046    沪网文[2012]0068-008    新出网证(沪)字010    沪ICP备08017520号-1 </p>
  </div>
</div>
</body>
</html>
<script type="text/javascript" src="http://uedas.qidian.com/javascript/statlib.js"></script><script type="text/javascript">CmfuTracker();</script><script type='text/javascript'>var _beacon=''; if(typeof GetCookie != 'undefined' && GetCookie != null) _beacon = 'stat_gid=' + GetCookie('stat_gid');   </script><script type='text/javascript' src='http://uedas.qidian.com/javascript/dw_beacon.js'></script><!-- 211.161.196.173 --><!-- qd16-174 --><!-- 2016-11-10 14:24:21 -->
<!--Accept:
Accept-Encoding:
Cache-Control:
User-Agent:
ContentType:
-->