<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all();
        return view('penyewa.index', compact('penyewas'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        $penyewa = Penyewa::create($request->all());
        return redirect()->route('penyewa.index');
    }

    public function show(Penyewa $penyewa)
    {
        return view('penyewa.show', compact('penyewa'));
    }

    public function edit(Penyewa $penyewa)
    {
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, Penyewa $penyewa)
    {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        $penyewa->update($request->all());
        return redirect()->route('penyewa.index');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();
        return redirect()->route('penyewa.index');
    }
}
