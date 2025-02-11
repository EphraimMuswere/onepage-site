<section id="services" class="py-5" style="background-color: #F3F9FF;">
    <div class="container">
        <div class="text-center">
            <h4 class="fw-light">Services</h4>
            <p class="fw-lighter">Explore what we offer to help you succeed.</p>
        </div>

        <div class="row align-items-center mt-5">
            @foreach($services as $service)
                <div class="col-md-6">
                    <div class="p-4 shadow-sm" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <i class="{{ $service->icon }} text-primary fs-3"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="fw-light mt-3">{{ $service->title }}</h5>
                                <p class="fw-lighter">{{ $service->description }}</p>
                                <a href="#" class="fw-lighter text-primary text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
