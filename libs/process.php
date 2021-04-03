<?php

    require_once "users.php";
    

    $errors = array();

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
            $db->saveData(TBL_SYSTEM_USERS, "entity_guid='$token', full_name='$name', email='$email', password='$password', xdate='$date', status='$status'");
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

        if (empty($errors)) {
            if ($emailCheck) {
              foreach ($emailCheck as $userInfo) {
                $_SESSION['email'] = $userInfo['email'];
                $_SESSION['entity_guid'] = $userInfo['entity_guid'];
                if (password_verify($password, $userInfo['password'])) {
                    $_SESSION['email']; $_SESSION['entity_guid']; $db->set('login', true);
                    $_SESSION['success-message'] = "You are now lodged in";
                    header("Location: student-profile.php");
                }else {
                    $errors['page-error'] = "Email or password not found !";
                }
              }
            }else {
                $errors['page-error'] = "Email or password not found !";
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
                    $token = $key['entity_guid'];
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
            $db->update(TBL_SYSTEM_USERS, "password='$password_hash'", "entity_guid='$token'");
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
    //          $db->update(TBL_SYSTEM_USERS, "image = ' $target_file'", "entity_guid = $token");
    //      }
    // }

?>