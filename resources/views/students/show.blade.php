@extends('layouts.app')

@section('page-title', 'Dettagli studente')

@section('content')
    <div class="container">
        <h1>Dettagli studente</h1>
            <ul>
                <li>ID: {{ $student->id }}</li>
                <li>Nome: {{ $student->name }}</li>
                <li>Cognome: {{ $student->surname }}</li>
                <li>Matricola: {{ $student->freshman }}</li>
                <li>Email: {{ $student->mail }}</li>
            </ul>
    </div>
@endsection
