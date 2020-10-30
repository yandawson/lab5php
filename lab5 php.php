<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Intro to PHP</title> 
    </head>
    <body>

        <?php 
        echo "<h1>Lab 5: Intro to PHP</h1>" // put a stmt in php 
 
        ?>
        
        <?php
         $x = "<h2>Objectives</h2>"; // set a variable in php stmt
        echo $x;
         ?>
         
        <ul>
            <li>To learn the fundamentals of the PHP hierarchy</li>
            <li>To learn about event-driven programming</li>
            <li>To familiarize yourself with server-side web development using PHP on Apache.</li>
            </ul>
        <h3>Procedure</h3>
    <p>
       1.	Convert all your existing static html files to PHP by simply renaming them with the extension .php instead of .html. Don’t forget to update all references to them in your file content (e.g. href=”index.html” becomes href=”index.php”). You do not need to rename your external JavaScript files.
        
    </p>
        <div>
            2.	You’ve already seen phpinfo() when you installed PHP. Now use PHP for something more useful. Embed PHP commands to perform functionality related to your site: 
        <div>
        <ol>
            <li><span style="color:red">Process your form server-side on form submission to extract form information.</span> </li><br/>
            <li><span style="color:red">Respond to form submission by serving a page echoing the form data that the user submitted. (This is also useful for debugging purposes.)</span> </li><br/>
            <li><span style="color:red">Implement the functionality of a site like <span style="color:blue"> https://showuseragent.com. </span> You can do this in an existing page or create a new one. </span> </li> <br/>                <li><span style="color:red">Validate all user input on the server-side, even if you have already done it client-side in JavaScript. Client-side validation, like what you have implemented in JavaScript, will not deter a malicious user, just improve the user experience for well-behaved ones.</span> </li><br/>
            <li><span style="color:red">Include at least one conditional block.</span></li>

        </ol>       
        <p>lab 5 php form handling:</p>
        <p>Input your dog's info:</p>
        
 
           
       <form action="welcome.php" method="POST"> 
           Name: <input type="text" name="mname"><br>
           Breed: <input type="text" name="breed"><br>
          <input type="submit">
       </form>
<?php
echo "<h2>Your Input:</h2>"; //welcome.php
echo $mname;
echo "<br>";
echo $breed;

?>
            <br/>
     
<?php
// define variables and set to empty values
$name = $nationality = $language = $age = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $nationality = test_input($_POST["nationality"]);
  $language = test_input($_POST["language"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p>Lab 5 PHP Form Validation </p>
<p>Please enter you personal info:</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  nationality: <input type="text" name="nationality">
  <br><br>
  native language: <input type="text" name="language">
  <br><br>
  age: <input type="text" name="age">
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nationality;
echo "<br>";
echo $language;
echo "<br>";
echo $age;
echo "<br>";
echo $gender;
?>
</body>
</html>
