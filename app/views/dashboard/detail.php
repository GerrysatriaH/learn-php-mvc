<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text mt-3">Email : <?= $data['mhs']['email']; ?></p>
        <p class="card-text">Prodi : <?= $data['mhs']['prodi']; ?></p>
        <a href="<?= BASEURL; ?>/dashboard" class="card-link text-decoration-none">Kembali</a>
    </div>
    </div>
</div>