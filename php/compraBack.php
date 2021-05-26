<?php
    //chamando a conexao
    include_once("conect.php");

    //variaveis aonde estou armazenando os dados da compra
    $qtd = $_POST['qtdProduto'];
    $idProd = $_POST['id_produto'];


    //comandos sql
    $sql = "SELECT nome_produto, preco, qtd_estoque FROM Produtos where id_produto = $idProd";
    $sqlExecut = mysqli_query($conn, $sql);

    //vendo o valor do banco de dados
    if(mysqli_num_rows($sqlExecut) > 0){

        while($linha = mysqli_fetch_assoc($sqlExecut)){

            //verificando se tem no estoque
            if($linha['qtd_estoque'] == 0){

                echo"<script>alert('nós não temos o produto!')</script>";

            }else{

                echo"<script>alert('É o produto que você quer?".$linha["nome_produto"]."')</script>";
                
                //convertendo em int
                $qtd = intval($qtd);

                $descQtd = $qtd - 1;

                //limapando o $sqlExecut
                mysqli_free_result($sqlExecut);
                $sql = "UPDATE Produtos set qtd_estoque = $descQtd  where id_produto = $idProd";
                $sqlExecut = mysqli_query($conn, $sql); //executando no banco
                
                if($sqlExecut):

                    echo"<script>alert('comprou com sucesso');</script>";
                    echo"<script>location.href='../index.php';</script>";

                else:

                    echo"<script>alert('Não deu pra comprar, tente na próxima!');</script>";
                
                endif;    

            }

        } 
      }else{

        echo"<script>alert('Não o produto não existe!');</script>";

      }

      mysqli_free_result($sqlExecut);

      mysqli_close($conn);
      
?>