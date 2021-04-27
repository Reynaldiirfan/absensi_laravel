<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      {{ __('ADMIN') }}
    </a>
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('WEB ABSENSI') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Halaman Utama') }}</p>
        </a>
      </li>
      <li>
        {{-- <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Laravel Examples") }}
            <b class="caret"></b>
          </p>
        </a> --}}
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
          </ul>
        </div>

        <li class = " @if ($activePage == 'pengajuan_cuti') active @endif">
          <a href="{{ route('page.index','pengajuan_cuti') }}">
            <i class="now-ui-icons objects_spaceship"></i>
            <p>{{ __('Pengajuan Cuti') }}</p>
          </a>
        </li>
        
        <li class = " @if ($activePage == 'konfirmasi_cuti') active @endif">
          <a href="{{ route('page.index','konfirmasi_cuti') }}">
            <i class="now-ui-icons files_single-copy-04"></i>
            <p>{{ __('Konfirmasi Cuti') }}</p>
          </a>
        </li>
        
        <li class = " @if ($activePage == 'management_cuti') active @endif">
          <a href="{{ route('page.index','management_cuti') }}">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>{{ __('Management Cuti') }}</p>
          </a>
        </li>

      <li class = "@if ($activePage == 'registrasi_pegawai') active @endif">
        <a href="{{ route('page.index','registrasi_pegawai') }}">
          <i class="now-ui-icons business_badge"></i>
          <p>{{ __('Registrasi Pegawai') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
