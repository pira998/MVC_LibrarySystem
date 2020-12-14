<?php
require APPROOT . '/views/includes/student_header.php';
?>

<div class="content">
        <div class="container-fluid">
            <center>
                



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Requested Book </h4>
                                <p class="card-category"> Info </p>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="myTable">
                                        <thead class=" text-primary">
                                        <th>Book_Id</th>
                                        <th>Time</th>
                                        <th>Cancel</th>
                                        </thead>
                                        <tbody>

                                        <tr>
                                        <?php foreach($data['requestedBooks'] as $requestedBook):
                                            ?>

                                            <td><?php echo $requestedBook->book_id ;?></td>
                                            <td><?php echo date('d/m/Y ', $requestedBook->requested_time) ;?></td>

                                            <td><a href="/student/requested_books/cancel/<?php echo $requestedBook->id; ?>"><button class="btn btn-danger">Cancel</button></a>
                                            </td>

                                        </tr>
                                        <?php endforeach ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </center>
        </div>
    </div>
    



<?php
require APPROOT . '/views/includes/student_footer.php';
?>

