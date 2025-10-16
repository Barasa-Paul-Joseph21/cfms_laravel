@extends('layouts.app')

@section('title', 'API & Webhooks - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-code-slash display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">API & Webhooks</h1>
                <p class="lead">Build custom integrations with our RESTful API and receive real-time notifications via webhooks. Complete developer documentation included.</p>
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
                <h2 class="fw-bold mb-3">Build Custom Integrations</h2>
                <p class="lead text-muted">
                    Need a custom integration? Our comprehensive RESTful API gives you programmatic access to all FinanceFlow features. Build exactly what your business needs.
                </p>
                <p class="text-muted">
                    Access invoices, expenses, customers, reports, and more through our API. Set up webhooks to receive real-time notifications when events occur. Complete documentation, SDKs, and code examples included.
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
                                    <i class="bi bi-braces fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">RESTful API</h5>
                                <p class="text-muted">Modern REST API with JSON responses. Access all features programmatically with simple HTTP requests.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-bell fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Real-Time Webhooks</h5>
                                <p class="text-muted">Receive instant notifications when events occur. Subscribe to invoice creation, payment received, and more.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-book fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Complete Documentation</h5>
                                <p class="text-muted">Comprehensive API docs with code examples in multiple languages. Get started in minutes.</p>
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
                                <h5 class="fw-bold">Secure Authentication</h5>
                                <p class="text-muted">OAuth 2.0 and API key authentication. Granular permissions control what each API key can access.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-speedometer fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">High Rate Limits</h5>
                                <p class="text-muted">Generous rate limits for all plans. Build high-volume integrations without worrying about throttling.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Start Building Today</h3>
                <p class="lead text-muted mb-4">Access our API and build custom integrations. Try our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-success btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
