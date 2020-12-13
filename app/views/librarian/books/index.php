<?php
require APPROOT . '/views/includes/header.php';
?>
<div class="content">
    <center>
        <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">
            Add Book
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
                        <form class="form" method="post" action="/librarian/books/create" enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">face</i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ISBN" name="ISBN" required="">
                                    </div>
                                </div>
                                <div class="form-group bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">face</i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Title..." name="title" required>
                                    </div>
                                </div>

                                <div class="form-group bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">perm_identity</i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Subject..." name="subject" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group form-file-upload form-file-multiple">
                                    <div class="input-group">
                                        <button type="file" class="btn btn-fab btn-round btn-primary">
                                            <i class="material-icons">attach_file</i>
                                        </button>
                                        <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                                        <span class="input-group-btn">

                                        </span>
                                    </div>
                                </div> -->
                                <input type="file" name="bb" id="bb">
                                <div class="form-group bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">email</i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email..." name="email" required>
                                    </div>


                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                            </div>
                                            <input type="text" placeholder="Publisher..." class="form-control" name="publisher" required>
                                        </div>
                                    </div>

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">grade</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Languages..." name="language" required>
                                        </div>
                                    </div>

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">room</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Price..." name="price" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Author..." name="author" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Pages..." name="numOfPages" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="PurchaseDate..." name="purchaseDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="PublicationDate..." name="publicationDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Quantity..." name="quantity" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Available..." name="available" required>
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









    <div class="container-fluid">
        <!-- <div class="row"> -->

        <!-- <div class="row"> -->
        <div class="row active-with-click">
  


                <?php foreach($data['books'] as $book): ?>
                <!--  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Indigo">
                        <h2>
                            <span><?php echo $book->title ?></span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                <?php echo $book->author; ?>
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-fluid"" src="/public/assets/img/<?php echo $book->bookImg ?>"> </div> <div class="mc-description">
                                Book Quantity: <?php echo $book->available ?><br> Book Available:<?php echo $book->available ?><br> No of Reservation: 91<br>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Edit
                            </h4>
                            <a href="/librarian/books/bookInfo/<?php echo $book->id; ?>" class="fa fa-fw fa-edit "></a>

                        </div>
                    </article>
                </div>

              
                <?php endforeach; ?>


        </div>

    </div>
</div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
