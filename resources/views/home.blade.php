@extends('layouts.app')


@push('styles')
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
            
            /* Enhanced Hero Section - QuickBooks Style */
            .hero {
                background: var(--gradient-primary);
                color: white;
                padding: 6rem 0 8rem;
                position: relative;
                overflow: hidden;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
            
            .hero-background {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                overflow: hidden;
            }
            
            .hero-shapes {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }
            
            .hero-shape {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.08);
                backdrop-filter: blur(10px);
            }
            
            .hero-shape-1 {
                width: 300px;
                height: 300px;
                top: -150px;
                right: -150px;
                animation-duration: 20s;
            }
            
            .hero-shape-2 {
                width: 200px;
                height: 200px;
                bottom: -100px;
                left: -100px;
                animation-duration: 25s;
                animation-delay: -5s;
            }
            
            .hero-shape-3 {
                width: 150px;
                height: 150px;
                top: 30%;
                right: 10%;
                animation-duration: 30s;
                animation-delay: -10s;
            }
            
            .hero-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 5rem;
                align-items: center;
                position: relative;
                z-index: 2;
                min-height: 600px;
            }
            
            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                padding: 0.75rem 1.25rem;
                border-radius: 25px;
                font-size: 0.875rem;
                font-weight: 500;
                margin-bottom: 2rem;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            
            .badge-icon {
                font-size: 1rem;
            }
            
            .hero-title {
                font-size: 4rem;
                font-weight: 800;
                line-height: 1.1;
                margin-bottom: 2rem;
                display: flex;
                flex-direction: column;
                gap: 0.25rem;
            }
            
            .title-line {
                display: block;
            }
            
            .title-highlight {
                background: linear-gradient(45deg, #fff, rgba(255, 255, 255, 0.8));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                position: relative;
            }
            
            .hero-description {
                font-size: 1.25rem;
                opacity: 0.9;
                margin-bottom: 2.5rem;
                line-height: 1.7;
                max-width: 500px;
            }
            
            .hero-stats {
                display: flex;
                align-items: center;
                gap: 1.5rem;
                margin-bottom: 3rem;
                padding: 1.5rem 0;
            }
            
            .stat-item {
                text-align: center;
            }
            
            .stat-number {
                font-size: 1.75rem;
                font-weight: 700;
                color: white;
            }
            
            .stat-label {
                font-size: 0.875rem;
                opacity: 0.8;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                font-weight: 500;
            }
            
            .stat-divider {
                width: 1px;
                height: 30px;
                background: rgba(255, 255, 255, 0.3);
            }
            
            .hero-buttons {
                display: flex;
                gap: 1.25rem;
                flex-wrap: wrap;
                margin-bottom: 2rem;
            }
            
            .btn-enhanced {
                padding: 1rem 2rem;
                border-radius: 8px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                border: none;
                cursor: pointer;
                font-size: 1rem;
                position: relative;
                overflow: hidden;
            }
            
            .btn-enhanced::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                transition: left 0.5s ease;
            }
            
            .btn-enhanced:hover::before {
                left: 100%;
            }
            
            .btn-primary {
                background: white;
                color: var(--primary-color);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }
            
            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
            }
            
            .btn-secondary {
                background: rgba(255, 255, 255, 0.1);
                color: white;
                border: 2px solid rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(10px);
            }
            
            .btn-secondary:hover {
                background: rgba(255, 255, 255, 0.2);
                border-color: rgba(255, 255, 255, 0.6);
                transform: translateY(-3px);
            }
            
            .btn-arrow {
                transition: transform 0.3s ease;
            }
            
            .btn-enhanced:hover .btn-arrow {
                transform: translateX(4px);
            }
            
            .hero-trust {
                opacity: 0.8;
                font-size: 0.9rem;
            }
            
            .hero-visual {
                position: relative;
                padding: 2rem;
            }
            
            .dashboard-preview-enhanced {
                width: 100%;
                max-width: 600px;
                background: white;
                border-radius: 16px;
                box-shadow: 0 25px 80px rgba(0, 0, 0, 0.15);
                position: relative;
                overflow: hidden;
                margin: 0 auto;
                transform: perspective(1000px) rotateY(-5deg);
                transition: transform 0.3s ease;
            }
            
            .dashboard-preview-enhanced:hover {
                transform: perspective(1000px) rotateY(0deg) scale(1.02);
            }
            
            .dashboard-header {
                background: var(--surface);
                padding: 1rem 1.5rem;
                border-bottom: 1px solid var(--border-light);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .dashboard-nav {
                display: flex;
                gap: 0.5rem;
            }
            
            .nav-dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: #ddd;
                transition: all 0.3s ease;
            }
            
            .nav-dot-active {
                background: var(--secondary-color);
                box-shadow: 0 0 10px rgba(5, 150, 105, 0.5);
            }
            
            .dashboard-title {
                font-size: 1rem;
                font-weight: 600;
                color: var(--text-primary);
            }
            
            .dashboard-content {
                padding: 2rem 1.5rem;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
            }
            
            .dashboard-card {
                background: var(--surface);
                padding: 1.5rem;
                border-radius: 12px;
                border: 1px solid var(--border-light);
            }
            
            .card-title {
                font-size: 0.875rem;
                color: var(--text-secondary);
                margin-bottom: 0.5rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                font-weight: 500;
            }
            
            .card-value {
                font-size: 2rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 0.5rem;
            }
            
            .card-growth {
                font-size: 0.875rem;
                color: var(--secondary-color);
                font-weight: 600;
            }
            
            .dashboard-chart {
                grid-column: 1 / -1;
                background: var(--surface);
                padding: 1.5rem;
                border-radius: 12px;
                border: 1px solid var(--border-light);
                margin-top: 1rem;
            }
            
            .chart-bars {
                display: flex;
                align-items: end;
                gap: 0.5rem;
                height: 100px;
                justify-content: center;
            }
            
            .bar {
                width: 20px;
                background: var(--gradient-secondary);
                border-radius: 4px 4px 0 0;
                animation: barGrow 0.8s ease-out both;
                min-height: 20px;
            }
            
            @keyframes barGrow {
                from { height: 0; }
                to { height: var(--bar-height, 50%); }
            }
            
            .floating-elements {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                pointer-events: none;
            }
            
            .float-card {
                position: absolute;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 1rem 1.25rem;
                border-radius: 12px;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                gap: 0.75rem;
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-primary);
                border: 1px solid rgba(255, 255, 255, 0.5);
            }
            
            .float-card-1 {
                top: 20%;
                right: -10%;
            }
            
            .float-card-2 {
                top: 60%;
                left: -15%;
            }
            
            .float-card-3 {
                bottom: 20%;
                right: -5%;
            }
            
            .float-icon {
                font-size: 1.25rem;
            }
            
            /* Enhanced Features Section - Zoho Books Style */
            .features-enhanced {
                padding: 8rem 0;
                background: var(--background);
                position: relative;
            }
            
            .features-header {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 5rem;
                align-items: center;
                margin-bottom: 6rem;
            }
            
            .features-intro {
                max-width: 500px;
            }
            
            .section-badge {
                display: inline-block;
                background: var(--gradient-secondary);
                color: white;
                padding: 0.5rem 1rem;
                border-radius: 20px;
                font-size: 0.875rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 1.5rem;
            }
            
            .features-intro h2 {
                font-size: 3.25rem;
                font-weight: 800;
                margin-bottom: 1.5rem;
                color: var(--text-primary);
                line-height: 1.1;
            }
            
            .features-intro p {
                font-size: 1.25rem;
                color: var(--text-secondary);
                line-height: 1.7;
            }
            
            .feature-preview {
                position: relative;
                padding: 2rem;
            }
            
            .preview-screen {
                background: white;
                border-radius: 16px;
                box-shadow: 0 25px 80px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                transform: perspective(1000px) rotateY(5deg);
                transition: transform 0.3s ease;
            }
            
            .preview-screen:hover {
                transform: perspective(1000px) rotateY(0deg) scale(1.02);
            }
            
            .screen-header {
                background: var(--surface);
                padding: 1rem 1.5rem;
                border-bottom: 1px solid var(--border-light);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .screen-dots {
                display: flex;
                gap: 0.5rem;
            }
            
            .screen-dots span {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: #ddd;
            }
            
            .screen-dots span:first-child {
                background: #ff5f57;
            }
            
            .screen-dots span:nth-child(2) {
                background: #ffbd2e;
            }
            
            .screen-dots span:last-child {
                background: #28ca42;
            }
            
            .screen-title {
                font-size: 0.95rem;
                font-weight: 600;
                color: var(--text-primary);
            }
            
            .screen-content {
                padding: 1.5rem;
                display: flex;
                gap: 1rem;
            }
            
            .screen-nav {
                width: 120px;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .nav-item {
                padding: 0.75rem 1rem;
                border-radius: 8px;
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-secondary);
                background: var(--surface);
                transition: all 0.3s ease;
            }
            
            .nav-item.active {
                background: var(--secondary-color);
                color: white;
                box-shadow: 0 2px 8px rgba(5, 150, 105, 0.3);
            }
            
            .screen-main {
                flex: 1;
                padding: 1rem;
            }
            
            .chart-mini {
                width: 100%;
                height: 80px;
                background: var(--gradient-secondary);
                border-radius: 8px;
                margin-bottom: 1rem;
                opacity: 0.8;
            }
            
            .data-rows {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .data-row {
                height: 12px;
                background: var(--surface);
                border-radius: 6px;
            }
            
            .data-row:nth-child(1) { width: 80%; }
            .data-row:nth-child(2) { width: 60%; }
            .data-row:nth-child(3) { width: 90%; }
            
            .features-showcase {
                margin-top: 4rem;
            }

            .showcase-grid {
                display: flex;
                gap: 2rem;
                overflow-x: auto;
                padding-bottom: 1.5rem;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: thin;
                scrollbar-color: var(--secondary-color) var(--surface);
            }

            .showcase-grid::-webkit-scrollbar {
                height: 8px;
            }

            .showcase-grid::-webkit-scrollbar-track {
                background: var(--surface);
                border-radius: 10px;
            }

            .showcase-grid::-webkit-scrollbar-thumb {
                background-color: var(--secondary-color);
                border-radius: 10px;
                border: 2px solid var(--surface);
            }

            .showcase-grid > .showcase-card {
                flex: 0 0 380px;
                width: 380px;
            }

            @media (max-width: 768px) {
                .showcase-grid > .showcase-card {
                    flex: 0 0 90%;
                }
            }

            /* Marquee Scrolling for Features and Testimonials */
            .scrolling-wrapper {
                overflow: hidden;
                position: relative;
                padding: 1.5rem 0; /* Add some vertical padding */
            }

            .features-marquee {
                display: flex;
                gap: 2rem;
                animation: marquee-scroll 40s linear infinite; /* Adjust speed as needed */
                width: fit-content; /* Allow content to define width */
                padding: 1rem 0; /* Padding for cards inside */
            }

            .features-marquee:hover {
                animation-play-state: paused;
            }

            /* Duplicate content for seamless loop */
            .features-marquee::after {
                content: attr(data-clone); /* Use data-clone attribute for duplication */
                display: flex;
                gap: 2rem;
                animation: marquee-scroll 40s linear infinite; /* Same animation as original */
                animation-delay: -20s; /* Start halfway through */
            }

            @keyframes marquee-scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-100%); }
            }

            /* Card Styling for Features */
            .features-showcase .showcase-card {
                flex: 0 0 380px; /* Fixed width for desktop */
                width: 380px;
                background: white;
                padding: 2.5rem;
                border-radius: 16px;
                border: 1px solid var(--border-light);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
            }

            .features-showcase .showcase-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
                border-color: var(--secondary-color);
            }

            .features-showcase .primary-card {
                border: 2px solid var(--secondary-color);
                background: linear-gradient(135deg, #ffffff 0%, #f8fffe 100%);
            }

            /* Card Styling for Testimonials */
            .testimonials-section .testimonial-card {
                flex: 0 0 300px; /* Fixed width for desktop */
                width: 300px;
                background: white;
                padding: 2rem 1.5rem;
                border-radius: 16px;
                border: 1px solid var(--border-light);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
                will-change: transform;
            }

            .testimonials-section .testimonial-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
                border-color: var(--secondary-color);
            }

            /* Responsive adjustments for cards within marquee */
            @media (max-width: 768px) {
                .features-showcase .showcase-card {
                    flex: 0 0 90vw; /* Adjust width for mobile */
                    width: 90vw;
                }
                .features-marquee {
                    animation-duration: 30s; /* Faster scroll on mobile */
                }
                .features-marquee::after {
                    animation-delay: -15s; /* Adjust delay for mobile */
                }
            }
            
            .showcase-card {
                background: white;
                padding: 2.5rem;
                border-radius: 16px;
                border: 1px solid var(--border-light);
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
            }
            
            .showcase-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: var(--gradient-secondary);
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.3s ease;
            }
            
            .showcase-card:hover::before {
                transform: scaleX(1);
            }
            
            .showcase-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
                border-color: var(--secondary-color);
            }
            
            .primary-card {
                border: 2px solid var(--secondary-color);
                background: linear-gradient(135deg, #ffffff 0%, #f8fffe 100%);
            }
            
            .primary-card::before {
                transform: scaleX(1);
            }
            
            .card-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 1.5rem;
            }
            
            .card-icon {
                width: 60px;
                height: 60px;
                background: var(--gradient-secondary);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 1.75rem;
                transition: transform 0.3s ease;
            }
            
            .showcase-card:hover .card-icon {
                transform: scale(1.1) rotate(5deg);
            }
            
            .card-badge {
                background: var(--gradient-primary);
                color: white;
                padding: 0.375rem 0.75rem;
                border-radius: 12px;
                font-size: 0.75rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }
            
            .showcase-card h3 {
                font-size: 1.5rem;
                font-weight: 700;
                margin-bottom: 1rem;
                color: var(--text-primary);
            }
            
            .showcase-card p {
                color: var(--text-secondary);
                line-height: 1.7;
                font-size: 1.05rem;
                margin-bottom: 1.5rem;
            }
            
            .card-features {
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
                margin-bottom: 2rem;
            }
            
            .feature-item {
                display: flex;
                align-items: center;
                font-size: 0.95rem;
                color: var(--text-secondary);
                font-weight: 500;
            }
            
            .feature-item::before {
                content: '';
                width: 16px;
                height: 16px;
                background: var(--secondary-color);
                border-radius: 50%;
                margin-right: 0.75rem;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 0.75rem;
                font-weight: 600;
            }
            
            .card-link {
                color: var(--secondary-color);
                text-decoration: none;
                font-weight: 600;
                font-size: 1rem;
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                transition: all 0.3s ease;
            }
            
            .card-link:hover {
                color: var(--primary-color);
                transform: translateX(4px);
            }
            
            /* Trust Section */
            .trust-section {
                background: var(--surface);
                padding: 4rem 0;
                text-align: center;
            }

            .trust-section .section-title h2 {
                font-size: 3rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 1.5rem;
            }

            .trust-section .section-title p {
                font-size: 1.25rem;
                color: var(--text-secondary);
                max-width: 800px;
                margin: 0 auto;
            }
            
            .trust-stats {
                display: flex;
                justify-content: space-around;
                gap: 1rem;
                margin-top: 1.5rem;
                flex-wrap: wrap;
            }
            
            .trust-stat h3 {
                font-size: 2rem;
                font-weight: 800;
                color: var(--primary-color);
                margin-bottom: 0.25rem;
            }
            
            .trust-stat p {
                color: var(--text-secondary);
                font-size: 0.9rem;
            }
            

            

            
            /* Privacy & Security Section - Professional Style */
            .privacy-section {
                background: var(--surface);
                padding: 6rem 0;
                position: relative;
                border-top: 1px solid var(--border-light);
            }
            
            .privacy-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: var(--gradient-secondary);
            }
            
            .privacy-hero {
                text-align: center;
                margin-bottom: 5rem;
            }
            
            .privacy-hero h2 {
                font-size: 3rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 1.5rem;
            }
            
            .privacy-hero p {
                font-size: 1.375rem;
                color: var(--text-secondary);
                max-width: 800px;
                margin: 0 auto;
                line-height: 1.6;
            }
            
            .privacy-features {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 2.5rem;
                margin-bottom: 5rem;
            }
            
            .privacy-card {
                background: white;
                padding: 2.5rem;
                border-radius: 16px;
                border: 1px solid rgba(5, 150, 105, 0.1);
                box-shadow: 0 4px 20px rgba(5, 150, 105, 0.06);
                transition: all 0.3s ease;
                position: relative;
            }
            
            .privacy-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 40px rgba(5, 150, 105, 0.12);
                border-color: var(--secondary-color);
            }
            
            .privacy-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: var(--gradient-secondary);
                border-radius: 16px 16px 0 0;
            }
            
            .privacy-icon {
                width: 70px;
                height: 70px;
                background: var(--gradient-secondary);
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1.5rem;
                color: white;
                font-size: 2rem;
            }
            
            .privacy-card h3 {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 1rem;
                color: var(--text-primary);
            }
            
            .privacy-card p {
                color: var(--text-secondary);
                line-height: 1.7;
                font-size: 1.05rem;
                margin-bottom: 1.5rem;
            }
            
            .privacy-list {
                list-style: none;
                padding: 0;
            }
            
            .privacy-list li {
                display: flex;
                align-items: center;
                margin-bottom: 0.75rem;
                font-size: 0.95rem;
                color: var(--text-secondary);
            }
            
            .privacy-list li::before {
                content: '✓';
                color: var(--secondary-color);
                font-weight: 600;
                margin-right: 0.75rem;
                font-size: 1rem;
            }
            
            .compliance-badges {
                display: flex;
                justify-content: center;
                gap: 2rem;
                flex-wrap: wrap;
                margin-top: 3rem;
            }
            
            .compliance-badge {
                background: white;
                border: 2px solid var(--secondary-color);
                border-radius: 8px;
                padding: 1rem 1.5rem;
                font-weight: 600;
                color: var(--secondary-color);
                font-size: 0.875rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                transition: all 0.3s ease;
            }
            
            .compliance-badge:hover {
                background: var(--secondary-color);
                color: white;
                transform: translateY(-2px);
            }
            
            .privacy-cta {
                text-align: center;
                background: white;
                border-radius: 20px;
                padding: 3rem;
                border: 1px solid rgba(44, 160, 28, 0.1);
                box-shadow: 0 8px 40px rgba(44, 160, 28, 0.08);
            }
            
            .privacy-cta h3 {
                font-size: 2rem;
                font-weight: 700;
                color: var(--secondary-color);
                margin-bottom: 1rem;
            }
            
            .privacy-cta p {
                font-size: 1.125rem;
                color: var(--text-secondary);
                margin-bottom: 2rem;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .privacy-buttons {
                display: flex;
                gap: 1rem;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .btn-privacy {
                background: var(--gradient-secondary);
                color: white;
                padding: 0.875rem 2rem;
                border-radius: 8px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 4px 16px rgba(5, 150, 105, 0.3);
            }
            
            .btn-privacy:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 32px rgba(5, 150, 105, 0.4);
                color: white;
            }
            
            .btn-privacy-secondary {
                background: white;
                color: var(--secondary-color);
                border: 2px solid var(--secondary-color);
                padding: 0.875rem 2rem;
                border-radius: 8px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            
            .btn-privacy-secondary:hover {
                background: var(--secondary-color);
                color: white;
                transform: translateY(-2px);
            }
            
            /* Enhanced CTA Section */
            .cta-enhanced {
                background: var(--gradient-primary);
                color: white;
                padding: 8rem 0;
                position: relative;
                overflow: hidden;
            }
            
            .cta-enhanced::before {
                content: '';
                position: absolute;
                top: 0;
                right: 0;
                width: 50%;
                height: 100%;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>') repeat;
            }
            
            .cta-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 5rem;
                align-items: center;
                position: relative;
                z-index: 2;
            }
            
            .cta-text {
                max-width: 500px;
            }
            
            .cta-text h2 {
                font-size: 3.5rem;
                font-weight: 800;
                margin-bottom: 1.5rem;
                line-height: 1.1;
            }
            
            .cta-text p {
                font-size: 1.25rem;
                opacity: 0.9;
                margin-bottom: 2.5rem;
                line-height: 1.7;
            }
            
            .cta-features {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                margin-bottom: 2.5rem;
            }
            
            .cta-feature {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                font-size: 1.05rem;
            }
            
            .cta-feature-icon {
                width: 20px;
                height: 20px;
                background: rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.75rem;
                font-weight: 600;
            }
            
            .cta-buttons {
                display: flex;
                gap: 1.25rem;
                flex-wrap: wrap;
            }
            
            .btn-cta-primary {
                background: white;
                color: var(--primary-color);
                padding: 1rem 2rem;
                border-radius: 8px;
                font-weight: 700;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                transition: all 0.3s ease;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
                position: relative;
                overflow: hidden;
            }
            
            .btn-cta-primary::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(30, 64, 175, 0.1), transparent);
                transition: left 0.5s ease;
            }
            
            .btn-cta-primary:hover::before {
                left: 100%;
            }
            
            .btn-cta-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
                color: var(--primary-color);
            }
            
            .btn-cta-secondary {
                background: rgba(255, 255, 255, 0.1);
                color: white;
                border: 2px solid rgba(255, 255, 255, 0.3);
                padding: 1rem 2rem;
                border-radius: 8px;
                font-weight: 600;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }
            
            .btn-cta-secondary:hover {
                background: rgba(255, 255, 255, 0.2);
                border-color: rgba(255, 255, 255, 0.6);
                transform: translateY(-3px);
                color: white;
            }
            
            .cta-visual {
                position: relative;
                padding: 2rem;
            }
            
            .dashboard-mockup {
                background: white;
                border-radius: 16px;
                box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
                overflow: hidden;
                transform: perspective(1000px) rotateY(-5deg);
                transition: transform 0.3s ease;
            }
            
            .dashboard-mockup:hover {
                transform: perspective(1000px) rotateY(0deg) scale(1.02);
            }
            
            .mockup-header {
                background: var(--surface);
                padding: 1rem 1.5rem;
                border-bottom: 1px solid var(--border-light);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .mockup-dots {
                display: flex;
                gap: 0.5rem;
            }
            
            .mockup-dots span {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: #ddd;
            }
            
            .mockup-dots span:first-child { background: #ff5f57; }
            .mockup-dots span:nth-child(2) { background: #ffbd2e; }
            .mockup-dots span:last-child { background: #28ca42; }
            
            .mockup-title {
                font-size: 0.95rem;
                font-weight: 600;
                color: var(--text-primary);
            }
            
            .mockup-content {
                padding: 2rem;
            }
            
            .metric-cards {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
                margin-bottom: 2rem;
            }
            
            .metric-card {
                background: var(--surface);
                padding: 1.5rem;
                border-radius: 12px;
                text-align: center;
                border: 1px solid var(--border-light);
            }
            
            .metric-value {
                font-size: 2rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 0.5rem;
            }
            
            .metric-label {
                font-size: 0.875rem;
                color: var(--text-secondary);
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 0.5rem;
            }
            
            .metric-trend {
                font-size: 0.875rem;
                font-weight: 600;
            }
            
            .metric-trend.positive {
                color: var(--secondary-color);
            }
            
            .chart-placeholder {
                width: 100%;
                height: 120px;
                background: var(--gradient-secondary);
                border-radius: 12px;
                opacity: 0.8;
            }
            
            /* Enhanced Footer */
            .footer {
                background: var(--text-primary);
                color: rgba(255, 255, 255, 0.8);
                padding: 4rem 0 2rem;
                position: relative;
            }
            
            .footer::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 1px;
                background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
            }
            
            .footer-content {
                display: grid;
                grid-template-columns: 1.5fr 1fr 1fr 1fr;
                gap: 3rem;
                margin-bottom: 3rem;
            }
            
            .footer-brand {
                max-width: 350px;
            }
            
            .footer-logo {
                font-family: 'Inter', sans-serif;
                font-size: 2rem;
                font-weight: 800;
                color: white;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 1.5rem;
            }
            
            .footer-logo::before {
                content: '🏦';
                font-size: 2rem;
                background: var(--gradient-primary);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            
            .footer-description {
                font-size: 1rem;
                line-height: 1.6;
                color: rgba(255, 255, 255, 0.7);
                margin-bottom: 2rem;
            }
            
            .footer-social {
                display: flex;
                gap: 1rem;
                margin-bottom: 2rem;
            }
            
            .social-link {
                width: 45px;
                height: 45px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
                transition: all 0.3s ease;
            }
            
            .social-link:hover {
                background: var(--primary-color);
                color: white;
                transform: translateY(-2px);
            }
            
            .footer-section h4 {
                color: white;
                font-weight: 600;
                margin-bottom: 1.5rem;
                font-size: 1.125rem;
            }
            
            .footer-section ul {
                list-style: none;
                padding: 0;
            }
            
            .footer-section ul li {
                margin-bottom: 0.75rem;
            }
            
            .footer-section ul li a {
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
                transition: all 0.2s ease;
                font-size: 0.95rem;
                display: flex;
                align-items: center;
            }
            
            .footer-section ul li a:hover {
                color: var(--primary-color);
                transform: translateX(4px);
            }
            
            .footer-section ul li a::before {
                content: '→';
                margin-right: 0.5rem;
                opacity: 0;
                transition: opacity 0.2s ease;
                font-size: 0.8rem;
            }
            
            .footer-section ul li a:hover::before {
                opacity: 1;
            }
            
            .footer-contact-info {
                margin-top: 1rem;
            }
            
            .contact-item {
                display: flex;
                align-items: center;
                margin-bottom: 1rem;
                color: rgba(255, 255, 255, 0.7);
                font-size: 0.9rem;
            }
            
            .contact-item::before {
                margin-right: 0.75rem;
                font-size: 1rem;
            }
            
            .contact-email::before { content: '✉️'; }
            .contact-phone::before { content: '📞'; }
            

            
            .footer-bottom {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding-top: 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .footer-copyright {
                color: rgba(255, 255, 255, 0.6);
                font-size: 0.875rem;
            }
            
            .footer-links {
                display: flex;
                gap: 2rem;
                flex-wrap: wrap;
            }
            
            .footer-links a {
                color: rgba(255, 255, 255, 0.6);
                text-decoration: none;
                font-size: 0.875rem;
                transition: color 0.2s ease;
            }
            
            .footer-links a:hover {
                color: var(--primary-color);
            }
            
            /* Advanced Animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes slideInLeft {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            @keyframes slideInRight {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
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
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-20px);
                }
            }
            
            /* Animation Classes */
            .animate-fade-in-up {
                animation: fadeInUp 0.8s ease-out;
            }
            
            .animate-slide-left {
                animation: slideInLeft 0.8s ease-out;
            }
            
            .animate-slide-right {
                animation: slideInRight 0.8s ease-out;
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
            
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            
            /* Comprehensive Responsive Design */

            /* Extra Large Screens (1200px+) */
            @media (min-width: 1200px) {
                .container {
                    max-width: 1400px;
                }

                .hero-title {
                    font-size: 5rem;
                }

                .features-header {
                    grid-template-columns: 1fr 1fr;
                    gap: 6rem;
                }

                .features-intro h2 {
                    font-size: 4rem;
                }

                .qb-title {
                    font-size: 5rem;
                }

                .cta-text h2 {
                    font-size: 4rem;
                }

                .footer-content {
                    grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
                }
            }

            /* Large Screens (992px - 1199px) */
            @media (max-width: 1199px) {
                .hero-content {
                    grid-template-columns: 1fr;
                    text-align: center;
                    gap: 4rem;
                }

                .hero-text h1 {
                    font-size: 3.5rem;
                }

                .features-header {
                    grid-template-columns: 1fr;
                    text-align: center;
                    gap: 3rem;
                }

                .features-intro h2 {
                    font-size: 3rem;
                }

                .qb-split {
                    grid-template-columns: 1fr;
                    gap: 3rem;
                    text-align: center;
                }

                .qb-visual-side {
                    max-width: 500px;
                    margin: 0 auto;
                }

                .cta-content {
                    grid-template-columns: 1fr;
                    gap: 4rem;
                    text-align: center;
                }

                .cta-visual {
                    max-width: 500px;
                    margin: 0 auto;
                }

                .footer-content {
                    grid-template-columns: 1fr 1fr;
                    gap: 3rem;
                }

                .footer-brand {
                    grid-column: 1 / -1;
                    text-align: center;
                    margin-bottom: 2rem;
                }
            }

            /* Medium Screens (768px - 991px) */
            @media (max-width: 991px) {
                .promo-content {
                    padding: 0.5rem 1rem;
                }

                .promo-text {
                    flex-direction: column;
                    gap: 0.5rem;
                    font-size: 0.9rem;
                }

                .promo-main {
                    font-size: 0.95rem;
                }

                .promo-highlight {
                    font-size: 0.85rem;
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

                .hero {
                    padding: 4rem 0 6rem;
                    min-height: auto;
                }

                .hero-title {
                    font-size: 3rem;
                }

                .hero-description {
                    font-size: 1.125rem;
                    max-width: 100%;
                }

                .hero-stats {
                    flex-direction: column;
                    gap: 1rem;
                    align-items: center;
                }

                .stat-divider {
                    display: none;
                }

                .hero-buttons {
                    flex-direction: column;
                    gap: 1rem;
                    align-items: center;
                }

                .btn-enhanced {
                    width: 100%;
                    max-width: 300px;
                }

                .dashboard-preview-enhanced {
                    max-width: 500px;
                }

                .features-enhanced {
                    padding: 6rem 0;
                }

                .features-intro h2 {
                    font-size: 2.5rem;
                }

                .qb-showcase {
                    padding: 6rem 0;
                }

                .qb-title {
                    font-size: 3.5rem;
                }

                .qb-feature-title {
                    font-size: 2.25rem;
                }

                .qb-tabs {
                    gap: 0.75rem;
                }

                .qb-tab {
                    padding: 0.875rem 1.5rem;
                    font-size: 0.95rem;
                }

                .trust-section {
                    padding: 3rem 0;
                }

                .trust-stats {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 2rem;
                }

                .trust-section .section-title h2 {
                    font-size: 2.5rem;
                }

                .privacy-section {
                    padding: 5rem 0;
                }

                .privacy-hero h2 {
                    font-size: 2.5rem;
                }

                .privacy-features {
                    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                    gap: 2rem;
                }

                .cta-enhanced {
                    padding: 6rem 0;
                }

                .cta-text h2 {
                    font-size: 3rem;
                }

                .cta-buttons {
                    flex-direction: column;
                    gap: 1rem;
                    align-items: center;
                }

                .btn-cta-primary, .btn-cta-secondary {
                    width: 100%;
                    max-width: 300px;
                }

                .footer {
                    padding: 3rem 0 2rem;
                }

                .footer-content {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                    text-align: center;
                }

                .footer-brand {
                    margin-bottom: 2rem;
                }

                .footer-social {
                    justify-content: center;
                }

                .footer-bottom {
                    flex-direction: column;
                    gap: 1rem;
                    text-align: center;
                }
            }

            /* Small Screens (576px - 767px) */
            @media (max-width: 767px) {
                .container {
                    padding: 0 15px;
                }

                .promo-banner {
                    padding: 0.25rem 0.5rem;
                }

                .promo-content {
                    padding: 0 0.5rem;
                }

                .promo-text {
                    font-size: 0.85rem;
                }

                .promo-main {
                    font-size: 0.9rem;
                }

                .promo-highlight {
                    padding: 0.25rem 0.5rem;
                    font-size: 0.8rem;
                }

                .promo-cta {
                    padding: 0.375rem 0.75rem;
                    font-size: 0.8rem;
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

                .hero {
                    padding: 3rem 0 4rem;
                    text-align: center;
                }

                .hero-badge {
                    margin-bottom: 1.5rem;
                    font-size: 0.8rem;
                    padding: 0.5rem 1rem;
                }

                .hero-title {
                    font-size: 2.25rem;
                    line-height: 1.2;
                }

                .hero-description {
                    font-size: 1rem;
                    margin-bottom: 2rem;
                }

                .hero-stats {
                    margin-bottom: 2rem;
                }

                .stat-number {
                    font-size: 1.5rem;
                }

                .stat-label {
                    font-size: 0.8rem;
                }

                .hero-buttons {
                    gap: 0.75rem;
                }

                .btn-enhanced {
                    padding: 0.875rem 1.5rem;
                    font-size: 0.9rem;
                }

                .dashboard-preview-enhanced {
                    max-width: 100%;
                    transform: none;
                }

                .floating-elements {
                    display: none;
                }

                .features-enhanced {
                    padding: 4rem 0;
                }

                .features-intro h2 {
                    font-size: 2rem;
                }

                .features-intro p {
                    font-size: 1rem;
                }

                .showcase-grid {
                    gap: 1.5rem;
                }

                .showcase-card {
                    padding: 2rem 1.5rem;
                }

                .showcase-card h3 {
                    font-size: 1.25rem;
                }

                .qb-showcase {
                    padding: 4rem 0;
                }

                .qb-header {
                    margin-bottom: 3rem;
                }

                .qb-title {
                    font-size: 2.5rem;
                }

                .qb-subtitle {
                    font-size: 1rem;
                }

                .qb-tabs {
                    padding: 0.25rem;
                    margin-bottom: 3rem;
                }

                .qb-tab {
                    padding: 0.75rem 1rem;
                    font-size: 0.9rem;
                }

                .qb-feature-title {
                    font-size: 1.75rem;
                }

                .qb-feature-desc {
                    font-size: 1rem;
                }

                .qb-feature-list li {
                    padding: 0.75rem 0;
                    font-size: 1rem;
                }

                .qb-cta-link {
                    padding: 0.875rem 1.5rem;
                    font-size: 1rem;
                }

                .qb-mockup {
                    transform: none;
                }

                .trust-section .section-title h2 {
                    font-size: 2rem;
                }

                .trust-section .section-title p {
                    font-size: 1rem;
                }

                .trust-stats {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }

                .trust-stat h3 {
                    font-size: 1.75rem;
                }

                .privacy-section {
                    padding: 4rem 0;
                }

                .privacy-hero {
                    margin-bottom: 4rem;
                }

                .privacy-hero h2 {
                    font-size: 2rem;
                }

                .privacy-hero p {
                    font-size: 1rem;
                }

                .privacy-features {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                }

                .privacy-card {
                    padding: 2rem 1.5rem;
                }

                .privacy-card h3 {
                    font-size: 1.25rem;
                }

                .privacy-cta {
                    padding: 2.5rem 1.5rem;
                }

                .privacy-cta h3 {
                    font-size: 1.75rem;
                }

                .privacy-cta p {
                    font-size: 1rem;
                }

                .privacy-buttons {
                    flex-direction: column;
                    gap: 0.75rem;
                }

                .btn-privacy, .btn-privacy-secondary {
                    width: 100%;
                    max-width: 280px;
                    margin: 0 auto;
                }

                .cta-enhanced {
                    padding: 4rem 0;
                }

                .cta-text h2 {
                    font-size: 2.5rem;
                }

                .cta-text p {
                    font-size: 1rem;
                }

                .cta-features {
                    margin-bottom: 2rem;
                }

                .cta-feature {
                    font-size: 0.9rem;
                }

                .dashboard-mockup {
                    transform: none;
                }

                .footer {
                    text-align: center;
                }

                .footer-content {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                }

                .footer-brand {
                    margin-bottom: 2rem;
                }

                .footer-logo {
                    font-size: 1.75rem;
                }

                .footer-description {
                    font-size: 0.9rem;
                }

                .footer-social {
                    justify-content: center;
                    margin-bottom: 1.5rem;
                }

                .footer-section h4 {
                    font-size: 1rem;
                }

                .footer-section ul li a {
                    font-size: 0.9rem;
                }

                .footer-contact-info {
                    margin-top: 1rem;
                }

                .contact-item {
                    font-size: 0.85rem;
                }

                .footer-bottom {
                    flex-direction: column;
                    gap: 1rem;
                }

                .footer-copyright, .footer-links a {
                    font-size: 0.85rem;
                }
            }

            /* Extra Small Screens (320px - 575px) */
            @media (max-width: 575px) {
                .container {
                    padding: 0 10px;
                }

                .promo-banner {
                    padding: 0.2rem 0.25rem;
                }

                .promo-content {
                    padding: 0 0.25rem;
                }

                .promo-text {
                    font-size: 0.8rem;
                    gap: 0.25rem;
                }

                .promo-main {
                    font-size: 0.85rem;
                }

                .promo-highlight {
                    padding: 0.2rem 0.4rem;
                    font-size: 0.75rem;
                }

                .promo-cta {
                    padding: 0.3rem 0.6rem;
                    font-size: 0.75rem;
                }

                .promo-close {
                    right: 0.5rem;
                    width: 28px;
                    height: 28px;
                }

                .close-icon {
                    font-size: 1rem;
                }

                .nav {
                    padding: 0.25rem 0;
                }

                .logo {
                    font-size: 1.25rem;
                    margin-bottom: 0.75rem;
                }

                .nav-menu {
                    gap: 0.25rem;
                }

                .nav-link {
                    padding: 0.5rem 0.25rem;
                    font-size: 0.85rem;
                }

                .auth-buttons {
                    gap: 0.25rem;
                    margin-top: 0.75rem;
                }

                .btn-signin, .btn-signup {
                    padding: 0.4rem 0.8rem;
                    font-size: 0.85rem;
                }

                .hero {
                    padding: 2rem 0 3rem;
                }

                .hero-badge {
                    font-size: 0.75rem;
                    padding: 0.4rem 0.8rem;
                    margin-bottom: 1rem;
                }

                .hero-title {
                    font-size: 1.75rem;
                }

                .hero-description {
                    font-size: 0.9rem;
                    margin-bottom: 1.5rem;
                }

                .hero-stats {
                    margin-bottom: 1.5rem;
                }

                .stat-number {
                    font-size: 1.25rem;
                }

                .stat-label {
                    font-size: 0.75rem;
                }

                .hero-buttons {
                    gap: 0.5rem;
                }

                .btn-enhanced {
                    padding: 0.75rem 1.25rem;
                    font-size: 0.85rem;
                }

                .btn-icon {
                    font-size: 0.9rem;
                }

                .dashboard-preview-enhanced {
                    padding: 1rem;
                }

                .dashboard-header {
                    padding: 0.75rem 1rem;
                }

                .dashboard-title {
                    font-size: 0.9rem;
                }

                .dashboard-content {
                    padding: 1.5rem 1rem;
                    grid-template-columns: 1fr;
                    gap: 1rem;
                }

                .card-title {
                    font-size: 0.8rem;
                }

                .card-value {
                    font-size: 1.75rem;
                }

                .card-growth {
                    font-size: 0.8rem;
                }

                .features-enhanced {
                    padding: 3rem 0;
                }

                .features-intro h2 {
                    font-size: 1.75rem;
                }

                .features-intro p {
                    font-size: 0.9rem;
                }

                .showcase-grid {
                    gap: 1rem;
                }

                .showcase-card {
                    padding: 1.5rem 1rem;
                }

                .card-header {
                    margin-bottom: 1rem;
                }

                .card-icon {
                    width: 50px;
                    height: 50px;
                    font-size: 1.5rem;
                }

                .showcase-card h3 {
                    font-size: 1.125rem;
                    margin-bottom: 0.75rem;
                }

                .showcase-card p {
                    font-size: 0.9rem;
                    margin-bottom: 1rem;
                }

                .card-features {
                    margin-bottom: 1.5rem;
                }

                .feature-item {
                    font-size: 0.85rem;
                }

                .card-link {
                    font-size: 0.9rem;
                    padding: 0.75rem 1.5rem;
                }

                .qb-showcase {
                    padding: 3rem 0;
                }

                .qb-header {
                    margin-bottom: 2rem;
                }

                .qb-title {
                    font-size: 2rem;
                }

                .qb-subtitle {
                    font-size: 0.9rem;
                }

                .qb-tabs {
                    flex-direction: column;
                    gap: 0.5rem;
                    margin-bottom: 2rem;
                }

                .qb-tab {
                    width: 100%;
                    padding: 0.625rem 1rem;
                    font-size: 0.85rem;
                }

                .qb-split {
                    gap: 2rem;
                }

                .qb-feature-title {
                    font-size: 1.5rem;
                }

                .qb-feature-desc {
                    font-size: 0.9rem;
                    margin-bottom: 1.5rem;
                }

                .qb-feature-list {
                    margin-bottom: 1.5rem;
                }

                .qb-feature-list li {
                    padding: 0.5rem 0;
                    font-size: 0.9rem;
                }

                .list-icon {
                    width: 24px;
                    height: 24px;
                    font-size: 0.75rem;
                }

                .qb-cta-link {
                    padding: 0.75rem 1.25rem;
                    font-size: 0.9rem;
                }

                .qb-mockup {
                    padding: 1rem;
                }

                .window-header {
                    padding: 1rem 1.25rem;
                }

                .window-title {
                    font-size: 0.9rem;
                }

                .window-content {
                    padding: 1.5rem;
                }

                .trust-section {
                    padding: 2.5rem 0;
                }

                .trust-section .section-title h2 {
                    font-size: 1.75rem;
                }

                .trust-section .section-title p {
                    font-size: 0.9rem;
                }

                .trust-stats {
                    gap: 1rem;
                }

                .trust-stat h3 {
                    font-size: 1.5rem;
                }

                .trust-stat p {
                    font-size: 0.85rem;
                }

                .privacy-section {
                    padding: 3rem 0;
                }

                .privacy-hero {
                    margin-bottom: 3rem;
                }

                .privacy-hero h2 {
                    font-size: 1.75rem;
                }

                .privacy-hero p {
                    font-size: 0.9rem;
                }

                .privacy-features {
                    gap: 1.5rem;
                }

                .privacy-card {
                    padding: 1.5rem 1rem;
                }

                .privacy-icon {
                    width: 60px;
                    height: 60px;
                    font-size: 1.75rem;
                }

                .privacy-card h3 {
                    font-size: 1.125rem;
                    margin-bottom: 0.75rem;
                }

                .privacy-card p {
                    font-size: 0.9rem;
                    margin-bottom: 1rem;
                }

                .privacy-list li {
                    font-size: 0.85rem;
                    margin-bottom: 0.5rem;
                }

                .privacy-cta {
                    padding: 2rem 1rem;
                }

                .privacy-cta h3 {
                    font-size: 1.5rem;
                }

                .privacy-cta p {
                    font-size: 0.9rem;
                    margin-bottom: 1.5rem;
                }

                .btn-privacy, .btn-privacy-secondary {
                    padding: 0.75rem 1.5rem;
                    font-size: 0.9rem;
                }

                .cta-enhanced {
                    padding: 3rem 0;
                }

                .cta-text h2 {
                    font-size: 2rem;
                }

                .cta-text p {
                    font-size: 0.9rem;
                }

                .cta-features {
                    margin-bottom: 1.5rem;
                }

                .cta-feature {
                    font-size: 0.85rem;
                }

                .cta-feature-icon {
                    width: 18px;
                    height: 18px;
                    font-size: 0.7rem;
                }

                .btn-cta-primary, .btn-cta-secondary {
                    padding: 0.875rem 1.5rem;
                    font-size: 0.9rem;
                }

                .mockup-header {
                    padding: 0.75rem 1rem;
                }

                .mockup-title {
                    font-size: 0.9rem;
                }

                .mockup-content {
                    padding: 1.5rem;
                }

                .metric-card {
                    padding: 1.25rem;
                }

                .metric-value {
                    font-size: 1.75rem;
                }

                .metric-label {
                    font-size: 0.8rem;
                }

                .footer {
                    padding: 2rem 0 1.5rem;
                }

                .footer-logo {
                    font-size: 1.5rem;
                }

                .footer-description {
                    font-size: 0.85rem;
                }

                .footer-social {
                    gap: 0.75rem;
                    margin-bottom: 1rem;
                }

                .social-link {
                    width: 40px;
                    height: 40px;
                }

                .footer-section h4 {
                    font-size: 0.9rem;
                    margin-bottom: 1rem;
                }

                .footer-section ul li {
                    margin-bottom: 0.5rem;
                }

                .footer-section ul li a {
                    font-size: 0.85rem;
                }

                .contact-item {
                    font-size: 0.8rem;
                }

                .footer-copyright, .footer-links a {
                    font-size: 0.8rem;
                }
            }

            /* Ultra Small Screens (320px and below) */
            @media (max-width: 320px) {
                .container {
                    padding: 0 8px;
                }

                .promo-content {
                    padding: 0 0.2rem;
                }

                .promo-text {
                    font-size: 0.75rem;
                }

                .promo-main {
                    font-size: 0.8rem;
                }

                .promo-highlight {
                    font-size: 0.7rem;
                }

                .promo-cta {
                    font-size: 0.7rem;
                }

                .hero-title {
                    font-size: 1.5rem;
                }

                .hero-description {
                    font-size: 0.85rem;
                }

                .qb-title {
                    font-size: 1.75rem;
                }

                .cta-text h2 {
                    font-size: 1.75rem;
                }

                .footer-logo {
                    font-size: 1.25rem;
                }
            }

            /* QuickBooks-Style Showcase Section */
            .qb-showcase {
                padding: 8rem 0;
                background: linear-gradient(180deg, #ffffff 0%, #f9fafb 50%, #ffffff 100%);
                position: relative;
                overflow: hidden;
            }

            .qb-showcase::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 1px;
                background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
            }

            .qb-header {
                text-align: center;
                max-width: 900px;
                margin: 0 auto 4rem;
            }

            .qb-badge {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(5, 150, 105, 0.05));
                color: var(--secondary-color);
                padding: 0.75rem 1.5rem;
                border-radius: 30px;
                font-size: 0.95rem;
                font-weight: 600;
                margin-bottom: 2rem;
                border: 1px solid rgba(5, 150, 105, 0.2);
                box-shadow: 0 4px 15px rgba(5, 150, 105, 0.1);
            }

            .qb-badge-icon {
                font-size: 1.1rem;
                animation: pulse 2s ease-in-out infinite;
            }

            .qb-title {
                font-size: 4rem;
                font-weight: 800;
                color: var(--text-primary);
                margin-bottom: 1.5rem;
                line-height: 1.1;
                letter-spacing: -0.02em;
            }

            .qb-subtitle {
                font-size: 1.375rem;
                color: var(--text-secondary);
                line-height: 1.6;
                max-width: 700px;
                margin: 0 auto;
            }

            /* Interactive Tabs */
            .qb-tabs {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin-bottom: 4rem;
                flex-wrap: wrap;
                padding: 0.5rem;
                background: white;
                border-radius: 16px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 4rem;
            }

            .qb-tab {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                padding: 1rem 2rem;
                border: none;
                background: transparent;
                border-radius: 12px;
                font-size: 1.05rem;
                font-weight: 600;
                color: var(--text-secondary);
                cursor: pointer;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                position: relative;
            }

            .qb-tab::before {
                content: '';
                position: absolute;
                inset: 0;
                background: var(--gradient-secondary);
                border-radius: 12px;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .qb-tab.active::before {
                opacity: 1;
            }

            .qb-tab.active {
                color: white;
                box-shadow: 0 8px 25px rgba(5, 150, 105, 0.3);
                transform: translateY(-2px);
            }

            .qb-tab:not(.active):hover {
                background: var(--surface);
                color: var(--primary-color);
                transform: translateY(-2px);
            }

            .tab-icon {
                font-size: 1.5rem;
                position: relative;
                z-index: 1;
                transition: transform 0.3s ease;
            }

            .qb-tab.active .tab-icon {
                animation: bounce 0.6s ease;
            }

            .tab-text {
                position: relative;
                z-index: 1;
            }

            /* Tab Content */
            .qb-content-wrapper {
                position: relative;
                min-height: 600px;
            }

            .qb-tab-content {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                opacity: 0;
                visibility: hidden;
                transform: translateY(30px);
                transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .qb-tab-content.active {
                position: relative;
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .qb-split {
                display: grid;
                grid-template-columns: 1fr 1.2fr;
                gap: 5rem;
                align-items: center;
            }

            .qb-text-side {
                max-width: 500px;
            }

            .qb-feature-title {
                font-size: 2.75rem;
                font-weight: 800;
                color: var(--text-primary);
                margin-bottom: 1.5rem;
                line-height: 1.2;
                letter-spacing: -0.01em;
            }

            .qb-feature-desc {
                font-size: 1.25rem;
                color: var(--text-secondary);
                line-height: 1.7;
                margin-bottom: 2.5rem;
            }

            .qb-feature-list {
                list-style: none;
                padding: 0;
                margin-bottom: 2.5rem;
            }

            .qb-feature-list li {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1rem 0;
                font-size: 1.125rem;
                color: var(--text-primary);
                border-bottom: 1px solid var(--border-light);
                transition: all 0.3s ease;
            }

            .qb-feature-list li:hover {
                padding-left: 0.5rem;
                background: rgba(5, 150, 105, 0.02);
            }

            .qb-feature-list li:last-child {
                border-bottom: none;
            }

            .list-icon {
                width: 28px;
                height: 28px;
                background: var(--gradient-secondary);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.875rem;
                font-weight: 700;
                flex-shrink: 0;
            }

            .qb-cta-link {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                color: var(--secondary-color);
                text-decoration: none;
                font-size: 1.125rem;
                font-weight: 700;
                padding: 1rem 2rem;
                border-radius: 8px;
                background: rgba(5, 150, 105, 0.05);
                border: 2px solid transparent;
                transition: all 0.3s ease;
            }

            .qb-cta-link:hover {
                background: var(--secondary-color);
                color: white;
                border-color: var(--secondary-color);
                transform: translateX(4px);
                box-shadow: 0 8px 25px rgba(5, 150, 105, 0.3);
            }

            .cta-arrow {
                transition: transform 0.3s ease;
                font-size: 1.25rem;
            }

            .qb-cta-link:hover .cta-arrow {
                transform: translateX(6px);
            }

            /* Visual Side - Mockups */
            .qb-visual-side {
                position: relative;
                perspective: 1500px;
            }

            .qb-mockup {
                position: relative;
                transform-style: preserve-3d;
                animation: floatMockup 6s ease-in-out infinite;
            }

            @keyframes floatMockup {
                0%, 100% {
                    transform: translateY(0) rotateY(-3deg);
                }
                50% {
                    transform: translateY(-15px) rotateY(3deg);
                }
            }

            .mockup-window {
                background: white;
                border-radius: 20px;
                box-shadow: 0 40px 100px rgba(0, 0, 0, 0.15);
                overflow: hidden;
                border: 1px solid var(--border-light);
                transition: all 0.5s ease;
            }

            .qb-mockup:hover .mockup-window {
                box-shadow: 0 50px 120px rgba(0, 0, 0, 0.2);
                transform: scale(1.02);
            }

            .window-header {
                background: linear-gradient(180deg, #f9fafb 0%, #f3f4f6 100%);
                padding: 1.25rem 1.5rem;
                border-bottom: 1px solid var(--border-light);
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            .window-dots {
                display: flex;
                gap: 0.5rem;
            }

            .window-dots span {
                width: 14px;
                height: 14px;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .window-dots span:nth-child(1) {
                background: #ff5f57;
            }

            .window-dots span:nth-child(2) {
                background: #ffbd2e;
            }

            .window-dots span:nth-child(3) {
                background: #28ca42;
            }

            .mockup-window:hover .window-dots span {
                transform: scale(1.2);
            }

            .window-title {
                font-size: 1rem;
                font-weight: 600;
                color: var(--text-primary);
            }

            .window-content {
                padding: 2.5rem;
                background: white;
            }

            /* Invoice Preview Mockup */
            .invoice-preview {
                animation: fadeInScale 0.6s ease-out;
            }

            @keyframes fadeInScale {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            .invoice-header-mock {
                display: flex;
                justify-content: space-between;
                margin-bottom: 2rem;
                padding-bottom: 1.5rem;
                border-bottom: 2px solid var(--surface);
            }

            .company-logo-mock {
                width: 80px;
                height: 80px;
                background: var(--gradient-secondary);
                border-radius: 12px;
                animation: pulse 2s ease-in-out infinite;
            }

            .invoice-details-mock {
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
                align-items: flex-end;
            }

            .detail-line {
                height: 12px;
                width: 150px;
                background: var(--surface);
                border-radius: 6px;
                animation: shimmerLine 2s ease-in-out infinite;
            }

            .detail-line.short {
                width: 100px;
            }

            @keyframes shimmerLine {
                0%, 100% {
                    opacity: 0.6;
                }
                50% {
                    opacity: 1;
                }
            }

            .invoice-items {
                margin-bottom: 2rem;
            }

            .item-row {
                height: 16px;
                background: var(--surface);
                border-radius: 8px;
                margin-bottom: 1rem;
                animation: slideInLeft 0.5s ease-out both;
            }

            .item-row:nth-child(1) {
                width: 90%;
                animation-delay: 0.1s;
            }

            .item-row:nth-child(2) {
                width: 75%;
                animation-delay: 0.2s;
            }

            .item-row:nth-child(3) {
                width: 85%;
                animation-delay: 0.3s;
            }

            .invoice-total {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1.5rem;
                background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(5, 150, 105, 0.05));
                border-radius: 12px;
                border: 2px solid rgba(5, 150, 105, 0.2);
            }

            .total-label {
                font-size: 1.25rem;
                font-weight: 600;
                color: var(--text-primary);
            }

            .total-amount {
                font-size: 2rem;
                font-weight: 800;
                color: var(--secondary-color);
                animation: countUp 1s ease-out;
            }

            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Expense Chart Mockup */
            .expense-chart {
                position: relative;
                width: 200px;
                height: 200px;
                margin: 0 auto 2rem;
            }

            .chart-segment {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                border: 30px solid;
                clip-path: polygon(50% 50%, 50% 0%, 100% 0%, 100% 100%, 50% 100%);
                animation: rotateSegment 1.5s ease-out both;
            }

            .seg-1 {
                border-color: #059669;
                transform: rotate(0deg);
                animation-delay: 0s;
            }

            .seg-2 {
                border-color: #1E40AF;
                transform: rotate(120deg);
                animation-delay: 0.2s;
            }

            .seg-3 {
                border-color: #F59E0B;
                transform: rotate(240deg);
                animation-delay: 0.4s;
            }

            @keyframes rotateSegment {
                from {
                    transform: rotate(var(--start-rotation, 0deg)) scale(0);
                    opacity: 0;
                }
                to {
                    transform: rotate(var(--end-rotation, 0deg)) scale(1);
                    opacity: 1;
                }
            }

            .chart-center {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                background: white;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .chart-total {
                font-size: 1.75rem;
                font-weight: 800;
                color: var(--text-primary);
            }

            .chart-label {
                font-size: 0.875rem;
                color: var(--text-secondary);
            }

            .expense-categories {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .category-item {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1rem;
                background: var(--surface);
                border-radius: 12px;
                transition: all 0.3s ease;
                animation: slideInRight 0.5s ease-out both;
            }

            .category-item:nth-child(1) { animation-delay: 0.6s; }
            .category-item:nth-child(2) { animation-delay: 0.7s; }
            .category-item:nth-child(3) { animation-delay: 0.8s; }

            .category-item:hover {
                transform: translateX(8px);
                background: white;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            }

            .cat-color {
                width: 16px;
                height: 16px;
                border-radius: 4px;
            }

            .cat-name {
                flex: 1;
                font-weight: 600;
                color: var(--text-primary);
            }

            .cat-amount {
                font-weight: 700;
                color: var(--text-primary);
                font-size: 1.125rem;
            }

            /* Report Graph Mockup */
            .report-graph {
                position: relative;
                height: 250px;
                margin-bottom: 2rem;
                padding: 1.5rem;
                background: var(--surface);
                border-radius: 16px;
            }

            .graph-bars {
                display: flex;
                align-items: flex-end;
                justify-content: space-around;
                height: 180px;
                gap: 1rem;
            }

            .graph-bar {
                flex: 1;
                background: var(--gradient-secondary);
                border-radius: 8px 8px 0 0;
                min-height: 20px;
                animation: barGrowUp 1s ease-out both;
                position: relative;
                transition: all 0.3s ease;
            }

            .graph-bar:hover {
                transform: scaleY(1.05);
                filter: brightness(1.1);
            }

            .graph-bar:nth-child(1) { animation-delay: 0.1s; }
            .graph-bar:nth-child(2) { animation-delay: 0.2s; }
            .graph-bar:nth-child(3) { animation-delay: 0.3s; }
            .graph-bar:nth-child(4) { animation-delay: 0.4s; }
            .graph-bar:nth-child(5) { animation-delay: 0.5s; }
            .graph-bar:nth-child(6) { animation-delay: 0.6s; }

            @keyframes barGrowUp {
                from {
                    transform: scaleY(0);
                    opacity: 0;
                }
                to {
                    transform: scaleY(1);
                    opacity: 1;
                }
            }

            .graph-line {
                position: absolute;
                top: 1.5rem;
                left: 1.5rem;
                right: 1.5rem;
                height: 180px;
                background: linear-gradient(to right, transparent 0%, var(--primary-color) 50%, transparent 100%);
                clip-path: polygon(0 80%, 16% 60%, 33% 70%, 50% 40%, 66% 50%, 83% 20%, 100% 30%, 100% 100%, 0 100%);
                opacity: 0.3;
                animation: lineGrow 1.5s ease-out 0.7s both;
            }

            @keyframes lineGrow {
                from {
                    clip-path: polygon(0 80%, 0 80%, 0 80%, 0 80%, 0 80%, 0 80%, 0 80%, 0 100%, 0 100%);
                }
                to {
                    clip-path: polygon(0 80%, 16% 60%, 33% 70%, 50% 40%, 66% 50%, 83% 20%, 100% 30%, 100% 100%, 0 100%);
                }
            }

            .report-metrics {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
            }

            .metric-box {
                background: white;
                padding: 1.5rem;
                border-radius: 12px;
                text-align: center;
                border: 1px solid var(--border-light);
                transition: all 0.3s ease;
                animation: fadeInUp 0.6s ease-out both;
            }

            .metric-box:nth-child(1) { animation-delay: 0.8s; }
            .metric-box:nth-child(2) { animation-delay: 0.9s; }

            .metric-box:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                border-color: var(--secondary-color);
            }

            .metric-val {
                font-size: 2.25rem;
                font-weight: 800;
                color: var(--secondary-color);
                margin-bottom: 0.5rem;
            }

            .metric-lbl {
                font-size: 0.95rem;
                color: var(--text-secondary);
                text-transform: uppercase;
                letter-spacing: 0.5px;
                font-weight: 600;
            }

            /* Payment Methods Mockup */
            .payment-methods {
                animation: fadeInScale 0.6s ease-out;
            }

            .payment-card {
                background: var(--gradient-primary);
                color: white;
                padding: 2rem;
                border-radius: 16px;
                margin-bottom: 2rem;
                position: relative;
                overflow: hidden;
                box-shadow: 0 15px 40px rgba(30, 64, 175, 0.3);
                animation: cardSlideIn 0.8s ease-out;
            }

            @keyframes cardSlideIn {
                from {
                    transform: translateX(-50px) rotate(-5deg);
                    opacity: 0;
                }
                to {
                    transform: translateX(0) rotate(0deg);
                    opacity: 1;
                }
            }

            .payment-card::before {
                content: '';
                position: absolute;
                top: -50%;
                right: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
                animation: shimmerCard 3s ease-in-out infinite;
            }

            @keyframes shimmerCard {
                0%, 100% {
                    transform: translate(0, 0);
                }
                50% {
                    transform: translate(-30%, -30%);
                }
            }

            .card-chip {
                width: 50px;
                height: 40px;
                background: linear-gradient(135deg, #ffd700, #ffed4e);
                border-radius: 8px;
                margin-bottom: 2rem;
                position: relative;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .card-chip::before {
                content: '';
                position: absolute;
                top: 8px;
                left: 8px;
                right: 8px;
                bottom: 8px;
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-radius: 4px;
            }

            .card-number {
                font-size: 1.5rem;
                font-weight: 600;
                letter-spacing: 0.1em;
                margin-bottom: 1rem;
                font-family: 'Courier New', monospace;
            }

            .card-name {
                font-size: 0.95rem;
                opacity: 0.9;
                text-transform: uppercase;
                letter-spacing: 0.05em;
            }

            .payment-options {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .payment-opt {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1.25rem;
                background: white;
                border-radius: 12px;
                border: 2px solid var(--border-light);
                font-weight: 600;
                color: var(--text-primary);
                transition: all 0.3s ease;
                animation: slideInRight 0.5s ease-out both;
            }

            .payment-opt:nth-child(1) { animation-delay: 0.5s; }
            .payment-opt:nth-child(2) { animation-delay: 0.6s; }
            .payment-opt:nth-child(3) { animation-delay: 0.7s; }

            .payment-opt:hover {
                border-color: var(--secondary-color);
                transform: translateX(8px);
                box-shadow: 0 8px 25px rgba(5, 150, 105, 0.15);
            }

            .opt-icon {
                font-size: 1.75rem;
            }

            /* Floating Badges */
            .floating-badge {
                position: absolute;
                background: white;
                padding: 0.75rem 1.25rem;
                border-radius: 25px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                display: flex;
                align-items: center;
                gap: 0.5rem;
                font-weight: 600;
                font-size: 0.95rem;
                color: var(--text-primary);
                border: 1px solid var(--border-light);
                animation: floatBadge 3s ease-in-out infinite;
                z-index: 10;
            }

            .badge-1 {
                top: 10%;
                right: -5%;
                animation-delay: 0s;
            }

            .badge-2 {
                bottom: 15%;
                left: -5%;
                animation-delay: 1s;
            }

            .badge-3 {
                top: 20%;
                right: -8%;
                animation-delay: 0.5s;
            }

            @keyframes floatBadge {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(-15px) rotate(2deg);
                }
            }

            .badge-icon-float {
                font-size: 1.25rem;
            }

            .floating-badge:hover {
                transform: scale(1.1);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            }

            /* Responsive Design */
            @media (max-width: 1024px) {
                .qb-split {
                    grid-template-columns: 1fr;
                    gap: 3rem;
                }

                .qb-text-side {
                    max-width: 100%;
                    text-align: center;
                }

                .qb-feature-list li {
                    justify-content: center;
                }

                .qb-cta-link {
                    margin: 0 auto;
                }

                .qb-visual-side {
                    max-width: 600px;
                    margin: 0 auto;
                }
            }

            @media (max-width: 768px) {
                .qb-showcase {
                    padding: 4rem 0;
                }

                .qb-title {
                    font-size: 2.5rem;
                }

                .qb-subtitle {
                    font-size: 1.125rem;
                }

                .qb-feature-title {
                    font-size: 2rem;
                }

                .qb-tabs {
                    flex-direction: column;
                    gap: 0.5rem;
                }

                .qb-tab {
                    width: 100%;
                    justify-content: center;
                }

                .floating-badge {
                    display: none;
                }
            }
        </style>
@endpush

        @section('content')
          <!-- Enhanced Hero Section -->
        <section class="hero">
            <div class="hero-background">
                <div class="hero-shapes">
                    <div class="hero-shape hero-shape-1 animate-float"></div>
                    <div class="hero-shape hero-shape-2 animate-float"></div>
                    <div class="hero-shape hero-shape-3 animate-float"></div>
                </div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text animate-slide-left">
                        <div class="hero-badge animate-pulse">
                            <span class="badge-icon">🚀</span>
                            <span class="badge-text">Trusted by 10,000+ businesses worldwide</span>
                        </div>
                        <h1 class="hero-title">
                            <span class="title-line animate-fade-in-up" style="animation-delay: 0.2s;">Powerful Financial</span>
                            <span class="title-line animate-fade-in-up" style="animation-delay: 0.4s;">Management for</span>
                            <span class="title-line title-highlight animate-fade-in-up" style="animation-delay: 0.6s;">Your Business</span>
                        </h1>
                        <p class="hero-description animate-fade-in-up" style="animation-delay: 0.8s;">
                            Take complete control of your company's cash flow with our comprehensive multi-tenant SaaS platform. 
                            From invoicing to expense tracking, we've got you covered.
                        </p>
                        <div class="hero-stats animate-fade-in-up" style="animation-delay: 1s;">
                            <div class="stat-item">
                                <div class="stat-number">$50M+</div>
                                <div class="stat-label">Processed</div>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <div class="stat-number">99.9%</div>
                                <div class="stat-label">Uptime</div>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Support</div>
                            </div>
                        </div>
                        <div class="hero-buttons animate-fade-in-up" style="animation-delay: 1.2s;">
                            <a href="#" class="btn btn-primary btn-enhanced animate-glow">
                                <span class="btn-icon">🎯</span>
                                <span class="btn-text">Start Free Trial</span>
                                <span class="btn-arrow">→</span>
                            </a>
                            <a href="#" class="btn btn-secondary btn-enhanced">
                                <span class="btn-icon">▶️</span>
                                <span class="btn-text">Watch Demo</span>
                            </a>
                        </div>
                        <div class="hero-trust animate-fade-in-up" style="animation-delay: 1.4s;">
                            <p>No credit card required • 14-day free trial • Cancel anytime</p>
                        </div>
                    </div>
                    <div class="hero-visual animate-slide-right">
                        <div class="dashboard-preview-enhanced">
                            <div class="dashboard-header">
                                <div class="dashboard-nav">
                                    <div class="nav-dot nav-dot-active"></div>
                                    <div class="nav-dot"></div>
                                    <div class="nav-dot"></div>
                                </div>
                                <div class="dashboard-title">💰 FinanceFlow Dashboard</div>
                            </div>
                            <div class="dashboard-content">
                                <div class="dashboard-card card-1 animate-pulse" style="animation-delay: 1.6s;">
                                    <div class="card-title">Monthly Revenue</div>
                                    <div class="card-value">$45,230</div>
                                    <div class="card-growth">+12.5% ↗️</div>
                                </div>
                                <div class="dashboard-card card-2 animate-pulse" style="animation-delay: 1.8s;">
                                    <div class="card-title">Active Clients</div>
                                    <div class="card-value">342</div>
                                    <div class="card-growth">+8.3% ↗️</div>
                                </div>
                                <div class="dashboard-chart animate-fade-in-up" style="animation-delay: 2s;">
                                    <div class="chart-bars">
                                        <div class="bar" style="height: 60%; animation-delay: 2.2s;"></div>
                                        <div class="bar" style="height: 80%; animation-delay: 2.4s;"></div>
                                        <div class="bar" style="height: 45%; animation-delay: 2.6s;"></div>
                                        <div class="bar" style="height: 90%; animation-delay: 2.8s;"></div>
                                        <div class="bar" style="height: 70%; animation-delay: 3s;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="float-card float-card-1 animate-float" style="animation-delay: 0.5s;">
                                <span class="float-icon">📊</span>
                                <span class="float-text">Real-time Analytics</span>
                            </div>
                            <div class="float-card float-card-2 animate-float" style="animation-delay: 1s;">
                                <span class="float-icon">🔒</span>
                                <span class="float-text">Bank-level Security</span>
                            </div>
                            <div class="float-card float-card-3 animate-float" style="animation-delay: 1.5s;">
                                <span class="float-icon">⚡</span>
                                <span class="float-text">Lightning Fast</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- QuickBooks-Style Interactive Showcase Section -->
        <section class="qb-showcase">
            <div class="container">
                <!-- Section Header -->
                <div class="qb-header">
                    <span class="qb-badge">
                        <span class="qb-badge-icon">✨</span>
                        Everything You Need
                    </span>
                    <h2 class="qb-title">Run your business with confidence</h2>
                    <p class="qb-subtitle">Powerful tools that work together to help you manage your finances, save time, and grow your business</p>
                </div>

                <!-- Interactive Tabs -->
                <div class="qb-tabs">
                    <button class="qb-tab active" data-tab="invoicing">
                        <span class="tab-icon">💰</span>
                        <span class="tab-text">Invoicing</span>
                    </button>
                    <button class="qb-tab" data-tab="expenses">
                        <span class="tab-icon">📊</span>
                        <span class="tab-text">Expenses</span>
                    </button>
                    <button class="qb-tab" data-tab="reports">
                        <span class="tab-icon">📈</span>
                        <span class="tab-text">Reports</span>
                    </button>
                    <button class="qb-tab" data-tab="payments">
                        <span class="tab-icon">💳</span>
                        <span class="tab-text">Payments</span>
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="qb-content-wrapper">
                    <!-- Invoicing Tab -->
                    <div class="qb-tab-content active" id="invoicing">
                        <div class="qb-split">
                            <div class="qb-text-side">
                                <h3 class="qb-feature-title">Create professional invoices in seconds</h3>
                                <p class="qb-feature-desc">Send polished, customizable invoices that get you paid faster. Track payment status, send automatic reminders, and accept online payments.</p>
                                <ul class="qb-feature-list">
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Customizable invoice templates</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Automatic payment reminders</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Online payment acceptance</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Real-time payment tracking</span>
                                    </li>
                                </ul>
                                <a href="#" class="qb-cta-link">
                                    <span>Explore invoicing</span>
                                    <span class="cta-arrow">→</span>
                                </a>
                            </div>
                            <div class="qb-visual-side">
                                <div class="qb-mockup">
                                    <div class="mockup-window">
                                        <div class="window-header">
                                            <div class="window-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                            <span class="window-title">Invoice #1234</span>
                                        </div>
                                        <div class="window-content">
                                            <div class="invoice-preview">
                                                <div class="invoice-header-mock">
                                                    <div class="company-logo-mock"></div>
                                                    <div class="invoice-details-mock">
                                                        <div class="detail-line"></div>
                                                        <div class="detail-line short"></div>
                                                    </div>
                                                </div>
                                                <div class="invoice-items">
                                                    <div class="item-row"></div>
                                                    <div class="item-row"></div>
                                                    <div class="item-row"></div>
                                                </div>
                                                <div class="invoice-total">
                                                    <div class="total-label">Total</div>
                                                    <div class="total-amount">$2,450</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="floating-badge badge-1">
                                        <span class="badge-icon-float">✓</span>
                                        <span>Paid</span>
                                    </div>
                                    <div class="floating-badge badge-2">
                                        <span class="badge-icon-float">📧</span>
                                        <span>Sent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expenses Tab -->
                    <div class="qb-tab-content" id="expenses">
                        <div class="qb-split">
                            <div class="qb-text-side">
                                <h3 class="qb-feature-title">Track every expense effortlessly</h3>
                                <p class="qb-feature-desc">Capture receipts on the go, categorize expenses automatically, and get real-time insights into your spending patterns.</p>
                                <ul class="qb-feature-list">
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Receipt scanning & OCR</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Automatic categorization</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Mileage tracking</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Expense reports</span>
                                    </li>
                                </ul>
                                <a href="#" class="qb-cta-link">
                                    <span>Explore expense tracking</span>
                                    <span class="cta-arrow">→</span>
                                </a>
                            </div>
                            <div class="qb-visual-side">
                                <div class="qb-mockup">
                                    <div class="mockup-window">
                                        <div class="window-header">
                                            <div class="window-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                            <span class="window-title">Expenses Dashboard</span>
                                        </div>
                                        <div class="window-content">
                                            <div class="expense-chart">
                                                <div class="chart-segment seg-1"></div>
                                                <div class="chart-segment seg-2"></div>
                                                <div class="chart-segment seg-3"></div>
                                                <div class="chart-center">
                                                    <div class="chart-total">$12.5K</div>
                                                    <div class="chart-label">This Month</div>
                                                </div>
                                            </div>
                                            <div class="expense-categories">
                                                <div class="category-item">
                                                    <div class="cat-color" style="background: #059669;"></div>
                                                    <div class="cat-name">Office</div>
                                                    <div class="cat-amount">$4.2K</div>
                                                </div>
                                                <div class="category-item">
                                                    <div class="cat-color" style="background: #1E40AF;"></div>
                                                    <div class="cat-name">Travel</div>
                                                    <div class="cat-amount">$3.8K</div>
                                                </div>
                                                <div class="category-item">
                                                    <div class="cat-color" style="background: #F59E0B;"></div>
                                                    <div class="cat-name">Supplies</div>
                                                    <div class="cat-amount">$2.5K</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reports Tab -->
                    <div class="qb-tab-content" id="reports">
                        <div class="qb-split">
                            <div class="qb-text-side">
                                <h3 class="qb-feature-title">Make data-driven decisions</h3>
                                <p class="qb-feature-desc">Generate comprehensive financial reports with a single click. Visualize your business performance and identify growth opportunities.</p>
                                <ul class="qb-feature-list">
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Profit & loss statements</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Cash flow analysis</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Balance sheets</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Custom reports</span>
                                    </li>
                                </ul>
                                <a href="#" class="qb-cta-link">
                                    <span>Explore reports</span>
                                    <span class="cta-arrow">→</span>
                                </a>
                            </div>
                            <div class="qb-visual-side">
                                <div class="qb-mockup">
                                    <div class="mockup-window">
                                        <div class="window-header">
                                            <div class="window-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                            <span class="window-title">Financial Reports</span>
                                        </div>
                                        <div class="window-content">
                                            <div class="report-graph">
                                                <div class="graph-bars">
                                                    <div class="graph-bar" style="height: 45%;"></div>
                                                    <div class="graph-bar" style="height: 65%;"></div>
                                                    <div class="graph-bar" style="height: 55%;"></div>
                                                    <div class="graph-bar" style="height: 85%;"></div>
                                                    <div class="graph-bar" style="height: 75%;"></div>
                                                    <div class="graph-bar" style="height: 95%;"></div>
                                                </div>
                                                <div class="graph-line"></div>
                                            </div>
                                            <div class="report-metrics">
                                                <div class="metric-box">
                                                    <div class="metric-val">+23%</div>
                                                    <div class="metric-lbl">Growth</div>
                                                </div>
                                                <div class="metric-box">
                                                    <div class="metric-val">$127K</div>
                                                    <div class="metric-lbl">Revenue</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payments Tab -->
                    <div class="qb-tab-content" id="payments">
                        <div class="qb-split">
                            <div class="qb-text-side">
                                <h3 class="qb-feature-title">Get paid faster, every time</h3>
                                <p class="qb-feature-desc">Accept credit cards, bank transfers, and digital payments. Automated payment processing means you get paid faster with less effort.</p>
                                <ul class="qb-feature-list">
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Multiple payment methods</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Secure payment processing</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Recurring billing</span>
                                    </li>
                                    <li>
                                        <span class="list-icon">✓</span>
                                        <span>Payment reconciliation</span>
                                    </li>
                                </ul>
                                <a href="#" class="qb-cta-link">
                                    <span>Explore payments</span>
                                    <span class="cta-arrow">→</span>
                                </a>
                            </div>
                            <div class="qb-visual-side">
                                <div class="qb-mockup">
                                    <div class="mockup-window">
                                        <div class="window-header">
                                            <div class="window-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                            <span class="window-title">Payment Methods</span>
                                        </div>
                                        <div class="window-content">
                                            <div class="payment-methods">
                                                <div class="payment-card">
                                                    <div class="card-chip"></div>
                                                    <div class="card-number">•••• •••• •••• 4242</div>
                                                    <div class="card-name">Business Account</div>
                                                </div>
                                                <div class="payment-options">
                                                    <div class="payment-opt">
                                                        <span class="opt-icon">💳</span>
                                                        <span>Credit Card</span>
                                                    </div>
                                                    <div class="payment-opt">
                                                        <span class="opt-icon">🏦</span>
                                                        <span>Bank Transfer</span>
                                                    </div>
                                                    <div class="payment-opt">
                                                        <span class="opt-icon">📱</span>
                                                        <span>Digital Wallet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="floating-badge badge-3">
                                        <span class="badge-icon-float">🔒</span>
                                        <span>Secure</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        
        
        <!-- Trust Section -->
        <section class="trust-section">
            <div class="container">
                <div class="section-title animate-fade-in-up">
                    <h2>Trusted by Businesses Worldwide</h2>
                    <p>Join thousands of companies that rely on FinanceFlow to manage their finances efficiently.</p>
                </div>

                <div class="trust-stats">
                    <div class="trust-stat">
                        <h3 class="counter" data-target="10000">0</h3>
                        <p>Active Businesses</p>
                    </div>
                    <div class="trust-stat">
                        <h3 class="counter" data-target="50">0</h3>
                        <p>Million Processed</p>
                    </div>
                    <div class="trust-stat">
                        <h3 class="counter" data-target="99.9">0</h3>
                        <p>Uptime Guarantee</p>
                    </div>
                    <div class="trust-stat">
                        <h3>24/7</h3>
                        <p>Customer Support</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Privacy & Security Section -->
        <section class="privacy-section">
            <div class="container">
                <div class="privacy-hero">
                    <h2>Choose Privacy. Choose Security.</h2>
                    <p>At FinanceFlow, we take pride in our perpetual efforts to surpass all expectations in providing security and privacy to our customers in this increasingly connected world.</p>
                </div>
                
                <div class="privacy-features">
                    <div class="privacy-card">
                        <div class="privacy-icon">🔒</div>
                        <h3>Bank-Level Security</h3>
                        <p>Your financial data is stored on secure servers in the US with 24/7 monitoring, ensuring it's protected against unauthorized access and data breaches.</p>
                        <ul class="privacy-list">
                            <li>256-bit SSL encryption</li>
                            <li>Multi-factor authentication</li>
                            <li>Regular security audits</li>
                            <li>24/7 monitoring & alerts</li>
                        </ul>
                    </div>
                    
                    <div class="privacy-card">
                        <div class="privacy-icon">🛡️</div>
                        <h3>Data Protection</h3>
                        <p>We implement comprehensive data protection measures to ensure your business information remains confidential and secure at all times.</p>
                        <ul class="privacy-list">
                            <li>Regular automated backups</li>
                            <li>Data encryption at rest</li>
                            <li>Secure data centers</li>
                            <li>Access control & logging</li>
                        </ul>
                    </div>
                    
                    <div class="privacy-card">
                        <div class="privacy-icon">👥</div>
                        <h3>Privacy by Design</h3>
                        <p>Privacy is built into every aspect of our platform. We collect only what's necessary and give you full control over your data.</p>
                        <ul class="privacy-list">
                            <li>Minimal data collection</li>
                            <li>Transparent privacy policy</li>
                            <li>User data control</li>
                            <li>Right to data portability</li>
                        </ul>
                    </div>
                </div>
                
               
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-enhanced">
            <div class="container">
                <div class="cta-content">
                    <div class="cta-text animate-fade-in-up">
                        <h2>Ready to Transform Your Financial Management?</h2>
                        <p>Start your free trial today and discover how FinanceFlow can streamline your business finances, improve cash flow, and help you make better financial decisions with confidence.</p>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <span class="cta-feature-icon">✓</span>
                                <span>No credit card required</span>
                            </div>
                            <div class="cta-feature">
                                <span class="cta-feature-icon">✓</span>
                                <span>14-day free trial</span>
                            </div>
                            <div class="cta-feature">
                                <span class="cta-feature-icon">✓</span>
                                <span>Cancel anytime</span>
                            </div>
                        </div>
                        <div class="cta-buttons">
                            <a href="#" class="btn-cta-primary animate-glow">
                                <span class="btn-icon">🚀</span>
                                <span class="btn-text">Start Free Trial</span>
                                <span class="btn-arrow">→</span>
                            </a>
                            <a href="#" class="btn-cta-secondary">
                                <span class="btn-icon">📞</span>
                                <span class="btn-text">Schedule a Demo</span>
                            </a>
                        </div>
                    </div>
                    <div class="cta-visual animate-slide-right">
                        <div class="cta-dashboard">
                            <div class="dashboard-mockup">
                                <div class="mockup-header">
                                    <div class="mockup-dots">
                                        <span></span><span></span><span></span>
                                    </div>
                                    <div class="mockup-title">📊 FinanceFlow Analytics</div>
                                </div>
                                <div class="mockup-content">
                                    <div class="metric-cards">
                                        <div class="metric-card animate-pulse" style="animation-delay: 0.5s;">
                                            <div class="metric-value">$127K</div>
                                            <div class="metric-label">Revenue</div>
                                            <div class="metric-trend positive">+23%</div>
                                        </div>
                                        <div class="metric-card animate-pulse" style="animation-delay: 0.7s;">
                                            <div class="metric-value">2.4K</div>
                                            <div class="metric-label">Invoices</div>
                                            <div class="metric-trend positive">+12%</div>
                                        </div>
                                    </div>
                                    <div class="chart-area animate-fade-in-up" style="animation-delay: 0.9s;">
                                        <div class="chart-placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @endsection
        
        
        @push('scripts')
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
            
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        entry.target.classList.add('animate-in-view');
                    }
                });
            }, observerOptions);
            
            // Observe elements for scroll animations
            document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = document.querySelectorAll('.animate-fade-in-up, .animate-slide-left, .animate-slide-right, .feature-card, .privacy-card');
                animatedElements.forEach(el => {
                    el.style.animationPlayState = 'paused';
                    observer.observe(el);
                });
                
                // Add hover effects to cards
                const cards = document.querySelectorAll('.feature-card, .testimonial-card, .privacy-card');
                cards.forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        card.style.transform = 'translateY(-8px) scale(1.02)';
                        card.style.transition = 'all 0.3s ease';
                    });
                    
                    card.addEventListener('mouseleave', () => {
                        card.style.transform = 'translateY(0) scale(1)';
                    });
                });
                
                // Add parallax effect to hero shapes
                const heroShapes = document.querySelectorAll('.hero-shape');
                let ticking = false;
                
                function updateParallax() {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.5;
                    
                    heroShapes.forEach((shape, index) => {
                        const speed = (index + 1) * 0.3;
                        shape.style.transform = `translateY(${rate * speed}px)`;
                    });
                    
                    ticking = false;
                }
                
                function requestTick() {
                    if (!ticking) {
                        requestAnimationFrame(updateParallax);
                        ticking = true;
                    }
                }
                
                window.addEventListener('scroll', requestTick);
                
                // Counter animation
                const counters = document.querySelectorAll('.counter');
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseFloat(counter.getAttribute('data-target'));
                            const suffix = target === 10000 ? 'K+' : target === 50 ? 'M+' : target === 99.9 ? '%' : '';
                            
                            let current = 0;
                            const increment = target / 100;
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    current = target;
                                    clearInterval(timer);
                                }
                                
                                if (target === 10000) {
                                    counter.textContent = Math.floor(current / 1000) + 'K+';
                                } else if (target === 50) {
                                    counter.textContent = '$' + Math.floor(current) + 'M+';
                                } else if (target === 99.9) {
                                    counter.textContent = current.toFixed(1) + '%';
                                } else {
                                    counter.textContent = Math.floor(current) + suffix;
                                }
                            }, 20);
                            
                            counterObserver.unobserve(counter);
                        }
                    });
                }, { threshold: 0.7 });
                
                counters.forEach(counter => {
                    counterObserver.observe(counter);
                });

        // Marquee scrolling functionality
        const scrollingWrappers = document.querySelectorAll('.scrolling-wrapper');
        scrollingWrappers.forEach(wrapper => {
            const marquee = wrapper.querySelector('.features-marquee');
            if (marquee) {
                // Duplicate content for seamless loop using data-clone
                const originalContent = marquee.innerHTML;
                marquee.setAttribute('data-clone', originalContent);
                wrapper.addEventListener('mouseenter', () => {
                    marquee.style.animationPlayState = 'paused';
                });
                wrapper.addEventListener('mouseleave', () => {
                    marquee.style.animationPlayState = 'running';
                });
            }
        });
            });

             // Tab Switching Functionality
            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.qb-tab');
                const contents = document.querySelectorAll('.qb-tab-content');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        const targetTab = tab.getAttribute('data-tab');

                        // Remove active class from all tabs and contents
                        tabs.forEach(t => t.classList.remove('active'));
                        contents.forEach(c => c.classList.remove('active'));

                        // Add active class to clicked tab and corresponding content
                        tab.classList.add('active');
                        document.getElementById(targetTab).classList.add('active');
                    });
                });

                // Scroll Animation Observer
                const showcaseObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animationPlayState = 'running';
                        }
                    });
                }, {
                    threshold: 0.2,
                    rootMargin: '0px 0px -100px 0px'
                });

                const animatedElements = document.querySelectorAll('.qb-mockup, .qb-header, .qb-tabs');
                animatedElements.forEach(el => {
                    showcaseObserver.observe(el);
                });
            });
        </script>
        @endpush

        {{-- @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif --}}

