<?php
/********************************************
 *                                          *
 *      GETTING EVERYTHING TOGHETHER        *
 *          - = BUILDING TOOL = -           *
 *                                          *
 ********************************************
 */


function bundle($files, $output, $badePath="", $replacements=[]) {
    $out = "";
    
    foreach ($files as $file) {
        $out .= file_get_contents($badePath.$file)."\n";
    }

    foreach ($replacements as $key=>$val)
        $out = str_replace($key, $val, $out);

    file_put_contents($output, $out);
}

$colors = [
    "blue"=>"#2196F3",
    "blue-lighten-5"=>"#E3F2FD", "blue-lighten-4"=>"#BBDEFB", "blue-lighten-3"=>"#90CAF9", "blue-lighten-2"=>"#64B5F6", "blue-lighten-1"=>"#42A5F5", "blue-darken-1"=>"#1E88E5",
    "blue-darken-2"=>"#1976D2", "blue-darken-3"=>"#1565C0", "blue-darken-4"=>"#0D47A1", "blue-accent-1"=>"#82B1FF", "blue-accent-2"=>"#448AFF", "blue-accent-3"=>"#2979FF", "blue-accent-4"=>"#2962FF", 
    
    "red"=>"#F44336",
    "red-lighten-5"=>"#FFEBEE", "red-lighten-4"=>"#FFCDD2", "red-lighten-3"=>"#EF9A9A", "red-lighten-2"=>"#E57373", "red-lighten-1"=>"#EF5350",
    "red-darken-1"=>"#E53935", "red-darken-2"=>"#D32F2F", "red-darken-3"=>"#C62828", "red-darken-4"=>"#B71C1C", "red-accent-1"=>"#FF8A80", "red-accent-2"=>"#FF5252", "red-accent-3"=>"#FF1744", "red-accent-4"=>"#D50000",

    "pink"=>"#E91E63",
    "purple"=>"#9C27B0",
    "deep-purple"=>"#673AB7",
    "indigo"=>"#3F51B5",
    "light-blue"=>"#03A9F4",
    "cyan"=>"#00BCD4",
    "pink"=>"#E91E63",
    "teal"=>"#009688", // TEAL
    "teal-lighten-5"=>"#E0F2F1", "teal-lighten-4"=>"#B2DFDB", "teal-lighten-3"=>"#80CBC4", "teal-lighten-2"=>"#4DB6AC", "teal-lighten-1"=>"#26A69A",
    "teal-darken-1"=>"#00897B", "teal-darken-2"=>"#00796B", "teal-darken-3"=>"#00695C", "teal-darken-4"=>"#004D40", "teal-accent-1"=>"#A7FFEB", "teal-accent-2"=>"#64FFDA", "teal-accent-3"=>"#1DE9B6", "teal-accent-4"=>"#00BFA5",
    "green"=>"#4CAF50", // GREEN
    "green-lighten-5"=>"#E8F5E9", "green-lighten-4"=>"#C8E6C9", "green-lighten-3"=>"#A5D6A7", "green-lighten-2"=>"#81C784", "green-lighten-1"=>"#66BB6A", "green-darken-1"=>"#43A047", "green-darken-2"=>"#388E3C",
    "green-darken-3"=>"#2E7D32", "green-darken-4"=>"#1B5E20", "green-accent-1"=>"#B9F6CA", "green-accent-2"=>"#69F0AE", "green-accent-3"=>"#00E676", "green-accent-4"=>"#00C853",

    "light-green"=>"#8BC34A",
    "lime"=>"#CDDC39",
    "yellow"=>"#FFEB3B",
    "amber"=>"#FFC107",

    "orange"=>"#FF9800",
    "orange-lighten-5"=>"#FFF3E0", "orange-lighten-4"=>"#FFE0B2", "orange-lighten-3"=>"#FFCC80", "orange-lighten-2"=>"#FFB74D", "orange-lighten-1"=>"#FFA726", "orange-darken-1"=>"#FB8C00", "orange-darken-2"=>"#F57C00",
    "orange-darken-3"=>"#EF6C00", "orange-darken-4"=>"#E65100", "orange-accent-1"=>"#FFD180", "orange-accent-2"=>"#FFAB40", "orange-accent-3"=>"#FF9100", "orange-accent-4"=>"#FF6D00",
    "deep-orange"=>"#FF5722", // DEEP ORANGE
    "deep-orange-lighten-5"=> "#FBE9E7", "deep-orange-lighten-4"=> "#FFCCBC", "deep-orange-lighten-3"=> "#FFAB91", "deep-orange-lighten-2"=> "#FF8A65",
    "deep-orange-lighten-1"=> "#FF7043", "deep-orange-darken-1"=> "#F4511E", "deep-orange-darken-2"=> "#E64A19", "deep-orange-darken-3"=> "#D84315", "deep-orange-darken-4"=> "#BF360C",
    "deep-orange-accent-1"=> "#FF9E80", "deep-orange-accent-2"=> "#FF6E40", "deep-orange-accent-3"=> "#FF3D00", "deep-orange-accent-4"=> "#DD2C00",
    "brown"=>"#795548", // BROWN
    "brown-lighten-5"=> "#EFEBE9", "brown-lighten-4"=> "#D7CCC8", "brown-lighten-3"=> "#BCAAA4", "brown-lighten-2"=> "#A1887F",
    "brown-lighten-1"=> "#8D6E63",  "brown-darken-1"=> "#6D4C41", "brown-darken-2"=> "#5D4037",    "brown-darken-3"=> "#4E342E",   "brown-darken-4"=> "#3E2723",
    "blue-grey"=>"#607D8B", // BLUE-GREY
    "blue-grey-lighten-5"=> "#ECEFF1", "blue-grey-lighten-4"=> "#CFD8DC", "blue-grey-lighten-3"=> "#B0BEC5", "blue-grey-lighten-2"=> "#90A4AE", "blue-grey-lighten-1"=> "#78909C",
    "blue-grey-darken-1"=> "#546E7A", "blue-grey-darken-2"=> "#455A64", "blue-grey-darken-3"=> "#37474F", "blue-grey-darken-4"=> "#263238",
    "grey"=>"#9E9E9E", // GREY
    "grey-lighten-5"=>"#FAFAFA", "grey-lighten-4"=>"#F5F5F5", "grey-lighten-3"=>"#EEEEEE", "grey-lighten-2"=>"#E0E0E0", "grey-lighten-1"=>"#BDBDBD", 
    "grey-darken-1"=>"#757575", "grey-darken-2"=>"#616161", "grey-darken-3"=>"#424242", "grey-darken-4"=>"#212121",

    "black"=>"#000000",
    "white"=>"#FFFFFF",
];

$cssColors = [
    "__MAIN__"=>"#FFFFFF"
];
$cssColors["__BTN_COLORS__"] = (function() use ($colors) {
    $css = "/*AUTO GENERATED*/";
    foreach ($colors as $name=>$color) {
        $css .= "
.color_$name {color: $color}
[color=$name] {color: $color}
.bgcolor_$name {background-color: $color}
[bgcolor=$name] {background-color: $color}

.btn.$name { background: $color; color: #FFFFFF; }
.btn.trn.$name { background: ".$color."22; color: $color }

.btn.trnh.$name, .btn.trnh.$name:hover,
.btn.trnh.$name:visited, .btn.trnh.$name:link { background: #00000000; color: $color; transition: background 0.3s; box-shadow: none }
.btn.trnh.$name:active, .btn.trnh.$name:focus { background: ".$color."55; box-shadow: none }

.btn.trnh.$name:hover { background: ".$color."22; color: $color }
        ";
    }

    return $css;
})();


bundle([
    "main.css",

    "button.css",
    "card.css",
    "grid.css",
    "colors.css",
    "tooltip.css",


    //"bs-grid.css",  // Bootstrap grid system
], "iamk.css", "css/", $cssColors);

bundle([
    "main.js",


], "iamk.js", "js/");
