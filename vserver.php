<?php
/*
create user ?cmnd=createu&email=[]&password=[]&location=[]
add event ?cmnd=addevent&id=[]&event=[]
login ?cmnd=login&email=[]&password=[]
get events ?cmnd=events&id=[]
get points ?cmnd=points&id=[]
add points ?cmnd=addpoints&id=[]&points=[]
find events in location
*/


$connect = mysqli_connect("localhost:3306", "root", "", "charitydb");

$err = array('userexists' => '-1', 'problemcreatinguser' => '-2');

if(!empty($_GET)) {
        $cmnd = $_GET['cmnd'];

        switch ($cmnd) {
                case 'createu':
                echo createUser($_GET['email'], $_GET['password'], $_GET['location'], $_GET['bio']);
                break;
                case 'login':
                echo loginUser($_GET['email'], $_GET['password']);
                break;
                break;
                case 'events':
                echo getEvents($_GET['id']);
                break;
                break;
                case 'addevent':
                echo addEvent($_GET['id'], $_GET['event']);
                break;
                case 'getpoints':
                echo getPoints($_GET['id']);
                break;
                case 'addpoints':
                echo addPoints($_GET['id'], $_GET['points']);
                break;
                case 'geteventsloc':
                echo getEventsInLocation($_GET['location']);
                break;
                case 'getuserinfo':
                echo getUserInfo($_GET['id']);
                break;
                case 'geteventinfo':
                echo getEventInfo($_Get['id']);
                case 'createEvent':
                echo createEvent($_GET['name'], $_GET['owner'], $_GET['hours'], $_GET['location'], $_GET['date']);
                break;
                case 'ranking':
                echo getListInLocation($_GET['location']);
                break;
                default:
                echo "Not a valid command";
                break;
        }
}

function getPoints($id) {
        global $connect;
        return (int)(mysqli_fetch_array($connect->query("SELECT points FROM volunteers WHERE id='" . $id ."'"))[0]);
}

function addPoints($id, $points) {
        global $connect;
        $points = getPoints($id) + (int)$points;
        $connect->query("UPDATE volunteers SET points='" . $points . "' WHERE id='" . $id ."'");
        echo $connect->error;
        return $points;
}

function addEvent($id, $eventId)
{
        global $connect;
        $events = getEvents($id);
        $connect->query("UPDATE volunteers SET events='" . $events . "," . $eventId . "'");
        return getEvents($id);
}

function createUser($email, $password, $location, $bio) {
        global $err;
        if(!userExists($email)) {
               return insertUser($email, $password, $location, $bio);
        }
        else {
                return $err['userexists'];
        }

}

function loginUser($email, $password) {
        if(userExists($email)) {
                if(checkPassword($email, $password))
                        return getUserId($email);
                else
                        return "ip";
        }
        else
        {
                return "ude";
        }

}

function getEvents($id) {
        global $connect;
        $result = $connect->query("SELECT events FROM volunteers WHERE id='" . $id . "'");
        return mysqli_fetch_array($result)[0];
}

function getEmail($id) {
        global $connect;
        $result = $connect->query("SELECT email FROM volunteers WHERE id='" . $id . "'");
        return mysqli_fetch_array($result)[0];
}

function getUserId($email) {
        global $connect;
        $result = $connect->query("SELECT id FROM volunteers WHERE email='$email'");
        echo $connect->error;
        return mysqli_fetch_array($result)[0];

}

function userExists($email) {  //checks if user exists already
        global $connect;
        $queryString = sprintf("SELECT * FROM volunteers WHERE email='%s'", mysql_real_escape_string($email));
        $result = $connect->query($queryString);
        if(count(mysqli_fetch_array($result)) > 0) {
                $result->close();
                return true;
        }
        else {
                $result->close();
                return false;
        }
}

function checkPassword($email, $password) {
        global $connect;
        $result = $connect->query("SELECT password FROM volunteers WHERE email='" . $email . "'");
        if(mysqli_fetch_array($result)[0] == $password) {
                return true;
        }
        else {
                return false;
        }
}

function insertUser($email, $password, $location, $bio) {
        global $connect;
        global $err;
        $date = date('Y/m/d');
        $result = $connect->query("INSERT INTO volunteers (email, password, location, description, doc) VALUES ('$email', '$password', '$location', '$bio', '$date')");
        if($connect->error) {
                return $err['problemcreatinguser'];
        }
        else
        {
                return getUserId($email);
        }
}

function getEventsInLocation($location) {
        global $connect;
        $result = mysqli_fetch_array($connect->query("SELECT id FROM events WHERE location='" . $location . "'"));
        return arrayToString($result);
}

function arrayToString($array) {
        $result = "";
        for($i = 0; $i < count($array); $i++) {
                $result .= $array[$i];
                if(!(($i + 1) == count($array))) {
                        $result .= ",";
                }
        }
        return $result;
}

function createEvent($name, $owner, $points, $location, $date) {
        global $connect;
        global $err;
        $result = $connect->query("INSERT INTO events (name, owner, points, location, date) VALUES ('" . $name . "', '".$owner."', '" . $points . "', '" . $date . "', '" .  date('Y-m-d H:i:s') . "')");
        if($connect->error) {
                return 'problemcreatingevent';
        }
        else {
                return getEventId($name);
        }
}

function getEventId($name) {
        global $connect;
        return mysqli_fetch_array($connect->query("SELECT id FROM events WHERE name='" . $name . "'"))[0];
}

function getEventInfo($id) {
        global $connect;
        return arrayToString($connect->query("SELECT * FROM events WHERE id='" . $id . "'")->fetch_row()); 
}

function getUserInfo($id) {
        global $connect;
        return arrayToString($connect->query("SELECT * FROM volunteers WHERE id='" . $id . "'")->fetch_row()); 
}

function getListInLocation($location) {
        global $connect;
        $result = ($connect->query("SELECT id FROM volunteers WHERE location='" . $location . "' ORDER BY points DESC"));
        $arr = array();
        for($i = 0; $i < $result->num_rows; $i++) {
            $arr[$i] = $result->fetch_row()[0];
        }
        return arrayToString($arr);
}

function rowToArray($rows) {
    $array = array();
    //for()
}

?>
