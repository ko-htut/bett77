<?php if (!defined('THINK_PATH')) exit();?><html ng-app="app" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style>.boxgo{display:none}</style>
<!--吾爱永久QQ：8790766-->
<!--吾爱微信：8790766-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <title>多多大厅</title>
   <link rel="stylesheet" href="/52/loading.css">
  <link rel="stylesheet" href="/52/selectItems.css">
    <link rel="stylesheet" href="/52/common-2.0.2.css">
   <link rel="stylesheet" href="/52/homepage45-1.3.css">
  <script src="/52/clipboard.min.js" type="text/javascript"></script>
  <script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="/52/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/52/angular.min.js"></script>
    <script type="text/javascript" src="/52/fastclick.js"></script>
    <!--广播-->
    <script type="text/javascript" src="/52/jquery.marquee.min.js"></script>
    <!--广播 end-->

<style>
    *{padding: 0;margin:0;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 微软雅黑, Arial, sans-serif;cursor: default;}
    img{border: none;}
    .main{width: 100%;position:relative;margin:0 auto;}
    .roomCard{position: absolute;top:0;right:0;width: 26%;}
    .roomCard .img1{position: relative;float: left;z-index: 50;}
    .roomCard .img2{position: absolute;top:0;z-index: 51}
    .roomCard .num{position: relative;background: #273151;color:#fff;font-size: 3.5vw;border-radius:4vw;padding: 1vw 4vw;float: left;margin-left: -3vw;z-index: 49;}

    .recharge{position: absolute;top:5vw;right:30%;width: 22vw;height: 8vw;z-index: 51;}

    .user{position: absolute;top:0;left:0;width: 50%;}
    .user .avatar{border: 1px solid #b495d8;border-radius:5px;float: left;position: relative;z-index: 50;}
    .user .name{color: #fff;font-size: 3.5vw;border-radius:3.5vw;padding: 1vw 4vw;background:#273151;margin-left: -3vw;float: left;position: relative;z-index: 49;}

    .shop{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 112;}
    .shop .shopBack{width: 100%;height:100%;background: #000;opacity:0.6;}
    .shop .shopBody{width: 100%;position: absolute;bottom: 0;left:0;height: 0; }
    .shop .shopBody .shopReturn{width: 15%;float: left;margin-top:6.3%;margin-left:5%;position: relative;}
    .shop .shopBody .shopBuy{width: 34%;float: right;margin-top:8.3%;margin-right:33%;position: relative;}
    .shop .shopBody .shopGoods{width: 34%;position: relative;padding: 3px;}
    .shop .shopBody .shopGoods img{width: 100%;border-radius: 10px;}
    .shop .shopBody .shopGoods .title{position: absolute;top: 3;font-size: 14px;left: 0;width: 100%;text-align: center;color: #fff;}
    .shop .shopBody .shopGoods .price{position: absolute;bottom: 3;font-size: 20px;left: 0;width: 100%;text-align: center;color: #f1c818;line-height: 36px;}
    .shop .shopBody .goodsBack{border:3px solid #fada23;padding: 0;border-radius: 14px;}
    .shop .shopBody .goodsBack .title{top: 0;}
    .shop .shopBody .goodsBack .price{bottom: 0;}
    .shop .shopBody .goodsBack .background{position: absolute;top:0;left: 0;width:100%;height:100%;background:#fada23;opacity:.15; }
    .shop .shopBody .shopGoods1{margin-top:39%;margin-left: 11.2%;float: left;}
    .shop .shopBody .shopGoods2{margin-top:39%;margin-right: 11.2%;float: right;}
    .shop .shopBody .shopGoods3{margin-top:7.2%;margin-left: 11.2%;float: left;}
    .shop .shopBody .shopGoods4{margin-top:7.2%;margin-right: 11.2%;float: right;}
    .shop .shopLoading{width: 100%;position: absolute;left: 0;top:0;height: 100%;z-index: 9;}


    .alert{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 111;color: #fff;font-family: simHei;}
    .alert .alertBack{width: 100%;height:100%;background: #000;opacity:0.8;position: absolute;}
    .alert .mainPart{position: relative;top: 45%;left: 50%;margin-top:-19vh ;margin-left:-22.5vh ;width: 45vh;height:38vh; }
    /*.alert .mainPart .backImg{position: relative;width:100%;height:100%;border-radius: 10px;}*/
    .alert .mainPart .alertText{position: absolute;width:100%;line-height: 3.5vh;font-size: 2.5vh;width: 36vh;left:50%;margin-left:-18vh;top:5.6vh;text-align: center;}
    .alert .mainPart .buttonMiddle{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:50%;margin-left:-9vh;bottom:2.2vh;text-align: center;background:url("http://lelefile3.zhenglvyou.com/files/d_2/images/game/button2.png");background-size:100%;}
    .alert .mainPart .buttonLeft{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:3vh;bottom:2.2vh;text-align: center;background:url("http://lelefile3.zhenglvyou.com/files/d_2/images/game/button1.png");background-size:100%;}
    .alert .mainPart .buttonRight{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;right:3vh;bottom:2.2vh;text-align: center;background:url("http://lelefile3.zhenglvyou.com/files/d_2/images/game/button2.png");background-size:100%;}
    .alert .mainPart .backImg{position: absolute;width:100%;height:100%;border-radius: 1.5vh;border:0.1vh solid #de51f1;top:0;left:0;background: #6d4ba8;}
    .alert .mainPart .backImg .blackImg{position: absolute;width:40.6vh;height:25vh;border-radius: 1.5vh;border:0.1vh solid #ae71cb;top:2.2vh;left:2.2vh;background: #190d2d;}



    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem .text{float: left;margin-left: 0.5vh;}
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem select
    {
        appearance:none;
        -moz-appearance:none;
        -webkit-appearance:none;
        text-indent: 1.5vh;
        position: relative;;
        width: 8vh;
        height:3.6vh;
        left: 0.3vh;
        top:0.5vh;
        background-size: 100% 100%;
        background-image: url("http://lelefile3.zhenglvyou.com/files/images/common/btnselect.png");
    }

    /* 血拼金花新增提示框样式 */
    .alertTip{position: fixed;width: 40%;height:20%;top:40%;left:30%;z-index: 111;}
    .alertTip .alertTipBG{width: 100%;height:100%;background: #000;opacity:0.5;position: absolute;border-radius: 2vh}
    .alertTip img{position: absolute; margin-left: 15%;}
    .alertTip .alertTipText{position: absolute;bottom: 2vh;width: 100%; text-align: center;color: #fff;font-family: simHei;}



</style></head>
 <style>    
#room_str{position:fixed;top:-300px;}
.copyUrl{position: fixed;width:62px;height:22px;position:absolute;top:35px;right:152px;z-index:999;border: none;background: url(http://lelefile3.zhenglvyou.com/files/images/copy/copyicon.png);background-size: 100%;}
#copyUrl{ position:fixed;top:-300px;}
   .attention {
    position: fixed;
    z-index: 9997;
    width: 150px;
    height: 150px;
    top: 50%;
    left: 50%;
    margin-top: -75px;
    margin-left: -75px;
    border-radius: 5px;
    overflow: hidden;
}
.attention .attentionBackgroundB {
    filter: alpha(opacity=50);
    -moz-opacity: 0.5;
    opacity: 0.5;
    background: #000;
    height: 100%;
    width: 100%;
}
.attention img {
    position: absolute;
    top: 10px;
    left: 29px;
}
.attention .attentionTextB {
    position: absolute;
    top: 100px;
    width: 150px;
    text-align: center;
    font-size: 18px;
    color: #fff;
    filter: alpha(opacity=95);
    -moz-opacity: 0.95;
    opacity: 0.95;
}
    
</style>    
<textarea id="room_str" value="">多多大厅
 链接：http://<?php echo ($_SERVER['HTTP_HOST']); ?>/y/xdd</textarea>
<textarea id="copyUrl" value=""></textarea>
<div class="attention" style="display: none;">
<div class="attentionBackgroundB"></div> 
<img src="http://goss.fexteam.com/files/images/center/alert1.png"> 
<div class="attentionTextB">复制成功</div>
</div>
<div class="copyUrl" data-clipboard-action="copy" data-clipboard-target="#copyUrl">  
</div>
<body ng-controller="myCtrl" style="background: url(http://lelefile3.zhenglvyou.com/files/d_2/images/home/bg.jpg) #000 no-repeat;background-size:100% 100%;" class="ng-scope">
<div style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; background: rgb(0, 0, 0); display: none;" id="loading">
    <img src="http://lelefile3.zhenglvyou.com/files/d_2/images/loading.gif" style="top: 40%;position: absolute;left: 50%;margin-left: -45px;margin-top: -45px;">
</div>
<div class="main" style="">

    <!--广播-->
    <div ng-show="isShowNoty" style="position: absolute;background-color: rgba(0,0,0,0.6);width: 100%;height: 4vh;line-height: 4vh;color: white;font-size: 2.5vh;overflow: hidden;z-index: 9998;" class="ng-hide">

    </div>
    <div ng-show="isShowNoty" id="marquee" style="position: absolute; top: 0px; left: 12vw; background-color: rgba(0, 0, 0, 0); width: 88vw; height: 4vh; line-height: 4vh; color: white; font-size: 2.5vh; overflow: hidden; z-index: 9999;" class="ng-binding ng-hide"><div style="width: 100000px; margin-left: 352px; animation: marqueeAnimation-1405300 22.9551s linear 0s 1 normal none running;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 50px; float: left;">
        
    </div><div class="js-marquee" style="margin-right: 50px; float: left;">
        
    </div><style>@-webkit-keyframes marqueeAnimation-1405300  { 100%  {margin-left:-50px}}</style></div></div>
    <!--end-->
   <!-- 血拼金花新增提示框 -->
<div class="alertTip" ng-show="isShowAlertTip">
    <div class="alertTipText ng-binding"></div>
</div>
	<div class="alert ng-hide" ng-show="isShowAlert">
		<div class="alertBack"></div>
		<div class="mainPart">
			<div class="backImg">
				<div class="blackImg"></div>
			</div>
			<div class="alertText ng-binding" style="top: 79.7px;">游戏维护中...</div>
			<div ng-show="alertType==1" class="">
				<div class="buttonMiddle" ng-click="closeAlert()">确定</div>
			</div>			
			<div ng-show="alertType==2" class="ng-hide">
				<div class="buttonLeft" ng-click="home()">返回首页</div>
				<div class="buttonRight" ng-click="createRoom()">创建房间</div>
			</div>			
			<div ng-show="alertType==3" class="ng-hide">
				<div class="buttonLeft" ng-click="home()">返回首页</div>
				<div class="buttonRight" ng-click="closeAlert()">取消</div>
			</div>			
			<div ng-show="alertType==4" class="ng-hide">
				<div class="buttonLeft" ng-click="createRoom()">创建房间</div>
				<div class="buttonRight" ng-click="sitDown()">加入游戏</div>
			</div>
			<div ng-show="alertType==5" class="ng-hide">
				<div class="buttonMiddle" ng-click="getCards()">领取</div>
			</div>				
			<div ng-show="alertType==6" class="ng-hide">
				<div class="buttonMiddle" ng-click="closeAlert()">确定</div>
			</div>
			<div ng-show="alertType==23" class="ng-hide">
				<div class="buttonMiddle" ng-click="finishBindPhone()">确定</div>
			</div>
			<div ng-show="alertType==31" class="ng-hide">
				<div class="buttonMiddle" ng-click="reloadView()">确定</div>
			</div>			
        </div>
    </div>
    <link rel="stylesheet" href="http://oss.zhenglvyou.com/files/css/custom/swiper.min.css">
    <style>
        body{background:url(http://oss.zhenglvyou.com/files/images/custom/uuhd/bg2.jpg) no-repeat 0 0 / 100% 100%;}
        html,body {
            height:100%;padding:0px; margin:0px;
        }
        html {
            overflow:hidden;
        }
        * {
            padding:0;
            margin:0;
        }
        li {
            list-style:none;
        }
        .img img {
            width:100%;
            display:block;
        }
        #page {
            /*margin-bottom:50px;*/
            height:100%;
        }
        #page .slidepage {
            height:100%;
        }
        .scroll {
            height:100%;
        }
        .slidescroll {
            height:auto;
        }
        .customcss ul{
            width:94vw; padding:0 3vw;
        }
        .customcss ul li{
            width:50%; float:left; text-align:center;
        }
        .customcss ul li span{
            width:100%; height:26vw; float:left;
        }
        .customcss ul li span a{
            width: 80%; height: 18vw; margin-left: 10%;margin-top: 5vw; border-radius:15vw;background:none; float:left;
        }

        .splitline{
            position:relative;width:40.6vh;left:0.2vh;
        }
    </style>			
    <div style="position:absolute;height:12vh;width:100vw;overflow:hidden;background:url(http://oss.zhenglvyou.com/files/images/custom/gz/topbg.png) no-repeat 0 0 / 100% 100%">
  <div style="position:absolute;height:9vh;width:9vh;left:3vw;top:1vh;border-radius:5px;border:#7A61AD 2px solid;border-radius:5px;overflow:hidden;">
	    <img ng-src="{{userInfo.avatar}}" style="height:9vh;width:9vh;border-radius:3px;"id="avatar">
	  </div>
	  <div style="text-shadow:1PX 1PX 1PX #000;min-width:16vw;max-width:35vw;position:absolute;height:4vh;top:2vh;left:12.5vh;color:#fff;font-size:0.9em;"id="name"></div>
	  <img src="http://oss.zhenglvyou.com/files/images/custom/gz/card.png" style="position:absolute;height:5vh;left:12.5vh;top:5.8vh;z-index:100;">
	  <span style="position:absolute;height:3vh;line-height:3vh;top:6.7vh;z-index:1;left:14vh;width:10vh;color:#fff;font-size:0.8em;background:#321650;border:#747EBC 1px solid;padding-left:1vh;text-align:center;"id="card"></div>
	
    <img src="http://oss.zhenglvyou.com/files/images/custom/gz/vline.png" style="position:absolute;top:0vh;width:1vw;height:12vh;right:35vw;">
    <a href="/portal/user/index">
        <img src="http://oss.zhenglvyou.com/files/images/custom/gz/persional2.png" style="position:absolute;top:3vh;width:13vw;height:7.5vh;right:20vw;">
    </a>
    <img src="http://oss.zhenglvyou.com/files/images/custom/gz/vline.png" style="position:absolute;top:0vh;width:1vw;height:12vh;right:17vw;">
	  <a href="/portal/user/fangka.html">
	    <img src="http://oss.zhenglvyou.com/files/images/custom/gz/sendcard.png" style="position:absolute;top:3vh;width:13vw;height:7.5vh;right:2vw;">
	  </a>
    </div>
	
	<!-- body -->
<div style="width:100vw;height:88vh;position:absolute;top:12vh;z-index:1;">
    <div class="swiper-container" id="page">
        <div class="swiper-wrapper">
            <div class="swiper-slide slidepage">
                <div class="swiper-container scroll swiper-container-vertical swiper-container-free-mode swiper-container-ios">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slidescroll customcss swiper-slide-active">
             <ul class="img">
                                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/niuniuset.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createLaiBull()"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/12bull.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createBull12()1" onclick="send('gameserver',{id:10})"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/tenbull.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createBull6b()1" onclick="send('gameserver',{id:15})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/bull8b.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createBull8b()1" onclick="send('gameserver',{id:14})"></a></span></li>
                    <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/bull9.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createBull9()1" onclick="send('gameserver',{id:2})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/bull6.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createBull()1" onclick="send('gameserver',{id:1})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/zjh9.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createZ9()1" onclick="send('gameserver',{id:16})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/zjh6.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createFlower()1" onclick="send('gameserver',{id:5})"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/xz.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createFlowerXp()"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/mpzjh.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createFlower18()"></a></span></li>
					<li><span style="background:url(http://33cdn.bepkwl.cn/dt/12renjh.png) no-repeat 50% 50% / 42.5vw 24.8vw"><a ng-click="createDcx()1" onclick="send('gameserver',{id:13})"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/sj1.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createJia31()"></a></span></li>
                    <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/Dpaijiu.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createPaijiuD()"></a></span></li>
                    <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/paijiu.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createPaijiu()1" onclick="send('gameserver',{id:27})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/mj.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createMajiang()"></a></span></li>
                    <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/eba.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createEba()1" onclick="send('gameserver',{id:6})"></a></span></li>
	                <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/ddz.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createLandlord()"></a></span></li>
                    <li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/sg.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createSg()1" onclick="send('gameserver',{id:3})"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/sg9.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createSg9()1" onclick="send('gameserver',{id:4})"></a></span></li>
					<li><span style="background:url(http://lelefile3.zhenglvyou.com/files/images/home/yxxsf.png) no-repeat 50% 50% / 42.5vw 24vw"><a ng-click="createYxx()1" onclick="send('gameserver',{id:26})"></a></span></li>
	              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
 <div class="createRoom" style="display: none" id="room"></div>
	<script src="http://oss.zhenglvyou.com/files/js/scroll/swiper.min.js"></script>
<script src="/53/dt/jq.js" type="text/javascript"></script>
 <script src="/53/dt/jweixin-1.0.0.js"></script> 
  <script src="/app/js/jq.js" type="text/javascript"></script> 
  <script src="/53/dt/home.js" type="text/javascript"></script>
     <script type="text/javascript" src="/53/dt/base64.js"></script>
  <script src="/53/dt/app.js" type="text/javascript"></script>
  <script src="/53/dt/jquery-3.3.1.js"></script>
  <script src="http://oss.zhenglvyou.com/files/js/scroll/swiper.min.js"></script>
  <script src="/index.php/portal/index/gamejs" type="text/javascript"></script>
 <script type="text/javascript">var cs=10,hosturl=window.location.hostname,websocket,token,room,index,timewc=0,bgmp3open,mp3open,overzt=1;function connect(n){if(0==overzt)return load("hide"),!1;websocket&&websocket.close(),0<cs?(cs-=1,(websocket=new WebSocket("ws://"+hosturl+":"+n)).onmessage=function(event){cs=10,zdata=JSON.parse(event.data),console.log(zdata),window[zdata.act](zdata.msg)},websocket.onopen=function(e){load("hide"),token||(token=localStorage.token),send("init",{token:token,room:room})},websocket.onclose=function(e){if(0==overzt)return!1;load("show"),websocket.close(),cs-=1,connect(n)}):(load("hide"),setTimeout("$('body').hide()",3e3))}function gologin(){location.href="/"}function gxtoken(data){localStorage.token=data}bgmp3open=localStorage.bgmp3open?localStorage.bgmp3open:1,mp3open=localStorage.mp3open?localStorage.mp3open:1;var isinitok=0;function initok(){isinitok=1}function load(s){"show"==s&&$("body").append('<div class="load"><img src=data:image/gif;base64,R0lGODlhgACAAKIAAP///93d3bu7u5mZmQAA/wAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFBQAEACwCAAIAfAB8AAAD/0i63P4wygYqmDjrzbtflvWNZGliYXiubKuloivPLlzReD7al+7/Eh5wSFQIi8hHYBkwHUmD6CD5YTJLz49USuVYraRsZ7vtar7XnQ1Kjpoz6LRHvGlz35O4nEPP2O94EnpNc2sef1OBGIOFMId/inB6jSmPdpGScR19EoiYmZobnBCIiZ95k6KGGp6ni4wvqxilrqBfqo6skLW2YBmjDa28r6Eosp27w8Rov8ekycqoqUHODrTRvXsQwArC2NLF29UM19/LtxO5yJd4Au4CK7DUNxPebG4e7+8n8iv2WmQ66BtoYpo/dvfacBjIkITBE9DGlMvAsOIIZjIUAixliv9ixYZVtLUos5GjwI8gzc3iCGghypQqrbFsme8lwZgLZtIcYfNmTJ34WPTUZw5oRxdD9w0z6iOpO15MgTh1BTTJUKos39jE+o/KS64IFVmsFfYT0aU7capdy7at27dw48qdS7eu3bt480I02vUbX2F/JxYNDImw4GiGE/P9qbhxVpWOI/eFKtlNZbWXuzlmG1mv58+gQ4seTbq06dOoU6vGQZJy0FNlMcV+czhQ7SQmYd8eMhPs5BxVdfcGEtV3buDBXQ+fURxx8oM6MT9P+Fh6dOrH2zavc13u9JXVJb520Vp8dvC76wXMuN5Sepm/1WtkEZHDefnzR9Qvsd9+/wi8+en3X0ntYVcSdAE+UN4zs7ln24CaLagghIxBaGF8kFGoIYV+Ybghh841GIyI5ICIFoklJsigihmimJOLEbLYIYwxSgigiZ+8l2KB+Ml4oo/w8dijjcrouCORKwIpnJIjMnkkksalNeR4fuBIm5UEYImhIlsGCeWNNJphpJdSTlkml1jWeOY6TnaRpppUctcmFW9mGSaZceYopH9zkjnjUe59iR5pdapWaGqHopboaYua1qije67GJ6CuJAAAIfkEBQUABAAsCgACAFcAMAAAA/9Iutz+ML5Ag7w46z0r5WAoSp43nihXVmnrdusrv+s332dt4Tyo9yOBUJD6oQBIQGs4RBlHySSKyczVTtHoidocPUNZaZAr9F5FYbGI3PWdQWn1mi36buLKFJvojsHjLnshdhl4L4IqbxqGh4gahBJ4eY1kiX6LgDN7fBmQEJI4jhieD4yhdJ2KkZk8oiSqEaatqBekDLKztBG2CqBACq4wJRi4PZu1sA2+v8C6EJexrBAD1AOBzsLE0g/V1UvYR9sN3eR6lTLi4+TlY1wz6Qzr8u1t6FkY8vNzZTxaGfn6mAkEGFDgL4LrDDJDyE4hEIbdHB6ESE1iD4oVLfLAqPETIsOODwmCDJlv5MSGJklaS6khAQAh+QQFBQAEACwfAAIAVwAwAAAD/0i63P5LSAGrvTjrNuf+YKh1nWieIumhbFupkivPBEzR+GnnfLj3ooFwwPqdAshAazhEGUXJJIrJ1MGOUamJ2jQ9QVltkCv0XqFh5IncBX01afGYnDqD40u2z76JK/N0bnxweC5sRB9vF34zh4gjg4uMjXobihWTlJUZlw9+fzSHlpGYhTminKSepqebF50NmTyor6qxrLO0L7YLn0ALuhCwCrJAjrUqkrjGrsIkGMW/BMEPJcphLgDaABjUKNEh29vdgTLLIOLpF80s5xrp8ORVONgi8PcZ8zlRJvf40tL8/QPYQ+BAgjgMxkPIQ6E6hgkdjoNIQ+JEijMsasNY0RQix4gKP+YIKXKkwJIFF6JMudFEAgAh+QQFBQAEACw8AAIAQgBCAAAD/kg0PPowykmrna3dzXvNmSeOFqiRaGoyaTuujitv8Gx/661HtSv8gt2jlwIChYtc0XjcEUnMpu4pikpv1I71astytkGh9wJGJk3QrXlcKa+VWjeSPZHP4Rtw+I2OW81DeBZ2fCB+UYCBfWRqiQp0CnqOj4J1jZOQkpOUIYx/m4oxg5cuAaYBO4Qop6c6pKusrDevIrG2rkwptrupXB67vKAbwMHCFcTFxhLIt8oUzLHOE9Cy0hHUrdbX2KjaENzey9Dh08jkz8Tnx83q66bt8PHy8/T19vf4+fr6AP3+/wADAjQmsKDBf6AOKjS4aaHDgZMeSgTQcKLDhBYPEswoA1BBAgAh+QQFBQAEACxOAAoAMABXAAAD7Ei6vPOjyUkrhdDqfXHm4OZ9YSmNpKmiqVqykbuysgvX5o2HcLxzup8oKLQQix0UcqhcVo5ORi+aHFEn02sDeuWqBGCBkbYLh5/NmnldxajX7LbPBK+PH7K6narfO/t+SIBwfINmUYaHf4lghYyOhlqJWgqDlAuAlwyBmpVnnaChoqOkpaanqKmqKgGtrq+wsbA1srW2ry63urasu764Jr/CAb3Du7nGt7TJsqvOz9DR0tPU1TIA2ACl2dyi3N/aneDf4uPklObj6OngWuzt7u/d8fLY9PXr9eFX+vv8+PnYlUsXiqC3c6PmUUgAACH5BAUFAAQALE4AHwAwAFcAAAPpSLrc/m7IAau9bU7MO9GgJ0ZgOI5leoqpumKt+1axPJO1dtO5vuM9yi8TlAyBvSMxqES2mo8cFFKb8kzWqzDL7Xq/4LB4TC6bz1yBes1uu9uzt3zOXtHv8xN+Dx/x/wJ6gHt2g3Rxhm9oi4yNjo+QkZKTCgGWAWaXmmOanZhgnp2goaJdpKGmp55cqqusrZuvsJays6mzn1m4uRAAvgAvuBW/v8GwvcTFxqfIycA3zA/OytCl0tPPO7HD2GLYvt7dYd/ZX99j5+Pi6tPh6+bvXuTuzujxXens9fr7YPn+7egRI9PPHrgpCQAAIfkEBQUABAAsPAA8AEIAQgAAA/lIutz+UI1Jq7026h2x/xUncmD5jehjrlnqSmz8vrE8u7V5z/m5/8CgcEgsGo/IpHLJbDqf0Kh0ShBYBdTXdZsdbb/Yrgb8FUfIYLMDTVYz2G13FV6Wz+lX+x0fdvPzdn9WeoJGAYcBN39EiIiKeEONjTt0kZKHQGyWl4mZdREAoQAcnJhBXBqioqSlT6qqG6WmTK+rsa1NtaGsuEu6o7yXubojsrTEIsa+yMm9SL8osp3PzM2cStDRykfZ2tfUtS/bRd3ewtzV5pLo4eLjQuUp70Hx8t9E9eqO5Oku5/ztdkxi90qPg3x2EMpR6IahGocPCxp8AGtigwQAIfkEBQUABAAsHwBOAFcAMAAAA/9Iutz+MMo36pg4682J/V0ojs1nXmSqSqe5vrDXunEdzq2ta3i+/5DeCUh0CGnF5BGULC4tTeUTFQVONYAs4CfoCkZPjFar83rBx8l4XDObSUL1Ott2d1U4yZwcs5/xSBB7dBMBhgEYfncrTBGDW4WHhomKUY+QEZKSE4qLRY8YmoeUfkmXoaKInJ2fgxmpqqulQKCvqRqsP7WooriVO7u8mhu5NacasMTFMMHCm8qzzM2RvdDRK9PUwxzLKdnaz9y/Kt8SyR3dIuXmtyHpHMcd5+jvWK4i8/TXHff47SLjQvQLkU+fG29rUhQ06IkEG4X/Rryp4mwUxSgLL/7IqFETB8eONT6ChCFy5ItqJomES6kgAQAh+QQFBQAEACwKAE4AVwAwAAAD/0i63A4QuEmrvTi3yLX/4MeNUmieITmibEuppCu3sDrfYG3jPKbHveDktxIaF8TOcZmMLI9NyBPanFKJp4A2IBx4B5lkdqvtfb8+HYpMxp3Pl1qLvXW/vWkli16/3dFxTi58ZRcChwIYf3hWBIRchoiHiotWj5AVkpIXi4xLjxiaiJR/T5ehoomcnZ+EGamqq6VGoK+pGqxCtaiiuJVBu7yaHrk4pxqwxMUzwcKbyrPMzZG90NGDrh/JH8t72dq3IN1jfCHb3L/e5ebh4ukmxyDn6O8g08jt7tf26ybz+m/W9GNXzUQ9fm1Q/APoSWAhhfkMAmpEbRhFKwsvCsmosRIHx444PoKcIXKkjIImjTzjkQAAIfkEBQUABAAsAgA8AEIAQgAAA/VIBNz+8KlJq72Yxs1d/uDVjVxogmQqnaylvkArT7A63/V47/m2/8CgcEgsGo/IpHLJbDqf0Kh0Sj0FroGqDMvVmrjgrDcTBo8v5fCZki6vCW33Oq4+0832O/at3+f7fICBdzsChgJGeoWHhkV0P4yMRG1BkYeOeECWl5hXQ5uNIAOjA1KgiKKko1CnqBmqqk+nIbCkTq20taVNs7m1vKAnurtLvb6wTMbHsUq4wrrFwSzDzcrLtknW16tI2tvERt6pv0fi48jh5h/U6Zs77EXSN/BE8jP09ZFA+PmhP/xvJgAMSGBgQINvEK5ReIZhQ3QEMTBLAAAh+QQFBQAEACwCAB8AMABXAAAD50i6DA4syklre87qTbHn4OaNYSmNqKmiqVqyrcvBsazRpH3jmC7yD98OCBF2iEXjBKmsAJsWHDQKmw571l8my+16v+CweEwum8+hgHrNbrvbtrd8znbR73MVfg838f8BeoB7doN0cYZvaIuMjY6PkJGSk2gClgJml5pjmp2YYJ6dX6GeXaShWaeoVqqlU62ir7CXqbOWrLafsrNctjIDwAMWvC7BwRWtNsbGFKc+y8fNsTrQ0dK3QtXAYtrCYd3eYN3c49/a5NVj5eLn5u3s6e7x8NDo9fbL+Mzy9/T5+tvUzdN3Zp+GBAAh+QQJBQAEACwCAAIAfAB8AAAD/0i63P4wykmrvTjrzbv/YCiOZGmeaKqubOu+cCzPdArcQK2TOL7/nl4PSMwIfcUk5YhUOh3M5nNKiOaoWCuWqt1Ou16l9RpOgsvEMdocXbOZ7nQ7DjzTaeq7zq6P5fszfIASAYUBIYKDDoaGIImKC4ySH3OQEJKYHZWWi5iZG0ecEZ6eHEOio6SfqCaqpaytrpOwJLKztCO2jLi1uoW8Ir6/wCHCxMG2x7muysukzb230M6H09bX2Nna29zd3t/g4cAC5OXm5+jn3Ons7eba7vHt2fL16tj2+QL0+vXw/e7WAUwnrqDBgwgTKlzIsKHDh2gGSBwAccHEixAvaqTYcFCjRoYeNyoM6REhyZIHT4o0qPIjy5YTTcKUmHImx5cwE85cmJPnSYckK66sSAAj0aNIkypdyrSp06dQo0qdSrWq1atYs2rdyrWr169gwxZJAAA7 /></div>'),"hide"==s&&$(".load").remove(),maik(s)}function maik(s){var html='<div class="maik" style=\'height:'+$(window).height()+"px;width:"+$(window).width()+"px;' onclick=\"Center($('.noticewi'), 'hide')\"></div>";"show"==s&&$(".maik").length<=0&&$("body").append(html),"hide"==s&&$(".maik").remove()}function Request(m){var sValue=location.search.match(new RegExp("[?&]"+m+"=([^&]*)(&?)","i"));return sValue?sValue[1]:sValue}function prompt(txt){var html='<div class="prompt"><span>'+txt+"</span></div>",Bw=$(window).width(),Bh=$(window).height();$("body").append(html);var Pw=$(".prompt").width(),Ph=$(".prompt").height();$(".prompt").css({top:Bh/2-Ph/2,left:Bw/2-Pw/2}),setTimeout(function(){$(".prompt").remove()},2e3)}function alert2v(msg){var html='<div id="valert2" class="alert" style="z-index: 2100000;">';html+='<div class="alertBack"></div> ',html+='<div class="mainPart" style="height: 31%;margin-top: -113.39px;">',html+='<div class="backImg">',html+='<div class="blackImg" style="height: 59%;"></div>',html=(html+="</div> ")+'<div class="alertText" style="top: 35%;" id="tipmsg">'+msg+"</div>",html+='<div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="$(\'#valert2\').remove()">确定</div> </div></div>',$("body").append(html)}function login(data){localStorage.userid=data.uid,localStorage.salt=data.salt}function loginout(msg){msg&&(prompt(msg),setTimeout("$('body').hide()",3e3)),localStorage.token="",websocket.close()}function send(act,data){data||(data={});var fs=data;fs.act=act,fs.host=window.location.host;var jsonStr=JSON.stringify(fs);if(void 0===websocket)return prompt("与服务器端口链接，请刷新重试"),!1;websocket.send(jsonStr)}function Title(title){document.title=title}function attr(data){$("#"+data.id).attr(data.wz,data.nr)}function html(data){"nickname"==data.id&&(data.html=data.html),console.log(data),$("#"+data.id).html(data.html)}function addid(data){$("#"+data.id).addClass(data.html),console.log("addid:"+$("#"+data.id).attr("class"))}function removeid(data){$("#"+data.id).removeClass(data.html),console.log("removeid:"+$("#"+data.id).attr("class"))}function value(data){$("#"+data.id).val(data.html)}function value2(data){$(""+data.id).val(""+data.html)}function append(data){$("#"+data.id).append(data.html)}function jsdata(data){eval(data)}function active(data){$("#"+data.id).addClass(data.html).siblings().removeClass(data.html)}function showid(data){$("#"+data.id).show()}function hideid(data){$("#"+data.id).hide()}function goroom(data){location.href="/room/"+data.room}function gxindex(data){index=data}function timewcgx(data){timewc=Math.ceil(new Date/1e3)-data,setTimeout('send("timegx",{})',5e3)}function timeyc(data){send("timeyc",{time:data})}function ycxx(data){$("#user"+data.id+" .zmmyctime").html(data.time)}function WeChat(url,title,img,desc){$.get("/index.php/portal/index/getconfig/",{url:window.location.href},function(data){wx.config(data),wx.ready(function(){wx.onMenuShareTimeline({title:title,link:url,imgUrl:img,success:function(){},cancel:function(){}}),wx.onMenuShareAppMessage({title:title,desc:desc,link:url,imgUrl:img,type:"",dataUrl:"",success:function(){},cancel:function(){}}),wx.error(function(res){})})},"json")}var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";function encode64(input){input=strUnicode2Ansi(input);for(var chr1,chr2,enc1,enc2,enc3,output="",chr3="",enc4="",i=0;enc1=(chr1=input.charCodeAt(i++))>>2,enc2=(3&chr1)<<4|(chr2=input.charCodeAt(i++))>>4,enc3=(15&chr2)<<2|(chr3=input.charCodeAt(i++))>>6,enc4=63&chr3,isNaN(chr2)?enc3=enc4=64:isNaN(chr3)&&(enc4=64),output=output+keyStr.charAt(enc1)+keyStr.charAt(enc2)+keyStr.charAt(enc3)+keyStr.charAt(enc4),chr1=chr2=chr3="",enc1=enc2=enc3=enc4="",i<input.length;);return output}</script>

	<script type="text/javascript">
tSpeed = 300 //切换速度300ms
//内容滚动			
  var scrollSwiper = new Swiper('.scroll', {
  	//65是头部的高
  	//36是top地址和搜索的高
  	slidesOffsetBefore: 0,
  	direction: 'vertical',
  	freeMode: true,
  	slidesPerView: 'auto',
	
  });
	document.addEventListener('touchmove', function(e){e.preventDefault()}, false);		
    </script>
	<script>
    //load('show');
    token='<?php echo ($token); ?>';
    if(dkxx){
        connect(dkxx);
    }
    else{
        load('hide');
        prompt('服务器没开启,请稍后再试');
        setTimeout("$('body').hide()",3000);
    }
</script>


<style>
	.createRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 110;}	
	.createRoom .createRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
	/* top:38%;left:50%;margin-top:-24vh;margin-left: -22.5vh; */	
	.createRoom .mainPart{width: 45vh;position: absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);display:none;}
	.createRoom .mainPart .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }	
	.createRoom .mainPart .createTitle{position:relative;height:5.5vh;text-align: center;}	
	.createRoom .mainPart .createTitle img{position:relative;height:3vh;margin-top: 1.5vh;}	
	.createRoom .mainPart .cancelCreate{width: 5vh;height:5vh;top:-2.5vh;right:-2.5vh;position: absolute;}	
	.createRoom .mainPart .createCommit{position: relative;margin-top: 3vh;bottom: 1.5vh;line-height: 6vh;height: 5.7vh;font-size: 2.5vh;width: 18vh;left:50%;margin-left:-9vh;text-align: center;background:url("http://lyuu.poyio.cn/files/d_2/images/game/button2.png");background-size:100%;color: #fff;}	
	.createRoom .mainPart .blueBack{width: 42vh;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative;padding: 0 0 0.8vh 0; }
	.createRoom .mainPart .blueBack .selectPart{width:100%;margin-top:0.5vh;line-height:4.5vh;font-size:2.1vh;position: relative;color:#111431;background:#bbbff1;border-radius:0px;font-family:simHei; padding:1vh 0;display:none;}
	.createRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:8vh;text-align: right;}
	.createRoom .mainPart .blueBack .selectPart .selectList{float: left; width: 34vh}
	.createRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:1.8vh; }
	.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:2.1vh;width:2.1vh;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:1vh;position: relative; }
	.createRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 3vh;height:3vh;left: 0;top:0.2vh;background: url("http://lyuu.poyio.cn/files/images/common/tick.png");background-size: 3vh 3vh;}
	.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.4vh;}

	.bankerSelected{position: absolute;width: 8vh;height: 5.4vh;border-style: solid;border-width: 0px;border-color: #392c62;color: #653604;text-align: center;font-size: 1.8vh;overflow: hidden;}
	.bankerSelected .img{position: absolute;top: 0;left: 0;width: 7.7vh;height: 5.4vh;border-style: solid;border-width: 0.5px;border-color: #392c62;}
	.bankerUnSelected{position: absolute;width: 8vh;height: 5.4vh;border-style: solid;border-width: 0px;border-color: #e8c007;color: #9a6b3a;text-align: center;font-size: 1.8vh;overflow: hidden;}
	.bankerUnSelected .img{position: absolute;top: 0;left: 0;width: 7.7vh;height: 5.4vh;border-style: solid;border-width: 0.5px;border-color: #e8c007;}
</style>


<div class="createRoom" ng-show="createInfo.isShow>0">
	<div class="createRoomBack"></div>
	<div class="mainPart">			
		<div  class="createB"></div>
		<div class="createTitle">
			<img src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/createroom2.png" />
		</div>				
        <img src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/cancel.png" class="cancelCreate" ng-click="cancelCreate()">
        <!-- 六人牛牛 -->
		<div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==3">
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull.banker_mode==3]" style="left: 1.35vh;" ng-click="selectBankerMode(3)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull.banker3}}.png" class="img" style="border-top-left-radius:4px;" v-if="createInfo.bull.banker_mode!=3">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">上庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull.banker_mode==5]" style="left: 9.9vh;" ng-click="selectBankerMode(5)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull.banker5}}.png" class="img" v-if="createInfo.bull.banker_mode!=5">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">固定</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">庄家</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull.banker_mode==1]" style="left: 18.45vh;" ng-click="selectBankerMode(1)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull.banker1}}.png" class="img" v-if="createInfo.bull.banker_mode!=1">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull.banker_mode==2]" style="left: 27vh;" ng-click="selectBankerMode(2)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull.banker2}}.png" class="img" v-if="createInfo.bull.banker_mode!=2">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull.banker_mode==4]" style="left: 35.55vh;" ng-click="selectBankerMode(4)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull.banker4}}.png" class="img" style="border-top-right-radius:4px;" v-if="createInfo.bull.banker_mode!=4">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">通比</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
			</div>
		</div>

        <!-- 9人牛牛 -->
		<div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==5">
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull9.banker_mode==3]" style="left: 1.35vh;" ng-click="selectBankerMode9(3)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull9.banker3}}.png" class="img" style="border-top-left-radius:4px;" v-if="createInfo.bull9.banker_mode!=3">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">上庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull9.banker_mode==5]" style="left: 9.9vh;" ng-click="selectBankerMode9(5)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull9.banker5}}.png" class="img" v-if="createInfo.bull9.banker_mode!=5">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">固定</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">庄家</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull9.banker_mode==1]" style="left: 18.45vh;" ng-click="selectBankerMode9(1)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull9.banker1}}.png" class="img" v-if="createInfo.bull9.banker_mode!=1">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull9.banker_mode==2]" style="left: 27vh;" ng-click="selectBankerMode9(2)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull9.banker2}}.png" class="img" v-if="createInfo.bull9.banker_mode!=2">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull9.banker_mode==4]" style="left: 35.55vh;" ng-click="selectBankerMode9(4)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull9.banker4}}.png" class="img" style="border-top-right-radius:4px;" v-if="createInfo.bull9.banker_mode!=4">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">通比</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
			</div>
		</div>

        <!-- 六人三公选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==7">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong6.banker_mode==1]" style="left: 1.35vh;" ng-click="selectBankerModeSangong6(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong6.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong6.banker_mode==4]" style="left: 9.9vh;" ng-click="selectBankerModeSangong6(4)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong6.banker4}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">经典</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">三公</p>
            </div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong6.banker_mode==2]" style="left: 18.45vh;" ng-click="selectBankerModeSangong6(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong6.banker2}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>

        </div>
        <!-- 二八杠选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==8">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.erbagang.banker_mode==1]" style="left: 1.35vh;" ng-click="selectBankerModeErbagang(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.erbagang.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.erbagang.banker_mode==2]" style="left: 9.9vh;" ng-click="selectBankerModeErbagang(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.erbagang.banker2}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">固定</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">庄家</p>
            </div>
        </div>

		<!-- 9人6倍牛牛 -->
		<div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==9">
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull6b.banker_mode==3]" style="left: 1.35vh;" ng-click="selectBankerMode6b(3)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull6b.banker3}}.png" class="img" style="border-top-left-radius:4px;" v-if="createInfo.bull6b.banker_mode!=3">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">上庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull6b.banker_mode==5]" style="left: 9.9vh;" ng-click="selectBankerMode6b(5)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull6b.banker5}}.png" class="img" v-if="createInfo.bull6b.banker_mode!=5">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">固定</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">庄家</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull6b.banker_mode==1]" style="left: 18.45vh;" ng-click="selectBankerMode6b(1)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull6b.banker1}}.png" class="img" v-if="createInfo.bull6b.banker_mode!=1">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull6b.banker_mode==2]" style="left: 27vh;" ng-click="selectBankerMode6b(2)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull6b.banker2}}.png" class="img" v-if="createInfo.bull6b.banker_mode!=2">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull6b.banker_mode==4]" style="left: 35.55vh;" ng-click="selectBankerMode6b(4)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull6b.banker4}}.png" class="img" style="border-top-right-radius:4px;" v-if="createInfo.bull6b.banker_mode!=4">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">通比</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
			</div>
		</div>

		<!-- 9人8倍牛牛 -->
		<div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==11">
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull8b.banker_mode==3]" style="left: 1.35vh;" ng-click="selectBankerMode8b(3)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull8b.banker3}}.png" class="img" style="border-top-left-radius:4px;" v-if="createInfo.bull8b.banker_mode!=3">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">上庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull8b.banker_mode==5]" style="left: 9.9vh;" ng-click="selectBankerMode8b(5)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull8b.banker5}}.png" class="img" v-if="createInfo.bull8b.banker_mode!=5">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">固定</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">庄家</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull8b.banker_mode==1]" style="left: 18.45vh;" ng-click="selectBankerMode8b(1)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull8b.banker1}}.png" class="img" v-if="createInfo.bull8b.banker_mode!=1">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull8b.banker_mode==2]" style="left: 27vh;" ng-click="selectBankerMode8b(2)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull8b.banker2}}.png" class="img" v-if="createInfo.bull8b.banker_mode!=2">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
			</div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bull8b.banker_mode==4]" style="left: 35.55vh;" ng-click="selectBankerMode8b(4)">
				<img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.bull8b.banker4}}.png" class="img" style="border-top-right-radius:4px;" v-if="createInfo.bull8b.banker_mode!=4">
				<p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">通比</p>
				<p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">牛牛</p>
			</div>
		</div>

        <!-- 牌九选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==12">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.paijiu.banker_mode==2]" style="left: 1.35vh;" ng-click="selectBankerModePaijiu(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.paijiu.banker2}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.paijiu.banker_mode==1]" style="left: 9.9vh;" ng-click="selectBankerModePaijiu(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.paijiu.banker1}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
        </div>

        <!-- 九人三公选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==16">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong9.banker_mode==1]" style="left: 1.35vh;" ng-click="selectBankerModeSangong9(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong9.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong9.banker_mode==4]" style="left: 9.9vh;" ng-click="selectBankerModeSangong9(4)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong9.banker4}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">经典</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">三公</p>
            </div>
			<div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong9.banker_mode==2]" style="left: 18.45vh;" ng-click="selectBankerModeSangong9(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/d_2/images/common/banker_{{createInfo.sangong9.banker2}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>

        </div>


        <!-- 赖子斗牛选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==17">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.laibull.banker_mode==1]" style="left: 1.35vh;" ng-click="selectBankerModeLaibull(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.laibull.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">自由</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.laibull.banker_mode==2]" style="left: 9.9vh;" ng-click="selectBankerModeLaibull(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.laibull.banker2}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">抢庄</p>
            </div>
        </div>

	    <!-- 明牌炸金花选模式 -->
        <div style="width: 100%; height: 5.4vh;line-height: 2.7vh;" ng-if="createInfo.isShow==18">
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.flower18.play_mode==1]" style="left: 1.35vh;" ng-click="selectModeFlower18(1)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.flower18.mode1}}.png" class="img" style="border-top-left-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">经典</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">模式</p>
            </div>
            <div ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.flower18.play_mode==2]" style="left: 9.9vh;" ng-click="selectModeFlower18(2)">
                <img ng-src="http://lelefile3.zhenglvyou.com/files/images/common/mode_{{createInfo.flower18.mode2}}.png" class="img" style="border-top-right-radius:4px;">
                <p style="position: absolute;top: 0.4vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">明牌</p>
                <p style="position: absolute;top: 2.7vh;left: 0; width: 100%;height: 2.7vh;text-align: center;">模式</p>
            </div>
        </div>

		<div class="blueBack">
			<div class="selectPart" style="top: 0px;height:4.5vh;padding: 0 0">
				<div class="selectTitle" style="top: 0;left: 0;width: 100%;height: 100%;font-size: 2vh; text-align: center;color: #efd0a4; background-color: #4e3f79;opacity: 1.0">
				    创建房间,游戏未进行,5分钟自动关闭房间且退还房卡
				</div>
			</div>	
            <!-- 6人 炸金花建房选项 -->
			<div class="flowerRull" ng-if="createInfo.isShow==1">			
				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">筹码：</div>
					<div class="selectList" >
						<div class="selectItem"  ng-click="selectChange(1,1)">
							<div class="selectBox"></div>
							<img  ng-show="createInfo.flower.chip_type==1"/>
							<div class="selectText" >2/5,4/10,8/20,10/25</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,2)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.chip_type==2"/>
							<div class="selectText" >4/10,8/20,10/25,20/50</div>
						</div>							
					</div>
				</div>

				<div class="selectPart" style="height:16.5vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem" ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.pkvalue1==1" />
							<div class="selectText" >100分以下不能比牌</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.pkvalue2==1" />
							<div class="selectText" >闷牌，全场禁止比牌</div>
						</div>
						
						<div class="selectItem"  ng-click="selectChange(2,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.lookvalue==1" />
							<div class="selectText" >首轮禁止看牌</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(2,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower.only_big==1" />
                            <div class="selectText" >只发大牌(AKQJ10)</div>
                        </div>
					</div>
				</div>

				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.ticket_count==1" />
							<div class="selectText" >10局X3张房卡</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.flower.ticket_count==2" />
							<div class="selectText">20局X6张房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4.5vh;">
					<div class="selectTitle">上限：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,0)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.flower.upper_limit==0" />
							<div class="selectText" >无</div>
						</div>							
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,500)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.flower.upper_limit==500" />
							<div class="selectText">500</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,1000)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.flower.upper_limit==1000" />
							<div class="selectText">1000</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,2000)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.flower.upper_limit==2000" />
							<div class="selectText">2000</div>
						</div>
					</div>
				</div>

			</div>

            <!-- 9人 炸金花建房选项 -->
			<div class="flowerRull" ng-if="createInfo.isShow==10">			
				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">筹码：</div>
					<div class="selectList" >
						<div class="selectItem"  ng-click="selectChange(1,1)">
							<div class="selectBox"></div>
							<img  ng-show="createInfo.z9.chip_type==1"/>
							<div class="selectText" >2/5,4/10,8/20,10/25</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,2)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.chip_type==2"/>
							<div class="selectText" >4/10,8/20,10/25,20/50</div>
						</div>							
					</div>
				</div>

				<div class="selectPart" style="height:13.5vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem" ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.pkvalue1==1" />
							<div class="selectText" >100分以下不能比牌</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.pkvalue2==1" />
							<div class="selectText" >闷牌，全场禁止比牌</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(2,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.lookvalue==1" />
							<div class="selectText" >首轮禁止看牌</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.ticket_count==1" />
							<div class="selectText" >12局X6房卡</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.z9.ticket_count==2" />
							<div class="selectText">24局X12房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4.5vh;">
					<div class="selectTitle">上限：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,0)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.z9.upper_limit==0" />
							<div class="selectText" >无</div>
						</div>							
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,500)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.z9.upper_limit==500" />
							<div class="selectText">500</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,1000)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.z9.upper_limit==1000" />
							<div class="selectText">1000</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,2000)">
							<div class="selectBox" > </div>
							<img  ng-show="createInfo.z9.upper_limit==2000" />
							<div class="selectText">2000</div>
						</div>
					</div>
				</div>

			</div>

            <!-- 斗地主建房选项-->
			<div class="landlordRull" ng-if="createInfo.isShow==2">			
				<div class="selectPart" style="height:4.5vh;">
					<div class="selectTitle">底分：</div>
					<div class="selectList" >
					    <div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.landlord.base_score==1"/>
							<div class="selectText">1分</div>
						</div>						
						<div class="selectItem" ng-click="selectChange(1,5)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.landlord.base_score==5"/>
							<div class="selectText">5分</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,10)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.landlord.base_score==10" />
							<div class="selectText">10分</div>
						</div>
					</div>
				</div>
				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div style="height:4.5vh;">
							<div class="selectItem" ng-click="selectChange(2,1)">
								<div class="selectBox"></div>
								<img  ng-show="createInfo.landlord.ask_mode==1" />
								<div class="selectText">轮流问地主</div>
							</div>
						</div>	
						<div style="height:4.5vh;" >
							<div class="selectItem" ng-click="selectChange(2,2)">
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.landlord.ask_mode==2" />
								<div class="selectText">随机问地主</div>
							</div>
						</div>	
					</div>
				</div>
				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.landlord.ticket_count==1" />
							<div class="selectText" >6局X3张房卡</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.landlord.ticket_count==2" />
							<div class="selectText" >12局X6张房卡</div>
						</div>
					</div>
				</div>
			</div>
            <!-- 6人牛牛建房选项-->
			<div class="bullRull" ng-if="createInfo.isShow==3">	
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">底分：</div>
					<div class="selectList" >
						<div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.score_type==1"/>
							<div class="selectText">1分</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,2)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.score_type==2"/>
							<div class="selectText">2分</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,3)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.score_type==3" />
							<div class="selectText">3分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,4)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.score_type==4" />
							<div class="selectText">4分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,5)" style="float:right;margin-right:3vh;">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.score_type==5" />
							<div class="selectText">5分</div>
						</div>
					</div>
				</div>		
                <!-- 下注倍数 -->
                <div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  
				<div class="selectPart" style="height:9vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.rule_type==1" />
							<div class="selectText" >牛牛x3牛九x2牛八x2</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.rule_type==2" />
							<div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
						</div>
					</div>
				</div>	

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">牌型：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.is_cardfive==1" />
							<div class="selectText" >五花牛(5倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.is_cardbomb==1" />
							<div class="selectText" >炸弹牛(6倍)</div>
						</div>				
						<div class="selectItem"  ng-click="selectChange(3,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.is_cardtiny==1" />
							<div class="selectText" >五小牛(8倍)</div>
						</div>
					</div>
				</div>	

				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.bull.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.bull.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.bull.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.bull.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.ticket_type==1" />
							<div class="selectText" >10局X3房卡</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(4,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.ticket_type==2" />
							<div class="selectText" >20局X6房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;" ng-if="createInfo.bull.banker_mode==5">
					<div class="selectTitle">上庄：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(5,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.banker_score==1" />
							<div class="selectText" >无</div>
						</div>							
						<div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.banker_score==2" />
							<div class="selectText" >100</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.banker_score==3" />
							<div class="selectText" >300</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull.banker_score==4" />
							<div class="selectText" >500</div>
						</div>
					</div>
				</div>

			</div>
            <!-- 麻将建房选项-->
			<div class="majiangRull" ng-if="createInfo.isShow==4">
					<div class="selectPart" style="height:12vh;">
						<div class="selectTitle">鬼牌：</div>
						<div class="selectList" >
							<div class="selectItem"  ng-click="selectChange(1,0)">
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.joker==0"/>
								<div class="selectText">无鬼牌</div>
							</div>							
							<div class="selectItem" ng-click="selectChange(1,1)" >
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.joker==1"/>
								<div class="selectText">翻牌当鬼</div>
							</div>							
							<div class="selectItem" ng-click="selectChange(1,2)" >
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.joker==2" />
								<div class="selectText">红中当鬼(有风)</div>
							</div>
							<div class="selectItem" ng-click="selectChange(1,3)" >
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.joker==3" />
								<div class="selectText">红中当鬼(无风)</div>
							</div>


						</div>
					</div>	
					<div class="selectPart" style="height:9vh;">
						<div class="selectTitle">抓马：</div>
						<div class="selectList">
							<div>
								<div class="selectItem"ng-click="selectChange(2,0)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==0" />
									<div class="selectText">不跑马</div>
								</div>							
								<div class="selectItem" ng-click="selectChange(2,2)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==2"/>
									<div class="selectText">2匹</div>
								</div>		
								<div class="selectItem" ng-click="selectChange(2,4)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==4"/>
									<div class="selectText">4匹</div>
								</div>														
							</div>
							<div>	
								<div class="selectItem" ng-click="selectChange(2,6)" >
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==6"/>
									<div class="selectText">6匹</div>
								</div>
								<div class="selectItem" ng-click="selectChange(2,8)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==8" />
									<div class="selectText">8匹</div>
								</div>
								<div class="selectItem" ng-click="selectChange(2,1)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.horse_count==1" />
									<div class="selectText">爆炸马</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="selectPart" style="height:4.5vh;">
						<div class="selectTitle">规则：</div>
						<div class="selectList">
								<div class="selectItem"  ng-click="selectChange(3)">
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.qianggang==1" />
									<div class="selectText">抢杠全包</div>
								</div>
								<div class="selectItem" ng-click="selectChange(5)" >
									<div class="selectBox" ></div>
									<img  ng-show="createInfo.majiang.chengbao==1" />
									<div class="selectText">杠爆全包</div>
								</div>
						</div>

					</div>					
					<div class="selectPart" style="height:9vh;">	
					<div class="selectTitle">房卡：</div>
						<div class="selectList">
							<div class="selectItem"  ng-click="selectChange(4,1)">
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.ticket_count==1" />
								<div class="selectText" >6局X3张房卡</div>
							</div>							
							<div class="selectItem"  ng-click="selectChange(4,2)">
								<div class="selectBox" ></div>
								<img  ng-show="createInfo.majiang.ticket_count==2" />
								<div class="selectText" >12局X6张房卡</div>
							</div>
						</div>
					</div>
			</div>
            <!-- 9人牛牛建房选项-->
			<div class="bullRull" ng-if="createInfo.isShow==5">	
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">底分：</div>
					<div class="selectList" >
						<div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.score_type==1"/>
							<div class="selectText">1分</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,2)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.score_type==2"/>
							<div class="selectText">2分</div>
						</div>							
						<div class="selectItem" ng-click="selectChange(1,3)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.score_type==3" />
							<div class="selectText">3分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,4)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.score_type==4" />
							<div class="selectText">4分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,5)" style="float:right;margin-right:3vh;" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.score_type==5" />
							<div class="selectText">5分</div>
						</div>
					</div>
				</div>		

                <!-- 下注倍数 -->
                <div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull9.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull9.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull9.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.rule_type==1" />
							<div class="selectText" >牛牛x3牛九x2牛八x2</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.rule_type==2" />
							<div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
						</div>
					</div>
				</div>	

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">牌型：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.is_cardfive==1" />
							<div class="selectText" >五花牛(5倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.is_cardbomb==1" />
							<div class="selectText" >炸弹牛(6倍)</div>
						</div>				
						<div class="selectItem"  ng-click="selectChange(3,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.is_cardtiny==1" />
							<div class="selectText" >五小牛(8倍)</div>
						</div>
					</div>
				</div>	

				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.bull9.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.bull9.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.bull9.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.bull9.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.ticket_type==1" />
							<div class="selectText" >12局X6房卡</div>
						</div>							
						<div class="selectItem"  ng-click="selectChange(4,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.ticket_type==2" />
							<div class="selectText" >24局X12房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;" ng-if="createInfo.bull9.banker_mode==5">
					<div class="selectTitle">上庄：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(5,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.banker_score==1" />
							<div class="selectText" >无</div>
						</div>							
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.banker_score==2" />
							<div class="selectText" >300</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.banker_score==3" />
							<div class="selectText" >500</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,4)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull9.banker_score==4" />
							<div class="selectText" >1000</div>
						</div>
					</div>
				</div>
			</div>

            <!-- 12人牛牛建房选项-->
            <div class="bullRull" ng-if="createInfo.isShow==6">
                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.score_type==1"/>
                            <div class="selectText">1分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.score_type==2"/>
                            <div class="selectText">2分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.score_type==3" />
                            <div class="selectText">3分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.score_type==4" />
                            <div class="selectText">4分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" style="float:right;margin-right:3vh;" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.score_type==5" />
                            <div class="selectText">5分</div>
                        </div>
                    </div>
                </div>

                <!-- 下注倍数 -->
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  

                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.is_cardtiny==1" />
                            <div class="selectText" >五小牛(8倍)</div>
                        </div>
                    </div>
                </div>

				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.bull12.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.bull12.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.bull12.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.bull12.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.ticket_type==1" />
                            <div class="selectText" >12局X9房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull12.ticket_type==2" />
                            <div class="selectText" >24局X18房卡</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 六人三公建房选项 -->
            <div class="bullRull" ng-if="createInfo.isShow==7">
                <div class="selectPart" style="height:7.5vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.score_type==1"/>
                            <div class="selectText">1分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.sangong6.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.score_type==2"/>
                            <div class="selectText">2分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.score_type==3" />
                            <div class="selectText">3分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)" ng-show="createInfo.sangong6.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.score_type==4" />
                            <div class="selectText">4分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.score_type==5" />
                            <div class="selectText">5分</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.is_cardjoker==1" />
                            <div class="selectText" >天公x10,雷公x7,地公x5</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.is_cardbao9==1" />
                            <div class="selectText" >暴玖x9</div>
                        </div>

                    </div>
                </div>
                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.ticket_type==1" />
                            <div class="selectText" >10局X3房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong6.ticket_type==2" />
                            <div class="selectText" >20局X6房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 二八杠 建房选项 -->
            <div ng-if="createInfo.isShow==8">
                <div class="selectPart" style="height:9vh;" ng-if="createInfo.erbagang.banker_mode==2">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(1,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.score_type==1" />
                            <div class="selectText" >500分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.score_type==2" />
                            <div class="selectText" >1000分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.score_type==3" />
                            <div class="selectText" >1500分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.score_type==4" />
                            <div class="selectText" >无限制</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:13.5vh;"  ng-if="createInfo.erbagang.banker_mode==1">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
						<div class="selectItem"  ng-click="selectChange(2,0)">
							<div class="selectBox"></div>
							<img  ng-show="createInfo.erbagang.chip_type==0"/>
							<div class="selectText" >5,10,20,30</div>
						</div>
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox"></div>
                            <img  ng-show="createInfo.erbagang.chip_type==1"/>
                            <div class="selectText" >10,20,30,50</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(2,2)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.chip_type==2"/>
                            <div class="selectText" >20,30,50,80</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(2,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.chip_type==3"/>
                            <div class="selectText" >30,50,80,100</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.rule_type==1" />
                            <div class="selectText" >无二八杠</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.rule_type==2" />
                            <div class="selectText" >二八杠2倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.rule_type==3" />
                            <div class="selectText" >二八杠3倍</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.ticket_count==1" />
                            <div class="selectText" >4局X3房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.erbagang.ticket_count==2" />
                            <div class="selectText" >8局X6房卡</div>
                        </div>
                    </div>
                </div>

            </div>

			<!-- 9人6倍牛牛 建房选项 -->
			<div class="bullRull" ng-if="createInfo.isShow==9">
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">底分：</div>
					<div class="selectList" >
						<div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.score_type==1"/>
							<div class="selectText">1分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.score_type==2"/>
							<div class="selectText">2分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,3)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.score_type==3" />
							<div class="selectText">3分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,4)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.score_type==4" />
							<div class="selectText">4分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,5)" style="float:right;margin-right:3vh;">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.score_type==5" />
							<div class="selectText">5分</div>
						</div>
					</div>
				</div>
                <!-- 下注倍数 -->
                <div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull6b.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull6b.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull6b.bet_type==4" />
                            <div class="selectText" >1/2/4/6倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.bull6b.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.rule_type==1" />
							<div class="selectText" >牛牛x3牛九x2牛八x2</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.rule_type==2" />
							<div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">牌型：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.is_cardfive==1" />
							<div class="selectText" >五花牛(5倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.is_cardbomb==1" />
							<div class="selectText" >炸弹牛(6倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.is_cardtiny==1" />
							<div class="selectText" >五小牛(8倍)</div>
						</div>
					</div>
				</div>
				
				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.bull6b.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.bull6b.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.bull6b.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.bull6b.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
				
				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.ticket_type==1" />
							<div class="selectText" >12局X6房卡</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(4,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.ticket_type==2" />
							<div class="selectText" >24局X12房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;" ng-if="createInfo.bull6b.banker_mode==5">
					<div class="selectTitle">上庄：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(5,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.banker_score==1" />
							<div class="selectText" >无</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.banker_score==2" />
							<div class="selectText" >300</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.banker_score==3" />
							<div class="selectText" >500</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,4)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull6b.banker_score==4" />
							<div class="selectText" >1000</div>
						</div>
					</div>
				</div>

			</div>

			<!-- 9人8倍牛牛 建房选项 -->
			<div class="bullRull" ng-if="createInfo.isShow==11">
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">底分：</div>
					<div class="selectList" >
						<div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.score_type==1"/>
							<div class="selectText">1分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.score_type==2"/>
							<div class="selectText">2分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,3)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.score_type==3" />
							<div class="selectText">3分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,4)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.score_type==4" />
							<div class="selectText">4分</div>
						</div>
						<div class="selectItem" ng-click="selectChange(1,5)" style="float:right;margin-right:3vh;">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.score_type==5" />
							<div class="selectText">5分</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">规则：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(2,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.rule_type==1" />
							<div class="selectText" >牛牛x3牛九x2牛八x2</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(2,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.rule_type==2" />
							<div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">牌型：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.is_cardfive==1" />
							<div class="selectText" >五花牛(5倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.is_cardbomb==1" />
							<div class="selectText" >炸弹牛(6倍)</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.is_cardtiny==1" />
							<div class="selectText" >五小牛(8倍)</div>
						</div>
					</div>
				</div>

				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.bull8b.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.bull8b.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.bull8b.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.bull8b.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.ticket_type==1" />
							<div class="selectText" >12局X6房卡</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(4,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.ticket_type==2" />
							<div class="selectText" >24局X12房卡</div>
						</div>
					</div>
				</div>

				<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;" ng-if="createInfo.bull8b.banker_mode==5">
					<div class="selectTitle">上庄：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(5,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.banker_score==1" />
							<div class="selectText" >无</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.banker_score==2" />
							<div class="selectText" >300</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,3)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.banker_score==3" />
							<div class="selectText" >500</div>
						</div>
						<div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,4)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.bull8b.banker_score==4" />
							<div class="selectText" >1000</div>
						</div>
					</div>
				</div>
			</div>


            <!-- 牌九 建房选项-->
            <div ng-if="createInfo.isShow==12">  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.paijiu.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:12vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectText" >至尊10倍,双天双地双人8倍,对子6倍,天王地王5倍,天杠地杠天高九地高九4倍,九点3倍,八点2倍</div>
                        </div>                          
                       
                    </div>
                </div>  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectText" >丁三牌和二四牌可互换使用</div>
                        </div>
                    </div>
                </div>  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.ticket_type==1" />
                            <div class="selectText" >12局X6房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiu.ticket_type==2" />
                            <div class="selectText" >24局X12房卡</div>
                        </div>
                    </div>
                </div>
                
			</div>
			
			<!-- 大吃小 -->
			<div ng-if="createInfo.isShow==14"> 
				<div class="selectPart" style="height:5vh;">
					<div class="selectTitle">人数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(6,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.max_count_type==1" />
							<div class="selectText" >9人房间</div>
						</div>                          
						<div class="selectItem"  ng-click="selectChange(6,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.max_count_type==2" />
							<div class="selectText" >12人房间</div>
						</div>
					</div>
				</div>  

				<div class="selectPart" style="height:7.5vh;">
					<div class="selectTitle">筹码：</div>
					<div class="selectList" >
						<div class="selectItem" ng-click="selectChange(1,1)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.bet_type==1"/>
							<div class="selectText">300</div>
						</div>                          
						<div class="selectItem" ng-click="selectChange(1,2)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.bet_type==2"/>
							<div class="selectText">500</div>
						</div>                          
						<div class="selectItem" ng-click="selectChange(1,3)" >
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.bet_type==3" />
							<div class="selectText">1000</div>
						</div>
					</div>
				</div>
				
				<!--
				<div class="selectPart" style="height:9vh;">
					<div class="selectTitle">牌型：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,1)">
							<div class="selectBox" ></div>
							<img src="http://www.yields.cn/files/images/common/tick.png" ng-show="createInfo.dcx.is_cardjoker==1" />
							<div class="selectText" >天公,雷公,地公</div>
						</div>
						<div class="selectItem"  ng-click="selectChange(3,2)">
							<div class="selectBox" ></div>
							<img src="http://www.yields.cn/files/images/common/tick.png" ng-show="createInfo.dcx.is_cardbao9==1" />
							<div class="selectText" >暴玖</div>
						</div>              
						
					</div>
				</div>  
				-->
				<div class="selectPart" style="height:4.5vh;">
					<div class="selectTitle">局数：</div>
					<div class="selectList">
						<div class="selectItem"  ng-click="selectChange(4,1)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.ticket_type==1" />
							<div class="selectText" ng-show="createInfo.dcx.max_count_type==1">12局X6房卡</div>
							<div class="selectText" ng-show="createInfo.dcx.max_count_type==2">12局X9房卡</div>
						</div>                          
						<div class="selectItem"  ng-click="selectChange(4,2)">
							<div class="selectBox" ></div>
							<img  ng-show="createInfo.dcx.ticket_type==2" />
							<div class="selectText" ng-show="createInfo.dcx.max_count_type==1">24局X12房卡</div>
							<div class="selectText" ng-show="createInfo.dcx.max_count_type==2">24局X18房卡</div>
						</div>
					</div>
				</div>
				
			</div>

            <!-- 鱼虾蟹 -->
            <div ng-if="createInfo.isShow==15">
                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(1,1)">
                            <div class="selectBox"></div>
                            <img  ng-show="createInfo.yxx.chip_type==1"/>
                            <div class="selectText" >&nbsp;&nbsp;5，10，20，50</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.yxx.chip_type==2"/>
                            <div class="selectText" >10，20，50，100</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">上限：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,100)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.yxx.upper_limit==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,300)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.yxx.upper_limit==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,500)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.yxx.upper_limit==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.yxx.rule_value1==1" />
                            <div class="selectText" >三个相同5倍，两个相同3倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.yxx.ticket_type==1" />
                            <div class="selectText">12局X9张房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.yxx.ticket_type==2" />
                            <div class="selectText">24局X18张房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 九人三公建房选项 -->
            <div ng-if="createInfo.isShow==16">
                <div class="selectPart" style="height:7.5vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.score_type==1"/>
                            <div class="selectText">1分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.sangong9.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.score_type==2"/>
                            <div class="selectText">2分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.score_type==3" />
                            <div class="selectText">3分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)" ng-show="createInfo.sangong9.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.score_type==4" />
                            <div class="selectText">4分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.score_type==5" />
                            <div class="selectText">5分</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.is_cardjoker==1" />
                            <div class="selectText" >天公x10,雷公x7,地公x5</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.is_cardbao9==1" />
                            <div class="selectText" >暴玖x9</div>
                        </div>

                    </div>
                </div>
                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.ticket_type==1" />
                            <div class="selectText" >12局X6房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.sangong9.ticket_type==2" />
                            <div class="selectText" >24局X12房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 赖子斗牛 -->
            <div ng-if="createInfo.isShow==17">
                <div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.max_count_type==1" />
                            <div class="selectText" >9人房间</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.max_count_type==2" />
                            <div class="selectText" >12人房间</div>
                        </div>
                    </div>
                </div>            
                <div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.laibull.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:7.5vh;padding:0.5vh 0;line-height:3.7vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  
                <div class="selectPart" style="height:7.5vh;padding:0.5vh 0;line-height:3.7vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>  
				
                <div class="selectPart" style="height:19vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
						<div class="selectItem"  ng-click="selectChange(3,9)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_laizi==1" />
                            <div class="selectText" >有赖子</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>              
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>  

				<!-- 自定义倒计时 -->
				<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle" style="height:8vh;line-height:3vh;">时间：</div>
                    <div class="selectList" style="height:8vh;">                        
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">准备</div>
                            <select ng-model="createInfo.laibull.ready_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">抢庄</div>
                            <select ng-model="createInfo.laibull.grab_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">下注</div>
                            <select ng-model="createInfo.laibull.bet_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left:0.2vh;margin-right:0vh;height:4vh;">
                            <div class="text" style="float:left;line-height:3vh;">摊牌</div>
                            <select ng-model="createInfo.laibull.show_time" style="top:0vh;">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==1">12局X6房卡</div>
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==2">12局X9房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.laibull.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==1">24局X12房卡</div>
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==2">24局X18房卡</div>
                        </div>
                    </div>
                </div>
            </div>

	        <!-- 明牌炸金花建房选项 -->
            <div ng-if="createInfo.isShow==18">
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.default_score==4" />
                            <div class="selectText" >4分</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,8)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.default_score==8" />
                            <div class="selectText">8分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,10)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.default_score==10" />
                            <div class="selectText">10分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,25)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.default_score==25" />
                            <div class="selectText">25分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,20)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.default_score==20" />
                            <div class="selectText">20分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,50)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.default_score==50" />
                            <div class="selectText">50分</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox"></div>
                            <img  ng-show="createInfo.flower18.chip_type==1"/>
                            <div class="selectText" >2/5,4/10,8/20,10/25</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(3,2)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.chip_type==2"/>
                            <div class="selectText" >4/10,8/20,10/25,20/50</div>
                        </div>                          
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.disable_look==1" />
                            <div class="selectText" >首轮禁止看牌</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.disable_pk==1" />
                            <div class="selectText" >闷牌，全场禁止比牌</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">上限：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,0)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.upper_limit==0" />
                            <div class="selectText" >无</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,500)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.upper_limit==500" />
                            <div class="selectText">500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,1000)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.upper_limit==1000" />
                            <div class="selectText">1000</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,2000)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.upper_limit==2000" />
                            <div class="selectText">2000</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">比牌：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,0)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.pk_score==0" />
                            <div class="selectText" >0</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,100)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.pk_score==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,300)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.pk_score==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,500)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.pk_score==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">看牌：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(7,0)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.look_score==0" />
                            <div class="selectText" >0</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,100)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.look_score==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,300)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.look_score==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,500)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.look_score==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(8,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.flower18.ticket_type==1" />
                            <div class="selectText">12局X6张房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(8,2)">
                            <div class="selectBox" > </div>
                            <img  ng-show="createInfo.flower18.ticket_type==2" />
                            <div class="selectText">24局X12张房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 血拼炸金花建房选项 -->
            <div ng-if="createInfo.isShow==19">
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,4)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.default_score==4" />
                            <div class="selectText" >4分</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,10)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.default_score==10" />
                            <div class="selectText">10分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,20)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.default_score==20" />
                            <div class="selectText">20分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,40)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.default_score==40" />
                            <div class="selectText">40分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,100)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.default_score==100" />
                            <div class="selectText">100分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,200)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.default_score==200" />
                            <div class="selectText">200分</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart"  style="height:25vh; line-height: 4.2vh; padding: 0">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem" style="margin-left: 1.2vh;">
                            <div class="selectText" style="color: #e8001b;" ng-if="createInfo.flowerxp.chip_list.length!=4">选择四组游戏筹码(已选{{createInfo.flowerxp.chip_list.length}}组)</div>
                            <div class="selectText" style="color: #008259;" ng-if="createInfo.flowerxp.chip_list.length==4">选择四组游戏筹码(已选{{createInfo.flowerxp.chip_list.length}}组)</div>
                        </div>
                        <div class="selectItem" ng-click="changeRule('chip_list',0)" style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[0].isSelect" />
                            <div class="selectText" >2/4</div>
                        </div>  
                        <div class="selectItem"  ng-click="changeRule('chip_list',1)" style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[1].isSelect" />
                            <div class="selectText" >4/8</div>
                        </div>  
                        <div class="selectItem"  ng-click="changeRule('chip_list',2)" style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[2].isSelect" />
                            <div class="selectText" >5/10</div>
                        </div>  
                        <div class="selectItem" ng-click="changeRule('chip_list',3)"  style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[3].isSelect" />
                            <div class="selectText" >8/16</div>
                        </div>  
                        <div class="selectItem"  ng-click="changeRule('chip_list',4)" style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[4].isSelect" />
                            <div class="selectText" >10/20</div>
                        </div>  
                        <div class="selectItem"  ng-click="changeRule('chip_list',5)" style="width: 14vw;">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[5].isSelect" />
                            <div class="selectText" >20/40</div>
                        </div>  
                        <div class="selectItem" ng-click="changeRule('chip_list',6)"  >
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[6].isSelect" />
                            <div class="selectText" >50/100</div>
                        </div>  
                        <div class="selectItem"  ng-click="changeRule('chip_list',7)" >
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.chip_total[7].isSelect" />
                            <div class="selectText" >100/200</div>
                        </div>
                        <div class="selectItem" style="width: 60vw;margin-left: 1.2vh;line-height: 3.5vh;color: #008259;">
                            <div class="selectText">血战筹码：</div>
                        </div>

                        <div class="selectItem"  ng-click="changeRule('xp_chip',createInfo.flowerxp.base_xp_chip*3)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.xp_chip==createInfo.flowerxp.base_xp_chip*3" />
                            <div class="selectText" >{{createInfo.flowerxp.base_xp_chip*3}}</div>
                        </div>
                        <div class="selectItem"  ng-click="changeRule('xp_chip',createInfo.flowerxp.base_xp_chip*4)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.xp_chip==createInfo.flowerxp.base_xp_chip*4" />
                            <div class="selectText" >{{createInfo.flowerxp.base_xp_chip*4}}</div>
                        </div>
                        <div class="selectItem"  ng-click="changeRule('xp_chip',createInfo.flowerxp.base_xp_chip*5)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.xp_chip==createInfo.flowerxp.base_xp_chip*5" />
                            <div class="selectText" >{{createInfo.flowerxp.base_xp_chip*5}}</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">                
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.disable_pk==1" />
                            <div class="selectText" >闷牌，全场禁止比牌</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,8)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.bet_circle==8" />
                            <div class="selectText" >8轮</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.0vh;" ng-click="selectChange(5,10)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.bet_circle==10" />
                            <div class="selectText">10轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.0vh;" ng-click="selectChange(5,12)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.bet_circle==12" />
                            <div class="selectText">12轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.0vh;" ng-click="selectChange(5,15)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.bet_circle==15" />
                            <div class="selectText">15轮</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">必闷：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,0)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.look_cond==0" />
                            <div class="selectText" >0轮</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,1)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.look_cond==1" />
                            <div class="selectText">1轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,2)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.look_cond==2" />
                            <div class="selectText">2轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,3)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.look_cond==3" />
                            <div class="selectText">3轮</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">比牌：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(7,1)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.pk_cond==1" />
                            <div class="selectText">&gt;1轮</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 0.7vh;" ng-click="selectChange(7,2)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.pk_cond==2" />
                            <div class="selectText">&gt;2轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 0.7vh;" ng-click="selectChange(7,3)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.pk_cond==3" />
                            <div class="selectText">&gt;3轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 0.7vh;" ng-click="selectChange(7,4)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.pk_cond==4" />
                            <div class="selectText">&gt;4轮</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">血拼：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(8,1)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.xp_circle==1" />
                            <div class="selectText">1轮</div>
                        </div>                          
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(8,2)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.xp_circle==2" />
                            <div class="selectText">2轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(8,3)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.xp_circle==3" />
                            <div class="selectText">3轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(8,4)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.xp_circle==4" />
                            <div class="selectText">4轮</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(9,1)">
                            <div class="selectBox" ></div>
                            <img ng-show="createInfo.flowerxp.ticket_type==1" />
                            <div class="selectText">12局X6房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(9,2)">
                            <div class="selectBox" > </div>
                            <img ng-show="createInfo.flowerxp.ticket_type==2" />
                            <div class="selectText">24局X12房卡</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 超级三加一建房选项 -->
            <div ng-if="createInfo.isShow==20"> 
                <div class="selectPart" style="height:7.5vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.score_type==1"/>
                            <div class="selectText">1分</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.score_type==2"/>
                            <div class="selectText">2分</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.score_type==3" />
                            <div class="selectText">3分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.score_type==4" />
                            <div class="selectText">4分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.score_type==5" />
                            <div class="selectText">5分</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart" style="height:18vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem">
                            <div class="selectText" >暴玖x9大三公x9小三公x7三公x5<br>九点x4八点x3七点x2散牌x1</div>
                        </div>
                        <div class="selectItem">
                            <div class="selectText" >豹子x6同花顺x5金花x4顺子x3<br>对子x2散牌x1</div>
                        </div>              
                        
                    </div>
                </div> 
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,3)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>  
                <div class="selectPart" style="height:4.5vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.ticket_type==1" />
                            <div class="selectText">12局X6房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.jia31.ticket_type==2" />
                            <div class="selectText">24局X12房卡</div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- 大牌九建房选项-->
            <div ng-if="createInfo.isShow==21">  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.score_type==2"/>
                            <div class="selectText">3</div>
                        </div>                          
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.score_type==3" />
                            <div class="selectText">5</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.score_type==4" />
                            <div class="selectText">10</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.score_type==5" />
                            <div class="selectText">20</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:12vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectText" >每人分四张牌,分为大小组,分别与庄家对牌,全胜全败为胜负,一胜一败为和局</div>
                        </div>                          
                       
                    </div>
                </div>  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectText" >丁三牌和二四牌可互换使用</div>
                        </div>
                    </div>
                </div>  
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.ticket_type==1" />
                            <div class="selectText" >12局X6房卡</div>
                        </div>                          
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img  ng-show="createInfo.paijiuD.ticket_type==2" />
                            <div class="selectText" >24局X12房卡</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

		<div class="createCommit" ng-click="createCommit()" >确定</div>
	</div>
</div>

</script>
	
<style>
.waiting{position: fixed;width:100%;height:100%;top:0;left:0;z-index: 111;}	
.waiting .waitingBack{position: fixed;width:100%;height:100%;top:0;left:0;background: #000;opacity:.5;}	
</style>	
<div class="waiting" ng-show="is_operation">
	<div class="waitingBack"></div>
	<div class="load4">
		<div class="loader">Loading...</div>
	</div>
</div>	
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                                                                                                                                                                                                                                                                                             <link rel="stylesheet" href="http://lyuu.poyio.cn/files/css/selectItems.css">	

<script type="text/javascript">
  
var app=angular.module('app',[]);



app.controller("myCtrl", function($scope,$http) {	
	FastClick.attach(document.body);
	$scope.width=window.innerWidth;
	$scope.userInfo={
		"id":"254416",
		"name":"QQ8790766",
		"avatar":"<?php echo ($user["img"]); ?>",
		"card":0,
	}
	$scope.socket={
		"flower":"wss://uu1.szlangya.cn:20032",
		"landlord":"wss://uu1.szlangya.cn:20042",
		"bull":"wss://uu1.szlangya.cn:20012",
		"bull9":"wss://uu1.szlangya.cn:20022",
		"majiang":"wss://uu1.szlangya.cn:20052",
        "bull12":"wss://uu1.szlangya.cn:20062",
        "sg":"wss://uu1.szlangya.cn:20072",
        "eba":"wss://uu1.szlangya.cn:20082",
		"bull6b":"wss://uu1.szlangya.cn:20092",
		"z9":"wss://uu1.szlangya.cn:20102",
		"bull8b":"wss://uu1.szlangya.cn:20112",
		"paijiu":"wss://uu1.szlangya.cn:20122",
		"dcx":"wss://uu1.szlangya.cn:20132",
		"yxx":"wss://uu1.szlangya.cn:20142",
		"sg9":"wss://uu1.szlangya.cn:20172",
		"laibull":"wss://uu1.szlangya.cn:20152"
	}
	$scope.userInfo.card="<?php echo $user['fk']; ?>";
	$scope.dealerNum = "2";

///////////////////////socket	

	var socketStatus=0;
	$(".main").show();		
	$("#loading").hide();	
	$scope.roomCardInfo=new Array();
	$scope.activity=new Array();	
	$scope.isShowAlert=false;

	// 血拼金花新增提示框
	$scope.isShowAlertTip = false;
	$scope.alertTipType=1;
	$scope.alertTipText="";
	$scope.showAlertTip=function(e,t){
		$scope.isShowAlertTip=true;
		$scope.alertTipText=e;
		$scope.alertTipType=t;
		setTimeout(function(){
			$scope.isShowAlertTip=false;
			$scope.$apply();
		},1000)
	}

	$scope.alertType=0;
	$scope.alertText="";
	$scope.showAlert=function(type,text){
		$(".alertText").css("top","90px")
		$scope.alertType=type;
		$scope.alertText=text;
		$scope.isShowAlert=true;

		setTimeout(function() {
			$scope.$apply();
		}, 0);

		setTimeout(function(){
			var wHeight = window.innerHeight;
			var alertHeight = $(".alertText").height();
			var textHeight = $(".alertText").height();

            if (alertHeight < wHeight * 0.15) {
				alertHeight = wHeight * 0.15;
			}

			if (alertHeight > wHeight * 0.8) {
				alertHeight = wHeight * 0.8;
			}

			var mainHeight = alertHeight + wHeight * (0.022 + 0.034) * 2 + wHeight * 0.022 + wHeight * 0.056;
			if (type == 8) {
				mainHeight = mainHeight - wHeight * 0.022 - wHeight * 0.056
			}

            var blackHeight = alertHeight + wHeight * 0.034 * 2;
            var alertTop = wHeight * 0.022 + (blackHeight - textHeight) / 2;
            
			$(".alert .mainPart").css('height', mainHeight + 'px');
			$(".alert .mainPart").css('margin-top', '-' + mainHeight / 2 + 'px');
			$(".alert .mainPart .backImg .blackImg").css('height', blackHeight + 'px');
            $(".alert .mainPart .alertText").css('top', alertTop + 'px');

			$scope.$apply();
		},0)
	}	
	$scope.closeAlert=function(){
		if($scope.alertType==1){
			$scope.isShowAlert=false;
			$scope.showShop();
			if(!$scope.is_connect){
				$scope.is_connect=true;
			}
		}
		else{
			$scope.isShowAlert=false;
		}
	}


	$scope.getCards=function(){
		$http({		
			url:'http://www.yields.cn/game/updateActivityOpt',
			method: 'POST',  
			headers:{
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			data:{
				"account_id":"254416",
				"activity_id":$scope.activity[0].activity_id,
				"dealer_num":"2",
				"session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
			},
		}).success(function(data){
			
			if(data.result==0){					
				$scope.userInfo.card=Math.ceil($scope.userInfo.card)+Math.ceil($scope.activity[0].ticket_count);	
				$scope.activity.splice(0,1);
				if($scope.activity.length==0){
					$scope.closeAlert();
				}
				else{
					$scope.showAlert(5,$scope.activity[0].content)
				}
			}
			else{
				alert(data.result_message)
			}
		}).error(function(data){

		});	
	}

	$http({		
		method: 'POST',  
		headers:{
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data:{
			"account_id":"254416",
			"dealer_num":"2",
			"session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
		},
	}).success(function(data){
		if(data.result==0){
			if(data.data.length==0){
				
			}
			else{
				$scope.activity=data.data.concat();
				$scope.showAlert(5,$scope.activity[0].content)
			}
		}
		else{
			alert(data.result_message)
		}
	}).error(function(data){

	});	
	$http({		

		method: 'POST',  
		headers:{
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data:{
			"dealer_num":"2",
			"session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
		},
	}).success(function(data){
		if(data.result==0){
			console.log($scope.roomCardInfo);
			$scope.roomCardInfo=data.data.concat();
			for(var i=0;i<$scope.roomCardInfo.length;i++){
				$scope.roomCardInfo[i].num=i+1;
				$scope.roomCardInfo[i].price=Math.ceil($scope.roomCardInfo[i].price);
			}
			
			if ($scope.roomCardInfo.length >= 1) {
				$scope.select = $scope.roomCardInfo[0].goods_id;
			}	
		}
		else{
			alert(data.result_message)
		}
	}).error(function(data){
		
	});

	setTimeout(function() {
		$scope.$apply();
	}, 100);


	//广播
	var globalData = {
		"card":"0",
		"isNotyMsg":'0',
		"notyMsg":'',
		"notyTime":'0',
		"notySpeed":5000,
	};
	$scope.isShowNoty = false;
	$scope.notyMsg = '';

	setTimeout(function () {
		if (globalData.isNotyMsg != undefined && globalData.isNotyMsg != null) {
			$scope.notyMsg = globalData.notyMsg;
			if (globalData.isNotyMsg == 1) {
				$scope.isShowNoty = true;
				setTimeout(function () {
					$scope.isShowNoty = false;
					$scope.$apply();
				}, globalData.notyTime * 1000);
				$scope.$apply();
			}
		} else {
			globalData.isNotyMsg = 0;
		}

		
	}, 50);
	//end

	$scope.is_operation=false;
	$scope.waiting=function(){
		$scope.is_operation=true;
		setTimeout(function(){
			if($scope.is_operation){
				$scope.is_operation=false;
				$scope.showAlert(6,"创建房间失败，请重新创建")	
			}	
		},15000)
	};
	$scope.socket_url="";
	$scope.socket_type="";
	$scope.connectSocket=function(socket,type){
		$scope.socket_url=socket;
		$scope.socket_type=type;
		$scope.ws = new WebSocket(socket);
		$scope.ws.onopen = function(){
			$scope.is_operation=true;
			var tiao=setInterval(function(){
				socketStatus=socketStatus+1;
	        	$scope.ws.send("@");
	        	if(socketStatus>3||socketStatus>3){
					window.location.reload();
				}
	    	},4000);

			if(type==1){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        'chip_type': $scope.createInfo.flower.chip_type,
				        'ticket_count':$scope.createInfo.flower.ticket_count,
				        'disable_pk_100':$scope.createInfo.flower.pkvalue1,
						'disable_pk_men':$scope.createInfo.flower.pkvalue2,
						'disable_look':$scope.createInfo.flower.lookvalue,
						'only_big':$scope.createInfo.flower.only_big,
				        'upper_limit':$scope.createInfo.flower.upper_limit,
				    }
				}));		
			}				
			else if(type==2){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        "ticket_count":$scope.createInfo.landlord.ticket_count,
				        "base_score":$scope.createInfo.landlord.base_score,
				        "ask_mode":$scope.createInfo.landlord.ask_mode,
				    }
				}));		
			}				
			else if(type==3){
				console.log($scope.createInfo.bull);
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        "ticket_type":$scope.createInfo.bull.ticket_type,
				        "score_type":$scope.createInfo.bull.score_type,
				        "rule_type":$scope.createInfo.bull.rule_type,
				        "is_cardfive":$scope.createInfo.bull.is_cardfive,
				        "is_cardbomb":$scope.createInfo.bull.is_cardbomb,
				        "is_cardtiny":$scope.createInfo.bull.is_cardtiny,
				        "banker_mode":$scope.createInfo.bull.banker_mode,
						"ready_time":$scope.createInfo.bull.ready_time,
						"grab_time":$scope.createInfo.bull.grab_time,
						"bet_time":$scope.createInfo.bull.bet_time,
						"show_time":$scope.createInfo.bull.show_time,
						"banker_score_type":$scope.createInfo.bull.banker_score,
						"bet_type":$scope.createInfo.bull.bet_type,
				    }
				}));		
			}			
			else if(type==4){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        "joker":$scope.createInfo.majiang.joker,
				        "horse_count":$scope.createInfo.majiang.horse_count,
				        "qianggang":$scope.createInfo.majiang.qianggang,
				        "chengbao":$scope.createInfo.majiang.chengbao,
				        "ticket_count":$scope.createInfo.majiang.ticket_count,
				    }
				}));		
			}
			else if(type==5){
				console.log($scope.createInfo.bull9);
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        "ticket_type":$scope.createInfo.bull9.ticket_type,
				        "score_type":$scope.createInfo.bull9.score_type,
				        "rule_type":$scope.createInfo.bull9.rule_type,
				        "is_cardfive":$scope.createInfo.bull9.is_cardfive,
				        "is_cardbomb":$scope.createInfo.bull9.is_cardbomb,
				        "is_cardtiny":$scope.createInfo.bull9.is_cardtiny,
				        "banker_mode":$scope.createInfo.bull9.banker_mode,
						"ready_time":$scope.createInfo.bull9.ready_time,
						"grab_time":$scope.createInfo.bull9.grab_time,
						"bet_time":$scope.createInfo.bull9.bet_time,
						"show_time":$scope.createInfo.bull9.show_time,
						"banker_score_type":$scope.createInfo.bull9.banker_score,
						"bet_type":$scope.createInfo.bull9.bet_type,
				    }
				}));		
			}
            else if(type==6){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.bull12.ticket_type,
                        "score_type":$scope.createInfo.bull12.score_type,
                        "rule_type":$scope.createInfo.bull12.rule_type,
                        "is_cardfive":$scope.createInfo.bull12.is_cardfive,
                        "is_cardbomb":$scope.createInfo.bull12.is_cardbomb,
                        "is_cardtiny":$scope.createInfo.bull12.is_cardtiny,
                        "banker_mode":$scope.createInfo.bull12.banker_mode,
						"ready_time":$scope.createInfo.bull12.ready_time,
						"grab_time":$scope.createInfo.bull12.grab_time,
						"bet_time":$scope.createInfo.bull12.bet_time,
						"show_time":$scope.createInfo.bull12.show_time,
						"banker_score_type":$scope.createInfo.bull12.banker_score,
						"bet_type":$scope.createInfo.bull12.bet_type,
                    }
                }));
            }
            else if(type==7){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.sangong6.ticket_type,
                        "score_type":$scope.createInfo.sangong6.score_type,
                        "rule_type":$scope.createInfo.sangong6.rule_type,
                        "is_cardjoker":$scope.createInfo.sangong6.is_cardjoker,
                        "is_cardbao9":$scope.createInfo.sangong6.is_cardbao9,
                        "banker_mode":$scope.createInfo.sangong6.banker_mode,
                        "banker_score_type":$scope.createInfo.sangong6.banker_score,
                    }
                }));
            }
            else if(type==8){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "banker_mode":$scope.createInfo.erbagang.banker_mode,
                        "chip_type":$scope.createInfo.erbagang.chip_type,
                        "score_type":$scope.createInfo.erbagang.score_type,	 //上庄分数类型
                        "rule_type":$scope.createInfo.erbagang.rule_type,
                        "ticket_count":$scope.createInfo.erbagang.ticket_count,  //消耗房卡数
                    }
                }));
            }
			else if(type==9){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
					"account_id":"254416",
					"session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
					"data":{
						"data_key":Date.parse(new Date())+randomString(5),
						"ticket_type":$scope.createInfo.bull6b.ticket_type,
						"score_type":$scope.createInfo.bull6b.score_type,
						"rule_type":$scope.createInfo.bull6b.rule_type,
						"is_cardfive":$scope.createInfo.bull6b.is_cardfive,
						"is_cardbomb":$scope.createInfo.bull6b.is_cardbomb,
						"is_cardtiny":$scope.createInfo.bull6b.is_cardtiny,
						"banker_mode":$scope.createInfo.bull6b.banker_mode,
						"banker_score_type":$scope.createInfo.bull6b.banker_score,
						"ready_time":$scope.createInfo.bull6b.ready_time,
						"grab_time":$scope.createInfo.bull6b.grab_time,
						"bet_time":$scope.createInfo.bull6b.bet_time,
						"show_time":$scope.createInfo.bull6b.show_time,
						"bet_type":$scope.createInfo.bull6b.bet_type
					}
				}));
			}
			else if(type==10){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
				    "account_id":"254416",
				    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
				    "data":{
				        "data_key":Date.parse(new Date())+randomString(5),
				        'chip_type': $scope.createInfo.z9.chip_type,
				        'ticket_count':$scope.createInfo.z9.ticket_count,
						'disable_pk_100':$scope.createInfo.z9.pkvalue1,
						'disable_look':$scope.createInfo.z9.lookvalue,
				        'disable_pk_men':$scope.createInfo.z9.pkvalue2,
				        'upper_limit':$scope.createInfo.z9.upper_limit,
				    }
				}));		
			}
			else if(type==11){
				$scope.ws.send(JSON.stringify({
					"operation":"CreateRoom",
					"account_id":"254416",
					"session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
					"data":{
						"data_key":Date.parse(new Date())+randomString(5),
						"ticket_type":$scope.createInfo.bull8b.ticket_type,
						"score_type":$scope.createInfo.bull8b.score_type,
						"rule_type":$scope.createInfo.bull8b.rule_type,
						"is_cardfive":$scope.createInfo.bull8b.is_cardfive,
						"is_cardbomb":$scope.createInfo.bull8b.is_cardbomb,
						"is_cardtiny":$scope.createInfo.bull8b.is_cardtiny,
						"banker_mode":$scope.createInfo.bull8b.banker_mode,
						"ready_time":$scope.createInfo.bull8b.ready_time,
						"grab_time":$scope.createInfo.bull8b.grab_time,
						"bet_time":$scope.createInfo.bull8b.bet_time,
						"show_time":$scope.createInfo.bull8b.show_time,
						"banker_score_type":$scope.createInfo.bull8b.banker_score,
					}
				}));
			}
			else if(type==12){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.paijiu.ticket_type,
                        "score_type":$scope.createInfo.paijiu.score_type,
                        "banker_mode":$scope.createInfo.paijiu.banker_mode,
                    }
                }));        
			}    
            else if(type==14){  //大吃小
                console.log($scope.createInfo.dcx);
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "max_count_type":$scope.createInfo.dcx.max_count_type,
                        "ticket_type":$scope.createInfo.dcx.ticket_type,
                        "bet_type":$scope.createInfo.dcx.bet_type,
                        "is_cardjoker":$scope.createInfo.dcx.is_cardjoker,
                        "is_cardbao9":$scope.createInfo.dcx.is_cardbao9,
                    }
                }));        
			} 
            else if(type==15){	//鱼虾蟹
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        'chip_type': $scope.createInfo.yxx.chip_type,
                        'ticket_type':$scope.createInfo.yxx.ticket_type,
                        'rule_value1':$scope.createInfo.yxx.rule_value1,
                        'upper_limit':$scope.createInfo.yxx.upper_limit,
                    }
                }));
            }
            else if(type==16){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.sangong9.ticket_type,
                        "score_type":$scope.createInfo.sangong9.score_type,
                        "rule_type":$scope.createInfo.sangong9.rule_type,
                        "is_cardjoker":$scope.createInfo.sangong9.is_cardjoker,
                        "is_cardbao9":$scope.createInfo.sangong9.is_cardbao9,
                        "banker_mode":$scope.createInfo.sangong9.banker_mode,
                        "banker_score_type":$scope.createInfo.sangong9.banker_score,
                    }
                }));
            }
            else if(type==17){  //赖子牛牛
                //console.log($scope.createInfo.laibull);
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "max_count_type":$scope.createInfo.laibull.max_count_type,
                        "ticket_type":$scope.createInfo.laibull.ticket_type,
                        "score_type":$scope.createInfo.laibull.score_type,
                        "bet_type":$scope.createInfo.laibull.bet_type,
                        "rule_type":$scope.createInfo.laibull.rule_type,
                        "is_cardfive":$scope.createInfo.laibull.is_cardfive,
                        "is_cardbomb":$scope.createInfo.laibull.is_cardbomb,
                        "is_cardtiny":$scope.createInfo.laibull.is_cardtiny,
                        "is_cardfour":$scope.createInfo.laibull.is_cardfour,
                        "is_flush":$scope.createInfo.laibull.is_flush,
                        "is_calabash":$scope.createInfo.laibull.is_calabash,
                        "is_straight":$scope.createInfo.laibull.is_straight,
                        "is_sequence":$scope.createInfo.laibull.is_sequence,
						"is_laizi":$scope.createInfo.laibull.is_laizi,
                        "banker_mode":$scope.createInfo.laibull.banker_mode,
						"ready_time":$scope.createInfo.laibull.ready_time,
						"grab_time":$scope.createInfo.laibull.grab_time,
						"bet_time":$scope.createInfo.laibull.bet_time,
						"show_time":$scope.createInfo.laibull.show_time,
                        "banker_score_type":$scope.createInfo.laibull.banker_score,
                    }
                }));        
            }
		    else if(type==18){
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "play_mode":$scope.createInfo.flower18.play_mode,
                        //房间人数  2 九人房
                        "max_count_type":2,
                        'default_score': $scope.createInfo.flower18.default_score,
                        'chip_type': $scope.createInfo.flower18.chip_type,
                        'disable_pk':$scope.createInfo.flower18.disable_pk,
                        'disable_look':$scope.createInfo.flower18.disable_look,
                        'upper_limit':$scope.createInfo.flower18.upper_limit,
                        'pk_score': $scope.createInfo.flower18.pk_score,
                        'look_score': $scope.createInfo.flower18.look_score,
                        'ticket_type':$scope.createInfo.flower18.ticket_type,
                    }
                }));
            }
            else if(type==19){  //血拼炸金花
               $scope.ws.send(JSON.stringify({
                   "operation":"CreateRoom",
                   "account_id":"254416",
                   "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                   "data":{
                       "data_key":Date.parse(new Date())+randomString(5),
                       'default_score': $scope.createInfo.flowerxp.default_score,
                       'chip_list': $scope.createInfo.flowerxp.chip_list,
                       'xp_chip': $scope.createInfo.flowerxp.xp_chip,
                       'disable_pk':$scope.createInfo.flowerxp.disable_pk,
                       'bet_circle':$scope.createInfo.flowerxp.bet_circle,
                       'look_cond': $scope.createInfo.flowerxp.look_cond,
                       'pk_cond': $scope.createInfo.flowerxp.pk_cond,
                       'xp_circle': $scope.createInfo.flowerxp.xp_circle,
                       'ticket_type':$scope.createInfo.flowerxp.ticket_type,
                   }
               }));
            }
            else if(type==20){  //超级三加一
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.jia31.ticket_type,
                        "score_type":$scope.createInfo.jia31.score_type,
                        "bet_type":$scope.createInfo.jia31.bet_type,
                    }
                }));        
            }
            else if(type==21){  //大牌九
                $scope.ws.send(JSON.stringify({
                    "operation":"CreateRoom",
                    "account_id":"254416",
                    "session":"MDZkOGY4MGE1N2Q2NDJiMzA2MTg0MzkxZDkzYjgyZmY=",
                    "data":{
                        "data_key":Date.parse(new Date())+randomString(5),
                        "ticket_type":$scope.createInfo.paijiuD.ticket_type,
                        "score_type":$scope.createInfo.paijiuD.score_type,
                        "banker_mode":2
                    }
                }));        
            }

		};
		$scope.ws.onmessage = function(evt){
			if(evt.data=="@"){
				socketStatus=0;
				return 0;
			}
			var obj = eval('(' + evt.data + ')');	
			if (obj.result==1){
				$scope.is_operation=false;
				$scope.showAlert(1,obj.result_message);
			} else if (obj.result == 0){
				if(type==1){
					window.location.href="http://www.baidu.com/f/yf?i="+obj.data.room_number+"_";
				} else if(type==2){
					window.location.href="http://www.baidu.com/f/l?i="+obj.data.room_number+"_";
				} else if(type==3){
					window.location.href="http://www.baidu.com/f/b?i="+obj.data.room_number+"_";
				} else if(type==4){
					window.location.href="http://www.baidu.com/f/ma?i="+obj.data.room_number+"_";
				} else if(type==5){
					window.location.href="http://www.baidu.com/f/nb?i="+obj.data.room_number+"_";
				} else if(type==6){
                    window.location.href="http://www.baidu.com/f/mb?i="+obj.data.room_number+"_";
                } else if(type==7){
                    window.location.href="http://www.baidu.com/f/sg?i="+obj.data.room_number+"_";
                } else if(type==8){
                    window.location.href="http://www.baidu.com/f/eba?i="+obj.data.room_number+"_";
                } else if(type==9){
					window.location.href="http://www.baidu.com/f/b6b?i="+obj.data.room_number+"_";
				} else if(type==10){
					window.location.href="http://www.baidu.com/f/z9?i="+obj.data.room_number+"_";
				} else if(type==11){
					window.location.href="http://www.baidu.com/f/b8b?i="+obj.data.room_number+"_";
				} else if(type==12){
					window.location.href="http://www.baidu.com/f/pj?i="+obj.data.room_number+"_";
				} else if(type==14){
                    window.location.href="http://www.baidu.com/f/dcx?i="+obj.data.room_number+"_";
				} else if(type==15){
                	window.location.href="http://www.baidu.com/f/yxx?i="+obj.data.room_number+"_";
				} else if(type==16){
                	window.location.href="http://www.baidu.com/f/sg9?i="+obj.data.room_number+"_";
				} else if(type==17){
                	window.location.href="http://www.baidu.com/f/laib?i="+obj.data.room_number+"_";
			    } else if(type==18){
                    window.location.href="http://www.baidu.com/f/mpZjh?i="+obj.data.room_number+"_";
                } else if(type==19){
                    window.location.href="http://www.baidu.com/f/xpjh?i="+obj.data.room_number+"_";
                } else if(type==20){
                    window.location.href="http://www.baidu.com/f/jia?i="+obj.data.room_number+"_";
                } else if(type==21){
                    window.location.href="http://www.baidu.com/f/dpj?i="+obj.data.room_number+"_";
                }


				

			}  else if (obj.result == -201){
				$scope.is_operation=false;
				$scope.showAlert(31,obj.result_message);
			}  else {
				$scope.is_operation=false;
				$scope.showAlert(6,obj.result_message);
			}
		};
		$scope.ws.onclose = function(evt){ 
			// errorAPI("connectFailed");
			console.log("16500closed");
			if($scope.is_operation){
				$scope.connectSocket($scope.socket_url,$scope.socket_type);	
			}
			else
				return 0;
		//	window.location.reload();
		}
		$scope.ws.onerror = function(evt){console.log("WebSocketError!");};	
	}

	$scope.createInfo={
		"isShow":0,	
        //大牌九
        "paijiuD":localStorage.paijiuD ? JSON.parse(localStorage.paijiuD) : {
            "ticket_type":1,
            "score_type":1,
        },
		//超级三加一
		"jia31":localStorage.jia31 ? JSON.parse(localStorage.jia31) : {
            "ticket_type":1,
            "bet_type":1,
            "score_type":1
        },
        //血拼金花
        "flowerxp": localStorage.flowerxp ? JSON.parse(localStorage.flowerxp) : {
            default_score: 4, //底筹
            chip_type: 1,     
            disable_pk: 0,
            bet_circle: 10,   //下注圈数
            look_cond: 0,     //必闷圈数
            pk_cond: 1,       //比牌条件
            xp_circle: 1,     //血拼圈数
            ticket_type: 1,
            chip_list:[4,8,16,20], //筹码组
            base_xp_chip:40,    //血拼筹码基准值
            xp_chip:120,       //血拼筹码
            chip_total:[        //所有筹码项
                {isSelect:!0,num:4},
                {isSelect:!0,num:8},
                {isSelect:!0,num:10},
                {isSelect:!1,num:16},
                {isSelect:!0,num:20},
                {isSelect:!1,num:40},
                {isSelect:!1,num:100},
                {isSelect:!1,num:200}
            ]
        },
		//明牌炸金花
		"flower18": localStorage.flower18 && (l_flower18=JSON.parse(localStorage.flower18)).play_mode ? l_flower18 : {
            "play_mode":2,       //模式   1经典  2明牌
            "max_count_type":2,   // 1六人房  2九人房
            'default_score': 4,
            'chip_type': 1,
            'disable_look': 0,
            'disable_pk': 0,
            'upper_limit': 1000,
            'pk_score': 0,
            'look_score': 0,
            'ticket_type': 1,
            "mode1":"unselected",
            "mode2":"selected",
        },
        //赖子牛牛 默认建房选项
		"laibull": localStorage.laibull && JSON.parse(localStorage.laibull).ready_time ? JSON.parse(localStorage.laibull) : {
			"ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
            "max_count_type":1,   // 1九人房  2十二人房
            "ticket_type":1,
            "score_type":1,
            "rule_type":1,   //规则 1: 牛牛x3牛九x2牛八x2      2: 牛牛x4牛九x3牛八x2牛七x2
            "is_cardfive":1, //牌型 五花牛(5倍)  1表示默认勾选 
            "is_cardbomb":1, //牌型 炸弹牛(6倍) 
            "is_cardtiny":1, //牌型 五小牛(8倍) 
            "is_cardfour":1,
            "is_flush":1,
            "is_calabash":1,
            "is_straight":1,
            "is_sequence":1,
			"is_laizi":0,
            "banker_mode":2, //模式 2 明牌抢庄
            "banker_score":4,
            "bet_type":1,
            "banker1":"unselected",
            "banker2":"selected",
        },
        //九人三公
        "sangong9":localStorage.sangong9 ? JSON.parse(localStorage.sangong9) : {
            "ticket_type":1,
            "score_type":1,
            "rule_type":1,   //总是1
            "is_cardjoker":1, //天公x10,雷公x7,地公x5  1表示默认勾选
            "is_cardbao9":1,  //暴玖x9				 1表示默认勾选
            "banker_mode":2, //模式 2 明牌抢庄
            "banker_score":4,
            "banker1":"unselected",
			"banker4":"unselected",
			"banker2":"selected",
        },
		//鱼虾蟹
		"yxx": localStorage.yxx ? JSON.parse(localStorage.yxx) : {
            'chip_type': 1,
            'ticket_type': 1,
            'rule_value1': 1,
            'upper_limit': 100,
		},		
		//牌九
        "paijiu":localStorage.paijiu ? JSON.parse(localStorage.paijiu) : {
            "ticket_type":1,
            "score_type":1,
            "banker_mode":2, //模式 2 明牌抢庄
            "banker1":"unselected",
            "banker2":"selected",
        },
		//6人炸金花
		"flower":localStorage.flower ? JSON.parse(localStorage.flower) : {
		//"flower":localStorage.flower && JSON.parse(localStorage.flower).only_big ? JSON.parse(localStorage.flower) : {
			'chip_type': 1,
			'ticket_count': 1,
			'lookvalue': 1,
			'pkvalue1': 0,
			'pkvalue2': 0,
			'only_big': 0,
			'upper_limit': 1000,
		},
		//9人炸金花
		"z9":localStorage.z9 ? JSON.parse(localStorage.z9) : {
			'chip_type': 1,
			'ticket_count': 1,
			'lookvalue': 0,
			'pkvalue1': 0,
			'pkvalue2': 0,
			'upper_limit': 1000,
		},
		"landlord":localStorage.landlord ? JSON.parse(localStorage.landlord) : {
			"ticket_count":1,
			"base_score":1,
			"ask_mode":2,
		},
		"majiang":localStorage.majiang ? JSON.parse(localStorage.majiang) : {
			"joker":3,
			"horse_count":2,
			"qianggang":1,
			"ticket_count":2,
			"chengbao":1,	
		},
		"bull": localStorage.bull && JSON.parse(localStorage.bull).ready_time ? JSON.parse(localStorage.bull) : {
			"ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
			"ticket_type":2,
			"bet_type":1,//下注组合
			"score_type":1,
			"rule_type":2,
			"is_cardfive":1,
			"is_cardbomb":1,
			"is_cardtiny":1,
			"banker_mode":2,
			"banker_score":4,
			"banker1":"unselected",
			"banker2":"selected",
			"banker3":"unselected",
			"banker4":"unselected",
			"banker5":"unselected",
		},
		"bull9": localStorage.bull9 && JSON.parse(localStorage.bull9).ready_time ? JSON.parse(localStorage.bull9) : {
			"ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
			"ticket_type":2,
			"bet_type":1,//下注组合
			"score_type":1,
			"rule_type":2,
			"is_cardfive":1,
			"is_cardbomb":1,
			"is_cardtiny":1,
			"banker_mode":2,
			"banker_score":4,
			"banker1":"unselected",
			"banker2":"selected",
			"banker3":"unselected",
			"banker4":"unselected",
			"banker5":"unselected",
		},
		"bull12": localStorage.bull12 && JSON.parse(localStorage.bull12).ready_time ? JSON.parse(localStorage.bull12) : {
			"ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
			"ticket_type":2,//局数默认是左边还是右边
			"bet_type":1,//下注组合
            "score_type":1,//默认低分 第几项
            "rule_type":2,//规则第几项
            "is_cardfive":1,//牌形可选项1
            "is_cardbomb":1,//牌形可选项2
            "is_cardtiny":1,//牌形可选项3
            "banker_mode":2,
            "banker_score":4,
            "banker1":"unselected",
            "banker2":"selected",
            "banker3":"unselected",
            "banker4":"unselected",
            "banker5":"unselected",
        },
        //二八杠
        "erbagang":localStorage.erbagang ? JSON.parse(localStorage.erbagang) : {
            "banker_mode":1,  //模式 1 自由抢庄
            "score_type":1,   //上庄分数类型
            "chip_type":0,   //筹码组选项
            "rule_type":2,    //规则
            "ticket_count":1,
            "banker1":"selected",
            "banker2":"unselected",
        },
        //六人三公
        "sangong6":localStorage.sangong6 ? JSON.parse(localStorage.sangong6) : {
            "ticket_type":1,
            "score_type":1,
            "rule_type":1,   //总是1
            "is_cardjoker":1, //天公x10,雷公x7,地公x5  1表示默认勾选
            "is_cardbao9":1,  //暴玖x9				 1表示默认勾选
            "banker_mode":2, //模式 2 明牌抢庄
            "banker_score":4,
            "banker1":"unselected",
			"banker4":"unselected",
			"banker2":"selected",
        },
		//9人6倍牛牛
		"bull6b": localStorage.bull6b && JSON.parse(localStorage.bull6b).ready_time ? JSON.parse(localStorage.bull6b) : {
			"bet_type":1,//下注组合
            "ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
			"ticket_type":2,
			"score_type":1,
			"rule_type":2,
			"is_cardfive":1,
			"is_cardbomb":1,
			"is_cardtiny":1,
			"banker_mode":2,
			"banker_score":4,
			"banker1":"unselected",
			"banker2":"selected",
			"banker3":"unselected",
			"banker4":"unselected",
			"banker5":"unselected",
		},
		//9人8倍牛牛
		"bull8b": localStorage.bull8b && JSON.parse(localStorage.bull8b).ready_time ? JSON.parse(localStorage.bull8b) : {
			"ready_time":'8',
			"grab_time":'8',
			"bet_time":'8',
			"show_time":'8',
			"ticket_type":2,
			"score_type":1,
			"rule_type":2,
			"is_cardfive":1,
			"is_cardbomb":1,
			"is_cardtiny":1,
			"banker_mode":2,
			"banker_score":4,
			"banker1":"unselected",
			"banker2":"selected",
			"banker3":"unselected",
			"banker4":"unselected",
			"banker5":"unselected",
		},
        //大吃小 默认建房选项
        "dcx":localStorage.dcx ? JSON.parse(localStorage.dcx) : {
            "max_count_type":1,   // 1九人房  2十二人房
            "ticket_type":1,
            "bet_type":1,
            "is_cardjoker":0, //天公x10,雷公x7,地公x5  1表示默认勾选 
            "is_cardbao9":0,  //暴玖x9                 1表示默认勾选 
        },
	}

	$scope.selectChange=function(type,num){
		if($scope.createInfo.isShow==1){
			if(type==1){
				$scope.createInfo.flower.chip_type=num;
			}
			else if(type==2){
                
				if (num == 1) {
					if ($scope.createInfo.flower.pkvalue1 == 0) {
						$scope.createInfo.flower.pkvalue1 = 1;
					} else {
						$scope.createInfo.flower.pkvalue1 = 0;
					}
				} else if (num == 2) {
					if ($scope.createInfo.flower.pkvalue2 == 0) {
						$scope.createInfo.flower.pkvalue2 = 1;
					} else {
						$scope.createInfo.flower.pkvalue2 = 0;
					}
				} else if (num == 3) {
					if ($scope.createInfo.flower.lookvalue == 0) {
						$scope.createInfo.flower.lookvalue = 1;
					} else {
						$scope.createInfo.flower.lookvalue = 0;
					}
				}  else if (num == 4) {
                    if ($scope.createInfo.flower.only_big == 0) {
                        $scope.createInfo.flower.only_big = 1;
                    } else {
                        $scope.createInfo.flower.only_big = 0;
                    }
                }
				
			}
			else if(type==3){
				$scope.createInfo.flower.ticket_count=num;
			}
			else if(type==4){
				$scope.createInfo.flower.upper_limit=num;
			}
		}		
		else if($scope.createInfo.isShow==2){
			if (type==1) {
				$scope.createInfo.landlord.base_score = num;
			} else if (type==2) {
				$scope.createInfo.landlord.ask_mode = num;
			} else if(type==3) {
				$scope.createInfo.landlord.ticket_count = num;
			}
		}		
		else if($scope.createInfo.isShow==3){
			if(type==1){
				$scope.createInfo.bull.score_type=num;
			}
			else if(type==2){
				$scope.createInfo.bull.rule_type=num;
			}
			else if(type==3){
				if(num==1)
					$scope.createInfo.bull.is_cardfive=($scope.createInfo.bull.is_cardfive+1)%2;
				else if(num==2)
					$scope.createInfo.bull.is_cardbomb=($scope.createInfo.bull.is_cardbomb+1)%2;
				else if(num==3)
					$scope.createInfo.bull.is_cardtiny=($scope.createInfo.bull.is_cardtiny+1)%2;
			}
			else if(type==4){
				$scope.createInfo.bull.ticket_type=num;
			} 
			else if (type == 5) {
				$scope.createInfo.bull.banker_score=num;
			}
			else if(type==6){
                $scope.createInfo.bull.bet_type=num;
            }
		}		
		else if($scope.createInfo.isShow==4){
			if(type==1){
				$scope.createInfo.majiang.joker=num;
			}
			else if(type==2){
				$scope.createInfo.majiang.horse_count=num;
			}
			else if(type==3){
				$scope.createInfo.majiang.qianggang=($scope.createInfo.majiang.qianggang+1)%2;
			}
			else if(type==4){
				$scope.createInfo.majiang.ticket_count=num;
			}
			else if(type==5){
				$scope.createInfo.majiang.chengbao=($scope.createInfo.majiang.chengbao+1)%2;
			}
		}
		else if($scope.createInfo.isShow==5){
			if(type==1){
				$scope.createInfo.bull9.score_type=num;
			}
			else if(type==2){
				$scope.createInfo.bull9.rule_type=num;
			}
			else if(type==3){
				if(num==1)
					$scope.createInfo.bull9.is_cardfive=($scope.createInfo.bull9.is_cardfive+1)%2;
				else if(num==2)
					$scope.createInfo.bull9.is_cardbomb=($scope.createInfo.bull9.is_cardbomb+1)%2;
				else if(num==3)
					$scope.createInfo.bull9.is_cardtiny=($scope.createInfo.bull9.is_cardtiny+1)%2;
			}
			else if(type==4){
				$scope.createInfo.bull9.ticket_type=num;
			} 
			else if (type == 5) {
				$scope.createInfo.bull9.banker_score=num;
			}
			else if(type==6){
                $scope.createInfo.bull9.bet_type=num;
            }
		}
        else if($scope.createInfo.isShow==6){
            if(type==1){
                $scope.createInfo.bull12.score_type=num;
            }
            else if(type==2){
                $scope.createInfo.bull12.rule_type=num;
            }
            else if(type==3){
                if(num==1)
                    $scope.createInfo.bull12.is_cardfive=($scope.createInfo.bull12.is_cardfive+1)%2;
                else if(num==2)
                    $scope.createInfo.bull12.is_cardbomb=($scope.createInfo.bull12.is_cardbomb+1)%2;
                else if(num==3)
                    $scope.createInfo.bull12.is_cardtiny=($scope.createInfo.bull12.is_cardtiny+1)%2;
            }
            else if(type==4){
                $scope.createInfo.bull12.ticket_type=num;
			}
			else if(type==6){
                $scope.createInfo.bull12.bet_type=num;
            }
        }
        else if($scope.createInfo.isShow==7){
            if(type==1){
                $scope.createInfo.sangong6.score_type=num;
            }
            else if(type==3){
                if(num==1)
                    $scope.createInfo.sangong6.is_cardjoker=($scope.createInfo.sangong6.is_cardjoker+1)%2;
                else if(num==2)
                    $scope.createInfo.sangong6.is_cardbao9=($scope.createInfo.sangong6.is_cardbao9+1)%2;
            }
            else if(type==4){
                $scope.createInfo.sangong6.ticket_type=num;
            }
        }
        else if($scope.createInfo.isShow==8){
            if(type==1){
                $scope.createInfo.erbagang.score_type=num;
            }
            else if(type==2){
                $scope.createInfo.erbagang.chip_type=num;
            }
            else if(type==3){
                $scope.createInfo.erbagang.rule_type=num;
            }
            else if(type==4){
                $scope.createInfo.erbagang.ticket_count=num;
            }
        }
		else if($scope.createInfo.isShow==9){
			if(type==1){
				$scope.createInfo.bull6b.score_type=num;
			}
			else if(type==2){
				$scope.createInfo.bull6b.rule_type=num;
			}
			else if(type==3){
				if(num==1)
					$scope.createInfo.bull6b.is_cardfive=($scope.createInfo.bull6b.is_cardfive+1)%2;
				else if(num==2)
					$scope.createInfo.bull6b.is_cardbomb=($scope.createInfo.bull6b.is_cardbomb+1)%2;
				else if(num==3)
					$scope.createInfo.bull6b.is_cardtiny=($scope.createInfo.bull6b.is_cardtiny+1)%2;
			}
			else if(type==4){
				$scope.createInfo.bull6b.ticket_type=num;
			} 
			else if (type == 5) {
				$scope.createInfo.bull6b.banker_score=num;
			}
			else if(type==6){
                $scope.createInfo.bull6b.bet_type=num;
            }
		}
		else if($scope.createInfo.isShow==10){
			if(type==1){
				$scope.createInfo.z9.chip_type=num;
			}
			else if(type==2){
				if (num == 1) {
					if ($scope.createInfo.z9.pkvalue1 == 0) {
						$scope.createInfo.z9.pkvalue1 = 1;
					} else {
						$scope.createInfo.z9.pkvalue1 = 0;
					}
				} else if (num == 2) {
					if ($scope.createInfo.z9.pkvalue2 == 0) {
						$scope.createInfo.z9.pkvalue2 = 1;
					} else {
						$scope.createInfo.z9.pkvalue2 = 0;
					}
				} else if (num == 3) {
					if ($scope.createInfo.z9.lookvalue == 0) {
						$scope.createInfo.z9.lookvalue = 1;
					} else {
						$scope.createInfo.z9.lookvalue = 0;
					}
				}
			}
			else if(type==3){
				$scope.createInfo.z9.ticket_count=num;
			}
			else if(type==4){
				$scope.createInfo.z9.upper_limit=num;
			}
		}	
		else if($scope.createInfo.isShow==11){
			if(type==1){
				$scope.createInfo.bull8b.score_type=num;
			}
			else if(type==2){
				$scope.createInfo.bull8b.rule_type=num;
			}
			else if(type==3){
				if(num==1)
					$scope.createInfo.bull8b.is_cardfive=($scope.createInfo.bull8b.is_cardfive+1)%2;
				else if(num==2)
					$scope.createInfo.bull8b.is_cardbomb=($scope.createInfo.bull8b.is_cardbomb+1)%2;
				else if(num==3)
					$scope.createInfo.bull8b.is_cardtiny=($scope.createInfo.bull8b.is_cardtiny+1)%2;
			}
			else if(type==4){
				$scope.createInfo.bull8b.ticket_type=num;
			} else if (type == 5) {
				$scope.createInfo.bull8b.banker_score=num;
			}
		}
        else if($scope.createInfo.isShow==12){
            if(type==1){
                $scope.createInfo.paijiu.score_type=num;
            }else if(type==4){
                $scope.createInfo.paijiu.ticket_type=num;
            }
		}
        else if($scope.createInfo.isShow==14){
            if(type==1){
                $scope.createInfo.dcx.bet_type=num;
            } else if(type==3){
                if(num==1)
                    $scope.createInfo.dcx.is_cardjoker=($scope.createInfo.dcx.is_cardjoker+1)%2;
                else if(num==2)
                    $scope.createInfo.dcx.is_cardbao9=($scope.createInfo.dcx.is_cardbao9+1)%2;
            } else if(type==4){
                $scope.createInfo.dcx.ticket_type=num;
            } else if(type==6){
                $scope.createInfo.dcx.max_count_type=num;
            }
        }   
        else if($scope.createInfo.isShow==15){
            if(type==1){
                $scope.createInfo.yxx.chip_type=num;
            } else if(type==2){
                if (num == 1) {
                    $scope.createInfo.yxx.rule_value1 = ($scope.createInfo.yxx.rule_value1+1)%2;
                }
            }
            else if(type==3){
                $scope.createInfo.yxx.ticket_type=num;
            }
            else if(type==4){
                $scope.createInfo.yxx.upper_limit=num;
            }
        }
        else if($scope.createInfo.isShow==16){
            if(type==1){
                $scope.createInfo.sangong9.score_type=num;
            }
            else if(type==3){
                if(num==1)
                    $scope.createInfo.sangong9.is_cardjoker=($scope.createInfo.sangong9.is_cardjoker+1)%2;
                else if(num==2)
                    $scope.createInfo.sangong9.is_cardbao9=($scope.createInfo.sangong9.is_cardbao9+1)%2;
            }
            else if(type==4){
                $scope.createInfo.sangong9.ticket_type=num;
            }
        }
        else if($scope.createInfo.isShow==17){
            if(type==1){
                $scope.createInfo.laibull.score_type=num;
            }
            else if(type==2){
                $scope.createInfo.laibull.rule_type=num;
            }
            else if(type==3){
                switch(num){
                    case 1:
                        $scope.createInfo.laibull.is_cardfour=($scope.createInfo.laibull.is_cardfour+1)%2;
                        break;
                    case 2:
                        $scope.createInfo.laibull.is_cardfive=($scope.createInfo.laibull.is_cardfive+1)%2;
                        break;
                    case 3:
                        $scope.createInfo.laibull.is_straight=($scope.createInfo.laibull.is_straight+1)%2;
                        break;
                    case 4:
                        $scope.createInfo.laibull.is_flush=($scope.createInfo.laibull.is_flush+1)%2;
                        break;
                    case 5:
                        $scope.createInfo.laibull.is_calabash=($scope.createInfo.laibull.is_calabash+1)%2;
                        break;
                    case 6:
                        $scope.createInfo.laibull.is_cardbomb=($scope.createInfo.laibull.is_cardbomb+1)%2;
                        break;
                    case 7:
                        $scope.createInfo.laibull.is_sequence=($scope.createInfo.laibull.is_sequence+1)%2;
                        break;
                    case 8:
                        $scope.createInfo.laibull.is_cardtiny=($scope.createInfo.laibull.is_cardtiny+1)%2;
                        break;
					case 9:
                        $scope.createInfo.laibull.is_laizi=($scope.createInfo.laibull.is_laizi+1)%2;
                        break;
                }
            }
            else if(type==4){
                $scope.createInfo.laibull.ticket_type=num;
            } else if (type == 5) {
                $scope.createInfo.laibull.max_count_type=num;
            } else if(type==6){
                $scope.createInfo.laibull.bet_type=num;
            }
        }  
        else if($scope.createInfo.isShow==18){
            if(type==1){
                //$scope.createInfo.flower18.max_count_type=num;
            } else if(type==2){
                $scope.createInfo.flower18.default_score=num;
            } else if(type==3){
                $scope.createInfo.flower18.chip_type=num;
            } else if(type==4){
                if (num == 1) {
                    $scope.createInfo.flower18.disable_look=($scope.createInfo.flower18.disable_look+1)%2;
                } else if (num == 2) {
                    $scope.createInfo.flower18.disable_pk=($scope.createInfo.flower18.disable_pk+1)%2;
                }
            } else if(type==5){
                $scope.createInfo.flower18.upper_limit=num;
            } else if(type==6){
                $scope.createInfo.flower18.pk_score=num;
            } else if(type==7){
                $scope.createInfo.flower18.look_score=num;
            } else if(type==8){
                $scope.createInfo.flower18.ticket_type=num;
            }
        }
        else if($scope.createInfo.isShow==19){  //血拼金花
            if(type==2){
                $scope.createInfo.flowerxp.default_score=num;
            } else if(type==3){
                $scope.createInfo.flowerxp.chip_type=num;
            } else if(type==4){
                if (num == 2) {
                    $scope.createInfo.flowerxp.disable_pk=($scope.createInfo.flowerxp.disable_pk+1)%2;
                }
            } else if(type==5){
                $scope.createInfo.flowerxp.bet_circle=num;
            } else if(type==6){
                $scope.createInfo.flowerxp.look_cond=num;
            } else if(type==7){
                $scope.createInfo.flowerxp.pk_cond=num;
            } else if(type==8){
                $scope.createInfo.flowerxp.xp_circle=num;
            } else if(type==9){
                $scope.createInfo.flowerxp.ticket_type=num;
            }
        }
        else if($scope.createInfo.isShow==20){  //超级三加一
            if(type==1){
                $scope.createInfo.jia31.score_type=num;
            } else if(type==2){
                $scope.createInfo.jia31.bet_type=num;
            } else if(type==3){
                $scope.createInfo.jia31.ticket_type=num;
            }
        }
        else if($scope.createInfo.isShow==21){  //大牌九
            if(type==1){
                $scope.createInfo.paijiuD.score_type=num;
            }else if(type==4){
                $scope.createInfo.paijiuD.ticket_type=num;
            }
        }


	}

    //血拼金花选筹码方法
    $scope.changeRule=function(e, t){
        var flowerxp = $scope.createInfo.flowerxp;

        if("chip_list"==e){
            if(4==flowerxp.chip_list.length&&!flowerxp.chip_total[t].isSelect){
                return void $scope.showAlertTip("已选择四组筹码",2);
            }
            flowerxp.chip_total[t].isSelect=!flowerxp.chip_total[t].isSelect;
            flowerxp.chip_list=[];
            for(var a=0;a<flowerxp.chip_total.length;a++){
                if(flowerxp.chip_total[a].isSelect){
                    flowerxp.chip_list.push(flowerxp.chip_total[a].num);
                }
            }
            //根据血拼筹码基准定血拼筹码
            if(flowerxp.chip_list.length>=1){
                flowerxp.base_xp_chip=flowerxp.chip_list[flowerxp.chip_list.length-1];
                if(flowerxp.base_xp_chip<40){
                    flowerxp.base_xp_chip=40;
                }
            } else {
                flowerxp.base_xp_chip=40;
            }
            flowerxp.xp_chip=3*flowerxp.base_xp_chip;
        } else if("xp_chip"==e){
            flowerxp.xp_chip=t
        }
	}
	
    $scope.createPaijiuD=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=21;        
    }

	$scope.createJia31=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=20;     
    }

    $scope.createFlowerXp=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=19;     
    }   

    $scope.createLaiBull=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=17;     
    }

    $scope.createSg9=function(){
        $(".createRoom .mainPart").css('height','71vh');
        $(".createRoom .mainPart .blueBack").css('height','50vh');
        $scope.createInfo.isShow=16;
    }

    $scope.createYxx=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=15;     
    }

    $scope.createDcx=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=14;     
    }

    $scope.createPaijiu=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=12;        
    }

	$scope.createFlower=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=1;		
	}	
	$scope.createFlower18=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=18;     
    }   	
	$scope.createZ9=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=10;		
	}		
	$scope.createLandlord=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=2;	
	}			
	$scope.createBull=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=3;		
	}	
	$scope.createMajiang=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=4;		
	}
    $scope.createBull9=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=5;		
	}
    $scope.createBull12=function(){
        $(".createRoom .mainPart").css('height','');
        $(".createRoom .mainPart .blueBack").css('height','');
        $scope.createInfo.isShow=6;
    }
    $scope.createSg=function(){
        $(".createRoom .mainPart").css('height','71vh');
        $(".createRoom .mainPart .blueBack").css('height','50vh');
        $scope.createInfo.isShow=7;
    }
    $scope.createEba=function(){
        $(".createRoom .mainPart").css('height','71vh');
        $(".createRoom .mainPart .blueBack").css('height','50vh');
        $scope.createInfo.isShow=8;
    }
	$scope.createBull6b=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=9;
	}
	$scope.createBull8b=function(){
		$(".createRoom .mainPart").css('height','');
		$(".createRoom .mainPart .blueBack").css('height','');
		$scope.createInfo.isShow=11;
	}
	//明牌炸金花选模式
    $scope.selectModeFlower18 = function (type) {
        $scope.createInfo.flower18.mode1 = "unselected";
        $scope.createInfo.flower18.mode2 = "unselected";
        $scope.createInfo.flower18['mode'+type] = "selected";
        $scope.createInfo.flower18.play_mode = type;
    };
    $scope.selectBankerModeLaibull = function (type) {
        $scope.createInfo.laibull.banker1 = "unselected";
        $scope.createInfo.laibull.banker2 = "unselected";
        $scope.createInfo.laibull['banker'+type] = "selected";
        $scope.createInfo.laibull.banker_mode = type;
    };


    $scope.selectBankerModePaijiu = function (type) {
        $scope.createInfo.paijiu.banker1 = "unselected";
        $scope.createInfo.paijiu.banker2 = "unselected";
        $scope.createInfo.paijiu['banker'+type] = "selected";
        $scope.createInfo.paijiu.banker_mode = type;
    };

    $scope.selectBankerModeSangong9 = function (type) {
		$scope.createInfo.sangong9['banker1'] = "unselected";
		$scope.createInfo.sangong9['banker2'] = "unselected";
		$scope.createInfo.sangong9['banker4'] = "unselected";
		$scope.createInfo.sangong9['banker' + type] =  "selected";

        $scope.createInfo.sangong9.score_type = 1;
        $scope.createInfo.sangong9.banker_mode = type;
    };


	$scope.selectBankerMode = function (type) {
		if (type == 1) {
			$scope.createInfo.bull.score_type = 1;
			$scope.createInfo.bull.banker1 = "selected";
			$scope.createInfo.bull.banker2 = "unselected";
			$scope.createInfo.bull.banker3 = "unselected";
			$scope.createInfo.bull.banker4 = "unselected";
			$scope.createInfo.bull.banker5 = "unselected";
		} else if (type == 2) {
			$scope.createInfo.bull.score_type = 1;
			$scope.createInfo.bull.banker1 = "unselected";
			$scope.createInfo.bull.banker2 = "selected";
			$scope.createInfo.bull.banker3 = "unselected";
			$scope.createInfo.bull.banker4 = "unselected";
			$scope.createInfo.bull.banker5 = "unselected";
		} else if (type == 3) {
			$scope.createInfo.bull.score_type = 1;
			$scope.createInfo.bull.banker1 = "unselected";
			$scope.createInfo.bull.banker2 = "unselected";
			$scope.createInfo.bull.banker3 = "selected";
			$scope.createInfo.bull.banker4 = "unselected";
			$scope.createInfo.bull.banker5 = "unselected";
		} else if (type == 4) {
			$scope.createInfo.bull.score_type = 4;
			$scope.createInfo.bull.banker1 = "unselected";
			$scope.createInfo.bull.banker2 = "unselected";
			$scope.createInfo.bull.banker3 = "unselected";
			$scope.createInfo.bull.banker4 = "selected";
			$scope.createInfo.bull.banker5 = "unselected";
		} else if (type == 5) {
			$scope.createInfo.bull.score_type = 1;
			$scope.createInfo.bull.banker1 = "unselected";
			$scope.createInfo.bull.banker2 = "unselected";
			$scope.createInfo.bull.banker3 = "unselected";
			$scope.createInfo.bull.banker4 = "unselected";
			$scope.createInfo.bull.banker5 = "selected";
		} 

		$scope.createInfo.bull.banker_mode = type;
	};
	
	$scope.selectBankerMode9 = function (type) {
		if (type == 1) {
			$scope.createInfo.bull9.score_type = 1;
			$scope.createInfo.bull9.banker1 = "selected";
			$scope.createInfo.bull9.banker2 = "unselected";
			$scope.createInfo.bull9.banker3 = "unselected";
			$scope.createInfo.bull9.banker4 = "unselected";
			$scope.createInfo.bull9.banker5 = "unselected";
		} else if (type == 2) {
			$scope.createInfo.bull9.score_type = 1;
			$scope.createInfo.bull9.banker1 = "unselected";
			$scope.createInfo.bull9.banker2 = "selected";
			$scope.createInfo.bull9.banker3 = "unselected";
			$scope.createInfo.bull9.banker4 = "unselected";
			$scope.createInfo.bull9.banker5 = "unselected";
		} else if (type == 3) {
			$scope.createInfo.bull9.score_type = 1;
			$scope.createInfo.bull9.banker1 = "unselected";
			$scope.createInfo.bull9.banker2 = "unselected";
			$scope.createInfo.bull9.banker3 = "selected";
			$scope.createInfo.bull9.banker4 = "unselected";
			$scope.createInfo.bull9.banker5 = "unselected";
		} else if (type == 4) {
			$scope.createInfo.bull9.score_type = 4;
			$scope.createInfo.bull9.banker1 = "unselected";
			$scope.createInfo.bull9.banker2 = "unselected";
			$scope.createInfo.bull9.banker3 = "unselected";
			$scope.createInfo.bull9.banker4 = "selected";
			$scope.createInfo.bull9.banker5 = "unselected";
		} else if (type == 5) {
			$scope.createInfo.bull9.score_type = 1;
			$scope.createInfo.bull9.banker1 = "unselected";
			$scope.createInfo.bull9.banker2 = "unselected";
			$scope.createInfo.bull9.banker3 = "unselected";
			$scope.createInfo.bull9.banker4 = "unselected";
			$scope.createInfo.bull9.banker5 = "selected";
		} 

		$scope.createInfo.bull9.banker_mode = type;
	};

	$scope.selectBankerMode6b = function (type) {
		if (type == 1) {
			$scope.createInfo.bull6b.score_type = 1;
			$scope.createInfo.bull6b.banker1 = "selected";
			$scope.createInfo.bull6b.banker2 = "unselected";
			$scope.createInfo.bull6b.banker3 = "unselected";
			$scope.createInfo.bull6b.banker4 = "unselected";
			$scope.createInfo.bull6b.banker5 = "unselected";
		} else if (type == 2) {
			$scope.createInfo.bull6b.score_type = 1;
			$scope.createInfo.bull6b.banker1 = "unselected";
			$scope.createInfo.bull6b.banker2 = "selected";
			$scope.createInfo.bull6b.banker3 = "unselected";
			$scope.createInfo.bull6b.banker4 = "unselected";
			$scope.createInfo.bull6b.banker5 = "unselected";
		} else if (type == 3) {
			$scope.createInfo.bull6b.score_type = 1;
			$scope.createInfo.bull6b.banker1 = "unselected";
			$scope.createInfo.bull6b.banker2 = "unselected";
			$scope.createInfo.bull6b.banker3 = "selected";
			$scope.createInfo.bull6b.banker4 = "unselected";
			$scope.createInfo.bull6b.banker5 = "unselected";
		} else if (type == 4) {
			$scope.createInfo.bull6b.score_type = 4;
			$scope.createInfo.bull6b.banker1 = "unselected";
			$scope.createInfo.bull6b.banker2 = "unselected";
			$scope.createInfo.bull6b.banker3 = "unselected";
			$scope.createInfo.bull6b.banker4 = "selected";
			$scope.createInfo.bull6b.banker5 = "unselected";
		} else if (type == 5) {
			$scope.createInfo.bull6b.score_type = 1;
			$scope.createInfo.bull6b.banker1 = "unselected";
			$scope.createInfo.bull6b.banker2 = "unselected";
			$scope.createInfo.bull6b.banker3 = "unselected";
			$scope.createInfo.bull6b.banker4 = "unselected";
			$scope.createInfo.bull6b.banker5 = "selected";
		}

		$scope.createInfo.bull6b.banker_mode = type;
	};

	$scope.selectBankerMode8b = function (type) {
		if (type == 1) {
			$scope.createInfo.bull8b.score_type = 1;
			$scope.createInfo.bull8b.banker1 = "selected";
			$scope.createInfo.bull8b.banker2 = "unselected";
			$scope.createInfo.bull8b.banker3 = "unselected";
			$scope.createInfo.bull8b.banker4 = "unselected";
			$scope.createInfo.bull8b.banker5 = "unselected";
		} else if (type == 2) {
			$scope.createInfo.bull8b.score_type = 1;
			$scope.createInfo.bull8b.banker1 = "unselected";
			$scope.createInfo.bull8b.banker2 = "selected";
			$scope.createInfo.bull8b.banker3 = "unselected";
			$scope.createInfo.bull8b.banker4 = "unselected";
			$scope.createInfo.bull8b.banker5 = "unselected";
		} else if (type == 3) {
			$scope.createInfo.bull8b.score_type = 1;
			$scope.createInfo.bull8b.banker1 = "unselected";
			$scope.createInfo.bull8b.banker2 = "unselected";
			$scope.createInfo.bull8b.banker3 = "selected";
			$scope.createInfo.bull8b.banker4 = "unselected";
			$scope.createInfo.bull8b.banker5 = "unselected";
		} else if (type == 4) {
			$scope.createInfo.bull8b.score_type = 4;
			$scope.createInfo.bull8b.banker1 = "unselected";
			$scope.createInfo.bull8b.banker2 = "unselected";
			$scope.createInfo.bull8b.banker3 = "unselected";
			$scope.createInfo.bull8b.banker4 = "selected";
			$scope.createInfo.bull8b.banker5 = "unselected";
		} else if (type == 5) {
			$scope.createInfo.bull8b.score_type = 1;
			$scope.createInfo.bull8b.banker1 = "unselected";
			$scope.createInfo.bull8b.banker2 = "unselected";
			$scope.createInfo.bull8b.banker3 = "unselected";
			$scope.createInfo.bull8b.banker4 = "unselected";
			$scope.createInfo.bull8b.banker5 = "selected";
		}

		$scope.createInfo.bull8b.banker_mode = type;
	};

    $scope.selectBankerModeSangong6 = function (type) {
		$scope.createInfo.sangong6['banker1'] = "unselected";
		$scope.createInfo.sangong6['banker2'] = "unselected";
		$scope.createInfo.sangong6['banker4'] = "unselected";
		$scope.createInfo.sangong6['banker' + type] =  "selected";

        $scope.createInfo.sangong6.score_type = 1;
        $scope.createInfo.sangong6.banker_mode = type;
    };

    $scope.selectBankerModeErbagang = function (type) {
        if (type == 1) {
            $scope.createInfo.erbagang.banker1 = "selected";
            $scope.createInfo.erbagang.banker2 = "unselected";
            $scope.createInfo.erbagang.chip_type = 1;
        } else if (type == 2) {
            $scope.createInfo.erbagang.banker1 = "unselected";
            $scope.createInfo.erbagang.banker2 = "selected";
            $scope.createInfo.erbagang.score_type = 1;
        }
        $scope.createInfo.erbagang.banker_mode = type;
    };

	$scope.createCommit = function () {
		if ($scope.userInfo.card>0){
			if($scope.is_operation){
				return 0;
			}
            //血拼金花新增建房判断
            if($scope.createInfo.isShow==19 && 4!=$scope.createInfo.flowerxp.chip_list.length){
                return void $scope.showAlertTip("请选择4组筹码",2);
            }
			$scope.waiting();
            //$scope.createHttpRoom();

			if($scope.createInfo.isShow==1){
				//errorAPI("startConnect",$scope.socket.flower);
				$scope.connectSocket($scope.socket.flower,1);
				localStorage.flower = JSON.stringify($scope.createInfo.flower);
				//$scope.createHttpRoom();
			}
			else if($scope.createInfo.isShow==2){
				//errorAPI("startConnect",$scope.socket.landlord);
				$scope.connectSocket($scope.socket.landlord,2);
				localStorage.landlord = JSON.stringify($scope.createInfo.landlord);
				//$scope.createHttpRoom();
			}
			else if($scope.createInfo.isShow==3){
				//errorAPI("startConnect",$scope.socket.bull);
				$scope.connectSocket($scope.socket.bull,3);
				localStorage.bull = JSON.stringify($scope.createInfo.bull);
				//$scope.createHttpRoom();
			}
			else if($scope.createInfo.isShow==4){
				//errorAPI("startConnect",$scope.socket.majiang);
				$scope.connectSocket($scope.socket.majiang,4);
				localStorage.majiang = JSON.stringify($scope.createInfo.majiang);
				//$scope.createHttpRoom();
			}
			else if($scope.createInfo.isShow==5){
				//errorAPI("startConnect",$scope.socket.bull9);
				$scope.connectSocket($scope.socket.bull9,5);
				localStorage.bull9 = JSON.stringify($scope.createInfo.bull9);
			}
            else if($scope.createInfo.isShow==6){
                //errorAPI("startConnect",$scope.socket.bull12);
                $scope.connectSocket($scope.socket.bull12,6);
				localStorage.bull12 = JSON.stringify($scope.createInfo.bull12);
            }
            else if($scope.createInfo.isShow==7){
               // errorAPI("startConnect",$scope.socket.sg);
                $scope.connectSocket($scope.socket.sg,7);
				localStorage.sangong6 = JSON.stringify($scope.createInfo.sangong6);
            }
            else if($scope.createInfo.isShow==8){
               // errorAPI("startConnect",$scope.socket.eba);
                $scope.connectSocket($scope.socket.eba,8);
				localStorage.erbagang = JSON.stringify($scope.createInfo.erbagang);
            }
			else if($scope.createInfo.isShow==9){
				//errorAPI("startConnect",$scope.socket.bull6b);
				$scope.connectSocket($scope.socket.bull6b,9);
				localStorage.bull6b = JSON.stringify($scope.createInfo.bull6b);
			}
			else if($scope.createInfo.isShow==10){
				//errorAPI("startConnect",$scope.socket.z9);
				$scope.connectSocket($scope.socket.z9,10);
				localStorage.z9 = JSON.stringify($scope.createInfo.z9);
			}
			else if($scope.createInfo.isShow==11){
				//errorAPI("startConnect",$scope.socket.bull8b);
				$scope.connectSocket($scope.socket.bull8b,11);
				localStorage.bull8b = JSON.stringify($scope.createInfo.bull8b);
			}
			else if($scope.createInfo.isShow==12){
				//errorAPI("startConnect",$scope.socket.paijiu);
				$scope.connectSocket($scope.socket.paijiu,12);
				localStorage.paijiu = JSON.stringify($scope.createInfo.paijiu);
			}
			else if($scope.createInfo.isShow==14){
				//errorAPI("startConnect",$scope.socket.sg9);
				$scope.connectSocket($scope.socket.dcx,14);
				localStorage.dcx = JSON.stringify($scope.createInfo.dcx);
			}
			else if($scope.createInfo.isShow==15){
				//errorAPI("startConnect",$scope.socket.sg9);
				$scope.connectSocket($scope.socket.yxx,15);
				localStorage.yxx = JSON.stringify($scope.createInfo.yxx);
			}
			else if($scope.createInfo.isShow==16){
				//errorAPI("startConnect",$scope.socket.sg9);
				$scope.connectSocket($scope.socket.sg9,16);
				localStorage.sangong9 = JSON.stringify($scope.createInfo.sangong9);
			}
			else if($scope.createInfo.isShow==17){
				$scope.connectSocket($scope.socket.laibull,17);
				localStorage.laibull = JSON.stringify($scope.createInfo.laibull);
			}
		    else if($scope.createInfo.isShow==18){
                $scope.connectSocket("wss://uu1.szlangya.cn:20182",18);
                localStorage.flower18 = JSON.stringify($scope.createInfo.flower18);
            }
            else if($scope.createInfo.isShow==19){
                $scope.connectSocket("wss://uu1.szlangya.cn:20192",19);
                localStorage.flowerxp = JSON.stringify($scope.createInfo.flowerxp);
            }
            else if($scope.createInfo.isShow==20){
                $scope.connectSocket("wss://uu1.szlangya.cn:20202",20);
                localStorage.jia31 = JSON.stringify($scope.createInfo.jia31);
            }
            else if($scope.createInfo.isShow==21){
                $scope.connectSocket("wss://uu1.szlangya.cn:20212",21);
                localStorage.paijiuD = JSON.stringify($scope.createInfo.paijiuD);
            }

		}
		else{
			$scope.showAlert(1,"房卡不足");
		}		
	}
	$scope.cancelCreate=function(){
		$scope.createInfo.isShow=0;
	}
		
	$scope.isShowShop=false
	$scope.showShop=function(){	
		return 0;	
		//alert('hello');
		$scope.select=1;
		$scope.ticket_count=20;
		
		$scope.isShowShop=true;
		setTimeout(function(){$(".shop .shopBody").animate({"height":$scope.width*1.541+"px"});},0);
	}
	$scope.hideShop=function(){		
		$(".shop .shopBody").animate({"height":0},function(){
			$scope.isShowShop=false;
			$scope.$apply();
		})		
	}		
	$scope.select=1;
	$scope.ticket_count=20;
	$scope.selectCard=function(num,count){
		$scope.select=num;
		$scope.ticket_count=count;
	};
	$scope.isShowShopLoading=false;

})
function randomString(len) {
　　len = len || 32;
　　var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';    /****默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1****/
　　var maxPos = $chars.length;
　　var pwd = '';
　　for (i = 0; i < len; i++) {
　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
　　}
　　return pwd;
}

</script>
<Script>
	wx.config({    
        debug: false,    
        appId: "wx9515972bdc7b74fd",    
        timestamp: "1541861647",    
        nonceStr:"38a95a60dc1e4884384bdf3cc8584014",    
        signature: "fffbab3ecb91ded371180d84f3dcbf4399ac4504",    
        jsApiList: [    
            'onMenuShareTimeline',    
            'onMenuShareAppMessage',     
            'hideMenuItems'
        ]    
    });        
	wx.ready(function () {
		wx.hideMenuItems({
			menuList: [
			    "menuItem:copyUrl",
			    "menuItem:share:qq",
			    "menuItem:share:weiboApp",
			    "menuItem:favorite",
			    "menuItem:share:facebook",
			    "menuItem:share:QZone"
			] // 要隐藏的菜单项，只能隐藏“传播类”和“保护类”按钮，所有menu项见附录3
		});	
		wx.onMenuShareTimeline({    
	        title: "优优娱乐",
	        desc: "游戏大厅：12人牛牛、9人牛牛、9人8倍牛牛、9人6倍牛牛、6人牛牛、麻将、斗地主、炸金花、9人炸金花、牌九、三公、二八杠供您娱乐",
	        link: "http://uu.8qc9.cn/y/rr",    
	        imgUrl: 'http://lyuu.poyio.cn/files/d_2/images/game/share_icon19.jpg',   
	        success: function (){ 
		        // 用户确认分享后执行的回调函数
		    },
		    cancel: function (){ 
		        // 用户取消分享后执行的回调函数
		    }   
		});		
		wx.onMenuShareAppMessage({    
	        title: "优优娱乐",
	        desc: "游戏大厅：12人牛牛、9人牛牛、9人8倍牛牛、9人6倍牛牛、6人牛牛、麻将、斗地主、炸金花、9人炸金花、牌九、三公、二八杠供您娱乐",
	        link: "http://uu.8qc9.cn/y/rr",    
	        imgUrl: 'http://lyuu.poyio.cn/files/d_2/images/game/share_icon19.jpg',   
	        success: function (){ 
		        // 用户确认分享后执行的回调函数
		    },
		    cancel: function (){ 
		        // 用户取消分享后执行的回调函数
		    }   
		});		
	});
	wx.error(function (res) {    
   //     alert("error: " + res.errMsg);    
    });

function errorAPI(part,receive){
	$.post("https://connwss.fairyland.xin/conn/index",{
		"level":2,
		"part":part,
		"time":"",
		"err_message":"接收数据："+receive,
	},function(result){	      
						
	})
}

customInit();
function customInit(){
	$(".createRoom .mainPart").css('display','block');
	$(".createRoom .mainPart").find(".selectPart").css('display','block');
}
</script>

<!-- 活动部分 start-->
<style>
.outbox{
    font-family: &quot;Microsoft YaHei&quot;, arial; font-weight: normal; font-style: normal; font-size: 26.6667px; white-space: normal; line-height: 150%; text-align: center; color: rgb(255, 255, 255); padding: 0px; 
	margin: 0px; border: none; display: block; max-width: none; max-height: none; box-sizing: content-box; 
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-decoration: none; width: 100%; height: 100%; position: fixed; left: 0px; top: 0px; z-index: 100001; opacity: 1;
}
.outbox1{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#fff;padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);
	text-decoration:none;position:absolute;width:100%;height:100%;background:#000;opacity:.4;z-index:0;filter:alpha(opacity=40)
}
.outbox2{
    font-family: &quot;Microsoft YaHei&quot;, arial; font-weight: normal; font-style: normal; font-size: 1em; white-space: normal; line-height: 150%; text-align: center; color: rgb(255, 255, 255); padding: 0px; margin: -315.5px 0px 0px -7.8em; border: none; display: block; max-width: none; max-height: none; box-sizing: content-box; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-decoration: none; position: absolute; left: 50%; top: 50%; min-width: 11em; visibility: visible; z-index: 100002; min-height: 5em;
}
.outbox2_2 {
    font-family: &quot;
    font-weight: normal;
    font-style: normal;
    font-size: 1em;
    white-space: normal;
    line-height: 150%;
    text-align: center;
    color: rgb(255, 255, 255);
    padding: 0px;
    margin: -75vw 0 0 -40vw;
    border: none;
    display: block;
    max-width: none;
    max-height: none;
    box-sizing: content-box;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    text-decoration: none;
    position: absolute;
    left: 50%;
    top: 50%;
    min-width: 11em;
    visibility: visible;
    z-index: 100002;
    min-height: 5em;
}
.imgbox1{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em; white-space:normal;line-height:150%;text-align:center;color:#fff;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;width:15.8em;height:21.24em;
	padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;
}
.imgbox1_2 {
    font-family: 'Microsoft YaHei',arial;
    font-weight: normal;
    font-style: normal;
    font-size: 1em;
    white-space: normal;
    line-height: 150%;
    text-align: center;
    color: #fff;
    box-sizing: content-box;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    text-decoration: none;
    width: 80vw;
    height: 132vw;
    padding: 0;
    margin: 0;
    border: none;
    display: block;
    max-width: none;
    max-height: none;
    border-radius: 20px;
}
.imgbox2{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#fff;padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;position:absolute;width:10em;top:2.4em;left:3.2em; border-radius:20px;
}
.txtbox{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#fff;padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;position:absolute;width:10.1em;height:6em;left:1.5em;top:6em
}
.rulebox{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#FFD99B;padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;font-size:.65em;text-align:center;position:absolute;
	bottom:4.5em;width:100%
}
.ruletxt{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#FFD99B;padding:0;margin:0;border:none;display:inline-block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;text-decoration:underline
}
.closebox{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#fff;padding:0.1em;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;position:absolute;font-size:0.7em;line-height:1.4em;right:7.25em;bottom:-3em;font-weight:normal;cursor:pointer;opacity:1;border-radius:50%;width:1.4em;height:1.4em;text-align:center
}
.closebtn{
    font-family:'Microsoft YaHei',arial;font-weight:normal;font-style:normal;font-size:1em;white-space:normal;line-height:150%;;text-align:center;color:#fff;padding:0;margin:0;border:none;display:block;max-width:none;max-height:none;box-sizing:content-box;-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;width:100%;height:100%
}
</style>


<script>
var cacheKey = 'HD2018061801';
var cacheTimes = 3 ;   //最大弹出次数
var cachePeriod = 2 * 60 * (60 * 1000) ; //120分钟
var cacheStartTime = 20180618000001 ;      //活动开始时间
var cacheEndTime   = 20180618235959 ;      //活动结束时间

if(isCanShow()){
    showActive();
}

function showActive(){
    $("#J_MMREDBOX_MASK").show();
}

function closeActive(){
    $("#J_MMREDBOX_MASK").hide();
}

//上次显示时间
function getLastTimestamp(){
    var lt = localStorage.getItem(cacheKey+"_LastTime") ;
	if(lt==null)return 0 ;
	return parseInt(lt) ;
}

//已经显示次数
function getShowedTimes(){
    var st = localStorage.getItem(cacheKey+"_ShowedTimes") ;
	if(st==null)return 0 ;
	return parseInt(st) ;
}

function isCanShow(){ 
    var lastTime = getLastTimestamp() ;
	var nowTime=new Date().getTime();
	var showedTimes = getShowedTimes() ;
	var currTime = dateFormat("yyyyMMddhhmmss",new Date());
	if(nowTime-lastTime>cachePeriod&&showedTimes<cacheTimes&&parseInt(currTime)<cacheEndTime&&parseInt(currTime)>cacheStartTime){
	    localStorage.setItem(cacheKey+"_LastTime",nowTime) ;
	    localStorage.setItem(cacheKey+"_ShowedTimes",++showedTimes) ;
	    return true;
	}
	return false ;
}

function dateFormat(fmt,date){ 
  var o = {   
    "M+" : date.getMonth()+1,                 //月份   
    "d+" : date.getDate(),                    //日   
    "h+" : date.getHours(),                   //小时   
    "m+" : date.getMinutes(),                 //分   
    "s+" : date.getSeconds(),                 //秒   
    "q+" : Math.floor((date.getMonth()+3)/3), //季度   
    "S"  : date.getMilliseconds()             //毫秒   
  };   
  if(/(y+)/.test(fmt))   
    fmt=fmt.replace(RegExp.$1, (date.getFullYear()+"").substr(4 - RegExp.$1.length));   
  for(var k in o)   
    if(new RegExp("("+ k +")").test(fmt))   
  fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));   
  return fmt;   
} 

  $.fn.BindClipboard = $.fn.BindClipboard || function(toolTip, target) {
		var options = {};
		if(target) {
			options = {
				"target": function(trigger) {
					console.log(trigger);
					return $(target)[0];
				}
			};
		}
		new ClipboardJS($(this)[0], options).on("success", function(e) {
			$(toolTip).fadeIn().fadeOut(3000);
			console.log(e);
		}).on("error", function(e) {
			$(toolTip).hide();
			console.log(e);
		});
	}
	// 调用clipboard
	$(".copyUrl").BindClipboard(".attention", "#room_str");
    
  

</script>
<!-- 活动部分 end-->
</body>
</html>
<!--吾爱永久QQ：8790766-->
<!--吾爱微信：8790766-->