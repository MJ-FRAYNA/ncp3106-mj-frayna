<?php

$username = $_POST['uname'];
$password = $_POST['password'];

    if(isset($_POST['uname'])){
        if($username == 'admin' and $password == 'password'){
           sleep(2);
            header ('Location:Bio note.html');
        }else{
            echo '<script>
                       alert ("Username/Password Mismatch")
                    </script>';
            echo '<script>
                        window.history.go(-1)  
                    </script>';   
                  
        }
    }
?>