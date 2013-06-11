<?php
    if (isset($_FILES["ImageUpload"])) {

        //si la imagen es cargada botton
        $imageName = $_FILES["ImageUpload"]["name"];
        $imageName = $_FILES["ImageUpload"]["tmp_name"];
        $imageName = $_FILES["ImageUpload"]["type"];

        //filtro de nombres

        $imageName = preg_replace("#[^a-z=-9]#i", "", $imageName);

        //erro
        if (!imageTemp) {

            echo ("Necesitas seleccionar una imagen");
            # code...
        }else
        {
            move_uploaded_file($imageTemp,"img/$imageName");
        }
    }





?>