<?php
require APPROOT . '/views/includes/student_header.php';
$student= $data['info'];
?>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" action="/student/profile/update/<?php echo $student->id; ?> ">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Id (disabled)</label>
                                        <input type="text" class="form-control" name="id" value="<?php echo $student->id; ?> " disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIC(disabled)</label>
                                        <input type="text" class="form-control" name="nic" value="<?php echo $student->nic; ?> " disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $student->username; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $student->email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" value="<?php echo $student->firstname; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $student->lastname; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" class="form-control" name="address" value="<?php echo $student->address; ?>">
                                    </div>
                                </div>
                            </div>

                            
                            <input type="submit" class="btn btn-primary pull-right" name="Update" value="Update"></input>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="/public/assets/img/faces/marc.jpeg" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Student Name</h6>
                        <h4 class="card-title"><?php echo $student->firstname ?></h4>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require APPROOT . '/views/includes/student_footer.php';
?>

