<?php

use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
 
 
class ManagementCutiController extends Controller
{
    public function index()
    {
        $pengajuan = DB::select(
            'SELECT users.name, users.created_at, sisa_cuti, status_cuti
                FROM pengajuan INNER JOIN users ON pengajuan.id_user = users.id
                INNER JOIN cuti ON pengajuan.id_cuti = cuti.id_cuti
            '
        );
        return view('/management_cuti',['pengajuan'=>$pengajuan]); 
    }
}