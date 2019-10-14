<!DOCTYPE html>
<html>
    <head>
        <title>Pemilu HMJ - Binus @Malang</title>
        <link href="style.css" rel="stylesheet" type="text/css">
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
            <h1 id="headText">Pemilihan Umum Ketua VISCODE</h1>
        </header>

        <!-- LOGIN BOX -->
        <div class="card-container-login">
                <div class="cards">
                    <img src="../assets/logo-jurusan/VISCODE.png" alt="logoVISCODE" id="imgLogo">
                    <form action="loginVISCODE.php" method="post" autocomplete="off">
                        <div id="user-input">
                            <input type="text" name="NIM" placeholder="Nomor Induk Mahasiswa" autocomplete="off" style="font-size: small;">
                        </div>
    
                        <div id="user-code">
                            <input type="text" name="kode" placeholder="Personal Code" autocomplete="off" id="kode">
                        </div>
                        <legend style="font-family : Arial, Helvetica, sans-serif; margin-top:20px;">
                            <?php 
                                if(isset($_GET['login'])){
                                    if($_GET['login']=="false") echo "<h4 style='color:red'>NIM atau KODE SALAH!</h4><br/>";
                                    if($_GET['login']=="sqlfail") echo "<h4 style='color:orange'>Database bermasalah, hubungi admin segera!</h4><br/>";
                                    if($_GET['login']=="pilih") echo "<h4 style='color:rgb(46,141,235)'>Anda sudah memilih!</h4><br/>";
                                }
                            ?>
                        </legend>
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