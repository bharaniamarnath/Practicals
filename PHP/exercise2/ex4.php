<?php
$xml=simplexml_load_file("names.xml");
echo $xml->getName() . "<br>";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br>";
  }
?> 