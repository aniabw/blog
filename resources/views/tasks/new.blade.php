<!DOCTYPE html>

<html>

<head>

	<title>Laravel - Ajax Request</title>

	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

</head>

<body>

<div class="container">

</div>

<script type="text/javascript">

	$.ajax(

	{
       url: "/getBody",

	    type: 'GET',

	}).done( 

	    function(data) 

	    {

	        $('.container').html(data.html);

	    }

	);

</script>

</body>

</html>