@extends('master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Login</th>
            <th scope="col">Avatar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{route('users.show', $user->login)}}" class="badge badge-secondary">{{$user->login}}</a></td>
                <td><a href="{{route('users.show', $user->login)}}"><img src="{{$user->avatar_url}}" alt="Avatar"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
