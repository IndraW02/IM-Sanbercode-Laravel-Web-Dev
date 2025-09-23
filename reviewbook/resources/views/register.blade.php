<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Man"> Man <br>
        <input type="radio" name="gender" value="Woman"> Woman <br>
        <input type="radio" name="gender" value="Other"> Other <br><br>

        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="Japan">Japan</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
        <input type="checkbox" name="language[]" value="English"> English <br>
        <input type="checkbox" name="language[]" value="Arabic"> Arabic <br>
        <input type="checkbox" name="language[]" value="Japanese"> Japanese <br><br>

        <label>Bio:</label><br>
        <textarea name="bio"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
