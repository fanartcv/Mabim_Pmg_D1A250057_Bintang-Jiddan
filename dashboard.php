<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: index.php");
    exit;
}

// Set default username if not exists
$username = isset($_SESSION['session_username']) ? $_SESSION['session_username'] : 'User';
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'Administrator';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mabim Fasilkom 2026</title>
    <link rel="icon" href="assets/img/icon.png" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/dashboard.css" />
</head>

<body>
    <!-- Background Effects -->
    <div class="bg-grid"></div>
    <div class="bg-glow"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <div class="logo-icon"></div>
                <span class="logo-text">MABIM</span>
            </div>
            <button class="sidebar-toggle" id="sidebarToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <nav class="sidebar-nav">
            <a href="#dashboard" class="nav-item active">
                <span class="nav-icon">■</span>
                <span class="nav-text">Dashboard</span>
                <span class="nav-indicator"></span>
            </a>
            <a href="#profile" class="nav-item">
                <span class="nav-icon">◆</span>
                <span class="nav-text">Profile</span>
                <span class="nav-indicator"></span>
            </a>
            <a href="#projects" class="nav-item">
                <span class="nav-icon">▲</span>
                <span class="nav-text">Projects</span>
                <span class="nav-indicator"></span>
            </a>
            <a href="#tasks" class="nav-item">
                <span class="nav-icon">●</span>
                <span class="nav-text">Tasks</span>
                <span class="nav-indicator"></span>
            </a>
            <a href="#settings" class="nav-item">
                <span class="nav-icon">◘</span>
                <span class="nav-text">Settings</span>
                <span class="nav-indicator"></span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <a href="logout.php" class="logout-btn">
                <span class="logout-icon">⏻</span>
                <span class="logout-text">Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Navigation -->
        <header class="top-nav">
            <div class="nav-left">
                <button class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="breadcrumb">
                    <span class="breadcrumb-item">TERMINAL</span>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-item active">DASHBOARD</span>
                </div>
            </div>

            <div class="nav-right">
                <div class="user-info">
                    <div class="user-avatar">
                        <span><?php echo strtoupper(substr($username, 0, 2)); ?></span>
                    </div>
                    <div class="user-details">
                        <span class="user-name"><?php echo htmlspecialchars($username); ?></span>
                        <span class="user-role"><?php echo htmlspecialchars($userRole); ?></span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="content-wrapper">
            <!-- Welcome Section -->
            <section class="welcome-section">
                <div class="welcome-content">
                    <div class="welcome-tag">
                        <span class="tag-line"></span>
                        SYSTEM ACCESS GRANTED
                    </div>
                    <h1 class="welcome-title">
                        Welcome Back, <span class="highlight"><?php echo htmlspecialchars($username); ?></span>
                    </h1>
                    <p class="welcome-subtitle">
                        Your terminal is online. All systems operational.
                    </p>
                </div>
                <div class="welcome-decoration">
                    <div class="deco-box"></div>
                    <div class="deco-line"></div>
                </div>
            </section>

            <!-- Stats Grid -->
            <section class="stats-section">
                <div class="stats-grid">
                    <div class="stat-card" data-animate>
                        <div class="stat-header">
                            <span class="stat-icon">■</span>
                            <span class="stat-label">Total Projects</span>
                        </div>
                        <div class="stat-value">24</div>
                        <div class="stat-change positive">
                            <span class="arrow">↑</span> 12% from last month
                        </div>
                        <div class="stat-bar">
                            <div class="stat-progress" style="width: 75%"></div>
                        </div>
                    </div>

                    <div class="stat-card" data-animate>
                        <div class="stat-header">
                            <span class="stat-icon">●</span>
                            <span class="stat-label">Active Tasks</span>
                        </div>
                        <div class="stat-value">18</div>
                        <div class="stat-change positive">
                            <span class="arrow">↑</span> 8% from last week
                        </div>
                        <div class="stat-bar">
                            <div class="stat-progress" style="width: 60%"></div>
                        </div>
                    </div>

                    <div class="stat-card" data-animate>
                        <div class="stat-header">
                            <span class="stat-icon">▲</span>
                            <span class="stat-label">Completed</span>
                        </div>
                        <div class="stat-value">156</div>
                        <div class="stat-change positive">
                            <span class="arrow">↑</span> 24% this quarter
                        </div>
                        <div class="stat-bar">
                            <div class="stat-progress" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="stat-card" data-animate>
                        <div class="stat-header">
                            <span class="stat-icon">◆</span>
                            <span class="stat-label">Team Members</span>
                        </div>
                        <div class="stat-value">12</div>
                        <div class="stat-change neutral">
                            <span class="arrow">→</span> No change
                        </div>
                        <div class="stat-bar">
                            <div class="stat-progress" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Actions -->
            <section class="actions-section">
                <div class="section-header">
                    <h2 class="section-title">Quick Actions</h2>
                    <span class="section-line"></span>
                </div>
                <div class="actions-grid">
                    <button class="action-card">
                        <div class="action-icon">+</div>
                        <div class="action-content">
                            <h3 class="action-title">New Project</h3>
                            <p class="action-desc">Create a new project</p>
                        </div>
                        <div class="action-arrow">→</div>
                    </button>

                    <button class="action-card">
                        <div class="action-icon">✓</div>
                        <div class="action-content">
                            <h3 class="action-title">Add Task</h3>
                            <p class="action-desc">Create new task item</p>
                        </div>
                        <div class="action-arrow">→</div>
                    </button>

                    <button class="action-card">
                        <div class="action-icon">◉</div>
                        <div class="action-content">
                            <h3 class="action-title">View Reports</h3>
                            <p class="action-desc">Check analytics data</p>
                        </div>
                        <div class="action-arrow">→</div>
                    </button>

                    <button class="action-card">
                        <div class="action-icon">⚙</div>
                        <div class="action-content">
                            <h3 class="action-title">Settings</h3>
                            <p class="action-desc">Configure system</p>
                        </div>
                        <div class="action-arrow">→</div>
                    </button>
                </div>
            </section>

            <!-- Recent Activity -->
            <section class="activity-section">
                <div class="section-header">
                    <h2 class="section-title">Recent Activity</h2>
                    <span class="section-line"></span>
                </div>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon">■</div>
                        <div class="activity-content">
                            <h4 class="activity-title">Project Created</h4>
                            <p class="activity-desc">New project "Website Redesign" was created</p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                        <div class="activity-status success">Completed</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">●</div>
                        <div class="activity-content">
                            <h4 class="activity-title">Task Updated</h4>
                            <p class="activity-desc">Task "UI Design" marked as in progress</p>
                            <span class="activity-time">5 hours ago</span>
                        </div>
                        <div class="activity-status progress">In Progress</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">▲</div>
                        <div class="activity-content">
                            <h4 class="activity-title">Team Meeting</h4>
                            <p class="activity-desc">Weekly sync completed with all members</p>
                            <span class="activity-time">1 day ago</span>
                        </div>
                        <div class="activity-status success">Completed</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">◆</div>
                        <div class="activity-content">
                            <h4 class="activity-title">New Member</h4>
                            <p class="activity-desc">John Doe joined the development team</p>
                            <span class="activity-time">2 days ago</span>
                        </div>
                        <div class="activity-status info">New</div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="assets/js/dashboard.js"></script>
</body>

</html>