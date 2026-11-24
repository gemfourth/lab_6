<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

    <?php
        $name = "Abyana Huda";
        $matricnumber = "CI240012";
        $course = "Bachelor of Software Engineering";
        $yearofstudy = "Year 3";
        $address = "No. 14, Jalan Rinting 8, Taman Rinting"
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricnumber"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearofstudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
        </tr>
    </table>

</body>
</html>