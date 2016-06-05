<html>
    <body>
        <?php
        $x = 10;
        $y = 6;
        $jumlah = $x + $y;
        $kurang = $x - $y;
        $kali = $x * $y;
        $bagi = $x / $y ;
        
        echo "<h1>Latihan PHP (operator dan kondisi)</h1> <br>";
        echo "X = " . $x ."<br>";
        echo "Y = " . $y ."<br> <br>";
        
        echo "Hasil Penjumlahan :". $jumlah ."<br>";
        
        echo "Hasil Pengurangan :". $kurang ."<br>";
        
        echo "Hasil Perkalian :". $kali ."<br>";
        
        echo "Hasil Pembagian :". $bagi ."<br>";
        echo"<br>";
        ?>
        
        <?php                    
        $x = 10;
        $y = 6;
        echo "<b> X == Y </b><br>";       
        if ($x == $y){
            echo "True";
        }else{
             echo "False";
        }
        ?>
        <br>
        
        <?php                    
        echo "<b> X === Y </b><br>";       
        if ($x === $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
        echo "<b> X != Y </b><br>";
        if($x != $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
        echo "<b> X <> Y </b><br>";
        If ($x <> $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
        echo "<b> X !== Y <br></b>";
        if($x !== $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
        echo "<b> X > Y </b><br>";
        if($x > $y){
            echo "True";
        }else{
            echo "False";
        }                    
        ?>
        <br>
        
        <?php
        echo "<b> X < Y </b> <br>";
        if($x < $y){
            echo "True";
        }else{
            echo "False";
        }                    
        ?>
        <br>
        
        <?php
        echo "<b> X >= Y </b> <br>";
        if($x >= $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
         echo "<b> X<=Y </b> <br>";
        if($x <= $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br><br>
        
        <?php
         echo "<b> $x and $y </b> <br>";
        if($x and $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
         echo "<b> $x or $y </b> <br>";
        if($x or $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br>
        
        <?php
         echo "<b> $x xor $y </b> <br>";
        if($x xor $y){
            echo "True";
        }else{
            echo "False";
        }
        ?>
        <br><br>
        
        <?php
         $x = 10;
        $y = 5;
        echo "<b> $x>$y </b> <br>";
        if ($x>$y){
        echo "x lebih besar";
        }else if ($x!=0) {
            echo "x tidak sama dengan 0"; 
    }else{
        echo "x = 0";
    }
    ?><br><br>
        
        <?php
        $favcolor = "red";
        
        switch ($favcolor) {
            case "red":
                echo "your favorite color is red!";
                break;
            
            case "blue":
                echo "your favorite color is blue!";
                break;
            
            case "green":
                echo "your favorite color is green!";
                break;
            default:
                echo "your favorite color is meither,";
            
        }
        ?><br><br>
        
        <?php
        for ($x = 0; $x<=10; $x++){
            echo "the number is : $x <br>";
        }
        ?><br>
        
        <?php
        $x =1;
        
        while ($x <=5 ){
            echo "the number is : $x <br>";
            $x++;
        }
        ?><br>
    </body> 
</html>
