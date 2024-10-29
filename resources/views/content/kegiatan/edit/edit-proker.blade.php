<div class="modal fade" id="edit{{ $row->id }}" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-md" role="document">
    <form class="valid-form modal-content" action="/kegiatan/proker/edit/{{ $row->id }}" method="post" enctype="multipart/form-data" id="addNewsForm">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewsTitle">Edit Proker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start">
        @csrf
        @method('put')
        <div class="row mt-1">
          <div class="col-mb-2">
            <label for="devisi" class="form-label">Devisi</label>
            <select class="form-select" name="devisi" id="devisi" aria-label="Default select example" required>
              <option value="">Select</option>
              <option value="Humas" {{ old('devisi', $row->devisi) == 'Humas' ? 'selected' : '' }}>Humas</option>
              <option value="Pengkaderan" {{ old('devisi', $row->devisi) == 'Pengkaderan' ? 'selected' : '' }}>Pengkaderan</option>
              <option value="Pembelajaran" {{ old('devisi', $row->devisi) == 'Pembelajaran' ? 'selected' : '' }}>Pembelajaran</option>
              <option value="Kesekretariatan" {{ $row->devisi == 'Kesekretariatan' ? 'selected' : '' }}>Kesekretariatan</option>
            </select>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mt-2">
            <label for="kegiatan" class="form-label">Kegiatan</label>
            <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="LK 1" value="{{ old('kegiatan', $row->kegiatan) }}" required>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mb-2">
            <label for="tgl" class="form-label">Tanggal Kegiatan</label>
            <input type="date" name="tgl" id="tgl" class="form-control" placeholder="10/10/2023" value="{{ old('tgl', $row->tgl) }}" required>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mb-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" aria-label="Default select example" required>
              <option value="">Select</option>
              <option value="Terprogram" {{ old('status', $row->status) == 'Terprogram' ? 'selected' : '' }}>Terprogram</option>
              <option value="Comming Soon" {{ old('status', $row->status) == 'Comming Soon' ? 'selected' : '' }}>Comming Soon</option>
              <option value="Selesai" {{ old('status', $row->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mx-2" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
      </div>
    </form>
  </div>
</div>
