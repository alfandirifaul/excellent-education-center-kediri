<!-- Donut Chart Start -->
<div class="card mt-24">
    <div class="card-header border-bottom border-gray-100 flex-between gap-8 flex-wrap">
        <h5 class="mb-0">Most Activity</h5>
        <div class="dropdown flex-shrink-0">
            <button class="text-gray-400 text-xl d-flex rounded-4" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ph-fill ph-dots-three-outline"></i>
            </button>
            <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                    <div class="card-body p-12">
                        <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                            <ul>
                                <li class="mb-0">
                                    <a href="students.html"
                                        class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 w-100 rounded-8 fw-normal text-xs d-block text-start">
                                        <span class="text"> <i class="ph ph-user me-4"></i>
                                            View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="flex-center">
            <div id="activityDonutChart" class="w-auto d-inline-block"></div>
        </div>

        <div class="flex-between gap-8 flex-wrap mt-24">
            <div class="flex-align flex-column">
                <span class="w-12 h-12 bg-white border border-3 border-main-600 rounded-circle"></span>
                <span class="text-13 my-4 text-main-600">Mentoring</span>
                <h6 class="mb-0">65.2%</h6>
            </div>
            <div class="flex-align flex-column">
                <span class="w-12 h-12 bg-white border border-3 border-main-two-600 rounded-circle"></span>
                <span class="text-13 my-4 text-main-two-600">Organization</span>
                <h6 class="mb-0">25.0%</h6>
            </div>
            <div class="flex-align flex-column">
                <span class="w-12 h-12 bg-white border border-3 border-warning-600 rounded-circle"></span>
                <span class="text-13 my-4 text-warning-600">Planning</span>
                <h6 class="mb-0">9.8%</h6>
            </div>
        </div>
    </div>
</div>
<!-- Donut Chart End -->
