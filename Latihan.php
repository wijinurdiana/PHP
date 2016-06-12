<html>
    <body>
        <h2>Data Pegawai</h2>
        <form method="post" action="Latihan.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">ID Pegawai</td>
            <td><input name="id_pegawai" type="text" id="id_pegawai" placeholder="Id Pegawai"></td>
        </tr>
        <tr>
            <td width="120">Nama Pegawai</td>
            <td><input name="nama_pegawai" type="text" id="nama_pegawai" placeholder="Nama Pegawai"></td>
        </tr>
        <tr>
            <td width="100">Gaji</td>
            <td><input name="gaji" type="text" id="gaji" placeholder="Gaji"></td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $koneksi )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $id = addslashes ($_POST['id_pegawai']);
               $nama = addslashes ($_POST['nama_pegawai']);
               $gaji = addslashes($_POST['gaji']);
            }
            else
            {
               $id = $_POST ['id_pegawai'];
               $nama = $_POST ['nama_pegawai'];
               $gaji = $_POST['gaji'];
            }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO pegawai ".
                   "(id_pegawai,nama_pegawai,gaji) ".
                   "VALUES('$id','$nama','$gaji')";
            mysql_select_db('sttb');
            $tambahdata = mysql_query( $sql, $koneksi );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT id_pegawai,nama_pegawai,gaji FROM pegawai";
            mysql_select_db('sttb');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "ID Pegawai: " . $row["id_pegawai"]. " - Nama: " . $row["nama_pegawai"]. " - Gaji: " . $row["gaji"]. "<br>";
            }
            mysql_close($koneksi);
            }
            else
            {
            }
        ?>
    </body>
</html>