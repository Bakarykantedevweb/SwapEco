<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwapEco - Dashboard Éco-Contributeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@4.4.1/dist/socket.io.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SwapEco</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Tableau de bord</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promouvoir Offres</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Suivi Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Engagements</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Messagerie</a></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('contributeur.logout') }}" id="logout-form">
                            @csrf
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Dashboard Éco-Contributeur</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Promouvoir des Offres</h5>
                    <p>Recommandez et sponsorisez des offres éco-responsables.</p>
                    <a href="#" class="btn btn-primary">Accéder</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Suivi des Transactions</h5>
                    <p>Suivez les échanges facilités et leur impact.</p>
                    <a href="#" class="btn btn-success">Voir</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Engagement Communautaire</h5>
                    <p>Participez à des initiatives et challenges.</p>
                    <a href="#" class="btn btn-warning">Participer</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h3>Messagerie</h3>
        <div class="card p-3">
            <div class="mb-3">
                <label for="message" class="form-label">Envoyer un message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Écrivez votre message..."></textarea>
            </div>
            <button class="btn btn-primary" onclick="sendMessage()">Envoyer</button>
        </div>
        <div class="mt-4">
            <h5>Messages récents</h5>
            <ul class="list-group" id="messages-list">
                <!-- Messages dynamiques -->
            </ul>
        </div>
    </div>

    <script>
        const socket = io('http://localhost:3000'); // Adapter l'URL selon ton serveur

        function sendMessage() {
            const message = document.getElementById('message').value;
            if (message.trim() !== '') {
                socket.emit('chatMessage', message);
                document.getElementById('message').value = '';
            }
        }

        socket.on('chatMessage', (msg) => {
            const messageList = document.getElementById('messages-list');
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = msg;
            messageList.appendChild(listItem);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
