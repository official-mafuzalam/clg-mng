<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Deposit Confirmation</title>
</head>

<body>
    <h1>Your {{ $subject }} Result</h1>
    <p>Thank you for attending exam.</p>

    <ul>
        <li>Student ID: {{ $userId }}</li>
        <li>Roll No: {{ $rollNo }}</li>
        <li>Name: {{ $userName }}</li>
        <li>Semester: {{ $current_semester }}</li>
        <li>Technology: {{ $technology }}</li>
        <li>Subject: {{ $subject }}</li>
        <li>Marks: {{ $marks }}</li>
        <!-- Add more details here -->
    </ul>

    <p>If you have any questions or concerns, please feel free to contact us.</p>

    <p>Best regards,</p>
    <p>Best Politechnic Institute</p>
</body>

</html>
