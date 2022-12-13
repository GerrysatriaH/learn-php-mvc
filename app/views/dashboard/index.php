<div class="container mt-4">

    <div class="row">
      <div class="col-lg-6">
          <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" 
                class="btn btn-primary mb-4 tombolTambahData" 
                data-bs-toggle="modal" 
                data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">

                        <?= $mhs['nama']; ?>

                        <a href="<?= BASEURL; ?>/dashboard/hapus/<?= $mhs['id']; ?>" 
                           class="badge bg-danger text-decoration-none float-end ms-1" 
                           onclick="return confirm('yakin ingin hapus ?');">hapus</a>

                        <a href="<?= BASEURL; ?>/dashboard/ubah/<?= $mhs['id']; ?>" 
                           class="badge bg-success text-decoration-none float-end ms-1 tampilModalUbah" 
                           data-bs-toggle="modal" 
                           data-bs-target="#formModal"
                           data-id="<?= $mhs['id']; ?>">ubah</a>

                        <a href="<?= BASEURL; ?>/dashboard/detail/<?= $mhs['id']; ?>" 
                           class="badge bg-primary text-decoration-none float-end ms-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/dashboard/tambah" method="POST">
        <input type="hidden" name="id" id="id">
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
        </div>
        <div class="form-group mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
        </div>
        <div class="form-group mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <select class="form-select" id="prodi" name="prodi">
                <option selected>Pilih Program Studi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Analisis Kimia">Analisis Kimia</option>
                <option value="Teknik Industri Benih">Teknik Industri Benih</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>