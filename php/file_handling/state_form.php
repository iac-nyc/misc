<form>
    <label for="country">Country</label>
    <select name="country" id="country">
       <?php include 'data/html/countries.html';?>
        
    </select>
    <label for="state">State</label>
    <select name="state" id="state">
        <?php 
        if($fh = fopen('data/html/states.html', 'r')){
        while(!feof($fh)){
            $line = fgets($fh);
            if(strpos($line, 'New York')){
                echo str_replace('>New York', 'selected>New York', $line);
            } else {
                 echo $line;
            }
           
        }
            fclose($fh);
        } 
        echo '<optgroup label="US Outlying Territories">';
        $states = file_get_contents('data/html/territories.html');
        echo strtolower($states);
        echo '<optgroup>';

        echo '<optgroup label="Armed Forces">';
        $states_array = file('data/html/armed_forces.html');
        foreach($states_array as $line){
            echo str_replace('Armed Forces ', '', $line);
        }
       
        echo '</optgroup>';


       ?>
    </select>
</form>