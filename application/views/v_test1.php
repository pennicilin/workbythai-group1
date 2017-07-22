<script>
	$(document).ready(function(){

		
	});
	
		function getNum(date) {
		var num1 = 0
		var num2 = 0
		num1  = $('#num1').val();
		num2  = $('#num2').val();
		alert(num1);
		
		
		url = "<?php echo base_url('index.php/C_Stock/api_num') ?>" + "/"+ num1 + "/"+ num1;       
		$.ajax({
			method: "GET",
			url: url,
			dataType: "json",
			success: function(result) {
				$text = "";
				$.each(result, function( index, value ) {      
					$text += '<div class = "box-content">'
					$text += '<div class = "row">'
					$text += '<div class = "col-md-5">'
					$text += '<label>ชื่อวัสดุ </label>'
					$text += '<input type="hidden"  name="date" value="' + date + '" ></input>' 
					$text += '<input type="hidden"  name="id_item" value="' + value.item_id + '" ></input>' 
					$text += '<input class="form-control"   autocomplete="off"  value="' + value.item_name + '" disabled></input>'
					$text += '</div>'
					$text += '<div class = "col-md-3">'
					$text += '<label>จำนวนที่มีอยู่จริง</label>'
					$text += '<input class="form-control"  name="num_ra"  placeholder="' + value.unit + '" required ></input>'
					$text += '</div>'
					$text += '<div class = "col-md-4">'
					$text += '<label>นับเมื่อ</label>'
					$text += '<input class="form-control" name="count_date"  id="count_date"  required ></input>'
					$text += '</div>'
					$text += '</div><br>'
				});
				$('#item_for_ra').html($text);
			}
		});
	}	

</script>