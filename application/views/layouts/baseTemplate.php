<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tuf-N-Lite : <?php echo $template['title']; ?></title>

    <link rel="stylesheet" href="/assets/css/baseGray.css">
    <link rel="stylesheet" href="/assets/css/iRespond.css">
    <link rel="stylesheet" href="/assets/css/tufnlite.css">

    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/css/ieBS.css" type="text/css">
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="/js/respond.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <div class="row">
        <?php include(FCPATH . APPPATH . '/views/header.php'); ?>
    </div>
    <?php echo $template['body']; ?>
</div>
<div class="container">
    <ul id="footer" class="row">
        <li class="column two" id="usa-made"><img src="/assets/images/made-in-usa.png" alt="Made In The U.S.A."></li>
        <li class="column seven">(800) 327-3376  &#149; (513) 893-LITE(5483) &#149; (513) 893-5484 (fax)
            <br><span style="font-size:.8em">4805 HAMILTON-MIDDLETOWN ROAD, LIBERTY TOWNSHIP, OHIO 45011<br>
            <br>&copy;<?php date_default_timezone_set("America/Chicago"); echo date("Y"); ?> TUF-N-LITE&reg; All Rights Reserved.</span>
        </li>
        <li class="column three" id="dalaco"><img src="/assets/images/dalaco-logo.png" alt="Dalaco Manufacturing"></li>
    </ul>
</div>
<script type="text/javascript" src="/assets/js/jquery-1.9.0.js"></script>
<!--<script type="text/javascript" src="/assets/js/jquery.fittext.js"></script>-->
<script type="text/javascript">
    $(document).ready(function () {
//        $('#fitText2').fitText({minFontSize:18px,maxFontSize:24px});
        $('#menu-toggle').click(function() {
            $('#nav ul').slideToggle();
        })
    })
</script>
</body>
</html>