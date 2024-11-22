<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
        <?php flasher::flash();?>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">

<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
          tambah data mahasiswa
        </button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
<form action="<?=BASEURL; ?>/mahasiswa/cari" method="post">

        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombol cari">cari</button>
          </div>
        </div>

      </form>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
      <h3>Daftar mahasiswa</h3>
        
     <ul class="list-group">
     <?php foreach($data['mhs'] as $mhs) : ?>
  <li class="list-group-item">
    <?= $mhs['nama'];?>
    <a href="<?=BASEURL;?>/mahasiswa/hapus/<?=$mhs['id'];?>" class="badge bg-danger float-end ms-2" onclick = "return confirm('yakin?');">Hapus</a>
    <a href="<?=BASEURL;?>/mahasiswa/ubah/<?=$mhs['id'];?>" class="badge bg-success float-end ms-2 tampilModalUbah"  data-bs-toggle="modal" data-bs-target="#FormModal" data-id="<?=$mhs['id']; ?>">ubah</a>
    <a href="<?=BASEURL;?>/mahasiswa/detail/<?=$mhs['id'];?>" class="badge bg-primary float-end ms-2">Detail</a>
</li>
  <?php endforeach; ?>
    </ul>      
        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="FormModalLabel">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">   
      <form action= "<?=BASEURL;?>/mahasiswa/tambah" method = "post">
        <input type="hidden" name="id" id="id">
        
          <div class="mb-3">
      <label for="nama" class="form-label">nama</label>
      <input type="text" class="form-control" id="nama" name="nama" >
    </div>

    
    <div class="mb-3">
      <label for="nrp" class="form-label">nrp</label>
      <input type="number" class="form-control" id="nrp" name="nrp" >
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email" >
    </div>

    <div class="form-group">
    <label for="jurusan">jurusan</label>
    <select class = "form-control" id="jurusan" name="jurusan">

    <option value = "Teknik informatika">Teknik informatika</option>
    <option value = "Teknik mesin">Teknik mesin</option>
    <option value = "Teknik listrik">Teknik listrik</option>
    <option value = "Teknik elektro">Teknik elektro</option>
    <option value = "Teknik lingkungan">Teknik lingkungan</option>

    
    </select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
      </div>
      </form>
    </div>
  </div>
</div>