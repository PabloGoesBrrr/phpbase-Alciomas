<?php
include 'connect.php';
include'checklogin.php';
?>
<table border='1'>
    <tr>
        <th>
            Name
        </th>
        <th>
            Username
        </th>
    </tr>

<?php
$sq="select * from city";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idCity']?>
        </td>
        <td>
            <?php echo $f['nameCity']?>
        </td>
    </tr>
    <?php
}
?>