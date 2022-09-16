<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/autocomplete.css">
    <title>MoveEasy</title>
</head>
<body class="bg1">
    <nav>
        <div class="left">
            <div class="brand">
                <img src="images/logo.png" alt="Logo">
                <h3>Move Easy</h3>
            </div>
        </div>
        <div class="right">
            <div class="theme-toggler">
                <span class="material-symbols-sharp active">light_mode</span>
                <span class="material-symbols-sharp">dark_mode</span>
            </div>
        </div>
    </nav>
    <div class="container">
        <div></div>
        <div class="user-form">
            <h1>Find a Route</h1>
            <br>
            
            <form action="route.php" method="post" autocomplete="off">
                <table>
                    <tr>
                        <td class="autocomplete"><h3 class="label">Start Location</h3></td>
                    </tr>
                    <tr>
                        <td class="autocomplete"><input type="text" id="FromLoc" name="From" required></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="autocomplete"><h3 class="label">Destination</h3></td>
                    </tr>
                    <tr>
                        <td class="autocomplete"><input type="text" id="ToLoc" name="To" required></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="btn-td"><button type="submit">Route!</button></td>
                    </tr>
                </table>
                
            </form>
        </div>
        <div></div>
    </div>
</body>

<script src="js/auto_complete.js"></script>
<script>
    fetch('api/bus_stops.php').then(
        function (response) {
            return response.json();
    }).then(function (data) {
        autocomplete(document.getElementById("FromLoc"), data);
        autocomplete(document.getElementById("ToLoc"), data);
        return true;
    }).catch(function (err) {
        console.warn('Something went wrong.', err);
        return false;
    });
</script>

</html>