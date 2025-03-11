@props([
    'user',
    'kelas',
    'price'
])

<form action="#" method="POST">
    @csrf
    <div class="card mt-24 overflow-hidden" id="kelas">
        <div class="card mt-24">
            <div class="card-header border-bottom flex flex-col items-center">
                <h4 class="mb-4 font-bold text-2xl">Selamat Datang di Excellent Education Center</h4>
                <p class="text-gray-600 text-15">
                    Silahkan Pilih Jenjang Pendidikan Anda untuk Menyesuaikan Materi Pembelajaran
                </p>
            </div>
            <div class="card-body">
                <div class="flex justify-center items-center">
                    <h3 class="text-indigo-950 text-xl font-bold">
                        Pilih Jenjang Kelas
                    </h3>
                </div>
                <div class="flex flex-row items-center gap-x-3 justify-center mt-32 space-x-12">
                    @foreach ($kelas as $k)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset($k->logo) }}"
                                 alt="Halo"
                                 class="rounded-full object-cover w-[250px]
                                        h-[250px] md:w-[100px] md:h-[100px] sm:w-[70px] sm:h-[70px]"
                            >
                            <h1>{{ $k->nama }}</h1>
                            <input type="radio" name="selected_class" value="{{ $k->id }}">
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-32">
                    <button type="submit" class="btn btn-main w-100 rounded-pill py-16 border-main-600 text-17 fw-medium mt-32">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- HARGA BERLANGGANAN SETIAP JENJANG KELAS --}}
<x-dashboard.pricing-card :kelas="$kelas" :price="$price"/>
