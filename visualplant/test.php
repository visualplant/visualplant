<?php ?>

<? include('includes/meta.php') ?>

<body>

<script src="js/quotator.js" type="text/javascript"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  	$("#quotes").quotator({
      	speed : 7000,
      	json : "js/quotator_quotes.js"
  	});
  });
  </script>
  
<script type="text/javascript" src="js/fadecode.js" charset="UTF-8"></script> 
<script type="text/javascript" src="js/fadeconfig.js" charset="UTF-8"></script> 

<div id="site">

<? include('includes/footertest.php') ?>

</body>
</html>