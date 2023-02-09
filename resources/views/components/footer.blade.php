<!-- ========== FOOTER ========== -->
<footer class="bg-primary-dark border-top ">
    <div class="container">
        <div class="row content-space-1">
            <div class="col-lg-3 mb-7 mb-lg-0">
                <!-- Logo -->
                <div class="mb-5">
                    <a class="navbar-brand" href="{{ url('/') }}" aria-label="Space">
                        <img class="navbar-brand-logo" src="{{ asset('theme/svg/logos/logo-white.svg') }}"
                            alt="Image Description">
                    </a>
                </div>
                <!-- End Logo -->

                <span class="d-block">
                    <label for="selectLanguage" class="form-label text-white">Choose language</label>
                </span>

                <!-- Button Group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-soft-light btn-sm dropdown-toggle" id="selectLanguage"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/us.svg') }}"
                                alt="Image description" width="16" />
                            <span>English (US)</span>
                        </span>
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center active" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/us.svg') }}"
                                alt="Image description" width="16" />
                            <span>English (US)</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">

                            <span>Soon</span>
                        </a>
                        {{-- <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/de.svg') }}"
                                alt="Image description" width="16" />
                            <span>Deutsch</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/dk.svg') }}"
                                alt="Image description" width="16" />
                            <span>Dansk</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/es.svg') }}"
                                alt="Image description" width="16" />
                            <span>Español</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/nl.svg') }}"
                                alt="Image description" width="16" />
                            <span>Nederlands</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/it.svg') }}"
                                alt="Image description" width="16" />
                            <span>Italiano</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('theme/vendor/flag-icon-css/flags/1x1/cn.svg') }}"
                                alt="Image description" width="16" />
                            <span>中文 (繁體)</span>
                        </a> --}}
                    </div>
                </div>
                <!-- End Button Group -->
            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
                <span class="text-cap text-light">For small businesses</span>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <ul class="list-unstyled list-py-1 mb-0">
                        @foreach (\App\Models\MenuItem::getWhereParentName('For small businesses') as $item)
                            <li><a class="link-sm link-light" href="{{ $item->url() }}">
                                    {{ $item->name }}
                                </a></li>
                        @endforeach
                    </ul>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
                <span class="text-cap text-light">Alternative to</span>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <ul class="list-unstyled list-py-1 mb-0">
                        @foreach (\App\Models\MenuItem::getWhereParentName('Alternative to') as $item)
                            <li><a class="link-sm link-light" href="{{ $item->url() }}">
                                    {{ $item->name }}
                                </a></li>
                        @endforeach
                    </ul>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
                <span class="text-cap text-light">Platform</span>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-light" href="{{ route('download') }}">
                                Apple Store<i class="bi-box-arrow-up-right ms-1"></i>
                            </a></li>
                        <li><a class="link-sm link-light" href="{{ route('download') }}">
                                Google Play<i class="bi-box-arrow-up-right ms-1"></i>
                            </a></li>

                        <li><a class="link-sm link-light" href="{{ route('download') }}">
                                Web <span class="badge bg-light text-dark rounded-pill ms-2">soon</span>
                            </a></li>
                    </ul>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
                <span class="text-cap text-light">Legal</span>



                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-5">
                    @foreach (\App\Models\MenuItem::getWhereParentName('Legal') as $item)
                        <li><a class="link-sm link-light" href="{{ $item->url() }}">
                                {{ $item->name }}
                            </a></li>
                    @endforeach
                </ul>
                <!-- End List -->

                <span class="text-cap text-light">Resources</span>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                    @foreach (\App\Models\MenuItem::getWhereParentName('Resources') as $item)
                        <li><a class="link-sm link-light" href="{{ $item->url() }}">
                                {{ $item->name }}
                            </a></li>
                    @endforeach
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="border-top border-white-10"></div>

        <div class="row align-items-md-end py-5">
            <div class="col-md mb-3 mb-md-0">
                <p class="text-white mb-0">© Safi. {{ date('Y') }} . All rights reserved.</p>
            </div>

            <div class="col-md d-md-flex justify-content-md-end">
                <!-- Socials -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                            href="https://www.facebook.com/Thesafiapp">
                            <i class="bi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                            href="https://twitter.com/thesafiapp">
                            <i class="bi-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                            href="https://www.instagram.com/thesafiapp/">
                            <i class="bi-instagram"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Socials -->
            </div>
        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
