<head>

<style>

body{
    width: 80%;
    margin: 0 auto;
    text-align: center;
}

#tajuk{
    margin-top: 15px;
}

#arahan{
    line-height: 25px;
    font-size: 19px;
    /* margin-top: 11px; */
    margin-bottom: 49px;
}

#main_box{
    border: 2px solid #b7ddfb;
    width: 50%;
    padding: 14px;
    border-radius: 7px;
    margin: 0 auto;
    font-size: 22px;
    background: #f4faff;
}

#usr_input{
    width: 48px;
    font-size: 20px;
    padding-left: 5px;
    margin-right: 3px;
}

#btn_kira{
    height: 33px;
    font-weight: bold;
    background-color: #337ab7;
    border-color: #2e6da4;
    border-radius: 4px;
    border: none;
    color: white;
    cursor: pointer;
}

#btn_reset{
    height: 33px;
    font-weight: bold;

    border-radius: 4px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #d9534f;
    border-color: #d43f3a;
}
</style>

<?php

function factorial($num){
    if($num <= 1){
        return 1;
    }else{
        return $num * factorial($num - 1);
    }
}

if(isset($_POST['submit'])){

    $num = $_POST['usr_input'];

   



        $result = factorial($num);



        
}

function clear(){
    //ob_end_clean();
}

if(isset($_POST['clear'])){
    clear();
}
?>

</head>
<body>

<h2 id="tajuk">
NOMBOR FACTORIAL
</h2>
<div id="arahan">
Factorial ialah hasil darab bagi nombor yang dipilih dengan nombor-nombor
sebelumnya (nombor yang lebih kecil daripadanya). <br /><br />
Sebagai contoh, 6! (enam factorial) ialah bersamaan dengan 6x5x4x3x2x1 = 720.
<br /><br />
<sub style="color: darkorange;">
*Memandangkan nombor factorial boleh menjadi terlalu besar, nombor maksimum
yang dibenarkan ialah 99 sahaja. Terima kasih.
</sub>
</div>


<form action="" method="post">
<div id="main_box">
Masukkan nombor: <input id="usr_input" type="number" min=0 max=99 name="usr_input" style="width: 55px;"
value="<?php 
if(isset($result)){ echo $num; }
?>"
 />!
<button type="submit" id="btn_kira" name="submit">KIRA</button>





    <button type="submit" id="btn_reset" name="clear">RESET</button>
</form>
<br /><br /><br />


<?php 
if(isset($result)){ echo 
    "Factorial bagi nombor " . $num. " ialah: <br /><br />"; }
?>  
<span style="font-size: 37px; color: #03a9f4;">
    <?php 
    if(isset($result))
    {
   
        echo number_format($result, 0, '.', ', ');
  
    }
    
    ?>
</span>
</div>
<div style="position: absolute; bottom: 0; text-align: center; width: 80%; margin-bottom: 15px;">
Writer: Hasrull
</div>
</body>