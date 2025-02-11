<section id="pricing" class="py-5" style="background-color: #F3F9FF;">
    <div class="container">
        <h4 class="fw-normal text-center">Pricing</h4>
        <p class="fw-light text-center mb-4">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        <div class="row mt-4">
            @foreach($pricingPlans as $plan)
                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm
                        {{ $loop->index == 1 ? 'bg-primary text-white' : 'bg-white border' }}
                        h-100 d-flex flex-column">
                        <h5 class="fw-light">{{ $plan->name }}</h5>
                        <h2 class="fw-normal">${{ $plan->price }}<span class="fs-6 text-muted"> /month</span></h2>
                        <p class="fw-light flex-grow-1">{{ $plan->description }}</p>
                        <h6 class="fw-lighter pt-3">Features Included:</h6>
                        <ul class="list-unstyled text-start">
                            @foreach(json_decode($plan->features) as $feature)
                                <li class="fw-light mb-3 pt-2">
                                    <i class="bi bi-check-circle-fill text-primary"></i> {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn
                            {{ $loop->index == 1 ? 'btn-light' : 'btn-primary' }}
                            w-100 mt-auto">Buy Now →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
