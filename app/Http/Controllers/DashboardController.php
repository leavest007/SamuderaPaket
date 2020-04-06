<?php

namespace App\Http\Controllers;

use App;
use App\Cabang;
use App\Http\Controllers\Controller;
use App\LansirDetail;
use App\MuatDetail;
use App\Penjualan;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        return view('dashboard');
    }

    public function dashboard()
    {
        $baret = [];
        $count_belum_muat = 0;
        $count_belum_lansir = 0;

        if (Auth::user()->hasRole('admin')) {
            $penjualan_hari_ini = Penjualan::whereRaw('Date(created_at) = CURDATE()')->count();
            $penjualan_total = Penjualan::count();

            /*----- Penjualan Belum Muat -----*/
            $muat = MuatDetail::all();
            $stt_muat_temp = [];
            foreach ($muat as $m) {
                # code...
                $stt_muat_temp[] = $m->stt;
            }
            $penjualan_belum_muat = Penjualan::whereNotIn('stt', $stt_muat_temp)->count();
            $count_belum_muat = $penjualan_belum_muat;

            /*----- Penjualan Belum Lansir -----*/
            $lansir = LansirDetail::all();
            $stt_lansir_temp = [];
            foreach ($lansir as $l) {
                # code...
                $stt_lansir_temp[] = $l->stt;
            }
            $penjualan_belum_lansir = Penjualan::whereNotIn('stt', $stt_lansir_temp)->count();
            $count_belum_muat = $penjualan_belum_lansir;
            $omzet = [];

            for ($a = 1; $a <= 12; $a++) {
                # code...
                $penjualan_tahun_ini = Penjualan::whereYear('created_at', Carbon::now());
                $omzet[] = $penjualan_tahun_ini->whereMonth('created_at', $a)->get();
            }
        } else {
            $penjualan_hari_ini = Penjualan::where('cabang', '=', Auth::user()->cabang)->whereRaw('Date(created_at) = CURDATE()')->count();
            $penjualan_total = Penjualan::where('cabang', '=', Auth::user()->cabang)->count();

            /*------ Penjualan Belum Muat --------*/
            $muat = MuatDetail::with('s_muat')->get();
            $stt_muat_temp = [];
            foreach ($muat as $m) {
                # code...
                if ($m->s_muat->cabang == Auth::user()->cabang) {
                    # code...
                    $stt_muat_temp[] = $m->stt;
                }
            }
            $penjualan_belum_muat = Penjualan::whereNotIn('stt', $stt_muat_temp)->count();
            $count_belum_muat = $penjualan_belum_muat;

            /*------ Penjualan Belum Lansir -------*/
            $lansir = LansirDetail::with('s_lansir')->get();
            $stt_lansir_temp = [];

            foreach ($lansir as $l) {
                # code...
                if ($l->s_lansir->cabang == Auth::user()->cabang) {
                    # code...
                    $stt_lansir_temp = [];
                }
            }
            $penjualan_belum_lansir = Penjualan::whereNotIn('stt', $stt_lansir_temp)->count();
            $count_belum_lansir = $penjualan_belum_lansir;

            for ($a = 1; $a <= 12; $a++) {
                # code...
                $penjualan_tahun_ini = Penjualan::where('cabang', '=', Auth::user()->cabang)->whereYear('created_at', Carbon::now());
                $omzet[] = $penjualan_tahun_ini->whereMonth('created_at', $a)->get();
            }
        }

        $cabang = Cabang::all();
        $baret = [
            'penjualan_hari_ini' => $penjualan_hari_ini,
            'penjualan_total' => $penjualan_total,
            'penjualan_belum_dimuat' => $count_belum_muat,
            'penjualan_belum_dilansir' => $count_belum_lansir,
            'omzet' => $omzet,
            'cabang' => $cabang,
        ];

        return view('dashboard')->with($baret);
    }

    public function printtugastagihan()
    {
        $pdf = PDF::loadView('print.printtugastagihan')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function printinvoiceperperlanggan()
    {
        $pdf = PDF::loadView('print', 'invoiceperpelanggan')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
