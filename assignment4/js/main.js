// JavaScript Document

//Home Info Modules
		$('.link1').click(function (e){
			
			e.preventDefault();
			var module = e.target.title;
			
			$('#info1').fadeOut('fast', function(){
				
				$('#info1').load('modules.html #' + module, //This equals modules.html #content1/2
				
				function(){$('#info1').fadeIn('fast');}
				
				);
			
			});
			
		});
		
		$('.link2').click(function (e){
			
			e.preventDefault();
			var module = e.target.title;
			
			$('#info2').fadeOut('fast', function(){
				
				$('#info2').load('modules.html #' + module, //This equals modules.html #content1/2
				
				function(){$('#info2').fadeIn('fast');
				});
			
			});
			
		});

//About Page Blurbs-MY CUSTOM JS
$(document).ready(function(){
	//First, hide all blurbs
	$('#blurbs div').hide('fast');
	
	//On click
	$('#about a').click(function(e){
		
		e.preventDefault();
		
		//Hide previous blurb
		$('#blurbs div').slideUp('fast');
		
		//Show selected blurb
		var blurb = e.target.title;
		
		$('#' + blurb).slideDown('slow');
		
		//Change image
		var src = e.target.title;
		$('.chart').attr('src', 'img/' + src + '.png');
		$('.chart').fadeIn('fast');
		
	});
});

//Gallery Page Image Gallery
$(document).ready(function(){
	
	//Hides all albums
	$('#main div:not(:first)').hide();
	
	//Preps all album links
	$('#albums a').click(function(e){
		
		e.preventDefault();
		
		//Set status indication
		$('#albums a').removeClass('status');
		$(e.target).addClass('status');
		
		var album = e.target.href.split('#')[1];
		
		$('#main div').hide();
		$('#' + album).show();
		
		//Prep gallery
		//Apply status indication to first
		var firstPic = '#' + album + ' a:first';
		$('#main a').removeClass('status');
		$(firstPic).addClass('status');
		//Fade out picture and caption before change
		$('#pic, #caption').fadeOut('slow', function(e){
			
			//Change picture and caption
			$('#pic').attr('src', $(firstPic).attr('href'));
			//Change caption
			$('#caption').text($(firstPic).attr('title'));
			//Fade in
			$('#pic, #caption').fadeIn('fast');
			
		});
		
		
		
		
	});
	
	//Preps all gallery links
	$('#main a').click(function(e){
		
		e.preventDefault();
		
		//Set status indication
		$('#main a').removeClass('status');
		$(e.target).addClass('status');
		
		var caption = e.target.title;
		var src = e.target.href;
		
		//Fade out picture and caption before change
		$('#pic, #caption').fadeOut('slow', function(e){
			
			//Change picture and caption
			$('#pic').attr('src', src);
			$('#caption').text(caption);
			//Fade in
			$('#pic, #caption').fadeIn('fast');
			
		});
		
		});

});

//Reviewer Blurbs
$('#review a').click(function (e){
			
			e.preventDefault();
			var module = e.target.title;
			
			$('.mower').hide('fast');
			
			$('#dynamic').fadeOut('fast', function(){
				
				$('#dynamic').load('reviewers.html #' + module, //This equals each reviewer's review
				function(){$('#dynamic').fadeIn('slow');
				
				//$('#dynamic').appendTo('img');
				});
			
			});
			
		});

//jQuery Form Validation
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$(document).ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();

	// validate signup form on keyup and submit
	$("#commentForm").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
					},
		messages: {
			name: "Gnomeo/Juliet",
			email: "happycustomer@terra.org",
				}
		}
	});
});