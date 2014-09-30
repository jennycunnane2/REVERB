$(document).ready(function() {

	textExpand()
	screenResizefix() 
	fixscreensize();
	scrollfix();
	
	$(function() {
        $('nav a').bind('click',function(event){
            var $anchor = $(this);
            
			hideall();
			
			if($($anchor).parent('li').parent('ul').hasClass('main')){
				$('nav a').removeClass('activelink');
				$($anchor).addClass('activelink');
				
				$('nav li').removeClass('active');
				$($anchor).parent('li').addClass('active');
			}
			if($($anchor).parent('li').parent('ul').hasClass('related')){
				$('nav a').removeClass('activelink');
				$('nav a.projects').addClass('activelink');
				$('nav li').removeClass('active');
				$('nav li.projects').addClass('active');
			}
			


            $('html, body').addClass('scroll').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500,'easeInOutExpo',function(){
				drawlines($anchor)
				$('html, body').removeClass('scroll')
			});
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);
            */
            event.preventDefault();
			
        });
    });
	
});

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}


function textExpand()
{
	
	$('#expandtext .more').bind('click',function(event){
		$('#expandtext .normal').stop(true,false).hide();
		$('#expandtext .expanded').fadeIn(1000)
	});
	$('#expandtext .less').bind('click',function(event){
		$('#expandtext .expanded').stop(true,false).hide();
		$('#expandtext .normal').fadeIn(1000)
	});
	
}



function screenResizefix()
{
	$(window).resize(function() {
  		fixscreensize();
	});
}

function fixscreensize()
{
	$height = $(window).height()
	
	
	$('article').each( function(index, Element) {
		$id = $(Element).attr('id');
		$screenhight = $(Element).outerHeight();
		//alert($id +' ' +$(Element).outerHeight())
		
		if(($height-150) > $screenhight)
		{
			$('#'+$id).height($height-300);
		}
	})
	
}
function BuildSlideShow($id)
{
	 $($id+" ul")
    .cycle({
        prev:   $id+' .controls .prev', 
        next:   $id+' .controls .next',
        timeout: false,
        pager:   $id+' .stat',
        pagerAnchorBuilder: pagerFactory,
        before: function(Ec, En, o, f) 
        {			
            var classTarget = $(Ec);
            var nextClassTarget = $(En);
            
            classTarget = classTarget.context.attributes.rel.value;
            nextClassTarget = nextClassTarget.context.attributes.rel.value;
            
            $($id+' .controls .' + classTarget).removeClass('selected');
            $($id+' .controls .' + nextClassTarget).addClass('selected');
        }
    });
	
	function pagerFactory(idx, slide) 
    {
        var selected = (idx == 0 ? 'selected' : null);
        return '<span class=' + parseInt(idx+1)+'>'+parseInt(idx+1)+'/4</span>';
    };
}

function drawlines($anchor)
{
	if($($anchor).parent('li').hasClass('projects active') || $($anchor).parent('li').parent('ul').hasClass('related'))
	{
		$('.projects.active').stop(true,false).animate({ 'padding-bottom': '152px'},700,'')
	}
	if($($anchor).parent('li').hasClass('getintouch active'))
	{
		$('.getintouch.active').stop(true,false).animate({ 'padding-bottom': '400px'},500,'',function(){
			$('#masthead .strap').show().animate({width:'278px'},500)	
		})
		
	}
}

function scrollfix()
{
	$(window).scroll(function () { 
		//$('html, body').hasClass('scroll')
		if(!$('html, body *').is(':animated'))
      	{
			//alert('Not')
			hideall()
			$('nav a').removeClass('activelink');
			$('nav li').removeClass('active');
		}

    });
}

function hideall()
{
	if($('#masthead .strap').width()>0)
	{
		$('#masthead .strap').stop(true,false).animate({width:'0px'},500,'',function(){
			$('.main li').animate({ 'padding-bottom': '0px'},500,'')	
		})
	}
	else 
	{
		$('.main li').stop(true,false).animate({ 'padding-bottom': '0px'},500,'')
	}
	
}