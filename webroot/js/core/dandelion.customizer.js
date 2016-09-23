/*
 * Dandelion Admin v1.0 - Customizer JS
 *
 * This file is part of Dandelion Admin, an Admin template build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * March 25, 2012
 *
 * 'Highly configurable' mutable plugin boilerplate
 * Author: @markdalgleish
 * Further changes, comments: @addyosmani
 * Licensed under the MIT license
 *
 */

(function($) {
	$(document).ready(function(e) {
		var baseUrl = '/dandelion', 
			backgroundPatterns = {
			blueprint: {
				name: 'Blueprint', 
				file: 'img/bg/blueprint.png'
			}, 
			bricks: {
				name: 'Bricks', 
				file: 'img/bg/bricks.png'
			}, 
			carbon: {
				name: 'Carbon', 
				file: 'img/bg/carbon.png'
			}, 
			circuit: {
				name: 'Circuit', 
				file: 'img/bg/circuit.png'
			}, 
			holes: {
				name: 'Holes', 
				file: 'img/bg/holes.png'
			}, 
			mozaic: {
				name: 'Mozaic', 
				file: 'img/bg/mozaic.png'
			}, 
			roof: {
				name: 'Roof', 
				file: 'img/bg/roof.png'
			}, 
			stripes: {
				name: 'Stripes', 
				file: 'img/bg/stripes.png'
			}
		}, headerPatterns = {
			carbon: {
				name: 'Carbon', 
				file: 'img/headers/carbon.png'
			}, 
			linen: {
				name: 'Linen', 
				file: 'img/headers/linen.png'
			}, 
			leather: {
				name: 'Leather', 
				file: 'img/headers/leather.png'
			}, 
			wood: {
				name: 'Wood', 
				file: 'img/headers/wood.png'
			}
		};
		
		$select = $(document.createElement('select')).attr('id', 'da-body-pat').bind('change', function(e) {
			$('body').css('background-image', 'url(' + backgroundPatterns[$(this).val()].file + ')');
			e.preventDefault();
		});
		
		for(var i in backgroundPatterns) {
			$option = $(document.createElement('option'));
			$option.val(i).text(backgroundPatterns[i].name);
			$option.appendTo($select);
		}
			
		$("#da-customizer #da-customizer-body-bg").append($select);
		
		$select = $(document.createElement('select')).attr('id', 'da-header-pat').bind('change', function(e) {
			$('div#da-header #da-header-top').css('background-image', 'url(' + headerPatterns[$(this).val()].file + ')');
			e.preventDefault();
		});
		
		for(var i in headerPatterns) {
			$option = $(document.createElement('option'));
			$option.val(i).text(headerPatterns[i].name);
			$option.appendTo($select);
		}
			
		$("#da-customizer #da-customizer-header-bg").append($select);
		
		var content = $("#da-customizer #da-customizer-content");
		var autoHeight = content.css('height', 'auto').height();
		content.css('height', '');
		
		$("#da-customizer #da-customizer-pulldown").bind('click', function(e) {
			content = $(this).prev('#da-customizer-content');
			if(!content.hasClass('visible')) {
				content.animate({height: autoHeight}, function() {
					content.addClass('visible');
				});
			} else {
				content.animate({height: 0}, function() {
					content.removeClass('visible');
				});
			}
			e.preventDefault();
		});
		
		$("#da-customizer-fixed, #da-customizer-fluid").bind('change', function() {
			$fixed = $("#da-customizer-fixed").is(':checked');
			if($fixed) {
				$('body #da-wrapper').removeClass('fluid').addClass('fixed');
			} else {
				$('body #da-wrapper').removeClass('fixed').addClass('fluid');
			}
			$(window).trigger('resize');
		}).trigger('change');
		
		function updateCSS() {
			var bg = backgroundPatterns[$('#da-body-pat').val()].file, 
				header = headerPatterns[$('#da-header-pat').val()].file;
				
			var css = '/* Paste the following code in /css/dandelion.theme.css */\n\nbody\n{\n\tbackground-image:url(../'+bg+');\n}\n\ndiv#da-header #da-header-top\n{\n\tbackground-image:url(../'+header+');\n}\n';
			$('#da-customizer-dialog textarea').val(css);
		}
		
		if($.fn.dialog) {
			$('<div id="da-customizer-dialog" class="no-padding"><textarea readonly="readonly" id="da-customizer-css"></textarea></div>').hide()
				.appendTo('body').dialog({modal: true, autoOpen: false, title: 'Get CSS Style', resizable: false, width: 450});
			$("#da-customizer-button button").bind('click', function(e) {
				updateCSS();
				$('#da-customizer-dialog').dialog('open');
				e.preventDefault();
			});
		}
	});
}) (jQuery);