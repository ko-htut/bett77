<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="x5-fullscreen" content="true">
<meta name="full-screen" content="yes">

<title>九人牛牛房间<?php echo ($room["roomid"]); ?></title>
<?php echo base64_decode('IDxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Imh0dHA6Ly9xcTg3OTA3NjYuY2RuLmJjZWJvcy5jb20veXkvY3NzLzlybm4uY3NzIj4NCiA8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvYXBwL2Nzcy9hbGVydC0xLjEuY3NzIj4gDQo8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvYXBwL2Nzcy9idWxsc2hvcC0xLjAuY3NzIj4NCjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Imh0dHA6Ly9xcTg3OTA3NjYuY2RuLmJjZWJvcy5jb20veXkvY3NzL3B1YmxpYzkuY3NzIj4NCiA8bGluayByZWw9InN0eWxlc2hlZXQiIGhyZWY9Ii9hcHAvY3NzL3BwcC5jc3MiIC8+IA=='); ?></script>
 <?php $zhuti_list = ['xx' => 'xx.png', 'tt' => 'tt.png','yf' => 'yf.png', 'xd' => 'xd.png', 'hl' => 'hl.png', 'dd' => 'dd.png', 'lele' => 'lele.png' ,'ht' => 'ht.png', 'uu' => 'yy.png', 'kk' => 'kk.png', 'ym' => 'tt1.png', 'rr' => 'rr.png', 'xdd' => 'xdd.png', 'lt' => 'lt.png' ]; ?>
  <script src="/app/js/clipboard.min.js"type="text/javascript"></script> 
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
<script type="text/javascript"><?php echo base64_decode('LyoqCiAqIGdhbWXlhazlhbHnmoRqc+W6kwogKiB2b2lkIDDmm7/ku6N1bmRlZmluZWQKICog5pS+5aSn5qih5byP5a6e546w5a+56LGh55qE5pa55rOV5ZKM5bGe5oCn5rOo5YWl77yM5a6e546w5Yqo5oCB5oyC6L29CiAqIGF1dGhvcjogaGVpZ2UKICogdGltZTogMjAxNy0wMS0wNQogKi8KKGZ1bmN0aW9uKG1vZCwgd2luLCBkb2MpIHsKICAgIC8v5rWP6KeI5Zmo5a+56LGhCiAgICB2YXIgYnJvd3NlciA9IHsKICAgICAgICB2ZXJzaW9uczogZnVuY3Rpb24oKSB7CiAgICAgICAgICAgIHZhciB1ID0gbmF2aWdhdG9yLnVzZXJBZ2VudDsKICAgICAgICAgICAgcmV0dXJuIHsKICAgICAgICAgICAgICAgIHRyaWRlbnQ6IHUuaW5kZXhPZigiVHJpZGVudCIpID4gLTEsCiAgICAgICAgICAgICAgICBwcmVzdG86IHUuaW5kZXhPZigiUHJlc3RvIikgPiAtMSwKICAgICAgICAgICAgICAgIHdlYktpdDogdS5pbmRleE9mKCJBcHBsZVdlYktpdCIpID4gLTEsCiAgICAgICAgICAgICAgICBnZWNrbzogdS5pbmRleE9mKCJHZWNrbyIpID4gLTEgJiYgLTEgPT0gdS5pbmRleE9mKCJLSFRNTCIpLAogICAgICAgICAgICAgICAgbW9iaWxlOiAhIXUubWF0Y2goL0FwcGxlV2ViS2l0LipNb2JpbGUuKi8pIHx8ICEhdS5tYXRjaCgvQXBwbGVXZWJLaXQvKSwKICAgICAgICAgICAgICAgIGlvczogISF1Lm1hdGNoKC9cKGlbXjtdKzsoIFU7KT8gQ1BVLitNYWMgT1MgWC8pIHx8ICEhdS5tYXRjaCgvaXBob25lfGlwb2R8aXBhZHxNYWMvZ2kpLAogICAgICAgICAgICAgICAgYW5kcm9pZDogdS5pbmRleE9mKCJBbmRyb2lkIikgPiAtMSB8fCAhIXUubWF0Y2goL0FuZHJvaWR8QWRyfExpbnV4L2dpKSwKICAgICAgICAgICAgICAgIGlQaG9uZTogdS5pbmRleE9mKCJpUGhvbmUiKSA+IC0xIHx8IHUuaW5kZXhPZigiTWFjIikgPiAtMSwKICAgICAgICAgICAgICAgIGlQYWQ6IHUuaW5kZXhPZigiaVBhZCIpID4gLTEsCiAgICAgICAgICAgICAgICBpUG9kOiAiaXBvZCIgPT0gdS5tYXRjaCgvaVBvZC9pKSwKICAgICAgICAgICAgICAgIHdlYkFwcDogLTEgPT0gdS5pbmRleE9mKCJTYWZhcmkiKSwKICAgICAgICAgICAgICAgIGlzd2VpeGluOiAibWljcm9tZXNzZW5nZXIiID09IHUubWF0Y2goL01pY3JvTWVzc2VuZ2VyL2kpLAogICAgICAgICAgICAgICAgdWE6IHUKICAgICAgICAgICAgfQogICAgICAgIH0oKQogICAgfTsKCiAgICAvL+iOt+WPluaJi+acuuiuvuWkh+exu+WeiwogICAgZnVuY3Rpb24gZ2V0RGV2aWNlU3lzdGVtKCkgewogICAgICAgIHZhciBzeXN0ZW0gPSAiYW5kcm9pZCI7CiAgICAgICAgaWYgKGJyb3dzZXIudmVyc2lvbnMuaW9zIHx8IGJyb3dzZXIudmVyc2lvbnMuaVBob25lIHx8IGJyb3dzZXIudmVyc2lvbnMuaVBhZCB8fCBicm93c2VyLnZlcnNpb25zLmlQb2QpIHsKICAgICAgICAgICAgc3lzdGVtID0gJ2lvcyc7CiAgICAgICAgfQoKICAgICAgICByZXR1cm4gc3lzdGVtOwogICAgfTsKCiAgICAvL+iOt+WPlmlvc+ezu+e7n+eJiOacrAogICAgZnVuY3Rpb24gZ2V0SW9zVmVyc2lvbigpIHsKICAgICAgICB2YXIgdmVyc2lvbiwgdmVyaW5mbyA9IGJyb3dzZXIudmVyc2lvbnMudWEubWF0Y2goL29zIFtcZC5fXSovZ2kpOwogICAgICAgIGlmIChudWxsICE9IHZlcmluZm8gJiYgdmVyaW5mby5sZW5ndGggPiAwKSB7CiAgICAgICAgICAgIHZlcnNpb24gPSB2ZXJpbmZvLnRvU3RyaW5nKCkucmVwbGFjZSgvW14wLTl8Xy5dL2dpLCAiIikucmVwbGFjZSgvXy9naSwgIi4iKTsKICAgICAgICB9CgogICAgICAgIHJldHVybiB2b2lkIDAgIT09IHZlcnNpb24gJiYgdmVyc2lvbi5sZW5ndGggPiAwID8gdmVyc2lvbiA6ICIiOwogICAgfTsKCiAgICAvL+W+ruS/oeS4rWEtLS0+Yizku45i6L+U5ZueYemhtemdou+8jOmcgOimgeaJp+ihjEZ1dHVyZWdhbWVzLmluaXRXeFBhZ2UodGl0bGUsdXJsKTsKICAgIC8v6K+l5q61anPmlL7lnKhi6aG16Z2iCiAgICAvL+eUqOazleWmguS4i++8mgogICAgLyoKICAgICAvL2EtLS0+YixiLS0tPmEKICAgICBGdXR1cmVnYW1lcy5pbml0V3hQYWdlKHRpdGxlLGFfdXJsKTsKCiAgICAgLy9hLS0tPmIsYi0tLS0+YwogICAgIEZ1dHVyZWdhbWVzLnB1c2hIaXN0b3J5KHRpdGxlLHBhZ2VfYV91cmwpOwogICAgIEZ1dHVyZWdhbWVzLmNsb3NlV3hQYWdlKCJodHRwOi8vd3d3LmJhaWR1LmNvbSIpOwogICAgICovCiAgICB2YXIgb2JqID0gewogICAgICAgIHB1c2hIaXN0b3J5OiBmdW5jdGlvbih0aXRsZSwgcGFnZV9hX3VybCkgewogICAgICAgICAgICB2YXIgc3RhdGUgPSB7CiAgICAgICAgICAgICAgICB0aXRsZTogdGl0bGUgfHwgZG9jLnRpdGxlLAogICAgICAgICAgICAgICAgdXJsOiBwYWdlX2FfdXJsIHx8IGxvY2F0aW9uLmhyZWYsCiAgICAgICAgICAgIH07CiAgICAgICAgICAgIHdpbi5oaXN0b3J5LnB1c2hTdGF0ZShzdGF0ZSwgc3RhdGUudGl0bGUsIHN0YXRlLnVybCk7CiAgICAgICAgfSwKICAgICAgICBjbG9zZVd4UGFnZTogZnVuY3Rpb24odXJsKSB7CiAgICAgICAgICAgIHdpbi5hZGRFdmVudExpc3RlbmVyKCJwb3BzdGF0ZSIsIGZ1bmN0aW9uKGUpIHsgLy/lm57osIPlh73mlbDkuK3lrp7njrDpnIDopoHnmoTlip/og70KICAgICAgICAgICAgICAgIGlmICh0eXBlb2Ygd3ggIT0gInVuZGVmaW5lZCIgJiYgdHlwZW9mIHd4LmNsb3NlV2luZG93ID09ICdmdW5jdGlvbicpIHsKICAgICAgICAgICAgICAgICAgICB3eC5jbG9zZVdpbmRvdygpOwogICAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgIGxvY2F0aW9uLmhyZWYgPSB1cmwgfHwgbG9jYXRpb24uaG9zdDsgLy/lnKjov5nph4zmjIflrprlhbbov5Tlm57nmoTlnLDlnYAKICAgICAgICAgICAgfSwgZmFsc2UpOwogICAgICAgICAgICByZXR1cm4gZmFsc2U7CiAgICAgICAgfSwKICAgICAgICAvL3dlaXhpbuWIneWni+WMlui/lOWbnuaIluWFs+mXreaTjeS9nAogICAgICAgIGluaXRXeFBhZ2U6IGZ1bmN0aW9uKHRpdGxlLCBwYWdlX2FfdXJsKSB7IC8v5pys5ri45oiP5LitcGFnZV9hX3VybCDkuLovCiAgICAgICAgICAgIHJldHVybiBmYWxzZTsKICAgICAgICAgICAgdmFyIGlvc1ZlcnNpb24gPSBnZXRJb3NWZXJzaW9uKCkucmVwbGFjZSgvXC4vZywgIiIpOwogICAgICAgICAgICB2YXIgc3lzdGVtID0gZ2V0RGV2aWNlU3lzdGVtKCk7CiAgICAgICAgICAgIC8vIGlvcyA5LjAuMOS7peS4i+eahOezu+e7n+S4jeiwg+eUqOW+ruS/oeWIneWni+WMlgogICAgICAgICAgICBpZiAoImlvcyIgPT0gc3lzdGVtICYmICIiICE9IGlvc1ZlcnNpb24gJiYgcGFyc2VGbG9hdChpb3NWZXJzaW9uKSA8IDkwMCkgewogICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlOwogICAgICAgICAgICB9CgogICAgICAgICAgICB0aGlzLnB1c2hIaXN0b3J5KHRpdGxlIHx8IChkb2MudGl0bGUgfHwgJycpLCBwYWdlX2FfdXJsIHx8ICcvJyk7CiAgICAgICAgICAgIHRoaXMuY2xvc2VXeFBhZ2UocGFnZV9hX3VybCB8fCAnLycpOwogICAgICAgIH0sCiAgICB9OwoKICAgIC8v5a+55aSW5pq06Zyy55qE5pa55rOVCiAgICBtb2QuYnJvd3NlciA9IGJyb3dzZXI7CiAgICBtb2QuZ2V0RGV2aWNlU3lzdGVtID0gZ2V0RGV2aWNlU3lzdGVtOwogICAgbW9kLmdldElvc1ZlcnNpb24gPSBnZXRJb3NWZXJzaW9uOwogICAgbW9kLnB1c2hIaXN0b3J5ID0gb2JqLnB1c2hIaXN0b3J5OwogICAgbW9kLmNsb3NlV3hQYWdlID0gb2JqLmNsb3NlV3hQYWdlOwogICAgbW9kLmluaXRXeFBhZ2UgPSBvYmouaW5pdFd4UGFnZTsKCn0pKHdpbmRvdy5GdXR1cmVnYW1lcyA9IHdpbmRvdy5GdXR1cmVnYW1lcyB8fCB7fSwgd2luZG93LCBkb2N1bWVudCk7Cgp2YXIgZ2xib2xkYXRheHggPSBbXTsKCgpmdW5jdGlvbiBvcG5lbW0oaHRtbCwgaWQpIHsKCiAgICBpZihpc2d1YW56aGFuPT0xICYmIGlkPT0ibWVzc2FnZSIpCiAgICB7CiAgICAgICAgLy9hbGVydCgi6KeC5oiY5LiN6IO96IGK5aSpIik7CiAgICAgICAgcmV0dXJuOwogICAgfQogICAgaWYgKCFnbGJvbGRhdGF4eFtpZCArIGh0bWxdKSB7CiAgICAgICAgJC5nZXQoJy9pbmRleC5waHAvcG9ydGFsL2luZGV4LycgKyBodG1sICsgJy9yb29tLycgKyByb29tLCBmdW5jdGlvbihkYXRhKSB7CiAKICAgICAgICAgICAgZ2xib2xkYXRheHhbaWQgKyBodG1sXSA9IGRhdGE7CiAgICAgICAgICAgICQoJyMnICsgaWQpLmh0bWwoZGF0YSk7CiAgICAgICAgICAgICQoJyMnICsgaWQpLnNob3coKTsKICAgICAgICAgICAgJCgnI3Njcm9sbC1ib3gyJykuaGlkZSgpOyAKICAgICAgICAgICAgJCgnLnl1eWluQnV0dG9uJykuYWRkQ2xhc3MoJ3l1eWluQnV0dG9uSW1nJyk7ICAKICAgICAgICB9KTsKICAgIAogICAgfSBlbHNlIHsKICAgICAgICBpZiAoaWQgIT0gJ21lc3NhZ2UnKSB7CiAgICAgICAgICAgIGNvbnNvbGUubG9nKGdsYm9sZGF0YXh4W2lkICsgaHRtbF0pOwogICAgICAgICAgICAvLyQoJyMnICsgaWQpLmh0bWwoZ2xib2xkYXRheHhbaWQgKyBodG1sXSk7CiAgICAgICAgfQoKICAgICAgCiAgICAgICAgJCgnIycgKyBpZCkuc2hvdygpOwogICAgfQp9CgpmdW5jdGlvbiBlbW9qaUJ1dHRvbigpIHsKICAgICQoJyNzY3JvbGwtYm94JykuaGlkZSgpOyAKICAgICQoJyNzY3JvbGwtYm94MicpLnNob3coKTsgCiAgICAkKCcuZW1vamlCdXR0b24nKS5hZGRDbGFzcygnZW1vamlCdXR0b25JbWcnKTsgIAogICAgJCgnLnl1eWluQnV0dG9uJykucmVtb3ZlQ2xhc3MoJ3l1eWluQnV0dG9uSW1nJyk7CiAgIH0KCiAgIGZ1bmN0aW9uIHl1eWluQnV0dG9uKCkgewogICAgJCgnI3Njcm9sbC1ib3gyJykuaGlkZSgpOyAKICAgICQoJyNzY3JvbGwtYm94Jykuc2hvdygpOyAgCiAgICAkKCcueXV5aW5CdXR0b24nKS5hZGRDbGFzcygneXV5aW5CdXR0b25JbWcnKTsgICAKICAgICQoJy5lbW9qaUJ1dHRvbicpLnJlbW92ZUNsYXNzKCdlbW9qaUJ1dHRvbkltZycpOyAgCiAgIH0KCiAgIApmdW5jdGlvbiBzZWxlY3RDaGFuZ2UodHlwZSwgaWQsIGluZGV4KSB7CiAgICBnbGJvbGRhdGF4eFttYl1bdHlwZV0gPSBpbmRleDsKICAgICQoJy4nICsgdHlwZSkuZmluZCgnaW1nJykuaGlkZSgpOwogICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuc2hvdygpOwp9CgpmdW5jdGlvbiBzZWxlY3RDaGFuZ2VzKHR5cGUsIGlkLCBpbmRleCkgewogICAgZ2xib2xkYXRheHhbbWJdW3R5cGVdID0gaW5kZXg7CiAgICBpZiAoJCgnIycgKyBpZCkuY2hpbGRyZW4oJ2ltZycpLmNzcygnZGlzcGxheScpID09ICdibG9jaycpIHsKICAgICAgICAkKCcjJyArIGlkKS5jaGlsZHJlbignaW1nJykuaGlkZSgpOwogICAgfSBlbHNlIHsKICAgICAgICAkKCcjJyArIGlkKS5jaGlsZHJlbignaW1nJykuc2hvdygpOwogICAgfQp9CgpmdW5jdGlvbiB6aGVuZ3prZigpIHsKICAgIGFsZXJ0KCfmlazor7fmnJ/lvoUnKTsKfQoKZnVuY3Rpb24gY2FuY2VsQ3JlYXRlKCkgewogICAgJCgnI3Jvb20nKS5oaWRlKCk7Cn0KLy9hZGRmdW5jdGlvbgpmdW5jdGlvbiBlYWdkZGQzNjYoKSB7CiAgICAkKCcjZGFnZjNkZWUnKS5oaWRlKCk7Cn0KCi8vIOmAieaLqeaIv+mXtApmdW5jdGlvbiBzZWxlY3RCYW5rZXJNb2RlKGluZGV4LCBpZCkgewogICAgZ2xib2xkYXRheHhbbWJdW2luZGV4XSA9IGluZGV4OwogICAgJCgiLmJhbmtlclVuU2VsZWN0ZWQiKS5maW5kKCdpbWcnKS5hdHRyKCdzcmMnLCAnLi9pbWcvYmFua2VyX3Vuc2VsZWN0ZWQucG5nJykKICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMikuaGlkZSgpOwogICAgJCgnLnNlbGVjdFBhcnQnKS5lcSg2KS5oaWRlKCk7CiAgICAkKCcuc2VsZWN0UGFydCcpLmVxKDEpLnNob3coKTsKCiAgICBpZiAoaW5kZXggPT0gMSkgewogICAgICAgICQoJyMnICsgaWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsICcuL2ltZy9iYW5rZXJfc2VsZWN0ZWQucG5nJykKICAgIH0KICAgIGlmIChpbmRleCA9PSAyKSB7CiAgICAgICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuYXR0cignc3JjJywgJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoNikuc2hvdygpOwogICAgfQogICAgaWYgKGluZGV4ID09IDMpIHsKICAgICAgICAkKCcjJyArIGlkKS5maW5kKCdpbWcnKS5hdHRyKCdzcmMnLCAnLi9pbWcvYmFua2VyX3NlbGVjdGVkLnBuZycpCiAgICB9CiAgICBpZiAoaW5kZXggPT0gNCkgewogICAgICAgICQoJyMnICsgaWQpLmZpbmQoJ2ltZycpLmF0dHIoJ3NyYycsICcuL2ltZy9iYW5rZXJfc2VsZWN0ZWQucG5nJykKICAgIH0KICAgIGlmIChpbmRleCA9PSA1KSB7CiAgICAgICAgJCgnIycgKyBpZCkuZmluZCgnaW1nJykuYXR0cignc3JjJywgJy4vaW1nL2Jhbmtlcl9zZWxlY3RlZC5wbmcnKQogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMikuc2hvdygpOwogICAgICAgICQoJy5zZWxlY3RQYXJ0JykuZXEoMSkuaGlkZSgpOwogICAgfQp9CgovL2FkZGZ1bmN0aW9uCmZ1bmN0aW9uIGVlZTM2NigpIHsKICAgICQoJyNzc2EnKS5oaWRlKCk7Cn0KCmZ1bmN0aW9uIHNob3VqaWJkKCkgewogICAgJCgnI3ZhbGlkZVBob25lJykuc2hvdygpOwp9CgpmdW5jdGlvbiBhbGVydGdsKCkgewogICAgJCgnI3ZhbGVydCcpLnNob3coKTsKfQoKZnVuY3Rpb24gYWxlcnRxeCgpIHsKICAgICQoJyN2YWxlcnQnKS5oaWRlKCk7Cn0KLy/lip/og73nrqHnkIYgIOmhtemdogpmdW5jdGlvbiBndWFubGlnbigpIHsKICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy4uL2dvbmduc20uaHRtbCc7Cn0KCi8v5Liq5Lq65Lit5b+DICAgIOenr+WIhgokKGZ1bmN0aW9uKCkgewoKICAgICQoJy5kYW9sdWFuJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnLmdhbWVMaXN0SXRlbScpLmNzcygnei1pbmRleCcsICc5OScpOwogICAgICAgICQodGhpcykuc2libGluZ3MoKS5jc3MoJ3otaW5kZXgnLCAnOTk5OScpOwogICAgfSkKCiAgICAkKCcucGhvbmVNYXNrJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnI3ZhbGlkZVBob25lJykuaGlkZSgpOwogICAgfSkKCn0pCi8vIOe6ouWMheaXi+i9rOWKn+iDvQpmdW5jdGlvbiB4dWFuemh1YW4oKSB7CgogICAgJCgnLmJ0bk9wZW4nKS5maW5kKCdpbWcnKS5hZGRDbGFzcygndHJhbnNmJykKCiAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkgewoKICAgICAgICAkKCcjcm9wZW4nKS5zaG93KCk7CgogICAgfSwgMTAwMCk7Cn0KCi8vIOWFrOWFseW8ueahhgpmdW5jdGlvbiBwdWJsaWMoZGF0YSkgewogICAgJCgnIycgKyBkYXRhKS5oaWRlKCk7Cn0KLy8g5b+r5o236K+t6Z+zCmZ1bmN0aW9uIHNlbmRtc2cobXNnLCBpZCkgewogICAgc2VuZCgnc2VuZG1zZycsIHsKICAgICAgICBtc2c6IG1zZywKICAgICAgICBpZDogaWQKICAgIH0pOwogICAgJCgnI21lc3NhZ2UnKS5oaWRlKCk7Cn0KCmZ1bmN0aW9uIHNlbmRlbW9qaShtc2csIGlkKSB7CiAgICBzZW5kKCdzZW5kZW1vamknLCB7CiAgICAgICAgbXNnOiBtc2csCiAgICAgICAgaWQ6IGlkCiAgICB9KTsKICAgICQoJyNtZXNzYWdlJykuaGlkZSgpOwp9CgoKdmFyIGppOwoKZnVuY3Rpb24gZGpzKHNqKSB7CiAgICBjbGVhclRpbWVvdXQoamkpOwogICAgdmFyIG5vdyA9IHNqIC0gTWF0aC5jZWlsKG5ldyBEYXRlKCkgLyAxMDAwKSAtICgwIC0gdGltZXdjKSAtIDE7CiAgICBpZiAobm93ID4gMCkgewogICAgICAgIC8vIGlmKG5vdzw9Myl7CiAgICAgICAgLy8gICBtcDNwbGF5KCdtcDNkYW9qaXNoaScpOwogICAgICAgIC8vIH0KICAgICAgICBqaSA9IHNldFRpbWVvdXQoJ2RqcygnICsgc2ogKyAnKScsIDEwMDApOwogICAgICAgICQoJy5jbG9jaycpLnNob3coKTsKICAgICAgICAkKCcjZGl2Um9iQmFua2VyVGV4dCcpLnNob3coKTsKICAgICAgICAkKCcjZGpzJykudGV4dChub3cpOwogICAgfSBlbHNlIHsKICAgICAgICBjbGVhcmRqcygpOwogICAgfQp9CgpmdW5jdGlvbiBjbGVhcmRqcygpIHsKICAgIGNsZWFyVGltZW91dChqaSk7CiAgICAkKCcuY2xvY2snKS5oaWRlKCkKICAgICQoJyNkaXZSb2JCYW5rZXJUZXh0JykuaGlkZSgpOwogICAgJCgnLmdvbmdnJykuaGlkZSgpOwp9CgovKioKICog5peg55So5Luj56CB5Lul5LiL5pivCiAqLwovLz09PT09PT09PT09PT09PT09PT09PT09PT095byA5biCCmZ1bmN0aW9uIHRlc3R4eHl4KCkgewogICAgcmV0dXJuICdoYWhoYSc7Cn0KCmZ1bmN0aW9uIHRlc3RoYWgoKSB7CiAgICByZXR1cm4gJzEyMzInOwp9CgovLz09PT09PT09PT09PT09PT09PT09PT09PT09Pee7k+adnwo='); ?></script>
<script type="text/javascript" src="/app/js/base64.js"></script>
     <script src="/app/js/new/zhuonuo.js" type="text/javascript"></script> 
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
                indexuser=indexuser-(-9);
            }
            if(data.allcard && indexuser!=1){
                var card=data.allcard;
                html=html+'<div class="cardss cards card'+indexuser+'" style="display: none;" data="'+indexuser+'">'
                html=html+'<div class="card cardopen card'+card[user.index][0]['card']+' card'+indexuser+'1 jiurenniuniu-index14" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][1]['card']+' card'+indexuser+'2 jiurenniuniu-index13" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][2]['card']+' card'+indexuser+'3 jiurenniuniu-index12" ></div> '
                html=html+'<div class="card cardopen card'+card[user.index][3]['card']+' card'+indexuser+'4 jiurenniuniu-index11" ></div>'
                html=html+'<div class="card cardopen card'+card[user.index][4]['card']+' card'+indexuser+'5 jiurenniuniu-index10" ></div></div>';
            }
            else{
                html=html+'<div class="cardss cards card'+indexuser+'" style="display: none;" data="'+indexuser+'">'
                html=html+'<div class="card card'+indexuser+'1 jiurenniuniu-index14" ></div> '
                html=html+'<div class="card card'+indexuser+'2 jiurenniuniu-index13" ></div> '
                html=html+'<div class="card card'+indexuser+'3 jiurenniuniu-index12" ></div> '
                html=html+'<div class="card card'+indexuser+'4 jiurenniuniu-index11" ></div>'
                html=html+'<div class="card card'+indexuser+'5 jiurenniuniu-index10" ></div></div>';
            }
            $('#userfp').append(html);
        }
        $('#userfp .cards').show();
        setTimeout(function(){
        $('#userfp .jiurenniuniu-index10').show();
        fapaizt=0;
        },1000);
        setTimeout(function(){
        $('#userfp .jiurenniuniu-index11').show();
        },800);
        setTimeout(function(){
        $('#userfp .jiurenniuniu-index12').show();
        },600);
        setTimeout(function(){
        $('#userfp .jiurenniuniu-index13').show();
        },400);
        setTimeout(function(){
        $('#userfp .jiurenniuniu-index14').show();
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
           $('.cardDeal .card1'+i).attr('onclick','fapxx('+JSON.stringify(xx)+')');
           if($('.cardDeal .card1'+i).is(':hidden')){
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
    $('.cardDeal .card1'+data.id).hide();
    $('.myCards .card'+(data.id-1)).show();
    $('.myCards .card'+(data.id-1)).addClass('card-flipped');
    var fp=0;
    for(i=1;i<6;i++){
        if($('.cardDeal .card1'+i).is(':hidden')){
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
    msgxx.img='/app/img/niu'+allcardxx['niu'][index]+'.png';
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
        msgxx.img='/app/img/niu'+allcardxx['niu'][data]+'.png';
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
                    left: left[i]+'%'
              },500);
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
                    left: left[i]+'%'
              },500);
    }
}
    


function tanpaixxother(data){
    var indexuser=data.user.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    var html='<div>';
    var hz=0;
    var left=['20.5','18.5','13.5','11.5','9.5'];
    var right=['12.63','14.63','17.63','19.63','21.63'];
    for(var i=0;i<data.card.length;i++){
        var card=data['card'][4-i];
        var card2=data['card'][i];
        if(i<3){
            hz=hz-(0-card2.val);
        }
        html=html+'<div class="cards card'+indexuser+' card'+indexuser+(i-(-1))+'1 jiurenniuniu-index1'+(4-i)+'s card-flipped"><div class="face front"></div> <div class="face back card'+indexuser+' card'+card.card+' card-flipped"></div></div>';
    }
    html=html+'</div>';
    $('.cardOver').append(html);
    $('.cardDeal .card'+indexuser).hide();
    $('.cardOver .card'+indexuser).show();
    if(hz%10==0){
        var left=['21.63','19.63','15.63','13.63','11.63'];
        var right=['10.5','12.5','16.5','18.5','20.5'];

        var right5=['12.5','14.5','18.5','20.5','22.5'];
        var left6=['23','21','17','15','13'];
    }
    else{
        var left=['19.5','17.5','15.5','13.5','11.5'];
        var right=['10.63','12.63','14.63','16.63','18.63'];

        var right5=['13','15','17','19','21'];
        var left6=['22','20','18','16','14'];
    }
    for(var i=0;i<data.card.length;i++){
        if(indexuser >6){
            $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    left: left[i]+'vh',
              },500)
            console.log(888)
        }
        else if(indexuser ==5){

              $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    right: right5[i]+'vh',
              },500)  
        }
        else if(indexuser ==6){
                $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    left: left6[i]+'vh',
              },500)  
        }

        else{
            $(' .cardOver .card'+indexuser+'.card'+indexuser+(i-(-1))+'1').animate({
                    right: right[i]+'vh',
              },500)  
        }

    
    

     }

}
function showmycard(id){
    $('.cardDeal .card1'+(id-(-1))).hide();
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
        indexuser=indexuser-(-9);
    }
    if($('.member'+indexuser+' .onlinezt').length>0){
        $('.member'+indexuser+' .onlinezt').hide();
        // $('.member'+indexuser+' .Ready').hide();

    }
    else{
        if(data.user.online=='-1'){
            var onlinezt='display:block';
        }
        else{
            var onlinezt='display:none';
        }
      var credits = (data.mode == 1 ? parseInt(data.user.credits) : 0) + parseInt(data.user.dqjf);
    var html='    <div class="member member'+indexuser+'" id="user'+data.user.id+'">'
     html+='<div class="zmmyctime"></div>'
     html+='<div style="    background: #000;z-index: 888;position: absolute;width: 100%;height: 100%;opacity: 0.5;'+onlinezt+'" class="onlinezt"></div>'
	html += '<div style="position: relative;"><div style="position: absolute; z-index: 880; display: none;" class="watchzt" ><img src="/app/watchzt.png"/ style="width: 100%;margin-top:2.2vh "></div> <img src="' + data.user.img + '" class="avatar" /></div>',
     html+='<img src="/app/img/bull9/playerWin.png" class="banker" style="display: none;" /> '
     html+='<div class="bottom jiurenniuniu-bottom">'
     html+='<div class="bname jiurenniuniu-bname">'+decode64(data.user.nickname)+'</div>'
      html+='<div class="bscore jiurenniuniu-bname" data-dqjf="' + data.user.dqjf + '" data-credits="' + data.user.credits + '" data-mode="' + data.mode + '">'+credits+'</div></div>'
    html+='<img id="banker213612" src="/app/img/bull9/bull_banker_bg.png" class="background jiurenniuniu-background" /> '
     html+='<img src="/app/img/bull9/bull_banker_icon.png" class="background jiurenniuniu-background1" />' 
     html+='<img id="bankerAnimate'+indexuser+'" src="/app/img/bull9/bull_banker_animate.png" class="jiurenniuniu-background2" />' 
     html+='<img id="bankerAnimate1'+indexuser+'" src="/app/img/bull9/bull_banker_animate.png" class="jiurenniuniu-background2" /><div class="isReady" style="display:none"><img src="http://goss.fexteam.com/files/d_25/images/game/ready.png " class="ready" style=""></div></div>';
     $('#member').append(html);
     if(data.user.zt==1){
        $('.member'+indexuser+' .isReady').show();
     }
    }
}
function zbuser(data){
     var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    $('.member'+indexuser+' .isReady').show();
}
function removeuser(data){
    var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    $('.member'+indexuser+' .onlinezt').show();
    $('.member'+indexuser+' .isReady').hide();
   	$(".member" + indexuser + ' .watchzt').hide();

  //  $('.member'+indexuser+' .Ready').hide();
}

function removeuser2(data){
   
    var indexuser=data-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    $('#member .member'+indexuser).remove();
}
function showmemberTimesText(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    var html='<div class="memberTimesText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>';
    $('#memberTimesText').append(html);
}
function showmemberTimesText2(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    if(indexuser==6){
        var html='<div class="memberTimesText'+indexuser+'" style="display: block;left:12vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>'; 
    }
    else if(indexuser >5){
   
    var html='<div class="memberTimesText'+indexuser+'" style="display: block;left:16vh;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>';

}else{
    var html='<div class="memberTimesText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;" /></div>';
}
  $('#memberTimesText2').append(html);
}

function showmemberRobText(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    var html='<div class="memberRobText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;"></div>';
    $('#memberRobText').append(html);
}
function showmemberRobText2(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    var html='<div class="memberFreeRobText'+indexuser+'" style="display: block;" ><img src="'+data.img+'" style="position: absolute; width: 100%;"></div>';
    $('#memberFreeRobText').append(html);
}

function showmemberBull(data){
     var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    var html='<div class="memberBull'+indexuser+'" style="display: block;"><img src="'+data.img+'" style="position: absolute; width: 100%;height: 100%;"/></div>';
    $('#memberBull').append(html);
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
        indexuser=indexuser-(-9);
    }

    if(data.bd){
        $('#userfp .qzcard').removeClass('qzcard');
    }
    $('#userfp .card'+indexuser).addClass('qzcard');
}
function showqz(data){
    // if($('#userfp .qzcard').length==0){
    //     $('#userfp .cardss').addClass('qzcard');
    // }
    var userindex=data['user'][data.index]-index-(-1);
    if(userindex<=0){
        userindex=userindex-(-9);
    }
  $('.jiurenniuniu-background').hide();
  $('.member'+userindex+' .jiurenniuniu-background').show();

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
        indexuser=indexuser-(-9);
    }

    clearTimeout(ji);
  $('.jiurenniuniu-background').hide();

 $("#bankerAnimate"+indexuser).show(),
            $("#bankerAnimate"+indexuser).show(),
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
                  $('.member'+indexuser+' .jiurenniuniu-background').hide();
                  $('.member'+indexuser+' .jiurenniuniu-background1').show();
                    
                })
            }),
            $("#bankerAnimate"+indexuser).animate({
                top: "-1.5vh",
                left: "-1.5vh",
                width: "10.26vh",
                height: "10.26vh"
            },400),
                $("#bankerAnimate"+indexuser).animate({
                    top: "-0.1vh",
                    left: "-0.1vh",
                    width: "7.46vh",
                    height: "7.46vh"
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
            win=win-(-9);
        }
        if(lose<=0){
            lose=lose-(-9);
        }
  if (window.innerHeight)
winHeight = window.innerHeight,
winWidth = window.innerWidth;
else if ((document.body) && (document.body.clientHeight))
winHeight = document.body.clientHeight,
winWidth = document.body.clientWidth;

// 金币宽
var jinbiWidth = 7.5,
    loseTop = parseInt($('.member'+lose).offset().top),
    loseHg  = parseInt($('.member'+lose +' .avatar').css('height'))/2,
    loseRg  = parseInt($('.member'+lose).css('right')),
    loseLf  = parseInt($('.member'+lose).offset().left),
    loseWt  = parseInt($('.member'+lose).width()),
    loseMl  = parseInt($('.member'+lose).css('margin-left')),
    winTop = parseInt($('.member'+win).offset().top),
    winHg  = parseInt($('.member'+win +' .avatar').css('height'))/2,
    winRg  = parseInt($('.member'+win).css('right')),
    winLf  = parseInt($('.member'+win).offset().left),
    winWt  = parseInt($('.member'+win).width()),
    winMl  = parseInt($('.member'+win).css('margin-left'))

if(typeof(winMl) == 'undefined'){
       winMl = 0;
}


  var top  =loseTop-jinbiWidth+loseHg+'px';
  if(typeof(loseLf) == 'undefined'){
    var right =loseRg+jinbiWidth-loseWt/2;
    var left=(parseInt(winWidth)-right-loseWt)+'px';
  }
  else{
    var left =(loseLf-jinbiWidth+loseMl+loseWt/2)+'px';
  }


  var ytop  =winTop-jinbiWidth+winHg+'px';
  if(typeof(winLf) == 'undefined'){
    var yright =winRg+jinbiWidth-winWt/2;
    var yleft=(parseInt(winWidth)-yright-winWt)+'px';
  }
  else{
    //var yleft =(winLf-jinbiWidth+winMl+parseFloat(winWt/2))+'px';
      var yleft =(winLf-jinbiWidth+parseFloat(winWt/2))+'px';
  }

  for(var i=0;i<8;i++){
     var html='<div class="memberCoin member'+win+lose+'"  ><img src="/app/img/bull9/bull_coin.png" class="liurenniuniu-memberCoin" /></div>'
     $('#jinbi').append(html);
     $('.member'+win+lose).eq(i).css('top',top);
     $('.member'+win+lose).eq(i).css('left',left);
     $('.member'+win+lose).eq(i).animate({
       top:ytop,
       left:yleft
    },0+i*250);
}
   setTimeout('jibiover('+win+lose+')',2500);
}


function jibiover(data){
    $('#jinbi .member'+data).remove();
}


function jibichange(data){
    for(var i=0;i<data.length;i++){
        var jifenxx=data[i];
        var userindex=jifenxx.index-index-(-1);
        if(userindex<=0){
            userindex=userindex-(-9);
        }
        var html='<div class="memberScoreText'+userindex+'" data-dqjf="'+jifenxx.dqjf+'" data-index="'+userindex + '"></div>';
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
      	console.log("dqjf = " + dqjf + ",credits = " + credits + ",lsjf = " + lsjf);
        if(dqjf-lsjf>0){
            $(this).html('<label class="jiurenniuniu-memberScoreText2"  style="display: block;">+'+(dqjf-lsjf)+'</label>');
        }
        else{
            $(this).html('<label class="jiurenniuniu-memberScoreText1"  style="display: block;">'+(dqjf-lsjf)+'</label>');
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
    $('.jiurenniuniu-background1').hide();
    $('.jiurenniuniu-background2').hide();
    clearmemberBull();
    clearmemberTimesText();
    clearmemberRobText();
    $('.member1 .ready').hide();
    operationButton('8');
    send('guanzhanupdate',{});
    // var script=document.createElement("script");  
    //script.type="text/javascript";  
    //script.src="/app/js/robat.js";  
    //document.getElementsByTagName('head')[0].appendChild(script);
}
function zhunbei(){
    send('zhunbei',{});
    operationButton('9');
}


function xianxz(zt){
    var time=Math.ceil(new Date()/1000)-timewc;
    send('xianxz',{bs:zt,time:time});
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
            html+='</div><div id="jiurenniuniu-qiangzhuangs" class="jiurenniuniu-qiangzhuangs" style="display: block;width: 3vh;left: 10vh;height: 3vh;top: 4vh;">'
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
    img.src="/xxx/jst/js9.jpg";
    img1.src="/app/dyj.png";
    //img2.src="bg.png";
    var sj=data;
    img.onload = function(){
        console.log(sj);
        ctx.drawImage(img,0,0,800,1297);
        //ctx.drawImage(img1,120,366,50,60);
        //ctx.drawImage(img1,87,156,50,34)
        //ctx.drawImage(img2,87,193,50,34)
        var time1=sj.time.substring(0,sj.time.length-3);
        ctx.font = "22px 微软雅黑";
        ctx.fillStyle = "#d8cb66";
        ctx.fillText("房间号:"+sj.id, 175,295);
        ctx.fillText(time1, 375, 295);
        ctx.fillText(sj.zjs+"局", 575, 295);

        ctx.font = "27px 微软雅黑";
        ctx.fillStyle = "black";
       // var writeContent = fangzhu.skinname+'房主 ：'+fangzhu.nickname;
        //var writeLeft = (c.width-ctx.measureText(writeContent).width)/2;
       // ctx.fillText(writeContent,writeLeft,345);

        for(var i=0;i<sj.user.length;i++){
            if(i>1){
                ctx.fillStyle = "#19170b";
                ctx.fillRect(140,486-(0-(i-2)*75),521,70);
            }
            var user=sj['user'][i];
            ctx.font = "32px 微软雅黑";
            ctx.fillStyle = "#d8cb66";
            //ctx.fillText(user.id, 195, 380+(i*75));
            ctx.fillText(decode64(user.nickname).substring(0,10),219, 380+(i*75));
            if(user.dqjf>0){
                user.dqjf='+'+user.dqjf;
            }else{
                ctx.fillStyle = "#fff";
                ctx.fillText(decode64(user.nickname).substring(0,10), 219, 380+(i*75));
                ctx.fillText(user.dqjf, 550, 380+(i*75));
            }
            ctx.fillText( user.dqjf, 550, 380+(i*75));
        }
        var dataURL = c.toDataURL();
         $('#overtime').html('<div onclick="location.href=\'/portal/user/index.html\'"  style="z-index: 9999;position: absolute;width: 28%;height: 6%;bottom: 7%;right: 15%;" ></div><div style="background: #000;width: 100%;height: 100%;position: absolute;z-index: 200;""></div> <img src="'+dataURL+'" style="width: 100%;height:100%;position: absolute;z-index: 201;">')
        $('#overtime').show();
    }
}


function msgshow(data){
      var indexuser=data.index-index-(-1);
    if(indexuser<=0){
        indexuser=indexuser-(-9);
    }
    mp3play(data.mp3);
       var html='<div class="messageSay messageSay'+indexuser+'" ><div id="fj-kjyy">'+data.msg+'</div> <div class="triangle"></div></div>'
      $('#messageSay').append(html);
      setTimeout(function(){
            console.log(indexuser);
            $('.messageSay'+indexuser).remove();
      },1500);
}

function emojishow(data){
  	var indexuser = data.index-index-(-1);
    if(indexuser <= 0){
        indexuser = indexuser - ( -9);
    }
  	var html='<div class="messageEmoji messageSay' + indexuser + ' ' + data.class + '"></div>';
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
        html+='                        <img class="operationButton-gg02" src="/app/img/bull9/bull_button_blue.png"> '
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
        html+='              <img src="http://33uuK.helphand.cn/img/bull_times_bg_blue.png"  class="operationButton-gg11"  /> '
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
        html+='<img class="operationButton-gg" src="http://33uuK.helphand.cn/img/tp.png"  /> ';
        html+='<div   class="operationButton-gg1"  style="width: 100%;">';
        html+='摊牌';
        html+='</div>';
        html+='</div>';
    }

    if(isguanzhan==0)
    {
        if(data=='8'){
        html+='<div class="operationButton-1-zt" id="zb" style="display: inline-block;" onclick="zhunbei();">';
        html+='<img class="operationButton-gg11" src="http://lelefile3.zhenglvyou.com/files/d_2/images/bull9/readyButton.png"  /> ';
        html+='<div   class="operationButton-gg111"  style="width: 100%;">';
        html+='';
        html+='</div>';
        html+='</div>';
        }
    }
  

    if(data=='9'){
        html+='<div class="operationButton-2-zt"><img id="zbs" class="operationButton-2" src="/app/img/bull9/ready.png" style="display:block;"></div>';
    }
console.log(data);
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


<script>
$(function() {  
    FastClick.attach(document.body);  
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
  var title  = '九人牛牛房间<?php echo ($room["roomid"]); ?>';//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/img/bull10/v2/share-niuniuten.jpg';//分享的图片
  var shareimg = '';
  var desc = 'http://uubs.chinamaili.net/f/yf?i=<?php echo ($room["roomid"]); ?>_';//分享的描述信息
  WeChat(url,title,shareimg,desc);
</script>

</head>

<html>
 <head></head>
 <body style="overflow: hidden;"> 

    


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
      
        <img id="watch-game" src="http://goss.fexteam.com/files/images/h5watch/watchText.png" style="display: none; position: fixed; z-index: 100; width: 40%; left: 30%; top: 64.5%;">
        <div id="watch-list" class="watch" style="display: none;">
           <div class="watchBack"></div>
           <div class="mainPart">
               <img src="http://goss.fexteam.com/files/images/h5watch/quit.png" class="watchCancel" onclick="public('watch-list')">
               <img src="http://goss.fexteam.com/files/images/h5watch/title.png" class="watchTitle">
               <div class="playerList"><div class="playerItem">
                          <img src="" class="playerAvatar">
                          <div class="playerName"></div>
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
        <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ $nickname=base64_encode(usernickname($value[id])); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } ?>
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
    <img src="http://lelefile3.zhenglvyou.com/files/d_2/images/home/uu.png" /> 
    <div class="num">
     <div class='jiurenniuniu-fk'></div> 
     <div class='jiurenniuniu-fk-1' id="局"><?php echo ($user['id']); ?></div>
    </div>
   </div>

   <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/tab_bottom.png" alt="" class="tabBottom" /> 

   <div class="round jiurenniuniu-round" style="" id="jsxx">
    <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?>局
   </div> 
 <style>    
#room_str{position:fixed;top:-300px;}
.copyUrl{position: fixed;width:62px;height:22px;position:absolute;top:24px;right:12px;z-index:999;border: none;background: url(http://lelefile3.zhenglvyou.com/files/images/copy/copyicon.png);background-size: 100%;}
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
<textarea id="room_str" value="">9人牛牛房间
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
    <img src="http://lelefile3.zhenglvyou.com/files/images/common/icon_home3.png" class="return"  onclick="opnemm('fangjian_fanhuisy','tishi')" /> 
   <img src="http://lelefile3.zhenglvyou.com/files/images/common/icon_rule3.png" class="bGameRule jiurenniuniu-bGameRule" style="right:22vh" onclick="opnemm('fangjian_gz','vroomRule')" /> 
   <img src="/app/images/guanzhan/guest_bull91.png" class="return jiurenniuniu-return" style="right:28.5vh"  onclick="showguanzhan()"/> 
   <div class="myCardTypeBG"></div> 
   <div class="myCardType" style="overflow: hidden;">
    <div id="df" style="
    overflow: hidden;
">
     底分：<?php echo ($room["df"]); ?>
    </div>
   </div> 
   <div class="bottomMessage"  onclick="opnemm('fangjian_kj','message')">
    <img src="http://lelefile3.zhenglvyou.com/files/images/common/icon_message3.png" class='jiurenniuniu-bottomMessage-img'  />
   </div> 
   <div class="bottomHistory jiurenniuniu-bottomHistory" onclick="opnemm('fangjian_yinyue','vaudioRoom')">
    <img class='jiurenniuniu-bottomHistory-img' src="/app/img/common/icon_sound91.png"/>
   </div> 

  <div id="messageSay"></div>
  <div id="tishi" class="alert" style="display: none;"></div> 	
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="
    display: none;overflow: hidden;
"></div> 

   <div id="table" class="table">
    <img src="http://lelefile3.zhenglvyou.com/files/images/table/niuniu9.jpg" class="tableBack" /> 
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


    <div id="divRobBankerText" class='jiurenniuniu-qiangzhuang'></div> 
    <div id="" class="clock jiurenniuniu-clock">
     <img src="http://qq8790766.cdn.bcebos.com/app/img/bull9/bull_clock.png" class='jiurenniuniu-memberCoin' /> 
     <p id='djs' class='jiurenniuniu-clock1'> 10 </p>
    </div> 

    <div id="operationButton" style="top: 70%;">
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
      $("#valert").remove();
      token='<?php echo ($token); ?>';
      room='<?php echo ($room["id"]); ?>';
      var dkxx='<?php echo ($room["dk"]); ?>';
      isguanzhan = 0;
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
<?php if(count($room['userlist']) >= 9 && $room['userlist'][$user['id']] != 1): ?><div id="valert" class="alert">
   <div>
      <img src="http://qq8790766.cdn.bcebos.com/app/fw_icon.png" style="position: absolute;right: 39vw;top: 10vw;height: 17.5vw;width: 21vw; z-index: 99;">
     <?php if($user["security_code"] == ''): ?><div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#FFFFFF;font-weight: bold;"><?php echo ($user['id']); ?></div>
<?php else: ?>
       <div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#fff;font-weight: bold;"><?php echo ($user['security_code']?$user['security_code']:$user['id']); ?></div><?php endif; ?> 
   <div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 22.5vw;z-index: 999;font-size: 3.8vw;text-align: center;color:#EBEBEB;font-weight: bold;">防伪码</div></div>
    
    <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -162.365px;">
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
      <img src="http://qq8790766.cdn.bcebos.com/app/fw_icon.png" style="position: absolute;right: 39vw;top: 10vw;height: 17.5vw;width: 21vw; z-index: 99;">
     <?php if($user["security_code"] == ''): ?><div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#FFFFFF;font-weight: bold;"><?php echo ($user['id']); ?></div>
<?php else: ?>
       <div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 10vw;z-index: 999;font-size: 5vw;text-align: center;color:#fff;font-weight: bold;"><?php echo ($user['security_code']?$user['security_code']:$user['id']); ?></div><?php endif; ?> 
   <div style="position: absolute; top: 10vw; right: 39vw; width: 20vw;height: 18vw; line-height: 22.5vw;z-index: 999;font-size: 3.8vw;text-align: center;color:#EBEBEB;font-weight: bold;">防伪码</div></div>
    
    <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -162.365px;">
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
    joinroom()
</script><?php endif; ?> 





    
    /*



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
        console.log('Error decoding file '+id, e);
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
<!--吾爱永久QQ：8790766-->
<!--吾爱微信：8790766-->