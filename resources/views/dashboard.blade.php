<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Change to UTF 16 instead of UTF 8 to support CSS font-variant-emoji -->
    <meta charset="UTF-16">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>My Applications</title>
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <!-- Logo Section -->
            <section class="logo-section">
                <a href="{{ asset('home') }}" class="logo">LOGO</a>
            </section>

            <!-- Apps Menu Section -->
            <section class="menu-section">
                <h3>Apps</h3>
                <ul class="menu-list">
                    <li>
                        <a href="{{ asset('dashboard') }}" class="menu-item menu-item-active">
                            <i class="icon" data-lucide="briefcase-business"></i>
                            <span>
                                My Applications
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./ai-interviews.html" class="menu-item">
                            <i class="icon" data-lucide="bot-message-square"></i>
                            <span>
                                AI Interviews
                            </span>
                        </a>
                    </li>
                </ul>
            </section>

            <!-- User Menu Section -->
            <section class="menu-section">
                <h3>User</h3>
                <ul class="menu-list">
                    <li>
                        <a href="#" class="menu-item">
                            <i class="icon" data-lucide="user-round"></i>
                            <span>
                                Profile
                            </span>
                            <span class="menu-shortcut">⌘ P</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-item">
                            <i class="icon" data-lucide="credit-card"></i>
                            <span>
                                Billing
                            </span>
                            <span class="menu-shortcut">⌘ B</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-item">
                            <i class="icon" data-lucide="settings"></i>
                            <span>
                                Settings
                            </span>
                            <span class="menu-shortcut">⌘ S</span>
                        </a>
                    </li>
                </ul>
            </section>

            <!-- User Profile Section -->
            <section class="user-profile-section">
                <div class="user-profile">
                    <div>
                        <img src="{{ asset('build/assets/images/Avatar.png') }}" alt="User Avatar" class="user-avatar">
                        <div class="user-info">
                            <h4 class="user-name">Budi Bedu Beda</h4>
                            <p class="user-email">budibedubeda@gmail.com</p>
                        </div>
                    </div>

                    <button class="logout-btn">Logout</button>
                </div>
            </section>

            <button id="sidebar-closer">
                <span>Close Sidebar</span>
                <i class="icon" data-lucide="panel-right-open"></i>
            </button>
        </aside>

        <main class="content-container">
            <div class="navbar">
                <div class="actions-wrapper left-actions">
                    <button id="sidebar-trigger" href="#" class="action">
                        <i class="icon" data-lucide="panel-right-close"></i>
                    </button>
                </div>
                <h1 class="page-title">My Applications</h1>

                <div class="actions-wrapper right-actions">
                    <a href="{{ asset('add-job-application') }}" class="action">
                        <i class="icon" data-lucide="plus"></i>
                    </a>
                </div>
            </div>

            <div class="content">
                <div id="scorecard-statistics-wrapper">
                    <div class="scorecard">
                        <div class="scorecard-header">
                            <p class="text-listed">Listed</p>
                            <span class="emoji">💾</span>
                        </div>
                        <p class="score">43</p>
                        <p class="desc">job applications</p>
                    </div>

                    <div class="scorecard">
                        <div class="scorecard-header">
                            <p class="text-applied">Applied</p>
                            <span class="emoji">✈</span>
                        </div>
                        <p class="score">43</p>
                        <p class="desc">job applications</p>
                    </div>

                    <div class="scorecard">
                        <div class="scorecard-header">
                            <p class="text-interview">Interview</p>
                            <span class="emoji">🗣</span>
                        </div>
                        <p class="score"">43</p>
            <p class=" desc">job applications</p>
                    </div>

                    <div class="scorecard">
                        <div class="scorecard-header">
                            <p class="text-accepted">Accepted</p>
                            <span class="emoji">🤝</span>
                        </div>
                        <p class="score"">43</p>
            <p class=" desc">job applications</p>
                    </div>

                    <div class="scorecard">
                        <div class="scorecard-header">
                            <p class="text-rejected">Rejected</p>
                            <span class="emoji">😭</span>
                        </div>
                        <p class="score"">43</p>
            <p class=" desc">job applications</p>
                    </div>
                </div>

                <form id="application-table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="min-width: 40px;">ID</th>
                                <th class="text-left" style="min-width: 180px;">Company</th>
                                <th class="text-left" style="min-width: 230px;">Job Title</th>
                                <th class="text-left" style="min-width: 100px;">Status</th>
                                <th class="text-left" style="min-width: 100px;">Tracked Since</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="application-table-body">
                            @isset($applications)
                                @foreach ($applications as $application)
                                    <tr>
                                        <td class="text-center">{{ $application->id }}</td>
                                        <td>{{ $application->company }}</td>
                                        <td>{{ $application->job_title }}</td>
                                        <td>{{ $application->status }}</td>
                                        <td>{{ $application->tracked_since }}</td>
                                        <td>
                                            <button class="btn btn-primary"
                                                onclick="editApplication{{ $application->id }}">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </form>
            </div>
        </main>
    </div>

    <div id="sidebar-overlay"></div>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Momentjs -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.30.1/moment.min.js"></script>

    <script>
        lucide.createIcons();
    </script>
    <script src="{{ asset('build/assets/sidebar.js') }}"></script>


</body>

</html>