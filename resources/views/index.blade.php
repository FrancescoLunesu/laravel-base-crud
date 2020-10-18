@extends('layouts.app')
@section('content')
    @foreach($data as $soci)
        <ul>
            <li>{{ $soci->nome}}</li>
            <li>{{ $soci->sesso}}</li>
            <li>{{ $soci->eta}}</li>
            <li>{{ $soci->tipo_abbonamento}}</li>
        </ul>
    @endforeach
@endsection
