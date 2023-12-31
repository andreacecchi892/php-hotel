<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
    </style>
</head>
<body>
    <div class="container p-5 mb-5">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" value="check">
                        <label class="form-check-label" for="exampleCheck1">Hotel con parcheggio</label>
                    </div>
                    <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Seleziona hotel per voto</option>
                        <option name="option" value="1">1</option>
                        <option name="option" value="2">2</option>
                        <option name="option" value="3">3</option>
                        <option name="option" value="4">4</option>
                        <option name="option" value="5">5</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
</div>
    <div class="container">
        <div class="row">
        
    <?php 

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    if ($_GET == []){
            //card hotel
    foreach ($hotels as $value) {
        echo '<div class="col-lg-6">
        <div class="card">
                <div class="card-body">';
        
                echo '<h5 class="card-title">' . $value["name"] . '</h5>';
                echo '<p class="card-text">' . $value["description"] . '</p>';

                //testo che appare per il parcheggio
                echo '<span>'. $tmp = ($value["parking"]) ? '<i class="bi bi-p-circle"></i>' : '<i class="bi bi-sign-no-parking"></i>' .'</span>';
                echo '<span class="ms-4 voto">'. 'voto ' . $value["vote"] .'</span>';
                echo '<span class="ms-4">'. 'Distanza dal centro: ' . $value["distance_to_center"] . ' km' . '</span>';

            echo "</div>
            </div>
        </div>";
    }
    //Fine card hotel
    }
    elseif($_GET["checkbox"] == "check"){
        foreach ($hotels as $value) {
            if(!$value["parking"]){
                echo '<div class="col-lg-6">
                <div class="card">
                        <div class="card-body">';
                
                        echo '<h5 class="card-title">' . $value["name"] . '</h5>';
                        echo '<p class="card-text">' . $value["description"] . '</p>';
        
                        //testo che appare per il parcheggio
                        echo '<span>'. $tmp = ($value["parking"]) ? '<i class="bi bi-p-circle"></i>' : '<i class="bi bi-sign-no-parking"></i>' .'</span>';
                        echo '<span class="ms-4 voto">'. 'voto ' . $value["vote"] .'</span>';
                        echo '<span class="ms-4">'. 'Distanza dal centro: ' . $value["distance_to_center"] . ' km' . '</span>';
        
                    echo "</div>
                    </div>
                </div>";
            }
        }
    };
    ?>

        </div>
    </div>
</body>
</html>