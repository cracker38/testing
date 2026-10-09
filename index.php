
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #141e30, #493b8a);
      padding: 20px;
    }

    .login-box {
      background: white;
      padding: 40px 35px;
      border-radius: 16px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    }

    .login-box h1 {
      text-align: center;
      color: #24243e;
      margin-bottom: 10px;
    }

    .subtitle {
      text-align: center;
      color: #777;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: bold;
    }

    .input-group input {
      width: 100%;
      padding: 13px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
      font-size: 15px;
    }

    .input-group input:focus {
      border-color: #6254c7;
      box-shadow: 0 0 0 3px rgba(98, 84, 199, 0.12);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      margin-bottom: 25px;
      font-size: 13px;
    }

    .options a,
    .register a {
      color: #6254c7;
      text-decoration: none;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      background: #6254c7;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #493b9e;
    }

    .message {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
      color: #c0392b;
    }

    .register {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <h1>Welcome Back!</h1>
    <p class="subtitle">Please log in to your account</p>

    <form id="loginForm">
      <div class="input-group">
        <label for="email">Email Address</label>
        <input
          type="email"
          id="email"
          placeholder="Enter your email"
          autocomplete="username"
          required
        >
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          placeholder="Enter your password"
          autocomplete="current-password"
          required
        >
      </div>

      <div class="options">
        <label>
          <input type="checkbox" id="remember">
          Remember me
        </label>
        <a href="#" id="forgotLink">Forgot password?</a>
      </div>

      <button type="submit" class="login-btn">
        Log In
      </button>

      <p class="message" id="message" role="status"></p>
    </form>

    <p class="register">
      Don't have an account?
      <a href="register.html">Sign up</a>
    </p>
  </div>

  <script>
    const form = document.getElementById("loginForm");
    const message = document.getElementById("message");

    form.addEventListener("submit", function(event) {
      event.preventDefault();

      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value;

      if (!email || !password) {
        message.textContent = "Please fill in all fields.";
        return;
      }

      message.style.color = "#6254c7";
      message.textContent =
        "Form validated! Connect a backend to log in securely.";
    });

    document.getElementById("forgotLink").addEventListener(
      "click",
      function(event) {
        event.preventDefault();
        message.style.color = "#6254c7";
        message.textContent =
          "Please connect a password reset service.";
      }
    );
  </script>
</body>
</html>