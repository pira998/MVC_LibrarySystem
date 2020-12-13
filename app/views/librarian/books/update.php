<?php
require APPROOT . '/views/includes/header.php';
$book = $data['info'];
?>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Book Detail</h4>
                        <p class="card-category">More information</p>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" action='/librarian/books/update/<?php echo $book->id; ?>'>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">id (disabled)</label>
                                        <input type="text" class="form-control" name="id" value="<?php echo $book->id; ?> " disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Title)</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $book->title; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(ISBN)</label>
                                        <input type="text" class="form-control" name="ISBN" value="<?php echo $book->ISBN; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Subject)</label>
                                        <input type="text" class="form-control" name="subject" value="<?php echo $book->subject; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Publisher)</label>
                                        <input type="text" class="form-control" name="publisher" value="<?php echo $book->publisher; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Language)</label>
                                        <input type="text" class="form-control" name="language" value="<?php echo $book->language; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Price)</label>
                                        <input type="text" class="form-control" name="price" value="<?php echo $book->price; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Author)</label>
                                        <input type="text" class="form-control" name="author" value="<?php echo $book->author; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Pages)</label>
                                        <input type="text" class="form-control" name="numOfPages" value="<?php echo $book->numOfPages; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Purchase Date)</label>
                                        <input type="text" class="form-control" name="purchaseDate" value="<?php echo $book->purchaseDate; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Publication Date)</label>
                                        <input type="text" class="form-control" name="publicationDate" value="<?php echo $book->publicationDate; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Quantity)</label>
                                        <input type="text" class="form-control" name="quantity" value="<?php echo $book->quantity; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(Available)</label>
                                        <input type="text" class="form-control" name="available" value="<?php echo $book->available; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">(who added)</label>
                                        <input type="text" class="form-control" name="librarian" value="<?php echo $book->librarian; ?>">
                                    </div>
                                </div>
                            </div>
                       

                            <input type="submit" class="btn btn-primary pull-right" name="Update" value="Update"></input>
                            <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            </form>

            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="/public/assets/img/<?php echo $book->bookImg ?>" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray"><?php echo $book->title; ?></h6>
                        <h4 class="card-title"><?php echo $book->author; ?></h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>

                        <a href="/librarian/books/delete/<?php echo $book->id; ?>"><button class="btn btn-primary pull-right" >Delete</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require APPROOT . '/views/includes/footer.php';
?>