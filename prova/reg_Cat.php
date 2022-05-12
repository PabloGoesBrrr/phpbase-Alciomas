<?php
include 'connect.php';
if(isset($_POST['sub'])){

    $Cat=$_POST['categoria'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into categoria(nomeCategoria)value('$t','$Cat',)";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Categoria
                        <input type="categoria" name="categoria">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                    <td>
                    <a href="login.php">Login</a>
                    </td>
                </tr>
            </table>
    </body>
</html>