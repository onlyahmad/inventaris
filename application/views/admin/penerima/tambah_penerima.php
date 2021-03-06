
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Penerima</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/penerima">Penerima</a></li>
              <li class="active">Tambah</li>

            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Penerima</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_penerima'); ?>
                  <div class="form-group">
                   <label>Pihak Yang Menerima</label>
                      <input type="text" class="form-control" name="nama_penerima" placeholder="Masukkan Nama Penerima" required />
                  </div>
                  <div class="form-group">
                   <label>Atas Nama</label>
                      <input type="text" class="form-control" name="atas_nama" placeholder="Masukkan Atas Nama" required />
                  </div>
                   <div class="form-group">
                   <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"  />
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan"  />
                  </div>
                  <div class="form-group">
                  <label for="tgl_penerima">Tanggal :</label>
                    <input type="date" class="form-control" 
                        name="tgl_penerima" id="tgl_penerima" value="<?php echo date("Y-m-d"); ?>" required >bulan/tanggal/tahun
                </div>
                 
                 
                 
                  <a href="<?php echo base_url(); ?>admin/barang_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>