<?php
				if(isset($_GET['message']) && !empty($_GET['message']) && isset($_GET['type']) && !empty($_GET['type'])){
				echo '<p style="position:absolute; margin: 0 auto;" class="alert alert-'. $_GET['type'] .'">' . htmlspecialchars($_GET['message']) . '</p>';	
			}
			?>
</script>