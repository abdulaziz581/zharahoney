<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Aplikasi Penjualan<small>&nbsp;ZHARA HONEY</small></a>
         <!--
         <?php 
         $role=Yii::app()->user->getRoleName();
         if(!empty($role)){
         $namax=Yii::app()->user->name;
         $level= Level::model()->findBySql("select id from level where nmjabatan='$role'");
         $pengguna=  User::model()->findBySql("select username from user where role='$level->id'");
         if($role!='MAHASISWA' && $role!='PEGAWAI' && $role!='DOSEN' && $role=='ADMINISTRATOR'){
        
         ?> 
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'Data Master <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Mahasiswa', 'url'=>array('/mahasiswa/index')),
                            array('label'=>'Dosen', 'url'=>array('/dosen/index')),
                            array('label'=>'Program Studi', 'url'=>array('/prodi/index')),
                            array('label'=>'Kampus', 'url'=>array('/kampus/index')),
                            array('label'=>'Jabatan', 'url'=>array('/jabatan/index')),
                            array('label'=>'Pejabat', 'url'=>array('/pejabat/index')),
                            array('label'=>'Instansi', 'url'=>array('/instansi/index')),
                        )),
                        array('label'=>'Pengajuan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Mahasiswa Aktif', 'url'=>array('/mhsaktif/admin')),
                            array('label'=>'Prak. Kerja Lapangan', 'url'=>array('/pkl/admin')),
                            array('label'=>'Magang', 'url'=>array('/magang/index')),
                            array('label'=>'Proposal', 'url'=>array('/proposal/index')),
                            array('label'=>'Penelitian', 'url'=>array('/penelitian/index')),
		            array('label'=>'Penelitian Non Proposal', 'url'=>array('/penelitiannon/index')),
                        )),
                        array('label'=>'Cetak Undangan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Sidang Prak. Kerja Lapangan', 'url'=>array('/detailpkl/admin')),
                            array('label'=>'Sidang Seminar Proposal', 'url'=>array('/proposal/adminundangan')),
                            array('label'=>'Sidang Skripsi', 'url'=>array('/skripsi/admin')),
                        )),
                        array('label'=>'Penilaian <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Prak. Kerja Lapangan (Perusahaan)', 'url'=>array('/detailpkl/adminnilai')),
                            array('label'=>'Prak. Kerja Lapangan (Fakultas)', 'url'=>array('/detailpkl/adminnilai2')),
                            array('label'=>'Seminar Proposal', 'url'=>array('/proposal/adminnilai')),
                           // array('label'=>'Penelitian', 'url'=>array('#')),
                            array('label'=>'Skripsi', 'url'=>array('/skripsi/admin2')),
                            //array('label'=>'Kampus', 'url'=>array('/kampus/index')),
                            //array('label'=>'Jabatan', 'url'=>array('/jabatan/index')),
                            //array('label'=>'Pejabat', 'url'=>array('/pejabat/index')),
                        )),
                        /*array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs')),
                        array('label'=>'Forms', 'url'=>array('/site/page', 'view'=>'forms')),
                        array('label'=>'Tables', 'url'=>array('/site/page', 'view'=>'tables')),
						array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),
                        array('label'=>'Typography', 'url'=>array('/site/page', 'view'=>'typography')),
                        array('label'=>'Gii generated', 'url'=>array('customer/index')),
                        array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
							array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
							array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
							array('label'=>'Separated link', 'url'=>'#'),
							array('label'=>'One more separated link', 'url'=>'#'),
                        )),*/
                        array('label'=>'Akun <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Ganti Password', 'url'=>array('/site/password')),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout('.$pengguna->username.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                        )),
                    ),
                )); ?>
    	</div>
         <?php } }else{?>
         
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Pengajuan Form Mahasiswa', 'url'=>array('/mahasiswa/cari')),
                        array('label'=>'Login', 'url'=>array('/site/login')),
                    ),
                )); ?>
    	</div>
         <?php }?>
         -->
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <!--
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	-->
                </div>
          <!-- <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>-->
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->