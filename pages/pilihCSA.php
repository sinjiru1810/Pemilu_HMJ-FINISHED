<!DOCTYPE html>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
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
            <h1 id="headText1">Pemilihan Umum Ketua CSA</h1>
        </header>

        <!-- PHP -->
        <?php 
            include '../koneksi.php';
            $nim=$_GET['nim'];
            $res=mysqli_query($link,"select nama from kpubinus2019.mscsa where nim=$nim");
            $row=mysqli_fetch_assoc($res);
            echo "<h2 id='headText2'>Selamat datang, " .$row["nama"]."</h2>";
        ?>

        <!-- CARDS -->
        <div class="card-container-pilih">
            <div class="cards">
                <a href="../pages/saveCSA.php?id=1&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 1</h3>
                    <img src="../assets/calon/CSA1.jpg" alt="calonUrut1" class="fotoCalon">
                    <div class="container">
                        <p>Sandy Yudha Ersha Putra</p>
                    </div>
                </a>
            </div>
        
            <div class="cards">
                <a href="../pages/saveCSA.php?id=2&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 2</h3>
                    <img src="../assets/calon/CSA2.jpg" alt="calonUrut2" class="fotoCalon">
                    <div class="container">
                        <p>Haifa Imansyah</p>
                    </div>
                </a>
            </div>
            
            <div class="cards">
                <a href="../pages/saveCSA.php?id=3&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 3</h3>
                    <img src="../assets/calon/CSA3.jpg" alt="calonUrut2" class="fotoCalon">
                    <div class="container">
                        <p>Maria Felisitas Puspitasari</p>
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