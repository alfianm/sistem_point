<div class="row">
    <div class="col-12">
      <?php if ($user['level'] == 'superadmin'): ?>
        <button class="btn btn-custom mb-2" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah hadiah</button>
      <?php endif ?>
        <div class="card-box">
          <?= $this->session->flashdata('message'); ?>
        	<table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              	<thead>
	              	<tr>
	                  	<th>#</th>
	                  	<th>Hadiah</th>
                      <th>Point</th>
                      <th>Action</th>
	              	</tr>
              	</thead>
              	<tbody>
                <?php $no = 1; ?>
                 <?php foreach ($hadiah as $u): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $u['nama_hadiah'] ?></td>
                      <td><?= $u['point'] ?></td>
                      <?php if ($user['level'] == 'superadmin'): ?>
                      <td>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $u['id'] ?>"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $u['id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
                      <?php else: ?>
                        <td>
                         <a href="#" class="btn btn-info" data-toggle="modal" data-target="#tukar<?= $u['id'] ?>"><i class="fa fa-gift"></i></a>
                        </td>
                      <?php endif ?>
                    </tr>
                  <?php endforeach ?> 
                </tbody>
          	</table>
        </div>
    </div>
</div>

<div id="add" class="modal fade custom-modal-tabs">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Tambah Hadiah</h5>
      </div>
      <form method="post" action="<?= base_url("backend/hadiah/add") ?>" id="upload_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="hadiah">Nama Hadiah</label>
            <input type="text" name="hadiah" class="form-control" autocomplete="off" id="hadiah">
          </div>
          <div class="form-group">
            <label for="point">Point</label>
            <input type="text" name="point" class="form-control" autocomplete="off" id="point">
          </div>          
        </div>
        <div class="modal-footer modal-footer--center">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-custom">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php foreach ($hadiah as $row): ?>
<div id="edit<?= $row['id']  ?>" class="modal fade custom-modal-tabs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Update Hadiah</h5>
      </div>
      <form method="post" action="<?= base_url("backend/hadiah/edit") ?>" id="upload_form">
        <input type="text" name="id" value="<?= $row['id'] ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="hadiah">Nama Hadiah</label>
            <input type="text" name="hadiah" class="form-control" autocomplete="off" id="hadiah" value="<?= $row['nama_hadiah'] ?>">
          </div>
          <div class="form-group">
            <label for="point">Point</label>
            <input type="text" name="point" class="form-control" autocomplete="off" id="point" value="<?= $row['point'] ?>">
          </div>          
        </div>
        <div class="modal-footer modal-footer--center">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-custom">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php foreach ($hadiah as $row): ?>
<div id="delete<?= $row['id']  ?>" class="modal fade custom-modal-tabs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Hapus Data</h5>
      </div>
      <form action="<?= base_url('backend/hadiah/delete') ?>" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="modal-body">
          <h4>Apakah anda yakin ingin menghapus data ini? <span class="text-danger"><?= $row['nama_hadiah'] ?></span></h4>
        </div>
        <div class="modal-footer modal-footer--center">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
          <button class="btn btn-custom" type="submit">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php foreach ($hadiah as $row): ?>
<div id="tukar<?= $row['id']  ?>" class="modal fade custom-modal-tabs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Tukar Point</h5>
      </div>
      <form action="<?= base_url('backend/hadiah/tukar') ?>" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="point" value="<?= $row['point'] ?>">
        <div class="modal-body text-center">
          <h4>Apakah anda yakin ingin menukar point anda dengan hadiah ini?</h4><h4><span class="text-danger"><?= $row['nama_hadiah'] ?></h4></span>
        </div>
        <div class="modal-footer modal-footer--center">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
          <button class="btn btn-info" type="submit">Tukar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>