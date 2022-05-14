<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        require_once "header.php" 
        /*
            Forma de comentário em bloco
        */
        
?>

        <!-- Início do formulário de cadastro -->
        <br><br>

        <fieldset>
        <div class="quem-somos">

                <h2>Formulário de Cadastro de Colaboradores</h2><br>
                <hr><br>
                <form action="cadastro-usuario.php" method="post">
                        <label for="user_name">Nome:</label>
                        <input type="text" name="user_name" id="user_name"><br><br>

                        <label for="user_email">Email:</label>
                        <input type="email" name="user_email" id="user_email"><br><br>

                        <label for="user_cell">Celular:</label>
                        <input type="cell" name="user_cell" id="user_cell"><br><br>

                        <label for="user_linkedin">LinkedIn:</label>
                        <input type="linkedin" name="user_linkedin" id="user_linkedin"><br><br>

                        <input type="submit" value="Cadastrar"><br><br>

                </form>
        </div>
        </fieldset>
        <!-- Fim do formulário de cadastro -->
        


<?php include "footer.php" ?>