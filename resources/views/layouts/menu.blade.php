<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Helper::makeParentActiveMenu(['']) }}">
        <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>

    <li
        class="treeview {{ Helper::makeParentActiveMenu(['/jenis', '/produk', '/supplier', '/customer', '/register_buku', '/anggota']) }}">
        <a href="/#">
            <i class="fa fa-database"></i>
            <span>Data</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Helper::makeActiveMenu('/jenis') }}"><a href="{{ route('jenis.index') }}"><i
                        class="fa fa-circle-o"></i> Jenis</a></li>
            <li class="{{ Helper::makeActiveMenu('/produk') }}"><a href="{{ route('produk.index') }}"><i
                        class="fa fa-circle-o"></i> Produk</a></li>
            <li class="{{ Helper::makeActiveMenu('/supplier') }}"><a href="{{ route('supplier.index') }}"><i
                        class="fa fa-circle-o"></i> Supplier</a></li>
            <li class="{{ Helper::makeActiveMenu('/customer') }}"><a href="{{ route('customer.index') }}"><i
                        class="fa fa-circle-o"></i> Customer</a></li>

        </ul>
    </li>
    <li class="treeview {{ Helper::makeParentActiveMenu(['/pembelian', '/penjualan']) }}">
        <a href="/#">
            <i class="fa fa-exchange"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Helper::makeActiveMenu('/pembelian') }}">
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-circle-o"></i>
                    Pembelian
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/penjualan') }}">
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-circle-o"></i>
                    Penjualan
                </a>
            </li>
        </ul>
    </li>


    <li class="treeview {{ Helper::makeParentActiveMenu(['/laporan']) }}">
        <a href="/#">
            <i class="fa fa-copy"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Helper::makeActiveMenu('/laporan-jenis') }}">
                <a href="{{ route('laporan-jenis.index') }}" target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Jenis
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/laporan-produk') }}">
                <a href="{{ route('laporan-produk.index') }}" target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Produk
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/laporan-customer') }}">
                <a href="{{ route('laporan-customer.index') }}"  target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Customer
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/laporan-supplier') }}">
                <a href="{{ route('laporan-supplier.index') }}" target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Supplier
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/laporan-pembelian') }}">
                <a href="{{ route('laporan-pembelian.index') }}" target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Pembelian
                </a>
            </li>
            <li class="{{ Helper::makeActiveMenu('/laporan-penjualan') }}">
                <a href="{{ route('laporan-penjualan.index') }}" target="_blank">
                    <i class="fa fa-circle-o"></i>
                    Penjualan
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ Helper::makeParentActiveMenu(['/android','/web', '/admin']) }}">
        <a href="/#">
            <i class="fa fa-cog"></i>
            <span>Setting</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            {{-- <li class="{{ Helper::makeActiveMenu('/web') }}"><a href="{{ route('web.index') }}"><i
                    class="fa fa-circle-o"></i> Web</a>
    </li> --}}
    {{-- <li class="{{ Helper::makeActiveMenu('/android') }}"><a href="{{ route('android.index') }}"><i --}}
            {{-- class="fa fa-circle-o"></i> Android</a></li> --}} <li class="{{ Helper::makeActiveMenu('/admin') }}"><a
                href="{{ route('admin.index') }}"><i class="fa fa-circle-o"></i> Admin</a></li>
</ul>
</li>
</ul>