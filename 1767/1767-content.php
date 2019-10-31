<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1767">
	<div class="container">
        <div class="main">
	        <div class="section-title">
		        <h2>HOTELS</h2>
		        <p id="text-style">Her are some nearby hotels</p>
		        <hr>
		     </div>
		    <div class="row">
	        	<div class="col-md-4">
					<div class="card">
					    <img src="images/1.jpg" alt="image">
					 	 <div class="card-body">
					  		  <h3 class="card-title">Hotel 1</h3>
					  		  <input type="hidden" class="rating" value="1"/>
					  		 	 
					  		<p>0.4 Mile from the Venue</p>
					  	</div>
					</div>
  				</div>
				<div class="col-md-4">
					<div class="card">
					    <img src="images/2.jpg" alt="image">
					    <div class="card-body">
					    <h3 class="card-title">Hotel 2</h3>
					  		  	<input type="hidden" class="rating" value="1"/>
					  		<p>0.5 Mile from the Venue</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
			    	<div class="card">
						<img src="images/3.jpg" alt="image">
						<div class="card-body">
						    <h3 class="card-title">Hotel 3</h3>
					  		  	<input type="hidden" class="rating" value="1"/>
						  	<p>0.6 Mile from the Venue</p>
						</div>
					</div>
		  		</div>
	     	</div>
	   	</div>
	</div>
</div>
					
