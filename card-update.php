
<?php
require_once __DIR__ . '/includes/db.php';

$cardId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$cardId || $cardId < 1) {
    http_response_code(400);
    exit('Invalid gift card ID.');
}

$stmt = $pdo->prepare(
    "SELECT * FROM GIFTCARD WHERE card_id = ?"
);
$stmt->execute([$cardId]);
$card = $stmt->fetch();

if (!$card) {
    http_response_code(404);
    exit('Gift card not found.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['card-name'] ?? '');
    $type = $_POST['card-type'] ?? '';
    $value = $_POST['card-value'] ?? '';
    $points = $_POST['points'] ?? '';

    if (
        $name === '' ||
        !in_array($type, ['Digital', 'Physical'], true) ||
        !is_numeric($value) ||
        (float)$value < 1 ||
        !filter_var($points, FILTER_VALIDATE_INT) ||
        (int)$points < 1
    ) {
        http_response_code(400);
        exit('Invalid gift card information.');
    }

    $stmt = $pdo->prepare(
        "UPDATE GIFTCARD
         SET card_name = ?,
             card_type = ?,
             card_value = ?,
             points_required = ?
         WHERE card_id = ?"
    );

    $stmt->execute([
        $name,
        $type,
        $value,
        (int)$points,
        $cardId
    ]);

    header('Location: card-details.php?id=' . $cardId);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Gift Card | AirAsia Rewards</title>
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
    <h2>Update Gift Card</h2>
    <p>Edit the existing gift card information below.</p>
    <section class="form-container">
        
<form action="card-update.php?id=<?= (int)$card['card_id'] ?>" method="post">
            <label for="card-name">Card Name</label>
              <input
                type="text"
                id="card-name"
                 name="card-name"      
value="<?= htmlspecialchars($card['card_name']) ?>"
                required
            >
            <label for="card-type">Card Type</label>
            <select id="card-type" name="card-type" required>
<option value="Digital" <?= $card['card_type'] === 'Digital' ? 'selected' : '' ?>>
                    Digital Gift Card
                </option>
<option value="Physical" <?= $card['card_type'] === 'Physical' ? 'selected' : '' ?>>
                    Physical Gift Card
                  </option>
            </select>
            <label for="card-value">Card Value ($)</label>
            <input
                type="number"
                 id="card-value"
                name="card-value"
value="<?= htmlspecialchars($card['card_value']) ?>"
                min="1"
                step="0.01"
                required
            >
            <label for="points">Points Required</label>
            <input
                type="number"
                id="points"
                name="points"
value="<?= (int)$card['points_required'] ?>"
                min="1"
                required
            >
            <button type="submit">Update Gift Card</button>
<a href="card-details.php?id=<?= (int)$card['card_id'] ?>" class="cancel-button">
                Cancel
            </a>
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2026 AirAsia Rewards Redemption System</p>
</footer>
</body>
</html>