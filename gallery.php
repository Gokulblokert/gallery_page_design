<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page Design</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .img-container {
            display: grid;
            grid-template-columns: repeat(4, minmax(200px, 1fr));
            grid-auto-rows: 150px;
            grid-auto-flow: dense;
            grid-gap: 10px;
            margin: 20px auto;
            max-width: 1200px;

        }

        .column-span {
            grid-column: span 2;
        }

        .row-span {
            grid-row: span 2;
        }

        .rc-span {
            grid-row: span 2;
            grid-column: span 2;
        }


        .img-container .img-item img {
            margin: 0 10px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            transition: 0.5s;
        }

        .img-container .img-item img:hover {
            transform: scale(0.9);
            opacity: 0.9;
            box-shadow: 3px 2px 8px rgba(0, 0, 0, 0.3);
        }

        @media (max-width:768px) {
            .img-container {
                grid-template-columns: repeat(2, minmax(150px, 1fr));
                grid-auto-rows: 120px;
                grid-auto-flow: dense;
            }
        }
    </style>
</head>

<body>
    <div class="img-container">
        <div class="img-item " data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/wedding.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/falls2.jpg" alt="">
        </div>
        <div class="img-item" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/nature.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/ocean.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/paris.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/rocks.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/mountainskies.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/bird.jpg" alt="">
        </div>
        <div class="img-item " data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/wedding.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/falls2.jpg" alt="">
        </div>
        <div class="img-item" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/nature.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/ocean.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/paris.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/rocks.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/mountainskies.jpg" alt="">
        </div>
        <div class="img-item row-span" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="gallery_images/bird.jpg" alt="">
        </div>





    </div>

    
    <script>
        AOS.init();
    </script>
</body>

</html>