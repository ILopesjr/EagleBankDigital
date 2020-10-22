<?php

namespace App\Http\Controllers;

use App\Http\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = new HttpClient();
        $users = $users->getRequest('users');

        return view('page.index', ['users'=>$users->dados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login = "users/{$request->userLogin}";
        $repository = "users/{$request->userLogin}/repos";

        $user = new HttpClient();
        $user = $user->getRequest($login);

        $repositories = new  HttpClient();
        $repositories = $repositories->getRequest($repository);

        return view('page.show', ['user'=>$user->dados, 'repositories'=>$repositories->dados]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $login = "users/{$id}";
        $repository = "users/{$id}/repos";

        $user = new HttpClient();
        $user = $user->getRequest($login);

        $repositories = new  HttpClient();
        $repositories = $repositories->getRequest($repository);

        return view('page.show', ['user'=>$user->dados, 'repositories'=>$repositories->dados]);
    }

}
