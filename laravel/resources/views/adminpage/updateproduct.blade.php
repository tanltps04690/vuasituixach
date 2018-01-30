@extends('adminpage')
@section('content')
<link href="{{ URL::asset('css/colorpicker.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('js/jscolor.js')}}"></script>
<div class="content-page">
<div class="content">
    <h1>Update Product</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3" style = "margin: auto">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
      
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Product Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Brand:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Price:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Color:</label>
            <div class="col-md-8">
                {{--  COLOR PICKER  --}}

                <button   type="button" class="close" aria-label="Close">
									<span id = "closeAction" aria-hidden="true">&times;</span>
								</button>
                <div class="color-picker" style ="height:0px;padding:0px">
									

								</div>

                {{--  END  --}}
                <div class = "colorpicker" style = "float:left">
                 
            </div>
                <button id = "addColor" type="button" class="btn btn-default btn-circle btn-lg" style = "background: #0fef2cc2;width: 40px; height: 26px; padding: 0; margin: 0;" onClick="defaultbtn()">+</button>
                <input type = "hidden" name ="color">
            </div>
          </div>
          <div class="form-group">
                <label class="col-lg-3 control-label">Description:</label>
                <div class="col-lg-8">
                  <textarea class="form-control" name="Text1" cols="40" rows="5"></textarea>
                </div>
              </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button class="btn btn-primary">Update</button>
              <span></span>
              <button type="reset" class="btn btn-default" >Cancel</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>

<hr>

<script>
		var btnID;
    var count = 0;
        $("#addColor").click(function() {
            count++;
            if(count<11){
            $( ".colorpicker" ).append(`<input name = "color[]" type = "button" id ="btn-color`+count+`"
						class="btn btn-default btn-circle btn-lg" onClick="test(`+count+`)"/>`);
						this.btnID=count;
           }
					 $('.color-picker').animate({
								height:"200px",
								padding:"40px",
							},1000)
							$('.base-colors').animate({
								height:"50px",
							},1000)
							$('.varied-colors').animate({
								height:"95px",
							},1000)
							$('.close-button').animate({
								height:"5px",
							},1000)
							$('#closeAction').css({
								'display':'block',
							});
							
					});
					$('#closeAction').click(function(){
						$('.color-picker').animate({
							height:"0px",
							padding:"0px",
						},1000)
						$('.base-colors').animate({
							height:"0px",
						},1000)
						$('.varied-colors').animate({
							height:"0px",
						},1000)
						$('.close-button').animate({
							height:"0px",
						},1000)
						$('#closeAction').css({
							'display':'none',
						});
					});
					
/*

	Bubble color picker
	By @Lewitje

	Have fun with it!

*/

var colorPicker = (function(){
	
	var config = {
		baseColors: [
			[46, 204, 113],
			[52, 152, 219],
			[155, 89, 182],
			[52, 73, 94],
			[241, 196, 15],
			[230, 126, 34],
			[231, 76, 60]
		],
		lightModifier: 20,
		darkModifier: 0,
		transitionDuration: 200,
		transitionDelay: 25,
		variationTotal: 10
	};

	var state = {
		activeColor: [0, 0, 0]
	};
	function init(){
		createColorPicker(function(){
			appendBaseColors();
		});
		
		addEventListeners();
		
		setFirstColorActive(function(){
			setFirstModifiedColorActive();
		});
	}
	
	function setActiveBaseColor(el){
		$('.color.active').removeClass('active');
		el.addClass('active');
	}
	
	function setActiveColor(el){
		$('.color-var.active').removeClass('active');
		el.addClass('active');
		state.activeColor = el.data('color').split(',');
	}
	
	function addEventListeners(){
		$('body').on('click', '.color', function(){
			var color = $(this).data('color').split(',');
			setActiveBaseColor($(this));
			
			hideVariations(function(){
				createVariations(color, function(){
					setDelays(function(){
						showVariations();
					});
				});
			});
		});
		
		$('body').on('click', '.color-var', function(){
			setActiveColor($(this));
			setBackgroundColor();
			//$('.color-picker').fadeOut();
			});
	
		//
	}
	function setFirstColorActive(callback){
		$('.color').eq(1).trigger('click');
		callback();
	}
	
	function setFirstModifiedColorActive(){
		setTimeout(function(){
			$('.color-var').eq(7).trigger('click');
		}, 500);
	}
	
	function createColorPicker(callback){
		$('.color-picker').append('<div class="base-colors" style ="height:0px"></div>');
		$('.color-picker').append('<div class="varied-colors" style ="height:0px"></div>');
		$('.color-picker').append('<div class="active-color"></div>');
		$('.color-picker').append('<div class="color-history"></div>');
		callback();
	}
	
	function appendBaseColors(){
		for(i = 0; i < config.baseColors.length; i++){
			$('.base-colors').append('<div class="color" data-color="' + config.baseColors[i].join() + '" style="background-color: rgb(' + config.baseColors[i].join() + ');"></div>');
		}
	};
	
	function setBackgroundColor(){
		
		$('#btn-color'+this.btnID).css({
			'background-color': 'rgb(' + state.activeColor + ')'
		});
		//$('.color-picker').fadeOut();
	}
	
	function createVariations(color, callback){
		$('.varied-colors').html('');
		
		for(var i = 0; i < config.variationTotal; i++){
			var newColor = [];
			
			for (var x = 0; x < color.length; x++){
				var modifiedColor = (Number(color[x]) - 100) + (config.lightModifier * i);
				
				if(modifiedColor <= 0){
					modifiedColor = 0;
				} else if (modifiedColor >= 255){
					modifiedColor = 255;
				}
				
				newColor.push(modifiedColor);
			}
			
			$('.varied-colors').append('<div data-color="' + newColor + '" class="color-var" style="background-color: rgb(' + newColor + ');"></div>');
		}
		
		callback();
	}
	
	function setDelays(callback){
		$('.color-var').each(function(x){
			$(this).css({
				'transition': 'transform ' + (config.transitionDuration / 1000) + 's ' + ((config.transitionDelay / 1000) * x) + 's'
			});
		});
		
		callback();
	}
	
	function showVariations(){
		setTimeout(function(){
			$('.color-var').addClass('visible');
		},(config.transitionDelay * config.variationTotal));
	}
	
	function hideVariations(callback){
		$('.color-var').removeClass('visible').removeClass('active');
		
		setTimeout(function(){
			callback();
		},(config.transitionDelay * config.variationTotal));
	}
	
	return{
		init: init
	};
	
}());
colorPicker.init();
function test(id){
	this.btnID = id;
}
function defaultbtn(){
	this.btnID = this.count+1;
}
</script>
@endsection