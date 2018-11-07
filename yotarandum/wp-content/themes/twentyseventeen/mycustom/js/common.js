jQuery(document).ready(function($){
//ユーザーエージェントによる振分
//var userAgent = window.navigator.userAgent.toLowerCase();
//var appVersion = window.navigator.appVersion.toLowerCase();
//if(userAgent.indexOf("msie") > -1){}
//if(userAgent.indexOf("firefox") > -1){}
//if(userAgent.indexOf("chrome") > -1){}
//if(userAgent.indexOf("iphone") > -1){}
//if(userAgent.indexOf("android") > -1){}
//if(appVersion.indexOf("msie 7.") != -1){}


//リンク画像のホバー(画像を２枚用意)用
$("img.ovr").mouseover(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)(\.[a-z]+)$/, "$1_on$2"));
}).mouseout(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/, "$1$2"));
});

var winW = $(window).width();

//SPのnav
$(".spNavBtn").click(function(){
	winW = $(window).width();
	if(winW <= 767){
		if($(this).hasClass("show")){
			$(".spNav").slideUp();
			$(this).removeClass("show");
		}else{
			$(".spNav").slideDown();
			$(this).addClass("show");
		}
	}
	return false;
});


//topへ戻るボタン
$(".l-toTop").click(function(){
	$('html,body').animate({scrollTop: 0}, 400, 'swing');
	return false;
});

//記事indexのclickScrl
$(".pageIndex a").click(function(){
	var pos = ($(window).width() > 767) ? 40 : 20;
	var speed = 400;
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top;		
	$("html, body").animate({scrollTop:position-pos}, speed, "swing");
	return false;
});

//clickScrl
function clkScrl(btn, pos){
	btn.click(function(){
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;		
        $("html, body").animate({scrollTop:position-pos}, speed, "swing");
		return false;
	});
}
clkScrl($("a.clkScrl"), 0);

//$(".cbYt1").colorbox({iframe:true, innerWidth:720, innerHeight:480});
//$(".cbPh1").colorbox({opacity: 0.5});	
//$(".cbIf1").colorbox({iframe:true, innerWidth:947, innerHeight:600});

});//DocRdyFncEnd
