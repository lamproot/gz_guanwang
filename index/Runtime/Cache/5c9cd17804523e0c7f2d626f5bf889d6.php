<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_SESSION['GuanWang']['web_config'][0]['title']['value']; ?></title>
<meta name='description' content="<?php echo $_SESSION['GuanWang']['web_config'][0]['description']['value']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="<?php echo $_SESSION['GuanWang']['web_config'][0]['keywords']['value']; ?>"/>
<!--build:css css/style.min.css-->
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/public.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/style.css">
<!-- endbuild -->
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/idangerous.swiper2.7.6.css" />
<script src="__PUBLIC__/lib/jquery-1.11.3.min.js"></script>
<script src="__PUBLIC__/lib/idangerous.swiper2.7.6.min.js"></script>
<!-- endbuild -->
<script type="text/javascript">
$(function(){
    changeHomeBannerHeight();
  var mySwiper = $('.swiper-container').swiper({
      autoplay : 5000,
      speed:800,
      loop: true
  });
  $(".bannerControl.left").bind("click",function(e){
      mySwiper.swipePrev();
  });
   $(".bannerControl.right").bind("click",function(e){
       mySwiper.swipeNext();
  });
})
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ffe8719915417b50e16d5c62d343514d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>

<body>
<style type="text/css">
	.companyTextContainer {
	    border-bottom: 0px solid #ccc;
	    padding-bottom: 70px;
	}
</style>
<script>
$(function(){
	$(".tabDiv").bind("click",function(e){
		$(".tabDiv").removeClass("select");
		$(this).addClass("select");
		var index=$(this).index(".tabDiv");
		$(".teamIntroDisplayDiv").hide();
		$(".teamIntroDisplayDiv").eq(index).show();
	});
});
</script>
<div class="container">
        <img src="__PUBLIC__/config/img/<?php echo ($banner); ?>" class="bannerImg" />
        <div class="contentContainer">
        	<div class="pageTitleContainer">
            	<div class="pageTitle">合作团队</div>
                <div class="pageSubtitle"><span class="pageSubtitleLine"></span>TEAM<span class="pageSubtitleLine"></span></div>
            </div>
            <div class="teamIntroContainer">
            	<div class="tabContainer clear">
                    <?php if(is_array($result['team_class'])): foreach($result['team_class'] as $key=>$item): ?><div class="tabDiv <?php if($key == 0): ?>select<?php endif; ?>"><?php echo ($item['name']); ?></div><?php endforeach; endif; ?>
                </div>

                <div class="teamIntroContent">
                	<?php if(is_array($result['team_class'])): foreach($result['team_class'] as $key=>$item): ?><div class="teamIntroDisplayDiv" style="<?php if($key == 0): ?>display:block;<?php endif; ?>">
		                    <?php if(is_array($result['teams'])): foreach($result['teams'] as $key=>$item_item): if($item_item['team_class_id'] == $item['id']): ?><a class="newsList teamIntro">
			                            <div class="newsListImgContainer">
			                            	<?php if($item_item["logo"] != ''): ?><img src="__ROOT__/Uploads/images/teams/<?php echo ($item_item["logo"]); ?>"/><?php endif; ?>
			                            </div>
			                            <div class="newsListTextContainer">
			                                <div class="newsListTextTitle"><span class="important"><?php echo ($item_item['name']); ?></span></div>
			                                <div style="font-size:14px;color:#aaa"><?php echo ($item_item['title']); ?></div>
			                                <div class="newsListTextSubtitle"><?php echo ($item_item['degree']); ?></div>
			                                <div class="newsListTextContent" style="color:#aaa;"><?php echo ($item_item['content']); ?></div>
			                            </div>
			                        </a><?php endif; endforeach; endif; ?>

			            </div><?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
<style type="text/css">/*底部*/
.footer{width: 100%;margin:0 auto;position:relative; min-height:150px;background-color:#F6F7F7;}
.f_line p.l_L{width:100% ;height:3px;background:#c3222e;position:absolute;top:0px;left:0px;}/*
.f_line p.l_R{width:50%;height:3px;background:#204176;position:absolute;top:0px;left:630px;}*/
.f_B{min-width:1200px;margin:0px auto;/* background:pink; */overflow: hidden;}
.f_B p.f_logo{
        width:300px;
        height:115px;
        background:url(__PUBLIC__/config/img/<?php echo $_SESSION['GuanWang']['web_config'][0]['logo']['value']; ?>)no-repeat 135px 0px;
       /* padding-top:45px;
        padding-left:45px;*/

        float:left;
        }
.f_L{margin:0 auto; width:100%;padding-top:48px;}/*
.f_L ul li{margin-right:20px;border-left:1px solid #434343;}*/
.f_L ul li p{line-height:23px;font-size:13px;color:#434343;padding-right:25px;}
@font-face {font-family:'Bauhaus Medium BT';src:url(../font/Bauhaus%20Md%20BT.TTF));}
.f_L ul li p span{font-size:13px;color:#c3232d;line-height:25px;font-family:'Bauhaus Medium BT';}
</style>
<div class="footer">
    <div class="f_line">
        <p class="l_L"></p>
        <p class="l_R"></p>
    </div>
    <div class="f_B">
        
        <div class="f_L">
            <ul  style="float:right;float:left">
                <li>
                    <p class="f_logo"></p>
                </li>
            </ul>
            <ul style="float:right">
                <li>
                <p>联系电话：<span><?php echo $_SESSION['GuanWang']['contact_config'][0]['contactTel']['value']; ?></span>   公司邮箱：<span><?php echo $_SESSION['GuanWang']['contact_config'][0]['contactMail']['value']; ?></span></p>
                </li>
                <!-- <li>
                    <p>北京市朝阳区东三环南路58号 富顿中心A座706室 falaiou@falaiou.com</p>
                </li> -->
               <!--  <li>
                    <p>公司邮箱：<span><?php echo $_SESSION['GuanWang']['contact_config'][0]['contactMail']['value']; ?></span></p>
                    
                </li> -->
            </ul>
            <ul style="float:right">
                <li>
                   <p> <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=35012202350127" target="_blank" rel="nofollow" style="text-decoration:none;"><img src="//f.7x24s.com/public/img/beian_gov_cn.png" style="vertical-align:middle;margin-right:5px;"></a><?php echo $_SESSION['GuanWang']['web_config'][0]['record']['value']; ?>&nbsp;<a href="https://tongji.baidu.com/web/welcome/login" target="_blank" title="百度统计"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic1.gif"></a></p>
                </li>
            </ul>

            
        </div>



    </div>

</div>
<script type="text/javascript">
    function createHeader(){
        var headerStr='<meta name="viewport" content="width=device-width, initial-scale=1" /><div class="header">'+
                            '<div class="logoImg" style="background-image: url(__PUBLIC__/config/img/<?php echo $_SESSION['GuanWang']['web_config'][0]['logo']['value']; ?>);"></div>'+
                            '<div class="topNavBigContainer">'+
                                '<div class="topNavContainer">'+
                                    '<a href="__APP__" class="topNav"><div>首页</div><div class="english">HOME</div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a class="topNav"><div>关于兰弯</div><div class="english">ABOUT</div><div class="topNavSecondMenuIcon"></div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                    '<div class="topNavSecondMenuContainer">'+
                                        '<a href="__APP__/Company" class="topNavSecondMenuNav">公司简介</a>'+
                                        '<a href="__APP__/Teams" class="topNavSecondMenuNav">合作团队</a>'+
                                        '<a href="__APP__/Contact" class="topNavSecondMenuNav noBorder">联系我们</a>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a href="__APP__/Segments" class="topNav"><div>业务板块</div><div class="english">BUSINESS</div><div class="topNavSecondMenuIcon"></div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                    '<div class="topNavSecondMenuContainer">'+
                                        '<a href="__APP__/Segments/info?id=5" class="topNavSecondMenuNav">黄金T＋D</a>'+
                                        '<a href="__APP__/Segments/info?id=6" class="topNavSecondMenuNav">股指期货</a>'+
                                        '<a href="__APP__/Segments/info?id=7" class="topNavSecondMenuNav noBorder">财富管理</a>'+

                                        
                                    '</div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a class="topNav"><div>新闻动态</div><div class="english">NEWS</div><div class="topNavSecondMenuIcon"></div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                    '<div class="topNavSecondMenuContainer">'+
                                        '<a href="__APP__/News/index?type=0" class="topNavSecondMenuNav">公司动态</a>'+
                                        '<a href="__APP__/News/index?type=1" class="topNavSecondMenuNav">投研视点</a>'+
                                        '<a href="__APP__/News/index?type=2" class="topNavSecondMenuNav noBorder">业内资讯</a>'+

                                        
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'+
                    '<div class="topDiv"></div>';
        $(".container").children().eq(0).before(headerStr);
        var header=$(".header").eq(0);
        var url=window.location.href;
        var position=url.lastIndexOf("/")+1;
        var position2=url.lastIndexOf("?");
        if(position2==-1)
            position2=url.length;
        var href=url.substring(position,position2);
        if(href=="" || href=="index.html")
        {
            header.find(".topNavContainer").eq(0).addClass("select");
        }
        else if(href=="articleList.html" || href=="pennyNewsList.html" || href=="newsInfo.html" || href=="articleInfo.html")
        {
            header.find(".topNavContainer").eq(3).addClass("select");
        }
        else if(href=="teamIntro.html" || href=="companyIntro.html" || href=="contact.html")
        {
            header.find(".topNavContainer").eq(1).addClass("select");
        }
        else if(href=="segments.html" || href=="badAssetsTeam.html" || href=="listedCompany.html" || href=="wealthManage.html")
        {
            header.find(".topNavContainer").eq(2).addClass("select");
        }

        changeNavHeight();
        $(".header").addClass("headerTransition");
        $(".logoImg").addClass("headerTransition");
        $(".topNav").addClass("headerTransition");
        $(window).bind("scroll",function(e){
            changeNavHeight();
        });
        function changeNavHeight(){
            var scrollTop=$(window).scrollTop();
            if(scrollTop>90)
            {
                $(".header").addClass("small");
            }
            else
            {
                $(".header").removeClass("small");
            }
        }

    }
    function createFooter(){
        // var footerStr='<div style="height:50px;" class="bottomDiv"></div>'+
        //               '<div class="footer"><?php echo $_SESSION['GuanWang']['web_config'][0]['record']['value']; ?></div>';
        // $(".container").append(footerStr);
    }
    function getQueryString(name)
    {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return unescape(r[2]); return null;
    }
    function fixedLeftNav(){
            $(".bannerImg").load(function(e) {
                var win=$(window);
                var leftContainer=$(".businessLeftNavContainer");
                var leftNavTop=leftContainer.offset().top-75;
                change();
                $(window).bind("scroll",function(e){
                    change();
                });
                function change(){
                    var top=$(window).scrollTop();
                    if(top>leftNavTop)
                        leftContainer.addClass("fixed");
                    else
                        leftContainer.removeClass("fixed");
                }
            });

        }
    function changeHomeBannerHeight(){
        var win=$(window);
        var topDiv=$(".topDiv");
        var bottomDiv=$(".bottomDiv");
        var swiper=$(".swiper-container");
        function calculation(){

            var bannerH=win.height()-topDiv.height()-bottomDiv.height();
            swiper.height(bannerH);
        }
        win.bind("resize",function(e){
            calculation();
        });
        calculation();
    }
    $(function(){
        createHeader();
        createFooter();
    });

</script>
</body>
</html>