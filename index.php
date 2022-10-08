<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>CRUD-login</title>
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
        width: 50%;
        /* background-color: #ffffffe6;
        padding: 2rem 2.5rem;
        border-radius: 25px; */
    }
</style>

<body id="body">
    <div class="container">
        <form action="./login.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4 ">
                <label class="form-label" for="form2Example1">username</label>
                <input type="text" id="form2Example1" class="form-control" name="username" />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" name="pass" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="./register.php">Register</a></p>
            </div>
        </form>

    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.rings.min.js"></script>
    <script>
        VANTA.RINGS({
            el: "#body",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
    </script> -->
</body>

</html>