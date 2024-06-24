@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Livro</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf

        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor" required>

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="subtitulo">Subtítulo</label>
        <input type="text" name="subtitulo" id="subtitulo">

        <label for="edicao">Edição</label>
        <input type="text" name="edicao" id="edicao">

        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora">

        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" name="ano_publicacao" id="ano_publicacao">

        <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
    </form>
</div>
@endsection
