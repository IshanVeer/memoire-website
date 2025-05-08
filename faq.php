<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
    	* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    
    body {
        padding: 0 20rem;
        padding-top: 10rem;
    }
    
    h2 {
        margin-bottom: 10px;
    }
    
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        margin: 10px 0;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }
    
    .active,
    .accordion:hover {
        background-color: white;
        border: 1px dashed deepskyblue;
    }
    
    .accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }
    
    .active:after {
        content: "\2212";
    }
    
    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    </style>

    <title>FAQ Page using HTML CSS, and JavaScript - @code.scientist x @codingtorque</title>
</head>

<body>
    <h2>Frequently Asked Questions</h2>
    <button class="accordion">What is codingtorque.com?</button>
    <div class="panel">
        <p>Coding Torque (codingtorque.com) is a free platform to learn coding for free by making amazing projects. Here
            we share source code of projects that you can copy or keep on secondary screen and type yourself by looking
            into it.</p>
    </div>

    <button class="accordion">How can I downlaod your app?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>

    <button class="accordion">How can I buy your ebook?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>

    <script>
    	var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    </script>
</body>

</html>