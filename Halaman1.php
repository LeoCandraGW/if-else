<?php
    echo "<form method='post' action=' '>";
    echo "<table border='1'>";
    echo "Filter NIM";
    echo "<input type='text' name='nim'>";
    echo "<input type='submit' value='Tampilkan'>";

    
    $data=[["1","001","Adnan","3.9"],
            ["2","002","Cahyo","3.8"],
            ["3","003","Andrew","3.7"],
            ["4","004","Dimas","3.6"],
            ["5","005","Rachel","3.7"]];
    
    //unboxing
        if(isset($_POST['nim'])){
    //table
        echo "<table border='1'>";
    //if 001
        if($_POST["nim"]=='001'){
            echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing for 001
        for($x=0;$x<4;$x++){
            echo "<th style='background-color:#2bb3f3'>".$data[0][$x];
        }
        }
    //elseif 002
         elseif($_POST["nim"]=='002'){
            echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing for 002
        for($x=0;$x<4;$x++){
            echo "<th style='background-color:#2bb3f3'>".$data[1][$x];
        } 
        }
    //elseif 003
        elseif($_POST["nim"]=='003'){
            echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing for 003
        for($x=0;$x<4;$x++){
            echo "<th style='background-color:#2bb3f3'>".$data[2][$x];
        }
        }
    //elseif 004
        elseif($_POST["nim"]=='004'){
            echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing for 004
        for($x=0;$x<4;$x++){
            echo "<th style='background-color:#2bb3f3'>".$data[3][$x];
        } 
        }
    //elseif 005
        elseif($_POST["nim"]=='005'){
            echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing for 005
        for($x=0;$x<4;$x++){
            echo "<th style='background-color:#2bb3f3'>".$data[4][$x];
        }
        } 
    //else tampilan awal
        else {
    
        echo "<tr style='background-color:#4285f4'><th>No &nbsp&nbsp</th>";
        echo "<th>NIM &nbsp&nbsp</th>";
        echo "<th>Nama &nbsp&nbsp</th>";
        echo "<th>IPK &nbsp&nbsp</th></tr>";
    //unboxing semua data
        foreach($data as $x){
        echo "<tr style='background-color:#2bb3f3'><td> $x[0]</td>";
        echo "<td> $x[1]</td>";
        echo "<td> $x[2]</td>";
        echo "<td> $x[3]</td>";
    }
}
}

        
?>