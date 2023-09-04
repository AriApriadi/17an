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

    /* Tambahkan style untuk membuat tombol sejajar */
    .action-buttons a {
        text-decoration: none;
        padding: 3px 6px;
        margin: 0 2px;
        background-color: #007BFF;
        color: #fff;
        border-radius: 3px;
    }
</style>

<!-- Tabel Kategori -->
<div class="recent-orders">
<form id="searchForm" class="search-form">
        <div class="h2-wrapper">
            <h2>Recent Kategori</h2>
        </div>
        <input class="input-search" type="text" id="searchInput" placeholder="Cari Lomba...">
        <button type="submit" class="search-button">Cari</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori Lomba</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody class="recent-orders-table">
            <?php
            $queryKategori = "SELECT * FROM kategori";
            $resultKategori = $koneksi->query($queryKategori);

            $no = 1; // Untuk nomor urut

            // Loop melalui hasil query dan tampilkan dalam tabel
            while ($rowKategori = $resultKategori->fetch_assoc()) {
                $idKategori = $rowKategori['kategori_id']; // ID kategori (ganti sesuai dengan nama kolom ID Anda)
                $namaKategori = $rowKategori['nama'];
            ?>

                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $namaKategori ?></td>
                    <td style="width: 10%;">
                        <div class="icon-edit">
                            <span class="material-icons-sharp">
                                edit
                            </span>
                        </div>
                    </td>
                    <td style="width: 10%;">
                        <div class="icon-delete">
                            <span class="material-icons-sharp">
                                delete
                            </span>
                        </div>
                    </td>
                </tr>
            <?php
                $no++; // Tambah nomor urut
            }
            ?>
        </tbody>
    </table>

    <a href="#" id="showAllLinkKategori">Show All</a>
</div>

<!-- Tabel Jenis -->
<div class="recent-orders">
<form id="searchForm" class="search-form">
        <div class="h2-wrapper">
            <h2>Recent Jenis Lomba</h2>
        </div>
        <input class="input-search" type="text" id="searchInput" placeholder="Cari Lomba...">
        <button type="submit" class="search-button">Cari</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Lomba</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody class="recent-orders-table">
            <?php
            $queryJenis = "SELECT * FROM jenis";
            $resultJenis = $koneksi->query($queryJenis);

            $no = 1; // Untuk nomor urut

            // Loop melalui hasil query dan tampilkan dalam tabel
            while ($rowJenis = $resultJenis->fetch_assoc()) {
                $jenisLomba = $rowJenis['nama'];
            ?>

                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $jenisLomba ?></td>
                    <td style="width: 10%;">
                        <div class="icon-edit">
                            <span class="material-icons-sharp">
                                edit
                            </span>
                        </div>
                    </td>
                    <td style="width: 10%;">
                        <div class="icon-delete">
                            <span class="material-icons-sharp">
                                delete
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
    <a href="#" id="showAllLinkKategori">Show All</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showAllLinkKategori = document.getElementById('showAllLinkKategori');
        var tableRowsKategori = document.querySelectorAll('.recent-orders-table tr');
        var searchInputKategori = document.getElementById('searchInputKategori');
        var searchFormKategori = document.getElementById('searchFormKategori');

        showAllLinkKategori.addEventListener('click', function(event) {
            event.preventDefault();

            tableRowsKategori.forEach(function(row) {
                row.style.display = 'table-row';
            });

            // Sembunyikan link "Show All" setelah diklik
            showAllLinkKategori.style.display = 'none';
        });

        searchFormKategori.addEventListener('submit', function(event) {
            event.preventDefault();
            var searchTermKategori = searchInputKategori.value.toLowerCase();

            tableRowsKategori.forEach(function(row) {
                var rowDataKategori = row.textContent.toLowerCase();
                if (rowDataKategori.includes(searchTermKategori)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

<!-- End of Recent Orders -->