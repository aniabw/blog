<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    
	<body>
	  <?php /* @ zastepuje < ? php
            {{ zastepuje echo */ ?>
	  <ul>
	    @foreach ($tasks as $task)
			<li>{{ $task }}</li>
		@endforeach 
	   </ul>	
    </body>
</html>