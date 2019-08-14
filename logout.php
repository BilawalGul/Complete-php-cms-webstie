<?php include 'include/connect.php';?>
<?php ob_start(); ?>
<?php session_start(); ?>

                <?php
                    
                        $_SESSION['firstname']=null;
                        $_SESSION['lastname']=null;
                        $_SESSION['username']=null;
                        $_SESSION['email']=null;
                        $_SESSION['password']=null;
                        $_SESSION['user_role']=null;
                        $_SESSION['image']=null;

                      
                        header('Location:../itsmain');    
                ?>
















