<main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Edit Mahasiswa</h1>
    </div>
    <div class="container mt-5">
        <div class="row ">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                 <?= validation_errors();?>
                </div>
            <?php endif;?>
            <div class="mb-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Mahasiswa
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0?>
                        <?php foreach($mahasiswa as $row): ?>
                        <tr>
                            <th scope="row"><?= $count += 1?></th>
                            <td><?= $row->nama?></td>
                            <td><?= $row->nrp?></td>
                            <td><?= $row->email?></td>
                            <td><?= $row->jurusan?></td>
                            <td>
                                <a href="<?= base_url();?>mahasiswa/hapus/<?= $row->id?>" class="badge bg-danger">hapus</a>
                                <a href="#" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $row->id?>">edit</a>
                                <!-- Modal edit -->
                                <div class="modal fade" id="edit<?= $row->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa <?= $row->nama?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url();?>mahasiswa/edit" method="post">
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $row->id?>">
                                                <div class="mb-6">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama?>">
                                                </div>
                                                <div class="mb-6">
                                                    <label for="nrp" class="form-label">NRP</label>
                                                    <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $row->nrp?>">
                                                </div>
                                                <div class="mb-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="<?= $row->email?>">
                                                </div>
                                                <div calss="mb-6">
                                                    <label for="jurusan" class="form-group">Jurusan</label>
                                                    <select class="form-control" id="jurusan" name="jurusan">
                                                    <option value="<?= $row->jurusan?>"><?= $row->jurusan?></option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Teknik Ekonomi">Teknik Ekonomi</option>
                                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url();?>mahasiswa/tambah" method="post">
            <div class="mb-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-6">
                <label for="nrp" class="form-label">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div calss="mb-6">
                <label for="jurusan" class="form-group">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Ekonomi">Teknik Ekonomi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
    </div>
  </div>
</div>