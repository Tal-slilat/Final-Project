<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Cute Monsters</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="firstPage.htm">
            <img src="icon/icon1.png" alt="logo" style="width:30px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </nav>

    <h1 class="text-center">Welcome to Cute Monsters</h1>


    <h3 class="text-center" style="font-family: 'Balsamiq Sans', cursive;"> registration of dog trainer:</h2>
        <form method="POST" action="server.php" enctype="multipart/form-data">
            <table id="tb-SU">
                <tr>
                    <td> First Name:</td>
                    <td><input id="sign_in" type="text" name="FN" placeholder="First Name"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input id="sign_in" type="text" name="LN" placeholder="Last Name"></td>
                </tr>
                <tr>
                    <td>Dog Kind:</td>
                    <td><input id="sign_in" type="text" name="DK" placeholder="Dog Kind"></td>
                </tr>
                <tr>
                    <td>Dog Name</td>
                    <td><input id="sign_in" type="text" name="DN" placeholder="Dog Name"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input id="sign_in" type="email" name="e-mail" placeholder="E-mail"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input id="sign_in" type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Verify Password:</td>
                    <td><input id="sign_in" type="password" name="VP" placeholder="Verify Password"></td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td>
                        <input type="file" name="load_user_file">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="reg_id" id="reg_id" value="register">
                    </td>
                </tr>
            </table>
        </form>


        <footer class="footer">
            by Tal Slilat and Baruch Lebovitz
        </footer>
</body>

</html>