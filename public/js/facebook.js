FB.init({ 
	appId:FACEBOOK_APPID, 
	cookie:true, 
	status:true,
	version: 'v2.7',
	xfbml:true , 
	oauth :true,
	frictionlessRequests : true
});

function facebook_login(isPopup) {
	 
	FB.login(function(response) {
		if (response.authResponse) {
			var url = '/me?fields=id,name,email,first_name,last_name,picture.type(large)';
			FB.api(url, function(response) {
				var userimage = response['picture']['data']['url'];
				var userimage = userimage.replace("&", "*");	
				if (typeof(response['email']) != "undefined") {
					$.ajax({
						type: "POST",
						url: ajax_url + "login/facebook_login",
						data: "UserFbID=" + response['id'] + "&UserEmail=" + response['email'] + "&UserFirstName=" + response['first_name'] + "&UserLastName=" + response['last_name'] + "&UserFile=" + userimage + "&csrf_test_name=" + token,
						dataType: "json",
						success: function(msg) {
							if(msg.response=='success') {
								window.location.href = msg.redirect;
							}
							else if(msg.response=='error'){
								if(msg.message=='deleted') {
									$('#facebook_check').show();
									$('#error_message').html('Account has been deleted.');
								}
								else {
									$('#facebook_check').show();
									$('#error_message').html('Please verify your email first.');
								}
							}
						}
					});
				}
			});
		} 
		else 
		{
			console.log('User cancelled login or did not fully authorize.');
		}
	}, {scope: 'email,public_profile'});
};
