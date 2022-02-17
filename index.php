<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <h2>Please fill in this form to register yourself!</h2>

    <form action="index.php" target="post">

        <label for="f_name">First Name:</label>
        <input type="text" id="f_name" name="f_name">
        <br>
        <label for="l_name">Last Name:</label>
        <input type="text" id="l_name" name="l_name">
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
        <br>
        <label for="pers_email">Email:</label>
        <input type="email" id="pers_email" name="pers_email" placeholder="xyz@abc.com">
        <br>
        <label for="college_email">College Email:</label>
        <input type="email" name="college_email" id="college_email" placeholder="xyz@abc.com">
        <br>
        <label for="branch">Branch:</label>
        <input type="text" name="branch" id="branch" list="list_of_branches">
            <datalist id="list_of_branches">
                <option value="CSE">
                <option value="CS">
                <option value="CSIT">
                <option value="IT">
                <option value="ME">
                <option value="CE">
                <option value="EE">
                <option value="EC">
            </datalist>
        <br>

        <label for="year">Year:</label>
        <label for="first">First</label>
        <input type="radio" name="year" id="first" value="1">
        <label for="second">Second</label>
        <input type="radio" name="year" id="second" value="2">
        <label for="third">Third</label>
        <input type="radio" name="year" id="third" value="3">
        <label for="fourth">Fourth</label>
        <input type="radio" name="year" id="fourth" value="4">
    </form>
</body>
</html>