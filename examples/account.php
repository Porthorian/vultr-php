<?php
require(__DIR__.'/../api_key.php');
require (__DIR__.'/../vendor/autoload.php');

use Vultr\VultrPhp\VultrClient;

$client = VultrClient::create(API_KEY);

var_dump($client->account->getAccount());
