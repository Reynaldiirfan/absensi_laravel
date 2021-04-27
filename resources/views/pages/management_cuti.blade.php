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
                    Sisa Cuti
                  </th>
                  <th class="text-right">
                    Status Cuti
                  </th>
                </thead>
                <tbody> 
                  <tr>
                    @foreach ($pengajuan as $x)
                    <td>
                      {{ $x->name }}
                    </td>
                    <td>
                      {{ $x->created_at }}
                    </td>
                    <td>
                      {{ $x->sisa_cuti }}
                    </td>
                    <td class="text-right">
                      {{ $x->status_cuti }}
                    </td>
                    @endforeach
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
                    <td class="text-right">
                      $23,789
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
                    <td class="text-right">
                      $56,142
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
                    <td class="text-right">
                      $38,735
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
                    <td class="text-right">
                      $63,542
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
                    <td class="text-right">
                      $78,615
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
                    <td class="text-right">
                      $98,615
                    </td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection