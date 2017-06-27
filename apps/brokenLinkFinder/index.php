<?php
function dirToArray($dir,$fileTypes) { 
   $result = array(); 
    $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
             dirToArray($dir . DIRECTORY_SEPARATOR . $value,$fileTypes); 
         } 
         else 
         { 
//             echo "<br/>".$value."[](";
             list($file_name,$type)=explode(".",$value);
//              echo $type.")";
             foreach($fileTypes as $key=> $fileType){//echo"(".$fileType.")"; 
             if($type==$fileType)
                brokenLink($dir,$value);}
         } 
      } 
   } 
}

function brokenLink($dir,$value){
    $path=$dir. DIRECTORY_SEPARATOR .$value;
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTMLFile($path);
    $tags = $doc->getElementsByTagName('a');

    foreach ($tags as $tag) {
//           echo "[".$path ." has Link to =>". $tag->getAttribute('href')."]<br>";
        url_check($dir,$tag->getAttribute('href'),$value);
        
    }
}
if(isset($_GET["fileTypes"]))
    $fileTypes=explode("$",$_GET["fileTypes"]);

dirToArray('C:\xampp\htdocs\Github\kjc-website\home',$fileTypes);
//check("mailto:info@kristujayanti.com");
//check("http://alumni.kristujayanti.edu.in/");
//check("https://alumni.kristujayanti.edu.in/");
//check("../gallery/index.php");
function url_check($dir,$urlStr,$curPage){
    $parsed = parse_url($urlStr);
    if (!empty($parsed['scheme']))  {
        $filename= $urlStr;
        $file_headers = @get_headers($filename);

        if($file_headers[0] == 'HTTP/1.0 404 Not Found'){
              echo "The file $filename does not exist<br/>";
        } else if ($file_headers[0] == 'HTTP/1.0 302 Found' && $file_headers[7] == 'HTTP/1.0 404 Not Found'){
            //echo "The file $filename does not exist, and I got redirected to a custom 404 page..<br/>";
        } else {
            //echo "The file $filename exists<br/>";
        }
    }
    else {
        $filename = $dir. DIRECTORY_SEPARATOR.$urlStr;
        $path=$dir. DIRECTORY_SEPARATOR .$curPage;
        if (file_exists($filename)) {
//            echo "The file $filename exists<br>";
        } else {
            echo "[".$path ." has Link to =>".$urlStr ."]<br>";
            echo "The file $filename does not exist<br>";
        }
    }
}
