<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci sequence</title>
    <style type="text/css">
        th {
            text-align: left;
            background-color: #999;
        }

        th,
        td {
            padding: 0.4em;
        }

        tr.alt td {
            background: #ddd;
        }
    </style>
</head>

<body>
    <h2>Fibonacci sequence</h2>
    <table cellspacing="0" cellpadding="0" style="width: 20em; border: 1px solid #666;">
        <tr>
            <th>Sequence # </th>
            <th> Value </th>
        </tr>
        <tr>
            <td>F <sub>0</sub></td>
            <td>0</td>
        </tr>
        <tr class="alt">
            <td>F <sub>1</sub></td>
            <td>1</td>
        </tr>
        <?php
        $interations = 100;
        $num1 = 0;
        $num2 = 1;
        for ($i = 0; $i < $interations; $i++) {
            $sum = $num1 + $num2;
            $num1 = $num2;
            $num2 = $sum;

        ?>
            <tr <?php if ($i % 2 != 0) echo "class='alt'"; ?>>
                <td>F <sub><?php echo $i; ?></sub></td>
                <td><?php echo $num2; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>