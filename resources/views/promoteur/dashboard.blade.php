<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Promoteur de Territoire</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Tableau de Bord Promoteur de Territoire</h1>
        <div class="stats">
            <div class="stat">
                <h2>Entreprises Inscrites</h2>
                <p>50</p>
            </div>
            <div class="stat">
                <h2>Échanges Réalisés</h2>
                <p>120</p>
            </div>
            <div class="stat">
                <h2>Challenges Actifs</h2>
                <p>10</p>
            </div>
        </div>
        <div class="actions">
            <button onclick="location.href='manage-enterprises.html'">Gérer les Entreprises</button>
            <button onclick="location.href='manage-exchanges.html'">Gérer les Échanges</button>
            <button onclick="location.href='launch-challenges.html'">Lancer des Challenges</button>
        </div>
        <li class="nav-item">
            <form method="POST" action="{{ route('promoteur.logout') }}" id="logout-form">
                @csrf
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
            </form>
        </li>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
