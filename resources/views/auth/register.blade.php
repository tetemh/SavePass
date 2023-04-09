<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <form action="" method="post">
            @csrf
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="re_password" placeholder="Re-Password">
            <input type="submit" value="Register">
        </form>
    </body>
</html>
