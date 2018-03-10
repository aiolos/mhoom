<?php
/*
 * Just get the latest recording of Met Het Oog Op Morgen
 */
$xmlString = file_get_contents('http://feeds.nos.nl/MHOOM');

$xml = new SimpleXMLElement($xmlString);
$result = $xml->xpath('//item[1]/media:content/@url');

print (string) $result[0]['url'] . PHP_EOL;