<!-- apps -->

<?php include('header.php'); ?>
<?php include('menubar.php'); ?>

    <div class="main">
        <form method="post" name="addapp" id="addapp" action="<?php echo BASE_URL; ?>apps/addremove">
            <table>
                <colgroup>
                    <col span="1" style="width: 30%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 5%;">
                </colgroup>
                <tr>
                    <th>Name</th>
                    <th>Last updated</th>
                    <th>Latest build</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                    // Output all apps into the table.
                    function printApp($app, $key)
                    {
                        $id = $app->id;
                        $name = $app->name;
                        $lastUpdated = is_null($app->last_updated) ? "Never" : $app->last_updated;
                        $latestBuild = is_null($app->latest_build) ? "None" : $app->latest_build;

                        echo "<tr>";
                        echo "<td>$name</td>";
                        echo "<td>$lastUpdated</td>";
                        echo "<td>$latestBuild</td>";
                        echo "<td><input type='checkbox' name='removeApp[$id]'></input></td>";
                        echo "</tr>";
                    }
                    array_walk($apps, 'printApp');
                ?>
                <tr>
                    <td colspan="3"></td>
                    <td>
                        <input type="submit" name="remove" id="remove" value="Remove" class="button">
                    </td>
                </tr>
                <tr><td colspan="4">&nbsp;</td></tr>
                <tr><td colspan="4">&nbsp;</td></tr>
                <tr><td colspan="4">&nbsp;</td></tr>
                <tr>
                    <td colspan="4">
                        <label>App name
                            <input type="text" class="text" id="name" name="name">
                        </label>
                        <input type="submit" name="add" id="add" value="Add" class="button">
                    </td>
                </tr>
            </table>
        </form>
    </div>

<?php include('footer.php'); ?>