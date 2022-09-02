
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

    }


    $movieOne = new Movie('Titanic', 'horror', '2002');
    var_dump($movieOne);

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


    
</body>
</html>