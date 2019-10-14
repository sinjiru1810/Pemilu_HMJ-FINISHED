<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <img src="assets/ribbon.png" alt="ribbonBinus" id="ribbon">
            <img src="assets/logo-binus.png" alt="logoBinus" id="logo">
            <h1 id="headText1">Pemilu Ketua Himpunan Mahasiswa Jurusan</h1>
            <h2 id="headText2">Institut Teknologi Kreatif Bina Nusantara Malang</h2>
        </header>

        <!-- CARDS -->
        <div class="card-container">
            <div class="cards">
                <a href="pages/CSA.php" class="linkCard">
                    <img src="assets/logo-jurusan/CSA.png" alt="logoCSA" class="logoJurusan">
                    <div class="container">
                        <h1>CSA</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Communication</b></p><br/>
                        <h3>3 CALON</h3>
                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="pages/HIMFO.php" class="linkCard">
                    <img src="assets/logo-jurusan/HIMFO.png" alt="logoHIMFO" class="logoJurusan">
                    <div class="container">
                        <h1>HIMFO</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Informatics</b></p><br/>
                        <h3>2 CALON</h3>
                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="pages/HMBC.php" class="linkCard">
                    <img src="assets/logo-jurusan/HMBC.jpg" alt="logoHMBC" class="logoJurusan">
                    <div class="container">
                        <h1>HMBC</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Business Creation</b></p><br/>
                        <h3>2 CALON</h3>
                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="pages/INSIGHT.php" class="linkCard">
                    <img src="assets/logo-jurusan/INSIGHT.webp" alt="logoINSIGHT" class="logoJurusan">
                    <div class="container">
                        <h1>INSIGHT</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Interior Design</b></p><br/>
                        <h3>2 CALON</h3>
                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="pages/USPR.php" class="linkCard">
                    <img src="assets/logo-jurusan/USPR.png" alt="logoUSPR" class="logoJurusan">
                    <div class="container">
                        <h1>USPR</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Public Relation</b></p><br/>
                        <h3>2 CALON</h3>
                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="pages/VISCODE.php" class="linkCard">
                    <img src="assets/logo-jurusan/VISCODE.png" alt="logoVISCODE" class="logoJurusan">
                    <div class="container">
                        <h1>VISCODE</h1>
                        <p>Himpunan Mahasiswa Jurusan</p>
                        <p><b>Visual Communication Design</b></p><br/>
                        <h3>2 CALON</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="footer-container">
            <div id="systemDate">
                <span id="datetime"></span>
                <script>
                    document.getElementById("datetime").innerphp = formatDateTime();

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
            <a href="pages/ADMIN.php" class="linkFoot" id="linkAdmin"><b>Admin</b></a>
        </footer>
    </body>
</html>