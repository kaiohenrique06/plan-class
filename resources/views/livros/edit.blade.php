@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Livro</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor" value="{{ $livro->autor }}" required>

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{ $livro->titulo }}" required>

        <label for="subtitulo">Subtítulo</label>
        <input type="text" name="subtitulo" id="subtitulo" value="{{ $livro->subtitulo }}">

        <label for="edicao">Edição</label>
        <input type="text" name="edicao" id="edicao" value="{{ $livro->edicao }}">

        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora" value="{{ $livro->editora }}">

        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" name="ano_publicacao" id="ano_publicacao" value="{{ $livro->ano_publicacao }}">

        <button type="submit" class="btn btn-success">Atualizar Livro</button>
    </form>
</div>
@endsection
