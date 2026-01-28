<?php
session_start();

// Redirect jika sudah login
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: dashboard.php");
    exit;
}

// Ambil error message jika ada
$error_message = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Hapus error setelah ditampilkan
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>Mabim Fasilkom 2026 - Access Terminal</title>
    <link rel="icon" href="assets/img/icon.png" />
    
    <!-- Google Fonts - Same as Portfolio -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS External -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <!-- Background Decorative Elements -->
    <div class="diagonal-lines"></div>
    
    <!-- Decorative Boxes -->
    <div class="deco-box deco-box-1"></div>
    <div class="deco-box deco-box-2"></div>
    
    <!-- Decorative Lines -->
    <div class="deco-line deco-line-1"></div>
    <div class="deco-line deco-line-2"></div>
    
    <!-- Floating Text -->
    <div class="floating-text floating-text-1">SYSTEM</div>
    <div class="floating-text floating-text-2">AUTHORIZED</div>
    
    <!-- Login Container -->
    <div class="login-class">
        <h2 class="judul-login">ACCESS TERMINAL</h2>
        <form action="login.php" method="post">
            <label for="username">USERNAME</label>
            <input 
                type="text" 
                name="username" 
                id="username" 
                placeholder="Enter your ID" 
                required 
            />
            
            <label for="password">PASSWORD</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                placeholder="Enter authorization code" 
                required 
            />

            <div class="error <?php echo !empty($error_message) ? 'show' : ''; ?>" id="errorMsg">
                <?php echo !empty($error_message) ? htmlspecialchars($error_message) : '⚠ Invalid credentials. Access denied.'; ?>
            </div>

            <input type="submit" class="login-button" value="INITIALIZE" />
        </form>
        
        <!-- Testing Info (HAPUS SAAT PRODUCTION) -->
        <div style="margin-top: 20px; padding: 10px; background: rgba(255, 215, 0, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); font-size: 0.75rem; color: #ffd700; text-align: center;">
            <strong>TESTING MODE</strong><br>
            Username: admin | Password: admin123
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>

</html>