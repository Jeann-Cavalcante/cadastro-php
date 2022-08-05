// // BY KAREN GRIGORYAN

// $(document).ready(function () {
//   /******************************
//       BOTTOM SCROLL TOP BUTTON
//    ******************************/

//   // declare variable
//   var scrollTop = $("#action");

//   $(window).scroll(function () {
//     // declare variable
//     var topPos = $(this).scrollTop();

//     // if user scrolls down - show scroll to top button
//     if (topPos > 100) {
//       $(scrollTop).css("opacity", "1");
//     } else {
//       $(scrollTop).css("opacity", "0");
//     }
//   }); // scroll END

//   //Click event to scroll to top
//   $(scrollTop).click(function () {
//     $("html, body").animate(
//       {
//         scrollTop: 0,
//       },
//       800
//     );
//     return false;
//   }); // click() scroll top EMD

/*************************************
    LEFT MENU SMOOTH SCROLL ANIMATION
   *************************************/
// declare variable
var actionForm = $("#action").position();

$(".service__btn").click(function () {
  $("html, body").animate(
    {
      scrollTop: actionForm.top,
    },
    500
  );
  return false;
}); // left menu link2 click() scroll END

$(".btn-finish").click(function () {
  $("html, body").animate(
    {
      scrollTop: actionForm.top,
    },
    500
  );
  return false;
}); // left menu link2 click() scroll END
// });
