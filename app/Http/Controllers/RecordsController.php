<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordsController extends Controller
{
    public function index()
{
    $url = 'https://dejavutechkenya.com/dejavuurls/dejavurecs.php';
    $response = file_get_contents($url);
    $records = json_decode($response);

    return view('record')->with('records', $records);
}

}    
