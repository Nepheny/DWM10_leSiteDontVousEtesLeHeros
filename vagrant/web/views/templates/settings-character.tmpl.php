<?php
    if(!isset($_GET['start'])) {
        include('views/templates/settings-character.tmpl.php');
    } else {
        $_SESSION['character'] = $_POST;
        $character = $_SESSION['character'];
    }
?>
<?php if(isset($character)): ?>
    <section>
        <h2>Votre personnage</h2>
        <div>
            <p>Voici les caractéristiques de votre personnage.</p>
            <ul>
            <?php foreach($character as $type => $setting): ?>
                <li><?= $type ?> : <?= $setting ?></li>
            <?php endforeach; ?>
            </ul>
            <form action="/?question=0" method="POST">
                <input type="submit" value="Commencer l'aventure !"/>
            </form>
        </div>
    </section>
<?php endif ?>