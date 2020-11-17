<?php

$aa = [1254,"Hello world",'a'];

foreach ($aa as $index => $item) {
    echo "<li class=\"{$index}\">{$item}</li>\n";
}
