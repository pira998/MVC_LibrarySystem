<?php
require APPROOT . '/views/includes/student_header.php';
?>


<div class="content">
    <div class="container-fluid">
        <form method="post">
            <input type="submit" class="btn btn-primary btn-round" name="refresh" value="Refresh">

            </input>
        </form>




        <?php

        $query = "";
        if (isset($_POST['refresh'])) {

            $query =  $student->receiveMessage();
        }
        ?>

        <table class="table table-inbox table-hover">
            <tbody>


                <?php
                while ($message=mysqli_fetch_array($query)) {
                ?>

                    <tr class="unread">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message  dont-show"><?php echo $message['subject'] ?></td>
                        <td class="view-message "><?php echo $message['body'] ?></td>
                        <td class="view-message "><?php echo date('d/m/Y', $message['created_time']) ?></td>
                    </tr>
                <?php } ?>

                <br>
            </tbody>
        </table>


<?php
require APPROOT . '/views/includes/student_footer.php';
?>

