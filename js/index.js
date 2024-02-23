var originalButtonText = "View More <b class='arrow-to-right'>&#8594;</b>";
        var originalButtonTextLess = "View Less <b class='arrow-to-right'>&larr;</b>";
        var originalButtonHTML = document.getElementById("myBtn-view").innerHTML;

        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn-view");

            if (dots.style.display === "none" || dots.style.display === "") {
                dots.style.display = "inline";
                btnText.innerHTML = originalButtonTextLess;
                moreText.style.display = "block";
            } else {
                dots.style.display = "none";
                moreText.style.display = "none";
                btnText.innerHTML = originalButtonText;
            }
        }

        $(document).ready(function() {
            var radioInputs = $('input[name="slide"]');
            var currentIndex = 0;
    
            function playSlideshow() {
                radioInputs.eq(currentIndex).prop('checked', true).trigger('change');
                currentIndex = (currentIndex + 1) % radioInputs.length;
            }
            radioInputs.on('change', function() {
          $('body').toggleClass('blue');
          var currentIndex = radioInputs.index($(this));
          $('.slide-cards .slide-card').removeClass('active');
          $('.slide-cards .slide-card').eq(currentIndex).addClass('active');
        });
        });