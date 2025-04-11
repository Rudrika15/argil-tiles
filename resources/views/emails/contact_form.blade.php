<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $userMessage }}</p>


    <hr>
    <pre>
        {{ var_dump(get_defined_vars()) }}
    </pre>
    <p>Thank you for reaching out to us. We will get back to you shortly.</p>

</body>
</html>
