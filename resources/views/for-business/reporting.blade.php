@extends('layouts.app')

@section('title', 'Financial Reporting - FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <i class="bi bi-graph-up display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3">Financial Reporting</h1>
                <p class="lead">Generate comprehensive financial reports with real-time data. Make informed decisions with profit & loss statements, balance sheets, cash flow reports, and custom analytics.</p>
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
                <h2 class="fw-bold mb-3">Data-Driven Decision Making</h2>
                <p class="lead text-muted">
                    Understanding your business's financial health is crucial for growth and success. FinanceFlow's reporting engine provides real-time insights into your financial performance with professional-grade reports that are easy to understand and share.
                </p>
                <p class="text-muted">
                    Our reporting system automatically pulls data from all your transactions, invoices, and expenses to generate accurate, up-to-date reports. Schedule automatic report delivery, compare periods, and drill down into details to understand the story behind the numbers.
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
                                    <i class="bi bi-lightning fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Real-Time Data</h5>
                                <p class="text-muted">All reports reflect your current financial position with real-time data. No waiting for month-end closes.</p>
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
                                <h5 class="fw-bold">Standard Reports</h5>
                                <p class="text-muted">Access all essential financial reports including P&L, balance sheet, cash flow statement, and more.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-sliders fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Custom Reports</h5>
                                <p class="text-muted">Build custom reports tailored to your business needs. Choose metrics, filters, and visualizations that matter most.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                    <i class="bi bi-calendar-range fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Period Comparison</h5>
                                <p class="text-muted">Compare performance across different time periods. Identify trends, seasonal patterns, and growth opportunities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="text-white rounded-circle p-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                    <i class="bi bi-download fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold">Export Options</h5>
                                <p class="text-muted">Export reports to PDF, Excel, or CSV formats. Share with accountants, investors, or import into other systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <div class="bg-light rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Get Better Financial Insights</h3>
                <p class="lead text-muted mb-4">Start making data-driven decisions with our 14-day free trial. No credit card required.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#" class="btn btn-lg px-4 text-white" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">Start Free Trial</a>
                    <a href="{{ route('forbusiness.index') }}" class="btn btn-outline-primary btn-lg px-4">Explore More Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
