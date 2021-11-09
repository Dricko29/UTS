<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?= $data['title'] ;?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url;?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Halaman User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- HTML5 Export Buttons table start -->
            <div class="col-sm-12">
                <?php 
                    Flasher::Message();
                ?>
                <div class="card">
                    <div class="card-header table-card-header">
                        <div class="row">
                           <div class="col-sm-6">
                                <h3>Data User</h3>
                           </div> 

                           <div class="col-sm-6">
                                <a href="<?= base_url;?>/user/tambah" class="btn float-right btn-xs btn btn-primary">Tambah User</a>
                           </div> 
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">#</th>
                                        <th>Nama User</th>
                                        <th>Username</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($data['user'] as $row) :?>
                                    <tr>
                                        <td><?=$no;?></td>
                                        <td><?=$row['nama'];?></td>
                                        <td><?=$row['username'];?></td>
                                        <td>
                                             <a href="<?= base_url; ?>/user/edit/<?= $row['id'] ?>" class="btn btn-sm btn-info ">Edit</a> <a href="<?= base_url; ?>/user/hapus/<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                        </td>

                                    </tr>
                                    <?php $no++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HTML5 Export Buttons end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

