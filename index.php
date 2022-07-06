<form action="" method="post">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" value="<?php if (!empty($_POST['name'])) {
                                                        echo $_POST['name'];
                                                    } ?>">
    <span class="error"><?php if (!empty($errors['name'])) {
                            echo $errors['name'];
                        } ?></span>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?php if (!empty($_POST['prenom'])) {
                                                            echo $_POST['prenom'];
                                                        } ?>">
    <span class="error"><?php if (!empty($errors['prenom'])) {
                            echo $errors['prenom'];
                        } ?></span>

    <label for="email">Email :</label>
    <input type="text" name="email" id="email" value="<?php if (!empty($_POST['email'])) {
                                                            echo $_POST['email'];
                                                        } ?>">
    <span class="error"><?php if (!empty($errors['email'])) {
                            echo $errors['email'];
                        } ?></span>


    <input type="submit" name="submitted" value="Envoyer">
</form>