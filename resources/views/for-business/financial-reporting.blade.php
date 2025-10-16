@extends('layouts.app')

@section('title', 'Financial Reporting - FinanceFlow')

@section('content')
<style>
    .feature-detail-hero {
        background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
        color: white;
        padding: 5rem 0 4rem;
    }

    .hero-content {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .hero-icon {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        margin: 0 auto 2rem;
        backdrop-filter: blur(10px);
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .hero-description {
        font-size: 1.25rem;
        opacity: 0.95;
        line-height: 1.7;
    }

    .feature-content {
        max-width: 1000px;
        margin: 4rem auto;
        padding: 0 2rem;
    }

    .content-section {
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1.5rem;
    }

    .section-text {
        font-size: 1.125rem;
        color: #6B7280;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .benefit-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #E5E7EB;
    }

    .benefit-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #1E40AF 0%, #059669 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .benefit-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.75rem;
    }

    .benefit-text {
        font-size: 1rem;
        color: #6B7280;
        line-height: 1.6;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin: 2rem 0;
    }

    .features-list li {
        padding: 1rem 0;
        border-bottom: 1px solid #E5E7EB;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .features-list li:last-child {
        border-bottom: none;
    }

    .feature-check {
        width: 24px;
        height: 24px;
        background: #059669;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }

    .feature-text {
        flex: 1;
    }

    .feature-text strong {
        color: #111827;
        font-weight: 600;
    }

    .cta-section {
        background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%);
        border-radius: 16px;
        padding: 3rem;
        text-align: center;
        margin: 4rem 0;
    }

    .cta-title {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1rem;
    }

    .cta-text {
        font-size: 1.125rem;
        color: #6B7280;
        margin-bottom: 2rem;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(30, 64, 175, 0.3);
        color: white;
    }

    .btn-secondary-custom {
        background: white;
        color: #1E40AF;
        padding: 1rem 2.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        border: 2px solid #1E40AF;
        transition: all 0.3s ease;
    }

    .btn-secondary-custom:hover {
        background: #1E40AF;
        color: white;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #1E40AF;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        gap: 0.75rem;
        color: #059669;
    }

    @media (max-width: 767px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-description {
            font-size: 1rem;
        }

        .feature-content {
            padding: 0 1rem;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .benefits-grid {
            grid-template-columns: 1fr;
        }

        .cta-buttons {
            flex-direction: column;
        }
    }
</style>

<!-- Hero Section -->
<section class="feature-detail-hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-icon">📈</div>
            <h1 class="hero-title">Financial Reporting</h1>
            <p class="hero-description">Generate comprehensive financial reports with real-time data. Make informed decisions with profit & loss statements, balance sheets, cash flow reports, and custom analytics.</p>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="feature-content">
    <a href="{{ route('for-business') }}" class="back-link">
        <i class="bi bi-arrow-left"></i> Back to all features
    </a>

    <!-- Overview Section -->
    <section class="content-section">
        <h2 class="section-title">Data-Driven Decision Making</h2>
        <p class="section-text">
            Understanding your business's financial health is crucial for growth and success. FinanceFlow's reporting engine provides real-time insights into your financial performance with professional-grade reports that are easy to understand and share. From standard financial statements to custom reports tailored to your specific needs, you'll have all the data you need at your fingertips.
        </p>
        <p class="section-text">
            Our reporting system automatically pulls data from all your transactions, invoices, and expenses to generate accurate, up-to-date reports. Schedule automatic report delivery, compare periods, and drill down into details to understand the story behind the numbers.
        </p>
    </section>

    <!-- Key Benefits -->
    <section class="content-section">
        <h2 class="section-title">Key Benefits</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">⚡</div>
                <h3 class="benefit-title">Real-Time Data</h3>
                <p class="benefit-text">All reports reflect your current financial position with real-time data. No waiting for month-end closes to understand your business performance.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📊</div>
                <h3 class="benefit-title">Standard Reports</h3>
                <p class="benefit-text">Access all essential financial reports including P&L, balance sheet, cash flow statement, and more. GAAP-compliant and ready for stakeholders.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">🎨</div>
                <h3 class="benefit-title">Custom Reports</h3>
                <p class="benefit-text">Build custom reports tailored to your business needs. Choose metrics, filters, and visualizations that matter most to you.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📅</div>
                <h3 class="benefit-title">Period Comparison</h3>
                <p class="benefit-text">Compare performance across different time periods. Identify trends, seasonal patterns, and growth opportunities with side-by-side comparisons.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📧</div>
                <h3 class="benefit-title">Scheduled Delivery</h3>
                <p class="benefit-text">Schedule reports to be automatically generated and emailed to stakeholders. Daily, weekly, or monthly delivery options available.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📱</div>
                <h3 class="benefit-title">Export Options</h3>
                <p class="benefit-text">Export reports to PDF, Excel, or CSV formats. Share with accountants, investors, or import into other systems easily.</p>
            </div>
        </div>
    </section>

    <!-- Features List -->
    <section class="content-section">
        <h2 class="section-title">Comprehensive Reporting Suite</h2>
        <ul class="features-list">
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Profit & Loss Statement:</strong> Track revenue, expenses, and profitability over any time period. Compare against budgets and previous periods.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Balance Sheet:</strong> View your assets, liabilities, and equity at any point in time. Understand your financial position and net worth.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Cash Flow Statement:</strong> Track cash inflows and outflows from operating, investing, and financing activities. Ensure healthy cash flow.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Accounts Receivable Aging:</strong> See which invoices are outstanding and how long they've been unpaid. Prioritize collection efforts effectively.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Accounts Payable Aging:</strong> Track bills and payments owed to vendors. Manage cash flow by understanding upcoming payment obligations.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Sales Reports:</strong> Analyze sales by product, customer, region, or time period. Identify top performers and growth opportunities.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Expense Reports:</strong> Break down expenses by category, vendor, or project. Identify cost-saving opportunities and track spending trends.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Budget vs. Actual:</strong> Compare actual performance against budgets. Identify variances and adjust plans accordingly.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Tax Reports:</strong> Generate tax-ready reports for filing. Track deductible expenses and prepare for tax season with confidence.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Custom Dashboards:</strong> Create visual dashboards with charts and graphs. Monitor KPIs at a glance with real-time data visualization.
                </div>
            </li>
        </ul>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2 class="cta-title">Get Better Financial Insights</h2>
        <p class="cta-text">Start making data-driven decisions with our 14-day free trial. No credit card required.</p>
        <div class="cta-buttons">
            <a href="#" class="btn-primary-custom">Start Free Trial</a>
            <a href="{{ route('for-business') }}" class="btn-secondary-custom">Explore More Features</a>
        </div>
    </section>
</div>
@endsection
