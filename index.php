<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>

<body>
    <div id="form">
        <div class="cont1">
            <div class="heading">
                <h1>Form</h1>
            </div>
            <?php if (isset($_POST['submit'])) {
                if ($_POST['fName'] == "") {
                    echo "First Name is required";
                }
            } ?>
            <form id="mainform" class="form-1" action="submit.php" method="post">
                <p class="ntpp"><label for="fName">First Name
                        <input id="fName" name="fName" type="text" required autocomplete="off">
                    </label>
                </p>
                <p class="ntpp"><label for="lName">Last Name
                        <input id="lName" name="lName" type="text">
                    </label>
                </p>
                <p class="ntpp"><label for="email">Email
                        <input id="email" name="email" type="text">
                    </label>
                </p>

                <p class="ntpp"><label for="passWord">Password
                        <input id="passWord" class="password11" name="password" type="password">
                    </label>
                </p>
                <p class="ntpp">
                    <label for="passWord2">Confirm Password
                        <input id="passWo" class="password22" name="password" type="password">
                    </label>
                </p>
                <p class="opff">
                    <label for="male">Male
                        <input type="radio" for="gender" id="male" name="gender" value="Male">
                    </label>
                    <label for="html">Female
                        <input type="radio" id="female" name="gender" value="HTML">
                    </label>
                </p>
                <p>
                    <label for="movies">Choose A Mind Bending Movie</label>
                    <select id="movies" name="movies">
                        <option value="Inception">Inception</option>
                        <option value="Interstaler">Interstaler</option>
                        <option value="Tenet">Tenet</option>
                        <option value="Avatar">Avatar</option>
                    </select>
                </p>
                <p class="submitbtn">
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>
    </div>
</body>

</html>