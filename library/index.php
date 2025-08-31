<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">📖 MyLibrary</div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="members.php">Members</a></li>

            <li><a href="borrow_return.php">Borrow/Return</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
            
        </ul>
    </nav>
</header>

<section class="hero">
    <!-- New adorable banner -->
    <img src="library.png" alt="Library Banner">
    <div class="hero-text">
        <h1>Welcome to MyLibrary</h1>
        <p></p>
        <a href="#" class="cta-button">Get Started</a>
    </div>
</section>

<section class="features">
    <?php
    $features = [
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/3135/3135715.png",
            "title" => "Books",
            "desc" => "Browse, search, and manage book collections with categories and availability."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/1077/1077114.png",
            "title" => "Members",
            "desc" => "Register, edit, or remove library members and their borrowing history."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/2609/2609282.png",
            "title" => "Borrow & Return",
            "desc" => "Issue and return books with due date tracking and notifications."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/3135/3135823.png",
            "title" => "Admin Panel",
            "desc" => "Secure admin access to monitor and configure system settings."
        ]
    ];

    foreach ($features as $feature) {
        echo "
        <div class='card'>
            <img src='{$feature['icon']}' alt='{$feature['title']}' />
            <h3>{$feature['title']}</h3>
            <p>{$feature['desc']}</p>
        </div>
        ";
    }
    ?>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> MyLibrary. All rights reserved.</p>
    <p>Email: contact@mylibrary.com | Phone: +880 1234 567890</p>
</footer>

</body>
</html>
