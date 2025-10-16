# Corporate Finance Management System (CFMS)

**Project Overview**  
The Corporate Finance Management System (CFMS) is an enterprise-grade web application built to manage financial operations of businesses, from small companies to large corporations. The system acts as a digital CFO, handling transactions, reporting, compliance, risk management, payroll, and more.

CFMS is built with **Laravel 12**, **PostgreSQL**, and runs in a **Dockerized environment using Laravel Sail** for easy setup and cross-platform consistency.

---

## **Key Features**

### Core Financial Management
- General Ledger (GL): central record of all transactions.
- Chart of Accounts: flexible setup for assets, liabilities, income, and expenses.
- Accounts Payable (AP): manage vendor bills, due dates, and payments.
- Accounts Receivable (AR): manage invoices, collections, and overdue alerts.

### Cash & Liquidity Management
- Real-time cash position across bank accounts, mobile money, and petty cash.
- Cash flow forecasting and bank reconciliation.

### Budgeting & Forecasting
- Annual/monthly budgets per department.
- Scenario planning and variance analysis.

### Payroll & HR Integration
- Salary calculations, deductions, tax compliance.
- Employee expense claims and reimbursements.
- Integration with attendance/HR systems.

### Tax & Compliance
- Automatic VAT/GST calculations per country.
- Withholding tax management.
- IFRS & GAAP compliance.
- Tax-ready reporting for government authorities.

### Financial Reporting & Analytics
- Profit & Loss, Balance Sheet, and Cash Flow Statements.
- KPI dashboards and drill-down analytics.

### Security & Audit Trails
- Role-based access (Admin, Accountant, Auditor, Manager, Employee).
- Activity logging with approval workflows.
- CSRF protection and HTTPS enforced.

### Multi-Company & Multi-Currency Support
- Parent company + subsidiaries.
- Consolidated reporting across branches.
- Real-time currency conversion (USD, UGX, KES, TZS).

### APIs & Integrations
- Bank and payment gateway integrations (MTN MoMo, PayPal, Stripe).
- ERP/CRM API connections.
- Automated invoicing and reminders.

### Future-Ready / AI Features
- Fraud detection and AI-based expense prediction.
- Chatbots for finance queries.

---

## **Project Status**

- **MVP (by 27 November)**: ~35% complete  
  - User authentication & roles  
  - Admin & Accountant dashboards  
  - General Ledger, Chart of Accounts, AP & AR  
  - Basic financial reports (P&L, Balance Sheet)

- **Extended Features (by 1st week of January)**: ~65–70% complete  
  - Budgeting & forecasting  
  - Cash & liquidity management  
  - Payroll integration (basic)  
  - Audit logs & export/import features  

- **Enterprise-level completion**: Post-Jan 2026  
  - Multi-company consolidation, AI features, advanced treasury & investments, full security hardening.

---

## **Tech Stack**

- **Backend:** PHP 8.4+, Laravel 12  
- **Frontend:** Blade + Bootstrap,HTML,CSS,Javascript
- **Database:** PostgreSQL database and redis database 
- **Dev Environment:** Docker, Laravel Sail  

---

## **Core Packages**

- `laravel/breeze` or `laravel/jetstream` → Authentication scaffolding  
- `spatie/laravel-permission` → Role-based access  
- `maatwebsite/excel` → Excel import/export  
- `barryvdh/laravel-dompdf` → PDF reports  
- `larapex-charts` → Charts & dashboard visuals  
- `spatie/laravel-activitylog` → Audit logging  
- `laravel/sanctum` → API authentication  
- `guzzlehttp/guzzle` → External API calls  

### Security / Enterprise Add-ons
- Rate limiting (ThrottleRequests middleware)  
- Encryption (Laravel Crypt + PostgreSQL `pgcrypto`)  
- Error monitoring: `sentry/sentry-laravel`  
- Development debugging: `laravel/telescope`  
- Backups: `spatie/laravel-backup`  
- Database migration safety: `doctrine/dbal`  

---
  ## Enterprise-Ready Folder structure

cfms_laravel/
├── app/
│   ├── Console/
│   │   └── Commands/          # Artisan commands for cron jobs, automated tasks
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/          # Authentication controllers
│   │   │   ├── Dashboard/     # Admin & Accountant dashboards
│   │   │   ├── GL/            # General Ledger controllers
│   │   │   ├── AP/            # Accounts Payable
│   │   │   ├── AR/            # Accounts Receivable
│   │   │   ├── Payroll/       # Payroll & HR
│   │   │   └── Reports/       # Financial reports controllers
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Jobs/                  # Redis queued jobs (e.g., reports, notifications)
│   ├── Models/
│   │   ├── GL/
│   │   ├── AP/
│   │   ├── AR/
│   │   ├── Payroll/
│   │   └── User.php
│   ├── Policies/
│   └── Services/              # Business logic (e.g., PaymentService, BankIntegrationService)
├── bootstrap/
├── config/
│   ├── database.php            # PostgreSQL & Redis configs
│   ├── cache.php               # Redis caching
│   ├── queue.php               # Redis queue connection
│   └── services.php            # API keys, Payment gateways
├── database/
│   ├── factories/
│   ├── migrations/             # PostgreSQL table structures
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/
│       ├── dashboards/
│       ├── gl/
│       ├── ap/
│       ├── ar/
│       ├── payroll/
│       └── reports/
├── routes/
│   ├── web.php
│   └── api.php                 # Token-based API routes
├── storage/
│   ├── logs/
│   ├── app/
│   └── framework/
├── tests/
│   ├── Feature/
│   └── Unit/
├── vendor/
├── docker-compose.yml           # Includes PostgreSQL, Redis, and services
├── .env
└── README.md

