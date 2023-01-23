<?php
global $Room;

$id = $connection->user['room'];
$connection->user['is_start'] = 0;
$connection->user['is_watch'] = true;


$Room[$id]['gzlist'][$connection->user['id']] = array('nickname' => $connection->user['nickname'], 'id' => $connection->user['id'], 'img' => $connection->user['img']);
// act('watchindex', $Room[$id]['index'], $connection);

act('tojoin', '', $connection);
act('watch', '', $connection);

$gzinfo['data'] = array_values($Room[$id]['gzlist']);

foreach ($Room[$id]['alluser'] as $connection3) {
    $gzinfo['is_start'] = $connection3->user['is_start'];
    $gzinfo['is_watch'] = $connection3->user['is_watch'];
    act('watchlist', $gzinfo, $connection3);
  
if (count($Room[$id]['index']) <= 0 && !$Room[$id]['user'][$connection->user['id']]) {
     act('pullhum', '', $connection3);	
}  
} 

act('operationButton', '', $connection);

act('initok', '', $connection);
act('initroom', '', $connection);
act('userUpdate', $connection->user, $connection);
act('hidemsg','',$connection);
 



if ($Room[$id]['user'][$connection->user['id']]) { // 如果进入玩家组了
				
    $connection->user['room'] = $id;
    $connection->user['card'] = $Room[$id]['user'][$connection->user['id']]->user['card'];
    $connection->user['cardmax'] = $Room[$id]['user'][$connection->user['id']]->user['cardmax'];
    $connection->user['index'] = $Room[$id]['user'][$connection->user['id']]->user['index'];
    $connection->user['dqjf'] = $Room[$id]['user'][$connection->user['id']]->user['dqjf'];
    $connection->user['zt'] = $Room[$id]['user'][$connection->user['id']]->user['zt'];

    $connection->user['tpzt'] = $Room[$id]['user'][$connection->user['id']]->user['tpzt'];

    $connection->user['beishu'] = $Room[$id]['user'][$connection->user['id']]->user['beishu'];

    $connection->user['qbank'] = $Room[$id]['user'][$connection->user['id']]->user['qbank'];
    $connection->user['niu'] = $Room[$id]['user'][$connection->user['id']]->user['niu'];
    $connection->user['sfniu'] = $Room[$id]['user'][$connection->user['id']]->user['sfniu'];
    $connection->user['newcard'] = $Room[$id]['user'][$connection->user['id']]->user['newcard'];				
    if ($Room[$id]['start'][$connection->user['id']] != 1) {
        array_push($Room[$id]['index'],$connection->user['index']);//把位置让出来
        unset($Room[$id]['user'][$connection->user['id']]); //删除玩家列表
        $Room[$id]['index'] = array_flip(array_flip($Room[$id]['index']));
        // 坐标修复
            $sit_index = array();
            foreach($Room[$id]['index'] as $key) {
                if (is_int($key)) {
                    $sit_index[] = $key;
                } 
            } 
            $Room[$id]['index'] = $sit_index;             
        sort($Room[$id]['index']);

    } 
} 

foreach ($Room[$id]['alluser'] as $connection3) {
	$msg=$connection->user['id'];
    if ($Room[$id]['xx']['js'] == 0 || $Room[$id]['start'][$connection->user['id']] != 1) {
        act('removeuser2', $msg, $connection3);
    } else {
        act('removeuserByWatch', $msg, $connection3); 
        // /广播给观战玩家
    } 
} 

if ($Room[$id]['start'][$connection->user['id']] != 1){
act('reuser', '', $connection);
} 

// 玩家组
foreach ($Room[$id]['user'] as $connection3) {
    if ($connection3->user['online'] == '-1' && $Room[$id]['xx']['zt'] < 2) {
        $Room[$id]['user'][$connection3->user['id']]->user['zt'] = 0;
    }
    
    $msg = array();
    $msg['test'] = "3";
    $msg['user'] = $connection3->user;
    act('adduser', $msg, $connection);
}


$data = array();
$data['act'] = 'step' . $Room[$id]['xx']['zt'];
reqact($data, $connection);
