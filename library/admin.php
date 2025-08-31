<?php
// admin.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel | Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">📖 MyLibrary</div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="borrow_return.php">Books</a></li>
            <li><a href="members.php">Members</a></li>

            <li><a href="#">Borrow/Return</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <img src="admin pannel.png" alt="Admin Banner">
    <div class="hero-text">
        <h1>Admin Team</h1>
        <p>Meet Our Admin Pannel</p>
    </div>
</section>

<section class="features admin-team">
    <?php
    $admins = [
        [
            "photo" => "firoj.jpg",
            "name" => "Md.Firoj Mahmud",
            "role" => "System Administrator",
            "email" => "firojmahmudd2004@gmail.com"
        ],
        [
            "photo" => "partho.jpg",
            "name" => "Partho",
            "role" => "Head Librarian",
            "email" => "partho139gmail.com"
        ],
        [
            "photo" => "asik.jpg",
            "name" => "Ashikur Rahman",
            "role" => "Technical Support",
            "email" => "hasib@mylibrary.com"
        ],
       
    ];

    foreach ($admins as $admin) {
        echo "
        <div class='card'>
            <img src='{$admin['photo']}' alt='{$admin['name']}' style='border-radius:50%; width:100px; height:100px; object-fit:cover; margin-bottom:15px;'>
            <h3>{$admin['name']}</h3>
            <p><strong>{$admin['role']}</strong></p>
            <p><a href='mailto:{$admin['email']}' class='cta-button'>Contact</a></p>
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
