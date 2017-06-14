<?php



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
    $description = isset($data['description'])?$data['description']:'';
    $link = isset($data['link'])?$data['link']:'';
    $cover_photo_id = isset($data['cover_photo']['id'])?$data['cover_photo']['id']:'';
    $count = isset($data['count'])?$data['count']:'';
    
    $pictureLink = "photos.php?album_id={$id}&album_name={$name}&link={$link}";
    $photoCount = ($count > 1)?$count. ' Photos':$count. ' Photo';
    
    if($name=="Timeline Photos" || $name=="Mobile Uploads")
        continue;
    
    echo "
<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
<a href='{$pictureLink}'>
    <div class='album'>
        <div class='cover'>
            <div class='img' style='background-image:url(https://graph.facebook.com/v2.9/{$cover_photo_id}/picture?access_token={$access_token})'></div>
            
        </div>
        <div class='caption'>
            <h5>{$name}</h5>
            <span>{$photoCount}</span>
            
        </div>
    </div>
</a>
<a href='{$link}' target='_blank' class='fb-link'>View on Facebook</a>
</div>
";
}







?>