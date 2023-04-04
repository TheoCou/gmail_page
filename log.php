<?php
include_once("./src/head2.inc.php");
?>

<header>

    <a href="#"><img src="./asset/imagegmail.png" alt="gmail" loading="lazy"></a>

    <nav>
        <ul>

            <li><a href="#">POUR LES PROS</a></li>
            <li><a href="#">CRÉER UN COMPTE</a></li>

        </ul>
    </nav>

</header>

<body>
    <main>
        <!-- FORMULAIRE -->

        <div class="form">

            <h3>Une boîte de réception entièrement repensée</h3>

            <h4>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez
                ceux que vous souhaitez lire en priorité.</h4>

            <fieldset id="connection">
                <legend>Connectez-vous</legend>
                <form>

                    <label for="nom">Nom*</label> <br>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true" autofocus> <br>

                    <label for="prenom">Prénom*</label> <br>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" aria-required="true"> <br>

                    <label for="email">Mail*</label> <br>
                    <input type="login" id="login" name="login" placeholder="Votre mail" aria-required="true"> <br>

                    <label for="password">Choisir votre mot de passe*</label> <br>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true"> <br>

                    <input type="submit" id="submit" value="Se connecter" aria-label="Valider">

                </form>
            </fieldset>
        </div>

        <?php
        include_once "./src/log.inc.php";
        ?>
    </main>
</body>
