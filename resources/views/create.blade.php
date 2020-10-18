@extends('layouts.app')

@section('content')
    <form action="{{route('shareholders.store')}}" method="post">
        @csrf
        @method('POST')
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Nome" id="nome" value="{{ old('nome')}}">
        <label for="sesso">Sesso</label>
        <input type="text" name="sesso" placeholder="Nome" id="sesso" value="{{ old('sesso')}}">
        <label for="eta">Eta</label>
        <input type="text" name="eta" placeholder="eta" id="eta" value="{{ old('eta')}}">
        <label for="tipo_abbonamento">Tipo Abbonamento</label>
        <textarea name="tipo_abbonamento" rows="2" cols="50"> {{ old('tipo_abbonamento')}} </textarea>
        <input type="submit" value="Invia">
    </form>
@endsection
