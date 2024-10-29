<div class="modal fade" id="edit{{ $row->id }}" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-xl" role="document">
    <form class="valid-form modal-content" action="/kegiatan/news/edit/{{ $row->id }}" method="post" enctype="multipart/form-data" id="editNewsForm-{{ $row->id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="editNewsTitle">Edit Postingan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start">
        @csrf
        @method('put')
        <div class="row">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom justify-content-center d-flex">
            <img src="{{asset('assets/img/news/' . $row->gambar) }}" alt="user-avatar" class="d-block w-px-150 h-px-100 rounded" id="editAvatar{{ $row->id }}" />
            <div class="button-wrapper">
              <label for="edit{{ $row->gambar }}" class="btn btn-primary me-3 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="gambar" id="edit{{ $row->gambar }}" class="account-file-edit" hidden accept="image/png, image/jpeg" />
              </label>
              <button type="button" id="resetEdit{{ $row->id }}" class="btn btn-outline-secondary account-image-reset mb-4">
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
              <option value="event" {{ old('kategori', $row->kategori) == 'event' ? 'selected' : '' }}>Event</option>
              <option value="blog" {{ old('kategori', $row->kategori) == 'blog' ? 'selected' : '' }}>Blog</option>
            </select>
          </div>
          <div class="col mb-6">
            <label for="judul" class="form-label">Judul</label>
            <textarea class="form-control" name="judul" id="judul" rows="1" placeholder="Perkembangan AI" required>{{ old('judul', $row->judul) }}</textarea>
          </div>
        </div>
        <div class="row">
          <div class="col mb-6">
            <label for="berita" class="form-label">Post</label>
            <textarea name="berita" id="summernote{{ $row->id}}">{{ old('berita', $row->berita) }}</textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mx-2" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="editButton-{{ $row->id }}">Save</button>
      </div>
    </form>
  </div>
</div>
<script>
  $('#summernote{{ $row->id}}').summernote({
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
