<?php
// borrow_return.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrow & Return | Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">📖 MyLibrary</div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="borrow_return.php" class="active">Borrow/Return</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
          
        </ul>
    </nav>
</header>

<section class="hero">
    <!-- Same adorable banner as example -->
    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1600&q=80" alt="Library Banner">
    <div class="hero-text">
        <h1>Welcome to MyLibrary</h1>
        <p>Manage books, members, and transactions effortlessly.</p>
        <a href="#" class="cta-button">Get Started</a>
    </div>
</section>

<section class="features">
    <?php
    $features = [
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/2609/2609282.png",
            "title" => "Issue Books",
            "desc" => "Easily issue books to members and track due dates."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/1077/1077114.png",
            "title" => "Return Books",
            "desc" => "Manage book returns and calculate penalties if any."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/3154/3154715.png",
            "title" => "Due Date Alerts",
            "desc" => "Automatic notifications for upcoming and overdue returns."
        ],
        [
            "icon" => "https://cdn-icons-png.flaticon.com/512/3135/3135823.png",
            "title" => "Transaction History",
            "desc" => "View complete borrowing and returning history for each member."
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
