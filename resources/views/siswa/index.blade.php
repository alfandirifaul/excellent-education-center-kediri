<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Siswa') }}
            </h2>
            {{-- <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a> --}}
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($siswa as $std)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                    <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                        <div class="flex flex-row items-center gap-x-3 flex-shrink-0 w-[200px]">
                            <img src="{{ $std->photo ? asset('storage/' . $std->photo) : Avatar::create($std->name)->toBase64() }}"
                                alt="" class="rounded-full object-cover w-[90px] h-[90px]">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $std->name }}</h3>
                                <p class="text-slate-500 text-sm">{{ $std->siswa && $std->siswa->kelas_id ? $std->siswa->kelas->nama : 'Belum punya kelas' }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col flex-shrink-0 w-[200px]">
                            <p class="text-slate-500 text-sm">Langganan Berakhir</p>
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{ $std->subscription_transaction->expired_at ?? 'Tidak Aktif' }}</h3>
                        </div>
                        <div class="flex flex-row items-center gap-x-3 flex-shrink-0 w-[200px]">
                            <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Manage
                            </a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                        <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">Belum ada data siswa</h3>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </x-app-layout>
