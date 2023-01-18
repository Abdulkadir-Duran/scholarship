<?php
           //personal details
               $student_fullname = $_POST['studentname'];
               $student_email = $_POST['studentmail'];
               $student_phone = $_POST['studentphone'];
               $message = $_POST['message'];
              
              //education background
         

               $email_from = 'info@internationalbursary.com';
               
              
               $select_subject = $_POST['studentname'];
               $to = "int.bursary@gmail.com";
              
               $headers = "  $student_fullname:  $student_email  \r\n";
               $headers = "  $student_fullname \r\n";
           
               $email_body =" Student Name: $student_fullname\n Student Email: $student_email\n  Student Phone:  $student_phone\n 
               Student Message: $message
              ";
               
               mail($to, $select_subject, $email_body, $headers  );


           
              
               header("Location: contact.html ");
           
           
           
               
                

?>