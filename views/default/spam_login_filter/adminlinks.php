<?php 
	if (isadminloggedin()){
		echo elgg_view('output/confirmlink', array('text' => elgg_echo("spam_login_filter:delete_and_report"), 'href' => "{$vars['url']}action/spam_login_filter/delete?guid={$vars['entity']->guid}&__elgg_token=$token&__elgg_ts=$ts"));
	}
?>