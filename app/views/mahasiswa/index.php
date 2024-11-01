<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
        <?php flasher::flash();?>
  </div>
</div>


    <div class="row">
        <div class="col-lg-6">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormModal">
          tambah data mahasiswa
        </button>

        <br></br>

        <h3>Daftar mahasiswa</h3>
        
     <ul class="list-group">
     <?php foreach($data['mhs'] as $mhs) : ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $mhs['nama'];?>
    <a href="<?=BASEURL;?>/mahasiswa/detail/<?=$mhs['id'];?>"class= "badge bg-secondary">detail</a>
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
        <h1 class="modal-title fs-5" id="JudulModal">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action= "<?=BASEURL;?>/mahasiswa/tambah" method = "post">

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
        </from>

      </div>
    </div>
  </div>
</div>