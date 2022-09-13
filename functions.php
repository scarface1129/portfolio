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
if (isset($_POST['submit'])) {
    $_SESSION['contact_email'] = $_POST['email'];
    $_SESSION['contact_name'] = $_POST['name'];
    $_SESSION['contact_subject'] = $_POST['subject'];
    $_SESSION['contact_phone'] = $_POST['phone'];
    $_SESSION['contact_message'] = $_POST['message'];
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email Field Is Required';
        header("Location: index.php?error=Email Field Is Required");
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] =  "your input is not in email format See what You Entered: $email";
            header("Location: index.php?error=your input is not in email format See what You Entered: $email");
        }
    }
    if (empty($_POST['name'])) {
        $errors['name'] ='Name Field Is Required';
        header("Location: index.php?error=Name Field Is Required");
    }else{
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name'] = "The Name Field Must contain alphabets only";
            header("Location: index.php?error=The Name Field Must contain alphabets only");
        }
    }
    if (empty($_POST['subject'])) {
        $errors['subject'] = 'subject Field Is Required';
        header("Location: index.php?error=subject Field Is Required");
    }else{
        $subject = $_POST['subject'];
    }
    if (empty($_POST['message'])) {
        $errors['message'] = 'message Field Is Required';
        header("Location: index.php?error=message Field Is Required");
    }else{
        $message = $_POST['message'];
    }
        if(empty($_POST['phone'])){
            $errors['phone'] = '';
        }else{
            $phone = $_POST['phone'];
            if(!preg_match('/((^090)([23589]))|((^070)([1-9]))|((^080)([2-9]))|((^081)([0-9]))(\d{7})/',$phone)){
                $errors['phone'] = "Enter a Valid phone Number";
                header("Location: index.php?error=Enter a Valid phone Number");
            }
        }

        $header = $email;
        $to = $profile[0]['email'];

            if(mail($to, $subject, $message, $header)){
                header("Location: index.php?message=Mail sent successful");
                exit();
            } else{
                header("Location: index.php?error=Mail-not-sent");
                exit();
            }
    }else{
        $_SESSION['contact_email'] = '';
        $_SESSION['contact_name'] = '';
        $_SESSION['contact_subject'] = '';
        $_SESSION['contact_phone'] = '';
        $_SESSION['contact_message'] = '';
    }

    
?>


