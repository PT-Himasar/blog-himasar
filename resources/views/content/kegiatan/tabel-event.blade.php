@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Table BPH')
@section('page-script')
@vite(['resources/assets/js/pages-account-settings-account.js'])


@endsection

@section('content')

<!-- Bootstrap Table with Header - Light -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <div class="container">
      <div class="justify-content-center d-flex">
        @if(session('success'))
        <div id="successAlert" class="alert alert-success mt-2 col-md-6" role="alert">
          {{ session('success') }}
        </div>
        @endif
        @if(session('hapus'))
        <div id="hapusAlert" class="alert alert-danger mt-2 col-md-6" role="alert">
          {{ session('hapus') }}
        </div>
        @endif
        @if(session('error'))
        <div id="errorAlert" class="alert alert-danger mt-2 col-md-6" role="alert">
          {{ session('error') }}
        </div>
        @endif
      </div>

      <script>
        // Auto-hide success alert after 3 seconds
        setTimeout(function() {
          fadeOutAndRemove("successAlert");
        }, 3000);

        // Auto-hide hapus alert after 3 seconds
        setTimeout(function() {
          fadeOutAndRemove("hapusAlert");
        }, 3000);

        setTimeout(function() {
          fadeOutAndRemove("errorAlert");
        }, 3000);

        function fadeOutAndRemove(elementId) {
          var element = document.getElementById(elementId);
          if (element) {
            // Pastikan elemen ditemukan
            var opacity = 1;
            var interval = setInterval(function() {
              if (opacity <= 0) {
                clearInterval(interval);
                element.style.display = "none";
              } else {
                element.style.opacity = opacity;
                opacity -= 0.1; // Sesuaikan kecepatan fading sesuai kebutuhan
              }
            }, 200); // Sesuaikan interval sesuai kebutuhan
          }
        }
      </script>

      <div class="justify-content-center d-flex my-2">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNews">
          <span class="tf-icons bx bx-plus bx-18px me-2"></span>
          Add
        </button>
        @include('content.kegiatan.add/add-news')

      </div>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($data_berita as $row)
          <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $row->created_at->format('d M Y H:i') }}</td>
            <td>{{ ucwords(strtolower($row->judul)) }}</td>
            <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
              <a><i class="bx bx-edit-alt me-0.5" data-bs-toggle="modal" data-bs-target="#edit{{ $row -> id }}"></i> </a>
              <form action="{{ route('destroy_news', $row->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                  <i class="bx bx-trash me-0.5"></i>
                </button>
              </form>
              @include('content.kegiatan.edit/edit-news')
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- Bootstrap Table with Header - Light -->
@endsection
