<?php
$driver=[];

if ( true ){

    //personal info
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $birth = $_POST['birth'];
    $nationality = $_POST['nationality'];

    //last work
    $company = $_POST['company'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    //programming languages
    $programmingLanguages = $_POST['programmingLanguages'];
    $level = $_POST['level'];

    //other skills
    $language = $_POST['language'];
    $comprehension = $_POST['comprehension'];
    $reading = $_POST['reading'];
    $writing = $_POST['writing'];

    if (isset($_POST['b'])){
        array_push($driver, 'B');
    }
    if (isset($_POST['a'])){
        array_push($driver, 'A');
    }
    if (isset($_POST['c'])){
        array_push($driver, 'C');
    }

    //validate information
    if ( preg_match('/^[A-Z]([a-z]{1,19})$/', $fname) && preg_match('/^[A-Z]([a-z]{1,19})$/', $lname)
        && preg_match('/^([0-9\+\-\s]+)$/', $phone) && preg_match('/^([a-z0-9]+)@([a-z0-9]+)\.([a-z]{2,6})$/', $email) ){

        //print table with CV
        $cv = '<h2>CV</h2><br />';
        $cv .= "<table>
        <thead><th colspan='2'>Personal Information</th></thead>
        <tbody>
        <tr><td>First Name</td><td>$fname</td></tr>
        <tr><td>Last Name</td><td>$lname</td></tr>
        <tr><td>Email</td><td>$email</td></tr>
        <tr><td>Phone Numbe</td><td>$phone</td></tr>
        <tr><td>Gender</td><td>$sex</td></tr>
        <tr><td>Birth Date</td><td>$birth</td></tr>
        <tr><td>Nationality</td><td>$nationality</td></tr>
        </tbody>
        </table>";
        $cv .= "<table>
        <thead><th colspan='2'>Last Work Position</th></thead>
        <tbody>
        <tr><td>Company Name</td><td>$company</td></tr>
        <tr><td>From</td><td>$from</td></tr>
        <tr><td>To</td><td>$to</td></tr>
        </tbody>
        </table>";

        //add programming languages
        $plrs = ''+(sizeof($programmingLanguages)+1);
        $cv .= "<table>
        <thead><th colspan='3'>Computer Skills</th></thead>
        <tbody>
        <tr><td rowspan=$plrs>Programming Languages</td><td>Language</td><td>Skill Level</td></tr>";
        for ($i=0; $i<sizeof($programmingLanguages); $i++){
            $cv .= "<tr><td>$programmingLanguages[$i]</td><td>$level[$i]</td></tr>";
        }
        $cv .= "</tbody></table>";

        //add OTHER SKILLS
        $osrs = ''+(sizeof($language)+1);
        $cv .= "<table>
        <thead><th colspan='5'>Other Skills</th></thead>
        <tbody>
        <tr><td rowspan=$osrs>Languages</td><td>Language</td><td>Comprehension</td><td>Reading</td><td>Writing</td></tr>";
        for ($i=0; $i<sizeof($language); $i++){
            $cv .= "<tr><td>$language[$i]</td><td>$comprehension[$i]</td><td>$reading[$i]</td><td>$writing[$i]</td></tr>";
        }

        //add driver's license
        if (sizeof($driver)>=1){
            $cv .= "<tr><td>Driver's license</td><td>";
            $cv .= $driver[0];
            if (sizeof($driver)>1){
                for ($i=1; $i<sizeof($driver); $i++){
                    $cv .= ", $driver[$i]";
                }
            }
            $cv .= "</td></tr>";
        }
        $cv .= "</tr></tbody></table>";
        echo $cv;
    }
}
else{
    echo 'Enter valid information!';
}

?>