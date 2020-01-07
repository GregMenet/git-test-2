<!DOCTYPE html>
<html>
<?php require "head.html.php" ?>
    <body>
<?php require "nav.html.php" ?>

        <div class="container mt-3 pb-5 overflow-auto">
            <form>
                <div class="form-group row">
                    <label for="select-table" class="col-form-label mr-3">Choisissez la table à afficher</label>
                    <select id="select-table" class="form-control col-1 mr-3" name="table">
<?php for($opt = 1; $opt <= 10; $opt++): ?>
                        <option <?= ($opt == $table)?"selected":""; ?>><?= $opt; ?></option>
<?php endfor; ?>
                    </select>
                    <input type="hidden" name="page" value="mul">
                    <input type="submit" class="btn btn-outline-secondary" name="btn-afficher" value="Afficher">
                </div>
            </form>
            <h1>Table de <?= $table; ?></h1>
            <table>
<?php for($mul = 1; $mul <= 10; $mul++): ?>
                <tr>
                    <td style="text-align: right;">
                        <?= $mul; ?>
                    </td>
                    <td>x</td>
                    <td><?= $table; ?></td>
                    <td>=</td>
                    <td style="text-align: right;">
                        <?= $mul * $table; ?>
                    </td>
                </tr>
<?php endfor; ?>
            </table>
        </div>
<?php require "footer.html.php" ?>
<?php require "scripts.html.php" ?>
    </body>
</html>