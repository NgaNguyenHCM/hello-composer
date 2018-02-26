<?php
/**
 * Created by PhpStorm.
 * User: NgaNguyen
 * Date: 26/2/2018
 * Time: 2:48 PM
 */

use Twitter\Search\Search;

include "vendor/autoload.php";

$search = new Search();
$search->setToken("aHH3bzwrGYoRTgX8hfsa1M1N1","50jy9Hpq92dwWbUetSeHwKATfRuWZf6AuE3AQwJSQ1nWSJtnMc");
$value = ["q" => "nga nguyen"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";