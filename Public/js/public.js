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
        		  '<div class="footer">公司邮箱:Demo@penny-capital.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;京ICP备Demo号-1</div>';
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
