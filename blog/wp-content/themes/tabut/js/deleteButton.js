jQuery( document ).ready(
	function ($){
		$( '.del-about' ).on(
			'click',
			function(){
				$( this ).closest( "#about-not" ).remove();
			}
		);
		$( '.del-services' ).on(
			'click',
			function(){
				$( this ).closest( "#services-not" ).remove();
			}
		);
		$( '.del-portfolio' ).on(
			'click',
			function(){
				$( this ).closest( "#portfolio-not" ).remove();
			}
		);
		$( '.del-contact' ).on(
			'click',
			function(){
				$( this ).closest( "#contact-not" ).remove();
			}
		);
	}
);
