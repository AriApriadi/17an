<!-- New Kategori Section -->
<div class="new-users">
    <h2>Jenis</h2>
    <div class="user-list">
        <?php
        $query = "SELECT * FROM jenis";
        $result = $koneksi->query($query);

        // Loop melalui hasil query dan tampilkan dalam HTML
        while ($row = $result->fetch_assoc()) {
            $nama_kategori = $row['nama'];
            // $jumlah_pendaftar = $row['jumlah_pendaftar'];
        ?>
            <div class="user">
                <img src="https://static.thenounproject.com/png/3890909-200.png">
                <h2><?php echo $nama_kategori; ?></h2>
                <p>jumlah pendaftar</p>
            </div>
        <?php
        }
        ?>
        <div class="user">
            <img src="images/plus.png">
            <h2>More</h2>
            <p>New Kategori</p>
        </div>
    </div>
</div>
<!-- End of New Kategori Section -->