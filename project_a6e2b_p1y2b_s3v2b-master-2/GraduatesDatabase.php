// Modification of code from Tutorial 7  


<html>
    <head>
        <title>CPSC 304 PHP/Oracle Demonstration</title>
    </head>

    <body>
        <h2>Reset</h2>
        <p>If you wish to reset the table press on the reset button. If this is the first time you're running this page, you MUST use reset</p>

        <form method="POST" action="oracle-test.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset" name="reset"></p>
        </form>

        <hr />

        <h2>Insert Values into DemoTable</h2>
        <form method="POST" action="oracle-test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Number: <input type="text" name="insNo"> <br /><br />
            Name: <input type="text" name="insName"> <br /><br />

            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form>

    <!-- <?php 

           $success = True; //keep track of errors so it redirects the page only if there are no errors
           $db_conn = NULL; // edit the login credentials in connectToDB()
           $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())
   
           function debugAlertMessage($message) {
               global $show_debug_alert_messages;
   
               if ($show_debug_alert_messages) {
                   echo "<script type='text/javascript'>alert('" . $message . "');</script>";
               }
           }
   
           function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
               //echo "<br>running ".$cmdstr."<br>";
               global $db_conn, $success;
   
               $statement = OCIParse($db_conn, $cmdstr);
               //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work
   
               if (!$statement) {
                   echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                   $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                   echo htmlentities($e['message']);
                   $success = False;
               }
   
               $r = OCIExecute($statement, OCI_DEFAULT);
               if (!$r) {
                   echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                   $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                   echo htmlentities($e['message']);
                   $success = False;
               }
   
               return $statement;
           }
   
           function executeBoundSQL($cmdstr, $list) {
               /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
           In this case you don't need to create the statement several times. Bound variables cause a statement to only be
           parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
           See the sample code below for how this function is used */
   
               global $db_conn, $success;
               $statement = OCIParse($db_conn, $cmdstr);
   
               if (!$statement) {
                   echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                   $e = OCI_Error($db_conn);
                   echo htmlentities($e['message']);
                   $success = False;
               }
   
               foreach ($list as $tuple) {
                   foreach ($tuple as $bind => $val) {
                       //echo $val;
                       //echo "<br>".$bind."<br>";
                       OCIBindByName($statement, $bind, $val);
                       unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
                   }
   
                   $r = OCIExecute($statement, OCI_DEFAULT);
                   if (!$r) {
                       echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                       $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                       echo htmlentities($e['message']);
                       echo "<br>";
                       $success = False;
                   }
               }
           }
   

    // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handlePOSTRequest() {
        if (connectToDB()) {
            if (array_key_exists('resetTablesRequest', $_POST)) {
                handleResetRequest();
            } else if (array_key_exists('insertQueryRequest', $_POST)) {
                handleInsertRequest();
            }

            disconnectFromDB();
        }
    }

    // HANDLE ALL GET ROUTES
    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handleGETRequest() {
        // if (connectToDB()) {
        //     if (array_key_exists('countTuples', $_GET)) {
        //         handleCountRequest();
        //     }

            disconnectFromDB();
        }
    }

    if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
        handlePOSTRequest();
    } else if (isset($_GET['countTupleRequest'])) {
        handleGETRequest();
    }

    ?> -->


        </body>
</html>