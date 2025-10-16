<section class="py-5" style="background: #F7F8F9;">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <x-pricing-card
                title="Simple Start"
                :price="['monthly' => 10, 'annual' => 8]"
                :features="['General Ledger', 'Accounts Payable & Receivable', 'Basic Reporting', '1 Admin User', 'Email Support']"
                description="Perfect for freelancers and small businesses"
                buttonText="Start free 30-day trial"
                buttonLink="/register"
                buttonClass="btn-success"
            />

            <x-pricing-card
                title="Essentials"
                :price="['monthly' => 30, 'annual' => 24]"
                :features="['All Simple Start features', 'Multi-Currency Support', 'Payroll Management', 'SMS/WhatsApp Alerts', 'Up to 5 Users', 'Priority Support']"
                description="For growing businesses"
                popular="true"
                buttonText="Start free 30-day trial"
                buttonLink="/register"
                buttonClass="btn-success"
            />

            <x-pricing-card
                title="Plus"
                :price="['monthly' => 80, 'annual' => 64]"
                :features="['All Essentials features', 'Custom Modules', 'Multi-Company Support', 'Advanced Analytics', 'Unlimited Users', '24/7 Phone Support']"
                description="For medium-sized businesses"
                buttonText="Start free 30-day trial"
                buttonLink="/register"
                buttonClass="btn-success"
            />

            <x-pricing-card
                title="Advanced"
                :price="['monthly' => 200, 'annual' => 160]"
                :features="['All Plus features', 'API Access', 'White-label Solutions', 'Dedicated Account Manager', 'Custom Integrations', 'Enterprise Security']"
                description="For large organizations"
                buttonText="Contact Sales"
                buttonLink="/contact"
                buttonClass="btn-outline-success"
            />
        </div>
    </div>
</section>
