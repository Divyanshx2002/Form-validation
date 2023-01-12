<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "learn";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO general (firstName, lastName, email, password, gender, movies) VALUES ('" . $_POST['fName'] . "', '" . $_POST['lName'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "',  '" . $_POST['gender'] . "', '" . $_POST['movies'] . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Movies</th>
        </tr>
        <tr>
            <td class="sdfsdf"><?php echo $_POST['fName']; ?> </td>
            <td><?php echo $_POST['lName']; ?></td>
            <td><?php echo $_POST['email']; ?></td>
            <td><?php echo $_POST['gender']; ?></td>
            <td><?php echo $_POST['movies']; ?></td>
        </tr>
    </table>
<?php } ?>