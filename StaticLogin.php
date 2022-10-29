<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Static Login</title>
    </head>
    <body> 
     <!----Authorized User Account to Sign in------>
     <div class="container my-5" style="width: 370px;"  >   
        <?php
                    $usersAccount = array(
                            array(
                                'UserType' => 'Admin',
                                'Username' => 'admin',
                                'Password' => 'Pass1234'
                            ),
                            array(
                                'UserType' => 'Admin',
                                'Username' => 'renmark',
                                'Password' => 'Pogi1234' 
                            ),
                            array(
                                'UserType' =>'Content Manager',
                                'Username' => 'pepito',
                                'Password' => 'manaloto'  
                            ),
                            array(
                                'UserType' => 'Content Manager',
                                'Username' => 'juan',
                                'Password' => 'delacruz'   
                            ),
                            array(
                                'UserType' => 'System User',
                                'Username' => 'pedro',
                                'Password' => 'penduko'
                            )    
                    );

                    if (isset($_POST['Signin'])) {
                        $user = $_POST['userPosition'];
                        $name = $_POST['userName'];
                        $password = $_POST['userPassword'];
                    
                        if (($user == $usersAccount[0]['UserType']) && ($name == $usersAccount[0]['Username']) && ($password == $usersAccount[0]['Password']) ){
                            echo '<div class="alert alert-success" role="alert" class="sticky-top">Welcome to the System: Admin
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>';
                        }
                        elseif (($user == $usersAccount[1]['UserType']) && ($name == $usersAccount[1]['Username']) && ($password == $usersAccount[1]['Password']) ){
                            echo '<div class="alert alert-success" role="alert">Welcome to the System: Renmark
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" > <span aria-hidden="true">&times;</span></button>
                            </div>';
                        }
                        elseif (($user == $usersAccount[2]['UserType']) && ($name == $usersAccount[2]['Username']) && ($password == $usersAccount[2]['Password']) ){
                            echo '<div class="alert alert-success" role="alert">Welcome to the System: Pepito
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>';
                        }
                        elseif (($user == $usersAccount[3]['UserType']) && ($name == $usersAccount[3]['Username']) && ($password == $usersAccount[3]['Password']) ){
                            echo '<div class="alert alert-success" role="alert">Welcome to the System: Juan
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>';
                        }
                        elseif (($user == $usersAccount[4]['UserType']) && ($name == $usersAccount[4]['Username']) && ($password == $usersAccount[4]['Password']) ){
                            echo '<div class="alert alert-success" role="alert"> Welcome to the System: Pedro
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>';
                        }
                        else{
                            echo '<div class="alert alert-danger" role="alert" class="sticky-top" > Invalid Username/Password  
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> 
                                  </div>';
                            }
                    }  
        ?>
    </div>
                                       
        <div class="container">
            <div class="card card-container">
                <img src="avatar_2x.png" class="profile-img-card">

                 <!----Form for User Sign in------>
                <form class="form-signin" method="post">
                     <!----Selection for User Position------>
                    <span class="reauth-email"></span>
                    <select name="userPosition"  id="userPosition" class="form-control"  required autofocus >
                        <option value="Admin">Admin</option>
                        <option value="Content Manager">Content Manager</option>
                        <option value="System User">System User</option>
                    </select>
                    <br>
                     <!----Input Field for User Name & Password------>
                    <input type="text" name="userName" id="userName" class="form-control" placeholder="User Name" required >
                    <input type="password"  name="userPassword" id="userPassword" class="form-control" placeholder="Password" required>
                     <!----Button for Sign In------>
                    <button class="btn btn-primary btn-lg btn-lg btn-signin" type="submit" name="Signin">Sign in</button>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>