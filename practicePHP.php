// Comment
/*
    Multiline Comment
*/

$_variable; // Create Variable
$x = 5; // Create and Initialize variable

//PDO stands for... IDK

<<<_HTML_
    'Print all of'
    'This until the underscore HTML underscore is seen again.'
    'Concatenated'.'String'
    "Variable = $_variable"
    'Variable = '.$_variable
_HTML_;

$teaching = array('Database' => 'Smith', 'OS' => 'Carrick', 'Graphics' => 'Kam');
$teaching['Graphics'] = 'Benson'; $teaching['Data Mining'] = 'Kam';
sort($teaching);
foreach ($teaching as $key => $value) {
    print " $key : $value\n";}
$courses = array('Database', 'OS', 'Graphics', 'Data Mining');
$alt_row_color = array('blue', 'yellow');
for ($i = 0, $num = count($courses); $i < $num; $i++) {
    print '<TR bgcolor="' . $alt_row_color[$i % 2] . '">';
    print "<TD>Course $1 1s</TD><TD>$course[$1]</TD></TR>\n";
}

//something
function display_welcome() {
    print("Welcome, ");
    print($_POST['user_name']);
}

function display_empty_form(); {
    print <<<_HTML_
    <FORM method="post" action="$_SERVER['PHP_SELF']">
        Enter your name: <INPUT type="text" name="user_name">
        <BR/>
        <INPUT type ="submit" value="Submit name">
</FORM>
_HTML_;
}

$_SERVER['SERVER_NAME']
$_SERVER['REMOTE_ADDRESS']
$_SERVER['REMOTE_HOST']
$_SERVER['PATH_INFO']
$_SERVER['QUERY_STRING']
$_SERVER['DOCUMENT_ROOT']
$_POST

$db = new PDO ('string', $user, $pass);
//Format for 'string' is <dbsoftware>:host=<database server>;dbname=<database name>'

$db = null;
$db = new PDO('mysql:host=localhost;dbname=test','spock','vulcan')

$user="grumpycat"; $pass="grumpy";
try {
    $db=new PDO ('mysql:host=hopper.csustan.edu;dbname=test',$user,$pass);
} catch (PDOException $e) {
    print "Error connecting: "" .$e->getMessage() . "<br/>";
    die();
}

try {
    $db->query("INSERT INTO EMPLOYEE VALUES (5, 'Darth Vader', 'Overlord', 10)");
    // or, if processing a web form...
    $db->query('INSERT INTO EMPLOYEE VALUES (?, ?, ?, ?)',
    array(6, $_POST['emp_name'], $_POST['emp_job'], $_POST['emp_dno']));
}

//fetch() function that fetches from...
$stmt = $db->query('SELECT * from CATFOODTABLE');
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['field1'] . '.' . $row['field2'] . '<br/>';
    die();
}