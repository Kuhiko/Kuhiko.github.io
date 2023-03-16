<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Mahasiswa</h1>
    </div>
    <?php if($this->session->flashdata('flash')): ?>
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php endif;?>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">nama</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0?>
                        <?php foreach($mahasiswa as $row): ?>
                        <tr>
                            <th scope="row"><?= $count += 1?></th>
                            <td><?= $row->nama?></td>
                            <td><?= $row->jurusan?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </main>