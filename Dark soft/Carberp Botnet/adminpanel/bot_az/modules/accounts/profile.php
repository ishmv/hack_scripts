<?php

if(empty($Cur['id'])) $Cur['id'] = $_SESSION['user']->id;

if($Cur['id'] != $_SESSION['user']->id){
	if($_SESSION['user']->access['accounts']['profiles'] != 'on'){
		$smarty->assign("site_data", "modules/accounts/access_denied.tpl");
		$smarty->display('index.tpl');
		exit;
	}
}else{
}

if($_SESSION['user']->access['accounts']['enable_disable'] == 'on'){
	}elseif($Cur['type'] === '0'){
	}
}

$result = $mysqli->query('SELECT * FROM bf_users WHERE (id<>\'0\') AND (id=\''.$Cur['id'].'\') LIMIT 1');

$result->info = json_decode($result->info);
$result->config = json_decode($result->config, true);
$smarty->assign("user", $result);

$dir['1'] = '<a href="/'.$Cur['to'].'/profile-'.$Cur['id'].'.html">'.ucfirst($result->login).'</a>';
?>