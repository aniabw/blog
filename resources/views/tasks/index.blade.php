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
			<li>
				<a href="tasks/{{ $task->id }}">{{ $task->body }}</a>
			</li>
		@endforeach 
	   </ul>	
    </body>
</html>