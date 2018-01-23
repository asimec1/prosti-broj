<?php
function ProstiBroj(){
    for($i=2; $i<100; $i++){
		if($i % $i == 0 && $i % 1 == 0) {
            if($i % 2 != 0 && $i % 3 != 0) {
				print $i . " ";   
            }
        } 
	}
}

echo "<p>Prosti brojevi su: </p>";
ProstiBroj();

?>