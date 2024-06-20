<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    $response = Http::get('http://127.0.0.1:8000/api/clients/');
    $data = $response->json();
    foreach ($data as $client) {
        echo $client['name'] . ' ' . $client['email'];
        echo '<br/>';
    }
});
