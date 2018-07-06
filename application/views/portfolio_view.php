<h1>Портфолио</h1>
<p>
    <table>
        >3 АНИМЕ И СЕРИАЛЫ >3
        <?php
            foreach($data as $row) {
                echo"<tr><td>" . $row['Year'] . 
                    "</td><td>" . $row['Site'] . 
                    "</td><td>" . $row['Description'] . 
                    "</td></tr>";
            }
        ?>
    </table>
</p>