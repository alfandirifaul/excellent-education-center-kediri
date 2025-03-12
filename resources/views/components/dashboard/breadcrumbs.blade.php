@props([
    'breadcrumbs' => [],
    'homeTitle' => 'Home',
    'homeUrl' => route('siswa-dashboard.index'),
    'showHome' => true,
    'containerClass' => 'breadcrumb mb-24'
])

<div class="{{ $containerClass }}">
    <ul class="flex-align gap-4">
        @if($showHome)
            <li><a href="{{ $homeUrl }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">{{ $homeTitle }}</a></li>
            @if(count($breadcrumbs) > 0)
                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
            @endif
        @endif

        @foreach($breadcrumbs as $index => $breadcrumb)
            <li>
                @if(isset($breadcrumb['url']))
                    <a href="{{ $breadcrumb['url'] }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">{{ $breadcrumb['title'] }}</a>
                @else
                    <span class="text-main-600 fw-normal text-15">{{ $breadcrumb['title'] }}</span>
                @endif
            </li>
            @if($index < count($breadcrumbs) - 1)
                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
            @endif
        @endforeach
    </ul>
</div>
