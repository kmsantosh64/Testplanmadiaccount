jQuery(document).ready(function(e) {

 

    jQuery('#loader-icons').hide();
    
      jQuery("#general-contact-form").on('submit',function(e){
    
        e.preventDefault();
    
        var valid;  
    
        valid= validationcontact();
    
        if(valid) {
    
              jQuery('#loader-icons').show();
    
              
    
              jQuery.ajax({
    
                url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/contact-form.php",
    
                type: "POST",
    
                data:  new FormData(this),
    
                contentType: false,
    
                cache: false,
    
                processData:false,
                beforeSend: function() {
                  // Disable the submit button
                  jQuery("#contact-submit").prop("disabled", true);
              },
    
                success: function(data){
    
                    document.getElementById("general-contact-form").reset();  
                    jQuery('#loader-icons').hide();
                      return toastalert();
                   
    
                },
    
                error: function(){
                  jQuery("#contact-submit").prop("disabled", false);
                },
                complete: function() {
                  // Enable the submit button after request completes
                  jQuery("#contact-submit").prop("disabled", false);
              }
              
    
            });
    
        }
        else {
          // Scroll to the first error message
          var firstError = jQuery('.info:visible').first();
          if (firstError.length) {
              // Scroll smoothly to the first error message
              jQuery('html, body').animate({
                  scrollTop: firstError.offset().top - 100 // Adjust this value as needed
              }, 500);
          }
      }
    
    })
    
    });
    
    function validationcontact(){
    
    var valid = true;
    
    jQuery(".info").html('');
    
    if(!jQuery("#namecnt").val()) {
    
      jQuery("#nameinfo").html("Please enter a name");  
    
      jQuery("#namecnt").css('border-color','red');
    
     valid = false;  
    
    }
    
   else if(!jQuery("#namecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#namecnt").val().match(/^[a-zA-Z\s]+$/))  {
    
      jQuery("#nameinfo").html("Please enter valid name");  
    
      jQuery("#namecnt").css('border-color','red');
    
      valid = false;
    
    }
    else {
      jQuery("#nameinfo").html(""); // 
              jQuery("#namecnt").css('border-color', '');
    }
    
  
    if(!jQuery("#phonecnt").val()) {
    
      jQuery("#numberinfo").html("Please enter mobile number");
    
      jQuery("#phonecnt").css('border-color','red');
    
      valid = false;
    
    }
    
   else if(!jQuery("#phonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
    
      jQuery("#numberinfo").html("Please enter valid mobile number");
    
      jQuery("#phonecnt").css('border-color','red');
    
      valid = false;
    
    }
    else {
      jQuery("#numberinfo").html(""); // 
      jQuery("#phonecnt").css('border-color', '');
    } 
    
    if(!jQuery("#emailcnt").val()) {
    
      jQuery("#emailinfo").html("Please enter email");
    
      jQuery("#emailcnt").css('border-color','red');
    
      valid = false;
    
    }
    
   else if(!jQuery("#emailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    
      jQuery("#emailinfo").html("Please enter valid email");
    
      jQuery("#emailcnt").css('border-color','red');
    
      valid = false;
    
    }
    else {
      jQuery("#emailinfo").html("");
      jQuery("#emailcnt").css('border-color', '');
     
  }
    
    if(!jQuery("#service").val()) { 
      jQuery("#serviceinfo").html("Please select on option");   
      jQuery("#service").css('border-color','red');
      valid = false;
    
    }
    else {
      jQuery("#serviceinfo").html("");   
      jQuery("#service").css('border-color','');
    }

    return valid;
    
    }

    function toastalert() {
        var x = document.getElementById("snackbar");
        x.className = "pop";
        setTimeout(function(){ x.className = x.className.replace("pop", ""); }, 5000);
      }

      function confirmationblogalert() {
        console.log("confirmationblogalert called");
        var x = document.getElementById("confirmation-snackbar");
        x.className = "pop";
        setTimeout(function(){ x.className = x.className.replace("pop", ""); }, 5000);
      }

      // makeup forms

      jQuery(document).ready(function(e) {

 

        jQuery('#loader-icons').hide();
        
          jQuery("#service-enquiry-form").on('submit',function(e){
        
            e.preventDefault();
        
            var valid;  
        
            valid= validationenquiry();
        
            if(valid) {
        
                  jQuery('#loader-icons').show();
        
                  
        
                  jQuery.ajax({
        
                    url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-makeup.php",
        
                    type: "POST",
        
                    data:  new FormData(this),
        
                    contentType: false,
        
                    cache: false,
        
                    processData:false,
                    beforeSend: function() {
                      // Disable the submit button
                      jQuery("#contact-submit").prop("disabled", true);
                  },
        
                    success: function(data){
        
                        document.getElementById("service-enquiry-form").reset();  
                        location.reload();
                        jQuery('#loader-icons').hide();

                        return toastalert();
        
                    },
        
                    error: function(){
                      jQuery("#contact-submit").prop("disabled", false);
                    },
                    complete: function() {
                      // Enable the submit button after request completes
                      jQuery("#contact-submit").prop("disabled", false);
                  }
        
                });
        
            }
            else {
              // Scroll to the first error message
              var firstError = jQuery('.info:visible').first();
              if (firstError.length) {
                  // Scroll smoothly to the first error message
                  jQuery('html, body').animate({
                      scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                  }, 500);
              }
          }
        
        })
        
        });
        
        function validationenquiry(){
        
        var valid = true;
        
        jQuery(".info").html('');
        
        if(!jQuery("#enqnamecnt").val()) {
        
          jQuery("#enqnameinfo").html("Please enter a name");  
        
          jQuery("#enqnamecnt").css('border-color','red');
        
         valid = false;  
        
        }
        

        else if(!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/))  {
    
          jQuery("#enqnameinfo").html("Please enter valid name");  
        
          jQuery("#enqnamecnt").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqnameinfo").html("");  
        
          jQuery("#enqnamecnt").css('border-color','');
        }
      
        if(!jQuery("#enqphonecnt").val()) {
        
          jQuery("#enqnumberinfo").html("Please enter mobile number");
        
          jQuery("#enqphonecnt").css('border-color','red');
        
          valid = false;
        
        }
        else if(!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
    
          jQuery("#enqnumberinfo").html("Please enter valid mobile number");
        
          jQuery("#enqphonecnt").css('border-color','red');
        
          valid = false;
        
        }
        
      else {
        jQuery("#enqnumberinfo").html("");
        
        jQuery("#enqphonecnt").css('border-color','');
      }
        
        if(!jQuery("#enqemailcnt").val()) {
        
          jQuery("#enqemailinfo").html("Please enter email");
        
          jQuery("#enqemailcnt").css('border-color','red');
        
          valid = false;
        
        }
        
       
        else if(!jQuery("#enqemailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    
          jQuery("#enqemailinfo").html("Please enter valid email");
        
          jQuery("#enqemailcnt").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqemailinfo").html("");
        
          jQuery("#enqemailcnt").css('border-color','');
        }
        
        if(!jQuery("#eventtype").val()) { 
          jQuery("#enqeventinfo").html("Please select an event type");   
          jQuery("#eventtype").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#enqeventinfo").html("");   
          jQuery("#eventtype").css('border-color','');
        }
        if(!jQuery("#enqeventlocation").val()) {
        
          jQuery("#enqeventlocationinfo").html("Please enter the location");
        
          jQuery("#enqeventlocation").css('border-color','red');
        
          valid = false;
        
        }
        else{
          jQuery("#enqeventlocationinfo").html("");   
          jQuery("#enqeventlocation").css('border-color','');
        }
        if(!jQuery("#txtDate").val()) {
        
          jQuery("#enqeventdateinfo").html("Please enter the event date");
        
          jQuery("#txtDate").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqeventdateinfo").html("");
        
          jQuery("#txtDate").css('border-color','');
        }

        if(!jQuery("#eventappttime").val()) {
        
          jQuery("#enqeventtime").html("Please enter the event time");
        
          jQuery("#eventappttime").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqeventtime").html("");
        
          jQuery("#eventappttime").css('border-color','');
        }

        if(!jQuery("#makeuptypeservice").val()) { 
          jQuery("#enqmakeuptypeinfo").html("Please select makeup type");   
          jQuery("#makeuptypeservice").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#enqmakeuptypeinfo").html("");   
          jQuery("#makeuptypeservice").css('border-color','');
        }
        if(!jQuery("#makeupservice").val()) { 
          jQuery("#enqmakeupservicesinfo").html("Please select makeup service");   
          jQuery("#makeupservice").css('border-color','red');
          jQuery("#mulitiselect_dropdown").css('border-color','red');
          mulitiselect_dropdown
          valid = false;
        
        }
        else {
          jQuery("#enqmakeupservicesinfo").html("");   
          jQuery("#makeupservice").css('border-color','');
        }
        if(!jQuery("#enqeventgroupsize").val()) {
        
          jQuery("#enqeventgroupsizeinfo").html("Please enter total numbers");
        
          jQuery("#enqeventgroupsize").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqeventgroupsizeinfo").html("");
        
          jQuery("#enqeventgroupsize").css('border-color','');
        }
        if(!jQuery("#eventbudget").val()) { 
          jQuery("#enqmakeupbudgetinfo").html("Please select your budget");   
          jQuery("#eventbudget").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#enqmakeupbudgetinfo").html("");   
          jQuery("#eventbudget").css('border-color','');
        }
        if (!$('input[name="trail_makeup"]:checked').val()) {
         
          $("#trailmakeuperrorinfo").html("Please select an option for trail makeup");
          valid = false;
      } else {
        
          $("#trailmakeuperrorinfo").html("");
      }
  //     if (!otherInput.classList.contains('hidden')) {
  //       // Perform validation only if visible
  //       if (!document.getElementById('eventtypeothers').value.trim()) {
  //           // If eventtypeothers is empty, show error message
  //           document.getElementById('enqeventtypeotherinfo').innerHTML = "Please provide additional information";
  //           document.getElementById('eventtypeothers').style.borderColor = 'red';
  //           valid = false;
  //       } else {
  //           // If eventtypeothers is not empty, clear error message
  //           document.getElementById('enqeventtypeotherinfo').innerHTML = "";
  //           document.getElementById('eventtypeothers').style.borderColor = '';
  //       }
  //   }
  //   if (!otherInputtwo.classList.contains('hidden')) {
  //     // Perform validation only if visible
  //     if (!document.getElementById('makeuptypeothers').value.trim()) {
          
  //         document.getElementById('enqmakeuptypeotherinfo').innerHTML = "Please provide additional information";
  //         document.getElementById('makeuptypeothers').style.borderColor = 'red';
  //         valid = false;
  //     } else {
  //         // If eventtypeothers is not empty, clear error message
  //         document.getElementById('enqmakeuptypeotherinfo').innerHTML = "";
  //         document.getElementById('makeuptypeothers').style.borderColor = '';
  //     }
  // }
     
        return valid;
        
        }
    




        // Baker forms


        jQuery(document).ready(function (e) {
          jQuery('#loader-icons').hide();
      
          jQuery("#cake-enquiry-form").on('submit', function (e) {
              e.preventDefault();
              var valid;
              valid = validationbakerenquiry();
      
              if (valid) {
                  jQuery('#loader-icons').show();
      
                  jQuery.ajax({
                      url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-new-baker.php",
                      type: "POST",
                      data: new FormData(this),
                      contentType: false,
                      cache: false,
                      processData: false,
                      beforeSend: function() {
                        // Disable the submit button
                        jQuery(".enqsubmit-button").prop("disabled", true);
                    },
                      success: function (data) {
                          document.getElementById("cake-enquiry-form").reset();
                          jQuery('#loader-icons').hide();
                          toastalert();
                          setTimeout(function () {
                              location.reload();
                          }, 3000);
                      },
                      error: function(){
                        jQuery(".enqsubmit-button").prop("disabled", false);
                      },
                      complete: function() {
                        // Enable the submit button after request completes
                        jQuery(".enqsubmit-button").prop("disabled", false);
                    }
                  });
              } else {
                  // Scroll to the first error message
                  var firstError = jQuery('.info:visible').first();
                  if (firstError.length) {
                      // Scroll smoothly to the first error message
                      jQuery('html, body').animate({
                          scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                      }, 500);
                  }
              }
          });
      });
  
      function validationbakerenquiry() {
  
          var valid = true;
  
          jQuery(".info").html('');
  
          if (!jQuery("#enqnamecnt").val()) {
  
              jQuery("#enqnameinfo").html("Please enter a name");
  
              jQuery("#enqnamecnt").css('border-color', 'red');
  
              valid = false;
  
          }
  
          else if (!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
              jQuery("#enqnameinfo").html("Please enter a valid name (up to 100 characters)");
              jQuery("#enqnamecnt").css('border-color', 'red');
              valid = false;
          }
          else {
              jQuery("#enqnameinfo").html(""); // 
              jQuery("#enqnamecnt").css('border-color', '');
            
          }
  
  
          if (!jQuery("#enqphonecnt").val()) {
  
              jQuery("#enqnumberinfo").html("Please enter mobile number");
  
              jQuery("#enqphonecnt").css('border-color', 'red');
  
              valid = false;
  
          }
  
          else if (!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
              jQuery("#enqnumberinfo").html("Please enter valid mobile number");
  
              jQuery("#enqphonecnt").css('border-color', 'red ');
  
              valid = false;
  
          }
          else {
              jQuery("#enqnumberinfo").html(""); // 
              jQuery("#enqphonecnt").css('border-color', '');
             
          }
  
          if (!jQuery("#enqemailcnt").val()) {
  
              jQuery("#enqemailinfo").html("Please enter email");
  
              jQuery("#enqemailcnt").css('border-color', 'red');
  
              valid = false;
  
          }
  
          else if (!jQuery("#enqemailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
              jQuery("#enqemailinfo").html("Please enter valid email");
  
              jQuery("#enqemailcnt").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#enqemailinfo").html("");
              jQuery("#enqemailcnt").css('border-color', '');
             
          }
  
          if (!jQuery("#eventtype").val()) {
              jQuery("#enqeventinfo").html("Please select an event type");
              jQuery("#eventtype").css('border-color', 'red');
              valid = false;
  
          }
          else {
              jQuery("#enqeventinfo").html("");
              jQuery("#eventtype").css('border-color', '');
  
          }
          if (!jQuery("#enqeventlocation").val()) {
  
              jQuery("#enqeventlocationinfo").html("Please enter the location");
  
              jQuery("#enqeventlocation").css('border-color', 'red');
  
              valid = false;
  
          }
          else if (!/^[\s\S]{0,400}$/.test(jQuery("#enqeventlocation").val())) {
  
              jQuery("#enqeventlocationinfo").html("Please enter your information below 400 characters");
  
              jQuery("#enqeventlocation").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#enqeventlocationinfo").html("");
  
              jQuery("#enqeventlocation").css('border-color', '');
  
          }
          if (!jQuery("#txtDate").val()) {
  
              jQuery("#enqeventdateinfo").html("Please enter the delivery date");
  
              jQuery("#txtDate").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#enqeventdateinfo").html("");
  
              jQuery("#txtDate").css('border-color', '');
  
  
          }
          if (!jQuery("#eventappttime").val()) {
              jQuery("#enqeventtime").html("Please enter the event time ");
              jQuery("#eventappttime").css('border-color', 'red');
              valid = false;
  
          }
          else {
              jQuery("#enqeventtime").html("");
              jQuery("#eventappttime").css('border-color', '');
  
          }
          if (!jQuery("#caketypeservice").val()) {
              jQuery("#enqcaketypeinfo").html("Please select caketype you required");
              jQuery("#caketypeservice").css('border-color', 'red');
              valid = false;
  
          }
          if (!jQuery("#cakesize").hasClass('hidden')) {
              if (!jQuery("#cakesize").val()) {
  
                  jQuery("#enqcakesizeinfo").html("Please enter the cake size ");
  
                  jQuery("#cakesize").css('border-color', 'red');
  
                  valid = false;
  
              }
              else {
                  jQuery("#enqcakesizeinfo").html("");
  
                  jQuery("#cakesize").css('border-color', '');
  
  
              }
          }
          if (!jQuery("#cakequantity").hasClass('hidden')) {
              if (!jQuery("#cakequantity").val()) {
  
                  jQuery("#enqcakequantityinfo").html("Please enter the cake quantity");
  
                  jQuery("#cakequantity").css('border-color', 'red');
  
                  valid = false;
  
              }
              else if (!jQuery("#cakequantity").val().match(/^([0-9]|10)$/)) {
                  jQuery("#enqcakequantityinfo").html("Please enter a valid quantity (0-10)");
                  jQuery("#cakequantity").css('border-color', 'red');
                  valid = false;
              }
              else {
                  jQuery("#enqcakequantityinfo").html("");
  
                  jQuery("#cakequantity").css('border-color', '');
  
  
              }
          }
          if (!jQuery("#enqtotalpeople").val()) {
  
              jQuery("#enqtotalpeopleinfo").html("Please enter the total number of guests ");
  
              jQuery("#enqtotalpeople").css('border-color', 'red');
  
              valid = false;
  
          }
          else if (!/^\d{1,3}$/.test(jQuery("#enqtotalpeople").val())) {
              jQuery("#enqtotalpeopleinfo").html("Please enter up to 3 digit numbers only");
              jQuery("#enqtotalpeople").css('border-color', 'red');
              valid = false;
          }
          else {
              jQuery("#enqtotalpeopleinfo").html("");
  
              jQuery("#enqtotalpeople").css('border-color', '');
  
  
          }
          if (!jQuery("#cakebudget").val()) {
              jQuery("#enqcakebudgetinfo").html("Please select your budget");
              jQuery("#cakebudget").css('border-color', 'red');
              valid = false;
  
          }
          else {
              jQuery("#enqcakebudgetinfo").html("");
              jQuery("#cakebudget").css('border-color', '');
          }
  
          if (!jQuery("#tier_cake").hasClass('hidden')) {
              if (!jQuery("#tier_cake").val()) {
                  jQuery("#enqtiercakeinfo").html("Please select for tier cakes");
                  jQuery("#tier_cake").css('border-color', 'red');
  
  
              }
              else {
                  jQuery("#enqtiercakeinfo").html("");
                  jQuery("#tier_cake").css('border-color', '');
  
              }
          }
          if (!jQuery("#tiercakenumber").hasClass('hidden')) {
              if (!jQuery("#tiercakenumber").val()) {
                  jQuery("#enqtiercakenumberinfo").html("Please select number of tier cakes");
                  jQuery("#tiercakenumber").css('border-color', 'red');
                  valid = false;
  
              }
              else {
                  jQuery("#enqtiercakenumberinfo").html("");
                  jQuery("#tiercakenumber").css('border-color', '');
  
              }
          }
          if (!$('input[name="surprise_cake"]:checked').val()) {
  
              $("#enqsurprisebakinginfo").html("Please select an option");
              valid = false;
          } else {
  
              $("#enqsurprisebakinginfo").html("");
          }
  
          if (!jQuery("#cakemessage").val()) {
  
              jQuery("#cakemessageinfo").html("Please enter the name on the cake ");
  
              jQuery("#cakemessage").css('border-color', 'red');
  
              valid = false;
  
          }
          else if (!/^[\s\S]{0,100}$/.test(jQuery("#cakemessage").val())) {
  
              jQuery("#cakemessageinfo").html("Please enter your information below 100 characters");
  
              jQuery("#cakemessage").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#cakemessageinfo").html("");
  
              jQuery("#cakemessage").css('border-color', '');
  
  
          }
          if (!jQuery("#flavor-cake").val()) {
  
              jQuery("#enqflavorinfo").html("Please enter the flavor for the cake");
  
              jQuery("#flavor-cake").css('border-color', 'red');
  
              valid = false;
  
          }
          else if (!/^[\s\S]{0,150}$/.test(jQuery("#flavor-cake").val())) {
  
              jQuery("#enqflavorinfo").html("Please enter your information below 150 characters");
  
              jQuery("#flavor-cake").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#enqflavorinfo").html("");
  
              jQuery("#flavor-cake").css('border-color', '');
  
  
          }
          if (!jQuery("#creampreferred").hasClass('hidden')) {
              if (!jQuery("#creampreferred").val()) {
  
                  jQuery("#creampreferredinfo").html("Please select the cream required on cake");
  
                  jQuery("#creampreferred").css('border-color', 'red');
  
                  valid = false;
  
              }
              else {
                  jQuery("#creampreferredinfo").html("");
  
                  jQuery("#creampreferred").css('border-color', '');
  
  
              }
          }
          if (!jQuery("#cakeadditionalservice").hasClass('hidden')) {
              if (!jQuery("#cakeadditionalservice").val()) {
  
                  jQuery("#cakeaddoninfo").html("Please select your requirements");
  
                  jQuery(".multiSelect_dropdown").css('border-color', 'red');
  
                  valid = false;
  
              }
              else {
                  jQuery("#cakeaddoninfo").html("");
  
                  jQuery(".multiSelect_dropdown").css('border-color', '');
  
  
              }
          }
          if (!jQuery("#additionalcakenumbers").hasClass('hidden')) {
              if (!jQuery("#additionalcakenumbers").val()) {
  
                  jQuery("#additionalcakenumberinfo").html("Please enter your requirement details");
  
                  jQuery("#additionalcakenumbers").css('border-color', 'red');
  
                  valid = false;
  
              }
              else if (!/^[\s\S]{0,600}$/.test(jQuery("#additionalcakenumbers").val())) {
  
                  jQuery("#additionalcakenumberinfo").html("Please enter your information below 600 characters");
  
                  jQuery("#additionalcakenumbers").css('border-color', 'red');
  
                  valid = false;
  
              }
              else {
                  jQuery("#additionalcakenumberinfo").html("");
                  jQuery("#additionalcakenumbers").css('border-color', '');
  
              }
          }
          if (!jQuery("#enqbakeinstructions").val()) {
  
              jQuery("#enqbakeinstructionsinfo").html("Please enter the required information");
  
              jQuery("#enqbakeinstructions").css('border-color', 'red');
  
              valid = false;
  
          }
          else if (!/^[\s\S]{0,600}$/.test(jQuery("#enqbakeinstructions").val())) {
  
              jQuery("#enqbakeinstructionsinfo").html("Please enter your information below 600 characters");
  
              jQuery("#enqbakeinstructions").css('border-color', 'red');
  
  
  
          }
          else {
              jQuery("#enqbakeinstructionsinfo").html("");
  
              jQuery("#enqbakeinstructions").css('border-color', '');
          }
          if (!jQuery("#Cake-type").val()) {
  
              jQuery("#enqcakemaintypeinfo").html("Please select an option");
  
              jQuery("#Cake-type").css('border-color', 'red');
  
              valid = false;
  
          }
          else {
              jQuery("#enqcakemaintypeinfo").html("");
  
              jQuery("#Cake-type").css('border-color', '');
  
  
          }

          if (!surprisecakegift.classList.contains('hidden')) {
  
              // Perform validation only if visible
              if (!document.getElementById('receiversname').value.trim()) {
  
                  document.getElementById('enqreceiversnameinfo').innerHTML = "Please enter receviers name";
                  document.getElementById('receiversname').style.borderColor = 'red';
                  valid = false;
              }
              else{
                  document.getElementById('enqreceiversnameinfo').innerHTML = ""
                  document.getElementById('receiversname').style.borderColor = '';
              }
  
              if (!document.getElementById('receiversnumber').value.trim()) {
  
                  document.getElementById('enqreceiversnumberinfo').innerHTML = "Please enter receviers number";
                  document.getElementById('receiversnumber').style.borderColor = 'red';
                  valid = false;
              }
  
             
              else if (!document.getElementById('receiversnumber').value.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
                  document.getElementById('enqreceiversnumberinfo').innerHTML = "Please enter valid digits";
                  document.getElementById('receiversnumber').style.borderColor = 'red';
                  valid = false;
              }
              else{
                  document.getElementById('enqreceiversnumberinfo').innerHTML = ""
                  document.getElementById('receiversnumber').style.borderColor = '';
              }
  
              //   if (!document.getElementById('landmark').value.trim()) {
  
              //       document.getElementById('enqreceiverlandmarkinfo').innerHTML = "Please provide receviers location landmark";
              //       document.getElementById('landmark').style.borderColor = 'red';
              //       valid = false;
              //   } 
              if (!document.getElementById('altnumber').value.trim()) {
  
                  document.getElementById('enqreceiversaltnumberinfo').innerHTML = "Please enter receviers alternate number";
                  document.getElementById('altnumber').style.borderColor = 'red';
                  valid = false;
              }
             
             
             else if (!document.getElementById('altnumber').value.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
                  document.getElementById('enqreceiversaltnumberinfo').innerHTML = "Please enter valid digits";
                  document.getElementById('altnumber').style.borderColor = 'red';
                  valid = false;
              }
              else{
                  document.getElementById('enqreceiversaltnumberinfo').innerHTML = ""
                  document.getElementById('altnumber').style.borderColor = '';
              }
              if (!document.getElementById('receiver-address').value.trim()) {
                  document.getElementById('enqreceiversaddressinfo').innerHTML = "Please enter receviers address";
                  document.getElementById('receiver-address').style.borderColor = 'red';
                  valid = false;
              }
              // else here error
              else{
                  document.getElementById('enqreceiversaddressinfo').innerHTML = ""
                  document.getElementById('receiver-address').style.borderColor = '';
              }
              // else here error
             
             
  
          }
          return valid;
      }


    //   jQuery(document).ready(function(e) {

 

    //     jQuery('#loader-icons').hide();
        
    //       jQuery("#cake-enquiry-form").on('submit',function(e){
        
    //         e.preventDefault();
        
    //         var valid;  
        
    //         valid= validationbakerenquiry();
        
    //         if(valid) {
        
    //               jQuery('#loader-icons').show();
        
                  
        
    //               jQuery.ajax({
        
    //                 url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-baker.php",
        
    //                 type: "POST",
        
    //                 data:  new FormData(this),
        
    //                 contentType: false,
        
    //                 cache: false,
        
    //                 processData:false,
        
    //                 success: function(data){
        
    //                     document.getElementById("cake-enquiry-form").reset();  
                        
    //                     location.reload();
    //                     jQuery('#loader-icons').hide();
                        
    //                     return toastalert();
        
    //                 },
        
    //                 error: function(){}
        
    //             });
        
    //         }
        
    //     })
        
    //     });
        
    //     function validationbakerenquiry(){
        
    //     var valid = true;
        
    //     jQuery(".info").html('');
        
    //     if(!jQuery("#enqnamecnt").val()) {
        
    //       jQuery("#enqnameinfo").html("Please Enter a Name");  
        
    //       jQuery("#enqnamecnt").css('border-color','red');
        
    //      valid = false;  
        
    //     }
        
    //     if(!jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
        
    //       jQuery("#enqnameinfo").html("Please Enter valid Name");  
        
    //       jQuery("#enqnamecnt").css('border-color','red');
        
    //       valid = false;
        
    //     }
        
      
    //     if(!jQuery("#enqphonecnt").val()) {
        
    //       jQuery("#enqnumberinfo").html("Please enter mobile number");
        
    //       jQuery("#enqphonecnt").css('border-color','red');
        
    //       valid = false;
        
    //     }
        
    //     if(!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
        
    //       jQuery("#enqnumberinfo").html("Please enter valid digits");
        
    //       jQuery("#enqphonecnt").css('border-color','red');
        
    //       valid = false;
        
    //     }
        
    //     if(!jQuery("#enqemailcnt").val()) {
        
    //       jQuery("#enqemailinfo").html("Please Enter Email");
        
    //       jQuery("#enqemailcnt").css('border-color','red');
        
    //       valid = false;
        
    //     }
        
    //     if(!jQuery("#enqemailcnt").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        
    //       jQuery("#enqemailinfo").html("Please Enter valid Email");
        
    //       jQuery("#enqemailcnt").css('border-color','red');
        
    //       valid = false;
        
    //     }
        
    //     if(!jQuery("#eventtype").val()) { 
    //       jQuery("#enqeventinfo").html("Please select an event type");   
    //       jQuery("#eventtype").css('border-color','red');
    //       valid = false;
        
    //     }
    //     if(!jQuery("#enqeventlocation").val()) {
        
    //       jQuery("#enqeventlocationinfo").html("Please Enter the Location");
        
    //       jQuery("#enqeventlocation").css('border-color','red');
        
    //       valid = false;
        
    //     }
    //     if(!jQuery("#txtDate").val()) {
        
    //       jQuery("#enqeventdateinfo").html("Please Enter the event date");
        
    //       jQuery("#txtDate").css('border-color','red');
        
    //       valid = false;
        
    //     }
    //     if(!jQuery("#eventappttime").val()) { 
    //       jQuery("#enqeventtime").html("Please enter the time ");   
    //       jQuery("#eventappttime").css('border-color','red');
    //       valid = false;
        
    //     }
    //     if(!jQuery("#caketypeservice").val()) { 
    //       jQuery("#enqcaketypeinfo").html("Please select caketype you required");   
    //       jQuery("#caketypeservice").css('border-color','red');
    //       valid = false;
        
    //     }
    //     if(!jQuery("#cakesize").val()) {
        
    //       jQuery("#enqcakesizeinfo").html("Please Enter the cake size ");
        
    //       jQuery("#cakesize").css('border-color','red');
        
    //       valid = false;
        
    //     }
    //     if(!jQuery("#cakequantity").val()) {
        
    //       jQuery("#enqcakequantityinfo").html("Please Enter the Cake quntity ");
        
    //       jQuery("#cakequantity").css('border-color','red');
        
    //       valid = false;
        
    //     }
    //     if(!jQuery("#enqtotalpeople").val()) {
        
    //       jQuery("#enqtotalpeopleinfo").html("Please Enter the total number of guests ");
        
    //       jQuery("#enqtotalpeople").css('border-color','red');
        
    //       valid = false;
        
    //     }
    //     if(!jQuery("#eventbudget").val()) { 
    //       jQuery("#enqcakebudgetinfo").html("Please select your budget");   
    //       jQuery("#eventbudget").css('border-color','red');
    //       valid = false;
        
    //     }
    //     if (!$('input[name="eggless_baking"]:checked').val()) {
         
    //       $("#egglessbakinginfo").html("Please select an option for cake type");
    //       valid = false;
    //   } else {
        
    //       $("#egglessbakinginfo").html("");
    //   }
    //   if (!$('input[name="cake_candle"]:checked').val()) {
         
    //     $("#candleinfo").html("Please select an option for cake type");
    //     valid = false;
    // } else {
      
    //     $("#candleinfo").html("");
    // }

    // if(!jQuery("#cakemessage").val()) {
        
    //   jQuery("#cakemessageinfo").html("Please Enter the name on the cake ");
    
    //   jQuery("#cakemessage").css('border-color','red');
    
    //   valid = false;
    
    // }
      
     
    //     return valid;
        
    //     }
    


        // photography

        jQuery(document).ready(function(e) {

 

          jQuery('#loader-icons').hide();
          
            jQuery("#photography-form").on('submit',function(e){
          
              e.preventDefault();
          
              var valid;  
          
              valid= validationphotographerenquiry();
          
              if(valid) {
          
                    jQuery('#loader-icons').show();
          
                    
          
                    jQuery.ajax({
          
                      url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-photographer.php",
          
                      type: "POST",
          
                      data:  new FormData(this),
          
                      contentType: false,
          
                      cache: false,
          
                      processData:false,
                      beforeSend: function() {
                        // Disable the submit button
                        jQuery(".enqsubmit-button").prop("disabled", true);
                    },
          
                      success: function(data){
          
                          document.getElementById("photography-form").reset();  
                          jQuery('#loader-icons').hide();
                          location.reload();
                          return toastalert();
          
                      },
          
                      error: function(){
                        jQuery(".enqsubmit-button").prop("disabled", false);
                      },
                      complete: function() {
                        // Enable the submit button after request completes
                        jQuery(".enqsubmit-button").prop("disabled", false);
                    }
          
                  });
          
              }
              else {
                // Scroll to the first error message
                var firstError = jQuery('.info:visible').first();
                if (firstError.length) {
                    // Scroll smoothly to the first error message
                    jQuery('html, body').animate({
                        scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                    }, 500);
                }
            }
          
          })
          
          });
          
          function validationphotographerenquiry(){
          
          var valid = true;
          
          jQuery(".info").html('');
          
          if(!jQuery("#enqnamecnt").val()) {
          
            jQuery("#enqnameinfo").html("Please enter a name");  
          
            jQuery("#enqnamecnt").css('border-color','red');
          
           valid = false;  
          
          }
          else if (!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
            jQuery("#enqnameinfo").html("Please enter a valid name (up to 100 characters)");
            jQuery("#enqnamecnt").css('border-color', 'red');
            valid = false;
        }
          
        else {
          jQuery("#enqnameinfo").html("");  
          jQuery("#enqnamecnt").css('border-color', '');
        
      }
          
        
          if(!jQuery("#enqphonecnt").val()) {
          
            jQuery("#enqnumberinfo").html("Please enter mobile number");
          
            jQuery("#enqphonecnt").css('border-color','red');
          
            valid = false;
          
          }

          else if (!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
            jQuery("#enqnumberinfo").html("Please enter valid mobile number");

            jQuery("#enqphonecnt").css('border-color', 'red ');

            valid = false;

        }
          
          else {
            
            jQuery("#enqnumberinfo").html("");

            jQuery("#enqphonecnt").css('border-color', '');
          }
          
          if(!jQuery("#enqemailcnt").val()) {
          
            jQuery("#enqemailinfo").html("Please enter email");
          
            jQuery("#enqemailcnt").css('border-color','red');
          
            valid = false;
          
          }
          else if (!jQuery("#enqemailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
            jQuery("#enqemailinfo").html("Please enter valid email");

            jQuery("#enqemailcnt").css('border-color', 'red');

            valid = false;

        }
          
          else {
            jQuery("#enqemailinfo").html("");

            jQuery("#enqemailcnt").css('border-color', '');
          }
          
          if(!jQuery("#eventtype").val()) { 
            jQuery("#enqeventinfo").html("Please select an event type");   
            jQuery("#eventtype").css('border-color','red');
            valid = false;
          
          }
          else {
            jQuery("#enqeventinfo").html("");   
            jQuery("#eventtype").css('border-color','');
          }
          if(!jQuery("#enqeventlocation").val()) {
          
            jQuery("#enqeventlocationinfo").html("Please enter the location");
          
            jQuery("#enqeventlocation").css('border-color','red');
          
            valid = false;
          
          }
          else {
            jQuery("#enqeventlocationinfo").html("");
          
            jQuery("#enqeventlocation").css('border-color','');
          }
          if(!jQuery("#txtDate").val()) {
          
            jQuery("#enqeventdate").html("Please enter the event date");
          
            jQuery("#txtDate").css('border-color','red');
          
            valid = false;
          
          }
          else {
            jQuery("#enqeventdateinfo").html("");
          
            jQuery("#txtDate").css('border-color','');
          }
          if(!jQuery("#eventappttime").val()) { 
            jQuery("#enqeventtime").html("Please enter the time ");   
            jQuery("#eventappttime").css('border-color','red');
            valid = false;
          
          }
          else {
            jQuery("#enqeventtime").html("");   
            jQuery("#eventappttime").css('border-color','');
          }
          if(!jQuery("#photoservice").val()) { 
            jQuery("#enqphotoservicesinfo").html("Please select a service");   
            jQuery("#photoservice").css('border-color','red');
            valid = false;
          
          }
          else {
            jQuery("#enqphotoservicesinfo").html("");   
            jQuery("#photoservice").css('border-color','');
          }
          if(!jQuery("#photodeliverables").val()) { 
            jQuery("#enqphotodeliverablesinfo").html("Please select deliverables");   
            jQuery("#mulitiselect_dropdown").css('border-color','red');
            valid = false;
          
          }
          else {
            jQuery("#enqphotodeliverablesinfo").html("");   
            jQuery("#mulitiselect_dropdown").css('border-color','');
          }
         
          if(!jQuery("#eventbudget").val()) { 
            jQuery("#enqphotobudgetinfo").html("Please select your budget");   
            jQuery("#eventbudget").css('border-color','red');
            valid = false;
          
          }
          else {
            jQuery("#enqphotobudgetinfo").html("");   
            jQuery("#eventbudget").css('border-color','');
          }
       
          return valid;
          
          }




// gift Partner



          jQuery(document).ready(function(e) {

 

            jQuery('#loader-icons').hide();
            
              jQuery("#gift-enquiry-form").on('submit',function(e){
            
                e.preventDefault();
            
                var valid;  
            
                valid= validationgiftsenquiry();
            
                if(valid) {
            
                      jQuery('#loader-icons').show();
            
                      
            
                      jQuery.ajax({
            
                        url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-gift-vendor.php",
            
                        type: "POST",
            
                        data:  new FormData(this),
            
                        contentType: false,
            
                        cache: false,
            
                        processData:false,
                        beforeSend: function() {
                          // Disable the submit button
                          jQuery(".enqsubmit-button").prop("disabled", true);
                      },
                        success: function(data){
            
                            document.getElementById("gift-enquiry-form").reset();  
                            jQuery('#loader-icons').hide();
                            location.reload();
                            return toastalert();
            
                        },
            
                        error: function(){
                          jQuery(".enqsubmit-button").prop("disabled", false);
                        },
                        complete: function() {
                          // Enable the submit button after request completes
                          jQuery(".enqsubmit-button").prop("disabled", false);
                      }
            
                    });
            
                }
                else {
                  // Scroll to the first error message
                  var firstError = jQuery('.info:visible').first();
                  if (firstError.length) {
                      // Scroll smoothly to the first error message
                      jQuery('html, body').animate({
                          scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                      }, 500);
                  }
              }
            })
            
            });
            
            function validationgiftsenquiry(){
            
            var valid = true;
            
            jQuery(".info").html('');
            
            if(!jQuery("#enqnamecnt").val()) {
            
              jQuery("#enqnameinfo").html("Please enter a name");  
            
              jQuery("#enqnamecnt").css('border-color','red');
            
             valid = false;  
            
            }
            
            if(!jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
            
              jQuery("#enqnameinfo").html("Please enter valid name");  
            
              jQuery("#enqnamecnt").css('border-color','red');
            
              valid = false;
            
            }
            
          
            if(!jQuery("#enqphonecnt").val()) {
            
              jQuery("#enqnumberinfo").html("Please enter mobile number");
            
              jQuery("#enqphonecnt").css('border-color','red');
            
              valid = false;
            
            }
            
            if(!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
            
              jQuery("#enqnumberinfo").html("Please enter valid mobile number");
            
              jQuery("#enqphonecnt").css('border-color','red');
            
              valid = false;
            
            }
            
            if(!jQuery("#enqemailcnt").val()) {
            
              jQuery("#enqemailinfo").html("Please enter email");
            
              jQuery("#enqemailcnt").css('border-color','red');
            
              valid = false;
            
            }
            
            if(!jQuery("#enqemailcnt").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            
              jQuery("#enqemailinfo").html("Please enter Valid email");
            
              jQuery("#enqemailcnt").css('border-color','red');
            
              valid = false;
            
            }
            
            if(!jQuery("#eventtype").val()) { 
              jQuery("#enqeventinfo").html("Please select an event type");   
              jQuery("#eventtype").css('border-color','red');
              valid = false;
            
            }
            if(!jQuery("#giftdeliverylocation").val()) {
            
              jQuery("#giftdeliverylocationinfo").html("Please enter valid location");
            
              jQuery("#giftdeliverylocation").css('border-color','red');
            
              valid = false;
            
            }
            if(!jQuery("#txtDate").val()) {
            
              jQuery("#giftdeliverydateinfo").html("Please enter the expected delivery date");
            
              jQuery("#txtDate").css('border-color','red');
            
              valid = false;
            
            }
            
            if(!jQuery("#gifttypeservice").val()) { 
              jQuery("#enqgifttypeinfo").html("Please select a service");   
              jQuery("#gifttypeservice").css('border-color','red');
              valid = false;
            
            }
            if(!jQuery("#enqgiftsquantity").val().match(/^[0-9]+$/)) {
            
              jQuery("#enqgiftsquantityinfo").html("Please enter valid numbers");
            
              jQuery("#enqgiftsquantity").css('border-color','red');
            
              valid = false;
            
            }
           
            if(!jQuery("#eventbudget").val()) { 
              jQuery("#enqgiftbudgetinfo").html("Please select your budget");   
              jQuery("#eventbudget").css('border-color','red');
              valid = false;
            
            }
         
            return valid;
            
            }


            // enquiry service providers


            jQuery(document).ready(function(e) {

 

              jQuery('#loader-icons').hide();
              
                jQuery("#enquiry-partner-general").on('submit',function(e){
              
                  e.preventDefault();
              
                  var validgeneral;  
              
                  validgeneral= validationgeneralcontact();
              
                  if(validgeneral) {
              
                        jQuery('#loader-icons').show();
              
                        
              
                        jQuery.ajax({
              
                          url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/general-enquiries-all-vendors.php",
              
                          type: "POST",
              
                          data:  new FormData(this),
              
                          contentType: false,
              
                          cache: false,
              
                          processData:false,
                          beforeSend: function() {
                            // Disable the submit button
                            jQuery("#contact-submit").prop("disabled", true);
                        },
              
                          success: function(data){
              
                              document.getElementById("enquiry-partner-general").reset();  
                              jQuery('#loader-icons').hide();
                              window.location.href="https://www.planmadi.com/"
                                return toastalert();
                               
              
                          },
              
                          error: function(){
                            jQuery("#contact-submit").prop("disabled", false);
                          },
                          complete: function() {
                            // Enable the submit button after request completes
                            jQuery("#contact-submit").prop("disabled", false);
                        }
              
                      });
              
                  }
                  else {
                    // Scroll to the first error message
                    var firstError = jQuery('.info:visible').first();
                    if (firstError.length) {
                        // Scroll smoothly to the first error message
                        jQuery('html, body').animate({
                            scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                        }, 500);
                    }
                }
              
              })
              
              });
              
              function validationgeneralcontact(){
              
              var validgeneral = true;
              
              jQuery(".info").html('');
              
              if(!jQuery("#namecnt").val()) {
              
                jQuery("#nameinfo").html("Please enter a name");  
              
                jQuery("#namecnt").css('border-color','red');
              
               validgeneral = false;  
              
              }
              
             else if(!jQuery("#namecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#namecnt").val().match(/^[a-zA-Z\s]+$/)) {
              
                jQuery("#nameinfo").html("Please enter valid name");  
              
                jQuery("#namecnt").css('border-color','red');
              
                validgeneral = false;
              
              }
              else {
                jQuery("#nameinfo").html("");  
              
                jQuery("#namecnt").css('border-color','');
              }
              
            
              if(!jQuery("#phonecnt").val()) {
              
                jQuery("#numberinfo").html("Please enter mobile number");
              
                jQuery("#phonecnt").css('border-color','red');
              
                validgeneral = false;
              
              }
              
             else if(!jQuery("#phonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
              
                jQuery("#numberinfo").html("Please enter valid mobile number");
              
                jQuery("#phonecnt").css('border-color','red');
              
                validgeneral = false;
              
              }
              else {
                jQuery("#numberinfo").html("");
              
                jQuery("#phonecnt").css('border-color','');
              }
              
             
              if (!jQuery("#emailcnt").val()) {
  
                jQuery("#emailinfo").html("Please enter email");
    
                jQuery("#emailcnt").css('border-color', 'red');
    
                validgeneral = false;
    
            }
    
            else if (!jQuery("#emailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    
                jQuery("#emailinfo").html("Please enter valid email");
    
                jQuery("#emailcnt").css('border-color', 'red');
    
                validgeneral = false;
    
            }
            else {
                jQuery("#emailinfo").html("");
                jQuery("#emailcnt").css('border-color', '');
               
            }
  
              

              if(!jQuery("#msgcnt").val()) { 
                jQuery("#moreinfo").html("Please mention more details about your event");   
                jQuery("#msgcnt").css('border-color','red');
                validgeneral = false;
              
              }
              else {
                jQuery("#moreinfo").html("");   
                jQuery("#msgcnt").css('border-color','');
              }
             

          
          
              return validgeneral;
              
              }


              // offer-enquiry-forms

              jQuery(document).ready(function(e) {

 

                jQuery('#loader-icons').hide();
                
                  jQuery("#offers-enquiry").on('submit',function(e){
                
                    e.preventDefault();
                
                    var validenquire;  
                
                    validenquire= validationofferenquiry();
                
                    if(validenquire) {
                
                          jQuery('#loader-icons').show();
                
                          
                
                          jQuery.ajax({
                
                            url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/offer-mailer.php",
                
                            type: "POST",
                
                            data:  new FormData(this),
                
                            contentType: false,
                
                            cache: false,
                
                            processData:false,
                            beforeSend: function() {
                              // Disable the submit button
                              jQuery("#contact-submit").prop("disabled", true);
                          },
                
                            success: function(data){
                
                                document.getElementById("offers-enquiry").reset();  
                                jQuery('#loader-icons').hide();
                                  return toastalert();
                               
                
                            },
                
                            
error: function(){
  jQuery("#contact-submit").prop("disabled", false);
},
complete: function() {
  // Enable the submit button after request completes
  jQuery("#contact-submit").prop("disabled", false);
}
                
                        });
                
                    }
                    else {
                      // Scroll to the first error message
                      var firstError = jQuery('.info:visible').first();
                      if (firstError.length) {
                          // Scroll smoothly to the first error message
                          jQuery('html, body').animate({
                              scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                          }, 500);
                      }
                  }
                
                })
                
                });
                
                function validationofferenquiry(){
                
                var validenquire = true;
                
                jQuery(".info").html('');
                
                if(!jQuery("#namecnt").val()) {
                
                  jQuery("#nameinfo").html("Please enter a name");  
                
                  jQuery("#namecnt").css('border-color','red');
                
                  validenquire = false;  
                
                }
                else if (!jQuery("#namecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#namecnt").val().match(/^[a-zA-Z\s]+$/)) {
                  jQuery("#nameinfo").html("Please enter a valid name (up to 100 characters)");
                  jQuery("#namecnt").css('border-color', 'red');
                  validenquire = false;
              }
                
              else {
                jQuery("#nameinfo").html("");
                jQuery("#namecnt").css('border-color', '');
              }
                
              
                if(!jQuery("#phonecnt").val()) {
                
                  jQuery("#numberinfo").html("Please enter mobile number");
                
                  jQuery("#phonecnt").css('border-color','red');
                
                  validenquire = false;
                
                }
                 else if (!jQuery("#phonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
              jQuery("#numberinfo").html("Please enter valid mobile number");
  
              jQuery("#phonecnt").css('border-color', 'red ');
  
              validenquire = false;
  
          }
             else {
              jQuery("#numberinfo").html("");
  
              jQuery("#phonecnt").css('border-color', '');
             }
                
                if(!jQuery("#emailcnt").val()) {
                
                  jQuery("#emailinfo").html("Please enter email");
                
                  jQuery("#emailcnt").css('border-color','red');
                
                  validenquire = false;
                
                }
                else if (!jQuery("#emailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
                  jQuery("#emailinfo").html("Please enter valid email");
      
                  jQuery("#emailcnt").css('border-color', 'red');
      
                  validenquire = false;
      
              }
                
                
                if(!jQuery("#msgcnt").val()) {
                
                  jQuery("#more-info").html("Please enter more details");
                
                  jQuery("#msgcnt").css('border-color','red');
                
                  validenquire = false;
                
                }
                else {
                  jQuery("#more-info").html("");
                
                  jQuery("#msgcnt").css('border-color','');
                }
              
            
                return validenquire;
                
                }




// venue-forms


jQuery(document).ready(function(e) {

 

  jQuery('#loader-icons').hide();
  
    jQuery("#venues-enquiry").on('submit',function(e){
  
      e.preventDefault();
  
      var validvenue;  
  
      validvenue= validationvenuepartner();
  
      if(validvenue) {
  
            jQuery('#loader-icons').show();
  
            
  
            jQuery.ajax({
  
              url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/venue-mailer.php",
  
              type: "POST",
  
              data:  new FormData(this),
  
              contentType: false,
  
              cache: false,
  
              processData:false,
              beforeSend: function() {
                // Disable the submit button
                jQuery(".enqsubmit-button").prop("disabled", true);
            },
              success: function(data){
  
                  document.getElementById("venues-enquiry").reset();  
                  jQuery('#loader-icons').hide();
                    return toastalert();
                 
  
              },
  
              error: function(){
                jQuery(".enqsubmit-button").prop("disabled", false);
              },
              complete: function() {
                // Enable the submit button after request completes
                jQuery(".enqsubmit-button").prop("disabled", false);
            }
  
          });
  
      }
      else {
        // Scroll to the first error message
        var firstError = jQuery('.info:visible').first();
        if (firstError.length) {
            // Scroll smoothly to the first error message
            jQuery('html, body').animate({
                scrollTop: firstError.offset().top - 100 // Adjust this value as needed
            }, 500);
        }
    }
  
  })
  
  });
  
  function validationvenuepartner(){
  
  var validvenue = true;
  
  jQuery(".info").html('');
  
  if(!jQuery("#enqnamecnt").val()) {
  
    jQuery("#enqnameinfo").html("Please enter a name");  
  
    jQuery("#enqnamecnt").css('border-color','red');
  
    validvenue = false;  
  
  }

  else if (!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
    jQuery("#enqnameinfo").html("Please enter a valid Name (up to 100 characters)");
    jQuery("#enqnamecnt").css('border-color', 'red');
    validvenue = false;
}
  
else {
  jQuery("#enqnameinfo").html("");
  jQuery("#enqnamecnt").css('border-color', '');
}

  if(!jQuery("#enqphonecnt").val()) {
  
    jQuery("#enqnumberinfo").html("Please enter mobile number");
  
    jQuery("#enqphonecnt").css('border-color','red');
  
    validvenue = false;
  
  }
  else if (!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {
  
    jQuery("#enqnumberinfo").html("Please enter valid mobile number");

    jQuery("#enqphonecnt").css('border-color', 'red ');

    validvenue = false;

}
  else {
    jQuery("#enqnumberinfo").html("");

    jQuery("#enqphonecnt").css('border-color', '');
  }
  
  if(!jQuery("#enqemailcnt").val()) {
  
    jQuery("#enqemailinfo").html("Please enter email");
  
    jQuery("#enqemailcnt").css('border-color','red');
  
    validvenue = false;
  
  }
  else if (!jQuery("#enqemailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
    jQuery("#enqemailinfo").html("Please enter valid Email");

    jQuery("#enqemailcnt").css('border-color', 'red');

    validvenue = false;

}
else {
  jQuery("#enqemailinfo").html("");

  jQuery("#enqemailcnt").css('border-color', '');
}
  

  
  // if(!jQuery("#foodoptions").val()) { 
  //   jQuery("#foodoptionsinfo").html("Please select on option");   
  //   jQuery("#foodoptions").css('border-color','red');
  //   validvenue = false;
  
  // }
  // else {
  //   jQuery("#foodoptionsinfo").html("");   
  //   jQuery("#foodoptions").css('border-color','');
  // }

  if(!jQuery("#checkinDate").val()) {
        
    jQuery("#enqcheckindateinfo").html("Please select the checkin date");
  
    jQuery("#checkinDate").css('border-color','red');
  
    validvenue = false;
  
  }
  else {
    jQuery("#enqcheckindateinfo").html("");
  
    jQuery("#checkinDate").css('border-color','');
  }

  if(!jQuery("#checkoutDate").val()) {
        
    jQuery("#enqcheckoutdateinfo").html("Please select the checkout date");
  
    jQuery("#checkoutDate").css('border-color','red');
  
    validvenue = false;
  
  }
  else {
    jQuery("#enqcheckoutdateinfo").html("");
  
    jQuery("#checkoutDate").css('border-color','');
  }

  if(!jQuery("#enqadultgroupsize").val()) {
        
    jQuery("#enqadultgroupsizeinfo").html("Please enter the number of adults");
  
    jQuery("#enqadultgroupsize").css('border-color','red');
  
    validvenue = false;
  
  }
  else if (!jQuery("#enqadultgroupsize").val().match(/^\b([0-9]|[1-9][0-9])\b$/)){
    jQuery("#enqadultgroupsizeinfo").html("Please enter valid information");
    jQuery("#enqadultgroupsize").css('border-color','red');
    validvenue = false;
  }
  else{
    jQuery("#enqadultgroupsizeinfo").html("");
    jQuery("#enqadultgroupsize").css('border-color','');
  }

  if(!jQuery("#eventtype").val()) {
        
    jQuery("#eventtypeinfo").html("Please select your event");
  
    jQuery("#eventtype").css('border-color','red');
  
    validvenue = false;
  
  }
  
  // if(!jQuery("#roomnumbers").val()) {
        
  //   jQuery("#roomnumbersinfo").html("Please enter the No of rooms required");
  
  //   jQuery("#roomnumbers").css('border-color','red');
  
  //   validvenue = false;
  
  // }
  // else if (!jQuery("#roomnumbers").val().match(/^\b([0-9]|[1-9][0-9])\b$/)){
  //   jQuery("#roomnumbersinfo").html("Please enter valid numbers");
  //   jQuery("#roomnumbers").css('border-color','red');
  //   validvenue = false;
  // }
  // else{
  //   jQuery("#roomnumbersinfo").html("");
  //   jQuery("#roomnumbers").css('border-color','');
  // }
  // if(!jQuery("#roomtype").val()) {
        
  //   jQuery("#roomtypeinfo").html("Please select the room type required");
  
  //   jQuery("#roomtype").css('border-color','red');
  
  //   validvenue = false;
  
  // }
  return validvenue;
  
  }



  // general services booking form

  jQuery(document).ready(function(e) {

 

    jQuery('#loader-icons').hide();
    
      jQuery("#order-enquiry-form").on('submit',function(e){
    
        e.preventDefault();
    
        var valid;  
    
        valid= validationServiceEnquiry();
    
        if(valid) {
    
              jQuery('#loader-icons').show();
    
              
    
              jQuery.ajax({
    
                url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/all-services-enquiries.php",
    
                type: "POST",
    
                data:  new FormData(this),
    
                contentType: false,
    
                cache: false,
    
                processData:false,
                beforeSend: function() {
                  // Disable the submit button
                  jQuery("#enqsubmit-button").prop("disabled", true);
              },
    
                success: function(data){
    
                    document.getElementById("order-enquiry-form").reset();  
                    jQuery('#loader-icons').hide();
                    toastalert();
                          setTimeout(function () {
                              location.reload();
                          }, 3000);
                   
    
                },
    
                error: function(){
                  jQuery("#enqsubmit-button").prop("disabled", false);
                },
                complete: function() {
                  // Enable the submit button after request completes
                  jQuery("#enqsubmit-button").prop("disabled", false);
              }
    
            });
    
        }
        else {
          // Scroll to the first error message
          var firstError = jQuery('.info:visible').first();
          if (firstError.length) {
              // Scroll smoothly to the first error message
              jQuery('html, body').animate({
                  scrollTop: firstError.offset().top - 100 // Adjust this value as needed
              }, 500);
          }
      }
    
    })
    
    });
    
    function validationServiceEnquiry(){
    
    var valid = true;
    
    jQuery(".info").html('');
    
    if(!jQuery("#enqnamecnt").val()) {
    
      jQuery("#enqnameinfo").html("Please enter a name");  
    
      jQuery("#enqnamecnt").css('border-color','red');
    
     valid = false;  
    
    }
    else if(!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)){
      jQuery("#enqnameinfo").html("Please enter a valid name (up to 100 characters)");
      jQuery("#enqnamecnt").css('border-color', 'red');
      valid = false;  
    }
    else {
      jQuery("#enqnameinfo").html(""); 
      jQuery("#enqnamecnt").css('border-color', '');
    
  }
    

    
  
    if(!jQuery("#enqphonecnt").val()) {
    
      jQuery("#enqnumberinfo").html("Please enter mobile number");
    
      jQuery("#enqphonecnt").css('border-color','red');
    
      valid = false;
    
    }
    else if (!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {

      jQuery("#enqnumberinfo").html("Please enter valid mobile number");

      jQuery("#enqphonecnt").css('border-color', 'red ');

      valid = false;

  }
  else {
    jQuery("#enqnumberinfo").html("");  
    jQuery("#enqphonecnt").css('border-color', '');
  }
    
   
    
    if(!jQuery("#enqemailcnt").val()) {
    
      jQuery("#enqemailinfo").html("Please enter email");
    
      jQuery("#enqemailcnt").css('border-color','red');
    
      valid = false;
    
    }
    else if(!jQuery("#enqemailcnt").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
      jQuery("#enqemailinfo").html("Please enter valid email");
    
      jQuery("#enqemailcnt").css('border-color','red');
      valid = false;
    }
    
else {
  jQuery("#enqemailinfo").html("");  
  jQuery("#enqemailcnt").css('border-color', '');
}
    
    if(!jQuery("#generalservices").val()) { 
      jQuery("#generalservicesinfo").html("Please select a service");   
      jQuery("#mulitiselect_dropdown").css('border-color','red');
      valid = false;
    
    }
    else {
      jQuery("#mulitiselect_dropdown").css('border-color','');
    }

    return valid;
    
    }





    // catering page

    jQuery(document).ready(function(e) {

 

      jQuery('#loader-icons').hide();
      
        jQuery("#catering-enquiry-form").on('submit',function(e){
      
          e.preventDefault();
      
          var validCatering;  
      
          validCatering= validationCatering();
      
          if(validCatering) {
      
                jQuery('#loader-icons').show();
      
                
      
                jQuery.ajax({
      
                  url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/catering-mailer.php",
      
                  type: "POST",
      
                  data:  new FormData(this),
      
                  contentType: false,
      
                  cache: false,
      
                  processData:false,
                  beforeSend: function() {
                    // Disable the submit button
                    jQuery("#enqsumit-button").prop("disabled", true);
                },
      
                  success: function(data){
      
                      document.getElementById("catering-enquiry-form").reset();  
                      jQuery('#loader-icons').hide();
                     
                        return toastalert();
                       
      
                  },
      
                  error: function(){
                    jQuery("#enqsumit-button").prop("disabled", false);
                  },
                  complete: function() {
                    // Enable the submit button after request completes
                    jQuery("#enqsumit-button").prop("disabled", false);
                }
      
              });
      
          }
          else {
            // Scroll to the first error message
            var firstError = jQuery('.info:visible').first();
            if (firstError.length) {
                // Scroll smoothly to the first error message
                jQuery('html, body').animate({
                    scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                }, 500);
            }
        }
      
      })
      
      });
      
      function validationCatering(){
      
      var validCatering = true;
      
      jQuery(".info").html('');
      
      if(!jQuery("#caname").val()) {
      
        jQuery("#canameinfo").html("Please enter a name");  
      
        jQuery("#caname").css('border-color','red');
      
       validCatering = false;  
      
      }
      
     else if(!jQuery("#caname").val().match(/^[\s\S]{1,100}$/) || !jQuery("#caname").val().match(/^[a-zA-Z\s]+$/)) {
      
        jQuery("#canameinfo").html("Please enter a valid name");  
      
        jQuery("#caname").css('border-color','red');
      
        validCatering = false;
      
      }
      else {
        jQuery("#canameinfo").html("");  
      
        jQuery("#caname").css('border-color','');
      }
      
    
      if(!jQuery("#caphone").val()) {
      
        jQuery("#caphoneinfo").html("Please enter mobile number");
      
        jQuery("#caphone").css('border-color','red');
      
        validCatering = false;
      
      }
      
     else if(!jQuery("#caphone").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
      
        jQuery("#caphoneinfo").html("Please enter valid mobile number");
      
        jQuery("#caphone").css('border-color','red');
      
        validCatering = false;
      
      }
      else {
        jQuery("#caphoneinfo").html("");
      
        jQuery("#caphone").css('border-color','');
      }
      
     
      if (!jQuery("#caemail").val()) {

        jQuery("#caemailinfo").html("Please enter email");

        jQuery("#caemail").css('border-color', 'red');

        validCatering = false;

    }

    else if (!jQuery("#caemail").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {

        jQuery("#caemailinfo").html("Please enter valid email");

        jQuery("#caemail").css('border-color', 'red');

        validCatering = false;

    }
    else {
        jQuery("#caemailinfo").html("");
        jQuery("#caemail").css('border-color', '');
       
    }

      

      if(!jQuery("#txtDate").val()) { 
        jQuery("#enqeventdateinfo").html("Please enter the event date");   
        jQuery("#txtDate").css('border-color','red');
        validCatering = false;
      
      }
      else {
        jQuery("#enqeventdateinfo").html("");   
        jQuery("#txtDate").css('border-color','');
      }
      if(!jQuery("#calocation").val()) { 
        jQuery("#calocationinfo").html("Please enter the location");   
        jQuery("#calocation").css('border-color','red');
        validCatering = false;
      
      }
      else {
        jQuery("#calocationinfo").html("");   
        jQuery("#calocation").css('border-color','');
      }
     
      if(!jQuery("#canumberofpersons").val()) { 
        jQuery("#capersonsinfo").html("Please enter number of people");   
        jQuery("#canumberofpersons").css('border-color','red');
        validCatering = false;
      
      }
      else {
        jQuery("#capersonsinfo").html("");   
        jQuery("#canumberofpersons").css('border-color','');
      }
  
  
      return validCatering;
      
      }



      // Decorator Form

      jQuery(document).ready(function(e) {

 

        jQuery('#loader-icons').hide();
        
          jQuery("#decorator-enquiry-form").on('submit',function(e){
        
            e.preventDefault();
        
            var decorvalid;  
        
            decorvalid= validationdecoratorcontact();
        
            if(decorvalid) {
        
                  jQuery('#loader-icons').show();
        
                  
        
                  jQuery.ajax({
        
                    url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-decorator-mail.php",
        
                    type: "POST",
        
                    data:  new FormData(this),
        
                    contentType: false,
        
                    cache: false,
        
                    processData:false,
                    beforeSend: function() {
                      // Disable the submit button
                      jQuery("#enqcontactsubmit").prop("disabled", true);
                  },
        
                    success: function(data){
        
                        document.getElementById("decorator-enquiry-form").reset();  
                        jQuery('#loader-icons').hide();
                           toastalert();

                          setTimeout(function () {
                            location.reload();
                        }, 3000);
        
                    },
        
                    error: function(){
                      jQuery("#enqcontactsubmit").prop("disabled", false);
                    },
                    complete: function() {
                      // Enable the submit button after request completes
                      jQuery("#enqcontactsubmit").prop("disabled", false);
                  }
                  
        
                });
        
            }
            else {
              // Scroll to the first error message
              var firstError = jQuery('.info:visible').first();
              if (firstError.length) {
                  // Scroll smoothly to the first error message
                  jQuery('html, body').animate({
                      scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                  }, 500);
              }
          }
        
        })
        
        });
        
        function validationdecoratorcontact(){
        
        var valid = true;
        
        jQuery(".info").html('');
        
        if(!jQuery("#decorname").val()) {
        
          jQuery("#name-info").html("Please enter a name");  
        
          jQuery("#decorname").css('border-color','red');
        
         valid = false;  
        
        }
        
       else if(!jQuery("#decorname").val().match(/^[\s\S]{1,100}$/) || !jQuery("#decorname").val().match(/^[a-zA-Z\s]+$/))  {
        
          jQuery("#name-info").html("Please enter valid name");  
        
          jQuery("#decorname").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#name-info").html(""); // 
                  jQuery("#decorname").css('border-color', '');
        }
        
      
        if(!jQuery("#decormobilenumber").val()) {
        
          jQuery("#decornum-info").html("Please enter mobile number");
        
          jQuery("#decormobilenumber").css('border-color','red');
        
          valid = false;
        
        }
        
       else if(!jQuery("#decormobilenumber").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
        
          jQuery("#decornum-info").html("Please enter valid mobile number");
        
          jQuery("#decormobilenumber").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#decornum-info").html(""); // 
          jQuery("#decormobilenumber").css('border-color', '');
        } 


        if(!jQuery("#decoraltmobilenumber").val()) {
        
          jQuery("#decoraltnum-info").html("Please enter mobile number");
        
          jQuery("#decoraltmobilenumber").css('border-color','red');
        
          valid = false;
        
        }
        
       else if(!jQuery("#decoraltmobilenumber").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
        
          jQuery("#decoraltnum-info").html("Please enter valid mobile number");
        
          jQuery("#decoraltmobilenumber").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#decoraltnum-info").html(""); // 
          jQuery("#decoraltmobilenumber").css('border-color', '');
        } 
        
        
        if(!jQuery("#decoremail").val()) {
        
          jQuery("#decor-email-info").html("Please enter email");
        
          jQuery("#decoremail").css('border-color','red');
        
          valid = false;
        
        }
        
       else if(!jQuery("#decoremail").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        
          jQuery("#decor-email-info").html("Please enter valid email");
        
          jQuery("#decoremail").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#decor-email-info").html("");
          jQuery("#decoremail").css('border-color', '');
         
      }
        
        if(!jQuery("#decorationbudget").val()) { 
          jQuery("#decorbudgetinfo").html("Please select your budget");   
          jQuery("#decorationbudget").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#decorbudgetinfo").html("");   
          jQuery("#decorationbudget").css('border-color','');
        }

        if(!jQuery("#city").val()) { 
          jQuery("#city-info").html("Please enter the city");   
          jQuery("#city").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#city-info").html("");   
          jQuery("#city").css('border-color','');
        }

        if(!jQuery("#venue").val()) { 
          jQuery("#venue-info").html("Please enter the venue");   
          jQuery("#venue").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#venue-info").html("");   
          jQuery("#venue").css('border-color','');
        }
        if(!jQuery("#txtDate").val()) {
        
          jQuery("#enqeventdateinfo").html("Please enter the event date");
        
          jQuery("#txtDate").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqeventdateinfo").html("");
        
          jQuery("#txtDate").css('border-color','');
        }

        if(!jQuery("#eventappttime").val()) {
        
          jQuery("#enqeventtime").html("Please enter the event time");
        
          jQuery("#eventappttime").css('border-color','red');
        
          valid = false;
        
        }
        else {
          jQuery("#enqeventtime").html("");
        
          jQuery("#eventappttime").css('border-color','');
        }

        if(!jQuery("#decorationtype").val()) { 
          jQuery("#decorationtype-info").html("Please select an decoration type");   
          jQuery("#decorationtype").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#decorationtype-info").html("");   
          jQuery("#decorationtype").css('border-color','');
        }

        if (!jQuery("#themedecorationname").hasClass('hidden')) {
          if (!jQuery("#themedecorationname").val()) {
              jQuery("#themedecorinfo").html("Please enter the preferred theme");
              jQuery("#themedecorationname").css('border-color', 'red');
              valid = false;

          }
          else {
              jQuery("#themedecorinfo").html("");
              jQuery("#themedecorationname").css('border-color', '');

          }
      }
        if(!jQuery("#ocassion-type").val()) { 
          jQuery("#ocassion-info").html("Please select an ocasssion");   
          jQuery("#ocassion-type").css('border-color','red');
          valid = false;
        
        }
        else {
          jQuery("#ocassion-info").html("");   
          jQuery("#ocassion-type").css('border-color','');
        }
        return valid;
        
        }



        // classes-enquiry


        jQuery(document).ready(function(e) {

 

          jQuery('#loader-icons').hide();
          
            jQuery("#baking-enrollment").on('submit',function(e){
          
              e.preventDefault();
          
              var validEnroll;  
          
              validEnroll= validationEnrollment();
          
              if(validEnroll) {
          
                    jQuery('#loader-icons').show();
          
                    
          
                    jQuery.ajax({
          
                      url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/mailer-baking-classes.php",
          
                      type: "POST",
          
                      data:  new FormData(this),
          
                      contentType: false,
          
                      cache: false,
          
                      processData:false,
                      beforeSend: function() {
                        // Disable the submit button
                        jQuery("#enrollment-submit").prop("disabled", true);
                    },
          
                      success: function(data){
          
                          document.getElementById("baking-enrollment").reset();  
                          jQuery('#loader-icons').hide();
                            return toastalert();
                         
          
                      },
          
                      error: function(){
                        jQuery("#enrollment-submit").prop("disabled", false);
                      },
                      complete: function() {
                        // Enable the submit button after request completes
                        jQuery("#enrollment-submit").prop("disabled", false);
                    }
                    
          
                  });
          
              }
              else {
                // Scroll to the first error message
                var firstError = jQuery('.info:visible').first();
                if (firstError.length) {
                    // Scroll smoothly to the first error message
                    jQuery('html, body').animate({
                        scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                    }, 500);
                }
            }
          
          })
          
          });
          
          function validationEnrollment(){
          
          var validEnroll = true;
          
          jQuery(".info").html('');
          
          if(!jQuery("#nameenq").val()) {
          
            jQuery("#nameenqinfo").html("Please enter a name");  
          
            jQuery("#nameenq").css('border-color','red');
          
           validEnroll = false;  
          
          }
          
         else if(!jQuery("#nameenq").val().match(/^[\s\S]{1,100}$/) || !jQuery("#nameenq").val().match(/^[a-zA-Z\s]+$/))  {
          
            jQuery("#nameenqinfo").html("Please enter valid name");  
          
            jQuery("#nameenq").css('border-color','red');
          
            validEnroll = false;
          
          }
          else {
            jQuery("#nameenqinfo").html(""); // 
                    jQuery("#nameenq").css('border-color', '');
          }
          
        
          if(!jQuery("#mobileenq").val()) {
          
            jQuery("#mobileenqinfo").html("Please enter mobile number");
          
            jQuery("#mobileenq").css('border-color','red');
          
            validEnroll = false;
          
          }
          
         else if(!jQuery("#mobileenq").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
          
            jQuery("#mobileenqinfo").html("Please enter valid mobile number");
          
            jQuery("#mobileenq").css('border-color','red');
          
            validEnroll = false;
          
          }
          else {
            jQuery("#mobileenqinfo").html(""); // 
            jQuery("#mobileenq").css('border-color', '');
          } 
          
          if(!jQuery("#emailenq").val()) {
          
            jQuery("#emailenqinfo").html("Please enter email");
          
            jQuery("#emailenq").css('border-color','red');
          
            validEnroll = false;
          
          }
          
         else if(!jQuery("#emailenq").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
          
            jQuery("#emailenqinfo").html("Please enter valid email");
          
            jQuery("#emailenq").css('border-color','red');
          
            validEnroll = false;
          
          }
          else {
            jQuery("#emailenqinfo").html("");
            jQuery("#emailenq").css('border-color', '');
           
        }
          
          if(!jQuery("#cityenq").val()) { 
            jQuery("#cityenqinfo").html("Please enter your city");   
            jQuery("#cityenq").css('border-color','red');
            validEnroll = false;
          
          }
          else {
            jQuery("#cityenqinfo").html("");   
            jQuery("#cityenq").css('border-color','');
          }


          if(!jQuery("#addressenq").val()) { 
            jQuery("#addressenqinfo").html("Please enter your address");   
            jQuery("#addressenq").css('border-color','red');
            validEnroll = false;
          
          }
          else {
            jQuery("#addressenqinfo").html("");   
            jQuery("#addressenq").css('border-color','');
          }
      
          return validEnroll;
          
          }



                // Blog Subscribe
      jQuery(document).ready(function(e) {

        jQuery('#pre-loader').hide();
        
          jQuery("#blog-newsletter").on('submit',function(e){
        
            e.preventDefault();
        
            var validSubscribe;  
        
            validSubscribe = validationsubscriberBlog();
        
            if(validSubscribe) {
        
                  jQuery('#pre-loader').show();
        
                  
        
                  jQuery.ajax({
        
                    url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/subscriber-blog.php",
        
                    type: "POST",
        
                    data:  new FormData(this),
        
                    contentType: false,
        
                    cache: false,
        
                    processData:false,
                    beforeSend: function() {
                      // Disable the submit button
                      jQuery(".subscribebtn").prop("disabled", true);
                  },
        
                    success: function(data){
        
                        document.getElementById("blog-newsletter").reset();  
                        jQuery('#pre-loader').hide();
                        jQuery('.subscribe-newsletter').hide();
                        confirmationblogalert();
                       
                         
                         setTimeout(function() {
                          window.location.hash = "detail-layouts";
                      }, 3000); 
                    },
        
                    error: function(){
                      jQuery(".subscribebtn").prop("disabled", false);
                    },
                    complete: function() {
                      // Enable the submit button after request completes
                      jQuery(".subscribebtn").prop("disabled", false);
                  }
        
                });
        
            }
            else {
              // Scroll to the first error message
              var firstError = jQuery('.info:visible').first();
              if (firstError.length) {
                  // Scroll smoothly to the first error message
                  jQuery('html, body').animate({
                      scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                  }, 500);
              }
          }
        
        })
        
        });
        
        function validationsubscriberBlog(){
        
        var validSubscribe = true;
        
        jQuery(".info").html('');
        
        if (!jQuery("#emailenq").val()) {

          jQuery("#emailenqinfo").html("Please enter email");
  
          jQuery("#emailenq").css('border-color', 'red');
  
          validSubscribe = false;
  
      }
  
      else if (!jQuery("#emailenq").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
          jQuery("#emailenqinfo").html("Please enter valid email");
  
          jQuery("#emailenq").css('border-color', 'red');
  
          validSubscribe = false;
  
      }
      else {
          jQuery("#emailenqinfo").html("");
          jQuery("#emailenq").css('border-color', '');
         
      }


    return validSubscribe;
      
  }




// makeup class enroll


jQuery(document).ready(function(e) {

 

  jQuery('#loader-icons').hide();
  
    jQuery("#makeup-enrollment").on('submit',function(e){
  
      e.preventDefault();
  
      var validMuaEnroll;  
  
      validMuaEnroll= validationMakeupEnrollment();
  
      if(validMuaEnroll) {
  
            jQuery('#loader-icons').show();
  
            
  
            jQuery.ajax({
  
              url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/mailer-makeup-classes.php",
  
              type: "POST",
  
              data:  new FormData(this),
  
              contentType: false,
  
              cache: false,
  
              processData:false,
              beforeSend: function() {
                // Disable the submit button
                jQuery("#enrollment-submit").prop("disabled", true);
            },
  
              success: function(data){
  
                  document.getElementById("makeup-enrollment").reset();  
                  jQuery('#loader-icons').hide();
                    return toastalert();
                 
  
              },
  
              error: function(){
                jQuery("#enrollment-submit").prop("disabled", false);
              },
              complete: function() {
                // Enable the submit button after request completes
                jQuery("#enrollment-submit").prop("disabled", false);
            }
            
  
          });
  
      }
      else {
        // Scroll to the first error message
        var firstError = jQuery('.info:visible').first();
        if (firstError.length) {
            // Scroll smoothly to the first error message
            jQuery('html, body').animate({
                scrollTop: firstError.offset().top - 100 // Adjust this value as needed
            }, 500);
        }
    }
  
  })
  
  });
  
  function validationMakeupEnrollment(){
  
  var validMuaEnroll = true;
  
  jQuery(".info").html('');
  
  if(!jQuery("#nameenq").val()) {
  
    jQuery("#nameenqinfo").html("Please enter a name");  
  
    jQuery("#nameenq").css('border-color','red');
  
   validMuaEnroll = false;  
  
  }
  
 else if(!jQuery("#nameenq").val().match(/^[\s\S]{1,100}$/) || !jQuery("#nameenq").val().match(/^[a-zA-Z\s]+$/))  {
  
    jQuery("#nameenqinfo").html("Please enter valid name");  
  
    jQuery("#nameenq").css('border-color','red');
  
    validMuaEnroll = false;
  
  }
  else {
    jQuery("#nameenqinfo").html(""); // 
            jQuery("#nameenq").css('border-color', '');
  }
  

  if(!jQuery("#mobileenq").val()) {
  
    jQuery("#mobileenqinfo").html("Please enter mobile number");
  
    jQuery("#mobileenq").css('border-color','red');
  
    validMuaEnroll = false;
  
  }
  
 else if(!jQuery("#mobileenq").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
  
    jQuery("#mobileenqinfo").html("Please enter valid mobile number");
  
    jQuery("#mobileenq").css('border-color','red');
  
    validMuaEnroll = false;
  
  }
  else {
    jQuery("#mobileenqinfo").html(""); // 
    jQuery("#mobileenq").css('border-color', '');
  } 
  
//   if(!jQuery("#emailenq").val()) {
  
//     jQuery("#emailenqinfo").html("Please enter email");
  
//     jQuery("#emailenq").css('border-color','red');
  
//     validMuaEnroll = false;
  
//   }
  
//  else if(!jQuery("#emailenq").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
  
//     jQuery("#emailenqinfo").html("Please enter valid email");
  
//     jQuery("#emailenq").css('border-color','red');
  
//     validMuaEnroll = false;
  
//   }
//   else {
//     jQuery("#emailenqinfo").html("");
//     jQuery("#emailenq").css('border-color', '');
   
// }
  
  if(!jQuery("#cityenq").val()) { 
    jQuery("#cityenqinfo").html("Please enter your city");   
    jQuery("#cityenq").css('border-color','red');
    validMuaEnroll = false;
  
  }
  else {
    jQuery("#cityenqinfo").html("");   
    jQuery("#cityenq").css('border-color','');
  }


  if(!jQuery("#addressenq").val()) { 
    jQuery("#addressenqinfo").html("Please enter your address");   
    jQuery("#addressenq").css('border-color','red');
    validMuaEnroll = false;
  
  }
  else {
    jQuery("#addressenqinfo").html("");   
    jQuery("#addressenq").css('border-color','');
  }

  return validMuaEnroll;
  
  }



  // home
  $(window).scroll(function () {

    var scroll = $(window).scrollTop();





    if (scroll >= 80) {



       $(".headmenu-cover").addClass("fixed-menu");

    }

    else {

       $(".headmenu-cover").removeClass("fixed-menu");

    }

 });



//  
$(document).ready(function () {



  $('.menu-tab').click(function () {



     $('.menu-hide').toggleClass('show');



     $('.menu-tab').toggleClass('active');



  });



  $('.menuopen.active').click(function () {



     $('.menu-hide').removeClass('show');



     $('.menu-tab').removeClass('active');



  });







  $('.menuholder > ul > li:has( > ul)').addClass('menu-dropdown-iconh');



  $(".menuholder > ul > li").click(function () {



     if ($(window).width() <= 991) {



        if ($($(this).children("ul")).hasClass("exp-dwnrr")) {



           $($(this).children("ul.exp-dwnrr")).removeClass("exp-dwnrr").slideUp(150);



           $(this).removeClass("of-dwn");



        }



        else {



           $('.sidemenu li ul').not($(this).siblings()).removeClass("exp-dwnrr").slideUp(150);

           $($(this).children("ul")).addClass("exp-dwnrr").slideDown(150);



           $(this).addClass("of-dwn");

           $("ul.sidemenu li").not($(this)).removeClass("of-dwn");



        }



     }



  });

});

// 

const menuLinks = document.querySelectorAll('.menu-link');

// Restore active menu item from local storage if available
const activeMenuItem = localStorage.getItem('activeMenuItem');
if (activeMenuItem) {
    document.querySelector(`.menu-link[href="${activeMenuItem}"]`).classList.add('menu-active');
}

// Add click event listener to each menu link
menuLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove 'active' class from all menu links
        menuLinks.forEach(menuLink => menuLink.classList.remove('menu-active'));

        // Add 'active' class to the clicked menu link
        this.classList.add('menu-active');

        // Store the active menu item in local storage
        localStorage.setItem('activeMenuItem', this.getAttribute('href'));
    });
});

// home premium slider







// Influencer

jQuery(document).ready(function(e) {

 

  jQuery('#loader-icons').hide();
  
    jQuery("#influencer-enquiry-form").on('submit',function(e){
  
      e.preventDefault();
  
      var validInfluencer;  
  
      validInfluencer= validationInfluencers();
  
      if(validInfluencer) {
  
            jQuery('#loader-icons').show();
  
            
  
            jQuery.ajax({
  
              url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-influencer-mail.php",
  
              type: "POST",
  
              data:  new FormData(this),
  
              contentType: false,
  
              cache: false,
  
              processData:false,
              beforeSend: function() {
                // Disable the submit button
                jQuery("#enqsumit-button").prop("disabled", true);
            },
  
              success: function(data){
  
                  document.getElementById("influencer-enquiry-form").reset();  
                  jQuery('#loader-icons').hide();
                 
                    return toastalert();
                   
  
              },
  
              error: function(){
                jQuery("#enqsumit-button").prop("disabled", false);
              },
              complete: function() {
                // Enable the submit button after request completes
                jQuery("#enqsumit-button").prop("disabled", false);
            }
  
          });
  
      }
      else {
        // Scroll to the first error message
        var firstError = jQuery('.info:visible').first();
        if (firstError.length) {
            // Scroll smoothly to the first error message
            jQuery('html, body').animate({
                scrollTop: firstError.offset().top - 100 // Adjust this value as needed
            }, 500);
        }
    }
  
  })
  
  });
  
  function validationInfluencers(){
  
  var validInfluencer = true;
  
  jQuery(".info").html('');
  
  if(!jQuery("#caname").val()) {
  
    jQuery("#canameinfo").html("Please enter a name");  
  
    jQuery("#caname").css('border-color','red');
  
   validInfluencer = false;  
  
  }
  
 else if(!jQuery("#caname").val().match(/^[\s\S]{1,100}$/) || !jQuery("#caname").val().match(/^[a-zA-Z\s]+$/)) {
  
    jQuery("#canameinfo").html("Please enter a valid name");  
  
    jQuery("#caname").css('border-color','red');
  
    validInfluencer = false;
  
  }
  else {
    jQuery("#canameinfo").html("");  
  
    jQuery("#caname").css('border-color','');
  }
  

  if(!jQuery("#caphone").val()) {
  
    jQuery("#caphoneinfo").html("Please enter mobile number");
  
    jQuery("#caphone").css('border-color','red');
  
    validInfluencer = false;
  
  }
  
 else if(!jQuery("#caphone").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)){
  
    jQuery("#caphoneinfo").html("Please enter valid mobile number");
  
    jQuery("#caphone").css('border-color','red');
  
    validInfluencer = false;
  
  }
  else {
    jQuery("#caphoneinfo").html("");
  
    jQuery("#caphone").css('border-color','');
  }
  
 
  if (!jQuery("#caemail").val()) {

    jQuery("#caemailinfo").html("Please enter email");

    jQuery("#caemail").css('border-color', 'red');

    validInfluencer = false;

}

else if (!jQuery("#caemail").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {

    jQuery("#caemailinfo").html("Please enter valid email");

    jQuery("#caemail").css('border-color', 'red');

    validInfluencer = false;

}
else {
    jQuery("#caemailinfo").html("");
    jQuery("#caemail").css('border-color', '');
   
}

  

  if(!jQuery("#subject").val()) { 
    jQuery("#subjectinfo").html("Please enter the event date");   
    jQuery("#subject").css('border-color','red');
    validInfluencer = false;
  
  }
  else {
    jQuery("#subjectinfo").html("");   
    jQuery("#subject").css('border-color','');
  }
 
 
 
 


  return validInfluencer;
  
  }



  // Educator

  jQuery(document).ready(function(e) {

    jQuery('#loader-icons').hide();
    
      jQuery("#educator-newsletter").on('submit',function(e){
    
        e.preventDefault();
    
        var validSubscribeEdu;  
    
        validSubscribeEdu = validationsubscriberEducators();
    
        if(validSubscribeEdu) {
    
              jQuery('#loader-icons').show();
    
              
    
              jQuery.ajax({
    
                url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/Educator-subscription.php",
    
                type: "POST",
    
                data:  new FormData(this),
    
                contentType: false,
    
                cache: false,
    
                processData:false,
                beforeSend: function() {
                  // Disable the submit button
                  jQuery(".subscribebtn").prop("disabled", true);
              },
    
                success: function(data){
    
                    document.getElementById("educator-newsletter").reset();  
                    jQuery('#loader-icons').hide();
                    jQuery('.educators-newsletter-modal').hide();
                    toastalert();
                    
                     
                    setTimeout(function() {
                      window.scrollTo({
                          top: 0,
                          behavior: 'smooth'
                      });
                  }, 3000);
                },
    
                error: function(){
                  jQuery(".subscribebtn").prop("disabled", false);
                },
                complete: function() {
                  // Enable the submit button after request completes
                  jQuery(".subscribebtn").prop("disabled", false);
              }
    
            });
    
        }
        else {
          // Scroll to the first error message
          var firstError = jQuery('.info:visible').first();
          if (firstError.length) {
              // Scroll smoothly to the first error message
              jQuery('html, body').animate({
                  scrollTop: firstError.offset().top - 100 // Adjust this value as needed
              }, 500);
          }
      }
    
    })
    
    });
    
    function validationsubscriberEducators() {
      var validSubscribeEdu = true;
  
      jQuery(".info").html('');

        // Name Validation
        if (!jQuery("#emailname").val()) {
          jQuery("#emailnameenqinfo").html("Please enter a name");
          jQuery("#emailname").css('border-color', 'red');
          validSubscribeEdu = false;
      } else if (!jQuery("#emailname").val().match(/^[a-zA-Z\s]+$/)) {
          jQuery("#emailnameenqinfo").html("Please enter a valid name");
          jQuery("#emailname").css('border-color', 'red');
          validSubscribeEdu = false;
      } else {
          jQuery("#emailnameenqinfo").html("");
          jQuery("#emailname").css('border-color', '');
      }
  
      // Email Validation
      if (!jQuery("#emailenq").val()) {
          jQuery("#emailenqinfo").html("Please enter email");
          jQuery("#emailenq").css('border-color', 'red');
          validSubscribeEdu = false;
      } else if (!jQuery("#emailenq").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
          jQuery("#emailenqinfo").html("Please enter valid email");
          jQuery("#emailenq").css('border-color', 'red');
          validSubscribeEdu = false;
      } else {
          jQuery("#emailenqinfo").html("");
          jQuery("#emailenq").css('border-color', '');
      }
  
    
  
      // Phone Validation
      if (!jQuery("#subcontact").val()) {
          jQuery("#emailphoneenqinfo").html("Please enter mobile number");
          jQuery("#subcontact").css('border-color', 'red');
          validSubscribeEdu = false;
      } else if (!jQuery("#subcontact").val().match(/^\+?\d{10,15}$/)) {
          jQuery("#emailphoneenqinfo").html("Please enter valid mobile number");
          jQuery("#subcontact").css('border-color', 'red');
          validSubscribeEdu = false;
      } else {
          jQuery("#emailphoneenqinfo").html("");
          jQuery("#subcontact").css('border-color', '');
      }
  
      return validSubscribeEdu;
  }
  