<?php 
include 'include/header.php';
include 'dbconnect.php';
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Item List</h1>
	<a href="item_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Item</a>
</div>

<div class="card shadow mb-4">
	<div class="card_header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Item List Table</h6>
		
	</div>
	<div class="card_body">
		<div class="table-responsive">
			<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Item Name</th>
						<th>Code No</th>
						<th>Price</th>
						<th>Option</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Item Name</th>
						<th>Code No</th>
						<th>Price</th>
						<th>Option</th>
					</tr>
				</tfoot>
				<tbody>
					<?php 
					     $sql="SELECT * FROM items";
					     $stmt=$pdo->prepare($sql);
					     $stmt->execute();
					     $items=$stmt->fetchAll();
					     foreach ($items as $item) {
					     	

					 ?>
					 <tr>
					 	<td><?php echo $item['id']; ?></td>
					 	<td><?php echo $item['name']; ?></td>
					 	<td><?php echo $item['codeno']; ?></td>
					 	<td><?php 
					 	        if($item['discount']){
					 	        	echo $item['discount']." MMK";
					 	        	?>
					 	        	<del><?php echo $item['price']." MMK"; ?></del>
					 	        	<?php 
					 	        	 }else{
					 	        	 	echo $item['price']." MMK";
					 	        	 }

					 	        	 ?>
					 	       


					 	 </td>
					 	<td>
					 		<a href="item_detail.php?id=<?php echo $item['id'];?>" class="btn btn-outline-primary btn-sm" >Detail</a>
					 		<a href="#" class="btn btn-outline-warning btn-sm">Edit</a>
					 		<a href="item_delete.php?id=<?php echo $item['id'];?>" class="btn btn-outline-danger btn-sm">Delete</a>
					 	</td>
					 </tr>
					<?php } ?>
				</tbody>

				
			</table>
			
		</div>
		
	</div>
	
</div>




<?php 
include 'include/footer.php';
?>