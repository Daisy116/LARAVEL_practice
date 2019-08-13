<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="/scripts/jquery-1.9.1.min.js"></script>
	<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">

	<?php $__currentLoopData = $employeeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
		<a href="employeeDetails.html/<?php echo e($emp ->employeeId); ?>" data-ajax="false"> 
			<img src="images/<?php echo e($emp->picture); ?>">
			<h4><?php echo e($emp->firstName); ?> <?php echo e($emp->lastName); ?></h4>
			<p><?php echo e($emp->title); ?></p>
			<p><?php echo e($emp->department["departmentName"]); ?></p>    
		</a>
		</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</ul>
</div>

</div>
</body>

</html><?php /**PATH C:\html lab\existed\resources\views/home/index.blade.php ENDPATH**/ ?>