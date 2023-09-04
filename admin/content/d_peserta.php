<!-- Recent Orders Table -->
<div class="recent-orders">
    <h2>Recent Peserta</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>No Rumah</th>
                <th>Lomba</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT p.nama as 'nama', jk.nama as 'jk', tanggal_lahir, no_rumah, l.nama as 'lomba', k.nama as'kategori' 
            FROM pendaftar p JOIN jenis_kelamin jk ON jk.jenis_kelamin_id = p.jenis_kelamin_id 
            JOIN lomba l ON l.lomba_id = p.lomba_id 
            JOIN kategori k ON k.kategori_id = p.kategori_id LIMIT 3";
            $result = $koneksi->query($query);

            $no = 1; // Untuk nomor urut

            // Loop melalui hasil query dan tampilkan dalam tabel
            while ($row = $result->fetch_assoc()) {
                $nama = $row['nama'];
                $jenis_kelamin = $row['jk'];
                $tanggal_lahir = $row['tanggal_lahir'];
                $no_rumah = $row['no_rumah'];
                $lomba = $row['lomba'];
                $kategori = $row['kategori'];

                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $jenis_kelamin . "</td>";
                echo "<td>" . $tanggal_lahir . "</td>";
                echo "<td>" . $no_rumah . "</td>";
                echo "<td>" . $lomba . "</td>";
                echo "<td>" . $kategori . "</td>";
                echo "</tr>";

                $no++; // Tambah nomor urut
            }
            $koneksi->close();
            ?>
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
<!-- End of Recent Orders -->