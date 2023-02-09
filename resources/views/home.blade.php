@extends('layouts.space')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">


                @include('components.hero')
                @include('components.summary')

                @include('components.faq')


            </div>
        </div>
    </div>
@endsection
