<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="txt/css" href="style.css">
    </head>
    <body>
        <h2>Multidimensional array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $Movie = array (
                    array("Avengers: Invinity War", 2018, 8.7),
                    array("The Avengers", 2012, 8.1),
                    array("Guardian of the Galaxy", 2014, 8.1),
                    array("Iron Man", 2008, 7.9),
                );
            echo "<tr>";
                echo "<td>". $Movie[0][0] ."</td>";
                echo "<td>". $Movie[0][1] ."</td>";
                echo "<td>". $Movie[0][2] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $Movie[1][0] ."</td>";
                echo "<td>". $Movie[1][1] ."</td>";
                echo "<td>". $Movie[1][2] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $Movie[2][0] ."</td>";
                echo "<td>". $Movie[2][1] ."</td>";
                echo "<td>". $Movie[2][2] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $Movie[3][0] ."</td>";
                echo "<td>". $Movie[3][1] ."</td>";
                echo "<td>". $Movie[3][2] ."</td>";
            echo "</tr>";
            ?>
        </table>
    </body>
</html>