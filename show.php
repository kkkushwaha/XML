<?php
$xml=simplexml_load_file("file.xml") or die("Error: Cannot create object");
/*echo $xml->timestamp . "<br>";
echo $xml->fname . "<br>";
echo $xml->lname . "<br>";
echo $xml->location . "<br>";
echo $xml->report . "<br>";
echo $xml->description . "<br>";*/

foreach($xml->reports as $event) {
echo $event->timestamp . "<br>";
echo $event->fname . "<br>";
echo $event->lname . "<br>";
echo $event->location . "<br>";
echo $event->report . "<br>";
echo $event->description . "<br>";


    //$event_id = (string) $event->attributes()->$idAttr;
    }
?>