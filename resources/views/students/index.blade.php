@extends('layouts.app')

@section('page-title', 'Lista studenti')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3 mb-3">Lista studenti</h1>
                    <a class="btn btn-primary"
                    href="{{ route('students.create') }}">
                        Nuovo studente
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                            <th>Email</th>
                            <th class="text-right">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($studenti as $studente)
                            <tr>
                                <td>{{ $studente->id }}</td>
                                <td>{{ $studente->name }}</td>
                                <td>{{ $studente->surname }}</td>
                                <td>{{ $studente->freshman }}</td>
                                <td>{{ $studente->mail }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm"
                                    href="{{ route('students.show', ['student' => $studente->id]) }}">
                                        Dettagli
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('students.edit', ['student' => $studente->id]) }}">
                                        Modifica
                                    </a>
                                    <form action="{{ route('students.destroy', ['student' => $studente->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Non è presente nessuno studente</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

<!-- @foreach ($studenti as $studente)
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
@endforeach -->
