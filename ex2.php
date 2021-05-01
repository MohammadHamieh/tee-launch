<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- ... -->
</head>

<body>
    <div class="flex items-center justify-center h-screen">

        <div class="bg-indigo-800 text-white font-bold rounded-lg border shadow-lg p-10">
            <?php
                
            echo "<h1>" . valid_brackets($_POST["ex2"]) . "</h1>";

            ?>
        </div>

</body>

</html>
<?php
//function to check if brackets are valid based on the asumption
//that they should be in the right order i.e. opening then closing
function valid_brackets($str_brackets)
{
    $pairs = ["}" => "{", "]" => "[", ")" => "("];
    // associative array of compatable brackets
    $my_stack = [];
    //empty stack
    for ($i = 0; $i < strlen($str_brackets); $i++) {
        //loop through each charachter in the provided string
        $current = $str_brackets[$i];
        if ($current == "[" || $current == "{" || $current == "(") {
            //if the current charachter is an opening bracket
            array_push($my_stack, $current);
            //push it to the stack
        } else {
            //else if it is not a closing bracket
            $poped = array_pop($my_stack);
            //pop a bracket from the stack
            if ($poped != $pairs[$current]) {
                //compare the poped chrachter with the current charachter
                //to check if they are a compatable pair
                //if not return invalid
                return "Invalid";
            }
        }
    }
    //if nothing breaks return valid
    return "Valid";
}
?>