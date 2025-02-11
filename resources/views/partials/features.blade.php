<section id="features" class="container my-5">
    <!-- Features Title -->
    <div class="text-center">
        <h4 class="fw-light">Features</h4>
        <p class="fw-lighter">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        <div class="d-flex justify-content-center gap-3 mt-3">
            <button class="btn btn-primary">Modist</button>
            <button class="btn btn-light">Praesenti</button>
            <button class="btn btn-light">Explica</button>
        </div>
    </div>

    <!-- Two-Column Layout -->
    <div class="row align-items-center mt-5">
        <!-- Left: Feature Description -->
        <div class="col-md-6">
            <h4 class="fw-light">Voluptatem dignissimos provident</h4>
            <p class="fst-italic fw-lighter">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="fw-lighter">
                <i class="bi bi-check2-all text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class="fw-lighter">
                <i class="bi bi-check2-all text-primary"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
            <p class="fw-lighter">
                <i class="bi bi-check2-all text-primary"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

        </div>

        <!-- Right: Feature Image -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/feature-image.png') }}" class="img-fluid" alt="Feature Illustration">
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="row mt-5">
        @foreach($features as $feature)
            <div class="col-md-3">
                <div class="p-4 rounded shadow-sm border">
                    <i class="{{ $feature->icon }} text-primary fs-3"></i>
                    <h5 class="fw-light">{{ $feature->title }}</h5>
                    <p class="fw-lighter">{{ $feature->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Section -->
    <div class="mt-5 py-5 rounded">
        <div class="container text-center">
            <div class="bg-primary text-white py-5 rounded">
                <h4 class="fw-light">Maecenas tempus tellus eget condimentum</h4>
                <p class="mt-3 fw-lighter">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                <button class="btn btn-outline-light mt-3">Call To Action</button>
            </div>

            <!-- Logo Carousel -->
            <div id="brandCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-5">
                            <img src="images/lifegroups.png" class="img-fluid grayscale" alt="LifeGroups">
                            <img src="images/grabyo.png" class="img-fluid grayscale" alt="Grabyo">
                            <img src="images/citrus.png" class="img-fluid grayscale" alt="Citrus">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-5">
                            <img src="images/trustly.png" class="img-fluid grayscale" alt="Trustly">
                            <img src="images/oldendorff.png" class="img-fluid grayscale" alt="Oldendorff">
                            <img src="images/lilly.png" class="img-fluid grayscale" alt="Lilly">
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#brandCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#brandCarousel" data-bs-slide-to="1"></button>
                </div>
            </div>
        </div>
    </div>
</section>
