<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="vastaus.php" method="POST">
        <p>
          
               
                
               
                
            <b></b>:<br><br>
             Nimeni: <input type="text" name="nimi"><br> 
             sukunimi: <input type="text"name="sukunimi"></br>
            Osoite:<input type="text" name="osoite"><br>
            Postinumero: <input type="text" name="postinumero" maxlength="5" size="5"><br>
            postitoimipaikka: <input type="text" name="postitoimipaikka"><br>
            puhelinnumero: <input type="text" name="puhelinnumero"><br>
            
                <input type ="radio" id ="3kk" name ="tilausm"  VALUE="3kk" required>3kk   </OPTION>
                <input type ="radio" id ="6kk" name ="tilausm"  VALUE="6kk" required>6kk   </OPTION>
                <input type ="radio" id ="12kk" name ="tilausm"  VALUE="12kk" required>12kk  </OPTION>
               
          
           
            <button type="submit" value="Submit">  lähetä </button>
            <button type="reset" value="Tyhjennä lomake">tyhjennä </button>



           
            
        </p>
    </form>
</body>
</html>