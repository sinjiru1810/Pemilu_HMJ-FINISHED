<!DOCTYPE html>
<html>
    <head>
        <title>Pemilu HMJ - Binus @Malang</title>
        <link href="/pages/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- BACKGROUND AND OVERLAY -->
        <section class="background">
            <div class="overlay"></div>
        </section>

        <!-- HEADER -->
        <header class="header-container">
            <img src="../assets/ribbon.png" alt="ribbonBinus" id="ribbon">
            <img src="../assets/logo-binus.png" alt="logoBinus" id="logo">
            <h1 id="headText">Administrator</h1>
        </header>

        <!-- LOGIN BOX -->
        <div class="card-container-login">
            <div class="cards">
                <img src="../assets/logo-binus.png" alt="logoBINUS" id="imgLogo">
                <form action="loginADMIN.php" method="post" autocomplete="off">
                    <div id="user-input">
                        <input type="text" name="NIM" placeholder="Administrator ID" autocomplete="off" style="font-size: small;">
                    </div>

                    <div id="user-pass">
                        <input type="password" name="password" placeholder="Administrator Password" autocomplete="off">
                    </div>

                    <p>
                        <input type="submit" name="login" value="Login" class="button-primary">
                    </p>
                </form>
                <form action="../index.php">
                    <p>
                        <input type="submit" name="back" value="Back" class="button-primary-back">
                    </p>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="footer-container">
            <div id="systemDate">
                <span id="datetime"></span>
                <script>
                    document.getElementById("datetime").innerHTML = formatDateTime();
        
                    function formatDateTime()
                    {
                        var d = new Date(),
                        minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
                        hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
                        ampm = d.getHours() >= 12 ? 'PM' : 'AM',
                        months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
                        return days[d.getDay()] + ', '+ d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear() + '  |  ' + hours + ':' + minutes + ' ' + ampm;
                    }
                </script>
            </div>
        </footer>
    </body>
</html>