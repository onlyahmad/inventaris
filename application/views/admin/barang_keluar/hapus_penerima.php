<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $lihat->id_penerima ?>">
<i class="fa fa-trash-o"></i>Hapus
</button>
<div class="modal modal-danger fade" id="delete<?php echo $lihat->id_penerima ?>">
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
        <a href="<?php echo base_url('admin/hapus_penerima/'.$lihat->id_penerima) ?>" class="btn btn-outline pull-right"><i class="fa fa-trash-o"></i>Ya, Hapus Data Ini</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->