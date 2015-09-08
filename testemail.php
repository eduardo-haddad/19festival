

<form method="post" action="mailer2.php">
    <fieldset>
        <ul>
        <li>
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name"class="large" required="required" placeholder="Enter your name"/></li><!--Basically gave a name here-->

        <li>
        <label for="idlabel">Your Email:</label>
        <input type="email" name="email"  placeholder="Enter your email"/></li><!--Basically gave a name here-->

        <li>
        <label for="idlabel">Pais:</label>
        <input type="text" name="pais"  placeholder="Pais"/></li></ul><!--Basically gave a name here and removed label as name-->

        <input type="submit" value="Submit"/>
    </fieldset>
</form>