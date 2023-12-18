<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Masuk</title>
</head>

<body>
        <div class="container">
                <form action="index.php" method="POST" class="login-email" id="loginForm">
                        <h2>Masuk</h2>
                        <label for="email">Email : </label><br>
                        <input type="email" placeholder="Email" name="email" id="emailInput" required><br><br>
                        <label for="password">Password : </label><br>
                        <input type="password" placeholder="Password" name="password" id="passwordInput"
                                required><br><br>
                        <button type="button" onclick="login()" class="btn">Login</button><br><br>
                        <p class="login-register-text">belum punya akun? <a href="register.php">Daftar</a></p>
                </form>
        </div>

        <script>

        function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
        }

        function eraseCookie(name) {
                document.cookie = name + '=; Max-Age=-99999999; path=/';
        }

        function setLocalStorage(key, value) {
                localStorage.setItem(key, value);
        }

        function getLocalStorage(key) {
                return localStorage.getItem(key);
        }

        function eraseLocalStorage(key) {
                localStorage.removeItem(key);
        }

        function login() {
                var email = document.getElementById('emailInput').value;
                var password = document.getElementById('passwordInput').value;

                if (email && password) {
                        setCookie('loggedIn', 'true', 1); 
                        setLocalStorage('userEmail', email);

                        window.location.href = "beranda.php";
                } else {
                        alert('email dan password harus diisi');
                }
        }
        </script>
</body>

</html>