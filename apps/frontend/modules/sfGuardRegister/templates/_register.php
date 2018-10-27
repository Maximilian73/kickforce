<div id="inline_register" style="display: none;">
    <section id="contact_form" class="span6 form">
        <h3> Register </h3>
        <p> Thank you for visiting our website. Please fill out the following form to request information about our products or to provide feedback about our site. When you are finished, click the ‘Submit’ button to send us your message. </p>
        <form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
            <?php echo $form;?>
            <br />
            <input type="submit" class="btns" value="Register" name="submit" />
        </form>	  
        <br />
    </section>
    <br />
</div>

