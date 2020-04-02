          <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800 mb-4 mt-4"><?php echo $title_page?></h1>
            <?php 
	            if(isset($option_button)){
	            	foreach ($option_button as $key => $value) { 
	            		echo $value;
	            	} 
	            }
            ?>
          </div>