<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RaceForWater - Système Musculaire</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .title {
            text-align: center;
            padding: 20px 0;
            font-size: 2em;
        }

        .main-content {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        .image-container {
            position: relative;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anatomy-image {
            height: 100%;
            object-fit: contain;
        }

        .summary-area {
            width: 50%;
            padding: 20px;
            background-color: #111;
            overflow-y: auto;
        }

        .hotspot {
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #fff;
            border-radius: 50%;
            cursor: pointer;
        }

        .info-card {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            border: 1px solid #fff;
            padding: 10px;
            border-radius: 5px;
            display: none;
            max-width: 200px;
        }

        .secondary-container {
            margin-top: 20px;
            display: none;
        }

        .secondary-image {
            width: 100%;
            margin-top: 20px;
            border-radius: 8px;
            object-fit: cover;
        }

        .back-button {
            display: none;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<h1 class="title">RaceForWater</h1>
<div class="main-content">
    <div class="image-container">
        <img id="main-image" src="img/human_body.png" alt="Système musculaire" class="anatomy-image">
    </div>
    <div class="summary-area">
        <h2 id="summary-title">Le corps humain et l'océan</h2>
        <br>
        <p id="summary-text">
            Le corps humain est une machine biologique fascinante, composée de systèmes interconnectés qui travaillent en harmonie pour maintenir la vie.
            <br>
            <br>
            Avec plus de 37 trillions de cellules, un cœur battant environ 100 000 fois par jour, et des poumons traitant 11 000 litres d'air quotidiennement, chaque partie joue un rôle crucial.
            <br>
            <br>
            Tout comme le corps humain, l'océan est une entité vivante, dynamique et essentielle à la vie sur Terre.
            <br>
            <br>
            Il couvre plus de 70% de la surface de la planète, régule le climat, produit 50 à 70% de l'oxygène que nous respirons, et abrite plus de 2,2 millions d'espèces connues.
            <br>
            <br>
            L'océan peut être considéré comme le cœur de la planète, pompant l'énergie thermique à travers ses courants, filtrant les polluants, et agissant comme un énorme réservoir de carbone qui absorbe environ 30% du dioxyde de carbone émis par l'homme chaque année.
            <br>
            <br>
            Comme les organes humains, chaque élément de l'océan, qu'il s'agisse des récifs coralliens, des mangroves ou des courants marins, joue un rôle vital. Ensemble, ils forment un système global interconnecté, en constante adaptation, garantissant la survie de toutes les formes de vie.
            <br>
            <br>
            En explorant les parallèles entre le corps humain et l'océan, nous comprenons mieux leur interdépendance.
            <br>
            <br>
            La santé de l'un est intrinsèquement liée à la santé de l'autre, nous rappelant notre responsabilité de préserver ces systèmes pour les générations futures.
        </p>
        <div id="secondary-container" class="secondary-container">
            <img id="secondary-image" src="" alt="Détail supplémentaire" class="secondary-image">
            <p id="secondary-text"></p>
        </div>
        <button id="back-button" class="back-button">Retour</button>
    </div>
</div>

<script>
    const hotspots = [
        {
            x: 50, y: 5, name: "Cerveau",
            info: "Le cerveau contrôle toutes les fonctions du corps.",
            image: "img/cerveau.png",
            text: "Le cerveau humain est une structure complexe composée de plus de 86 milliards de neurones, reliés par un réseau de synapses. Il consomme environ 20% de l'énergie totale du corps humain, bien qu'il ne représente que 2% du poids corporel. Il est responsable de la pensée, de la mémoire, des émotions et de la coordination des fonctions corporelles.",
            secondaryImage: "img/ocean_currents.png",
            secondaryText: "Le cerveau est analogue aux courants océaniques, qui agissent comme les systèmes nerveux de l'océan. Ces courants transportent des quantités massives d'eau parfois jusqu'à 100 millions de mètres cubes par seconde répartissant la chaleur, les nutriments et l'énergie. Par exemple, le Gulf Stream régule le climat européen, tout comme le cerveau régule la température corporelle humaine."
        },
        {
            x: 53, y: 22, name: "Cœur",
            info: "Le cœur pompe le sang dans tout le corps.",
            image: "img/coeur.png",
            text: "Le cœur humain bat en moyenne 100 000 fois par jour, pompant environ 7 000 litres de sang dans un réseau de 96 000 kilomètres de vaisseaux sanguins. Il assure la distribution de l'oxygène et des nutriments, tout en éliminant les déchets, pour maintenir le fonctionnement des cellules.",
            secondaryImage: "img/ocean_tides.png",
            secondaryText: "Le cœur peut être comparé aux marées océaniques, qui montent et descendent sous l'effet de la gravité lunaire. Chaque jour, environ 1,5 milliard de tonnes d'eau se déplacent avec les marées, apportant des nutriments aux zones côtières et régulant les écosystèmes marins. Tout comme le cœur maintient la circulation sanguine, les marées maintiennent l'équilibre de la vie marine."
        },
        {
            x: 50, y: 40, name: "Poumons",
            info: "Les poumons permettent de respirer et d'oxygéner le sang.",
            image: "img/poumons.png",
            text: "Les poumons humains ont une surface interne équivalente à celle d'un court de tennis, permettant un échange gazeux efficace. Environ 300 millions d'alvéoles dans les poumons absorbent l'oxygène et libèrent le dioxyde de carbone. Un adulte respire environ 11 000 litres d'air par jour.",
            secondaryImage: "img/ocean_oxygen.png",
            secondaryText: "Les poumons sont comparables aux océans, qui produisent environ 50 à 70% de l'oxygène de l'atmosphère grâce au phytoplancton. Ces organismes microscopiques absorbent chaque année environ 37 milliards de tonnes de CO₂, jouant un rôle vital dans la régulation du climat mondial, tout comme les poumons régulent les niveaux de dioxyde de carbone dans le corps."
        },
        {
            x: 50, y: 60, name: "Estomac",
            info: "L'estomac digère les aliments et les transforme en énergie.",
            image: "img/estomac.png",
            text: "L'estomac humain peut contenir jusqu'à 1,5 litre de nourriture et de liquide, décomposant les nutriments en utilisant des acides et des enzymes puissants. Environ 35 millions de cellules glandulaires sécrètent chaque jour jusqu'à 3 litres de sucs gastriques pour faciliter la digestion.",
            secondaryImage: "img/ocean_food_chain.png",
            secondaryText: "L'estomac est semblable aux chaînes alimentaires marines. Les océans produisent plus de 50% de la biomasse mondiale, avec le phytoplancton et le zooplancton jouant un rôle clé à la base de cette chaîne. Par exemple, une baleine bleue peut consommer jusqu'à 4 tonnes de krill par jour, illustrant le transfert massif d'énergie dans les écosystèmes marins."
        },
        {
            x: 50, y: 80, name: "Reins",
            info: "Les reins filtrent le sang et éliminent les déchets du corps.",
            image: "img/reins.png",
            text: "Les reins humains filtrent environ 50 gallons (190 litres) de sang par jour, éliminant les toxines et produisant jusqu'à 2 litres d'urine. Chaque rein contient environ 1 million de néphrons, des unités filtrantes microscopiques, qui jouent un rôle vital dans l'équilibre des fluides corporels.",
            secondaryImage: "img/ocean_filter.png",
            secondaryText: "Les reins fonctionnent comme les récifs coralliens, qui filtrent les particules dans les eaux côtières. Par exemple, les mangroves peuvent éliminer jusqu'à 90% des polluants présents dans l'eau, contribuant à la purification des océans, tout comme les reins nettoient le sang."
        },
        {
            x: 50, y: 95, name: "Intestin",
            info: "Les intestins absorbent les nutriments des aliments et éliminent les déchets.",
            image: "img/intestin.png",
            text: "Les intestins humains mesurent environ 7 mètres de long. L'intestin grêle, avec ses millions de villosités microscopiques, absorbe jusqu'à 90% des nutriments, tandis que le côlon récupère l'eau et forme les déchets solides.",
            secondaryImage: "img/ocean_nutrients.png",
            secondaryText: "Les intestins rappellent les zones de remontée d'eau froide dans l'océan, qui transportent des nutriments des profondeurs marines vers la surface. Ces remontées nourrissent des écosystèmes entiers, tout comme les intestins distribuent des nutriments essentiels à chaque partie du corps."
        },
        {
            x: 50, y: 62, name: "Foie",
            info: "Le foie détoxifie le sang et produit la bile pour la digestion.",
            image: "img/foie.png",
            text: "Le foie est un organe vital qui filtre environ 1,4 litre de sang par minute. Il produit chaque jour environ 800 à 1 000 millilitres de bile, qui aide à digérer les graisses. Il est également responsable du stockage des vitamines et de la détoxification des substances nocives.",
            secondaryImage: "img/ocean_cleanse.png",
            secondaryText: "Le foie est semblable aux océans qui absorbent environ 30% du CO₂ produit par l'activité humaine. Les écosystèmes marins, comme les herbiers marins, agissent comme des 'foies océaniques', stockant jusqu'à 10 fois plus de carbone que les forêts terrestres par hectare, tout en filtrant les polluants."
        }
    ];

    // Fonction pour ajouter des sauts de ligne après chaque phrase
    function addLineBreaks(text) {
        return text.replace(/([.!?])\s+/g, '$1<br><br>');
    }

    const imageContainer = document.querySelector('.image-container');
    const mainImage = document.getElementById('main-image');
    const summaryTitle = document.getElementById('summary-title');
    const summaryText = document.getElementById('summary-text');
    const secondaryContainer = document.getElementById('secondary-container');
    const secondaryImage = document.getElementById('secondary-image');
    const secondaryText = document.getElementById('secondary-text');
    const backButton = document.getElementById('back-button');
    const defaultImage = "img/human_body.png";
    const defaultTitle = "Le corps humain";
    const defaultText = addLineBreaks(`
    Le corps humain est une machine biologique fascinante, composée de systèmes interconnectés qui travaillent en harmonie pour maintenir la vie.
    Avec plus de 37 trillions de cellules, un cœur battant environ 100 000 fois par jour, et des poumons traitant 11 000 litres d'air quotidiennement, chaque partie joue un rôle crucial.
    Tout comme le corps humain, l'océan est une entité vivante, dynamique et essentielle à la vie sur Terre.
    Il couvre plus de 70% de la surface de la planète, régule le climat, produit 50 à 70% de l'oxygène que nous respirons, et abrite plus de 2,2 millions d'espèces connues.
    L'océan peut être considéré comme le cœur de la planète, pompant l'énergie thermique à travers ses courants, filtrant les polluants, et agissant comme un énorme réservoir de carbone.
    En explorant les parallèles entre le corps humain et l'océan, nous comprenons mieux leur interdépendance.
`);

    let hotspotsElements = [];

    hotspots.forEach(spot => {
        const hotspot = document.createElement('div');
        hotspot.className = 'hotspot';
        hotspot.style.left = `${spot.x}%`;
        hotspot.style.top = `${spot.y}%`;

        imageContainer.appendChild(hotspot);
        hotspotsElements.push(hotspot);

        hotspot.addEventListener('click', () => {
            summaryTitle.textContent = spot.name;
            summaryText.innerHTML = addLineBreaks(spot.text);
            mainImage.src = spot.image;
            mainImage.alt = spot.name;

            secondaryImage.src = spot.secondaryImage;
            secondaryImage.alt = `${spot.name} détail`;
            secondaryText.innerHTML = addLineBreaks(spot.secondaryText);
            secondaryContainer.style.display = 'block';

            hotspotsElements.forEach(el => el.style.display = 'none');
            backButton.style.display = 'block';
        });
    });

    backButton.addEventListener('click', () => {
        summaryTitle.textContent = defaultTitle;
        summaryText.innerHTML = defaultText;
        mainImage.src = defaultImage;
        mainImage.alt = "Système musculaire";

        secondaryContainer.style.display = 'none';

        hotspotsElements.forEach(el => el.style.display = 'block');
        backButton.style.display = 'none';
    });
</script>
</body>
</html>
