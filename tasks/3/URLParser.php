<?php
if ($argc > 2) {
    die("please enter one url");
}
$url = $argv[1];
echo parse_url($url);
echo "\nscheme: ";
var_dump(parse_url($url, PHP_URL_SCHEME));
echo "\ndomain: ";
$host = parse_url($url, PHP_URL_HOST);
var_dump($host);
if (strpos($host, '.')) {
    echo "\nsub domain: ";
    var_dump(strtok($host, "."));
}
echo "\npath: ";
var_dump(parse_url($url, PHP_URL_PATH));
echo "\nquery string: ";
$queryString = parse_url($url, PHP_URL_QUERY);
var_dump($queryString);
echo "\nhash: ";
var_dump(parse_url($url, PHP_URL_FRAGMENT));

if (strpos($queryString, '.')) {
    $ext = strtok($queryString,".");
    while ($ext) {
        $ext = strtok(".");
        if ($ext != '') {
            echo "\nfile extension:";
            var_dump($ext);
        }
    }
}
