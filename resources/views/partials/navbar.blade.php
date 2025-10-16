<!-- Enhanced Promotional Banner - QuickBooks Style -->
<div class="promo-banner animate-slide-down" id="promoBanner">
    <div class="promo-content">
        <div class="promo-text animate-pulse">
            <span class="promo-icon animate-bounce">🎉</span>
            <strong class="promo-main">BIG SOLUTIONS. SMALL PRICES.</strong>
            <span class="promo-highlight animate-glow">90% off</span>
            <span class="promo-product">FinanceFlow for 3 months*</span>
            <a href="#" class="promo-cta animate-pulse">Start Free Trial Now</a>
        </div>
        <div class="promo-disclaimer">*For a limited time. Terms apply.</div>
    </div>
    <button class="promo-close" onclick="closeBanner()" aria-label="Close promotional banner">
        <span class="close-icon">×</span>
    </button>
</div>

<!-- Header - Zoho Books Style -->
<header class="header">
    <div class="container">
        <nav class="nav">
            <a href="#" class="logo">
                FinanceFlow
                <span class="logo-subtitle">PRO</span>
            </a>
            
            <div class="nav-menu">
                <div class="nav-item has-mega-menu" data-menu="business">
                    <a href="#" class="nav-link animate-hover">
                        <span>For Business</span>
                        <span class="nav-arrow">▼</span>
                    </a>
                    <div class="mega-menu" id="business-menu">
                        <div class="mega-menu-content">
                            <div class="mega-section">
                                <h4 class="mega-title">Core Features</h4>
                                <div class="mega-items">
                                    <a href="{{ route('forbusiness.invoicing') }}" class="mega-item">
                                        <div class="mega-icon">💰</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Invoicing & Billing</div>
                                            <div class="mega-desc">Professional invoices and automated billing</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('forbusiness.expenses') }}" class="mega-item">
                                        <div class="mega-icon">📋</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Expense Management</div>
                                            <div class="mega-desc">Track and categorize business expenses</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('forbusiness.reporting') }}" class="mega-item">
                                        <div class="mega-icon">📈</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Financial Reporting</div>
                                            <div class="mega-desc">Comprehensive financial insights</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-section">
                                <h4 class="mega-title">Advanced Tools</h4>
                                <div class="mega-items">
                                    <a href="{{ route('forbusiness.multitenant') }}" class="mega-item">
                                        <div class="mega-icon">🏢</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Multi-Tenant SaaS</div>
                                            <div class="mega-desc">Serve multiple clients efficiently</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('forbusiness.payment') }}" class="mega-item">
                                        <div class="mega-icon">💳</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Payment Processing</div>
                                            <div class="mega-desc">Accept payments seamlessly</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('forbusiness.security') }}" class="mega-item">
                                        <div class="mega-icon">🔒</div>
                                        <div class="mega-info">
                                            <div class="mega-name">Bank-Level Security</div>
                                            <div class="mega-desc">Enterprise-grade protection</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-promo">
                                <div class="promo-card animate-pulse">
                                    <h5>Start Your Free Trial</h5>
                                    <p>Experience all features for 14 days</p>
                                    <a href="#" class="promo-btn">Try Free Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="mega-footer">
                            <a href="{{ route('forbusiness.index') }}" class="see-all-link">
                                <span>See All Business Features</span>
                                <i class="bi bi-arrow-right arrow-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="nav-item">
                    <a href="{{ route('pricing') }}" class="nav-link animate-hover">Pricing</a>
                </div>
                
                <div class="nav-item has-dropdown">
                    <a href="#" class="nav-link animate-hover">
                        <span>Resources</span>
                        <span class="nav-arrow">▼</span>
                    </a>
                    <div class="dropdown enhanced-dropdown">
                        <div class="dropdown-content">
                            <div class="dropdown-section">
                                <div class="dropdown-title">Learn & Grow</div>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">📖</span>
                                    <span>Documentation</span>
                                </a>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">🎥</span>
                                    <span>Video Tutorials</span>
                                </a>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">💻</span>
                                    <span>Webinars</span>
                                </a>
                            </div>
                            <div class="dropdown-section">
                                <div class="dropdown-title">Get Support</div>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">❓</span>
                                    <span>Help Center</span>
                                </a>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">💬</span>
                                    <span>Live Chat</span>
                                </a>
                                <a href="#" class="dropdown-item enhanced-item">
                                    <span class="item-icon">👥</span>
                                    <span>Community</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link animate-hover">About</a>
                </div>
            </div>
            
            <div class="auth-buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-signup">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-signin">Sign In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-signup">Start Free Trial</a>
                        @endif
                    @endauth
                @else
                    <a href="#" class="btn-signin">Sign In</a>
                    <a href="#" class="btn-signup">Start Free Trial</a>
                @endif
            </div>
        </nav>
    </div>
</header>

<style>
    :root {
        /* Primary Brand Colors */
        --primary-color: #1E40AF;        /* Deep Blue */
        --secondary-color: #059669;      /* Emerald Green */
        
        /* Neutral Colors */
        --background: #FFFFFF;           /* White */
        --surface: #F3F4F6;             /* Light Gray */
        --text-primary: #111827;         /* Dark Gray */
        --text-secondary: #6B7280;       /* Medium Gray */
        --text-light: #9CA3AF;          /* Light Gray Text */
        --border-light: #E5E7EB;         /* Border Color */
        
        /* Accent Colors (use sparingly) */
        --accent-warning: #F59E0B;       /* Amber - warnings only */
        --accent-error: #DC2626;         /* Red - errors only */
        
        /* Gradients */
        --gradient-primary: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
        --gradient-secondary: linear-gradient(135deg, #059669 0%, #047857 100%);
        
        /* Legacy compatibility (will be phased out) */
        --quickbooks-green: #059669;
        --success-color: #059669;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        line-height: 1.6;
        color: var(--text-primary);
        background: var(--background);
        overflow-x: hidden;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    /* Enhanced Promotional Banner - QuickBooks Style */
    .promo-banner {
        background: var(--gradient-secondary);
        color: white;
        padding: 0.3rem 1rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(5, 150, 105, 0.2);
    }
    
    .promo-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
        animation: shimmer 3s infinite;
    }
    
    @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    
    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    .animate-slide-down {
        animation: slideDown 0.8s ease-out;
    }
    
    .promo-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        position: relative;
        z-index: 2;
    }
    
    .promo-text {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
        justify-content: center;
        font-size: 0.95rem;
    }
    
    .promo-icon {
        font-size: 1.2rem;
        display: inline-block;
    }
    
    .promo-main {
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 0.5px;
    }
    
    .promo-highlight {
        background: rgba(255, 255, 255, 0.25);
        padding: 0.375rem 0.75rem;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    
    .promo-product {
        font-weight: 500;
        opacity: 0.95;
    }
    
    .promo-cta {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.875rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    
    .promo-cta:hover {
        background: rgba(255, 255, 255, 0.25);
        color: white;
        transform: translateY(-1px);
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
    }
    
    .promo-disclaimer {
        font-size: 0.75rem;
        opacity: 0.8;
        font-style: italic;
    }
    
    .promo-close {
        position: absolute;
        right: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .promo-close:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 2px 10px rgba(255, 255, 255, 0.2);
    }
    
    .close-icon {
        font-size: 1.2rem;
        font-weight: bold;
    }
    
    /* Header Styles - Enhanced with QuickBooks elements */
    .header {
        background: var(--background);
        border-bottom: 1px solid var(--border-light);
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        position: relative;
    }
    
    .logo {
        font-family: 'Inter', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary-color);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        position: relative;
    }
    
    .logo::before {
        content: '🏦';
        font-size: 2rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        filter: drop-shadow(0 2px 4px rgba(27, 95, 255, 0.2));
    }
    
    .logo-subtitle {
        font-size: 0.6rem;
        color: var(--secondary-color);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        position: absolute;
        top: -8px;
        right: -35px;
        background: var(--secondary-color);
        color: white;
        padding: 1px 4px;
        border-radius: 3px;
    }
    
    .nav-menu {
        display: flex;
        align-items: center;
        gap: 0;
    }
    
    .nav-item {
        position: relative;
    }
    
    .nav-link {
        color: var(--text-primary);
        text-decoration: none;
        padding: 1rem 1.25rem;
        font-weight: 500;
        font-size: clamp(0.85rem, 2vw, 1rem);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border-radius: 8px;
        position: relative;
    }
    
    .nav-link:hover {
        color: var(--primary-color);
        background: rgba(30, 64, 175, 0.05);
    }
    
    .nav-arrow {
        font-size: 0.7rem;
        transition: transform 0.3s ease;
        color: var(--text-secondary);
    }
    
    .nav-item:hover .nav-arrow {
        transform: rotate(180deg);
        color: var(--primary-color);
    }
    
    .animate-hover {
        position: relative;
    }
    
    .animate-hover::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .animate-hover:hover::before {
        width: 80%;
    }
    
    /* Dropdown Styles */
    .dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 280px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        border-radius: 8px;
        border: 1px solid var(--border-light);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1001;
    }
    
    .nav-item:hover .dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .dropdown-content {
        padding: 1rem 0;
    }
    
    .dropdown-section {
        margin-bottom: 1rem;
    }
    
    .dropdown-section:last-child {
        margin-bottom: 0;
    }
    
    .dropdown-title {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-light);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 0 1.25rem;
        margin-bottom: 0.5rem;
    }
    
    .dropdown-item {
        display: block;
        padding: 0.625rem 1.25rem;
        color: var(--text-primary);
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }
    
    .dropdown-item:hover {
        background: var(--surface);
        color: var(--primary-color);
    }
    
    /* Enhanced Dropdown Items */
    .enhanced-item {
        display: flex !important;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 1.25rem !important;
        transition: all 0.3s ease;
    }
    
    .enhanced-item:hover {
        background: var(--surface);
        color: var(--primary-color);
        transform: translateX(4px);
    }
    
    .item-icon {
        font-size: 1.1rem;
        opacity: 0.8;
    }
    
    /* Mega Menu Styles */
    .mega-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 800px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        border-radius: 12px;
        border: 1px solid var(--border-light);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transition: all 0.4s ease;
        z-index: 1001;
    }
    
    .has-mega-menu:hover .mega-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .mega-menu-content {
        display: grid;
        grid-template-columns: 1fr 1fr auto;
        gap: 2rem;
        padding: 2rem;
    }
    
    .mega-section {
        min-width: 280px;
    }
    
    .mega-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--surface);
    }
    
    .mega-items {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .mega-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    
    .mega-item:hover {
        background: var(--surface);
        border-color: var(--secondary-color);
        transform: translateX(4px);
    }
    
    .mega-icon {
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--surface);
        border-radius: 8px;
        flex-shrink: 0;
    }
    
    .mega-item:hover .mega-icon {
        background: var(--secondary-color);
        transform: scale(1.1);
    }
    
    .mega-info {
        flex: 1;
    }
    
    .mega-name {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.25rem;
    }
    
    .mega-desc {
        font-size: 0.875rem;
        color: var(--text-secondary);
        line-height: 1.4;
    }
    
    .mega-promo {
        background: var(--gradient-primary);
        border-radius: 12px;
        padding: 1.5rem;
        color: white;
        min-width: 200px;
        align-self: start;
    }
    
    .promo-card h5 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .promo-card p {
        font-size: 0.875rem;
        opacity: 0.9;
        margin-bottom: 1.5rem;
        line-height: 1.4;
    }
    
    .promo-btn {
        background: white;
        color: var(--primary-color);
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.875rem;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .promo-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
        color: var(--primary-color);
    }
    
    .auth-buttons {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .btn-signin {
        color: var(--text-primary);
        text-decoration: none;
        padding: 0.625rem 1.25rem;
        font-weight: 500;
        font-size: 0.95rem;
        border-radius: 6px;
        transition: all 0.2s ease;
    }
    
    .btn-signin:hover {
        background: var(--surface);
        color: var(--primary-color);
    }
    
    .btn-signup {
        background: var(--gradient-primary);
        color: white;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        font-size: 0.95rem;
        border-radius: 6px;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(30, 64, 175, 0.2);
    }
    
    .btn-signup:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(30, 64, 175, 0.3);
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }
    
    @keyframes glow {
        0% {
            box-shadow: 0 0 20px rgba(30, 64, 175, 0.3);
        }
        50% {
            box-shadow: 0 0 40px rgba(30, 64, 175, 0.6);
        }
        100% {
            box-shadow: 0 0 20px rgba(30, 64, 175, 0.3);
        }
    }
    
    .animate-pulse {
        animation: pulse 2s infinite;
    }
    
    .animate-bounce {
        animation: bounce 2s infinite;
    }
    
    .animate-glow {
        animation: glow 2s ease-in-out infinite;
    }
    
    /* Mega Menu Footer - See All Features Link */
    .mega-footer {
        border-top: 1px solid var(--border-light);
        padding: 1rem 2rem;
        background: var(--surface);
        border-radius: 0 0 12px 12px;
    }
    
    .see-all-link {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        padding: 0.5rem;
        border-radius: 6px;
    }
    
    .see-all-link:hover {
        background: white;
        color: var(--secondary-color);
    }
    
    .arrow-icon {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }
    
    .see-all-link:hover .arrow-icon {
        transform: translateX(4px);
    }
    
    /* Responsive Design */
    @media (max-width: 991px) {
        .promo-content {
            padding: 0.5rem 1rem;
        }
        
        .promo-text {
            flex-direction: column;
            gap: 0.5rem;
            font-size: 0.9rem;
        }
        
        .nav {
            padding: 0.75rem 0;
        }
        
        .nav-menu {
            display: flex;
            flex-direction: column;
            position: static;
            width: 100%;
            background: var(--background);
            border-top: 1px solid var(--border-light);
            padding-top: 1rem;
            gap: 0.5rem;
        }
        
        .logo {
            font-size: 1.75rem;
        }
        
        .auth-buttons {
            gap: 0.5rem;
        }
        
        .btn-signin, .btn-signup {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }
    
    @media (max-width: 767px) {
        .container {
            padding: 0 15px;
        }
        
        .promo-banner {
            padding: 0.25rem 0.5rem;
        }
        
        .promo-close {
            right: 1rem;
        }
        
        .header {
            position: relative;
        }
        
        .nav {
            padding: 0.5rem 0;
            flex-direction: column;
            align-items: stretch;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .logo-subtitle {
            display: none;
        }
        
        .nav-menu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .nav-item {
            flex: 1;
            min-width: 120px;
        }
        
        .nav-link {
            padding: 1rem 1rem;
            text-align: center;
        }
        
        .auth-buttons {
            justify-content: center;
            margin-top: 1rem;
        }
    }
</style>

<script>
    // Close promotional banner
    function closeBanner() {
        const banner = document.getElementById('promoBanner');
        banner.style.animation = 'slideUp 0.5s ease-out forwards';
        setTimeout(() => {
            banner.style.display = 'none';
        }, 500);
    }
    
    // Add slideUp animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideUp {
            from {
                transform: translateY(0);
                opacity: 1;
            }
            to {
                transform: translateY(-100%);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
</script>
