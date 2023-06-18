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
        <li>Student ID: {{ $userId }}</li>
        <li>Name: {{ $userName }}</li>
        <li>Marks: {{ $marks }}</li>
        <li>Subject: {{ $subject }}</li>
        <li>Semester: {{ $current_semester }}</li>
        <li>Technology: {{ $technology }}</li>
        <li>Roll No: {{ $rollNo }}</li>
        <!-- Add more details here -->
    </ul>

    <p>If you have any questions or concerns, please feel free to contact us.</p>

    <p>Best regards,</p>
    <p>Best Politechnic Institute</p>
</body>

</html>
