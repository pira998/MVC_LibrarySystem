<?php
require APPROOT . '/views/includes/header.php';
?>
<div class="content">
    <div class="container-fluid">

        <input type="submit" class="btn btn-primary btn-round" name="refresh" value="Refresh"></input>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Borrowed Books</h4>
                        <p class="card-category"> Info </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>User Id</th>
                                    <th>Book Id</th>
                                    <th>Borrowed date</th>
                                    <th>Returned Date</th>
                                    

                                </thead>
                                <tbody>

                                    <tr>
                                        <?php foreach($data['borrowedBooks'] as $borrowedBooks):  ?>


                                            <td><?php echo $borrowedBooks->user_id; ?></td>
                                            <td><?php echo $borrowedBooks->book_id; ?></td>
                                            <td><?php echo date('d/m/Y', $borrowedBooks->borrowed_date); ?></td>
<td><?php echo date('d/m/Y', $borrowedBooks->due_date); ?></td>

                                            

                                    </tr>
                                <?php endforeach ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<?php
require APPROOT . '/views/includes/footer.php';
?>