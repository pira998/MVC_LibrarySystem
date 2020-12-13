<?php
require APPROOT . '/views/includes/student_header.php';
?>

<div class="content">
        <div class="container-fluid">
            <center>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search Book"  name="Search_Book" onkeyup="myFunction(0,'Search_Book')">
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Book </h4>
                                <p class="card-category"> Info </p>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="myTable">
                                        <thead class=" text-primary">
                                        <th>Book_name</th>
                                        <th>Time</th>
                                        <th>Cancel</th>
                                        </thead>
                                        <tbody>

                                        <tr>
                                        <?php while ($m = mysqli_fetch_array($array)) :
                                            ?>

                                            <td><?php echo $m['book_id'] ;?></td>
                                            <td><?php echo date('d/m/Y ', $m['requested_time']) ?></td>

                                            <td><a href="cancel.php?id=<?php echo $m[0]; ?>"><button class="btn btn-danger">Cancel</button></a>
                                            </td>

                                        </tr>
                                        <?php endwhile; ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </center>
        </div>
    </div>
    <script>
        function myFunction(number,myInput) {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(myInput);
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[number];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>



<?php
require APPROOT . '/views/includes/student_footer.php';
?>

