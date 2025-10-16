@extends('layouts.app')

@section('title', 'Invoicing & Billing - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-receipt display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Invoicing & Billing</h1>
                <p class="lead">Create professional invoices in seconds, automate recurring billing, and get paid faster with integrated payment processing and smart reminders.</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- Back Button -->
            <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary mb-4">
                <i class="bi bi-arrow-left me-2"></i>Back to all business features
            </a>

            <!-- Overview Section -->
            <section class="mb-5">
                <h2 class="fw-bold mb-3">Streamline Your Billing Process</h2>
                <p class="lead text-muted">
                    FinanceFlow's invoicing and billing system is designed to save you time and help you get paid faster. Create professional, customizable invoices in seconds, automate recurring billing for subscription-based services, and accept payments directly through your invoices.
                </p>
                <p class="text-muted">
                    Whether you're a freelancer sending a few invoices per month or a growing business managing hundreds of clients, our invoicing system scales with your needs. Customize invoice templates to match your brand, support multiple currencies for international clients, and generate invoices in multiple languages.
                </p>
            </section>

            <!-- Key Highlights -->
            <section class="mb-5">
                <h3 class="fw-bold mb-4">Key Highlights</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-gradient text-white rounded-circle p-3">
                                    <i class="bi bi-lightning-charge fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Get Paid Faster</h5>
                                <p class="text-muted">Accept online payments directly through invoices. Customers can pay with credit cards, ACH, or digital wallets in just a few clicks.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-gradient text-white rounded-circle p-3">
                                    <i class="bi bi-palette fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Professional Branding</h5>
                                <p class="text-muted">Customize invoice templates with your logo, colors, and branding. Create a professional impression with every invoice.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-arrow-repeat fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Automate Recurring Billing</h5>
                                <p class="text-muted">Set up recurring invoices once and let the system handle the rest. Perfect for subscriptions and retainers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-graph-up fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Real-Time Tracking</h5>
                                <p class="text-muted">Know exactly when invoices are sent, viewed, and paid. Get instant notifications and never wonder about invoice status.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-globe fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Multi-Currency Support</h5>
                                <p class="text-muted">Invoice international clients in their local currency with automatic conversion and support for 150+ currencies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Ready to Simplify Your Invoicing?</h3>
                <p class="lead text-muted mb-4">Start creating professional invoices today with our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-primary btn-lg px-4">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
