<div class="diplome-background background-info" id="diplome">
        <a href="#specialite" class="diplome-retour"> < Retour en arrière</a>
        <div class="diplome-flex">
                <b class="diplome-bulle info-1">Quel diplôme cherches-tu à obtenir ?</b>
                <h2 class="diplome-titre">Informatique</h2>
        </div>

        <?php if ($_GET['niveau'] == 3): ?>
                <h3 class="bac-niveau diplome-info">BAC +3</h3>
            <div class="suite">
                <a href="./liste/?id_Specialite=3&id_FormeDeFormation=5" class="btn-diplome info-1">Bachelors privés</a>
                <a href="./liste/?id_Specialite=3&id_FormeDeFormation=4" class="btn-diplome info-2">Licences professionnelles</a>
            </div>
        <?php endif; ?>

        <?php if ($_GET['niveau'] == 5): ?>
                <h3 class="bac-niveau diplome-info">BAC +5</h3>
            <div class="suite">
                <a href="./liste/?id_Specialite=3&id_FormeDeFormation=7" class="btn-diplome info-1">Mastères privés</a>
                <a href="./liste/?id_Specialite=3&id_FormeDeFormation=6" class="btn-diplome info-2">Cycles d'ingénieurs</a>
                <a href="./liste/?id_Specialite=3&id_FormeDeFormation=1" class="btn-diplome info-3">Masters universitaire</a>
            </div>
        <?php endif; ?>
        
        
            <p class="txt bulltxt">Aller c’est bientôt fini ! <br> À présent tu dois indiquer le diplôme que tu souhaites obtenir.</p>
            <img class="bonhomme" src="./assets/img/persos-histoire/perso-flowwi-1.png" alt="">
        
    </div>

