<?php include "header.php" ?>


        <br><br>
        
        <fieldset>
        <div class="quem-somos">
                <h2>Entre em contato conosco</h2><br>
                <hr><br>
                <form action="contato.php" method="post">
                        <label for="name_contato">Nome:</label>
                        <input type="text" name="name_contato" id="name_contato"><br><br>

                        <label for="email_contato">Email:</label>
                        <input type="email" name="email_contato" id="email_contato"><br><br>

                        <label for="assunto_contato">Assunto:</label>
                        <input type="assunto" name="assunto_contato" id="assunto_contato"><br><br>

                        Escreva abaixo o motivo de seu contato: <br>
                        <textarea name="descricao" id="" cols="50" rows="10"></textarea><br><br>
                        <input type="submit" value="Enviar"><br>
                </form>
        </div>
        </fieldset>


<?php include "footer.php" ?>