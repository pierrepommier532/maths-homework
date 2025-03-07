  <?php

//Get student info from database
$student_name = $_POST['student_name'];
$class = $_POST['class'];
$roll_number = $_POST['roll_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//Add student to the list of students in the database
$students = array(
    $student_name => array('class' => $class, 'roll_number' => $roll_number, 'email' => $email, 'phone' => $phone)
);

//Output the updated list of students
echo json_encode($students);

?>