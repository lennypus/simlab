<?php $class = NULL ?>
<li class="header">MENU</li>
<li <?php echo $class ?>><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li <?php echo $class ?>><a href="home.php?page=chart"><i class="fa fa-pie-chart"></i> <span>Chart</span></a></li>
<li class="treeview"><a href=""><i class="fa fa-line-chart"></i> <span>Transaksi</span></a>
    <ul class="treeview-menu">
            <li><a href="home.php?page=transaksi"><i class="fa fa-circle-o"></i><span>Transaksi</span></a></li>
            <li><a href="home.php?page=laporan"><i class="fa fa-circle-o"></i><span>Laporan</span></a></li>
    </ul>
</li>
<li class="treeview"><a href="lab.php"><i class="fa fa-flask"></i> <span class="pul-right-container">Laboratorium</span></a>
    <ul class="treeview-menu">
        <li><a href="home.php?page=profil-pemeriksaan"><i class="fa fa-circle-o"></i><span>Profile Pemeriksaan</span></a></li>
        <li><a href="home.php?page=sampel"><i class="fa fa-circle-o"></i><span>Sampel</span></a></li>
    </ul>
</li>
<li><a href="#"><i class="fa fa-ambulance"></i> <span>Logostik</span></a>
    <ul class="treeview-menu">
        <li><a href="home.php?page=barang"><i class="fa fa-medkit"></i><span> Stok Barang</span></li></a></li>
    </ul>
</li>
