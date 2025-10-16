@extends('layouts.app')

@section('title', 'Bank-Level Security - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-shield-lock display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Bank-Level Security</h1>
                <p class="lead">Enterprise-grade security and compliance features to protect your financial data. 256-bit SSL encryption, SOC 2 Type II certified, and multi-factor authentication.</p>
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
                <h2 class="fw-bold mb-3">Your Data is Safe With Us</h2>
                <p class="lead text-muted">
                    Security is our top priority. We use the same level of encryption and security protocols as major banks to protect your financial data. Our infrastructure is SOC 2 Type II certified and undergoes regular third-party security audits.
                </p>
                <p class="text-muted">
                    From data encryption in transit and at rest to multi-factor authentication and role-based access controls, we've implemented multiple layers of security to ensure your financial information remains private and secure.
                </p>
            </section>

            <!-- Key Highlights -->
            <section class="mb-5">
                <h3 class="fw-bold mb-4">Key Highlights</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-lock fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">256-Bit SSL Encryption</h5>
                                <p class="text-muted">All data transmission is encrypted using 256-bit SSL, the same encryption used by banks and financial institutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-award fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">SOC 2 Type II Certified</h5>
                                <p class="text-muted">Our infrastructure meets the highest standards for security, availability, and confidentiality with SOC 2 Type II certification.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-phone fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Multi-Factor Authentication</h5>
                                <p class="text-muted">Add an extra layer of security with multi-factor authentication. Support for SMS, authenticator apps, and hardware keys.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-cloud-check fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Automatic Backups</h5>
                                <p class="text-muted">Daily automated backups with geo-redundant storage across multiple data centers. 99.9% uptime guarantee.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-file-earmark-text fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Audit Logs</h5>
                                <p class="text-muted">Complete audit trail of all user actions. Track who accessed what data and when for compliance and accountability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Experience Enterprise-Grade Security</h3>
                <p class="lead text-muted mb-4">Protect your financial data with bank-level security. Start your 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
