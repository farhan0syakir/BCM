
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1427442397577579',
          xfbml      : true,
          version    : 'v2.3'
        });
      };
	  
	  FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
		console.log('Logged in.');
	  }
	  else {
		FB.login();
	  }
	});
	
	FB.login(function(){
    FB.api('/me/feed', 'post', {message: 'Hello, world!'});
    }, {scope: 'publish_actions'});
	  
	  FB.ui({
     method: 'share_open_graph',
     action_type: 'og.likes',
     action_properties: JSON.stringify({
      object:'https://developers.facebook.com/docs/',
     })
    }, function(response){});
	
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

	