<?php foreach($users as $user) { 
	$display = 0;
	if($user['User']['reputation'] >= 1000) {
		$display = round(($user['User']['reputation'] / 1000), 2) . 'k';
	} else {
		$display = $user['User']['reputation'];
	}
?>
	<div style="float: left; width: 200px;">
		<a style="float: left; margin-right: 10px;" href="/users/<?=$user['User']['public_key'];?>/<?=$user['User']['username'];?>" title="<?=$user['User']['username'];?>">
		<img src="<?=$gravatar->urlFromhash($user['User']['image'], array('size' => 25, 'default' => 'mm'));?>" width="25" height="25" alt="<?=$user['User']['username'];?>" />	
		</a>
		<a href="/users/<?=$user['User']['public_key'];?>/<?=$user['User']['username'];?>" title="<?=$user['User']['username'];?>" style="float: left;"><?=$user['User']['username'];?></a>
		<strong style="float: left;">&nbsp;<?=$display;?></strong>
		<div style="clear: both;"></div>
	</div>
<? } ?>