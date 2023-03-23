<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <div class="container">
        <h2>registeration</h2>
        <form action="">

            <div class="sec">
                <div class="se">
                    <label for="">FirstName</label>
                    <input type="text" placeholder="Please Enter FirstName">
                </div>

                <div class="se">
                    <label for="">LastName</label>
                    <input type="text" placeholder="Please Enter LastName">
                </div>

                <div class="se">
                    <label for="">Address</label>
                    <input type="text" placeholder="Please Enter Address">
                </div>

                <div class="se">
                    <label for="">Email</label>
                    <input type="text" placeholder="Please Enter Email">
                </div>

                 <div class="se">
                    <label for="">Region</label>
                    <select name="region" id="region">
                        <option value="northen region">northen region</option>
                        <option value="western region">western region</option>
                        <option value="eastern region">eastern region</option>
                    </select>
                </div>

                <div class="se">
                    <label for="">Password</label>
                    <input type="text" placeholder="Please Enter Password">
                </div>

                <div class="se">
                     <label for="">Confrim Password</label>
                    <input type="text" placeholder="Please Confirm Password">
                </div>

                


            </div>

             

    <button>Submit</button>

    <p>Already have an account <a href="index.php">Login</a> </p>
    
        </form>
    </div>
</body>
</html>