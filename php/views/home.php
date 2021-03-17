<!-- si l'id utilisateur n'est pas défini dans la session, redirige vers la page de connexion -->
<?php if (!isset($_SESSION['userid'])) header('location: /?page=login') ?>

<div class="homeContainer">
    <header class="homeContainer__header">
        <p class="homeContainer__header__userName">
            <?= $_SESSION['userName'] ?>
        </p>
        <form action="./php/controllers/handler.php?task=logout" method="POST" class="homeContainer__header__form">
            <button  class="homeContainer__header__form--btn">Se déconnecter</button>
        </form>
        
    </header>
    <h1>Home</h1>
</div>
