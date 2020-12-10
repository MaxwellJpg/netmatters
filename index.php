<?PHP
$title = "Netmatters";
include_once('template/header.php');?>
<!-- main start inc from header -->

    <!-- carousel -->
    <div class="carousel">
        <div>
            <div class="img-con">
                <img src="img/carousel/web.jpg" alt="Web Design">
            </div>
            <div class="carousel-content">
                <h2>Web design</h2>
                <p>For businesses looking to make a strong<br>and effective impression.</p>
                <a class="btn webbtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div>
            <div class="img-con">
                <img src="img/carousel/it-support.jpg" alt="IT Support Norfolk">
            </div>
            <div class="carousel-content">
                <h2>IT Support</h2>
                <p>Fast and cost-effective IT support<br>services for your business.</p>
                <a class="btn itbtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div>
            <div class="img-con">
                <img src="img/carousel/telecoms.jpg" alt="Telecom Services">
            </div>
            <div class="carousel-content">
                <h2>Telecoms Services</h2>
                <p>A new approach to connectivity, see how<br>we can help your business.</p>
                <a class="btn telecomsbtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div>
            <div class="img-con">
                <img src="img/carousel/software.jpg" alt="Bespoke Software">
            </div>
            <div class="carousel-content">
                <h2>Bespoke Software</h2>
                <p>Bring your business together<br>with solutions that grow with you.</p>
                <a class="btn softwarebtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div>
            <div class="img-con">
                <img src="img/carousel/digital.jpg" alt="Digital Marketing">
            </div>

            <div class="carousel-content">
                <h2>Digital Marketing</h2>
                <p>Generating you new business through<br>results-driven marketing activities.</p>
                <a class="btn digitalbtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div>
            <div class="img-con">
                <img src="img/carousel/cyber.jpg" alt="Cyber Security">
            </div>
            <div class="carousel-content">
                <h2>Cyber Security</h2>
                <p>Keeping businesses and their customers<br>sensitive information protected.</p>
                <a class="btn cyberbtn" href="#">
                    Find out more
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- SERVICE cards -->
    <div class="wrap">
        <div class="service-list">
            <div class="card software">
                <div class="service-icon">
                    <i class="fa fa-th" aria-hidden="true"></i>
                </div>
                <h3>Bespoke Software</h3>
                <p>Tailored softare solutions to improve business productivity
                    and online profits. Our tem will ensure a software solution.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card it">
                <div class="service-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <h3>IT Support</h3>
                <p>Remotely managed IT services that is catered to your businesses
                    needs, adds value and reduces costs.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card digital">
                <div class="service-icon">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Driving brand awareness and ROI through creative digital marketing
                    campaigns. We review and monitor online performances.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card telecoms">
                <div class="service-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <h3>Telecoms Services</h3>
                <p>Stay conned with bespoke telecoms solutions when you need it most.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card web">
                <div class="service-icon">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </div>
                <h3>Web Design</h3>
                <p>User-centric designs for businesses looking to make a lasting impression.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card security">
                <div class="service-icon">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                </div>
                <h3>Cyber Security</h3>
                <p>Ensuring your online business stay secure 24&#47;7, 365 days of the year.</p>
                <a class="btn" href="#">Read more</a>
            </div>
            <div class="card web-training">
                <div class="service-icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <h3>Developer Training</h3>
                <p>Have you considered a career on web development but you are not sure where to start?</p>
                <a class="btn" href="#">Read more</a>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="info">
        <div class="wrap">
            <div class="info-text">
                <h2>Netmatters</h2>
                <p>Netmatters Ltd is a leading web design, IT support and digital marketing agency
                    based in Wymondham, Norfolk.</p>
                <p>Founded in 2008, we work with businesses from a variety of industries to gain new
                    prospects, nurture existing leads and further grow their sales.</p>
                <p>We provide cost effective, reliable solutions to a range of services; from bespoke
                    cloud-based management systems, workflow and IT solutions through to creative
                    website development and integrated digital campaigning.</p>
                <a class="btn" href="#">Our culture <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="bar">
        <div class="wrap">
            <h3>Latest</h3>
        </div>
    </div>

    <!-- articles -->
    <div class="wrap">
        <div class="news">
            <?php 
                include_once('inc/connection.php'); 
                $stmt = $conn->prepare("
                    SELECT * FROM `news_article` AS article 
                    INNER JOIN `news_author` AS author 
                    ON article.author_id = author.author_id
                    ORDER BY `date_published` DESC
                    LIMIT 3;"); 
                $stmt->execute(); 
                $dbresults = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                foreach($dbresults as $article)  
                {   
            ?>
            <article class="card prfx-color--<?= $article['service'] ?>">
                <div class="img-container">
                    <!-- type -->
                    <a class="category-type" href="#"><?= $article['type'] ?></a>
                    <!-- img -->
                    <img src="<?= $article['img'] ?>" alt="Article1">
                </div>
                <div class="container">
                    <!-- Title, truncated to 45chars -->
                    <h4><?php echo preg_replace('/\s+?(\S+)?$/', '', substr($article['title'], 0, 50)) . '...'; ?></h4>
                    <!-- description, truncated to 100chars -->
                    <p>
                        <?php echo preg_replace('/\s+?(\S+)?$/', '', substr($article['description'], 0, 100)) . '...'; ?>
                    </p>
                    
                    <a class="btn" href="#">Read more</a>

                    <div class="author">
                        <div class="avatar">
                            <img src="<?= $article['author_img'] ?>" alt="<?= $article['name'] ?> avatar">
                        </div>
                        <div class="details">
                            <!-- author -->
                            <strong>Posted by <?= $article['name'] ?></strong>
                            <!-- date -->
                            <p><?= date('d F Y',strtotime($article['date_published'])) ?></p>
                        </div>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
    
</main>

<div class="clients">
    <div class="container wrap">
        <div class="list">
            <div class="item">
                <div class="tooltip">
                    <div class="box">
                        <h3>Busseys</h3>
                        <p>One of the UK's leading Ford dealerships.</p>
                        <div class="arrow"></div>
                    </div>
                </div>
                <img src="img/logos/busseys.png" alt="Busseys Logo" class="grayscale">
            </div>
            <div class="item">
                <div class="tooltip">
                    <div class="box">
                        <h3>Crane Garden Builders</h3>
                        <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops
                            and
                            sheds in the UK.</p>
                        <div class="arrow"></div>
                    </div>
                </div>
                <img src="img/logos/crane.png" alt="Crane Logo" class="grayscale">
            </div>
            <div class="item">
                <div class="tooltip">
                    <div class="box">
                        <h3>Beat</h3>
                        <p>The UK's eating disorder charity founded in 1989.</p>
                        <div class="arrow"></div>
                    </div>
                </div>
                <img src="img/logos/beat.png" alt="Beat Logo" class="grayscale">
            </div>
            <div class="item">
                <div class="tooltip">
                    <div class="box">
                        <h3>Northern Diver</h3>
                        <p>Global water based equipment manufacturers for sport, military, commercial and rescue
                            businesses.</p>
                        <div class="arrow"></div>
                    </div>
                </div>
                <img src="img/logos/northern-diver.png" alt="Northern Diver Logo" class="grayscale">
            </div>
        </div>
    </div>
</div>
<!-- main end, inc in footer -->
<?PHP include_once('template/footer.php');?>