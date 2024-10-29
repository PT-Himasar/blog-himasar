<div class="modal fade" id="detail{{ $row -> email }}" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailTitle">Profil Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body overflow-auto">
        <div class="row justify-content-center">
          <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom image-section justify-content-center">
            <img src="{{asset('assets/img/anggota/' . $row->gambar) }}" alt="user-avatar" class="d-block w-px-100 h-px-120 rounded" id="editAvatar" />
          </div>
          <span class="badge bg-label-danger me-1 col-md-7"><b>{{ strtoupper($row->nama) }}</b></span>

        </div>
        <div class="table-responsive">
          <table class="table text-start" style="white-space: nowrap;">
            <tbody class="table-border-bottom-0">
              <tr>
                <td>Status Keanggotaan</td>
                <td>: {{ $row -> status }}</td>
              </tr>
              <tr>
                <td>Patonro</td>
                <td>: {{ $row -> patondro }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: {{ $row -> email }}</td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank">: {{ $row -> no_tlp }}</a> </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:
                  @php
                  use Carbon\Carbon;
                  $formattedDate = Carbon::parse($row->tgl_lahir)->translatedFormat('d F Y');
                  @endphp
                  {{ $formattedDate }}
                </td>
              </tr>
              <tr>
                <td>Angkatan Kampus</td>
                <td>: {{ $row -> angkatan }}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td class="text-wrap">: {{ $row -> alamat }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
</div>
