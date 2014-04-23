<!-- testers -->

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

    <div class="main">
        <form method="post" name="tester-form" id="tester-form" action="<?php echo BASE_URL; ?>testers">
            <input type="hidden" name="tester-action" id="tester-action" value="">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th class="table-checkbox"><input type="checkbox" id="select-all" class="table-checkbox"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                        <td class="table-checkbox">
                            <div class="btn-group btn-action">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" class="send-invite tester-action-menu" id="tester-action-send-invites">Send invites</a></li>
                                    <li><a href="#" class="remove-tester tester-action-menu" id="tester-action-remove-testers">Remove testers</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        // Output all testers into the table.
                        function printTester($tester, $key)
                        {
                            echo "<tr>";
                            echo "<td>$tester->first_name</td>";
                            echo "<td>$tester->last_name</td>";
                            echo "<td>$tester->email</td>";
                            echo "<td class='table-checkbox'><input type='checkbox' class='table-checkbox tester-checkbox' name='tester-select[$tester->id]'></td>";
                            echo "</tr>";
                        }
                        array_walk($testers, 'printTester');
                    ?>
                </tbody>
            </table>

            <br/>
            <br/>
            <hr />

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"><input type="text" class="form-control" id="first-name" name="tester-first-name" placeholder="first name"></div>
                    <div class="col-md-3"><input type="text" class="form-control" id="last-name" name="tester-last-name" placeholder="last name"></div>
                    <div class="col-md-3"><input type="text" class="form-control" id="email" name="tester-email" placeholder="email address"></div>
                    <div class="col-md-3"><input type="submit" name="tester-add" id="add" value="Add" class="btn btn-default tkbutton add-tester"></div>
                </div>
            </div>
        </form>
    </div>

<script>
    /*
        Select or unselect all testers when the 'select all' box is ticked/unticked.
    */
    $('#select-all').change(
        function()
        {
            $('.tester-checkbox').prop('checked', $(this).prop('checked'));
        }
    );

    /*
        Submit the form when add/send invite is selected.
    */
    $('.tester-action-menu').click(
        function()
        {
            $('#tester-action').val($(this).attr('id'));
            $('#tester-form').submit();
        }
    );
</script>

<?php include('footer.php'); ?>