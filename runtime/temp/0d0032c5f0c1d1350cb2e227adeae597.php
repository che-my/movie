<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"C:\wamp64\www\o2o25project\tp5\public/../application/index\view\Cinemas\indexcinema.html";i:1530233887;}*/ ?>
﻿<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
<head>
  <title>影院 - 深蓝电影 - 好电影尽在深蓝</title>
  <link rel="stylesheet" href="//ms0.meituan.net/mywww/common.4b838ec3.css"/>
  <link rel="stylesheet" href="/static/homes/css/cinemas-list.81574a4d.css"/>
  <script src="//ms0.meituan.net/mywww/stat.791ffac0.js"></script>

  <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="/static/homes/cort/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
  <style>
    @font-face {
      font-family: stonefont;

    }

    .stonefont {
      font-family: stonefont;
    }
    #pages{height:40px;margin:0 auto;text-align: center}
    #pages li a{color:#000;}
    #pages li {
      width:20px;
      float: left;
      height:35px;
      padding: 0 10px;
      display: block;
      font-size: 16px;
      line-height: 35px;
      text-align: center;
      cursor: pointer;
      margin-left:10px;
      outline: none;
      background-color: #fff;
      color: #fff;
      text-decoration: none;
      border-right: 1px solid rgba(200, 200, 200, 0.25);
      border-top: 1px solid rgba(200, 200, 200, 0.5);
      border-left: 1px solid rgba(200, 200, 200, 0.25);
      border-bottom: 1px solid rgba(200, 200, 200, 0.25);

    }
    #pages .pagination{
      margin:0 !important;
    }
    #pages .pagination .disabled {
      color: #666;
      cursor: default;
    }
    #pages .pagination .active {
      background:#EF4238;
      color: #fff;
      border-right: 1px solid rgba(200, 200, 200, 0.25);
      background-image: none;
    }
    #pages .pagination{
      margin:5px 0px;
    }
    #pages li:hover{
      border:1px solid #EF4238;
    }
</style>
</head>
<body>
<?php use think\Db;use think\Session; ?>
<?php echo widget("Publics/header"); ?>
  <div class="banner" >
    <div class="wrapper clearfix">
      <div class="celeInfo-left">
        <div class="avatar-shadow">
          <img class="avatar" src="<?php echo $movie['picurl']; ?>" alt="">
            <div class="movie-ver"><i class="imax3d"></i></div>
        </div>
      </div>
      <div class="celeInfo-right clearfix">
            <div class="movie-brief-container">
      <h3 class="name"><?php echo $movie['ch_name']; ?></h3>
      <div class="ename ellipsis"><?php echo $movie['en_name']; ?></div>
      <ul>
        <li class="ellipsis"><?php echo $movie['m_type']; ?></li>
        <li class="ellipsis">
        <?php echo $movie['country_area']; ?>
          / <?php echo $movie['m_time']; ?>分钟
        </li>
        <li class="ellipsis"><?php echo $movie['m_addtime']; ?>大陆上映</li>
      </ul>
    </div>
    <div class="action-buyBtn" style="height:120px;bottom:-50px;">
      <div class="action clearfix">
      	
        <?php if(\think\Session::get('uid')==''): ?>
        <a class='wish' data-wish="false" href="/login/index" style="height:36px">
          <div>
            <i class="icon wish-icon"></i>
              <span class="wish-msg" data-act="wish-click">想看</span>
          </div>
        </a>
        <a class="score-btn" href="/login/index" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
            <span class="score-btn-msg"  data-act="comment-open-click">
           评分
            </span>
          </div>
        </a>
        <?php else: ?>
    <a class="wish <?php if($res['want']==1): ?>active<?php endif; ?>" onclick="change(<?php echo \think\Session::get('uid'); ?>)" data-wish="false" href="javascript:;" kg="true" style="height:36px">
          <div>
            <i class="icon wish-icon"></i>
              <span class="wish-msg" data-act="wish-click"><?php if($res['want']==1): ?>已想看<?php else: ?>想看<?php endif; ?></span>
          </div>
        <?php if($movie['grade']==0): ?>
         <a class="score-btn" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"movie  data-act="comment-open-click">评分</span>
          </div>
        </a>
        <?php elseif($movie['grade']==0.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">超烂啊</span>
          </div>
        </a>
        <?php elseif($movie['grade']==1): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">超烂啊</span>
          </div>
        </a>
        <?php elseif($movie['grade']==1.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">超烂啊</span>
          </div>
        </a>
        <?php elseif($movie['grade']==2): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">比较差</span>
          </div>
        </a>
        <?php elseif($movie['grade']==2.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">比较差</span>
          </div>
        </a>
        <?php elseif($movie['grade']==3): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">比较差</span>
          </div>
        </a>
        <?php elseif($movie['grade']==3.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">差</span>
          </div>
        </a>
        <?php elseif($movie['grade']==4): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">一般般</span>
          </div>
        </a>
        <?php elseif($movie['grade']==4.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">一般般</span>
          </div>
        </a>
        <?php elseif($movie['grade']==5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">一般般</span>
          </div>
        </a>
        <?php elseif($movie['grade']==5.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">一般般</span>
          </div>
        </a>
        <?php elseif($movie['grade']==6): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">比较一般</span>
          </div>
        </a>
        <?php elseif($movie['grade']==6.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">还可以</span>
          </div>
        </a>
        <?php elseif($movie['grade']==7): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">好</span>
          </div>
        </a>
        <?php elseif($movie['grade']==7.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">比较好</span>
          </div>
        </a>
        <?php elseif($movie['grade']==8): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">很好</span>
          </div>
        </a>
        <?php elseif($movie['grade']==8.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">优秀</span>
          </div>
        </a>
        <?php elseif($movie['grade']==9): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">很优秀</span>
          </div>
        </a>
        <?php elseif($movie['grade']==9.5): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">棒极了</span>
          </div>
        </a>
        <?php elseif($movie['grade']==10): ?>
        <a class="score-btn active" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
			
            <span class="score-btn-msg"  data-act="comment-open-click">完美</span>
          </div>
        </a>
        <?php else: ?>
			<a class="score-btn" id="comment-entry1" href="javasript:;" data-bid="b_rxxpcgwd" style="height:36px">
          <div>
            <i class="icon score-btn-icon"></i>
            <span class="score-btn-msg"  data-act="comment-open-click">评分</span>
          </div>
        </a>
        <?php endif; endif; ?>
      </div>
        <a class="btn buy" href="/content/<?php echo $movie['id']; ?>.html">查看更多电影详情</a>
    </div>

    <div class="movie-stats-container">

        <div class="movie-index">
          <p class="movie-index-title">用户评分</p>
          <div class="movie-index-content score normal-score">
              <span class="index-left info-num ">
                <span class="stonefont"><?php echo $movie['grade']; ?></span>
              </span>
              <div class="index-right">

                <div class="star-wrapper">
                  <div class="star-on" style="width:90%;"></div>
                </div>
                 <span class="score-num"><span class="stonefont"><?php echo $movie['count']; ?></span>人评分</span>
              </div>
          </div>
        </div>
    </div>

      </div>
    </div>
</div>
    <div class="container" id="app" class="page-cinemas/list" >

  <div class="cinemas-list">
    <h2 class="cinemas-list-header">影院列表</h2>

    <!-- 遍历 -->
    <?php if(is_array($details) || $details instanceof \think\Collection || $details instanceof \think\Paginator): if( count($details)==0 ) : echo "" ;else: foreach($details as $key=>$rowt): ?>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinemass/<?php echo $rowt['id']; ?>.html" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m"><?php echo $rowt['name']; ?></a>
          <p class="cinema-address">地址：<?php echo $rowt['area']; ?><?php echo $rowt['name']; ?></p>
        </div>
        <div class="buy-btn">
          <a href="/cinemass?mid=<?php echo $movie['id']; ?>&id=<?php echo $rowt['id']; ?>">选座购票</a>
        </div>

        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont"><?php echo $rowt['price']; ?></span></span>
            <span>起</span>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 遍历 -->
  </div>
  <div class="cinema-pager">
    <ul style="height:40px;text-align:center">
    <div id="pages">

    </div>
    </ul>
  </div>
</div>
<div id="comment-form-container" class="ccs jBox-wrapper jBox-Modal jBox-Default" style="position: fixed; display: none; opacity: 1; z-index: 10000; left: 50%; top: 50%; margin-left: -285px; margin-top: -235px;"><div class="jBox-container"><div class="jBox-content" style="width: 550px; height: 450px;">
  <form action="/movielist/grade" method="get" id="comment-form">

    <div class="score-msg-container" style="height:70px">
        <div class="score"><span class="num">7</span>分</div>
        <div class="score-message">比较好</div>
        <div class="no-score" style="padding-top:30px">
          请点击星星评分
        </div>
    </div>
    <div id="starRating" style="margin-left:90px">
      <p class="photo">
        <input required id="input-21c" name="grade"  value="" data-size="md" type="text" title="">
        <div class="clearfix"></div>
      </p>
    </div>
    <div class="content-container">
      <textarea placeholder="快来说说你的看法吧" name="g_content" id="" cols="30" rows="10"></textarea>
      <span class="word-count-info"></span>
    </div>
    <input type="hidden" id="hidden" name="mid"  value="<?php echo $movie['id']; ?>">
    <input type="hidden" id="hidden" name="uid"  value="<?php echo \think\Session::get('uid'); ?>">
    <input class="btn" type="submit" value="提交" data-act="comment-submit-click">

  </form>
  <div class="close">×</div>
</div></div></div>
<?php echo widget("Publics/footer"); ?>
</body>
<script src="/static/homes/js/common.dc33ab40.js" ></script>
<script src="/static/homes/js/movie-detail.b5d664ec.js"></script>
<script src="/static/homes/cort/js/star-rating.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/homes/js/jquery.citys.js"></script>
<script type="text/javascript">
$('#demo2').citys({
    required:false,
    nodata:'disabled',
    onChange:function(data){
        var text = data['direct']?'(直辖市)':'';
        $('#place').text('当前选中地区：'+p+' '+c+' '+a);
    }
});
</script>
<script>
  $(".comment-entry").click(function(){$(".jBox-wrapper").css("display","block");});
  $("#comment-entry1").click(function(){$(".jBox-wrapper").css("display","block");});
  $(".close").click(function(){ $(".jBox-wrapper").css("display","none");});
  jQuery(document).ready(function () {
      $("#input-21c").rating({
          min: 0, max: 10, step: 0.5, size: "xl", stars: "5"
      });
  });
</script>
<script>
//想看与不想看
function change(mid){
  obj=$('.wish');
  $.get("/movielist/want",{mid:mid},function(data){
    if(data){
      obj.addClass("active").find(".wish-msg").html("已想看");
    }else{
      obj.removeClass("active").find(".wish-msg").html("想看");
    }
  },'json');
}
</script>
</html>
