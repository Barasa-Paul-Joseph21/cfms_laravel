@extends('layouts.app')

@section('title', 'Expense Management - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-wallet2 display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Expense Management</h1>
                <p class="lead">Track every business expense effortlessly with receipt capture, automatic categorization, and comprehensive reporting. Gain complete visibility into your spending.</p>
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
                <h2 class="fw-bold mb-3">Complete Expense Visibility</h2>
                <p class="lead text-muted">
                    Managing business expenses shouldn't be complicated. FinanceFlow's expense management system gives you complete control over your spending with tools designed to save time and reduce errors.
                </p>
                <p class="text-muted">
                    Capture receipts on the go with our mobile app, automatically categorize transactions, and generate detailed expense reports in seconds. Whether you're tracking office supplies, travel expenses, or vendor payments, our system ensures every dollar is accounted for.
                </p>
            </section>

            <!-- Key Highlights -->
            <section class="mb-5">
                <h3 class="fw-bold mb-4">Key Highlights</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-gradient text-white rounded-circle p-3">
                                    <i class="bi bi-camera fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Receipt Capture</h5>
                                <p class="text-muted">Snap photos of receipts with your phone and automatically extract key information. Never lose a receipt again.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-gradient text-white rounded-circle p-3">
                                    <i class="bi bi-robot fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Smart Categorization</h5>
                                <p class="text-muted">AI-powered categorization learns from your patterns and automatically assigns expenses to the right categories.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-credit-card-2-front fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Bank Sync</h5>
                                <p class="text-muted">Connect your bank accounts and credit cards to automatically import transactions and match receipts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Employee Reimbursements</h5>
                                <p class="text-muted">Streamline employee expense submissions and approvals. Track reimbursement status and process payments faster.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-bar-chart fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Spending Insights</h5>
                                <p class="text-muted">Visualize spending patterns by category, vendor, or time period. Identify cost-saving opportunities with detailed analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Take Control of Your Expenses</h3>
                <p class="lead text-muted mb-4">Start tracking expenses more efficiently with our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-success btn-lg px-4">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-success btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
