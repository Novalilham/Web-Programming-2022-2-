<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>
        </div>
        <div class="card-body">
        <!-- <script>
        function hapususer(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script> -->
</head>
<?php
// $username = $this->session->userdata('username');
// if ($username) {
//     echo "<h2>Selamat Datang $username</h2>";
// }
// ?>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Created At</th>
                <th>Last Login</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($user as $user) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $user -> username ?></td>
                <td><?php echo $user -> email ?></td>
                <td><?php echo $user -> created_at ?></td>
                <td><?php echo $user -> last_login ?></td>
                <td><?php echo $user -> status ?></td>
                <td><?php echo $user -> role ?></td>
                <td>
                   
                    &nbsp;
                    <a href=<?php echo "edit/$user->id" ?> 
                    class="btn btn-success">Edit</a>
                    &nbsp;
                    <a href=<?php echo "delete/$user->id"?> 
                    class="btn btn-danger">Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>