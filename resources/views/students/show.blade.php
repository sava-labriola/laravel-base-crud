@extends('layouts.app')

@section('page-title', 'Dettagli studente')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Dettaglio studente</h1>
            <ul>
                <li>ID: {{ $student->id }}</li>
                <li>Nome: {{ $student->name }}</li>
                <li>Cognome: {{ $student->surname }}</li>
                <li>Matricola: {{ $student->freshman }}</li>
                <li>Email: {{ $student->mail }}</li>
            </ul>

            <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
            </form>
        </div>
    </div>
</div>
    <!-- <div class="container">
        <h1>Dettagli studente</h1>
            <ul>
                <li>ID: {{ $student->id }}</li>
                <li>Nome: {{ $student->name }}</li>
                <li>Cognome: {{ $student->surname }}</li>
                <li>Matricola: {{ $student->freshman }}</li>
                <li>Email: {{ $student->mail }}</li>
            </ul>
    </div> -->
@endsection
