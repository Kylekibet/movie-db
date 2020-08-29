<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <style>
    img {
        margin: 20px;
    }

    @media (max-width: 700px) {
        img {
            margin: 5px;
        }
    }
    </style>
</head>

<body class="bg-primary">
    <div class="container-fluid">
        <div class="row text-center">
            <?php
                $movies = array('a-year-in-my-life', 'art-of-darkness', 'conacher', 'cult-of-the-cobra', 'demonia', 'gale-force', 'gatao', 'gunfight', 'half-white', 'jungle-master2', 'lovers-of-the-artic-circle', 'phineas-and-ferb', 'rubin', 'santana', 'sukiyaki', 'the-child', 'the-flying-classroom', 'water-lilies', 'wing-chung');
                $moviesLength = count($movies);
                $dir = 'movies/';
                for($x = 0; $x < $moviesLength; $x++) {
                    echo "<div class='col-6 col-sm-6 col-md-4 col-lg-3'>";
                    echo "<img class=\"img-fluid rounded\" src ='" . $dir . $movies[$x] . ".jpg'>";
                    echo "</div>";
                }
                echo "hello";
            ?>
        </div>
    </div>
</body>

</html>