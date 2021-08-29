<html>
    
    <head>
    
    </head>
    
    <body>
<?php
/* Napisz program, który na podstawie dwóch podanych liczb obliczy wynik
 * zadanej operacji (+, -, *, /).
 */
    
    function kalkulator($a, $b, $operation, $decimal_places)
    {
        echo "<h2>KALKULATOR by Kamil Z.</h2>";
        if ((gettype($a) == "integer" AND gettype($b) == "integer"))
        {
            if ($operation == "+")
            {
                $wynik = $a + $b;
                echo ("<table><tr><td>Pierwsza liczba &nbsp &nbsp</td><td>$a<td></tr><tr><td>Druga liczba:</td><td>$b</td></tr>");
                echo ("<tr><td>Operacja:</td><td>$operation</td></tr><tr><td><b><i>Wynik: </i></b></td><td>$wynik</td></tr></table>");
            }
            elseif ($operation == "-")
            {
                $wynik = $a - $b;
                echo ("<table><tr><td>Pierwsza liczba &nbsp &nbsp</td><td>$a<td></tr><tr><td>Druga liczba:</td><td>$b</td></tr>");
                echo ("<tr><td>Operacja:</td><td>$operation</td></tr><tr><td><b><i>Wynik: </i></b></td><td>$wynik</td></tr></table>");
            }
            elseif ($operation == "*")
            {
                $wynik = $a * $b;
                echo ("<table><tr><td>Pierwsza liczba &nbsp &nbsp</td><td>$a<td></tr><tr><td>Druga liczba:</td><td>$b</td></tr>");
                echo ("<tr><td>Operacja:</td><td>$operation</td></tr><tr><td><b><i>Wynik: </i></b></td><td>$wynik</td></tr></table>");
            }
            elseif ($operation == "/")
            {
                $wynik = round(($a / $b), $decimal_places);
                echo ("<table><tr><td>Pierwsza liczba &nbsp &nbsp</td><td>$a<td></tr><tr><td>Druga liczba:</td><td>$b</td></tr>");
                echo ("<tr><td>Operacja:</td><td>$operation</td></tr><tr><td><b><i>Wynik: </i></b></td><td>$wynik</td></tr></table>");
                echo ("<tr>(Wynik został zaokrąglony do $decimal_places miejsc po przecinku.)</tr>");
            }
            else 
            {
                echo "<u>Podałeś nieprawidłowy znak!</u>";
            }
        }
        else
        {
            echo "<b>Nie podałeś liczby!</b><br>";
            
            if (gettype($a) != "integer")
                echo ("Popraw pierwszą liczbę!");
            elseif (gettype($b) != "integer")
                echo ("Popraw drugą licznę!");
            else
                echo ("Popraw obie liczby!");
        }   
        echo "<br>";
        echo "<img src='kalkulator.jpg'/>";
                
    }
        
    $liczba_pierwsza = 123;
    $liczba_druga = 9;
    $znak_dzialania = "/";
    $decimal_places = 3; // ilość miejsc po przecinku (w przypadku operacji dzielenia)
    
    kalkulator($liczba_pierwsza, $liczba_druga, $znak_dzialania, $decimal_places);
    
?>
        
        
        
        
        
    </body>
    
</html>