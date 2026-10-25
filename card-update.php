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
        <form action="card-list.php" method="get">
            <label for="card-name">Card Name</label>
              <input
                type="text"
                id="card-name"
                 name="card-name"
                   value="Amazon Gift Card"
                required
            >
            <label for="card-type">Card Type</label>
            <select id="card-type" name="card-type" required>
                <option value="Digital" selected>
                    Digital Gift Card
                </option>
                <option value="Physical">
                    Physical Gift Card
                  </option>
            </select>
            <label for="card-value">Card Value ($)</label>
            <input
                type="number"
                 id="card-value"
                name="card-value"
                value="50.00"
                min="1"
                step="0.01"
                required
            >
            <label for="points">Points Required</label>
            <input
                type="number"
                id="points"
                name="points"
                value="5000"
                min="1"
                required
            >
            <button type="submit">Update Gift Card</button>
            <a href="card-details.php" class="cancel-button">
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