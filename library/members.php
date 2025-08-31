<?php
// members.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Members | Library Management System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Center the More Members button */
        .more-members {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 12px 0;
            text-align: center;
            background-color: #ff914d;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .more-members:hover {
            background-color: #e6833a;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">📖 MyLibrary</div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="borrow_return.php">Borrow/Return</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <!-- Visible, aesthetic members banner -->
    <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238?auto=format&fit=crop&w=1600&q=80" alt="Members Banner">
    <div class="hero-text">
        <h1>Library Members</h1>
        <p>View and manage library members and their details.</p>
    </div>
</section>

<section class="features member-list">
    <?php
    $members = [
        ["photo" => "firoj.jpg", "name" => "Tanvir Hasan", "id" => "M001", "type" => "Regular Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/23.jpg", "name" => "Nusrat Jahan", "id" => "M002", "type" => "Student Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/41.jpg", "name" => "Sajid Rahman", "id" => "M003", "type" => "Guest Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/19.jpg", "name" => "Sharmin Akter", "id" => "M004", "type" => "Premium Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/65.jpg", "name" => "Rafiul Islam", "id" => "M005", "type" => "Regular Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/33.jpg", "name" => "Farhana Khatun", "id" => "M006", "type" => "Student Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/71.jpg", "name" => "Jamal Uddin", "id" => "M007", "type" => "Guest Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/48.jpg", "name" => "Lina Ahmed", "id" => "M008", "type" => "Premium Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/54.jpg", "name" => "Kamal Hossain", "id" => "M009", "type" => "Regular Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/12.jpg", "name" => "Sabina Yasmin", "id" => "M010", "type" => "Student Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/20.jpg", "name" => "Imran Khan", "id" => "M011", "type" => "Guest Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/24.jpg", "name" => "Mim Akter", "id" => "M012", "type" => "Premium Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/30.jpg", "name" => "Sabbir Ahmed", "id" => "M013", "type" => "Regular Member"],
        ["photo" => "https://randomuser.me/api/portraits/women/31.jpg", "name" => "Tahmina Begum", "id" => "M014", "type" => "Student Member"],
        ["photo" => "https://randomuser.me/api/portraits/men/40.jpg", "name" => "Nasir Uddin", "id" => "M015", "type" => "Guest Member"],
    ];

    foreach ($members as $member) {
        echo "
        <div class='card'>
            <img src='{$member['photo']}' alt='{$member['name']}' style='border-radius:50%; width:100px; height:100px; object-fit:cover; margin-bottom:15px;'>
            <h3>{$member['name']}</h3>
            <p><strong>ID:</strong> {$member['id']}</p>
            <p><strong>Type:</strong> {$member['type']}</p>
            <a href='#' class='cta-button'>View Profile</a>
        </div>
        ";
    }
    ?>
</section>

<!-- More Members button -->
<a href="#" class="more-members">More Members</a>

<footer>
    <p>&copy; <?php echo date("Y"); ?> MyLibrary. All rights reserved.</p>
    <p>Email: contact@mylibrary.com | Phone: +880 1234 567890</p>
</footer>

</body>
</html>
