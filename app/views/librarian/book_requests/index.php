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
                        <h4 class="card-title ">Requested Books</h4>
                        <p class="card-category"> Info </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>User Id</th>
                                    <th>Book Name</th>
                                    <th>Requested date</th>
                                    <th>Issue</th>

                                </thead>
                                <tbody>

                                    <tr>
                                        <?php foreach($data['requests'] as $request):  ?>


                                            <td><?php echo $request->user_id; ?></td>
                                            <td><?php echo $request->book_id; ?></td>
                                            <td><?php echo date('d/m/Y', $request->requested_time); ?></td>


                                            <td>
                                                <form method="post" action="/librarian/book_requests/issueByRequest/<?php echo $request->id; ?>">
                                                    <input type="submit" class="btn btn-success" value="Issue" name="Issue"></input>

                                                </form>
                                            </td>

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