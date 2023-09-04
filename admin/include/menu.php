
<aside>
    <div class="toggle">
        <div class="logo">
            <img src="images/logo.png">
            <h2>17<span class="danger">an</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">
                close
            </span>
        </div>
    </div>

    <div class="sidebar">
        <a href="?page=index" class="">
            <span class="material-icons-sharp">
                dashboard
            </span>
            <h3>Dashboard</h3>
        </a>
        <a href="?page=kategori" class="">
            <span class="material-icons-sharp">
            inventory
            </span>
            <h3>Kategori</h3>
        </a>
        <!-- <a href="#">
            <span class="material-icons-sharp">
                receipt_long
            </span>
            <h3>Jenis Lomba</h3>
        </a> -->
        <a href="?page=lomba" class="">
            <span class="material-icons-sharp">
                insights
            </span>
            <h3>Lomba</h3>
        </a>
        <!-- <a href="#">
            <span class="material-icons-sharp">
                mail_outline
            </span>
            <h3>Tickets</h3>
            <span class="message-count">27</span>
        </a> -->
        <!-- <a href="#">
            <span class="material-icons-sharp">
                inventory
            </span>
            <h3>Sale List</h3>
        </a> -->
        <a href="?page=peserta" class="">
            <span class="material-icons-sharp">
            person_outline
            </span>
            <h3>Peserta</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp">
                settings
            </span>
            <h3>Settings</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp">
                add
            </span>
            <h3>New Login</h3>
        </a>
        <a href="../admin/logout.php">
            <span class="material-icons-sharp">
                logout
            </span>
            <h3>Logout</h3>
        </a>
    </div>
</aside>
<script>
    // Dapatkan URL halaman saat ini
    var currentUrl = window.location.href;

    // Dapatkan semua tautan dalam sidebar
    var sidebarLinks = document.querySelectorAll("aside .sidebar a");

    // Loop melalui tautan dan periksa apakah href cocok dengan URL saat ini
    sidebarLinks.forEach(function(link) {
        if (link.href === currentUrl) {
            // Tambahkan kelas "active" ke tautan yang sesuai
            link.classList.add("active");
        }
    });
</script>