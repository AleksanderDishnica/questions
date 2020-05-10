$(function() {
	let alertName = 0;
	let alertEmail = 0;

	$('#start').click(function(e){
		$('#registerModal').modal({
			'backdrop':'static',
		});
	});

	$('#save').click(function(e){
		let name = $('#name').val().trim();
		let email = $('#email').val().trim();

		if(name && email){
			$.ajax({
				method:'POST',
				url:'ajax/register.php',
				data:{
					name:name,
					email:email,
				},
				success:function(data){
					// Empty all alerts
					$('.alerts').empty();

					// Create the new modal
					$('#question1Modal').modal({
						'backdrop':'static',
					});
				}
			});
		}else{
			e.preventDefault();
			e.stopPropagation();

			if(alertName == 0 && (name == null || name == '') && name.length === 0){
				$('.alerts').append('<p class="text-danger" id="alertName">Name cannot be empty!</p>');
				alertName++;
			}
			else if(alertName == 1 && (name != null || name != '') && name.length !== 0){
				$('#alertName').remove();
				alertName--;
			}else{
			}

			if(alertEmail == 0 && (email == null || email == '') && email.length === 0){
				$('.alerts').append('<p class="text-danger" id="alertEmail">Email cannot be empty!</p>');
				alertEmail++;
			}
			else if(alertEmail == 1 && (email != null || email != '') && email.length !== 0){
				$('#alertEmail').remove();
				alertEmail--;
			}else{
			}
		}
	});

	$('#registerModal .close, #registerModal #close').click(function(){
		alertEmail = 0;
		alertName = 0;
		
		$('#alertName').remove();
		$('#alertEmail').remove();
	});

	$('#save1').click(function(e){
		let selection = $("#question1Modal input:checked").map(function() {
							return this.value;
						}).get().join(",");

		$.ajax({
			method:'POST',
			url:'ajax/answer.php',
			data:{
				selected1:selection,
			},
			success:function(data){
				// Create the new modal
				$('#question2Modal').modal({
					'backdrop':'static',
				});
			}
		});
	});

	$('#save2').click(function(e){
		let selection = $("#question2Modal input:checked").map(function() {
							return this.value;
						}).get().join(",");

		let allCookies = [
			getCookie('cookie_name'),
			getCookie('cookie_email'),
			getCookie('cookie_selected1'),
			getCookie('cookie_selected2'),
		];



		$.ajax({
			method:'POST',
			url:'ajax/answer.php',
			data:{
				selected2:selection,
			},
			success:function(data){
				$.ajax({
					method:'POST',
					data:{
						allCookies:allCookies,
					},
					url:'ajax/dbweb.php',
					success:function(){
						console.log(allCookies);
					}
				});
			}
		});
	});

	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
});