 <?php
//variable names for inputs
$fname = $_POST['fname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$qoute = $_POST['qoute'];  

//in case each inputs are blank
if (empty($fname) || empty($age) || empty($gender) || empty($qoute)) {
        echo "Please go back and fill in the blank spaces.";
    }
else {
print "You are $fname , a $age-year-old $gender.<br>";
print "Your motto in life is: $qoute";
     }

?>