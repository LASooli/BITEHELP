<nav id="maiaNav"><ul>

        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);

        /*if ($currentPage === 'index.php') { echo "<li><button>Home</button></li>";
        } else {
            echo " <a href='index.php'><li><button>Home</button></li></a>";
        }*/
        /*
        if ($currentPage === 'shop.php') { echo "<li id='shop-nav'><button>Shop</button></li>";
        } else {
            echo "<a  id='shop-nav' href='shop.php'><li> <button>Shop</button></li></a>";
        }
        if ($currentPage === 'contact.php') { echo "<li id='contact-nav'><button>Contact</button></li>";
        } else {
            echo "<a  id='contact-nav' href='contact.php'><li id='contact-nav'><button>Contact</button></li></a>";
        }
        */
        /*if ($currentPage === 'FAQ.php') { echo "<li><button>FAQ</button></li>";
        } else {
            echo "<a href='FAQ.php'><li><button>FAQ</button></li></a>";
        }*/
        if ($currentPage === 'checkout.php') { echo "<li id='cartNav'><button>Cart</button></li>";
        } else {
            echo "<a href='checkout.php'><li id='cartNav'><button id='cartNavButton'><img alt='cart img'src='images/cart.png' style='width:63.2px; height:39.5px;'></button></li></a>";
        }

        ?>
    </ul></nav>