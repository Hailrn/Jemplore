<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Portal - Manage Profile</title>
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
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        /* Content Editor */
        .editor-container {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .editor-header {
            margin-bottom: 24px;
        }

        .editor-title {
            font-size: 14px;
            font-weight: 500;
            color: #111827;
            margin-bottom: 4px;
        }

        .editor-subtitle {
            font-size: 12px;
            color: #6b7280;
        }

        /* Content Blocks */
        .content-block {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 16px;
            transition: border-color 0.2s;
        }

        .content-block:hover {
            border-color: #14b8a6;
        }

        .content-block.active {
            border-color: #14b8a6;
            background-color: #f0fdfa;
        }

        .block-header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .drag-handle {
            color: #9ca3af;
            margin-right: 12px;
            cursor: move;
        }

        .block-icon {
            margin-right: 8px;
            color: #14b8a6;
        }

        .block-title {
            font-size: 14px;
            font-weight: 500;
            color: #111827;
        }

        /* Hero Image Block */
        .hero-upload {
            background-color: #ecfeff;
            border: 1px solid #67e8f9;
            border-radius: 8px;
            height: 280px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-upload p {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 12px;
        }

        .form-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #14b8a6;
            box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
        }

        textarea.form-input {
            resize: vertical;
            background-color: #f9fafb;
        }

        /* Photo Gallery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 16px;
        }

        .gallery-item {
            background-color: #ecfeff;
            border: 1px solid #67e8f9;
            border-radius: 8px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #6b7280;
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

        .btn-secondary {
            background-color: white;
            color: #14b8a6;
            border: 1px solid #14b8a6;
        }

        .btn-secondary:hover {
            background-color: #f0fdfa;
        }

        .btn-cyan {
            background-color: #06b6d4;
            color: white;
        }

        .btn-cyan:hover {
            background-color: #0891b2;
        }

        .btn i {
            margin-right: 8px;
        }

        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .button-group {
                flex-direction: column;
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
                <a href="#manage-profile" class="nav-link active">
                    <i class="fas fa-file-alt"></i>
                    Manage Profile
                </a>
                <a href="#manage-events" class="nav-link">
                    <i class="far fa-calendar"></i>
                    Manage Events
                </a>
                <a href="#performance" class="nav-link">
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
                <h1 class="page-title">Manage Profile</h1>

                <!-- Content Editor -->
                <div class="editor-container">
                    <div class="editor-header">
                        <div class="editor-title">Content Editor</div>
                        <div class="editor-subtitle">Drag and drop to reorder blocks. Click to edit content.</div>
                    </div>

                    <!-- Hero Image Block -->
                    <div class="content-block active">
                        <div class="block-header">
                            <i class="fas fa-grip-vertical drag-handle"></i>
                            <i class="far fa-image block-icon"></i>
                            <span class="block-title">Hero Image</span>
                        </div>
                        <div class="hero-upload">
                            <p>Click to upload or change image</p>
                            <button class="btn btn-primary">Upload New Image</button>
                        </div>
                    </div>

                    <!-- Description Block -->
                    <div class="content-block">
                        <div class="block-header">
                            <i class="fas fa-grip-vertical drag-handle"></i>
                            <i class="fas fa-align-left block-icon"></i>
                            <span class="block-title">Description</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" value="Tumpak Sewu Waterfall">
                        </div>
                        <div class="form-group">
                            <textarea class="form-input" rows="4" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <!-- Photo Gallery Block -->
                    <div class="content-block">
                        <div class="block-header">
                            <i class="fas fa-grip-vertical drag-handle"></i>
                            <i class="far fa-images block-icon"></i>
                            <span class="block-title">Photo Gallery</span>
                        </div>
                        <div class="gallery-grid">
                            <div class="gallery-item">Image 1</div>
                            <div class="gallery-item">Image 2</div>
                            <div class="gallery-item">Image 3</div>
                        </div>
                        <button class="btn btn-secondary">Add More Images</button>
                    </div>

                    <!-- Action Buttons -->
                    <div class="button-group">
                        <button class="btn btn-primary">
                            <i class="fas fa-eye"></i>
                            Preview Changes
                        </button>
                        <button class="btn btn-cyan">
                            <i class="fas fa-paper-plane"></i>
                            Submit for Approval
                        </button>
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

        // Make blocks draggable (simple example)
        document.querySelectorAll('.content-block').forEach(block => {
            block.addEventListener('click', function() {
                document.querySelectorAll('.content-block').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
