<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx3d6967201633ebee", "52f5354b3b48e685f46dce40af7d4c6a");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>指尖锋芒 术道于心</title>
<meta name="viewport" id="vp" />
<script type="text/javascript">
    var scale = 1/devicePixelRatio;
    var vp = document.getElementById('vp');
    vp.content = 'width=device-width,initial-scale='+scale+', maximum-scale='+scale+', user-scalable=no';
    document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + 'px';
    window.addEventListener("resize",function(){
        document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + 'px';
    },false);
</script>
<link href="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/style.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="http://static.g.ppstream.com/game/common_js/swiper.min.css">
<link type="text/css" rel="stylesheet" href="http://static.g.ppstream.com/game/common_js/animate.min.css">
</head>

<body>
	<div id='wx_pic' style='display:none;'>
	  <img src='http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/wx.jpg' />
	</div>
	<div class="loading" id="loading">
	    <div class="sk-double-bounce">
	        <div class="sk-child sk-double-bounce1"></div>
	        <div class="sk-child sk-double-bounce2"></div>
	    </div>
	    <span class="loading-text" id="text">loading...</span>
	</div>

	<!-- Swiper -->
	<div class="swiper-container" id="container" style="display:none">


	    <div class="swiper-wrapper">

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-2.png" class="pic-2 ani" swiper-animate-effect="flip" swiper-animate-duration="1s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-3.png" class="pic-3 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-4.png" class="pic-4 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-5.png" class="pic-5 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.8s" alt="">

	           <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="3.5s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-11.png" class="pic-11 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-12.png" class="pic-12 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-13.png" class="pic-13 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="2s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="2.8s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-14.png" class="pic-14 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-15.png" class="pic-15 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-16.png" class="pic-16 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-17.png" class="pic-17 ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-16.png" class="pic-16 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-19.png" class="pic-17 ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-20.png" class="pic-16 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-21.png" class="pic-17 ani" swiper-animate-effect="bounceIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-22.png" class="pic-22 ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-23.png" class="pic-23 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-24.png" class="pic-24 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-25.png" class="pic-25 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="3.3s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-26.png" class="pic-26 ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-23.png" class="pic-23 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-24.png" class="pic-24 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-27.png" class="pic-25 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="3.3s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-30.png" class="pic-22 ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-23.png" class="pic-23 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-24.png" class="pic-24 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-31.png" class="pic-25 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="3.3s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-28.png" class="pic-22 ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-23.png" class="pic-23 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-24.png" class="pic-24 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-29.png" class="pic-25 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s" alt="">
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="3.3s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>

	       <div class="swiper-slide bg-1">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-32.png" class="pic-22 ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-23.png" class="pic-23 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-24.png" class="pic-24 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.8s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-33.png" class="pic-25 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s" alt="">
	       </div>

	       <div class="swiper-slide bg-2">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-7.png" class="pic-7 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.8s" swiper-animate-delay="0" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-8.png" class="pic-8 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-9.png" class="pic-9 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s" alt="">
	          <img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/pic-10.png" class="pic-10 ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.8s" swiper-animate-delay="1.8s" alt="">
	          <a href="http://www.bizconfstreaming.cn/webcast/novartis20170728.html" class="link"></a>
	          <div class="tip-box ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s"><img src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/tip.png" class="tip" alt=""></div>
	       </div>
	    </div>

	</div>
	<div class="audio-icon" id="audio_icon">

	</div>
	<audio src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/music.mp3" autoplay loop id="audio"></audio>
	<script type="text/javascript" src="http://static.g.iqiyi.com/game/common_js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/js/swiper.js"></script>
	<script>

		window.onload = function(){
	    var tt = setTimeout(function(){
	    $('#text').text('加载完成，点击进入');


				var loading = $('#loading');

	      loading.on('touchend',function(){
	        var audio = document.getElementById('audio');
	          audio.play();
	          var s=true;
	          $('#audio_icon').on('touchend',function(){
	            if(s){
	              audio.pause();
	              $(this).addClass('pause');
	              s=false;
	            }else{
	              audio.play();
	              $(this).removeClass('pause');
	              s=true;
	            }
	          });

	          loading.fadeOut(500);
	          document.getElementById('container').style.display="block";

	          var swiper = new Swiper('.swiper-container', {
	              direction: 'vertical',
	              onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
	                swiperAnimateCache(swiper); //隐藏动画元素
	                swiperAnimate(swiper); //初始化完成开始动画
	              },
	              onSlideChangeEnd: function(swiper){
	                swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
	              }
	          });


	      });

			},1500);
		}

	</script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
        'onMenuShareTimeline',
		'onMenuShareAppMessage'
    ]
  });

  wx.ready(function () {
      wx.onMenuShareTimeline({
		  title: '指尖锋芒 术道于心', // 分享标题
			desc: '7月28日Doctor-X复旦大学附属眼耳鼻喉科医院站 公开日震撼来袭！同步网络直播欢迎品鉴。', // 分享描述
		  link: 'http://g.pps.tv/style/weixin_didi/hqg.php', // 分享链接
		  imgUrl: 'http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/wx.jpg', // 分享图标
		  success: function () {
			// 用户确认分享后执行的回调函数
		  },
		  cancel: function () {
			// 用户取消分享后执行的回调函数
		  }
	  });

	  wx.onMenuShareAppMessage({
			title: '指尖锋芒 术道于心', // 分享标题
			desc: '7月28日Doctor-X复旦大学附属眼耳鼻喉科医院站 公开日震撼来袭！同步网络直播欢迎品鉴。', // 分享描述
			link: 'http://g.pps.tv/style/weixin_didi/hqg.php', // 分享链接
			imgUrl: 'http://static.g.iqiyi.com/game/mobile/dntg/doctor20170721/images/wx.jpg', // 分享图标
			success: function () {
			   // 用户确认分享后执行的回调函数
			},
			cancel: function () {
				// 用户取消分享后执行的回调函数
			}
	  });

  });
</script>
</html>
