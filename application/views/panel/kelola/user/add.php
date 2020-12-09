 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User Data</h1>
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

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div><?= validation_errors() ?></div>

              <?= form_open('panel/kelola/user/user/create', ['class'=>'form-horizontal']) ?>
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="name">Email address</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Re-Type Password</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputHandphone">No Handphone</label>
                    <input type="number" class="form-control" id="hp" name="hp" placeholder="No Handphone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Data</button>
                </div>
               <?= form_close() ?>
            </div>
            <!-- /.card -->


          </div>
        
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->