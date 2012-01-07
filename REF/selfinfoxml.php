<?php
$doc = new DOMDocument("1.0");
header("Content-Type: text/xml");

$root = $doc->createElement("root");
$doc->appendChild($root);

$column = $doc->createElement("selfinfo");
$root->appendChild($column);

$item = $doc->createElement("name");
$column->appendChild($item);

$text = $doc->createTextNode("testname");
$item->appendChild($text);

$item = $doc->createElement("image");
$column->appendChild($item);

$text = $doc->createTextNode("testimage");
$item->appendChild($text);

$item = $doc->createElement("info");
$column->appendChild($item);

$text = $doc->createTextNode("testinfo");
$item->appendChild($text);

echo $doc->saveXML();
?>
