@extends('users.layouts.default')

@section('content')
    <!--end::Header Section-->
    <div class="mb-n10 mb-lg-n20 z-index-2">
        <div class="container mb-10">
            <div class="text-center mb-17">
                <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works"
                    data-kt-scroll-offset="{default: 100, lg: 150}">Danh sách sản phẩm</h3>
            </div>
            <div class="mb-5">
                <input type="text" class="form-control" placeholder="Search" id="search-product">
                <div id="result">

                </div>
            </div>
            <div class="row w-100 gy-10 mb-md-20">
                @foreach($products as $key => $value)
                    <a href="{{ route('users.detailProduct') }}?idProduct={{ $value->id }}" class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            @if(count($value->images) != 0)
                                <img src="{{ asset($value->images[0]->image_url ) }}" class="mh-125px mb-9" alt="" />
                            @endif
                            <div class="d-flex flex-center mb-5">
                                <div class="fs-5 fs-lg-3 fw-bold text-gray-900">{{  $value->name }}</div>
                            </div>
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                                {{ $value->description }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!--end::How It Works Section-->


    <!--begin::Statistics Section-->
    <div class="mt-10">
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <div class="pb-15 pt-18 landing-dark-bg">
            <div class="container">
                <div class="text-center mt-15 mb-18" id="achievements"
                    data-kt-scroll-offset="{default: 100, lg: 150}">
                    <h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
                    <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin
                    </div>
                </div>
                <div class="d-flex flex-center">
                    {{-- Chat realtime --}}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row border">
                                    <ul id="messages" class="list-unstyled overflow-auto" style="min-height: 45vh; background:white">

                                    </ul>
                                    <form class="border-top">
                                        <div class="row py-3">
                                            <div class="col-10">
                                                <input type="text" id="message" class="form-control">
                                            </div>
                                            <div class="col-2">
                                                <button id="send" type="submit" class="btn btn-primary w-100">Gửi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Chat realtime --}}
                </div>
            </div>
        </div>
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--end::Statistics Section-->


    <!--begin::Team Section-->
    <div class="py-10 py-lg-20">
        <div class="container">
            <div class="text-center mb-12">
                <h3 class="fs-2hx text-gray-900 mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our
                    Great Team</h3>
                <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete,
                    additional costs to
                    <br />integrate and test each extra feature creeps up and haunts most of us.
                </div>
            </div>
            <div class="tns tns-default" style="direction: ltr">
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                    data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                    data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next"
                    data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-1.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Paul Miles</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-2.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Melisa Marcus</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-5.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">David Nilson</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-20.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Anne Clarc</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-23.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Ricky Hunt</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-12.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Alice Wayde</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                            style="background-image:url({{ asset('assets/media/avatars/300-9.jpg') }})"></div>
                        <div class="mb-0">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Carles Puyol</a>
                            <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                    <i class="ki-duotone ki-left fs-2x"></i>
                </button>
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                    <i class="ki-duotone ki-right fs-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <!--end::Team Section-->

    <!--begin::Projects Section-->
    <div class="mb-lg-n15 position-relative z-index-2">
        <div class="container">
            <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                <div class="card-body p-lg-20">
                    <div class="text-center mb-5 mb-lg-10">
                        <h3 class="fs-2hx text-gray-900 mb-5" id="portfolio"
                            data-kt-scroll-offset="{default: 100, lg: 250}">Our Projects</h3>
                    </div>
                    <div class="d-flex flex-center mb-5 mb-lg-15">
                        <ul class="nav border-transparent flex-center fs-5 fw-bold">
                            <li class="nav-item">
                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#"
                                    data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                    data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web
                                    Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                    data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile
                                    Apps</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                    data-bs-toggle="tab"
                                    data-bs-target="#kt_landing_projects_development">Development</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                            <div class="row g-10">
                                <div class="col-lg-6">
                                    <a class="d-block card-rounded overlay h-lg-100"
                                        data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-23.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                            style="background-image:url(asset('assets/media/stock/600x600/img-23.jpg'))">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-10 mb-10">
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-22.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-22.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-21.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-21.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x400/img-20.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-20.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_landing_projects_web_design">
                            <div class="row g-10">
                                <div class="col-lg-6">
                                    <a class="d-block card-rounded overlay h-lg-100"
                                        data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-11.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-11.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-10 mb-10">
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-12.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-12.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-21.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-21.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x400/img-20.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-20.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                            <div class="row g-10">
                                <div class="col-lg-6">
                                    <div class="row g-10 mb-10">
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-16.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-16.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-12.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-12.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x400/img-15.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-15.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="d-block card-rounded overlay h-lg-100"
                                        data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-23.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-23.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_landing_projects_development">
                            <div class="row g-10">
                                <div class="col-lg-6">
                                    <a class="d-block card-rounded overlay h-lg-100"
                                        data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-15.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-15.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-10 mb-10">
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-22.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-22.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-21.jpg">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="background-image:url({{ asset('assets/media/stock/600x600/img-21.jpg') }})">
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x400/img-14.jpg">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                            style="background-image:url({{ asset('assets/media/stock/600x600/img-14.jpg') }})">
                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Projects Section-->

    <!--begin::Testimonials Section-->
    <div class="mt-20 mb-n20 position-relative z-index-2">
        <div class="container">
            <div class="text-center mb-17">
                <h3 class="fs-2hx text-gray-900 mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                    What Our Clients Say</h3>
                <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                    <br />for different amazing and great useful admin
                </div>
            </div>
            <div class="row g-lg-10 mb-10 mb-lg-20">
                <div class="col-lg-4">
                    <div
                        class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <div class="mb-7">
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                            </div>
                            <div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template
                                <br />and the most well structured
                            </div>
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                the cleanest and the most up to standard I have ever seen.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" class="" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Paul Miles</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <div class="mb-7">
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                            </div>
                            <div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template
                                <br />and the most well structured
                            </div>
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                the cleanest and the most up to standard I have ever seen.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class="" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Janya Clebert</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <div class="mb-7">
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-duotone ki-star fs-5"></i>
                                </div>
                            </div>
                            <div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template
                                <br />and the most well structured
                            </div>
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                the cleanest and the most up to standard I have ever seen.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-16.jpg') }}" class="" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Steave Brown</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                <div class="my-2 me-5">
                    <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Start With Metronic Today,
                        <span class="fw-normal">Speed Up Development!</span>
                    </div>
                    <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Join over 100,000 Professionals
                        Community to Stay Ahead</div>
                </div>
                <a href="https://1.envato.market/EA4JP"
                    class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on
                    Themeforest</a>
            </div>
        </div>
    </div>
    <!--end::Testimonials Section-->
@endsection


@push('scripts')
    <script>
        var searchInput = document.querySelector('#search-product')
        var result = document.querySelector('#result')


        searchInput.addEventListener('keyup', function(){
            let value = this.value

            // Call API
            let url = "{{ route('users.searchProduct') }}";
            let dataSend = {
                'nameProduct' : value
            }
            fetch(url, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                body: JSON.stringify(dataSend)
            })
                .then((response) => response.json())
                .then((data) => {
                    result.innerHTML = ''
                    if(data.length != 0){
                        let UI = ''
                        data.forEach(item => {
                            UI += `
                                <a href="{{ route('users.detailProduct') }}?idProduct=${item.id}" class="item d-flex">
                                    ${item.name}
                                </a>
                            `;
                        })
                        result.innerHTML = UI
                    }

                })
        })
    </script>


    <script type="module">
        let btnSent = document.querySelector("#send")
        let message = document.querySelector("#message")
        btnSent.addEventListener('click', function(e) {
            e.preventDefault();
            axios.post('{{ route("postMessage") }}', {
                'message'  : message.value,
            })
                .then((data) => {
                    message.value = ""
                })
        })


        Echo.private('chat.private.{{ Auth::id() }}.19')
            .listen('ChatPrivate', e => {
                console.log(e);

                // let messages = document.querySelector("#messages")
                // let itemElement = document.createElement("li")
                // if(e.group.leader == e.user.id){
                //     itemElement.textContent = `Trưởng nhóm ~ ${e.user.name}: ${e.message}`;
                // }else{
                //     itemElement.textContent = `${e.user.name}: ${e.message}`;
                // }

                // if(e.user.id == "{{ Auth::user()->id }}"){
                //     itemElement.classList.add("my-message")
                // }
                // messages.appendChild(itemElement)
            })
    </script>
@endpush
