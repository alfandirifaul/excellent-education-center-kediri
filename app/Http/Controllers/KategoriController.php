<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();

        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        $validasi = $request->validated();

        DB::transaction(function () use ($validasi, $request) {
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail')->store('kategori', 'public');
                $validasi['thumbnail'] = $thumbnail;
            } else {
                $thumbnail = 'images/kategori/default.png';
            }

            $validasi['slug'] = Str::slug($validasi['nama']);

            Kategori::create($validasi);
        });

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        DB::transaction(function () use ($request, $kategori) {
            $validasi = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail')->store('kategori', 'public');
                $validasi['thumbnail'] = $thumbnail;
            }

            $validasi['slug'] = Str::slug($validasi['nama']);

            $kategori->update($validasi);
        });

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Mata pelajaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        DB::beginTransaction();

        try {
            $kategori->delete();
            DB::commit();

            return redirect()->route('admin.kategori.index')
                ->with('success', 'Mata pelajaran berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.kategori.index')
                ->with('error', 'Mata pelajaran gagal dihapus');
        }
    }
}
