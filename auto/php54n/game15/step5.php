<?php
global $Room;
$id = $connection->user['room'];
        if($data2['isjoinlook'])
        {
            act('initroom',$msg,$connection,false);
        }
        else
        {
            act('initroom',$msg,$connection);
        }$msg = array();
$msg['id'] = 'jsxx';
$msg['html'] = $Room[$id]['xx']['js'] . '&nbsp;/&nbsp;' . $Room[$id]['xx']['zjs'] . '&nbsp;局';
act('html', $msg, $connection);
$index = array();
foreach ($Room[$id]['user'] as $key => $connection3) {
	if ($connection3->user['zt'] == 1) {
		$index[] = array('index' => $connection3->user['index'], 'id' => $connection3->user['id']);
	}
}
$msg = array();
$msg['user'] = $index;
if ($Room[$id]['user'][$connection->user['id']]->user['zt'] == '1') {
	$msg['card'] = $connection->user['card'];
	for ($i = 0; $i < 5; $i++) {
		if ($msg['card'][$i]['zt'] == 0) {
			unset($msg['card'][$i]);
		}
	}
}
if ($connection->user['is_grade'] == 1) {
	$msg['allcard'] = $Room[$id]['allcard'];
}
if($data2['isjoinlook'])
        {
        unset($msg['allcard']);
		unset($msg['card']);   
        act('allfapai',$msg,$connection,false);

        act('mp3play','fapai',$connection,false);

        act('operationButton',-1,$connection,false);
        }
        else
        {
        unset($msg['allcard']);  
        act('allfapai',$msg,$connection);

        act('mp3play','fapai',$connection);

        act('operationButton',-1,$connection);      
		}
    
if ($Room[$id]['type'] == 31) {
	$msg = array();
	$img = '/app/img/X-' . $Room[$id]['beishu'] . '.png';
	$msg['index'] = $Room[$id]['bank']['index'];
	$msg['img'] = $img;
        if($data2['isjoinlook'])
        {
            act('showmemberTimesText',$msg,$connection,false);
        }
        else
        {
            act('showmemberTimesText',$msg,$connection);
        }	
}
if ($Room[$id]['type'] != '10') {
	foreach ($Room[$id]['user'] as $connection3) {
		if ($connection3->user['beishu'] != '-1' && $connection3->user['zt'] == '1') {
			$msg = array();
			$msg['index'] = $connection3->user['index'];
			$msg['zt'] = $connection3->user['beishu'];
        if($data2['isjoinlook'])
        {
                  act('showxian',$msg,$connection,false);
        }
        else
        {
                  act('showxian',$msg,$connection);
        }	
				}
	}
}
if ($Room[$id]['time'] > 0) {
	act('djs', $Room[$id]['time'], $connection);
	act('divRobBankerText', 4, $connection);
	if ($Room[$id]['user'][$connection->user['id']]->user['zt'] == '1' && $Room[$id]['user'][$connection->user['id']]->user['tpzt'] == '-1') {
		act('operationButton', 6, $connection);
	}
	$msg = array();
	$msg['card'] = $Room[$id]['allcard'];
	$msg['newcard'] = $Room[$id]['allnewcard'];
	$msg['niu'] = $Room[$id]['allniu'];
	$msg['sfniu'] = $Room[$id]['allsfniu'];
        if($data2['isjoinlook'])
        {
        act('fapaistart',$msg,$connection,false);
        }
        else
        {
        act('fapaistart',$msg,$connection);
        }	
	}
foreach ($Room[$id]['user'] as $connection3) {
	if ($connection3->user['tpzt'] != '-1' && $connection3->user['zt'] == '1') {
		if ($connection3->user['id'] == $connection->user['id']) {
        if($data2['isjoinlook'])
        {
                      act('showtanpai','',$connection,false);
        }
        else
        {
                      act('showtanpai','',$connection);
        }				
		} else {
        if($data2['isjoinlook'])
        {
                      act('showothertanpai',$connection3->user['index'],$connection,false);
        }
        else
        {
                      act('showothertanpai',$connection3->user['index'],$connection);
        }	
	
		}
	}
}