<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04/04/2018
 * Time: 09:40
 */

namespace classi;
require_once 'classi/User.php';
require_once 'classi/Logger.php';

$user= new \User(new \Logger());
$user->setUser();
