<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"C:\wamp64\www\o2o25project\tp5\public/../application/index\view\Forget\forget2.html";i:1530609470;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" contect="http://www.webqin.net">
<title>忘记密码</title>
<link type="text/css" href="/static/homes/foget/css/css.css" rel="stylesheet" />
<script type="text/javascript" src="/static/homes/foget/js/jquery-1.8.3-min.js"></script>
<script type="text/javascript">
 //导航定位
 $(function(){
	// $(".nav li:eq(2) a:first").addClass("navCur")
	 //验证手机 邮箱
	 $(".selyz").change(function(){
	   var selval=$(this).find("option:selected").val();
		 if(selval=="0"){
			 $(".sel-yzsj").show()
			 $(".sel-yzyx").hide()
       $(".phone-one").show();
       $(".subtijiao").show();
			 }
		 else if(selval=="1"){
			 $(".sel-yzsj").hide()
			 $(".sel-yzyx").show()
       $(".phone-one").hide();
       $(".subtijiao").hide();
			 }
		 })
	 })
 //var check = $(".selyz").val();
 console.log($(".option"));
 // if(check){
 //  $(".sel-yzsj").show()
 //  $(".sel-yzyx").hide()
 //  $(".phone-one").show();
 // }else{
 //  $(".sel-yzsj").hide()
 //  $(".sel-yzyx").show()
 //  $(".phone-one").hide();
 //  $(".subtijiao").hide();
 // }
</script>
</head>

<body style="background:url('/static/homes/images/bg.jpg');">

  <div class="content">
   <div class="web-width">
     <div class="for-liucheng">
      <div class="liulist for-cur"></div>
      <div class="liulist for-cur"></div>
      <div class="liulist"></div>
      <div class="liulist"></div>
      <div class="liutextbox">
       <div class="liutext for-cur"><em>1</em><br /><strong>填写账户名</strong></div>
       <div class="liutext for-cur"><em>2</em><br /><strong>验证身份</strong></div>
       <div class="liutext"><em>3</em><br /><strong>设置新密码</strong></div>
       <div class="liutext"><em>4</em><br /><strong>完成</strong></div>
      </div>
     </div><!--for-liucheng/-->
     <form action="/forget/forget2" method="get" class="forget-pwd">
       <dl>
        <dt>验证方式：</dt>
        <dd>
         <select class="selyz" name="check">
         <?php if($kg==1): ?>
          <option value="0">手机验证</option>
          <option value="1">邮箱验证</option>
         <?php elseif($kg==2): ?>
         <option class="option" value="0" check='1'>手机验证</option>
         <?php else: ?>
         <option class="option" value="1" check='0'>邮箱验证</option>
         <?php endif; ?>
         </select>
        </dd>
        <div class="clears"></div>
       </dl>
       <dl class="sel-yzsj" <?php if($kg==3): ?>style="display:none"<?php endif; ?>>
        <dt>手机号：</dt>
        <dd><input type="text" value="<?php echo $phone; ?>" readonly  /></dd>
        <input type="hidden" value="<?php echo $phone1; ?>" id="js-mobile_ipt" >
        <div class="clears"></div>
       </dl>
       <dl class="sel-yzyx"  <?php if($kg==1): ?>style="display:none"<?php endif; ?>>
        <dt>邮箱号：</dt>
        <dd><input type="text" value="<?php echo $email; ?>" readonly id="email"/><a href="javascript:;" id="sendemail" class="button" style="margin-left:10px;">发送邮件</a></dd>
        <div class="clears"></div>
       </dl>
       <dl class="phone-one" <?php if($kg==3||$kg==2): ?>style="display:none"<?php endif; ?>>
        <dt>手机校验码：</dt>
        <dd id="dd"><input type="text" name="code" /> <a href="javascript:;" id="code" class="button">发送验证码</a></dd>
        <span style="margin-left:110px;position:relative;top:10px;"></span>
        <div class="clears"></div>
       </dl>
       <input type="hidden" name="id" value="<?php echo $id; ?>">
       <div class="subtijiao" <?php if($kg==3): ?>style="display:none"<?php endif; ?>><input type="submit" value="提交<?php echo $kg; ?>" /></div>
      </form><!--forget-pwd/-->
   </div><!--web-width/-->
  </div><!--content/-->

</body>
<link href="/static/homes/reg/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
//设置开关
flag=false;

//发送手机号验证
$("#code").click(function(){
  //获取输入的手机号
  p=$("#js-mobile_ipt").val();
  o=$(this);
  $.post("/forget/phone",{p:p},function(data){
     if(data.code==000000){
      //倒计时
      m=60;
      mytime=setInterval(function(){
        m--;
        //赋值
        o.html(m+"秒重新获取");
        //禁用
        o.attr('disabled',true);
        o.css({"pointer-events":"none",'color':'#ccc'});
        //判断
        if(m==0){
          //清除定时器
          clearInterval(mytime);
          //button 赋值
          o.html("重新获取");
          //激活
          o.attr('disabled',false);
          o.css({"pointer-events":"auto",'color':'#fff'});
        }
       },1000);
     }
  },'json');
});

//失去焦点校验验证码
$("input[name='code']").blur(function(){
  code=$("input[name='code']").val();
  $.post("/forget/code",{code:code},function(data){
    if(data==1){
      flag=true;
      $("#dd").next('span').html('验证码正确').css('color','green');
    }
    if(data==0){
      flag=false;
      $("#dd").next('span').html('验证码有误').css('color','red');
    }
    if(data==2){
      flag=false;
      $("#dd").next('span').html('验证码不能为空').css('color','red');
    }
    if(data==3){
      flag=false;
      $("#dd").next('span').html('发送验证码失败').css('color','red');
    }
  },'json');
});

//发送邮件
$("#sendemail").click(function(){
  //获取邮箱号
  e=$("#email").val();
  o=$(this);
  id=$("input[name='id']").val();
  $.post("/forget/email",{e:e,id:id},function(data){
    if(data){
      o.html("已发送");
      o.attr('disabled',true);
      o.css({"pointer-events":"none",'color':'#ccc'});
    }
  },'json');
});

$('form').submit(function(){
  $("input[name='code']").trigger("blur");
  if(flag){
    return true;
  }else{
    return false;
  }
});
</script>
</html>
