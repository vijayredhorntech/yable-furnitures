<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Yable Furnitures</title>
</head>
<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')


<script>
    function toggleNavbar() {
        const navBar = document.getElementById('navBar');
        navBar.classList.toggle('hidden');
    }


    function changeImage() {
        // Get the clicked element (this refers to the clicked <a> element)
        let clickedElement = event.currentTarget;
        let bigImage = document.querySelector('.big-image');
        let videoSection = document.querySelector('.videoSection');
        let bigVideo = document.querySelector('.videoSrc');

        // Get the value of the data-image-src attribute from the clicked element
        let newSrc = clickedElement.getAttribute('data-image-src');

        //check src has video link or image link
        if(newSrc.includes('mp4')){
            bigVideo.src = newSrc;
            bigImage.style.display = 'none';
            videoSection.style.display = 'block';
            videoSection.currentTime = 0;
            videoSection.play();

        }
        else{
            bigImage.style.display = 'block';
            videoSection.style.display = 'none';
            bigImage.src = newSrc;
            videoSection.pause();
        }



    }
</script>
</body>
</html>
