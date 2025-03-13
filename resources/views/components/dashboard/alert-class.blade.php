@props(['user', 'kelas', 'price'])

<form action="{{ route('siswa-dashboard.set-kelas', $user) }}" method="POST" id="classSelectionForm">
    @csrf
    {{-- Make sure this is the exact field name expected by your controller --}}
    <input type="hidden" name="kelas_id" id="kelas_id_hidden">

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
                <div class="flex flex-row items-center justify-center mt-8 space-x-4 md:space-x-6 lg:space-x-12">
                    @foreach ($kelas as $k)
                        <label class="class-option flex flex-col items-center p-2 rounded-xl cursor-pointer transition-all duration-300 hover:bg-blue-50 relative group">
                            <div class="relative rounded-full overflow-hidden">
                                <img src="{{ asset($k->logo) }}" alt="{{ $k->nama }}"
                                    class="rounded-full mt-24 object-cover w-[75px] h-[75px] md:w-[100px] md:h-[100px] lg:w-[120px] lg:h-[120px] transition-all duration-300 group-hover:scale-105">
                                <div class="absolute top-1 right-1 w-6 h-4 bg-white rounded-full border-2 border-gray-200 flex items-center justify-center transform scale-0 transition-transform duration-300 selection-indicator"></div>
                            </div>
                            <h1 class="mt-3 mb-2 font-medium text-center">{{ $k->nama }}</h1>
                            <input type="radio" name="selected_class" value="{{ $k->id }}" class="hidden class-radio" data-kelas-id="{{ $k->id }}">
                        </label>
                    @endforeach
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="px-6 py-12 w-full rounded-xl bg-red-500 text-white text-center font-medium mt-12">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <div class="justify-center mt-8">
                    <button type="submit" id="submitButton"
                        class="px-8 py-8 w-full mt-32 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-full transition-colors duration-300 shadow-md hover:shadow-lg transform">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- HARGA BERLANGGANAN SETIAP JENJANG KELAS --}}
<x-dashboard.pricing-card :kelas="$kelas" :price="$price" />

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const classOptions = document.querySelectorAll('.class-option');
        const form = document.getElementById('classSelectionForm');
        const submitButton = document.getElementById('submitButton');
        const selectionIndicators = document.querySelectorAll('.selection-indicator');
        const hiddenKelasIdField = document.getElementById('kelas_id_hidden');

        // Function to check if any option is selected
        function isAnyOptionSelected() {
            return Array.from(document.querySelectorAll('.class-radio')).some(input => input.checked);
        }

        // Toggle selection and visual state for options
        classOptions.forEach((option, index) => {
            option.addEventListener('click', function() {
                // Remove selected states from all options
                classOptions.forEach((opt, i) => {
                    opt.classList.remove('ring-2', 'ring-blue-500', 'bg-blue-50', 'scale-105');
                    opt.classList.add('hover:bg-blue-50');
                    selectionIndicators[i].classList.remove('scale-100', 'bg-blue-500', 'border-white');
                    selectionIndicators[i].classList.add('scale-0');
                });

                // Uncheck all radio buttons
                const radioButtons = document.querySelectorAll('.class-radio');
                radioButtons.forEach(input => {
                    input.checked = false;
                });

                // Apply selected state to this option
                this.classList.add('ring-2', 'ring-blue-500', 'bg-blue-50', 'scale-105');
                this.classList.remove('hover:bg-blue-50');
                selectionIndicators[index].classList.add('scale-100', 'bg-blue-500', 'border-white');
                selectionIndicators[index].classList.remove('scale-0');

                // Add checkmark to the indicator
                selectionIndicators[index].innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>`;

                // Select the radio button
                const radioButton = this.querySelector('.class-radio');
                radioButton.checked = true;

                // Set the value in the hidden field
                hiddenKelasIdField.value = radioButton.dataset.kelasId;
            });
        });

        // Form submission validation
        form.addEventListener('submit', function(e) {
            if (!isAnyOptionSelected()) {
                e.preventDefault();

                // Create or update error message
                let errorContainer = document.querySelector('.selection-error');
                if (!errorContainer) {
                    errorContainer = document.createElement('div');
                    errorContainer.className = 'selection-error px-6 py-4 w-full rounded-xl bg-red-500 text-white my-6 text-center font-medium mt-8 animate-bounce';
                    errorContainer.textContent = 'Silahkan pilih jenjang kelas terlebih dahulu';
                    submitButton.parentNode.insertBefore(errorContainer, submitButton);
                }

                // Scroll to error message
                errorContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Remove animation after a delay
                setTimeout(() => {
                    errorContainer.classList.remove('animate-bounce');
                }, 1000);
            } else {
                // Double check that hidden field is populated before submission
                const selectedRadio = document.querySelector('.class-radio:checked');
                if (selectedRadio && hiddenKelasIdField) {
                    hiddenKelasIdField.value = selectedRadio.dataset.kelasId;
                }
            }
        });
    });
</script>
