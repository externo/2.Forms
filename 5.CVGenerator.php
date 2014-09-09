<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV generator</title>
</head>
<body>
<form method="post" action="5.CV.php">
    <fieldset title="Personal Information">
        <input type="text" name="fname" placeholder="First name"><br/>
        <input type="text" name="lname" placeholder="Last name"><br/>
        <input type="text" name="email" placeholder="Email"><br/>
        <input type="text" name="phone" placeholder="Phone number"><br/>
        Female<input type="radio" name="sex" value="female">Male<input type="radio" name="sex" value="male"><br/>
        Birthdate<br />
        <input type="date" name="birth" placeholder="dd/mm/yyyy"><br/>
        Nationality<br />
        <select name="nationality">
            <option value="Bulgarian">Bulgarian</option>
            <option value="US">US</option>
            <option value="Indian">Indian</option>
        </select>
    </fieldset>

    <fieldset title="Last Work Position">
        Company Name<input type="text" name="company" placeholder=""><br />
        From<input type="date" name="from" placeholder="dd/mm/yyyy"><br/>
        To<input type="date" name="to" placeholder="dd/mm/yyyy"><br/>
    </fieldset>
	
<!--js script for programming languages--->
<script>
    var nextId = 0;
    function addInput() {
        nextId++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "num" + nextId);
        inputDiv.innerHTML =
            "<input type='text' name='programmingLanguages[]' /><select name='level[]'><option value='Beginner'>Beginner</option><option value='Programmer'>Programmer</option><option value='Ninja'>Ninja</option></select><br/>";
        document.getElementById('cs').appendChild(inputDiv);
    }
    function removeElement(id) {
        var inputDiv = document.getElementById(id);
        document.getElementById('cs').removeChild(inputDiv);
		nextId--;
    }
</script>
    <fieldset title="Computer Skills">
        Programming languages<br />
        <div id="cs">
            <!-- add prorgamming languages here!--->
		</div>
		<script>addInput();</script>
        <a href='javascript:removeElement("num" + nextId)'>[Remove Language]</a><a href='javascript:addInput()'>[Add Language]</a><br />
    </fieldset>

	<!--js script for OTHER SKILLS--->
<script>
    var nextIDos = 0;
    function addOS() {
        nextIDos++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "numOS" + nextIDos);
        inputDiv.innerHTML =
            "<input type='text' name='language[]' />"
			+"<select name='comprehension[]'><option>-Comprehension-</option><option value='Beginner'>beginner</option><option value='Intermediate'>intermediate</option><option value='Advanced'>advanced</option></select>"
			+"<select name='reading[]'><option>-Reading-</option><option value='Beginner'>beginner</option><option value='Intermediate'>intermediate</option><option value='Advanced'>advanced</option></select>"
			+"<select name='writing[]'><option>-Writing-</option><option value='Beginner'>beginner</option><option value='Intermediate'>intermediate</option><option value='Advanced'>advanced</option></select><br/>";
        document.getElementById('os').appendChild(inputDiv);
    }
    function removeOS(id) {
        var inputDiv = document.getElementById(id);
        document.getElementById('os').removeChild(inputDiv);
		nextIDos--;
    }
</script>
    <fieldset title="Other Skills">
        Languages<br />
        <div id="os">
			<!-- input other sKILLS here!--->
        </div>
		<script>addOS();</script>
        <a href='javascript:removeOS("numOS" + nextIDos)'>[Remove Language]</a><a href='javascript:addOS()'>[Add Language]</a><br />
        Driver's License<br />
        B<input type="checkbox" name="b" value="B">A<input type="checkbox" name="a" value="A">C<input type="checkbox" name="c" value="C"><br/>
    </fieldset>
    <input type="submit" name="formData" value="Generate CV">
</form>
</body>
</html>