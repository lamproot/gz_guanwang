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
</head>

<body>
<div class="container">
	<div class="bannerContainer">
		<div class="bannerControl left">
		</div>
		<div class="bannerControl right">
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if(is_array($banner)): foreach($banner as $key=>$item): ?><div class="swiper-slide" style="background-image:url(__PUBLIC__/config/img/<?php echo ($item['url']); ?>);">
					</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function createHeader(){
        var headerStr='<meta name="viewport" content="width=device-width, initial-scale=1" /><div class="header">'+
                            '<div class="logoImg"></div>'+
                            '<div class="topNavBigContainer">'+
                                '<div class="topNavContainer">'+
                                    '<a href="index.html" class="topNav"><div>首页</div><div class="english">HOME</div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a class="topNav"><div>关于磐恩</div><div class="english">ABOUT</div><div class="topNavSecondMenuIcon"></div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                    '<div class="topNavSecondMenuContainer">'+
                                        '<a href="companyIntro.html" class="topNavSecondMenuNav">公司简介</a>'+
                                        '<a href="teamIntro.html" class="topNavSecondMenuNav">团队介绍</a>'+
                                        '<a href="contact.html" class="topNavSecondMenuNav noBorder">联系我们</a>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a href="segments.html" class="topNav"><div>业务板块</div><div class="english">BUSINESS</div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                '</div>'+
                                '<div class="topNavContainer">'+
                                    '<a class="topNav"><div>新闻动态</div><div class="english">NEWS</div><div class="topNavSecondMenuIcon"></div></a>'+
                                    '<div class="topNavSelect"></div>'+
                                    '<div class="topNavSecondMenuContainer">'+
                                        '<a href="articleList.html" class="topNavSecondMenuNav">行业文章</a>'+
                                        '<a href="pennyNewsList.html" class="topNavSecondMenuNav noBorder">磐恩动态</a>'+
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
        var footerStr='<div style="height:50px;" class="bottomDiv"></div>'+
                      '<div class="footer"><?php echo $_SESSION['GuanWang']['web_config'][0]['record']['value']; ?></div>';
        $(".container").append(footerStr);
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