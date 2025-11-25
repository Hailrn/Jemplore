<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Portal - Performance</title>
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
            position: relative;
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
            background-color: #f3f4f6;
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
            position: absolute;
            bottom: 24px;
            left: 0;
            width: 100%;
            padding: 0 12px;
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
            background-color: #f3f4f6;
        }

        .logout-btn i {
            width: 16px;
            margin-right: 12px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 32px;
            overflow-y: auto;
        }

        .content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        /* Performance Grid */
        .performance-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        /* Performance Card */
        .performance-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 24px;
        }

        .chart-container {
            background: linear-gradient(135deg, #f0fdfa 0%, #ccfbf1 100%);
            border-radius: 12px;
            padding: 48px 24px;
            text-align: center;
            min-height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .chart-icon {
            font-size: 48px;
            color: #14b8a6;
            margin-bottom: 16px;
        }

        .chart-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 8px;
        }

        .chart-value {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
        }

        @media (max-width: 968px) {
            .performance-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-title">Owner Portal</div>
                <div class="sidebar-subtitle">Tumpak Sewu Waterfall</div>
            </div>

            <nav class="sidebar-nav">
                <a href="#dashboard" class="nav-link">
                    <i class="fas fa-th-large"></i>
                    Dashboard
                </a>
                <a href="#manage-profile" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    Manage Profile
                </a>
                <a href="#manage-events" class="nav-link">
                    <i class="far fa-calendar"></i>
                    Manage Events
                </a>
                <a href="#performance" class="nav-link active">
                    <i class="fas fa-chart-bar"></i>
                    Performance
                </a>
                <a href="#submissions" class="nav-link">
                    <i class="far fa-file-alt"></i>
                    Submissions
                </a>
            </nav>

            <div class="sidebar-footer">
                <button class="logout-btn" onclick="logout()">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-wrapper">
                <h1 class="page-title">Performance Reports</h1>

                <div class="performance-grid">
                    <!-- Page Views Card -->
                    <div class="performance-card">
                        <h2 class="card-title">Page Views</h2>
                        <div class="chart-container">
                            <i class="fas fa-chart-bar chart-icon"></i>
                            <div class="chart-label">Views Chart</div>
                            <div class="chart-value">12,458 total views</div>
                        </div>
                    </div>

                    <!-- Review Trends Card -->
                    <div class="performance-card">
                        <h2 class="card-title">Review Trends</h2>
                        <div class="chart-container">
                            <i class="far fa-comment-dots chart-icon"></i>
                            <div class="chart-label">Review Analytics</div>
                            <div class="chart-value">4.9 avg rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                window.location.href = '/logout';
            }
        }
    </script>
</body>
</html>
