<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $lihat->id_pelanggan ?>">
<i class="fa fa-trash-o"></i>Delete
</button>
<div class="modal modal-danger fade" id="delete<?php echo $lihat->id_pelanggan ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Menghapus data</h4>
      </div>
      <div class="modal-body">
        <p>Yakin ingin menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Tidak, batalkan
           </button>
        <a href="<?php echo base_url('pelanggan/hapus_pelanggan/'.$lihat->id_pelanggan) ?>" class="btn btn-outline pull-right"><i class="fa fa-trash-o"></i>Ya, Hapus Data Ini</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->