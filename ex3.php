<!DOCTYPE html>
<html>

<head>
      <title></title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
      <div class="flex items-center justify-center h-screen">
            <div class="bg-red-800 text-white font-bold rounded-lg border shadow-lg p-10">
                  <table width="270px" class="border-2">
                        <?php
                        //get the values of width and height
                        $row_number = $_POST["height"];
                        $column_number = $_POST["width"];

                        for ($row = 0; $row < $row_number; $row++)
                        //for each row in the table
                        {
                              echo "<tr>";
                              for ($col = 0; $col < $column_number; $col++)
                              //for each column in the row
                              {
                                    $total = $row + $col;
                                    if ($total % 2 == 0)
                                    //at an even intersection put a black 30x30 block
                                    {
                                          echo "<td height=30px width=30px bgcolor=#000000></td>";
                                    } else {
                                          //at an odd intersection put a white 30x30 block
                                          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                                    }
                              }
                              echo "</tr>";
                        }
                        ?>
                  </table>
            </div>
      </div>
</body>

</html>