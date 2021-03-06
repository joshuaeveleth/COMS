<?php
    /* 
    $ProjType = "Release 1.0 February 27, 2015"; 
    $ProjType = "Release 1.1 March 6, 2015"; 
    $ProjType = "Release 1.2 March 13, 2015";
    $ProjType = "Release 1.3 April 10, 2015";
    $ProjType = "Release 1.4 May 8, 2015";
    $ProjType = "Release 1.9 May 28, 2015";
    $ProjType = "Release 1.11";     // June 12, 2015;
    $ProjType = "Release 1.13a";    // June 19, 2015;
    $ProjType = "Release 1.15";     // June 19, 2015;
    $ProjType = "Release 1.13b";    // June 23, 2015;
    $ProjType = "Release 1.16";     // June 23, 2015
    $ProjType = "Release 1.14";     // June 25, 2015;
    $ProjType = "Release 1.14a";    // June 26, 2015; Fix defect where Dosage Amounts in Orders Tab show up as NaN when the dose is blank in Order_Status table
    $ProjType = "Release 1.14b";    // June 30, 2015; Properly save (via PAT_ID not Patient_ID) and retrieve GenInfo tab on loading/switching a patient
    $ProjType = "Release 1.14c";    // July 06, 2015; Save data from TD panels and clear panels when switching patients.
    $ProjType = "Release 1.14d";    // July 09, 2015; Making Addendums to Treatment Panel
    $ProjType = "Release 1.14e";    // July 10, 2015; Adding "*" to Ammended records
    $ProjType = "Release 1.14f";    // July 10, 2015; Fixed "Infusion Reactions panel, selection of �No Adverse Reactions� results in an erroneous error message" defect
    $ProjType = "Release 1.14g";    // July 13, 2015; Fix defect where duplicate Vitals are pulled from VistA. Merge vitals from VistA and SQL based on Date only not Date and Time since VistA Date/Time stamp doesn't match actual date/time the vital was saved.
    $ProjType = "Release 1.14h";    // July 16, 2015; Added Order Signing Code to Orders controller. Fixed defect that prevented COMS from running in MS-IE (ran JSHint through JS files and identified several syntax defects which only manifested in MS-IE
	$ProjType = "Release 1.14i";    // July 17, 2015; Fixed defect for Print Orders... 1. Calculated dosages are not displayed 2. Recommendations for Neutropenia Risk was hard coded text block, now pulls from Site Config info the same as the OEM Tab and is based on the value entered for the Regimen 3. Recommendations for Emesis Risk was a hard coded blank text block, now pulls from Site Config info the same as the OEM Tab and is based on the value entered for the Regimen
	$ProjType = "Release 1.15";     // July 17, 2015; Minor enhancement to Print Orders, Release to Sandbox
	$ProjType = "Release 1.15a";    // July 21, 2015; Started adding Delete functionality to the tabs in the Site Configuration Panel which did not have them.
	$ProjType = "Release 1.15b";    // July 22, 2015; Removed IEN display from Discharge Instructions Printout. Fixed Editing Medication in OEM Panel not displaying Fluid Types when panel is opened (this was a different code block than that which was fixed in 1.13)
	$ProjType = "Release 1.15c";    // July 24, 2015; Started work on the defect in the Emetogenic Level Panel.
	// Added new functionality, the ability to specify a Hydration Administration in Pre/Post and Therapy at request of Dr Kelley.
	// This allows for a template sequence to be generated with OUT a Drug Amount or Units specified but MUST be specified as a Hydration Drug.
	$ProjType = "Release 1.15d";	// July 28, 2015; Fixed Defects in Site Configuration Emetic Medications panel and added Delete functionality
	$ProjType = "Release 1.15e";	// July 30, 2015; Fix Defect on how data for Regimen containing new Hydration Drug is retrieved.
	$ProjType = "Release 1.15f";	// July 31, 2015; Fix Defect on saving template with a refernces causes template to not be available.
	$ProjType = "Release 1.16";	// July 31, 2015; Fix Defect on saving template with a refernces causes template to not be available.
	$ProjType = "Release 1.16a";	// Aug 07, 2015; Fix Defect Identified in MS-IE Edit/Cancel/Hold links in Editing an OEM Order. Also added delay to TypeAhead of Select Drug combo to prevent dropping of first char when typing.
	$ProjType = "Release 1.16b";	// Aug 10, 2015; Fix Defect where Editing a therapy order in OEM truncates the display. Also resolved issue where OEM edited Panel order is not properly updated / shows up in Orders panel.
	$ProjType = "Release 1.16c";	// Aug 12, 2015; Orders edited in the OEM Panel are now updated but not pushed to the orders tab
	$ProjType = "Release 1.16d";	// Aug 20, 2015; Finally fixed defect where edits in OEM panel are updated AND pushed to the Orders Tab
	$ProjType = "Release 1.17";		// Aug 21, 2015; Promote to 1.17
	$ProjType = "Release 1.17a";	// Aug 27, 2015; 
	$ProjType = "Release 1.17b";		// Sept 1, 2015; - Major work done on the "Disease/Stage/Template" selection process
	$ProjType = "Release 1.17c";		// Sept 9, 2015; - Final changes on Disease/Stage/Template selection process
	$ProjType = "Release 1.17d";		// Sept 9, 2015; - minor changes to some button labels and adding red to EM tags for required fields.
	$ProjType = "Release 1.17e";		// Sept 14, 2015; - Fix defect for "Edit Template" on Patient Info Panel.
	*/

	$ProjType = "Release 1.18";		// Sept 14, 2015; - Updated version for final push


/* <!doctype html> */
/* MWB - 3/12/2015: Need the old DocType because of the X-UA-COMPATIBLE meta tag to force use of IE-9 mode rather than IE-7 for VA browsers */
?>
<!DOCTYPE HTML>

<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<meta HTTP-EQUIV="X-UA-COMPATIBLE" CONTENT="IE=9">
<title>Chemotherapy Order Management System (COMS)</title>

<?php
    if ( "High" == $_SESSION[ "BrowserMode" ] ) {
?>
<link rel="stylesheet" id="COMS_Theme" type="text/css" <?php
        echo "href=\"$LibsVersion/resources/css/ext-all-access.css\"";
?>>
<link rel="stylesheet" id="COMS_Theme1" type="text/css" <?php
        echo "href=\"$Version/COMS-Access.css\"";
?>>
<?php
    } else {
?>
<link rel="stylesheet" id="COMS_Theme" type="text/css" <?php
        echo "href=\"$LibsVersion/resources/css/ext-all.css\"";
?>>
<link rel="stylesheet" id="COMS_Theme1" type="text/css" <?php
        echo "href=\"$Version/COMS.css\"";
?>>
<?php
    }
?>

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<!--  src="/libs/modernizr-2.0.6.js" -->
<script src="/libs/modernizr-2.8.3.js"></script>

<script>
<?php
    
    /* Initializing of global JavaScript variables */
    echo "var ShowProgrammerBtns = '" . $_GET["programmer"] . "';\n";
    echo "var AccessibilityMode = '" . $_SESSION[ "BrowserMode" ] . "';\n";
    echo "var Page2Open = '$page2Open';\n";
    echo "var theJSPath = '$Version/';\n";
    echo "var dName = '" . $_SESSION[ 'dname' ] . "';\n";
    echo "var session_ID = '" . $_SESSION[ "sessionid" ] . "';\n";
    /* Unique Session ID */
    echo "var User_ID = '" . $_SESSION[ "Role_ID" ] . "';\n";
    /* Unique User ID */
    echo "var User = '" . $_SESSION[ "winauth" ] . "';\n";
    /* Domain\User name of user currently logged into the domain */
    echo "var CurUser = '" . get_current_user() . "';\n";
    /* User name of user currently logged into the domain */
    echo "var Sessionrid = '$rid';\n";
    echo "var Sessionrole = '$role';\n";
    echo "var SessionDisplayName = '" . $_SESSION[ 'dname' ] . "';\n";
    echo "var SessionPreceptee = '" . $_SESSION[ 'Preceptee' ] . "';\n";
    echo "var SessionTemplateAuthoring = '$TemplateAuthoring';\n";
    echo "var AuthType = '" . $_SESSION[ "winauth" ] . "';\n";
    if ( isset( $FirstParam ) ) {
        echo "var FirstURL = '$FirstParam';\n";
    } else {
        echo "var FirstURL = '';\n";
    }
    echo "var SessionUser = '" . $_SESSION[ "AC" ] . "';\n";
    /* CPRS User Name of user currently logged into App via CPRS */
    echo "ScriptRoot = \"$LibsVersion/\";";
    echo "ThemeRoot = \"$LibsVersion/resources/css/\";";
    
?>
</script>
</head>
<body>
<div id="Loader" style="position: absolute; left: 20%; margin: 20%; font-size: 24px; font-family: tahoma,arial,verdana,sans-serif">Loading Application</div>

<div id="application" class="container initialHide">
    <header id="Header" class="application">
        <h1 id="title">Chemotherapy Order Management System (COMS)</h1>
        <!-- <h2 style="text-align: center;font-size: 1.5em; color: red;">Proof of Concept - Demo System</h2> -->
        <div id="welcome">
        Welcome <?php
            echo "" . $_SESSION[ "dname" ] . ", " . $_SESSION[ "role" ] . "";
        ?> -- 
        <a href="support/" target='_blank'>Help</a> <a href="SQL_Scripts.zip" target='_blank'___</a>
        <?php
            if ( "High" == $_SESSION[ "BrowserMode" ] ) {
        ?>
        <!-- <button class="anchor" id="NormalContrastMode">Switch to Normal Contrast Mode</button> -->
        <a href="?cmode=Normal" title="Warning: Reloads the application in Normal Contrast Mode, please save any work in progress first">Switch to Normal Contrast Mode</a>
        <?php
            } else {
        ?>
        <!-- <button class="anchor" id="HighContrastMode">Switch to High Contrast Mode</button> -->
        <a href="?cmode=High" title="Warning: Reloads the application in High Contrast Mode, please save any work in progress first">Switch to High Contrast Mode</a>
        <?php
            }
        ?>

        </div>
    </header>

    <section id="MainContent"></section>
    <form method="POST" action="<?php
        echo $_SERVER[ 'PHP_SELF' ];
    ?>">
        <navigation id="EndControls" >
            <ul style="text-align: right; font-size:small;">
            <!--
                <li style="display: inline;"><a href="app/feedback/fbf.php" target="_blank">Feedback</a></li>
                <li style="display: inline;"><a href="sv.php" target='_blank'>_</a></li>
            -->
                <li style="display: inline;"><a href="support/" target='_blank'>Help</a></li>
                <!--<li style="display: inline;"><a href="COMSv1.1.zip">Files</a></li>-->
                <li style="display: inline;"><button type="button" class="anchor" id="LogoutBtn"><b>Logout</b></button>
                <!--<li style="display: inline;"><a href="Issues/" target='_blank'>Backlogs and Defects</a></li>
                
                <li style="display: inline;"><a href="Track/" target='_blank'>Access History</a></li>
                -->
            </ul>
        </navigation>
    </form>
</div><!-- end of #Application -->

<div id="footer" class="initialHide" >
    <abbr title="Chemotherapy Order Management System">COMS</abbr> <?php echo $ProjType; ?>
    <div>
        This application works best in 
        MS-IE Version 9 or above, 
        Mozilla Firefox Version 20 and above, 
        Google Chrome Version 30 and above
    </div>

    <!-- Display MDWS Notational information here 
    <div id="MDWs_Info"></div>-->

    <!-- Display Boomerang Page Load Statistics here 
    <div id="results"></div>-->
</div>

<!-- Display ConsoleLog information here 
<section class="consolelog">
    <h2>Log Info</h2>
    <div id="LogInfo" style="height:100px; overflow: auto;"></div>
</section>-->

<script type="text/javascript" <?php
    echo "src=\"$LibsVersion/ext-all-debug.js\"";
?>></script>
<!-- <script type="text/javascript" src="/libs/boomerang.js"></script> -->

<script type="text/javascript" src="/libs/prettyPrint.js"></script>



<!-- 
<script type="text/javascript" src="LocalizedCode.js"> </script>
<script type="text/javascript" src="js/Consts.js"></script>
<script type="text/javascript" src="js/Requires.js"></script>
<script type="text/javascript" src="js/Extensions.js"></script>
<script type="text/javascript" <?php echo "src=\"$Version/$Deployment\""; ?>></script>
-->

<script type="text/javascript" src="js/COMS.js"></script>


<script>
var UseNewQueryMethod = true;
var MDWSTypeMsg = "MDWS Match Query in use";
var SQLTypeMsg = "SQL Query in use";


function switchQueryMethod() {
    var MDWS = "MDWS/Match Query Method";
    var SQL = "Internal SQL Query Method";
    var msg, nextMthd, msg2Use;
    if (UseNewQueryMethod) {
        msg = MDWS;
        nextMthd = "Press \"OK\" to switch to the " + SQL;
    }
    else {
        msg = SQL;
        nextMthd = "Press \"OK\" to switch to the " + MDWS;
    }

    var temp = confirm("Currently using " + msg + ". \n" + nextMthd + "\nOr cancel to keep using the " + msg);
    if (temp) {
        if (UseNewQueryMethod) {
            UseNewQueryMethod = false;
            msg2Use = SQLTypeMsg;
        }
        else {
            UseNewQueryMethod = true;
            msg2Use = MDWSTypeMsg;
        }

        var el = document.getElementById("QueryType");
        if (el) {
            el.innerHTML = msg2Use;
        }
    }
}


// var LogoutCancelled;
window.onbeforeunload = function(e) { // see: http://jsfiddle.net/zalun/yFuPr/
    /**
    if (LogoutCancelled) {
        e = e || window.event;
        e.preventDefault = false;
        e.cancelBubble = false;
        e.returnValue = '';
    }
    **/
}
</script>
</body>
</html>