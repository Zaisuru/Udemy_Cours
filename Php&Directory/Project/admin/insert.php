<?php
require 'database.php';

$nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";

if(!empty($_POST)) {
    $name = checkInput($_POST['name']);
    $description = checkInput($_POST['description']);
    $price = checkInput($_POST['price']);
    $category = checkInput($_POST['category']);
    $image = checkInput($_FILES['image']['name']);/*Permet de récupérer les values d'un file */
    $imagePath = '../images/' . basename($image) ;
    $imageExt = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true ;
    $isUploadSuccess = false ;

    if(empty($name)){
        $nameError =  "ce champ ne peut pas être vide";
        $isSuccess = false ;
    }
    if(empty($description)){
        $descriptionError =  "ce champ ne peut pas être vide";
        $isSuccess = false ;
    }
    if(empty($price)){
        $priceError =  "ce champ ne peut pas être vide";
        $isSuccess = false ;
    }
    if(empty($category)){
        $categoryError =  "ce champ ne peut pas être vide";
        $isSuccess = false ;
    }
    if(empty($image)){
        $imageError =  "ce champ ne peut pas être vide";
        $isSuccess = false ;
    }
    else{
        $isUploadSuccess = true ;
            if ($imageExt != "jpg" && $imageExt != "png" && $imageExt != "jpeg" && $imageExt != "gif" ){
                $imageError = "Les fichiers autorisé sont : .jpg, .png, .jpeg , .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath))
            {
                $imageError = " Le fichier existe déjà";
                $isUploadSuccess = false;
            }
            if ($_FILES["image"]["size"] > 500000){
                $imageError = "Le fichier ne doit pas dépasser 500Kb";
                $isUploadSuccess = false ;
            }
            if ($isUploadSuccess){
                if(!move_uploaded_file($_FILES["image"]["tmp_name"] , $imagePath)){
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                }
            }
    }

    if($isSuccess && $isUploadSuccess){
        $db = DataBase::connect();
        $statement = $db->prepare('INSERT INTO items (name,description,price,category,image) values( ?,?,?,?,?)');
        $statement ->execute(array($name,$description,$price,$category,$image));
        DataBase::disconnect();
        header("Location: index.php");
    }
}

function checkInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<!doctype html>
    <html lang="fr">
        <head>
            <meta charset="utf8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="../style/style.css">
            <!-- JQUERY Download -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- BOOTSTRAP Download -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link href="http://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css">
            <title>Burger Code</title>
        </head>
        <body>
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery" ></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>

            <div class="container admin">
                <div class="row">
                        <h1><strong>Ajouter un item </strong></h1>
                        <br>
                        <form class="form" action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Nom : </label>
                                <input type="text" class="form-control" id="name" placeholder="Nom" value="<?php echo $name ; ?>">
                                <span class="help-inline"><?php echo $nameError ; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description : </label>
                                <input type="text" class="form-control" id="description" placeholder="Description" value="<?php echo $description ; ?>">
                                <span class="help-inline"><?php echo $descriptionError ; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="price">Prix :(en €)</label>
                                <input type="number" step="0.01" class="form-control" id="price" placeholder="prix" value="<?php echo $price ; ?>">
                                <span class="help-inline"><?php echo $priceError ; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="category">Catégories : </label>
                                <select class="form-control" id="category" name="category">
                                    <?php
                                        $db = Database::connect();
                                        foreach ($db->query('SELECT * FROM categories') as $row){
                                            echo '<option value="'. $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                        DataBase::disconnect();
                                    ?>
                                </select>
                                <span class="help-inline"><?php echo $categoryError ; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="image">Selectionner une image : </label>
                                <input type="file" class="form-control" id="image" name="image">
                                <span class="help-inline"><?php echo $imageError ; ?></span>
                            </div>
                        <div class="form-action">
                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
                            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                        </div>
                        </form>
                    </div>

            </div>

        </body>
    </html>
