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
                            <li class="breadcrumb-item"><a href="<?= base_url;?>/home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url;?>/user">Halaman User</a></li>
                            <li class="breadcrumb-item"><a href="#"><?= $data['title'] ;?></a></li>
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
                <div class="card">
                    <div class="card-header table-card-header">
                        <div class="row">
                           <div class="col-sm-6">
                                <h3>Data User</h3>
                           </div> 

                           <div class="col-sm-6">
                                <a href="<?= base_url;?>/user" class="btn float-right btn-xs btn btn-primary">Kembali</a>
                           </div> 
                        </div>
                    </div>
                    <div class="card-body">
                         <form role="form" action="<?= base_url; ?>/user/updateUser" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">

                                    <div class="form-group">
                                        <label >Nama</label>
                                        <input type="text" class="form-control" placeholder="masukkan nama..."  name="nama" value="<?= $data['user']['nama']; ?>" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label >Username</label>
                                        <input type="text" class="form-control" placeholder="masukkan username..." name="username" value="<?= $data['user']['username']; ?>" readonly>
                                    </div>
                                    <small class="form-text text-muted mt-2 mb-2">Abaikan jika tidak ingin mengganti password.</small>
                                    <div class="form-group">
                                        <label >Password</label>
                                        <input type="password" class="form-control" placeholder="masukkan password..." name="password">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Ulangi Password</label>
                                        <input type="password" class="form-control" name="ulangi_password">
                                    </div>
                 

                            <button type="submit" class="btn btn-primary">Submit</button>
           
                        </form>
                    </div>
                </div>
            </div>
            <!-- HTML5 Export Buttons end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

