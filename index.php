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

        .info-card a {
            color: #3498db;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        .info-card a:hover {
            text-decoration: underline;
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
        <h2 id="summary-title">Le corps humain</h2>
        <p id="summary-text">Le corps humain est une merveille de complexité et de précision, une machine biologique où chaque cellule joue un rôle vital...</p>
        <button id="back-button" class="back-button">Retour</button>
    </div>
</div>

<script>
    const hotspots = [
        {
            x: 50, y: 5, name: "Cerveau",
            info: "Le cerveau contrôle toutes les fonctions du corps.",
            image: "img/cerveau.png",
            text: "Le cerveau est l'organe de commande du corps humain. Il traite les informations sensorielles et contrôle les pensées, la mémoire, et les mouvements."
        },
        {
            x: 53, y: 22, name: "Cœur",
            info: "Le cœur pompe le sang dans tout le corps.",
            image: "img/coeur.png",
            text: "Le cœur est un organe musculaire qui pompe le sang dans tout le corps. Il bat environ 100 000 fois par jour pour transporter l'oxygène et les nutriments."
        },
        {
            x: 50, y: 32, name: "Poumons",
            info: "Les poumons permettent la respiration.",
            image: "img/poumons.png",
            text: "Les poumons sont responsables de l'échange de gaz dans le corps. Ils absorbent l'oxygène et libèrent le dioxyde de carbone."
        },
        {
            x: 45, y: 37, name: "Foie",
            info: "Le foie filtre le sang et produit des protéines essentielles.",
            image: "img/foie.png",
            text: "Le foie est un organe vital qui détoxifie le sang, produit de la bile pour la digestion, et stocke des vitamines essentielles."
        },
        {
            x: 52, y: 38, name: "Estomac",
            info: "L'estomac digère la nourriture.",
            image: "img/estomac.png",
            text: "L'estomac joue un rôle clé dans la digestion, en utilisant des acides pour décomposer les aliments en nutriments absorbables."
        },
        {
            x: 45, y: 44, name: "Reins",
            info: "Les reins filtrent le sang et produisent l'urine.",
            image: "img/reins.png",
            text: "Les reins sont deux organes en forme de haricot qui filtrent les déchets du sang et régulent l'équilibre des fluides."
        },
        {
            x: 50, y: 47, name: "Intestins",
            info: "Les intestins absorbent les nutriments et éliminent les déchets.",
            image: "img/intestins.png",
            text: "Les intestins digèrent les aliments, absorbent les nutriments essentiels, et éliminent les déchets sous forme de selles."
        }
    ];

    const imageContainer = document.querySelector('.image-container');
    const mainImage = document.getElementById('main-image');
    const summaryTitle = document.getElementById('summary-title');
    const summaryText = document.getElementById('summary-text');
    const backButton = document.getElementById('back-button');
    const defaultImage = "img/human_body.png";
    const defaultTitle = "Le corps humain";
    const defaultText = "Le corps humain est une merveille de complexité et de précision, une machine biologique où chaque cellule joue un rôle vital...";
    let hotspotsElements = [];

    hotspots.forEach(spot => {
        const hotspot = document.createElement('div');
        hotspot.className = 'hotspot';
        hotspot.style.left = `${spot.x}%`;
        hotspot.style.top = `${spot.y}%`;

        imageContainer.appendChild(hotspot);
        hotspotsElements.push(hotspot);

        // Update the summary area and main image on click
        hotspot.addEventListener('click', () => {
            summaryTitle.textContent = spot.name;
            summaryText.textContent = spot.text;
            mainImage.src = spot.image;
            mainImage.alt = spot.name;

            // Hide all hotspots and show back button
            hotspotsElements.forEach(el => el.style.display = 'none');
            backButton.style.display = 'block';
        });
    });

    // Return to default view
    backButton.addEventListener('click', () => {
        summaryTitle.textContent = defaultTitle;
        summaryText.textContent = defaultText;
        mainImage.src = defaultImage;
        mainImage.alt = "Système musculaire";

        // Show all hotspots and hide back button
        hotspotsElements.forEach(el => el.style.display = 'block');
        backButton.style.display = 'none';
    });
</script>
</body>
</html>
