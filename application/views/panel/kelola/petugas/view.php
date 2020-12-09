<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                 <div class="row">
                <div class="col-sm-12 col-md-10">
                  <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                
                <div class="col-sm-12 col-md">
                                   
                   <?=anchor('panel/kelola/petugas/petugas/create/', 'Tambah Data',
                                            ['class' => 'fas fa-plus m-0 btn btn-success btn-md'])?>  
                  

                </div>
                 
              </div> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">email</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Alamat</th>
                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Action</th></tr>
                  </thead>
                  <tbody>
                    <?php $i = 0; 
                                $i++?>
                  <?php foreach ($users as $user) :  ?>      
                  <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0"><?= $i++ ?></td>
                    <td><?=$user->nama ?></td>
                    <td><?=$user->email ?></td>
                    <td><?=$user->alamat ?></td>
                    <td>
                      <?=anchor('panel/kelola/petugas/petugas/update/'.$user->id_user, 'Edit',
                                            ['class' => 'btn btn-default btn-sm'])?>
                      <?=anchor('panel/kelola/petugas/petugas/delete/'.$user->id_user, 'Delete',
                                            ['class' => 'btn btn-danger btn-sm',
                                            'onclick' => 'return confirm(\'Data Will Be Deleted?\')'] )?></td>

                    </td>
                  </tr>

                  <?php endforeach ?>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">No</th>
                    <th rowspan="1" colspan="1">Nama</th>
                    <th rowspan="1" colspan="1">Email</th>
                    <th rowspan="1" colspan="1">Alamat</th>
                    <th rowspan="1" colspan="1">Action</th></tr>
                  </tfoot>
                </table></div></div><div class="row"></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    