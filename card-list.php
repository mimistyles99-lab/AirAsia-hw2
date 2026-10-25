<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Cards | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="site-header">
    <h1>AirAsia Rewards</h1>
    <nav>
        <a href="card-list.php">Gift Cards</a>
        <a href="card-add.php">Add Gift Card</a>
        <a href="login.php">Logout</a>
    </nav>
</header>
<main class="content">
    <h2>Available Gift Cards</h2>
    <p>Explore gift cards available for redemption using your AirAsia points.</p>
    <a href="card-add.php" class="add-button">
        + Add New Gift Card
    </a>
    <section class="card-grid">
        <article class="gift-card">
            <a href="card-details.php">
                <img src="images/gift-card.png" alt="Amazon Gift Card">
                <h3>Amazon Gift Card</h3>
            </a>
            <p>Points Required: 5,000</p>
            <a href="card-details.php" class="details-button">
                View Details
            </a>
        </article>
        <article class="gift-card">
            <a href="card-details.php">
                <img src="images/gift-card.png" alt="Starbucks Gift Card">
                <h3>Starbucks Gift Card</h3>
            </a>
            <p>Points Required: 2,500</p>
            <a href="card-details.php" class="details-button">
                View Details
            </a>
        </article>
        <article class="gift-card">
            <a href="card-details.php">
                <img src="images/gift-card.png" alt="Target Gift Card">
                <h3>Target Gift Card</h3>
            </a>
            <p>Points Required: 4,000</p>
            <a href="card-details.php" class="details-button">
                 View Details
            </a>
        </article>
    </section>
</main>
<footer>
    <p>&copy; 2026 AirAsia Rewards Redemption System</p>
</footer>
</body>
</html>