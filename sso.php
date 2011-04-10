<?php 
require_once(dirname(__file__) . '/singlesignon.php');
require_once(dirname(__file__) . '/config.php');

if(isset($_GET['login'])) {
	//$provider = 'google';
	$provider = 'facebook';
	$sso = new Single_sign_on($provider, $domain, $redirect_url, $fb_id, $fb_secret);
	$sso->login(); // will redirect
}
?>
<form action="?login" method="post">
    <button>Login with Google</button>
</form>