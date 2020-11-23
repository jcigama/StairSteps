<!--Name: Joseph Igama
    Date: 10/26/2020-->

<?php
    echo "<pre>";

    function createLeftSpaces($numSpaces) {
        for ($j = $numSpaces - 1; $j > 0; $j--) {
            echo "    ";
        }
    }

    function createInnerSpaces($numSpaces) {
        for ($j = 0; $j < $numSpaces; $j++) {
            echo "   ";

            for ($k = 0; $k < $j/$numSpaces; $k++) {
                echo " ";
            }
        }
        if($numSpaces > 0 && $j > 0) {
            echo "*<br>";
        }
        else {
            echo "<br>";
        }
    }

    function createPersons($persons, $steps) {
        createLeftSpaces($persons - $steps);
        echo " ○  *****";
        createInnerSpaces($steps);

        createLeftSpaces($persons - $steps);
        echo "/|\\ *";
        createInnerSpaces($steps + 1);

        createLeftSpaces($persons - $steps);
        echo "/ \ *";
        createInnerSpaces($steps + 1);
    }

    function stairSteps($stairs) {
        $bottomStars = "*****";
        for ($i = 0; $i < $stairs; $i++) {
            createPersons($stairs, $i);
            $bottomStars .= "****";
        }
        echo "$bottomStars";
    }

    stairSteps(7);
    echo "</pre>";