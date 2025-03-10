<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Biaya Langganan Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.kelas.update', ['kela' => $kelas->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mt-4 rounded-full flex flex-col items-center justify-center gap-y-4">
                        <img src="{{ asset($kelas->logo) }}" alt="{{ $kelas->nama }}"
                            class="rounded-full object-cover w-[100px] h-[100px]">
                        <div class="text-center">
                            <h1 class="text-indigo-950 text-2xl font-bold">{{ $kelas->nama }}</h1>
                        </div>
                    </div>

                    <div class="relative mt-6">
                        <x-input-label for="price_monthly" :value="__('Harga Bulanan')" />
                        <div class="relative">
                            <span class="absolute left-0 w-10 h-full flex items-center justify-center text-gray-500 pointer-events-none font-medium">Rp</span>
                            <x-text-input id="price_monthly" class="pl-10 pr-10 block mt-1 w-full currency-input"
                                type="text" name="price_monthly"
                                value="{{ $kelas->price->price_monthly ?? '' }}"
                                required autofocus
                                autocomplete="price_monthly" />
                            {{-- <span class="absolute right-0 w-10 h-full flex items-center justify-center text-gray-500 pointer-events-none font-medium">,00</span> --}}
                        </div>
                        <input type="hidden" id="price_monthly_raw" name="price_monthly_raw">
                        <x-input-error :messages="$errors->get('price_monthly')" class="mt-" />
                    </div>

                    <div class="relativ mt-6">
                        <x-input-label for="price_yearly" :value="__('Harga Tahunan')" />
                        <div class="relative">
                            <span class="absolute left-0 w-10 h-full flex items-center justify-center text-gray-500 pointer-events-none font-medium">Rp</span>
                            <x-text-input id="price_yearly" class="pl-10 pr-10 block mt-1 w-full currency-input"
                                type="text" name="price_yearly"
                                value="{{ $kelas->price->price_yearly ?? '' }}"
                                required autocomplete="price_yearly" />
                            {{-- <span class="absolute right-0 w-10 h-full flex items-center justify-center text-gray-500 pointer-events-none font-medium">,00</span> --}}
                        </div>
                        <input type="hidden" id="price_yearly_raw" name="price_yearly_raw">
                        <x-input-error :messages="$errors->get('price_yearly')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/lib/rupiahFormat.js') }}"></script>
    <script>
        document.querySelectorAll('.price-display').forEach(function(element) {
            element.textContent = formatRupiah(element.textContent);
        });
    </script>
</x-app-layout>
