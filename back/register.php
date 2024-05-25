<?php

require_once ('const.php');
require_once ('connection.php');

if (defined('ADM') && class_exists('Connect'))
{
    $connect_db = new Connection();

}