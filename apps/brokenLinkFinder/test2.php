<?php
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTMLFile("sample.html");
$tags = $doc->getElementsByTagName('a');

foreach ($tags as $tag) {
       echo $tag->getAttribute('href').' | '.$tag->nodeValue."\n";
}
?>
?>