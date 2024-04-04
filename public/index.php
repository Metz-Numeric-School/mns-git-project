<?php

if(!empty($_POST['page']))
{
    $page = $_POST['page'];
}
else
{
    $page = "index";
}

$filepath = "../src/pages/" . $page . ".php";
if(file_exists($filepath))
{
    require $filepath;
}
else
{
    header("HTTP/1.1 404 Not Found");
    echo "Page not found";
    die;
}