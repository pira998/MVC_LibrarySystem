<?php
require APPROOT . '/views/includes/student_header.php';
?>


<div style="margin:80px 10px">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">book</i>
                </div>
                <p class="card-category">Total Books</p>
                <h3 class="card-title"><?php echo $total_books; ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">book</i>
                </div>
                <p class="card-category">Issued Books</p>
                <h3 class="card-title"><?php echo $total_books - $available_books; ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Students</p>
                <h3 class="card-title"><?php echo $total_students; ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">

                </div>
            </div>
        </div>
    </div>
</div>




<?php
require APPROOT . '/views/includes/student_footer.php';
?>