<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            width: 15.6rem;
            background-color: #242527;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto; /* Add this if you need scrolling */
        }

        .image-sidebar {
            height: 80px;
            width: 80px;
        }

        @media only screen and (max-width: 992px) {
            .sidebar {
                visibility: hidden;
            }
        }

        .active {
            background: red;
        }


        .nav-link:hover{
            background: #323232;
        }
        .nav-link.active {
            background: #5b5b5b;
            border-radius: 3px;
            transition: .5s all; 
            
        }
    </style>
</head>
<body>

<div class="sidebar text-white p-3">
    <ul class="nav flex-column">
        <li class="nav-item mb-1">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ $activePage == 'dashboard' ? 'active' : '' }} text-white">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{ url('/board') }}" class="nav-link {{ $activePage == 'board' ? 'active' : '' }} text-white">
                <i class="bi bi-grid"></i> Board
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{ url('/feature') }}" class="nav-link {{ $activePage == 'feature' ? 'active' : '' }} text-white">
                <i class="bi bi-star"></i> Features
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/setting') }}" class="nav-link {{ $activePage == 'setting' ? 'active' : '' }} text-white">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        var currentPath = window.location.pathname;
        $('.nav-link').each(function() {
            var linkPath = $(this).attr('href');
            if (currentPath === linkPath) {
                $(this).addClass('active');
            }
        });
    });
</script>

</body>
</html>
