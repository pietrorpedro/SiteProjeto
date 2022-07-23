<?php
include_once 'includes/head.php';
include_once 'includes/header.php';
?>

<?php
for ($i=0; $i < 4; $i++) : ?>
<div class="cards container mt-5">
    <div class="card">
        <a href="produto-detalhe.php">
            <img src="content/camiseta-preta.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-title text-center text-dark">Camiseta Legal</p>
                <p class="card-text text-center text-dark">R$ 100,00</p>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="produto-detalhe.php">
            <img src="content/camiseta-preta.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-title text-center text-dark">Camiseta Legal</p>
                <p class="card-text text-center text-dark">R$ 100,00</p>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="produto-detalhe.php">
            <img src="content/camiseta-preta.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-title text-center text-dark">Camiseta Legal</p>
                <p class="card-text text-center text-dark">R$ 100,00</p>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="produto-detalhe.php">
            <img src="content/camiseta-preta.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-title text-center text-dark">Camiseta Legal</p>
                <p class="card-text text-center text-dark">R$ 100,00</p>
            </div>
        </a>
    </div>

</div>
<?php endfor;?>


<?php
include_once 'includes/footer.php';
?>