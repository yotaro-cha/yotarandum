$(document).ready(function(){
//ユーザーエージェントによる振分
var userAgent = window.navigator.userAgent.toLowerCase();
var appVersion = window.navigator.appVersion.toLowerCase();
if(userAgent.indexOf("msie") > -1){}
if(userAgent.indexOf("firefox") > -1){}
if(userAgent.indexOf("chrome") > -1){}
if(userAgent.indexOf("iphone") > -1){}
if(userAgent.indexOf("android") > -1){}
if(appVersion.indexOf("msie 7.") != -1){}

//window幅を取得
var winW;

$(window).bind("load resize", function(){
	winW = $(window).width();
});//winBndFncEnd


//クリックスクロール
function clkScrl(btn, pos){
	btn.click(function(){
	var speed = 400;// ミリ秒
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top;   
	$("html, body").animate({scrollTop:position-pos}, speed, "swing");

	$(".spBtnMenu").removeClass("show");
	$(".l-header .colR .in").slideUp();
	$(".l-spFixBg").fadeOut();
    return false;
  });
}
clkScrl($("a.clkScrl"), 50);


//SPのメニュー
$(".spBtnMenu").click(function(){
	if($(this).hasClass("show")){
		$(this).removeClass("show");
		$(".l-header .colR .in").slideUp();
		$(".l-spFixBg").fadeOut();
	}else{
		$(this).addClass("show");
		$(".l-header .colR .in").slideDown();
		$(".l-spFixBg").fadeIn();
	}
	return false;
});
$(".l-spFixBg").click(function(){
	$(".spBtnMenu").removeClass("show");
	$(".l-header .colR .in").slideUp();
	$(this).fadeOut();	
	return false;
});


//SPのtopへ戻るボタン
//toTopボタン
var sclNum = 0;
$(window).scroll(function(){
	sclNum = $(window).scrollTop();
	if(sclNum > 500){	
		$(".spToTop a").fadeIn("fast");
	}else{	
		$(".spToTop a").fadeOut("fast");
	}
});




});//DocRdyFncEnd