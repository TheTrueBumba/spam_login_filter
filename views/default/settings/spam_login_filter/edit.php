<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_stopforumspam');?></h3>
<?php 
    //Stopforumspam
	echo elgg_echo('spam_login_filter:use_stopforumspam');
	
	$params = array(
		'name' => 'params[use_stopforumspam]',
		'value' => $vars['entity']->use_stopforumspam,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';
	
	echo elgg_echo('spam_login_filter:stopforumspam_api_key');
    echo elgg_view('input/text', array('name' => "params[stopforumspam_api_key]", 'value' => $vars['entity']->stopforumspam_api_key));
	
	echo "<br><br>";
?>
<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_fassim');?></h3>
<?php 
    //Fassim
	echo elgg_echo('spam_login_filter:use_fassim');
	
		$params = array(
		'name' => 'params[use_fassim]',
		'value' => $vars['entity']->use_fassim,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

	echo elgg_echo('spam_login_filter:fassim_api_key');
    echo elgg_view('input/text', array('name' => "params[fassim_api_key]", 'value' => $vars['entity']->fassim_api_key));
	
	echo "<br><br>";
?>
	
<?php 
    //Check e-mails?
	echo elgg_echo('spam_login_filter:fassim_check_email');
	
	$params = array(
		'name' => 'params[fassim_check_email]',
		'value' => $vars['entity']->fassim_check_email,
		'options_values' => array(
			'1' => 'Yes',
			'0' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

    //Check ips?
	echo elgg_echo('spam_login_filter:fassim_check_ip');
	
	$params = array(
		'name' => 'params[fassim_check_ip]',
		'value' => $vars['entity']->fassim_check_ip,
		'options_values' => array(
			'1' => 'Yes',
			'0' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

    //Block proxies?
	echo elgg_echo('spam_login_filter:fassim_block_proxies');
	
	$params = array(
		'name' => 'params[fassim_block_proxies]',
		'value' => $vars['entity']->fassim_block_proxies,
		'options_values' => array(
			'1' => 'Yes',
			'0' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

    //Block top spamming ISPs?
	echo elgg_echo('spam_login_filter:fassim_block_top_spamming_isps');
	
	$params = array(
		'name' => 'params[fassim_block_top_spamming_isps]',
		'value' => $vars['entity']->fassim_block_top_spamming_isps,
		'options_values' => array(
			'1' => 'Yes',
			'0' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

    //Block top spamming domains?
	echo elgg_echo('spam_login_filter:fassim_block_top_spamming_domains');
	
	$params = array(
		'name' => 'params[fassim_block_top_spamming_domains]',
		'value' => $vars['entity']->fassim_block_top_spamming_domains,
		'options_values' => array(
			'1' => 'Yes',
			'0' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';
	
	//Block countries?
	echo elgg_echo('spam_login_filter:fassim_blocked_country_list');
	echo elgg_view('input/text', array('name' => "params[fassim_blocked_country_list]", 'value' => $vars['entity']->fassim_blocked_country_list));

	echo "<br><br>";
?>
<?php
	//Block regions?
	echo elgg_echo('spam_login_filter:fassim_blocked_region_list');
	echo elgg_view('input/text', array('name' => "params[fassim_blocked_region_list]", 'value' => $vars['entity']->fassim_blocked_region_list));

	echo "<br><br>";
?>
<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_domain_blacklist');?></h3>
<?php	
	//Domain blacklist
	echo elgg_echo('spam_login_filter:use_mail_domain_blacklist');
	
	$params = array(
		'name' => 'params[use_mail_domain_blacklist]',
		'value' => $vars['entity']->use_mail_domain_blacklist,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

	echo elgg_echo('spam_login_filter:blacklisted_mail_domains');
	echo elgg_view('input/longtext', array('name' => "params[blacklisted_mail_domains]", 'value' => $vars['entity']->blacklisted_mail_domains));

	echo "<br><br>";
?>
<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_email_blacklist');?></h3>
<?php	
	//Email blacklist
	echo elgg_echo('spam_login_filter:use_mail_blacklist');
	
	$params = array(
		'name' => 'params[use_mail_blacklist]',
		'value' => $vars['entity']->use_mail_blacklist,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

	echo elgg_echo('spam_login_filter:blacklisted_mails');
	echo elgg_view('input/longtext', array('name' => "params[blacklisted_mails]", 'value' => $vars['entity']->blacklisted_mails));

	echo "<br><br>";
?>
<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_plugin_notifications');?></h3>
<?php
	//Notify by mail
	echo elgg_echo('spam_login_filter:notify_by_mail');
	
	$params = array(
		'name' => 'params[notify_by_mail]',
		'value' => $vars['entity']->notify_by_mail,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';

	echo elgg_echo('spam_login_filter:notify_mail_address');
    echo elgg_view('input/text', array('name' => "params[notify_mail_address]", 'value' => $vars['entity']->notify_mail_address));
	
	echo "<br><br>";
?>
<hr>
<h3><?php echo elgg_echo('spam_login_filter:title_ip_blacklist');?></h3>
<?php
	echo elgg_echo('spam_login_filter:use_ip_blacklist_cache_description');
	echo ('<br>');
	echo elgg_echo('spam_login_filter:use_ip_blacklist_cache');
	
	$params = array(
		'name' => 'params[use_ip_blacklist_cache]',
		'value' => $vars['entity']->use_ip_blacklist_cache,
		'options_values' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
	);
	
	echo elgg_view('input/pulldown', $params) . '<br>';