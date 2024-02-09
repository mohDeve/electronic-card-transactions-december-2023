<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th> Series reference</th>
                    <th>Period</th>
                    <th> Suppressed</th>
                    <th>STATUS</th>
                    <th>UNITS</th>
                    <th>Magnitude</th>
                    <th>Subject</th>
                    <th>Group</th>
                    <th>Series title 1</th>
                    <th>Series title 2</th>
                    <th>Series title 3</th>
                    <th>Series title 4</th>
                    <th>Series title 5</th>
                </tr>
            </thead>
            <tbody>
                <?php  if(!empty($transactions)): ?>
                    <?php foreach($transactions as $t): ?>
                        <tr>
                            <td><?= $t['Series reference'] ?></td>
                            <td><?= $t[ 'Period'] ?></td>
                            <td><?= $t[ 'Data value'] ?></td>
                            <td><?= $t['Suppressed'] ?></td>
                            <td><?= $t['STATUS'] ?></td>
                            <td><?= $t['UNITS'] ?></td>
                            <td><?= $t[ 'Magnitude'] ?></td>
                            <td><?= $t['Subject'] ?></td>
                            <td><?= $t['Group'] ?></td>
                            <td><?= $t['Series title 1'] ?></td>
                            <td><?= $t['Series title 2'] ?></td>
                            <td><?= $t['Series title 3'] ?></td>
                            <td><?= $t['Series title 4'] ?></td>
                            <td><?= $t['Series title 5'] ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td> </td>
                </tr>
            </tfoot> -->
        </table>
    </body>
</html>
