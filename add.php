<!DOCTYPE html>
<html dir = "ltr" lang = "en-US">
    <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
        <meta name = "keywords" content = "Nisha Choudhary | Happy Journal (Info Retrieval & Web Search)">
        <meta name = "author" content = "Nisha Choudhary">
        <meta name = "url" content = "add.php" property = "og:url">
        <meta name = "viewport" content = "width = device - width, initial-scale = 1.0">

        <link href = "favicon.ico" rel = "shortcut icon" type = "image/x-icon" />
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity =  "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <link href = "happiness.css" rel = "stylesheet" />
        <link href = "add.css" rel = "stylesheet" />

        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script>
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>

        <style type = "text/css">
            body {
                background-color: #FFFF99;
            }

            .nav-wrapper {
                background-color: #FDE452;
            }
        </style>

        <title>Nisha Choudhary | Happy Journal (Info Retrieval & Web Search)</title>
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="nav-wrapper">
            <nav class="navbar navbar-expand-lg">
                <ul class="nav navbar-nav">
                    <li class="nav-item nav-section"><a class = "nav-link" href = "index.html">Happy Journal</a></li>
                    <li class = "nav-item nav-section"><a class = "nav-link" href = "journal.php">View Journal</a></li>
                    <li class = "nav-item nav-section"></li>
                    <li class = "nav-item nav-section"></li>
                    <li class = "nav-item nav-section"></li>
                    <li class = "nav-item nav-section"></li>
                </ul>
            </nav>
        </div>

        <h1>Add an Entry</h1>

        <form method = "POST" id = "entryForm">
            <label for = "entryTitle">Entry Title</label><br>
            <input type = "text" name = "entryTitle" required><br><br>
            <label for = "date">Date</label><br>
            <input type = "date" name = "date" required><br><br>
            <label for = "description">Description</label><br>
            <input type = "text" name = "description" required><br><br>
            <input type = "submit" name = "submit" value = "Submit">
        </form>

        <form id = "navigate">
            <button onclick = "goBack(); return false;">Go Back</button>
            <button onclick = "viewJournal(); return false;">View Journal</button>
        </form>

        <script>
            function goBack() {
                window.history.back();
            }

            function viewJournal() {
                window.open("journal.php", "_self");
            }
        </script>

        <?php
        if(isset($_POST['submit'])) {
            // store the user input into an array to easily add to the CSV
            $title = $_POST['entryTitle'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $entry = [$title, $date, $description];

            if(file_exists('journal.csv')) {
                $file = fopen('journal.csv', 'a'); // open the CSV file, mode = append
                fputcsv($file, $entry);
                fclose($file);
            }
        }
        ?>
    </body>
</html>