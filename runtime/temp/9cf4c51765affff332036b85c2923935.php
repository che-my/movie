<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"C:\wamp64\www\o2o25project\tp5\public/../application/admin\view\MovieImage\add.html";i:1530329174;s:77:"C:\wamp64\www\o2o25project\tp5\application\admin\view\AdminPublic\public.html";i:1530412825;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>图片列表</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/static/admins/css/bootstrap.min.css" />
<link rel="stylesheet" href="/static/admins/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/static/admins/css/fullcalendar.css" />
<link rel="stylesheet" href="/static/admins/css/matrix-style.css" />
<link rel="stylesheet" href="/static/admins/css/matrix-media.css" />
<link rel="stylesheet" href="/static/admins/css/colorpicker.css" />
<link rel="stylesheet" href="/static/admins/css/datepicker.css" />
<link rel="stylesheet" href="/static/admins/css/uniform.css" />
<link rel="stylesheet" href="/static/admins/css/select2.css" />
<link rel="stylesheet" href="/static/admins/css/bootstrap-wysihtml5.css" />
<link href="/static/admins/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/static/admins/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
  .table td{text-align:center;}
  #pages li a{color:#fff;}
  #pages li {
      float: left;
      height: 30px;
      padding: 0 10px;
      display: block;
      font-size: 16px;
      line-height: 30px;
      text-align: center;
      cursor: pointer;
      outline: none;
      background-color: #2E363F;
      color: #fff;
      text-decoration: none;
      border-right: 1px solid rgba(0, 0, 0, 0.25);
      border-top: 1px solid rgba(0, 0, 0, 0.5);
      border-left: 1px solid rgba(0, 0, 0, 0.25);
      -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
      -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
      box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
    }
    #pages .pagination{
      margin:0 !important;
    }
    #pages .pagination .disabled {
      color: #666;
      cursor: default;
    }
    #pages .pagination .active {
      background:#fff;
      color: blue;
      border-right: 1px solid rgba(0, 0, 0, 0.5);
      background-image: none;
    }
    #pages .pagination{
      margin:5px 0px;
    }
</style>
</head>
<body>

<!--头部开始-->
<div id="header">
  <h1><a href="dashboard.html">MatAdmin</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">欢迎<?php echo \think\Session::get('adminuser'); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/admin/info/id/<?php echo \think\Session::get('adminuserid'); ?>/name/<?php echo \think\Session::get('adminuser'); ?>"><i class="icon-user"></i> 个人资料</a></li>
        <li class="divider"></li>
        <li><a href="/adminlogin/logout"><i class="icon-key"></i> 退出</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="/mailer/list" data-target="#menu-messages"><i class="icon icon-envelope"></i> <span class="text">站内信</span></a>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
    <li class=""><a title="" href="/adminlogin/logout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
  </ul>
</div>
<!--头部结束-->
<!--主体开始-->
<!--start-top-serch-->
<div id="search">
 <!--  <a href="window.reload()" class="btn btn-info"><i class="icon-search icon-white"></i></a> -->
</div>
<!--close-top-serch-->
<!--左边菜单开始-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制台</a>
  <ul>
    <li class="active"><a href="/admin/index"><i class="icon icon-home"></i> <span>首页</span></a> </li>
    <li class="submenu " > <a href="#"><i class="icon icon-th-list"></i><span>管理员管理</span> </a>
      <ul >
        <li><a href="/admin/list" >管理员列表</a></li>
        <li><a href="/role/index">角色列表</a></li>
        <li><a href="/adminlists/index">权限列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-user"></i><span>用户管理</span> </a>
      <ul >
        <li><a href="/user/list">用户列表</a></li>
        <li><a href="/user/trash">用户回收站</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-certificate"></i><span>影院管理</span> </a>
      <ul >
         <li><a href="/cinema/index">影城/影院管理</a></li>
        <li><a href="/cinema/area">影院区域分布管理</a></li>
        <li><a href="/cinema/halltype">放映厅类型管理</a></li>
        <li><a href="/hall/list">放映厅列表</a></li>
        <li><a href="/relss/list">场次管理</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-facetime-video"></i><span>影片管理</span> </a>
      <ul >
        <li><a href="/movie/list">影片列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-reorder"></i><span>订单管理</span> </a>
      <ul >
        <li><a href="/order/list">订单列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-tasks"></i><span>资讯管理</span> </a>
      <ul >
        <li><a href="/information/list">资讯列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-star-empty"></i><span>评分管理</span> </a>
      <ul >
        <li><a href="/grade/list">评分列表</a></li>
      </ul>
    </li>
    <li class="submenu open"> <a href="#"><i class="icon icon-th-list"></i><span>图片管理</span> </a>
      <ul style="display:block">
        <li><a href="/movieimage/list">图片列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon  icon-picture"></i><span>轮播图管理</span> </a>
      <ul >
        <li><a href="/carousel/list">轮播图列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-random"></i><span>广告管理</span> </a>
      <ul >
        <li><a href="/ads/list">广告列表</a></li>
      </ul>
    </li>
    <li class="submenu "> <a href="#"><i class="icon icon-share-alt"></i><span>友情链接管理</span> </a>
      <ul >
        <li><a href="/link/list">友情链接列表</a></li>
  </ul>
</div>
<!--左边菜单结束-->
<!--main-container-part-->
<div id="content">

  <div id="content-header">
    <div id="breadcrumb">
     <a href="/admin/index" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i>首页</a>
     <a href="/movieimage/list" class="current">图片管理</a><a href="/movieimage/add" class="current">添加图片</a><a href="javascript:history.go(-1)" class="current"><i class="icon-undo"></i>后退</a>
    </div>
   </div>
  <div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>添加图片</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" action="/movieimage/insert" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
                <div class="control-group">
                  <label class="control-label">相关电影</label>
                  <div class="controls">
                    <input type="text" class="span4" name="movie" id="movie" placeholder="输入电影的中文名称或者英文名称"><br>
                  </div>
                </div>
                <div class="control-group span12" style="margin:0;" >
                    <div class="span4">
                          <label class="control-label">导演</label>
                          <div class="controls">
                            <input type="text" name="director" id="director">
                          </div>
                          <span style="margin-left:200px;display:none;"></span>
                    </div>
                    <div class="span4">
                        <label class="control-label"><i class="icon-picture" style="margin-right:7px;"></i>上 传 : </label>
                        <div class="controls">
                          <input type="file" name="file[]"/>
                        </div>
                    </div>
                </div>
                <div class="control-group span12" style="margin:0;" id="clone">
                    <div class="span4">
                          <label class="control-label">主演</label>
                          <div class="controls">
                            <input type="text" name="actor[]" id="actor">
                          </div>
                          <span style="margin-left:200px;display:none;"></span>
                    </div>
                    <div class="span4">
                        <label class="control-label"><i class="icon-picture" style="margin-right:7px;"></i>上 传 : </label>
                        <div class="controls">
                          <input type="file" name="file[]"/>
                        </div>
                    </div>
                </div>
                <i class="icon-plus" style="position:relative;left:900px;top:-35px;cursor:pointer;z-index:99" id="addclone"></i>
                <div class="form-actions">
                  <input type="submit" value="提交" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="/static/admins/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admins/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
  $("#movie").blur(function(){
    m = $(this).val();
    obj = $(this);
    $.get("/movieimage/select",{m:m},function(data){
      if(data){
        if(data['code']==0){
          layer.msg(data['msg'],{icon:2,time:3000});
        }else if(data == "2"){
          layer.msg("没有相关电影资源,请输入其他名称",{icon:2,time:3000});
        }else{
          obj.after("<br><span>请选择以下相关电影</span><br>");
          for(var i=0;i<data.length;i++){
            inp = $("<label style='display:inline-block;'><input type='radio' name='mid' value='"+data[i].id+"' style='margin:0;'><span style='margin:0 10px 0 0;'>"+data[i].ch_name+"</span></label>");
            obj.next("br").next("span").next("br").after(inp);
          }
        }
      }else{
        layer.msg('请输入电影的中文名称或者英文名称!',{icon: 5,time:3000});
      }
    });
  })
  //获取焦点 删除之前失去焦点添加的内容
  $("#movie").focus(function(){
    $(this).nextAll().remove();
  });

  //克隆节点
  $("#addclone").click(function(){
    clone=$("#clone");
    $(this).before(clone.clone(true));
  });

  $('form').submit(function(){
    if($("#movie").val()==''){
      return false;
    }else{
      return true;
    }
  });
</script>

</div>
<!--主体结束-->
<!--尾部开始-->
<div class="row-fluid">
  <div id="footer" class="span12">Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://www.shenlan.com">深蓝电影前台首页</a> </div>
</div>

<!--尾部结束-->

<script src="/static/admins/js/excanvas.min.js"></script>
<script src="/static/admins/js/jquery.min.js"></script>
<script src="/static/admins/js/jquery.ui.custom.js"></script>
<script src="/static/admins/js/bootstrap.min.js"></script>
<script src="/static/admins/js/jquery.flot.min.js"></script>
<script src="/static/admins/js/jquery.flot.resize.min.js"></script>
<script src="/static/admins/js/jquery.peity.min.js"></script>
<script src="/static/admins/js/fullcalendar.min.js"></script>
<script src="/static/admins/js/matrix.js"></script>
<script src="/static/admins/js/matrix.dashboard.js"></script>
<script src="/static/admins/js/jquery.gritter.min.js"></script>
<script src="/static/admins/js/matrix.interface.js"></script>
<script src="/static/admins/js/matrix.chat.js"></script>
<script src="/static/admins/js/jquery.validate.js"></script>
<script src="/static/admins/js/matrix.form_validation.js"></script>
<script src="/static/admins/js/jquery.wizard.js"></script>
<script src="/static/admins/js/jquery.uniform.js"></script>
<script src="/static/admins/js/select2.min.js"></script>
<script src="/static/admins/js/matrix.popover.js"></script>
<script src="/static/admins/js/matrix.tables.js"></script>
<script type="text/javascript" src="/static/admins/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
