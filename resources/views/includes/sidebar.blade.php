<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/theme/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Samudera</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a href="{{ route('dashboard')}}">
                        <i class="feather icon-home"></i>
                        <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-folder"></i>
                        <span class="menu-title" data-i18n="Apps">Apps</span>
                    </a>    
                    <ul class="apps">
                        <li class=" nav-item">
                        <a href="app-email.html">
                            <i class="feather icon-mail"></i>
                            <span class="menu-item" data-i18n="Email">Email</span>
                        </a>
                        </li>
                        <li class=" nav-item">
                        <a href="app-chat.html">
                            <i class="feather icon-message-square"></i>
                            <span class="menu-item" data-i18n="Chat">Chat</span>
                        </a>
                        </li>
                        <li class=" nav-item">
                        <a href="app-todo.html">
                            <i class="feather icon-check-square"></i>
                            <span class="menu-item" data-i18n="Todo">Todo</span>
                        </a>
                        </li>
                        <li class=" nav-item">
                        <a href="app-calender.html">
                            <i class="feather icon-calendar"></i>
                            <span class="menu-item" data-i18n="Calender">Calender</span>
                        </a>
                        </li>
                    </ul>
                </li>
                
                <li class=" nav-item">
                    <a href="#">
                        <i class="feather icon-file-text"></i>
                        <span class="menu-title" data-i18n="Akuntasi">Laporan</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Account">Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="JurnalUmum">Jurnal Umum</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="KasKecil">Kas Kecil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="KasBantuan">Kas Bantuan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="LabaRugi">Laba Rugi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a href="#">
                        <i class="fa fa-building-o"></i>
                        <span class="menu-title" data-i18n="Divisi">Divisi</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a href="#">
                        <i class="feather icon-map"></i>
                        <span class="menu-title" data-i18n="Cabang">Cabang</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a href="#">
                        <i class="fa fa-car"></i>
                        <span class="menu-title" data-i18n="Kendaraan">Kendaraan</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="TambahKendaraan">Tambah Kendaraan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="AntrianKendaraan">Antrian Kendaraan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-truck"></i>
                        <span class="menu-title" data-i18n="Truck">Truck</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="TambahTruck">Tambah Truck</span>
                            </a>
                        </li><li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="AntrianTruck">Antrian Truck</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-dollar"></i>
                        <span class="menu-title" data-i18n="Penjualan">Penjualan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-archive"></i>
                        <span class="menu-title" data-i18n="Barang">Barang</span>
                    </a>
                    <ul class="menu-content">
                    <li class="nav-item">
                        <a href="#">
                            <i class="fa fa-shopping-basket"></i>
                            <span class="menu-item" data-i18n="Pickup">Pickup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-exchange"></i>
                        <span class="menu-item" data-i18n="RequestPickupBarang">Request Pickup</span>
                    </a>
                    </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-grid"></i>
                        <span class="menu-title" data-i18n="Loading">Loading</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-package"></i>
                        <span class="menu-title" data-i18n="Lansir">Lansir</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-list"></i>
                        <span class="menu-title" data-i18n="Transit">Transit</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="TransitLoad">Transit Load</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="TransitDrop">Transit Drop</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-clock"></i>
                        <span class="menu-title" data-i18n="Pengiriman">Pengiriman</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-file"></i>
                        <span class="menu-title" data-i18n="Retur">Retur</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="ReturKirim">Retur Kirim</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="ReturTerima">Retur Terima</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="ReturPrint">Retur Print</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-calculator"></i>
                        <span class="menu-title" data-i18n="Tagihan">Tagihan</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="Piutang">Piutang</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="Penagihan">Penagihan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-print"></i>
                        <span class="menu-title" data-i18n="Print">Print</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="SuratTagihan">Surat Tagihan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="feather icon-circle"></i>
                                <span class="menu-item" data-i18n="SuratPelanggan">Surat Pelanggan</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->