<?php

  if (!$this->session->userdata('username')) {
    redirect('primefurniture/log_in');
  }

 ?>
  <div class="container background-isi">
		<div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3" id="margin_menu_admin">
        <div>
          <a class="text-center" id="menu_admin">Halaman Admin</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_dashboard')?>"> Dashboard</a>
    			<a class="menu_admin text-center" id="katagori-tersentuh" href="<?php echo base_url('primefurniture/admin_katagori')?>"> Katalog</a>
    			<a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_produk')?>"> Produk</a>
    			<a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_testimoni')?>"> Testimoni</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_preview')?>"> Preview Data</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/logout')?>"> Logout</a>
        </div>
        <div style="margin-top: 20px;">
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/pemesan')?>"> Pemesan</a>
          <a class="menu_admin text-center" id="katagori-tersentuh" href="<?php echo base_url('primefurniture/produkpesanan')?>"> Produk Pesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/perpesanan')?>"> Perpesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/proseskerja')?>"> Proses Keja</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 warna batas-main-kiri " id="margin_menu_admin">
        <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Dashboard</p>
        <h3 class="text-center">Selamat Datang Admin</h3>
        <p>Pada halaman admin ini, Anda dapat melakukan hal-hal sebagai berikut yaitu :</p>
        <ol>
          <li>Menambah atau membuat katagori dan Produk</li>
          <li>Mengedit Katagori dan Produk</li>
          <li>menghapus Katagori dan Produk serta testimoni</li>
          <li>Anda juga dapat melihat preview data</li>
        </ol>
      </div>
		</div>
	</div>
