@extends('layouts.space')

@section('content')
    <!-- Features -->
    <div class="container ">
        <div class="banner-start mt-6 mb-6">
            <div class="row align-items-md-center" style="background-color: #d0ebff">
                <div class="col-md-6">
                    <div class="p-5 p-md-7">
                        <!-- Heading -->
                        <div class="mb-7">
                            <span class="text-cap">CEO Company A</span>
                            <h3>Mohammed </h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary.</p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-3">
                            <!-- Info Block -->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="svg-icon svg-icon-sm text-primary">
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-4">
                                    <h5 class="text-primary">
                                        <a href="#">Program Agenda <i
                                                class="bi-chevron-right small ms-1 small"></i></a>
                                    </h5>
                                    <p class="text-body">Find a time that fits your personality and business idea.</p>
                                </div>
                            </div>
                            <!-- End Info Block -->

                            <!-- Info Block -->
                            {{-- <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="svg-icon svg-icon-sm text-primary">
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-4">
                                    <h5 class="text-primary">
                                        <a href="#">Create a free logo <i
                                                class="bi-chevron-right small ms-1 small"></i></a>
                                    </h5>
                                    <p class="text-body">Stand out from the competition and make your business
                                        unforgettable.</p>
                                </div>
                            </div> --}}
                            <!-- End Info Block -->
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-md-6 content-space-md-1">
                    <div class="w-85 w-md-100 mx-auto me-md-auto">
                        <img class="img-fluid" src="{{ asset('theme/svg/logos/img6.jpeg') }}" alt="Image Description">
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
    </div>
    <!-- End Features -->
@endsection
