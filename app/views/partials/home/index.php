<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><style>
                        body
                        {
                        background-image: url(assets/images/image1.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        }
                        h1 {
                        color: black;
                        size: bold;
                        font-family: "impact";
                        margin-top: 5 px;
                        }
                    </style>
                    <div><center>
                        <h1>ARSIP DIGITAL</h1>
                        <h1>PENGADILAN AGAMA BENGKALIS</h1>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 comp-grid">
            <?php $rec_count = $comp_model->getcount_datapihak();  ?>
            <a class="animated swing record-count card bg-warning text-white"  href="<?php print_link("tb_pihak/") ?>">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-users "></i>
                    </div>
                    <div class="col-10">
                        <div class="flex-column justify-content align-center">
                            <div class="title">DATA PIHAK</div>
                            <small class=""></small>
                        </div>
                    </div>
                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-4 comp-grid">
            <?php $rec_count = $comp_model->getcount_berkasdihapus();  ?>
            <a class="animated swing record-count card bg-warning text-white"  href="<?php print_link("tb_hapus/") ?>">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-trash "></i>
                    </div>
                    <div class="col-10">
                        <div class="flex-column justify-content align-center">
                            <div class="title">BERKAS DIHAPUS</div>
                            <small class=""></small>
                        </div>
                    </div>
                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</div>
