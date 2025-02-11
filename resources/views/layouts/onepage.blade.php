<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iLanding</title>

    <!-- Bootstrap CSS (for styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- jQuery (needed for animations & interactivity) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<!-- Navbar -->
@include('partials.navbar')

<!-- Main Content Section -->
<div class="container">
    @yield('content')
</div>

<!-- About -->
@include('partials.about')

<!-- Features -->
@include('partials.features')

<!-- Testimonials -->
@include('partials.testimonials')

<!-- Testimonials -->
@include('partials.services')

<!-- Pricing -->
@include('partials.pricing')

<!-- FAQ & CTA -->
@include('partials.faq')

<!-- Contact -->
@include('partials.contact')

<!-- Footer -->
@include('partials.footer')

<!-- Bootstrap JS (for interactive components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
