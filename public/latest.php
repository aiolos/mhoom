<?php
/*
 * Just get the latest recording of Met Het Oog Op Morgen
 */
$xmlString = file_get_contents('http://feeds.nos.nl/MHOOM');

$xml = new SimpleXMLElement($xmlString);
$result = $xml->xpath('//item[1]/link');

echo '<audio controls>';
echo '<source src="' . (string) $result[0] . '" type="audio/mpeg">';
echo 'Your browser does not support the audio element.';
echo '</audio>';
