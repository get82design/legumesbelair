<p>Vous avez une nouvelle commande sur le site www.legumes-de-bel-air.fr</p>
<h2>Bonjour Olivier,</h2>
<h3>Commande n°{{$commandeid}}</h3>
<p><b>{{$username}} {{$userfirstname}}</b>, vous a passé une nouvelle commande.</p>
@if($livraison == "yes")
    <p>Il (ou elle) souhaite être livré {{$day}}.<br/>
    au: {{$numrue}} {{$rue}}<br/>
    {{$postal}} {{$ville}}</p>
@else
    <p>Il (ou elle) viendra récupérer son panier {{$day}} à {{$hour}}.</p>
@endif
<p>Pour un total de {{$total}}€.</p>
<p>Connectez vous sur le <a href="https://www.legumes-de-bel-air.fr">site</a> pour connaitre le contenu de la commande.</p>