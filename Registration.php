<!DOCTYPE html>
<html>
    <!-- Load the Navigation Bar wit hPHP include function --> 
    <?php 
					include('menu.php');
					?>
    <head>
        <title>Forms: Login Registration</title>
        <meta name="description" content="This is the login registration page for our project" />
		<meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
		<meta http-equiv="author" content="Damian Scarpone" />
        <meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->

        <link href="css/registration_style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>Login Registration</h1>
        <form action="php/request_acc.php" method="post" id="access">
            <fieldset>
                <legend>Contact Details</legend>
                <p><label>First Name: <input type="text" name="firstname" /></label></p>
                <p><label>Last Name: <input type="text" name="lastname" /></label></p>
                <p><label>Email: <input type="email" name="email" /></label></p>
                <p><label>Website: <input type="url" name="url" /></label></p>
                <p><label>Date of Birth: <input type="date" name="birthday" /></label></p>

                <input type="radio" name="fac_or_student" value="faculty" />Faculty
                <input type="radio" name="fac_or_student" value="student" />Student
            </fieldset>

            <p>I ... (check all that apply)</p>
            <input type="checkbox" name="involvement" value="none" /> Have no involvement in Project<br />
            <input type="checkbox" name="involvement" value="instructor" /> Am an instructor<br />
            <input type="checkbox" name="involvement" value="student" /> Am a student<br />
            <input type="checkbox" name="involvement" value="admin" /> Am a college Administrator<br />
            <input type="checkbox" name="involvement" value="external" /> Am an external reveiwer<br />
            <input type="checkbox" name="involvement" value="musk" /> Am Elon Musk<br />

            <p>can you do 10 pull-ups?
            <select name="pull-ups">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="five">5</option>
                    <option value="no_answer" selected></option>
            </select>
            </p>
            <p>Tell us why we should give you access to this exclusive website</p>
            <textarea>Don't be shy ... </textarea><br />
            <input type="submit" value="Submit Request" />
        </form>
        <p>Copyright &copy 2019 Damian Scarpone</p>
    </body>
</html>