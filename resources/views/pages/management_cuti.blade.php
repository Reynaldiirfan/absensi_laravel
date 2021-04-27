@extends('layouts.app', [
    'namePage' => 'Management Cuti',
    'class' => 'sidebar-mini',
    'activePage' => 'management_cuti',
  ])

@section('content')
<div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Management Cuti Pegawai</h2>
      <p class="category">Menunjukan informasi kepegawaian terkait cuti</p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Table Cuti Pegawai</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nama Pegawai
                  </th>
                  <th>
                    Tanggal Masuk
                  </th>
                  <th>
                    Tanggal Cuti
                  </th>
                  <th>
                    Sisa Cuti
                  </th>
                  <th>
                    Alasan Cuti
                  </th>
                  <th class="text-right">
                    Status Cuti
                  </th>
                </thead>
                <tbody> 
                  @foreach ($pengajuan as $x)
                  <tr>
                    
                    <td>
                      {{ $x->name }}
                    </td>
                    <td>
                      {{ $x->created_at }}
                    </td>
                    <td>
                      {{ $x->tanggal_cuti }}
                    </td>
                    <td>
                      {{ $x->sisa_cuti }}
                    </td>
                    <td>
                      {{ $x->alasan_cuti }}
                    </td>
                    <td class="text-right">
                      {{ $x->status_cuti }}
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection