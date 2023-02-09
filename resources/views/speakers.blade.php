@extends('layouts.space')

@section('content')
    <!-- Team -->
    <div class="container content-space-1">
        <div class="row mb-sm-5">
            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">Christina Kray</h6>
                    <span class="d-block">Founder / CEO</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Loves to chat about typography, you have been warned.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">Jeff Fisher</h6>
                    <span class="d-block">Project Manager</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Multidisciplinary. Drinks too much coffee. Likes sentence fragments.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">Sophia Harrington</h6>
                    <span class="d-block">Project Manager</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Loves to chat about typography, you have been warned.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">David Forren</h6>
                    <span class="d-block">Support Consultant</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Behind every great project is a great Google Slides deck.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">Amil Evara</h6>
                    <span class="d-block">UI/UX Designer</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Design swashbuckler. Trader of stonks. Will work for snacks.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-7">
                <!-- Team -->
                <div class="w-65 text-center mx-auto">
                    <img class="img-fluid rounded-circle mb-5" src="{{ asset('theme/svg/logos/img6.jpeg') }}"
                        alt="Image Description">
                    <h6 class="mb-1">Tom Lowry</h6>
                    <span class="d-block">UI/UX Designer</span>

                    <div class="border-top mx-auto my-3" style="max-width: 5rem;"></div>

                    <p>Loves to chat about typography, you have been warned.</p>

                    <a class="btn btn-outline-primary" href="{{ route('speakers') }}/a">
                        Read Profile <i class="bi-chevron-right small ms-1"></i>
                    </a>
                </div>
                <!-- End Team -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Info -->
        <div class="text-center">
            <p class="mb-0">Want to join us?</p>
            <a class="link" href="{{ url('/') }}">See all details <i class="bi-chevron-right small ms-1"></i></a>
        </div>
        <!-- End Info -->
    </div>
    <!-- End Team -->
@endsection
