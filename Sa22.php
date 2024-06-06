<html>
    <style>
        th,td,table,tr{
            
            border: 1px solid black;
            text-align: center;
        }
        td{padding: 10px;}
    </style>
<body>
    <?php
    function cube($side){
       return ($side**3); 
    } 
    function rrp($length,$height,$width){
        return $width*$height*$length;
    } 
    function cylinder($radius,$height){
        return pi()*($radius**2)*$height;
    } 
    function cone($radius,$height){
        return pi()*($radius**2)*($height/3);
    } 
    function sphere($radius){
       return (4/3)*pi()*($radius**3);
    } 
    ?>
    <?php
    $sidec=5;
    $rlength=7;
    $rheight=6;
    $rwidth=5;
    $cyradius=3;
    $cyheight=9;
    $coradius=7;
    $coheight=5;
    $sradius=3;
    ?>
    <table>
    <tr>
        <th colspan="3" style="text-align: center;"> Volume of Shapes</th>
    </tr>
    <tr>
        <th>Values</th><th>Formula</th><th>Answer</th>
    </tr>
    <tr>
        <td>
            <?php echo"s=$sidec";?>
        </td>
        <td>
            V=s<sup>3</sup>
        </td>
        <td>
            <?php echo cube($sidec)?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo"l=$rlength, h=$rheight, w=$rwidth";?>
        </td>
        <td>
            V=lhw
        </td>
        <td>
            <?php echo rrp($rlength,$rheight,$rwidth)?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo"r=$cyradius, h=$cyheight";?>
        </td>
        <td>
            V=πr<sup>2</sup>h
        </td>
        <td>
            <?php echo number_format(cylinder($cyradius,$cyheight),2)?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo"r=$coradius, h=$coheight";?>
        </td>
        <td>
             V=πr<sup>2</sup>h/3
        </td>
        <td>
            <?php echo number_format(cone($coradius,$coheight),2)?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo"r=$sradius";?>
        </td>
        <td>
            V=4/3πr<sup>3</sup>
        </td>
        <td>
            <?php echo number_format(sphere($sradius),2)?>
        </td>
    </tr>
    </table>


</body>
</html>