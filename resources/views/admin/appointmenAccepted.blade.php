<!DOCTYPE html>
<html>
<head>
    <title>Appointment Accepted</title>
</head>
<body>
    <h2>Appointment Accepted</h2>
    <p>Dear {{ $appointment->user->name }},</p>
    <p>We are pleased to inform you that your appointment has been accepted. Here are the details:</p>
    <ul>
        <li><strong>Service:</strong> {{ $appointment->service->name }}</li>
        <li><strong>Date:</strong> {{ $appointment->bookDate }}</li>
        <li><strong>Time:</strong> {{ $appointment->bookTime }}</li>
    </ul>
    <p>Thank you for choosing our services. We look forward to seeing you!</p>
    <p>Best regards,<br>Our Website Team</p>
</body>
</html>
