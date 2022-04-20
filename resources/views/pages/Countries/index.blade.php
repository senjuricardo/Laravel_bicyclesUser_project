@extends('master.main')


@section('content')
    <h1>Countries</h1>

    @component('components.countryList',[
            'countries'=>$countries
    ])
    @endcomponent
@endsection
