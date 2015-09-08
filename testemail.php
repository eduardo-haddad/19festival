

<form method="post" action="mailer.php">
    <fieldset>
        <ul>
        <li>
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name"class="large" required="required" placeholder="Enter your name"/></li><!--Basically gave a name here-->

        <li>
        <label for="idlabel">Your Email:</label>
        <input type="email" name="email"  placeholder="Enter your email"/></li><!--Basically gave a name here-->

        <li><label for="message">Enter Your Message Below</label>
            <textarea name="message" maxlength="800" rows="6"
        cols="23"></textarea></li></ul><!--Basically gave a name here and removed label as name-->

        <input type="submit" value="Submit"/>
    </fieldset>
</form>