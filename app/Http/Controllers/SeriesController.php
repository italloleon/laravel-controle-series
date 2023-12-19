<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagem = session('mensagem.sucesso');

        return view('series.index')
            ->with('series', $series)
            ->with('mensagem', $mensagem);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $path = '';
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $path = $request->file('cover')->store('series_cover', 'public');
        }

        $serie = Series::create([
            'nome' => $request->nome,
            'description' => $request->description,
            'cover_path' => $path,
        ]);

        return to_route('series.index')
            ->with('mensagem.sucesso', "Serie '$serie->nome' criada com sucesso!");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Serie '{$series->nome}' removida com sucesso!");
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $path = $series->cover_path;
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $path = $request->file('cover')->store('series_cover', 'public');
        }
        $series->fill([
            'nome' => $request->nome,
            'description' => $request->description,
            'cover_path' => $path,
        ]);
        $series->save();
        return to_route('series.index')
            ->with('mensagem.sucesso', "Serie '{$series->nome}' editada com sucesso!");
    }

    public function show(Series $series, Request $request)
    {
        return view('series.show')->with("serie", $series);
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with("serie", $series);
    }
}
