  <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/smean.PNG"/>
             <div class="media-body">
                <?php
                  if(@$_SESSION['admin']) {
                    $userlogin=@$_SESSION['admin'];

                   }else if(@$_SESSION['guru']){
                    $userlogin=@$_SESSION['guru'];

                    }else if(@$_SESSION['walikelas']) {
                    $userlogin=@$_SESSION['walikelas'];
                }
                $sql=mysql_query("SELECT * FROM `user` WHERE id='$userlogin'") or die(mysql_error());
                $cek   =mysql_fetch_array($sql);
                ?>
                    <h5 class="media-heading"><?php echo $cek['nama_lengkap'];?> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> <?php echo $cek['hak_akses'] ?>
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>
           <ul id="menu" class="collapse">
                <li class="panel ">
                    <a href="index.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class=" icon-dashboard"> </i> Dashboard   
       
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       
                    </a>
                </li>

                <li class="panel ">
                    <a href="ekstra.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-star"> </i> Ekstrakurikuler
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       
                    </a>
                </li>
				<li class="panel ">
                    <a href="hadir.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Ketidakhadiran
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       
                    </a>
                </li>
				<li class="panel ">
                    <a href="formlaporan.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-print"> </i> Laporan Nilai
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       
                    </a>
                </li>
            </ul>

        </div>
        <!--END MENU SECTION -->