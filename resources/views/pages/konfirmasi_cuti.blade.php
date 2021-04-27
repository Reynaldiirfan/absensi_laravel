@extends('layouts.app', [
  'namePage' => 'Konfirmasi Cuti',
  'class' => 'sidebar-mini',
  'activePage' => 'konfirmasi_cuti',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Konfirmasi Cuti</h2>
      <p class="category">Halaman untuk melakukan penerimaan atau penolakan <br> terhadap cuti yang diajukan oleh pegawai</a>
      </p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Table Konfirmasi Cuti Pegawai</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nama Pegawai
                  </th>
                  <th>
                    Sisa Cuti
                  </th>
                  <th>
                    Alasan Cuti
                  </th>
                  <th>
                    Tanggal Cuti
                  </th>
                  <th class="text-right">
                    Konfirmasi Cuti
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Ditolak</option>
                        <option value="4">Diterima</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                        <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                          <option disabled selected>Status Pengajuan</option>
                          <option value="2">Pending</option>
                          <option value="3">Ditolak</option>
                          <option value="4">Diterima</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Ditolak</option>
                        <option value="4">Diterima</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Ditolak</option>
                        <option value="4">Diterima</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Ditolak</option>
                        <option value="4">Diterima</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Ditolak</option>
                        <option value="4">Diterima</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      12-04-2021
                    </td>
                    <td class="text-right">
                      <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Status Pengajuan</option>
                        <option value="2">Pending</option>
                        <option value="3">Tolak</option>
                        <option value="4">Terima</option>
                      </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" style="float: right;">Konfirmasi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection