<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Jenjang Kelas') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @if (session('success'))
                    <div class="py-3 w-full rounded-3xl bg-green-500 text-white">
                        {{ session('success') }}
                    </div>
                @endif


                @forelse ($kelas as $k)
                    <div class="item-card flex flex-col md:flex-row justify-between items-center gap-y-3 md:gap-y-0">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src="{{ asset($k->logo) }}" alt="foto"
                                class="rounded-full object-cover w-[70px] h-[70px] md:w-[100px] md:h-[100px] sm:w-[70px] sm:h-[70px]">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $k->nama }}</h3>
                            </div>
                        </div>
                        <div class="flex flex-col items-center md:items-start">
                            <p class="text-slate-500 text-sm">Jumlah siswa</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $k->siswas->count() }}</h3>
                        </div>
                        <div class="flex flex-row items-center gap-x-3">
                            <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                View
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                        <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">Belum ada data kelas</h3>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
