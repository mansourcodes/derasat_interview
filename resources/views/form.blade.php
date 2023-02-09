@extends('layouts.space')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-6 mb-6 pt-6 pb-6">
            <div class="col-8">



                <!-- Heading -->
                <div class="w-lg-65 text-center mx-lg-auto mb-7  content-space-1">
                    <h3>Book your Ticket</h3>
                    <p class="fs-6">It's just one step ahead</p>
                </div>
                <!-- End Heading -->

                <div class="container px-5 my-5">
                    <form id="contactForm" method="POST" action="{{ route('reg.store') }}">

                        @csrf

                        <div class="form-floating mb-3">
                            <input value="{{ old('name') }}" name="name" class="form-control" id="fullName"
                                type="text" placeholder="Full Name" required />
                            <label for="fullName">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input value="{{ old('email') }}" name="email" class="form-control" id="emailAddress"
                                type="email" placeholder="Email Address" data-sb-validations="required,email" required />
                            <label for="emailAddress">Email Address</label>

                        </div>
                        <div class="form-floating mb-3">
                            <input value="{{ old('phone') }}" name="phone" class="form-control" id="phone"
                                type="text" placeholder="Phone" required />
                            <label for="phone">Phone</label>
                        </div>


                        <div class="mb-3">
                            <label class="form-label d-block"></label>
                            <div class="form-check">
                                <input class="form-check-input" id="agreeTeams" type="checkbox" name="agree" required />
                                <label class="form-check-label" for="agreeTeams">Agree Teams</label>
                            </div>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>


    @include('components.faq')
@endsection
