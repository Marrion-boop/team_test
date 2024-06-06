<html>
    <style>
        td{
            padding: 10px;
            text-align: center;
        }
        th,td,table,tr{
            border: 1px solid black;
        
        }
    </style>
    <body>
        <?php
        $bananaimg="<img src=\"Banana.jpg\" alt=\"Banana\" width=\"64\" height=\"64\">";
        $appleimg="<img src=\"Apple.jpg\" alt=\"Apple\" width=\"64\" height=\"64\">";
        $strawberryimg="<img src=\"Strawberry.jpg\" alt=\"Strawberry\" width=\"64\" height=\"64\">";
        $grapeimg="<img src=\"Grape.jpg\" alt=\"Grape\" width=\"64\" height=\"64\">";
        $mangoimg="<img src=\"Mango.jpg\" alt=\"Mango\" width=\"64\" height=\"64\">";
        $watermelonimg="<img src=\"Watermelon.jpg\" alt=\"Watermelon\" width=\"64\" height=\"64\">";
        $blueberryimg="<img src=\"Blueberry.jpg\" alt=\"Blueberry\" width=\"64\" height=\"64\">";
        $peachimg="<img src=\"Peach.jpg\" alt=\"Peach\" width=\"64\" height=\"64\">";
        $lemonimg= "<img src=\"Lemon.jpg\" alt=\"Lemon\" width=\"64\" height=\"64\">";
        $limeimg="<img src=\"Lime.jpg\" alt=\"Lime\" width=\"64\" height=\"64\">";

        $bananadesc="Long and curved yellow fruit";
        $appledesc="Round fruit wit red skin and light yellow inside";
        $strawberrydesc="Small red fruit with tiny seeds outside";
        $grapedesc="Small round violet that comes in clusters";
        $mangodesc="Oval shaped yellow fruit that grows in tropical country";
        $watermelondesc="Large oblong green fruit that has a red insides";
        $blueberrydesc="Small round bluish-black berry ";
        $peachdesc="Yellowish-Whitish oval fruit";
        $lemondesc= "Yellow Oval citrus fruit with pointed tip";
        $limedesc="Small green round citrus fruit";

        $bananafact="It is considered a berry";
        $applefact="Apples are picked by hand";
        $strawberryfact="It is not considered a berry";
        $grapefact="Grape are used to make a synthetic leather";
        $mangofact="The name \"mango\" originated from India";
        $watermelonfact="They are 92 percent water";
        $blueberryfact="The reason they are blue is because of the Anthocynin inside it";
        $peachfact="It originated from China";
        $lemonfact="It is considered a berry";
        $limefact="Its commonly used in cocktails";


        $banana=array($bananaimg,"Banana",$bananadesc,$bananafact);
        $apple=array($appleimg,"Apple",$appledesc,$applefact);
        $strawberry=array($strawberryimg,"Strawberry",$strawberrydesc,$strawberryfact);
        $grape=array($grapeimg,"Grape",$grapedesc,$grapefact);
        $mango=array($mangoimg,"Mango",$mangodesc,$mangofact);
        $watermelon=array($watermelonimg,"Watermelon",$watermelondesc,$watermelonfact);
        $blueberry=array($blueberryimg,"Blueberry",$blueberrydesc,$blueberryfact);
        $peach=array($peachimg,"Peach",$peachdesc,$peachfact);
        $lemon= array($lemonimg,"Lemon",$lemondesc,$lemonfact);
        $lime=array($limeimg,"Lime",$limedesc,$limefact);

        
        $fruits=array($banana,$apple,$strawberry,$grape,$mango,$watermelon,$blueberry,$peach,$lemon,$lime);
        sort($fruits);
        ?>


<table>
    <tr>
        <th colspan="4" style="text-align:center">My Fruits</th>
    </tr>
    <tr>
        <th style="text-align:center">Image</th>
        <th style="text-align:center">Name</th>
        <th style="text-align:center">Description</th>
        <th style="text-align:center">Facts</th>
    </tr>
    <?php



for($i=0;$i<count($fruits);$i++){
  ?>

  <tr>

  <?php
  for($j=0;$j<count($fruits[$i]); $j++){
   ?>
  
   <td><?php echo $fruits[$i][$j]?></td>
<?php
}
?>
  <tr>
  <?php
}
?>
</table>
    </body>
</html>