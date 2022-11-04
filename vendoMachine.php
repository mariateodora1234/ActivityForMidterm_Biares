<!DOCTYPE html>
<html >
<head>
    <title>Vendo Machine</title>
    <!---------Maria Teodora M. Biares___BSIT-3b-------->
</head>
<body>
    <h1>Vendo Machine</h1>
    <form method="get">
        <!---------Checkbox for Beverages Product-------->
        <fieldset  style="width: 500px;">
            <legend>Products:</legend>
            
               <input type="checkbox" name="chkBeverage[]" id="chkCoke" value="Coke"> <label for="chkCoke">Coke-₱15</label> <br>
               <input type="checkbox" name="chkBeverage[]" id="chkSprite" value="Sprite"> <label for="chkSprite">Sprite-₱20</label><br>
               <input type="checkbox" name="chkBeverage[]" id="chkRoyal" value="Royal"> <label for="chkRoyal">Royal-₱20</label><br>
               <input type="checkbox" name="chkBeverage[]" id="chkPepsi" value="Pepsi"> <label for="chkPepsi">Pepsi-₱15</label><br>
               <input type="checkbox" name="chkBeverage[]" id="chkMountaindew" value="MountainDew"> <label for="chkMountaindew">Mountain Dew-₱20</label><br>
            
        </fieldset>

        <fieldset  style="width: 500px;">
            <legend>Options:</legend>
            <!---------Selection Size-------->
                <label for="drpSize">Size</label>
                <select name="drpSize[]" id="drpSize" >
                    <option value="Regular">Regular</option>
                    <option value="Up-Size">Up-Size(add ₱ 5)</option>
                    <option value="Jumbo">Jumbo (add ₱ 10)</option>
                </select>
            <!---------Quantity of Products choose-------->
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity">
            <!---------Button to checkout -------->    
                <input type="submit" name="btnCheckout" value="Checkout">
            
        </fieldset>

    </form>
    <?php
    if(isset($_GET['btnCheckout'])) {
        if(empty($_GET['chkBeverage'])){
            echo '<hr>';
            echo '<b>No Selected Product, Try Again</b>';
        }
    }

    if(isset($_GET['btnCheckout']) && isset($_GET['chkBeverage']) && isset($_GET['drpSize']) && isset($_GET['quantity'])){

        echo '<hr>';
        echo '<b>Purchase Summary:</b> <br>';

        $arrBeverage = $_GET['chkBeverage'];
        $arrSize = $_GET['drpSize'];
        $quantity =$_GET['quantity'];
        
       foreach($arrBeverage as $key => $valueBeverage){
            foreach($arrSize as $key => $SizeValue){
                
                //Computation for Regular Size
                if ($SizeValue == "Regular"){

                    //Pieces
                    if($valueBeverage == "Coke" && $quantity > 1){
                        $coke = 15 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    elseif($valueBeverage == "Sprite" && $quantity > 1){
                        $sprite = 20* $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    elseif($valueBeverage == "Royal" && $quantity > 1){
                        $royal = 20* $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    elseif($valueBeverage == "Pepsi" && $quantity > 1 ){
                        $pepsi = 15 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    elseif($valueBeverage == "MountainDew" && $quantity > 1 ){
                        $mountaindew = 20 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    } 

                    //Piece
                    elseif($valueBeverage == "Coke" && $quantity==1){
                        $coke = 15 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    elseif($valueBeverage == "Sprite" && $quantity==1){
                        $sprite = 20* $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    elseif($valueBeverage == "Royal" && $quantity==1){
                        $royal = 20* $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    elseif($valueBeverage == "Pepsi" && $quantity==1){
                        $pepsi = 15 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    elseif($valueBeverage == "MountainDew" && $quantity==1){
                        $mountaindew = 20 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    }     
                }

                //Computation for Up-Size
                elseif ($SizeValue == "Up-Size"){

                    //Pieces 
                    if($valueBeverage == "Coke" && $quantity > 1){
                        $coke = 15 * $quantity + 5 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    elseif($valueBeverage == "Sprite" && $quantity > 1){
                        $sprite = 20 * $quantity + 5 * $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    elseif($valueBeverage == "Royal" && $quantity > 1){
                        $royal = 20 * $quantity + 5 * $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    elseif($valueBeverage == "Pepsi" && $quantity > 1){
                        $pepsi = 15 * $quantity + 5 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    elseif($valueBeverage == "MountainDew" && $quantity > 1){
                        $mountaindew = 20 * $quantity + 5 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    }  
                    
                    //Piece 
                    elseif($valueBeverage == "Coke" && $quantity==1){
                        $coke = 15 * $quantity + 5 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    elseif($valueBeverage == "Sprite" && $quantity==1){
                        $sprite = 20 * $quantity + 5 * $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    elseif($valueBeverage == "Royal" && $quantity==1){
                        $royal = 20 * $quantity + 5 * $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    elseif($valueBeverage == "Pepsi" && $quantity==1){
                        $pepsi = 15 * $quantity + 5 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    elseif($valueBeverage == "MountainDew" && $quantity==1){
                        $mountaindew = 20 * $quantity + 5 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    }  
                }

                //Computation for Jumbo Size
                elseif ($SizeValue == "Jumbo"){

                    //Pieces
                    if($valueBeverage == "Coke" && $quantity > 1 ){
                        $coke = 15 * $quantity + 10 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    
                    elseif($valueBeverage == "Sprite" && $quantity > 1){
                        $sprite = 20 * $quantity + 10 * $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }

                    elseif($valueBeverage == "Royal" && $quantity > 1){
                        $royal = 20 * $quantity + 10 * $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                     
                    elseif($valueBeverage == "Pepsi" && $quantity > 1){
                        $pepsi = 15 * $quantity + 10 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                   
                    elseif($valueBeverage == "MountainDew" && $quantity > 1){
                        $mountaindew = 20 * $quantity + 10 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','pieces of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    }  
                    
                    //Piece
                    elseif($valueBeverage == "Coke" && $quantity==1){
                        $coke = 15 * $quantity + 10 * $quantity;
                        $qtyCoke = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    elseif($valueBeverage == "Sprite" && $quantity==1){
                        $sprite = 20 * $quantity + 10 * $quantity;
                        $qtySprite = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    elseif($valueBeverage == "Royal" && $quantity==1){
                        $royal = 20 * $quantity + 10 * $quantity;
                        $qtyRoyal = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    elseif($valueBeverage == "Pepsi" && $quantity==1){
                        $pepsi = 15 * $quantity + 10 * $quantity;
                        $qtyPepsi = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    elseif($valueBeverage == "MountainDew" && $quantity==1){
                        $mountaindew = 20 * $quantity + 10 * $quantity;
                        $qtyMountaindew = $quantity;
                        echo '<li> ',$quantity,' ','piece of ',$SizeValue,' ',$valueBeverage,' amounting to ',' ₱ ',$mountaindew,'</li> <br>';
                    } 
                }
            }  
        }
            //Total Item And Amount
            $totalItem = $qtyCoke + $qtySprite + $qtyRoyal + $qtyPepsi +  $qtyMountaindew;
            $totalAmount = $coke + $sprite + $royal + $pepsi + $mountaindew;
            echo '<b>Total Number of Items: </b>',$totalItem,'<br>';
            echo '<b>Total Amount: </b>',$totalAmount,'<br>';   
    }
    ?>
</body>
</html>
