<?php
include 'koneksi.php';
$query = 'SELECT * FROM user';
$result = mysqli_query($konek, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<table class=\"table\" cellpadding = \"12px\"><tr> 
    <th>Id</th>
    <th>Nama User</th>
    <th>Username </th>
    <th>Password</th>
    <th>No Hp</th>
    <th>Saldo </th>
    <th>Role</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>". $row["Id_User"]. "</td>
        <td>". $row["nama_user"]. "</td>
        <td>". $row["Username"]. "</td>
        <td>". $row["Password"]. "</td>
        <td>". $row["No_Hp"]. "</td>
        <td>". $row["Saldo"]. "</td>
        <td>". $row["roles"]. "</td></tr>";
    }
    echo "</table>";
   
}
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <style>
        * { font-family: Arial, Helvetica, sans-serif;}
        table {
            border-collapse: collapse;
            border: 2px black solid;
            width: 60%;
        }
        @media only screen and (max-width:768px) {
            table{
                width: 100%;
              
            }
            tr th {
                background-color: red;
            }
        }


        tr th {
            background-color: blue;
            color: white;
            border: solid black 2px;
        }
        tr td {
            border: solid black 2px;
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
</body>
</html>