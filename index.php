<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="group.css">
    <script src="https://kit.fontawesome.com/df0909b738.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <title>My Shop</title>
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <img src="integration-design-and-assets/Logo.png" alt="Logo"/>
            <div class="hidden_menu">
                <a href="#">HOME</a>
                <a href="#">SHOP</a>
                <a href="#">MAGAZINE</a>
            </div>
        </div>
        <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
        <div class="burger_menu"><i class="fas fa-bars"></i></div>
        <div class="login"><a href="login.php">LOGIN</a></div>
    </header>
    <div class="searches">
        <div class="boite">
            <div class="input_search">
                <img src="integration-design-and-assets/Search.png" alt="search"/>
                <input type="text" value="Living room"/>
            </div>
            <div class="space"></div>
            <div class="algo">
                <p>Powered by <strong>Algolia</strong></p>
                <img src="integration-design-and-assets/Sajari%20Logo.png" alt="logo"/>
            </div>
        </div>
        <div class="best">
            <select>
                <option>
                    Best match
                </option>
            </select>
        </div>
        <div class="filters">
            <select>
                <option>
                    Filters
                </option>
            </select>
        </div>
    </div>


    <!--    product list-->
    <main class="products_container">
        <div class="filterBy">
            <p>FILTER BY</p>
            <select><option>Collection</option></select>
            <select><option>Color</option></select>
            <select><option>Category</option></select>
            <p>Price Range</p>
            <input type="range" />
            <div class="range">
                <span>$0</span>
                <span>$10,000+</span>
            </div>


        </div>
        <div class="product_tag">
            <img src="items/Coombes.png" alt="Coombes"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Coombes</strong></p>
                    <p>$2,600</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>LOUNGE</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Keeve%20Set.png" alt="Coombes"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Keeves</strong></p>
                    <p>$2,600</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>TABLE & CHAIRS</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Nillè.png" alt="Coombes"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Nillè</strong></p>
                    <p>$2,600</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>ARMCHAIR</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Blanko.png" alt="Blanko"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Blanko</strong></p>
                    <p>$90</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>SIDE TABLE</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Momo.png" alt="Momo"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Momo</strong></p>
                    <p>$890</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>SHELVES</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Penemillè.png" alt="Penemillè"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Coombes</strong></p>
                    <p>$120</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>CHAIR</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>
        <div class="product_tag">
            <img src="items/Kappu.png" alt="Kappu"/>
            <div class="Sous_boite">
                <div class="name_prices">
                    <p><strong>Kappu</strong></p>
                    <p>$420</p>
                </div>
                <div class="tag_footer">
                    <div>
                        <p>SHELVES</p>
                        <div class="stars">
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star%20-%20On.png" alt="rating"/>
                            <img src="integration-design-and-assets/Star.png" alt="rating"/>
                        </div>
                    </div>
                    <div><img src="integration-design-and-assets/Cart%20Button.png" alt="cart"/></div>
                </div>
            </div>
        </div>



    </main>
    <footer>
        <a>1</a>
        <a>2</a>
        <a>3</a>
        <a>4</a>

        <a class="numbers_hidden">5</a>
        <a class="numbers_hidden">6</a>
        <a class="numbers_hidden">6</a>
        <a class="numbers_hidden">7</a>
        <a class="numbers_hidden">8</a>
        <a class="numbers_hidden">9</a>
        <a class="numbers_hidden">10</a>

        <a>></a>
    </footer>
</div>

</body>
</html>