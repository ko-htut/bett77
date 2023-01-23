<?php if (!defined('THINK_PATH')) exit();?><!--吾爱永久QQ：8790766-->
<!--吾爱微信：8790766-->
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>个人中心</title>
  <link rel="stylesheet" href="/themes/game/Public/css/public.css"> 
  <link rel="stylesheet" href="/app/css/alert-1.1.css"> 
  <link rel="stylesheet" href="/themes/game/Public/css/swiper-3.4.2.min.css"> 
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/bull_vue-1.0.0.css"> 
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/bullalert.css"> 
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/bullshop.css"> 
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/common/alert.css"> 
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes/game/Public/css/testt.css">
   <script type="text/javascript" src="http://uu.235j.cn/uu7/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://uu.235j.cn/uu7/fastclick.js"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="http://uu.235j.cn/uu7/vue.min.js"></script>
<script type="text/javascript" src="http://uu.235j.cn/uu7/vue-resource.min.js"></script>
 <script src="/app/js/clipboard.min.js" type="text/javascript"></script>

  <script src="/themes/game/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes/game/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes/game/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
 </head> 
  

         


  <div  class="main" style="position: absolute;">
<style>    
 .fuzhi {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 109;
    color: #fff;
    font-family: simHei;
}
.fuzhi .fuzhiBack {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.8;
    position: absolute;
}
.fuzhi .fuzhiPart {
    position: relative;
    top: 45%;
    left: 52.5%;
    margin-top: -19vh;
    margin-left: -22.5vh;
    width: 45vh;
    height: 38vh;
}
.fuzhi .fuzhiPart .fuzhiImg {
    position: absolute;
    width: 93%;
    height: 90%;
    border-radius: 1.5vh;
    border: 0.1vh solid #de51f1;
    top: 0;
    left: 0;
    background: #6d4ba8;
}
.fuzhi .fuzhiPart .fuzhiImg .fuzhiiImg {
    position: absolute;
    width: 90%;
    height: 22.5vh;
    line-height: 25vh;
    border-radius: 1.5vh;
    border: 0.1vh solid #ae71cb;
    top: 2.2vh;
    left: 2.2vh;
    background: #190d2d;
} 
.fuzhi .fuzhiPart .alertText {
    position: absolute;
    width: 100%;
    line-height: 3.5vh;
    font-size: 2.2vh;
    width: 36vh;
    left: 46%;
    margin-left: -18vh;
    top: 5.6vh;
    text-align: center;
}  
.fuzhi .fuzhiPart .buttonRight {
    position: absolute;
    width: 100%;
    line-height: 6vh;
    height: 5.6vh;
    font-size: 2.5vh;
    width: 17vh;
    Left: 26%;
    bottom: 5.5vh;
    text-align: center;
    background: url(http://goss.fexteam.com/files/d_1/images/game/button2.png);
    background-size: 100%;
}  

 </style> 
<script>   
function fuzhilianjie(){
	$('#fuzhilianjiee').show();
}
function guanbi(){
	$('#fuzhilianjiee').hide();
}  
</script>    

<div id="fuzhilianjiee" class="fuzhi" style="display: none;">
<div class="fuzhiBack" onclick="guanbi()"></div>
   <div class="fuzhiPart">
    <div class="fuzhiImg">
     <div class="fuzhiiImg"></div>
    </div> 
    <div class="alertText" style="top: 30%;">
该手机号下无其他有房卡的账号 </div> 
 
    <div style="">
     <div class="buttonRight" onclick="guanbi()">
       确定
     </div> 
        
       </div>
  </div>
  
  </div>        
    
    



<!-- 开通管理功能 -->
   <div id="valert" class="alert" style="display: none">
   <div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText">
    <?php if($user[sfgl] == 0): ?>群主功能永久免费开放，是否开启？
 
    <?php else: ?>
    是否关闭群主管理功能？<?php endif; ?>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx()">
      取消
     </div> 
    <?php if($user[sfgl] == 0): ?><div class="buttonRight" onclick="guanli()">
    <?php else: ?>
        <div class="buttonRight" onclick="guanli_no()"><?php endif; ?>
      确定
     </div>
    </div> 
   </div>
  </div>

   <div class='gerenzx-top-zt' >
    <div class='gerenzx-top'>
     <img class='gerenzx-yhimg' src="<?php echo ($user["img"]); ?>" /> 
       <body style="background-color: #0e0226  ">
<div class="gerenzx-yhid" style="z-index: 99;margin-left:0vh;">
ID:<?php echo ($user["id"]); ?>
</div>
     <div class='1gerenzx-yhid'>

     </div>
    </div> 
    <div class='gerenzx-gg' ><?php echo ($user["nickname"]); ?></div> 
    <div class='gerenzx-xg' onclick="shoujibd()" <?php if($user['mobile']): ?>style="display:block"<?php endif; ?>>
      <?php echo ($user["mobile"]); ?>&nbsp;&nbsp;修改 
    </div> 
    <div class='gerenzx-fksl'>
     <div class='gerenzx-fksls'>
       <?php echo ($user["fk"]); ?>张 
     </div> 
     <div class='gerenzx-fk' >
       房卡 
     </div>
    </div>
   </div>

<!--   <div class="sendRedpackage" onclick="opnemm('fangka','fasongfk')"> -->
      <div class="sendRedpackage" onclick="fuzhilianjie()"> 
    <img src="/themes/game/Public/img/activity/rc_icon_sendredpackage.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
   <p style="position: absolute; top: 0px; left: 57.5px; width: 200px; height: 55px; line-height: 55px; color: white; font-size: 12pt;">同步房卡<font style="color: orange; font-size: 11pt;">（找回房卡）</font></p>
   </div> 
   <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/user/fangka');?>'">
    <img src="/themes/game/Public/img/activity/rc_icon_sendredpackage.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">发送房卡</p>
   </div> 
     <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/user/fangka_jl');?>'">
    <img src="/themes/game/Public/img/activity/yx.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">卡包记录</p>
    </div> 
      <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/dashengkaifangchaxun.html');?>'" >
    <img src="/themes/game/Public/img/activity/yx.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p style="position: absolute; top: 0px; left: 57.5px; width: 200px; height: 55px; line-height: 55px; color: white; font-size: 12pt;">游戏记录<font style="color: orange; font-size: 11pt;">（我参与的）</font></p>
   </div> 
   
    <div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" >
    <img src="/themes/game/Public/img/activity/rc_room_search.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p style="position: absolute; top: 0px; left: 57.5px; width: 200px; height: 55px; line-height: 55px; color: white; font-size: 12pt;">开房查询<font style="color: orange; font-size: 11pt;">（我创建的）</font></p>
    </div> 

    <div class="sendRedpackages" onclick="$('#valide-acode').show();">
     <div class="backcolor"></div>
     <img src="http://goss.fexteam.com/files/images/activity/user_scode.png" class="rcIcon">
     <img src="http://goss.fexteam.com/files/images/activity/rc_icon_rightarrow.png" class="rcArrow">
     <p class="rcContent">防伪码设置</p>
   
     <p style="position: absolute; height: 13.75vw; line-height: 13.75vw; right: 10vw; text-align: right; color: #FFD700; font-size: 12pt;font-weight:bold;"><?php echo ($user['security_code']>0?$user['security_code']:$user['id']); ?></p>
 </div>
      <?php if($user['status'] == 1 && strtotime($user['create_time']) > time()): ?><div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/agentlist.html');?>'" >
      <img src="/themes/game/Public/img/activity/rc_group.png" class="rcIcon" /> 
      <img src="/themes/game/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
      <p class="rcContent">控制面板</p>
      </div><?php endif; ?>

   <div class="sendRedpackages" >
    <img src="/themes/game/Public/img/activity/rc_group.png" class="rcIcon" /> 
    <img src="/themes/game/Public/img/activity/998.png" class="rcArrow grzxgl grzxgl2"  onclick="alertgl()" <?php if($user[sfgl] == 0): ?>style="display: none;"<?php endif; ?> /> 
    <img src="/themes/game/Public/img/activity/12345.png" class="rcArrow grzxgl grzxgl3" onclick="alertgl()"  <?php if($user[sfgl] == 1): ?>style="display: none;"<?php endif; ?>/> 
<!--     <p class="rcContent" id='guanlgn' onclick="guanlign()">管理功能</p>  -->
    <p class="rcContent" id='guanlgn'  onclick="location.href='<?php echo U('portal/user/gongnsm');?>'">群主管理</p> 

   </div> 




        <!--*/  -->
<!-- 管理功能显示 -->
   <div class="groupMenuDetail" <?php if($user[sfgl] == 1): ?>style="display: block;"<?php endif; ?>>
   <div class='jiurenyaoqinghan' onclick="location.href='<?php echo U('portal/home/gerenzxyaoqinghan/',array('id'=>$user['id']));?>'">
    <img class='jiurenyaoqinghan-img' src="/themes/game/Public/img/activity/rc_group_invite.png"> <p class='jiuren-fuzhu-p' >邀请函</p>
    </div> 
    <div class='jiurenchengyuan' onclick="location.href='<?php echo U('portal/home/gerenzxchengyuan');?>'" >
    <img class='jiurenchengyuan-img' src="/themes/game/Public/img/activity/rc_group_member.png"> <p class='jiuren-fuzhu-p' >成员</p>
    </div> 
    <!-- <div class='jiurenkaifangchaxun' onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" >
    <img class='jiurenkaifangchaxun-img' src="/themes/game/Public/img/activity/rc_room_search.png"> <p class='jiuren-fuzhu-p' >开房查询</p>
    </div>  -->
    <div class='jiuren-fuzhu'></div> 
    </div>








           

<div id="valide-acode" style="display: none;">
     <div class="phoneMask" style="position: fixed; z-index: 0; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
     <div class="phoneFrame" style="position: fixed; overflow: visible; z-index: 0; width: 90vw; max-width: 90vw; top: 55%; left: 50%; transform: translate(-50%, -60%); background-color: rgb(255, 255, 255); text-align: center; border-radius: 5px; opacity: 1; color: white;"><div style="height: 7vw;"></div> <div style="padding: 1vw; font-size: 6vw; line-height: 6vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
防伪码设置
     </div>
     <div style="height: 6vw;"></div>
         <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white; border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230);">
             <input id="acode-input" type="text" placeholder="输入1-6个数字，字母或汉字" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border-style: solid; border-width: 1px; border-radius: 0.5vh; border-color: rgb(240, 240, 240); background-color: rgb(240, 240, 240); font-size: 4vw; -webkit-appearance: none;">
         </div>
         <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">

 </div>
         <div style="height: 4vw;"></div>
         <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;">
             <div style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: 			#2ec4fc; border-radius: 1vw;" onclick="updateacode();location.reload()">确认</div></div> <div style="height: 12vw;"></div>
         <div style="position: absolute; z-index: 0; width: 11vw; height: 9vw; top: 0%; left: 82%;">
		 
		 
             <img src="/app/x1.png" style="position: absolute; height: 85%; width: 85%;" onclick="$('#valide-acode').hide();"></div>
     </div>
 </div>





<script type="text/javascript">
    function updateacode() {
        var $input = $("#acode-input");
        if(!$input.val().length ) {
            return false;
        }
        $.post("/portal/user/updateacode", {'acode' : $input.val()}, function () {
            $("#valide-acode").hide();
        });
    }
</script>



   <div id="validePhone" style="display: none;">
    <div class="phoneMask" ></div> 
    <div class="phoneFrame">
     <div style="height: 2.2vw;"></div> 
     <!----> 
     <div class='gerenzx-shouji'>
       绑定手机号，房卡可找回。 
     </div> 
     <div  style="height: 2.2vw;"></div> 
     <div class='gerenzx-shouji1' >
      <input class='gerenzx-shouji1-1' type="number" name="phone" placeholder="输入手机号"  onchange="sfphone()" id="phone"/> 
      <div class='gerenzx-shouji1-2' id="authcode">
        发送验证码 
      </div>
     </div> 
     <div class='gerenzx-shouji1-3' >
      <input class='gerenzx-shouji1-4' type="number" name="phone1" placeholder="输入验证码"  id="codexx"/>
     </div> 
     <div style="height: 2.2vw;"></div> 
     <div class='gerenzx-shouji1-5' >
      <div class='gerenzx-shouji1-6' style="background-color:rgb(211, 211, 211)" id="mabangding">
       立即绑定
      </div>
     </div>
     <div style="height: 4vw;"></div>
    </div>
<script type="text/javascript">
    function codedjs(t){
        $('#authcode').html(t);
        if(t<=0){
          $('#authcode').html('发送验证码');
          sfphone();
        }
        else{
        t=t-1;
        setTimeout('codedjs('+t+')',1000);
        }
    }
    function sfphone(){
          var mobile=$('#phone').val();
          if(mobile.length==0) 
         { 
            $('#authcode').css('background-color','rgb(211, 211, 211)');
            $('#authcode').attr('onclick','');
            return false; 
         }     
         if(mobile.length!=11) 
         { 
             $('#authcode').css('background-color','rgb(211, 211, 211)');
            $('#authcode').attr('onclick','');
             return false; 
         } 
          
         var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
         if(!myreg.test(mobile)) 
         { 
             $('#authcode').css('background-color','rgb(211, 211, 211)');
            $('#authcode').attr('onclick','');
             return false; 
         } 

         $('#authcode').css('background-color','rgb(64, 112, 251)');
          $('#authcode').attr('onclick','sendphone()');
    }

    function sendphone(){
           var mobile=$('#phone').val();
            $.post("/index.php/portal/home/sendphone",{mobile:mobile},function(result){
        if(result.status=='1'){
            tipxx('发送成功');
            codedjs('60');
            $('#authcode').attr('onclick','');
            $('#mabangding').css('background-color','rgb(64, 112, 251)');
            $('#mabangding').attr('onclick','mabangding()');
        }
        else{
          tipxx(result.info);
        }
      },'json');
    }
    function mabangding(){
      var mobile=$('#phone').val();
      var code=$('#codexx').val();
      $.post("/index.php/portal/home/mabangding",{mobile:mobile,code:code},function(result){
        if(result.status=='1'){
            tipxx('绑定成功');
            $('#codexx').val('');
            $('#mabangding').attr('onclick','');
            $('#mabangding').css('background-color','rgb(211, 211, 211)');
            $('#validePhone').hide();
            $('.gerenzx-sjrz').hide();
            $('.gerenzx-xg').show();
            $('.gerenzx-xg').html($('#phone').val()+'&nbsp;&nbsp;修改 ');
            $('#phone').val('');
            sfphone();
        }
        else{
          tipxx(result.info);
        }
      },'json');
    }
</script>>

   </div>
  </div>  
  





 <div id="fasongfk" style="display: none; background: rgb(14, 2, 38);height: 100%;position: fixed; width: 200%;"></div>
<div id="fasongfking"></div>



 <div id="valert2" class="alert" style="display:none">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 226.78px;">
    <div class="backImg">
     <div class="blackImg" style="height: 145.406px;"></div>
    </div> 
    <div class="alertText" style="top: 75.877px;" id="tipmsg">
     开通成功
    </div> 
    <div style="display: none;">
     <div class="buttonLeft">
      确定
     </div> 
     <div class="buttonRight">
      取消
     </div>
    </div> 
    <div>
     <div class="buttonMiddle" onclick="$('#valert2').hide();">
      确定
     </div>
    </div> 
   </div>
  </div>








 </body>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true
})
 <script type="text/javascript" src="http://33cdn.bepkwl.cn/zy/css.js"></script>
<script>
	document.body.addEventListener('touchmove', function(e){e.preventDefault()}, {passive: false});		

	var temporaryRepair = function (){
    var currentPosition,timer;
    var speed=1;//页面滚动距离
    timer = setInterval(function(){
        currentPosition=document.documentElement.scrollTop || document.body.scrollTop;
        currentPosition-=speed; 
        window.scrollTo(0,currentPosition);//页面向上滚动
        currentPosition+=speed; //speed变量
        window.scrollTo(0,currentPosition);//页面向下滚动
        clearInterval(timer);
    },1)
}
document.addEventListener("blur", function( event ) { 
    temporaryRepair(); 
}, true);
</script>
</html>