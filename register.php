<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="./script/validate.js" defer></script>
</head>
<style>
.container {
    width: 75%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    width: 50%
}
</style>

<body>
    <div class="container">
        <form action="./phpscripts/signup.php" method="POST"  name="registerForm" onsubmit="return validation()">

            <!-- Name Input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Username</label>
                <input type="text" id="name" class="form-control" name="name" onchange="checkSepChar(this)" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters and special charaters are not allowed" required/>
            </div>


            <!-- Phone input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="mobile">Mobile Number</label>
                <input type="number" id="mobile" class="form-control" name="mobile" onchange="validateMobile(this)" required/>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" name="email" onchange="validateEmail(this)" required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="pass">Password</label>
                <input type="password" id="pass" class="form-control" name="pass" onchange="validatePass(this)" required/>
            </div>

            <!-- Confirm Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="passConfirm">Confirm Password</label>
                <input type="password" id="passConfirm" class="form-control" name="passConfirm" oninput="confirmPass(this)" required/>
            </div>
            <div class="form-outline mb-4">
                <span class="passError" style="color:red; text-align:center"></span>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="register" >Sign up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Already Register? <a href="./login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>