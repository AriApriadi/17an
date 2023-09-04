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
        justify-content: space-between; /* Untuk memisahkan elemen-elemen di sebelah kiri dan kanan */
        width: 100%; /* Membuat form memenuhi lebar div */
    }

    .h2-wrapper {
        flex-grow: 1; /* Memungkinkan elemen ini untuk membesar sehingga elemen input ada di sebelah kanan */
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
            <h2>Recent Lomba</h2>
        </div>
        <input class="input-search" type="text" id="searchInput" placeholder="Cari Lomba...">
        <button type="submit" class="search-button">Cari</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Lomba</th>
                <th>Jenis Lomba</th>
                <th>Kategori Lomba</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody class="recent-orders-table"> 
            <?php
            $query = "SELECT l.nama as 'nama', j.nama as 'jenis', k.nama as kategori FROM  lomba l
            JOIN kategori k ON k.kategori_id = l.kategori_id
            JOIN jenis j ON j.jenis_id = l.jenis_id";
            $result = $koneksi->query($query);

            $no = 1; // Untuk nomor urut

            // Loop melalui hasil query dan tampilkan dalam tabel
            while ($row = $result->fetch_assoc()) {
                $nama = $row['nama'];
                $jenis_lomba = $row['jenis'];
                $kategori_lomba = $row['kategori'];
                ?>

                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $jenis_lomba ?></td>
                    <td><?php echo $kategori_lomba ?></td>
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