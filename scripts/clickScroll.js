var actionForm = $("#action").position();

$(".service__btn").click(function () {
  $("html, body").animate(
    {
      scrollTop: actionForm.top,
    },
    500
  );
  return false;
});

$(".btn-finish").click(function () {
  $("html, body").animate(
    {
      scrollTop: actionForm.top,
    },
    500
  );
  return false;
});

// $(".contactWtt").click(function () {
//   $("html, body").animate(
//     {
//       scrollTop: actionForm.top,
//     },
//     500
//   );
//   return false;
// });
