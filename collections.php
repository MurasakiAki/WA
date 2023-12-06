<?php

// Vytvoření proměnných se třemi kolekcemi
$student = array("Adam", "Petr", "Karolina");

$predmet = array(
    "PV" => "Programové vybavení",
    "WA" => "Webové aplikace",
    "AJ" => "Anglický jazyk"
);

$známka = array(
    "Karolina" => array("WA" => 3),
    "Petr" => array("AJ" => 5, "WA" => 1),
    "Adam" => array("PV" => "N", "WA" => "N", "AJ" => "N")
);

// Výpis seznamu žáků a jejich známek
foreach ($student as $zak) {
    echo "Jméno žáka: $zak\n";

    foreach ($predmet as $kod => $nazev) {
        if (isset($známka[$zak][$kod])) {
            echo "$nazev: ";

            // Převod známky na symbol
            switch ($známka[$zak][$kod]) {
                case 1:
                    echo "1";
                    break;
                case 2:
                    echo "2";
                    break;
                case 3:
                    echo "3";
                    break;
                case 4:
                    echo "4";
                    break;
                case 5:
                    echo "5";
                    break;
                case "N":
                    echo "N";
                    break;
                default:
                    echo "Neznámá známka";
            }

            echo "\n";
        }
    }

    echo "\n";
}
?>
