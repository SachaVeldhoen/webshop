var firstFeaturedItem;
var secondFeaturedItem;
var thirdFeaturedItem;

var imageProgress;

// thumb lines
var firstImageThumbLine;
var secondImageThumbLine;
var thirdImageThumbLine;

window.addEventListener('load', function () {
    imageProgress = document.getElementById('img-progress')

    firstFeaturedItem = document.getElementById('firstFeaturedImage')
    secondFeaturedItem = firstFeaturedItem.nextElementSibling
    thirdFeaturedItem = secondFeaturedItem.nextElementSibling

    firstImageThumbLine = document.getElementById('firstImageThumbLine')
    secondImageThumbLine = document.getElementById('secondImageThumbLine')
    thirdImageThumbLine = document.getElementById('thirdImageThumbLine')
})

var featuredCount = 1;

function nextImage(nextImage) {
    if (nextImage) {
        if (featuredCount < 3) {
            featuredCount = featuredCount + 1;
        } else if (featuredCount === 3) {
            featuredCount = featuredCount - 2
        }
    } else {
        if (featuredCount > 1) {
            featuredCount = featuredCount - 1;
        } else if (featuredCount === 1) {
            featuredCount = featuredCount + 2
        }
    }

    if (featuredCount === 1) {
        imageProgress.style.left = "45px";

        firstImageThumbLine.style.width = "90px";
        secondImageThumbLine.style.width = "15px";
        thirdImageThumbLine.style.width = "15px";

        firstFeaturedItem.style.display = "block";
        secondFeaturedItem.style.display = "none";
        thirdFeaturedItem.style.display = "none";
    }
    if (featuredCount === 2) {
        imageProgress.style.left = "70px";

        firstImageThumbLine.style.width = "15px";
        secondImageThumbLine.style.width = "90px";
        thirdImageThumbLine.style.width = "15px";

        firstFeaturedItem.style.display = "none";
        secondFeaturedItem.style.display = "block";
        thirdFeaturedItem.style.display = "none";
    }
    if (featuredCount === 3) {
        imageProgress.style.left = "100px";

        firstImageThumbLine.style.width = "15px";
        secondImageThumbLine.style.width = "15px";
        thirdImageThumbLine.style.width = "90px";

        firstFeaturedItem.style.display = "none";
        secondFeaturedItem.style.display = "none";
        thirdFeaturedItem.style.display = "block";
    }
}

