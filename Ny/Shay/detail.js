$(function () {
  console.log("detail.js")

  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  //Star Rating js

  $(document).on({
    mouseover: function (event) {
      $(this).find('.far').addClass('star-over');
      $(this).prevAll().find('.far').addClass('star-over');
    },
    mouseleave: function (event) {
      $(this).find('.far').removeClass('star-over');
      $(this).prevAll().find('.far').removeClass('star-over');
    }
  }, '.rate');


  $(document).on('click', '.rate', function () {
    if (!$(this).find('.star').hasClass('rate-active')) {
      $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
      $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
      $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
    } else {
      console.log('has');
    }
  });

  //Comment show up
  $('#show-comment').click(function () {
    $('#comment-section').toggle(500)
  })

  //Sumbit comment
  $('#submit-comment').click(function () {
    var rating = $("input[name='rating']:checked").val();
    var travel_type = $("input[name='travel_type']:checked").val();
    var time_year = $("input[name='time-year']:checked").val();
    var comment = $('#comment-text').val()

    console.log(rating)
    console.log(travel_type)
    console.log(time_year)
    console.log(comment)

  })

})



