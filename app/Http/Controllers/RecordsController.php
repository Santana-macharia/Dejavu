<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordsController extends Controller
{
    public function index()
    {
        $response = Http::get('https://dejavutechkenya.com/dejavuurls/dejavurecs.php');
        $data = json_decode($response->getBody());

        return view('record', ['data' => $data]);
    }
}
