<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Form Submission Successful</h1>
    </header>
    <main>
        <h2>Submitted Information</h2>
        <ul>
            <li><strong>Full Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li><strong>Phone Number:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></li>
            <li><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></li>
            <li><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></li>
            <li><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($_POST['address'])); ?></li>
        </ul>
        <a href="index.html">Go Back</a>
    </main>
    <footer>
        <p>&copy; 2024 Registration Application. All Rights Reserved.</p>
    </footer>
</body>
</html>
