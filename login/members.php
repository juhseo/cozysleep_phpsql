<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '1234', 'cozysleep');
        $sql = "select * from member";
        $result = mysqli_query($conn, $sql);
    ?>
    <table>
        <tr>
            <th>번호</th>
            <th>이름</th>
            <th>ID</th>
            <th>Password</th>
            <th>Email</th>
            <th>HomeNumber</th>
            <th>PhoneNumber</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo "<td>{$row['m_no']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['pw']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['Hn']}</td>";
                echo "<td>{$row['Pn']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>