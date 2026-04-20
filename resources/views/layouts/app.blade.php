<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Library System' }}</title>
    <style>
        :root {
            --bg: #f7f8fc;
            --surface: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --line: #e5e7eb;
            --accent: #2563eb;
            --accent-dark: #1d4ed8;
            --success: #166534;
            --success-bg: #dcfce7;
            --danger: #b91c1c;
            --danger-bg: #fee2e2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            color: var(--text);
            background: var(--bg);
        }

        .container {
            width: min(1000px, 92%);
            margin: 0 auto;
        }

        .topbar {
            background: var(--surface);
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 14px 0;
        }

        .brand {
            font-weight: 700;
            letter-spacing: 0.2px;
            text-decoration: none;
            color: var(--text);
        }

        .nav {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .nav a {
            text-decoration: none;
            color: var(--muted);
            font-size: 14px;
            padding: 8px 10px;
            border-radius: 8px;
        }

        .nav a:hover {
            background: #eff6ff;
            color: var(--accent-dark);
        }

        .main {
            padding: 28px 0 36px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 18px;
        }

        .grid {
            display: grid;
            gap: 14px;
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--accent);
            background: var(--accent);
            color: #fff;
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--accent-dark);
            border-color: var(--accent-dark);
        }

        .btn-light {
            background: #fff;
            color: var(--accent-dark);
            border-color: #bfdbfe;
        }

        .btn-light:hover {
            background: #eff6ff;
        }

        .btn-danger {
            background: #fff;
            color: var(--danger);
            border-color: #fecaca;
        }

        .btn-danger:hover {
            background: var(--danger-bg);
        }

        .title {
            margin: 0 0 8px;
            font-size: 26px;
            line-height: 1.15;
        }

        .subtitle {
            margin: 0;
            color: var(--muted);
        }

        .stack {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .flash {
            margin-bottom: 14px;
            background: var(--success-bg);
            border: 1px solid #86efac;
            color: var(--success);
            padding: 10px 12px;
            border-radius: 8px;
            font-size: 14px;
        }

        .errors {
            margin-bottom: 14px;
            background: var(--danger-bg);
            border: 1px solid #fca5a5;
            color: var(--danger);
            padding: 10px 12px;
            border-radius: 8px;
            font-size: 14px;
        }

        .stat {
            font-size: 30px;
            font-weight: 700;
            margin-top: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            border-bottom: 1px solid var(--line);
            text-align: left;
            padding: 10px 8px;
            vertical-align: top;
        }

        th {
            color: var(--muted);
            font-weight: 600;
        }

        form label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #374151;
        }

        input {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 10px 11px;
            font-size: 14px;
        }

        .form-grid {
            display: grid;
            gap: 12px;
        }

        .footer {
            color: var(--muted);
            font-size: 13px;
            text-align: center;
            margin-top: 22px;
        }

        .toast-wrap {
            position: fixed;
            right: 16px;
            top: 16px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: min(360px, calc(100vw - 32px));
        }

        .toast {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
            border-radius: 10px;
            padding: 11px 12px;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.16);
            border: 1px solid;
            font-size: 14px;
            line-height: 1.4;
            background: #fff;
        }

        .toast-success {
            border-color: #86efac;
            color: #14532d;
            background: #dcfce7;
        }

        .toast-error {
            border-color: #fca5a5;
            color: #7f1d1d;
            background: #fee2e2;
        }

        .toast-close {
            border: 0;
            background: transparent;
            color: inherit;
            font-size: 17px;
            line-height: 1;
            cursor: pointer;
            opacity: 0.85;
            padding: 0;
            margin-top: 1px;
        }

        .toast-close:hover {
            opacity: 1;
        }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @yield('head')
</head>
<body>
    @hasSection('hide_topbar')
    @else
        <header class="topbar">
            <div class="container topbar-inner">
                <a class="brand" href="{{ route('landing') }}">Library System</a>
                <nav class="nav">
                    <a href="{{ route('landing') }}">Home</a>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </nav>
            </div>
        </header>
    @endif

    <main class="main @yield('main_class')">
        <div class="container @yield('container_class')">
            @yield('content')
        </div>
    </main>

    @if (session('status') || $errors->any())
        <div class="toast-wrap" id="toast-wrap">
            @if (session('status'))
                <div class="toast toast-success" role="status">
                    <span>{{ session('status') }}</span>
                    <button class="toast-close" type="button" aria-label="Dismiss">&times;</button>
                </div>
            @endif

            @if ($errors->any())
                <div class="toast toast-error" role="alert">
                    <span>{{ $errors->first() }}</span>
                    <button class="toast-close" type="button" aria-label="Dismiss">&times;</button>
                </div>
            @endif
        </div>

        <script>
            (() => {
                const toasts = document.querySelectorAll('.toast');
                toasts.forEach((toast) => {
                    const closeBtn = toast.querySelector('.toast-close');
                    if (closeBtn) {
                        closeBtn.addEventListener('click', () => {
                            toast.remove();
                        });
                    }
                    setTimeout(() => {
                        if (toast.isConnected) {
                            toast.remove();
                        }
                    }, 3500);
                });
            })();
        </script>
    @endif
</body>
</html>
