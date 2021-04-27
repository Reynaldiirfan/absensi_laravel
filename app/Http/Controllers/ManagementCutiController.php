<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManagementCutiController extends Controller
{
    //
    public function index()
    {
        $pengajuan = DB::select(
            'SELECT users.name, users.created_at, sisa_cuti, tanggal_cuti, status_cuti, alasan_cuti
                FROM pengajuan INNER JOIN users ON pengajuan.id_user = users.id
                INNER JOIN cuti ON pengajuan.id_cuti = cuti.id_cuti
                ORDER BY tanggal_cuti ASC
            '
        );
        
        return view('pages/management_cuti',['pengajuan'=>$pengajuan]); 
    }
}
