<!DOCTYPE html>
  <html>
    <head>
      <title>Reg</title>          
    </head>

    <body>
      <div>
        <form action="insert.php" method = "POST">
            <div>
              <label><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" name="fname" required>
            </div>

            <div>
              <label><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" name="lname" required>
            </div>

            <div>
              <label><b>User Name</b></label>
              <input type="text" placeholder="Enter User Name" name="uname" required>
            </div>

            <div>
              <label><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
            </div>

            <div>
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" required>
            </div>

            <div>
              <label><b>Phone Number</b></label>
              <input type="text" placeholder="Enter Phone Number" name="pno" required>
            </div>

            <div>
              <label><b>Birth Date</b></label>
              <input type="text" placeholder="Enter Birth Date" name="bd" required>
            </div>

            <div>
              <button type="button">Cancel</button>
              <button type="submit">Sign Up</button>
            </div>
        </form>
      </div>
    </body>
  </html>
