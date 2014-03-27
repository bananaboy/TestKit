<!-- testers -->

<?php include('header.php'); ?>
<?php include('menubar.php'); ?>

    <div class="main">
        <form method="post" name="addtester" id="addtester" action="<?php echo BASE_URL; ?>testers/addremove">
            <table>
                <tr>
                    <th>Email</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                    // Output all testers into the table.
                    function printTester($tester, $key)
                    {
                        echo "<tr>";
                        echo "<td>$tester->email</td>";
                        echo "<td><input type='checkbox' name='removeTester[$tester->id]'></input></td>";
                        echo "</tr>";
                    }
                    array_walk($testers, 'printTester');
                ?>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="remove" id="remove" value="Remove" class="button">
                    </td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td>
                        <label>Email address
                            <input type="text" class="text" id="email" name="email">
                        </label>
                        <input type="submit" name="add" id="add" value="Add" class="button">
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>

<?php include('footer.php'); ?>