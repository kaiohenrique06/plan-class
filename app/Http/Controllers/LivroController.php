<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::where('user_id', auth()->id())->get();
        return view('dashboard', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_publicacao' => 'required|integer',
        ]);

        $livro = new Livro($request->all());
        $livro->user_id = auth()->id();
        $livro->save();

        return redirect()->route('dashboard')->with('success', 'Livro adicionado com sucesso!');

        Livro::create($request->all());

        return redirect()->route('livros.index')
        ->with('success', 'Livro criado com sucesso.');
    }

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_publicacao' => 'required|digits:4',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')
                         ->with('success', 'Livro atualizado com sucesso.');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')
                         ->with('success', 'Livro deletado com sucesso.');
    }
}

