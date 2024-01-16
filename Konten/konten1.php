<!DOCTYPE html>
<html>
<head>
    <title>Hoki Itra Jaya Blog</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css"> mark {background-color:#7fffd4;}</style>
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
                <h1> Memecah File Besar Menjadi Kecil-Kecil di Linux </h1>
                <hr>
               
                <img src="https://mediaasuransinews.co.id/wp-content/uploads/2023/02/Linux.jpg">
                <p>Upload file besar bergiga-giga terkadang bikin pusing. Mulai dari ketersediaan kuota internet, kuota <i>cloud storage</i>, sampai dengan proses upload yang sangat lama dan rawan gagal.
                <p> Oleh karena itu dalam beberapa kondisi, kita butuh untuk membagi file-file besar menjadi bagian-bagian kecil yang memudahkan kita untuk mengupload-nya atau pun menggandakannya ke media penyimpanan yang lain.
                <p> Kita akanmembahas bagaimana cara membagi atau pun memecah file besar menjadi kecil-kecil di Linux. Hal ini juga sering dinamakan <i>splititing files</i>.</p>
                <h2>Menggunakan Perintah split dan cat</h2>
                <p>Cara yang cukup simpel adalah menggunakan perintah <mark>split</mark> dan <mark>cat</mark>. Perintah <mark>split</mark> untuk membagi atau memecah file, sedangkan perintah <mark>cat</mark> untuk menggabungkan file pecahan tersebut seperti semula.</p>
                <h3> Memecah File dengan split</h3>
                <p>Contoh saya memiliki file <mark>iso</mark> installer Windows 10 berukuran 5.3GB. Saya akan membaginya menjadi 500mb per-bagian. Berarti saya akan mendapatkan 11 file pecahan.
                <p>Perintah yang harus saya eksekusi adalah:
                <div class="box1"><tt>split [options] nama-file [prefix-nama-output]</tt><style>
                .box1{
                width: 350px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>     
                <ul type="disc">
                <li>Untuk <mark>options</mark> saya isi dengan <mark>-d</mark>. Hal ini agar postfix nama file yang dihasilkan menggunakan angka.
                <li>Options bisa lebih dari satu. Saya tambahkan <mark>options</mark> kedua yaitu <mark>b</mark> dengan nilai <mark>500MB</mark>.
                <li>Nama <mark>file</mark> saya isi dengan <mark>Win10_English_x64.iso</mark>.
                <li>Sedangkan untuk <mark>prefix</mark> saya isi dengan <mark>windows_10.iso-part</mark>.</li>
                </ul>
                <p> Hasil akhir dari perintah yang saya eksekusi adalah sebagai berikut:

                <div class="box2"><tt>split -d -b 500MB Win10_English_x64.iso windows_10.iso-part</tt><style>
                .box2{
                width: 460px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>       
                </p>
                <h3>Menggabungkannya lagi dengan cat</h3>
                <p>Untuk menggabungkannya lagi, kita bisa menggunakan perintah <mark>cat</mark> seperti berikut:
                <div class="box3"><tt>cat [nama-prefix] > [nama-file-output]</tt><style>
                .box3{
                width: 290px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>
                <p>Contoh:
                <ul><li>nama frefix saya sama seperti di atas: <mark>windows_10.iso-part</mark>
                <li>nama file baru saya <mark>windows_10_setelah_digabung.iso</mark></li></ul> 
                <p>Maka perintah yang saya eksekusi adalah:</p>

                <div class="box4"><tt>cat windows_10.iso-part* > windows_10_setelah_digabung.iso</tt><style>
                .box4{
                width: 470px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>
                <img src="https://ik.imagekit.io/jagongoding/storage/2020/01/split-file-besar-di-linux/screenshot-hasil-split-dan-cat.webp">
                <br><b>Gambar 1</b>: Tangkapan layar hasil perintah <mark>split</mark> dan <mark>cat</mark></br>
                <p> NB: tangkapan layar pada <b>Gambar 1</b> di atas terdapat bug dari aplikasi nautilus, di mana ia mendeteksi file berekstensi <mark>part03</mark> sebagai MP3 file. Saya sudah melaporkan bug ini di <u style="color: #228b22;">laman source code resmi GNOME nautilus</u> dan langsung mendapat tanggapan.
                <p> UPDATE; ternyata itu bukan bug dari nautilus, silakan lihat issue <u style="color":#228b22;> 1355</u> untuk lebih detilnya.</p>
                <h2>Memecah file Zip Dengan Perintah zipsplit</h2>
                <p>Untuk memecah atau men-splitting file zip. sebenarnya sudah cukup dengan cara sebelumnya yaitu dengan perintah <mark>split</mark> dan <mark>cat</mark>. Akan tetapi jika anda ingin cara yang lain, anda bisa menggunakan aplikasi <mark>zipsplit</mark>.
                <p> Perintah  <mark>zipsplit</mark> akan memecahkan file <mark>.zip</mark> ke dalam bentuk file .zip yang baru yang lebih kecil. Hal ini berbeda dengan perintah <mark>split</mark> yang mana ia memotong-motong file ke dalam file baru yang tidak jelas formatnya apa dan ekstensinya apa.
                <p>Dengan aplikasi <mark>zipsplit</mark>, kita hanya bisa membagi file zip saja. Untuk file bertipe lain maka tidak bisa. Perintah <mark>zipsplit</mark> ini anda dapatkan ketika anda telah menginstal aplikasi <mark>zip</mark> di Linux yang anda gunakan, sehingga tidak perlu install apa-apa lagi.
                <p>Katakanlah kita memiliki file <mark>foto.zip</mark> dengan ukuran sekitar 50MB. Dan anda ingin untuk memecahnya menjadi masing-masing kurang dari 1MB. Maka anda bisa melakukan perintah berikut:

                <div class="box5"><tt>zipsplit -n <font style="color: green;">1048576</font> foto.zip</tt><style>
                .box5{
                width: 210px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>                   
                <p>Perintah di atas akan menginstruksi <mark>zipsplit</mark> untuk membagi file K<mark>foto.zip</mark> ke dalam file yang tidak kurang dari <mark>1.048.576</mark> byte atau 1MB.
                </p>
                <h3>Zipsplit tidak recommended untuk digunakan</h3>
                <p>Zipsplit tidak direkomendasikan untuk kita gunakan, karena ia memiliki berbagai macam kelemahan seperti:
                <ul><li>Ia tidak support file yang ukurannya lebih dari 2GB
                <li>Ia tidak bisa men-split arsip jika ada salah satu file di dalam arsip yang ukurannya terlalu besar
                <li>Cara untuk menggabungkan kembali file yang telah dipecah-pecah oleh zipsplit terlalu rumit dan tidak sederhana. Itu dikarenakan kita masih perlu mengkoreksi dan melakukan re-index dari file zip yang telah kita gabungkan tersebut.
                </li></ul>
                <h2>Menggunakan 7z</h2>
                <p>Cara lain yang bisa kita lakukan untuk memecah file besar di linux adalah: menggunakan aplikasi <mark>7z</mark>. Aplikasi <mark>7z</mark> cukup populer baik di kalangan pengguna windows mau pun pengguna linux.
                <p>Jika anda belum memasang <mark>7z</mark>, anda bisa memasangnya dengan perintah berikut:    
                <h3>Install 7z di Ubuntu</h3>

                <div class="box6"><tt>sudo add-apt-repository universe
                <br>sudo apt update
                <br>sudo apt install p7zip-full p7zip-rar</tt><style>
                .box6{
                width: 300px;
                height: 80px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>
                <h3>Instal 7z di Arch Linux</h3>
                
                <div class="box7"><tt>sudo pacman -S p7zip</tt><style>
                .box7{
                width: 210px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>
                <h3>Melakukan Splitting files dengan 7z</h3>
                <p>Katakanlah kita memilikifile ISO installer windows 10 dengan nama <mark>win10_English_x64.iso</mark>. Kita bisa langsung mengkompres file tersebut sekaligus memecahnya menjadi beberapa file dalam waktu yang bersamaan.
                <p>Perintah yang kita lakukan adalah sebagai berikut:</p>

                <div class="box8"><tt>7z a -v500m windows-10.7z Win10_English_x64.iso</tt><style>
                .box8{
                width: 400px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>

                <ul><li>Parameter <mark>-v500m</mark> akan menginstruksi 7z untuk memecah file ke dalam ukuran 500MB
                <li> Parameter <mark>windows-10.7z</mark> di atas adalah nama yang akan menjadi output
                <li> Sedangkan parameter <mark>Win10_English_x64.iso</mark> adalah nama file asli kita sebelum diapa-apakan</li></ul>
                <p> Jika anda hanya ingin meng-splitting saja tanpa melakukan proses kompresi, anda bisa menambahkan flag <mark>-mx0</mark> seperti dibawah ini:

                <div class="box9"><tt>7z a -v500 mx0 windows-10.7z Win10_English_x64.iso</tt><style>
                .box9{
                width: 400px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>

                <img src="https://ik.imagekit.io/jagongoding/storage/2020/01/split-file-besar-di-linux/screenshot-split-menggunakan-7z.webp">
                <br><b>Gambar 2:</b> Tangkapan layar hasil perintah <mark>7z</mark></br>
                <h3>Menggabungkan kembali file yang telah di-split</h3>
                <p>Untuk menggabungkan kembali file yang telah di-split dengan 7z. Kita bisa melakukannya dengan beberapa cara: bisa dengan cara <b>CLI</b> mau pun dengan cara <b>GUI</b>menggunakan <mark>nautilus</mark>. Kedua cara tersebut adalah: kita cukup mengekstrak file pertama saja, lalu <mark>7z</mark> yang akan memeriksa dan mengekstrak semua bagian pecahan file yang lain yang berada dalam folder tersebut.</p>

                <h4>CLI</h4>
                <p>Untuk via CLI anda bisa eksekusi perintah berikut:
                <div class="box9"><tt>7z x windows-10.7z.001</tt><style>
                .box9{
                width: 240px;
                height: 30px;
                background: #c0c0c0;
                border-radius: 0px;    
                }    
                </style></div>   

                <h4>GUI</h4>
                <p>Untuk cara GUI dengan Nautilus:</p>
                <ol><li>Buka nautilus, lokasinya ke direktori file yang akan anda ekstrak
                <li>Klik kanan file part 1 (Icon file part 1 berbeda dengan yang lainnya. Bisa dilihat pada <b>Gambar 2</b> di atas)
                <li> Pilih <b>Ektract</b></li></ol>

                <h2>Kesimpulan, mana yang harus digunakan?</h2>
                <p>Dari ketiga cara di atas, anda bisa memilih yang paling sesuai dengan kebutuhan, Yang jelas, cara yang kedua (yaitu menggunakan <mark>zipsplit</mark>) adalah cara yang paling tidak direkomendasikan. Lalu bagaimana dengan <mark>split</mark> dan <mark>7z</mark>?
                <ul><li>Jika anda memaksudkan untuk bertukar file dengan sesama pengguna <b>linux</b>, maka menggunakan <mark>split</mark> dan <mark>cat</mark> lebih cocok.
                <li>Jika anda memaksudkan untuk bertukar file dengan pengguna <b>windows</b>, maka menggunakan aplikasi <mark>7z</mark> lebih sesuai. </li>
                <p> Terima kasih, semoga bermanfaat!</p>
                <p></p>             

                <a href="index.html" class="continue-lendo">Selengkapnya →</a>
                <hr>
            </div>
        </div>
        <!-- akhir bagian konten Blog -->
    </div>
 
</body>
</html>