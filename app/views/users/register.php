<?php
   require  APPROOT.'/views/includes/head.php';
?>

<div class="navbar">
    <?php
       require  APPROOT.'/views/includes/navigation.php';
    ?>
</div>

<div class="container-login">
    <div class="wrapper-login">
        <h1>Student Register</h1>

            <form
                id="register-form"
                method="POST"
                action="/student/profile/register"
                >
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
            <input type="text" placeholder="Nic No *" name="nic">
            
            <input type="text" placeholder="First Name *" name="firstname">
            
            <input type="text" placeholder="Last Name *" name="lastname">
          
            <input type="text" placeholder="Address *" name="address">
           

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Already have account? <a href="/student/profile/login">Sign in!</a></p>
        </form>
    </div>
</div>
