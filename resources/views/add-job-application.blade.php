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
    <link rel="stylesheet" href="{{ asset('css/add-job-application.css') }}">

    <!-- Uncomment this to use the components CSS -->
    <!-- <link rel="stylesheet" href="./assets/css/components.css"> -->
    <title>Application Details</title>
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <!-- Logo Section -->
            <section class="logo-section">
                <a href="./home.html" class="logo">LOGO</a>
            </section>

            <!-- Apps Menu Section -->
            <section class="menu-section">
                <h3>Apps</h3>
                <ul class="menu-list">
                    <li>
                        <a href="{{ route('dashboard') }}" class="menu-item menu-item-active">
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

        <!-- Konten Utama -->
        <main class="content-container">
            <div class="navbar">
                <div class="actions-wrapper left-actions">
                    <button id="sidebar-trigger" href="#" class="action">
                        <i class="icon" data-lucide="panel-right-close"></i>
                    </button>
                    <!-- Write some code here to add additional left icon actions -->
                </div>
                <h1 class="page-title">Add Application</h1>

                <div class="actions-wrapper right-actions">
                    <!-- Write some code here to add additional right icon actions -->
                    <!-- <a href="#" class="action">
                <i class="icon" data-lucide="plus"></i>
              </a> -->
                </div>
            </div>
            <div class="content-panel">
                <div class="addJob-illustration">
                    <img src="{{ asset('build/assets/images/addJob-illustration.png') }}" alt="" class="illustration">
                    <h1 class="illustration-text">Let's <span style="color: 16A249">track</span> it!</h1>
                </div>


                <div class="addJob-form">
                    <form method="POST" action="{{ route('applications.store')}}" id="application-form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-grid">
                            <div class="form-group job-title">
                                <label for="job-title">Job Title <span style="color: red;">*</span></label>
                                <input type="text" id="job_title" name="job_title" placeholder="Job Title" required>
                            </div>
                            <div class="form-group company-name">
                                <label for="company-name">Company <span style="color: red;">*</span></label>
                                <input type="text" id="company-name" name="company" placeholder="Company Name" required>
                            </div>
                            <div class="form-group current-status">
                                <label for="current-status">Current Status</label>
                                <select id="current-status" name="status">
                                    <option value="select">Select</option>
                                    <option value="applied">Applied</option>
                                    <option value="interview">Interview</option>
                                    <option value="accepted">Accepted</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                            <div class="form-group job-vacancy-link">
                                <label for="job-vacancy-link">Job Vacancy Link</label>
                                <input type="url" id="job-vacancy-link" name="job_link"
                                    placeholder="https://www.job-example.com/">
                            </div>
                        </div>
                        <div class="form-grid-2">
                            <div class="form-group resume">
                                <label for="resume">Resume (pdf.)</label>
                                <input type="file" id="resume" name="resume" accept=".pdf">
                            </div>
                            <div class="form-group job-description">
                                <label for="job-description">Job Description</label>
                                <textarea id="job-description" name="job_description"
                                    placeholder="Please include all information relevant to job description."></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="cancel-btn">Cancel</button>
                            <button type="submit" class="proceed-btn">Proceed Tracking</button>
                        </div>
                    </form>
                </div>



            </div>

        </main>


    </div>

    <div id="sidebar-overlay"></div>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        }
    </script>
    <script src="/assets/js/sidebar.js"></script>
</body>

</html>