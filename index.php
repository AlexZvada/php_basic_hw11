<?php


function getContent()
{
    echo "entes some content please" . PHP_EOL;
    $content = fgets(STDIN);
    return $content;
}
function writeToFile($file)
{

    for ($i = 0; $i < 3; $i++) {
        $content = getContent();
        file_put_contents($file, $content, FILE_APPEND);

    }
}

function readFromFile($file)
{
    $content = file($file);
    $lastString = count($content) -1;
    return $content[$lastString];
}


$file = 'test.txt';

writeToFile($file);
$lastString = readFromFile($file);

var_dump($lastString);

