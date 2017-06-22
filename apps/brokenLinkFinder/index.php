<?php
//function getDirContents($dir, &$results = array()){
//    $files = scandir($dir);
//    
//    foreach($files as $key => $value){
//        
//        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
//        if(!is_dir($path)) {
//            $results[] = $path;
//        } else if($value != "." && $value != ".." ) {
//            getDirContents($path, $results[$path]);
//            $results[] = $path;
//        }
//    }
//
//    return $results;
//}
//var_dump(dirToArray('C:\xampp\htdocs\works\krisym'));
//next-->
//function dirToArray($dir) { 
//   $result = array(); 
//    $cdir = scandir($dir); 
//   foreach ($cdir as $key => $value) 
//   { 
//      if (!in_array($value,array(".",".."))) 
//      { 
//         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
//         { 
//            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
//         } 
//         else 
//         { 
//            $result[] = $value; 
//         } 
//      } 
//   } 
//   
//   return $result; 
//}
//dirToArray('C:\xampp\htdocs\works\krisym');
function dirToArray($dir) { 
   $result = array(); 
    $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
             dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
//             echo $value ."[".$dir . DIRECTORY_SEPARATOR . $value."]";
//             echo "</br>";
             echo "<br/>".$value;
             brokenLink($dir . DIRECTORY_SEPARATOR . $value);
         } 
      } 
   } 
}
//dirToArray('C:\xampp\htdocs\works\krisym');
function brokenLink($path){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTMLFile($path);
    $tags = $doc->getElementsByTagName('a');

    foreach ($tags as $tag) {
           echo "[".$path ." has Link to =>". $tag->getAttribute('href')."]<br>";
    }
}
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *
echo $gecos;
echo $gid;