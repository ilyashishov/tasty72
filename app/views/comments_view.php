<?php require_once "/var/www/tasty72/tasks/comment.class.php"; ?>
<p style="padding:12px;font-size:18px;text-align:center;color: #C9A956;">Отзывы наших клиентов</p>
<div class="cont3" style="margin-left: 35px;overflow: hidden;width:715px;">
	<div id="main">
		<div id="addCommentContainer" style="">
			<form id="addCommentForm" method="post" action="/comments/create">
				<div class="o_form">
					<label for="name">Ваше ИМЯ:</label>
					<input type="text" name="name" id="name" class="o_user"  />
					<label for="email">Ваш email:</label>
					<input type="text" name="email" id="email" class="o_user"  />
					<br>
					<label for="body" style="top:17px;">Ваше сообщение:</label>
					<textarea name="body" id="body" cols="20" rows="5" class="o_user o_user_t" style="overflow: hidden;" maxlength="290"></textarea>
					<input type="submit" id="submit" value="оставить отзыв" />
					<input type="text" name="admin" id="admin" value="false" style="display:none" />
					<div style="clear: both"></div>
				</div>
			</form>
		</div>
		<?php
		
		foreach($data['comments'][0] as $c){
			$comments[] = new Comment($c);
		}
		foreach($comments as $c){
			echo $c->markup();
		}
		?>
	</div>
</div>
<div class="contcomments" style="margin-left: 35px;">
	<a href="#" class="o_submit" id="o_submit" >оставить отзыв</a>
</div>
<div style="clear: both"></div>
