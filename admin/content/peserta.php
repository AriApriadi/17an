<style>
    .recent-orders-table tr:nth-child(n+9) {
        display: none;
    }

    .recent-orders {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .search-form {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        /* Untuk memisahkan elemen-elemen di sebelah kiri dan kanan */
        width: 100%;
        /* Membuat form memenuhi lebar div */
    }

    .h2-wrapper {
        flex-grow: 1;
        /* Memungkinkan elemen ini untuk membesar sehingga elemen input ada di sebelah kanan */
    }

    .input-search {
        margin-bottom: 20px;
        padding-right: 5px;
        padding-left: 10px;
        height: 40px;
        width: 250px;
        box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .search-button {
        background-color: #FF0060;
        margin-bottom: 20px;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 0 10px 10px 0;
    }
</style>
<div class="recent-orders">
    <form id="searchForm" class="search-form">
        <div class="h2-wrapper">
            <h2>Recent Peserta</h2>
        </div>
        <input class="input-search" type="text" id="searchInput" placeholder="Cari Lomba...">
        <button type="submit" class="search-button">Cari</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>No Rumah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT p.nama as 'nama', jk.nama as 'jk', tanggal_lahir, no_rumah, l.nama as 'lomba', k.nama as'kategori' 
            FROM pendaftar p JOIN jenis_kelamin jk ON jk.jenis_kelamin_id = p.jenis_kelamin_id 
            JOIN lomba l ON l.lomba_id = p.lomba_id 
            JOIN kategori k ON k.kategori_id = p.kategori_id";
            $result = $koneksi->query($query);

            $no = 1; // Untuk nomor urut

            // Loop melalui hasil query dan tampilkan dalam tabel
            while ($row = $result->fetch_assoc()) {
                $nama = $row['nama'];
                $jenis_kelamin = $row['jk'];
                $tanggal_lahir = $row['tanggal_lahir'];
                $no_rumah = $row['no_rumah'];
                ?>

                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $jenis_kelamin ?></td>
                    <td><?php echo $tanggal_lahir ?></td>
                    <td><?php echo $no_rumah ?></td>
                    <td style="width: 10%;">
                        <div class="icon-edit">
                            <span class="material-icons-sharp">
                                open_in_new
                            </span>
                        </div>
                    </td>
                </tr>
            <?php
                $no++; // Tambah nomor urut
            }
            $koneksi->close();
            ?>
        </tbody>
    </table>
    <a href="#" id="showAllLink">Show All</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showAllLink = document.getElementById('showAllLink');
        var tableRows = document.querySelectorAll('.recent-orders-table tr');
        var searchInput = document.getElementById('searchInput');
        var searchForm = document.getElementById('searchForm');

        showAllLink.addEventListener('click', function(event) {
            event.preventDefault();

            tableRows.forEach(function(row) {
                row.style.display = 'table-row';
            });

            // Sembunyikan link "Show All" setelah diklik
            showAllLink.style.display = 'none';
        });

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();
            var searchTerm = searchInput.value.toLowerCase();

            tableRows.forEach(function(row) {
                var rowData = row.textContent.toLowerCase();
                if (rowData.includes(searchTerm)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
<!-- End of Recent Orders -->