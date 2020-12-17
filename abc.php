
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <label class="col-md-3 col-form-label">Email Address: </label> <span class="fa fa-plus add"></span>
    <div class="appending_div">
      <div>
      <label class="col-md-3 col-form-label">Email Address: </label><input type="text" name="blog_linku_one[]"> 
      </div>
    </div>
 <script>
     $(document).ready(function() {
var i = 1;
  $('.add').on('click', function() {
    var field = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><div><input type="text" name="blog_linku_one[]"></div>';
    $('.appending_div').append(field);
    i = i+1;
  })
})
 </script>


            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Email Address: </label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email" placeholder="email@example.com" autocomplete="off" />
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Primary</label>
                    <div class="radio-custom radio-default radio-inline">
                        <input type="radio" id="_inputHorizontalFemale" name="inputRadiosMale2" checked/>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Opted Out</label>
                    <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Invalid</label>
                    <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox"  autocomplete="off"/>
                    </div>
                </div>

            </div>


<script>
            $(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
    
</script>

<div class="input_fields_wrap">
    <button class="add_field_button">Add More Fields</button>
    <div><input type="text" name="mytext[]"></div>
</div>