<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Portal - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f9fafb;
            color: #111827;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: white;
            border-right: 1px solid #e5e7eb;
            height: 100vh;
            position: sticky;
            top: 0;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .sidebar-header {
            padding: 24px;
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
        }

        .sidebar-subtitle {
            font-size: 12px;
            color: #6b7280;
            margin-top: 4px;
        }

        .sidebar-nav {
            padding: 0 12px;
            flex: 1;
            overflow-y: auto;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            margin-bottom: 4px;
            text-decoration: none;
            color: #374151;
            font-size: 14px;
            border-radius: 8px;
            transition: background-color 0.2s;
        }

        .nav-link:hover {
            background-color: #c9c9c9;
        }

        .nav-link.active {
            background-color: #14b8a6;
            color: white;
            font-weight: 500;
        }

        .nav-link i {
            width: 16px;
            margin-right: 12px;
        }

        .sidebar-footer {
            padding: 24px 12px;
            border-top: 1px solid #f3f4f6;
            margin-top: auto;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px 12px;
            background: none;
            border: none;
            color: #374151;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .logout-btn:hover {
            background-color: #c9c9c9;
        }

        .logout-btn i {
            width: 16px;
            margin-right: 12px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 32px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .stat-card-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .stat-info {
            flex: 1;
        }

        .stat-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 30px;
            font-weight: 700;
            color: #111827;
            margin: 8px 0;
        }

        .stat-change {
            font-size: 12px;
            color: #059669;
            margin-top: 8px;
        }

        .stat-change i {
            margin-right: 4px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .icon-blue {
            background-color: #dbeafe;
            color: #2563eb;
        }

        .icon-teal {
            background-color: #ccfbf1;
            color: #14b8a6;
        }

        .icon-cyan {
            background-color: #cffafe;
            color: #06b6d4;
        }

        /* Quick Actions */
        .quick-actions {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .actions-buttons {
            display: flex;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .btn-primary {
            background-color: #14b8a6;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0d9488;
        }

        .btn-secondary {
            background-color: white;
            color: #374151;
            border: 1px solid #d1d5db;
        }

        .btn-secondary:hover {
            background-color: #f9fafb;
        }

        .btn i {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .actions-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-title">Owner Portal</div>
                <div class="sidebar-subtitle">Tumpak Sewu Waterfall</div>
            </div>

            <nav class="sidebar-nav">
                <a href="{{ route('owner.dashboard') }}" class="nav-link active">
                    <i class="fas fa-th-large"></i>
                    Dashboard
                </a>
                <a href="{{ route('owner.profile.manage') }}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    Manage Profile
                </a>
                <a href="{{ route('owner.events.manage') }}" class="nav-link">
                    <i class="far fa-calendar"></i>
                    Manage Events
                </a>
                <a href="{{ route('owner.culinary.manage') }}" class="nav-link">
                    <i class="fas fa-utensils"></i>
                    Manage Culinary
                </a>
                <a href="{{ route('owner.reports.performance') }}" class="nav-link">
                    <i class="fas fa-chart-bar"></i>
                    Performance
                </a>
                <a href="{{ route('owner.submission.status') }}" class="nav-link">
                    <i class="far fa-file-alt"></i>
                    Submissions
                </a>
            </nav>

            <div class="sidebar-footer">
    
                <a href="{{ route('public.home') }}" class="nav-link" style="margin-bottom: 12px; color: #6b7280;">
                    <i class="fas fa-arrow-left"></i>
                    Back to Home
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <button class="logout-btn nav-link" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </aside>

        <main class="main-content">
            <h1 class="page-title">Dashboard Overview</h1>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card-content">
                        <div class="stat-info">
                            <div class="stat-label">Total Views</div>
                            <div class="stat-value">12,458</div>
                            <div class="stat-change">
                                <i class="fas fa-arrow-up"></i>
                                +15% this month
                            </div>
                        </div>
                        <div class="stat-icon icon-blue">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-card-content">
                        <div class="stat-info">
                            <div class="stat-label">Recent Reviews</div>
                            <div class="stat-value">127</div>
                            <div class="stat-change" style="color: #6b7280;">
                                Avg. rating: 4.9
                            </div>
                        </div>
                        <div class="stat-icon icon-teal">
                            <i class="far fa-comment-dots"></i>
                        </div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-card-content">
                        <div class="stat-info">
                            <div class="stat-label">Pending Submissions</div>
                            <div class="stat-value">2</div>
                            <div class="stat-change" style="color: #6b7280;">
                                Awaiting approval
                            </div>
                        </div>
                        <div class="stat-icon icon-cyan">
                            <i class="far fa-clock"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick-actions">
                <h2 class="section-title">Quick Actions</h2>
                <div class="actions-buttons">
                    <a href="#update-profile" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        Update Profile
                    </a>
                    <a href="#add-event" class="btn btn-secondary">
                        <i class="fas fa-plus"></i>
                        Add New Event
                    </a>
                    <a href="#view-reports" class="btn btn-secondary">
                        <i class="fas fa-chart-bar"></i>
                        View Reports
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        function confirmLogout() {
        if (confirm('Apakah Anda yakin ingin logout?')) {
            document.getElementById('logout-form').submit();
        }
    }

        // Active navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
