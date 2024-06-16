<?php

class Book{
    //PROPIEDADES
    public function __construct(
        private string $autor,
        private string $titulo,
        private float $precio,
        private int $stock,
        private int $id
    ){
       // echo "soy instancia de book";
    }
    public function getInfo(){
        $info = "<b> $this->titulo </b> <br>
        precio: {$this->precio}<br>
        autor: {$this->autor} <br>
        ";

        if($this->stock > 0){
            $info.= "stock: {$this->stock}";
        }else{
            $info .= "No disponible";
        }

        return $info;
    }
    //METODOS    
}

//INSTANCIA DE LA CLASE BOOKS
$book1=new book(
    'autor1',
    'titulo1',
    550.40,
    0,
    1
);
$book2=new book(
    'autor2',
    'titulo2',
    750.33,
    16,
    2
);

/*
var_dump($book1);
echo $book1->titulo;
echo "<br>";
echo $book2->titulo;
*/

//$book1->precio=0;
/*
echo $book1->getInfo();
echo "<br><br>";
echo $book2->getInfo();
*/
?>