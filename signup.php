<?php include 'action.php'?>
<?php include 'header.php'?>

  <body>
<div class="head container inputForm ">
  <h1>Sign Up</h1>
  <hr>
</div>

        <form class="inputForm container" id="inputFor" action="signup.php" method="post">

            <table>
                <tr>
                  <td>
                    <label for="name">Name:-</label>
                  </td>
                  <td>
                    <input type="text" name="fname" value="" placeholder="First Name">
                    <input type="text" name="lname" value="" placeholder="Last Name">
                    <span class="error">*<?php echo $fnameErr;?></span>
                  </td>
                </tr>

            <!-- email field -->

                <tr>
                  <td><label for="email">Email:-</label></td>
                  <td><input type="email" name="email" value="" placeholder="Email">
                    <span class="error">*<?php echo $emailErr;?></span>
                  </td>
                </tr>




            <!-- Phone Number -->
            <tr>
              <td>
                <label for="phnumber">Phone Number</label>
              </td>
              <td>
                <input type="number" name="phNumber" value="" placeholder="Phone Number">
                <span class="error">* <?php echo $phNumberErr;?></span>
              </td>
            </tr>


            <tr>
              <td>
                <label for="password">Password</label>
              </td>
              <td>
                <input type="text" name="password" value="" placeholder="Password">
                <span class="error">* <?php echo $passwordErr;?></span>
              </td>
            </tr>

<!-- Confirm password -->
            <tr>
              <td>
                <label for="cpassword">Confirm Password</label>
              </td>
              <td>
                <input type="text" name="cpassword" value="" placeholder="Confirm Password">

              </td>
            </tr>



                  <!-- Submit Button -->
                  <tr>
                  <td>

                  <input type="submit" name="submit" class="submit" value="Sign Up"><br>
                </td>
              </tr>
        </table>
      </form>
<?php include 'footer.php'?>
