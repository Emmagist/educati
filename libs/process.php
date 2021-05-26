<?php

    require_once "users.php";
    

    $errors = array();
    $_SESSION = [];

    if (isset($_POST['register_button'])) {
        $error    = '';
        // $val->registerValidation($error);
        $name     = $db->escape($_POST['full_name']);
        $token    = $_POST['token'];
        $email    = $db->escape($_POST['email']);
        $password = $db->escape($_POST['password']);
        $date     = date("yy/m/d");
        $status   = 0;
        $password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($name)) {
            $errors['full-name'] = "Full name is required !";
        }
        if (empty($email)) {
            $errors['email']     = "Email is required";
        }
        if (empty($password)) {
            $errors['password']  = "Pasword is required";
        }
        

        if ($db->validateEmail($email) === false) {
            $errors['invalid-email'] = "Invalid email !";
        }

        if ($user->findUserByEmail($email)) {
            $errors['email-exist'] = "Email already exist";
        }

        // if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        //     $errors['password-preg'] = 'Password must be uppercase, lowercase, number and special characters!';
        // }

        if (empty($errors)) {
            $r = $db->saveData(TBL_STUDENT, "entity_guid = uuid(), user_guid = '$token', surname = '$name', email = '$email', password = '$password', xdate = '$date', status = '$status'");
            $_SESSION['success-message'] = "Registration successful !";
            header("Location: login.php");
        }
    }

    // Login Process
    if (isset($_POST['login_button'])) {
        $email    = $db->escape($_POST['email']);
        $password = $db->escape($_POST['password']);
        $emailCheck     = $user->findUserByEmail($email);
        // var_dump($emailCheck);exit;

        if (empty($email)) {
            $errors['email'] = "Email address is required !";
        }

        if (empty($password)) {
           $errors['password'] = "Password is required !";
        }

        if ($emailCheck > 0) {
            // Set cookie
            // echo $_POST['checkbox'];exit; 
            if (!empty($_POST['checkbox'])) {
                setcookie("email", $email, time() + 3600, '/');
                setcookie("password", $password, time() + 3600, '/');

            }else {
                // Expire cookie
                setcookie("email", "", time() - 3600);
                setcookie("password", "", time() - 3600);
            }

            if (empty($errors)) {
                if ($emailCheck) {
                  foreach ($emailCheck as $userInfo) {
                    $_SESSION['email'] = $userInfo['email'];
                    $_SESSION['entity_guid'] = $userInfo['user_guid'];
                    if (password_verify($password, $userInfo['password'])) {
                        $_SESSION['email']; $_SESSION['entity_guid']; $db->set('login', true);
                        $_SESSION['success-message'] = "You are now lodged in";
                        $redirect = $_REQUEST['page_url'];
                        if ($redirect == '') {
                            header("Location: student-profile.php");
                        }else {
                            header("Location: $redirect");
                        }
                        
                    }else {
                        $errors['page-error'] = " password not found !";
                        header("Location: login.php");
                    }
                  }
                }else {
                    $errors['page-error'] = "Email not found !";
                }
            }
        }
        

        
    }

    // Recover Pasword
    if (isset($_POST['recover_password_button'])) {
        $email = $db->escape($_POST['email']);

        if (empty($email)) {
            $errors['email'] = "Provide a valid email address";
        }

        if (empty($errors)) {
                foreach ($user->findUserByEmail($email) as $key) {
                    $token = $key['user_guid'];
                    if (isset($token)) {
                        $emailVer->sendPasswordResendLink($email,$token);
                        header("Location: reset-message.php");
                        $_SESSION['success-message'] = "Verification link has been sent to your mail address";
                    }
                }
        }
    }

    // Reset Password
    if (isset($_POST['reset_password_button'])) {
        $password = $db->escape($_POST['password']);
        $cPassword = $db->escape($_POST['cPassword']);
        $token = $db->escape($_POST['token']);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if (empty($password)) {
            $errors['password'] = "New Password is required !";
        }

        if (empty($cPassword)) {
            $errors['cpassword'] = "Confirm password !";
        }

        // if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        //     $errors['password-preg'] = 'Password must be uppercase, lowercase, number and special characters!';
        // }

        if ($password != $cPassword) {
            $errors['error-password'] = "Password not match !";
        }

        if (empty($errors)) {
            $db->update(TBL_STUDENT, "password='$password_hash'", "user_guid='$token'");
            $_SESSION['success-message'] = "Password reset successfully";
            header("Location: login.php");
        }
    }

    // if (isset($_POST['upload_profile_button'])) {
    //     $token = $_POST['token'];
    //     $upload_student_img = $_FILES['upload_file'];

    //      // File upload
    //      $target_dir = "upload_student_img/";
    //      $target_file  = $target_dir . basename($_FILES["upload_file"]["name"]);
    //      $uploadOk = 1;
    //      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //      $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
    //      if($check == false) {
    //          $error =  "File is not an image";
    //          $uploadOk = 0;
    //      }
 
    //      if (file_exists($target_file)) {
    //          $error = "Sorry, file already exists.";
    //          $uploadOk = 0;
    //      }
 
    //      if ($_FILES["fileToUpload"]["size"] > 500000) {
    //          $error = "Sorry, your file is too large.";
    //          $uploadOk = 0;
    //      }
 
    //      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //          $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //          $uploadOk = 0;
    //      }
 
    //      if ($uploadOk == 0) {
    //          echo "Sorry, your file was not uploaded.";
    //      }else {
    //          (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file));
    //          $_SESSION['success-message'] = "Profie uploaded successfully";
    //      }
         
    //      if ($uploadOk == 1) {
    //          $db->update(TBL_STUDENT, "image = ' $target_file'", "user_guid = $token");
    //      }
    // }

    if (isset($_POST['download_catalogue_button'])) {
        $name         = $db->escape($_POST['name']);
        $email        = $db->escape($_POST['email']);
        $region       = $db->escape($_POST['region']);
        $token        = $db->escape($_POST['token']);
        $about_us     = $db->escape($_POST['about_us']);
        // $checkbox_yes = $db->escape($_POST['check_yes']);
        // $checkbox_no  = $db->escape($_POST['check_no']);
        $date         = date('yy/m/d');

        if (empty($name)) {
            $errors['name']     = "Enter your full name";
        }
        if (empty($email)) {
            $errors['email']    = "Enter your email address";
        }
        if (empty($region)) {
            $errors['region']   = "Enter your region";
        }
        if (empty($about_us)) {
            $errors['about-us'] = "How did you hear about us?";
        }

        if (empty($errors)) {
            $db->saveData(TBL_CATALOGUE, "full_name = '$name', email = '$email', user_guid = '$token', region = '$region', about_us = '$about_us', email_update = '', xdate = '$date'");
            $_SESSION['success-message'] = "You can now download our online catalogue";
        }
    }

    if (isset($_POST['training_methodology_button'])) {
        $name                 = $db->escape($_POST['name']);
        $email                = $db->escape($_POST['email']);
        $training_type        = $db->escape($_POST['training_type']);
        $token                = $db->escape($_POST['token']);
        $training_methodology = $db->escape($_POST['training_methodology']);
        $message              = $db->escape($_POST['message']);
        $date                 = date('yy/m/d');

        if (empty($name)) {
            $errors['name']                 = "Enter your full name";
        }
        if (empty($email)) {
            $errors['email']                = "Enter your email address";
        }
        if (empty($training_type)) {
            $errors['training_type']        = "Enter type of training";
        }
        if (empty($training_methodology)) {
            $errors['training_methodology'] = "Enter training methodology";
        }
        if (empty($message)) {
           $errors['message']               = "Please leave a message";
        }

        if (empty($errors)) {
            $db->saveData(TBL_MESSAGE, "full_name = '$name', email = '$email', user_guid = '$token', training_type = '$training_type', training_methodology = '$training_methodology', message = '$message', subject = '', xdate = '$date'");
        }
    }

    if (isset($_POST['message_button'])) {
        $name    = $db->escape($_POST['name']);
        $email   = $db->escape($_POST['email']);
        $token   = $db->escape($_POST['token']);
        $subject = $db->escape($_POST['subject']);
        $message = $db->escape($_POST['message']);
        $date    = date('yy/m/d');

        if (empty($name)) {
            $errors['name']    = "Enter your full name";
        }
        if (empty($email)) {
            $errors['email']   = "Enter your email address";
        }
        if (empty($subject)) {
            $errors['subject'] = "Enter a message subject";
        }
        if (empty($message)) {
           $errors['message']  = "Please leave a message";
        }

        if (empty($errors)) {
            $db->saveData(TBL_MESSAGE, "full_name = '$name', email = '$email', user_guid = '$token', training_type = '', training_methodology = '', message = '$message', subject = '$subject', xdate = '$date'");
        }
    }

    if (isset($_POST['contact_button'])) {
        $name    = $db->escape($_POST['name']);
        $email   = $db->escape($_POST['email']);
        $message = $db->escape($_POST['message']);
        $date    = date('yy/m/d');

        if (empty($name)) {
            $errors['name']    = "Enter your full name";
        }
        if (empty($email)) {
            $errors['email']   = "Enter your email address";
        }
        if (empty($message)) {
            $errors['message']  = "Please leave a message";
        }

        if (empty($errors)) {
            $db->saveData(TBL_CONTACT, "full_name = '$name', email = '$email', message = '$message', xdate = '$date', status = ''");
        }
    }

    if (isset($_POST['subscribe_button'])) {
        $email   = $db->escape($_POST['email']);
        $date    = date('yy/m/d');

        if (empty($email)) {
            $errors['email']   = "Enter your email address to subscribe";
        }

        if (empty($errors)) {
            $db->saveData(TBL_CONTACT, "full_name = '', email = '$email', message = '', xdate = '$date', status = 'subscriber'");
        }
    }

    if (isset($_POST['home_subscribe_button'])) {
        $name = $db->escape($_POST['name']);
        $email   = $db->escape($_POST['email']);
        $date    = date('yy/m/d');

        if (empty($email)) {
            $errors['email']   = "Enter your email address to subscribe";
        }

        if (empty($errors)) {
            $db->saveData(TBL_CONTACT, "full_name = '$name', email = '$email', message = '', xdate = '$date', status = 'subscriber'");
        }
    }
    
    if (isset($_POST['add_to_cart_button'])) {
        if (isset($_SESSION['entity_guid'])) {
            $name = $db->escape($_POST['name']);
            $price = $db->escape($_POST['price']);
            $shop_id = $db->escape($_POST['shop_id']);
            $image = $db->escape($_POST['image']);
            $token = $db->escape($_POST['token']);
            $quantity = $db->escape($_POST['quantity']);
            $date = date('yy-m-d');

            $db->saveData(TBL_CART, "user_guid = '$token', class_id = '$shop_id', class = '$name', price = '$price', image = '$image', quantity = '$quantity', xdate='$date'");
            echo "<script>
                    alert('Added Successfully');
                    location.reload();
            </script>";
        }
    }

    if (isset($_POST['upload_profile'])) {
        $token = $db->escape($_POST['token']);
        $current_image = $db->escape($_POST['current_image']);

        // File upload
        $target_dir = "upload_student_img/";
        $target_file  = $target_dir . basename($_FILES["file_upload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
        if($check == false) {
            $error =  "File is not an image";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $error = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["file_upload"]["size"] > 500000) {
            $error = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "jfif") {
            $error = "Sorry, only JPG, JPEG, JFIF, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            $move_file = move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file);
            if($move_file){
                $db->update(TBL_STUDENT, "file_upload = '$target_file'", "user_guid = '$token'");
                unlink($current_image);
                $_SESSION['success-message'] = "Profile uploaded successfully";
                header("Location: student-profile.php");
            }
        }else{
            echo "Your file was not uploaded";
        }


    }

?>