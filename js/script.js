let names = [
  "abomination",
  "absorbing man",
  "adam warlock", 
  "aero",
  "agatha harkness",
  "agent 13",
  "agent coulson",
  "america chavez",
  "angel",
  "angela",
  "ant man",
  "apocalypse",
  "armor",
  "arnim zola",
  "attuma",
  "baron mordo",
  "bast",
  "beast",
  "bishop",
  "black bolt",
  "black cat",
  "black panther",
  "black widow",
  "blade",
  "blue marvel",
  "brood", 
  "bucky barnes",
  "cable",
  "captain america",
  "captain marvel",
  "carnage",
  "cerebro",
  "cloak",
  "coleen wing",
  "collector",
  "colossus",
  "cosmo",
  "crossbones",
  "crystal",
  "cyclops",
  "dagger",
  "daredevil",
  "darkhawk",
  "dazzler",
  "deadpool",
  "death",
  "deathlok",
  "debri",
  "destroyer",
  "devil dinosaur", 
  "doctor doom",
  "doctor octopus",
  "doctor strange",
  "domino",
  "dracula",
  "drax",
  "ebony maw",
  "electro",
  "elektra",
  "enchantress",
  "falcon",
  "forge",
  "galactus",
  "gambit",
  "gamora",
  "ghost",
  "ghost rider",
  "green goblin",
  "groot",
  "hawkeye", 
  "hazmat",
  "heimdall",
  "hela",
  "helicarrier",
  "high evolutionary",
  "hit monkey",
  "hobgoblin",
  "hood",
  "howard the duck",
  "hulk",
  "hulkbuster",
  "human torch",
  "iceman",
  "invisible woman",
  "iron fist",
  "iron lad",
  "iron man",
  "ironheart",
  "jeff",
  "jessica jones",
  "jubilee",
  "juggernaut",
  "ka-zar", 
  "kang",
  "killmonger",
  "kingpin",
  "kitty  pryde",
  "klaw",
  "knull",
  "korg",
  "kraven",
  "Lady sif",
  "leader",
  "leech",
  "living tribunal",
  "lizard",
  "lockjaw",
  "luke cage",
  "m'Baku",
  "modok",
  "magik",
  "magneto",
  "mantis",
  "maria hill",
  "master mold",
  "maximus",
  "medusa", 
  "mighty thor",
  "miles morales",
  "mister fantastic",
  "mister negative",
  "mister sinister",
  "misty night",
  "mojo",
  "moon girl",
  "moon knight",
  "morbius",
  "morph",
  "multiple man",
  "mysterio",
  "mystique",
  "nakia",
  "namor",
  "nebula",
  "negasonic",
  "nick fury",
  "nightcrawler",
  "nimrod",
  "nova",
  "odin", 
  "okoye",
  "omega red",
  "onslaught",
  "orka",
  "patriot",
  "polaris",
  "professor x",
  "psylocke",
  "punisher",
  "quake",
  "quiksilver",
  "quinjet",
  "red skull",
  "rescue",
  "rhino",
  "rocket raccoon",
  "rock slide",
  "rogue",
  "ronan",
  "sabretooth",
  "sandman",
  "sauron",
  "scarlet witch", 
  "scorpion",
  "sentinel",
  "sentry",
  "sera",
  "shadow king",
  "shang-chi",
  "shanna",
  "she-hulk",
  "shocker",
  "shuri",
  "silk",
  "silver surfer",
  "snowguard",
  "spectrum",
  "spider-man",
  "spider-woman",
  "squirrel girl",
  "star-Lord",
  "stature",
  "stegron",
  "storm",
  "strong Guy",
  "sunspot", 
  "super-skurll",
  "swarm",
  "sword master",
  "taskmaster",
  "thanos",
  "thing",
  "thor",
  "titania",
  "typhoid mary",
  "uatu",
  "ultron",
  "valkyrie",
  "venom",
  "viper",
  "vision",
  "vulture",
  "warpath",
  "wasp",
  "wave", 
  "white queen",
  "white tiger",
  "wolfbane",
  "wolverine",
  "wong",
  "yellowjacket",
  "yondu",
  "zabu",
  "zero",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
];
let sortedNames = names.sort();
let input = document.getElementById("input");

input.addEventListener("keyup", (e) => {
  removeElements();
  for (let i of sortedNames) {
    if (
      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
      input.value != ""
    ) {
      let listItem = document.createElement("li");
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      listItem.setAttribute("onclick", "redirectToPage('" + i + "')");
      let word = "<b>" + i.substr(0, input.value.length) + "</b>";
      word += i.substr(input.value.length);
      listItem.innerHTML = word;
      document.querySelector(".list").appendChild(listItem);
    }
  }
});

function redirectToPage(value) {
  // Rediriger l'utilisateur vers différentes pages en fonction de la suggestion sélectionnée
  if (value === "abomination") {
    window.location.href = "/heros/abomination";
  }
  if (value === "absorbing man") {
    window.location.href = "/heros/absorbingMan";
  }
  if (value === "adam warlock") {
    window.location.href = "/heros/adamWarlock";
  }
  if (value === "aero") {
    window.location.href = "/heros/aero";
  }  
  if (value === "agatha harkness") {
    window.location.href = "/heros/agathaHarkness";
  } 
  if (value === "agent 13") {
    window.location.href = "/heros/agent13";
  }
  if (value === "agent coulson") {
    window.location.href = "/heros/agentCoulson";
  }
  if (value === "america chavez") {
    window.location.href = "/heros/americaChavez";
  }
  if (value === "angel") {
    window.location.href = "/heros/angel";
  }
  if (value === "angela") {
    window.location.href = "/heros/angela.html";
  }
  if (value === "ant man") {
    window.location.href = "/heros/antMan";
  }
  if (value === "apocalypse") {
    window.location.href = "/heros/apocalypse";
  }
  if (value === "armor") {
    window.location.href = "/heros/armor";
  }
  if (value === "arnim zola") {
    window.location.href = "/heros/arnimZola";
  }
  if (value === "attuma") {
    window.location.href = "/heros/attuma";
  }
  if (value === "baron mordo") {
    window.location.href = "/heros/baronMordo";
  }
  if (value === "bast") {
    window.location.href = "/heros/bast";
  }
  if (value === "beast") {
    window.location.href = "/heros/beast";
  }
  if (value === "bishop") {
    window.location.href = "/heros/bishop";
  }
  if (value === "black bolt") {
    window.location.href = "/heros/blackBolt";
  }
  if (value === "black cat") {
    window.location.href = "/heros/blackCat";
  }
  if (value === "black panther") {
    window.location.href = "/heros/blackPanther";
  }
  if (value === "black widow") {
    window.location.href = "/heros/blackWidow";
  }
  if (value === "blade") {
    window.location.href = "/heros/blade";
  }
  if (value === "blue marvel") {
    window.location.href = "/heros/blueMarvel";
  }
  if (value === "brood") {
    window.location.href = "/heros/brood";
  }
  if (value === "bucky barnes") {
    window.location.href = "/heros/buckyBarnes";
  }
  if (value === "cable") {
    window.location.href = "/heros/cable";
  }
  if (value === "captain america") {
    window.location.href = "/heros/captainAmerica";
  }
  if (value === "captain marvel") {
    window.location.href = "/heros/captainMarvel";
  }
  if (value === "carnage") {
    window.location.href = "/heros/carnage";
  }
  if (value === "cerebro") {
    window.location.href = "heros/cerebro";
  }
  if (value === "cloak") {
    window.location.href = "/heros/cloak";
  }
  if (value === "coleen wing") {
    window.location.href = "/heros/coleenWing";
  }
  if (value === "collector") {
    window.location.href = "/heros/Collector";
  }
  if (value === "colossus") {
    window.location.href = "/heros/colossus";
  }
  if (value === "cosmo") {
    window.location.href = "/heros/cosmo";
  }
  if (value === "crossbones") {
    window.location.href = "/heros/crossbones";
  }
  if (value === "crystal") {
    window.location.href = "/heros/crystal";
  }
  if (value === "cyclops") {
    window.location.href = "/heros/cyclops";
  }
  if (value === "dagger") {
    window.location.href = "/heros/dagger";
  }
  if (value === "daredevil") {
    window.location.href = "/heros/daredevil";
  }
  if (value === "darkhawk") {
    window.location.href = "/heros/darkhawk";
  }
  if (value === "dazzler") {
    window.location.href = "/heros/dazzler";
  }
  if (value === "deadpool") {
    window.location.href = "/heros/deadpool";
  }
  if (value === "death") {
    window.location.href = "/heros/death";
  }
  if (value === "deathlok") {
    window.location.href = "/heros/deathlok";
  }
  if (value === "debri") {
    window.location.href = "/heros/debri";
  }
  if (value === "destroyer") {
    window.location.href = "/heros/destroyer";
  }
  if (value === "devil dinosaur") {
    window.location.href = "/heros/devilDinosaur";
  }
  if (value === "doctor doom") {
    window.location.href = "/heros/doctorDoom";
  }
  if (value === "doctor octopus") {
    window.location.href = "/heros/doctorOctopus";
  }
  if (value === "doctor strange") {
    window.location.href = "/heros/doctorStrange";
  }
  if (value === "domino") {
    window.location.href = "/heros/domino";
  }
  if (value === "dracula") {
    window.location.href = "/heros/dracula";
  }
  if (value === "drax") {
    window.location.href = "/heros/drax";
  }
  if (value === "ebony maw") {
    window.location.href = "/heros/ebonyMaw";
  }
  if (value === "electro") {
    window.location.href = "/heros/electro";
  }
  if (value === "elektra") {
    window.location.href = "/heros/elektra";
  }
  if (value === "enchantress") {
    window.location.href = "/heros/enchantress";
  }
  if (value === "falcon") {
    window.location.href = "/heros/falcon";
  }
  if (value === "forge") {
    window.location.href = "/heros/forge";
  }
  if (value === "galactus") {
    window.location.href = "/heros/galactus";
  }
  if (value === "gambit") {
    window.location.href = "/heros/gambit";
  }
  if (value === "gamora") {
    window.location.href = "/heros/gamora";
  }
  if (value === "ghost") {
    window.location.href = "/heros/ghost";
  }
  if (value === "ghost Rider") {
    window.location.href = "/heros/ghostRider";
  }
  if (value === "green goglin") {
    window.location.href = "/heros/greenGoblin";
  }
  if (value === "groot") {
    window.location.href = "/heros/groot";
  }
  if (value === "hawkeye") {
    window.location.href = "/heros/hawkeye";
  }
  if (value === "hazmat") {
    window.location.href = "/hazmat";
  }
  if (value === "heimdall") {
    window.location.href = "/heros/heimdall";
  }
  if (value === "hela") {
    window.location.href = "/heros/hela";
  }
  if (value === "helicarrier") {
    window.location.href = "/heros/hellicarrier";
  }
  if (value === "high evolutionary") {
    window.location.href = "/heros/highEvolutionary";
  }
  if (value === "hit-monkey") {
    window.location.href = "/heros/hitMonkey";
  }  
  if (value === "hood") {
    window.location.href = "/heros/theHood";
  }
  if (value === "howard the duck") {
    window.location.href = "/heros/howardTheDuck";
  }
  if (value === "hulk") {
    window.location.href = "/heros/hulk";
  }
  if (value === "hulbuster") {
    window.location.href = "/heros/hulkbuster";
  }
  if (value === "human torch") {
    window.location.href = "/heros/humanTorch";
  }
  if (value === "iceman") {
    window.location.href = "/heros/iceman";
  }
  if (value === "invisible woman") {
    window.location.href = "/heros/invisibleWoman";
  }
  if (value === "iron fist") {
    window.location.href = "/heros/ironFist";
  }
  if (value === "iron lad") {
    window.location.href = "/heros/ironLad";
  }
  if (value === "iron man") {
    window.location.href = "/heros/ironMan";
  }
  if (value === "ironheart") {
    window.location.href = "/heros/ironheart";
  }
  if (value === "jeff") {
    window.location.href = "/heros/jeff";
  }
  if (value === "jessica jones") {
    window.location.href = "/heros/jessicaJones";
  }
  if (value === "kang") {
    window.location.href = "/heros/kang";
  }
  if (value === "killmonger") {
    window.location.href = "/heros/killmonger";
  }
  if (value === "kingpin") {
    window.location.href = "/heros/kingpin";
  }
  if (value === "kitty Pride") {
    window.location.href = "/heros/kittyPride";
  }
  if (value === "klaw") {
    window.location.href = "/heros/klaw";
  }
  if (value === "knull") {
    window.location.href = "/heros/knull";
  }
  if (value === "korg") {
    window.location.href = "/heros/korg";
  }
  if (value === "kraven") {
    window.location.href = "/heros/kraven";
  }
  if (value === "lady sif") {
    window.location.href = "/heros/ladiSif";
  } 
  if (value === "leader") {
    window.location.href = "/heros/leader";
  }
  if (value === "leech") {
    window.location.href = "/heros/leech";
  }
  if (value === "living tribunal") {
    window.location.href = "/heros/LivingTribunal";
  }
  if (value === "lizard") {
    window.location.href = "/heros/lizard";
  }
  if (value === "lockjaw") {
    window.location.href = "/heros/lockjaw";
  }
  if (value === "luke Cage") {
    window.location.href = "/heros/lukeCage";
  }
  if (value === "m'baku") {
    window.location.href = "/heros/mBaku";
  }
  if (value === "modok") {
    window.location.href = "/heros/modok";
  }
  if (value === "magik") {
    window.location.href = "/heros/magik";
  }
  if (value === "magneto") {
    window.location.href = "/heros/magneto";
  }
  if (value === "mantis") {
    window.location.href = "/heros/mantis";
  }
  if (value === "maria Hill") {
    window.location.href = "/heros/mariaHill";
  }
  if (value === "master Mold") {
    window.location.href = "/heros/masterMold";
  }
  if (value === "maximus") {
    window.location.href = "/heros/maximus";
  }
  if (value === "medusa") {
    window.location.href = "/heros/medusa";
  }
  if (value === "mighty thor") {
    window.location.href = "/heros/mightyThor";
  }
  if (value === "miles morales") {
    window.location.href = "/heros/milesMorales";
  }
  if (value === "mister fantastic") {
    window.location.href = "/heros/misterFantastic";
  }
  if (value === "mister negative") {
    window.location.href = "/heros/misterNegative";
  }
  if (value === "mister sinister") {
    window.location.href = "/heros/misterSinister";
  }
  if (value === "misty ignht") {
    window.location.href = "/heros/mistyNight";
  }
  if (value === "mojo") {
    window.location.href = "/heros/mojo";
  }
  if (value === "moon girl") {
    window.location.href = "//heros/moonGirl";
  }
  if (value === "moon knight") {
    window.location.href = "/heros/moonKnight";
  }
  if (value === "morbius") {
    window.location.href = "/heros/morbius";
  }
  if (value === "morph") {
    window.location.href = "/heros/morph";
  }
  if (value === "multiple man") {
    window.location.href = "/heros/multipleMan";
  }
  if (value === "mysterio") {
    window.location.href = "/heros/mysterio";
  }
  if (value === "mystique") {
    window.location.href = "/heros/mystique";
  }
  if (value === "nakia") {
    window.location.href = "/heros/nakia";
  }
  if (value === "namor") {
    window.location.href = "/heros/namor";
  }
  if (value === "nebula") {
    window.location.href = "/heros/nebula";
  }
  if (value === "negasonic") {
    window.location.href = "/heros/negasonic";
  }
  if (value === "nick fury") {
    window.location.href = "/heros/nickFury";
  }
  if (value === "nightcrawler") {
    window.location.href = "/heros/nightcrawler";
  }
  if (value === "nimrod") {
    window.location.href = "/heros/nimrod";
  }
  if (value === "okoye") {
    window.location.href = "/heros/okoye";
  }
  if (value === "omega red") {
    window.location.href = "/heros/omegaRed";
  }
  if (value === "onslaught") {
    window.location.href = "/heros/onslaught";
  }
  if (value === "orka") {
    window.location.href = "/heros/orka";
  }
  if (value === "patriot") {
    window.location.href = "/heros/patriot";
  }
  if (value === "polaris") {
    window.location.href = "/heros/polaris";
  }
  if (value === "professor x") {
    window.location.href = "/heros/professorX";
  }
  if (value === "psylocke") {
    window.location.href = "/heros/psylocke";
  }
  if (value === "punisher") {
    window.location.href = "/heros/punisher";
  }
  if (value === "quake") {
    window.location.href = "/heros/quake";
  }
  if (value === "quicksilver") {
    window.location.href = "/heros/quicksilver";
  }
  if (value === "qunijet") {
    window.location.href = "/heros/quinjet";
  }
  if (value === "red skull") {
    window.location.href = "/heros/redSkull";
  }
  if (value === "rescue") {
    window.location.href = "/heros/rescue";
  }
  if (value === "rhino") {
    window.location.href = "/heros/rhino";
  }
  if (value === "rocket raccoon") {
    window.location.href = "/heros/rocketRacoon";
  }
  if (value === "rokslide") {
    window.location.href = "/heros/rokslide";
  }
  if (value === "rogue") {
    window.location.href = "/heros/rogue";
  }
  if (value === "ronan") {
    window.location.href = "/heros/ronan";
  }
  if (value === "sabretooth") {
    window.location.href = "/heros/sabretooth";
  }
  if (value === "sandman") {
    window.location.href = "/heros/sandman";
  }
  if (value === "sauron") {
    window.location.href = "/heros/sauron";
  }
  if (value === "scarlet Witch ") {
    window.location.href = "/heros/scarletWitch";
  }
  if (value === "scorpion") {
    window.location.href = "/heros/scorpion";
  }
  if (value === "sentinel") {
    window.location.href = "/heros/sentinel";
  }
  if (value === "sentry") {
    window.location.href = "/heros/sentry";
  }
  if (value === "sera") {
    window.location.href = "/heros/sera";
  }
  if (value === "shadow king") {
    window.location.href = "/heros/shadowKing";
  }
  if (value === "shang-Chi") {
    window.location.href = "/heros/shangChi";
  }
  if (value === "shanna") {
    window.location.href = "/heros/shanna";
  }
  if (value === "she-hulk") {
    window.location.href = "/heros/sheHulk";
  }
  if (value === "shocker") {
    window.location.href = "/heros/shocker";
  }
  if (value === "shuri") {
    window.location.href = "/heros/shuri";
  }
  if (value === "silk") {
    window.location.href = "/heros/silk";
  }
  if (value === "silver surfer") {
    window.location.href = "/heros/silverSurfer";
  }
  if (value === "snowguard") {
    window.location.href = "/heros/snowguard";
  }
  if (value === "spectrum") {
    window.location.href = "/heros/spectrum";
  }
  if (value === "spider-man") {
    window.location.href = "/heros/spiderMan";
  }
  if (value === "spider-woman") {
    window.location.href = "/heros/spiderWoman";
  }
  if (value === "squirrel girl") {
    window.location.href = "/heros/squirrelGirl";
  }
  if (value === "star lord") {
    window.location.href = "/heros/starLord";
  }
  if (value === "stature") {
    window.location.href = "/heros/stature";
  }
  if (value === "stegron") {
    window.location.href = "/heros/stegron";
  }
  if (value === "storm") {
    window.location.href = "/heros/storm";
  }
  if (value === "strong guy") {
    window.location.href = "/heros/strongGuy";
  }
  if (value === "sunspot") {
    window.location.href = "/heros/sunspot";
  }
  if (value === "super skrull") {
    window.location.href = "/heros/superSkrull";
  }
  if (value === "swarm") {
    window.location.href = "/heros/swarm";
  }
  if (value === "sword Master") {
    window.location.href = "/heros/swordMaster";
  }
  if (value === "taskmaster") {
    window.location.href = "/heros/taskmaster";
  }
  if (value === "thanos") {
    window.location.href = "/heros/thanos";
  }
  if (value === "thing") {
    window.location.href = "/heros/thing";
  }  
  if (value === "thor") {
    window.location.href = "/heros/thor";
  }
  if (value === "titania") {
    window.location.href = "/heros/titania";
  }
  if (value === "typhoid mary") {
    window.location.href = "/heros/typhoidMary";
  }
  if (value === "uatu") {
    window.location.href = "/heros/uatu";
  }
  if (value === "ultron") {
    window.location.href = "/heros/ultron";
  }
  if (value === "valkyrie") {
    window.location.href = "/heros/valkyrie";
  }
  if (value === "venom") {
    window.location.href = "/heros/venom";
  }
  if (value === "viper") {
    window.location.href = "/heros/viper";
  }
  if (value === "vision") {
    window.location.href = "/heros/vision";
  }
  if (value === "vulture") {
    window.location.href = "/heros/vulture";
  }
  if (value === "warpath") {
    window.location.href = "/heros/warpath";
  }
  if (value === "wasp") {
    window.location.href = "/heros/wasp";
  }
  if (value === "wave") {
    window.location.href = "/heros/wave";
  }
  if (value === "white Queen") {
    window.location.href = "/heros/whiteQueen";
  }
  if (value === "white Tiger") {
    window.location.href = "/heros/whiteTiger";
  }
  if (value === "wolfsbane") {
    window.location.href = "/heros/wolfsbane";
  }
  if (value === "wolwerine") {
    window.location.href = "/heros/wolwerine";
  }
  if (value === "wong") {
    window.location.href = "/heros/wong";
  }
  if (value === "yellowjacket") {
    window.location.href = "/heros/yellowjacket";
  }
  if (value === "yondu") {
    window.location.href = "/heros/yondu";
  }
  if (value === "zabu") {
    window.location.href = "/heros/zabu";
  }
  if (value === "zero") {
    window.location.href = "/heros/zero";
  }
  // Ajoutez plus de conditions pour d'autres suggestions et leurs pages correspondantes

  removeElements(); // Supprimer les éléments de suggestion après la redirection
}

function removeElements() {
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}

input.addEventListener("keyup", (e) => {
  if (e.keyCode === 13) {
    // Si la touche "Entrée" est pressée
    let inputValue = input.value.trim();
    if (inputValue !== "") {
      // Si la valeur de l'entrée n'est pas vide
      redirectToPage(inputValue);
    }
  }
});

