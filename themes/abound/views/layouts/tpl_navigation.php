<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">ZHARA HONEY <small>aplikasi penjualan</small></a>
          <?php
            /*$role=Yii::app()->user->getRoleName();
            $namax=Yii::app()->user->name;
            $pengguna=  User::model()->findBySql("select id,nama from user where username='$namax'");
            if(isset($pengguna->id)){
            $idx=$pengguna->id;
            $customerservice=Customerservice::model()->findBySql("select * from customerservice where user_id='$idx'");
            
        }*/
          ?>
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'MASTER DATA <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'PEMBELI', 'url'=>array('pembeli/admin')),
                            array('label'=>'BARANG', 'url'=>array('barang/admin')),
                            array('label'=>'BANK', 'url'=>array('bank/admin')),
                            array('label'=>'CUSTOMER SERVICE', 'url'=>array('customerservice/admin')),
                            array('label'=>'EKSPEDISI', 'url'=>array('ekspedisi/admin')),
                            array('label'=>'METODE BAYAR', 'url'=>array('metodebayar/admin')),
                            array('label'=>'ORDER VIA', 'url'=>array('ordervia/admin')),
                            array('label'=>'PROPINSI', 'url'=>array('propinsi/admin')),
                            array('label'=>'KOTA', 'url'=>array('kota/admin')),
                            array('label'=>'KECAMATAN', 'url'=>array('kecamatan/admin')),
                            array('label'=>'WAKTU SAMPAI', 'url'=>array('wktsampai/admin')),
                        )),
                        array('label'=>'TRANSAKSI <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'PENJUALAN', 'url'=>array('penjualan/create')),
                            array('label'=>'VERIFIKASI', 'url'=>array('penjualan/verifikasi')),
                            array('label'=>'PENGIRIMAN', 'url'=>array('penjualan/pengiriman')),
                            array('label'=>'PEMBAYARAN', 'url'=>array('pembayaran/admin')),  
                              
                                   
                        )),
                        array('label'=>'LAPORAN <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'PENJUALAN', 'url'=>array('penjualan/admin')),
                           
                        )),

                        array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
							array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
							array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
							array('label'=>'Separated link', 'url'=>'#'),
							array('label'=>'One more separated link', 'url'=>'#'),
                        )),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
          <!-- <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->