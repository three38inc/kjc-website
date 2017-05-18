<?php

if(!session_id()){
    session_start();
}

/*
 * Get access token using Facebook Graph API
 */
if(isset($_SESSION['facebook_access_token'])){
    // Get access token from session
    $access_token = $_SESSION['facebook_access_token'];
}else{
    // Facebook app id & app secret 
    $appId = '1885474451740403'; 
    $appSecret = 'f609f62dac6e0d33b092eab7cb4d93bf';

    // Generate access token
    $graphActLink = "https://graph.facebook.com/oauth/access_token?client_id={$appId}&client_secret={$appSecret}&grant_type=client_credentials";

    // Retrieve access token
    $accessTokenJson = file_get_contents($graphActLink);
    $accessTokenObj = json_decode($accessTokenJson);
    $access_token = $accessTokenObj->access_token;

    // Store access token in session
    $_SESSION['facebook_access_token'] = $access_token;
}

// Get photo albums of Facebook page using Facebook Graph API
$fields = "id,name,description,link,cover_photo,count";
$fb_page_id = "112934385452109";
$graphAlbLink = "https://graph.facebook.com/v2.9/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";

$jsonData = file_get_contents($graphAlbLink);
$fbAlbumObj = json_decode($jsonData, true, 512, JSON_BIGINT_AS_STRING);

// Facebook albums content
$fbAlbumData = $fbAlbumObj['data'];


foreach($fbAlbumData as $data){
    $id = isset($data['id'])?$data['id']:'';
    $name = isset($data['name'])?$data['name']:'';


    // Get album id from url
    $album_id = $id;
    $album_name = $name;

    // Get access token from session
    $access_token = $_SESSION['facebook_access_token'];

    // Get photos of Facebook page album using Facebook Graph API
    $graphPhoLink = "https://graph.facebook.com/v2.9/{$album_id}/photos?fields=source,images,name&access_token={$access_token}";
    $jsonData = file_get_contents($graphPhoLink);
    $fbPhotoObj = json_decode($jsonData, true, 512, JSON_BIGINT_AS_STRING);

    // Facebook photos content
    $fbPhotoData = $fbPhotoObj['data'];

    foreach($fbPhotoData as $data){
        $imageData = end($data['images']);
        $imgSource = isset($imageData['source'])?$imageData['source']:'';
        $name = isset($data['name'])?$data['name']:'';
        
        echo "
            <li data-pile='{$album_name}'>
                <a href='#'>
                    <span class='tp-info'><span>{$name}</span></span>
                    <img src='{$imgSource}' />
                </a>
            </li>
        ";
    }
}



