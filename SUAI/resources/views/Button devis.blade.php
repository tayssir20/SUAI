<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Formulaire</title>
</head>

<body>

    <div class="container mt-5">
        <h2>A propos de vous </h2>
        <form action="{{ route('store.form.data') }}" method="post">


            @csrf
            <div class="form-group">
                <label for="typeClient">Type de client :</label>
                <select class="form-control" id="typeClient" name="typeClient">
                    <option value="particulier">Particulier</option>
                    <option value="entreprise">Entreprise</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
            </div>

            <!-- Catégories avec cases à cocher -->
            <h4>Développement</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Site web vitrine"
                    id="siteVitrine">
                <label class="form-check-label" for="siteVitrine">Site web vitrine</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Site E-commerce"
                    id="siteEcommerce">
                <label class="form-check-label" for="siteEcommerce">Site E-commerce</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Site E-catalogue"
                    id="siteCatalogue">
                <label class="form-check-label" for="siteCatalogue">Site E-catalogue</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Webmastering"
                    id="webmastering">
                <label class="form-check-label" for="webmastering">Webmastering</label>
            </div>

            <h4>Integration des Solutions</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Developpement mobile"
                    id="Développementmobile">
                <label class="form-check-label" for="Developpement mobile">Developpement mobile</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Développementsurmesure"
                    id="Développementsurmesure">
                <label class="form-check-label" for="Développement sur mesure">Développement sur mesure</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="IntegrationsolutionERP"
                    id="IntegrationsolutionERP">
                <label class="form-check-label" for="IntegrationsolutionERP">Integration solution ERP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="CRM" id="CRM">
                <label class="form-check-label" for="CRM">Integration solution CRMg</label>
            </div>

            <h4>Marketing Digitale</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Référencementweb"
                    id="Référencementweb">
                <label class="form-check-label" for="Référencementweb">Référencement web</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="CommunityManagement"
                    id="CommunityManagement">
                <label class="form-check-label" for="CommunityManagement">Community Management</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="StrategieMarketing"
                    id="StrategieMarketingt">
                <label class="form-check-label" for="StrategieMarketing">Strategie Marketing</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Redactionweb"
                    id="Redactionweb">
                <label class="form-check-label" for="Redactionweb">Redactionweb</label>
            </div>

            <h4>Consulting</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Auditconseil"
                    id="Auditconseil">
                <label class="form-check-label" for="Auditconseil">Audit conseil</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Formations"
                    id="Formations">
                <label class="form-check-label" for="Formations">Formations</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Hébergementweb"
                    id="Hébergementweb">
                <label class="form-check-label" for="Hébergement web">Hébergement web</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Offshore" id="Offshore">
                <label class="form-check-label" for="Offshore">Offshore</label>
            </div>



            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </form>
    </div>

    <!-- Chargement des scripts Bootstrap (jQuery et Popper.js sont requis) -->

</body>

</html>
