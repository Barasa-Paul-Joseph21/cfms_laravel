<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'FinanceFlow') }} - Powerful Financial Management Software</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:300,400,500,600,700|inter:400,500,600,700" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        :root {
            /* Primary Brand Colors */
            --primary-color: #1E40AF;        /* Deep Blue */
            --secondary-color: #059669;      /* Emerald Green */

            /* Legacy colors for backward compatibility */
            --primary-blue: #007bff;
            --secondary-green: #28a745;
            --accent-orange: #fd7e14;

            /* Neutral Colors */
            --background: #FFFFFF;           /* White */
            --surface: #F3F4F6;             /* Light Gray */
            --text-primary: #111827;         /* Dark Gray */
            --text-secondary: #6B7280;       /* Medium Gray */
            --text-light: #9CA3AF;          /* Light Gray Text */
            --border-light: #E5E7EB;         /* Border Color */

            /* Gradients */
            --gradient-primary: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
            --gradient-secondary: linear-gradient(135deg, #059669 0%, #047857 100%);
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-success {
            background-color: var(--secondary-green);
            border-color: var(--secondary-green);
        }
        .btn-success:hover {
            background-color: #1e7e34;
            border-color: #1e7e34;
        }
        .feature-icon {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-green));
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
    @stack('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>