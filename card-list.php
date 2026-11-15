
<?php
require_once __DIR__ . '/includes/db.php';

$stmt = $pdo->query("SELECT * FROM GIFTCARD ORDER BY card_id");
$giftCards = $stmt->fetchAll();
?>
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
    
<?php foreach ($giftCards as $card): ?>
    <article class="gift-card">
        <a href="card-details.php?id=<?= (int)$card['card_id'] ?>">
            <img src="images/gift-card.png" alt="Gift Card">
            <h3><?= htmlspecialchars($card['card_name']) ?> Gift Card</h3>
        </a>

        <p>Points Required: <?= number_format($card['points_required']) ?></p>

        <a href="card-details.php?id=<?= (int)$card['card_id'] ?>" class="details-button">
            View Details
        </a>
    </article>
<?php endforeach; ?>

    </section>
</main>
<footer>
    <p>&copy; 2026 AirAsia Rewards Redemption System</p>
</footer>
</body>
</html>