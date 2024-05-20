<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head> 

<body>
    <?php
    $name = "Amira Syazreen Nur binti Shamsudin";
    $matric = "AI220042";
    $course = "Bachelor in Information Technology with Honours";
    $year = "Year 2";
    $address = "Pasir Puteh, Kelantan";
    ?>

<table>
<tr>
<td>Name: </td>
<td><?php echo "$name"; ?></td>
</tr>

<tr>
<td>Matric ID: </td>
<td><?php echo "$matric"; ?></td>
</tr>

<tr>
<td>Course: </td>
<td><?php echo "$course"; ?></td>
</tr>

<tr>
<td>Year of Study: </td>
<td><?php echo "$year"; ?></td>
</tr>

<tr>
<td>Address: </td>
<td><?php echo "$address"; ?></td>
</tr>

</table>
</body>
</html>