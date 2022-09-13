<?php
include('connection.php');
session_start();


function Profile($conn) {
    $sql = "SELECT * FROM `profile`";
    $result = mysqli_query($conn, $sql);
    $profile = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if($profile){
        return $profile[0];
    }else{
        return null;
    }
    return $profile[0];
    exit;
}

function Projects($conn){
    $sql = "SELECT * FROM `projects`";
    $result = mysqli_query($conn, $sql);
    $project = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($project){
        return $project;
    }else{
        return null;
    }
}

function Education($conn){
    $sql = "SELECT * FROM `education`";
    $result = mysqli_query($conn, $sql);
    $education = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($education){
        return $education;
    }else{
        return null;
    }
}

function Experience($conn){
    $sql = "SELECT * FROM `experience`";
    $result = mysqli_query($conn, $sql);
    $experience = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if($experience){
        return $experience;
    }else{
        return null;
    }
}
function Skills($conn){
    $sql = "SELECT * FROM `professional_skills`";
    $result = mysqli_query($conn, $sql);
    $skills = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($skills){
        return $skills;
    }else{
        return null;
    }
}
function Interview($conn){
    $sql = "SELECT * FROM `interviews`";
    $result = mysqli_query($conn, $sql);
    $interviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($interviews){
        return $interviews;
    }else{
        return null;
    }
}
function Testimonies($conn){
    $sql = "SELECT * FROM `testimonies`";
    $result = mysqli_query($conn, $sql);
    $testimonies = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($testimonies){
        return $testimonies;
    }else{
        return null;
    }
}


$errors = ['email'=> '', 'name'=> '', 'phone'=>'', 'subject' =>'', 'message'=> ''];
$Errorcount = 0;
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $values = ['email'=>$email, 'name'=>$name, 'phone'=>$phone, 'subject'=>$subject, 'message'=>$message];
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email Field Is Required';
        $Errorcount++;
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] =  "your input is not in email format See what You Entered: $email";
            $Errorcount++;
        }
    }
    if (empty($_POST['name'])) {
        $errors['name'] ='Name Field Is Required';
        $Errorcount++;
    }else{
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name'] = "The Name Field Must contain alphabets only";
            $Errorcount++;
        }
    }
    if (empty($_POST['subject'])) {
        $errors['subject'] = 'subject Field Is Required';
        $Errorcount++;
    }
    if (empty($_POST['message'])) {
        $errors['message'] = 'message Field Is Required';
        $Errorcount++;
    }
        if(empty($_POST['phone'])){
            $errors['phone'] = '';
        }else{
            if(!preg_match('/((^090)([23589]))|((^070)([1-9]))|((^080)([2-9]))|((^081)([0-9]))(\d{7})/',$phone)){
                $errors['phone'] = "Enter a Valid phone Number";
            }
        }
        // print_r($errors);
        // echo($Errorcount);
        // die();
        if ($Errorcount > 0){
            $_SESSION['errors'] = $errors;
            $_SESSION['values'] = $values;
            header("Location: index.php#contacts");
        }
    
        $header = $email;
        $to = $Profile($conn)['email'];

            if(mail($to, $subject, $message, $header)){
                header("Location: index.php?message=Mail sent successful");
                exit();
            } else{
                header("Location: index.php?error=Mail-not-sent");
                exit();
            }
    }    
?>


