@extends('layouts.app')

@section('title', 'Expense Management - FinanceFlow')

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
            <div class="hero-icon">📋</div>
            <h1 class="hero-title">Expense Management</h1>
            <p class="hero-description">Track every business expense effortlessly with receipt capture, automatic categorization, and comprehensive reporting. Gain complete visibility into your spending.</p>
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
        <h2 class="section-title">Complete Expense Visibility</h2>
        <p class="section-text">
            Managing business expenses shouldn't be complicated. FinanceFlow's expense management system gives you complete control over your spending with tools designed to save time and reduce errors. Capture receipts on the go with our mobile app, automatically categorize transactions, and generate detailed expense reports in seconds.
        </p>
        <p class="section-text">
            Whether you're tracking office supplies, travel expenses, or vendor payments, our system ensures every dollar is accounted for. Set spending limits, manage employee reimbursements, and gain insights into spending patterns to make better financial decisions.
        </p>
    </section>

    <!-- Key Benefits -->
    <section class="content-section">
        <h2 class="section-title">Key Benefits</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">📸</div>
                <h3 class="benefit-title">Receipt Capture</h3>
                <p class="benefit-text">Snap photos of receipts with your phone and automatically extract key information. Never lose a receipt again with cloud storage.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">🤖</div>
                <h3 class="benefit-title">Smart Categorization</h3>
                <p class="benefit-text">AI-powered categorization learns from your patterns and automatically assigns expenses to the right categories, saving hours of manual work.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">💳</div>
                <h3 class="benefit-title">Bank Sync</h3>
                <p class="benefit-text">Connect your bank accounts and credit cards to automatically import transactions. Match receipts with transactions in one click.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">👥</div>
                <h3 class="benefit-title">Employee Reimbursements</h3>
                <p class="benefit-text">Streamline employee expense submissions and approvals. Track reimbursement status and process payments faster.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📊</div>
                <h3 class="benefit-title">Spending Insights</h3>
                <p class="benefit-text">Visualize spending patterns by category, vendor, or time period. Identify cost-saving opportunities with detailed analytics.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">🔔</div>
                <h3 class="benefit-title">Budget Alerts</h3>
                <p class="benefit-text">Set spending limits by category or department. Receive alerts when approaching or exceeding budget thresholds.</p>
            </div>
        </div>
    </section>

    <!-- Features List -->
    <section class="content-section">
        <h2 class="section-title">Powerful Features</h2>
        <ul class="features-list">
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Mobile Receipt Scanning:</strong> Capture receipts instantly with OCR technology that extracts date, amount, vendor, and category information automatically.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Mileage Tracking:</strong> Track business mileage automatically with GPS. Calculate reimbursements based on IRS rates or custom rates.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Multi-Currency Support:</strong> Track expenses in multiple currencies with automatic conversion. Perfect for international businesses and travel expenses.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Approval Workflows:</strong> Create custom approval chains for expense submissions. Route expenses to appropriate managers based on amount or category.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Vendor Management:</strong> Track spending by vendor and maintain vendor contact information. Identify your top vendors and negotiate better rates.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Project Expense Tracking:</strong> Assign expenses to specific projects or clients. Track project profitability by comparing expenses against revenue.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Tax Deduction Tracking:</strong> Mark expenses as tax-deductible and generate reports for tax filing. Maximize deductions with proper categorization.
                </div>
            </li>
            <li>
                <div class="feature-check">✓</div>
                <div class="feature-text">
                    <strong>Expense Reports:</strong> Generate detailed expense reports by date range, category, employee, or project. Export to PDF or Excel for sharing.
                </div>
            </li>
        </ul>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2 class="cta-title">Take Control of Your Expenses</h2>
        <p class="cta-text">Start tracking expenses more efficiently with our 14-day free trial. No credit card required.</p>
        <div class="cta-buttons">
            <a href="#" class="btn-primary-custom">Start Free Trial</a>
            <a href="{{ route('for-business') }}" class="btn-secondary-custom">Explore More Features</a>
        </div>
    </section>
</div>
@endsection
