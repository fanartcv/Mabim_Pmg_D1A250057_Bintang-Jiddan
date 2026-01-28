<?php
session_start();

// Database connection (sesuaikan dengan setup Anda)
// $conn = mysqli_connect("localhost", "username", "password", "database");

// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validasi input tidak kosong
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username dan Password harus diisi!";
        header("Location: index.php");
        exit;
    }

    // CONTOH SEDERHANA - Ganti dengan query database Anda
    // Query ke database
    // $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
    // $stmt = mysqli_prepare($conn, $query);
    // mysqli_stmt_bind_param($stmt, "s", $username);
    // mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);

    // if (mysqli_num_rows($result) > 0) {
    //     $user = mysqli_fetch_assoc($result);
    //     
    //     // Verifikasi password
    //     if (password_verify($password, $user['password'])) {
    //         // Login berhasil
    //         $_SESSION['login'] = true;
    //         $_SESSION['session_username'] = $user['username'];
    //         $_SESSION['user_id'] = $user['id'];
    //         $_SESSION['user_role'] = $user['role'];
    //         
    //         header("Location: dashboard.php");
    //         exit;
    //     } else {
    //         // Password salah
    //         $_SESSION['error'] = "Username atau Password salah!";
    //         header("Location: index.php");
    //         exit;
    //     }
    // } else {
    //     // User tidak ditemukan
    //     $_SESSION['error'] = "Username atau Password salah!";
    //     header("Location: index.php");
    //     exit;
    // }

    // ===== UNTUK TESTING (HAPUS INI DAN UNCOMMENT CODE DI ATAS) =====
    // Hardcoded login untuk testing - GANTI DENGAN DATABASE!
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['login'] = true;
        $_SESSION['session_username'] = $username;
        $_SESSION['user_id'] = 1;
        $_SESSION['user_role'] = "Administrator";

        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Username atau Password salah!";
        header("Location: index.php");
        exit;
    }
    // ===== END TESTING CODE =====

} else {
    // Jika bukan POST request, redirect ke index
    header("Location: index.php");
    exit;
}
?>