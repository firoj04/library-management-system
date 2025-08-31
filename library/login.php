<?php
session_start();

// Logout হ্যান্ডেল
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Login ফর্ম সাবমিট হ্যান্ডেল
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $student_id = trim($_POST['student_id'] ?? '');

    if ($name && $department && $student_id) {
        $_SESSION['user'] = [
            'name' => $name,
            'department' => $department,
            'student_id' => $student_id
        ];
        // লগইন সফল হলে index.php তে রিডাইরেক্ট
        header('Location: index.php');
        exit;
    } else {
        $error = "Please fill all fields.";
    }
}

// যদি ইউজার লগইন না করে থাকে, তাহলে লগইন ফর্ম দেখাবে
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Simple Login | Library Management System</title>
    <style>
        body {
            background: #fffdf7;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 320px;
            text-align: center;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }
        .login-container h2 {
            color: #ff914d;
            margin-bottom: 25px;
        }
        .login-container input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            margin: 10px 0;
            border: 1.5px solid #ff914d;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .login-container input[type="text"]:focus {
            border-color: #e6833a;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #ff914d;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-container button:hover {
            background-color: #e6833a;
        }
        .error-msg {
            color: red;
            margin-bottom: 15px;
        }
        .index-link {
            margin-top: 12px;
            display: inline-block;
            font-weight: 600;
            color: #ff914d;
            text-decoration: none;
        }
        .index-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" alt="User Icon" />
    <h2>Student Login</h2>
    <?php if (!empty($error)) : ?>
        <div class="error-msg"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form action="login.php" method="post" novalidate>
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="text" name="department" placeholder="Department" required />
        <input type="text" name="student_id" placeholder="Student ID" required />
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
