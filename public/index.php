<?php

$maVariableUne = 1;
$maVariableDeux = 2;
$maVariableTrois = "Ou sont les types";

maVariableQuatre = "Je deteste les dolars";

if(!empty($_GET['page']))
{
    $page = $_GET['page'];
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