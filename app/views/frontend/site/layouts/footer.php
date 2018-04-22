<script type="text/javascript" src="<?php echo PATH ?>/assets/js/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>/assets/js/Bootstrap/bootstrap.min.js"></script>

<?php
	if(!empty($js)){
	    foreach($js as $row){
	        if(file_exists('app/views/backend/site/js/' . $row)){
	        	$caminho = PATH . '/views/backend/site/js/' . $row;
	            echo '<script type="text/javascript" src="'.$caminho.'"></script>';
	        }
	    }
	}
?>
</body>
</html>