<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReaderRequest;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index()
    {
        $readers = Reader::all();
        return view('readers.index', compact('readers'));
    }

    public function create()
    {
        return view('readers.create');
    }

    public function store(ReaderRequest $request)
    {
        $data = $request->validated();

        Reader::create($data);

        return redirect()->route('readers.index')->with('success', 'Lector creado exitosamente.');
    }

    public function show(Reader $reader)
    {
        return view('readers.show', compact('reader'));
    }

    public function edit(Reader $reader)
    {
        return view('readers.edit', compact('reader'));
    }

    public function update(ReaderRequest $request, Reader $reader)
    {
        $data = $request->validated();

        $reader->update($data);

        return redirect()->route('readers.index')->with('success', 'Lector actualizado exitosamente.');
    }

    public function destroy(Reader $reader)
    {
        $reader->news()->detach();

        $reader->delete();

        return redirect()->route('readers.index')->with('success', 'Lector eliminado exitosamente.');
    }

    public function showReadNews(Reader $reader)
    {
        return view('readers.read_news', compact('reader'));
    }
}
