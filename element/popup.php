<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form>
            <h1>Form Pendaftaran</h1>
            <div class="question">
                <label>Nama Lengkap</label>
                <input type="text" id="nama" required />
            </div>
            <div class="question">
                <label>Usia</label>
                <input type="text" id="usia" required />
            </div>
            <div class="question">
                <label>Kategori Lomba</label>
                <select id="kategori" name="kategori">
                    <option value="1">Anak-Anak</option>
                    <option value="2">Dewasa</option>
                    <option value="3">Semua Usia</option>
                </select>
            </div>
            <button class="modal-button" onclick="inputdata();">Submit</button>
        </form>
    </div>
</div>