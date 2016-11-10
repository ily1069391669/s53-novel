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
<meta name="keywords" content="起点中文网注册,帐号注册,起点帐号" />
<meta name="description" content="起点中文网，为你带来网络文学最新、最热、最具人气的优秀小说" />
<title>帐号注册 | 起点中文网</title>
<link rel="stylesheet" type="text/css" href="/novel/Public/Home/css/global.css?v=20160222" />
<script type="text/javascript" defer src="/novel/Public/Home/js/loginBase.js?v=20160222"></script>
</head>
<body>
<div class="header">
  <div class="header_inner">
    <div class="logo">
      <h1 class="logo_img"><a href="http://www.qidian.com/">起点中文网</a></h1>
      <h2><strong>起点通行证</strong><i>reg.qidian.com</i></h2>
    </div>
  </div>
</div> 
<link rel="stylesheet" type="text/css" href="/novel/Public/Home/css/global.css?v=20160222" />
<link rel="stylesheet" type="text/css" href="/novel/Public/Home/css/login_base.css?v=20160222" />
<link rel="stylesheet" type="text/css" href="/novel/Public/Home/css/reg.css?v=20160222" />
<script type="text/javascript">
    // sdo数据采集使用
	var ___UserId = 0;
</script>

<script type="text/javascript">
	var ___returnUrl = 'http://avd.qidian.com/OALoginJump.aspx?qd_skip=1&ReturnUrl=http%3A%2F%2Factivity.qidian.com%2Fnewuser%2Findex';
	var ___regType='3';
	var ___registerSource = 'regnewpcweb';

	var EnablePasswordNewRule = 'false';
	var EnableNewPhoneRegister = 'true';
	
	var LoginConfig = {
		AppId: '10',
		AreaId: '1',
		serviceUrl: 'http://avd.qidian.com/OALoginJump.aspx?qd_skip=1&ReturnUrl=http%3A%2F%2Factivity.qidian.com%2Fnewuser%2Findex',
		format: 'jsonp',
		type: 3,
		unionDisplay: '',
		AcsLoginIp: '202.102.67.89'	
	};
	
	var RegTips = {
		SelectCountry: '请输入国家/地区名称',
		RegButtonValue: ['立 即 注 册', '正在注册...','提交验证码','正在提交...'],
		CodeTip: ['请输入验证码', '验证码错误'],
		Password2Tip: ['请输入确认密码', '两次输入密码不一致'],
		PasswordTip: ['不能是9位以下纯数字', '不能包含特殊字符', '长度为4-20个字符', '长度为6-18个字符'],
		ValidateAccountTip: ['该帐号已注册', '用户名已经存在', '验证失败，请稍后重试', '该邮箱帐号已注册', '该邮箱账号尚未验证'],
		UserNameTip: ['请输入用户名', '用户名不能包含空格', '不能使用中文', '不能包含特殊字符', '用户名首位须为字母', '长度为4-16个字符'],
		RegisterTip: ['用户名已经存在', '注册失败，请稍后重试', '帐号注册失败，请稍后重试', '网络错误或超时，请稍后重试'],
		MailNameTip: ['请输入邮箱', '邮箱填写错误', '目前只支持.com .net .cn .org后缀的邮箱'],
		SendMailTip: ['您发送次数过多，请到邮箱查阅', '发送成功！如未收到，(<span>60</span>)秒后可以再次尝试！', '发送失败，请(<span>60</span>)秒后可以再次尝试！', '网络错误或超时，(<span>60</span>)秒后可以再次尝试'],
		SendCodeTip: ['发送中...', '获取短信验证码', '验证码发送失败，请稍后重试', '短信发送失败，请稍后重试', '重新发送'],
		PhoneNameTip: ['该手机号已注册', '手机号格式不正确', '手机验证码输入错误', '手机号不能为空', '请输入有效的手机号码', '注册失败，请稍后重试', '手机验证码已过期', '手机验证码输入错误次数超过限制']
	};
</script>

<script src="/novel/Public/Home/js/jquery.js?v=20160222" type="text/javascript"></script>
 <script src="/novel/Public/Home/js/Utility.js?v=20160222" type="text/javascript"></script>
<script src="/novel/Public/Home/js/common.js?v=20160222" type="text/javascript"></script>
<script src="/novel/Public/Home/js/RegV2.js?v=20160222" type="text/javascript"></script>

  <!-- 网站内容 -->
    <div class="content reg_area">
        <div class="content_inner">
            <div class="steps step2">
                <ol>
                    <li class="active" style="margin-left: 135px;"><i class="step3_icon"></i><span class="ts_txt">填写注册信息</span></li>
                </ol>
            </div>
            <form action="">
            <div class="reg_form_box cf">
                <div class="step_cont phone_step01">
               
                    <div class="form_line form_pwd_line">
                        <span class="form_lable">密码</span>
                        <input class="input_text gray_txt" name="email" type="password" id="txtphonepwd"
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
                    <div class="form_line">
                        <span class="form_lable">确认密码</span>
                        <input class="input_text gray_txt" name="email" type="password" id="txtphonepwd2"
                            value="" placeholder="请再次输入密码" onblur="QRegister.CheckPassword2('txtphonepwd','txtphonepwd2');"
                            onfocus="QRegister.HideError('txtphonepwd2');" >
                        <span class="tips" style="display: none"><i class="tips_icon warn_icon"></i>不能是9位以下纯数字
                        </span>
                    </div>
                    <div class="form_line form_agree">
                        <input id="agree" type="checkbox" checked="true" name="agree" onclick="$('.form_agree label').css('border', '0px');">
                        <label for="agree">
                            我已阅读并同意<a href="pact.php?appId=10&areaId=1&unionDisplay=&returnurl=http%3A%2F%2Favd.qidian.com%2FOALoginJump.aspx%3Fqd_skip%3D1%26ReturnUrl%3Dhttp%253A%252F%252Factivity.qidian.com%252Fnewuser%252Findex" target="_blank">《起点中文网用户服务协议》</a></label>
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

</script>
<!-- 底部版权 -->
<div id="footer">
  <div class="foot">
    <p class="alink">
    	
   	</p>
    <p class="copy_right">Copyright © 2012-2016 Qidian.com All Rights Reserved.  上海玄霆娱乐信息科技有限公司 版权所有<br>
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