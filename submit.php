<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = htmlspecialchars($_POST['fullname']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $course = htmlspecialchars($_POST['course']);
  $address = htmlspecialchars($_POST['address']);

  echo "
  <html>
  <head>
    <title>Application Submitted</title>
    <link rel='stylesheet' href='style.css'>
  </head>
  <body>
    <header><h1>Application Submitted Successfully!</h1></header>
    <section class='form-section'>
      <h2>Applicant Details</h2>
      <p><strong>Full Name:</strong> $fullname</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Phone:</strong> $phone</p>
      <p><strong>Gender:</strong> $gender</p>
      <p><strong>Course Applied:</strong> $course</p>
      <p><strong>Address:</strong> $address</p>
      <a href='index.html'><button>Back to Form</button></a>
    </section>
  </body>
  </html>
  ";
}
?>
