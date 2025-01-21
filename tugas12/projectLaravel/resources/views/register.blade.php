<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Buat Account Baru!</h1>
  <h2>Sign Up Form</h2>

  <form  method="POST"action="/send" >
    
      @csrf
    <label>First Name:</label><br><br>
    <input type="text" name="nama1"><br><br>
    <label>Last Name:</label><br><br>
    <input type="text" name="nama2"><br><br>
    <div>
    <label>Gender:</label><br><br>
    <input type="radio">Male<br>
    <input type="radio">Female<br>
    <input type="radio">other <br><br>
    <label>Nationality:</label><br><br>
    <select name="nationality">
      <option value="Indonesian">Indonesian</option>
      <option value="amerika">america</option>
      <option value="portugal">portugal</option>
      <option value="australia">australia</option>
      <option value="other">other</option>
    </select><br><br>
    <label>Language Spoken:</label><br><br>
    <input type="checkbox">Bahasa Indonesia <br>
    <input type="checkbox">English <br>
    <input type="checkbox">Other <br><br>
    <label>Bio:</label><br><br>
    <textarea name="Bio" rows="10" cols="30"></textarea>
    <br><br>
    </div>
    <input type="submit" value="Sign Up">

  </form>

</body>

</html>