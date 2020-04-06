@extends('admin')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Account</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Account</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="POST" action="/account/add">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" placeholder="Kode Account" name="kode-account">
                                                            <label for="kode-account">Kode Account</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" placeholder="Nama Account" name="nama-account">
                                                            <label for="nama-account">Nama Account</label>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Account</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Kode</th>
                                                        <th>Nama Account</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($account as $a)
                                                    <tr>
                                                        <td>{{$a->kode}}</td>
                                                        <td>{{$a->nama_account}}</td>
                                                        <td>
                                                        <a href="/account/{{$a->id}}/delete" confirm="Apakah anda yakin ingin menghapus account {{$a->nama_account}} ini ? ">
                                                            <button type="button" class="btn btn-xs btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                        <button type="button" class="btn btn-xs btn-info btn-edit" accountid="{{$a->id}}">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
                <div class="modal bouncein" id="edit-account">
                  <form method="POST" id="edit_account">  
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Account</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kode Account</label>
                                    <input type="text" class="form-control" name="kode-account" placeholder="Kode Account" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Account</label>
                                    <input type="text" class="form-control" name="nama-account" placeholder="Nama Account" required>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                            <a href="#" class="modal-confirm">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </a>
                        </div>
                    </div>
                  </form>  
                </div>
            </div>
        </div>
    </div>
@endsection