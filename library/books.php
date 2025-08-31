<?php
// books.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books | Library Management System</title>
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

            <li><a href="borrow_return.php">Borrow/Return</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
            
        </ul>
    </nav>
</header>

<section class="hero">
    <!-- Aesthetic and clearly visible banner image -->
    <img src="book.png" alt="Books Banner">
    <div class="hero-text">
        <h1>Library Book Collection</h1>
        <p>Visit Our Book shelf.</p>
    </div>
</section>

<section class="features book-list">
    <?php
    $books = [
        [
            "cover" => "alchemy.png",
            "title" => "The Alchemist",
            "author" => "Paulo Coelho",
            "desc" => "A young shepherd follows his dream to discover the world’s treasures."
        ],
        [
            "cover" => "atomic.png",
            "title" => "Atomic Habits",
            "author" => "James Clear",
            "desc" => "An easy and proven way to build good habits and break bad ones."
        ],
        [
            "cover" => "https://covers.openlibrary.org/b/id/10958347-L.jpg",
            "title" => "1984",
            "author" => "George Orwell",
            "desc" => "A dystopian novel about surveillance, totalitarianism, and truth."
        ],
        [
            "cover" => "https://covers.openlibrary.org/b/id/10650026-L.jpg",
            "title" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "desc" => "A timeless tale of race and justice in the Deep South."
        ]
    ];

    foreach ($books as $book) {
        echo "
        <div class='card'>
            <img src='{$book['cover']}' alt='{$book['title']}' style='width:100%; height:300px; object-fit:cover; border-radius:10px; margin-bottom:15px;'>
            <h3>{$book['title']}</h3>
            <p><strong>By:</strong> {$book['author']}</p>
            <p>{$book['desc']}</p>
            <a href='#' class='cta-button'>Borrow Book</a>
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
