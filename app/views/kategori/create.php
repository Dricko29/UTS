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
                            <li class="breadcrumb-item"><a href="<?= base_url;?>/kategori">Halaman Kategori</a></li>
                            <li class="breadcrumb-item"><a href="#">Tambah Kategori</a></li>
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
                                <h3>Data Kategori</h3>
                           </div> 

                           <div class="col-sm-6">
                                <a href="<?= base_url;?>/kategori" class="btn float-right btn-xs btn btn-primary">Kembali</a>
                           </div> 
                        </div>
                    </div>
                    <div class="card-body">
                         <form role="form" action="<?= base_url; ?>/kategori/simpanKategori" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label >Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="masukkan kategori..." name="nama_kategori">
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

