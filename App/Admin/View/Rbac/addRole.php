<!--头部-->
{{include file="VIEW_PATH/Common/header.php"}}

<div class="main">
	<div class="container-fluid">
	
	<!--左边的导航-->
	{{include file="VIEW_PATH/Common/nav.php"}}
	<!--左边的导航 结束-->

	<div class="content">
	     <div class="row-fluid">
		   <div class="span12">
		       <div class="box">
			<div class="box-head">
			         <h3>添加角色</h3>
			</div>
			<div class="box-content">
				<form action="{{U('addRoleHanlde')}}" class='validate form-horizontal' method="post">
					<div class="control-group">
						<label for="req" class="control-label">角色名称：</label>
						<div class="controls">
							<input type="text" name="name" id="req" class='required'>
						</div>
					</div>
					<div class="control-group">
						<label for="pw3" class="control-label">角色描述：</label>
						<div class="controls">
							<input type="text" name="remark" id="pw3" >
						</div>
					</div>
					<div class="control-group">
						<label for="pw4" class="control-label">是否开启：</label>
						<div class="controls">
							<input type="radio" name="status" id="pw4" class='required' equalTo="#pw3" checked='checked' value='1'>是&nbsp&nbsp  
							<input type="radio" name="status" id="pw4" class='required' equalTo="#pw3" value='0'>否
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class='btn btn-primary'>
					</div>
				</form>
			</div>
		       </div>
		</div>
	       </div>
	</div>	
      </div>
</div>	

{{include file="VIEW_PATH/Common/floor.php"}}
</body>
</html>