<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');


?>
<!DOCTYPE html>
<html lang="en">
  


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<title>EEvent 3.0 LAN-Party vom 01.11 bis 03.11 in Subingen, LoL, SC2 und CS:GO Turnier</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Beschreibung -->
  <meta name="description" content="eevent lan website">
  <meta name="keywords" content="lan switzerland eevent myinsanity">
  <meta name="author" content="Dominique Hostettler">

  <?php
    echo $this->Html->meta('favicon.ico');

    //echo $this->Html->css('cake.generic');
  //      echo $this->Html->css('bootstrap-responsive');
    
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('custom');
    echo $this->Html->css('custom-responsive');
    echo $this->Html->script('jquery-1.9.1.min');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39987210-1', 'eevent.ch');
  ga('send', 'pageview');

</script>
</head>

<body>


  <?php echo $this->element('eevent_banner'); ?>
        <?php echo $this->element('main_nav'); ?>

        <div class="container">
  <?php //echo $this->element('eevent_banner_small'); ?>

    <div class="row-fluid">


       <div class="span2">
        <?php echo $this->element('login_status_left_sidebar'); ?>
        </div>

        <div class="span8">
              <?php echo $this->Session->flash(); ?>

                <div class="shadowblock"> </div>

      <?php echo $this->fetch('content'); ?>
                <div class="shadowblock"> </div>

      </div>
      <?php //echo $this->element('breadcrumb'); ?>
    </div>
</div>
  <?php echo $this->element('footer'); ?>
</body>
</html>
