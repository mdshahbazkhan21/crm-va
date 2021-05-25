<?php
echo $head;
if($use_navigation == true){
	get_template_part('navigation');
}
?>
<div id="wrapper">
	<div id="content">
		<div class="container">
			<div class="row">
				<?php get_template_part('alerts'); ?>
			</div>
		</div>
		<?php if(isset($knowledge_base_search)){ ?>
		<?php get_template_part('knowledge_base_search'); ?>
		<?php } ?>
		<div class="container">
			<div class="row">
					<?php // Dont show calendar for invoices,estimates,proposals etc.. views where no navigation is included or in kb area
					if(is_client_logged_in() && $use_submenu == true && !isset($knowledge_base_search)){ ?>
					<ul class="submenu customer-top-submenu">
						<li><button id="newTask" class="btn btn-danger">New Task</button></li>
						<li class="customers-top-submenu-files"><a href="<?php echo site_url('clients/files'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <?php echo _l('customer_profile_files'); ?></a></li>
						<li class="customers-top-submenu-calendar"><a href="<?php echo site_url('clients/calendar'); ?>"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> <?php echo _l('calendar'); ?></a></li>
					</ul>
					<div class="modal fade" id="taskModal" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			        <h5 class="modal-title" id="exampleModalLabel">Choose Your Project</h5>
			      </div>
			      <div class="modal-body">
			      	<div id="projectdiv"></div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			    </div>
			  </div>
					<div class="clearfix"></div>
					<?php } ?>
					<?php echo $view; ?>
				</div>
			</div>
		</div>
		<?php
		echo $footer;
		echo $scripts;
		?>
	</div>
	<script>
		$(document).ready(function()
		{
			$("#newTask").click(function(){
				$.ajax({
					url:"<?php echo site_url("clients/json_projects") ?>",
					method: "post",
					async : false,
					dataType : 'json',
					success:function(response)
					{
						if(response.length > 1)
						{
							$("#taskModal").modal("show");
							var output = "";
							var i;
							output += "<select id='select-project' name='' class='form-control'>"+
							"<option>- SELECT -</option>";
							for(i=0; i<response.length; i++)
							{
								output += "<option id='project' value='"+response[i].id+"'>"+response[i].name+"</option>";
							}
							output += "</select>";
							$("#projectdiv").html(output);
						}else if(response.length ==1){
							var id = response[0].id;
							window.location.href="<?php echo site_url('clients/project/') ?>"+id+"?group=new_task";
						}
					}
				})
			})
			$(document).on("change","#select-project",function()
			{
				var projectId = $(this).val();
				window.location.href="<?php echo site_url('clients/project/') ?>"+projectId+"?group=new_task";
			});
		});
	</script>
</body>
</html>
