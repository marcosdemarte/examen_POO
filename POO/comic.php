<?php 
require('book.php');


class comic extends Book{
    public function __construct(
        $autor,
        $titulo,
        $precio,
        $stock,
        $id,
        private array $ilustradores,
        private int $volumen
    ){
        parent::__construct($autor,$titulo,$precio,$stock,$id);
    }

    public function getInfo(){
        $result = "<br>volumen: $this->volumen <br>";
        $ul ="<ul> -- ilustradores -- ";
        foreach($this->ilustradores as $ilustrador){
            $ul .= "<li>$ilustrador</li>";
        }
        $ul .= "</ul>";

        echo parent::getInfo();

        echo $result .=$ul;

    }
}

//instancio
$comic1=new comic(
    'autor3',
    'titulo3',
    645,
    4,
    3,
    ['ilustrador1','ilustrador2'],
    3
);

echo $book1->getInfo();
echo "<br><br>";
echo $book2->getInfo();
echo "<br><br>";
echo $comic1->getInfo();

?>