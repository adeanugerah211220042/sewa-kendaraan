<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Kwitansi;
use App\Models\Penyewa;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        $kwitansis = Kwitansi::all();
        $penyewas = Penyewa::all();
        $kendaraans = Kendaraan::all();
        return view('invoices.create', compact('kwitansis', 'penyewas', 'kendaraans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kwitansi' => 'required',
            'id_penyewa' => 'required',
            'no_pol' => 'required',
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil ditambahkan.');
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        $kwitansis = Kwitansi::all();
        $penyewas = Penyewa::all();
        $kendaraans = Kendaraan::all();
        return view('invoices.edit', compact('invoice', 'kwitansis', 'penyewas', 'kendaraans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kwitansi' => 'required',
            'id_penyewa' => 'required',
            'no_pol' => 'required',
        ]);

        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil dihapus.');
    }
}
