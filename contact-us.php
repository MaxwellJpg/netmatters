<?PHP
$title = "Contact Us";
include_once($_SERVER['DOCUMENT_ROOT']. '/netmatters/template/header.php');?>
<!-- main start inc from header -->

<!-- TO DO -->
<!-- add breadcrumb @ 768px  / -->
<!-- header title changes @ 992px -->
<!-- split @ 1260px -->
<div class="breadcrumb">
    <div class="wrap">
    <ul>
        <li><a href="/netmatters">Home</a></li>
        <li>Home Can We Help You?</li>
    </ul>
    </div>
</div>

<div class="section-hd">
    <div class="wrap">
        <h1>How can we help you?</h1>
    </div>
</div>

<div class="contact-container wrap">
    <div class="contact-list">
        <p>
            <strong>Call us on:</strong><br>
            <a class="num" href="tel:01603704020">01603 70 40 20</a>
        </p>
        <p>
            <strong>Email us on:</strong><br>
            <a href="mailto:sales@netmatters.com">sales@netmatters.com</a>
        </p>
        <p>
            <strong>Call us at our Gorleston branch on:</strong><br>
            <a class="num" href="tel:01493603204">01493 603204</a>
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
                    <strong>Monday - Friday 18:00 - 22:00</strong><br>
                    <strong>Saturday 08:00 - 16:00</strong><br>
                    <strong>Sunday 10:00 - 18:00</strong>
                </p>
                <p>To log a critical task, you will need to call our main line number and select Option 2 
                    to leave an Out of Hours  voicemail. A technician will contact you on the number 
                    provided within 45 minutes of your call.</p>
            </div>
        </div>
    </div>

    <?php include_once('inc/form.php'); ?>
    <div class="contact-form">
        <form method="POST" action="" accept-charset="UTF-8" id="contact-form"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="name" class="required">Your Name</label>
                <input class="form-control <?=$name_error?>"name="name" type="text" value="<?= $name ?>" id="name">
            </div>

            <div class="form-group">
                <label for="email" class="required">Your Email</label>
                <input class="form-control <?=$email_error?>"name="email" type="email" value="<?= $email ?>" id="email">
            </div>

            <div class="form-group">
                <label for="telephone" class="required">Your Telephone Number</label>
                <input class="form-control <?=$telephone_error?>" name="telephone" type="text" value="<?= $telephone ?>" id="telephone">
            </div>

            <div class="form-group">
                <label for="subject" class="required">Subject</label>
                <input class="form-control <?=$subject_error?>" name="subject" type="text" value="<?= $subject ?>" id="subject">
            </div>

            <div class="form-group-mes">
                <label for="message" class="required">Message</label>
                <textarea class="form-control <?=$message_error?>" name="message" cols="50" rows="10" value="<?= $message ?>" id="message"></textarea>
            </div>

            <div class="check-container">
                <input class="checkbox" name="marketing_preference" type="checkbox" value="1">
                <span class="media-body">
                    Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="https://www.netmatters.co.uk/privacy-policy" target="_blank" rel="noopener noreferrer">Privacy Policy</a> 
                    for more information on how we use your data
                </span>
            </div>

            <button name="submit" class="btn">
                Send Enquiry
            </button>
        </form>
    </div>
</div>

<div class="location-cards wrap">
    <div class="card-container">
        <!-- hover -->
        <div class="card">
            <div class="details">
                <div class="location-icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <h2>Netmatters Office: Wymondham</h2>
                <p>
                    Netmatters<br>
                    11 Penfold Drive<br>
                    Wymondham<br>
                    Norfolk<br>
                    NR18 0WZ
                </p>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63325.00319693099!2d1.1667245631248704!3d52.5774426997246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8c8e8cd3%3A0xfed427f655bb2e78!2sPenfold%20Dr%2C%20Wymondham%20NR18%200WZ%2C%20UK!5e0!3m2!1sen!2sus!4v1607953097813!5m2!1sen!2sus"   frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        <div class="card">
            <div class="details">
                <div class="location-icon">
                    <i class="fa fa-road" aria-hidden="true"></i>
                </div>
                <h2>Netmatters Office: Gorleston, Great Yarmouth</h2>
                <p>
                    Netmatters - Great Yarmouth<br>
                    Suite F23 Beacon Innovation Centre, Beacon Park<br>
                    Gorleston, Great Yarmouth<br>
                    Norfolk<br>
                    NR31 7RA
                </p>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125832.8607442501!2d1.7215139775340509!3d52.56209803142819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da04f399e5d1cd%3A0xda8f9fb03e748e37!2sGorleston-on-Sea%2C%20Great%20Yarmouth%20NR31%207RA%2C%20UK!5e0!3m2!1sen!2sus!4v1607953658686!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>



<!-- main end, inc in footer -->
<?PHP include_once($_SERVER['DOCUMENT_ROOT']. '/netmatters/template/footer.php');?>