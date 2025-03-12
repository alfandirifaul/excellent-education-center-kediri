@extends('layouts.siswa-dashboard')

@section('content')
    <!-- ============================ Main Content Start ============================ -->
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <x-dashboard.breadcrumbs
            :breadcrumbs="[
                [
                    'title' => 'Berlangganan',
                    'url' => route('siswa-dashboard.price')
                ]
            ]"
            homeTitle="Dashboard"
        />
        <!-- Breadcrumb End -->

        <x-dashboard.pricing-card
            :user="$user"
            :kelas="$kelas"
            :price="$price"
            :title="'Berlangganan Kelas'"
            :description="'Pilihan paket berlangganan yang disediakan oleh Excellent Education Center'"
        />

    </div>
    <!-- ============================ Main Content End ============================ -->

    <!-- ============================ Dashboard footer Start ============================ -->
    <x-dashboard.footer />
    <!-- ============================ Dashboard footer End ============================ -->
@endsection
