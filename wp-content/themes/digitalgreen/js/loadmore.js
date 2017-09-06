 
	/*
	 * Load More
	 */
	
	function load_more_post(post_type, parent_div){
		$.ajax({

			url : loadmore_params.ajaxurl, // AJAX handler
			data : {
				'action': 'loadmore'+post_type, // the parameter for admin-ajax.php
				'query': loadmore_params.posts, // loop parameters passed by wp_localize_script()
				'page' : loadmore_params.current_page,
				'counter': parseInt(jQuery('.load-more-projects').attr('data-count'))  // current page
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('.load-more-projects').text('Loading...'); // some type of preloader
			},
			success : function( data ){
				if( data ) {
 
					$('.load-more-projects').text( 'More posts' );
					result = data.split("||");
					html_content = result[0];
					jQuery('.load-more-projects').attr('data-count', parseInt(result[1].trim()));
					$(parent_div).append(html_content);
		            $(".collapse").collapse('hide');
					loadmore_params.current_page++;
 
					if ( loadmore_params.current_page == loadmore_params.max_page ) 
						$('.load-more-projects').text('No More Post'); // if last page, HIDE the button
 
				} else {
					$('.load-more-projects').hide(); // if no data, HIDE the button as well
				}
			},
			error : function(response) {
				console.log(response);
			}
		});
		return false;
	}

	function toggleCollapse(){
            jQuery(this).collapse('toggle');
        }


    // size_li = jQuery("#case-studies-div > div").length;
    // x=3;
    // jQuery('#case-studies-div div.col-sm-4:lt('+x+')').show();



    // jQuery('#load-more').click(function (e) {
    // 	e.preventDefault();
    //     x= (x+3 <= size_li) ? x+3 : size_li;
    //     jQuery('#case-studies-div div.col-sm-4:lt('+x+')').show();
    //     jQuery('#case-studies-div div')
    //     if(x == size_li){
    //         $('#load-more').hide();
    //     }
        
    // });


    // jQuery('#case-studies-filter-field').change(function(e) {
    // 	e.preventDefault();
    // 	size_li = jQuery("#case-studies-div > div:visible").length;
    // 	x = 3;
    // 	jQuery('#case-studies-div div.col-sm-4:lt('+x+')').show();
    // });
 
	/*
	 * Filter
	 */
	// $('#misha_filters').submit(function(){
 
	// 	$.ajax({
	// 		url : misha_loadmore_params.ajaxurl,
	// 		data : $('#misha_filters').serialize(), // form data
	// 		dataType : 'json', // this data type allows us to receive objects from the server
	// 		type : 'POST',
	// 		beforeSend : function(xhr){
	// 			$('#misha_filters').find('button').text('Filtering...');
	// 		},
	// 		success:function(data){
 
	// 			// when filter applied:
	// 			// set the current page to 1
	// 			misha_loadmore_params.current_page = 1;
 
	// 			// set the new query parameters
	// 			misha_loadmore_params.posts = data.posts;
 
	// 			// set the new max page parameter
	// 			misha_loadmore_params.max_page = data.max_page;
 
	// 			// change the button label back
	// 			$('#misha_filters').find('button').text('Apply filter');
 
	// 			// insert the posts to the container
	// 			$('#misha_posts_wrap').html(data.content);
 
	// 			// hide load more button, if there are not enough posts for the second page
	// 			if ( data.max_page < 2 ) {
	// 				$('#misha_loadmore').hide();
	// 			} else {
	// 				$('#misha_loadmore').show();
	// 			}
	// 		}
	// 	});
 
	// 	// do not submit the form
	// 	return false;
 
	// });
 