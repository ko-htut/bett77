<?php if (!defined('THINK_PATH')) exit();?><!--米白永久QQ：2054970171-->
<!--米白微信：kadiym    或    fcxcx688-->
<html style="overflow: hidden;">
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="x5-fullscreen" content="true">
<meta name="full-screen" content="yes">

<title>12人牛牛房间<?php echo ($room["roomid"]); ?></title>

<?php echo base64_decode('PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iaHR0cDovL3FxODc5MDc2Ni5jZG4uYmNlYm9zLmNvbS95eS9jc3MvMTJyZW4uY3NzIj4NCjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii9hcHAvY3NzL2FsZXJ0LTEuMS5jc3MiPg0KPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iL2FwcC9jc3MvYnVsbHNob3AtMS4wLmNzcyI+DQo8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSJodHRwOi8vcXE4NzkwNzY2LmNkbi5iY2Vib3MuY29tL3l5L2Nzcy9wdWJsaWMuY3NzIj4NCjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Imh0dHA6Ly9xcTg3OTA3NjYuY2RuLmJjZWJvcy5jb20veXkvY3NzL3B1YmxpYzEyOC5jc3MiPg0KIDxsaW5rIHJlbD0ic3R5bGVzaGVldCIgaHJlZj0iL2FwcC9jc3MvcHBwLmNzcyIgLz4g'); ?></script>
  <?php $zhuti_list = ['xx' => 'xx.png', 'tt' => 'tt.png','yf' => 'yf.png', 'xd' => 'xd.png', 'hl' => 'hl.png', 'dd' => 'dd.png', 'lele' => 'lele.png' ,'ht' => 'ht.png', 'uu' => 'yy.png', 'kk' => 'kk.png', 'ym' => 'tt1.png', 'rr' => 'rr.png', 'xdd' => 'xdd.png', 'lt' => 'lt.png' ]; ?>
<style>
  .mainPart{
    position: relative;
    height: auto;
  }
  .alert .mainPart .id{
    position: relative;
  }
.alert .mainPart .alertText{
  position: relative;
}

.alert .mainPart{
  height: auto;
}
 .lishijilu{
         position: relative;background:url(http://goss.fexteam.com/files/images/common/alert3.png) 0% 0% / 100% 100% no-repeat;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 15px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }
@media screen and (max-width: 320px) {
    .lishijilu{
         position: relative;background: #a2befc;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 12px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }

}
    .tableLogo{
        position: absolute;
    width: 30vw;
    top: 47.5vh;
    left: 34vw;
  }    
.kadunB{
  width: 80px;
  height: 29px;
  position:fixed;
  z-index: 99;
  left: 1px;
  bottom:0.75vh;
  }

</style>
<script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
<script src="/app/js/fastclick.js" type="text/javascript"></script> 
     <script type="text/javascript">/**
 * game公共的js库
 * void 0替代undefined
 * 放大模式实现对象的方法和属性注入，实现动态挂载
 * author: heige
 * time: 2017-01-05
 */
(function(mod, win, doc) {
    //浏览器对象
    var browser = {
        versions: function() {
            var u = navigator.userAgent;
            return {
                trident: u.indexOf("Trident") > -1,
                presto: u.indexOf("Presto") > -1,
                webKit: u.indexOf("AppleWebKit") > -1,
                gecko: u.indexOf("Gecko") > -1 && -1 == u.indexOf("KHTML"),
                mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/),
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) || !!u.match(/iphone|ipod|ipad|Mac/gi),
                android: u.indexOf("Android") > -1 || !!u.match(/Android|Adr|Linux/gi),
                iPhone: u.indexOf("iPhone") > -1 || u.indexOf("Mac") > -1,
                iPad: u.indexOf("iPad") > -1,
                iPod: "ipod" == u.match(/iPod/i),
                webApp: -1 == u.indexOf("Safari"),
                isweixin: "micromessenger" == u.match(/MicroMessenger/i),
                ua: u
            }
        }()
    };

    //获取手机设备类型
    function getDeviceSystem() {
        var system = "android";
        if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad || browser.versions.iPod) {
            system = 'ios';
        }

        return system;
    };

    //获取ios系统版本
    function getIosVersion() {
        var version, verinfo = browser.versions.ua.match(/os [\d._]*/gi);
        if (null != verinfo && verinfo.length > 0) {
            version = verinfo.toString().replace(/[^0-9|_.]/gi, "").replace(/_/gi, ".");
        }

        return void 0 !== version && version.length > 0 ? version : "";
    };

    //微信中a--->b,从b返回a页面，需要执行Futuregames.initWxPage(title,url);
    //该段js放在b页面
    //用法如下：
    /*
     //a--->b,b--->a
     Futuregames.initWxPage(title,a_url);

     //a--->b,b---->c
     Futuregames.pushHistory(title,page_a_url);
     Futuregames.closeWxPage("http://www.baidu.com");
     */
    var obj = {
        pushHistory: function(title, page_a_url) {
            var state = {
                title: title || doc.title,
                url: page_a_url || location.href,
            };
            win.history.pushState(state, state.title, state.url);
        },
        closeWxPage: function(url) {
            win.addEventListener("popstate", function(e) { //回调函数中实现需要的功能
                if (typeof wx != "undefined" && typeof wx.closeWindow == 'function') {
                    wx.closeWindow();
                }

                location.href = url || location.host; //在这里指定其返回的地址
            }, false);
            return false;
        },
        //weixin初始化返回或关闭操作
        initWxPage: function(title, page_a_url) { //本游戏中page_a_url 为/
            return false;
            var iosVersion = getIosVersion().replace(/\./g, "");
            var system = getDeviceSystem();
            // ios 9.0.0以下的系统不调用微信初始化
            if ("ios" == system && "" != iosVersion && parseFloat(iosVersion) < 900) {
                return false;
            }

            this.pushHistory(title || (doc.title || ''), page_a_url || '/');
            this.closeWxPage(page_a_url || '/');
        },
    };

    //对外暴露的方法
    mod.browser = browser;
    mod.getDeviceSystem = getDeviceSystem;
    mod.getIosVersion = getIosVersion;
    mod.pushHistory = obj.pushHistory;
    mod.closeWxPage = obj.closeWxPage;
    mod.initWxPage = obj.initWxPage;

})(window.Futuregames = window.Futuregames || {}, window, document);

var glboldataxx = [];


function opnemm(html, id) {

    if(isguanzhan==1 && id=="message")
    {
        //alert("观战不能聊天");
        return;
    }
    if (!glboldataxx[id + html]) {
        $.get('/index.php/portal/index/' + html + '/room/' + room, function(data) {
 
            glboldataxx[id + html] = data;
            $('#' + id).html(data);
            $('#' + id).show();
            $('#scroll-box2').hide(); 
            $('.yuyinButton').addClass('yuyinButtonImg');  
        });
    
    } else {
        if (id != 'message') {
            console.log(glboldataxx[id + html]);
            //$('#' + id).html(glboldataxx[id + html]);
        }

      
        $('#' + id).show();
    }
}

function emojiButton() {
    $('#scroll-box').hide(); 
    $('#scroll-box2').show(); 
    $('.emojiButton').addClass('emojiButtonImg');  
    $('.yuyinButton').removeClass('yuyinButtonImg');
   }

   function yuyinButton() {
    $('#scroll-box2').hide(); 
    $('#scroll-box').show();  
    $('.yuyinButton').addClass('yuyinButtonImg');   
    $('.emojiButton').removeClass('emojiButtonImg');  
   }

   
function selectChange(type, id, index) {
    glboldataxx[mb][type] = index;
    $('.' + type).find('img').hide();
    $('#' + id).find('img').show();
}

function selectChanges(type, id, index) {
    glboldataxx[mb][type] = index;
    if ($('#' + id).children('img').css('display') == 'block') {
        $('#' + id).children('img').hide();
    } else {
        $('#' + id).children('img').show();
    }
}

function zhengzkf() {
    alert('敬请期待');
}

function cancelCreate() {
    $('#room').hide();
}
//addfunction
function eagddd366() {
    $('#dagf3dee').hide();
}

// 选择房间
function selectBankerMode(index, id) {
    glboldataxx[mb][index] = index;
    $(".bankerUnSelected").find('img').attr('src', './img/banker_unselected.png')
    $('.selectPart').eq(2).hide();
    $('.selectPart').eq(6).hide();
    $('.selectPart').eq(1).show();

    if (index == 1) {
        $('#' + id).find('img').attr('src', './img/banker_selected.png')
    }
    if (index == 2) {
        $('#' + id).find('img').attr('src', './img/banker_selected.png')
        $('.selectPart').eq(6).show();
    }
    if (index == 3) {
        $('#' + id).find('img').attr('src', './img/banker_selected.png')
    }
    if (index == 4) {
        $('#' + id).find('img').attr('src', './img/banker_selected.png')
    }
    if (index == 5) {
        $('#' + id).find('img').attr('src', './img/banker_selected.png')
        $('.selectPart').eq(2).show();
        $('.selectPart').eq(1).hide();
    }
}

//addfunction
function eee366() {
    $('#ssa').hide();
}

function shoujibd() {
    $('#validePhone').show();
}

function alertgl() {
    $('#valert').show();
}

function alertqx() {
    $('#valert').hide();
}
//功能管理  页面
function guanlign() {
    window.location.href = '../gongnsm.html';
}

//个人中心    积分
$(function() {

    $('.daoluan').on('click', function() {
        $('.gameListItem').css('z-index', '99');
        $(this).siblings().css('z-index', '9999');
    })

    $('.phoneMask').on('click', function() {
        $('#validePhone').hide();
    })

})
// 红包旋转功能
function xuanzhuan() {

    $('.btnOpen').find('img').addClass('transf')

    setTimeout(function() {

        $('#ropen').show();

    }, 1000);
}

// 公共弹框
function public(data) {
    $('#' + data).hide();
}
// 快捷语音
function sendmsg(msg, id) {
    send('sendmsg', {
        msg: msg,
        id: id
    });
    $('#message').hide();
}

function sendemoji(msg, id) {
    send('sendemoji', {
        msg: msg,
        id: id
    });
    $('#message').hide();
}


var ji;

function djs(sj) {
    clearTimeout(ji);
    var now = sj - Math.ceil(new Date() / 1000) - (0 - timewc) - 1;
    if (now > 0) {
        // if(now<=3){
        //   mp3play('mp3daojishi');
        // }
        ji = setTimeout('djs(' + sj + ')', 1000);
        $('.clock').show();
        $('#divRobBankerText').show();
        $('#djs').text(now);
    } else {
        cleardjs();
    }
}

function cleardjs() {
    clearTimeout(ji);
    $('.clock').hide()
    $('#divRobBankerText').hide();
    $('.gongg').hide();
}

/**
 * 无用代码以下是
 */
//==========================开市
function testxxyx() {
    return 'hahha';
}

function testhah() {
    return '1232';
}

//===========================结束
</script>
  <script type="text/javascript" src="/app/js/base64.js"></script>
    <script type="text/javascript">var cs=10;
var hosturl=window.location.hostname;
var websocket;
var token;
var room;
var index;
var timewc=0;
var bgmp3open;
var mp3open;
var overzt=1;
var isguanzhan = 0;

if(!localStorage.bgmp3open){
    bgmp3open=1;
}
else{
    bgmp3open=localStorage.bgmp3open;
}
if(!localStorage.mp3open){
    mp3open=1;
}
else{
    mp3open=localStorage.mp3open;
}
function connect(n,isgz){

    if(!isgz)
    {
        isgz = 0;
    }
    isguanzhan = isgz;
  if(overzt==0){
    load('hide');
    return false;
  }
  if(websocket)websocket.close();


  
    if(cs>0){
      cs=cs-1;
      websocket = new WebSocket("ws://"+hosturl+":"+n);
      websocket.onmessage = function(event) {
        cs=10;
        zdata=JSON.parse(event.data);
        //console.log(zdata);
        window[zdata.act](zdata.msg);
      };
      websocket.onopen=function(e){
            load('hide');
            if(!token){
                token=localStorage.token;
            }
            send('init',{token:token,room:room,isguanzhan:isgz});
      }
      websocket.onclose=function(e){
        websocket.close(); //关闭TCP连接
            if(overzt==0){
                return false;
                load('hide');
              }
            load('show');
            //prompt('网络不给力,正在努力链接服务器!');
          
            cs=cs-1;
            connect(n,isguanzhan);
      };
    }
    else{
      load('hide');
      //prompt('已经于服务器断开,请刷新重试!');
      setTimeout("$('body').hide()",3000);
    }
}
function gologin(){
    location.href="/";
}
function gxtoken(data){
    localStorage.token=data;
}


//加载中
function load(s) {
    var Img = "data:image/gif;base64,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"
    var html = "<div class=\"load\"><img src=" + Img + " /></div>";
    if (s == 'show') {
        $('body').append(html);
    }
    if (s == 'hide') {
        $('.load').remove();
    }
    maik(s);
}
//遮罩
function maik(s) {
    var hei = $(window).height();
    var wid = $(window).width();
    var html = "<div class=\"maik\" style='height:"+hei+"px;width:"+wid+"px;' onclick=\"Center($('.noticewi'), 'hide')\"></div>";
    if (s == 'show') {
        if ($(".maik").length <= 0) {
            $('body').append(html);
        }
    }
    if (s == 'hide') {
        $('.maik').remove();
    }
}
//获取页参数
function Request(m) {
    var sValue = location.search.match(new RegExp("[\?\&]" + m + "=([^\&]*)(\&?)", "i"));
    return sValue ? sValue[1] : sValue;
}
function prompt(txt) {
    var html = "<div class=\"prompt\"><span>" + txt + "</span></div>";
    var Bw = $(window).width();
    var Bh = $(window).height();
    $('body').append(html);
    var Pw = $('.prompt').width();
    var Ph = $('.prompt').height();
    $('.prompt').css({
        "top": Bh / 2 - Ph / 2,
        "left": Bw / 2 - Pw / 2
    });
    setTimeout(function () {
        $('.prompt').remove();
    }, 2000);
}

//记录登陆凭证
function login(data){
    localStorage.userid=data.uid;
    localStorage.salt=data.salt;
}
//销毁登陆凭证
function loginout(msg){
    if(msg){
        prompt(msg);
        setTimeout("$('body').hide()",3000);
    }
    localStorage.token='';
    websocket.close();
}

function send(act,data){
    if(!data){
        data={};
    }
    var fs = data;
    fs.act=act;
    var jsonStr = JSON.stringify(fs);
    if(typeof(websocket)=='undefined'){
        prompt('与服务器端口链接，请刷新重试');
        return false;
    }
    websocket.send(jsonStr);
}

//标题
function Title(title) {
    document.title = title;
}
function attr(data){
    $('#'+data.id).attr(data.wz,data.nr);
}
function html(data){
    if(data.id == 'nickname') {
        data.html = decode64(data.html);
    }
    $('#'+data.id).html(data.html);
}

function addid(data){
    $('#'+data.id).addClass(data.html);
}


function removeid(data){
    $('#'+data.id).removeClass(data.html);
}


function value(data){
    $('#'+data.id).val(data.html);
}
function value2(data){
    $(''+data.id).val(''+data.html);
}
function append(data){
    $('#'+data.id).append(data.html);
}
function jsdata(data){
    eval(data);
}
function active(data){
    $('#'+data.id).addClass(data.html).siblings().removeClass(data.html);
} 

function showid(data){
    $('#'+data.id).show();
}
function hideid(data){
    $('#'+data.id).hide();
}

function goroom(data){
    location.href="/portal/index/room.html?room="+data.room;
}

function gxindex(data){
    index=data;
}
function timewcgx(data){
    timewc=Math.ceil(new Date()/1000)-data;
    //console.log(timewc);
    setTimeout('send("timegx",{})',5000);
}
function timeyc(data){
    send("timeyc",{time:data});
}
function ycxx(data){
    $('#user'+data.id+' .zmmyctime').html(data.time);
}


function WeChat(url,title,img,desc){
     $.get("/index.php/portal/index/getconfig/",{url:window.location.href},function(data) {
        wx.config(data);
        wx.ready(function () {
        // 在这里调用 API
        wx.onMenuShareTimeline({  //例如分享到朋友圈的API 
        title: title, // 分享标题
        link: url, // 分享链接
        imgUrl: img, // 分享图标
        success: function () {
        },
        cancel: function () {
        // 用户取消分享后执行的回调函数
        }
        });
 
        wx.onMenuShareAppMessage({
        title: title, // 分享标题
        desc: desc, // 分享描述
        link: url, // 分享链接
        imgUrl: img, // 分享图标
        type: '', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function () {
        },
        cancel: function () {
        // 用户取消分享后执行的回调函数
        }
        });
        wx.error(function (res) {
         //打印错误消息。及把 debug:false,设置为debug:ture就可以直接在网页上看到弹出的错误提示
        });
        });
    },
    "json"
    );
}

var keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
//中国asp之家 http://www.aspxhome.com
function encode64(input)
{
    input = strUnicode2Ansi(input);

    var output = "";
    var chr1, chr2, chr3 = "";
    var enc1, enc2, enc3, enc4 = "";
    var i = 0;

    do{
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2))
        {
            enc3 = enc4 = 64;
        }
        else if(isNaN(chr3))
        {
            enc4 = 64;
        }

        output = output +
            keyStr.charAt(enc1) +
            keyStr.charAt(enc2) +
            keyStr.charAt(enc3) +
            keyStr.charAt(enc4);
        chr1 = chr2 = chr3 = "";
        enc1 = enc2 = enc3 = enc4 = "";

    }while(i < input.length);

    return output;
}

//
// msg：消息内容
// isBackHome：是否返回主页
function tipAlert(data) {
  var html = "<div class=\"alertBack\"></div>" +
"<div class=\"mainPart\" style=\"height: 226.78px; margin-top: -113.39px;\">" +
"	<div class=\"backImg\">" +
"		<div class=\"blackImg\" style=\"height: 145.406px;\"></div>" +
"	</div>" +
"	<div class=\"alertText\" style=\"top: 75.877px;\">" +
"		<div>" + data.msg + "</div>" +
"	</div>" +
"	<div>" +
"		<div class=\"buttonRight\" style=\"right: 13vh;\" onclick=\"public('tishi');if(" + data.isBackHome + ") {location.href='/portal/user/index';}\">确定</div>" +
"	</div>" +
"</div>";
  $("#tishi").html(html).show();
}

// 调试输出
function debugLog(data) {
	console.log(data);
}
</script>          
    <script type="text/javascript">var fapaizt=0;
function allfapai(data){
        fapaizt=1;
        $('#userfp').html('');
        $('.isReady').hide();
        $("#zb").hide();
        for(var i=0;i<data.user.length;i++){
            var user=data['user'][i];
            var indexuser=user.index-index-(-1);
            var html='';
            if(indexuser<=0){
                indexuser=indexuser-(-12);
            }
             if(data.allcard && indexuser!=1){
                var card=data.allcard;
                html=html+'<div class="cardss cards card'+indexuser+'" style="display: none;" data="'+indexuser+'">'
                html=html+'<div class="card cardopen card'+card[user.index][0]['card']+' card'+indexuser+'1 shiren-index14" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][1]['card']+' card'+indexuser+'2 shiren-index13" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][2]['card']+' card'+indexuser+'3 shiren-index12" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][3]['card']+' card'+indexuser+'4 shiren-index11" ></div>'
                html=html+'<div class="card cardopen card'+card[user.index][4]['card']+' card'+indexuser+'5 shiren-index10" ></div></div>';
            }
            else{
                html=html+'<div class="cardss cards card'+indexuser+'" style="display: none;" data="'+indexuser+'">'
                html=html+'<div class="card card'+indexuser+'1 shiren-index14" ></div> '
                html=html+'<div class="card card'+indexuser+'2 shiren-index13" ></div> '
                html=html+'<div class="card card'+indexuser+'3 shiren-index12" ></div> '
                html=html+'<div class="card card'+indexuser+'4 shiren-index11" ></div>'
                html=html+'<div class="card card'+indexuser+'5 shiren-index10" ></div></div>';
            }
            $('#userfp').append(html);
        }
        $('#userfp .cards').show();
        setTimeout(function(){
        $('#userfp .shiren-index10').show();
        fapaizt=0;
        },1000);
        setTimeout(function(){
        $('#userfp .shiren-index11').show();
        },800);
        setTimeout(function(){
        $('#userfp .shiren-index12').show();
        },600);
        setTimeout(function(){
        $('#userfp .shiren-index13').show();
        },400);
        setTimeout(function(){
        $('#userfp .shiren-index14').show();
        },200);
        $('.myCards').eq(0).show();

        if(isguanzhan==0)
        {
        if(data.card && !data.allcard){
            for(var i=0;i<data.card.length;i++){
                var card=data['card'][i];
                $('.card'+i+'  .back').removeClass('cardundefined').addClass('card'+card.card);
                setTimeout('showmycard('+i+')',1500);
            }
        }
        if(data.allcard){
            for(var i=0;i<data['allcard'][index].length;i++){
                var card=data['allcard'][index][i];
                $('.card'+i+'  .back').removeClass('cardundefined').addClass('card'+card.card);
                setTimeout('showmycard('+i+')',1500);
            }
        }
    }
}
var allcardxx;
function fapaistart(data){
    allcardxx=data;
    var fp=0;
    for(i=1;i<6;i++){
            var xx={};
            xx.id=i;
            xx.card=data['card'][index][i-1];
           $('.cardDeal .cardss .card1'+i).attr('onclick','fapxx('+JSON.stringify(xx)+')');
           if($('.cardDeal .cardss .card1'+i).is(':hidden')){
             fp=fp+1;
           }
    }
    if(fp>=5){
        operationButton(7);
    }
}
function fapxx(data){
    if(isguanzhan==1)return;
    $('.myCards .card'+(data.id-1)+'  .back').removeClass('cardundefined').addClass('card'+data.card.card);
    $('.cardDeal .cardss .card1'+data.id).hide();
    $('.myCards .card'+(data.id-1)).show();
    $('.myCards .card'+(data.id-1)).addClass('card-flipped');
    var fp=0;
    for(i=1;i<6;i++){
        if($('.cardDeal .cardss .card1'+i).is(':hidden')){
            fp=fp+1;
        }
    }
    if(fp>=5){
        operationButton(7);
    }
}
function tanpaime(){
    var time=Math.ceil(new Date()/1000)-timewc;
    send('tanpai',{time:time});
    showtanpai();
}
function showtanpai(){
    var mp3xx='';
    operationButton(-1);
    if(allcardxx['sfniu'][index]==0){
        tanpaixx2({card:allcardxx['newcard'][index]})        
    }
    else{
        tanpaixx({card:allcardxx['newcard'][index]})
    }
    var msgxx={};
    msgxx.index=index;
    msgxx.img='/app/img/bull12/niu'+allcardxx['niu'][index]+'.png';
    showmemberBull(msgxx);
    mp3xx='mp3niu'+allcardxx['niu'][index];
    mp3play(mp3xx);
}
function showothertanpai(data){
    if(data==index){
        showtanpai();
    }
    else{
        mp3xx='mp3niu'+allcardxx['niu'][data];

        var msgxx={};
        msgxx.index=data;
        msgxx.img='/app/img/bull12/niu'+allcardxx['niu'][data]+'.png';
        showmemberBull(msgxx);

        var msgxx={};
        msgxx.user={};
        msgxx.user.index=data;
        msgxx.card=allcardxx['newcard'][data];
        tanpaixxother(msgxx);

        mp3play(mp3xx);
    }
}

function tanpaixx(data){
    for(var i=0;i<data.card.length;i++){
        var card=data['card'][i];
        $('.card0'+i+'  .back').removeClass('cardundefined').addClass('card'+card.card);
    }
   



    $('.cardDeal .card1').hide();
    $('.myCards').eq(0).hide();
    $('.myCards').eq(1).show();
    var left=['34','40','46','61','68'];
    for(var i=0;i<data.card.length;i++){
        $('.myCards  .card0'+i).animate({
                    left: left[i]+'%',
              },500)
    }
}

function tanpaixx2(data){
    for(var i=0;i<data.card.length;i++){
        var card=data['card'][i];
        $('.card0'+i+'  .back').removeClass('cardundefined').addClass('card'+card.card);
    }
    $('.cardDeal .card1').hide();
    $('.myCards').eq(0).hide();
    $('.myCards').eq(2).show();

    var left=['33','42','51','60','69'];
    for(var i=0;i<data.card.length;i++){
        $('.myCards .card0'+i).animate({
                    left: left[i]+'%',
              },500)
    }
}


function tanpaixxother(data){
    var indexuser=data.user.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    var html='<div>';
    var hz=0;
    for(var i=0;i<data.card.length;i++){
        var card=data['card'][4-i];
        var card2=data['card'][i];
        if(i<3){
            hz=hz-(0-card2.val);
        }
        html=html+'<div class="cards card'+indexuser+' card'+indexuser+(i-(-1))+'1 shiren-index1'+(4-i)+'s card-flipped"><div class="face front"></div> <div class="face back card'+indexuser+' card'+card.card+' card-flipped"></div></div>';
    }
    html=html+'</div>';
    $('.cardOver').append(html);
    $('.cardDeal .card'+indexuser).hide();
    $('.cardOver .card'+indexuser).show();
    if(hz%10==0){
       var left=['19','17','13','11','9'];
        var right=['9','11','15','17','19'];

        var left1=['12.5','10.5','6.5','4.5','2.5'];
        // var left1=['2.5','4.5','6.5','10.5','12.5'];
        var left2=['56','52','45','41.5','38'];
        var right1=['3.5','5.5','9.5','11.5','13.5'];
    }
    else{
        // var left=['9','11','13','15','17'];
        var left=['17','15','13','11','9'];
        // var right=['17','15','13','11','9'];
        var right=['9','11','13','15','17'];

        var left1=['12.5','10.5','8.5','6.5','4.5'];
        var left2=['56','52','48','44','40'];
        var right1=['4.5','6.5','8.5','10.5','12.5'];
    }
    for(var i=0;i<data.card.length;i++){
        if(indexuser <6){
            $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    right: right[i]+'vh',
              },500)
        }
        else if(indexuser ==6){

              $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    right: right1[i]+'vh',
              },500)  
        }
        else if(indexuser ==7){
                $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    left: left2[i]+'%',
              },500)  
        }
         else if(indexuser ==8){
                $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    left: left1[i]+'vh',
              },500)  
        }
        else{
            $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    left: left[i]+'vh',
              },500)  
        }

    
    

     }

}
function showmycard(id){
    $('.cardDeal .card1 .card1'+(id-(-1))).hide();
    $('.myCards .card'+id).show();
    $('.myCards .card'+id).addClass('card-flipped');
}
function roomxx(data){

}
function adduser(data){

    if(index==undefined)
    {
        index = 0;
    }
    var indexuser=data.user.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    if($('.member'+indexuser+' .onlinezt').length>0){
        $('.member'+indexuser+' .onlinezt').hide();
    }
    else{
        if(data.user.online=='-1'){
            var onlinezt='display:block';
        }
        else{
            var onlinezt='display:none';
        }
      var credits = (data.mode == 1 ? parseInt(data.user.credits) : 0) + parseInt(data.user.dqjf);
    var html='<div class="member member'+indexuser+'" id="user'+data.user.id+'">'
    html+='<div class="zmmyctime"></div>'
     html+='<div style="background: #000;z-index: 888;position: absolute;width: 100%;height: 100%;opacity: 0.5;'+onlinezt+'" class="onlinezt"></div>'
	html += '<div style="position: relative;"><div style="position: absolute; z-index: 880; display: none;" class="watchzt" ><img src="/52/guest_avatar.png"/ style="width: 100%;margin-top:0.02vh "></div> <img src="' + data.user.img + '" class="avatar" /></div>',
     html+='<img src="/app/img/bull9/playerWin.png" class="banker" style="display: none;" /> '
     html+='<div class="bottom shiren-bottom">'
     html+='<div class="bname shiren-bname">'+decode64(data.user.nickname)+'</div>'
      html+='<div class="bscore shiren-bname" data-dqjf="' + data.user.dqjf + '" data-credits="' + data.user.credits + '" data-mode="' + data.mode + '">'+credits+'</div></div>'
    html+='<img id="banker213612" src="/app/img/bull9/bull_banker_bg.png" class="background shiren-background" /> '
     html+='<img src="/app/img/bull9/bull_banker_icon.png" class="background background1 shiren-background1" />' 
     html+='<img id="bankerAnimate'+indexuser+'" src="/app/img/bull9/bull_banker_animate.png" class="shiren-background2" />' 
     html+='<img id="bankerAnimate1'+indexuser+'" src="/app/img/bull9/bull_banker_animate.png" class="shiren-background2" /><div class="isReady" style="display:none"><img src="http://goss.fexteam.com/files/d_25/images/game/ready.png " class="ready" style=""></div></div>';
     $('#member').append(html);
     if(data.user.zt==1){
        $('.member'+indexuser+' .isReady').show();
     }
    }
}
function zbuser(data){
     var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    $('.member'+indexuser+' .isReady').show();
}
function removeuser(data){
    var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    $('.member'+indexuser+' .onlinezt').show();
    $('.member'+indexuser+' .isReady').hide();
   	$(".member" + indexuser + ' .watchzt').hide();
}

function removeuser2(data){
    var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    $('#member .member'+indexuser).remove();
}
function showmemberTimesText(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    var html='<div class="memberTimesText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>';
    $('#memberTimesText').append(html);
}
function showmemberTimesText2(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }

    if(indexuser<6){
        var html='<div class="memberTimesText'+indexuser+'" style="display: block;right:9vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>'; 

    } else if(indexuser==6){
        var html='<div class="memberTimesText'+indexuser+'" style="display: block;right: 13.5vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>'; 
    }
    else if(indexuser==7){
        var html='<div class="memberTimesText'+indexuser+'" style="display: block;left: 60%;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>'; 
    }
    else if(indexuser==8){
        var html='<div class="memberTimesText'+indexuser+'" style="display: block;left: 18.5vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>'; 
    }
    else{
   
    var html='<div class="memberTimesText'+indexuser+'" style="display: block;left:14vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>';

}
  $('#memberTimesText2').append(html);
}

function showmemberRobText(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    var html='<div class="memberRobText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;"></div>';
    $('#memberRobText').append(html);
}
function showmemberRobText2(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    var html='<div class="memberFreeRobText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;"></div>';
    $('#memberFreeRobText').append(html);
}

function showmemberBull(data){
     var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    var html='<div class="memberBull'+indexuser+'" style="display: block;"><img src="'+data.img+'" style="position: absolute; width: 100%;height: 100%;"/></div>';
    $('#memberBull').append(html);
}
function timewcgx(data){
    timewc=Math.ceil(new Date()/1000)-data;
    //console.log(timewc);
    setTimeout('send("timegx",{})',5000);
}
function clearmemberBull(){
    $('#memberBull').html('');
}
function clearmemberTimesText(){
    $('#memberTimesText').html('');
}
function clearmemberRobText(){
    $('#memberRobText').html('');
}
function clearmemberRobText2(){
    $('#memberFreeRobText').html('');
    $('#memberTimesText2').html('');
}
function qzcard(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }

    if(data.bd){
        $('#userfp .qzcard').removeClass('qzcard');
    }
    $('#userfp .card'+indexuser).addClass('qzcard');
}
function showqz(data){
    if($('#userfp .qzcard').length==0){
        $('#userfp .cardss').addClass('qzcard');
    }
    var userindex=data['user'][data.index]-index-(-1);
    if(userindex<0){
        userindex=userindex-(-12);
    }
  $('.shiren-background').hide();
  $('.member'+userindex+' .shiren-background').show();

  data.index=data.index-(-1);
  if(data.index>=data.user.length){
    data.index=0;
  }
  var t=4;
  if(data.user.length==2){
    t=6;
  }
  if(data.user.length==3 || data.user.length==4){
    t=5;
  }


  ji=setTimeout('showqz('+JSON.stringify(data)+')',4000/(data.user.length*t));
}

// 抢庄结束动画
function sss(data){
    var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }

    clearTimeout(ji);
  			// $('.shiren-background').hide();
     //        $("#bankerAnimate"+indexuser).show(),
     //         $('.member'+indexuser+' .shiren-background2').hide()
     //         $('.member'+indexuser+' #bankerAnimate1'+indexuser).show()


              	$('.shiren-background').hide();
	 			$("#bankerAnimate"+indexuser).show();
	            // $('.member'+indexuser+' #bankerAnimate1'+indexuser).show()

             $("#bankerAnimate1"+indexuser).animate({
                top: "-1vh",
                left: "-1vh",
                width: "9.26vh",
                height: "9.26vh"
            },
            400,
            function() {
                $("#bankerAnimate1"+indexuser).animate({
                    top: "-0.1vh",
                    left: "-0.1vh",
                    width: "7.46vh",
                    height: "7.46vh"
                },
                400,
                function() {
                  $('.member'+indexuser+' .shiren-background').hide();
                  $('.member'+indexuser+' .shiren-background1').show();
                    
                })
            }),
            $("#bankerAnimate"+indexuser).animate({
                top: "-1vh",
                left: "-0.8vh",
                width: "7.8vh",
                height: "7.8vh"
            },400),
                $("#bankerAnimate"+indexuser).animate({
                    top: "-0.1vh",
                    left: "-0.1vh",
                    width: "6.3vh",
                    height: "6.2vh"
              },400)

        }


        function jibi(data){
            if(data.win.index!=data.bank.index && data.zt!=1){
                if(data.fx==1){
                    var kstime=1000;
                }
                else{
                    var kstime=1000+200*8+1000;
                }
                data.zt=1;
                setTimeout('jibi('+JSON.stringify(data)+')',kstime);
                return false;
            }
            if(data.win.index==data.bank.index && data.zt!=1){
                var kstime=1000;
                data.zt=1;
                setTimeout('jibi('+JSON.stringify(data)+')',kstime);
                return false;
            }
            mp3play('mp3gold');
            var win=data.win.index-index-(-1);
        var lose=data.lose.index-index-(-1);
        if(win<=0){
            win=win-(-12);
        }
        if(lose<=0){
            lose=lose-(-12);
        }   
  if (window.innerHeight)
winHeight = window.innerHeight,
winWidth = window.innerWidth;
else if ((document.body) && (document.body.clientHeight))
winHeight = document.body.clientHeight,
winWidth = document.body.clientWidth;


var Hpx=winHeight*(1/100);
var Wpx=winWidth*(1/100);

  var top  =parseInt($('.member'+lose).css('top'))+parseInt(Hpx)*2.5+'px';
  if(lose<=6 && lose>1){
    var right =parseInt($('.member'+lose).css('right'))-parseInt(Wpx)*2;
    var left=parseInt(winWidth)-right-parseInt($('.member'+lose).css('width'))+'px';
  }
  else{
    var left =parseInt($('.member'+lose).css('left'))+parseInt(Wpx)*2+'px';
  }
  var ytop  =parseInt($('.member'+win).css('top'))+parseInt(Hpx)*2.5+'px';
  if(win<=6 && win>1){
    var yright =parseInt($('.member'+win).css('right'))-parseInt(Wpx)*2;
    var yleft=parseInt(winWidth)-yright-parseInt($('.member'+win).css('width'))+'px';
  }
  else{
    var yleft =parseInt($('.member'+win).css('left'))+parseInt(Wpx)*2+'px';
  }
  for(var i=0;i<11;i++){
     var html='<div class="memberCoin member'+win+lose+'"  ><img src="/app/img/bull9/bull_coin.png" class="shiren-memberCoin" /></div>'
     $('#jinbi').append(html);
     $('#jinbi .member'+win+lose).eq(i).css('top',top);
     $('#jinbi .member'+win+lose).eq(i).css('left',left);
     $('#jinbi .member'+win+lose).eq(i).animate({
       top:ytop,
       left:yleft
    },0+i*250);
}
    setTimeout('jibiover('+win+lose+')',2500);
  //  $('#member .member'+win+' .bscore').html(data.win.dqjf);
  // $('#member .member'+lose+' .bscore').html(data.lose.dqjf);
}


function jibiover(data){
    $('#jinbi .member'+data).remove();
}


function jibichange(data){
    for(var i=0;i<data.length;i++){
        var jifenxx=data[i];
        var userindex=jifenxx.index-index-(-1);
        if(userindex<=0){
            userindex=userindex-(-12);
        }
        var html='<div class="memberScoreText'+userindex+'" data-dqjf="'+jifenxx.dqjf+'" data-index="'+userindex+'"></div>';
        $('#memberScoreText1').append(html);   
     var fx=jifenxx.fx; 
    }
   if(fx==0){
        setTimeout('jibiover2()',6000);
    }
    else{
        setTimeout('jibiover2()',3500);
    }
}
function jibiover2(){
    clearmemberBull();
    clearmemberTimesText();
    $('#memberScoreText1 div').each(function(){
        var userindex=$(this).attr('data-index');
        var $bscore = $('#member .member'+userindex+' .bscore');
        var dqjf=parseInt($(this).attr('data-dqjf'));
      	var credits = parseInt($bscore.data("credits"));
        var lsjf=parseInt($bscore.data("dqjf"));
        var mode = parseInt($bscore.data("mode"));
		$bscore.html((mode == 1 ? credits : 0) + dqjf).data("dqjf", dqjf);
        if(dqjf-lsjf>0){
            $(this).html('<label class="shiren-memberScoreText2"  style="display: block;">+'+(dqjf-lsjf)+'</label>');
        }
        else{
            $(this).html('<label class="shiren-memberScoreText1"  style="display: block;">'+(dqjf-lsjf)+'</label>');
        }
    })
    $('.cardDeal').html('');
    $('.cardOver').html('');
    $('.myCards').hide();
    $('.myCards').eq(0).html(' <div class="cards3D"><div class="cards card0" style="display: none;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card1" style="display: none;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card2" style="display: none;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card3" style="display: none;" ><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card4" style="display: none;" ><div class="face front"></div> <div class="face back cardundefined"></div></div></div>')
    $('.myCards').eq(1).html('<div class="cards card00" style="left: 34%;" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card01" style="left: 40%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card02" style="left: 46%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card03" style="left: 61%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card04" style="left: 68%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div>');
    $('.myCards').eq(2).html('<div class="cards card00" style="left: 33%;" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card01" style="left: 42%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card02" style="left: 51%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card03" style="left: 60%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card04" style="left: 69%;"><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div>');
    $('#memberScoreText1').show();
}



function initroom(){
    
    $('.cardDeal').html('');
    $('.cardOver').html('');

    $('.myCards').hide();
    $('.myCards').eq(0).html(' <div class="cards3D"><div class="cards card0" style="display: none; transition: left 1s;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card1" style="display: none;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card2" style="display: none;"><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card3" style="display: none;" ><div class="face front"></div> <div class="face back cardundefined"></div></div> <div class="cards card4" style="display: none;" ><div class="face front"></div> <div class="face back cardundefined"></div></div></div>')
    $('.myCards').eq(1).html('<div class="cards card00" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card01" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card02" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card03" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card04" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div>');
    $('.myCards').eq(2).html('<div class="cards card00"  ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card01" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card02" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card03" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div> <div class="cards card04" ><div class="face back cardundefined" style="transform:rotateY(0deg);-ms-transform:rotateY(0deg);-moz-transform:rotateY(0deg);-webkit-transform:rotateY(0deg);-o-transform:rotateY(0deg);"></div></div>');
    
    
    $('#memberScoreText1').html('');
    $('#memberScoreText1').hide();
    $('.shiren-background1').hide();
    $('.shiren-background2').hide();
    clearmemberBull();
    clearmemberTimesText();
    clearmemberRobText();
   $('.member1 .ready').hide();
    operationButton('8');
    send('guanzhanupdate',{});

}
function zhunbei(){
    send('zhunbei',{});
    operationButton('9');
}
function xianxz(zt){
    var time=Math.ceil(new Date()/1000)-timewc;
    send('xianxz',{bs:zt,time:time});
    showxian({index:index,zt:zt});
    operationButton('-1');
}
function showxian(data){
    var msgxx={};
    var mp3xx='';
    if(data.index==index){
        operationButton('-1');
    }
    msgxx.index=data.index;
    msgxx.img='/app/img/X-'+data.zt+'.png';
    showmemberTimesText(msgxx);
    mp3xx='xia'+data.zt;
    mp3play(mp3xx);
}
function qbank(zt,type){
    if(fapaizt==1){
        return false;
    }
    var time=Math.ceil(new Date()/1000)-timewc;
    send('qbank',{zt:zt,time:time,type:type});
    qbankshow({zt:zt,type:type})
}
function qbankshow(data){

    if(isguanzhan==1)
    {
        return;
    }
    var html='';
    var bankwz='';
    var mp3xx='';
    if(data.type==1){
        bankwz='go';
    }
    else{
        bankwz='rob';
    }
    if(data.zt){
        if(data.type==4){
            html+='<div id="jiurenniuniu-qiangzhuangs" class="jiurenniuniu-qiangzhuangs" style="display: block">'
            html+='<img class="jiurenniuniu-qiangzhuangs-img" src="/app/img/bull9/bull_text_'+bankwz+'.png">'
            html+='</div><div id="jiurenniuniu-qiangzhuangs" class="jiurenniuniu-qiangzhuangs" style="display: block;width: 17px;left: 190px;height: 17px;top: 28px;">'
            html+='<img class="jiurenniuniu-qiangzhuangs-img" src="/app/img/X-'+data.zt+'.png"></div>'
        }
        else{
            html+='<div id="jiurenniuniu-qiangzhuangs" class="jiurenniuniu-qiangzhuangs" style="display: block;">'
            html+='<img class="jiurenniuniu-qiangzhuangs-img" src="/app/img/bull9/bull_text_'+bankwz+'.png"></div>'
        }
        mp3xx='qiangzhuang';
    }
    else{
        html+='<div id="jiurenniuniu-qiangzhuangs" class="jiurenniuniu-qiangzhuangs" style="display: block;">';
        html+='<img class="jiurenniuniu-qiangzhuangs-img" src="/app/img/bull9/bull_text_not'+bankwz+'.png"></div>';
        mp3xx='buqiang';
    }
     $('#operationButton').html(html);
     mp3play(mp3xx);
}
function qbankshowother(data){
    var msgxx={};
    var bankwz='';
    var mp3xx='';
    msgxx.index=data.index;
    if(data.type==1){
        bankwz='go';
    }
    else{
        bankwz='rob';
    }
    if(data.zt){
        if(data.type==4){
            msgxx.img='/app/img/X-'+data.zt+'.png';
            showmemberTimesText2(msgxx);
            msgxx.img='/app/img/bull9/bull_text_'+bankwz+'.png';
            showmemberRobText2(msgxx);
        }
        else{
            msgxx.img='/app/img/bull9/bull_text_'+bankwz+'.png';
            showmemberRobText(msgxx);
        }
        mp3xx='qiangzhuang';
    }
    else{
        msgxx.img='/app/img/bull9/bull_text_not'+bankwz+'.png';
        showmemberRobText(msgxx);
        mp3xx='buqiang';
    }
    mp3play(mp3xx);
}

function overroom(data){


    overzt=0;
    $('#table').hide();
    var c=document.getElementById("myCanvas");
    var ctx=c.getContext("2d");

    var img=new Image()
    var img1=new Image()
    var img2=new Image()
    img.src="/xxx/jst/js12.jpg";
    img1.src="/app/dyj.png";
    //img2.src="bg.png";
   var sj=data;
    img.onload = function(){
        console.log(sj);
        ctx.drawImage(img,0,0,800,1297);
        ctx.drawImage(img1,140,315,50,60);
        //ctx.drawImage(img1,87,156,50,34)
        //ctx.drawImage(img2,87,193,50,34)
        var time1=sj.time.substring(0,sj.time.length-3);
        ctx.font = "22px 微软雅黑";
        ctx.fillStyle = "#d8cb66";
        ctx.fillText("房间号:"+sj.id, 175,295);
        ctx.fillText(time1, 375, 295);
        ctx.fillText(sj.zjs+"局", 575, 295);

        /*ctx.font = "27px 微软雅黑";
        ctx.fillStyle = "black";
        var writeContent = fangzhu.skinname+'房主 ：'+fangzhu.nickname;
        var writeLeft = (c.width-ctx.measureText(writeContent).width)/2;
        ctx.fillText(writeContent,writeLeft,345);*/

        for(var i=0;i<sj.user.length;i++){
            if(i>1){
                ctx.fillStyle = "#19170b";
                ctx.fillRect(140,445-(0-(i-2)*60.5),521,57);
            }
            var user=sj['user'][i];
            ctx.font = "32px 微软雅黑";
            ctx.fillStyle = "#d8cb66";
            //ctx.fillText(user.id, 175, 365+(i*60));
            ctx.fillText(decode64(user.nickname).substring(0,9), 200, 365+(i*60));
            if(user.dqjf>0){
                user.dqjf='+'+user.dqjf;
            }else{
                ctx.fillStyle = "#fff";
                //ctx.fillText(user.id, 175, 365+(i*60));
                ctx.fillText(decode64(user.nickname).substring(0,9), 200, 365+(i*60));
                ctx.fillText(user.dqjf, 550, 365+(i*60));
            }
            ctx.fillText( user.dqjf, 550, 365+(i*60));
        }
        var dataURL = c.toDataURL();
        $('#overtime').html('<div onclick="location.href=\'/index.php/portal/user/index.html\'" style="z-index: 9999;position: absolute;width: 28%;height: 6%;bottom: 7%;right: 1428255%;" ></div><div style="background: #000;width: 100%;height: 100%;position: absolute;z-index: 200;""></div> <img src="'+dataURL+'" style="width: 100%;height:100%;position: absolute;z-index: 201;">')
        $('#overtime').show();
    }
}


function msgshow(data){
      var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-12);
    }
    mp3play(data.mp3);
       var html='<div class="messageSay messageSay'+indexuser+'" ><div id="fj-kjyy">'+data.msg+'</div> <div class="triangle"></div></div>'
      $('#messageSay').append(html);
      setTimeout(function(){
            console.log(indexuser);
            $('.messageSay'+indexuser).remove();
      },1500);
}



function operationButton(data){
   
  if(isguanzhan==1)
    {
        $("#zb").hide();
        return;
    }
  
  var html='';
    if(data=='1'){
        html+='<div class="operationButton-3-zt" id="jiurenqz" style="display: inline-block;" onclick="qbank(1,1)">'
        html+='                        <img class="operationButton-3" src="/app/img/bull9/bull_button_orange.png">'
        html+='                        <div class="operationButton-3-ts" >'
        html+='上庄'
        html+='                        </div>'
        html+='                       </div>'
        html+='                       <div class="operationButton-4-zt" id="jiurenbqz" style="display: inline-block;" onclick="qbank(0,1)">'
        html+='                        <img class="operationButton-gg01" src="/app/img/bull9/bull_button_blue.png"> '
        html+='                        <div class="operationButton-3-ts" >'
        html+='不上'
        html+='                        </div>'
        html+='                       </div>'
    }
    if(data=='2'){
        html+='<div class="divCoin divCoin1" style="display: inline-block;'
        html+='            z-index: 200;" onclick="qbank(1,4)">'
        html+='             <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div class="operationButton-gg3">'
        html+='               1倍'
        html+='             </div>'
        html+='             </div> '
        html+='             <div class="divCoin divCoin2" style="display: inline-block;'
        html+='            z-index: 200;" onclick="qbank(2,4)">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               2倍'
        html+='              </div>'
        html+='             </div> '
        html+='             <div class="divCoin divCoin3" style="display: inline-block;'
        html+='           z-index: 200;" onclick="qbank(4,4)">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               4倍'
        html+='              </div>'
        html+='             </div> '
        html+='             <div class="divCoin divCoin4" style="display: inline-block;'
        html+='            z-index: 200;" onclick="qbank(0,4)">'
        html+='              <img src="/app/img/bull9/bull_times_bg_blue.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               不抢'
        html+='              </div>'
        html+='             </div> '
    }
    if(data=='3'){
        html+='<div class="operationButton-3-zt" id="jiurenqz" style="display: inline-block;" onclick="qbank(1,2)">'
        html+='                      <img class="operationButton-3" src="/app/img/bull9/bull_button_orange.png">'
        html+='                      <div class="operationButton-3-ts" >'
        html+='                       抢庄'
        html+='                      </div>'
        html+='                     </div>'
        html+='                     <div class="operationButton-4-zt" id="jiurenbqz" style="display: inline-block;" onclick="qbank(0,2)">'
        html+='                      <img class="operationButton-gg02" src="/app/img/bull9/bull_button_blue.png">' 
        html+='                      <div class="operationButton-gg1" >'
        html+='                       不抢'
        html+='                      </div>'
        html+='                     </div>';
    }
    if(data=='4'){
        html+='<div class="divCoin divCoin1" style="display: inline-block;'
        html+='            z-index: 200;" onclick="xianxz(' + window.beishu[0] + ');">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div class="operationButton-gg3">'
        html+='                ' + window.beishu[0] +  '倍'
        html+='              </div>'
        html+='             </div> '
        html+='             <div class="divCoin divCoin2" style="display: inline-block;'
        html+='            z-index: 200;" onclick="xianxz(' + window.beishu[1] + ');">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               ' + window.beishu[1] +  '倍'
        html+='              </div>'
        html+='             </div> '
        html+='             <div class="divCoin divCoin3" style="display: inline-block;'
        html+='            z-index: 200;" onclick="xianxz(' + window.beishu[2] + ');">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               ' + window.beishu[2] +  '倍'
        html+='              </div>'
        html+='             </div>' 
        html+='             <div class="divCoin divCoin4" style="display: inline-block;'
        html+='            z-index: 200;" onclick="xianxz(' + window.beishu[3] + ');">'
        html+='              <img src="/app/img/bull9/bull_times_bg1.png"  class="operationButton-gg11"  /> '
        html+='              <div  class="operationButton-gg3"  >'
        html+='               ' + window.beishu[3] +  '倍'
        html+='              </div>'
        html+='             </div>';
    }
    if(data=='5'){
        html+='<div class="gongg" style="display: block;">等待闲家下注</div>';
    }
    if(data=='6'){
        html+='<div class="gongg" style="display: block;">点击牌面翻牌</div>';
    }
    if(data=='7'){
        html+='<div class="operationButton-1-zt" id="jiurenbqz" style="display: inline-block;" onclick="tanpaime();">';
        html+='<img class="operationButton-gg" src="/app/img/bull9/bull_button_blue.png"  /> ';
        html+='<div   class="operationButton-gg1"  style="width: 100%;">';
        html+='摊牌';
        html+='</div>';
        html+='</div>';
    }
    if(isguanzhan==0)
    {
        if(data=='8'){
        html+='<div class="operationButton-1-zt" id="zb" style="display: inline-block;" onclick="zhunbei();">';
        html+='<img class="operationButton-gg11" src="http://lelefile3.zhenglvyou.com/files/images/common/ready_button.png"  /> ';
        html+='<div   class="operationButton-gg111"  style="width: 100%;">';
        html+='';
        html+='</div>';
        html+='</div>';
        }
    }

    if(data=='9'){
        html+='<div class="operationButton-2-zt"><img id="zbs" class="operationButton-2" src="/app/img/bull9/ready.png" style="display:block;"></div>';
    }

$('#operationButton').html("");
    if(data==4 || data==3 || data==2 || data==1){
        setTimeout(function () {
            $('#operationButton').html(html);
        }, 1200);
    } else {
        $('#operationButton').html(html);
    }
}

function divRobBankerText(data){
    var html='';
    if(data=='0'){
        html+='准备开始';
    }
    if(data=='1'){
        html+='上庄';
    }
    if(data=='2'){
        html+='抢庄';
    }
    if(data=='3'){
        html+='闲家下注';
    }
    if(data=='4'){
        html+='等待摊牌';
    }
    if(data=='5'){
        html+='等待结束';
    }
    $('#divRobBankerText').html(html);
}</script>
  <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>
  <script src="/app/js/clipboard.min.js"type="text/javascript"></script>

  
  
  
  
  
  
  
 <style>
  .watch .mainPart{position: absolute;top: 42%;left: 50%; z-index: 100; margin-left:-22.5vh ;width: 45vh;background:url("http://lelefile3.zhenglvyou.com/files/images/guest/back.png");background-size:100% 100%;border-radius: 1.5vh; height: 59vh;margin-top: -29.5vh}
.watch .mainPart .watchCancel{width: 5vh;height:5vh;top:-1.4vh;right:-1.5vh;position: absolute;}  		
.watch .mainPart .watchTitle{width: 22vh;height:6.8vh;top:-1.4vh;left:11.5vh;position: absolute;}  		
.watch .mainPart .playerList{position: absolute;line-height: 3.5vh;font-size: 2.5vh;width: 39vh;left:50%;margin-left:-20vh;top:6.6vh;background: #311d40;padding: 1vh .5vh;border-radius:1.5vh;height: 42vh;overflow: scroll;}
.watch .mainPart .playerItem{background:#725399;height: 6.55vh;margin-bottom: .5vh;border-radius: .5vh;position: relative; }
.watch .mainPart .playerItem .playerAvatar{position: absolute;width: 5vh;height: 5vh;border-radius: 2.5vh;border: .1vh solid yellow;left: 1.5vh;top: .78vh; }
.watch .mainPart .playerItem .playerName{position: absolute; color: #fff;  font-size: 2.4vh;line-height: 6.6vh;height: 6.6vh;max-width: 43vw;top: 0;left: 8vh;overflow: hidden;}
.watch .mainPart .playerItem .playerIcon{position: absolute;right: 3vh;width: 3vh;height: 3vh;top:1.78vh}

.watch .mainPart .buttonMiddle{ position: relative;}

.watch .mainPart .joimwatch{width: 18.5vh;height:6vh;top:51.5vh;left:13vh;position: absolute;}
.watch .mainPart .joingame{width: 18.5vh;height:6vh;top:51.5vh;left:13vh;position: absolute;}
</style>
              
                <img id="watch-game" src="http://goss.fexteam.com/files/images/h5watch/watchText.png" style="display: none; position: fixed; z-index: 100; width: 40%; left: 30%; top: 66.5%;">
                <div id="watch-list" class="watch" style="display: none;">
                   <div class="watchBack"></div>
                   <div class="mainPart">
                       <img src="http://goss.fexteam.com/files/images/h5watch/quit.png" class="watchCancel" onclick="public('watch-list')">
                       <img src="http://goss.fexteam.com/files/images/h5watch/title.png" class="watchTitle">
                       <div class="playerList"><div class="playerItem">
                                  <img src="" class="playerAvatar">
                                  <div class="playerName">吾爱永久QQ8790766</div>
                                  <img src="/app/images/guanzhan/icon.png" class="playerIcon">
                              </div></div>
                       <div class="buttonMiddle">
                           <img src="http://goss.fexteam.com/files/images/h5watch/watchTrue.png" class=" joimwatch" id="joimwatch" onclick="joinguanzhanChange()" style="display: none;">
                           <img src="http://goss.fexteam.com/files/images/h5watch/joinWatchTrue.png" class=" joingame" id="joingame" onclick="joinroomChange()" style="display: none;">
                       </div>
                   </div>
               </div>
              
              
                 <script>
                  
                    function showguanzhan()
                    {
                        send("guanzhanlist",{});
                    }
              
              
                    function joinguanzhanChange()
                    {
              
                       
                      
                       send("exitgame",{});
                      // websocket.close();
                    
                    }
              
                    function exitlookgamesuccess()
                    {
                            
                            //index = undefined;
                            token='<?php echo ($token); ?>';
                            room='<?php echo ($room["id"]); ?>';
                            isguanzhan = 0;
              
                          $("#watch-list").hide();
                           $("#member").html("");
                           $("#watch-game").hide();
                            send('init',{token:token,room:room,isguanzhan:0});
                    
                    }
              
                    function exitgamesuccess()
                    {
                      //index = undefined;
                      $("#watch-list").hide();
                      $("#member").html("");
                       // initroom();
                       
                       token='<?php echo ($token); ?>';
                       room='<?php echo ($room["id"]); ?>';
                       isguanzhan = 1;
                       $("#watch-game").show();
                       send('init',{token:token,room:room,isguanzhan:1});
                    }
              
                    function joinroomChange()
                    {
                   
                      //initroom();
                      send("exitlookgame",{});
                      // send("exitlookgame","{}");
                     // send("close",{});
                      // websocket.close();
              
                    }
              
                    $(function(){
                       // $("#watch-list .watchCancel").hide();
                    })
              
                    function guanzhanlist(data)
                    {
              
                      $("#joimwatch").hide();
                        $("#joingame").hide();
                       $("#watch-list").show();
                          var html = "";
                          $(data.plys).each(function(){
                                html += "<div class=\"playerItem\">\
                                  \<img src=\""+this.img+"\" class=\"playerAvatar\">\
                                  \<div class=\"playerName\">"+decode64(this.nickname)+"</div>\
                                  \<img src=\"/app/images/guanzhan/icon.png\" class=\"playerIcon\">\
                              </div>";
              
                              console.log(this);
              
                          });
              
                          $("#watch-list .playerList").html(html);
              
              
                       
              
                          
                         
              
                          if(Number(data.zt)==1)
                          {
                            $("#joimwatch").hide();
                            $("#joingame").hide();
                            return;
                          }
                          if(Number(data.cstatus)<=2)
                          {
              
                            if(isguanzhan==1)
                            {
                            
                              $("#joingame").show();
                              $("#joimwatch").hide();
              
                                
                                console.log("观战中...");
                            }
                            else
                            {
                              $("#joimwatch").show();
                                $("#joingame").hide();
                                console.log("游戏中...");
                            }
              
                              console.log("状态是..."+data.cstatus);
                                
                          }
              
                        
                    }
    
                   
                    
     function guanzhanupdate(data)
      {

        	$(".watchzt").hide();
             $(data.plys).each(function(){
                  

                console.log(this);
              	
               $("#user"+this.id+" .watchzt").show();

            });

          
      }
     
     function removeuser3(data){
   		 var indexuser=data-index-(-1);
    	if(indexuser<=0){
        	indexuser=indexuser-(-6);
    	}
       	$(".member" + indexuser + ' .watchzt').hide();
        $('.member'+indexuser+' .onlinezt').show();
        $('.member'+indexuser+' .isReady').hide();
      
     }
                </script>

 <img src="/app/bg.png" style="display: none">
<img src="/app/dyj.png" style="display: none">
    <div id="overtime" style="display: none">
    <canvas id="myCanvas" width="800" height="1297" style="display: none"></canvas>
    </div>
<?php $fangzhu=M('user')->find($room['uid']); ?>
 <script type="text/javascript">
<?php $bslist[1]=array("1","2","4","5"); $bslist[2]=array("1","3","5","8"); $bslist[3]=array("2","4","6","10"); $bs= json_encode($bslist[$room['bs']]); ?> 
   
	 window.beishu = JSON.parse('<?php echo ($bs); ?>');	
      window.fangzhu = {
          "nickname" : "<?php echo ($fangzhu["nickname"]); ?>",
          "skinname" : "<?php echo ($skin[$fangzhu['password']]); ?>"
      };
  </script>
<?php if($room['endtime'] > 0): $mapxx=array(); $mapxx['uid']=$user['id']; $mapxx['room']=$room['id']; if(M('user_room')->where($mapxx)->find()){ ?>
    <script type="text/javascript">
        var data={};
        data.id=<?php echo ($room['roomid']); ?>;
        data.zjs=<?php echo ($room['zjs']); ?>;
        data.time='<?php echo (date("Y-m-d H:i:s",$room['time'])); ?>';
        data.user=<?php echo ($room['overxx']); ?>;
        <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ $nickname=base64_encode(usernickname($value[id])); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } $fangzhu=M('user')->find($room['uid']); ?>
        data.fangzhu=[];
        data.fangzhu.nickname='<?php echo ($fangzhu["nickname"]); ?>';
        overroom(data);
    </script>

   <?php } else{ ?>
  <script type="text/javascript">
    document.title = '温馨提示';
  </script>
  <div id="valert2" class="alert">
   <div class="alertBack" style="opacity: 1;"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">房间已经关闭</div> 
     
     
   </div>
  </div>
  <?php } exit(); endif; ?>


<?php if($fzuser['sfgl'] && (!$mayuser[$user['id']])): ?><script type="text/javascript">
    document.title = '温馨提示';
  </script>
<div id="valert2" class="alert">
   <div class="alertBack" style="opacity: 1;"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">无法加入，请联系管理员。</div> 
     
     
   </div>
  </div>

  <?php exit(); endif; ?>
      <div class="roomCard">
   <img src="/xxx/img/fk.png" /> 
    <div class="num">
     <div class='shier-fk'></div> 
    <div class='shier-fk-1' id="fknum"><?php echo ($user['id']); ?></div>  
    </div>
   </div>

  
   <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/tab_bottom.png" alt="" class="tabBottom" /> 
    <div class="round jiurenniuniu-round" style="" id="jsxx">
    <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?>局
   </div> 
<style>    
#room_str{position:fixed;top:-300px;}
.copyUrl{position: fixed;top: 30px;right: 10px;width: 65px;height: 26px;z-index: 99999;border: none;background:  url(http://lelefile3.zhenglvyou.com/files/images/copy/copyicon.png);background-size: 100%;}
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
<textarea id="room_str" value=""> 12人牛牛<?php echo ($room["roomid"]); ?>号房间
进房链接：http://<?php echo ($_SERVER['HTTP_HOST']); ?>/yy/index/<?php echo ($room["id"]); ?></textarea>
<textarea id="copyUrl" value=""></textarea>
<div class="attention" style="display: none;">
<div class="attentionBackgroundB"></div> 
<img src="http://goss.fexteam.com/files/images/center/alert1.png"> 
<div class="attentionTextB">复制成功</div>
</div>
<div class="copyUrl" data-clipboard-action="copy" data-clipboard-target="#copyUrl">  
</div>
    <div id= "btn" data-clipboard-text="1">
   </div> 
 <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/btn_game_home.png" class="return"  onclick="opnemm('fangjian_fanhuisy','tishi')" /> 
   <img src="/app/images/guanzhan/guest_bull91.png" class="return jiurenniuniu-return" style="right:28.5vh"  onclick="showguanzhan()"/> 
   <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/btn_game_rule.png" class="bGameRule shier-bGameRule" onclick="opnemm('fangjian_gz','vroomRule')" /> 

   <div class="myCardTypeBG"></div> 
   <div class="myCardType" style="overflow: hidden;">
    <div id="df" style="
    overflow: hidden;
">
     底分：<?php echo ($room["df"]); ?>
    </div>
   </div> 
   <div class="bottomMessage"  onclick="opnemm('fangjian_kj','message')">
    <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/bull_message.png" class='shier-bottomMessage-img'  />
   </div> 
   <div class="bottomHistory shier-bottomHistory" onclick="opnemm('fangjian_yinyue','vaudioRoom')">
    <img class='shier-bottomHistory-img' src="/app/img/common/icon_sound91.png"/>
   </div> 

  <div id="messageSay">
  </div>
  <div id="tishi" class="alert" style="display: none;"></div>   
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="
    display: none;overflow: hidden;
"></div> 

   <div id="table" class="table">
    <img src="http://qq8790766.cdn.bcebos.com/app/img/bull12/back.jpg" class="tableBack" /> 
    <img src="/52/<?php echo isset($zhuti_list[$user['password']])?$zhuti_list[$user['password']]:$zhuti_list['xx'];?>" class="tableBack"  style="width: 150px; height: 46px; position: fixed; top: 50%; left: 50%; margin-left: -75px; margin-top: -23px; opacity: 0.9;">

    <div class="cardDeal" id="userfp"></div> 


     <div class="myCards" style="display: none;"></div>


  <div class="myCards" style="display: none;"></div>

 <div class="myCards" style="display: none;"></div>



    <div class="cardOver" style="position: absolute; width: 100%; height: 100%; overflow: hidden;"></div> 

    <div id="memberTimesText"></div> 
    <div id="memberTimesText2"></div> 
    
    <div id="memberRobText"></div>
    <div id="memberFreeRobText"></div>
    <div id="memberBull"></div>
    

    <div id="memberScoreText1"></div>
    
    <div id="member"></div> 


    <div id="jinbi"></div> 


    <div>
      <div class="triangle"></div>
    </div>


    <div id="divRobBankerText" class='shier-qiangzhuang'></div> 
    <div id="" class="clock shier-clock">
     <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/bull_clock.png" class='shier-memberCoin' /> 
     <p id='djs' class='shier-clock1'> 10 </p>
    </div> 

    <div id="operationButton" style="top:68%;">
    </div>

    <div class='gongg' style="display: none">
    </div>
    
    </div>
<script>
function joinguanzhan()
{

isguanzhan = 1;
    $("#valert").remove();
    $("#valert2").remove();
    token='<?php echo ($token); ?>';
    room='<?php echo ($room["id"]); ?>';
    var dkxx='<?php echo ($room["dk"]); ?>';
   load('show');
   if(dkxx){
    connect(dkxx,1);
    $("#watch-game").show();
  }
  else{
    load('hide');
    prompt('服务器没开启,请稍后再试');
    setTimeout("$('body').hide()",3000);
  }
    
}

    function joinroom(){
        isguanzhan = 0;
      $("#valert").remove();
      token='<?php echo ($token); ?>';
      room='<?php echo ($room["id"]); ?>';
      var dkxx='<?php echo ($room["dk"]); ?>';
     load('show');
     if(dkxx){
      connect(dkxx,0);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    }
</script>
   <!--满人弹框-->
  <?php if(count($room['userlist']) >= 12 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div>
    <img src="http://qq8790766.cdn.bcebos.com/app/fw_icon.png" style="position: absolute;right: 39vw;top: 18vw;height: 17.5vw;width: 21vw; z-index: 99;">
     <?php if($user["security_code"] == ''): ?><div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 4.5vw;text-align: center;color:	#FFFFFF;font-weight: bold;"><?php echo ($user['id']); ?></div>
<?php else: ?>
       <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#fff;font-weight: bold;">    <?php echo ($user['security_code']?$user['security_code']:$user['id']); ?></div><?php endif; ?> 
   <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 22.5vw;z-index: 999;font-size: 3.5vw;text-align: center;color:#EBEBEB;font-weight: bold;">防伪码</div></div>
   <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -130.365px;">
    <div class="backImg">
     <div class="blackImg" style=" height:77%;"></div>
    </div> 
    <div class="alertText" style="top: 5vh;">
     <div class="rull" style="font-size: 2.2vh;line-height:3.5vh;">      
      <?php if($room['df']): ?>底分：
      <a><?php echo ($room['df']); ?></a> 
      <br /><?php endif; ?>
      <?php if($room['gz']): ?>规则： 
      <a><?php echo ($room['gz']); ?></a> 
      <br /><?php endif; ?> 
      <?php if($room['px']): ?>牌型： 
      <a><?php if(is_array($room['px'])): foreach($room['px'] as $key=>$one): echo ($one); endforeach; endif; ?></a> 
      <br /><?php endif; ?> 

      <?php if($room['sz']): ?>上庄： 
      <a><?php echo ($room['sz']); ?></a> 
      <br /><?php endif; ?> 
            
       局数： 
      <a><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </a> 
      <br />
     
      <?php if($bs): ?>倍数： 
  <?php $bstan[1]='1,2,4,5'; $bstan[2]='1,3,5,8'; $bstan[3]= '2,4,6,10'; $bb=($bstan[$room['bs']]); ?> 
      <a><?php echo ($bb); ?></a> 
      <br /><?php endif; ?> 

     </div> 
     <div style="margin-bottom: 13vh;       
    position: relative;">      
      房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
     </div>
    </div> 
    
<div style="position: relative;
    width: 100%;
    height: 5vh;
        top: -2vh;">
     <div class="buttonLefttt" onclick="joinguanzhan()" style="    top: 1vh;
    bottom: 0;
    margin: auto;">
      
     </div> 

     <div class="buttonRighttt"  style="   top: 1vh;
    bottom: 0;
    margin: auto;">
      
     </div>

   </div>
  </div>
 </div>
    
  <?php exit(); endif; ?>
<!--进房弹窗-->
<?php if(!$room['userlist'][$user['id']]): ?><div id="valert" class="alert">
   <div>
   <img src="http://qq8790766.cdn.bcebos.com/app/fw_icon.png" style="position: absolute;right: 39vw;top: 18vw;height: 17.5vw;width: 21vw; z-index: 99;">
     <?php if($user["security_code"] == ''): ?><div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 4.5vw;text-align: center;color:	#FFFFFF;font-weight: bold;"><?php echo ($user['id']); ?></div>
<?php else: ?>
       <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#fff;font-weight: bold;">    <?php echo ($user['security_code']?$user['security_code']:$user['id']); ?></div><?php endif; ?> 
   <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 22.5vw;z-index: 999;font-size: 3.5vw;text-align: center;color:#EBEBEB;font-weight: bold;">防伪码</div></div>
 <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -130.365px;">
    <div class="backImg">
     <div class="blackImg" style=" height:77%;"></div>
    </div> 
    <div class="alertText" style="top: 5vh;">
     <div class="rull" style="font-size: 2.2vh;line-height:3.5vh;">     
      <?php if($room['df']): ?>底分：
      <a><?php echo ($room['df']); ?></a> 
      <br /><?php endif; ?>
      <?php if($room['gz']): ?>规则： 
      <a><?php echo ($room['gz']); ?></a> 
      <br /><?php endif; ?> 
      <?php if($room['px']): ?>牌型： 
      <a><?php if(is_array($room['px'])): foreach($room['px'] as $key=>$one): echo ($one); endforeach; endif; ?></a> 
      <br /><?php endif; ?> 

      <?php if($room['sz']): ?>上庄： 
      <a><?php echo ($room['sz']); ?></a> 
      <br /><?php endif; ?> 
     
       局数： 
      <a><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </a> 
      <br />
     
       <?php if($bs): ?>下注： 
  <?php $bstan[1]='1/2/4/5倍'; $bstan[2]='1/3/5/8倍'; $bstan[3]= '2/4/6/10倍'; $bb=($bstan[$room['bs']]); ?> 
      <a><?php echo ($bb); ?></a> 
      <br /><?php endif; ?>      
     </div> 
     <div style="margin-bottom: 13vh;       
    position: relative;">      
      <?php if(!empty($room['userlist'])): ?>            
      房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
      <?php endif; ?>
     </div>
    </div> 
    
<div style="position: relative;
    width: 100%;
    height: 5vh;
        top: -2vh;">
     <div class="buttonLeftt" onclick="joinguanzhan()" style="    top: 3vh;
    bottom: 0;
    margin: auto;">
      
     </div> 

     <div class="buttonRightt" onclick="joinroom()" style="   top: 3vh;
    bottom: 0;
    margin: auto;">
      
     </div>

   </div>
  </div> 
</div>
<?php else: ?>
<script>
  joinroom();
</script><?php endif; ?> 







<audio onended="mp3playandpause('1miao');" id="1miao" src="/app/video/1miao.mp3"></audio>
<audio onended="mp3playandpause('mp3niu0');" id="mp3niu0" src="/app/video/nan_niu0.mp3"></audio>
<audio onended="mp3playandpause('mp3niu1');" id="mp3niu1" src="/app/video/nan_niu1.mp3"></audio>
<audio onended="mp3playandpause('mp3niu2');" id="mp3niu2" src="/app/video/nan_niu2.mp3"></audio>
<audio onended="mp3playandpause('mp3niu3');" id="mp3niu3" src="/app/video/nan_niu3.mp3"></audio>
<audio onended="mp3playandpause('mp3niu4');" id="mp3niu4" src="/app/video/nan_niu4.mp3"></audio>
<audio onended="mp3playandpause('mp3niu5');" id="mp3niu5" src="/app/video/nan_niu5.mp3"></audio>
<audio onended="mp3playandpause('mp3niu6');" id="mp3niu6" src="/app/video/nan_niu6.mp3"></audio>
<audio onended="mp3playandpause('mp3niu7');" id="mp3niu7" src="/app/video/nan_niu7.mp3"></audio>
<audio onended="mp3playandpause('mp3niu8');" id="mp3niu8" src="/app/video/nan_niu8.mp3"></audio>
<audio onended="mp3playandpause('mp3niu9');" id="mp3niu9" src="/app/video/nan_niu9.mp3"></audio>
<audio onended="mp3playandpause('mp3niu10');" id="mp3niu10" src="/app/video/nan_niuniu.mp3"></audio>
<audio onended="mp3playandpause('mp3niu11');" id="mp3niu11" src="/app/videoo/bullfour.m4a"></audio>
<audio onended="mp3playandpause('mp3niu12');" id="mp3niu12" src="/app/videoo/nan_wuhua.mp3"></audio>
<audio onended="mp3playandpause('mp3niu13');" id="mp3niu13" src="/app/videoo/bullshunzi.m4a"></audio>
<audio onended="mp3playandpause('mp3niu14');" id="mp3niu14" src="/app/videoo/bulltonghua.m4a"></audio>
<audio onended="mp3playandpause('mp3niu15');" id="mp3niu15" src="/app/videoo/bullhulu.m4a"></audio>
<audio onended="mp3playandpause('mp3niu16');" id="mp3niu16" src="/app/videoo/nan_zha.mp3"></audio>
<audio onended="mp3playandpause('mp3niu17');" id="mp3niu17" src="/app/videoo/bulltonghuashun.m4a"></audio>
<audio onended="mp3playandpause('mp3niu18');" id="mp3niu18" src="/app/videoo/nan_wuxiao.mp3"></audio>

<audio onended="mp3playandpause('mp3daojishi');" id="mp3daojishi" src="/app/video/daojishi.mp3"></audio>
<audio onended="mp3playandpause('mp3gold');" id="mp3gold" src="/app/video/gold.mp3"></audio>
<audio onended="mp3playandpause('mp3kaiju');" id="mp3kaiju" src="/app/video/kaiju.mp3"></audio>
<audio onended="mp3playandpause('mp3xiazhu');" id="mp3xiazhu" src="/app/video/xiazhu.mp3"></audio>
<audio onended="mp3playandpause('fapai');" id="fapai" src="/app/video/audio1.m4a"></audio>

<audio onended="mp3playandpause('message1');" id="message1" src="/app/message/message1.mp3"></audio>
<audio onended="mp3playandpause('message2');" id="message2" src="/app/message/message2.mp3"></audio>
<audio onended="mp3playandpause('message3');" id="message3" src="/app/message/message3.mp3"></audio>
<audio onended="mp3playandpause('message4');" id="message4" src="/app/message/message4.mp3"></audio>
<audio onended="mp3playandpause('message5');" id="message5" src="/app/message/message5.mp3"></audio>
<audio onended="mp3playandpause('message6');" id="message6" src="/app/message/message6.mp3"></audio>
<audio onended="mp3playandpause('message7');" id="message7" src="/app/message/message7.mp3"></audio>
<audio onended="mp3playandpause('message8');" id="message8" src="/app/message/message8.mp3"></audio>
<audio onended="mp3playandpause('message9');" id="message9" src="/app/message/message9.mp3"></audio>
<audio onended="mp3playandpause('message10');" id="message10" src="/app/message/message10.mp3"></audio>
<audio onended="mp3playandpause('message11');" id="message11" src="/app/message/message11.mp3"></audio>


<audio id="background" src="/app/video/background.mp3" ></audio>
<!--下注抢庄-->
<audio onended="mp3playandpause('xia1');" id="xia1" src="/app/video/zhuang/1.mp3"></audio>
<audio onended="mp3playandpause('xia2');" id="xia2" src="/app/video/zhuang/2.mp3"></audio>
   <audio onended="mp3playandpause('xia3');" id="xia3" src="/app/video/zhuang/3.m4a"></audio>
<audio onended="mp3playandpause('xia4');" id="xia4" src="/app/video/zhuang/4.mp3"></audio>
<audio onended="mp3playandpause('xia5');" id="xia5" src="/app/video/zhuang/5.mp3"></audio>
<audio onended="mp3playandpause('xia8');" id="xia8" src="/app/video/zhuang/8.mp3"></audio>
   <audio onended="mp3playandpause('xia10');" id="xia10" src="/app/video/zhuang/10.mp3"></audio>
    <audio onended="mp3playandpause('xia6');" id="xia6" src="/app/video/zhuang/6.m4a"></audio>
<audio onended="mp3playandpause('qiangzhuang');" id="qiangzhuang" src="/app/video/zhuang/qiangzhuang.mp3"></audio>
<audio onended="mp3playandpause('buqiang');" id="buqiang" src="/app/video/zhuang/buqiang.mp3"></audio>

<script>




function over(msg){
  var html='<div id="valert2" class="alert">'; 
  html=html+'<div class="alertBack"></div> '; 
  html=html+'<div class="mainPart" style="height: 32%;margin-top: -113.39px;">'; 
  html=html+'<div class="backImg">'; 
  html=html+'<div class="blackImg" style="height: 65%;"></div>'; 
  html=html+'</div>'; 
  html=html+'<div class="alertText" style="top: 35%;" id="tipmsg">'+msg+'</div>'; 
  html=html+'<div class="buttonzhong" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="fanhui()"></div>'; 
  html=html+'</div>'; 
  html=html+'</div>' ; 
  $('body').html(html);
}
 function fanhui(){
    window.history.back(-1);
  } 
 var overscroll = function(el) {
  el.addEventListener('touchstart', function() {
    var top = el.scrollTop
      , totalScroll = el.scrollHeight
      , currentScroll = top + el.offsetHeight;
    //If we're at the top or the bottom of the containers
    //scroll, push up or down one pixel.
    //
    //this prevents the scroll from "passing through" to
    //the body.
    if(top === 0) {
      el.scrollTop = 1;
    } else if(currentScroll === totalScroll) {
      el.scrollTop = top - 1;
    }
  });
  el.addEventListener('touchmove', function(evt) {
    //if the content is actually scrollable, i.e. the content is long enough
    //that scrolling can occur
    if(el.offsetHeight < el.scrollHeight)
      evt._isScroller = true;
  });
}
document.body.addEventListener('touchmove', function(evt) {
  //In this case, the default behavior is scrolling the body, which
  //would result in an overflow.  Since we don't want that, we preventDefault.
  if(!evt._isScroller) {
    evt.preventDefault();
  }
});

var context = new (window.AudioContext || window.webkitAudioContext)();
var source = [];
var audioBuffer = [];

    function mp3play(id){
      if(id!='background' &&　mp3open==2){
        return false;
      }
        //document.getElementById(id).play();
        if(!audioBuffer[id]){
           loadAudioFile(id);
        }
        if(source[id]){
           if(typeof(source[id].stop)=='function'){
             source[id].stop();
           }
          source[id]=null;
        }
        source[id] = context.createBufferSource();
        source[id].buffer = audioBuffer[id];
        if(id=='background'){
            source[id].loop = true;
        }
        else{
          source[id].loop = false;
        }
        source[id].connect(context.destination);
        source[id].start(0); //立即播放
    }
    function mp3pause(id){
        //document.getElementById(id).pause();
        if (source[id]) {
          source[id].loop = false;
          source[id].stop(); //立即停止
          source[id]=null;
        }
    }

    function mp3playandpause(id){
        mp3play(id);
        mp3pause(id);
    }


function initSound(arrayBuffer,id) {
    context.decodeAudioData(arrayBuffer, function(buffer) { //解码成功时的回调函数
        audioBuffer[id] = buffer;
    }, function(e) { //解码出错时的回调函数
        console.log('Error decoding file', e);
    });
}


function loadAudioFile(id) {
    var url=$('#'+id).attr('src');
    var xhr = new XMLHttpRequest(); //通过XHR下载音频文件
    xhr.open('GET', url, true);
    xhr.responseType = 'arraybuffer';
    xhr.onload = function(e) { //下载完成
        initSound(this.response,id);
    };
    xhr.send();
}


    function audioAutoPlay(id){
        loadAudioFile(id);
    }

function muiscready(){
    audioAutoPlay('mp3niu0');
    audioAutoPlay('mp3niu1');
    audioAutoPlay('mp3niu2');
    audioAutoPlay('mp3niu3');
    audioAutoPlay('mp3niu4');
    audioAutoPlay('mp3niu5');
    audioAutoPlay('mp3niu6');
    audioAutoPlay('mp3niu7');
    audioAutoPlay('mp3niu8');
    audioAutoPlay('mp3niu9');
    audioAutoPlay('mp3niu10');
    audioAutoPlay('mp3niu11');
    audioAutoPlay('mp3niu12');
    audioAutoPlay('mp3niu13');
    audioAutoPlay('mp3niu14');
    audioAutoPlay('mp3niu15');
    audioAutoPlay('mp3niu16');
    audioAutoPlay('mp3niu17');
    audioAutoPlay('mp3niu18');
    audioAutoPlay('background');

    audioAutoPlay('mp3daojishi');
    audioAutoPlay('mp3gold');
    audioAutoPlay('mp3kaiju');
    audioAutoPlay('mp3xiazhu');

    audioAutoPlay('fapai');



    audioAutoPlay('message1');
    audioAutoPlay('message2');
    audioAutoPlay('message3');
    audioAutoPlay('message4');
    audioAutoPlay('message5');
    audioAutoPlay('message6');
    audioAutoPlay('message7');
    audioAutoPlay('message8');
    audioAutoPlay('message9');
    audioAutoPlay('message10');
    audioAutoPlay('message11');


    audioAutoPlay('xia1');
    audioAutoPlay('xia2');
    audioAutoPlay('xia4');
      audioAutoPlay('xia3');
    audioAutoPlay('xia5');
      audioAutoPlay('xia6');
      audioAutoPlay('xia8');
      audioAutoPlay('xia10');
    audioAutoPlay('qiangzhuang');
    audioAutoPlay('buqiang');
if(bgmp3open==1){
setTimeout(function(){
    mp3pause('background');
    mp3play('background');
},2000)
}
 if(bgmp3open==2){
     mp3pause('background');
  }
}

        

// document.addEventListener("WeixinJSBridgeReady", function () {
//           mp3play('background');
// }, false);
// document.addEventListener('YixinJSBridgeReady', function() {
//           mp3play('background');      
// }, false);




function onBridgeReady(){
 WeixinJSBridge.invoke('getNetworkType',{},
    function(e){
        //WeixinJSBridge.log(e.err_msg);
         mp3play('1miao');  
      });
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}


muiscready();
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
      var wrapper = document.getElementById('information');
      var inner = document.getElementById('myInfor');
      var p = document.getElementById('myText');
      var p_w = p.offsetWidth;
      var wrapper_w = wrapper.offsetWidth;
      var leftM = 450;
      window.onload=function fun(){

          setTimeout("fun1()",50);
      }
      function fun1(){
          if(p_w+p_w-100 > wrapper.scrollLeft){
            leftM--;
              wrapper.scrollLeft++;
              $('.myInfor p').css('margin-left',leftM+'px');
              setTimeout("fun1()",50);
          }
          else{
              setTimeout("fun2()",50);
          }
      }
      function fun2(){
          wrapper.scrollLeft=0;
          leftM = 450;
          fun1();
      }

      $(".copyUrl").on('click',function(){

});  
  

</script>


 </body>
         <script>
setTimeout("jzy.style.display='none'",100);
</script>
   	<div style="position: fixed;width:100%;height:100%;top:0;left:0;background: #000;z-index:9999999;" id="jzy">
		<div class="load4">
			<div class="loader">Loading...</div>
		</div>
		<div style="color: #999;position: absolute;bottom: 3vh;text-align: center;font-size: 3vw;width: 100%;">
			抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br>
			适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
		</div>
	</div>
</html>