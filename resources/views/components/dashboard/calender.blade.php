<div class="card">
    <div class="card-body">
        <div class="calendar">
            <div class="calendar__header">
                <button type="button" class="calendar__arrow left"><i
                        class="ph ph-caret-left"></i></button>
                <p class="display h6 mb-0">""</p>
                <button type="button" class="calendar__arrow right"><i
                        class="ph ph-caret-right"></i></button>
            </div>

            <div class="calendar__week week">
                <div class="calendar__week-text">Su</div>
                <div class="calendar__week-text">Mo</div>
                <div class="calendar__week-text">Tu</div>
                <div class="calendar__week-text">We</div>
                <div class="calendar__week-text">Th</div>
                <div class="calendar__week-text">Fr</div>
                <div class="calendar__week-text">Sa</div>
            </div>
            <div class="days"></div>
        </div>

        <!-- Events start -->
        {{-- <div class="">
            <div class="mt-24 mb-24">
                <div class="flex-align mb-8 gap-16">
                    <span class="text-sm text-gray-300 flex-shrink-0">Today</span>
                    <span class="border border-gray-50 border-dashed flex-grow-1"></span>
                </div>
                <div class="event-item bg-gray-50 rounded-8 p-16">
                    <div class=" flex-between gap-4">
                        <div class="flex-align gap-8">
                            <span class="icon d-flex w-44 h-44 bg-white rounded-8 flex-center text-2xl"><i
                                    class="ph ph-squares-four"></i></span>
                            <div class="">
                                <h6 class="mb-2">Element of design test</h6>
                                <span class="">10:00 - 11:00 AM</span>
                            </div>
                        </div>
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
                                                    <button type="button"
                                                        class="delete-btn py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 w-100 rounded-8 fw-normal text-xs d-block text-start hover-text-gray-600">
                                                        <span class="text d-flex align-items-center gap-8">
                                                            <i class="ph ph-trash"></i>
                                                            Remove</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="mt-24">
                <div class="flex-align mb-8 gap-16">
                    <span class="text-sm text-gray-300 flex-shrink-0">Sat, Aug 24</span>
                    <span class="border border-gray-50 border-dashed flex-grow-1"></span>
                </div>
                <div class="event-item bg-gray-50 rounded-8 p-16">
                    <div class=" flex-between gap-4">
                        <div class="flex-align gap-8">
                            <span class="icon d-flex w-44 h-44 bg-white rounded-8 flex-center text-2xl"><i
                                    class="ph ph-magic-wand"></i></span>
                            <div class="">
                                <h6 class="mb-2">Design Principles test</h6>
                                <span class="">10:00 - 11:00 AM</span>
                            </div>
                        </div>
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
                                                    <button type="button"
                                                        class="delete-btn py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 w-100 rounded-8 fw-normal text-xs d-block text-start hover-text-gray-600">
                                                        <span class="text d-flex align-items-center gap-8">
                                                            <i class="ph ph-trash"></i>
                                                            Remove</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-item bg-gray-50 rounded-8 p-16 mt-16">
                    <div class=" flex-between gap-4">
                        <div class="flex-align gap-8">
                            <span class="icon d-flex w-44 h-44 bg-white rounded-8 flex-center text-2xl"><i
                                    class="ph ph-briefcase"></i></span>
                            <div class="">
                                <h6 class="mb-2">Prepare Job Interview</h6>
                                <span class="">09:00 - 10:00 AM</span>
                            </div>
                        </div>
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
                                                    <button type="button"
                                                        class="delete-btn py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 w-100 rounded-8 fw-normal text-xs d-block text-start hover-text-gray-600">
                                                        <span class="text d-flex align-items-center gap-8">
                                                            <i class="ph ph-trash"></i>
                                                            Remove</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="event.html" class="btn btn-main w-100 mt-24">All Events</a>
        </div> --}}
        <!-- Events End -->

    </div>
</div>
