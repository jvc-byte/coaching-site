document.getElementById("btn1").addEventListener("click", function () {
    document.getElementById("btn1").style.color = "white"
    document.getElementById("btn1").style.backgroundColor = "#FD5F77"
    document.getElementById("btn2").style.color = "#FD5F77"
    document.getElementById("btn2").style.backgroundColor = "white"
    document.getElementById("Example").style.display = "none"
    document.getElementById("collapseExample").style.display = "block"
})

document.getElementById("btn2").addEventListener("click", function () {
    document.getElementById("btn2").style.backgroundColor = "#FD5F77"
    document.getElementById("btn1").style.backgroundColor = "white"
    document.getElementById("btn2").style.color = "white"
    document.getElementById("btn1").style.color = "#FD5F77"
    document.getElementById("collapseExample").style.display = "none"
    document.getElementById("Example").style.display = "block"

})

// change the color of the nav link in respect to the page
document.getElementById("nav1").addEventListener("click", function(){ 
    document.getElementById("nav1").style.color = "#FD5F77"
    document.getElementById("nav2").style.background = "none"
    document.getElementById("nav2").style.color = "#909090"
    document.getElementById("nav3").style.background = "none"
    document.getElementById("nav3").style.color = "#909090"
    document.getElementById("nav4").style.background = "none"
    document.getElementById("nav4").style.color = "#909090"
    document.getElementById("nav5").style.background = "none"
    document.getElementById("nav5").style.color = "#909090"
})

document.getElementById("nav2").addEventListener("click", function(){
    document.getElementById("nav2").style.color = "#FD5F77"
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

document.getElementById("nav3").addEventListener("click", function(){
    document.getElementById("nav3").style.color = "#FD5F77"
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

document.getElementById("nav4").addEventListener("click", function(){
    document.getElementById("nav4").style.color = "#FD5F77"
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

document.getElementById("nav5").addEventListener("click", function(){
    document.getElementById("nav5").style.color = "#FD5F77"
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