<?php 
require_once(dirname(__file__) . '/singlesignon.php');
require_once(dirname(__file__) . '/config.php');

//$provider = 'google';
$provider = 'facebook';
$sso = new Single_sign_on($provider, $domain, $redirect_url, $fb_id, $fb_secret);
if ($user_info = $sso->return_page()) {
	print_r($user_info);
} else {
	echo 'user cancel';
}
?>