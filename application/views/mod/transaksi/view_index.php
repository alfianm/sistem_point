<div class="row">
    <div class="col-12">
        <button class="btn btn-custom mb-2" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah transaksi</button>
        <div class="card-box">
          <?= $this->session->flashdata('message'); ?>
        	<table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              	<thead>
	              	<tr>
	                  	<th>#</th>
	                  	<th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>Point</th>
                      <th>Action</th>
	              	</tr>
              	</thead>
              	<tbody>
                <?php $no = 1; ?>
                 <?php foreach ($transaksi as $t): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $t['full_name'] ?></td>
                      <td><?= $t['nama_produk'] ?></td>
                      <td><?= $t['tanggal_pembelian'] ?></td>
                      <td><?= $t['jumlah'] ?></td>
                      <td><?= $t['harga'] ?></td>
                      <td>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $u['id'] ?>"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $u['id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
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
        <h5 class="modal-title">Tambah Transaksi</h5>
      </div>
      <form method="post" action="<?= base_url("backend/transaksi/add") ?>" id="upload_form">
        <div class="modal-body">
          <div class="form-group">
            <label for="customer">Customer</label>
            <select name="customer" id="customer" class="form-control">
              <option value="" disabled selected>- Select -</option>
              <?php foreach ($users as $u): ?>
                <option value="<?= $u['id'] ?>"><?= $u['full_name'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="produk">Produk</label>
            <select name="produk" id="produk" class="form-control">
              <option value="" disabled selected>- Select -</option>
              <option value="baju">Baju</option>
              <option value="celana">Celana</option>
              <option value="jaket">Jaket</option>
              <option value="sepatu">Sepatu</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" autocomplete="off" id="jumlah">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" autocomplete="off" id="harga">
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


<?php foreach ($users as $row): ?>
<div id="edit<?= $row['id']  ?>" class="modal fade custom-modal-tabs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Hapus Data</h5>
      </div>
      <form action="<?= base_url('backend/user/edit') ?>" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="modal-body">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" autocomplete="off" id="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" value="<?= $row['password'] ?>" autocomplete="off" id="password">
          </div>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="<?= $row['full_name'] ?>" autocomplete="off" id="nama">
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="form-control">
              <option value="" disabled selected>- Select -</option>
              <?php if ($row['level'] == 'customer'): ?>
              <option selected value="customer">Customer</option>
              <?php endif ?>
            </select>
          </div>
        </div>
        <div class="modal-footer modal-footer--center">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
          <button class="btn btn-custom" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php foreach ($users as $row): ?>
<div id="delete<?= $row['id']  ?>" class="modal fade custom-modal-tabs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header has-border">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title">Hapus Data</h5>
      </div>
      <form action="<?= base_url('backend/user/delete') ?>" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="modal-body">
          <h4>Apakah anda yakin ingin menghapus data ini? <span class="text-danger"><?= $row['full_name'] ?></span></h4>
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