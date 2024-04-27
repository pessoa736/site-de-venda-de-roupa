<?php

class Produto {
    public $name;
    public $descricao;
    public $imagem;
    public $preco;
    public $endereco;

    function __construct($name, $descricao, $imagem, $preco, $endereco){
        $this->name = $name;
        $this->descricao = $descricao;
        $this->imagem = "src/imagem/produtos/".$imagem;
        $this->preco = $preco;
        $this->endereco = $endereco;
    }
}

$produtos=[
    'camisas'=>[],
    'short' =>[],
    'meias' =>[],
];

$produtos['camisas'][] = new Produto(
    "i <3 pudding", 
    "uma camisa de pudim, feita pelos melhores artezões de pudim. qual todos podem usar!", 
    "Camiza_pudim.jpg", 
    "19.90",
    "sobre.php"
);
$produtos['camisas'][] = new Produto(
    "i <3 pudding", 
    "uma camisa de pudim, feita pelos melhores artezões de pudim. qual todos podem usar!", 
    "Camiza_pudim.jpg", 
    "19.90",
    "sobre.php"
);

function add_produtos($produto){
    echo '
        <div class="produto">
        <a href="'.$produto->endereco.'">
         <img src="' . $produto->imagem . '" alt="' . $produto->name . '">
         <h2>' . $produto->name . '</h2>
         <p>' . $produto->descricao . '</p>
         <p class="preco">R$ ' . $produto->preco . '</p>
        </a>

    </div>
    ';
}

function init_aba(){
    global $produtos;
    foreach ($produtos as $k => $p2) {

        echo '<h1>'.$k.'</h1>
            <div class="catalogo_container">
            ';
        foreach ($p2 as $k2 => $produto) {
            add_produtos($produto);
        }
        echo "
        </div>";
    }
}

init_aba();
?>