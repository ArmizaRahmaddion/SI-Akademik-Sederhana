<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('lte/dist/img/dion.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Armiza Rahmaddion</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('/mahasiswa')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA MAHASISWA</span></a></li>
          <li><a href="{{url('/dosen')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA DOSEN</span></a></li>
          <li><a href="{{url('/prodi')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA PRODI</span></a></li>
          <li><a href="{{url('/matakuliah')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA MATA KULIAH</span></a></li>
          <li><a href="{{url('/fakultas')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA FAKULTAS</span></a></li>
          <li><a href="{{url('/kelas')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA KELAS</span></a></li>
          <li><a href="{{url('/ruangan')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA RUANGAN</span></a></li>
          <li><a href="{{url('/tahunakademik')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA AKADEMIK</span></a></li>
          <li><a href="{{url('/Jadwal')}}"><i class="fa fa-circle-o text-aqua"></i> <span>DATA JADWAL</span></a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Jadwal</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="\Jadwal"><i class="fa fa-circle-o"></i> Jadwal</a></li>
        </ul>
      </li>

  </section>
  <!-- /.sidebar -->
</aside>