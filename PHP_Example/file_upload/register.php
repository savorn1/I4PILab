<!DOCTYPE html>
<html>
<head>
    <title>Register New Account</title>
</head>
<body>
<h1> Register New Account </h1>
<form enctype="multipart/form-data" name="registerForm" method="post" action="processRegister.php">
    <input type="text" name="username"  placeholder="Username" required="required"> <br>
    <input type="password" name="password"  placeholder="Password" required="required"> <br/>
    Sex:
    <select name="sex">
        <option value="F">Female</option>
        <option value="M">Male</option>
    </select>
    <br>
    Photo:
    <input type="file" name="photo"><br/>
    <button type="submit">Register</button>
</form>
</body>
</html>