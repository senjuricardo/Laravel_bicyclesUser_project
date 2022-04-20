@extends('master.main')


@section('content')
    <h1>Bicyles</h1>

    @component('components.bicycleList',[
            'bicycles'=>$bicycles
    ])
    @endcomponent
@endsection
