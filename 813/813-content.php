<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<div class="type-813">
	<div class="container type-813">
		<div class="row">
			<div class="col-md-3">
				<div class="type-813-info">
					<img src="https://image.ibb.co/kUASdV/type-813-image.png" alt="image"/>
					<h2>Contact Us</h2>
					<h4>We would love to hear from you !</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="type-813-form">
					<div class="form-group">
					  <label class="control-label col-sm-2" >First Name:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" placeholder="Enter First Name" >
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" >Last Name:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" placeholder="Enter Last Name" >
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" >Email:</label>
					  <div class="col-sm-10">
						<input type="email" class="form-control"  placeholder="Enter email">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2">Comment:</label>
					  <div class="col-sm-10">
						<textarea class="form-control" rows="5" ></textarea>
					  </div>
					</div>
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

