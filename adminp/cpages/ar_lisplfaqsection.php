<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Category</th>
<th>Question</th>
<th>Answer</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'faqsection','rowId,category,question,answer','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edifaqsection.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delfaqsection.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['category'].'</td>
'; echo '<td>'.$row['question'].'</td>
'; echo '<td>'.$row['answer'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>