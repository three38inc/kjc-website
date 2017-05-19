<?php

session_start();

require('../fb-sdk/autoload.php');

$fb = new \Facebook\Facebook([
  'app_id' => '1885474451740403',
  'app_secret' => 'f609f62dac6e0d33b092eab7cb4d93bf',
  'default_graph_version' => 'v2.9',
//  'default_access_token' => 'a4e86968609f01a73d9dadf5a104415d', // optional
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/Github/kjc-website/gallery/php/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';