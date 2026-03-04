<?php
session_start();
$notification = "";
$notification_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sakarya Üniversitesi mail ve öğrenci no şifre kuralı
    $valid_username = "ornek.ogrenci@sakarya.edu.tr";
    $valid_password = "123456789";

    if (empty($username) || empty($password)) {
        $notification = "Lütfen tüm alanları doldurun.";
        $notification_class = "notification-error";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $notification = "<i class=\"fa-solid fa-check-circle\"></i> Başarıyla giriş yaptınız! Ana sayfaya yönlendiriliyorsunuz...";
        $notification_class = "notification-success";
        header("Refresh: 2; URL=index.html");
    } else {
        $notification = "<i class=\"fa-solid fa-exclamation-circle\"></i> Kullanıcı adı veya şifre hatalı.";
        $notification_class = "notification-error";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap – Portfolio</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/27c32d15b7.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" class="logo" alt="Logo">
                <ul id="sidemenu">
                    <li><a href="index.html">Hakkında</a></li>
                    <li><a href="hobilerim.html">Hobilerim</a></li>
                    <li><a href="cv.html">Özgeçmiş</a></li>
                    <li><a href="sehrimiz.html">Şehrim</a></li>
                    <li><a href="mirasimiz.html">Mirasımız</a></li>
                    <li><a href="iletisim.html">İletişim</a></li>
                    <li><a href="login.php">Giriş Yap</a></li>
                    <i class="fa-solid fa-xmark" aria-hidden="true" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" aria-hidden="true" onclick="openmenu()"></i>
            </nav>
        </div>
    </header>
    <main id="login-section">
        <div class="login-card">
            <div class="login-icon">
                <i class="fa-solid fa-user-lock"></i>
            </div>
            <h2>Giriş Yap</h2>
            <p class="login-subtitle">Devam etmek için giriş yapın</p>
            <form id="login-form" method="POST" action="login.php">
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="username" name="username" placeholder="E-posta adresiniz" required value="<?php echo htmlspecialchars($username ?? ''); ?>">
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Şifreniz" required>
                </div>
                <button type="submit" class="login-btn">
                    <span>Giriş Yap</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
            <?php if (!empty($notification)): ?>
                <div id="notification" class="<?php echo $notification_class; ?>" style="display: block; opacity: 1; visibility: visible; margin-top: 20px;">
                    <?php echo $notification; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <script>
        var sidemenu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0";
        }

        function closemenu() {
            sidemenu.style.right = "-200px";
        }
    </script>
</body>

</html>
