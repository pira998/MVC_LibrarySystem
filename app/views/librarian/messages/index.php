<?php
require APPROOT . '/views/includes/header.php';
?>


<div class="content">
    <div class="container-fluid">
        <center>
            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">
                Compose
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form" method="post" action="/librarian/messages/create">

                                <div class="card-body">

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">face</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Subject..." name="subject" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">face</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Body..." name="body" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="create" value="Send"></input>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </center>
       
        <table class="table table-inbox table-hover">
            <tbody>
                <tr class="unread">
                    <th class="view-message ">No</th>
                    <th class="view-message  dont-show">Subject</th>
                    <th class="view-message ">Body</th>
                    <th class="view-message ">Send Date</th>

                </tr>

                 <?php foreach($data['messages'] as $message): ?>

                    <tr class="unread">
                        <td class="view-message  dont-show"><?php echo $message->id ?></td>
                        <td class="view-message  dont-show"><?php echo $message->subject ?></td>
                        <td class="view-message "><?php echo $message->body ?></td>
                        <td class="view-message "><?php echo date('d/m/Y', $message->created_time) ?></td>
                    </tr>
                <?php endforeach ?>

                <br>
            </tbody>
        </table>




<?php
require APPROOT . '/views/includes/footer.php';
?>