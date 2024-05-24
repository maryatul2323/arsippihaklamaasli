<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">TAMBAH DATA PIHAK</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="tb_pihak-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("tb_pihak/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="NO_PERKARA">No Perkara <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-NO_PERKARA"  value="<?php  echo $this->set_field_value('NO_PERKARA',""); ?>" type="text" placeholder="Masukkan No Perkara"  required="" name="NO_PERKARA"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="NAMA_PENGGUGAT">Nama Penggugat <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-NAMA_PENGGUGAT"  value="<?php  echo $this->set_field_value('NAMA_PENGGUGAT',""); ?>" type="text" placeholder="Masukkan Nama Penggugat"  required="" name="NAMA_PENGGUGAT"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="NAMA_TERGUGAT">Nama Tergugat <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-NAMA_TERGUGAT"  value="<?php  echo $this->set_field_value('NAMA_TERGUGAT',""); ?>" type="text" placeholder="Masukkan Nama Tergugat"  required="" name="NAMA_TERGUGAT"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="JENIS_PERKARA">Jenis Perkara <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  id="ctrl-JENIS_PERKARA" name="JENIS_PERKARA"  placeholder="Pilih Jenis Perkara"    class="custom-select" >
                                                                <option value="">Pilih Jenis Perkara</option>
                                                                <?php
                                                                $JENIS_PERKARA_options = Menu :: $JENIS_PERKARA;
                                                                if(!empty($JENIS_PERKARA_options)){
                                                                foreach($JENIS_PERKARA_options as $option){
                                                                $value = $option['value'];
                                                                $label = $option['label'];
                                                                $selected = $this->set_field_selected('JENIS_PERKARA', $value, "");
                                                                ?>
                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                    <?php echo $label ?>
                                                                </option>                                   
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="TGL_PUTUS">Tanggal Putus <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-TGL_PUTUS"  value="<?php  echo $this->set_field_value('TGL_PUTUS',""); ?>" type="text" placeholder="Masukkan Tanggal Putus"  required="" name="TGL_PUTUS"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="AKTA_CERAI">Akta Cerai <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <div class="dropzone required" input="#ctrl-AKTA_CERAI" fieldname="AKTA_CERAI"    data-multiple="false" dropmsg="Upload Akta Cerai"    btntext="Browse" extensions=".pdf" filesize="2" maximum="1">
                                                                    <input name="AKTA_CERAI" id="ctrl-AKTA_CERAI" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('AKTA_CERAI',""); ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="E_DOCS">E-Docs<span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <div class="dropzone required" input="#ctrl-E_DOCS" fieldname="E_DOCS"    data-multiple="false" dropmsg="Upload E-Docs"    btntext="Browse" extensions=".pdf" filesize="5" maximum="1">
                                                                    <input name="E_DOCS" id="ctrl-E_DOCS" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('E_DOCS',""); ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="KETERANGAN">Keterangan <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-KETERANGAN"  value="<?php  echo $this->set_field_value('KETERANGAN',""); ?>" type="text" placeholder="Keterangan"  required="" name="KETERANGAN"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group form-submit-btn-holder text-center mt-3">
                                                        <div class="form-ajax-status"></div>
                                                        <button class="btn btn-primary" type="submit">
                                                            SIMPAN
                                                            <i class="fa fa-send"></i>
                                                        </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
