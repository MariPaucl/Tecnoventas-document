<div style="width:50%; float:left">
            <?php
            $com = $_POST ['celular'];
            if ($com == "Motorola G20")
            echo  include("celular/moto_G20.php");
            elseif ($com == "Motorola G30")
            echo include("celular/moto_G30.php");
            elseif ($com == "Realme 6")
            echo include("celular/realme.php");
            elseif ($com == "Xiaomi Redmi 9T")
            echo include("celular/redmi.php");
            elseif ($com == "Samsung Galaxy A32")
            echo include("celular/Samsung_Galaxy_A32.php");
            elseif ($com == "Samsung Galaxy S20")
            echo include("celular/Samsung_Galaxy_S20.php");
            elseif ($com == "Samsung Galaxy A12")
            echo include("celular/samsung.php");
            elseif ($com == "Xiaomi Poco X3")
            echo include("celular/xiaomi.php");
            else 
            echo include("celular/xiaomi_pocophone.php");
            ?>
            </div>