<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">

          <li {{{ (Request::is('welcome') ? 'class=active' : '') }}}>
            <a href="/welcome"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
            </a>
          </li>

          <li class="treeview {{{ (Request::is('master-barang','tambah-barang','edit-barang/*',
                                                'kupon','tambah-kupon','edit-kupon/*',
                                                'master-pembelian','tambah-pembelian','edit-pembelian/*'
                                              ) ? 'active' : '') }}}">
            <a href="#">
              <i class="fa fa-database"></i> <span>MASTER</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li {{{ (Request::is('master-barang','tambah-barang','edit-barang/*') ? 'class=active' : '') }}}><a href="{{url('/master-barang')}}"><i class="fa fa-circle-o text-aqua"></i> <span>BARANG</span></a></li>
              <li {{{ (Request::is('kupon','tambah-kupon','edit-kupon/*') ? 'class=active' : '') }}}><a href="{{url('/kupon')}}"><i class="fa fa-circle-o text-aqua"></i> <span>KUPON</span></a></li>
              <li {{{ (Request::is('Pembelian','tambah-pembeli','edit-pembeli/*') ? 'class=active' : '') }}}><a href="{{url('/pembelian')}}"><i class="fa fa-circle-o text-aqua"></i> <span>PEMBELIAN</span></a></li>
            </ul>
          </li>
        </ul>
    </section>
  </aside>
