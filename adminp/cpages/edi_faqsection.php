<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'faqsection','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>faqsection<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edifaqsection.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Category" class="form-control  validate[required] text-input" id="category" name="category" value="<?=$row['category'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Question
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Question" class="form-control  validate[required] text-input" id="question" name="question" value="<?=$row['question'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Answer
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Answer" class="form-control  validate[required] text-input" id="answer" name="answer" value="<?=$row['answer'];?>"> 
											</div>
										</div><div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															submit <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div></form></div>
												</div>
												</div>
												</div>