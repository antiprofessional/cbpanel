<?php
require_once __DIR__ . '/app/routes/indexRoutes.php';

// Made by the dev team at @carrier / ~ Tele @byte_array / ~  t.me/deathleakslol for leaking it :) 
session_start();
$indexRoutes = new IndexRoutes();
$indexRoutes->index();

