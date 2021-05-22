<?php
     if(isset($_POST['uname']))
          $username=$_POST['uname'];
          if(strlen($username)!=4)
               {
                    echo "false";
               }
         else{
              echo "Tree";
         }
?>