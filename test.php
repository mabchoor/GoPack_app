<!DOCTYPE html>
<html>
<head>
    <title>Notification en temps réel</title>
</head>
<body>
    <h1>Notification en temps réel</h1>
    <p id="notification"></p>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                // effectue une requête AJAX périodique vers la page PHP pour récupérer les nouvelles données insérées
                $.ajax({
                    url: 'insert.php',
                    dataType: 'json',
                    success: function(data) {
                        // affiche la notification avec les données insérées
                        $('#notification').text('Nouvelle insertion avec ID ' + data.id + ' : colonne1 = ' + data.colonne1 + ', colonne2 = ' + data.colonne2);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }, 5000); // effectue la requête toutes les 5 secondes (modifier selon les besoins)
        });
    </script>
</body>
</html>