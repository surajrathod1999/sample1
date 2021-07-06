<html>
    <head>
        <title>Intern Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

    
    </head>

<body class="container" style="background-image: url(img.jpg);">

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    

    <form name="myForm" action="./controller.php" method="POST" >
      <div class="col-sm-12"> 
      <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Intern Details</h1>
    </div> 

            <div class="form-group row">
              <div class="col-sm-1"></div>
                <label class="col-sm-3" for="name"> Name:</label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
            </div>
            
            <div class="form-group row">
              <div class="col-sm-1"></div>
                <label class="col-sm-3 " for="inputEmail">Email Address:</label>
                <div class="col-sm-7">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-1"></div>
                <label class="col-sm-3 " for="phoneNumber">Mobile Number:</label>
                <div class="col-sm-7">
                    <input type="number" name="phone" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
                </div>
            </div>
                   
        

            <div class="form-group row">
              <div class="col-sm-1"></div>
              <label class="col-sm-3 " for="address">Department:</label>
              <div class="col-sm-7">            
                <select class="browser-default custom-select" name="deptType" >
                    <option value="0" disabled selected>Departments</option>
                    <?php 
                      include_once"config.php";
                      $sql=mysqli_query($conn,"SELECT * FROM d_details");
                      
                        while($row=mysqli_fetch_assoc($sql)){
                          
                      
                      ?>
                    <option value="<?=$row['id']?>" required><?=$row['d_name']?></option>
                    <?php
                        }
                    ?>
                  </select>

                  
              </div>
              
          </div>

        
            
            <div class="form-group row">
              <div class="col-sm-1"></div>
                <div class="col-sm-8 ">
                    <input type="submit" class="btn btn-dark" value="Submit">
                  </div>
                  <div class="col-sm-3">
                    <input type="reset" class="btn btn-dark" value="Reset">
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-9 offset-sm-3">
                 
              </div>
          </div>

      </form>
    
      </div>
      </div>
</body>

</html>
