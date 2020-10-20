<?php

namespace App\Http\Controllers;

use App\Http\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class GithubController extends Controller
{
    public function index()
    {

        $request = new HttpClient();
        $request = $request->getRequest('users');

        return json_encode($request->dados);
    }
}
