<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>
<body>
<form method="POST">
	<input type="text" name="firstname" placeholder="Firstname">
	<input type="text" name="lastname" placeholder="Lastname">
	<input type="text" name="location" placeholder="Location">
	<input type="text" name="report" placeholder="Report">
	<textarea name="desc" placeholder="Description"></textarea>
	<input type="submit" value="Submit">
</form>

</body>
</html>



<?php
if($_POST)	{
// Script by Fred Fletcher, Canada.

$fname = "kaushal";
$lname = "kushwaha";
$location = "Pune";
$report = "monday";
$description = "hello world";

$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('file.xml');
/*
$element = $xml->getElementsByTagName('reports')->item(0);

$timestamp = $element->getElementsByTagName('timestamp')->item(0);
$fname = $element->getElementsByTagName('fname')->item(0);
$lname = $element->getElementsByTagName('lname')->item(0);
$location = $element->getElementsByTagName('location')->item(0);
$report = $element->getElementsByTagName('report')->item(0);
$description = $element->getElementsByTagName('description')->item(0);
*/
$newItem = $xml->createElement('reports');

$newItem->appendChild($xml->createElement('timestamp', date("F j, Y, g:i a",time())));;

$newItem->appendChild($xml->createElement('fname', $_POST['firstname']));
$newItem->appendChild($xml->createElement('lname', $_POST['lastname']));
$newItem->appendChild($xml->createElement('location', $_POST['location']));
$newItem->appendChild($xml->createElement('report', $_POST['report']));
$newItem->appendChild($xml->createElement('description', $_POST['desc']));
/*

$newItem->appendChild($xml->createElement('fname', "kaushal"));
$newItem->appendChild($xml->createElement('lname', "kushwaha"));
$newItem->appendChild($xml->createElement('location', "Pune"));
$newItem->appendChild($xml->createElement('report', "Today"));
$newItem->appendChild($xml->createElement('description', "Hello world"));
*/
$xml->getElementsByTagName('entries')->item(0)->appendChild($newItem);

$xml->save('file.xml');

echo "Data has been written.";
}
?>