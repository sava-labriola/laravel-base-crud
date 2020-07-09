@extends('layouts.app')

@section('page-title', 'Lista studenti')

@foreach ($studenti as $studente)
    <ul>
        <li>ID: {{ $studente->id }}</li>
        <li>Nome: {{ $studente->name }}</li>
        <li>Cognome: {{ $studente->surname }}</li>
        <li>Matricola: {{ $studente->freshman }}</li>
        <li>Email: {{ $studente->mail }}</li>
        <li>
            <a href="{{ route('students.show', ['student' => $studente->id]) }}">
                Dettagli
            </a>
        </li>
    </ul>
@endforeach
