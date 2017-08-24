@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container-fluid main-wrapper">
<div class="row1"></div>
<table class="table table-bordered pagin-table">
    <thead>
        <tr>
			<th>Zone</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Views</th>
            <th>Clicks</th>
        </tr>
    </thead>
    <tbody>
		<?php
		foreach ($item as $key => $value) {?>
	       <tr dir-paginate="value in data | itemsPerPage:5" total-items="totalItems">
		    <td><?php echo $value->zonename;?></td>
            <td><?php echo $value->interval_start;?></td>
            <td><?php echo $value->interval_end;?></td>
            <td><?php echo $value->impressions;?></td>
            <td><?php echo $value->clicks;?></td>
        </tr>		
		<?php
				}
		?>
    </tbody>
</table>

</div>
</body>
</html>
@endsection