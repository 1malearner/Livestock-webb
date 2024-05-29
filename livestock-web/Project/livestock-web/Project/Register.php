<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Register</header>
            <form action="" method="post" id="registrationForm">  
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input class="form-control" type="text" name="firstName" id="firstName" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="middleInitial">Middle Initial</label>
                    <input class="form-control" type="text" name="middleInitial" id="middleInitial" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input class="form-control" type="text" name="lastName" id="lastName" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="emailAdd">Email Address</label>
                    <input class="form-control" type="email" name="emailAdd" id="emailAdd" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="courseEnrolled">Enrolled Course</label>
                    <select class="form-control" name="courseEnrolled" id="courseEnrolled" required> 
                        <option value="">choose enrolled course</option>
                        <option value=1>Customer</option>
                        <option value=2>Seller</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" autocomplete="off" required pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
                <div class="links">
                    Already have an account? <a href="LoginPage.php">Login Now</a>
                </div>
        </form>
        <script>
            document.getElementById('registrationForm').addEventListener('submit', function(event) {
                var studentNumberInput = document.getElementById('studentNumber').value;
                var studentNumberRegex = /^\d{4}-\d{6}$/;

                if (!studentNumberRegex.test(studentNumberInput)) {
                    event.preventDefault();
                    document.getElementById('studentNumberError').textContent = 'Student number must be in the format (YYYY-######)';
                } else {
                    document.getElementById('studentNumberError').textContent = '';
                }
            });
        </script>

    </div>
</body>
</html>
