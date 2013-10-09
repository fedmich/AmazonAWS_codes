<?php
	require_once 'aws.phar';

	use Aws\Iam\IamClient;
	
	$client = IamClient::factory(array(
		'key'    => 'KEY',
		'secret' => 'SECRET'
	));

	$ret = $client->createUser(
		array(
			'UserName' => 'fed_123'
		)
	);

	var_dump($ret);