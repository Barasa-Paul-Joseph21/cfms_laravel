@extends('layouts.app')

@section('title', 'Features - CFMS')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Powerful Features for Modern Finance</h1>
        <p class="lead">Everything you need to manage corporate finance efficiently in East Africa</p>
    </div>
</section>

<!-- Features Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">📚</div>
                        <h5 class="card-title">General Ledger</h5>
                        <p class="card-text">Central record of all financial transactions with automated entries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">💸</div>
                        <h5 class="card-title">Cashflow Management</h5>
                        <p class="card-text">Real-time tracking and forecasting across all accounts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">💼</div>
                        <h5 class="card-title">Payroll</h5>
                        <p class="card-text">Automated salary calculations and employee management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">📋</div>
                        <h5 class="card-title">Tax Compliance</h5>
                        <p class="card-text">Automatic VAT/GST calculations and filing assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">💱</div>
                        <h5 class="card-title">Multi-Currency</h5>
                        <p class="card-text">Support for USD, UGX, KES, TZS with real-time conversion.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">📱</div>
                        <h5 class="card-title">Mobile Money</h5>
                        <p class="card-text">Integrate MTN MoMo, Airtel Money, and other services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">🔌</div>
                        <h5 class="card-title">Offline Mode</h5>
                        <p class="card-text">Continue working without internet in remote areas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm animate-fade-in">
                    <div class="card-body text-center">
                        <div class="feature-icon">📢</div>
                        <h5 class="card-title">SMS/WhatsApp Alerts</h5>
                        <p class="card-text">Automated notifications for payments and deadlines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tailored for East African Industries</h2>
            <p class="text-muted">CFMS adapts to the unique needs of various sectors</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">🏦</div>
                            <h5 class="card-title mb-0">Microfinance</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>• Loan portfolio management</li>
                            <li>• Automated interest calculations</li>
                            <li>• Client repayment tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">🌾</div>
                            <h5 class="card-title mb-0">Agriculture</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>• Seasonal cashflow forecasting</li>
                            <li>• Supplier payment management</li>
                            <li>• Harvest revenue tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">🚚</div>
                            <h5 class="card-title mb-0">Transport</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>• Fleet expense tracking</li>
                            <li>• Fuel cost management</li>
                            <li>• Route profitability analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">🤝</div>
                            <h5 class="card-title mb-0">NGOs</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>• Grant and donation tracking</li>
                            <li>• Program budgeting</li>
                            <li>• Compliance reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">🏗️</div>
                            <h5 class="card-title mb-0">Construction</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>• Project cost management</li>
                            <li>• Subcontractor payments</li>
                            <li>• Material inventory tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">See CFMS in Action</h2>
        <p class="lead mb-4">Request a personalized demo to discover how CFMS can transform your finance operations.</p>
        <a href="/contact" class="btn btn-light btn-lg">Request Demo</a>
    </div>
</section>
@endsection