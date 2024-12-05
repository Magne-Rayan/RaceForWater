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
    </style>
</head>
<body>
<h1 class="title">RaceForWater</h1>
<div class="main-content">
    <div class="image-container">
        <img src="img/human_body.png" alt="Système musculaire" class="anatomy-image">
        <!-- Les points seront ajoutés ici par JavaScript -->
    </div>
    <div class="summary-area">
        <h2>Le corps humain </h2>
        <p>Le corps humain est une merveille de complexité et de précision, une machine biologique où chaque cellule joue un rôle vital. Le cœur, par exemple, bat en permanence, assurant la circulation du sang à travers un réseau d'artères et de veines, tandis que le cerveau, véritable centre de commande, dirige chaque mouvement et pensée. Nos poumons, tels des filtres, régulent l'air que nous respirons, permettant à l'oxygène de nourrir nos cellules. Chaque organe, chaque système, est une unité qui interagit de manière fluide, formant un tout harmonieux. C'est un équilibre délicat, où chaque élément a son rôle à jouer.

            Et de la même manière, l'océan, immense et mystérieux, renferme un système tout aussi complexe. Ses vagues, son marée, ses courants, sont autant de phénomènes interdépendants, régulés par des forces invisibles. Le corps humain et l'océan partagent cette symphonie de mouvements, cette harmonie secrète, où chaque élément se trouve connecté à un tout plus grand. En explorant l'un, on ne peut s'empêcher de penser que le corps humain, tout comme l'océan, est un univers à part entière, fascinant et insondable.</p>

    </div>
</div>

<script>
    const hotspots = [
        { x: 50, y: 5, name: "Cerveau", info: "Le cerveau contrôle toutes les fonctions du corps.", link: "Organes/Cerveau.php" },
        { x: 53, y: 22, name: "Cœur", info: "Le cœur pompe le sang dans tout le corps.", link: "Organes/Coeur.php" },
        { x: 50, y: 32, name: "Poumons", info: "Les poumons permettent la respiration.", link: "Organes/Poumons.php" },
        { x: 45, y: 37, name: "Foie", info: "Le foie filtre le sang et produit des protéines essentielles.", link: "Organes/Foie.php" },
        { x: 52, y: 38, name: "Estomac", info: "L'estomac digère la nourriture.", link: "Organes/Estomac.php" },
        { x: 45, y: 44, name: "Reins", info: "Les reins filtrent le sang et produisent l'urine.", link: "Organes/Reins.php" },
        { x: 50, y: 47, name: "Intestins", info: "Les intestins absorbent les nutriments et éliminent les déchets.", link: "Organes/Intestins.php" },

    ];

    const imageContainer = document.querySelector('.image-container');

    hotspots.forEach(spot => {
        const hotspot = document.createElement('div');
        hotspot.className = 'hotspot';
        hotspot.style.left = `${spot.x}%`;
        hotspot.style.top = `${spot.y}%`;

        const infoCard = document.createElement('div');
        infoCard.className = 'info-card';
        infoCard.innerHTML = `
                <h3>${spot.name}</h3>
                <p>${spot.info}</p>
                <a href="${spot.link}">Plus d'informations</a>
            `;

        hotspot.appendChild(infoCard);
        imageContainer.appendChild(hotspot);

        hotspot.addEventListener('mouseenter', () => {
            infoCard.style.display = 'block';
        });

        hotspot.addEventListener('mouseleave', () => {
            infoCard.style.display = 'none';
        });
    });
</script>


</body>
</html>