<?php

require_once ABSPATH . 'vendor/phpmailer/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ABSPATH);
$dotenv->load();
