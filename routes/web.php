<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return redirect('/');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::group(['prefix' => 'admin'], function () {

        // Role Group
        Route::group(['prefix' => 'role'], function () {
            Route::get('/', 'AdminController@role');
            Route::get('/export/excel', 'AdminController@export_excel');
            Route::post('/add', 'AdminController@role_add');
            Route::post('/checkname', 'AdminController@role_checkname');
            Route::post('/{id}', 'AdminController@getRoleById');
            Route::post('/{id}/edit', 'AdminController@role_edit');

        });

        // Permission Group
        Route::group(['prefix' => 'permission'], function () {
            Route::get('/', 'AdminController@permission');
            Route::get('/export/excel', 'AdminController@permission_export_excel');
            Route::post('/add', 'AdminController@permission_add');
            Route::post('/checkname', 'AdminController@permission_checkname');
            Route::post('/activationrolepermission', 'AdminController@activationrolepermission');
        });

        // User Group
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'AdminController@user');
            Route::get('/export/excel', 'AdminController@user_export_excel');
            Route::get('/add', 'AdminController@user_add');
            Route::get('/checkemail', 'AdminController@user_checkemail');
            Route::get('/checkpassword', 'UserController@user_checkpassword');
            Route::get('/manualeditpassword', 'UserController@manualeditpassword');
            Route::get('/{id}', 'UserController@getUserById');
            Route::get('/{id}/edit', 'UserController@edit_user');
        });
    });

    // Devisi Group
    Route::group(['prefix' => 'divisi'], function () {
        Route::get('/', 'DivisiController@index');
        Route::get('/export/excel', 'DivisiController@export_excel');
        Route::post('/add', 'DivisiController@add');
        Route::post('/{id}', 'DivisiController@getDivisiById');
        Route::post('/{id}/edit', 'DivisController@edit');
    });

    // Cabang Group
    Route::group(['prefix' => 'cabang'], function () {
        Route::get('/', 'CabangController@index');
        Route::post('/add', 'CabangController@add');
        Route::get('/export/excel', 'CabangController@export_excel');
        Route::post('/{id}', 'CabangController@getCabangById');
        Route::post('/{id}/edit', 'CabangController@edit');
    });

    // Penjualan Group
    Route::group(['prefix' => 'penjualan'], function () {
        Route::get('/', 'PenjualanController@index');
        Route::get('/export/excel', 'PenjualanController@export_excel');
        Route::get('/add', 'PenjualanController@add');
        Route::post('/add', 'PenjualanController@manualadd');
        Route::post('/getbystt', 'PenjualanController@getByStt');
        Route::post('/list', 'PenjualanController@penjualan_list');
        Route::post('/data', 'PenjualanController@orgdata');
        Route::post('/datapengirim/filter/pengirim', 'PenjualanController@filterpengirim');
        Route::post('/datapenerima/filter/penerima', 'PenjualanController@filterpenerima');
        Route::post('/dataalamat/filter/alamat', 'PenjualanController@filteralamat');
        Route::get('/{id}', 'PenjualanController@detail');
        Route::get('/{id}/edit', 'PenjualanController@edit');
        Route::post('/{id}/edit', 'PenjualanController@actedit');
        Route::get('/{stt}/print', 'PenjualanController@printpenjualan');
        Route::get('/{stt}/print/penjualan', 'PenjualanController@printdetailpenjualan');
        Route::get('/print/tugas/tagihan', 'PenjualanController@printtugastagihan');
    });

    // Kendaraan & Antrian Kendaraan Group
    Route::group(['prefix' => 'kendaraan'], function () {
        Route::get('/', 'KendaraanController@index');
        Route::post('/add', 'KendaraanController@add');
        Route::get('/export/excel', 'KendaraanController@export_excel');
        Route::post('/orgdata', 'KendaraanController@orgdata');
        Route::group(['prefix' => 'antrian_kendaraan'], function () {
            Route::get('/', 'KendaraanController@antrian_kendaraan');
            Route::post('/', 'KendaraanController@addantrian');
            Route::get('/export/excel', 'KendaraanController@antrian_export_excel');
            Route::post('/orgdata', 'KendaraanController@antrian_orgdata');
            Route::get('/{id}/muat', 'KendaraanController@antrian_add_muat');
            Route::post('/{id}/muat', 'KendaraanController@exec_antrian_add_muat');
        });
        Route::get('/{id}/edit', 'KendaraanController@edit');
        Route::post('/{id}/edit', 'KendaraanController@actedit');
    });

    // Truck Group
    Route::group(['prefix' => 'truck'], function () {
        Route::get('/', 'TruckController@index');
        Route::get('/export/excel', 'TruckController@export_excel');
        Route::post('/add', 'TruckController@add');
        Route::post('/orgdata', 'TruckController@orgdata');
        Route::group(['prefix' => 'antrian_truck'], function () {
            Route::get('/', 'TruckController@antrian_truck');
            Route::get('/export/excel', 'TruckController@antrian_export_excel');
            Route::post('/add', 'TruckController@antrian_truck');
            Route::post('/orgdata', 'TruckController@orgdataantrian');
            Route::get('/{id}/muat', 'TruckController@antrian_add_muat');
            Route::post('/{id}/muat', 'TruckController@exec_antrian_add_muat');
        });
        Route::get('/{id}/edit', 'TruckController@edit');
        Route::get('/{id}/printkbh', 'TruckController@printkbh');
        Route::post('/{id}/edit', 'TruckController@actedit');
    });

    // PickupBarang Group
    Route::group(['prefix' => 'pickupbarang'], function () {
        Route::get('/', 'PickupBarangController@index');
        Route::post('/add', 'PickupBarangController@add');
    });

    // Request Pickup Barang Group
    Route::group(['prefix' => 'request_pickup_barang'], function () {
        Route::get('/', 'RequestPickupBarangController@request');
        Route::post('/add', 'RequestPickupBarangController@actrequest');
        Route::get('/{id}/setdone', 'RequestPickupBarangController@setdone');
    });

    // Muat Group
    Route::group(['prefix' => 'muat'], function () {
        Route::get('/', 'MuatController@index');
        Route::post('/add', 'MuatController@add');
        Route::post('/orgdata', 'MuatController@orgdata');
        Route::get('/export/excel', 'MuatController@export_excel');
        Route::get('/{id}', 'MuatController@detail');
        Route::get('/{id}/print', 'MuatController@print_detail');
        Route::post('/{id}/setsampai', 'MuatController@setsampai');
        Route::post('/{id}/stt/{stt}/setstat', 'MuatController@setstatstt');
    });

    // Lansir Group
    Route::group(['prefix' => 'lansir'], function () {
        Route::get('/', 'LansirController@index');
        Route::post('/add', 'LansirController@add');
        Route::post('/orgdata', 'LansirController@orgdata');
        Route::get('/export/excel', 'LansirController@export_excel');
        Route::get('/{id}', 'LansirController@detail');
        Route::get('/{id}/print', 'LansirController@print_detail');
        Route::post('/{id}/setsampai', 'LansirController@setsampai');
        Route::post('/{id}/stt/{stt}/setstat', 'MuatController@setstatstt');
    });

    // Retur Group
    Route::group(['prefix' => 'retur'], function () {
        Route::get('/', 'ReturController@index');
        Route::get('/kirim', 'ReturController@kirim');
        Route::post('/kirim', 'ReturController@actkirim');
        Route::get('/terima', 'ReturController@terima');
        Route::post('/terima', 'ReturController@actterima');
        Route::post('/orgdata', 'ReturController@orgdata');
        Route::get('/print', 'ReturController@print_retur');
    });

    // Overdue Group
    Route::group(['prefix' => 'overdue'], function () {
        Route::get('/', 'OverdueController@index');
        Route::get('/invoice/{pengirim}/{range}', 'OverdueController@print_invoice');
        Route::post('/orgdata', 'OverdueController@orgdata');
        Route::get('/{id}', 'OverdueController@detail');
        Route::post('/{id}', 'OverdueController@addetail');
        Route::get('/{id}/actcash', 'OverdueController@actcash');
    });

    // Penagihan Group
    Route::group(['prefix' => 'penagihan'], function () {
        Route::get('/', 'PenagihanController@index');
        Route::post('/add', 'PenagihanController@add');
        Route::post('/actlunas', 'PenagihanController@actlunas');
    });

    // Account Group
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index');
        Route::get('/neraca', 'AccountController@neraca');
        Route::post('/neraca/get', 'AccountController@neraca_get');
        Route::post('/neraca/print', 'AccountController@neraca_print');
        Route::get('/get/acc', 'AccountController@get_acc');
        // Jurnal Umum Group
        Route::group(['prefix' => 'jurnalumum'], function () {
            Route::get('/', 'JurnalController@umum');
            Route::post('/exec', 'JurnalController@umum_exec');
            Route::post('/delete', 'JurnalController@umum_delete');
            Route::post('/get', 'JurnalController@umum_get');
        });
        // Kas Kecil Group
        Route::group(['prefix' => 'kaskecil'], function () {
            Route::get('/', 'KasController@kecil');
            Route::post('/exec', 'KasController@kecil_exec');
            Route::post('/delete', 'KasController@kecil_delete');
            Route::post('/get', 'KasController@kecil_get');
        });
        // Kas Bantuan Group
        Route::group(['prefix' => 'kasbantuan'], function () {
            Route::get('/', 'KasController@bantuan');
            Route::post('/exec', 'KasController@bantuan_exec');
            Route::post('/delete', 'KasController@bantuan_delete');
            Route::post('/get', 'KasController@bantuan_get');
        });
        // Laba Rugi Group
        Route::group(['prefix' => 'labarugi'], function () {
            Route::get('/', 'AccountController@indexlabarugi');
            Route::post('/get', 'AccountController@getlabarugi');
            Route::post('/printlabarugi', 'AccountController@printlabarugi');
        });
        Route::post('/add', 'AccountController@add');
        Route::post('/{id}', 'AccountController@find_by_id');
        Route::post('/{id}/edit', 'AccountController@edit');
    });

    Route::get('/print/tugas/tagihan', 'DashboardController@printtugastagihan');
    Route::get('/print/invoice/perpelanggan', 'DashboardController@printinvoiceperpelanggan');

});

Auth::routes();
Route::get('/home', 'HomeController@index');
