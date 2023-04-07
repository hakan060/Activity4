<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register From</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <table>
            
        </table>
        <header>Registration Form</header>
            <form action="Activity4-preview.php" method="post" class="form">
                <div class="input-box">
                    <label>Name:</label>
                    <input type="text" name="name" placeholder=" " required>
                </div>

                <div class="input-box">
                    <label>Username:</label>
                    <input type="text" name="surname" placeholder=" " required>
                </div>

                <div class="input-box">
                    <label>Password:</label>
                    <input type="text" name="password"  placeholder=" " required>
                </div>

                <div class="input-box">
                    <label>Address:</label>
                    <input type="text" name="address" placeholder=" " required>
                </div>
                <div class="select-box">
                    <label >Country</label>
                    <select name="country" required>
                        <option hidden>Country</option>
                        <option>Turkey</option>
                        <option>America</option>
                        <option>Germany</option>
                        <option>England</option>
                        <option>Argentina</option>
                    </select>
                </div>
                <div class="input-box">
                    <label>ZIPcode:</label>
                    <input type="text" name="zip_code"  placeholder=" " required>
                </div>

                <div class="input-box">
                    <label>Email:</label>
                    <input type="text" name="e-mail" placeholder=" " required>
                </div>

                

                <div class="gender-box">
                    <label>Sex:</label>
                    <div class="gender">
                        <input type="radio" name="sex" id="check-male" value="Male" checked/>
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" name="sex" id="check-female" value="Female" checked/>
                        <label for="check-female">Female</label>
                    </div>
                </div>
               

                <div class="check-box">
                    <label>Languages:</label>
                    <div class="Languages">
                        
                        <label for="English">English</label>
                        <input type="checkbox" id="English" name="language[]" value="english">
                    </div>

                    <div class="Languages">
                        
                        <label for="Germany">Germany</label>
                        <input type="checkbox" id="Germany" name="language[]" value="germany">
                    </div>

                    <div class="Languages">
                        <label for="French">French</label>
                        <input type="checkbox" id="English" name="language[]" value="french">
                        
                    </div>
                    
                </div>

                <div class="input-box">
                    <label>About: </label>
                    <textarea class="textarea" name="about"> </textarea>
                </div>
                <button  name="submit">submit</button>
            </form>
        
    </section>
      
        

    
</body>
</html>