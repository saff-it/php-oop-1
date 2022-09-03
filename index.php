
<?php 
    class Movie{
        private $title;
        private $genre;
        private $year;

        function __construct($_title,$_genre,$_year){
            $this->setTitle($_title);
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function setTitle($title){
            if (strlen($title) > 3){
                $this->title = $title;
            } else {
                $this->title = 'Film inesitente';
            }
        }

        public function getYear(){
            return $this->year;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getGenre(){
            return $this->genre;
        }

    }

    $movieOne = new Movie('Titanic', 'Horror', '2002');
    $movieTwo = new Movie('Jumanji', 'Commedy', '1999');
    $movieThree = new Movie('Avatar', 'Adventure', '2011');
    $movieFour = new Movie('Io sono leggenda', 'Horror', '2007');
    // var_dump($movieOne);
    $movies = [];
    $movies[] = $movieOne;
    $movies[] = $movieTwo;
    $movies[] = $movieThree;
    $movies[] = $movieFour;
    var_dump($movies);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>
<body>

    <section>
        <h3>Titoli Film:</h3>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <?php echo $movie->getTitle() . ' - Genere: ' . $movie->getGenre() . ' - Anno: ' . $movie->getYear() ?>
                </li>
            <?php } ?>
        </ul>
    </section>

    
</body>
</html>