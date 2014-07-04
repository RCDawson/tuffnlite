<?php
?>
<!DOCTYPE html>
<head>
    <title><?php echo $template['title']; ?></title>
</head>
<body>
    template
    <img src="images/blah.png">
    <?php $this->template->alerts(); ?>
    <?php echo $template['body']; ?>
    <?php $this->template->alerts('p'); exit; var_dump($this->session->flashdata('messages')); exit;
    foreach($this->session->flashdata('messages') as $k=>$messages)
    {
//        echo $message;
    };
    ?>
</body>
</html>