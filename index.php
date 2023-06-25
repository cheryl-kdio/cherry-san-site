<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/92aa274529.js" crossorigin="anonymous"></script>
    <title>cherry-san.com</title>
</head>

<body>
    <!--Navigation bar-->
    <div class="navbar">
        <div class="logo-image">
            <img src="images/Cherry-san.png">
        </div>

        <div class="navbar__link-toggle">
            <i class="fa-solid fa-bars fa-2xl"></i>
        </div>
        <nav class="navbar__items">
            <div>
                <a href="index.php"><button>Accueil</button></a>
            </div>
            <div>
                <a href="Pages/forum.html"><button>Forum</button></a>
            </div>

        </nav>
        <nav class="navbar__items navbar__items--right ">
            <div><a href="#"><button>Se connecter</button></a></div>
        </nav>
    </div>
    <script src="script.js"></script> <!--Exécution du script js-->

    <!--Diaporama-->
    <div class="flex-container">
        <div class="slideshow" id="diaporama">
            <h1>À la une</h1>
            <ul>
                <li><img src="images/ALU/image-1.png" alt><span>
                        <p>Killing Eve</p>
                        <button>Thriller</button>
                        <button>Drame</button>
                        <button>Comédie</button>
                        <button>Serie</button>
                    </span></li>
                <li><img src="images/ALU/image-2.png" alt><span>
                        <p>The glory</p>

                        <button>Thriller</button>
                        <button>Tragédie</button>
                        <button>Kdrama</button>
                    </span></li>
                <li><img src="images/ALU/image-3.png" alt><span>
                        <p>Creed III</p>
                        <button>Drame</button>
                        <button>Film</button>
                    </span></li>
                <li><img src="images/ALU/image-4.png" alt><span>
                        <p>Super Mario Bros.</p>
                        <button>Action</button>
                        <button>Animation</button>
                    </span></li>
                <li><img src="images/ALU/image-5.png" alt><span>
                        <p>Spider-Man : Across the Spider-Verse</p>
                        <button>Action</button>
                        <button>Animation</button>
                    </span></li>
            </ul>
            <div class="barre_progression"></div>
        </div>
        <!--Fin du diaporama-->

        <!-- Nos actualités-->
        <div class="block" id="welcoming">
            <p>
                Ce site a été méticuleusement conçu par une passionnée comme vous, totalement immergée dans
                l'univers
                captivant des films, des animés, des séries et de la musique.</p>
            <p>
                Découvrez ici ses impressions sincères et enflammées sur les œuvres qu'elle a dévorées avec passion.
                Plongez-vous dans ses critiques savamment rédigées, ses recommandations enthousiastes et ses
                commentaires éclairés,.</p>
            <p>
                Que vous soyez à la recherche d'une nouvelle série captivante, d'un animé épique ou d'un film
                émouvant, ce site regorge de trésors soigneusement sélectionnés pour combler vos envies et
                satisfaire votre appétit cinéphile.</p>
            <p>
                Alors, plongez dans cette expérience immersive, laissez-vous guider par ces recommandations
                passionnées.
            </p>
            <p>- Cherry-san &#128151</p>
            <!-- Social media-->

            <div>
                <p>Retrouvez nous sur

                    <a href="https://twitter.com/ur_cherry_san"><i class="fa-brands fa-square-twitter fa-2xl"
                            style="color: #1190bd; padding: 20px;"></i></a>
                    <i class="fa-brands fa-instagram fa-2xl" style="color: #e14564; padding: 20px;"></i>
                    <i class="fa-brands fa-discord fa-2xl" style="color: #163c83; padding: 20px;"></i>
                </p>
            </div>
        </div>
    </div>
    <!--Fin de l'entête-->

    <!--Animé-->
    <?php
    require("Databases/Connect.php");
    $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
    mysqli_select_db($connexion,BASE);

    $resultat = mysqli_query($connexion,"SELECT * FROM Movies_db WHERE categorie='Anime'");
    
    if ($resultat) {
        $html = '';
        while ($row = mysqli_fetch_assoc($resultat)) {// Generate HTML dynamically
           
                $name = $row['titre'];
                $annee = $row['annee'];
                $prenom_realisateur = $row['prenom_realisateur'];
                $nom_realisateur = $row['nom_realisateur'];
                $pays=$row['pays'];
                $affiche=$row['affiche'];
            
                // Create an HTML div with the extracted information
                $html .= '<div class="pseudo-item"><img src="'.$affiche.'">
                <div class="card-bottom">';
                $html .= '<span class="top-text">' . $name . '</span><br>';
                $html .= '<span class="bottom-text">' . $prenom_realisateur.' '.$nom_realisateur .' ('.$annee. ')<br>';
                $html.= $pays.'</span> <br>';
                $html .= '<button class="button">Noter</button>

                <div>
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--none" name="rating3"
                            id="rating3-none" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                    </div>
                </div>
            </div>
        </div>';
                
                
                      
            
        }
    } else {
        echo "<b> Erreur dans l'exécution de la requête.</b><br/>";
        echo "<b> Message de MySQL : </b>" . mysqli_error($connexion);
    }
    
    ?>

    <h1>Nos animés en ce moment</h1>
    <section>
        <div class="outer-wrapper">
            <div class="inner-wrapper">
    <?php echo $html; ?>
            </div>
        </div>
    </section>
    

    <!--Films-->
    <?php
    
    $resultat = mysqli_query($connexion,"SELECT * FROM Movies_db WHERE categorie='Film'");
    
    if ($resultat) {
        $html = '';
        while ($row = mysqli_fetch_assoc($resultat)) {// Generate HTML dynamically
           
                $name = $row['titre'];
                $annee = $row['annee'];
                $prenom_realisateur = $row['prenom_realisateur'];
                $nom_realisateur = $row['nom_realisateur'];
                $pays=$row['pays'];
                $affiche=$row['affiche'];
            
                // Create an HTML div with the extracted information
                $html .= '<div class="pseudo-item"><img src="'.$affiche.'">
                <div class="card-bottom">';
                $html .= '<span class="top-text">' . $name . '</span><br>';
                $html .= '<span class="bottom-text">' . $prenom_realisateur.' '.$nom_realisateur .' ('.$annee. ')<br>';
                $html.= $pays.'</span> <br>';
                $html .= '<button class="button">Noter</button>

                <div>
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--none" name="rating3"
                            id="rating3-none" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                    </div>
                </div>
            </div>
        </div>';
                
                
                      
            
        }
    } else {
        echo "<b> Erreur dans l'exécution de la requête.</b><br/>";
        echo "<b> Message de MySQL : </b>" . mysqli_error($connexion);
    }
    
    ?>

<h1>Nos films en ce moment</h1>
    <section>
        <div class="outer-wrapper">
            <div class="inner-wrapper">
    <?php echo $html; ?>
            </div>
        </div>
    </section>

    <!-- Séries-->
    <?php
    $resultat = mysqli_query($connexion,"SELECT * FROM Movies_db WHERE categorie='Série'");
    
    if ($resultat) {
        $html = '';
        while ($row = mysqli_fetch_assoc($resultat)) {// Generate HTML dynamically
           
                $name = $row['titre'];
                $annee = $row['annee'];
                $prenom_realisateur = $row['prenom_realisateur'];
                $nom_realisateur = $row['nom_realisateur'];
                $pays=$row['pays'];
                $affiche=$row['affiche'];
            
                // Create an HTML div with the extracted information
                $html .= '<div class="pseudo-item"><img src="'.$affiche.'">
                <div class="card-bottom">';
                $html .= '<span class="top-text">' . $name . '</span><br>';
                $html .= '<span class="bottom-text">' . $prenom_realisateur.' '.$nom_realisateur .' ('.$annee. ')<br>';
                $html.= $pays.'</span> <br>';
                $html .= '<button class="button">Noter</button>

                <div>
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--none" name="rating3"
                            id="rating3-none" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                    </div>
                </div>
            </div>
        </div>';
        }
    } else {
        echo "<b> Erreur dans l'exécution de la requête.</b><br/>";
        echo "<b> Message de MySQL : </b>" . mysqli_error($connexion);
    }
    
    ?>

<h1>Nos séries en ce moment</h1>
    <section>
        <div class="outer-wrapper">
            <div class="inner-wrapper">
    <?php echo $html; ?>
            </div>
        </div>
    </section>

    <!--Musiques-->
    <h1>Nos musiques en ce moment</h1>
    <div class="flex-container">
        <ol>
            <li>
                <strong>We were never really friends - Bruno Major </strong>
                <p>We let the lines get blurry,<br>
                    Now both of us are hurting.</p>
            </li>
            <li>
                <strong>Conversations in the dark - John Legend</strong>
                <p>World is sleeping, I'm awake with you</p>
            </li>
            <li>
                <strong>Wrecked - Imagine Dragons</strong>
                <p>I've tried to put this all behind me<br>
                    I think I was wrecked all along</p>
            </li>
            <li>
                <strong>Let her go - Passenger</strong>
                <p>Well, you only need the light when it's burning low</p>
            </li>
            <li>
                <strong>Mr Blue sky - ELectric light orchestra</strong>
                <p>See how the sun shines brightly in the city<br>
                    On the streets where once was pity</p>
            </li>

        </ol>
        <ol start="6">
            <li>
                <strong>Filter - BTS </strong>
                <p>Oh, 널 데려갈게 완전히 새로운 세상에 (je t'emmènerai dans un tout nouveau monde)</p>
            </li>
            <li>
                <strong>Julien - Damso</strong>
                <p>Fais le vide</p>
            </li>
            <li>
                <strong>Golden hour - JVKE</strong>
                <p>I was all alone with the love of my life<br>
                    She's got glitter for skin</p>
            </li>
            <li>
                <strong>You, Dear - Eloise</strong>
                <p>I never liked you much<br>
                    You're always so complacent</p>
            </li>
            <li>
                <strong>One way or another - Blondie</strong>
                <p>One way, or another, I'm gonna find ya <br>
                    I'm gonna get ya, get ya, get ya, get ya </p>
            </li>
        </ol>
        <ol start="11">
            <li>
                <strong>Mesdames - Grands corps malade </strong>
                <p>Veuillez accepter Mesdames ces quelques mots comme un hommage</p>
            </li>
            <li>
                <strong>Yun - RM </strong>
                <p>I wanna be a human 'fore I do some art</p>
            </li>
            <li>
                <strong>Paradis - Orelsan </strong>
                <p>Qu'est-ce que j'irais faire au paradis<br>
                    Quand tu t'endors près de moi? </p>
            </li>
            <li>
                <strong>Mr/Mme - Loïc Nottet</strong>
                <p>Ce monde m'étrangle, m'écrase et me brûle</p>
            </li>
            <li>
                <strong>かごめ(Kagome) - Yuuri</strong>
                <p>法を犯さない方法で 自分を殺す方法があるなら僕を今すぐ殺してみたい (S'il y a un moyen de me tuer sans enfreindre la loi, je veux
                    me
                    tuer tout de suite)</p>
            </li>
        </ol>
    </div>
    <div>

    </div>
    
    
    <footer style="text-align: center;">
        <p>©Copyright cherry-san, tous droits réservés</p>

    </footer>
</body>

</html>