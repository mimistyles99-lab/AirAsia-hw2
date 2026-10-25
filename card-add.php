<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gift Card | AirAsia Rewards</title>
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
    <h2>Add New Gift Card</h2>
    <p>Enter the information below to add a new gift card.</p>
    <section class="form-container">
        <form action="card-list.php" method="get">
            <label for="card-name">Card Name</label>
            <input
                type="text"
                id="card-name"
                name="card-name"
                placeholder="Enter gift card name"
                required
            >
            <label for="card-type">Card Type</label>
            <select id="card-type" name="card-type" required>
                <option value="">Select card type</option>
                <option value="Digital">Digital Gift Card</option>
                <option value="Physical">Physical Gift Card</option>
            </select>
            <label for="card-value">Card Value ($)</label>
            <input
                type="number"
                  id="card-value"
                name="card-value"
                min="1"
                step="0.01"
                placeholder="Enter card value"
                required
            >
               <label for="points">Points Required</label>
            <input
                type="number"
                id="points"
                name="points"
                min="1"
                placeholder="Enter points required"
                required
            >
            <button type="submit">Add Gift Card</button>
            <a href="card-list.php" class="cancel-button">
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