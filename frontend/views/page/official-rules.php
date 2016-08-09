<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Offical Rules';
use frontend\models\PageItem;
?>

<div class="site-signup tmpl-official-rules">
  <div class="container">
    <div class="contents">
      <div class="doodle-1"></div>
      <div class="doodle-2"></div>
      <div class="doodle-3"></div>
      <div class="doodle-4"></div>
      <div class="doodle-5"></div>
      <div class="success-content ">
        <?php if ((Yii::$app->language == 'fr_FR')): ?>
        <h1 class="font-5 color-3">PROMOTION DÉFI D'ÉCRITURE DE BIC</h1>
        <div class="title"> <span>
          <?= Yii::t(_NP_TEXT_DOMAIN,'Official Rules')?>
          </span> </div>
        <div class="a-left has-table official-tmp">
          <p>AUCUN ACHAT REQUIS POUR PARTICIPER OU GAGNER. UN ACHAT N'AUGMENTERA PAS VOS CHANCES DE GAGNER.  NUL LÀ OÙ LA LOI L'INTERDIT OU LE RESTREINT. </p>
          <ol>
            <li>
              <p><strong><u> vSPONSOR/ADMINISTRATOR</u></strong> : BIC Inc., au 155 Oakdale Rd, Toronto, Ontario, Canada, M3N1W2 (« Commanditaire »). Match Marketing Group, 5225 Satellite Dr, Mississauga, Ontario, L4W5P9 (« Administrateur »).</p>
            </li>
            <li>
              <p><strong><u> DESCRIPTION</u></strong>: La promotion défi d'écriture de BIC (le « Concours ») débute le 9 août 2016 à 12:00:01 heure normale de l'EST (HNE) et se termine le 19 septembre 2016 à 23:59:59 HNE (« Période de participation au Concours »). <strong>En participant au Concours, vous acceptez de respecter les règles officielles ainsi que les décisions du Commanditaire et d'y être lié.</strong></p>
            </li>
            <li>
              <p><strong><u> ADMISSIBILITÉ </u></strong>: <strong><u>Admissibilité au concours </u></strong>: Le Concours s'adresse aux résidents légaux du Canada, et qui y résident, qui dépassent l'âge de la majorité dans leur province ou territoire de résidence au moment de la participation et qui sont parents et/ou tuteurs légaux d'un enfant âgé entre 6 et 18 ans au moment de la participation (« Enfant admissible »). <u>»). Les personnes appartenant à l'une ou l'autre des catégories suivantes ne sont PAS admissibles pour participer au Concours ou gagner un prix : </u>: (a) les employés, représentants ou agents du Commanditaire ou de l'Administrateur et de leurs sociétés mères respectives, ses filiales, ses sociétés affiliées, ses distributeurs, ses filiales, les agences de publicité et promotion; (b) les personnes engagées dans le développement, la production ou la distribution de matériel pour le Concours; (c) les personnes avec qui elles habitent ou qui font partie de la famille immédiate d'une personne appartenant à une des catégories précédentes (y compris la mère, le père, la sœur, le frère, la fille, le fils, le conjoint, la grand-mère, le grand-père, les enfants ou petits-enfants ou leurs conjoints respectifs), peu importe l'endroit où ils vivent; ou les personnes résidant dans la même maison, qu'ils soient reliés ou non, ainsi que toute personne faisant partie d'une des catégories précédentes. Toutes les lois et réglementations fédérales, provinciales et locales en vigueur s'appliquent. Nul là où la loi l'interdit.</p>
            </li>
            <li>
              <p><strong><u> COMMENT PARTICIPER AU CONCOURS </u></strong><u>:</u>Pendant la période d'inscription au concours, visitez le <a href="http://www.bictonpouvoirdecrire.ca">www.bictonpouvoirdecrire.ca</a> (« site Web ») et laissez votre Enfant admissible écrire à la main sa réponse (75 mots ou moins) aux défis d'écriture hebdomadaires sur une feuille 8,5 po X 11 po, puis prenez une photo de la réponse écrite de votre enfant et suivez les directives sur le site Web pour terminer votre inscription de façon complète et exacte avec tous les renseignements requis et téléversez la photo (« la Participation »).  Les Participations doivent être reçues selon les périodes énumérées ci-dessous pour être admissibles aux prix respectifs. Les participants devront entrer leur adresse courriel et cliquez sur « ENTRER MAINTENANT » afin de continuer vers le formulaire d'inscription.  Lors de sa prochaine visite au cours de la période d'inscription au Concours, le participant sera dirigé vers la page des participations pour y inscrire le prénom de l'Enfant admissible, l'initial de son nom de famille et son âge pour accepter les règles officielles, mais il n'aura pas à remplir le formulaire d'inscription en entier puisque le Commanditaire se souviendra des renseignements d'inscription. </p>
              <p>La Participation écrite doit être assez grande pour être lisible en photo, elle ne peut excéder une page de 8,5 po X 11 po ou une longueur de <strong>75</strong> mots.  Les Participations ne doivent pas être créées, améliorées ou modifiées à l'aide d'effets spéciaux, y compris, sans s'y limiter, les filtres ou photoshop.<u>Limite d'une (1) Participation au Concours par personne, par semaine pour chaque Enfant admissible (jusqu'à un maximum de quatre (4) Enfants admissibles par personne)</u>.  Pour plus de précision, une seule personne peut participer au nom de l'Enfant admissible. Vous devez utiliser seulement une (1) adresse courriel pour participer à ce Concours.</p>
              <ol type="A">
                <li>
                  <p><strong><u>DIRECTIVES CONCERNANT LA PARTICIPATION : </u></strong><strong>: </strong></p>
                  <ul>
                    <li>Doit être une inscription unique;</li>
                    <li>Doit être créée et écrite à la main par un Enfant admissible;</li>
                    <li>Doit être rédigée en anglais ou en français;</li>
                    <li>Doit contenir un maximum de 75 mots;</li>
                    <li>Doit être rédigée sur un papier de couleur pâle de 8,5 po X 11 po</li>
                    <li>Doit être remis dans un des formats suivants : JPEG (.jpg, .jpeg ou .jpe) ou PNG; </li>
                    <li>Ne doit pas dépasser 1 Mb; </li>
                    <li>Ne doit pas avoir été soumise auparavant à une promotion quelconque et n'a pas été exposée ou distribuée auparavant dans quelque média que ce soit.</li>
                    <li>Ne doit contenir aucun matériel qui viole ou enfreint les droits d'un autre, y compris, sans s'y limiter, la confidentialité, la publicité ou les droits de propriété intellectuelle, y compris les marques déposées ou la violation du droit d'auteur. </li>
                    <li>Ne doit pas contenir de mot-dièse</li>
                    <li>Ne doit pas discréditer le Commanditaire, l'Administrateur ou tout autre personne ou partie affiliée avec le Concours et l'administration du Concours ou tout autre tiers, ou les produits et services du Commanditaire; </li>
                    <li>Ne doit, en aucun cas, contenir des marques, des marques déposées ou des images de produits autres que celles du Commanditaire. </li>
                    <li>Ne doit contenir aucun renseignement permettant d'identifier quelqu'un; </li>
                    <li>Ne doit contenir aucune image ou photo de personnes;</li>
                    <li>Ne doit contenir aucune image ou illustration créées par quelqu'un d'autre que l'Enfant admissible. </li>
                    <li>Ne doit contenir aucun matériel inapproprié, indécent, profane, obscène, pornographique, vulgaire, indécent, offensant, haineux, délictuel, désobligeant, insultant, abusif, harcelant, raciste, menaçant, diffamatoire, calomnieux ou diffamatoire ou autrement inapproprié à l'affichage ou la publication. </li>
                    <li>Ne doit contenir aucun matériel faisant la promotion du sectarisme, du racisme, de la haine ou du préjudice envers un groupe ou une personne, ni la promotion de la discrimination basée sur la race, le sexe, la religion, la nationalité, le handicap, l'orientation sexuelle ou l'âge; </li>
                    <li>Ne doit contenir aucune déclaration politique ou religieuse</li>
                    <li>Ne doit contenir aucun matériel illégal, en violation de, ou contraire aux lois et règlements de la juridiction où la Participation a été créée; et </li>
                    <li>Ne doit contenir aucune image ou référence à des célébrités ou d'autres figures publiques, vivantes ou décédées.</li>
                  </ul>
                  <p>Vous comprenez que le Commanditaire, à sa seule discrétion, peut disqualifier une Participation pour toute raison, y compris si le Commanditaire détermine, à sa seule discrétion, que la Participation ne respecte pas les règles officielles de quelque façon que ce soit ou qu'elle contient autrement du contenu inacceptable ou sensible comme déterminé par le Commanditaire, à sa seule discrétion. Si votre Participation n’est pas approuvée, vous recevrez un courriel de la part du Commanditaire vous informant que votre Participation n'a pas respecté les Directives concernant la participation. Vous pouvez toujours participer au concours en faisant les ajustements nécessaires à votre Participation et en soumettant de nouveau votre Participation pour cette période de Participation du concours.</p>
                </li>
                <li>
                  <p><strong><u>DROITS ET UTILISATION DE LA PARTICIPATION</u></strong>:</p>
                  <ol type="1">
                    <li><strong>REPRÉSENTATION ET GARANTIES DE LA PARTICIPATION </strong>: Vous déclarez et garantissez que la participation est l'œuvre originale réalisée par votre Enfant admissible et que vous, au nom de votre Enfant admissible, détenez tous les droits sur cette Participation.  <br />
                      Vous acceptez de renoncer à toute réclamation de paiements, de rémunération ou de royautés de quelque sorte que ce soit, maintenant ou dans le futur, de la part du Commanditaire et de l'Administrateur et de leurs sociétés mères, leurs filiales, leurs sociétés affiliées, l'ayant-droit, les concessionnaires et les entités désignées (collectivement, « parties du Commanditaire »), pour toute utilisation de la participation de votre Enfant admissible, y compris le droit d'auteur ou les paiements de marque déposée, les rémunérations ou les royautés. Vous déclarez, garantissez et acceptez qu'aucun autre parti n'est autorisé à réclamer toute forme de paiement, rémunération ou royautés quant à la Participation.  Vous reconnaissez et acceptez que les parties du Commanditaire n'ont aucune obligation ou responsabilité, maintenant ou dans le futur, de façon directe ou indirecte, par procuration, de façon contributive ou autrement, quant à l'infraction ou la protection de tout droit d'auteur dans le matériel élaboré ou créé et contenu dans la Participation de votre Enfant admissible.  </li>
                    <li><strong>GALERIE DU CONCOURS</strong>: La galerie du concours exposera publiquement les Participations (accompagnées du prénom, de l'initiale du nom de famille et de la province ou territoire de l'Enfant admissible ayant créé la Participation) qui auront été approuvées par le Commanditaire comme une section de<a href="www.bictonpouvoirdecrire.ca">www.bictonpouvoirdecrire.ca</a> (la « Galerie du concours »).  Le Commanditaire se réserve le droit d'afficher toutes les Participations dans la galerie du concours à <a href="http://www.bictonpouvoirdecrire.ca">www.bictonpouvoirdecrire.ca</a>.  Le Commanditaire ne garantit l'affichage d'aucune participation et se réserve le droit de retirer toute Participation affichée à tout moment et pour quelque raison que ce soit. Le Commanditaire se réserve le droit de supprimer ou disqualifier toute Participation pour quelque raison que ce soit, à la seule discrétion du Commanditaire, même si une Participation a été affichée dans la galerie du concours</li>
                    <li><strong>UTILISATION DES PARTICIPATIONS </strong>: En participant, vous, au nom de votre Enfant admissible, accordez, par la présente, aux parties du Commanditaire une licence non exclusive pour utiliser, reproduire, distribuer, afficher, effectuer, créer une œuvre dérivée s'inspirant de, et exploiter autrement la Participation et tous les éléments s'y rapportant, éditer ou altérer comme l'entend le Commanditaire, en tout ou en partie, ainsi que le prénom de votre Enfant admissible, la première lettre de son nom de famille, la province ou territoire, ainsi que tout autre matériel, de quelque façon que ce soit, dans tous les médias, actuels ou à venir, dans le monde entier à perpétuité, pour l'usage publicitaire, promotionnel, commercial et autre, sans aucun autre avis, rémunération ou permission, que la Participation soit gagnante ou non. Vous comprenez que les Parties libérées (comme définies ci-dessous) ne sont pas responsables de l'utilisation non autorisée de la Participation par des tiers.  Le Commanditaire n'est pas obligé d’utiliser les droits établis ici.   </li>
                  </ol>
                  <p>Les Participations, accompagnées du prénom, de l'initiale du nom de famille et de la province ou territoire de l'Enfant admissible, peuvent aussi être affichées sur le site Web du Commanditaire et sur les pages de réseaux sociaux.</p>

					<p>Vous acceptez et reconnaissez que les parties du Commanditaire peuvent avoir accès à du matériel semblable ou identique à la Participation de votre Enfant admissible et que ni vous ni votre Enfant admissible n'avez droit à aucune forme de rémunération pour l'utilisation de ce matériel semblable par les parties du Commanditaire.  
</p>
                </li>
                <li>
                  <p><strong><u>CONDITIONS GÉNÉRALES D'INSCRIPTION </u></strong>: Le Commanditaire se réserve le droit, à sa seule discrétion, de maintenir l'intégrité du Concours, y compris le droit d'annuler des inscriptions, y compris, sans s'y limiter, pour les raisons suivantes : plusieurs inscriptions par le même utilisateur à partir d'adresses IP différentes ou à partir d'adresses courriel différentes; défaillances techniques des serveurs ou de la connexion internet; retrait de sa participation par l'utilisateur; mises à jour techniques ou de contenu rendant les inscriptions incompatibles ou incohérentes; conduite inappropriée lors de la promotion des participations (pourriel, harcèlement, offrir des prix ou autres incitatifs, etc.). <br />
	Les inscriptions reçues depuis un compte de courriel ou une personne dépassant la limite énoncée seront annulées, de même que toutes les inscriptions reçues contrevenant aux règles officielles. Les participants ne peuvent soumettre des inscriptions de façon frauduleuse ou inappropriée, comme déterminé par le Commanditaire à sa seule discrétion, y compris, sans s'y limiter, offrir des prix ou d'autres incitatifs à des personnes, échanger des renseignements d'inscription, tenter de s'inscrire plus de fois que le nombre permis présenté, utiliser plusieurs noms ou adresses courriel ou encourager d'autres à faire de même, payer des tiers ou des entreprises pour s'inscrire ou créer des faux comptes pour s'inscrire ou utiliser d'autres méthodes frauduleuses, ou utiliser directement ou indirectement des moyens automatisés ou inappropriés pour s'inscrire ou créer des comptes. Le Commanditaire se réserve le droit de valider toutes les inscriptions reçues par quelque moyen déterminé par le Commanditaire à sa seule discrétion et d'annuler les inscriptions que le Commanditaire considère comme non conformes aux règles officielles.  De plus, tout participant considéré comme présentant un tel comportement sera disqualifié.  Le gagnant potentiel peut être disqualifié s'il se trouve qu'il a bénéficié de participations soumises en violation à ces règles officielles.  
</p>
                </li>
              </ol>
            </li>
            <li>
              <p><strong><u>SÉLECTION DU GAGNANT DU CONCOURS :</u></strong></p>
              <ol type="A">
                <li>
                  <p><strong>Hebdomadaire</strong></p>
                  <p>Six (6) gagnants potentiels hebdomadaires (un [1] par période de participation hebdomadaire) seront choisis par tirage au sort aux environs des dates inscrites dans le tableau des participations ci-dessous parmi toutes les participations admissibles reçues selon les dates et heures du tableau de participation ci-dessous. Il y aura six (6) tirages au sort séparés, un pour chaque période de participation hebdomadaire. Un (1) prix par période de participation hebdomadaire sera remis selon un tirage au sort (chaque tirage au sort est un « tirage » ou des « tirages » différent(s).) Les inscriptions au concours hebdomadaire doivent être uniques et répondre au défi hebdomadaire. Les inscriptions au concours hebdomadaire inscrites à un tirage n'inscrivent pas automatiquement le participant à d'autres tirages. Les inscriptions hebdomadaires non gagnantes au tirage ne seront pas reportées aux tirages ultérieurs. Les participants doivent s'inscrire à la prochaine période d'inscription hebdomadaire pour être admissibles au prochain tirage. Les chances de gagner un prix hebdomadaire dépendent du nombre d'inscriptions admissibles reçues chaque semaine. </p>
                  <p><strong> TABLEAU DES INSCRIPTIONS :</strong></p>
                  <table border="1">
                    <tbody>
                      <tr>
                        <td width="122"><p><strong>Période d'inscription hebdomadaire :</strong></p>
                          <p><strong> </strong></p></td>
                        <td width="117"><p><strong>Dates hebdomadaires d'avis aux gagnants du tirage au sort et des périodes d'inscription hebdomadaires :</strong> </p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>9 août  12h00 HNE, 2016 au 15 <br />août 23h59 HNE, 2016
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>16 août, 9h00  </strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>16 août  00h00 HNE, 2016 au 22 août 23h59 HNE, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>23 août 2016 - 9h00</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>23 août  00h00 HNE, 2016 au 29 août 23h59 HNE, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>30 août 2016 - 9h00</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>30 août  00h00 HNE, 2016 au 5 septembre 23h59 HNE, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>6 septembre 2016 - 9h00</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>6 septembre  00h00 HNE, 2016 au 12 septembre 23h59 HNE, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>13 septembre 2016 - 9h00</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>13 septembre  00h00 HNE, 2016 au 12 septembre 23h59 HNE, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>20 septembre 2016 - 9h00</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>9 août 2016, 00h00 HNE, au 19 septembre 23h59 HNE, 2016</strong></p>
                          <p><strong> </strong></p></td>
                        <td width="117"><p><strong>Tirage du grand prix : 20 septembre, 9h00 </strong></p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p><strong> </strong></p>
                </li>
                <li>
                  <p><strong>Grand prix</strong></p>
                  <p>Un (1) gagnant potentiel du grand prix sera sélectionné par tirage au sort dans les environs du 20 septembre 2016, 9h00 HNE, parmi toutes les inscriptions admissibles reçues durant les périodes d'inscription hebdomadaires ci-dessus (« Période d'inscription pour le grand prix »). Toutes les participations hebdomadaires non gagnantes seront également incluses dans le tirage du grand prix.</p>
                </li>
              </ol>
            </li>
            <li>
              <p><strong><u>PRIX DU CONCOURS </u></strong>: Sept (7) prix seront remis dans le cadre de ce concours :</p>
              <ul>
                <li>Un (1) gagnant du grand prix du concours recevra 5 000 $, remis sous forme de chèque.</li>
                <li>Six (6) gagnants des prix hebdomadaires du concours remporteront un lot BIC sélectionné par le Commanditaire ainsi qu'une carte-cadeau Wal-Mart ou Staples.  Chaque lot est d'une valeur de 150,00 $ CA.</li>
              </ul>
              <p>Les prix hebdomadaires sont décernés « tel quel » sans aucune garantie, expresse ou implicite. Les prix ne sont ni transférables, ni remplaçables, ni monnayables, sauf à la seule discrétion du Commanditaire. Le Commanditaire se réserve le droit de remplacer un prix par un autre prix de valeur égale ou supérieure, à sa seule discrétion. Veuillez prévoir de 6 à 8 semaines pour la livraison des prix hebdomadaires et du grand prix. Les cartes-cadeaux sont sujettes aux conditions générales établies par l'émetteur. Limite de un (1) prix hebdomadaire par personne/adresse courriel/par ménage. Tous les détails des prix sont à la seule discrétion du Commanditaire.</p>
            </li>
            <li>
              <p><strong><u>VÉRIFICATION/AVIS AUX GAGNANTS DU CONCOURS </u></strong>: Les gagnants potentiels du grand prix et des concours hebdomadaires (« gagnants potentiels ») seront avisés par téléphone ou par courriel dans les environs du 15 août 2016 jusqu'au 26 septembre 2016. Pour être déclaré gagnant officiel du Concours et recevoir le prix du Concours, le gagnant potentiel doit répondre correctement à une question d'habileté mathématique.  Si un gagnant potentiel est jugé inadmissible pour toute raison, ou non conforme aux règlements officiels, refuse le prix, ou si l'avis envoyé par le Commanditaire est retourné comme non distribuable, toute absence de réponse par un gagnant potentiel à l'intérieur du délai de réponse prescrit, ou un gagnant potentiel est inaccessible pour toute raison, le prix sera annulé et le Commanditaire pourra décerner le prix à un autre gagnant potentiel. Si un gagnant potentiel ne peut être joint ou ne répond pas à l'intérieur d'un délai de cinq (5) jours civils suivant le premier avis, le prix peut être annulé et un autre gagnant potentiel peut être avisé. <strong>Les gagnants potentiels devront signer une déclaration d'admissibilité, une décharge de responsabilité et remplir une décharge de publicité à retourner à l'intérieur de cinq (5) jours civils suivants l'avis initial.</strong> Le non-respect de ce délai par le gagnant potentiel entraînera la disqualification du gagnant potentiel et le prix pourra être remis à un autre gagnant potentiel. Les avis par courriels seront considérés comme ayant été effectués à la date de la première tentative de contact par courriel avec le gagnant potentiel par le Commanditaire ou son représentant. Le Commanditaire n'est pas responsable de tout changement apporté à l'adresse de courriel du participant ou des tentatives infructueuses d'aviser le gagnant potentiel.</p>
            </li>
            <li>
              <p><strong><u>ACCORD PUBLICITAIRE </u></strong>: La Participation et/ou l'inscription et l'acceptation du prix du Concours représentent pour le Commanditaire l'autorisation d'utiliser le prénom de l'Enfant admissible, son âge et sa ressemblance ainsi que l'âge des gagnants du Concours, leur ville, leur province ou territoire, leur ressemblance et/ou photo et leurs déclarations à des fins de publicité ou d'échange et tout autre motif, de quelque façon que ce soit, dans tous les médias, et dans tous les médias actuels ou futurs à l'échelle mondiale, y compris l'Internet et les sites de réseaux sociaux, sans autre avis ou rémunération, ou autorisation des gagnants du Concours, sauf si interdit par la loi à perpétuité.</p>
            </li>
            <li>
              <p><strong><u>CONDITIONS GÉNÉRALES</u></strong>: En s'inscrivant, les participants acceptent que le Commanditaire, l'Administrateur et leurs sociétés mères respectives, les sociétés affiliées, les filiales et les agences de publicité et promotion et leurs responsables respectifs, les directeurs, les employés, les représentants et les agents (collectivement, « Parties libérées ») ne seront pas tenus responsables, de quelque façon que ce soit, et seront tenus indemnes par les participants contre toute responsabilité, toutes les blessures, pertes ou dommages de toute nature, y compris la mort, à des personnes ou des biens, découlant en tout ou en partie, directement ou indirectement, de l'acceptation, la possession, l'utilisation abusive ou d'un prix (y compris les voyages ou activités qui y sont liés) ou de la participation à ce Concours.  Les Parties libérées ne sont pas responsables des Participations ou des inscriptions ou courriels perdus, en retard, incomplets, erronés, volés, détournés, non livrés, retardés, tronqués, illisibles ou endommagés; ou pour les réseaux, serveurs, fournisseurs de service internet, site Web ou toute autre connexion perdue, interrompue ou non disponible, la disponibilité ou l'accessibilité ou la mauvaise communication ou les défaillances informatiques, de satellite, de téléphone ou des transmissions par câbles, par lignes, ou les défaillances techniques, les transmissions confuses, mélangées, retardées ou mal dirigées ou le matériel informatique ou les défaillances de logiciel, les défaillances et difficultés ou les autres erreurs ou difficultés de toute sorte, qu'elles soient humaines, mécaniques, électroniques, informatiques, de réseaux, typographiques, d'impression ou autrement liées au Concours, y compris, sans s'y limiter, les erreurs et difficultés qui peuvent survenir en lien avec l'administration du Concours, le processus de Participation ou les inscriptions, l'annonce des prix ou tout matériel lié au Concours. Les Parties libérées ne peuvent être tenues responsables des renseignements incorrects ou erronés, causés par les utilisateurs du site, l'altération, le piratage ou par tout équipement ou programmation associé avec ou utilisé dans le cadre du Concours.  Les Parties libérées ne peuvent être tenues responsables des dommages causés à l'ordinateur du participant ou d'une autre personne en lien avec ou résultant de la participation à ce Concours ou du téléchargement de matériel depuis le site Web ou de son utilisation.  Les personnes qui trafiquent ou abusent de tout aspect du Concours ou site Web ou qui enfreignent les règles officielles, selon la seule détermination du Commanditaire, seront disqualifiées et toutes les Participations et/ou inscriptions associées seront annulées.  Si pour quelque raison que ce soit, le Concours ne peut se dérouler comme prévu en raison d'une infection par un virus informatique, d'un bogue, de sabotage, d'une intervention non autorisée, de fraude, de défaillances techniques ou de toute autre cause qui contrevient à l'administration ou au déroulement approprié du Concours, le Commanditaire se réserve le droit, sous réserve de l'approbation de la Régie des alcools, des courses et des jeux, à sa seule discrétion, d'annuler, de mette fin, de modifier ou de suspendre le Concours ou tout élément de celui-ci ou de disqualifier toute personne trafiquant le processus de Participation ou d'inscription. Si le Concours est annulé, le Commanditaire peut choisir au hasard les gagnants des prix du Concours restants parmi toutes les inscriptions admissibles non suspectes reçues à temps lors des périodes en vigueur pour les inscriptions hebdomadaires et pour l'inscription au grand prix ou autrement jugées justes et appropriées par le Commanditaire. L'usage de lancement automatisé ou de logiciel de saisie ou de tout autre moyen mécanique ou électronique permettant au participant de s'inscrire automatiquement à plusieurs reprises est interdit. Les inscriptions jugées ou soupçonnées d'avoir été soumises de cette façon seront déclarées « nulles » par le Commanditaire.  </p>
              <p>Le Commanditaire se réserve le droit de suspendre, d'annuler ou de modifier le Concours à tout moment, sous réserve de l'approbation de la Régie des alcools, des courses et des jeux du Québec, pour quelque raison que ce soit, y compris la fraude, les défaillances techniques, y compris toute défaillance du réseau des serveurs ou du matériel informatique, les virus, les bogues, les erreurs de programmation, ou les autres erreurs ou causes hors du contrôle du Commanditaire, qui contreviennent à l'administration, à la sécurité, à l'intégrité ou au bon déroulement du Concours.  </p>
              <p><strong><u>RÉSIDENTS DU QUÉBEC </u></strong>: un différend quant à l’organisation ou à la conduite d’un concours publicitaire peut être soumis à la Régie des alcools, des courses et des jeux afin qu'il soit tranché.  Un différend quant à l’attribution du prix peut être soumis à la Régie uniquement aux fins d’une intervention pour tenter de le régler</p>
            </li>
            <li>
              <p><strong><u>DIFFÉREND </u></strong>:   Ce Concours est interrompu en vertu des lois de la province de l'Ontario, sans considération des conflits en matière de principes juridiques. Sauf là où interdit par la loi, une des conditions pour participer à ce Concours veut que les participants acceptent que tout différend ne pouvant être réglé entre les parties, ainsi que les causes d'actions émanant de ce Concours ou y étant reliées, soient réglés de façon individuelle, sans recourir à aucune forme de recours collectif, exclusivement devant un tribunal ayant la compétence situé à Toronto, en Ontario. De plus, lors de tel différend, le participant ne pourra, sous aucune circonstance, obtenir des prix pour, et, par la présente, renonce à tous droits de réclamation en dommages-intérêts punitifs, consécutifs ou indirects, y compris les frais d'avocats, autres que pour les coûts réels liés à l'inscription à la promotion, le participant renonce également à tous droits de voir ses dommages multipliés ou augmentés.</p>
            </li>
            <li>
              <p><strong><u>COLLECTION DE DONNÉES </u></strong>:  Tous les renseignements de Participation seront retenus et utilisés en conformité avec les règlements officiels et la politique de confidentialité du Commanditaire disponibles à l'adresse <a href="http://www.bictonpouvoirdecrire.ca">www.bictonpouvoirdecrire.ca.</a></p>
            </li>
            <li>
              <p><strong><u>LISTE DES GAGNANTS DU CONCOURS </u></strong>: Pour obtenir les noms des gagnants (disponibles après le 14 octobre 2016), envoyez une enveloppe-réponse no 10 préaffranchie, d'ici le 15 novembre 2016, au : Demande de liste des gagnants, « Défi d'écriture de BIC » Concours, 155 Oakdale Rd, Toronto, Ontario, Canada, M3N1W2</p>
            </li>
          </ol>
          <p>&nbsp;</p>
          <p>©2016 BIC Inc.</p>
          <p>&nbsp;</p>
        </div>
        <?php else: ?>
        <h1 class="font-5 color-3">BIC's HANDWRITING CHALLENGE PROMOTION</h1>
        <div class="title"> <span>
          <?= Yii::t(_NP_TEXT_DOMAIN,'Official Rules')?>
          </span> </div>
        <div class="a-left has-table official-tmp">
          <p><strong>NO PURCHASE NECESSARY TO ENTER OR WIN. A PURCHASE WILL NOT INCREASE YOUR CHANCES OF WINNING.  VOID WHERE PROHIBITED OR RESTRICTED BY LAW. </strong></p>
          <ol>
            <li>
              <p><strong><u> SPONSOR/ADMINISTRATOR</u></strong>: BIC Inc., at 155 Oakdale Rd, Toronto, Ontario, Canada, M3N1W2 (“Sponsor”). Match Marketing Group, 5225 Satellite Dr, Mississauga, Ontario, L4W5P9 ("Administrator").</p>
            </li>
            <li>
              <p><strong><u> DESCRIPTION</u></strong>: BIC's Handwriting Challenge Promotion (the "Contest") begins August 9, 2016 at 12:00:01 PM Eastern Time (“ET”) and ends September 19, 2016 at 11:59:59 PM ET ("Contest Submission Period"). <strong>By participating in the Contest you agree to abide by and be bound by these Official Rules and the decisions of Sponsor.</strong></p>
            </li>
            <li>
              <p><strong><u> ELIGIBILITY</u></strong>: <strong><u>Contest Eligibility</u></strong>: The Contest is open to individuals who are legal residents of, and reside in, Canada and are over the age of majority in their province or territory of residence at the time of entry and a parent and/or legal guardian of a child age 6 to 18 at the time of entry (“Eligible Child”) . <u>Persons in any of the following categories are NOT eligible to enter the Contest or win a Prize</u>: (a) employees, representatives or agents of Sponsor and Administrator and their respective parent companies, subsidiaries, affiliates, distributors, subsidiaries, advertising and promotion agencies; (b) individuals engaged in the development, production or distribution of materials for the Contest; (c) persons with whom they are domiciled or who are in the immediate family of a person in any of the preceding categories (including mother, father, sister, brother, daughter, son, spouse, grandmother, grandfather, children or grandchildren or any of their respective spouses), regardless of where they live; or persons who reside in the same household, whether related or not, as any person in any of the preceding categories. All applicable federal, provincial and local laws and regulations apply. Void where prohibited or restricted by law.</p>
            </li>
            <li>
              <p><strong><u> HOW TO ENTER THE CONTEST</u></strong><u>:</u> During the Contest Submission Period visit <a href="http://www.bicfightforyourwrite.ca">www.bicfightforyourwrite.ca</a> (“Website”) and have your Eligible Child handwrite their response (75 words or less) to the weekly handwriting challenges on a piece of 8.5” X 11” paper, then take a photo of your child's handwritten response and follow the directions on the Website to complete the registration form fully and accurately with all the required information and upload the photo (the “Submission”).  Submissions must be received as per below periods to be eligible for the respective prizes. Participants will be required to enter their email address and click “ENTER NOW” to continue to the registration form.  On the next visit during the Contest Submission Period, the entrant will be directed to the submission page to enter their Eligible Child's first name, last initial and age and to accept the Official Rules, but will not be required to complete the entire registration form as their entry information will be remembered by the Sponsor.</p>
              <p>The handwritten Submission must be large enough to be legible via the photo, cannot exceed one 8.5” x 11” page or <strong>75</strong> words in length.  Submissions should not be created, enhanced or modified using any special effects, including, without limitation, filters or photoshop. <u>Limit of one (1) Contest Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children per person)</u>.  For greater clarity, only one person can enter on behalf of any Eligible Child. You may only use one (1) email address to participate in this Contest.</p>
              <ol type="A">
                <li>
                  <p><strong><u>SUBMISSION GUIDELINES</u></strong><strong>: </strong></p>
                  <ul>
                    <li>Must be a unique entry;</li>
                    <li>Must be created and handwritten by an Eligible Child;</li>
                    <li>Must be in English or French;</li>
                    <li>Must contain no more than 75 words;</li>
                    <li>Must be written on a light colored 8.5” X 11” type paper<br />
                      Must be in any one of the following file formats: JPEG (.jpg, .jpeg or .jpe) or PNG; </li>
                    <li>Must not exceed 1 MB; </li>
                    <li>Must not have been submitted previously in a promotion of any kind and has not been exhibited or distributed previously in any media;</li>
                    <li>Must not contain material that violates or infringes another's rights, including but not limited to privacy, publicity or intellectual property rights, including trademark or copyright infringement;</li>
                    <li>Must not contain hashtags;</li>
                    <li>Must not disparage Sponsor, Administrator, or any other person or party affiliated with the Contest and administration of the Contest or any third party, or Sponsor's products or services;</li>
                    <li>Must not in any way contain any brand names, trademarks or product images other than those of Sponsor;</li>
                    <li>Must not include personally-identifiable information;</li>
                    <li>Must not contain any images or photographs of any person;</li>
                    <li>Must not contain images or artwork not created by Eligible Child;</li>
                    <li>Must not contain material that is inappropriate, indecent, profane, lewd, pornographic, vulgar, obscene, offensive, hateful, tortious, derogatory, insulting, abusive, harassing, racist, threatening, defamatory, slanderous or libelous or otherwise unsuitable for display/publication;</li>
                    <li>Must not contain material that promotes bigotry, racism, hatred or harm against any group or individual or promotes discrimination based on race, gender, religion, nationality, disability, sexual orientation or age;</li>
                    <li>Must not contain political or religious statements;</li>
                    <li>Must not contain material that is unlawful, in violation of, or contrary to the laws or regulations in any jurisdiction where the Submission is created; and</li>
                    <li>Must not contain any images or references to celebrities and/or other public figures, living or dead.</li>
                  </ul>
                  <p>You understand that Sponsor, in its sole discretion, may disqualify any Submission for any reason, including if it determines that the Submission fails to conform to these Official Rules in any way or otherwise contains unacceptable or sensitive content as determined by Sponsor, in its sole discretion. If your Submission is not approved you will receive an email by the Sponsor advising that your Submission did not adhere to the Submission Guidelines. You can still participate in the Contest by making the necessary adjustments to your Submission and reentering your Submission for that Contest Submission Period.</p>
                </li>
                <li>
                  <p><strong><u>RIGHTS IN AND USE OF SUBMISSION</u></strong>:</p>
                  <ol type="1">
                    <li><strong>SUBMISSION REPRESENTATION AND WARRANTIES</strong>: You represent and warrant that the Submission is your Eligible Child's own original work and you, on behalf of your Eligible Child, own all the rights to the Submission.<br />
                      You agree to waive all claims to receive any payments, compensation and/or royalties of any kind now or in the future from the Sponsor and Administrator and their respective parents, affiliates, subsidiaries, assigns, licensees, and designees (collectively, “Sponsor Parties”), for any use of your Eligible Child's Submission, including copyright or trademark payments, compensation and/or royalties. You represent, warrant and agree that no other party is entitled to claim any payments, compensation and/or royalties with respect to the Submission.  You acknowledge and agree that the Sponsor Parties have no duty or liability, now or in the future, direct or indirect, vicarious, contributory or otherwise, with respect to the infringement or protection of any copyright in any materials developed or created and incorporated into the Submission by your Eligible Child.</li>
                    <li><strong>CONTEST GALLERY</strong>: The Contest Gallery will publicly display the Submissions (along with the first name, last initial, and province/territory of the Eligible Child who created the Submission) that have been approved by the Sponsor as a section on <a href="http://www.bicfightforyourwrite.ca">www.bicfightforyourwrite.ca</a> (the “Contest Gallery”).  Sponsor reserves the right to post any and/or all Submissions in the Contest Gallery at <a href="http://www.bicfightforyourwrite.ca">www.bicfightforyourwrite.ca</a>.  Sponsor does not guarantee the posting of any Submission and reserves the right to remove any posted Submission at any time or for any reason. Sponsor reserves the right to delete and/or disqualify any Submission for any reason, in Sponsor's sole opinion and discretion, even if a Submission has been posted to the Contest Gallery.</li>
                    <li><strong>USE OF SUBMISSIONS</strong>: By making a Submission, you, on behalf of your Eligible Child, hereby grant to Sponsor Parties a nonexclusive license to use, reproduce, distribute, display, perform, create derivative works based upon, and otherwise exploit the Submission and all elements embodied therein, edited or altered as Sponsor sees fit, in whole or in part, together with your Eligible Child's first name, last initial, province/territory, together with any other material, in any manner, in any and all media, now known or hereafter devised, throughout the world in perpetuity, for advertising, promotional, commercial and other purposes, without further compensation, notification or permission, whether or not the Submission is a winning Submission. You understand that Released Parties (as defined below) are not responsible for any unauthorized use of Submission by third parties.  Sponsor has no obligation to make use of the rights granted herein.</li>
                  </ol>
                  <p>Submissions, along with the first name, last initial and province/territory of the Eligible Child, may also be featured on the Sponsor's Website and social media pages.</p>
                  <p>You agree and acknowledge the Sponsor Parties may have access to material that is similar or identical to your Eligible Child's Submission and that neither you nor your Eligible Child are entitled to any compensation for any use by the Sponsor Parties of this similar material.</p>
                </li>
                <li>
                  <p><strong><u> GENERAL ENTRY CONDITIONS</u></strong>: Sponsor has the right, in its sole discretion, to maintain the integrity of the Contest including the right to void entries, including, but not limited to, for the following reasons: multiple entries from the same user from different IP addresses or from different email addresses; technical malfunction of servers or internet connection; user(s) recanting their own entries; technical or content upgrades that render entries incompatible or inconsistent; and inappropriate conduct in promoting entries (spam, harassment, offering prizes or other inducements, etc.). <br />
                    <br />
                    Entries received from any email account or person in excess of the stated limitations will be void, as will any entries received in violation of the Official Rules. Entrants are prohibited from submitting entries, by any fraudulent or inappropriate means, as determined by Sponsor in its sole discretion, including, without limitation, offering prizes or other inducements to any person, trading or exchanging entry information, attempting to enter more than the number of times authorized herein using multiple names or email addresses or encouraging others to do so, paying third parties or companies to enter and/or create fictitious accounts for entry or using other fraudulent or deceptive entry mechanisms, or directly or indirectly using automated or improper means to enter or create accounts. Sponsor reserves the right to validate all entries received through any such means as determined by Sponsor in its sole discretion, and void any entries Sponsor deems do not comply with these Official Rules.  In addition, any entrant deemed to be involved in such behavior shall be disqualified.  Potential winner may be disqualified if they are found to have benefited from entries submitted in violation of these Official Rules.</p>
                </li>
              </ol>
            </li>
            <li>
              <p><strong><u>CONTEST WINNER DETERMINATION:</u></strong></p>
              <ol type="A">
                <li>
                  <p><strong>Weekly</strong></p>
                  <p>Six (6) potential weekly Contest Prize winners (one (1) per Weekly Entry Period) will be randomly selected on or about the dates stated in the Entry Chart below from among all eligible entries received as of the dates/times in the Entry Chart below. There will be six (6) separate random drawings conducted, one for each Weekly Entry Period. One (1) prize per Weekly Entry Period will be awarded in a random drawing (each random drawing is a separate “Drawing(s)”). Weekly Contest entries must be unique and responsive to each weekly challenge. Weekly Contest entries entered into one Drawing do not automatically enter a participant into other Drawings. Non-winning weekly entries for the Drawings will not be carried over to subsequent Drawings. Participants must reenter the next Weekly Entry Period to be eligible for the next Drawing. Odds of winning a weekly Contest Prize depends upon the number of eligible Contest entries received for each week.</p>
                  <p><strong> ENTRY CHART:</strong></p>
                  <table border="1">
                    <tbody>
                      <tr>
                        <td width="122"><p><strong>Weekly Entry Period:</strong></p>
                          <p><strong> </strong></p></td>
                        <td width="117"><p><strong>Drawing &amp; Weekly Entry Period Weekly Winner Notification Dates:</strong> </p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>August 9<sup>th</sup> 12:00PM EST, 2016 to <br />
                            August 15<sup>th</sup> 11:59PM
                            EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>August 16<sup>th</sup>, 9:00am </strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>August 16<sup>th</sup> 12:00AM EST, 2016 to August 22<sup>nd</sup> 11:59PM
                            EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>August 23<sup>rd</sup>, 2016 - 9:00am</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>August 23<sup>rd</sup> 12:00AM EST, 2016 to August 29<sup>th</sup> 11:59PM
                            EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>August 30<sup>th</sup>, 2016 - 9:00am</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>August 30<sup>th</sup> 12:00AM EST, 2016 to September 5<sup>th</sup> 11:59PM
                            EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>September 6<sup>th</sup>, 2016 - 9:00am</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>September 6<sup>th</sup> 12:00AM EST, 2016 to September 12<sup>th</sup> 11:59PM EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>September 13<sup>th</sup>, 2016 - 9:00am</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>September 13<sup>th</sup> 12:00AM EST, 2016 to September 19<sup>th</sup> 11:59PM EST, 2016</strong></p>
                          <p>&nbsp;</p></td>
                        <td width="117"><p><strong>September 20<sup>th</sup>, 2016 – 9:00am</strong></p></td>
                      </tr>
                      <tr>
                        <td width="122"><p><strong>August 9<sup>th</sup>, 2016, 12:00AM EST, to September 19<sup>th</sup> 11:59PM EST, 2016</strong></p>
                          <p><strong> </strong></p></td>
                        <td width="117"><p><strong>Grand Prize Draw: September 20<sup>th</sup>, 9:00am </strong></p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p><strong> </strong></p>
                </li>
                <li>
                  <p><strong>Grand Prize</strong></p>
                  <p>One (1) potential Grand Prize winner will be randomly selected on or about September 20th, 2016, 9:00am EST from all eligible entries received during the Weekly Entry Periods described above (“Grand Prize Entry Period”). All non-winning weekly submissions will also be included in the Grand Prize drawing.</p>
                </li>
              </ol>
            </li>
            <li>
              <p><strong><u>CONTEST PRIZES</u></strong>: Seven (7) Contest Prizes will be awarded:</p>
              <ul>
                <li>One (1) Grand Prize Contest Winner will receive $5,000; Prize will be awarded as a cheque.</li>
                <li>Six (6) Weekly Prize Contest Winners will receive a $150 gift card (from a National Retailer) and a BIC Product Prize pack valued at $50.00 each.</li>
              </ul>
              <p>Weekly Prizes are awarded “as is” with no warranty or guarantee, either express or implied. Prizes may not be transferred, substituted or redeemed for cash, except at the Sponsor's sole discretion. Sponsor reserves the right to substitute a prize of comparable or greater value, at its sole discretion. Allow 6-8 weeks for delivery of Weekly and Grand Prize. Gift card subject to terms and conditions set forth by the issuer. Limit one (1) Weekly Prize per person/email address/per household. All prize details are at Sponsor's sole discretion.</p>
            </li>
            <li>
              <p><strong><u>CONTEST WINNERS VERIFICATION/NOTIFICATION</u></strong>: Potential Grand Prize and Weekly Contest Winners ("Potential Winners") will be notified by telephone and/or email on or about August 15, 2016 through September 27, 2016. To be declared an Official Contest Winner and receive the Contest Prize, the Potential Winner must correctly answer a mathematical skill-testing question. If a Potential Winner is found to be ineligible for any reason, or not in compliance with these Official Rules, declines to accept a prize, or if the notification that the Sponsor sends is returned as undeliverable, any non-response by a Potential Winner within the prescribed response period, or a Potential Winner is otherwise unreachable for any reason, the prize will be forfeited and Sponsor may award the prize to an alternate Potential Winner. If a Potential Winner cannot be reached or fails to respond for a period of five (5) calendar days following first attempted notification, prize may be forfeited and an alternate Potential Winner may be notified. <strong>Potential Winners will be required to sign a Declaration of Eligibility/Release of Liability and Publicity Release to be completed, executed, and returned within five (5) calendar days of initial notification.</strong> Non-compliance by the Potential Winner within this time frame will result in the Potential Winner being disqualified, and the prize may be awarded to an alternate Potential Winner. Email notification shall be deemed to have occurred on the date Sponsor or Sponsor's designee first attempts to make email contact with the Potential Winner. Sponsor is not responsible for any change in entrant's email address or unsuccessful efforts to notify the Potential Winner.</p>
            </li>
            <li>
              <p><strong><u>PUBLICITY GRANT</u></strong>: Submission and/or entry and acceptance of the Contest Prize constitutes permission for Sponsor to use Eligible Child's first name, age and likeness and Contest winners, age, city, province/territory, likeness and/or photograph and statements for advertising/trade and all other purposes, in any manner, in any and all media, and all media now or hereafter known worldwide, including the Internet and social networking sites, without further compensation or notification to, or permission from any Contest winner, unless prohibited by law in perpetuity.</p>
            </li>
            <li>
              <p><strong><u>GENERAL CONDITIONS</u></strong>: Entrants, by participating, agree that Sponsor, Administrator, and their respective parents, affiliates, subsidiaries and advertising and promotion agencies and all of their respective officers, directors, employees, representatives and agents (collectively, “Released Parties”) will have no liability whatsoever for, and shall be held harmless by entrants against, any liability, for any injuries, losses or damages of any kind, including death, to persons, or property resulting in whole or in part, directly or indirectly, from acceptance, possession, misuse or use of prize(s) (including any travel or activity related thereto) or participation in this Contest.  Released Parties  are not responsible for lost, late, incomplete, inaccurate, stolen, misdirected, undelivered, delayed, garbled, illegible or damaged Submissions and/or entries or email; or for lost, interrupted or unavailable network, server, Internet Service Provider (ISP), Website, or other connections, availability or accessibility or miscommunications or failed computer, satellite, telephone or cable transmissions, lines, or technical failure or jumbled, scrambled, delayed, or misdirected transmissions or computer hardware or software malfunctions, failures or difficulties, or other errors or difficulties of any kind whether human, mechanical, electronic, computer, network, typographical, printing or otherwise relating to or in connection with the Contest, including, without limitation, errors or difficulties which may occur in connection with the administration of the Contest, the processing of Submission and/or entries, the announcement of the prizes or in any Contest-related materials. Released Parties are also not responsible for any incorrect or inaccurate information, whether caused by site users, tampering, hacking, or by any equipment or programming associated with or utilized in the Contest.  Released Parties are not responsible for injury or damage to entrants' or to any other person's computer related to or resulting from participating in this Contest or downloading materials from or use of the Website.  Persons who tamper with or abuse any aspect of the Contest or Website or who are in violation of these Official Rules, as solely determined by Sponsor, will be disqualified and all associated Submissions and/or entries will be void.  If for any reason the Contest is not capable of running as planned due to infection by computer virus, bugs, tampering, unauthorized intervention, fraud, technical failures, or any other causes, which corrupts or affects the administration or proper conduct of the Contest, the Sponsor reserves the right, subject to the approval of the Régie des alcools, des courses et des jeux, at its sole discretion, to cancel, terminate, modify or suspend the Contest and/or Contest or any element thereof and/or to disqualify any individual who tampers with the Submission and/or entry process. If the Contest is cancelled, Sponsor may randomly select the remaining Contest Prize Winners from among all non-suspect, eligible entries received up to time of such action for the applicable Weekly Entry Period/Grand Prize Entry Period or as otherwise deemed fair and appropriate by Sponsor. The use of any automated launching or entry software or any other mechanical or electronic means that permits the entrant to automatically enter repeatedly is prohibited. Any entries found or suspected to be submitted in this manner will be deemed ‘void' by the Sponsor.</p>
              <p>The Sponsor reserves the right to suspend, cancel or modify the Contest at any time, subject to the approval of the Regie des alcools, des courses et des jeux in Quebec, for any reason, including fraud, technical failures including any network server or hardware failure, viruses, bugs, errors in programming, or any other errors or other causes beyond the control of Sponsor, that corrupt the administration, security, integrity or proper play of the Contest.</p>
              <p><strong><u>FOR QUEBEC RESIDENTS</u></strong>: any litigation respecting the conduct or organization of a publicity contest may be submitted to the Régie des alcools, des courses et des jeux for a ruling.  Any litigation respecting the awarding of a prize may be submitted to the Régie only for the purpose of helping the parties reach a settlement.</p>
            </li>
            <li>
              <p><strong><u>DISPUTES</u></strong>:  This Contest shall be interrupted in accordance with the laws of the province of Ontario, without respect to conflict of law doctrines. Except where prohibited by law, as a condition of participating in this Contest, entrants agree that any and all disputes which cannot be resolved between the parties, and causes of action arising out of or in connection with this Contest, shall be resolved individually, without resort to any form of class action, exclusively before a court located in Toronto, Ontario having jurisdiction. Further, in any such dispute, under no circumstances will entrants be permitted to obtain awards for, and hereby waive all rights to claim punitive, incidental or consequential damages, including attorneys' fees, other than entrant's actual out-of-pocket costs associate with entering the Promotion, and entrant further waives all rights to have damages multiplied or increased.</p>
            </li>
            <li>
              <p><strong><u>DATA COLLECTION</u></strong>:  All Submission information will be held and used in accordance with the Official Rules and Sponsor's Privacy Policy located at <a href="http://www.bicfightforyourwrite.ca">www.bicfightforyourwrite.ca.</a></p>
            </li>
            <li>
              <p><strong><u>WINNER'S LIST CONTEST</u></strong>: For the names of the winners (available after October 14, 2016), send a self-addressed, postage stamped #10 envelope by November 15, 2016 to: Winner's List Request, “BIC Handwriting Challenge ” Contest, 155 Oakdale Rd, Toronto, Ontario, Canada, M3N1W2</p>
            </li>
          </ol>
          <p>&nbsp;</p>
          <p>©2016 BIC Inc.</p>
          <p>&nbsp;</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
