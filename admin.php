<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body id='body' style="margin-top:15%">
    <div id="bg">
        <div>
            <form id="loginForm" name="loginForm">
                <div class="card" style=" margin-top:-15px;background:none !important; border:none;">
                    <!-- <div class="card-body text-center">
                        <img class="card-img-top mb-3" src="images/icon.png" style="width:90px !important; margin-top:150px !important;" height="80" alt="Card image cap">
                        <h3 class="card-title text-uppercase text-warning">Login</h3>
                    </div> -->
                    <ul class="list-group list-group-flush" style="margin-top:-20px;">
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="background:none !important;border:none;">
                                <div class="em">
                                    <input type="email" placeholder="you@example.com" class="form-control mb-2" id="emailLog" name="emailLog" required>
                                    <i class="far fa-envelope-open emIcon"></i> 
                                </div>
                            </li>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="background:none !important; border:none;">
                                <div class="pass">
                                    <input type="password" placeholder="Password..." class="form-control" name="passLog" id="passLog" required >
                                    <i class="far fa-eye passIcon" id="passIcon"></i>
                                </div>
                            </li>
                        </div>
                    </ul>
                    <div class="card-body text-center">
                        <button type="button" class="btn btn-warning text-white" id="logButton" name="logButton">Login<i class="fas fa-sign-in-alt ml-2"></i></button>
                    </div>
                    <div class="col-2 offset-md-4">
                        <div class="alert mt-3 ml-3" id="alertLog" style="width:350px;"></div>
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>

    <script>
        $('#alertLog').fadeOut()
        $('#logButton').click(function (){

            function validateEmail($emailSign) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($emailSign);
            }

            $('#alertLog').removeClass('alert-success').removeClass('alert-danger').removeClass('alert-warning')

            var email = $('#emailLog').val()
            var pass = $('#passLog').val()

            if(email == ""){
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html("Please enter your email address!");
                $("#alertLog").fadeIn(1000).delay(1000).fadeOut(500);
            } else if(!validateEmail(email)){
                $("#alertLog").addClass('alert-warning');
                $("#alertLog").html("Please enter your email address correctly!");
                $("#alertLog").fadeIn(1000).delay(1000).fadeOut(500);
            } else if(pass == ""){
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html("Please set a password!");
                $("#alertLog").fadeIn(1000).delay(1000).fadeOut(500);
            } else {
                $.ajax({
                    url: "loginData.php?task=login&email="+email+"&pass="+pass,
                    success: function (data){
                        if(data.indexOf('success') > -1){
                            $("#alertLog").addClass('alert-success');
							$("#alertLog").html('Correct info.');
							$("#alertLog").fadeIn(500).delay(2000).fadeOut(500);

                            $('#email').val("");
                            $('#pass').val("");
                            var delay = 2000;
                            setTimeout(function(){
                               window.location.replace("adminAdd.php");  }, delay);
                        } else if(data.indexOf('pass') > -1){
                            $("#alertLog").addClass('alert-danger');
							$("#alertLog").html('Password is incorrect');
							$("#alertLog").fadeIn(500).delay(1000).fadeOut(500);

                        } else {
                            $("#alertLog").addClass('alert-danger');
							$("#alertLog").html('Email is incorrect');
							$("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
                        }
                    },
                    error: function (data, err){
                        $("#alertLog").addClass('alert-danger');
                        $("#alertLog").html('Some problem occured. Please try again later.');
                        $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
                    }
                })
            }
        })
    </script>


    <script>
        $('#passIcon').click(function () {
                var elementType = $('#passLog').attr('type');
                console.log(elementType);
                if (elementType == "text") {
                    $('#passLog').attr('type', 'password');
                    $('#passIcon').removeClass('fa-eye-slash');
                    $('#passIcon').addClass('fa-eye');
                } else if (elementType == "password") {
                    $('#passLog').attr('type', 'text');
                    $('#passIcon').removeClass('fa-eye');
                    $('#passIcon').addClass('fa-eye-slash');
                }
            });
    </script>
</body>
</html>