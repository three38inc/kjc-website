<?php
if(!session_id()){
    session_start();
}

// Get album id from url
$album_id = isset($_GET['album_id'])?$_GET['album_id']:header("Location: index.php");
$album_name = isset($_GET['album_name'])?$_GET['album_name']:header("Location: index.php");

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
    
    echo "<div class='fb-album'>";
    echo "<img src='{$imgSource}' alt=''>";
    echo "<h3>{$name}</h3>";
    echo "</div>";
}
?>