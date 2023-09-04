<h2>Lomba</h2>
<!-- Analyses -->
<div class="analyse">
    <?php
    $query = "SELECT * FROM kategori WHERE kategori_id = 1 LIMIT 1";
    $result = $koneksi->query($query);

    // Loop melalui hasil query dan tampilkan dalam HTML
    while ($row = $result->fetch_assoc()) {
        $nama_lomba = $row['nama'];
        // $jumlah_pendaftar = $row['jumlah_pendaftar'];
    ?>
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3><?php echo $nama_lomba; ?></h3>
                <?php
            }
                ?>
                <?php
                $query = "SELECT COUNT(*) as total_lomba FROM lomba WHERE kategori_id = 1";
                $result = $koneksi->query($query);

                // Loop melalui hasil query dan tampilkan dalam HTML
                while ($row = $result->fetch_assoc()) {
                    $total_lomba = $row['total_lomba'];
                    // $jumlah_pendaftar = $row['jumlah_pendaftar'];
                ?>
                    <h1 style="text-align: center;"><?php echo $total_lomba; ?></h1>
                </div>
                <div class="progresss">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="percentage">
                        <p>+81%</p>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </div>
        <?php
        $query = "SELECT * FROM kategori WHERE kategori_id = 3 LIMIT 1";
        $result = $koneksi->query($query);

        // Loop melalui hasil query dan tampilkan dalam HTML
        while ($row = $result->fetch_assoc()) {
            $nama_lomba = $row['nama'];
            // $jumlah_pendaftar = $row['jumlah_pendaftar'];
        ?>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3><?php echo $nama_lomba; ?></h3>
                    <?php
                }
                    ?>
                    <?php
                    $query = "SELECT COUNT(*) as total_lomba FROM lomba WHERE kategori_id = 3";
                    $result = $koneksi->query($query);

                    // Loop melalui hasil query dan tampilkan dalam HTML
                    while ($row = $result->fetch_assoc()) {
                        $total_lomba = $row['total_lomba'];
                        // $jumlah_pendaftar = $row['jumlah_pendaftar'];
                    ?>
                        <h1 style="text-align: center;"><?php echo $total_lomba; ?></h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>-48%</p>
                        </div>
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
            <?php
            $query = "SELECT * FROM kategori WHERE kategori_id = 4 LIMIT 1";
            $result = $koneksi->query($query);

            // Loop melalui hasil query dan tampilkan dalam HTML
            while ($row = $result->fetch_assoc()) {
                $nama_lomba = $row['nama'];
                // $jumlah_pendaftar = $row['jumlah_pendaftar'];
            ?>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3><?php echo $nama_lomba; ?></h3>
                        <?php
                    }
                        ?>
                        <?php
                        $query = "SELECT COUNT(*) as total_lomba FROM lomba WHERE kategori_id = 4";
                        $result = $koneksi->query($query);

                        // Loop melalui hasil query dan tampilkan dalam HTML
                        while ($row = $result->fetch_assoc()) {
                            $total_lomba = $row['total_lomba'];
                            // $jumlah_pendaftar = $row['jumlah_pendaftar'];
                        ?>
                            <h1 style="text-align: center;"><?php echo $total_lomba; ?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
</div>
<!-- End of Analyses -->