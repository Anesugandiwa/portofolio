<html>
<head>
    <title>New Contact Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Phone:</strong> {{ $contact->phone }}</p>
<p><strong>Subject:</strong> {{ $contact->subject }}</p>
<p><strong>Message:</strong> {{ $contact->message }}</p>
</body>
</html>
