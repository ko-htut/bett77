<?php
$id = ceil($data2['id']);
$msg = array();
$msg['id'] = 'selectBanker' . $data2['id'];
$msg['html'] = 'active';
act('active', $msg, $connection);
$play = $db->getOne("select * from jz_rule where id='" . $db->s($id) . "' and zt=1");
if (isset($connection->user['history_select'])) {
	$history_select = $db->getOne('SELECT `history_select` FROM `jz_user` WHERE `id` = ' . ceil($connection->user['id']));
	$history_select = !empty($history_select['history_select']) ? json_decode($history_select['history_select'], true) : [];
	if (empty($history_select[$play['type']])) {
		$history_select[$play['type']] = [];
	}
	$history_select[$play['type']]['id'] = $play['id'];
	$db->update('jz_user', ['history_select' => json_encode($history_select)], 'id=' . ceil($connection->user['id']));
}
$msg = array();
//$msg['id'] = 'setting';
$msg['id'] = 'open-wrap';
$msg['html'] = '';
if ($play['mode']) {
	$msg['html'] .= '<div class="selectPart">
                            <div class="selectTitle">模式：</div>
                            <div class="selectList">';
	$list = explode(',', $play['mode']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="mode' . $key . '" onclick="send(\'rule\',{id:\'mode\',key:' . $key . '})">
                                    <div class="selectBox"></div>
                                    <img src="/app/files/d_19/images/common/gou.png">
                                    <div class="selectText">' . $value . '</div>
                                </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                        </div>';
}
if ($play['welfare']) {
	$msg['html'] .= '<div class="selectPart" id="welfare">
                            <div class="selectTitle">福利：</div>
                            <div class="selectList">';
	$list = explode(',', $play['welfare']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="welfare' . $key . '" onclick="send(\'rule\',{id:\'welfare\',key:' . $key . '})">
                                    <div class="selectBox"></div>
                                    <img src="/app/files/d_19/images/common/gou.png">
                                    <div class="selectText">' . $value . '</div>
                                </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                        </div>';
}
if ($play['target']) {
	$msg['html'] .= '<div class="selectPart" id="target">
                            <div class="selectTitle">对象：</div>
                            <div class="selectList">';
	$list = explode(',', $play['target']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="target' . $key . '" onclick="send(\'rule\',{id:\'target\',key:' . $key . '})">
                                    <div class="selectBox"></div>
                                    <img src="/app/files/d_19/images/common/gou.png">
                                    <div class="selectText">' . $value . '</div>
                                </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                        </div>';
}
if ($play['admittance']) {
	$msg['html'] .= '<div class="selectPart" id="admittance">
                            <div class="selectTitle">准入：</div>
                            <div class="selectList">';
	$list = explode(',', $play['admittance']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="admittance' . $key . '" onclick="send(\'rule\',{id:\'admittance\',key:' . $key . '})">
                                    <div class="selectBox"></div>
                                    <img src="/app/files/d_19/images/common/gou.png">
                                    <div class="selectText">' . $value . '</div>
                                </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                        </div>';
}
if ($play['df']) {
	$msg['html'] .= '<!--<div class="selectPart">-->
                    <!--<div class="selectTitle">底分：</div>-->
                    <div class="selectList">';
	$list = explode(',', $play['df']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<!--<div class="selectItems" id="df' . $key . '" onclick="send(\'rule\',{id:\'df\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div>--> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['type'] == 1 || $play['type'] == 2 || $play['type'] == 10 || $play['type'] == 15|| $play['type'] == 14  ){
$msg['html'] .= '
<div class="selectPart" style="height:4vh;padding:0.5vh 0;line-height:4vh;" style="height:9vh;" >
						<div class="selectTitle">底分：</div>
						<div class="selectList">
							<div class="selectItems"  id ="df0"  onclick="send(\'rule\',{id:\'df\',key:\'0\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1</div>
							</div>							
							<div class="selectItems"  id ="df1" onclick="send(\'rule\',{id:\'df\',key:\'1\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >2</div>
							</div>
							<div class="selectItems" id ="df2" onclick="send(\'rule\',{id:\'df\',key:\'2\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >3</div>
							</div>
                            <div class="selectItems" id ="df3" onclick="send(\'rule\',{id:\'df\',key:\'3\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >4</div>
							</div>                           
					   <div class="selectItems"  id ="df4" onclick="send(\'rule\',{id:\'df\',key:\'4\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >5</div>
							</div>
</div>';
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}

if ($play['type'] == 4|| $play['type'] == 17|| $play['type'] == 27 || $play['type'] == 3 ){
$msg['html'] .= '
<div class="selectPart" style="height:10vh;padding:0.5vh 0;line-height:5vh;" style="height:9vh;" >
						<div class="selectTitle">底分：</div>
						<div class="selectList">
							<div class="selectItems"  id ="df0"  onclick="send(\'rule\',{id:\'df\',key:\'0\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1分</div>
							</div>							
							<div class="selectItems"  id ="df1" onclick="send(\'rule\',{id:\'df\',key:\'1\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >2分</div>
							</div>
							<div class="selectItems" id ="df2" onclick="send(\'rule\',{id:\'df\',key:\'2\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >3分</div>
							</div>
                            <div class="selectItems" id ="df3" onclick="send(\'rule\',{id:\'df\',key:\'3\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >4分</div>
							</div>
                            <div class="selectItems" style="float:right;margin-right:3vh;" id ="df4" onclick="send(\'rule\',{id:\'df\',key:\'4\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >5分</div>
							</div>												
						</div>
					</div>';
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['type'] == 5 || $play['type'] == 16|| $play['type'] == 13){
$msg['html'] .= '
<div class="selectPart" style="height:5vh;" >
						<div class="selectTitle">底分：</div>
						<div class="selectList">
							<div class="selectItems"  id ="df0"  onclick="send(\'rule\',{id:\'df\',key:\'0\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >2分</div>
							</div>		
                            	<div class="selectItems"  id ="df1" onclick="send(\'rule\',{id:\'df\',key:\'1\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >4分</div>
							</div>
                            	<div class="selectItems"  id ="df2" onclick="send(\'rule\',{id:\'df\',key:\'2\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >8分</div>
							</div>	
					</div>';
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['type'] == 1 || $play['type'] == 2 || $play['type'] == 10|| $play['type'] == 4|| $play['type'] == 3 ){
$msg['html'] .= '
<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;"  style="height:9vh;" >
						<div class="selectTitle">下注：</div>
						<div class="selectList">
							<div class="selectItems"  id ="bs1"  onclick="send(\'rulel\',{id:\'bs\',key:\'1\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1/2/4/5倍</div>
							</div>							
							<div class="selectItems"  id ="bs2" onclick="send(\'rulel\',{id:\'bs\',key:\'2\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1/3/5/8倍</div>
							</div>
					
							<div class="selectItems" id ="bs3" onclick="send(\'rulel\',{id:\'bs\',key:\'3\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >2/4/6/10倍</div>
							</div>
						</div>
					</div>';
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['type'] == 15){
$msg['html'] .= '
<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;"  style="height:9vh;" >
						<div class="selectTitle">下注：</div>
						<div class="selectList">
							<div class="selectItems"  id ="bs1"  onclick="send(\'rulel\',{id:\'bs\',key:\'1\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1/2/4/5倍</div>
							</div>							
							<div class="selectItems"  id ="bs2" onclick="send(\'rulel\',{id:\'bs\',key:\'2\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1/3/5/8倍</div>
							</div>
									<div class="selectItems"  id ="bs4" onclick="send(\'rulel\',{id:\'bs\',key:\'4\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >1/2/4/6倍</div>
							</div>
							<div class="selectItems" id ="bs3" onclick="send(\'rulel\',{id:\'bs\',key:\'3\'})">
								<div class="selectBox" ></div>
								<img src="/app/files/d_19/images/common/gou.png">
								<div class="selectText" >2/4/6/10倍</div>
							</div>
						</div>
					</div>';
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['gp']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">鬼牌：</div>
                    <div class="selectList">';
	$list = explode(',', $play['gp']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="gp' . $key . '" onclick="send(\'rule\',{id:\'gp\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['zm']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">抓马：</div>
                    <div class="selectList">';
	$list = explode(',', $play['zm']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="zm' . $key . '" onclick="send(\'rule\',{id:\'zm\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['cm']) {
	$msg['html'] .= '<div class="selectPart">
                            <div class="selectTitle">筹码：</div>
                            <div class="selectList">';
	$list = explode(',', $play['cm']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="cm' . $key . '" onclick="send(\'rule\',{id:\'cm\',key:' . $key . '})">
                                    <div class="selectBox"></div>
                                    <img src="/app/files/d_19/images/common/gou.png">
                                    <div class="selectText">' . $value . '</div>
                                </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['gz']) {
	$msg['html'] .= '<div class="selectPart"style="height:8vh;padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">';
	$list = explode(',', $play['gz']);
	foreach ($list as $key => $value) {
		if ($play['type'] != 27) {
			$msg['html'] .= '<div class="selectItems" id="gz' . $key . '" onclick="send(\'rule\',{id:\'gz\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
		} else {
			$msg['html'] .= '<div class="selectItems" id="gz' . $key . '" onclick="send(\'rule\',{id:\'gz\',key:' . $key . '})">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
			$data = array();
			$data['act'] = 'rule';
			$data['id'] = 'gz';
			$data['key'] = '0';
			reqact($data, $connection);
		}
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['gz2']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">';
	$list = explode(',', $play['gz2']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="gz2' . $key . '" onclick="send(\'rule\',{id:\'gz2\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}




if ($play['px']) {
	$msg['html'] .= '<div class="selectPart"style="padding:0.5vh 0;line-height:4vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">';
	$list = explode(',', $play['px']);
	foreach ($list as $key => $value) {



		if ($play['type'] != 27) {
			$msg['html'] .= '<div class="selectItems" id="px' . $key . '" onclick="send(\'rule\',{id:\'px\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
		} else {
			$msg['html'] .= '<div class="selectItems" id="px' . $key . '" onclick="send(\'rule\',{id:\'px\',key:' . $key . '})">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
			$connection->rule['px'][0] = 1;
		}
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}

if ($play['type'] == 1 || $play['type'] == 2 || $play['type'] == 10 || $play['type'] == 14 || $play['type'] == 15|| $play['type'] == 4){
$msg['html'] .= '
<div class="selectPart" style="height:8vh;padding:0.5vh 0;line-height:4vh;" style="height:9vh;line-height:4.5vh ">
						<div class="selectTitle">时间：</div>
						<div class="selectList">						
							<div class="selectItems"  >
								<div class="text" style="float: left;">准备</div>
								<select  onchange="send(\'rulel\',{id:\'time\',key:\'zb\',value:this.value})">
										<option value="8" >8秒</option>
                                    <option value="10" >10秒</option>
									<option value="9" >9秒</option>
								
									<option value="7" >7秒</option>
									<option value="6" >6秒</option>
									<option value="5" >5秒</option>
								</select>
							</div>
							<div class="selectItems"  style="margin-left: 1vh;">
								<div class="text" style="float: left;">抢庄</div>
								<select id = "timeqz" onchange="send(\'rulel\',{id:\'time\',key:\'qz\',value:this.value})">
									<option value="8">8秒</option>
                                    <option value="10">10秒</option>
									<option value="9">9秒</option>
									
									<option value="7">7秒</option>
									<option value="6">6秒</option>
									<option value="5">5秒</option>
								</select>
							</div>
						</div>	
						<div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
							<div class="selectItems"  >
								<div class="text" style="float: left;">下注</div>
								<select id = "timexz" onchange="send(\'rulel\',{id:\'time\',key:\'xz\',value:this.value})">
									<option value="8">8秒</option>
                                    <option value="10" >10秒</option>
									<option value="9">9秒</option>
									
									<option value="7">7秒</option>
									<option value="6">6秒</option>
									<option value="5">5秒</option>
								</select>
							</div>
							<div class="selectItems" style="margin-left: 1vh;">
								<div class="text" style="float: left;">摊牌</div>
								<select id = "timetp" onchange="send(\'rulel\',{id:\'time\',key:\'tp\',value:this.value})">
									<option value="8">8秒</option>
                                    <option value="10">10秒</option>
									<option value="9">9秒</option>
									
									<option value="7">7秒</option>
									<option value="6">6秒</option>
									<option value="5">5秒</option>
						</select>
							</div>
						</div>
					</div>';

					
}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
if ($play['sz']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">';
	$list = explode(',', $play['sz']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="sz' . $key . '" onclick="send(\'rule\',{id:\'sz\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}





if ($play['gd']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">锅底：</div>
                    <div class="selectList">';
	$list = explode(',', $play['gd']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="gd' . $key . '" onclick="send(\'rule\',{id:\'gd\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['js']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">';
	$list = explode(',', $play['js']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="js' . $key . '" onclick="send(\'rule\',{id:\'js\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
if ($play['sx']) {
	$msg['html'] .= '<div class="selectPart">
                    <div class="selectTitle">上限：</div>
                    <div class="selectList">';
	$list = explode(',', $play['sx']);
	foreach ($list as $key => $value) {
		$msg['html'] .= '<div class="selectItems" id="sx' . $key . '" onclick="send(\'rule\',{id:\'sx\',key:' . $key . '})">
                            <div class="selectBox"></div>
                            <img src="/app/files/d_19/images/common/gou.png">
                            <div class="selectText">' . $value . '</div>
                        </div> ';
	}
	$msg['html'] .= '</div><div style="clear: both;"></div>
                </div>';
}
act('html', $msg, $connection);
act('notifyNiceScroll', '', $connection);
$data = array();
$data['act'] = 'rule';
$data['play'] = $play;
reqact($data, $connection);
if (!empty($history_select) && !empty($history_select[$play['type']]) && !empty($history_select[$play['type']]['rule'])) {
	foreach ($history_select[$play['type']]['rule'] as $id => $val) {
		if (($id == 'gz2') || ($id == 'px') || ($id == 'target')) {
		} else {
			$data = array();
			$data['act'] = 'rule';
			$data['id'] = $id;
			$data['key'] = $val;
			reqact($data, $connection);
		}
	}
} 
			$data = array();
			$data['act'] = 'rulel';
			$data['id'] = 'time';
			$data['key'] = 'zb';
			$data['value'] = '8';
			reqact($data, $connection);
			$data = array();
			$data['act'] = 'rulel';
			$data['id'] = 'time';
			$data['key'] = 'qz';
			$data['value'] = '8';
			reqact($data, $connection);			
			$data = array();
			$data['act'] = 'rulel';
			$data['id'] = 'time';
			$data['key'] = 'xz';
			$data['value'] = '8';
			reqact($data, $connection);

			$data = array();
			$data['act'] = 'rulel';
			$data['id'] = 'time';
			$data['key'] = 'tp';
			$data['value'] = '8';
			reqact($data, $connection);		

            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'gz2';
			$data['key'] = '2';
			reqact($data, $connection);

       $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '0';
			reqact($data, $connection);          
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '1';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '2';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '3';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '4';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '5';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '6';
			reqact($data, $connection);
            $data = array();
			$data['act'] = 'rule';
			$data['id'] = 'px';
			$data['key'] = '7';
			reqact($data, $connection);