<div class="cont" style="margin-left: 15px; width: 730px;overflow: hidden;">
	<!-- DESC -->
	<div class="desc" id="desc">
		<div class="desc_block">
			<a href="#" class="desc_close" ><img src="/img/desc_close.png" alt=""></a>
			<div style="clear: both"></div>
			<center>
				<img src="/img/menu/rolly1/Kalifornija_s_lososem.png" class="img_desc" alt="">
			</center> 
			<p class="desc_name" id="desc_name">Name</p>          
			<p class="p_desc" id="p_desc">Состав: <span></span></p>
			<p class="ves" id="ves">Вес: <span></span> г.</p>
		</div>
	</div> 
	<!-- DESC -->
	<div class="cont2">
		<?php 
			
			foreach ($data['goods'][0] as $key) {
				$edit = '<a  href="/share/edit/id/'.$key["id"].'" class="lsf symbol edit-icon" style="font-size: 30px;">edit</a>';
				$delete = '<a  href="/share/delete/id/'.$key["id"].'" class="lsf symbol delete-icon" style="font-size: 30px;">delete</a>';
				$buy = 0;
				$i = 0;
				$display = 'none';
				// foreach ($_SESSION['basket'] as $key2 => $value2) {
				// 	if($key['id'] == $value2 && $buy == 0){
				// 		$buy = 1;
				// 		$display = 'block';
				// 		break;
				// 	}
				// }
				// foreach ($_SESSION['basket'] as $key2 => $value2) {
				// 	if($key['id'] == $value2){
				// 		$i++;
				// 	}
				// }
				if(!$i)$i = 1;

				printf('
						<div class="block" style="width:170px;">
							'.$edit.'
							'.$delete.'
							<div class="open_desc">
								<a href="#" class="img_open_desc" src2="%s" name="%s" desc="%s" ves="%s" ><img  style="width:34px;height:34px;" src="/img/open_desc.png" alt=""></a>
							</div>
							<img src="%s" alt="">
							<div class="number" id="number%s" style="display: '.$display.'">
								<!-- value="<?php echo $prow->quantity ?>" --> 
								<input type="text" title="" class="inputbox input-ultra-mini" size="3" maxlength="4" name="quantity"  value="'.$i.'" />
								<a href="#" id_good="%s" price="%s"  class="plus" style="left:108px;top:49px" ><img src="/img/plus.png" style="width:14px;height:14px;" alt=""></a>
								<a href="#" id_good="%s" price="%s" class="minus"  style="left:35px;top:46px" ><img src="/img/minus.png" style="width:15px;height:5px;" alt=""></a>
							</div>
							<div class="b_share">
					           <p class="do">%s р</p>
					           <p class="to">%s р</p>
					           <a id="%s" buy="'.$buy.'" href="#" price="%s" class="add_good_share" ><div class="buy_share"></div></a>
					        </div>
							<div class="b" style="height: 66px; width: 170px">
								<p class="name">%s</p>
								<p class="m_desc">%s</p>
							</div>
						</div>
						',$key["img"],$key["name"],$key["desc"],$key["weight"],$key["m_img"],$key["id"],$key["id"],$key["to_price"],$key["id"],$key["to_price"],$key["do_price"],$key["to_price"],$key["id"],$key["to_price"],$key["name"],$key["m_desc"]);
			}
		 ?>
	</div>
</div>




<?php 

?>