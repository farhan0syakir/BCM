$( document ).ready(function() {
					//grabs the hash tag from the url
					var hash = window.location.hash;
					//checks whether or not the hash tag is set
					if (hash != "") {
					//removes all active classes from tabs
					$('#tabs div').each(function() {
					$(this).removeClass('active');
					});
					$('#myTabContent div').each(function() {
					  $(this).removeClass('in active');
					});
					//this will add the active class on the hashtagged value
					var link = "";
					$('#tabs div').each(function() {
					  link = $(this).find('a').attr('href');
					  if (link == hash) {
						$(this).addClass('active');
					  }
					});
					$('#myTabContent div').each(function() {

					  link = $(this).attr('id');
					  if ('#'+link == hash) {

						$(this).addClass('in active');
					  }
					});
					}
					});