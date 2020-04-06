<?php

namespace App\Http\Controllers;

use App\Account;
use App\Cabang;
use App\JurnalUmum;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function index()
    {
        $account = Account::where('cabang', '=', Auth::user()->cabang)->get();

        return view('Account.index')->with('account', $account);
    }

    public function add()
    {
        $kode = Request::input('kode');
        $nama = Request::input('nama');

        $account = new Account();
        $account->kode = $kode;
        $account->nama_account = $nama;
        $account->cabang = Auth::user()->cabang;
        $account->save();

        $message = ['success' => 'Berhasil Menambahkan Account'];
        Session::flash('message', $message);

        return redirect('account');
    }

    public function find_by_id($id)
    {
        $account = Account::find($id);

        $data = [
            'success' => 1,
            'data' => $account,
        ];

        return Response::json($data);
    }

    public function edit($id)
    {
        $kode = Request::input('kode');
        $nama = Request::input('nama');

        $account = Account::find($id);
        $account->kode = $kode;
        $account->nama_account = $nama;
        $account->save();

        $message = ['success' => 'Berhasil Menambahkan Account'];
        Session::flash('message', $message);

        return redirect('account');
    }

    public function neraca()
    {
        $cabang = Cabang::all();
        $account = Account::all();

        $a11 = Account::where('kode', 'LIKE', '11%')->get();
        $a12 = Account::where('kode', 'LIKE', '12%')->get();
        $a13 = Account::where('kode', 'LIKE', '13%')->get();
        $a14 = Account::where('kode', 'LIKE', '14%')->get();
        $a21 = Account::where('kode', 'LIKE', '21%')->get();
        $a31 = Account::where('kode', 'LIKE', '31%')->get();
        $a32 = Account::where('kode', 'LIKE', '32%')->get();
        $a33 = Account::where('kode', 'LIKE', '33%')->get();

        $account = [
            'all' => $account,
            'a11' => $a11,
            'a12' => $a12,
            'a13' => $a13,
            'a14' => $a14,
            'a21' => $a21,
            'a31' => $a31,
            'a32' => $a32,
            'a33' => $a33,
        ];

        return view('Account.neraca')->with(['cabang' => $cabang, 'account' => $account]);

    }

    public function neraca_get()
    {
        $cabang = Request::input('cabang');
        $tanggal = Request::input('tanggal');
        $ex = explode('-', $tanggal);
        $tanggal2 = $ex[2] . '-' . $ex[1] . '-' . $ex[0];

        $a11 = Account::where('kode', 'LIKE', '11%')->where('cabang', '=', $cabang)->get();
        foreach ($a11 as $a) {
            # code...
            $data = JurnalUmum::where('account', '=', $a->id)->where('tanggal', '=', $tanggal)->where('kantor', '=', $cabang)->get();
            $debet = 0;
            $kredit = 0;
            foreach ($data as $d) {
                # code...
                $debet = $debet + (int) $d->debet;
                $kredit = $kredit + (int) $d->kredit;
            }
            $nominal = $debet + $kredit;
            $a->nominal = $nominal;
        }

        $a12 = Account::where('kode','LIKE','12%')->where('cabang','=',$cabang)->get();
        foreach ($a12 as $a) {
            # code...

        }
    }
}
