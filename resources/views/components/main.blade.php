<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jemplore - Jember Explore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#47B6C2',
                        'primary-dark': '#5DD2DE',
                        'primary-light': '#98DCE4',
                    }
                }
            }
        }
    </script> --}}
    {{-- <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .hero-text-blur {
            filter: blur(0.3px);
        }
        
        .hero-subtitle {
            text-shadow: 
                0 0 10px rgba(255, 255, 255, 0.8),
                0 0 20px rgba(255, 255, 255, 0.6),
                0 0 30px rgba(255, 255, 255, 0.4),
                2px 2px 8px rgba(0,0,0,0.5);
        }
        
        .hero-title {
            text-shadow: 
                4px 4px 10px rgba(0,0,0,0.8),
                0 0 20px rgba(255,255,255,0.3);
            filter: blur(0.5px);
        }
        
        .navbar-hover-area {
            position: relative;
        }
        
        .navbar-hover-area::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 0;
            right: 0;
            height: 120px;
            z-index: 40;
        }
    </style> --}}
</head>
<body>
    {{ $slot }}
</body>
</html>