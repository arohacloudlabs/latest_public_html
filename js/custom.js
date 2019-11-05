var emailstr=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
$(function () {    
    $('.subaction').click(function(){
        if(univfields()==0)
        $(this).closest('form').submit();
    });
});
$(document).on('change','.formnumeric',function(e){
    this.value = this.value.replace(/[^0-9.]/g,'');
});

$(document).on('keyup change','.error',function(e){
    checkerrors(this);
});
function univfields(){
var resp=0;
    $('form .required').each(function(){
        var fname = $(this).attr('id');
        var emsg = $(this).attr('title');
        var elename=$(this).attr('name');
       if(( $(this).val()=='') || ($(this).attr('type')=='checkbox' && $('input[name="'+elename+'"]:checked').length==0) || 
        ($(this).attr('type')=='radio' && !$('input[name="'+elename+'"]').is(':checked')) ||                
        ($(this).attr('type')=='email' &&($(this).val()=='' || !emailstr.test($(this).val()))) || 
        ($(this).hasClass('validemail') &&($(this).val()=='' || !emailstr.test($(this).val())))){
            $(this).addClass('error visible');
            if($(this).parent().find('label#'+fname+'-error').length==0)
            $(this).after('<label id="'+fname+'-error" class="error" for="'+fname+'"> '+(emsg)+' </label>');
            else
            $('label#'+fname+'-error').html(emsg).show();
            resp++;
        }else{
        $(this).parent().find('label#'+fname+'-error').hide();
        $(this).removeClass('error visible');
        }
        

       

    
    });
    $('form .visible:eq(0)').focus();
    return resp;
}


$(".prod-bord .checking").click (function(){
    var ename = $(this).attr('id');
    var test = $('.prod-bord:checkbox:checked').length;
    if (test>0){
        
        $(this).next('label#'+ename+'-error').hide();
        $('.prod-bord input').removeClass('error visible');
    }
    else{
        $('.checking').addClass('error visible');
    }
});

function checkerrors(ele){
    var fname = $(ele).attr('id');
    var elename=$(ele).attr('name');
   if( ($(ele).attr('type')=='email'&& ($(ele).val()=='' || !emailstr.test($(ele).val()))) || $(ele).val()==''||
     (($(ele).attr('type')=='radio' && !$('input[name="'+elename+'"]').is(':checked')||
      $(ele).attr('type')=='checkbox')&& $('input[name="'+elename+'"]:checked').length==0) || 
     ($(ele).hasClass('validemail') && ($(ele).val()=='' || !emailstr.test($(ele).val())))){       
        $(ele).addClass('visible');
        $(ele).parent().find('label#'+fname+'-error').show();
    }else{
        $(ele).removeClass('visible');
        $(ele).parent().find('label#'+fname+'-error').hide();
    }
}


/*Owl carousel*/
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

/*
var options = {
    placement: function (context, source) {
        var position = $(source).position();

        if (position.left > 515) {
            return "top";
        }

        if (position.left < 515) {
            return "top";
        }

        if (position.top < 110){
            return "top";
        }

        return "top";
    }
    , trigger: "click"
};
//$(".dismiss-pop").popover(options);*/

$(".dismiss-pop").popover({ trigger: "manual" , html: true, animation:true})
.on("mouseenter", function () {
    var _this = this;
    $(this).popover("show");
    $(".popover").on("mouseleave", function () {
        $(_this).popover('hide');
    });
}).on("mouseleave", function () {
    var _this = this;
    setTimeout(function () {
        if (!$(".popover:hover").length) {
            $(_this).popover("hide");
        }
    }, 300);
});


$(window).ready(function() {
    if ($(window).width() < 768) {
        /*var is_touch_device = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch;
        $(".dismiss-pop").popover({
            placement: 'bottom',
            trigger: is_touch_device ? "click" : "hover"
        });*/
        $('.dismiss-pop').popover('disable').popover("hide");
        //$(".dismiss-pop").popover({ trigger: "click" , html: true, animation:true, placement: bottom});
    }
  });


//$('.dismiss-pop').popover({ trigger: "hover" });

