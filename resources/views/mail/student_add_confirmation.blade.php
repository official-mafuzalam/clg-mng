<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Confirmation</title>
</head>

<body>
    <h1>Admission Confirmation</h1>
    <p>Thank you for your Admission.</p>
    <p>Your Admission has been successfully processed with the following details:</p>

    <ul>
        <li>Student ID: {{ $user_id }}</li>
        <li>Student Name: {{ $student_name }}</li>
        <li>Technology: {{ $technology }}</li>
        <li>Semester: {{ $current_semester }}</li>
        <li>Gender: {{ $student_gender }}</li>
        <li>Collage ID: {{ $clg_id }}</li>
        <li>Roll No: {{ $roll_no }}</li>
        <li>Mobile Number: {{ $student_mobile }}</li>
        <li>Email: {{ $student_email }}</li>
        <!-- Add more details here -->
    </ul>

    <p>Use your Student ID for login mobile app or contact your class teacher.</p>

    <br>
    <br>
    <br>
    <p>If you have any questions or concerns, please feel free to contact us.</p>
    <p>Mobile: 01621833839</p>

    <p>Best regards,</p>
    <p>Best Politechnic Institute</p>
</body>

</html>
