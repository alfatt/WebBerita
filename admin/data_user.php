      <?php include'header.php'?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Register New User</h4>
                      <form class="forms-sample" action="proses/proses_input.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">No HP</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="08xxxxxx" name="no_hp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Pilih User</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="level">
                            <option value="admin">Admin</option>
                            <option value="operator">Operator</option>
                            <option value="autor">Autor</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
                        <button class="btn btn-light" type="reset">Reset</button>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Pengguna</h4>
                  <!-- <p class="card-description">
                    Add class
                    <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped data">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>No HP</th>
                          <th>Level</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $show_query=mysqli_query($koneksi, "select * from user");
                          if(mysqli_num_rows($show_query)==0){
                            echo'<tr><td>Tidak Ada Data</td></tr>';
                          }else{
                            $no=1;
                            while($data=mysqli_fetch_assoc($show_query)){
                        ?>
                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><?php echo $data['no_hp'] ?></td>
                                <td><?php echo $data['level'] ?></td>
                                <td>
                                  <a href="edit_user.php?id=<?php echo $data['id_user'] ?>" class="btn btn-warning">Edit</a>
                                  <a href="" class="btn btn-info">View</a>
                                  <a href="proses/proses_hapus.php?id=<?php echo $data['id_user'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                                </td>
                              </tr>
                        <?php
                              $no++;
                            }
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
                
              </div>
            </div>
            
          
          </div>
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      <?php include'footer.php'?>
