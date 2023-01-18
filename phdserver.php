<?php
           //personal details
               $student_fullname = $_POST['studentname'];
               $student_email = $_POST['studentmail'];
               $student_phone = $_POST['studentphone'];
               $gender = $_POST['gender'];
               $field_study = $_POST['field'];
               $nationality = $_POST['country'];
               $status = $_POST['status'];
               $date_birth = $_POST['datebirth'];
               $country_birth = $_POST['countrybirth'];
               $city_birth = $_POST['citybirth'];
               $region_birth = $_POST['regionbirth'];
               $passport_no = $_POST['passportid'];
               $student_address = $_POST['studentaddress'];
               $native_language = $_POST['nativelanguage'];
              //education background
              $institution1 = $_POST['institution'];
              $year_attended = $_POST['yearattended'];
              $year_ended = $_POST['yearended'];
              $certificate_obtained = $_POST['certificateobtained'];
              $institution_2 = $_POST['institution2'];
              $year2_attended= $_POST['year2ettended'];
              $year2_ended = $_POST['year2eended'];
              $certificate2_obtained= $_POST['certificate2obtaioned'];
              $institution_3 = $_POST['institution3'];
              $year3_attended= $_POST['year3attended'];
              $year3_ended= $_POST['year3ended'];
              $certificate3_obtained= $_POST['certificate3obtianed'];
            //family members
            $father_name = $_POST['fathername'];
            $father_email = $_POST['fatheremail'];
            $father_phone=$_POST['fatherphone'];
            $father_age = $_POST['fatherage'];
            $father_address= $_POST['faddess'];
            $father_employment= $_POST['fjob'];
            $mother_name = $_POST['mname'];
            $mother_email = $_POST['memail'];
            $mother_phone=$_POST['mnumber'];
            $mother_age = $_POST['mage'];
            $mother_address= $_POST['maddress'];
            $mother_employment= $_POST['mjob'];
            //required documents
            $secondary_certificate= $_POST['secondary'];
            $English_certificate = $_POST['English'];
            $recommendation_letters=$_POST['recommendation'];
            $notarilized_transcripts= $_POST['transcripts'];
            $non_criminal= $_POST['noncriminal'];
            $passport_file= $_POST['passport'];
            $physical_examination = $_POST['examination'];
            $passport_photo = $_POST['passportphoto'];
            $bank_statement=$_POST['statement'];
            $c_v = $_POST['cv'];
            $study_plan = $_POST['studyplan'];
            $publication_articles = $_POST['publication'];
            
         

               $email_from = 'info@internationalbursary.com';
               
              
               $select_subject = $_POST['studentname'];
               $to = "int.bursary@gmail.com";
              
               $headers = "From:  $student_fullname:  $student_email  \r\n";
               $headers = "From:  $student_fullname \r\n";
           
               $email_body =" Student Full Name: $student_fullname\n Student Email: $student_email\n  Student Phone:  $student_phone\n  
               Gender: $gender\n   Field of Study:  $field_study\n Nationality:   $nationality \n Status:  $status \n
               Date of birth:  $date_birth\n   Country of birth:  $country_birth\n City of birth:   $city_birth\n Region Of birth:  region_birth \n
               Passport Number:  $passport_no\n   Student Address:  $student_address\n Native Language:   $native_language\n Institution:  $institution1 \n
               Year attended:   $year_attended\n  Year Ended:   $year_ended\n Certificate Obtained:    $certificate_obtained\n Institution2: $institution_2 \n
               Year attended:    $year2_attended\n  Year Ended:    $year2_ended \n Certificate Obtained:      $certificate2_obtained\n Institution3:  $institution_3 \n
               Year attended:   $year3_attended\n  Year Ended:   $year3_ended \n Certificate Obtained:      $certificate3_obtained\n 
              Father's Name: $father_name\n  Father's Email:  $father_email \n Father's Phone: $father_phone\n Father's Age:  $father_age\n Father's Address:  $father_address\n Father's Employment:  $father_employment\n
              Mother's Name:  $mother_name\n  Mother's Email:   $mother_email\n Mother's Phone: $mother_phone\n Mother's Age:   $mother_age\n Mother's Address:  $mother_address\n Mother's Employment:   $mother_employment\n
              Master degree certificate:   $secondary_certificate\n  English Certificate:   $English_certificate\n Recommendation letters: $recommendation_letters\n Transcripts:   $notarilized_transcripts\n 
              Non-criminal Record:    $non_criminal\n  Passport:   $ $passport_file\n Physical Examination:  $physical_examination\n Passport photo:    $passport_photo\n Bank Statement:  $bank_statement\n Cv:  $c_v\n
              Study Plan:  $study_plan\n Publication articles:  $publication_articles";
               
               mail($to, $select_subject, $email_body, $headers  );


           
              
               header("Location: PHDapplication.html ");
           
           
           
               
                

?>