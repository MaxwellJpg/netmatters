<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- STYLES -->
    <link rel="stylesheet" href="js/mmenu/mmenu.css" />
    <link rel="stylesheet" href="js/carousel/square1.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/jquery-gray@1.6.0/css/gray.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title> <?= $title ?> </title>
</head>

<body>
    <div id="cookie-consent" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Cookies Policy</h3>
                </div>
                <div class="modal-body clearfix">
                    <p>
                        We use cookies to obtain aggregate data regarding site traffic and interaction, in order to
                        identify user trends and obtain insights in order to continually improve our site. These
                        cookies enable us to improve your customer experience as you use our site and help provide
                        you with relevant online marketing.
                    </p>
                    <p>
                        You can see a list of the other companies who use cookies on this website, by visiting cookie
                        settings at the bottom of each page. For full details of how we use your personal information,
                        and your rights in relation to it, view our privacy policy.
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="btn-con">
                        <a class="btn" href="#change-settings">
                            Change Settings
                        </a>
                        <a class="btn" id="accept-cookies">
                            Accept Cookies
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <header class="clearfix">
            <div class="center-hd wrap">
                <div class="hd-wrapper">
                    <!-- logo -->
                    <img id="logo" src="img/nm-logo.png" alt="Netmatters logo">

                    <!-- Phone logo -->
                    <div class="telephone">
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!-- header - right -wrapper -->
                    <button class="support">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        Support
                    </button>
                    <button class="contact">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        Contact
                    </button>

                    <!-- searchbar -->
                    <div class="search-wrap">
                        <form class="searchbar" method="GET" action="">
                            <input class="search-input" type="text" placeholder="Search.." name="search">
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <!-- burger button -->
                    <!-- link to side menu -->
                    <a  class="menu" href="#side-nav">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <h5>Menu</h5>
                    </a>
                </div>
            </div>

            <!-- side menu -->
            <nav id="side-nav">
                <ul>
                    <li class="l1">
                        <a class="contactnav" href="#">
                            Contact Us
                        </a>
                    </li>
                    <!-- services -->
                    <li class="l1 web">
                        <a href="#">
                            <i class="fa fa-code" aria-hidden="true"></i>
                            <small>Web</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#website-design">
                            Stylish Websites
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#ecommerce-development">
                            eCommerce Stores
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#branding">
                            Branding
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#app-development">
                            Apps
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#web-hosting">
                            Web Hosting
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#pay-monthly-websites">
                            Pay Monthly Websites
                        </a>
                    </li>
                    <li class="l1 it">
                        <a href="#">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <small>IT</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#managed-it">
                            Managed IT
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#business-it">
                            Business IT
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#office-365">
                            Office 365
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#consultancy">
                            Consultancy
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#cloud-provider">
                            Cloud Provider
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#data-backup">
                            Data Backup
                        </a>
                    </li>
                    <li class="l1 telecoms">
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <small>Telecoms</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#gigabit-vouchere">
                            Gigabit Voucher
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#hosted-voip">
                            Hosted VoIP
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#business-voip">
                            Business VoIP
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#business-broadband">
                            Business Broadband
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#leased-lines">
                            Leased Line
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#3cx-system">
                            3CX Systems
                        </a>
                    </li>
                    <li class="l1 software">
                        <a href="#">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <small>Bespoke</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#workflow-solutions">
                            Workflow Solutions
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#automation">
                            Automation
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#systems-integration">
                            System Integration
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#database-management">
                            Database Management
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#sharepoint">
                            SharePoint
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#erp">
                            ERP
                        </a>
                    </li>
                    <li class="l1 digital">
                        <a href="#">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                            <small>Digital</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#seo">
                            Search (SEO)
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#ppc">
                            Paid (PPC)
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#conversion">
                            Conversion (CRO)
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#email">
                            Email
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#social-media">
                            Social Media
                        </a>
                    </li>
                    <li class="l2">
                        <a href="content">
                            Content
                        </a>
                    </li>
                    <li class="l1 security">
                        <a href="#">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            <small>Cyber</small>
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#assessment">
                            Assessment
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#management">
                            Management
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#pen-testing">
                            Penetration Testing
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#cyber-essentials">
                            Cyber Essentials
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#pci">
                            PCI/DSS
                        </a>
                    </li>
                    <li class="l2">
                        <a href="#hacker-prevention">
                            Hacker Prevention
                        </a>
                    </li>
                    <!-- Other links -->

                    <li class="Divider"><a href="#"> Training </a></li>
                    <li class="sub"><a href="#"> Web Developer Course </a></li>

                    <li class="Divider"><a href="#"> Events </a></li>
                    <li class="sub"><a href="#"> Business Automation Seminar </a></li>

                    <li class="Divider"><a href="#"> Our Company </a></li>
                    <li class="sub"><a href="#"> Our Culture </a></li>
                    <li class="sub"><a href="#"> Our Team </a></li>
                    <li class="sub"><a href="#"> Our Careers </a></li>
                    <li class="sub"><a href="#"> Our Benefits </a></li>
                    <li class="sub"><a href="#"> Our Great Yarmouth Office </a></li>

                    <li class="Divider"><a href="#"> Our Work </a></li>
                    <li class="sub"><a href="#"> Case Studies </a></li>

                    <li class="Divider"><a href="#"> Our Knowledge </a></li>
                    <li class="sub"><a href="#"> Guides </a></li>
                    <li class="sub"><a href="#"> News </a></li>
                    <li class="sub"><a href="#"> Insight </a></li>

                    <li class="Divider"><a href="#"> Covid Risk Assessments </a></li>
                </ul>
            </nav>

            <div class="drop-nav">
                <div class="dn-container wrap">
                    <ul>
                        <li class="web">
                            <a href="#">
                                <i class="fa fa-code" aria-hidden="true"></i>
                                <small>Web</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#website-design">
                                        Stylish Websites
                                    </a>
                                </li>
                                <li>
                                    <a href="#ecommerce-development">
                                        eCommerce Stores
                                    </a>
                                </li>
                                <li>
                                    <a href="#branding">
                                        Branding
                                    </a>
                                </li>
                                <li>
                                    <a href="#app-development">
                                        Apps
                                    </a>
                                </li>
                                <li>
                                    <a href="#web-hosting">
                                        Web Hosting
                                    </a>
                                </li>
                                <li>
                                    <a href="#pay-monthly-websites">
                                        Pay Monthly Websites
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="it">
                            <a href="#">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <small>IT</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#managed-it">
                                        Managed IT
                                    </a>
                                </li>
                                <li>
                                    <a href="#business-it">
                                        Business IT
                                    </a>
                                </li>
                                <li>
                                    <a href="#office-365">
                                        Office 365
                                    </a>
                                </li>
                                <li>
                                    <a href="#consultancy">
                                        Consultancy
                                    </a>
                                </li>
                                <li>
                                    <a href="#cloud-provider">
                                        Cloud Provider
                                    </a>
                                </li>
                                <li>
                                    <a href="#data-backup">
                                        Data Backup
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="telecoms">
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <small>Telecoms</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#gigabit-vouchere">
                                        Gigabit Voucher
                                    </a>
                                </li>
                                <li>
                                    <a href="#hosted-voip">
                                        Hosted VoIP
                                    </a>
                                </li>
                                <li>
                                    <a href="#business-voip">
                                        Business VoIP
                                    </a>
                                </li>
                                <li>
                                    <a href="#business-broadband">
                                        Business Broadband
                                    </a>
                                </li>
                                <li>
                                    <a href="#leased-lines">
                                        Leased Line
                                    </a>
                                </li>
                                <li>
                                    <a href="#3cx-system">
                                        3CX Systems
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="software">
                            <a href="#">
                                <i class="fa fa-th" aria-hidden="true"></i>
                                <small>Bespoke</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#workflow-solutions">
                                        Workflow Solutions
                                    </a>
                                </li>
                                <li>
                                    <a href="#automation">
                                        Automation
                                    </a>
                                </li>
                                <li>
                                    <a href="#systems-integration">
                                        System Integration
                                    </a>
                                </li>
                                <li>
                                    <a href="#database-management">
                                        Database Management
                                    </a>
                                </li>
                                <li>
                                    <a href="#sharepoint">
                                        SharePoint
                                    </a>
                                </li>
                                <li>
                                    <a href="#erp">
                                        ERP
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="digital">
                            <a href="#">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                <small>Digital</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#seo">
                                        Search (SEO)
                                    </a>
                                </li>
                                <li>
                                    <a href="#ppc">
                                        Paid (PPC)
                                    </a>
                                </li>
                                <li>
                                    <a href="#conversion">
                                        Conversion (CRO)
                                    </a>
                                </li>
                                <li>
                                    <a href="#email">
                                        Email
                                    </a>
                                </li>
                                <li>
                                    <a href="#social-media">
                                        Social Media
                                    </a>
                                </li>
                                <li>
                                    <a href="content">
                                        Content
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="security">
                            <a href="#">
                                <i class="fa fa-shield" aria-hidden="true"></i>
                                <small>Cyber</small>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="dd-menu" role="menu">
                                <li>
                                    <a href="#assessment">
                                        Assessment
                                    </a>
                                </li>
                                <li>
                                    <a href="#management">
                                        Management
                                    </a>
                                </li>
                                <li>
                                    <a href="#pen-testing">
                                        Penetration Testing
                                    </a>
                                </li>
                                <li>
                                    <a href="#cyber-essentials">
                                        Cyber Essentials
                                    </a>
                                </li>
                                <li>
                                    <a href="#pci">
                                        PCI/DSS
                                    </a>
                                </li>
                                <li>
                                    <a href="#hacker-prevention">
                                        Hacker Prevention
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- ===============MAIN================= -->

        <div>
            <main>