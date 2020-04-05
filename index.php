<?php include("header.php"); ?>

<?php
include('connect.php');
$result = mysql_query("SELECT * FROM restaurants") or die(mysql_error());
?>

<body>
    <h1>test</h1>
    <div data-role="page">
        <div data-role="header" data-theme="a" data-position="fixed">
            <h1>Step 1 setup choices</h1>
        </div>
        <div data-role="content">
            <form action="process.php" id="res_list" method="post" data-ajax="false">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <?php
                        echo "<input type=\"text\" placeholder='Enter an event name' name=\"eventName\" />";

                        while ($row = mysql_fetch_array($result)) {
                            echo "<input type=\"checkbox\" id=\"{$row['res_id']}\" name=\"opt[]\"value=\"{$row['res_id']}\"/> ";
                            echo "<label for=\"{$row['res_id']}\">" . $row['res_name'] . "</label>";
                        }

                        ?>
                    </fieldset>
                    <input type="submit" data-transition="slidefade" name="formSubmit" value="Create event" />
                </div>
            </form>
        </div>
        <script src="js/validate.js"></script>
        <div data-role="footer" data-position="fixed"><?php include("footer.php"); ?></div>
    </div>
</body>

</html>