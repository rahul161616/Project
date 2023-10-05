
    <!--Style-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            overflow: hidden !important;
            background-image: url("<?php echo ROOT; ?>/Assets/404_background.jpg");
           
            
            background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 100%;
            height: 100vh;
            overflow: hidden !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

      

        .text-404 {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .text-404 h1 {
            font-size: 10rem;
            text-transform: uppercase;
            text-align: center;
            margin: 5px 1.1rem;
            animation: sky 5s linear infinite;
            -webkit-animation: sky 5s linear infinite;
            -o-animation: sky 5s linear infinite;
        }

        .text-404 h1:nth-child(1) {
            animation-delay: 1s;
        }

        .text-404 h1:nth-child(3) {
            animation-delay: 2s;
        }

        @keyframes sky {

            0%,
            100% {
                transform: translateY(0) rotateZ(0);
            }

            25% {
                transform: translateY(25px) rotateZ(5deg);
            }

            50% {
                transform: translateY(50px) rotateZ(-5deg);
            }
        }

        .text {
            position: relative;
            font-size: 1.9rem;
            color: rgb(241, 241, 241);
            text-align: center;
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .text p {
            margin: 15px 0;
        }

        .btn:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn {
            cursor: pointer;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            border: #f8f9fa 1px solid;
            padding: .375rem .75rem;
            margin: .375rem;
            font-size: 1rem;
            border-radius: .5rem;
            color: #f8f9fa;
            transition: all .5s ease-in-out;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 8rem;
            }

            .text {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>
    

    <div class="container">
        <div id="text" class="text">
            <!--404 Text-->
            <div class="text-404">
                <h1>4</h1>
                <h1>0</h1>
                <h1>4</h1>
            </div>
            <p>Oops! page not found</p>
            <a href="<?= ROOT ?>/mainhome" class="btn">Back to Home</a>
        </div>
    </div>
   
</body>

</html>