<!DOCTYPE HTML>
<html>
<head>
    <title>Formulario de Contacto</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Contacta via Email</h1>
        </div>
<?php
        // check for a successful form post
        if (isset($_GET['s'])) echo '<div class=\"alert alert-success\">'.$_GET['s'].'</div>';
        // check for a form error
        elseif (isset($_GET['e'])) echo '<div class=\"alert alert-error\">'.$_GET['e'].'</div>';
?>
   
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">Nombre</label>
                <div class="controls">
                    <input type="text" name="contact_name" id="input1" placeholder="Tu nombre">
                </div>
            </div>
            <div class="control-group">
				<label class="control-label" for="input2">Email</label>
                <div class="controls">
                    <input type="text" name="contact_email" id="imput2" placeholder="Tu Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input3">Mensaje</label>
                <div class="controls">
                    <textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="Mensaje"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</body>
</html>