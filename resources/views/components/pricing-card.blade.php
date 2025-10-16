@props([
    'title',
    'price',
    'features' => [],
    'popular' => false,
    'description' => '',
    'buttonText' => 'Get Started',
    'buttonLink' => '#',
    'buttonClass' => 'btn-outline-primary'
])

<div class="col">
    <div class="card h-100 pricing-card {{ $popular ? 'popular-plan' : '' }} border-0" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; {{ $popular ? 'border: 2px solid #2563eb; box-shadow: 0 8px 30px rgba(37,99,235,0.2);' : '' }}">
        <style>
            .pricing-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
            }
        </style>
        <div class="card-body text-center p-4">
            @if($popular)
                <div class="popular-badge position-absolute top-0 start-50 translate-middle px-3 py-2 rounded-pill text-white fw-bold" style="background: #0dc26eff; font-size: 0.75rem; margin-top: -12px; z-index: 10;">
                    Most Popular
                </div>
            @endif

            <h3 class="plan-title fw-bold mb-3" style="font-size: 1.25rem; color: #2c3e50;">{{ $title }}</h3>

            <div class="price-section mb-3">
                <div class="d-flex align-items-baseline justify-content-center mb-1">
                    <span class="currency text-muted me-1" style="font-size: 1rem;">$</span>
                    <span class="price-value fw-bold" style="font-size: 2.5rem; color: #2563eb; line-height: 1;" data-monthly="{{ $price['monthly'] ?? $price }}" data-annual="{{ $price['annual'] ?? $price }}">
                        {{ $price['monthly'] ?? $price }}
                    </span>
                </div>
                <div class="billing-period text-muted mb-2" style="font-size: 0.9rem;">per month</div>
                <div class="discount-message text-muted small">Save 20% with annual billing</div>
            </div>

            @if($description)
                <p class="plan-description text-muted mb-4" style="font-size: 0.9rem; line-height: 1.5;">{{ $description }}</p>
            @endif

            <div class="features-list mb-4">
                <ul class="list-unstyled text-start" style="padding-left: 0;">
                    @foreach($features as $feature)
                        <li class="mb-2" style="font-size: 0.9rem; color: #6c757d;">
                            <i class="fas fa-check text-success me-2"></i>{{ $feature }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <a href="{{ $buttonLink }}" class="btn {{ $buttonClass }} w-100 py-2 fw-semibold mb-2" style="border-radius: 8px; font-size: 0.9rem;">
                {{ $buttonText }}
            </a>
            <p class="text-muted small mb-0">Start free 30-day trial</p>
        </div>
    </div>
</div>
