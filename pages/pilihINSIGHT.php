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
            <h1 id="headText">Pemilihan Umum Ketua INSIGHT</h1>
        </header>
        
        <!-- PHP -->
        <?php 
            include '../koneksi.php';
            $nim=$_GET['nim'];
            $res=mysqli_query($link,"select nama from kpubinus2019.msinsight where nim=$nim");
            $row=mysqli_fetch_assoc($res);
            echo "<h2 id='headText2'>Selamat datang, " .$row["nama"]."</h2>";
        ?>

        <!-- CARDS -->
        <div class="card-container-pilih">
            <div class="cards">
                <a href="../pages/saveINSIGHT.php?id=1&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 1</h3>
                    <img src="../assets/calon/INSIGHT1.jpg" alt="calonUrut1" class="fotoCalon">
                    <div class="container">
                        <p>Aditya Zaidan</p>
                    </div>
                </a>     
            </div>
        
            <div class="cards">
                <a href="../pages/saveINSIGHT.php?id=2&nim=<?php echo $nim?>" class="linkCard">
                    <h3 style="font-family: Arial, Helvetica, sans-serif">CALON 2</h3>
                    <img src="../assets/calon/INSIGHT2.jpg" alt="calonUrut2" class="fotoCalon">
                    <div class="container">
                        <p>Dyah Ayu Sekarningrum</p>
                    </div>
                </a>
            </div>            
        </div>

        <!-- FOOTER -->
        <footer class="footer-container">
                <div id="systemDate">
                    <span id="datetime"></span>
                    
                </div>
            </footer>
    </body>
</html>