<header>
    <h1>Le site dont vous êtes le Héros</h1>
    <ul>
        <li><a href="?action=restart">Recommencer</a></li>
        <li><a href="?question=<?= end($_SESSION['question']) ?>">Reprendre</a></li>
        <li><a href="/">Accueil</a></li>
    </ul>
</header>
 <!-- régler le cas particulier : lorsque je fais "reprendre", ne pas ajouter la question en cours -->