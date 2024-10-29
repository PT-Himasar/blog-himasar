<div class="modal fade" id="edit{{ $row->id }}" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="valid-form modal-content" action="/anggota/tabel-bph/edit/{{ $row->id }}" method="post" enctype="multipart/form-data" id="editAnggotaForm-{{ $row->id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="editAnggotaTitle">Edit Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start">
        @csrf
        @method('put')
        <div class="row">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom image-section justify-content-center d-flex">
            <img src="{{asset('assets/img/anggota/' . $row->gambar) }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="editAvatar" />
            <div class="button-wrapper">
              <label for="edit{{ $row->gambar }}" class="btn btn-primary me-3 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Unggah foto baru</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="gambar" id="edit{{ $row->gambar }}" class="account-file-edit" hidden accept="image/png, image/jpeg" />
              </label>
              <button type="button" id="resetEdit" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>
              <div>Diizinkan JPG, GIF & PNG</div>
              <div>Maks ukuran 800K</div>
            </div>
          </div>
        </div>
        <div class="row g-4 mt-2">
          <div class="col-sm-6">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $row->nama) }}" placeholder="Enter Name" required>
          </div>
          <div class="col-sm-6">
            <label for="jkel" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jkel" name="jkel" aria-label="Default select example" required>
              <option value="" disabled selected>Select</option>
              <option value="pria" {{ old('jkel', $row->jkel) == 'pria' ? 'selected' : '' }}>Pria</option>
              <option value="wanita" {{ old('jkel', $row->jkel) == 'wanita' ? 'selected' : '' }}>Wanita</option>
            </select>
          </div>
        </div>
        <div class="row g-4 mt-2">
          <div class="col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $row->email) }}" placeholder="xxxx@gmail.com" required>
          </div>
          <div class="col-sm-6">
            <label for="no_tlp" class="form-label">No Telpon</label>
            <input type="text" id="no_tlp" name="no_tlp" class="form-control" value="{{ old('no_tlp', $row->no_tlp) }}" placeholder="+62xxx3456xxx" required>
          </div>
        </div>
        <div class="row g-4 mt-2">
          <div class="col-sm-6">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ old('tgl_lahir', $row->tgl_lahir) }}" required>
          </div>
          <div class="col-sm-6">
            <label for="angkatan" class="form-label">Angkatan Kampus</label>
            <input type="number" name="angkatan" id="angkatan" class="form-control" value="{{ old('angkatan', $row->angkatan) }}" placeholder="2021" required>
          </div>
        </div>
        <div class="row g-4 mt-2">
          <div class="col-sm-6">
            <label for="patondro" class="form-label">Patondro (Gunakan Angka Romawi)</label>
            <input type="text" name="patondro" id="patondro" class="form-control" value="{{ old('patondro', $row->patondro) }}" placeholder="XXI" required>
          </div>
          <div class="col-sm-6">
            <label for="nra" class="form-label">NRA</label>
            <input type="number" name="nra" id="nra" class="form-control" value="{{ old('nra', $row->nra) }}" placeholder="302">
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan" id="jabatan" required>
              <option selected value="">Select</option>
              <option value="Pembina" {{ old('jabatan', $row->jabatan) == 'Pembina' ? 'selected' : '' }}>Pembina</option>
              <option value="DPO" {{ old('jabatan', $row->jabatan) == 'DPO' ? 'selected' : '' }}>DPO</option>
              <option value="Staf DPO" {{ old('jabatan', $row->jabatan) == 'Staf DPO' ? 'selected' : '' }}>Staf DPO</option>
              <option value="Ketua" {{ old('jabatan', $row->jabatan) == 'Ketua' ? 'selected' : '' }}>Ketua</option>
              <option value="Wakil Ketua" {{ old('jabatan', $row->jabatan) == 'Wakil Ketua' ? 'selected' : '' }}>Wakil Ketua</option>
              <option value="Sekretaris" {{ old('jabatan', $row->jabatan) == 'Sekretaris' ? 'selected' : '' }}>Sekretaris</option>
              <option value="Bendahara" {{ old('jabatan', $row->jabatan) == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
              <option value="Kordinator Pengkaderan" {{ old('jabatan', $row->jabatan) == 'Kordinator Pengkaderan' ? 'selected' : '' }}>Kordinator Pengkaderan</option>
              <option value="Kordinator Pembelajaran" {{ old('jabatan', $row->jabatan) == 'Kordinator Pembelajaran' ? 'selected' : '' }}>Kordinator Pembelajaran</option>
              <option value="Kordinator Humas" {{ old('jabatan', $row->jabatan) == 'Kordinator Humas' ? 'selected' : '' }}>Kordinator Humas</option>
              <option value="Kordinator Kesekretariatan" {{ old('jabatan', $row->jabatan) == 'Kordinator Kesekretariatan' ? 'selected' : '' }}>Kordinator Kesekretariatan</option>
              <option value="Wakil Kordinator Pengkaderan" {{ old('jabatan', $row->jabatan) == 'Wakil Kordinator Pengkaderan' ? 'selected' : '' }}>Wakil Kordinator Pengkaderan</option>
              <option value="Wakil Kordinator Pembelajaran" {{ old('jabatan', $row->jabatan) == 'Wakil Kordinator Pembelajaran' ? 'selected' : '' }}>Wakil Kordinator Pembelajaran</option>
              <option value="Wakil Kordinator Humas" {{ old('jabatan', $row->jabatan) == 'Wakil Kordinator Humas' ? 'selected' : '' }}>Wakil Kordinator Humas</option>
              <option value="Wakil Kordinator Kesekretariatan" {{ old('jabatan', $row->jabatan) == 'Wakil Kordinator Kesekretariatan' ? 'selected' : '' }}>Wakil Kordinator Kesekretariatan</option>
              <option value="Staf Pengkaderan" {{ old('jabatan', $row->jabatan) == 'Staf Pengkaderan' ? 'selected' : '' }}>Staf Pengkaderan</option>
              <option value="Staf Pembelajaran" {{ old('jabatan', $row->jabatan) == 'Staf Pembelajaran' ? 'selected' : '' }}>Staf Pembelajaran</option>
              <option value="Staf Humas" {{ old('jabatan', $row->jabatan) == 'Staf Humas' ? 'selected' : '' }}>Staf Humas</option>
              <option value="Staf Kesekretariatan" {{ old('jabatan', $row->jabatan) == 'Staf Kesekretariatan' ? 'selected' : '' }}>Staf Kesekretariatan</option>
              <option value="-" {{ old('jabatan', $row->jabatan) == 'Calon BPH / Alumni' ? 'selected' : '' }}>Calon BPH / Alumni</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" required>
              <option selected value="">Select</option>
              <option value="BPH" {{ old('status', $row->status) == 'BPH' ? 'selected' : '' }}>BPH</option>
              <option value="Anggota Muda" {{ old('status', $row->status) == 'Anggota Muda' ? 'selected' : '' }}>Anggota Muda</option>
              <option value="Calon Anggota" {{ old('status', $row->status) == 'Calon Anggota' ? 'selected' : '' }}>Calon Anggota</option>
              <option value="Anggota Lepas" {{ old('status', $row->status) == 'Anggota Lepas' ? 'selected' : '' }}>Anggota Lepas</option>
            </select>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="jkarir" class="form-label">Jenjang Karir</label>
            <textarea class="form-control" name="jkarir" id="jkarir" rows="3" placeholder="- lk 1 himasar
- lk 2 himasar
- ketua umum himasar ke 12" required>{{ old('jkarir', $row->jkarir) }}</textarea>
          </div>
          <div class="col-sm-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Jl. Jalan" required>{{ old('alamat', $row->alamat) }}</textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mx-2" id="editButton-{{ $row->id }}" disabled>Save</button>
      </div>
    </form>
  </div>
</div>