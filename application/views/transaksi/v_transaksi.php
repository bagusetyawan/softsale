<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Store v.1.2!</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/jquery-ui.css">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-opencart"></i> <span>myStore</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url(); ?>assets/build/images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            
            <!-- sidebar menu -->
            <?php $this->load->view('components/comp_sidebarMenu', FALSE); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php $this->load->view('components/comp_footerButtons', FALSE); ?>
            <!-- /menu footer buttons -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url(); ?>assets/build/images/img.png" alt=""><?php echo $this->session->userdata('username'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    
                    
                    <li><a href="<?=base_url(); ?>index.php/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-success alert-dismissible fade in" role="alert" id="notifications">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaksi Penjualan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 center-margin">
                      <form class="form-vertical form-label-left" id="formAdd">
                        <div class="form-group col-md-3">
                          <label>Nama Barang</label>
                          <input type="hidden" id="idBarang" name="id">
                          <input class="form-control" required="" data-parsley-error-message="Isi Nama / Kode Barang" type="text" name="title" id="tags" placeholder="Masukkan Nama/Kode Barang" >
                          <!-- <input type="text" name="coba" id="autocomplete"> -->
                        </div>
                        <div class="form-group col-md-1">
                          <label>Jumlah</label>
                          <input type="text" required="" data-parsley-type="number" name="jumlah" class="form-control" id="jumlah" placeholder="...">
                        </div>
                        <div class="form-group col-md-1">
                          <label>Diskon</label>
                          <input type="text" name="diskon" class="form-control" id="diskon" placeholder="...">
                        </div>
                        <div class="form-group col-md-2">
                          <label>Harga</label>
                          <input type="text" name="harga" readonly="" class="form-control" id="harga" placeholder="Rp.">
                        </div>
                        <div class="form-group col-md-2">
                          <label>Sub-Total</label>
                          <input type="text" name="subTotal" readonly="" class="form-control" id="subTotal" placeholder="Rp.">
                          <input type="hidden" name="idTrans" id="idTrans">
                        </div>
                        <div class="form-group col-md-3">
                          <label>&nbsp;</label><br/>
                          <button class="btn btn-info" id="btn_add">Tambahkan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                    
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Barang</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="reload">
                      <table class="table table-striped jambo_table bulk_action" id="mydata">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Qty</th>
                                <th>Disc</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                        <!-- Datatable content goes here -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                    
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pembayaran</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="prosesTransaksi" class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <div>
                          <input type="radio" name="pembayaran" id="pembayaran" value="tunai" checked=""> Tunai
                          <input type="radio" name="pembayaran" id="pembayaran" value="hutang"> Hutang
                        </div>
                      </div>


                      <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <div class="input-group">
                          <input type="hidden" name="idPel" id="idPel">
                          <input type="text" data-parsley-error-message="Isi Nama Pelanggan" name="pelanggan" id="pelanggan" class="form-control">
                          <span class="input-group-btn">
                              <button type="button" data-toggle="modal" data-target="#ModalaAdd" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label>Jatuh Tempo</label>
                        <div>
                          <div class="input-group date" id="myDatepicker">
                            <input type="text" data-parsley-error-message="Isi Tanggal Jatuh Tempo" name="jatuh_tempo" id="jatuh_tempo" class="form-control">
                            
                            <span class="input-group-addon" style="">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Grand Total</label>
                        <div>
                          <input placeholder="0" type="text" name="total" id="grandtotal" class="form-control" style="font-weight: bold; text-align: right; font-size: 30px;" required="" data-parsley-error-message="Tidak bisa melakukan  Transaksi dg nominal 0.">
                          <!-- <span class="form-control-feedback left" aria-hidden="true">Rp.</span> -->
                        </div>
                      </div>

                      <div class="form-group">
                          <button class="btn btn-success pull-right" id="btn_save">Proses Data</button>
                      </div>

                    </form>
                  </div>
                  <!-- x_content -->
                </div>
                <!-- x_panel -->
              </div>

            </div>

          </div>

          <!-- MODAL ADD CUSTOMER-->
          <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <!-- <a class="close" data-dismiss="modal">&times;</a> -->
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Customer</h4>
                </div>
                
                    <div class="modal-body">
                      <form class="form-horizontal form-label-left" id="tambahCustomer">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>Nama Customer</label>
                          <input name="nama" id="nama" class="form-control has-feedback-left" type="text" placeholder="Nama Customer" required>
                          <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>Alamat</label>
                          <input name="alamat" id="alamat" class="form-control has-feedback-left" type="text" placeholder="Alamat" required>
                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>Kota</label>
                          <input name="kota" id="kota" class="form-control has-feedback-left" type="text" placeholder="Kota" required>
                          <span class="fa fa-industry form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>Telepon</label>
                          <input name="telepon" id="telepon" class="form-control has-feedback-left" type="text" placeholder="Telepon" required>
                          <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                        </div>
                      
                        <div class="form-group pull-right">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                          <button class="btn btn-info" id="btn_addCustomer">Simpan</button>
                        </div>
                      </form>
                    </div>
                
              </div>
            </div>
          </div>
          <!--END MODAL ADD CUSTOMER-->

          <!-- MODAL EDIT -->
          <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
              </div>
              <form class="form-horizontal" id="formEdit">
                  <div class="modal-body">
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Kode</label>
                          <div class="col-xs-9">
                              <input name="id_edit" id="id2" class="form-control has-feedback-left" type="text" placeholder="Kode Barang" style="width:335px;" readonly="">
                              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Nama Barang</label>
                          <div class="col-xs-9">
                              <input name="nabar_edit" id="nama_barang2" class="form-control has-feedback-left" type="text" placeholder="Nama Barang" style="width:335px;" readonly="">
                              <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Harga Satuan</label>
                          <div class="col-xs-9">
                              <input name="harga_edit" id="harga2" class="form-control has-feedback-left" type="text" placeholder="Harga" style="width:335px;" readonly="">
                              <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Jumlah</label>
                          <div class="col-xs-9">
                              <input name="jumlah_edit" id="jumlah2" class="form-control has-feedback-left" type="text" placeholder="Harga" style="width:335px;" required>
                              <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Diskon</label>
                          <div class="col-xs-9">
                              <input name="diskon_edit" id="diskon2" class="form-control has-feedback-left" type="text" placeholder="%" style="width:335px;" required>
                              <span class="fa fa-percent form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Subtotal</label>
                          <div class="col-xs-9">
                              <input name="stt_edit" id="subTotal2" class="form-control has-feedback-left" type="text" placeholder="Harga" style="width:335px;" readonly="">
                              <span class="fa fa-circle form-control-feedback left" aria-hidden="true"></span>
                          </div>
                      </div>
   
                  </div>
                  <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                      <button class="btn btn-info" id="btn_update">Update</button>
                  </div>
              </form>
              </div>
              </div>
          </div>
          <!--END MODAL EDIT-->
   
          <!--MODAL HAPUS-->
          <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                      </div>
                      <form class="form-horizontal">
                      <div class="modal-body">
                                             
                              <input type="hidden" name="kode" id="textkode" value="">
                              <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                           
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <!--END MODAL HAPUS--> 

        </div>
        <!-- page content -->

      </div>
    </div>
  </div>
  <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.js"></script>

    <!-- <script src="<?php echo base_url(); ?>assets/build/js/jquery-1.12.4.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/build/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/build/js/sum.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/jquery-validation/parsley.min.js"></script>

    <!-- jQuery autocomplete -->
    <!-- <script src="<?php echo base_url(); ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script> -->


    <script type="text/javascript">
      $(document).ready(function(){
        
        // var b = JSON.parse(nilai);
        // alert(nilai);
        // $('#autocomplete').autocomplete({
        //   source: "<?php echo site_url('Transaksi/testAuto');?>",
        //    onSelect: function (suggestion) {
        //         alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        //     }

            
        // })
        
        // $("#formAdd").parsley();
        getID_trans();
        $("#jatuh_tempo").attr("disabled", true);
        $("#jatuh_tempo").attr("required", false);
        resetForm();
        autoCompleteBarang();
        autoCompleteCust();
        hitungJumlah();
        setDatatable();
        tampil_tmp_trans();
        $('#tags').focus();
        disable2();
        $('#myDatepicker').datetimepicker({
          format: 'DD-MM-YYYY'
        });
        sum_trans();
        // $('#ModalaAdd').on('keypress', function(e){
        //   if (e.which == 13){
        //     $(this).submit()
        //   }
        // });
      });
  


      //add barang to transaksi
      $('#formAdd').parsley().on('form:submit', function() {
        var jid = $('#idBarang').val();
        var jIDTrans = $('#idTrans').val();
        var jnama = $('#tags').val();
        var jjml = $('#jumlah').val();
        var jdiskon = $('#diskon').val();
        var jharga = $('#harga').val();
        var jsubTotal = $('#subTotal').val();

          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/transaksi/add_barang')?>",
              dataType : "JSON",
              data : {idBarang:jid, idTrans:jIDTrans, namaBarang:jnama, jumlah:jjml, diskon:jdiskon, harga:jharga, subTotal:jsubTotal},
              success: function(data){
                  resetForm();
                  tampil_tmp_trans();
                  sum_trans();
                  $('#tags').focus();

              }
          });
          return false;
      });

      //proses transaksi
      $('#prosesTransaksi').parsley().on('form:submit', function() {
        var jid = $('#idPel').val();
        var jIDTrans = $('#idTrans').val();
        var jtotal = $('#grandtotal').val();
        var jBayar = $('input[name="pembayaran"]:checked').val();
        var jPelanggan = $('#pelanggan').val();
        var jJatuhTempo = $('#jatuh_tempo').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/transaksi/saveTrans')?>",
            dataType : "JSON",
            data : {idPel:jid, idTrans:jIDTrans, total:jtotal, pembayaran:jBayar, pelanggan:jPelanggan, jatuh_tempo:jJatuhTempo},
            success: function(data){
              resetForm();
              tampil_tmp_trans();
              sum_trans();
              $('#tags').focus();
              getID_trans();
              // window.location.reload(true);
              window.open('<?=site_url(); ?>/transaksi/cetakPDF?kodeTrans='+jIDTrans+'&kodePel='+jid, '_blank');
            }
        });

        return false;
      });

      //Update Trans
      $('#formEdit').parsley().on('form:submit', function() {
          var id=$('#id2').val();
          var jumlah=$('#jumlah2').val();
          var subtotal=$('#subTotal2').val();
          var diskon = $('#diskon2').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/transaksi/update_tmp_trans')?>",
              dataType : "JSON",
              data : {id:id, jumlah:jumlah, subtotal:subtotal, diskon:diskon},
              success: function(data){
                  resetForm();
                  $('#ModalaEdit').modal('hide');
                  tampil_tmp_trans();
                  sum_trans();
              }
          });
          return false;
      });

      //Simpan Customer
        $('#tambahCustomer').parsley().on('form:submit', function() {
            var nama=$('#nama').val();
            var alamat=$('#alamat').val();
            var kota=$('#kota').val();
            var telepon=$('#telepon').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/Customer/simpan_customer')?>",
                dataType : "JSON",
                data : {nama:nama, alamat:alamat, kota:kota, telepon:telepon},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="kota"]').val("");
                    $('[name="telepon"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_customer();
                }
            });
            return false;
        });


      //enable/disable field jatuh tempo
      function disable2(){
        $("form input:radio").change(function(){
          if($(this).val() == "hutang"){
            $("#jatuh_tempo").attr("disabled", false);
            $("#jatuh_tempo").attr("required", true);
            $("#pelanggan").attr("required", true);
          } else{
            $("#pelanggan").attr("required", false);
            $("#jatuh_tempo").attr("disabled", true);
            $("#jatuh_tempo").attr("required", false);
          }
        });
      }

      //reset form
      function resetForm(){
        $('[name="id"]').val('');
        $('[name="title"]').val('');
        $('[name="harga"]').val('');
        $('[name="jumlah"]').val('');
        $('[name="subTotal"]').val('');
        $('[name="diskon"]').val('');
        $('[name="pelanggan"]').val('');
        $('[name="jatuh_tempo"]').val('');

      }

      function autoCompleteBarang(){

        $('#tags').autocomplete({
              source: "<?php echo site_url('Transaksi/getAutocomplete');?>",
    
              select: function (event, ui) {
                  $('[name="title"]').val(ui.item.label);
                  $('[name="id"]').val('');
                  $('[name="harga"]').val('');
                  $('[name="jumlah"]').val('');
                  $('[name="subTotal"]').val('');
                  $('[name="id"]').val(ui.item.id);
                  $('[name="harga"]').val(ui.item.harga); 
              }
          });
      }

      function autoCompleteCust(){
        $('#pelanggan').autocomplete({
              source: "<?php echo site_url('Transaksi/getAutocompleteCust');?>",
              select: function (event, ui) {
                $('#idPel').val(ui.item.id);
                $('#pelanggan').val(ui.item.label);
              }
          });
      }

      function hitungJumlah(){
        $('#jumlah').on('change paste keyup', function(){
          var diskon = ($('#jumlah').val() * $('#harga').val()) * ($('#diskon').val()/100);
          var maths = ($('#jumlah').val() * $('#harga').val()) - diskon;
          $('#subTotal').val(maths);
        });

        $('#ModalaEdit #jumlah2').on('change paste keyup', function(){
          var maths = $('#ModalaEdit #jumlah2').val() * $('#ModalaEdit #harga2').val();
          $('#ModalaEdit #subTotal2').val(maths);
        });

        //field diskon
        $('#diskon').on('change paste keyup', function(){
          var diskon = ($('#jumlah').val() * $('#harga').val()) * ($('#diskon').val()/100);
          var maths = ($('#jumlah').val() * $('#harga').val()) - diskon;
          $('#subTotal').val(maths);
        });

        $('#ModalaEdit #diskon2').on('change paste keyup', function(){
          var diskon = ($('#ModalaEdit #jumlah2').val() * $('#ModalaEdit #harga2').val()) * ($('#ModalaEdit #diskon2').val()/100);
          var maths = ($('#ModalaEdit #jumlah2').val() * $('#ModalaEdit #harga2').val()) - diskon;
          $('#ModalaEdit #subTotal2').val(maths);
        });
      }

      function setDatatable(){
        $('#mydata').dataTable({
          "order":[[0, "desc"]], 
          "ordering":false,
          "info":false,
          "paginate":false,
          "filter":false,
          "columnDefs":[
          {
            "targets":[1],
            "orderable":false
          },
          {
            "width":"45%",
            "targets":0
          },
          {
            "width":"15%",
            "targets":1
          },
          {
            "width":"5%",
            "targets":2
          },
          {
            "width":"5%",
            "targets":3
          }
          ]
        });
      }



      function tampil_tmp_trans(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Transaksi/data_tmp_trans',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama_barang+'</td>'+
                                '<td>Rp. '+data[i].harga_satuan+'</td>'+
                                '<td>'+data[i].jumlah+'</td>'+
                                '<td>'+data[i].diskon+'%</td>'+
                                '<td>Rp. '+data[i].subtotal+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'"><i class="fa fa-edit"></i></a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'"><i class="fa fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        function sum_trans(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Transaksi/sumTrans',
                async : false,
                dataType : 'json',
                success : function(data){
                  var total = data[0].subtotal;
                  $('#grandtotal').val(total);

                }
 
            });
        }

        function getID_trans(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Transaksi/getIDAjax',
                async : false,
                dataType : 'json',
                success : function(data){
                  // var total = data[0].subtotal;
                  $('#idTrans').val(data);
                  // alert(data);
                }
 
            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/transaksi/get_tmp_trans')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, nama_barang, harga_satuan, jumlah, subtotal){
                        $('#ModalaEdit').modal('show');
                        $('#id2').val(data.id);
                        $('#nama_barang2').val(data.nama_barang);
                        $('#harga2').val(data.harga_satuan);
                        $('#jumlah2').val(data.jumlah);
                        $('#subTotal2').val(data.subtotal);
                        $('#diskon2').val(data.diskon);
                    });
                }
            });
            return false;
        });

        

        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        // //Hapus Trans
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/transaksi/hapus_tmp_trans')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_tmp_trans();
                            sum_trans();
                    }
                });
                return false;
        });
    </script>

  </body>
</html>
