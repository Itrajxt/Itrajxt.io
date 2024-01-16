<!DOCTYPE html>
<html>
<head>
    <title>Hoki Itra Jaya Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <!-- bagian header template -->
    <header>
        <h1 class="judul">Hoki Itra Jaya Blog</h1>
        <p class="deskripsi">Tutorial pemrograman web, mobile dan desktop lengkap berbahasa indonesia. dari dasar hingga mahir.</p>
    </header>
    <!-- akhir bagian header template -->
    
    <div class="wrap">
        <!-- bagian menu         -->
        <nav class="menu">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="tutorial.php">Tutorial</a>
                </li>
                <li>
                    <a href="contact.php">Kontak</a>
                </li>
            </ul>
        </nav>
        <!-- akhir bagian menu -->
 
        <!-- bagian sidebar website -->
        <aside class="sidebar">
            <div class="widget">
                <h2>Tutorial</h2>
                <p>Selamat datang di <a target="_blank" href="https://www.malasngoding.com">www.hokiblog.com</a> situs ini menyediakan tutorial pemrograman web, mobile & desktop.</p>
            </div>
            <div class="widget">
                <h2>Top 5 Berita Terpopuler</h2>
                <ol><li><a href="http://localhost/aaatest/konten/konten1.php"> Memecah File Besar Menjadi Kecil-Kecil di Linux<a/></li>
                <li><a href="http://localhost/aaatest/konten/konten2.php"> Istilah Teknologi Populer<a/></li>
                <li><a href="http://localhost/aaatest/konten/konten3.php"> Pendaftaran Workshop Desain<a/></li>
                <li><a href="http://localhost/aaatest/konten/konten4.php"> Daftar Produk Teknologi<a/></li>
                <li><a href="http://localhost/aaatest/konten/konten5.php"> Game Ular<a/></li></ol>
                
            </div>
        </aside>
        <!-- akhir bagian sidebar website -->
 
        <!-- bagian konten Blog -->
        <div class="blog">
            <div class="conteudo">
                <div class="post-info">
                    Di Posting Oleh <b>Hoki Itra Jaya</b>
                </div>
                <h1>Pendaftaran Workshop Desain Grafis</h1>
                <hr>
                <form action="konten3.php" method="post">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name"required>
                    <label for="Email">Email:</label>
                    <input type="Email" id="Email" name="Email"required>
                    <label for="experience">Pengalaman:</label>
                    <input type="radio" id="beginner" name="experience"value="beginner">
                    <label for="beginner">Pemula:</label>
                    <input type="radio" id="intermediate" name="experience" value="beginner">
                    <label for="intermediate">Menengah:</label>
                    <input type="radio" id="advanced" name="experience" value="advanced">
                    <label for="intermediate">Menengah:</label>
                    <input type="radio" id="advanced" name="experience" value="advanced">
                    <label for="advanced">Mahir</label>

                    <p><label for="comment">Harapan dari Workshop:</label></p>
                    <textarea id="comment"name="comment" rows="4" cols="50"></textarea>
                    <input type="Submit" value="Daftar">
                </form>
                    <hr>
                <a href="index.html" class="continue-lendo">Selengkapnya →</a>
            </div>
        </div>
        <!-- akhir bagian konten Blog -->
    </div>
 
</body>
</html>