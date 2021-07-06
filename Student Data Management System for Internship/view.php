<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </head>


    <body >
    <div class="container">
    
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Department</th>
            </tr>
            <?php 
                include_once"config.php";
                $sql=mysqli_query($conn,"SELECT * FROM intern_details");

                while($row=mysqli_fetch_assoc($sql)){
                   

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["name"] ?></td>
                <td><?=$row["email"] ?></td>
                <td><?=$row["phone"] ?></td>  
                <td><?php 
                       $store=$row['department_id'];
                        $sql2=mysqli_query($conn, "SELECT d_name FROM d_details WHERE id='$store'");
                        $dept=mysqli_fetch_assoc($sql2);
                        echo $dept['d_name'];
                    ?>
                </td>
            </tr>
            <?php 
                }
            ?>
           
        </tbody>
    </table>
    
    </div>
    </body>

</html>