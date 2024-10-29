@extends('layouts/blankLayout')

@section('title', 'form Input Data Anggota')

@section('page-style')
@vite([
'resources/assets/vendor/scss/pages/page-auth.scss'
])
@vite(['resources/assets/js/pages-account-settings-account.js'])

@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <form class="valid-form modal-content" action="/daftar/create" method="post" enctype="multipart/form-data" id="addAnggotaForm">
      <div class="modal-header justify-content-center my-8">

        <h5 class="text-dark text-center"><b>Masukkan Data KEHIMASARAN Anda!</b></h5>
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
      <div class="modal-body">
        <div class="justify-content-center text-center d-flex mb-2">
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
        @csrf
        <div class="row">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom justify-content-center d-flex">
            <img src="{{asset('assets/img/avatars/4.png')}}" alt="user-avatar" class="d-block w-px-100 h-px-120 rounded" id="uploadedAvatar" />
            <div class="button-wrapper">

              <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Choose photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="gambar" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" required />
              </label>
              <button type="button" id="resetUpload" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>
              <div>Allowed JPG & PNG</div>
              <div>Max size of 10MB</div>
            </div>
          </div>
          <h6 class="text-danger text-center">Upload Foto Mengenakan PDH</h6>
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
            <label for="no_tlp" class="form-label">No Telpon (+62)</label>
            <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="+62xxx3456xxx" value="+62" required>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="03/03/2003" required>
          </div>
          <div class="col-sm-6">
            <label for="angkatan" class="form-label">Angkatan Kampus</label>
            <input type="number" name="angkatan" id="angkatan" class="form-control" placeholder="2021" required>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="patondro" class="form-label">Patonro (Gunakan Angka Romawi)</label>
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
              <option value="-">Anggota Lepas</option>
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
              <option value="-">Calon BPH</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" aria-label="Default select example" required>
              <option selected value="">Select</option>
              <option value="BPH">BPH</option>
              <option value="Anggota Muda">Anggota Muda</option>
              <option value="Anggota Lepas">Alumni Pengurus</option>
            </select>
          </div>
        </div>
        <div class="row g-6 mt-1">
          <div class="col-sm-6">
            <label for="jkarir" class="form-label">Jenjang Karir</label>
            <textarea class="form-control" name="jkarir" id="jkarir" rows="3" placeholder="- lk 1 himasar
- lk 2 himasar
- ketua himasar ke 12" required></textarea>
          </div>
          <div class="col-sm-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Jl. Jalan" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
      </div>
    </form>
  </div>
</div>
@endsection