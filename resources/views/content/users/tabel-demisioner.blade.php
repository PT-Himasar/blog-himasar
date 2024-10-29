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
      <div class="justify-content-center text-center d-flex">
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
        document.addEventListener('DOMContentLoaded', function() {
          const saveButton = document.getElementById('saveButton');

          // Function to check if all required fields are filled in add form
          function checkAddFormValidity() {
            const addForm = document.getElementById('addAnggotaForm');
            const isFormValid = addForm.checkValidity();
            saveButton.disabled = !isFormValid;
          }

          // Function to check if all required fields are filled in edit form
          function checkEditFormValidity(editFormId, editButtonId) {
            const editForm = document.getElementById(editFormId);
            const editButton = document.getElementById(editButtonId);
            const isFormValid = editForm.checkValidity();
            editButton.disabled = !isFormValid;
          }

          // Add event listeners to input fields in add form
          const addForm = document.getElementById('addAnggotaForm');
          if (addForm) {
            addForm.addEventListener('input', checkAddFormValidity);
            addForm.addEventListener('change', checkAddFormValidity);
            checkAddFormValidity(); // Initial check on page load for add form
          }

          // Loop through each edit form and add event listeners dynamically
          document.querySelectorAll('[id^=editAnggotaForm-]').forEach(form => {
            const formId = form.id;
            const buttonId = `editButton-${formId.split('-')[1]}`;
            form.addEventListener('input', function() {
              checkEditFormValidity(formId, buttonId);
            });
            form.addEventListener('change', function() {
              checkEditFormValidity(formId, buttonId);
            });
            checkEditFormValidity(formId, buttonId); // Initial check on page load for edit form
          });
        });
      </script>

      <div class="justify-content-center d-flex my-2">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAnggota">
          <span class="tf-icons bx bx-plus bx-18px me-2"></span>
          Add
        </button>
        @include('content.users.add/add-bph')

      </div>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Patonro</th>
            <th>NO HP</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($data_demisioner as $row)
          <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ ucwords(strtolower($row->nama)) }}</td>
            <td>{{ $row -> angkatan }}</td>
            <td>{{ $row -> patondro }}</td>
            <td>{{ $row -> no_tlp }}</td>
            <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
              <a><i class="bx bx-detail me-0.5" data-bs-toggle="modal" data-bs-target="#demisioner{{ $row -> id }}"></i></a>
              <a><i class="bx bx-edit-alt me-0.5" data-bs-toggle="modal" data-bs-target="#edit{{ $row -> id }}"></i> </a>
              <form action="{{ route('destroy_anggota', $row->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                  <i class="bx bx-trash me-0.5"></i>
                </button>
              </form>

              @include('content.users.detail/detail-demisioner')
              @include('content.users.edit/edit-bph')
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Patonro</th>
            <th>NO HP</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- Bootstrap Table with Header - Light -->
@endsection
