<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghuni;

class PenghuniController extends Controller
{
    public function index()
    {
        $data = Penghuni::orderBy('id', 'desc')->get();
        return view('penghuni.index', compact('data'));
    }

    public function create()
    {
        return view('penghuni.create');
    }

    public function store(Request $request)
    {
        Penghuni::create($request->all());
        return redirect()->route('penghuni.index');
    }

    public function edit($id)
    {
        $penghuni = Penghuni::findOrFail($id);
        return view('penghuni.edit', compact('penghuni'));
    }

    public function update(Request $request, $id)
    {
        $penghuni = Penghuni::findOrFail($id);
        $penghuni->update($request->all());
        return redirect()->route('penghuni.index');
    }

    public function destroy($id)
    {
        Penghuni::destroy($id);
        return redirect()->route('penghuni.index');
    }
}