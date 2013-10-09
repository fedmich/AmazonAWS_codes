<?php
	require_once 'aws.phar';

	use Aws\S3\S3Client;
	
	$client = S3Client::factory(array(
		'key'    => 'KEY',
		'secret' => 'SECRET'
	));

	$bucket = 'fed_newbucket_123';

	$result = $client->createBucket(array(
		'Bucket' => $bucket
	));

	var_dump($result);