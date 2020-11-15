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
        <div class="card" style="width:400px">
           <div class="card-body">
            <h5 class=" text-center my-2">Login Form</h5>
                <div class="card my-4" style="width:auto">
                    <div class="card-body ">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email">
                             
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                         </div>
                        <div class="text-center my-2">
                            <button type="" class="btn btn-primary btn-sm">Login</button>
                        </div>
                      
                        <div class="text-center my-2">
                        <span class=" ">OR</span>
                        </div>
                       
                         <div class="text-center">
                          <a type="" class="btn btn-primary btn-sm" href="create_new_ac.php">Create New Account</a>
                        </div>
                    </form> 
                     
                        
                        
                     </div>
                 </div>
                 
               
            </div>
        </div>
    </div>
</body>
</html>