<html>
    <FORM action ="" method="POST">
        <H3>Earn Money By Playing Game!</h3>
        <fieldset>
        Username :
        <input type ="text" name ="nama" required>
        <br><br>
        User ID :
        <input type ="number" name ="id" required>
        <br> <br>
         Rank : 
        <select name="rank">
            <option value="GM">GM</option>
            <option value="Epic">Epic</option>
            <option value="Legend">Legend</option>
            <option value="Mythic">Mythic</option>
</select>

            <br><br>Match<br> 
        <input type="number" name="jam" required>
        <br><br>
        <input type="submit" name="simpan" value="Check">
</select>
    </fieldset>
    </FORM>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $name = $_POST['nama'];
    $id = $_POST['id'];
    $rank = $_POST['rank'];
    $waktu = $_POST['jam'];


class account{
    public $name = "Rico";
    public $id = "49957191";
}
class pay extends account{
    public $name;
    public $id;
    public $rank;
    public $waktu;
    

    public function verifikasi($name , $id){
    if ($name == "Rico" && $id == 49957191){
        return "Username/ID Exist";
    } else {
        return "Username/ID incorrect";
    }
}

    public function rank($rank , $waktu){
    $rank = $rank;
    $waktu = $waktu;
    if ($rank == "GM") {
        $rank = 5000;
        $total = $rank * $waktu;
        return "Rank Ini Mendapat $rank/match , Total = $total";
    }else if ($rank == "Epic") {
        $rank = 7500;
        $total = $rank * $waktu;
        return "Rank ini Mendapat $rank/match , Total = $total";
    }else if ($rank == "Legend") {
        $rank = 10000;
        $total = $rank * $waktu;
        return "Rank Ini Mendapat $rank/match, Total = $total";
    }else if ($rank = "Mythic") {
        $rank = 12500;
        $total = $rank * $waktu;
        return "Rank Ini Mendapat $rank/match, Total = $total";
        
    }
    }
    }
}

$output = new pay();
echo "Username = " . $name . "<br>";
echo "ID = " . $id . "<br>";
echo $output->verifikasi($name , $id) . "<br>";
echo "<hr>";
echo "Rank = $rank <br>";
echo "Match = " . $output->waktu = $waktu . "<br>";
echo $output->rank($rank , $waktu) . "<br>";
