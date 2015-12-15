$(document).ready(function(){


	$('.img-logo').click(function(){
		$('.upload-img').trigger('click');
	});
	$( ".upload-img" ).change(function( event ) {
		var reader = new FileReader();
	    reader.onload = function(e){
	      	$( "div.contentImage" ).empty();
	      	$( "div.contentImage" ).append( "<img class=\"img-logo\" src=\"" + e.target.result + "\"/>" );
	      	$('.img-logo').click(function(){
				$('.upload-img').trigger('click');
			});
	    };
	    reader.readAsDataURL(event.target.files[0]);
	});


	$('.img-avatar').click(function(){
		$('.upload-avartar').trigger('click');
	});
	$( ".upload-avartar" ).change(function( event ) {
		var reader = new FileReader();
	    reader.onload = function(e){
	      	$( "div.showImagesAvatar" ).empty();
	      	$( "div.showImagesAvatar" ).append( "<img class=\"img-content-avatar\" src=\"" + e.target.result + "\"/>" );
	      	$('.img-avatar').click(function(){
				$('.upload-avartar').trigger('click');
			});
	    };
	    reader.readAsDataURL(event.target.files[0]);
	});


	// $('#birthday').datepicker();

	// $("input").focus(function(){
	// 	$(this).parent().css({"border-color":"#f94876", "box-shadow":"1px 1px 10px #f94876"});
	// }).focusout(function(){
	// 	$(this).parent().css({"border-color":"#8c8c8c", "box-shadow":"none"});
	// });

	// $(".chop-create-card-button").click(function(e){
	// 	e.preventDefault();
	// 	if($('.chop-number input').val() != "" && $('chop-value-pay input').val() != "" && $('.chop-rate input').val() != "" ){
	// 		$(".quantum-chops .table").append("<tr><td>" + $('.chop-number input').val() + "</td><td>" + $('.chop-value-pay input').val() + "</td><td>" + $('.chop-rate input').val() + "%</td><td><a href='#'><i class='fa fa-pencil'></i></a><a href='#'><i class='fa fa-trash'></i></a></td></tr>");
	// 	}
	// });

	// $(".chop-number option").onChange(function(){
	// 	var numbTick = $(this).val();
	// 	// alert(numbTick);
	// 	// console.log(numbTick);
	// 	if(numbTick > 0){
	// 		for(var i = 1; i <= numbTick; i++){
	// 			$(".tick-"+i).html("<i class='fa fa-star fa-3x'></i>");
	// 		}
	// 		for(var j = parseInt(numbTick)+1; j <= 15; j++){
	// 			$(".demo-back-chops-card span.tick-"+j).html("");
	// 			// console.log($(".tick-"+j).attr("class"));
	// 		}
	// 	} else {
	// 		for(var i = 1; i <= 15; i++){
	// 			$(".demo-back-chops-card span.tick-"+i).html("");
	// 		}
	// 	}
	// });




	$(".type-chops").click(function(e){
		e.preventDefault();
		$("#level").css("display", "none");
		$("#chops").css("display", "block");

		$("#content-level").css("display", "none");
		$("#content-chops").css("display", "block");

		$('.type-chops span').addClass("current1");
		$('.type-levels span').removeClass("current1");

		$(".type-levels ul").hide();
		$(".type-levels-option").hide();
	});

	$(".type-levels").click(function(e){
		$(".type-levels-option").show();
		e.preventDefault();
		$("#level").css("display", "block");
		$("#chops").css("display", "none");


		$("#content-level").css("display", "block");
		$("#content-chops").css("display", "none");

		$('.type-levels span').addClass("current1");
		$('.type-chops span').removeClass("current1");
		$(".type-levels ul").show();


	});

	$(".type-levels-1").click(function(e){
		e.preventDefault();
		$(".typel-level-option-1").show();
		$(".typel-level-option-2").hide();
		$(".typel-level-option-3").hide();
		$( ".type-levels-1 span" ).addClass("current1");
		$( ".type-levels-2 span" ).removeClass("current1");
		$( ".type-levels-3 span" ).removeClass("current1");

	});

	$(".type-levels-2").click(function(e){
		e.preventDefault();
		$(".typel-level-option-1").hide();
		$(".typel-level-option-2").show();
		$(".typel-level-option-3").hide();
		$( ".type-levels-2 span" ).addClass("current1");
		$( ".type-levels-3 span" ).removeClass("current1");
		$( ".type-levels-1 span" ).removeClass("current1");

	});

	$(".type-levels-3").click(function(e){
		e.preventDefault();
		$(".typel-level-option-1").hide();
		$(".typel-level-option-2").hide();
		$(".typel-level-option-3").show();
		$( ".type-levels-3 span" ).addClass("current1");
		$( ".type-levels-2 span" ).removeClass("current1");
		$( ".type-levels-1 span" ).removeClass("current1");

	});

	//Chops option

	$(".select-chop-option-1").click(function(e){
		e.preventDefault();
		$(".chops-option-gift-1").show();
		$(".chops-option-gift-2").hide();


		$( ".select-chop-option-1 span" ).addClass("current1");
		$( ".select-chop-option-2 span" ).removeClass("current1");


	});

	$(".select-chop-option-2").click(function(e){
		e.preventDefault();
		$(".chops-option-gift-2").show();
		$(".chops-option-gift-1").hide();

		// $(".typel-level-option-2").hide();
		// $(".typel-level-option-3").hide();
		$( ".select-chop-option-1 span" ).removeClass("current1");
		$( ".select-chop-option-2 span" ).addClass("current1");
		// $( ".type-levels-3 span" ).removeClass("current1");

	});


	// var right = $(".right-section").height();
	// var left = $(".left-section").height();
	// if(left>right)
	// {
	//     $(".right-section").height(left);
	// }
	// else
	// {
	//     $(".left-section").height(right);
	// }

	// $("#type-level-1").click(function(e){
	// 	e.preventDefault();
	// 	$(".point-of-level .level-1").css("display", "block");
	// 	$("#type-level-1 span").addClass("current1");
	// 	$(".point-of-level .level-2").css("display", "none");
	// 	$("#type-level-2 span").removeClass("current1");
	// 	$(".point-of-level .level-3").css("display", "none");
	// 	$("#type-level-3 span").removeClass("current1");
	// });
	// $("#type-level-2").click(function(e){
	// 	e.preventDefault();
	// 	$(".point-of-level .level-1").css("display", "none");
	// 	$("#type-level-1 span").removeClass("current1");
	// 	$(".point-of-level .level-2").css("display", "block");
	// 	$("#type-level-2 span").addClass("current1");
	// 	$(".point-of-level .level-3").css("display", "none");
	// 	$("#type-level-3 span").removeClass("current1");
	// });
	// $("#type-level-3").click(function(e){
	// 	e.preventDefault();
	// 	$(".point-of-level .level-1").css("display", "none");
	// 	$("#type-level-1 span").removeClass("current1");
	// 	$(".point-of-level .level-2").css("display", "none");
	// 	$("#type-level-2 span").removeClass("current1");
	// 	$(".point-of-level .level-3").css("display", "block");
	// 	$("#type-level-3 span").addClass("current1");
	// });

	var shopUsername = "<td><input type='text' name='shopUser' id='shopUser' class='form-control' placeholder='Nhập tên tài khoản cho shop'></td>";
	var passwordShopUser = "<td><input type='text' name='passwordShopUser' id='passwordShopUser' class='form-control' placeholder='Nhập mật khẩu'></td>";
	var actionAccountShop = "<td><center><i class='fa fa-pencil gray'></i></a><i class='fa fa-trash pink'></i></center></td>";

	$("#button-create-store-address").click(function(e){
		e.preventDefault();

		var getNameShop = $('#name-shop').val();
		var getAddressShop = $('#address-shop').val();

		if( getNameShop && getAddressShop != ""){
			$(".create-shop-address .table").append("<tr><td>" + getNameShop + "</td><td>" + getAddressShop + "</td><td><center><i class='fa fa-pencil gray'></i></a><i class='fa fa-trash pink'></i></center></td></tr>");
			$(".create-shop-account .table").append("<tr><td>" + getNameShop + "</td>" + shopUsername + passwordShopUser + actionAccountShop + "	</tr>");
		} else {
			BootstrapDialog.alert('I want banana!');
		}
	});

	//Show Packages
	$('#show-packages').click(function(e) {
		e.preventDefault();
		$('.table-packages').slideToggle( "slow" );

	});

	$('#show-packages-more').click(function(e) {
		e.preventDefault();
		if($('.table-packages').css('display') == 'none')
		{
			$('.table-packages').show( "slow" );
		}
	});

	$('#content-message').keyup(function () {
    	$('.text-messages').text($(this).val());
    });

	$('#titleIncentives').keyup(function () {
    	$('.title-demo-incentives, .title-demo-incentives-2').text($(this).val());
    });

	$('#contentIncentives').keyup(function () {
    	$('.content-demo-incentives').text($(this).val());
    });


	//Add star to Card

	$('.choice-stick').on('change', function(e) {
		e.preventDefault();
		var numbTick = $(this).val();
		if(numbTick > 0) {

			for(var i = 1; i <= numbTick; i++){
				$(".tick-"+i).html("<i class='fa fa-star fa-2x'></i>");
			}

			for(var j = parseInt(numbTick)+1; j <= 15; j++){
				$(".demo-back-chops-card span.tick-"+j).html("");
			}

		} else {
			for(var i = 1; i <= 15; i++){
				$(".demo-back-chops-card span.tick-"+i).html("");
			}
		}
		
	});


	// Counter input

	$('#titleIncentives').keyup(function () {
	    var left = 60 - $(this).val().length;
	    if ( left <= 0 ) {
	    	alert('Tên chương trình quá dài');
	    };
	    $('#counter-title').text(left + '/60');
	});

	$('#contentIncentives').keyup(function () {
	    var left = 140 - $(this).val().length;
	    if ( left <= 0 ) {
	    	alert('Nội dung chương trình quá dài');
	    };
	    $('#counter-content').text(left + '/140');
	});



	//Check value id-account
	$('#id-account').keyup(function () {
	    var checkValueSearchId = $(this).val();
	    if (checkValueSearchId == "") {
	    	$('.box-trackby-lv').hide(500, 'swing');
	    } else {
	    	$('.box-trackby-lv').show(500, 'swing');
	    }
	});



	//Show checked select user
	$('.box-trackby-lv').click(function() {
		$('.box-trackby-lv').toggleClass('border-color-pink');
		$("#show-checked-user").toggleClass('checked-user');
		$('.button-add-point-track-by-id').toggleClass('show-box-add-point');
	});



	// <script type="text/javascript">
 //            $(document).ready(function(){
 //            $('[data-toggle="popover"]').popover();   
 //            });
 //        </script>

});
