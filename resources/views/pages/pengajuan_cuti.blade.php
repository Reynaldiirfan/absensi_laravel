@extends('layouts.app', [
  'namePage' => 'Pengajuan Cuti',
  'class' => 'sidebar-mini',
  'activePage' => 'pengajuan_cuti',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Pengajuan Cuti</h2>
      <p class="category">Halaman untuk melakukan pengajuan cuti</a>
      </p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8" style="margin-left: 200px">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Form Pengajuan Cuti")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success')
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-11 pr-1">
                        <div class="form-group">
                            <label>{{__(" Name")}}</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Email address")}}</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-11 pr-1">
                        <div class="form-group">
                        <label for="exampleInputEmail1">{{__(" Tanggal Cuti")}}</label>
                        <input type="date" name="date" class="form-control">
                        @include('alerts.feedback', ['field' => 'email'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 pr-1">
                        <div class="form-group">
                        <label for="exampleInputEmail1">{{__("Jenis Cuti")}}</label>
                        <div class="col-lg-5 col-md-12 col-sm-3">
                            <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" style="padding:8px;border-radius:12px;padding-right:12px;">
                              <option disabled selected>Pilih Jenis Cuti</option>
                              <option value="2">Cuti Pribadi</option>
                              <option value="3">Cuti Bersama</option>
                              <option value="4">Cuti Kesehatan</option>
                            </select>
                          </div>
                        @include('alerts.feedback', ['field' => 'email'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 pr-1">
                        <div class="form-group">
                        <label for="exampleInputEmail1">{{__(" Alasan Cuti")}}</label>
                        <input type="text" name="alasan" class="form-control" placeholder="Alasan">
                        @include('alerts.feedback', ['field' => 'email'])
                        </div>
                    </div>
                </div>
                
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Ajukan Cuti')}}</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection
