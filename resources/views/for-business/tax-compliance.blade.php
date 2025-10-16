@extends('layouts.app')

@section('title', 'Tax Compliance - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-file-earmark-text display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Tax Compliance</h1>
                <p class="lead">Automatic tax calculations for multiple jurisdictions and generate tax-ready reports for easy filing. Stay compliant effortlessly.</p>
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
                <h2 class="fw-bold mb-3">Simplify Tax Compliance</h2>
                <p class="lead text-muted">
                    Tax compliance doesn't have to be complicated. FinanceFlow automatically calculates taxes, tracks deductible expenses, and generates tax-ready reports to make filing season stress-free.
                </p>
                <p class="text-muted">
                    Support for multiple tax jurisdictions, automatic sales tax calculation, expense categorization for deductions, and comprehensive tax reports that your accountant will love.
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
                                    <i class="bi bi-calculator fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Auto Tax Calculation</h5>
                                <p class="text-muted">Automatically calculate sales tax, VAT, and GST based on customer location and product type.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-globe fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Multi-Jurisdiction</h5>
                                <p class="text-muted">Support for multiple tax jurisdictions. Handle complex tax scenarios across states and countries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-receipt fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Expense Categorization</h5>
                                <p class="text-muted">Automatically categorize expenses for tax deductions. Maximize your deductions at tax time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-file-earmark-bar-graph fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Tax-Ready Reports</h5>
                                <p class="text-muted">Generate comprehensive tax reports with all the information your accountant needs for filing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-calendar-check fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Filing Reminders</h5>
                                <p class="text-muted">Never miss a tax deadline. Get automatic reminders for quarterly and annual tax filings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Stay Tax Compliant</h3>
                <p class="lead text-muted mb-4">Simplify tax season with automated calculations and reports. Try our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
