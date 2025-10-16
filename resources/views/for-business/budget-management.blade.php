@extends('layouts.app')

@section('title', 'Budget Management - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-pie-chart display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Budget Management</h1>
                <p class="lead">Create detailed budgets and track actual spending against targets in real-time. Stay on track with alerts and insights.</p>
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
                <h2 class="fw-bold mb-3">Plan and Control Your Spending</h2>
                <p class="lead text-muted">
                    Effective budget management is key to financial success. FinanceFlow helps you create detailed budgets, track spending in real-time, and make informed decisions to keep your business on track.
                </p>
                <p class="text-muted">
                    Set budgets by department, project, category, or time period. Monitor actual spending against budgets, receive alerts when approaching limits, and adjust plans on the fly to optimize your financial performance.
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
                                <h5 class="fw-bold">Flexible Budget Creation</h5>
                                <p class="text-muted">Create budgets by department, project, category, or custom dimensions. Set monthly, quarterly, or annual targets.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-graph-up-arrow fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Real-Time Tracking</h5>
                                <p class="text-muted">Monitor actual spending against budgets in real-time. See exactly where you stand at any moment.</p>
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
                                <h5 class="fw-bold">Smart Alerts</h5>
                                <p class="text-muted">Receive notifications when approaching or exceeding budget thresholds. Stay in control before overspending.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-bar-chart-line fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Variance Analysis</h5>
                                <p class="text-muted">Compare budgeted vs. actual spending with detailed variance reports. Identify trends and opportunities.</p>
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
                                <h5 class="fw-bold">Budget Rollover</h5>
                                <p class="text-muted">Automatically roll over unused budgets to the next period or reallocate funds between categories.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Take Control of Your Budget</h3>
                <p class="lead text-muted mb-4">Start managing budgets effectively with our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
