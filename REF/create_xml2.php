<?php
$doc = new DOMDocument("1.0");
header("Content-Type: text/xml");

$root = $doc->createElement("boolkist");
$doc->appendChild($root);

$column = $doc->createElement("book");
$root->appendChild($column);

$columnid = $doc->createAttribute("id"); 
$column->appendChild($columnid); 

$columnid_value = $doc->createTextNode("1"); 
$columnid->appendChild($columnid_value); 

$item = $doc->createElement("name");
$column->appendChild($item);

$text = $doc->createTextNode("JAVA");
$item->appendChild($text);

$item = $doc->createElement("author");
$column->appendChild($item);

$text = $doc->createTextNode("CFD");
$item->appendChild($text);

$column = $doc->createElement("book");
$root->appendChild($column);

$columnid = $doc->createAttribute("id"); 
$column->appendChild($columnid); 

$columnid_value = $doc->createTextNode("2"); 
$columnid->appendChild($columnid_value); 

$item = $doc->createElement("name");
$column->appendChild($item);

$text = $doc->createTextNode("C++");
$item->appendChild($text);

$item = $doc->createElement("author");
$column->appendChild($item);

$text = $doc->createTextNode("SY");
$item->appendChild($text);

echo $doc->saveXML();
?>
