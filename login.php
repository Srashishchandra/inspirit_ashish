<?php
include 'action.php';
?>
<?php
include 'header.php';
?>

<body>
    <div class="head container inputForm">
      <h1>Log In</h1>
      <hr>
    </div>

    <form class="inputForm container loginform" id="inputFor" action="login.php" method="post">
        <table>
<!-- email field -->
            <tr>
                <td><label for="email">Email:-</label></td>
                <td><input type="email" name="email" value="" placeholder="Email"></td>
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
<!-- Submit Button -->
            <tr>
                <td>
                  <input type="submit" name="login" class="submit" value="Log In"><br>
                </td>
            </tr>
        </table>
      </form>
<?php
include 'footer.php';
?>
