
<!-- <?php session_start() ?> -->
<li class="header">MENU</li>
<li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li><a href="home.php?page=chart"><i class="fa fa-pie-chart"></i> <span>Chart</span></a></li>
<li class="treeview"><a href=""><i class="fa fa-line-chart"></i> <span>Transaksi</span></a>
    <ul class="treeview-menu">
            <!-- <li><a href="home.php?page=transaksi"><i class="fa fa-circle-o"></i><span>Transaksi</span></a></li> -->
            <li><a href="home.php?page=laporan"><i class="fa fa-circle-o"></i><span>Laporan</span></a></li>
    </ul>
</li>
<?php
if($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'dokter'){
?>
<li class="treeview"><a href="lab.php"><i class="fa fa-flask"></i> <span class="pul-right-container">Laboratorium</span></a>
    <ul class="treeview-menu">
        <li><a href="home.php?page=profil-pemeriksaan"><i class="fa fa-circle-o"></i><span>Profile Pemeriksaan</span></a></li>
        <li><a href="home.php?page=sampel"><i class="fa fa-circle-o"></i><span>Sampel</span></a></li>
    </ul>
</li>
<?php } ?>
<li><a href="#"><i class="fa fa-ambulance"></i> <span>Logostik</span></a>
    <ul class="treeview-menu">
        <li><a href="home.php?page=barang"><i class="fa fa-medkit"></i><span> Stok Barang</span></li></a></li>
    </ul>
</li>
<?php
if($_SESSION['level'] == 'admin'){
?>
<li><a href="#"><i class="fa fa-user"></i> <span>Administrator</span></a>
    <ul class="treeview-menu">
        <li><a href="home.php?page=user"><i class="fa fa-user"></i><span> Manajemen User</span></li></a></li>
        <li><a href="home.php?page=backup"><i class="fa fa-download"></i><span> Backup</span></li></a></li>
    </ul>
</li>
<?php } ?>