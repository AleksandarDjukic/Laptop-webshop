$(document).ready(function(){
    $("#add-icon").hover(function(){
      $(".add-label").slideDown();
      }, function(){
      $(".add-label").slideUp();
    });
    $("#edit-icon").hover(function(){
      $(".edit-label").slideDown();
      }, function(){
      $(".edit-label").slideUp();
    });
    $("#delete-icon").hover(function(){
      $(".delete-label").slideDown();
      }, function(){
      $(".delete-label").slideUp();
    });
    var counter = 0;
    $(".logo-nav").click(function(){
            counter ++;
            console.log(counter);
            if (counter % 2 == 0) {
                $("nav").slideDown();
            }
            else if (counter % 2 == 1) {
                $("nav").slideUp();
            } 
    });
      $("#analytics-icon").hover(function(){
        $(".analytics-label").slideDown();
        }, function(){
        $(".analytics-label").slideUp();
      });
      $("#home-icon").hover(function(){
        $(".home-label").slideDown();
        }, function(){
        $(".home-label").slideUp();
      });
      $("#settings-icon").hover(function(){
        $(".settings-label").slideDown();
        }, function(){
        $(".settings-label").slideUp();
      });
      $("#logout-icon").hover(function(){
        $(".logout-label").slideDown();
        }, function(){
        $(".logout-label").slideUp();
      });
});
