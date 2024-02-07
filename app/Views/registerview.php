<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="<?php echo base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js" ></script>
    <script src="<?php echo base_url() ?>assets/libs/jquery/jquery-3.7.1.min.js" ></script>
    <script src="<?php echo base_url() ?>assets/scripts/formvalidation.js" ></script>
    
    <style>
        body {
            background-image: linear-gradient(to bottom right, violet, blueviolet);
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid justify-content-center">

        <div class="container bg-light" style="margin-top: 10%; width: 50%; border: 1px solid black; border-radius: 15px;">
            <p class="h2 text-center mt-3">Create Account</p>
            
            <form action="<?php echo base_url()?>public/create" method="post" id="rgtForm">
                <div class="mt-2 mb-2">
                    <label class="form-label" for="name">Full Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mt-2 mb-2">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mt-2 mb-2">
                    <label class="form-label" for="pswrd">Password:</label>
                    <input type="text" name="pswrd" id="pswrd" class="form-control">
                </div>
                <div class="mt-2 mb-2">
                    <label class="form-label" for="cfrm">Confirm Password:</label>
                    <input type="text" name="cfrm" id="cfrm" class="form-control">
                </div>
                <div class="container justify-content-center mt-4 mb-4">
                    <div class="container" style="width: fit-content">
                        <button type="submit" class="btn btn-light" style="border: 2px solid rgba(0, 0, 0, 0.397); border-radius: 15px;">login</button>
                    </div>
                </div>

                

            </form>

        </div>



    </div>

    <script src="<?php echo base_url() ?>assets/scripts/formvalidation.js" ></script>
</body>
</html>