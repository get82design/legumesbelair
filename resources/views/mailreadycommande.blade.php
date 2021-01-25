<?php $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                    IntlDateFormatter::NONE,
                    'Europe/Paris',
                    IntlDateFormatter::GREGORIAN );
    $dateint =new DateTime($date);
    $creationdate = $formatter->format($dateint);
?>
<h2>Bonjour {{$userfirstname}},</h2>
<h3>La commande n°{{$commandeid}}, passée sur <a href="https://www.legumes-de-bel-air.fr">www.legumes-de-bel-air.fr</a> le {{$creationdate}}, est prête</h3>
@if($livraison == "yes")
    <p>Vous serez livré {{$day}}, après 18h.</p>
@else
    <p>Vous devez venir récupérer votre commande {{$day}} à {{$hour}}, comme convenu lorsque vous avez réalisé la commande.</p>
@endif
<p>Vous pouvez me joindre au 0605115223. Le paiement sera réalisé au moment de la réception du panier, en espèces ou par carte bleu.</p>
<p>Cordialement,<br/>
Olivier, légumes de Bel Air</p>