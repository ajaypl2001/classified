jQuery(document).ready(function() 
{

	jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Letters only please"); 
	jQuery.validator.addMethod("number", function(value, element) {
  return this.optional(element) || /^[0-9]+$/i.test(value);
}, "numeric value only only please"); 
	$("#local").validate({
		rules:{
			category:{required:true},
			subcategory:{required:true},
			company_name:{required:true},
			job_type:{required:true},
			company_address:{required:true},
			proprty_address:{required:true},
			proprty_size:{required:true},
			bedrooms:{required:true},
			bathrooms:{required:true},
			currency:{required:true},
			price:{required:true, number: true},
			phone:{number: true},
			email:{email:true},
			userfile:{required:true},
			add_title:{required:true, lettersonly: true},
			add_description:{required:true},
			country:{required:true},
			city_state:{required:true},
			city:{required:true}
			
		},
		messages:{
			category:{required:"Please select category name."},
			subcategory:{required:"Please select subcategory."},
			company_name:{required:"Please enter your company name."},
			job_type:{required:"Please select job type."},
			company_address:{required:"Please enter your company address."},
			proprty_address:{required:"Please enter your property address."},
			proprty_size:{required:"Please enter your property Size."},
			bedrooms:{required:"Please select bedrooms."},
			bathrooms:{required:"Please select bathrooms."},
			currency:{required:"Please select currency."},
			price:{required:"Please enter price.",number:"Please enter number only."},
			phone:{number:"Please enter number only."},
			email:{email:"Please enter a valid email address."},
			userfile:{required:"Please select a Image."},
			add_title:{required:"Please enter the title.",lettersonly:"Please enter letter only."},
			add_description:{required:"Please enter the description."},
			country:{required:"Please select your country."},
			city_state:{required:"Please select your state."},
			city:{required:"Please enter your city."}
			
		}
	});
	$("#international").validate({
		rules:{
			category:{required:true},
			currency:{required:true},
			price:{required:true, number: true},
			userfile:{required:true},
			phone:{number: true},
			add_title:{required:true, lettersonly: true},
			add_description:{required:true},
			country:{required:true},
			city_state:{required:true},
			city:{required:true}
			
		},
		messages:{
			category:{required:"Please select category name."},
			currency:{required:"Please select currency."},
			price:{required:"Please enter price.",number:"Please enter number only."},
			phone:{number:"Please enter number only."},
			userfile:{required:"Please select a image."},
			add_title:{required:"Please enter the title.",lettersonly:"Please enter letter only."},
			add_description:{required:"Please enter the description."},
			country:{required:"Please select your country."},
			city_state:{required:"Please select your state."},
			city:{required:"Please enter city."}
			
		}
	});
});

	$('#myCarousel').carousel({
	  interval: 10000
	})

	$('.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
		next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
		next.next().children(':first-child').clone().appendTo($(this));
	  }
	  else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});


       // Function to preview image
	$(function() {
        $(".file").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded(e) { 
		$(".file").css("color","green");
        $('.preview').css("display", "block");
        $('.previewimg').attr('src', e.target.result);
		$('.previewimg').attr('width', '250px');
		$('.previewimg').attr('height', '230px');
	};

	$(function() {
        $(".file1").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg1').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded1;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded1(e) { 
		$(".file1").css("color","green");
        $('.preview1').css("display", "block");
        $('.previewimg1').attr('src', e.target.result);
		$('.previewimg1').attr('width', '250px');
		$('.previewimg1').attr('height', '230px');
	};

	$(function() {
        $(".file2").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg2').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded2;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded2(e) { 
		$(".file2").css("color","green");
        $('.preview2').css("display", "block");
        $('.previewimg2').attr('src', e.target.result);
		$('.previewimg2').attr('width', '250px');
		$('.previewimg2').attr('height', '230px');
	};

	$(function() {
        $(".file3").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg3').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded3;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded3(e) { 
		$(".file3").css("color","green");
        $('.preview3').css("display", "block");
        $('.previewimg3').attr('src', e.target.result);
		$('.previewimg3').attr('width', '250px');
		$('.previewimg3').attr('height', '230px');
	};

	$(function() {
        $(".file4").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg4').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded4;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded4(e) { 
		$(".file4").css("color","green");
        $('.preview4').css("display", "block");
        $('.previewimg4').attr('src', e.target.result);
		$('.previewimg4').attr('width', '250px');
		$('.previewimg4').attr('height', '230px');
	};

	$(function() {
        $(".file5").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg5').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded5;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoaded5(e) { 
		$(".file5").css("color","green");
        $('.preview5').css("display", "block");
        $('.previewimg5').attr('src', e.target.result);
		$('.previewimg5').attr('width', '250px');
		$('.previewimg5').attr('height', '230px');
	};

	
		var orig_src = $('.preview').prop('src');
			$('.deleteimg').click(function () {
		  //  $('#file').replaceWith($('#file').clone(true));
		    $('.file').replaceWith($('.file').val('').clone(true));
		    $('.preview').not('.selected').hide();
		    $('.preview.selected').prop('src', orig_src).removeClass('selected');
		});  

		
			var orig_src1 = $('.preview1').prop('src');
			$('.deleteimg1').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.file1').replaceWith($('.file1').val('').clone(true));
		    $('.preview1').not('.selected').hide();
		    $('.preview1.selected').prop('src', orig_src1).removeClass('selected');
		});
			var orig_src2 = $('.preview2').prop('src');
			$('.deleteimg2').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.file2').replaceWith($('.file2').val('').clone(true));
		    $('.preview2').not('.selected').hide();
		    $('.preview2.selected').prop('src', orig_src2).removeClass('selected');
		});
			var orig_src3 = $('.preview3').prop('src');
			$('.deleteimg3').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.file3').replaceWith($('.file3').val('').clone(true));
		    $('.preview3').not('.selected').hide();
		    $('.preview3.selected').prop('src', orig_src3).removeClass('selected');
		});
			var orig_src4 = $('.preview4').prop('src');
			$('.deleteimg4').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.file4').replaceWith($('.file4').val('').clone(true));
		    $('.preview4').not('.selected').hide();
		    $('.preview4.selected').prop('src', orig_src4).removeClass('selected');
		});
			var orig_src5 = $('.preview5').prop('src');
			$('.deleteimg5').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.file5').replaceWith($('.file5').val('').clone(true));
		    $('.preview5').not('.selected').hide();
		    $('.preview5.selected').prop('src', orig_src5).removeClass('selected');
		});  

			/* here is code for international */

			   // Function to preview image
	$(function() {
        $(".files").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds(e) { 
		$(".files").css("color","green");
        $('.preview').css("display", "block");
        $('.previewimg').attr('src', e.target.result);
		$('.previewimg').attr('width', '250px');
		$('.previewimg').attr('height', '230px');
	};

	$(function() {
        $(".files1").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg1').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds1;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds1(e) { 
		$(".files1").css("color","green");
        $('.preview1').css("display", "block");
        $('.previewimg1').attr('src', e.target.result);
		$('.previewimg1').attr('width', '250px');
		$('.previewimg1').attr('height', '230px');
	};

	$(function() {
        $(".files2").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg2').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds2;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds2(e) { 
		$(".files2").css("color","green");
        $('.preview2').css("display", "block");
        $('.previewimg2').attr('src', e.target.result);
		$('.previewimg2').attr('width', '250px');
		$('.previewimg2').attr('height', '230px');
	};

	$(function() {
        $(".files3").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg3').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds3;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds3(e) { 
		$(".files3").css("color","green");
        $('.preview3').css("display", "block");
        $('.previewimg3').attr('src', e.target.result);
		$('.previewimg3').attr('width', '250px');
		$('.previewimg3').attr('height', '230px');
	};

	$(function() {
        $(".files4").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg4').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds4;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds4(e) { 
		$(".files4").css("color","green");
        $('.preview4').css("display", "block");
        $('.previewimg4').attr('src', e.target.result);
		$('.previewimg4').attr('width', '250px');
		$('.previewimg4').attr('height', '230px');
	};

	$(function() {
        $(".files5").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('.previewimg5').attr('src','noimage.png');
			$("#message").html("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong><?php echo $this->lang->line('ads_error');?>!</strong><?php echo $this->lang->line('pf_image_error');?></div>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoadeds5;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
    
    function imageIsLoadeds5(e) { 
		$(".files5").css("color","green");
        $('.preview5').css("display", "block");
        $('.previewimg5').attr('src', e.target.result);
		$('.previewimg5').attr('width', '250px');
		$('.previewimg5').attr('height', '230px');
	};

	
		var orig_srcs = $('.preview').prop('src');
			$('.deleteimg').click(function () {
		  //  $('#file').replaceWith($('#file').clone(true));
		    $('.files').replaceWith($('.files').val('').clone(true));
		    $('.preview').not('.selected').hide();
		    $('.preview.selected').prop('src', orig_srcs).removeClass('selected');
		});  

		
			var orig_srcs1 = $('.preview1').prop('src');
			$('.deleteimg1').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.files1').replaceWith($('.files1').val('').clone(true));
		    $('.preview1').not('.selected').hide();
		    $('.preview1.selected').prop('src', orig_srcs1).removeClass('selected');
		});
			var orig_srcs2 = $('.preview2').prop('src');
			$('.deleteimg2').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.files2').replaceWith($('.files2').val('').clone(true));
		    $('.preview2').not('.selected').hide();
		    $('.preview2.selected').prop('src', orig_srcs2).removeClass('selected');
		});
			var orig_srcs3 = $('.preview3').prop('src');
			$('.deleteimg3').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.files3').replaceWith($('.files3').val('').clone(true));
		    $('.preview3').not('.selected').hide();
		    $('.preview3.selected').prop('src', orig_srcs3).removeClass('selected');
		});
			var orig_srcs4 = $('.preview4').prop('src');
			$('.deleteimg4').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.files4').replaceWith($('.files4').val('').clone(true));
		    $('.preview4').not('.selected').hide();
		    $('.preview4.selected').prop('src', orig_srcs4).removeClass('selected');
		});
			var orig_srcs5 = $('.preview5').prop('src');
			$('.deleteimg5').click(function () {
		    //$('#file').replaceWith($('#file').clone(true));
		    $('.files5').replaceWith($('.files5').val('').clone(true));
		    $('.preview5').not('.selected').hide();
		    $('.preview5.selected').prop('src', orig_srcs5).removeClass('selected');
		});  

			