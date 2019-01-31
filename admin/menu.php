 <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/smean.PNG" />
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
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> <?php echo $cek['hak_akses'];?>
                           
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
                    <a href="siswa.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-user-md"> </i> Siswa   
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       
                    </a>
                </li>
                <li class="panel ">
                    <a href="guru.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-tags"></i> Guru
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                </li>
                <li class="panel">
                    <a href="mapel.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-book"></i> Mata Pelajaran
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                </li>

                <li class="panel">
                    <a href="walas.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-tag"></i> Walikelas
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                </li>
                <li class="panel">
                     <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class=" icon-table"></i> Laporan
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="../data_siswa.php"><i class="icon-angle-right"></i> Laporan Siswa </a></li>
                         <li class=""><a href="../data_guru.php"><i class="icon-angle-right"></i> Laporan Guru </a></li>
                    </ul>
                </li>
            </ul>

</div>
        <!--END MENU SECTION -->