<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.08.2016
 * Time: 18:39
 */


$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "DB-MY-CMS";

$myConnect = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$myConnect);

$title_page = mysql_query("",$myConnect);