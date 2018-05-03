<section>
    <h2>Histoire</h2>
    <div>
        <p>Depuis votre enfance, vous pouvez apercevoir à l'horizon la Flèche, une immense tour sombre érigée au milieu de l'océan. Objet de beaucoup de récits, une constante revient : la Flèche aurait le pouvoir d'exaucer un unique voeu à celui qui triompherait de ses pièges et arriverait jusqu'au sommet. Jusqu'alors, pas un seul aventurier n'en est revenu.</p>
        <p>Aujourd'hui est un grand jour. vous vous sentez prêt à gravir la Flèche, après un entrainement sans relache de toute une vie.</p>
    </div>
    <h2>Personnage</h2>
    <div>
        <form action="/?start=ok" method="POST">
            <p>Comment vous nommez-vous ?</p>     
            <input type="text" name="Nom" placeholder="Votre nom" required/>
            <div></div>
            <p>Êtes-vous un homme ou une femme ?</p>
            <input type="radio" name="Genre" value="Homme" required> Homme
            <input type="radio" name="Genre" value="Femme"> Femme
            <div></div>
            <p>Choisissez votre équipement :</p>
            <select name="Equipement">
                <option value="Arc">Arc</option>
                <option value="Lance">Lance</option>
                <option value="Epée courte et bouclier">Epée courte et bouclier</option>
                <option value="Epée à deux mains">Epée à deux mains</option>
                <option value="Hache à deux mains">Hache à deux mains</option>
                <option value="Couteaux">Couteaux</option>
                <option value="Bipenne">Bipenne</option>
            </select>
            <div></div>
            <p>Choisissez votre compétence :</p>
            <select name="Compétence">
                <option value="Soigneur">Soigneur</option>
                <option value="Dresseur">Dresseur</option>
                <option value="Sorcier">Sorcier</option>
                <option value="Télépathe">Télépathe</option>
                <option value="Combattant">Combattant</option>
            </select>
            <div></div>
            <input type="submit" value="Valider votre personnage"/>
        </form>
    </div>
</section>