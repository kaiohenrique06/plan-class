<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Livro</title>
</head>
<body>
    <h1>Detalhes do Livro</h1>
    <p><strong>ID:</strong> {{ $livro->id }}</p>
    <p><strong>Autor:</strong> {{ $livro->autor }}</p>
    <p><strong>Título:</strong> {{ $livro->titulo }}</p>
    <p><strong>Subtítulo:</strong> {{ $livro->subtitulo }}</p>
    <p><strong>Edição:</strong> {{ $livro->edicao }}</p>
    <p><strong>Editora:</strong> {{ $livro->editora }}</p>
    <p><strong>Ano de Publicação:</strong> {{ $livro->ano_publicacao }}</p>
    <a href="{{ route('livros.index') }}">Voltar à lista</a>
    <a href="{{ route('livros.edit', $livro->id) }}">Editar</a>
    <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
</body>
</html>
