<?php $this->extend('layouts/template'); ?>
<?php $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/tambah" method="post">
            <div class="input">
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi">
            </div>
            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas">
            </div>
            <div class="input">
                <label for="no_hp">No Handphone</label>
                <input type="no_hp" name="no_hp" id="no_hp">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?php $this->endSection(); ?>