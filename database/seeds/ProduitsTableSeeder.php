<?php

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            'name' => 'Fève',
            'price' => "1.30",
            'desc' => "La fève est une graine qui peut être consommer à l'état frais ou sec. C'est un légume très ancien, que l'on sème à l'automne dans les régions chaudes, elle végète l'hiver tout en développant son réseau racinaire. Au printemps, elle grandit très vite et fleurit dans la foulée. Les gousses peuvent alors être récoltées de mi-avril à fin mai. Les fèves fraîches peuvent être consommée crues, mais sans la peau. Cuites, elles remplaçaient les haricots dans le cassoulet (alors appelé févoulet). Elles peuvent aussi être consommées en purée et dans la soupe",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
        ]);
        Produit::create([
            'name' => 'Oignon fane blanc',
            'price' => "1.30",
            'desc' => "Aussi appelé oignon nouveau, l'oignon fane blanc est un légume de printemps et un condiment dont l’usage très répandu en cuisine. Son parfum est bien plus doux que son cousin l'oignon blanc, il est donc conseillé de le consommer cru en salade pour profiter de toute sa saveur. On peut également consommer l'oignon nouveau cuit, à la poêle avec un filet d’huile d’olive ou une noisette de beurre. On peut aussi en faire un confit et les ajouter à une purée ou à une quiche de légumes.",
            'dispo' => 'yes',
            'conditionnement' =>'botte'
            ]);
        Produit::create([
            'name' => 'Oignon fane rouge',
            'price' => "1.30",
            'desc' => "Aussi appelé oignon nouveau, l'oignon fane rouge est un légume de printemps et un condiment dont l’usage très répandu en cuisine. Son parfum est bien plus doux que son cousin l'oignon rouge, il est donc conseillé de le consommer cru en salade pour profiter de toute sa saveur. On peut également consommer l'oignon nouveau cuit, à la poêle avec un filet d’huile d’olive ou une noisette de beurre. On peut aussi en faire un confit et les ajouter à une purée ou à une quiche de légumes.",
            'dispo' => 'yes',
            'conditionnement' =>'botte'
            ]);
        Produit::create([
            'name' => 'Courgette',
            'price' => "1.40",
            'desc' => "La courgette est un légume d'été, dont la fleur est aussi parfois utilisée en cuisine. La courgette est un fruit de forme allongée, de couleur verte, qui a l'allure d'un grand concombre. Bien qu'il s'agisse d'un fruit, on est communément consommée comme un légume, crue ou cuite. Cuite, elle se mange bouillie, sautée, frite, farcie, en gratin, en soupe et rentre dans la composition de la ratatouille. Les fleurs mâles peuvent être consommées, farcies ou en beignet.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Poivron carré',
            'price' => "1.80",
            'desc' => "Le poivron n'est autre qu'une variété de piments doux. Son fruit peut être consommé, cru ou cuit, comme un légume. Il est l'ingrédient indispensable d'une piperade ou d'une ratatouille, mais il peut aussi servir d'accompagnement. Découpé en rondelles ou en morceaux, il entre facilement dans la composition de salades avec des tomates et des oignons. Sa peau est peu digeste crue. Il peut être cuit au gril, au four, ou à l'étouffée.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Piment lapid',
            'price' => "2.00",
            'desc' => "Le piment est généralement associée à la saveur pimentée, piquante. Il sert généralement à relever le goût des aliments ou des préparations culinaires, notamment des sauces. Les piments contiennent plus de vitamines A que n'importe quel autre fruit ou légume et sont une source importante de vitamine C, de magnésium et de fer. Boire de l'eau pour atténuer la force d'un piment est inutile, en revanche le lait neutralise son action sur les récepteurs de la douleur. Contrairement à l'ail, loignon ou l'échalote, la cuisson n'altère pas cette force.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Piment capel hot',
            'price' => "2.00",
            'desc' => "Le piment est généralement associée à la saveur pimentée, piquante. Il sert généralement à relever le goût des aliments ou des préparations culinaires, notamment des sauces. Les piments contiennent plus de vitamines A que n'importe quel autre fruit ou légume et sont une source importante de vitamine C, de magnésium et de fer. Boire de l'eau pour atténuer la force d'un piment est inutile, en revanche le lait neutralise son action sur les récepteurs de la douleur. Contrairement à l'ail, loignon ou l'échalote, la cuisson n'altère pas cette force.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Tomate cerise rouge',
            'price' => "0.70",
            'desc' => "La tomate cerise est un type de variété de tomate, cultivée comme cette dernière pour ses fruits - mais de taille réduite - consommés comme légumes. À la fois sucrée et acidulée, elle a tout pour plaire, en particulier pour l'apéritif où elle se laisse manger nature sans culpabiliser. On peut la farcir de fromage frais ou caramélisée au miel, elle n'en est pas moins délicieuse dans une salade associée à de la feta ou à de la mozzarella",
            'dispo' => 'yes',
            'conditionnement' =>'250g'
            ]);
        Produit::create([
            'name' => 'Tomate cerise jaune',
            'price' => "0.70",
            'desc' => "La tomate cerise est un type de variété de tomate, cultivée comme cette dernière pour ses fruits - mais de taille réduite - consommés comme légumes. À la fois sucrée et acidulée, elle a tout pour plaire, en particulier pour l'apéritif où elle se laisse manger nature sans culpabiliser. On peut la farcir de fromage frais ou caramélisée au miel, elle n'en est pas moins délicieuse dans une salade associée à de la feta ou à de la mozzarella",
            'dispo' => 'yes',
            'conditionnement' =>'250g'
            ]);
        Produit::create([
            'name' => 'Tomate grappe',
            'price' => "2.00",
            'desc' => "La tomate grappe est une variété de tomates aux fruits ronds d'un calibre moyen, en grappe. Cette tomate précoce est très parfumée. Elles peuvent être mangées crues, telles quelles, en salade ou encore en jus. Cuites en coulis, elles accompagneront de nombreux plats.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Tomate cœur de bœuf',
            'price' => "1.50",
            'desc' => "La cœur de bœuf originelle est une variété de grosse tomate dont la forme rappelle celle d'un cœur de bovin. Cette tomate est réputée pour son goût et sa chair abondante. La pleine saison de la tomate cœur de bœuf s’étire de fin août à septembre, elle peut durer jusqu’aux premières gelées d’octobre certaines années. La tomate cœur de bœuf se consomme principalement crue agrémentée d’un filet d’huile d’olive et de quelques feuilles de basilic. Essayez-la aussi en tomate farcie végétarienne avec des noix et une sauce au basilic.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Aubergine demi long',
            'price' => "1.30",
            'desc' => "L'aubergine se consomme cuite ou crue. Cuite, son goût se rapproche de celui des champignons. Elle constitue donc une bonne candidate pour la diète anti-obésité, sous réserve de la cuisiner sans huile qu'elle prend plaisir à absorber (cuire à l'eau, à la vapeur, au four sous sac de cuisson, à sec où au jus de lime à la poêle, grillée, marinées, etc).",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Melon Canari',
            'price' => "1.60",
            'desc' => "Le melon canari ou melon d'hiver est un gros melon allongé, jaune vif, à la chair blanche. Il se consomme cru, seul ou en salade et est très désaltérant. Moins parfumé mais plus juteux, le melon jaune Canari se consomme de la même façon que les autres variétés de melons en gardant à l’esprit que sa chair a moins de tenue. Dégustez-le frais par exemple avec du jambon cru, en lamelles sucrées-salées, ou en salade de fruits.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Melon vert',
            'price' => "1.60",
            'desc' => "Le melon vert est ovale, de couleur vert olive. Il possède une chair ferme et blanche succulente. Généralement dégusté cru en hors d’œuvre ou en dessert, on peut le préparer pour la confection de confitures. Il se mariera très bien avec du jambon fumé et certains fromages.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Pastèque sans pépin',
            'price' => "1.00",
            'desc' => "La pastèque sans pépin, communément appelée le melon d'eau, possède un goût rafraîchissant particulièrement apprécié durant les chaudes journées d'été.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Ail violet',
            'price' => "3.00",
            'desc' => "L’ail violet est un ail d’automne, aussi appelé précoce car il est planté en octobre et novembre. En bouche, il apporte une légère impression de piquant et présente une bonne persistance aromatique. Sa texture est moelleuse et sa saveur délicatement sucrée",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Oignon blanc en sec',
            'price' => "1.50",
            'desc' => "L'oignon blanc sec peut se faire en confit et être ajouter à une quiche de légumes ou à une purée.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'échalote',
            'price' => "1.60",
            'desc' => "L'échalote fait partie depuis longtemps de la gastronomie française. Il peut être consommé cuits ou crus. Crus, ils servent à aromatiser les salades et crudités. Cuits, ils entrent dans la confection de sauces, de courts-bouillons, ou accompagnent les plats de viande.",
            'dispo' => 'yes',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Potimarron',
            'price' => "1.30",
            'desc' => "Le potimarron est très riche en provitamine A et en oligo-éléments. Comme les potirons, les potimarrons peuvent être consommés en potage, au four avec de l'ail, frits, en tourte ou en purée. À la différence du potiron, il n'est pas nécessaire de retirer la peau du potimarron avant la cuisson. Il est aussi succulent cru.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Citrouille musquée',
            'price' => "0.80",
            'desc' => " La citrouille musquée est l'une des cinq espèces de courges les plus couramment cultivées. Elle se consomme cuite. On peut les préparer de très nombreuses manières comme légume ou comme dessert : en soupe, en purée, en gratin, en flan, en tarte, en tourte, en confiture… Elles ont un goût musqué assez fin.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);
        Produit::create([
            'name' => 'Butternut',
            'price' => "1.30",
            'desc' => "La butternut est aussi appelé la doubeurre. Elle peut se manger crue comme une carotte, bien qu'elle soit très légèrement âcre, mais plus goûteuse. Sa chair ferme permet de la cuisiner comme une pomme de terre. Une recette habituelle est la soupe. On peut aussi la cuisiner au four, en gratin, ou en faire des gâteaux, comme avec les carottes.",
            'dispo' => 'no',
            'conditionnement' =>'Kg'
            ]);

    }
}
