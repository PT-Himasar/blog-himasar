<div class="modal fade" id="addProker" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-md" role="document">
    <form class="valid-form modal-content" action="/kegiatan/proker/create" method="post" enctype="multipart/form-data" id="addProkerForm">
      <div class="modal-header">
        <h5 class="modal-title" id="addProkerTitle">ADD Proker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="row mt-1">
          <div class="col-mb-2">
            <label for="devisi" class="form-label">Devisi</label>
            <select class="form-select" name="devisi" id="devisi" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="Pengkaderan">Pengkaderan</option>
              <option value="Pembelajaran">Pembelajaran</option>
              <option value="Humas">Humas</option>
              <option value="Kesekretariatan">Kesekretariatan</option>
            </select>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mb-2">
            <label for="kegiatan" class="form-label">Kegiatan</label>
            <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="LK 1">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mb-2">
            <label for="tgl" class="form-label">Tanggal Kegiatan</label>
            <input type="date" name="tgl" id="tgl" class="form-control" placeholder="10/10/2023">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-mb-2">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="Terprogram">Terprogram</option>
              <option value="Comming Soon">Comming Soon</option>
              <option value="Selesai">Selesai</option>
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
