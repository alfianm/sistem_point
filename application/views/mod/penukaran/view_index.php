<div class="row">
    <div class="col-12">      
        <div class="card-box">
          <?= $this->session->flashdata('message'); ?>
        	<table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              	<thead>
	              	<tr>
	                  	<th>#</th>
	                  	<th>Nama Customer</th>
                      <th>Nama Hadiah</th>
                      <th>Point Hadiah</th>           
	              	</tr>
              	</thead>
              	<tbody>
                <?php $no = 1; ?>
                 <?php foreach ($users as $u): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $u['nama_lengkap'] ?></td>                      
                      <td><?= $u['nama_hadiah'] ?></td>
                      <td><?= $u['point_hadiah'] ?></td>                      
                    </tr>
                  <?php endforeach ?> 
                </tbody>
          	</table>
        </div>
    </div>
</div>