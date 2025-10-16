@extends('layouts.app')

@section('title', 'Contact Us - CFMS')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
        <p class="lead">We're here to help you transform your finance operations</p>
    </div>
</section>

<!-- Contact Form and Info -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Send us a Message</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Contact Information</h2>
                <div class="mb-4">
                    <h5>Quick Links</h5>
                    <p><a href="https://wa.me/256700000000" class="btn btn-success me-2"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="mailto:info@cfms.com" class="btn btn-outline-primary"><i class="fas fa-envelope"></i> Email</a></p>
                </div>
                <div class="mb-4">
                    <h5>Our Mission</h5>
                    <p>Empowering East African businesses with smart finance tools that drive growth, ensure compliance, and simplify operations in an increasingly digital world.</p>
                </div>
                <div class="mb-4">
                    <h5>Office Location</h5>
                    <p>Nakivubo Road, Nakasero<br>
                    Kampala, Uganda</p>
                </div>
                <!-- Placeholder Map -->
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.757!2d32.5825!3d0.3136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb8b1b6b6b6b%3A0x1b6b6b6b6b6b6b6b!2sKampala%2C%20Uganda!5e0!3m2!1sen!2s!4v1234567890!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-success text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
        <p class="lead mb-4">Join the growing community of East African businesses using CFMS.</p>
        <a href="/register" class="btn btn-light btn-lg">Sign Up Now</a>
    </div>
</section>
@endsection