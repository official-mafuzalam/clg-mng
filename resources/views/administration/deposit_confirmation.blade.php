<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Deposit Confirmation</title>
</head>

<body>
    <h1>Deposit Confirmation</h1>
    <p>Thank you for your deposit.</p>
    <p>Your deposit has been successfully processed with the following details:</p>

    <ul>
        <li>Challan No: {{ $random_num }}</li>
        <li>Date: {{ $date }}</li>
        <li>Student ID: {{ $user_id }}</li>
        <li>Student Name: {{ $user_name }}</li>
        <li>Technology: {{ $technology }}</li>
        <li>Semester: {{ $current_semester }}</li>
        <li>Collage ID: {{ $clg_id }}</li>
        <li>Roll No: {{ $roll_no }}</li>
        <li>Mobile Number: {{ $mobile_number }}</li>
        <li>Deposit Name: {{ $deposit_category }}</li>
        <li>Amount: {{ $deposit_amount }}</li>
        <li>Comment: {{ $comment }}</li>
        <!-- Add more details here -->
    </ul>

    <p>If you have any questions or concerns, please feel free to contact us.</p>

    <p>Best regards,</p>
    <p>Best Politechnic Institute</p>
</body>

</html>
