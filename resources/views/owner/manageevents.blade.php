<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Portal - Manage Events</title>
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
            overflow-y: auto;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
        }

        /* Form Container */
        .form-container {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 32px;
        }

        .form-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #111827;
            margin-bottom: 8px;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            background-color: #f9fafb;
            transition: border-color 0.2s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #14b8a6;
            box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
        }

        .form-textarea {
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #14b8a6;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0d9488;
        }

        .btn i {
            margin-right: 8px;
        }

        /* Events List */
        .events-container {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .events-list {
            margin-top: 20px;
        }

        .event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 12px;
            transition: background-color 0.2s;
        }

        .event-item:hover {
            background-color: #f9fafb;
        }

        .event-info h4 {
            font-size: 14px;
            font-weight: 500;
            color: #111827;
            margin-bottom: 4px;
        }

        .event-info p {
            font-size: 14px;
            color: #6b7280;
        }

        /* Status Badges */
        .badge {
            display: inline-block;
            padding: 4px 12px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 999px;
        }

        .badge-approved {
            background-color: #d1fae5;
            color: #065f46;
        }

        .badge-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
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
                <a href="{{ route('owner.dashboard') }}" class="nav-link">
                    <i class="fas fa-th-large"></i>
                    Dashboard
                </a>
                <a href="{{ route('owner.profile.manage') }}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    Manage Profile
                </a>
                <a href="{{ route('owner.events.manage') }}" class="nav-link active">
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

                <button class="logout-btn" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </aside>

        <main class="main-content">
            <div class="content-wrapper">
                <div class="page-header">
                    <h1 class="page-title">Manage Events</h1>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add New Event
                    </button>
                </div>

                <div class="form-container">
                    <h2 class="form-title">Create Event for Your Location</h2>

                    <form>
                        <div class="form-group">
                            <label class="form-label">Event Name</label>
                            <input type="text" class="form-input" placeholder="e.g., Sunrise Photography Workshop">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Event Date</label>
                                <input type="date" class="form-input">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Event Time</label>
                                <input type="time" class="form-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-textarea" rows="5" placeholder="Describe your event..."></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <select class="form-select">
                                <option>Select category</option>
                                <option>Workshop</option>
                                <option>Festival</option>
                                <option>Tour</option>
                                <option>Concert</option>
                                <option>Exhibition</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Submit Event
                        </button>
                    </form>
                </div>

                <div class="events-container">
                    <h2 class="form-title">Your Events</h2>

                    <div class="events-list">
                        <div class="event-item">
                            <div class="event-info">
                                <h4>Sunrise Trek</h4>
                                <p>2025-11-20</p>
                            </div>
                            <span class="badge badge-approved">Approved</span>
                        </div>

                        <div class="event-item">
                            <div class="event-info">
                                <h4>Photography Workshop</h4>
                                <p>2025-12-05</p>
                            </div>
                            <span class="badge badge-pending">Pending</span>
                        </div>
                    </div>
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
    </script>
</body>
</html>
