jQuery(document).ready(function($) {
	
	alert('i am ready');
	
	var $container = $('#container');
				  
	// isotope -------------------------- 
				
	$('.shuffle-button').on( 'click', function() {
		alert('shuffle');
		$container.isotope('shuffle');
	});
					
	/* all button clicks - used in groups - todo - use for everything */
	$('.btn').click(function(e){
		e.preventDefault();
		//var active = $('.set-interaction-type[class*="active"]').val();
		var clicked = $(this).val();
		setRunSiteSetting(clicked);
	});

	/* button states ----------------------------------------------------------------------- */
	
	window.setActiveButtonState = function(activeButtonRef){
		var buttonClassName = '.' + activeButtonRef + '-button';
		$(buttonClassName).addClass( 'active' );
	}
	
	window.setRunSiteSetting = function(clicked){
		
		$body = $('body');
		if ( $body.hasClass('view-mode--expanded') ){
			expander.close();
		}
		
		// sizes ---------------------------------------------------------- //
		if(clicked == 'default'  || clicked == 'thumbnail' || clicked == 'small' || clicked == 'medium' || clicked == 'large'){
			$('body').removeClass('landscape-thumbnail').removeClass('landscape-small').removeClass('landscape-medium').removeClass('landscape-large').addClass( 'landscape-' + clicked );
			$container.isotope('layout');
		}
		
		// shape ---------------------------------------------------------- //
		if(clicked == 'square' || clicked == 'rectangle' || clicked == 'circle' || clicked == 'various' ){
			//
		}
		
	}
		
	$container.isotope({
		itemSelector: '.item',
		layoutMode: 'packery',
		packery: {
			isFitWidth: true,
			gutter:0
		},
	});
	
	
	
	
	
	
	
	// ---------------------------------------------------------
	
	classie.addClass( document.body, 'loaded' );
			classie.removeClass( document.body, 'grid' );

            
		
		
	
	
	
	var $output = $('#output');

  // filter with selects and checkboxes
  var $selects = $('#form-ui select');
  var $checkboxes = $('#form-ui input');
  var $lists = $('#form-ui select');
  
  $selects.add( $checkboxes ).change( function() {
    // map input values to an array
    var exclusives = [];
    var inclusives = [];
    // exclusive filters from selects
    $selects.each( function( i, elem ) {
      if ( elem.value ) {
        exclusives.push( elem.value );
      }
    });
    // inclusive filters from checkboxes
    $checkboxes.each( function( i, elem ) {
      // if checkbox, use value if checked
      if ( elem.checked ) {
        inclusives.push( elem.value );
      }
    });

    // combine exclusive and inclusive filters

    // first combine exclusives
    exclusives = exclusives.join('');
    
    var filterValue;
    if ( inclusives.length ) {
      // map inclusives with exclusives for
      filterValue = $.map( inclusives, function( value ) {
        return value + exclusives;
      });
      filterValue = filterValue.join(', ');
    } else {
      filterValue = exclusives;
    }

    $output.text( filterValue );
    $container.isotope({ filter: filterValue })
  });
  
  var $selectsA = $('#form-uiA select');
  var $checkboxesA = $('#form-uiA input');
  $selectsA.add( $checkboxesA ).change( function() {
    // map input values to an array
    var exclusives = [];
    var inclusives = [];
    // exclusive filters from selects
    $selectsA.each( function( i, elem ) {
      if ( elem.value ) {
        exclusives.push( elem.value );
      }
    });
    // inclusive filters from checkboxes
    $checkboxesA.each( function( i, elem ) {
      // if checkbox, use value if checked
      if ( elem.checked ) {
        inclusives.push( elem.value );
      }
    });

    // combine exclusive and inclusive filters

    // first combine exclusives
    exclusives = exclusives.join('');
    
    var filterValue;
    if ( inclusives.length ) {
      // map inclusives with exclusives for
      filterValue = $.map( inclusives, function( value ) {
        return value + exclusives;
      });
      filterValue = filterValue.join(', ');
    } else {
      filterValue = exclusives;
    }

    $output.text( filterValue );
    $container.isotope({ filter: filterValue })
  });
  
  
  

	//Add the class selected to the item that is clicked, and remove from the others
	var $optionSets = $('#cat_filters'),
	$optionLinks = $optionSets.find('a');
 
	$optionLinks.click(function(){
	var $this = $(this);
	// don't proceed if already selected
	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('#cat_filters');
	$optionSets.find('.selected').removeClass('selected');
	$this.addClass('selected');
 
	//When an item is clicked, sort the items.
	 var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });
 
	return false;
	});

  	// filter items on button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  
	 // gnMenu.prototype._closeMenu();
	 // gnMenu._closeMenu();
	 // _closeMenu();
	  
	  alert('1');
	  
	  $container.isotope({ filter: filterValue });
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

});
