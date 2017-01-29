<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Newsletter Sign Up Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
        <h1>Subscribe Form</h1>    
 <section class="subscribe">
     
    <div class="subscribe-pitch">
      <h3>Subscribe</h3>
      <p>Subscribe to our newsletter to get the latest scoop right to your inbox.<p>
    </div>
            <form target='_blank' method="post" action="http://YOUR_URL_TO_PHP_LIST/lists/?p=subscribe&id=1" name="subscribeform" class="subscribe-form">
                    <input type=text name=email class="subscribe-input" value="" size="40" autofocus/>
                    <input type="hidden" name="list[2]" value="signup" />
                    <input type="hidden" name="listname[2]" value="newsletter"/>
                    <button type="submit" name="subscribe" class="subscribe-submit">Subscribe</button>
            </form>

</section>

</html>
