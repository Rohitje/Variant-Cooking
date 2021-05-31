<?php

    // require_once 'includes/db_conn.php.php';
    include_once 'includes/header.php';
    include_once 'includes/footer.php';

?>
<a href="index.php">
    <img class="logo-non-vegan" src="img/logo.svg" alt="cooking variant" width="200px" height="200px">
</a>
<!-------------------- Start tabs variant -------------------->
<div class="wrapper">
    <header>De varianten</header>
    <input type="radio" name="slider" id="non-vegan" checked>
    <input type="radio" name="slider" id="veggie">
    <input type="radio" name="slider" id="vegan">
    <input type="radio" name="slider" id="dessert">
    <input type="radio" name="slider" id="vegan-dessert">
    <nav>
        <label for="non-vegan" class="non-vegan">Non-Vegan</label>
        <label for="veggie" class="veggie">Veggie</label>
        <label for="vegan" class="vegan">Vegan</label>
        <!-- <label for="dessert" class="dessert">Desserten</label> -->
        <!-- <label for="vegan-dessert" class="vegan-dessert">Vegan desserten</label> -->
        <div class="tabs-slider"></div>
    </nav>
    <section>
        <div class="tabs-content tabs-non-vegan">
            <div class="tabs-title">Non-vegan</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum soluta harum nam deleniti a. Omnis porro maiores placeat rem doloremque qui, maxime accusamus architecto provident atque molestias tenetur quasi possimus voluptas quibusdam quam? Accusamus dicta ex quasi iusto vero nostrum. Modi enim eveniet earum magnam reiciendis quo ex eius?</p>
        </div>
        <div class="tabs-content tabs-veggie">
            <div class="tabs-title">Veggie</div>
            <p>Veganisten eten geen dierlijke producten, terwijl vegetariërs geen dieren eten, maar wel producten die daarvan afkomstig zijn (zoals zuivel en eieren). Mensen kiezen meestal voor deze diëten vanwege gezondheidsproblemen, religieuze beperkingen of morele zorgen over het schaden van dieren.</p>
        </div>
        <div class="tabs-content tabs-vegan">
            <div class="tabs-title">Vegan</div>
            <p>Iemand die vegan is (een veganist) eet en gebruikt geen dieren, dierlijke producten of producten die op dieren zijn getest. Als veganist eet je dus geen vlees, vis, eieren en zuivelproducten.</p>
        </div>
        <div class="tabs-content tabs-dessert">
            <div class="tabs-title">Desserten</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum soluta harum nam deleniti a. Omnis porro maiores placeat rem doloremque qui, maxime accusamus architecto provident atque molestias tenetur quasi possimus voluptas quibusdam quam? Accusamus dicta ex quasi iusto vero nostrum. Modi enim eveniet earum magnam reiciendis quo ex eius?</p>
        </div>
        <div class="tabs-content tabs-vegan-dessert">
            <div class="tabs-title">Vegan Desserten</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum soluta harum nam deleniti a. Omnis porro maiores placeat rem doloremque qui, maxime accusamus architecto provident atque molestias tenetur quasi possimus voluptas quibusdam quam? Accusamus dicta ex quasi iusto vero nostrum. Modi enim eveniet earum magnam reiciendis quo ex eius?</p>
        </div>
    </section>
</div>
<!-------------------- Einde tabs variant -------------------->
<!-------------------- Start desserten -------------------->
<div class="card-container">
    <h1 class="non-vegan-title">Desserten</h1>
    <div class="recept-card">
        <input type="radio" name="select" id="tap-1" checked>
        <input type="radio" name="select" id="tap-2">
        <input type="radio" name="select" id="tap-3">
        <input type="checkbox" id="tapImg">
        <div class="sliders">
            <label for="tap-1" class="tap tap-1"></label>
            <label for="tap-2" class="tap tap-2"></label>
            <label for="tap-3" class="tap tap-3"></label>
        </div>
        <div class="inner-card">
            <label for="tapImg" class="img">
                <img class="img-1" src="img/tiramisu.jpg" alt="tiramisu">
            </label>
            <div class="content content-1">
                <h2 class="title">Tiramisu</h2>
                <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nam dignissimos accusantium praesentium, libero vero laborum exercitationem quos numquam possimus necessitatibus. Voluptates reiciendis veniam sequi.</div>
            </div>
        </div>
        <div class="inner-card">
            <label for="tapImg" class="img">
                <img class="img-2" src="img/brownies.jpg" alt="brownies">
            </label>
            <div class="content content-2">
                <h2 class="title">Brownies</h2>
                <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nam dignissimos accusantium praesentium, libero vero laborum exercitationem quos numquam possimus necessitatibus. Voluptates reiciendis veniam sequi.</div>
            </div>
        </div>
        <div class="inner-card">
            <label for="tapImg" class="img">
                <img class="img-3" src="img/ijs_dessert.jpg" alt="ijs dessert">
            </label>
            <div class="content content-3">
                <h2 class="title">Ijs dessert</h2>
                <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nam dignissimos accusantium praesentium, libero vero laborum exercitationem quos numquam possimus necessitatibus. Voluptates reiciendis veniam sequi.</div>
            </div>
        </div>
    </div>
</div>