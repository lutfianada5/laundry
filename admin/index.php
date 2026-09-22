<?php 
    include '../koneksi.php';
    include 'header.php';
?>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat Datang !</b>di Sistem Informasi Laundry</h4>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="pull-right">
                                    <?php
                                        $pelanggan = mysqli_query($koneksi,"select * from pelanggan");
                                        echo mysqli_num_rows($pelanggan);
                                    ?>
                                </span>
                            </h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
