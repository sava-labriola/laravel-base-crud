@extends('layouts.app')

@section('page-title', 'Modifica studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Modifica nuovo studente</h1>
                @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
                @endif

                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome studente" value="{{ old('name', $student->name) }}" required>
                        @error ('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <textarea type="text" name="surname" class="form-control" id="cognome" placeholder="Cognome studente">{{ old('surname', $student->surname) }}</textarea>
                        @error ('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="freshman" class="form-control" id="matricola" placeholder="Matricola studente" value="{{ old('freshman', $student->freshman) }}">
                        @error ('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="text" name="mail" class="form-control" id="Email" placeholder="Email studente" value="{{ old('mail', $student->mail) }}">
                        @error ('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
