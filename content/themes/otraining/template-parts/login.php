<?php get_header(); ?>

<body>
        <div id="container">
            <!-- formulaire inscription -->
            
            <form action="verification.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mail</b></label>
                <input type="text" placeholder="Entrer votre adresse mail" name="mail" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>

<?php get_footer(); ?>