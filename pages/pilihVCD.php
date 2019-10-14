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

        <!-- PHP -->
        <?php 
            include '../koneksi.php';
            $nim=$_GET['nim'];
            $res=mysqli_query($link,"select nama from kpubinus2019.msviscode where nim=$nim");
            $row=mysqli_fetch_assoc($res);
            echo "<h2 id='headText2'>Selamat datang, " .$row["nama"]."</h2>";
        ?>

        <!-- CARDS -->
        <div class="card-container-pilih">
                <div class="cards">
                <a href="../pages/saveVISCODE.php?id=1&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 1</h3>
                    <img src="../assets/calon/VCD1.jpg" alt="calonUrut1" class="fotoCalon">
                    <div class="container">
                        <p>Nakhla Tania</p>
                    </div>
                </a>     
            </div>
        
            <div class="cards">
                <a href="../pages/saveVISCODE.php?id=2&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 2</h3>
                    <img src="../assets/calon/VCD2.jpg" alt="calonUrut2" class="fotoCalon">
                    <div class="container">
                        <p>Elizabeth Meliana Dewi</p>
                    </div>
                </a>
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