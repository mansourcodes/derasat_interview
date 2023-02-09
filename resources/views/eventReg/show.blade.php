@extends('layouts.space')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">

                <!-- Heading -->
                <div class="w-lg-65 text-center mx-lg-auto mb-7  content-space-1">
                    <h3>Your Ticket</h3>
                    <p class="fs-6">We will be glad to meet you.</p>
                </div>
                <!-- End Heading -->


                <!-- List Directory -->
                <div id="openingPositions" class="container">
                    <div class="bg-soft-white d-none d-sm-block p-4">
                        <div class="row">

                            <div class="col-sm-4">
                                <h6>Name</h6>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-4">
                                <h6>Contact</h6>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-2">
                                <h6>Code</h6>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-2">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>

                    <!-- List Striped -->
                    <ul class="list-group list-group-lg list-group-flush list-group-striped">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4 mb-2 mb-sm-0">
                                    <span class="h6">{{ $eventReg->name }}</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-4 mb-2 mb-sm-0">
                                    <span>{{ $eventReg->email }}</span> <br>
                                    <span>{{ $eventReg->phone }}</span>

                                </div>
                                <!-- End Col -->

                                <div class="col-sm-2 mb-2 mb-sm-0">
                                    @php
                                        echo Str::substr(MD5($eventReg->id), 1, 5);
                                    @endphp
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-2 text-sm-end">
                                    <a href="#">
                                        More Actions
                                        <i class="bi-chevron-right small ms-1"></i></a>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4 mb-2 mb-sm-0">
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-2 mb-2 mb-sm-0">
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-4 mb-2 mb-sm-0">
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-2 text-sm-end">

                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </li>

                    </ul>
                    <!-- End List Striped -->

                    <div class="w-lg-65 text-center mx-lg-auto mt-7">
                        <p>Don't worry if you don't see any roles you want to apply for now. Register your interest to be
                            notified of any roles that come along that meet your criteria.</p>
                        <a class="btn btn-primary" href="#">Print Ticket</a>
                        <a class="btn btn-primary" href="#">Send Ticket to your Email</a>
                    </div>
                </div>
                <!-- End List Directory -->


            </div>
        </div>
    </div>
@endsection
