<?php

use Config\Services;

// Routing otomatis
$routes->get('/', 'Ibu::index'); // Rute menuju controller Ibu
$routes->resource('ibu');         // Rute RESTful

