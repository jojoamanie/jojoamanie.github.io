<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$gender = $_POST['gender'];
// database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into form(name, email, message, gender)value(?,?,?,?"){
        $stmt->bind_param("ssss",$name, $email, $message, $gender);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close()
    }
}
?>