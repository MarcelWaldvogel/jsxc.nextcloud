<?php
/**
 * ownCloud - JavaScript XMPP Chat
 *
 * Copyright (c) 2014 Klaus Herberth <klaus@jsxc.org> <br>
 * Released under the MIT license
 *
 * @author Klaus Herberth
 */

use \OCA\OJSXC\AppInfo\Application;

$application = new Application();
$application->registerRoutes($this, array(
	'routes' => array(
		array('name' => 'http_bind#index', 'url' => '/http-bind', 'verb' => 'POST'),
		array('name' => 'settings#index', 'url' => '/settings', 'verb' => 'POST'),
		array('name' => 'settings#setAdmin', 'url' => '/settings/admin', 'verb' => 'POST'),
		array('name' => 'settings#setUser', 'url' => '/settings/user', 'verb' => 'POST'),
		array('name' => 'settings#getIceServers', 'url' => '/settings/iceServers', 'verb' => 'GET'),
		array('name' => 'settings#getUsers', 'url' => '/settings/users', 'verb' => 'GET'),
		array('name' => 'externalApi#index', 'url' => '/ajax/externalApi.php', 'verb' => 'POST'),
		array('name' => 'externalApi#checkPassword', 'url' => '/externalApi/checkPassword', 'verb' => 'POST'),
		array('name' => 'externalApi#isUser', 'url' => '/externalApi/isUser', 'verb' => 'POST'),
		array('name' => 'externalApi#sharedRoster', 'url' => '/externalApi/sharedRoster', 'verb' => 'POST'),
	)
));
?>
