<!DOCTYPE html>
<html>
<head>
    <title>Peys App</title>
    <!---------Maria Teodora M. Biares___BSIT-3b-------->
</head>
<body>
    <h1>Peys App</h1>
    <form method="post">            
        <!------Size------>
        <label for="rngSize">Select Photo Size:</label>
        <input type="range" name="rngSize" id="rngSize" value="60" min="10" max="100" step="10" >
        <br>

        <!------Color for Border------>
        <label for="slcColor">Select Border Color:</label>
        <input type="color" name="slcColor" id="slcColor">
        <br>

        <!------Button for Process------>
        <button type="submit" name="btnProcess">Process</button>
        <br><br>

        <!------Condition for Process------>
        <?php 
            if (isset($_POST['btnProcess'])) : 
             
                $size = $_POST ['rngSize'];
                $border = $_POST ['slcColor'];
            
            endif; 
        ?> 

        <!------Photo to change size and Color Border ------>
        <img src="img.jpg"  width = "<?php echo $size; ?>" border= "5px"  style="color:<?php echo $border; ?>">
    </form>
</body>
</html>