@extends('layouts.app')

@section('title', 'For Business - All Features | FinanceFlow')

@section('content')
<style>
    .features-hero {
        background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
        color: white;
        padding: 4rem 0 3rem;
        text-align: center;
    }

    .features-hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .features-hero p {
        font-size: 1.25rem;
        opacity: 0.95;
        max-width: 700px;
        margin: 0 auto;
    }

    .features-container {
        display: flex;
        gap: 2rem;
        max-width: 1400px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .features-sidebar {
        width: 280px;
        flex-shrink: 0;
    }

    .sidebar-sticky {
        position: sticky;
        top: 100px;
    }

    .sidebar-nav {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #E5E7EB;
    }

    .sidebar-title {
        font-size: 1rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .sidebar-link {
        display: block;
        padding: 0.75rem 1rem;
        color: #6B7280;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background: #F3F4F6;
        color: #1E40AF;
        transform: translateX(4px);
    }

    .features-content {
        flex: 1;
        min-width: 0;
    }

    .feature-category {
        margin-bottom: 4rem;
        scroll-margin-top: 100px;
    }

    .category-header {
        margin-bottom: 2rem;
    }

    .category-title {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.5rem;
    }

    .category-description {
        font-size: 1.125rem;
        color: #6B7280;
        line-height: 1.6;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
    }

    .feature-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #E5E7EB;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .feature-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        border-color: #059669;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #1E40AF 0%, #059669 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        margin-bottom: 1.5rem;
    }

    .feature-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1rem;
    }

    .feature-description {
        font-size: 0.95rem;
        color: #6B7280;
        line-height: 1.7;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    .feature-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #1E40AF;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .feature-link:hover {
        color: #059669;
        gap: 0.75rem;
    }

    .feature-link i {
        transition: transform 0.3s ease;
    }

    .feature-link:hover i {
        transform: translateX(4px);
    }

    @media (max-width: 991px) {
        .features-container {
            flex-direction: column;
        }

        .features-sidebar {
            width: 100%;
        }

        .sidebar-sticky {
            position: static;
        }

        .sidebar-nav {
            display: flex;
            overflow-x: auto;
            gap: 0.5rem;
            padding: 1rem;
        }

        .sidebar-link {
            white-space: nowrap;
            margin-bottom: 0;
        }

        .features-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }

    @media (max-width: 767px) {
        .features-hero h1 {
            font-size: 2rem;
        }

        .features-hero p {
            font-size: 1rem;
        }

        .features-container {
            padding: 0 1rem;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }

        .category-title {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="features-hero">
    <div class="container">
        <h1>Complete Business Finance Solution</h1>
        <p>Explore all the powerful features designed to streamline your financial operations and grow your business</p>
    </div>
</section>

<!-- Features Content -->
<div class="features-container">
    <!-- Sidebar Navigation -->
    <aside class="features-sidebar">
        <div class="sidebar-sticky">
            <nav class="sidebar-nav">
                <div class="sidebar-title">Categories</div>
                <a href="#core-features" class="sidebar-link active">Core Features</a>
                <a href="#advanced-tools" class="sidebar-link">Advanced Tools</a>
                <a href="#integrations" class="sidebar-link">Integrations</a>
                <a href="#compliance" class="sidebar-link">Compliance & Security</a>
                <a href="#reporting" class="sidebar-link">Reporting & Analytics</a>
                <a href="#automation" class="sidebar-link">Automation</a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="features-content">
        <!-- Core Features -->
        <section id="core-features" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Core Features</h2>
                <p class="category-description">Essential tools to manage your day-to-day financial operations with ease and efficiency.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3 class="feature-title">Invoicing & Billing</h3>
                    <p class="feature-description">Create professional invoices in seconds with customizable templates. Automate recurring billing, send payment reminders, and accept online payments. Track invoice status in real-time and get paid faster with integrated payment processing.</p>
                    <a href="{{ route('for-business.feature', 'invoicing') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📋</div>
                    <h3 class="feature-title">Expense Management</h3>
                    <p class="feature-description">Track and categorize all business expenses effortlessly. Capture receipts with mobile app, automatically match transactions, and manage employee reimbursements. Get complete visibility into where your money goes with detailed expense reports.</p>
                    <a href="{{ route('for-business.feature', 'expense-management') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3 class="feature-title">Financial Reporting</h3>
                    <p class="feature-description">Generate comprehensive financial reports including profit & loss, balance sheets, and cash flow statements. Customize reports to match your needs and schedule automatic delivery. Make data-driven decisions with real-time financial insights.</p>
                    <a href="{{ route('for-business.feature', 'financial-reporting') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🏦</div>
                    <h3 class="feature-title">Bank Reconciliation</h3>
                    <p class="feature-description">Connect your bank accounts and automatically import transactions. Match transactions with invoices and expenses in one click. Identify discrepancies quickly and maintain accurate financial records with automated reconciliation.</p>
                    <a href="{{ route('for-business.feature', 'bank-reconciliation') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Advanced Tools -->
        <section id="advanced-tools" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Advanced Tools</h2>
                <p class="category-description">Powerful features for growing businesses that need more sophisticated financial management capabilities.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🏢</div>
                    <h3 class="feature-title">Multi-Tenant SaaS</h3>
                    <p class="feature-description">Manage multiple clients or business entities from a single dashboard. Separate data, permissions, and billing for each tenant. Perfect for accounting firms, franchises, and businesses with multiple locations or subsidiaries.</p>
                    <a href="{{ route('for-business.feature', 'multi-tenant') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">💳</div>
                    <h3 class="feature-title">Payment Processing</h3>
                    <p class="feature-description">Accept credit cards, ACH transfers, and digital wallets directly through your invoices. Reduce payment friction with one-click checkout. Automatic payment reconciliation and lower transaction fees with integrated processing.</p>
                    <a href="{{ route('for-business.feature', 'payment-processing') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3 class="feature-title">Budget Management</h3>
                    <p class="feature-description">Create detailed budgets by department, project, or category. Track actual spending against budgets in real-time. Receive alerts when approaching budget limits and make adjustments on the fly to stay on track.</p>
                    <a href="{{ route('for-business.feature', 'budget-management') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3 class="feature-title">Team Collaboration</h3>
                    <p class="feature-description">Invite team members with role-based access controls. Collaborate on invoices, expenses, and reports. Track changes with audit logs and streamline approval workflows for better financial governance.</p>
                    <a href="{{ route('for-business.feature', 'team-collaboration') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Integrations -->
        <section id="integrations" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Integrations</h2>
                <p class="category-description">Connect FinanceFlow with your favorite business tools for seamless data flow and enhanced productivity.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔗</div>
                    <h3 class="feature-title">Banking Integrations</h3>
                    <p class="feature-description">Connect with over 10,000 banks worldwide for automatic transaction imports. Real-time balance updates and secure bank-level encryption. Support for multiple accounts and currencies for international businesses.</p>
                    <a href="{{ route('for-business.feature', 'banking-integrations') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🛒</div>
                    <h3 class="feature-title">E-commerce Integration</h3>
                    <p class="feature-description">Sync with Shopify, WooCommerce, and other e-commerce platforms. Automatically create invoices from orders and track inventory. Reconcile online sales with your accounting in real-time.</p>
                    <a href="{{ route('for-business.feature', 'ecommerce-integration') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📧</div>
                    <h3 class="feature-title">CRM Integration</h3>
                    <p class="feature-description">Connect with Salesforce, HubSpot, and popular CRM systems. Sync customer data automatically and create invoices from CRM deals. Track payment history alongside customer interactions for better relationships.</p>
                    <a href="{{ route('for-business.feature', 'crm-integration') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">⚙️</div>
                    <h3 class="feature-title">API & Webhooks</h3>
                    <p class="feature-description">Build custom integrations with our RESTful API. Receive real-time notifications via webhooks for important events. Comprehensive documentation and developer support for seamless integration.</p>
                    <a href="{{ route('for-business.feature', 'api-webhooks') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Compliance & Security -->
        <section id="compliance" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Compliance & Security</h2>
                <p class="category-description">Enterprise-grade security and compliance features to protect your financial data and meet regulatory requirements.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3 class="feature-title">Bank-Level Security</h3>
                    <p class="feature-description">256-bit SSL encryption for all data transmission. SOC 2 Type II certified infrastructure with regular security audits. Multi-factor authentication and IP whitelisting for enhanced protection.</p>
                    <a href="{{ route('for-business.feature', 'security') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📜</div>
                    <h3 class="feature-title">Tax Compliance</h3>
                    <p class="feature-description">Automatic tax calculations for multiple jurisdictions. Generate tax-ready reports for easy filing. Stay compliant with changing tax regulations with automatic updates and notifications.</p>
                    <a href="{{ route('for-business.feature', 'tax-compliance') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🔐</div>
                    <h3 class="feature-title">Access Controls</h3>
                    <p class="feature-description">Granular role-based permissions for team members. Control who can view, edit, or approve financial transactions. Complete audit trail of all user actions for accountability and compliance.</p>
                    <a href="{{ route('for-business.feature', 'access-controls') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">💾</div>
                    <h3 class="feature-title">Data Backup & Recovery</h3>
                    <p class="feature-description">Automatic daily backups with 99.9% uptime guarantee. Point-in-time recovery for data restoration. Geo-redundant storage across multiple data centers for maximum reliability.</p>
                    <a href="{{ route('for-business.feature', 'data-backup') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Reporting & Analytics -->
        <section id="reporting" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Reporting & Analytics</h2>
                <p class="category-description">Gain deep insights into your business performance with powerful reporting and analytics tools.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3 class="feature-title">Custom Dashboards</h3>
                    <p class="feature-description">Create personalized dashboards with drag-and-drop widgets. Monitor key metrics at a glance with real-time data visualization. Share dashboards with stakeholders for transparent financial reporting.</p>
                    <a href="{{ route('for-business.feature', 'custom-dashboards') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3 class="feature-title">Forecasting & Projections</h3>
                    <p class="feature-description">Predict future cash flow based on historical data and trends. Create multiple scenarios for better planning. AI-powered insights help you make informed business decisions.</p>
                    <a href="{{ route('for-business.feature', 'forecasting') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3 class="feature-title">KPI Tracking</h3>
                    <p class="feature-description">Define and track custom KPIs relevant to your business. Set goals and monitor progress with visual indicators. Receive alerts when metrics deviate from targets.</p>
                    <a href="{{ route('for-business.feature', 'kpi-tracking') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📑</div>
                    <h3 class="feature-title">Report Scheduling</h3>
                    <p class="feature-description">Schedule automatic report generation and delivery via email. Choose from daily, weekly, or monthly frequencies. Customize report formats and recipients for different stakeholders.</p>
                    <a href="{{ route('for-business.feature', 'report-scheduling') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Automation -->
        <section id="automation" class="feature-category">
            <div class="category-header">
                <h2 class="category-title">Automation</h2>
                <p class="category-description">Save time and reduce errors with intelligent automation features that handle repetitive tasks.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3 class="feature-title">Smart Categorization</h3>
                    <p class="feature-description">AI-powered transaction categorization learns from your patterns. Automatically assign categories to expenses and income. Review and approve suggestions with one click for faster bookkeeping.</p>
                    <a href="{{ route('for-business.feature', 'smart-categorization') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🔄</div>
                    <h3 class="feature-title">Recurring Transactions</h3>
                    <p class="feature-description">Set up recurring invoices, bills, and expenses once. Automatic generation and sending based on your schedule. Manage subscriptions and regular payments effortlessly.</p>
                    <a href="{{ route('for-business.feature', 'recurring-transactions') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📬</div>
                    <h3 class="feature-title">Payment Reminders</h3>
                    <p class="feature-description">Automatically send payment reminders to customers before and after due dates. Customize reminder templates and schedules. Reduce late payments and improve cash flow with automated follow-ups.</p>
                    <a href="{{ route('for-business.feature', 'payment-reminders') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3 class="feature-title">Approval Workflows</h3>
                    <p class="feature-description">Create multi-level approval workflows for expenses and invoices. Route transactions to appropriate approvers automatically. Track approval status and send reminders to pending approvers.</p>
                    <a href="{{ route('for-business.feature', 'approval-workflows') }}" class="feature-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%);">
    <div class="container text-center">
        <h2 class="mb-4" style="font-size: 2rem; font-weight: 700; color: #111827;">Ready to Transform Your Business?</h2>
        <p class="mb-4" style="font-size: 1.125rem; color: #6B7280; max-width: 600px; margin: 0 auto 2rem;">Start your free 14-day trial today. No credit card required.</p>
        <a href="#" class="btn btn-lg" style="background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%); color: white; padding: 1rem 2.5rem; font-weight: 600; border-radius: 8px; text-decoration: none; display: inline-block;">Start Free Trial</a>
    </div>
</section>

<script>
    // Smooth scrolling for sidebar links
    document.querySelectorAll('.sidebar-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offset = 100;
                const targetPosition = targetSection.offsetTop - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update active state
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });

    // Update active link on scroll
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('.feature-category');
        const scrollPosition = window.scrollY + 150;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.sidebar-link').forEach(link => {
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
