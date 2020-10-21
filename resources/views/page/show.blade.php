@extends('master')
@section('content')

    <div class="form-group">
        <h1 class="h1 text-justify"><img class="al" src="{{$user->avatar_url}}" alt="Avatar"><?= $user->login ?></h1>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Projeto</th>
                <th scope="col">Link</th>
            </tr>
            </thead>
            <tbody>
            @foreach($repositories as $repository)
                <tr>
                    <th scope="row">{{$repository->name}}</th>
                    <td><a href="{{$repository->html_url}}" class="badge badge-secondary">{{$repository->html_url}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection


