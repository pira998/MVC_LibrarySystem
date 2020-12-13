<?php
require APPROOT . '/views/includes/header.php';
?>
<div class="content">
    <div class="container-fluid">
        <center>
            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">
                Add student
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form" method="post" action="/librarian/students/create">

                                <div class="card-body">

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">face</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name..." name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">face</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="LastName..." name="lastname" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">perm_identity</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="UserName..." name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">email</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email..." name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                            </div>
                                            <input type="password" placeholder="Password..." class="form-control" name="pass" required>
                                        </div>
                                    </div>

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">grade</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Grade..." name="grade" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">room</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Address..." name="address" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nic..." name="nic" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Registration Number..." name="regis_num" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="create" value="create"></input>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </center>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Student </h4>
                        <p class="card-category"> Info </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Id</th>
                                    
                                    <th>Username</th>
                                    
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Approve</th>
                                    <th>Not Approve</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                      <?php foreach($data['students'] as $student): ?>
                                    <tr>
                                       
                                            <td><?php echo $student->id; ?></td>
                                        
                                            <td id="username"><?php echo $student->username; ?></td>
                                          
                                            <td><?php echo $student->email; ?></td>
                                            <td><?php echo $student->active; ?></td>
                                            <td><a href="/librarian/students/update/<?php echo $student->id; ?>"><button class="btn btn-info">Edit</button></a>
                                            </td>

                                            <td><a href="/librarian/students/approve/<?php echo $student->id ?>"><button class="btn btn-success">Approve</button></a>
                                            </td>
                                            <td><a href="/librarian/students/notApprove/<?php echo $student->id ?>"><button class="btn btn-warning">NotApprove</button></a>
                                            </td>
                                            <td><a href="/librarian/students/delete/<?php echo $student->id ?>"><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>


                                   


                                   

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            if (isset($_POST['create'])) {

                // $new_student = new Student($_POST);

                // $sql = $new_student->createStudent($connection, $_POST);
            }


require APPROOT . '/views/includes/footer.php';