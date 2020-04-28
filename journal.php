<!DOCTYPE html>
<html dir = "ltr" lang = "en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name = "keywords" content = "Nisha Choudhary | Happy Journal (Info Retrieval & Web Search)">
        <meta name = "author" content = "Nisha Choudhary">
        <meta name = "url" content = "journal.php" property = "og:url">
        <meta name = "viewport" content = "width = device - width, initial-scale = 1.0">

        <link href = "favicon.ico" rel = "shortcut icon" type = "image/x-icon" />
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity =  "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <link href = "happiness.css" rel = "stylesheet" />
        <link href = "journal.css" rel = "stylesheet" />

        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script>
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>

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

        <h1>Happy Journal</h1>

        <form action = "add.php" id = "add">
            <button type = "submit">Add an Entry</button>
        </form>

        <?php
            $csv = array_map('str_getcsv', file('journal.csv'));
            echo "<div class='container'>\n";
            foreach( $csv as $the_entry) {

                echo "\t\t\t<div class = 'card' style = 'width: 18rem;'>\n";
                echo "\t\t\t\t<div class = 'card-body'>\n";
                echo "\t\t\t\t\t<p>$the_entry[0]\n";
                echo "\t\t\t\t\t<br>$the_entry[1]\n";
                echo "\t\t\t\t\t<br>$the_entry[2]</p>\n";
                echo "\t\t\t\t</div>\n";
                echo "\t\t\t</div>\n";
            }

            echo "\t\t</div>\n";
        ?>
    </body>
</html>