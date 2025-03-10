<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRequestCreate;
use App\Models\Kelas;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::with('siswas')->get();
        $price = Pricing::all();

        return view('kelas.index', compact('kelas', 'price'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceRequestCreate $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        DB::transaction(function () use ($request, $kelas){
            $validate = $request->validated();

            $validate['kelas_id'] = $kelas->id;
            $validate['price_monthly'] = str_replace('.', '', $validate['price_monthly']);
            $validate['price_yearly'] = str_replace('.', '', $validate['price_yearly']);

            $existingPrice = Pricing::where('kelas_id', $kelas->id)->first();
            if ($existingPrice) {
                $existingPrice->update($validate);
                return redirect()->route('admin.kelas.index')
                    ->with('success', 'Price berhasil diupdate');
            }

            Pricing::create($validate);
        });

        return redirect()->route('admin.kelas.index')
            ->with('success', 'Price berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
