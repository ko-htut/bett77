<?php if (!defined('THINK_PATH')) exit();?> <?php $zhuti_list = ['xx' => 'xx.png', 'tt' => 'tt.png','yf' => 'yf.png', 'xd' => 'xd.png', 'hl' => 'hl.png', 'dd' => 'dd.png', 'lele' => 'lele.png' ,'ht' => 'ht.png', 'uu' => 'yy.png', 'kk' => 'kk.png', 'ym' => 'tt1.png', 'rr' => 'rr.png', 'xdd' => 'xdd.png', 'lt' => 'lt.png' ]; ?>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <meta http-equiv="Pragma" content="public" /> 
  <meta http-equiv="Cache-Control" content="public" /> 
  <title><?php echo ($room["roomid"]); ?>号三公房间</title> 
<link rel="stylesheet" type="text/css" href="http://33cdn.bepkwl.cn/yx/css/bullshop.css"> 
  <link rel="stylesheet" type="text/css" href="http://33cdn.bepkwl.cn/sguo/sangong-1.0.0.css">
<link rel="stylesheet" type="text/css" href="http://33cdn.bepkwl.cn/12/alert-1.1.css">
  <link rel="stylesheet" type="text/css" href="http://33cdn.bepkwl.cn/yx/css/public1.css"> 
  <link rel="stylesheet" type="text/css" href="http://33cdn.bepkwl.cn/yx/css/sangong6.css"> 
   <link rel="stylesheet" href="http://33cdn.bepkwl.cn/yx/css/app.css"> 
  <script src="http://33cdn.bepkwl.cn/yx/js/homepage/jq.js" type="text/javascript"></script> 
   <script src="http://33cdn.bepkwl.cn/yx/js/clipboard.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://gameoss.fexteam.com/files/js/fastclick.js"></script>
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
.liurenniuniu-Text{
  width: 100% !important;
  }
  .liurenniuniu-ziti{
    width: 100% !important;
  }



.gongg{
  position: absolute;
    left: 0% !important;
    width: 100%;
    height: 11vh;
    font-size: 2.2vh;
    display: none;
    z-index: 99;
    height: 100%;
    color: white;
    font-size: 2.2vh;
    text-align: center;
    line-height: 10vh;
}



 

 .lishijilu{
         position: relative;background:url(http://goss.fexteam.com/files/images/common/alert3.png) 0% 0% / 100% 100% no-repeat;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 15px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }
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
  

</style>

 <script type="text/javascript"><?php echo base64_decode('LyoqCiAqIGdhbWXlhazlhbHnmoRqc+W6kwogKiB2b2lkIDDmm7/ku6N1bmRlZmluZWQKICog5pS+5aSn5qih5byP5a6e546w5a+56LGh55qE5pa55rOV5ZKM5bGe5oCn5rOo5YWl77yM5a6e546w5Yqo5oCB5oyC6L29CiAqIGF1dGhvcjogaGVpZ2UKICogdGltZTogMjAxNy0wMS0wNQogKi8KKGZ1bmN0aW9uKG1vZCwgd2luLCBkb2MpIHsKICAgIC8v5rWP6KeI5Zmo5a+56LGhCiAgICB2YXIgYnJvd3NlciA9IHsKICAgICAgICB2ZXJzaW9uczogZnVuY3Rpb24oKSB7CiAgICAgICAgICAgIHZhciB1ID0gbmF2aWdhdG9yLnVzZXJBZ2VudDsKICAgICAgICAgICAgcmV0dXJuIHsKICAgICAgICAgICAgICAgIHRyaWRlbnQ6IHUuaW5kZXhPZigiVHJpZGVudCIpID4gLTEsCiAgICAgICAgICAgICAgICBwcmVzdG86IHUuaW5kZXhPZigiUHJlc3RvIikgPiAtMSwKICAgICAgICAgICAgICAgIHdlYktpdDogdS5pbmRleE9mKCJBcHBsZVdlYktpdCIpID4gLTEsCiAgICAgICAgICAgICAgICBnZWNrbzogdS5pbmRleE9mKCJHZWNrbyIpID4gLTEgJiYgLTEgPT0gdS5pbmRleE9mKCJLSFRNTCIpLAogICAgICAgICAgICAgICAgbW9iaWxlOiAhIXUubWF0Y2goL0FwcGxlV2ViS2l0LipNb2JpbGUuKi8pIHx8ICEhdS5tYXRjaCgvQXBwbGVXZWJLaXQvKSwKICAgICAgICAgICAgICAgIGlvczogISF1Lm1hdGNoKC9cKGlbXjtdKzsoIFU7KT8gQ1BVLitNYWMgT1MgWC8pIHx8ICEhdS5tYXRjaCgvaXBob25lfGlwb2R8aXBhZHxNYWMvZ2kpLAogICAgICAgICAgICAgICAgYW5kcm9pZDogdS5pbmRleE9mKCJBbmRyb2lkIikgPiAtMSB8fCAhIXUubWF0Y2goL0FuZHJvaWR8QWRyfExpbnV4L2dpKSwKICAgICAgICAgICAgICAgIGlQaG9uZTogdS5pbmRleE9mKCJpUGhvbmUiKSA+IC0xIHx8IHUuaW5kZXhPZigiTWFjIikgPiAtMSwKICAgICAgICAgICAgICAgIGlQYWQ6IHUuaW5kZXhPZigiaVBhZCIpID4gLTEsCiAgICAgICAgICAgICAgICBpUG9kOiAiaXBvZCIgPT0gdS5tYXRjaCgvaVBvZC9pKSwKICAgICAgICAgICAgICAgIHdlYkFwcDogLTEgPT0gdS5pbmRleE9mKCJTYWZhcmkiKSwKICAgICAgICAgICAgICAgIGlzd2VpeGluOiAibWljcm9tZXNzZW5nZXIiID09IHUubWF0Y2goL01pY3JvTWVzc2VuZ2VyL2kpLAogICAgICAgICAgICAgICAgdWE6IHUKICAgICAgICAgICAgfQogICAgICAgIH0oKQogICAgfTsKCiAgICAvL+iOt+WPluaJi+acuuiuvuWkh+exu+WeiwogICAgZnVuY3Rpb24gZ2V0RGV2aWNlU3lzdGVtKCkgewogICAgICAgIHZhciBzeXN0ZW0gPSAiYW5kcm9pZCI7CiAgICAgICAgaWYgKGJyb3dzZXIudmVyc2lvbnMuaW9zIHx8IGJyb3dzZXIudmVyc2lvbnMuaVBob25lIHx8IGJyb3dzZXIudmVyc2lvbnMuaVBhZCB8fCBicm93c2VyLnZlcnNpb25zLmlQb2QpIHsKICAgICAgICAgICAgc3lzdGVtID0gJ2lvcyc7CiAgICAgICAgfQoKICAgICAgICByZXR1cm4gc3lzdGVtOwogICAgfTsKCiAgICAvL+iOt+WPlmlvc+ezu+e7n+eJiOacrAogICAgZnVuY3Rpb24gZ2V0SW9zVmVyc2lvbigpIHsKICAgICAgICB2YXIgdmVyc2lvbiwgdmVyaW5mbyA9IGJyb3dzZXIudmVyc2lvbnMudWEubWF0Y2goL29zIFtcZC5fXSovZ2kpOwogICAgICAgIGlmIChudWxsICE9IHZlcmluZm8gJiYgdmVyaW5mby5sZW5ndGggPiAwKSB7CiAgICAgICAgICAgIHZlcnNpb24gPSB2ZXJpbmZvLnRvU3RyaW5nKCkucmVwbGFjZSgvW14wLTl8Xy5dL2dpLCAiIikucmVwbGFjZSgvXy9naSwgIi4iKTsKICAgICAgICB9CgogICAgICAgIHJldHVybiB2b2lkIDAgIT09IHZlcnNpb24gJiYgdmVyc2lvbi5sZW5ndGggPiAwID8gdmVyc2lvbiA6ICIiOwogICAgfTsKCiAgICAvL+W+ruS/oeS4rWEtLS0+Yizku45i6L+U5ZueYemhtemdou+8jOmcgOimgeaJp+ihjEZ1dHVyZWdhbWVzLmluaXRXeFBhZ2UodGl0bGUsdXJsKTsKICAgIC8v6K+l5q61anPmlL7lnKhi6aG16Z2iCiAgICAvL+eUqOazleWmguS4i++8mgogICAgLyoKICAgICAvL2EtLS0+YixiLS0tPmEKICAgICBGdXR1cmVnYW1lcy5pbml0V3hQYWdlKHRpdGxlLGFfdXJsKTsKCiAgICAgLy9hLS0tPmIsYi0tLS0+YwogICAgIEZ1dHVyZWdhbWVzLnB1c2hIaXN0b3J5KHRpdGxlLHBhZ2VfYV91cmwpOwogICAgIEZ1dHVyZWdhbWVzLmNsb3NlV3hQYWdlKCJodHRwOi8vd3d3LmJhaWR1LmNvbSIpOwogICAgICovCiAgICB2YXIgb2JqID0gewogICAgICAgIHB1c2hIaXN0b3J5OiBmdW5jdGlvbih0aXRsZSwgcGFnZV9hX3VybCkgewogICAgICAgICAgICB2YXIgc3RhdGUgPSB7CiAgICAgICAgICAgICAgICB0aXRsZTogdGl0bGUgfHwgZG9jLnRpdGxlLAogICAgICAgICAgICAgICAgdXJsOiBwYWdlX2FfdXJsIHx8IGxvY2F0aW9uLmhyZWYsCiAgICAgICAgICAgIH07CiAgICAgICAgICAgIHdpbi5oaXN0b3J5LnB1c2hTdGF0ZShzdGF0ZSwgc3RhdGUudGl0bGUsIHN0YXRlLnVybCk7CiAgICAgICAgfSwKICAgICAgICBjbG9zZVd4UGFnZTogZnVuY3Rpb24odXJsKSB7CiAgICAgICAgICAgIHdpbi5hZGRFdmVudExpc3RlbmVyKCJwb3BzdGF0ZSIsIGZ1bmN0aW9uKGUpIHsgLy/lm57osIPlh73mlbDkuK3lrp7njrDpnIDopoHnmoTlip/og70KICAgICAgICAgICAgICAgIGlmICh0eXBlb2Ygd3ggIT0gInVuZGVmaW5lZCIgJiYgdHlwZW9mIHd4LmNsb3NlV2luZG93ID09ICdmdW5jdGlvbicpIHsKICAgICAgICAgICAgICAgICAgICB3eC5jbG9zZVdpbmRvdygpOwogICAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgIGxvY2F0aW9uLmhyZWYgPSB1cmwgfHwgbG9jYXRpb24uaG9zdDsgLy/lnKjov5nph4zmjIflrprlhbbov5Tlm57nmoTlnLDlnYAKICAgICAgICAgICAgfSwgZmFsc2UpOwogICAgICAgICAgICByZXR1cm4gZmFsc2U7CiAgICAgICAgfSwKICAgICAgICAvL3dlaXhpbuWIneWni+WMlui/lOWbnuaIluWFs+mXreaTjeS9nAogICAgICAgIGluaXRXeFBhZ2U6IGZ1bmN0aW9uKHRpdGxlLCBwYWdlX2FfdXJsKSB7IC8v5pys5ri45oiP5LitcGFnZV9hX3VybCDkuLovCiAgICAgICAgICAgIHJldHVybiBmYWxzZTsKICAgICAgICAgICAgdmFyIGlvc1ZlcnNpb24gPSBnZXRJb3NWZXJzaW9uKCkucmVwbGFjZSgvXC4vZywgIiIpOwogICAgICAgICAgICB2YXIgc3lzdGVtID0gZ2V0RGV2aWNlU3lzdGVtKCk7CiAgICAgICAgICAgIC8vIGlvcyA5LjAuMOS7peS4i+eahOezu+e7n+S4jeiwg+eUqOW+ruS/oeWIneWni+WMlgogICAgICAgICAgICBpZiAoImlvcyIgPT0gc3lzdGVtICYmICIiICE9IGlvc1ZlcnNpb24gJiYgcGFyc2VGbG9hdChpb3NWZXJzaW9uKSA8IDkwMCkgewogICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlOwogICAgICAgICAgICB9CgogICAgICAgICAgICB0aGlzLnB1c2hIaXN0b3J5KHRpdGxlIHx8IChkb2MudGl0bGUgfHwgJycpLCBwYWdlX2FfdXJsIHx8ICcvJyk7CiAgICAgICAgICAgIHRoaXMuY2xvc2VXeFBhZ2UocGFnZV9hX3VybCB8fCAnLycpOwogICAgICAgIH0sCiAgICB9OwoKICAgIC8v5a+55aSW5pq06Zyy55qE5pa55rOVCiAgICBtb2QuYnJvd3NlciA9IGJyb3dzZXI7CiAgICBtb2QuZ2V0RGV2aWNlU3lzdGVtID0gZ2V0RGV2aWNlU3lzdGVtOwogICAgbW9kLmdldElvc1ZlcnNpb24gPSBnZXRJb3NWZXJzaW9uOwogICAgbW9kLnB1c2hIaXN0b3J5ID0gb2JqLnB1c2hIaXN0b3J5OwogICAgbW9kLmNsb3NlV3hQYWdlID0gb2JqLmNsb3NlV3hQYWdlOwogICAgbW9kLmluaXRXeFBhZ2UgPSBvYmouaW5pdFd4UGFnZTsKCn0pKHdpbmRvdy5GdXR1cmVnYW1lcyA9IHdpbmRvdy5GdXR1cmVnYW1lcyB8fCB7fSwgd2luZG93LCBkb2N1bWVudCk7Cgp2YXIgZ2xib2xkYXRheHggPSBbXTsKCgpmdW5jdGlvbiBvcG5lbW0oaHRtbCwgaWQpIHsKCiAgICBpZihpc2d1YW56aGFuPT0xICYmIGlkPT0ibWVzc2FnZSIpCiAgICB7CiAgICAgICAgLy9hbGVydCgi6KeC5oiY5LiN6IO96IGK5aSpIik7CiAgICAgICAgcmV0dXJuOwogICAgfQogICAgaWYgKCFnbGJvbGRhdGF4eFtpZCArIGh0bWxdKSB7CiAgICAgICAgJC5nZXQoJy9pbmRleC5waHAvcG9ydGFsL2luZGV4LycgKyBodG1sICsgJy9yb29tLycgKyByb29tLCBmdW5jdGlvbihkYXRhKSB7CiAKICAgICAgICAgICAgZ2xib2xkYXRheHhbaWQgKyBodG1sXSA9IGRhdGE7CiAgICAgICAgICAgICQoJyMnICsgaWQpLmh0bWwoZGF0YSk7CiAgICAgICAgICAgICQoJyMnICsgaWQpLnNob3coKTsKICAgICAgICAgICAgJCgnI3Njcm9sbC1ib3gyJykuaGlkZSgpOyAKICAgICAgICAgICAgJCgnLnl1eWluQnV0dG9uJykuYWRkQ2xhc3MoJ3l1eWluQnV0dG9uSW1nJyk7ICAKICAgICAgICB9KTsKICAgIAogICAgfSBlbHNlIHsKICAgICAgICBpZiAoaWQgIT0gJ21lc3NhZ2UnKSB7CiAgICAgICAgICAgIGNvbnNvbGUubG9nKGdsYm9sZGF0YXh4W2lkICsgaHRtbF0pOwogICAgICAgICAgICAvLyQoJyMnICsgaWQpLmh0bWwoZ2xib2xkYXRheHhbaWQgKyBodG1sXSk7CiAgICAgICAgfQoKICAgICAgCiAgICAgICAgJCgnIycgKyBpZCkuc2hvdygpOwogICAgfQp9CgpmdW5jdGlvbiBlbW9qaUJ1dHRvbigpIHsKICAgICQoJyNzY3JvbGwtYm94JykuaGlkZSgpOyAKICAgICQoJyNzY3JvbGwtYm94MicpLnNob3coKTsgCiAgICAkKCcuZW1vamlCdXR0b24nKS5hZGRDbGFzcygnZW1vamlCdXR0b25JbWcnKTsgIAogICAgJCgnLnl1eWluQnV0dG9uJykucmVtb3ZlQ2xhc3MoJ3l1eWluQnV0dG9uSW1nJyk7CiAgIH0KCiAgIGZ1bmN0aW9uIHl1eWluQnV0dG9uKCkgewogICAgJCgnI3Njcm9sbC1ib3gyJykuaGlkZSgpOyAKICAgICQoJyNzY3JvbGwtYm94Jykuc2hvdygpOyAgCiAgICAkKCcueXV5aW5CdXR0b24nKS5hZGRDbGFzcygneXV5aW5CdXR0b25JbWcnKTsgICAKICAgICQoJy5lbW9qaUJ1dHRvbicpLnJlbW92ZUNsYXNzKCdlbW9qaUJ1dHRvbkltZycpOyAgCiAgIH0KCiAgIApmdW5jdGlvbiBzZWxlY3RDaGFuZ2UodHlwZSwgaWQsIGluZGV4KSB7CiAgICBnbGJvbGRhdGF4eFttYl1bdHlwZV0gPSBpbmRleDsKICAgICQoJy4nICsgdHlwZSkuZmluZCgnaW1nJykuaGlkZSgpOwogICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuc2hvdygpOwp9CgpmdW5jdGlvbiBzZWxlY3RDaGFuZ2VzKHR5cGUsIGlkLCBpbmRleCkgewogICAgZ2xib2xkYXRheHhbbWJdW3R5cGVdID0gaW5kZXg7CiAgICBpZiAoJCgnIycgKyBpZCkuY2hpbGRyZW4oJ2ltZycpLmNzcygnZGlzcGxheScpID09ICdibG9jaycpIHsKICAgICAgICAkKCcjJyArIGlkKS5jaGlsZHJlbignaW1nJykuaGlkZSgpOwogICAgfSBlbHNlIHsKICAgICAgICAkKCcjJyArIGlkKS5jaGlsZHJlbignaW1nJykuc2hvdygpOwogICAgfQp9CgpmdW5jdGlvbiB6aGVuZ3prZigpIHsKICAgIGFsZXJ0KCfmlazor7fmnJ/lvoUnKTsKfQoKZnVuY3Rpb24gY2FuY2VsQ3JlYXRlKCkgewogICAgJCgnI3Jvb20nKS5oaWRlKCk7Cn0KLy9hZGRmdW5jdGlvbgpmdW5jdGlvbiBlYWdkZGQzNjYoKSB7CiAgICAkKCcjZGFnZjNkZWUnKS5oaWRlKCk7Cn0KCi8vIOmAieaLqeaIv+mXtApmdW5jdGlvbiBzZWxlY3RCYW5rZXJNb2RlKGluZGV4LCBpZCkgewogICAgZ2xib2xkYXRheHhbbWJdW2luZGV4XSA9IGluZGV4OwogICAgJCgiLmJhbmtlclVuU2VsZWN0ZWQiKS5maW5kKCdpbWcnKS5hdHRyKCdzcmMnLCAnLi9pbWcvYmFua2VyX3Vuc2VsZWN0ZWQucG5nJykKICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMikuaGlkZSgpOwogICAgJCgnLnNlbGVjdFBhcnQnKS5lcSg2KS5oaWRlKCk7CiAgICAkKCcuc2VsZWN0UGFydCcpLmVxKDEpLnNob3coKTsKCiAgICBpZiAoaW5kZXggPT0gMSkgewogICAgICAgICQoJyMnICsgaWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsICcuL2ltZy9iYW5rZXJfc2VsZWN0ZWQucG5nJykKICAgIH0KICAgIGlmIChpbmRleCA9PSAyKSB7CiAgICAgICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuYXR0cignc3JjJywgJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoNikuc2hvdygpOwogICAgfQogICAgaWYgKGluZGV4ID09IDMpIHsKICAgICAgICAkKCcjJyArIGlkKS5maW5kKCdpbWcnKS5hdHRyKCdzcmMnLCAnLi9pbWcvYmFua2VyX3NlbGVjdGVkLnBuZycpCiAgICB9CiAgICBpZiAoaW5kZXggPT0gNCkgewogICAgICAgICQoJyMnICsgaWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsICcuL2ltZy9iYW5rZXJfc2VsZWN0ZWQucG5nJykKICAgIH0KICAgIGlmIChpbmRleCA9PSA1KSB7CiAgICAgICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuYXR0cignc3JjJywgJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMikuc2hvdygpOwogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMSkuaGlkZSgpOwogICAgfQp9CgovL2FkZGZ1bmN0aW9uCmZ1bmN0aW9uIGVlZTM2NigpIHsKICAgICQoJyNzc2EnKS5oaWRlKCk7Cn0KCmZ1bmN0aW9uIHNob3VqaWJkKCkgewogICAgJCgnI3ZhbGlkZVBob25lJykuc2hvdygpOwp9CgpmdW5jdGlvbiBhbGVydGdsKCkgewogICAgJCgnI3ZhbGVydCcpLnNob3coKTsKfQoKZnVuY3Rpb24gYWxlcnRxeCgpIHsKICAgICQoJyN2YWxlcnQnKS5oaWRlKCk7Cn0KLy/lip/og73nrqHnkIYgIOmhtemdogpmdW5jdGlvbiBndWFubGlnbigpIHsKICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy4uL2dvbmduc20uaHRtbCc7Cn0KCi8v5Liq5Lq65Lit5b+DICAgIOenr+WIhgokKGZ1bmN0aW9uKCkgewoKICAgICQoJy5kYW9sdWFuJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnLmdhbWVMaXN0SXRlbScpLmNzcygnei1pbmRleCcsICc5OScpOwogICAgICAgICQodGhpcykuc2libGluZ3MoKS5jc3MoJ3otaW5kZXgnLCAnOTk5OScpOwogICAgfSkKCiAgICAkKCcucGhvbmVNYXNrJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnI3ZhbGlkZVBob25lJykuaGlkZSgpOwogICAgfSkKCn0pCi8vIOe6ouWMheaXi+i9rOWKn+iDvQpmdW5jdGlvbiB4dWFuemh1YW4oKSB7CgogICAgJCgnLmJ0bk9wZW4nKS5maW5kKCdpbWcnKS5hZGRDbGFzcygndHJhbnNmJykKCiAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkgewoKICAgICAgICAkKCcjcm9wZW4nKS5zaG93KCk7CgogICAgfSwgMTAwMCk7Cn0KCi8vIOWFrOWFseW8ueahhgpmdW5jdGlvbiBwdWJsaWMoZGF0YSkgewogICAgJCgnIycgKyBkYXRhKS5oaWRlKCk7Cn0KLy8g5b+r5o236K+t6Z+zCmZ1bmN0aW9uIHNlbmRtc2cobXNnLCBpZCkgewogICAgc2VuZCgnc2VuZG1zZycsIHsKICAgICAgICBtc2c6IG1zZywKICAgICAgICBpZDogaWQKICAgIH0pOwogICAgJCgnI21lc3NhZ2UnKS5oaWRlKCk7Cn0KCmZ1bmN0aW9uIHNlbmRlbW9qaShtc2csIGlkKSB7CiAgICBzZW5kKCdzZW5kZW1vamknLCB7CiAgICAgICAgbXNnOiBtc2csCiAgICAgICAgaWQ6IGlkCiAgICB9KTsKICAgICQoJyNtZXNzYWdlJykuaGlkZSgpOwp9CgpmdW5jdGlvbiBzZW5kbXNndHdvKCl7CiAgaWYoaXN6aHVuYmVpdHdvPT0xKXsKICAgICAgJC5wb3N0KCcvaW5kZXgucGhwL3BvcnRhbC91c2VyL3NlbmRtc2d0d28nLCB7J2FjdCc6IDF9LCBmdW5jdGlvbiAoZGF0YSkgewogICAgICAgIGlmIChkYXRhID09IDEpIHsKCQkJLy9jb25zb2xlLmxvZygnb2snKTsKICAgICAgICB9ZWxzZXsKICAgICAgICAJc2VuZG1zZygn546p5ri45oiP77yM6K+35YWI6L+b576kJywnbWVzc2FnZTEnKTsKICAgICAgICB9CiAgICAgIH0sICJodG1sIik7CiAgICAgICQoJyNtZXNzYWdlJykuaGlkZSgpOwogIH1lbHNlewogICAgICBzZW5kbXNnKCfnjqnmuLjmiI/vvIzor7flhYjov5vnvqQnLCdtZXNzYWdlMScpOwogICAgICAkKCcjbWVzc2FnZScpLmhpZGUoKTsKICB9IAogIC8vY29uc29sZS5sb2coaXNndWFuemhhbik7CiAgLy9jb25zb2xlLmxvZyhpc3podW5iZWl0d28pOwp9Cgp2YXIgamk7CgpmdW5jdGlvbiBkanMoc2opIHsKICAgIGNsZWFyVGltZW91dChqaSk7CiAgICB2YXIgbm93ID0gc2ogLSBNYXRoLmNlaWwobmV3IERhdGUoKSAvIDEwMDApIC0gKDAgLSB0aW1ld2MpIC0gMTsKICAgIGlmIChub3cgPiAwKSB7CiAgICAgICAgLy8gaWYobm93PD0zKXsKICAgICAgICAvLyAgIG1wM3BsYXkoJ21wM2Rhb2ppc2hpJyk7CiAgICAgICAgLy8gfQogICAgICAgIGppID0gc2V0VGltZW91dCgnZGpzKCcgKyBzaiArICcpJywgMTAwMCk7CiAgICAgICAgJCgnLmNsb2NrJykuc2hvdygpOwogICAgICAgICQoJyNkaXZSb2JCYW5rZXJUZXh0Jykuc2hvdygpOwogICAgICAgICQoJyNkanMnKS50ZXh0KG5vdyk7CiAgICB9IGVsc2UgewogICAgICAgIGNsZWFyZGpzKCk7CiAgICB9Cn0KCmZ1bmN0aW9uIGNsZWFyZGpzKCkgewogICAgY2xlYXJUaW1lb3V0KGppKTsKICAgICQoJy5jbG9jaycpLmhpZGUoKQogICAgJCgnI2RpdlJvYkJhbmtlclRleHQnKS5oaWRlKCk7CiAgICAkKCcuZ29uZ2cnKS5oaWRlKCk7Cn0KCi8qKgogKiDml6DnlKjku6PnoIHku6XkuIvmmK8KICovCi8vPT09PT09PT09PT09PT09PT09PT09PT09PT3lvIDluIIKZnVuY3Rpb24gdGVzdHh4eXgoKSB7CiAgICByZXR1cm4gJ2hhaGhhJzsKfQoKZnVuY3Rpb24gdGVzdGhhaCgpIHsKICAgIHJldHVybiAnMTIzMic7Cn0KCi8vPT09PT09PT09PT09PT09PT09PT09PT09PT0957uT5p2fCg=='); ?></script>
<script type="text/javascript"><?php echo base64_decode('dmFyIGNzPTEwOwp2YXIgaG9zdHVybD13aW5kb3cubG9jYXRpb24uaG9zdG5hbWU7CnZhciB3ZWJzb2NrZXQ7CnZhciB0b2tlbjsKdmFyIHJvb207CnZhciBpbmRleDsKdmFyIHRpbWV3Yz0wOwp2YXIgYmdtcDNvcGVuOwp2YXIgbXAzb3BlbjsKdmFyIG92ZXJ6dD0xOwp2YXIgaXNndWFuemhhbiA9IDA7CgppZighbG9jYWxTdG9yYWdlLmJnbXAzb3Blbil7CiAgICBiZ21wM29wZW49MTsKfQplbHNlewogICAgYmdtcDNvcGVuPWxvY2FsU3RvcmFnZS5iZ21wM29wZW47Cn0KaWYoIWxvY2FsU3RvcmFnZS5tcDNvcGVuKXsKICAgIG1wM29wZW49MTsKfQplbHNlewogICAgbXAzb3Blbj1sb2NhbFN0b3JhZ2UubXAzb3BlbjsKfQpmdW5jdGlvbiBjb25uZWN0KG4saXNneil7CgogICAgaWYoIWlzZ3opCiAgICB7CiAgICAgICAgaXNneiA9IDA7CiAgICB9CiAgICBpc2d1YW56aGFuID0gaXNnejsKICBpZihvdmVyenQ9PTApewogICAgbG9hZCgnaGlkZScpOwogICAgcmV0dXJuIGZhbHNlOwogIH0KICBpZih3ZWJzb2NrZXQpd2Vic29ja2V0LmNsb3NlKCk7CgoKICAKICAgIGlmKGNzPjApewogICAgICBjcz1jcy0xOwogICAgICB3ZWJzb2NrZXQgPSBuZXcgV2ViU29ja2V0KCJ3czovLyIraG9zdHVybCsiOiIrbik7CiAgICAgIHdlYnNvY2tldC5vbm1lc3NhZ2UgPSBmdW5jdGlvbihldmVudCkgewogICAgICAgIGNzPTEwOwogICAgICAgIHpkYXRhPUpTT04ucGFyc2UoZXZlbnQuZGF0YSk7CiAgICAgICAgLy9jb25zb2xlLmxvZyh6ZGF0YSk7CiAgICAgICAgd2luZG93W3pkYXRhLmFjdF0oemRhdGEubXNnKTsKICAgICAgfTsKICAgICAgd2Vic29ja2V0Lm9ub3Blbj1mdW5jdGlvbihlKXsKICAgICAgICAgICAgbG9hZCgnaGlkZScpOwogICAgICAgICAgICBpZighdG9rZW4pewogICAgICAgICAgICAgICAgdG9rZW49bG9jYWxTdG9yYWdlLnRva2VuOwogICAgICAgICAgICB9CiAgICAgICAgICAgIHNlbmQoJ2luaXQnLHt0b2tlbjp0b2tlbixyb29tOnJvb20saXNndWFuemhhbjppc2d6fSk7CiAgICAgIH0KICAgICAgd2Vic29ja2V0Lm9uY2xvc2U9ZnVuY3Rpb24oZSl7CiAgICAgICAgd2Vic29ja2V0LmNsb3NlKCk7IC8v5YWz6ZetVENQ6L+e5o6lCiAgICAgICAgICAgIGlmKG92ZXJ6dD09MCl7CiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7CiAgICAgICAgICAgICAgICBsb2FkKCdoaWRlJyk7CiAgICAgICAgICAgICAgfQogICAgICAgICAgICBsb2FkKCdzaG93Jyk7CiAgICAgICAgICAgIC8vcHJvbXB0KCfnvZHnu5zkuI3nu5nlipss5q2j5Zyo5Yqq5Yqb6ZO+5o6l5pyN5Yqh5ZmoIScpOwogICAgICAgICAgCiAgICAgICAgICAgIGNzPWNzLTE7CiAgICAgICAgICAgIGNvbm5lY3Qobixpc2d1YW56aGFuKTsKICAgICAgfTsKICAgIH0KICAgIGVsc2V7CiAgICAgIGxvYWQoJ2hpZGUnKTsKICAgICAgLy9wcm9tcHQoJ+W3sue7j+S6juacjeWKoeWZqOaWreW8gCzor7fliLfmlrDph43or5UhJyk7CiAgICAgIHNldFRpbWVvdXQoIiQoJ2JvZHknKS5oaWRlKCkiLDMwMDApOwogICAgfQp9CmZ1bmN0aW9uIGdvbG9naW4oKXsKICAgIGxvY2F0aW9uLmhyZWY9Ii8iOwp9CmZ1bmN0aW9uIGd4dG9rZW4oZGF0YSl7CiAgICBsb2NhbFN0b3JhZ2UudG9rZW49ZGF0YTsKfQoKCi8v5Yqg6L295LitCmZ1bmN0aW9uIGxvYWQocykgewogICAgdmFyIEltZyA9ICJkYXRhOmltYWdlL2dpZjtiYXNlNjQsUjBsR09EbGhnQUNBQUtJQUFQLy8vOTNkM2J1N3U1bVptUUFBL3dBQUFBQUFBQUFBQUNIL0MwNUZWRk5EUVZCRk1pNHdBd0VBQUFBaCtRUUZCUUFFQUN3Q0FBSUFmQUI4QUFBRC8waTYzUDR3eWdZcW1EanJ6YnRmbHZXTlpHbGlZWGl1Ykt1bG9pdlBMbHpSZUQ3YWwrNy9FaDV3U0ZRSWk4aEhZQmt3SFVtRDZDRDVZVEpMejQ5VVN1VllyYVJzWjd2dGFyN1huUTFLanBvejZMUkh2R2x6MzVPNG5FUFAyTzk0RW5wTmMyc2VmMU9CR0lPRk1JZC9pbkI2alNtUGRwR1NjUjE5RW9pWW1ab2JuQkNJaVo5NWs2S0dHcDZuaTR3dnF4aWxycUJmcW82c2tMVzJZQm1qRGEyOHI2RW9zcDI3dzhSb3Y4ZWt5Y3FvcVVIT0RyVFJ2WHNRd0FyQzJOTEYyOVVNMTkvTHR4TzV5SmQ0QXU0Q0s3RFVOeFBlYkc0ZTcrOG44aXYyV21RNjZCdG9ZcG8vZHZmYWNCaklrSVRCRTlER2xNdkFzT0lJWmpJVUFpeGxpdjlpeFlaVnRMVW9zNUdqd0k4Z3pjM2lDR2doeXBRcXJiRnNtZThsd1pnTFp0SWNZZk5tVEozNFdQVFVadzVvUnhkRDl3MHo2aU9wTzE1TWdUaDFCVFRKVUtvczM5akUrby9LUzY0SUZWbXNGZllUMGFVN2NhcGR5N2F0MjdkdzQ4cWRTN2V1M2J0NDgwSTAydlViWDJGL0p4WU5ESW13NEdpR0UvUDlxYmh4VnBXT0kvZUZLdGxOWmJXWHV6bG1HMW12NTgrZ1E0c2VUYnEwNmRPb1U2dkdRWkp5MEZObE1jVitjemhRN1NRbVlkOGVNaFBzNUJ4VmRmY0dFdFYzYnVEQlhRK2ZVUnh4OG9NNk1UOVArRmg2ZE9ySDJ6YXZjMTN1OUpYVkpiNTIwVnA4ZHZDNzZ3WE11TjVTZXBtLzFXdGtFWkhEZWZuelI5UXZzZDkrL3dpOCtlbjNYMG50WVZjU2RBRStVTjR6czdsbjI0Q2FMYWdnaEl4QmFHRjhrRkdvSVlWK1liZ2hoODQxR0l5STVJQ0lGb2tsSnNpZ2lobWltSk9MRWJMWUlZd3hTZ2lnaVorOGwyS0IrTWw0b28vdzhkaWpqY3JvdUNPUkt3SXBuSklqTW5ra2tzYWxOZVI0ZnVCSW01VUVZSW1oSWxzR0NlV05OSnBocEpkU1Rsa21sMWpXZU9ZNlRuYVJwcHBVY3RjbUZXOW1HU2FaY2VZb3BIOXpram5qVWU1OWlSNXBkYXBXYUdxSG9wYm9hWXVhMXFpamU2N0dKNkN1SkFBQUlma0VCUVVBQkFBc0NnQUNBRmNBTUFBQUEvOUl1dHorTUw1QWc3dzQ2ejByNVdBb1NwNDNuaWhYVm1ucmR1c3J2K3MzMzJkdDRUeW85eU9CVUpENm9RQklRR3M0UkJsSHlTU0t5Y3pWVHRIb2lkb2NQVU5aYVpBcjlGNUZZYkdJM1BXZFFXbjFtaTM2YnVMS0ZKdm9qc0hqTG5zaGRobDRMNElxYnhxR2g0Z2FoQko0ZVkxa2lYNkxnRE43ZkJtUUVKSTRqaGllRDR5aGRKMktrWms4b2lTcUVhYXRxQmVrRExLenRCRzJDcUJBQ3E0d0pSaTRQWnUxc0EyK3Y4QzZFSmV4ckJBRDFBT0J6c0xFMGcvVjFVdllSOXNOM2VSNmxUTGk0K1RsWTF3ejZRenI4dTF0NkZrWTh2TnpaVHhhR2ZuNm1Ba0VHRkRnTDRMckRESkR5RTRoRUliZEhCNkVTRTFpRDRvVkxmTEFxUEVUSXNPT0R3bUNESmx2NU1TR0prbGFTNmtoQVFBaCtRUUZCUUFFQUN3ZkFBSUFWd0F3QUFBRC8waTYzUDVMU0FHcnZUanJOdWYrWUtoMW5XaWVJdW1oYkZ1cGtpdlBCRXpSK0dubmZMajNvb0Z3d1BxZEFzaEFhemhFR1VYSkpJckoxTUdPVWFtSjJqUTlRVmx0a0N2MFhxRmg1SW5jQlgwMWFmR1luRHFENDB1Mno3NkpLL04wYm54d2VDNXNSQjl2RjM0emg0Z2pnNHVNalhvYmloV1RsSlVabHc5K2Z6U0hscEdZaFRtaW5LU2VwcWViRjUwTm1UeW9yNnF4ckxPMEw3WUxuMEFMdWhDd0NySkFqclVxa3JqR3JzSWtHTVcvQk1FUEpjcGhMZ0RhQUJqVUtORWgyOXZkZ1RMTElPTHBGODBzNXhycDhPUlZPTmdpOFBjWjh6bFJKdmY0MHRMOC9RUFlRK0JBZ2pnTXhrUElRNkU2aGdrZGpvTklRK0pFaWpNc2FzTlkwUlFpeDRnS1ArWUlLWEtrd0pJRkY2Sk11ZEZFQWdBaCtRUUZCUUFFQUN3OEFBSUFRZ0JDQUFBRC9rZzBQUG93eWttcm5hM2R6WHZObVNlT0ZxaVJhR295YVR1dWppdHY4R3gvNjYxSHRTdjhndDJqbHdJQ2hZdGMwWGpjRVVuTXB1NHBpa3B2MUk3MWFzdHl0a0doOXdKR0prM1FyWGxjS2ErVldqZVNQWkhQNFJ0dytJMk9XODFEZUJaMmZDQitVWUNCZldScWlRcDBDbnFPajRKMWpaT1FrcE9VSVl4L200b3hnNWN1QWFZQk80UW9wNmM2cEt1c3JEZXZJckcycmt3cHRydXBYQjY3dktBYndNSENGY1RGeGhMSXQ4b1V6TEhPRTlDeTBoSFVyZGJYMktqYUVOemV5OURoMDhqa3o4VG54ODNxNjZidDhQSHk4L1QxOXZmNCtmcjZBUDMrL3dBREFqUW1zS0RCZjZBT0tqUzRhYUhEZ1pNZVNnVFFjS0xEaEJZUEVzd29BMUJCQWdBaCtRUUZCUUFFQUN4T0FBb0FNQUJYQUFBRDdFaTZ2UE9qeVVrcmhkRHFmWEhtNE9aOVlTbU5wS21pcVZxeWtidXlzZ3ZYNW8ySGNMeHp1cDhvS0xRUWl4MFVjcWhjVm81T1JpK2FIRkVuMDJzRGV1V3FCR0NCa2JZTGg1L05tbmxkeGFqWDdMYlBCSytQSDdLNm5hcmZPL3QrU0lCd2ZJTm1VWWFIZjRsZ2hZeU9obHFKV2dxRGxBdUFsd3lCbXBWbm5hQ2hvcU9rcGFhbnFLbXFLZ0d0cnErd3NiQTFzclcycnk2M3VyYXN1NzY0SnIvQ0FiM0R1N25HdDdUSnNxdk96OURSMHRQVTFUSUEyQUNsMmR5aTNOL2FuZURmNHVQa2xPYmo2T25nV3V6dDd1L2Q4ZkxZOVBYcjllRlgrdnY4K1BuWWxVc1hpcUMzYzZQbVVVZ0FBQ0g1QkFVRkFBUUFMRTRBSHdBd0FGY0FBQVBwU0xyYy9tN0lBYXU5YlU3TU85R2dKMFpnT0k1bGVvcXB1bUt0KzFheFBKTzFkdE81dnVNOXlpOFRsQXlCdlNNeHFFUzJtbzhjRkZLYjhreldxekRMN1hxLzRMQjRUQzZiejF5QmVzMXV1OXV6dDN6T1h0SHY4eE4rRHgveC93SjZnSHQyZzNSeGhtOW9pNHlOam8rUWtaS1RDZ0dXQVdhWG1tT2FuWmhnbnAyZ29hSmRwS0dtcDU1Y3FxdXNyWnV2c0pheXM2bXpuMW00dVJBQXZnQXZ1QlcvdjhHd3ZjVEZ4cWZJeWNBM3pBL095dENsMHRQUE83SEQyR0xZdnQ3ZFlkL1pYOTlqNStQaTZ0UGg2K2J2WHVUdXp1anhYZW5zOWZyN1lQbis3ZWdSSTlQUEhyZ3BDUUFBSWZrRUJRVUFCQUFzUEFBOEFFSUFRZ0FBQS9sSXV0eitVSTFKcTcwMjZoMngveFVuY21ENWplaGpybG5xU216OHZyRTh1N1Y1ei9tNS84Q2djRWdzR28vSXBITEpiRHFmMEtoMFNoQllCZFRYZFpzZGJiL1lyZ2I4RlVmSVlMTURUVll6MkcxM0ZWNld6K2xYK3gwZmR2UHpkbjlXZW9KR0FZY0JOMzlFaUlpS2VFT05qVHQwa1pLSFFHeVdsNG1aZFJFQW9RQWNuSmhCWEJxaW9xU2xUNnFxRzZXbVRLK3JzYTFOdGFHc3VFdTZvN3lYdWJvanNyVEVJc2EreU1tOVNMOG9zcDNQek0yY1N0RFJ5a2ZaMnRmVXRTL2JSZDNld3R6VjVwTG80ZUxqUXVVcDcwSHg4dDlFOWVxTzVPa3U1L3p0ZGt4aTkwcVBnM3gyRU1wUjZJYWhHb2NQQ3hwOEFHdGlnd1FBSWZrRUJRVUFCQUFzSHdCT0FGY0FNQUFBQS85SXV0eitNTW8zNnBnNDY4MkovVjBvanMxblhtU3FTcWU1dnJEWHVuRWR6cTJ0YTNpKy81RGVDVWgwQ0duRjVCR1VMQzR0VGVVVEZRVk9OWUFzNENmb0NrWlBqRmFyODNyQng4bDRYRE9iU1VMMU90dDJkMVU0eVp3Y3M1L3hTQkI3ZEJNQmhnRVlmbmNyVEJHRFc0V0hob21LVVkrUUVaS1NFNHFMUlk4WW1vZVVma21Yb2FLSW5KMmZneG1wcXF1bFFLQ3ZxUnFzUDdXb29yaVZPN3U4bWh1NU5hY2FzTVRGTU1IQ204cXp6TTJSdmREUks5UFV3eHpMS2RuYXo5eS9LdDhTeVIzZEl1WG10eUhwSE1jZDUranZXSzRpOC9UWEhmZjQ3U0xqUXZRTGtVK2ZHMjlyVWhRMDZJa0VHNFgvUnJ5cDRtd1V4U2dMTC83SXFGRVRCOGVPTlQ2Q2hDRnk1SXRxSm9tRVM2a2dBUUFoK1FRRkJRQUVBQ3dLQUU0QVZ3QXdBQUFELzBpNjNBNFF1RW1ydlRpM3lMWC80TWVOVW1pZUlUbWliRXVwcEN1M3NEcmZZRzNqUEtiSHZlRGt0eElhRjhUT2NabU1MSTlOeUJQYW5GS0pwNEEySUJ4NEI1bGtkcXZ0ZmI4K0hZcE14cDNQbDFxTHZYVy92V2tsaTE2LzNkRnhUaTU4WlJjQ2h3SVlmM2hXQklSY2hvaUhpb3RXajVBVmtwSVhpNHhManhpYWlKUi9UNWVob29tY25aK0VHYW1xcTZWR29LK3BHcXhDdGFpaXVKVkJ1N3lhSHJrNHB4cXd4TVV6d2NLYnlyUE16Wkc5ME5HRHJoL0pIOHQ3MmRxM0lOMWpmQ0hiM0wvZTVlYmg0dWtteHlEbjZPOGcwOGp0N3RmMjZ5YnorbS9XOUdOWHpVUTlmbTFRL0FQb1NXQWhoZmtNQW1wRWJSaEZLd3N2Q3Ntb3NSSUh4NDQ0UG9LY0lYS2tqSUltalR6amtRQUFJZmtFQlFVQUJBQXNBZ0E4QUVJQVFnQUFBL1ZJQk56KzhLbEpxNzJZeHMxZC91RFZqVnhvZ21RcW5heWx2a0FyVDdBNjMvVjQ3L20yLzhDZ2NFZ3NHby9JcEhMSmJEcWYwS2gwU2owRnJvR3FETXZWbXJqZ3JEY1RCbzh2NWZDWmtpNnZDVzMzT3E0KzA4MzJPL2F0MytmN2ZJQ0JkenNDaGdKR2VvV0hoa1YwUDR5TVJHMUJrWWVPZUVDV2w1aFhRNXVOSUFPakExS2dpS0trbzFDbnFCbXFxaytuSWJDa1RxMjB0YVZOczdtMXZLQW51cnRMdmI2d1RNYkhzVXE0d3JyRndTekR6Y3JMdGtuVzE2dEkydHZFUnQ2cHYwZmk0OGpoNWgvVTZaczc3RVhTTi9CRThqUDA5WkZBK1BtaFAveHZKZ0FNU0dCZ1FJTnZFSzVSZUlaaFEzUUVNVEJMQUFBaCtRUUZCUUFFQUN3Q0FCOEFNQUJYQUFBRDUwaTZEQTRzeWtscmU4N3FUYkhuNE9hTllTbU5xS21pcVZxeXJjdkJzYXpScEgzam1DN3lEOThPQ0JGMmlFWGpCS21zQUpzV0hEUUttdzU3MWw4bXkrMTZ2K0N3ZUV3dW04K2hnSHJOYnJ2YnRyZDh6bmJSNzNNVmZnODM4ZjhCZW9CN2RvTjBjWVp2YUl1TWpZNlBrSkdTazJnQ2xnSm1sNXBqbXAyWVlKNmRYNkdlWGFTaFdhZW9WcXFsVTYyaXI3Q1hxYk9XckxhZnNyTmN0aklEd0FNV3ZDN0J3Uld0TnNiR0ZLYyt5OGZOc1RyUTBkSzNRdFhBWXRyQ1lkM2VZTjNjNDkvYTVOVmo1ZUxuNXUzczZlN3g4TkRvOWZiTCtNenk5L1Q1K3R2VXpkTjNacCtHQkFBaCtRUUpCUUFFQUN3Q0FBSUFmQUI4QUFBRC8waTYzUDR3eWttcnZUanJ6YnYvWUNpT1pHbWVhS3F1Yk91K2NDelBkQXJjUUsyVE9MNy9ubDRQU013SWZjVWs1WWhVT2gzTTVuTktpT2FvV0N1V3F0MU91MTZsOVJwT2dzdkVNZG9jWGJPWjduUTdEanpUYWVxN3pxNlA1ZnN6ZklBU0FZVUJJWUtERG9hR0lJbUtDNHlTSDNPUUVKS1lIWldXaTVpWkcwZWNFWjZlSEVPaW82U2ZxQ2FxcGF5dHJwT3dKTEt6dENPMmpMaTF1b1c4SXI2L3dDSEN4TUcyeDdtdXlzdWt6YjIzME02SDA5YlgyTm5hMjl6ZDN0L2c0Y0FDNU9YbTUram4zT25zN2ViYTd2SHQyZkwxNnRqMitRTDArdlh3L2U3V0FVd25ycURCZ3dnVEtseklzS0hEaDJnR1NCd0FjY0hFaXhBdmFxVFljRkNqUm9ZZU55b002UkVoeVpJSFQ0bzBxUElqeTVZVFRjS1VtSElteDVjd0U4NWNtSlBuU1lja0s2NnNTQUFqMGFOSWt5cGR5clNwMDZkUW8wcWRTcldxMWF0WXMycmR5cldyMTY5Z3d4WkpBQUE3IgogICAgdmFyIGh0bWwgPSAiPGRpdiBjbGFzcz1cImxvYWRcIj48aW1nIHNyYz0iICsgSW1nICsgIiAvPjwvZGl2PiI7CiAgICBpZiAocyA9PSAnc2hvdycpIHsKICAgICAgICAkKCdib2R5JykuYXBwZW5kKGh0bWwpOwogICAgfQogICAgaWYgKHMgPT0gJ2hpZGUnKSB7CiAgICAgICAgJCgnLmxvYWQnKS5yZW1vdmUoKTsKICAgIH0KICAgIG1haWsocyk7Cn0KLy/pga7nvakKZnVuY3Rpb24gbWFpayhzKSB7CiAgICB2YXIgaGVpID0gJCh3aW5kb3cpLmhlaWdodCgpOwogICAgdmFyIHdpZCA9ICQod2luZG93KS53aWR0aCgpOwogICAgdmFyIGh0bWwgPSAiPGRpdiBjbGFzcz1cIm1haWtcIiBzdHlsZT0naGVpZ2h0OiIraGVpKyJweDt3aWR0aDoiK3dpZCsicHg7JyBvbmNsaWNrPVwiQ2VudGVyKCQoJy5ub3RpY2V3aScpLCAnaGlkZScpXCI+PC9kaXY+IjsKICAgIGlmIChzID09ICdzaG93JykgewogICAgICAgIGlmICgkKCIubWFpayIpLmxlbmd0aCA8PSAwKSB7CiAgICAgICAgICAgICQoJ2JvZHknKS5hcHBlbmQoaHRtbCk7CiAgICAgICAgfQogICAgfQogICAgaWYgKHMgPT0gJ2hpZGUnKSB7CiAgICAgICAgJCgnLm1haWsnKS5yZW1vdmUoKTsKICAgIH0KfQovL+iOt+WPlumhteWPguaVsApmdW5jdGlvbiBSZXF1ZXN0KG0pIHsKICAgIHZhciBzVmFsdWUgPSBsb2NhdGlvbi5zZWFyY2gubWF0Y2gobmV3IFJlZ0V4cCgiW1w/XCZdIiArIG0gKyAiPShbXlwmXSopKFwmPykiLCAiaSIpKTsKICAgIHJldHVybiBzVmFsdWUgPyBzVmFsdWVbMV0gOiBzVmFsdWU7Cn0KZnVuY3Rpb24gcHJvbXB0KHR4dCkgewogICAgdmFyIGh0bWwgPSAiPGRpdiBjbGFzcz1cInByb21wdFwiPjxzcGFuPiIgKyB0eHQgKyAiPC9zcGFuPjwvZGl2PiI7CiAgICB2YXIgQncgPSAkKHdpbmRvdykud2lkdGgoKTsKICAgIHZhciBCaCA9ICQod2luZG93KS5oZWlnaHQoKTsKICAgICQoJ2JvZHknKS5hcHBlbmQoaHRtbCk7CiAgICB2YXIgUHcgPSAkKCcucHJvbXB0Jykud2lkdGgoKTsKICAgIHZhciBQaCA9ICQoJy5wcm9tcHQnKS5oZWlnaHQoKTsKICAgICQoJy5wcm9tcHQnKS5jc3MoewogICAgICAgICJ0b3AiOiBCaCAvIDIgLSBQaCAvIDIsCiAgICAgICAgImxlZnQiOiBCdyAvIDIgLSBQdyAvIDIKICAgIH0pOwogICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7CiAgICAgICAgJCgnLnByb21wdCcpLnJlbW92ZSgpOwogICAgfSwgMjAwMCk7Cn0KCi8v6K6w5b2V55m76ZmG5Yet6K+BCmZ1bmN0aW9uIGxvZ2luKGRhdGEpewogICAgbG9jYWxTdG9yYWdlLnVzZXJpZD1kYXRhLnVpZDsKICAgIGxvY2FsU3RvcmFnZS5zYWx0PWRhdGEuc2FsdDsKfQovL+mUgOavgeeZu+mZhuWHreivgQpmdW5jdGlvbiBsb2dpbm91dChtc2cpewogICAgaWYobXNnKXsKICAgICAgICBwcm9tcHQobXNnKTsKICAgICAgICBzZXRUaW1lb3V0KCIkKCdib2R5JykuaGlkZSgpIiwzMDAwKTsKICAgIH0KICAgIGxvY2FsU3RvcmFnZS50b2tlbj0nJzsKICAgIHdlYnNvY2tldC5jbG9zZSgpOwp9CgpmdW5jdGlvbiBzZW5kKGFjdCxkYXRhKXsKICAgIGlmKCFkYXRhKXsKICAgICAgICBkYXRhPXt9OwogICAgfQogICAgdmFyIGZzID0gZGF0YTsKICAgIGZzLmFjdD1hY3Q7CiAgICB2YXIganNvblN0ciA9IEpTT04uc3RyaW5naWZ5KGZzKTsKICAgIGlmKHR5cGVvZih3ZWJzb2NrZXQpPT0ndW5kZWZpbmVkJyl7CiAgICAgICAgcHJvbXB0KCfkuI7mnI3liqHlmajnq6/lj6Ppk77mjqXvvIzor7fliLfmlrDph43or5UnKTsKICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9CiAgICB3ZWJzb2NrZXQuc2VuZChqc29uU3RyKTsKfQoKLy/moIfpopgKZnVuY3Rpb24gVGl0bGUodGl0bGUpIHsKICAgIGRvY3VtZW50LnRpdGxlID0gdGl0bGU7Cn0KZnVuY3Rpb24gYXR0cihkYXRhKXsKICAgICQoJyMnK2RhdGEuaWQpLmF0dHIoZGF0YS53eixkYXRhLm5yKTsKfQpmdW5jdGlvbiBodG1sKGRhdGEpewogICAgaWYoZGF0YS5pZCA9PSAnbmlja25hbWUnKSB7CiAgICAgICAgZGF0YS5odG1sID0gZGVjb2RlNjQoZGF0YS5odG1sKTsKICAgIH0KICAgICQoJyMnK2RhdGEuaWQpLmh0bWwoZGF0YS5odG1sKTsKfQoKZnVuY3Rpb24gYWRkaWQoZGF0YSl7CiAgICAkKCcjJytkYXRhLmlkKS5hZGRDbGFzcyhkYXRhLmh0bWwpOwp9CgoKZnVuY3Rpb24gcmVtb3ZlaWQoZGF0YSl7CiAgICAkKCcjJytkYXRhLmlkKS5yZW1vdmVDbGFzcyhkYXRhLmh0bWwpOwp9CgoKZnVuY3Rpb24gdmFsdWUoZGF0YSl7CiAgICAkKCcjJytkYXRhLmlkKS52YWwoZGF0YS5odG1sKTsKfQpmdW5jdGlvbiB2YWx1ZTIoZGF0YSl7CiAgICAkKCcnK2RhdGEuaWQpLnZhbCgnJytkYXRhLmh0bWwpOwp9CmZ1bmN0aW9uIGFwcGVuZChkYXRhKXsKICAgICQoJyMnK2RhdGEuaWQpLmFwcGVuZChkYXRhLmh0bWwpOwp9CmZ1bmN0aW9uIGpzZGF0YShkYXRhKXsKICAgIGV2YWwoZGF0YSk7Cn0KZnVuY3Rpb24gYWN0aXZlKGRhdGEpewogICAgJCgnIycrZGF0YS5pZCkuYWRkQ2xhc3MoZGF0YS5odG1sKS5zaWJsaW5ncygpLnJlbW92ZUNsYXNzKGRhdGEuaHRtbCk7Cn0gCgpmdW5jdGlvbiBzaG93aWQoZGF0YSl7CiAgICAkKCcjJytkYXRhLmlkKS5zaG93KCk7Cn0KZnVuY3Rpb24gaGlkZWlkKGRhdGEpewogICAgJCgnIycrZGF0YS5pZCkuaGlkZSgpOwp9CgpmdW5jdGlvbiBnb3Jvb20oZGF0YSl7CiAgICBsb2NhdGlvbi5ocmVmPSIvcG9ydGFsL2luZGV4L3Jvb20uaHRtbD9yb29tPSIrZGF0YS5yb29tOwp9CgpmdW5jdGlvbiBneGluZGV4KGRhdGEpewogICAgaW5kZXg9ZGF0YTsKfQpmdW5jdGlvbiB0aW1ld2NneChkYXRhKXsKICAgIHRpbWV3Yz1NYXRoLmNlaWwobmV3IERhdGUoKS8xMDAwKS1kYXRhOwogICAgLy9jb25zb2xlLmxvZyh0aW1ld2MpOwogICAgc2V0VGltZW91dCgnc2VuZCgidGltZWd4Iix7fSknLDUwMDApOwp9CmZ1bmN0aW9uIHRpbWV5YyhkYXRhKXsKICAgIHNlbmQoInRpbWV5YyIse3RpbWU6ZGF0YX0pOwp9CmZ1bmN0aW9uIHljeHgoZGF0YSl7CiAgICAkKCcjdXNlcicrZGF0YS5pZCsnIC56bW15Y3RpbWUnKS5odG1sKGRhdGEudGltZSk7Cn0KCgpmdW5jdGlvbiBXZUNoYXQodXJsLHRpdGxlLGltZyxkZXNjKXsKICAgICAkLmdldCgiL2luZGV4LnBocC9wb3J0YWwvaW5kZXgvZ2V0Y29uZmlnLyIse3VybDp3aW5kb3cubG9jYXRpb24uaHJlZn0sZnVuY3Rpb24oZGF0YSkgewogICAgICAgIHd4LmNvbmZpZyhkYXRhKTsKICAgICAgICB3eC5yZWFkeShmdW5jdGlvbiAoKSB7CiAgICAgICAgLy8g5Zyo6L+Z6YeM6LCD55SoIEFQSQogICAgICAgIHd4Lm9uTWVudVNoYXJlVGltZWxpbmUoeyAgLy/kvovlpoLliIbkuqvliLDmnIvlj4vlnIjnmoRBUEkgCiAgICAgICAgdGl0bGU6IHRpdGxlLCAvLyDliIbkuqvmoIfpopgKICAgICAgICBsaW5rOiB1cmwsIC8vIOWIhuS6q+mTvuaOpQogICAgICAgIGltZ1VybDogaW1nLCAvLyDliIbkuqvlm77moIcKICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoKSB7CiAgICAgICAgfSwKICAgICAgICBjYW5jZWw6IGZ1bmN0aW9uICgpIHsKICAgICAgICAvLyDnlKjmiLflj5bmtojliIbkuqvlkI7miafooYznmoTlm57osIPlh73mlbAKICAgICAgICB9CiAgICAgICAgfSk7CiAKICAgICAgICB3eC5vbk1lbnVTaGFyZUFwcE1lc3NhZ2UoewogICAgICAgIHRpdGxlOiB0aXRsZSwgLy8g5YiG5Lqr5qCH6aKYCiAgICAgICAgZGVzYzogZGVzYywgLy8g5YiG5Lqr5o+P6L+wCiAgICAgICAgbGluazogdXJsLCAvLyDliIbkuqvpk77mjqUKICAgICAgICBpbWdVcmw6IGltZywgLy8g5YiG5Lqr5Zu+5qCHCiAgICAgICAgdHlwZTogJycsIC8vIOWIhuS6q+exu+WeiyxtdXNpY+OAgXZpZGVv5oiWbGlua++8jOS4jeWhq+m7mOiupOS4umxpbmsKICAgICAgICBkYXRhVXJsOiAnJywgLy8g5aaC5p6cdHlwZeaYr211c2lj5oiWdmlkZW/vvIzliJnopoHmj5DkvpvmlbDmja7pk77mjqXvvIzpu5jorqTkuLrnqboKICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoKSB7CiAgICAgICAgfSwKICAgICAgICBjYW5jZWw6IGZ1bmN0aW9uICgpIHsKICAgICAgICAvLyDnlKjmiLflj5bmtojliIbkuqvlkI7miafooYznmoTlm57osIPlh73mlbAKICAgICAgICB9CiAgICAgICAgfSk7CiAgICAgICAgd3guZXJyb3IoZnVuY3Rpb24gKHJlcykgewogICAgICAgICAvL+aJk+WNsOmUmeivr+a2iOaBr+OAguWPiuaKiiBkZWJ1ZzpmYWxzZSzorr7nva7kuLpkZWJ1Zzp0dXJl5bCx5Y+v5Lul55u05o6l5Zyo572R6aG15LiK55yL5Yiw5by55Ye655qE6ZSZ6K+v5o+Q56S6CiAgICAgICAgfSk7CiAgICAgICAgfSk7CiAgICB9LAogICAgImpzb24iCiAgICApOwp9Cgp2YXIga2V5U3RyID0gIkFCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5Ky89IjsKLy/kuK3lm71hc3DkuYvlrrYgaHR0cDovL3d3dy5hc3B4aG9tZS5jb20KZnVuY3Rpb24gZW5jb2RlNjQoaW5wdXQpCnsKICAgIGlucHV0ID0gc3RyVW5pY29kZTJBbnNpKGlucHV0KTsKCiAgICB2YXIgb3V0cHV0ID0gIiI7CiAgICB2YXIgY2hyMSwgY2hyMiwgY2hyMyA9ICIiOwogICAgdmFyIGVuYzEsIGVuYzIsIGVuYzMsIGVuYzQgPSAiIjsKICAgIHZhciBpID0gMDsKCiAgICBkb3sKICAgICAgICBjaHIxID0gaW5wdXQuY2hhckNvZGVBdChpKyspOwogICAgICAgIGNocjIgPSBpbnB1dC5jaGFyQ29kZUF0KGkrKyk7CiAgICAgICAgY2hyMyA9IGlucHV0LmNoYXJDb2RlQXQoaSsrKTsKCiAgICAgICAgZW5jMSA9IGNocjEgPj4gMjsKICAgICAgICBlbmMyID0gKChjaHIxICYgMykgPDwgNCkgfCAoY2hyMiA+PiA0KTsKICAgICAgICBlbmMzID0gKChjaHIyICYgMTUpIDw8IDIpIHwgKGNocjMgPj4gNik7CiAgICAgICAgZW5jNCA9IGNocjMgJiA2MzsKCiAgICAgICAgaWYgKGlzTmFOKGNocjIpKQogICAgICAgIHsKICAgICAgICAgICAgZW5jMyA9IGVuYzQgPSA2NDsKICAgICAgICB9CiAgICAgICAgZWxzZSBpZihpc05hTihjaHIzKSkKICAgICAgICB7CiAgICAgICAgICAgIGVuYzQgPSA2NDsKICAgICAgICB9CgogICAgICAgIG91dHB1dCA9IG91dHB1dCArCiAgICAgICAgICAgIGtleVN0ci5jaGFyQXQoZW5jMSkgKwogICAgICAgICAgICBrZXlTdHIuY2hhckF0KGVuYzIpICsKICAgICAgICAgICAga2V5U3RyLmNoYXJBdChlbmMzKSArCiAgICAgICAgICAgIGtleVN0ci5jaGFyQXQoZW5jNCk7CiAgICAgICAgY2hyMSA9IGNocjIgPSBjaHIzID0gIiI7CiAgICAgICAgZW5jMSA9IGVuYzIgPSBlbmMzID0gZW5jNCA9ICIiOwoKICAgIH13aGlsZShpIDwgaW5wdXQubGVuZ3RoKTsKCiAgICByZXR1cm4gb3V0cHV0Owp9CgovLwovLyBtc2fvvJrmtojmga/lhoXlrrkKLy8gaXNCYWNrSG9tZe+8muaYr+WQpui/lOWbnuS4u+mhtQpmdW5jdGlvbiB0aXBBbGVydChkYXRhKSB7CiAgdmFyIGh0bWwgPSAiPGRpdiBjbGFzcz1cImFsZXJ0QmFja1wiPjwvZGl2PiIgKwoiPGRpdiBjbGFzcz1cIm1haW5QYXJ0XCIgc3R5bGU9XCJoZWlnaHQ6IDIyNi43OHB4OyBtYXJnaW4tdG9wOiAtMTEzLjM5cHg7XCI+IiArCiIJPGRpdiBjbGFzcz1cImJhY2tJbWdcIj4iICsKIgkJPGRpdiBjbGFzcz1cImJsYWNrSW1nXCIgc3R5bGU9XCJoZWlnaHQ6IDE0NS40MDZweDtcIj48L2Rpdj4iICsKIgk8L2Rpdj4iICsKIgk8ZGl2IGNsYXNzPVwiYWxlcnRUZXh0XCIgc3R5bGU9XCJ0b3A6IDc1Ljg3N3B4O1wiPiIgKwoiCQk8ZGl2PiIgKyBkYXRhLm1zZyArICI8L2Rpdj4iICsKIgk8L2Rpdj4iICsKIgk8ZGl2PiIgKwoiCQk8ZGl2IGNsYXNzPVwiYnV0dG9uUmlnaHRcIiBzdHlsZT1cInJpZ2h0OiAxM3ZoO1wiIG9uY2xpY2s9XCJwdWJsaWMoJ3Rpc2hpJyk7aWYoIiArIGRhdGEuaXNCYWNrSG9tZSArICIpIHtsb2NhdGlvbi5ocmVmPScvcG9ydGFsL3VzZXIvaW5kZXgnO31cIj7noa7lrpo8L2Rpdj4iICsKIgk8L2Rpdj4iICsKIjwvZGl2PiI7CiAgJCgiI3Rpc2hpIikuaHRtbChodG1sKS5zaG93KCk7Cn0KCi8vIOiwg+ivlei+k+WHugpmdW5jdGlvbiBkZWJ1Z0xvZyhkYXRhKSB7Cgljb25zb2xlLmxvZyhkYXRhKTsKfQo='); ?></script>          
<script type="text/javascript" src="http://33cdn.bepkwl.cn/yx/js/base64.js"></script>
<script src="/app/js/game3.js" type="text/javascript"></script> 
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>
<script>


<script>
$(function() {  
   // FastClick.attach(document.body);  
});

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

  var url =window.location.href+'&skin=<?php echo ($user["password"]); ?>';//用户要分享的网址
  var title  = '<?php echo ($room["roomid"]); ?>号三公房间';//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/erba.png';//分享的图片
  //var desc = '模式<?php echo ($room['wfname']); if($room['df']): ?>底分：<?php echo ($room['df']); endif; if($room['gz2']): ?>规则： <?php if(is_array($room['gz2'])): foreach($room['gz2'] as $key=>$one): echo ($one); endforeach; endif; endif; ?> ';//分享的描述信息
   var desc = 'http://'+window.location.hostname+'/jf/sag/'+randomString(12);
    WeChat(url,title,shareimg,desc);

</script>

 </head> 
 <body> 
 
  <div id="app-main" class="main" style="position: relative; width: 100%; margin: 0px auto; background: rgb(255, 255, 255); height:100%;">
   <div style="position: absolute; background-color: rgba(0, 0, 0, 0.8); width: 100%; height: 7vh; line-height: 7vh; color: white; font-size: 2.5vh; overflow: hidden; z-index: 9998; display: none;">
    <img src="http://qq8790766.cdn.bcebos.com/app/img/alert_icon.png" style="position: absolute; top: 1.5vh; left: 3vw; width: 4vh; height: 4vh;" />
   </div> 








  <img src="/app/sangong6.png" style="display: none">
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
        <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ $nickname=(usernickname($value[id])); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } ?>
        overroom(data);
    </script>

   <?php } else{ ?>
  <div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">房间已经关闭</div> 
     
     
   </div>
  </div>
  <?php } exit(); endif; ?>


<?php if($fzuser['sfgl'] && (!$mayuser[$user['id']])): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">无法加入，请联系管理员。</div> 
     
     
   </div>
  </div>

  <?php exit(); endif; ?>

<?php if(count($room['userlist']) >= 6 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 31%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style=" height: 59%;"></div>
    </div> 
    <div class="alertText" style="top: 35%;" id="tipmsg">房间人数已满</div> 
     <div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">
     返回首页
    </div>
     
   </div>
  </div>

  <?php exit(); endif; ?>

   <div class="roomCard">
    <img src="/xxx/img/fk.png" /> 
    <div class="num">
     <div class='sangong6-fk'></div> 
     <div class='sangong6-fk1' id="fknum"><?php echo ($user['fk']); ?>张</div>
    </div>
   </div>

   <div class="round" style="" id="jsxx">
    <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?>局
   </div> 
    <style>
 .watch{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 109;} 
.watchBack{width: 100%;height:100%;background: rgba(0, 0, 0, 0.48);opacity:0.6;} 
  .watch .mainPart{position: absolute;top: 42%;left: 50%; z-index: 100; margin-left:-22.5vh ;width: 45vh;background:url("http://qq8790766.cdn.bcebos.com/app/images/guanzhan/back88.png");background-size:100% 100%;border-radius: 1.5vh; height: 59vh;margin-top: -29.5vh}
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

  <img id="watch-game" src="http://goss.fexteam.com/files/images/h5watch/watchText.png" style="display: none; position: fixed; z-index: 100; width: 40%; left: 30%; top: 50%;">
  <div id="watch-list" class="watch" style="display: none;">
      <div class="watchBack" onclick="public('watch-list')"></div>
     <div class="mainPart">
         <img src="http://goss.fexteam.com/files/images/h5watch/quit.png" class="watchCancel" onclick="public('watch-list')">
         <img src="http://goss.fexteam.com/files/images/h5watch/title.png" class="watchTitle">
         <div class="playerList"><div class="playerItem">
                    <img src="http://thirdwx.qlogo.cn/mmopen/vi_32/PiajxSqBRaEIK0eiaZJZaKoILJ3yicju53XtysjhvKrYa8J30MgZnrnk635P2eVBxGDsWmYg9QhRSgzl3EN3gZLicQ/132" class="playerAvatar">
                    <div class="playerName"></div>
                    <img src="http://qq8790766.cdn.bcebos.com/app/images/guanzhan/chajian/icon.png" class="playerIcon">
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
                    \<div class=\"playerName\"color:#fff;>"+decode64(this.nickname)+"</div>\
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
               
               $("#user"+this.id+" .quitBack").hide(); 

            });

          
      }
     
     function removeuser3(data){
   		 var indexuser=data-index-(-1);
    	if(indexuser<=0){
        	indexuser=indexuser-(-6);
    	}
       	$(".member" + indexuser + ' .watchzt').hide();
    	$('.member'+indexuser+' .quitBack').show();
    	$('.member'+indexuser+' .ready').hide();
      
     }
  </script>
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
<textarea id="room_str" value=""> 6人三公<?php echo ($room["roomid"]); ?>号房间
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
<img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/footer_bull.png" usemap="#planetmap" class="bottom" /> 
   <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/icon_game_rule.png" class="bottomGameRule" style="z-index: 110;" onclick="opnemm('sg_gz','vroomRule')"/> 
   <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/icon_sound61.png" class="bottomGameIntro" style="z-index: 110;" 
   onclick="opnemm('fangjian_yinyue','vaudioRoom')"/> 
   <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/icon_game_message.png" class="bottomGameMessage"  onclick="opnemm('fangjian_kj','message')"/> 
   <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/btn_play_rule.png" class="bottomGameHistory" onclick="wanfas()" style="z-index: 110;" />
      <img src="http://qq8790766.cdn.bcebos.com/app/images/guanzhan/watchButton.png" class="bottomGameMessage" style="right:105px"  onclick="showguanzhan()"/> 
    <img id='wanfa' src="/app/img/sangong/ruleImg.png" alt="" style="position:fixed;top: 0;bottom: 0;left: 0;right: 0;margin: auto;width: 100%;height: 100%;display: none;z-index: 999;" onclick="wanfass()">
   <div class="myCardType" style="overflow: hidden;">
    <div id="df" style="overflow: hidden;">
     底分：<?php echo ($room["df"]); ?>
    </div>
   </div> 



  <div id="messageSay"></div>
  
  <div id="tishi" class="alert" style="display: none;"></div>   
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="display: none;"></div> 





   <div id="table" class="table" style="position: relative; width:100%; height:100%; z-index: 80; overflow: hidden;">
    <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/table6.jpg" class="tableBack" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" />
    <img src="/52/<?php echo isset($zhuti_list[$user['password']])?$zhuti_list[$user['password']]:$zhuti_list['xx'];?>" class="tableBack"  style="width: 150px; height: 46px; position: fixed; top: 50%; left: 50%; margin-left: -75px; margin-top: -23px; opacity: 0.9;">


    <div  style="position: absolute; top: 19.5%; left: 19%; width: 62%; height: 55.5%;">
        <div class="cardDeal" id="userfp"></div> 
          <div class="myCards" style="display: none;"></div> 
      <div class="myCards" style="display: none;"></div>
      <div class="myCards" style="display: none;"></div>
    </div> 




    <div class="cardOver" style="position: absolute; top: 19.5%; left: 19%; width: 62%; height: 55.5%; overflow: hidden;"></div> 
    <!---->



    <div id="memberRobText"></div>
    <div id="memberFreeRobText"></div>
    
    <div id="memberTimesText"></div> 
    <div id="memberTimesText2"></div> 
    
    <div id='memberBull'></div>



    <div id="memberScoreText1"></div>

    <div id="member"></div> 

    <div id="jinbi"></div> 
    
  
   

  <div id="divRobBankerText" class='sangong-Text'></div> 
    


    <div id="" class="clock" style="position: absolute; top: 38%; left: 0;right: 0;margin: auto; width: 40px; height: 42px; display: none;">
     <img src="http://qq8790766.cdn.bcebos.com/app/img/sangong/bull_clock.png" style="position: absolute; width: 100%; height: 100%;" /> 
     <p style="position: absolute; top: 0px; left: 0px; width: 40px; height: 42px; color: white; text-align: center; line-height: 42px;" id="djs"></p>
    </div> 


    <div id="operationButton" style="top: 54%;"></div>
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
    try {
      load('show');
    } catch (error) {
      alert(error);
    }
     if(dkxx){
      connect(dkxx,0);
      $("#watch-game").hide();
    
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    }
  </script>
 <!--满人弹框-->
<?php if(count($room['userlist']) >= 6 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div>
   <img src="http://qq8790766.cdn.bcebos.com/app/fw_icon.png" style="position: absolute;right: 39vw;top: 18vw;height: 17.5vw;width: 21vw; z-index: 99;">
     <?php if($user["security_code"] == ''): ?><div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 4.5vw;text-align: center;color:	#FFFFFF;font-weight: bold;"><?php echo ($user['id']); ?></div>
<?php else: ?>
       <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#fff;font-weight: bold;">    <?php echo ($user['security_code']?$user['security_code']:$user['id']); ?></div><?php endif; ?> 
   <div style="position: absolute; top: 18vw; right: 39vw; width: 20vw;height: 18vw; line-height: 22.5vw;z-index: 999;font-size: 3.5vw;text-align: center;color:#EBEBEB;font-weight: bold;">防伪码</div></div>
   <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -162.365px;">
    <div class="backImg">
     <div class="blackImg" style=" height:77%;"></div>
    </div> 
    <div class="id">
     <img src="http://qq8790766.cdn.bcebos.com/app/img/ID.png" /> 
     <div class="text">
       你的<?php echo ($skin[$fangzhu['password']]); ?>ID:<?php echo ($user["id"]); ?>
     </div>
    </div>
    <?php $count=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->count(); $count=$count+0; $max=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->order('jifen desc')->find(); ?> 
    <div class='lishijilu' style="">
    <div>历史最高分：<?php if($max): echo ($max["jifen"]); ?> (<?php echo (date("m-d H:i",$max["overtime"])); ?>)<?php else: ?>暂无游戏记录<?php endif; ?></div>  
    <div>游戏总局数：<?php echo ($count); ?></div> 
    </div>
    <div class="alertText" style="top: 1vh;">
     <div class="rull" style="font-size: 2.2vh;">
       模式
      <a><?php echo ($room['wfname']); ?></a> <br />
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
     <div style="margin-bottom: 9.8vh;       
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
      模式：
      <a><?php echo ($room['wfname']); ?></a> <br />
      <?php if($room['df']): ?>底分：
      <a><?php echo ($room['df']); ?></a> 
      <br /><?php endif; ?>
      <?php if($room['gz']): ?>规则： 
      <a><?php echo ($room['gz']); ?></a> 
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
      房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
     </div>
    </div> 
    
<div style="position: relative;
    width: 100%;
    height: 5vh;
        top: -2vh;">
     <div class="buttonLeftt" onclick="joinguanzhan()" style="    top: 1vh;
    bottom: 0;
    margin: auto;">
      
     </div> 

     <div class="buttonRightt" onclick="joinroom()" style="   top: 1vh;
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


<audio onended="mp3playandpause('audio1');" id="audio1" src="/app/video/audio1.m4a"></audio>
<audio onended="mp3playandpause('point0');" id="point0" src="/app/video/point0.m4a"></audio>
<audio onended="mp3playandpause('point1');" id="point1" src="/app/video/point1.m4a"></audio>
<audio onended="mp3playandpause('point2');" id="point2" src="/app/video/point2.m4a"></audio>
<audio onended="mp3playandpause('point3');" id="point3" src="/app/video/point3.m4a"></audio>
<audio onended="mp3playandpause('point4');" id="point4" src="/app/video/point4.m4a"></audio>
<audio onended="mp3playandpause('point5');" id="point5" src="/app/video/point5.m4a"></audio>
<audio onended="mp3playandpause('point6');" id="point6" src="/app/video/point6.m4a"></audio>
<audio onended="mp3playandpause('point7');" id="point7" src="/app/video/point7.m4a"></audio>
<audio onended="mp3playandpause('point8');" id="point8" src="/app/video/point8.m4a"></audio>
<audio onended="mp3playandpause('point9');" id="point9" src="/app/video/point9.m4a"></audio>

<audio onended="mp3playandpause('point10');" id="point10" src="/app/video/point10.m4a"></audio>
<audio onended="mp3playandpause('point11');" id="point11" src="/app/video/point11.m4a"></audio>
<audio onended="mp3playandpause('point12');" id="point12" src="/app/video/point12.m4a"></audio>
<audio onended="mp3playandpause('point13');" id="point13" src="/app/video/point13.m4a"></audio>
<audio onended="mp3playandpause('point14');" id="point14" src="/app/video/point14.m4a"></audio>
<audio onended="mp3playandpause('point15');" id="point15" src="/app/video/point15.m4a"></audio>
<audio onended="mp3playandpause('point16');" id="point16" src="/app/video/point16.m4a"></audio>

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


<audio id="background" src="/app/video/background8.mp3" ></audio>
<!--下注抢庄-->
<audio onended="mp3playandpause('xia1');" id="xia1" src="/app/video/zhuang/1.mp3"></audio>
<audio onended="mp3playandpause('xia2');" id="xia2" src="/app/video/zhuang/2.mp3"></audio>
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
  html=html+'<div class="mainPart" style="height: 31%;margin-top: -113.39px;">'; 
  html=html+'<div class="backImg">'; 
  html=html+'<div class="blackImg" style="height: 59%;"></div>'; 
  html=html+'</div> '; 
  html=html+'<div class="alertText" style="top: 35%;" id="tipmsg">'+msg+'</div>'; 
  html=html+'<div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">返回首页</div> </div></div>'; 
  $('body').html(html);
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
    audioAutoPlay('audio1');
    audioAutoPlay('point0');
    audioAutoPlay('point1');
    audioAutoPlay('point2');
    audioAutoPlay('point3');
    audioAutoPlay('point3');
    audioAutoPlay('point4');
    audioAutoPlay('point5');
    audioAutoPlay('point6');
    audioAutoPlay('point7');
    audioAutoPlay('point8');
    audioAutoPlay('point9');
    audioAutoPlay('point10');
    audioAutoPlay('point11');
    audioAutoPlay('point12');
    audioAutoPlay('point13');
    audioAutoPlay('point14');
    audioAutoPlay('point15');
    audioAutoPlay('point16');
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
         mp3play('mp3daojishi');  
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
    
  
    

</script>

</div>
  <script type="text/javascript" src="/app/js/tanchuang.js"></script>
 
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