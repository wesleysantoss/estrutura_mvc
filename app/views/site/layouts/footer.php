<script type="text/javascript" src="<?php echo PATH_URL ?>/assets/js/libs/jQuery/jquery-3.3.1.min.js?v=<?php echo filemtime(PATH . '/assets/js/jQuery/jquery-3.3.1.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo PATH_URL ?>/assets/js/libs/bootstrap/bootstrap.min.js?v=<?php echo filemtime(PATH . '/assets/js/Bootstrap/bootstrap.min.js') ?>"></script>

<?php
	if(!empty($js)){
	    foreach($js as $row){
	        if(file_exists('app/assets/js/site/' . $row)){
                $path = PATH_URL . '/assets/js/site/' . $row;
                $version = filemtime(PATH . '/assets/js/site/' . $row);
                
	            echo '<script type="text/javascript" src="'.$path.'?v='.$version.'"></script>';
	        }
	    }
	}
?>
</body>
</html>