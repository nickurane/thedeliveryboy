<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'nav.php';
    include 'links.php';
    ?>
</head>
<body>
<div class="container my-5 center">
        <div class="card" style="width:800px">
           <div class="card-body">
            <h5 class=" text-center my-2">Create New Account</h5>
                <div class="card my-4" style="width:auto">
                    <div class="card-body ">
                    <form>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Phone</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email_id">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Password</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Confirm Password</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter confirm Password ">
                     </div>
                     <div class="form-group mx-3">
                        
                        <input type="radio" id="male" name="gender">
                        <label for="male">Male</label>
                        <br>
                      
                        <input type="radio" id="female" name="gender">
                        <label for="female">Female</label>
                       
                     </div>
                     <div class="form-group">
                     <label for="address">Address</label>
                             <textarea class="form-control" id="address" aria-label="With textarea"></textarea>
                    </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">User -id</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                    
                       
                        <div class="text-center my-2">
                            <button type="submit" class="btn btn-primary btn-sm">submit</button>
                        </div>
                      
                      
                    </form> 
                     
                        
                        
                     </div>
                 </div>
                 
               
            </div>
        </div>
    </div>
    
</body>
</html>