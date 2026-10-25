<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main class="login-container">
        <div class="login-box">
            <h1>AirAsia Rewards</h1>
            <h2>Welcome Back!</h2>
            <p>Log in to manage your gift cards and rewards.</p>
            <form action="card-list.php" method="get">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                >
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >
                <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>
</html>