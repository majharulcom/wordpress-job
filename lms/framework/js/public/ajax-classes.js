jQuery(document).ready(function($){
	
	$( 'body' ).delegate( '.class-type', 'click', function(){	
			
		$('a.class-type').removeClass('active');
		$(this).addClass('active');
		
		var postid = $(this).attr('data-postid'),
			view_type = $('#dt-class-datas').attr('data-view_type'),
			class_type = $(this).attr('data-class_type'),
			class_item_type = $('#dt-class-datas').attr('data-class_item_type'),
			offset = $('#dt-class-datas').attr('data-offset'),
			curr_page = $('#dt-class-datas').attr('data-curr_page');
			
		var postlayout = $('.dt-sc-classes-list-shortcode').attr('data-postlayout'),
			postperpage = $('.dt-sc-classes-list-shortcode').attr('data-postperpage');
			
		if(class_item_type == 'popular') {
			
			$('.class-item-type').removeClass('active');
			$('.class-item-type.class-item-type-all').addClass('active');
			
		}

		loadClasses(postid, class_type, class_item_type, view_type, offset, curr_page, postlayout, postperpage);
			
		return false;
		
	});
	
	$( 'body' ).delegate( '.class-item-type', 'click', function(){	
			
		$('a.class-item-type').removeClass('active');
		$(this).addClass('active');
		
		var postid = $(this).attr('data-postid'),
			view_type = $('#dt-class-datas').attr('data-view_type'),
			class_type = $('#dt-class-datas').attr('data-class_type'),
			class_item_type = $(this).attr('data-class_item_type'),
			offset = $('#dt-class-datas').attr('data-offset'),
			curr_page = $('#dt-class-datas').attr('data-curr_page');

		var postlayout = $('.dt-sc-classes-list-shortcode').attr('data-postlayout'),
			postperpage = $('.dt-sc-classes-list-shortcode').attr('data-postperpage');

		if(class_item_type == 'popular') {
			
			$('.class-type').removeClass('active');
			$('.class-type.class-type-all').addClass('active');
			
		}

		loadClasses(postid, class_type, class_item_type, view_type, offset, curr_page, postlayout, postperpage);
			
		return false;
		
	});
	
	$( 'body' ).delegate( '.class-layout', 'click', function(){	
			
		$('a.class-layout').removeClass('active');
		$(this).addClass('active');
		
		var postid = $(this).attr('data-postid'),
			view_type = $(this).attr('data-view_type'),
			class_type = $('#dt-class-datas').attr('data-class_type'),
			class_item_type = $('#dt-class-datas').attr('data-class_item_type'),
			offset = $('#dt-class-datas').attr('data-offset'),
			curr_page = $('#dt-class-datas').attr('data-curr_page');
			
		var postlayout = $('.dt-sc-classes-list-shortcode').attr('data-postlayout'),
			postperpage = $('.dt-sc-classes-list-shortcode').attr('data-postperpage');

		loadClasses(postid, class_type, class_item_type, view_type, offset, curr_page, postlayout, postperpage);
			
		return false;
		
	});
	
	$( 'body' ).delegate( '#ajax_tpl_class_content .pagination a', 'click', function(){	
			
		var postid = $('#dt-class-datas').attr('data-postid'),
			view_type = $('#dt-class-datas').attr('data-view_type'),
			class_type = $('#dt-class-datas').attr('data-class_type'),
			class_item_type = $('#dt-class-datas').attr('data-class_item_type'),
			postperpage = $('#dt-class-datas').attr('data-postperpage'),
			curr_page = $(this).text();
			
		var postlayout = $('.dt-sc-classes-list-shortcode').attr('data-postlayout'),
			postperpage = $('.dt-sc-classes-list-shortcode').attr('data-postperpage');
			
		if($(this).hasClass('dt-prev')) {
			curr_page = parseInt($(this).attr('cpage'))-1;
		} else if($(this).hasClass('dt-next')) {
			curr_page = parseInt($(this).attr('cpage'))+1;
		}
			
		if(curr_page == 1) var offset = 0;
		else if(curr_page > 1) var offset = ((curr_page-1)*postperpage);

		loadClasses(postid, class_type, class_item_type, view_type, offset, curr_page, postlayout, postperpage);
			
		return false;
			
	});
	  
	function loadClasses(postid, class_type, class_item_type, view_type, offset, curr_page, postlayout, postperpage) {
		
		if ($('body').hasClass('post-type-archive-dt_classes')) {
			var classes_page_type = 'archive';
		} else if ($('body').hasClass('page-template page-template-tpl-classes-php')) {
			var classes_page_type = 'template';
		} else if($('.dt-sc-classes-list-shortcode').length) {
			var classes_page_type = 'shortcode';
		} else {
			var classes_page_type = '';
		}

		$.ajax({
			type: "POST",
			url: mytheme_urls.ajaxurl,
			data:
			{
				action : 'dttheme_show_class_contents',
				postid : postid,
				class_type : class_type,
				class_item_type : class_item_type,
				view_type : view_type,
				offset : offset,
				curr_page : curr_page,
				classes_page_type : classes_page_type,
				postlayout : postlayout,
				postperpage : postperpage,
				lang: mytheme_urls.lang
			},
			beforeSend: function(){
				$('#dt-sc-ajax-load-image').show();
				$('#ajax_tpl_class_content').addClass('dt-sc-ajax-loader');
			},
			error: function (xhr, status, error) {
				$('#ajax_tpl_class_content').html('Something went wrong!');
			},
			success: function (response) {
				$('#ajax_tpl_class_content').html(response);
			},
			complete: function(){
				$('#dt-sc-ajax-load-image').hide();
				$('#ajax_tpl_class_content').removeClass('dt-sc-ajax-loader');
			} 
		});
		
	}
	
	$( 'body' ).delegate( '.dt-sc-class-viewall-courses', 'click', function(){	
			
		$(this).parents('.dt-sc-custom-class-type').find('.dt-sc-class-courses-list').addClass('dt-sc-full-height');
			
		return false;
		
	});
  
});

jQuery(window).load(function() {

	jQuery( ".class-layout.class-grid-type" ).trigger( "click" );
	
});