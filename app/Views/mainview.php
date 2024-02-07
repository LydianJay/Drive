<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/libs/js/bootstrap.bundle.min.js" ></script>
    
    <style>
        body {
            background-image: linear-gradient(to bottom right, violet, blueviolet);
            background-repeat: no-repeat;
        }
    </style>

</head>
<body>
   

    <nav class="navbar navbar-expand bg-dark">
        
        <div class="container-fluid">
            <a href="" class="navbar-brand text-white">iStorage</a> 
        </div>

        <div class="container" style="justify-content: space-around;">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a href="<?php echo base_url()?>public/" class="nav-link h4 active text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link h4 text-white">About</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url()?>public/Register" class="nav-link h4 text-white">Register</a>
                </li>

                

            </ul>
        </div>

    </nav>

    <div class="container-fluid" style="height: 100vh;">
        <div class="row" >
            <div class="col-6" style="margin-top: 15%;">
                <div class="container" 
                style="padding: 4% 5% 2% 5%; background-color: rgba(114, 22, 102, 0.253); 
                border-radius: 15px; height: 50vh; width: 80%; 
                ">
                    <p class="h2" style="text-align: center; color: rgba(255, 255, 255, 0.767);">iStorage</p>
                    <p class="h4" style="text-align: justify; padding-top: 6%; color: rgba(255, 255, 255, 0.603);">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus totam odio culpa exercitationem possimus nulla. Mollitia, et. Natus vitae veritatis suscipit. Cumque earum accusantium ab sed molestias quaerat harum assumenda!</p>
                </div>
            </div>
            <div class="col-6" style="margin-top: 5%;">
                <div class="container" 
                style="background-color: rgba(29, 15, 82, 0.253); 
                border-radius: 15px; height: 70vh; width: 70%;
                padding-top: 5%; border: 1px solid black;
                ">
                    <p class="h2" style="text-align: center; color: rgba(255, 255, 255, 0.774);">
                        Sign in
                    </p>

                    <form action="<?php echo base_url()?>public/login" method="post">
                        <div class="mb-3 mt-5">
                          <label for="email" class="form-label" style="color: white;">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label" style="color: white;">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        
                        <div class="container justify-content-center mt-5">
                            <div class="container" style="width: fit-content">
                                <button type="submit" class="btn btn-primary">login</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>

</body>
</html>