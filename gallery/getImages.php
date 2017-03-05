<?php
/* function:  generates thumbnail */
function make_thumb($src,$dest,$desired_width) {
	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height*($desired_width/$width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
	/* copy source image at a resized size */
	imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
	$files = array();
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

/** function: returns a subdirectoy**/
function get_sub_directory()
{	
	$dirs = array();
	$dir = "images/";
	$d = dir($dir);
	while(false != ($entry = $d->read())){
		if(is_dir(implode('/', array($dir, $entry)))){
			if(($entry != '.') && ($entry != '..')){
				$dirs[] = $entry;
			}
		}
	}

	//	foreach($dirs as $dir){
	//		$name=$name.",".$dir;
	//	}
	return $dirs;
}

/** generate photo gallery **/
function generate($images_dir,$thumbs_dir,$i){
	$image_files = get_files($images_dir);
	$thumbs_width = 120;
	if(count($image_files)) {
		$index = 0;
		foreach($image_files as $index=>$file) 
		{
			$index++;
			$thumbnail_image = $thumbs_dir.$file;
			if(!file_exists($thumbnail_image)) 
			{
				$extension = get_file_extension($thumbnail_image);
				if($extension) 
				{
					make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
				}
			}
			if($i==1){
//				$name=explode("/",$images_dir);
				// The actual image file -> '.$images_dir.$file.'
				$GLOBALS['gallery']=$GLOBALS['gallery'].'<div class="album-tab-thumbs-img"><a href="#'.$images_dir.'" rel="gallery"><img src="'.$thumbnail_image.'" /></a></div>';
//				<a href="#'.$images_dir.'" rel="gallery" class="album-tab-thumbs-desc-a"><div class="album-tab-thumbs-desc"><span style="font-size:14px;color:#fff;">'.$name[1].'</span></div></a>
				break;
			}
			else{
				if($index<10){$tag='0'.$index;}else{$tag=$index;}
				$GLOBALS['gallery']=$GLOBALS['gallery'].'<div class="gallery-tab-thumbs-img"><a href="#'.$images_dir.$file.'" rel="gallery" id="'.$tag.'"><img src="'.$thumbnail_image.'" /></a>
				</div>';
				
			}

			//		if($index % $images_per_row == 0) 
			//		{ 
			//			$gallery=$gallery.'<div class="clear"></div>';
			//			break;
			//		}
			
		}
		if($i!=1)
			return $index;
	}
	else {
		echo '<p>There are no images in this gallery.</p>';
	}

}

/** settings **/
$images_dir = '';
$thumbs_dir = '';
$images_per_row = 5;
$gallery="";
$dirDesc="";

/** Get Parameters   **/
$type=$_REQUEST['screen'];

if($type=='album')
{
	$name = array();
	$no=0;
	$name = get_sub_directory();
	foreach($name as $dir){
		$thumbs='thumbs/'.$dir.'-thumbs/';
		$dir='images/'.$dir.'/';
		generate($dir,$thumbs,1);
		$no=$no+1;
	}
	$data = array(
		'html' => $GLOBALS['gallery'],
		'no' => $no,
		'type' => 'album',
		'dirDesc' => $GLOBALS['dirDesc'],
	);
	echo json_encode($data);

}
else
{
	$dir=ltrim($type, '#');
	$array=explode("/",$dir);
	//$thumbs=rtrim($dir, "/").'-thumbs/';
	
	$thumbs='thumbs/'.$array[1].'-thumbs/';
	$no=generate($dir,$thumbs,10);
	
	$data = array(
		'html' => $GLOBALS['gallery'],
		'no' => $no,
		'type' => 'image',
	);
	
	echo json_encode($data);
}









?>