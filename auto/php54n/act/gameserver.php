<?php
//<!--吾爱永久QQ：8790766-->
//<!--吾爱永久QQ：8790766-->
$id = ceil($data2['id']);
$server = $db->getOne("select * from jz_server where type='" . $db->s($id) . "' and zt=1 order by num asc");
$playlist = $db->getAll("select * from jz_rule where type='" . $db->s($id) . "' and zt=1 order by `sort` desc");
$msg = array();
$msg['id'] = 'room';
$msg['html'] = ' <div class="createRoomBack"></div>
    <div class="mainParts" style="height: auto;">            
        <div class="createB"></div>
        <div class="createTitle">
            <img src="/app/files/d_11/images/common/createroom2.png">
        </div>              
        <img src="/app/files/d_11/images/common/cancel.png" class="cancelCreate" onclick="cancelCreate();$(\'.nicescroll-rails\').remove();">';
$playlist[0]['name'] = trim($playlist[0]['name']);
if (!empty($playlist[0]['name'])) {
	$msg['html'] .= '<div  class="scope xuanzefj-nav">';
	foreach ($playlist as $key => $value) {
		$msg['html'] .= '<div  id="selectBanker' . strip_tags($value[id]) . '"   onclick="send(\'xzplay\',{id:' . strip_tags($value[id]) . '})" class="selectBanker' . ($key + 1) . ' bankerUnSelected">
                    <img  class="img niuniusz niuniuselect"  src="/app/img/banker_selected.png">
                    <img  class="img niuniusz niuniuunselect"  src="/app/img/banker_unselected.png">
                    <p class="xuanzefj-nav-1">' . mb_substr(strip_tags($value['name']), 0, 2, 'utf-8') . '</p>
                    <p class="xuanzefj-nav-2" style="">' . mb_substr(strip_tags($value['name']), 2, 2, 'utf-8') . '</p>
                </div>';
	}
	$msg['html'] .= '</div>';
}
$msg['html'] .= '<div class="blueBack" style="height: auto;">
            <div class="selectPart xuanzefj-top-zt" style="">
                <div class="selectTitle xuanzefj-top">
                    创建房间,游戏未进行,5分钟自动关闭房间且退还房卡
                </div>
            </div>
            <div class="bullRull scope" id="setting"><div id="open-wrap"></div></div>
        </div>
        <div class="createCommit" onclick="send(\'openroom\',{})">确定</div>
</div>';
		
		
$msg["html"] .= "		
.createRoom .mainParts .blueBack .selectPart .selectList .selectItem img
{
<style>
	.createRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 110;}	
	.createRoom .createRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
	/* top:38%;left:50%;margin-top:-24vh;margin-left: -22.5vh; */	

	.createRoom .mainParts .createB{width: 100%;height:100%;top:0%;left:0%;position: absolute;background:#634fa6;border:1px solid #a684f2;border-radius:10px; }	
	.createRoom .mainParts .createTitle{position:relative;height:5.5vh;text-align: center;}	
	.createRoom .mainParts .createTitle img{position:relative;height:3vh;margin-top: 1.5vh;}	
	.createRoom .mainParts .cancelCreate{width: 5vh;height:5vh;top:-2.5vh;right:-2.5vh;position: absolute;}	
	
	.createRoom .mainParts .blueBack{width: 42vh;background:#111431;border:1px solid #a684f2;border-radius:4px;margin:0 auto;position: relative;padding: 0 0 0.8vh 0; }

	.createRoom .mainParts .blueBack .selectPart .selectTitle{float: left;width:8vh;text-align: right;}
	.createRoom .mainParts .blueBack .selectPart .selectList{float: left; width: 34vh}
	.createRoom .mainParts .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:1.8vh; }
	.createRoom .mainParts .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:2.1vh;width:2.1vh;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:1vh;position: relative; }
	.createRoom .mainParts .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 3vh;height:3vh;left: 0;top:0.2vh;background: url(\"http://lyuu.szlangya.cn/files/images/common/tick.png\");background-size: 3vh 3vh;}
	.createRoom .mainParts .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.4vh;}


	</style>
";			
		$msg["html"] .= "<script type=\"text/javascript\">
			$(\"#setting\").niceScroll(\"#open-wrap\", {
                cursorcolor: \"#ccc\",//#CC0071 光标颜色
                cursoropacitymax: 0.7, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: true, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: \"1px\", //像素光标的宽度
                //boxzoom: true
            });
            function notifyNiceScroll() {
            	$(\"#setting\").getNiceScroll().resize();
            }
		</script>";		
act('html', $msg, $connection);
$msg = array();
$msg['id'] = 'room';
act('showid', $msg, $connection);
$last_id = $playlist['0']['id'];
if (isset($connection->user['history_select'])) {
	$history_select = $db->getOne('SELECT `history_select` FROM `jz_user` WHERE `id` = ' . ceil($connection->user['id']));
	$history_select = !empty($history_select['history_select']) ? json_decode($history_select['history_select'], true) : [];
	$last_id = !empty($history_select[$id]) ? ceil($history_select[$id]['id']) : $playlist['0']['id'];
}
$data['act'] = 'xzplay';
$data['id'] = $last_id;
reqact($data, $connection); 