<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $P=$_POST['produto'];
    $Pr=$_POST['preco']
    $Cat=$_POST['categoria'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into produto(nomeProduto,precoProduto,idCategoria)value('$P','$Pr','$Cat')";
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
                        Produto
                        <input type="produto" name="produto">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preco
                        <input type="preco" name="preco">
                    </td>
                </tr>
                <tr>
                    <td>
                        Categoria
                        <select name="categoria">
                            <option value="">-select-</option>
                            <?php
                            $sqlCity = mysqli_query($con, "select * from categoria");

                            while($item = mysqli_fetch_assoc($sqlCat))
                            {
                                $nomeItem = $item["categoria"];
                            
                                echo"
                                <option value=$nomeItem>$nomeItem</option>
                                ";
                            }
                            ?>

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