<?php
$titre = "Acceuil";
include 'header.php'
?>
<section>
    <form method="post" action="/index.php">
        <div class="container mt-3">
            <div class="row mb-3">
                <div class="col-md-6 h1">La refererence Senegalaise pour vos newslatters</div>
                <div class="col-md-6"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-9 d-flex align-items-center">
                    <span class="text-warning h1">|</span>
                    <span>Rejoignez plus de 300 000 entreprises qui développent leur activité grâce à l'email marketing.</span>
                    <span></span>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row col-md-7">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-dark text-white" type="submit" id="button-addon2">Inscription Gratuite</button>
                </div>
                <div class="text-secondary text-center">Sans engagement - Sans carte de crédit</div>
            </div>
        </div>
    </form>
</section>

<!-- Section pour les paiement -->

<section>
    <form method="post" action="">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Pricing</h1>
            <div class="text-center mb-5">Ne manquez aucune opportunité ! Abonnez-vous dès maintenant à notre site de newsletters et bénéficiez d'informations exclusives, de conseils d'experts et des dernières tendances du marché. Restez toujours au courant grâce à notre service de référence au Sénégal, adapté à vos besoins professionnels. L'inscription est gratuite et rapide, rejoignez-nous pour stimuler votre activité et ouvrir la porte à de nouvelles opportunités !</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header py-2 text-center text-dark fs-3">
                            Free
                        </div>
                        <div class="card-body text-center">
                            <span class="h1">$0</span>
                            <span class="fs-2 text-secondary">/mo</span>
                            <div>10 users included</div>
                            <div>2 GB of storage</div>
                            <div>Email support</div>
                            <div>Help center access</div>
                            <button type="submit" class="w-100 btn btn-lg btn-outline-dark mt-3">S'inscrire</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header py-2 text-center text-dark fs-3">
                            Pro
                        </div>
                        <div class="card-body text-center">
                            <span class="h1">$15</span>
                            <span class="fs-2 text-secondary">/mo</span>
                            <div>20 users included</div>
                            <div>10 GB of storage</div>
                            <div>Priority email support</div>
                            <div>Help center access</div>
                            <button type="submit" class="w-100 btn btn-lg btn-dark mt-3">S'abonner</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 border border-1 border-dark">
                        <div class="card-header py-2 text-center bg-dark text-white fs-3">
                            Entreprise
                        </div>
                        <div class="card-body text-center">
                            <span class="h1">$100</span>
                            <span class="fs-2 text-secondary">/mo</span>
                            <div>30 users included</div>
                            <div>15 GB of storage</div>
                            <div>Phone and email support</div>
                            <div>Help center access</div>
                            <button type="submit" class="w-100 btn btn-lg btn-dark mt-3">Contactez nous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Partie pour comparer les plan -->

<section>
    <div class="container">
        <div class="text-center h1 mt-3 mb-3">Comparaison des plans</div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th style="width: 34%;"></th>
                        <th style="width: 22%;">Free</th>
                        <th style="width: 22%;">Pro</th>
                        <th style="width: 22%;">Entreprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Publique</td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Priver</td>
                        <td class="fw-bold text-center"></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Permission</td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Partage</td>
                        <td class="fw-bold text-center"></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Membre illimite</td>
                        <td class="fw-bold text-center"></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Extra securite</td>
                        <td class="fw-bold text-center"></td>
                        <td class="fw-bold text-center"></td>
                        <td class="fw-bold text-center"><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Partie formulaire newslatters encore -->

<section>
    <form method="post" action="">
        <div class="container py-3 bg-light mt-5">
            <h3 class="text-center mb-3">Commencer maintenant</h3>
            <div class="col-md-7 mx-auto">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-dark text-white" type="submit" id="button-addon2">Inscription Gratuite</button>
                </div>
            </div>
            <div class="text-secondary text-center">Sans engagement - Sans carte de crédit</div>
        </div>
    </form>
</section>

<!-- Partie commentaire -->

<section>
    <div class="container mt-5">
        <h3 class="text-center">300 000 clients satisfaits</h3>
        <div class="text-center">
            <a href="#" class="text-decoration-none text-primary">Decouvre nos 2,464+ avis sur <i class="fa-brands fa-facebook"></i></a>
        </div>
        <div class="row mt-5">
            <div class="col-ms-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa-solid fs-1 fa-comments"></i>
                        <div class="text-center mt-3">J'adore recevoir votre newsletter ! Chaque semaine, je suis excité de découvrir les dernières actualités et les sujets fascinants que vous couvrez. Les articles sont bien écrits et informatifs. Continuez à fournir un contenu de qualité, c'est un plaisir de vous lire !</div>
                        <img src="image/img1.png" alt="Profil utilisateur" style="width: 10%;" class="mx-auto d-block rounded-circle">
                    </div>
                </div>
            </div>
            <div class="col-ms-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa-solid fs-1 fa-comments"></i>
                        <div class="text-center mt-3">Votre newsletter est devenue une source incontournable d'informations pour moi. Je trouve toujours des articles pertinents et intéressants qui m'aident à rester informé sur les sujets qui me passionnent. Bravo pour votre excellent travail éditorial, je recommande vivement votre site à tous mes amis !</div>
                        <img src="image/img2.png" alt="Profil utilisateur" style="width: 10%;" class="mx-auto d-block rounded-circle">
                    </div>
                </div>
            </div>
            <div class="col-ms-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fs-1 fa-comments"></i>
                        <div class="text-center mt-3">Votre site de newsletter est tout simplement génial ! Je suis impressionné par la diversité des sujets que vous couvrez et par la qualité des analyses que vous proposez. C'est un excellent moyen de rester à jour sans avoir à chercher l'information partout. Je vous félicite pour cette initiative et je vous encourage à continuer à nous offrir un contenu aussi enrichissant !</div>
                        <img src="image/img4.png" alt="Profil utilisateur" style="width: 10%;" class="mx-auto d-block rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partie partenaria -->

<section>
    <div class="container">
        <div class="text-center h1 mt-3">Nos partenaires</div>
        <div class="row mt-4">
            <div class="col-md-3 mb-3">
                <a href="https://www.bing.com/ck/a?!&&p=245f7ca473c953d2JmltdHM9MTY4OTgxMTIwMCZpZ3VpZD0xYzA3OWI2YS1jMmYwLTY3YjItMzc1ZS04ODM5YzM4NzY2ZTQmaW5zaWQ9NTE5Ng&ptn=3&hsh=3&fclid=1c079b6a-c2f0-67b2-375e-8839c38766e4&psq=marodi&u=a1aHR0cHM6Ly93d3cueW91dHViZS5jb20vdXNlci9tYXJvZGl0dnByb2Q&ntb=1">
                    <img src="image/img5.png" alt="Profil utilisateur" style="width: 30%;" class="mx-auto d-block rounded-circle">
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="https://www.bing.com/ck/a?!&&p=eca494fb4e8fc3b0JmltdHM9MTY4OTgxMTIwMCZpZ3VpZD0xYzA3OWI2YS1jMmYwLTY3YjItMzc1ZS04ODM5YzM4NzY2ZTQmaW5zaWQ9NTE5MA&ptn=3&hsh=3&fclid=1c079b6a-c2f0-67b2-375e-8839c38766e4&psq=evenprod&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2V2ZW5wcm9kc2VuZWdhbC8&ntb=1">
                    <img src="image/img6.png" alt="Profil utilisateur" style="width: 30%;" class="mx-auto d-block rounded-circle">
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="https://www.gmd.sn/">
                    <img src="image/img7.png" alt="Profil utilisateur" style="width: 30%;" class="mx-auto d-block rounded-circle">
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="https://www.groupeisi.com/">
                    <img src="image/img8.png" alt="Profil utilisateur" style="width: 30%;" class="mx-auto d-block rounded-circle">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Nous contacter -->

<section>
    <div class="container mt-5 ">
        <form method="post" action="">
            <h1 class="text-center mb-4">Nous Contacter</h1>
            <div class="bg-light py-2 container-fluid">
                <div class="row mt-5">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body bg-dark">
                                <iframe style="width: 100%; height: 66vh" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.315810408757!2d-17.416880684316416!3d14.771796780594308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d18c790f8cd%3A0xea1049a46afba68e!2sCit%C3%A9%20Aliou%20Sow!5e0!3m2!1sen!2ssn!4v1659645830647!5m2!1sen!2ssn" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header fs-2 text-center bg-dark text-white">
                                Contact
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label for="" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" name="" placeholder="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="" placeholder="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="" placeholder="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="my-textarea">Votre message</label>
                                    <textarea id="my-textarea" class="form-control" name="" rows="3" maxlength="220"></textarea>
                                </div>
                                <button class="btn btn-outline-dark" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php' ?>