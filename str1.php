<?php
error_reporting(0);
session_start();
if(isset($_SESSION['color'])){
    unset($_SESSION['color']);
}
echo <<<here
<html>
<head>
    <title>Страница с выбором цвета</title>
</head>
<body>

<form action="page1.php" method="post" name="form" onclick="return checkForm()" >
here;
        $colors = array(0=>"#CCFF99",1=>"#9999FF",2=>"#009966",3=>"#FED6BC");
        echo  "<h1 align='center'>Выбор Цвета</h1>", "<br>", "<table align = 'center' border= '2px'>";
            foreach ($colors as $key => $value)
            {
                echo "<tr>
                        <td>
                        <input type=radio  name=\"color\"  value= $value> 
                        </td> 
                        <td> 
                        <div id=\"rectangle\"
                        style=\"width:165px;
                        height: 90px;
                        background: $value;\">
                        </div> 
                        </td> 
                      </tr>";
            }
            echo "<tr> <td colspan=\"2\"><button type=\"submit\">Продолжить</button>  </td> </tr> </table>"
           ?>
</form>

</body>
</html>


