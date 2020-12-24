
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire de Paiement exemple</title>
    <link href="../assetes/css/payment_form.css" rel="stylesheet">
</head>

<body>
  <section class="banner" role="banner">
    <header id="header">
      <div class="header-content clearfix"> <span class="logo">Life-Style</span>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="#services">Actualiser</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
  



  <div class="container">
    <form action="RecupererDonner.php" method="post">
        <h1>Formulaire de Paiement</h1>
        <p>Ce formulaire est suivi par <strong><abbr title="required">*</abbr></strong>.</p>
        <section>
            <h2>Information de contact</h2>
            <fieldset>
              <legend>Type d'Abonnement</legend>
              <ul>
                  <li>
                  <div>
                    <input type="radio" id="huey" name="type" value="huey"
                    checked>
                    <label for="huey"> Musculation/Cardio</label>
                    </div>
                  </li>
                  <li>
            
                  <div>
                  <input type="radio" id="huey1" name="type" value="huey1">
                   <label for="huey1">Toutes Activités</label>
                     </div>
        
                  </li>
              </ul>
            </fieldset>
            <fieldset>
                  <legend>Durée d'Abonnement</legend>
              <ul>
              <li>
                  <div>
                    <input type="radio" id="dewey" name="dure" value="dewey" checked>
                     <label for="dewey">1 Mois</label>
                   </div>
                </li>
                  
                <li>
                  <div>
                    <input type="radio" id="dewey1" name="dure" value="dewey1">
                     <label for="dewey1">3 Mois</label>
                   </div>
                  </li>
                  
                  <li>
                  <div>
                    <input type="radio" id="dewey2" name="dure" value="dewey2">
                     <label for="dewey2">6 Mois</label>
                   </div>
                  </li>
    
                  <li>
                  <div>
                    <input type="radio" id="dewey3" name="dure" value="dewey3">
                     <label for="dewey3">9 Mois</label>
                   </div>
                  </li>

                  <li>
                  <div>
                    <input type="radio" id="dewey4" name="dure" value="dewey4">
                     <label for="dewey4">12 Mois</label>
                   </div>
                  </li>
              </ul>
            </fieldset>
            <p>
              <label for="Nom">
                <span>Nom: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="nom">
            </p>

            <p>
              <label for="mail">
                <span>E-mail: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="email" id="mail" name="Email">
            </p>

            <p>
              <label for="pwd">
                <span>Mot de passe: </span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="password" id="pwd" name="MotDePasse">
            </p>

        </section>
        <section>
            <h2>Information de Paiement</h2>
            <p>
              <label for="card">
                <span>Type de carte:</span>
              </label>

              <select id="card" name="TypeDeCarte">
                <option value="visa">Visa</option>
                <option value="mc">Mastercard</option>
                <option value="cb">Carte bancaire</option>
              </select>
            </p>

            <p>
              <label for="number">
                <span>Numero de Carte:</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="tel" id="number" name="NumeroDeCarte">
            </p>

            <p>
              <label for="date">
                <span>Date d'Expiration:</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>Mise comme mm/dd/yyyy</em>
              </label>
              <input type="date" id="date" name="DateDExpiration">
            </p>
            </section>
        <section>
            <p> <button type="submit" id="submit">Valider le paiement</button> </p>
        </section>
    </form>
  </div>
  </section>
</body>

</html>