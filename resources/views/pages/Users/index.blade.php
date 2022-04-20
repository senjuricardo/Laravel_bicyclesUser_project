@extends('master.main')


@section('content')
    <h1>Users</h1>

    @component('components.userList',[
            'users'=>$users
    ])
    @endcomponent
@endsection
