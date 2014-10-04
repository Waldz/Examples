<?php

$xml = simplexml_load_file("reporting.xml");

foreach ($xml->Transaction->Column as $column) {
    echo sprintf(
        "%s = %s\n",
        $column->attributes()->Name,
        $column->attributes()->Value
    );
}
