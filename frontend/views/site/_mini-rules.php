<?php
use frontend\models\PageItem;
?>
<div class="home-text-block">
    <div class="show-on-desktop">
        <p>
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <b>AUCUN ACHAT REQUIS POUR PARTICIPER OU
                    GAGNER.</b>Nul là où la loi l'interdit. Le concours s'adresse uniquement aux résidents légaux canadiens qui dépassent l'âge de la majorité dans leur province ou territoire de résidence et qui sont parents ou tuteurs légaux d'un enfant âgé entre 4 et 18 ans au moment de la participation (« Enfant admissible »). L'Enfant admissible ne peut en aucun cas s'inscrire au Concours. Le concours débute le 2 août 2016 à 0:00:01 heure normale de l'EST (HNE) et se termine le 12 septembre 2016 à 23:59:59 HNE (« Période de participation au concours »). Les gagnants doivent répondre correctement à une question d'habileté mathématique pour gagner un prix. Les gagnants du concours seront choisis uniquement par tirage au sort. Les chances de gagner un tirage au sort dépendent du nombre de participations admissibles reçues. Une (1) participation au concours par personne par semaine pour chaque Enfant admissible (jusqu'à un maximum de quatre (4) Enfants admissibles par personne) durant toute la Période de participation au concours.Les gagnants hebdomadaires sont sélectionnés à la fin de la période hebdomadaire respective. Le gagnant du grand prix sera sélectionné lorsque le Concours sera terminé. Vous devez utiliser seulement une (1) adresse courriel pour participer à ce
                <?php
            else:
                ?>
                <strong>NO PURCHASE NECESSARY TO ENTER OR WIN.</strong> The Contest is strictly open to individuals who are legal residents of Canada, who are over the age of majority in their province or territory of residence and a parent and/or legal guardian of a child between the age of 6 and 18 at the time of entry (“Eligible Child”). The Contest will begin August 9, 2016 at 12:00:01 PM Eastern Time (“ET”) and ends September 19, 2016 at 11:59:59 PM ET ("Contest Submission Period").  Contest Winners will be determined solely by random draw. Odds of winning in the random drawings depend upon the number of eligible entries received. One (1) Contest Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children per person).  You may only use one (1) email address to participate in this Contest. Weekly winners are selected randomly at end of respective weekly period. Grand prize winner to be selected upon full completion of the Contest. Winners must correctly answer a mathematical skill testing question to win a prize. See <a target="_blank" href="<?= PageItem::getPermalink(['official-rules']) ?>"><?= Yii::t(_NP_TEXT_DOMAIN, 'Official Rules') ?></a> for details.  Sponsor: BIC Inc.
                <?php
            endif;
            ?>
        </p>

    </div>
    <div class="show-on-mobile">
         No Purch Nec., CAD only, Age of Majority in Prov./Territ. of Res. Ends 09/19/2016. <a target="_blank"
                                                                                               href="<?= PageItem::getPermalink(['official-rules']) ?>">Click
            Here for Official Rules.</a>
    </div>

</div>