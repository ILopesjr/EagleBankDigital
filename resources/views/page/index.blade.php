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
        @foreach($collection as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><a href="{{route('users.show', $item->login)}}" class="badge badge-secondary">{{$item->login}}</a></td>
                <td><a href="{{route('users.show', $item->login)}}"><img src="{{$item->avatar_url}}" alt="Avatar"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
