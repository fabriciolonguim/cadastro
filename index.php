<?php session_start() ?>
 <?php include_once('includes/header.inc.php'); ?>
   <?php include_once('includes/menu.inc.php'); ?>
    
    	
    	<div class="row container">
        <p>&nbsp;</p>
    		<form action="banco_de_dados/create.php" method="post" class="col s12">
         	<fieldset class="formulario">
         	  <legend><img src="imagens/avatar.png" alt="[imagem" width="100"></legend>
            <h5 class="light center">Cadastro de Clientes</h5>

            <?php 
              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                session_unset();
              }
            ?>
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required="required" autofocus="autofocus">
                <label>Nome do Cliente</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="text" name="email" id="email" maxlength="50" required="required">
                <label>Email do Cliente</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone" maxlength="15" required="required">
                <label>Telefone do Cliente</label>
            </div>
            <div class="input-field col s12">
               <input type="submit" value="Cadastrar" class="btn blue">
               <input type="reset" value="Apagar" class="btn red">
            </div>
         	</fieldset>   		
    		</form>
    	</div>
<?php include_once('includes/footer.inc.php'); ?> 

    