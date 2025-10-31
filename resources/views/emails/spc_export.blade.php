<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New SPC Export Quote Request</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f8f8f8; padding: 20px;">
    <div style="max-width: 600px; background: #fff; padding: 20px; border-radius: 8px; margin: auto;">
        <h2 style="color: #d1b59a;">New SPC Export Quote Request</h2>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Company Name:</strong> {{ $data['company_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone / WhatsApp:</strong> {{ $data['phone'] }}</p>
        <p><strong>Country:</strong> {{ $data['country'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] ?? 'N/A' }}</p>

        <br>
        <p style="color:#777;">This message was sent from the SPC Export Landing Page.</p>
    </div>
</body>
</html>
