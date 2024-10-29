<div class="modal fade" id="addAnggota" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="valid-form modal-content" action="/anggota/tabel-bph/create" method="post" enctype="multipart/form-data" id="addAnggotaForm">
      <div class="modal-header">
        <h5 class="modal-title" id="addAnggotaTitle">ADD Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="row">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom justify-content-center d-flex">
            <img src="{{asset('assets/img/avatars/4.png')}}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="gambar" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
              </label>
              <button type="button" id="resetUpload" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>
              <div>Allowed JPG, GIF & PNG</div>
              <div>Max size of 800K</div>
            </div>
          </div>
        </div>

        <div class="row g-6">
          <div class="col-sm-6">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="col-sm-6">
            <label for="jkel" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jkel" name="jkel" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="xxxx@gmail.com" required>
          </div>
          <div class="col-sm-6">
            <label for="no_tlp" class="form-label">No Telpon</label>
            <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="+62xxx3456xxx" required>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
          </div>
          <div class="col-sm-6">
            <label for="angkatan" class="form-label">Angkatan Kampus</label>
            <input type="number" name="angkatan" id="angkatan" class="form-control" placeholder="2021" required>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="patondro" class="form-label">Patondro (Gunakan Angka Romawi)</label>
            <input type="text" name="patondro" id="patondro" class="form-control" placeholder="XXI" required>
          </div>
          <div class="col-sm-6">
            <label for="nra" class="form-label">NRA</label>
            <input type="number" name="nra" id="nra" class="form-control" placeholder="302">
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan" id="jabatan" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="Pembina">Pembina</option>
              <option value="DPO">DPO</option>
              <option value="Staf DPO">Staf DPO</option>
              <option value="Ketua">Ketua</option>
              <option value="Wakil Ketua">Wakil Ketua</option>
              <option value="Sekretaris">Sekretaris</option>
              <option value="Bendahara">Bendahara</option>
              <option value="Kordinator Pengkaderan">Kordinator Pengkaderan</option>
              <option value="Kordinator Pembelajaran">Kordinator Pembelajaran</option>
              <option value="Kordinator Humas">Kordinator Humas</option>
              <option value="Kordinator Kesekretariatan">Kordinator Kesekretariatan</option>
              <option value="Wakil Kordinator Pengkaderan">Wakil Kordinator Pengkaderan</option>
              <option value="Wakil Kordinator Pembelajaran">Wakil Kordinator Pembelajaran</option>
              <option value="Wakil Kordinator Humas">Wakil Kordinator Humas</option>
              <option value="Wakil Kordinator Kesekretariatan">Wakil Kordinator Kesekretariatan</option>
              <option value="Staf Pengkaderan">Staf Pengkaderan</option>
              <option value="Staf Pembelajaran">Staf Pembelajaran</option>
              <option value="Staf Humas">Staf Humas</option>
              <option value="Staf Kesekretariatan">Staf Kesekretariatan</option>
              <option value="-">Calon BPH / Alumni</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="BPH">BPH</option>
              <option value="Anggota Muda">Anggota Muda</option>
              <option value="Anggota Lepas">Anggota Lepas</option>
            </select>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="jkarir" class="form-label">Jenjang Karir</label>
            <textarea class="form-control" name="jkarir" id="jkarir" rows="3" placeholder="- lk 1 himasar
- lk 2 himasar
- ketua umum himasar ke 12" required></textarea>
          </div>
          <div class="col-sm-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Jl. Jalan" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mx-2" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="saveButton" disabled>Save</button>
      </div>
    </form>
  </div>
</div>