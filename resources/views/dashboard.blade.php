@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Meus Livros</h1>
        <a href="{{ route('livros.create') }}"><button class="btn btn-primary">Adicionar Livro</button></a>
        
        <div>
            <div>
                <table class="table table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Título</th>
                            <th scope="col">Subtítulo</th>
                            <th scope="col">Edição</th>
                            <th scope="col">Editora</th>
                            <th scope="col">Ano de Publicação</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                            <tr>
                                <td>{{ $livro->id }}</td>
                                <td>{{ $livro->autor }}</td>
                                <td>{{ $livro->titulo }}</td>
                                <td>{{ $livro->subtitulo }}</td>
                                <td>{{ $livro->edicao }}</td>
                                <td>{{ $livro->editora }}</td>
                                <td>{{ $livro->ano_publicacao }}</td>
                                <td>
                                    <a href="{{ route('livros.edit', $livro->id) }}" <button type="button" class="btn btn-warning">Editar</button></a>
                                    <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="logout">
                <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                </div>
            </div>
        </div>
    </div>
@endsection
