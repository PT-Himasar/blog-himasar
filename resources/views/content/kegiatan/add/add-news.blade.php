<div class="modal fade" id="addNews" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-xl" role="document">
    <form class="valid-form modal-content" action="/kegiatan/news/create" method="post" enctype="multipart/form-data" id="addNewsForm">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewsTitle">ADD Postingan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="row">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom justify-content-center d-flex">
            <img src="{{asset('assets/img/avatars/3.png')}}" alt="user-avatar" class="d-block w-px-200 h-px-100 rounded" id="uploadedAvatar" />
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
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="kategori" id="kategori" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="event">Event</option>
              <option value="blog">Blog</option>
            </select>
          </div>
          <div class="col mb-6">
            <label for="judul" class="form-label">Judul</label>
            <textarea class="form-control" name="judul" id="judul" rows="1" placeholder="Perkembangan AI" required></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col mb-6">
            <label for="berita" class="form-label">Post</label>
            <textarea name="berita" id="summernote"></textarea>
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
<script>
  $('#summernote').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>
<!-- CSS untuk memastikan teks panjang otomatis wrap ke bawah -->
<style>
  .note-editor .note-editable {
    white-space: pre-wrap;
    /* Membungkus teks otomatis */
    word-wrap: break-word;
    /* Memastikan kata panjang dibagi jika diperlukan */
    overflow-wrap: break-word;
    /* Mengatasi overflow kata panjang */
  }
</style>
