<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AQUANTER</title>
    
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; }
        .login-container { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { margin: 10px 0; padding: 10px; width: 100%; }
        button { padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Galon</h1>
        <h2>Login</h2>
        <form>
            <input type="text" placeholder="Email" required>
            <input type="password" placeholder="Kata Sandi" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
