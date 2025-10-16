@extends('layouts.app')

@section('title', 'For Business - All Features | FinanceFlow')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Complete Business Finance Solution</h1>
        <p class="lead mb-0">Explore all the powerful features designed to streamline your financial operations and grow your business</p>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <!-- Sticky Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="position-sticky" style="top: 100px;">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="text-uppercase fw-bold text-muted mb-3">Categories</h6>
                        <nav class="nav flex-column">
                            <a href="#core-features" class="nav-link text-dark py-2 active">
                                <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem; color: #1E40AF;"></i>Core Features
                            </a>
                            <a href="#advanced-tools" class="nav-link text-dark py-2">
                                <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem; color: #1E40AF;"></i>Advanced Tools
                            </a>
                            <a href="#integrations" class="nav-link text-dark py-2">
                                <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem; color: #1E40AF;"></i>Integrations
                            </a>
                            <a href="#compliance" class="nav-link text-dark py-2">
                                <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem; color: #1E40AF;"></i>Compliance & Security
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Content -->
        <div class="col-lg-9">
            <!-- Core Features -->
            <section id="core-features" class="mb-5 pb-4">
                <h2 class="fw-bold mb-2" style="color: #1E40AF;">Core Features</h2>
                <p class="text-muted mb-4">Essential tools to manage your day-to-day financial operations with ease and efficiency.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-receipt fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Invoicing & Billing</h5>
                                </div>
                                <p class="card-text text-muted">Create professional invoices in seconds with customizable templates and automated billing.</p>
                                <a href="{{ route('forbusiness.invoicing') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-wallet2 fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Expense Management</h5>
                                </div>
                                <p class="card-text text-muted">Track and categorize all business expenses effortlessly with receipt capture and automation.</p>
                                <a href="{{ route('forbusiness.expenses') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-graph-up fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Financial Reporting</h5>
                                </div>
                                <p class="card-text text-muted">Generate comprehensive financial reports with real-time data and customizable dashboards.</p>
                                <a href="{{ route('forbusiness.reporting') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-bank fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Bank Reconciliation</h5>
                                </div>
                                <p class="card-text text-muted">Connect bank accounts and automatically import transactions for seamless reconciliation.</p>
                                <a href="{{ route('forbusiness.bankreconciliation') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Advanced Tools -->
            <section id="advanced-tools" class="mb-5 pb-4">
                <h2 class="fw-bold mb-2" style="color: #1E40AF;">Advanced Tools</h2>
                <p class="text-muted mb-4">Powerful features for growing businesses that need sophisticated financial management capabilities.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-building fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Multi-Tenant SaaS</h5>
                                </div>
                                <p class="card-text text-muted">Manage multiple clients or business entities from a single dashboard with complete data isolation.</p>
                                <a href="{{ route('forbusiness.multitenant') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-credit-card fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Payment Processing</h5>
                                </div>
                                <p class="card-text text-muted">Accept credit cards, ACH transfers, and digital wallets directly through your invoices.</p>
                                <a href="{{ route('forbusiness.payment') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-pie-chart fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Budget Management</h5>
                                </div>
                                <p class="card-text text-muted">Create detailed budgets and track actual spending against targets in real-time.</p>
                                <a href="{{ route('forbusiness.budget') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-people fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Team Collaboration</h5>
                                </div>
                                <p class="card-text text-muted">Invite team members with role-based access controls and streamline approval workflows.</p>
                                <a href="{{ route('forbusiness.team') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Integrations -->
            <section id="integrations" class="mb-5 pb-4">
                <h2 class="fw-bold mb-2" style="color: #1E40AF;">Integrations</h2>
                <p class="text-muted mb-4">Connect FinanceFlow with your favorite business tools for seamless data flow and enhanced productivity.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-link-45deg fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Banking Integrations</h5>
                                </div>
                                <p class="card-text text-muted">Connect with over 10,000 banks worldwide for automatic transaction imports and real-time updates.</p>
                                <a href="{{ route('forbusiness.bankingintegrations') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-cart fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">E-commerce Integration</h5>
                                </div>
                                <p class="card-text text-muted">Sync with Shopify, WooCommerce, and other platforms to automatically create invoices from orders.</p>
                                <a href="{{ route('forbusiness.ecommerce') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-envelope fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">CRM Integration</h5>
                                </div>
                                <p class="card-text text-muted">Connect with Salesforce, HubSpot, and popular CRM systems to sync customer data automatically.</p>
                                <a href="{{ route('forbusiness.crm') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-code-slash fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">API & Webhooks</h5>
                                </div>
                                <p class="card-text text-muted">Build custom integrations with our RESTful API and receive real-time notifications via webhooks.</p>
                                <a href="{{ route('forbusiness.api') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Compliance & Security -->
            <section id="compliance" class="mb-5 pb-4">
                <h2 class="fw-bold mb-2" style="color: #1E40AF;">Compliance & Security</h2>
                <p class="text-muted mb-4">Enterprise-grade security and compliance features to protect your financial data and meet regulatory requirements.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-shield-lock fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Bank-Level Security</h5>
                                </div>
                                <p class="card-text text-muted">256-bit SSL encryption, SOC 2 Type II certified infrastructure, and multi-factor authentication.</p>
                                <a href="{{ route('forbusiness.security') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-file-earmark-text fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Tax Compliance</h5>
                                </div>
                                <p class="card-text text-muted">Automatic tax calculations for multiple jurisdictions and generate tax-ready reports for easy filing.</p>
                                <a href="{{ route('forbusiness.tax') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);">
                                        <i class="bi bi-key fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Access Controls</h5>
                                </div>
                                <p class="card-text text-muted">Granular role-based permissions and complete audit trail of all user actions for accountability.</p>
                                <a href="{{ route('forbusiness.access') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-white rounded-3 p-3 me-3" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                        <i class="bi bi-cloud-check fs-3"></i>
                                    </div>
                                    <h5 class="card-title mb-0 fw-bold">Data Backup & Recovery</h5>
                                </div>
                                <p class="card-text text-muted">Automatic daily backups with 99.9% uptime guarantee and geo-redundant storage across multiple data centers.</p>
                                <a href="{{ route('forbusiness.backup') }}" class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
        <p class="lead text-muted mb-4">Start your free 14-day trial today. No credit card required.</p>
        <a href="#" class="btn btn-lg px-5" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%); color: white; border: none;">Start Free Trial</a>
    </div>
</div>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    
    .nav-link.active {
        color: #1E40AF !important;
        font-weight: 600;
    }
    
    .nav-link:hover {
        color: #1E40AF !important;
    }
    
    @media (max-width: 991px) {
        .position-sticky {
            position: static !important;
        }
    }
</style>

<script>
    // Smooth scrolling for sidebar links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Update active state
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            }
        });
    });

    // Update active link on scroll
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPosition = window.scrollY + 150;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
</script>
@endsection
