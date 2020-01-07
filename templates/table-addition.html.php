<!DOCTYPE html>
<html>
<?php require "head.html.php" ?>
    <body>

<?php require "nav.html.php" ?>

        <div class="container mt-3 mb-5 overflow-auto">
            <h1>Table d'Addition</h1>
            <table>
                <thead>
                    <tr>
                        <th>+</th>
<?php for($col = 1; $col <= 10; $col++): ?>
                        <th scope="col"><?= $col ?></th>
<?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                </tbody>
<?php for($row = 1; $row <= 10; $row++): ?>
                <tr>
                    <th scope="row"><?= $row ?></th>
<?php for($col = 1; $col <= 10; $col++): ?>
                    <td><?= $col + $row ?></td>
<?php endfor; ?>
                </tr>
<?php endfor; ?>
            </table>
        </div>
<?php require "footer.html.php" ?>
<?php require "scripts.html.php" ?>
    </body>
</html>