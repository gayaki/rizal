<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Mahasiswa ORDER BY id DESC");
?>

<html>
<body>
<a href="add.php">Penambahan Mahasiswa</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Kelas</th> <th>NPM</th> <th>Jurusan</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['Kelas']."</td>";
        echo "<td>".$user_data['NPM']."</td>";
        echo "<td>".$user_data['Jurusan']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html> 