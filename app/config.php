<?php
	//Constantes
	$configs = new HXPHP\System\Configs\Config;

	$configs->env->add('development');

	$configs->env->development->baseURI = '/sistema/';

	$configs->env->development->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '381086',
		'dbname' => 'sistemahx'
	));

	$configs->env->development->auth->setURLs('/sistema/home/', '/sistema/login/');

	$configs->env->add('production');

	$configs->env->production->baseURI = '/';

	$configs->env->production->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '381086',
		'dbname' => 'sistemahx'
	));

	$configs->env->production->auth->setURLs('/home/', '/login/');

	return $configs;
