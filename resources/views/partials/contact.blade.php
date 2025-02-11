
<style>
    ::placeholder {
        color: rgba(0, 0, 0, 0.4); /* Lighter placeholder color */
        font-weight: lighter; /* Makes text weight lighter */
    }
</style>

<!-- Contact Section -->
<section id="contact" class="py-5" style="background-color: #F3F9FF;">
    <div class="container">
        <h3 class="text-center mb-4 fw-normal">Contact</h3>
        <p class="text-center fw-light mb-5">{{ $contact->description ?? 'Get in touch with us for more information' }}</p>
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="p-5 bg-primary text-white rounded">
                    <h3 class="fw-light">Contact Info</h3>
                    <p class="fw-lighter pt-2">{{ $contact->description ?? '' }}</p>
                    <ul class="list-unstyled">
                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt me-2"></i> Address</h5>
                            <p class="fw-lighter mb-0">{{ $contact->address ?? 'N/A' }}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="h5"><i class="fas fa-phone me-2"></i> Phone Number</h3>
                            <p class="fw-lighter mb-0">{{ $contact->phone_number ?? 'N/A' }}</p>
                            <p class="fw-lighter">{{ $contact->phone_secondary ?? '' }}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="h5"><i class="fas fa-envelope me-2"></i> Email Address</h3>
                            <p class="fw-lighter mb-0">{{ $contact->email ?? 'N/A' }}</p>
                            <p class="fw-lighter">{{ $contact->email_secondary ?? '' }}</p>
                        </div>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="p-5 rounded-3 shadow" style="background-color: white;">
                    <h3 class="fw-light">Get in Touch</h3>
                    <p class="fw-lighter mb-4">Send us a message and we’ll get back to you as soon as possible.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control form-control-md" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control form-control-md" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-md" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control form-control-md" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
