<!-- Enhanced Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="#" class="footer-logo">
                    FinanceFlow
                </a>
                <div class="footer-description">
                    Powerful financial management software for businesses. Streamline accounting, invoicing, and reporting with our comprehensive SaaS platform.
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link" title="LinkedIn">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" title="Twitter">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" title="YouTube">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Product</h4>
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Integrations</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                <div class="footer-contact-info">
                    <div class="contact-item contact-email">support@financeflow.com</div>
                    <div class="contact-item contact-phone">+1 (555) 123-4567</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copyright">
                &copy; {{ date('Y') }} FinanceFlow. All rights reserved.
            </div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Security</a>
            </div>
        </div>
    </div>
</footer>

<style>
/* Enhanced Footer */
.footer {
    background: #1f2937;
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

/* Responsive Design for Footer */
@media (max-width: 1199px) {
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

@media (max-width: 991px) {
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
}

@media (max-width: 767px) {
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
        text-align: center;
    }

    .footer-copyright, .footer-links a {
        font-size: 0.85rem;
    }
}

@media (max-width: 575px) {
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
</style>
