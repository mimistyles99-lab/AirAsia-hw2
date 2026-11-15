

<?php
require_once __DIR__ . '/includes/db.php';

$cardId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$cardId || $cardId < 1) {
    http_response_code(400);
    exit('Invalid gift card ID.');
}

$stmt = $pdo->prepare("SELECT * FROM GIFTCARD WHERE card_id = ?");
$stmt->execute([$cardId]);
$card = $stmt->fetch();

if (!$card) {
    http_response_code(404);
    exit('Gift card not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Card Details | AirAsia Rewards</title>
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
    <h2>Gift Card Details</h2>
    <p>View gift card information and manage your rewards.</p>
    <section class="gift-card-details">
        
<img src="images/gift-card.png"
     alt="<?= htmlspecialchars($card['card_name']) ?> Gift Card">

<div class="card-information">
    <h3><?= htmlspecialchars($card['card_name']) ?> Gift Card</h3>

    <p><strong>Card Type:</strong>
        <?= htmlspecialchars($card['card_type']) ?>
    </p>

    <p><strong>Card Value:</strong>
        $<?= number_format($card['card_value'], 2) ?>
    </p>

    <p><strong>Points Required:</strong>
        <?= number_format($card['points_required']) ?>
    </p>

    <a href="card-update.php?id=<?= (int)$card['card_id'] ?>" class="add-button">

                Update Gift Card
            </a>
            <a href="card-list.php" class="details-button">
                Back to Gift Cards
            </a>
         </div>
    </section>
</main>
<footer>
    <p>&copy; 2026 AirAsia Rewards Redemption System</p>
</footer>
</body>
</html>