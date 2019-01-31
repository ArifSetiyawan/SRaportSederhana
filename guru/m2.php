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
                $sql=mysql_query("SELECT user.id_guru,user.nama_lengkap,user.username,user.password,user.hak_akses,user.kd_mapel,mapel.mapel FROM `user` JOIN mapel ON user.kd_mapel=mapel.kd_mapel WHERE id='$userlogin'") or die(mysql_error());
                $cek   =mysql_fetch_array($sql);
                ?>
                    <h5 class="media-heading"><?php echo $cek['nama_lengkap'];?> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Guru <?php echo $cek['mapel'] ?>
                           
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
                    <li class="panel">
                    <a href="nilai.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class=" icon-tasks"></i> Nilai Siswa
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                </li>
</ul>

        </div>
        <!--END MENU SECTION -->