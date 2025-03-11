<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Kelas;
use App\Models\Pricing;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kelas = Kelas::all();
        $price = Pricing::all();

        if ($user->hasRole('siswa')) {
            return view('siswa-dashboard.index', compact('user', 'kelas', 'price'));
        }
        else {
            return view('dashboard', compact('kelas'));
        }
    }

    public function settings()
    {
        $user = Auth::user();
        $kelas = Kelas::all();

        if($user->hasRole('siswa')) {
            return view('siswa-dashboard.setting.index', compact('user', 'kelas'));
        }
    }

    public function settingSiswaUpdate(UpdateSiswaRequest $request, User $user)
    {
        if($user->hasRole('siswa')) {
            DB::transaction(function () use ($request, $user) {
                $validate = $request->validated();

                if($request->hasFile('photo')) {
                    $photo = $request->file('photo')->store('photo', 'public');
                    $validate['photo'] = $photo;
                }

                $user->update($validate);

                $validate['nama'] = $validate['name'];
                $validate['user_id'] = $user->id;

                $existingSiswa = Siswa::firstWhere('user_id', $user->id);

                if($existingSiswa){
                    if(!is_null($existingSiswa->kelas_id)){
                        unset($validate['kelas_id']);
                    }
                } else {
                    Siswa::create($validate);
                }
            });
        }

        return redirect()->route('siswa-dashboard.settings')
            ->with('success', 'Profil berhasil diperbarui');
    }

    public function priceSiswaDashboard()
    {
        $kelas = Kelas::all();
        $price = Pricing::all();
        $user = Auth::user();

        return view('siswa-dashboard.price.index', compact('kelas', 'price', 'user'));
    }
}
