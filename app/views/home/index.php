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
                            <li class="breadcrumb-item"><a href="#!">Halaman Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Hello card</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                        <div class="card-body">
                             <!-- order-card start -->
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-body">
                                            <h6 class="text-white">Orders Received</h6>
                                            <h2 class="text-right text-white"><i class="feather icon-shopping-cart float-left"></i><span>486</span></h2>
                                            <p class="m-b-0">Completed Orders<span class="float-right">351</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-body">
                                            <h6 class="text-white">Total Sales</h6>
                                            <h2 class="text-right text-white"><i class="feather icon-tag float-left"></i><span>1641</span></h2>
                                            <p class="m-b-0">This Month<span class="float-right">213</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-yellow order-card">
                                        <div class="card-body">
                                            <h6 class="text-white">Revenue</h6>
                                            <h2 class="text-right text-white"><i class="feather icon-repeat float-left"></i><span>$42,562</span></h2>
                                            <p class="m-b-0">This Month<span class="float-right">$5,032</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-red order-card">
                                        <div class="card-body">
                                            <h6 class="text-white">Total Profit</h6>
                                            <h2 class="text-right text-white"><i class="feather icon-award float-left"></i><span>$9,562</span></h2>
                                            <p class="m-b-0">This Month<span class="float-right">$542</span></p>
                                        </div>
                                    </div>
                                </div>
                            <!-- order-card end -->
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>