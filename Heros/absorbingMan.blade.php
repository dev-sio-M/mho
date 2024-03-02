<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Absorbing Man</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ABSORBING MAN</h1> <!--NOM HEROS -->

  <div class="container">
  <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>

  <ul class="additional-fields">
    <th><a href="/onglet/sommaire" style="color: white;">Sommaire</a></th>
    <th><a href="/onglet/monCompte" style="color: white;">Mon compte</a></th> 
    <th><a href="/onglet/mesReseaux" style="color: white;">Réseaux sociaux</a></th> 
    <th><a href="/onglet/seConnecter" style="color: white;">Se connecter</a></th>
	<th><a href="/onglet/creerCompte" style="color: white;">Créer un compte</a></th>
<th><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;">
    Se déconnecter
</a></th>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
  </ul>
</div>

  <script src="{{ asset('js/script2.js') }}"></script>

</style><p class="float-content"><img src="https://64.media.tumblr.com/e19b8c4c4bd22bd8c26ece99450d9d9f/tumblr_inline_psot91k14L1qbv7u8_500.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Carl (Crusher) Creel ;</li>
<li><strong>Profession(s) : </strong>Criminel professionnel, ancien boxeur ;</li>
<li><strong>Famille : </strong>Mary Mac Pherran (<a href="/heros/titania" style="color: orange;">Titania</a>, épouse), Rockwell Davis (Hi-Lite, cousin), Jerry Sledge (Muraille, fils) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède une force surhumaine, absorbe la matière, mimétisme (imitation) et changement de taille, peut contrôler l'esprit d'une persone à distance, utilise un boulet de prisonnier en acier relié à une chaîne ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat à mains nues, cambrioleur expérimenté ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Dignes/de la Légion fatale/des Maîtres du Mal, partenaire de Titania ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/thor" style="color: orange;">Thor</a>, <a href="/heros/hulk" style="color: orange;">Hulk</a>, les <a href="/heros/avengers" style="color: orange;">Avengers</a>, <a href="/heros/daredevil" style="color: orange;">Daredevil</a>, <a href="/heros/spiderMan" style="color: orange;">Spider-Man</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Crusher Creel née à new York, était un criminel de bas niveau qui a eu un destin singulier lorsqu'il a accepté de participer à une expérience scientifique. Cette expérience impliquait la prise d'un sérum spécial qui lui a conféré la capacité unique d'absorber les propriétés physiques de tout matériau auquel il était exposé par simple contact.<br><br>

Devenu l'Absorbing Man, Creel a commencé à utiliser ses nouveaux pouvoirs pour commettre des délits et devenir un criminel redouté. Sa capacité à absorber la force, la solidité ou les caractéristiques d'à peu près n'importe quel matériau lui a permis de se battre contre de nombreux héros Marvel.<br><br>

L'Absorbing Man s'est heurté à des héros tels que Thor, Hulk, Daredevil et Spider-Man. Dans ses confrontations avec Thor, il a souvent tenté de voler les pouvoirs du dieu du tonnerre en absorbant son marteau, Mjolnir. Cependant, la volonté de Thor et la nature enchantée de son marteau ont rendu cette tâche difficile.<br><br>

Absorbing Man a également rejoint les Maîtres du Mal, un groupe de super-vilains, dans leur quête pour vaincre les Avengers et d'autres héros Marvel. Cependant, il a parfois montré des signes de rédemption et s'est retrouvé à travailler aux côtés des héros dans des situations critiques.<br><br>

L'histoire d'Absorbing Man est marquée par ses tentatives de trouver un équilibre entre sa vie criminelle et sa quête de rédemption. Sa relation complexe avec sa femme, Mary MacPherran, également connue sous le nom de Titania, a ajouté une dimension supplémentaire à son histoire.<br><br>

Au fil des années, Absorbing Man a connu différentes évolutions et arcs narratifs dans les comics Marvel. Sa capacité d'absorption en fait un adversaire redoutable, car il peut devenir aussi puissant que le matériau qu'il absorbe. Son histoire continue d'évoluer au sein de l'univers Marvel, offrant de nouvelles perspectives et défis pour ce super-vilain polyvalent.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
