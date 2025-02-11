<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text Content -->
            <div class="col-lg-6">
                <h6 class="text-primary">MORE ABOUT US</h6>
                <h4 class="fw-light">{{ $about->title }}</h4>
                <p class="fw-lighter">{{ $about->description }}</p>

                <div class="row fw-light">
                    <!-- Left Column: Feature List -->
                    <div class="col-md-6">
                        @foreach(json_decode($about->features) as $feature)
                            <p class="fw-lighter">{{ $feature }}</p>
                        @endforeach
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Left Column: Profile -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/' . $about->ceo_image) }}" class="rounded-circle me-3" width="50" alt="CEO">
                            <div>
                                <h6 class="mb-0 fw-lighter">{{ $about->ceo_name }}</h6>
                                <p class="text-primary small fw-lighter">CEO & Founder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Call to Action -->
                    <div class="col-md-6">
                        <div class="p-2 rounded shadow-sm" style="background-color: white;">
                            <p class="mb-1 fw-lighter"><i class="bi bi-telephone-fill text-primary"></i> Call us anytime</p>
                            <p class="fw-lighter">{{ $about->phone_number }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 position-relative">
                <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid rounded" alt="About Image">

                <!-- Overlay Box -->
                <div class="position-absolute bottom-0 end-0 bg-primary text-white p-3 rounded">
                    <h3 class="mb-0">{{ $about->years_of_experience }}+ Years</h3>
                    <p class="small">Of experience in business service</p>
                </div>
            </div>
        </div>
    </div>
</section>
