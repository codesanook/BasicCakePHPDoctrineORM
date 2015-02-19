<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Transdmin Light</title>

    <!-- CSS -->

    <?php echo $this->Html->css('transdmin'); ?>

    <!--[if IE 6]><?php echo $this->Html->css('ie6'); ?><![endif]-->
    <!--[if IE 7]><?php echo $this->Html->css('ie7'); ?><![endif]-->

    <!-- JavaScripts-->

    <?php echo $this->Html->script('jquery'); ?>
    <?php echo $this->Html->script('jNice'); ?>
</head>

<body>
    <div id="wrapper">
        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
        <h1><a href="#">Statistic</a></h1>

        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
            <li><a href="#" class="active">DASHBOARD</a></li>
            <!-- Use the "active" class for the active menu item  -->
            <li><a href="#">ADMINISTRATION</a></li>
            <li><a href="#">DESIGN</a></li>
            <li><a href="#">OPTION</a></li>
            <li class="logout"><a href="#">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->

        <div id="containerHolder">
            <div id="container">
                <div id="sidebar">
                    <ul class="sideNav">
                        <li><a href="#">Exchange</a></li>
                        <li><a href="#" class="active">Print resources</a></li>
                        <li><a href="#">Training &amp; Support</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Safari books online</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>
                <!-- // #sidebar -->

                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2>

                <div id="main">
                    <!-- content body here -->
                    <?php echo $this->fetch('content'); ?>

                </div>
                <!-- // #main -->

                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>
        <!-- // #containerHolder -->

        <p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>
