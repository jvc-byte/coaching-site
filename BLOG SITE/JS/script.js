document.addEventListener("DOMContentLoaded", function () {
    // Get all elements with the class 'nav_link'
    var navLinks = document.getElementsByClassName('nav_link');

    // Add a click event listener to each nav link
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', function () {
            // Remove the 'active' class from all links
            for (var j = 0; j < navLinks.length; j++) {
                navLinks[j].classList.remove('active');
            }

            // Add the 'active' class to the clicked link
            this.classList.add('active');
        });
    }
});

document.getElementById("btn1").addEventListener("click", function () {
    document.getElementById("btn1").style.color = "white"
    document.getElementById("btn1").style.backgroundColor = "blue"
    document.getElementById("btn2").style.color = "blue"
    document.getElementById("btn2").style.backgroundColor = "white"
    document.getElementById("Example").style.display = "none"
    document.getElementById("collapseExample").style.display = "block"
})

document.getElementById("btn2").addEventListener("click", function () {
    document.getElementById("btn2").style.backgroundColor = "blue"
    document.getElementById("btn1").style.backgroundColor = "white"
    document.getElementById("btn2").style.color = "white"
    document.getElementById("btn1").style.color = "blue"
    document.getElementById("collapseExample").style.display = "none"
    document.getElementById("Example").style.display = "block"

})

// change the color of the nav link in respect to the page
document.getElementById("nav1").addEventListener("click", function () {
    document.getElementById("nav1").style.color = "#000000"
    document.getElementById("nav2").style.background = "none"
    document.getElementById("nav2").style.color = "#909090"
    document.getElementById("nav3").style.background = "none"
    document.getElementById("nav3").style.color = "#909090"
    document.getElementById("nav4").style.background = "none"
    document.getElementById("nav4").style.color = "#909090"
    document.getElementById("nav5").style.background = "none"
    document.getElementById("nav5").style.color = "#909090"
})

document.getElementById("nav2").addEventListener("click", function () {
    document.getElementById("nav2").style.color = "#000000"
    document.getElementById("nav1").style.background = "none"
    document.getElementById("nav1").style.color = "#909090"
    document.getElementById("nav3").style.background = "none"
    document.getElementById("nav3").style.color = "#909090"
    document.getElementById("nav4").style.background = "none"
    document.getElementById("nav4").style.color = "#909090"
    document.getElementById("nav5").style.background = "none"
    document.getElementById("nav5").style.color = "#909090"
    document.getElementById("HomePage").style.display = "none"
    document.getElementById("AboutPage").style.display = "block"
    document.getElementById("ServicePage").style.display = "none"
    document.getElementById("BlogPage").style.display = "none"
    document.getElementById("ContactPage").style.display = "none"
})

document.getElementById("nav3").addEventListener("click", function () {
    document.getElementById("nav3").style.color = "#000000"
    document.getElementById("nav2").style.background = "none"
    document.getElementById("nav2").style.color = "#909090"
    document.getElementById("nav1").style.background = "none"
    document.getElementById("nav1").style.color = "#909090"
    document.getElementById("nav4").style.background = "none"
    document.getElementById("nav4").style.color = "#909090"
    document.getElementById("nav5").style.background = "none"
    document.getElementById("nav5").style.color = "#909090"
    document.getElementById("HomePage").style.display = "none"
    document.getElementById("AboutPage").style.display = "none"
    document.getElementById("ServicePage").style.display = "block"
    document.getElementById("BlogPage").style.display = "none"
    document.getElementById("ContactPage").style.display = "none"
})

document.getElementById("nav4").addEventListener("click", function () {
    document.getElementById("nav4").style.color = "#000000"
    document.getElementById("nav2").style.background = "none"
    document.getElementById("nav2").style.color = "#909090"
    document.getElementById("nav3").style.background = "none"
    document.getElementById("nav3").style.color = "#909090"
    document.getElementById("nav1").style.background = "none"
    document.getElementById("nav1").style.color = "#909090"
    document.getElementById("nav5").style.background = "none"
    document.getElementById("nav5").style.color = "#909090"
    document.getElementById("HomePage").style.display = "none"
    document.getElementById("AboutPage").style.display = "none"
    document.getElementById("ServicePage").style.display = "none"
    document.getElementById("BlogPage").style.display = "block"
    document.getElementById("ContactPage").style.display = "none"
})

document.getElementById("nav5").addEventListener("click", function () {
    document.getElementById("nav5").style.color = "#000000"
    document.getElementById("nav2").style.background = "none"
    document.getElementById("nav2").style.color = "#909090"
    document.getElementById("nav3").style.background = "none"
    document.getElementById("nav3").style.color = "#909090"
    document.getElementById("nav4").style.background = "none"
    document.getElementById("nav4").style.color = "#909090"
    document.getElementById("nav1").style.background = "none"
    document.getElementById("nav1").style.color = "#909090"
    document.getElementById("HomePage").style.display = "none"
    document.getElementById("AboutPage").style.display = "none"
    document.getElementById("ServicePage").style.display = "none"
    document.getElementById("BlogPage").style.display = "none"
    document.getElementById("ContactPage").style.display = "block"
})

$(document).ready(function () {
    // Show or hide the button based on scroll position
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

    // Scroll to top when the button is clicked
    $('#scroll-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800); // Adjust the speed (800ms) if needed
        return false;
    });
});
