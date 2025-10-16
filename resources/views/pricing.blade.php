@extends('layouts.app')

@section('title', 'Pricing - CFMS')

@section('content')
<!-- Hero Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0c47b4fb 0%); color: white;">
    <div class="container text-center position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Icon -->
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white opacity-75">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h1 class="display-4 fw-bold mb-4">Choose the plan that's right for your business.</h1>
                <p class="lead mb-5 opacity-90">Simple, transparent pricing that grows with you. Start free and scale as needed.</p>

                <!-- Pricing Toggle -->
                <div class="d-flex justify-content-center align-items-center gap-4 mb-5 bg-white bg-opacity-10 rounded-pill p-3 mx-auto" style="max-width: 400px;">
                    <span class="fw-semibold text-white">Monthly</span>
                    <div class="form-check form-switch">
                        <input class="form-check-input pricing-toggle" type="checkbox" id="pricingToggle" style="width: 3rem; height: 1.5rem;">
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="fw-semibold me-2 text-white">Annual</span>
                        <span class="badge bg-success">Save 20%</span>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <a href="/register" class="btn btn-light btn-lg px-4 py-3 shadow-sm">Try it Free</a>
                    <a href="/contact" class="btn btn-success btn-lg px-4 py-3 shadow-sm">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background decoration -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg></div>
</section>

@include('components.pricing-cards')

@include('components.all-plans-include')

@include('components.expert-assurance')

@include('components.faq')

@include('components.testimonials')

@include('components.footer-cta')

<script>
// Pricing toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('pricingToggle');
    const priceElements = document.querySelectorAll('.price-value');
    const periodElements = document.querySelectorAll('.billing-period');
    const discountElements = document.querySelectorAll('.discount-message');

    toggle.addEventListener('change', function() {
        const isAnnual = this.checked;

        priceElements.forEach(element => {
            const monthly = element.getAttribute('data-monthly');
            const annual = element.getAttribute('data-annual');
            const price = isAnnual ? annual : monthly;
            element.textContent = price;
        });

        periodElements.forEach(element => {
            element.textContent = isAnnual ? '/month (billed annually)' : '/month';
        });

        discountElements.forEach(element => {
            element.style.display = isAnnual ? 'block' : 'none';
        });
    });
});
</script>

<style>
.card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
}
.form-check-input:checked {
    background-color: #0cc06cff;
    border-color: #076e3eff;
}
</style>
@endsection
