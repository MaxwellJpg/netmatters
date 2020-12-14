<?PHP
$title = "Contact Us";
include_once($_SERVER['DOCUMENT_ROOT']. '/netmatters/template/header.php');?>
<!-- main start inc from header -->

<div class="section-hd">
    <div class="wrap">
        <h1>How can we help you?</h1>
    </div>
</div>
<div class="contact-list wrap">
    <p>
        <strong>Call us on:</strong><br>
        <a href="tel:01603704020">01603 70 40 20</a>
    </p>
    <p>
        <strong>Email us on:</strong><br>
        <a href="mailto:sales@netmatters.com">sales@netmatters.com</a>
    </p>
    <p>
        <strong>Call us at our Gorleston branch on:</strong><br>
        <a href="tel:01493603204">01493 603204</a>
    </p>
    <p>
        <strong>Business hours:</strong>
    </p>
    <p>
        <strong>Monday - Friday 07:00 - 18:00</strong>
    </p>
    <div class="out-of-hours">
        <div class="accordion">
            <strong>Out of Hours IT Support</strong>
            <!-- default down, js turn to up-->
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>

        <div class="out-of-hours-content">
            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
            <p>
                <strong>Monday - Friday 18:00 - 22:00</strong>
                <strong>Saturday 08:00 - 16:00</strong>
                <strong>Sunday 10:00 - 18:00</strong>
            </p>
            <p>To log a critical task, you will need to call our main line number and select Option 2 
                to leave an Out of Hours  voicemail. A technician will contact you on the number 
                provided within 45 minutes of your call.</p>
        </div>
    </div>

    <div>
        <form method="POST" action="" accept-charset="UTF-8" id="contact-form">
            <label for="name" class="required">Your Name</label>
            <input class="form-control" name="name" type="text" value="" id="name">

            <label for="email" class="required">Your Email</label>
            <input class="form-control" name="email" type="email" value="" id="email">

            <label for="telephone" class="required">Your Telephone Number</label>
            <input class="form-control" name="telephone" type="text" value="" id="telephone">

            <label for="subject" class="required">Subject</label>
            <input class="form-control" name="subject" type="text" id="subject">

            <label for="message" class="required">Message</label>
            <textarea class="form-control" name="message" cols="50" rows="10" id="message"></textarea>


            <button name="submit" class="btn btn-primary">
                Send Enquiry
            </button>
        </form>
    </div>
</div>


<!-- main end, inc in footer -->
<?PHP include_once($_SERVER['DOCUMENT_ROOT']. '/netmatters/template/footer.php');?>