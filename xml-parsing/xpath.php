<?php

$doc = new DOMDocument();
$doc->load('reporting.xml');

$xpath = new DOMXPath($doc);

// If you want to read all Column tags
$columnAttributes = $xpath->query("//ArrayOfTransactionInformation/Transaction/Column");
foreach ($columnAttributes as $columnTag) {
    /** @var \DOMElement $columnTag */
    echo sprintf(
        "%s = %s\n",
        $columnTag->getAttribute('Name'),
        $columnTag->getAttribute('Value')
    );
}

// If you want to read exact attribute
$billingNameAttribute = $xpath->query("//ArrayOfTransactionInformation/Transaction/Column[@Name='billingname']/@Value");
if ($billingNameAttribute->length > 0) {
    echo $billingNameAttribute->item(0)->value;
}
