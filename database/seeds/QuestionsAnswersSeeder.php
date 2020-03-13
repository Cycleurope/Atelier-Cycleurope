<?php

use Illuminate\Database\Seeder;
use App\Models\QuestionAnswer;

class QuestionsAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionAnswer::create([
            'question' => 'J’ai reçu un colis, le carton et son contenu sont détériorés. Que dois-je faire ?',
            'answer' => '<p>Dans le cas où votre colis a subi une détérioration, et que le contenu aussi est abîmé, il est impératif de suivre les étapes suivantes&nbsp;:</p><ol><li>je contacte rapidement le Service Après-Vente de Cycleurope au <span style="color: rgb(17, 17, 20);">03.25.39.39.39 </span>pour signaler le problème,</li><li><span style="color: rgb(0, 0, 0);">j’émets des réserves sur le bon de livraison en détaillant le défaut, le nombre de colis, la dégradation ou les produits manquant,</span></li><li><span style="color: rgb(0, 0, 0);">je prends en photos le colis ou la pièce défectueuse sous différents angles,</span></li><li><span style="color: rgb(0, 0, 0);">j’envoie les réserves émises par courrier recommandé avec accusé de réception au transporteur dans les 3 jours ouvrés suivant la livraison.<span class="ql-cursor">﻿</span></span></li></ol><p><br></p><p>En cas extrême, je peux refuser le colis si trop de pièces sont abîmées.</p><p><br></p><p><span style="color: rgb(0, 0, 0);">Les mentions </span><strong style="color: rgb(0, 0, 0);"><em>«&nbsp;sous réserve de déballage&nbsp;»</em></strong><span style="color: rgb(0, 0, 0);">, </span><strong style="color: rgb(0, 0, 0);"><em>«&nbsp;colis cassé&nbsp;»</em></strong><span style="color: rgb(0, 0, 0);"> ou </span><strong style="color: rgb(0, 0, 0);"><em>«&nbsp;colis endommagé&nbsp;»</em></strong><span style="color: rgb(0, 0, 0);"> n’ont aucune valeur légale. Détaillez plutôt l’état des pièces abîmées et l’endroit du problème (par exemple&nbsp;: colis ouvert, fourche du vélo tordue, etc…). Si aucune réserve n’est mentionnée lors de la livraison, la marchandise est déclarée comme acceptée par le client et aucun recours ne pourra avoir lieu par la suite.</span></p>'
        ]);

        QuestionAnswer::create([
            'question' => 'J’ai reçu un colis mais le vélo ou une pièce est abimée. Que dois-je faire ?',
            'answer' => '<p>En ouvrant vos différents colis vous vous apercevez qu’une pièce est endommagée&nbsp;?</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;J’émets des réserves sur le bon de livraison en détaillant le défaut ou la dégradation,</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;J’envoie un email à sav@cycleurope.fr&nbsp;comprenant&nbsp;:</p><ul><li>Votre code client</li><li>Une ou plusieurs photos de la pièce défectueuse,</li><li>La référence de la pièce ou le code châssis du vélo.</li><li><br></li></ul><p>Le SAV étudie alors votre dossier et vous renvoie la pièce ou le vélo à ses frais si vous respectez le délai de déclaration de 3 jours maximum après réception.</p><p>Les mentions «&nbsp;sous réserve de déballage&nbsp;», «&nbsp;colis cassé&nbsp;» ou «&nbsp;colis endommagé&nbsp;» n’ont aucune valeur l’égale. Détaillez plutôt l’état des pièces abîmées et l’endroit du problème (par exemple&nbsp;: colis ouvert, fourche du vélo tordue, etc…). Si aucune réserve n’est mentionnée lors de la livraison, la marchandise est déclarée comme acceptée par le client et aucun recours ne pourra avoir lieu par la suite.</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'Un colis ou une pièce manquent à l’appel à la réception de ma commande. Que dois-je faire ?',
            'answer' => '<p>Etant donné que les produits sont livrés en pièces détachées, il se peut parfois qu’un colis soit perdu ou bien qu’une ou plusieurs pièces soient manquantes.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je contacte rapidement CYCLEUROPE pour signaler le problème&nbsp;:</p><p>Par téléphone au 0325393939</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je note la référence de la pièce manquante.</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'J’ai reçu un colis abîmé à l’extérieur mais son contenu est intact. Que dois-je faire ?',
            'answer' => '<p>Votre colis a subi une détérioration pendant le transport&nbsp;? Même si le contenu est en bon état, veillez à mentionner cet incident sur le bon de livraison.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je prends en photo le colis abîmé,</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je note sur le bon de livraison que le colis a été ouvert ou déchiré ou que vous l’avez réceptionné en mauvais état.</p><p><br></p><p>Les mentions «&nbsp;sous réserve de déballage&nbsp;», «&nbsp;colis cassé&nbsp;» ou «&nbsp;colis endommagé&nbsp;» n’ont aucune valeur l’égale. Détaillez plutôt l’état des pièces abîmées et l’endroit du problème (ex&nbsp;: colis ouvert, la fourche du vélo tordue, etc…). Si aucune réserve n’est mentionnée lors de la livraison, la marchandise est déclarée comme acceptée par le client et aucun recours ne pourra avoir lieu par la suite</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'J’ai reçu un vélo abimé mais le carton est intact. Que dois-je faire ?',
            'answer' => '<p>Il faut savoir que dès qu\'on accepte un colis en signant le bordereau de livraison, on prend possession du bien et les risques de perte ou d’endommagement nous sont transférés. Par conséquent, il est important de ne pas signer le bon de livraison&nbsp;avant d\'avoir vérifié le contenu&nbsp;du ou des colis et l\'état de des produits.</p><p>Prenez bien le temps d\'examiner votre marchandise en présence impérative du livreur : au regard de la loi, vous disposez de 15 minutes pour contrôler les produits commandés. En cas de refus du livreur de rester le temps de la vérification du contenu, n’hésitez pas à le mentionner sur le bon de livraison.</p><p><br></p><p>Les mentions «&nbsp;sous réserve de déballage&nbsp;», «&nbsp;colis cassé&nbsp;» ou «&nbsp;colis endommagé&nbsp;» n’ont aucune valeur l’égale. Détaillez plutôt l’état des pièces abîmées et l’endroit du problème (ex&nbsp;: colis ouvert, la fourche du vélo tordue, etc…). Si aucune réserve n’est mentionnée lors de la livraison, la marchandise est déclarée comme acceptée par le client et aucun recours ne pourra avoir lieu par la suite.</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'Quelle mention inscrire sur le bordereau à la livraison d’un colis ?',
            'answer' => '<p>Les mentions «&nbsp;sous réserve de déballage&nbsp;», «&nbsp;colis cassé&nbsp;» ou «&nbsp;colis endommagé&nbsp;» n’ont aucune valeur l’égale.</p><p><br></p><p>Détaillez plutôt l’état des pièces abîmées et l’endroit du problème (ex&nbsp;: colis ouvert, la fourche du vélo tordue, etc…). Si aucune réserve n’est mentionnée lors de la livraison, la marchandise est déclarée comme acceptée par le client et aucun recours ne pourra avoir lieu par la suite.</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'Un(e) client(e) rencontre un problème avec son vélo toujours sous garantie. Que dois-je faire ?',
            'answer' => '<p>Suivez la procédure de recherche de panne des vélos à assistance électrique.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Identifier le composant défectueux</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Créer une demande de garantie en ligne</p><p><br></p><p>Le SAV étudie alors votre dossier et vous renvoie la pièce ou le vélo à ses frais si le dommage respecte les closes de nos conditions générales de garantie.</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'Un(e) client(e) rencontre un problème avec son vélo qui n’est plus sous garantie. Que dois-je faire ?',
            'answer' => '<p>Suivez la procédure de recherche de panne des vélos à assistance électrique.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Identifier le composant défectueux</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rechercher la référence de votre composant grasse au fichier vue éclatée</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commander le composant via votre compte B2b</p>'
        ]);

        QuestionAnswer::create([
            'question' => 'Comment identifier si le vélo de ma ou mon client(e) est toujours sous garantie ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Le service gGrantie me répond de me rapprocher du fabricant du composant. Pourquoi ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Y a-t-il une prise en charge des frais de main-d’œuvre ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Y a-t-il une prise en charge des frais de port à la suite de l’expédition d’une pièce ou d’un vélo pour expertise ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Quels documents sont nécessaires pour créer une demande complète de garantie ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Quel est le délai moyen pour l’expertise d’un vélo ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Quel est le délai moyen pour l’expertise d’un composant ?'
        ]);
        
        QuestionAnswer::create([
            'question' => 'A quoi sert le code châssis d’un vélo ?'
        ]);

        QuestionAnswer::create([
            'question' => 'Quelles sont les conditions générales de garantie de CYCLEUROPE ?'
        ]);
    }
}
