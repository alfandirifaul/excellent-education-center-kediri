@extends('layouts.siswa-dashboard')

@section('content')
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Setting</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <div class="card overflow-hidden">
            <div class="card-body p-0">
                <div class="cover-img position-relative">
                    {{-- <label for="coverImageUpload"
                        class="btn border-gray-200 text-gray-200 fw-normal hover-bg-gray-400 rounded-pill py-4 px-14 position-absolute inset-block-start-0 inset-inline-end-0 mt-24 me-24">Edit
                        Cover</label> --}}
                    <div class="avatar-upload bg-blue-500/80">
                        {{-- <input type='file' id="coverImageUpload" accept=".png, .jpg, .jpeg"> --}}
                        <div class="avatar-preview">
                            <div id="coverImagePreview"
                                style="background-image: url({{ asset('img/dashboard/bg/grettings-pattern.png') }});">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="setting-profile px-24">
                    <div class="flex-between">
                        <div class="d-flex align-items-end flex-wrap mb-32 gap-24">
                            <img src="{{ $user->getImgUrl() }}" alt=""
                                class="w-120 h-120 rounded-circle border border-white">
                            <div>
                                <h1 class="text-2xl font-bold mb-8">{{ $user->name }}</h1>
                                <div class="setting-profile__infos flex-align flex-wrap gap-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-gray-600 d-flex text-lg"><i class="ph ph-swatches"></i></span>
                                        <span
                                            class="text-gray-600 d-flex text-15">{{ $user->siswa->kelas->nama ?? 'Pilih jenjang kelas' }}</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-gray-600 d-flex text-lg"><i class="ph ph-map-pin"></i></span>
                                        <span class="text-gray-600 d-flex text-15">Kediri</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-gray-600 d-flex text-lg"><i
                                                class="ph ph-calendar-dots"></i></span>
                                        <span
                                            class="text-gray-600 d-flex text-15">{{ $user->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav common-tab style-two nav-pills mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details"
                                aria-selected="true">Detail Saya</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-password" type="button" role="tab"
                                aria-controls="pills-password" aria-selected="false">Password</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-plan-tab" data-bs-toggle="pill" data-bs-target="#pills-plan"
                                type="button" role="tab" aria-controls="pills-plan" aria-selected="false">Plan</button>
                        </li> --}}
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-billing-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-billing" type="button" role="tab" aria-controls="pills-billing"
                                aria-selected="false">Billing</button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- DETAIL SAYA FORM --}}
        <div class="tab-content" id="pills-tabContent">
            <!-- My Details Tab start -->
            <div class="tab-pane fade show active" id="pills-details" role="tabpanel"
                aria-labelledby="pills-details-tab" tabindex="0">
                <div class="card mt-24">
                    <div class="card-header border-bottom">
                        <h4 class="mb-4">Detail Saya</h4>
                        <p class="text-gray-600 text-15">Lengkapi informasi anda yang masih belum terisi.</p>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="py-3 p-12 w-full rounded-3xl bg-red-500 text-white mb-10">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @elseif (session('success'))
                            <div class="py-3 p-12 w-full rounded-3xl bg-green-500 text-white mb-10">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('siswa-dashboard.settings.update', $user) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row gy-4">
                                <div class="col-sm-6 col-xs-6">
                                    <label for="name" class="form-label mb-8 h6">Nama Lengkap</label>
                                    <input type="text" class="form-control py-11" id="name" name="name"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="kelas_id" class="form-label mb-8 h6">Jenjang Kelas</label>
                                    <select class="form-control py-11" id="kelas_id" name="kelas_id"
                                        @if (isset($user->siswa) && $user->siswa->kelas_id) disabled @endif>
                                        <option value="" disabled
                                            {{ empty($user->siswa?->kelas_id) ? 'selected' : '' }}>
                                            Pilih Jenjang Kelas Anda
                                        </option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}"
                                                {{ isset($user->siswa) && $user->siswa->kelas_id == $k->id ? 'selected' : '' }}>
                                                {{ $k->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="email" class="form-label mb-8 h6">Email</label>
                                    <input type="email" class="form-control py-11" id="email"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="phone" class="form-label mb-8 h6">Nomor Handphone</label>
                                    <input type="number" class="form-control py-11" id="phone" name="phone"
                                        placeholder="Masukkan nomor handphone" value="{{ $user->phone }}">
                                </div>
                                <div class="col-12">
                                    <label for="imageUpload" class="form-label mb-8 h6">Foto</label>
                                    <div class="flex-align gap-22">
                                        <div class="avatar-upload flex-shrink-0">
                                            {{-- <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"> --}}
                                            <div class="avatar-preview">
                                                <div id="profileImagePreview"
                                                    style="background-image: url({{ $user->getImgUrl() }});">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="avatar-upload-box text-center position-relative flex-grow-1 py-24 px-4 rounded-16 border border-main-300 border-dashed bg-main-50 hover-bg-main-100 hover-border-main-400 transition-2 cursor-pointer">
                                            <label for="imageUpload"
                                                class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 rounded-16 cursor-pointer z-1"></label>
                                            <span class="text-32 icon text-main-600 d-inline-flex"><i
                                                    class="ph ph-upload"></i></span>
                                            <span class="text-13 d-block text-gray-400 text my-8">
                                                Klik atau tarik dan seret file kesini
                                            </span>
                                            <span class="text-13 d-block text-main-600">SVG, PNG, JPEG OR GIF (max
                                                1080px1200px)</span>

                                            {{-- File chosen notification (initially hidden) --}}
                                            <div id="fileChosen"
                                                class="text-success-600 text-13 my-8 bg-success-100 py-2 px-10 rounded-pill mt-3"
                                                style="display: none;"></div>

                                            <input type="file" name="photo" id="imageUpload"
                                                accept=".png, .jpg, .jpeg" hidden>
                                        </div>

                                        <script>
                                            document.getElementById('imageUpload').addEventListener('change', function(e) {
                                                const fileChosenElement = document.getElementById('fileChosen');
                                                if (e.target.files[0]) {
                                                    fileChosenElement.textContent = 'File dipilih: ' + e.target.files[0].name;
                                                    fileChosenElement.style.display = 'inline-block';
                                                } else {
                                                    fileChosenElement.style.display = 'none';
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="flex-align justify-content-end gap-8">
                                        <button type="reset"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Batalkan</button>
                                        <button type="submit" class="btn btn-main rounded-pill py-9">Simpan
                                            Perubahan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- My Details Tab End -->

            <!-- Password Tab Start -->
            <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab"
                tabindex="0">
                <div class="card mt-24">
                    <div class="card-header border-bottom">
                        <h4 class="mb-4">Password Settings</h4>
                        <p class="text-gray-600 text-15">Please fill full details about yourself</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <label for="current-password" class="form-label mb-8 h6">Current
                                                Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-11" id="current-password"
                                                    placeholder="Enter Current Password">
                                                <span
                                                    class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                                    id="#current-password"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="new-password" class="form-label mb-8 h6">New Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-11" id="new-password"
                                                    placeholder="Enter New Password">
                                                <span
                                                    class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                                    id="#new-password"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="confirm-password" class="form-label mb-8 h6">Confirm
                                                Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-11" id="confirm-password"
                                                    placeholder="Enter Confirm Password">
                                                <span
                                                    class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                                    id="#confirm-password"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label mb-8 h6">Password Requirements:</label>
                                            <ul class="list-inside">
                                                <li class="text-gray-600 mb-4">At least one lowercase character</li>
                                                <li class="text-gray-600 mb-4">Minimum 8 characters long - the more,
                                                    the better</li>
                                                <li class="text-gray-300 mb-4">At least one number, symbol, or
                                                    whitespace character</li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label mb-8 h6">Two-Step Verification</label>
                                            <ul>
                                                <li class="text-gray-600 mb-4 fw-semibold">Two-factor authentication is
                                                    not enabled yet.</li>
                                                <li class="text-gray-600 mb-4 fw-medium">Two-factor authentication adds
                                                    a layer of security to your account by requiring more than just a
                                                    password to log in. Learn more.</li>
                                            </ul>
                                            <button type="submit" class="btn btn-main rounded-pill py-9 mt-24">Enable
                                                two-factor authentication</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <div class="flex-align justify-content-end gap-8">
                                    <button type="reset"
                                        class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Cancel</button>
                                    <button type="submit" class="btn btn-main rounded-pill py-9">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Password Tab End -->

            <!-- Plan Tab Start -->
            {{-- <div class="tab-pane fade" id="pills-plan" role="tabpanel" aria-labelledby="pills-plan-tab" tabindex="0">
                <div class="card mt-24">
                    <div class="card-header border-bottom">
                        <h4 class="mb-4">Pricing Breakdown</h4>
                        <p class="text-gray-600 text-15">Creating a detailed pricing plan for your course requries
                            considering various factors.</p>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-md-4 col-sm-6">
                                <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                                    <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-package"></i></span>
                                    <h3 class="mb-4">Basic Plan</h3>
                                    <span class="text-gray-600">Perfect plan for students</span>
                                    <h2
                                        class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                        $50 <span class="text-md text-gray-600">/year</span>
                                    </h2>
                                    <ul>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Intro video the course
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Interactive quizes
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Course curriculum
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Community supports
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Certificate of completion
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Sample lesson showcasing
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Access to course community
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="btn btn-outline-main w-100 rounded-pill py-16 border-main-300 text-17 fw-medium mt-32">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div
                                    class="plan-item rounded-16 border border-gray-100 transition-2 position-relative active">
                                    <span
                                        class="plan-badge py-4 px-16 bg-main-600 text-white position-absolute inset-inline-end-0 inset-block-start-0 mt-8 text-15">Recommended</span>
                                    <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-planet"></i></span>
                                    <h3 class="mb-4">Standard Plan</h3>
                                    <span class="text-gray-600">For users who want to do more</span>
                                    <h2
                                        class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                        $129 <span class="text-md text-gray-600">/year</span>
                                    </h2>

                                    <ul>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Intro video the course
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Interactive quizes
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Course curriculum
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Community supports
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Certificate of completion
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Sample lesson showcasing
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Access to course community
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="btn btn-main w-100 rounded-pill py-16 border-main-600 text-17 fw-medium mt-32">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                                    <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-trophy"></i></span>
                                    <h3 class="mb-4">Premium Plan</h3>
                                    <span class="text-gray-600">Your entire friends in one place</span>
                                    <h2
                                        class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                        $280 <span class="text-md text-gray-600">/year</span>
                                    </h2>

                                    <ul>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Intro video the course
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Interactive quizes
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Course curriculum
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Community supports
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Certificate of completion
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Sample lesson showcasing
                                        </li>
                                        <li class="flex-align gap-8 text-gray-600 mb-lg-4">
                                            <span class="text-24 d-flex text-main-600"><i
                                                    class="ph ph-check-circle"></i></span>
                                            Access to course community
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="btn btn-outline-main w-100 rounded-pill py-16 border-main-300 text-17 fw-medium mt-32">Get
                                        Started</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label mb-8 h6 mt-32">Terms & Policy</label>
                                <ul class="list-inside">
                                    <li class="text-gray-600 mb-4">1. Set up multiple pricing levels with different
                                        features and functionalities to maximize revenue</li>
                                    <li class="text-gray-600 mb-4">2. Continuously test different price points and
                                        discounts to find the sweet spot that resonates with your target audience</li>
                                    <li class="text-gray-600 mb-4">3. Price your course based on the perceived value it
                                        provides to students, considering factors</li>
                                </ul>
                                <button type="button"
                                    class="btn btn-main text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2 mt-24"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ph ph-plus me-4"></i>
                                    Add New Plan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Plan Tab End -->

            <!-- Billing Tab Start -->
            <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-billing-tab"
                tabindex="0">
                <!-- Payment Method Start -->
                <div class="card mt-24">
                    <div class="card-header border-bottom">
                        <h4 class="mb-4">Payment Method</h4>
                        <p class="text-gray-600 text-15">Update your billing details and address</p>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="card border border-gray-100">
                                    <div class="card-header border-bottom border-gray-100">
                                        <h6 class="mb-0">Contact Email</h6>
                                    </div>
                                    <div class="card-body">
                                        <div
                                            class="payment-method payment-method-one form-check form-radio d-flex align-items-center justify-content-between mb-16 rounded-16 bg-main-50 p-20 cursor-pointer position-relative transition-2">
                                            <div>
                                                <h6 class="title mb-14">Send to my email account</h6>
                                                <span class="d-block">exampleinfo@mail.com</span>
                                            </div>
                                            <label
                                                class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 cursor-pointer"
                                                for="emailOne"></label>
                                            <input class="form-check-input payment-method-one" type="radio"
                                                name="emailCheck" id="emailOne">
                                        </div>
                                        <div
                                            class="payment-method payment-method-one form-check form-radio d-block rounded-16 bg-main-50 p-20 cursor-pointer position-relative transition-2 mt-24">
                                            <div class="flex-between  mb-14 gap-4">
                                                <h6 class="title mb-0">Send to an alternative email</h6>
                                                <input class="form-check-input payment-method-one" type="radio"
                                                    name="emailCheck" id="emailTwo">
                                            </div>
                                            <label
                                                class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 cursor-pointer"
                                                for="emailTwo"></label>
                                            <span
                                                class="border-text d-block bg-white border border-main-200 px-20 py-8 rounded-8">exampleinfo@mail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border border-gray-100">
                                    <div class="card-header border-bottom border-gray-100 flex-between gap-8">
                                        <h6 class="mb-0">Card Details</h6>
                                        <a href="#" class="btn btn-outline-main rounded-pill py-6">Add New
                                            Card</a>
                                    </div>
                                    <div class="card-body">
                                        <div
                                            class="payment-method payment-method-two form-check form-radio d-flex align-items-center justify-content-between mb-16 rounded-16 bg-main-50 p-20 cursor-pointer position-relative transition-2">
                                            <div class="flex-align align-items-start gap-16">
                                                <div>
                                                    <img src="assets/images/thumbs/payment-method1.png" alt=""
                                                        class="w-54 h-40 rounded-8">
                                                </div>
                                                <div>
                                                    <h6 class="title mb-0">Visa **** **** 5890</h6>
                                                    <span class="d-block">Up to 60 User and 100GB team data</span>
                                                    <div
                                                        class="text-13 flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                        <span>Set as default</span>
                                                        <a href="#" class="fw-bold">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <label
                                                class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 cursor-pointer"
                                                for="visaCard"></label>
                                            <input class="form-check-input payment-method-two" type="radio"
                                                name="cardDetails" id="visaCard">
                                        </div>
                                        <div
                                            class="payment-method payment-method-two form-check form-radio d-flex align-items-center justify-content-between rounded-16 bg-main-50 p-20 cursor-pointer position-relative transition-2">
                                            <div class="flex-align align-items-start gap-16">
                                                <div>
                                                    <img src="assets/images/thumbs/payment-method2.png" alt=""
                                                        class="w-54 h-40 rounded-8">
                                                </div>
                                                <div>
                                                    <h6 class="title mb-0">Mastercard **** **** 1895</h6>
                                                    <span class="d-block">Up to 60 User and 100GB team data</span>
                                                </div>
                                            </div>
                                            <label
                                                class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 cursor-pointer"
                                                for="masterCard"></label>
                                            <input class="form-check-input payment-method-two" type="radio"
                                                name="cardDetails" id="masterCard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Payment Method End -->

                <!-- Billing history Start -->
                <div class="card mt-24">
                    <div class="card-header border-bottom">
                        <div class="flex-between flex-wrap  gap-16">
                            <div>
                                <h4 class="mb-4">Billing History</h4>
                                <p class="text-gray-600 text-15">See the transaction you made</p>
                            </div>
                            <div class="flex-align flex-wrap justify-content-end gap-8">
                                <button type="button"
                                    class="toggle-search-btn btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Add
                                    Filter</button>
                                <button type="button" class="btn btn-main rounded-pill py-9">Download All</button>
                            </div>
                        </div>
                    </div>

                    <div class="card toggle-search-box border-bottom border-gray-100 rounded-0">
                        <div class="card-body">
                            <form action="#" class="search-input-form">
                                <div class="search-input">
                                    <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                        <option value="" selected disabled>Invoice Type</option>
                                        <option value="">Credit Invoice</option>
                                        <option value="">Debit Invoice</option>
                                        <option value="">Mixed Invoice</option>
                                        <option value="">Commercial Invoice</option>
                                    </select>
                                </div>
                                <div class="search-input">
                                    <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                        <option value="" selected disabled>amount</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="search-input">
                                    <input type="date" class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                </div>
                                <div class="search-input">
                                    <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                        <option value="" selected disabled>plan</option>
                                        <option value="">Basic Plan</option>
                                        <option value="">Standard Plan</option>
                                        <option value="">Premium Plan </option>
                                    </select>
                                </div>
                                <div class="search-input">
                                    <button type="submit" class="btn btn-main rounded-pill py-9 w-100">Apply
                                        Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body p-0 overflow-x-auto">
                        <table id="studentTable" class="table table-lg table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="fixed-width w-40 h-40 ps-20">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox"
                                                id="selectAll">
                                        </div>
                                    </th>
                                    <th class="h6 text-gray-600">
                                        <span class="position-relative">
                                            Invoices
                                        </span>
                                    </th>
                                    <th class="h6 text-gray-600 text-center">Amount</th>
                                    <th class="h6 text-gray-600 text-center">Dates</th>
                                    <th class="h6 text-gray-600 text-center">Status</th>
                                    <th class="h6 text-gray-600 text-center">Plan</th>
                                    <th class="h6 text-gray-600 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fixed-width w-40 h-40">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-10">
                                            <div class="w-32 h-32 bg-gray-50 flex-center rounded-circle p-2">
                                                <img src="assets/images/thumbs/invoice-logo1.png" alt=""
                                                    class="">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Design Accesibility</h6>
                                                <span class="text-13 fw-medium text-gray-200">Edmate - #012500</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">$180</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">06/22/2024</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-success-600 bg-success-100 py-2 px-10 rounded-pill">Paid</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">Basic</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-12">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fixed-width w-40 h-40">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-10">
                                            <div class="w-32 h-32 bg-gray-50 flex-center rounded-circle p-2">
                                                <img src="assets/images/thumbs/invoice-logo2.png" alt=""
                                                    class="">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Design System</h6>
                                                <span class="text-13 fw-medium text-gray-200">Edmate - #012500</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">$250</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">06/22/2024</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-info-600 bg-info-100 py-2 px-10 rounded-pill">Unpaid</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">Professional</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-12">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fixed-width w-40 h-40">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-10">
                                            <div class="w-32 h-32 bg-gray-50 flex-center rounded-circle p-2">
                                                <img src="assets/images/thumbs/invoice-logo1.png" alt=""
                                                    class="">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Frondend Develop</h6>
                                                <span class="text-13 fw-medium text-gray-200">Edmate - #012500</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">$128</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">06/22/2024</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-success-600 bg-success-100 py-2 px-10 rounded-pill">Paid</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">Basic</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-12">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fixed-width w-40 h-40">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-10">
                                            <div class="w-32 h-32 bg-gray-50 flex-center rounded-circle p-2">
                                                <img src="assets/images/thumbs/invoice-logo1.png" alt=""
                                                    class="">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Design Usability</h6>
                                                <span class="text-13 fw-medium text-gray-200">Edmate - #012500</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">$132</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">06/22/2024</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-info-600 bg-info-100 py-2 px-10 rounded-pill">Unpaid</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">Basic</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-12">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fixed-width w-40 h-40">
                                        <div class="form-check">
                                            <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-10">
                                            <div class="w-32 h-32 bg-gray-50 flex-center rounded-circle p-2">
                                                <img src="assets/images/thumbs/invoice-logo4.png" alt=""
                                                    class="">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Digital Marketing</h6>
                                                <span class="text-13 fw-medium text-gray-200">Edmate - #012500</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">$186</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">06/22/2024</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-success-600 bg-success-100 py-2 px-10 rounded-pill">Paid</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600">Advance</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-12">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-top border-gray-100">
                        <div class="flex-align justify-content-end gap-8">
                            <button type="reset"
                                class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Cancel</button>
                            <button type="submit" class="btn btn-main rounded-pill py-9">Save Changes</button>
                        </div>
                    </div>
                </div>
                <!-- Billing history End -->
            </div>
            <!-- Billing Tab End -->
        </div>

    </div>
    <x-dashboard.footer />
@endsection
