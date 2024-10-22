<?php

namespace App\Http\Controllers\Api\Apps;

use App\Http\Controllers\Controller;
use Laravel\Passport\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }
}
