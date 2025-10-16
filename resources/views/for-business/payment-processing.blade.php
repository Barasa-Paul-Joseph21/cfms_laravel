@extends('layouts.app')

@section('title', 'Payment Processing - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-credit-card display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Payment Processing</h1>
                <p class="lead">Accept credit cards, ACH transfers, and digital wallets directly through your invoices. Reduce payment friction with one-click checkout and automatic reconciliation.</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- Back Button -->
            <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-success mb-4">
                <i class="bi bi-arrow-left me-2"></i>Back to all business features
            </a>

            <!-- Overview Section -->
            <section class="mb-5">
                <h2 class="fw-bold mb-3">Accept Payments Seamlessly</h2>
                <p class="lead text-muted">
                    Make it easy for your customers to pay you with integrated payment processing. Accept all major payment methods including credit cards, debit cards, ACH bank transfers, and popular digital wallets like Apple Pay and Google Pay.
                </p>
                <p class="text-muted">
                    Our payment processing is built directly into your invoices, so customers can pay with just a few clicks. No need to set up separate payment links or redirect to third-party sites. Payments are automatically reconciled with your invoices, saving you time and reducing errors.
                </p>
            </section>

            <!-- Key Highlights -->
            <section class="mb-5">
                <h3 class="fw-bold mb-4">Key Highlights</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-credit-card-2-front fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Multiple Payment Methods</h5>
                                <p class="text-muted">Accept credit cards, debit cards, ACH transfers, Apple Pay, Google Pay, and more. Give customers flexibility.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-lightning-charge fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">One-Click Checkout</h5>
                                <p class="text-muted">Customers can pay directly from the invoice with minimal clicks. No redirects or complicated checkout processes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-arrow-repeat fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Automatic Reconciliation</h5>
                                <p class="text-muted">Payments are automatically matched with invoices. No manual data entry or reconciliation needed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-shield-check fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Secure Processing</h5>
                                <p class="text-muted">PCI DSS compliant payment processing with bank-level encryption. Your customers' payment data is always secure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-percent fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Competitive Rates</h5>
                                <p class="text-muted">Transparent pricing with no hidden fees. Lower transaction costs compared to traditional payment processors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Start Accepting Payments Today</h3>
                <p class="lead text-muted mb-4">Get paid faster with integrated payment processing. Start your 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-success btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
