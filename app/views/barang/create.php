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
                            <li class="breadcrumb-item"><a href="<?= base_url;?>/barang">Halaman Barang</a></li>
                            <li class="breadcrumb-item"><a href="#">Tambah Barang</a></li>
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
                                <h3>Data Barang</h3>
                           </div> 

                           <div class="col-sm-6">
                                <a href="<?= base_url;?>/barang" class="btn float-right btn-xs btn btn-primary">Kembali</a>
                           </div> 
                        </div>
                    </div>
                    <div class="card-body">
                         <form role="form" action="<?= base_url; ?>/barang/simpanBarang" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control"  placeholder="masukan nama barang" name="nama_barang">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Kategori</label>
                                <select class="form-control" name="id_kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($data['kategori'] as $row) :?>
                                        <option value="<?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                            </div>
                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Gudang</label>
                                <select class="form-control" name="id_gudang" required>
                                    <option value="">Pilih Gudang</option>
                                    <?php foreach ($data['gudang'] as $row) :?>
                                        <option value="<?= $row['id_gudang']; ?>"><?= $row['gudang']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control"  placeholder="masukan harga" name="harga">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" class="form-control"  placeholder="masukan stok" name="stok">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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

