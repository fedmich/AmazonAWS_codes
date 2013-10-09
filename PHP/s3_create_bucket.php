<?php
	require_once 'aws.phar';

	use Aws\S3\S3Client;
	
	$client = S3Client::factory(array(
		'key'    => 'KEY',
		'secret' => 'SECRET'
	));

	$bucket = 'fed_newbucket_123';
	
	if( $client->doesBucketExist ( $bucket ) ){
		//Bucket is already created before
		echo 'Bucket is already created before';
	}
	else{
		//Not yet created before, so go and create it now
		$result = $client->createBucket(array(
			'Bucket' => $bucket
		));
		var_dump($result);
	}
