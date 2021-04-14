<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ZAD'S Vegan Takeaway</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/app.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                box-sizing: border-box;
                display: grid;
                min-height: 100vh;
                grid-template-rows: auto 1fr auto;
                color: white;
            }

            /* header {
                display: flex;
                background-color: rgb(17, 113, 126);
                padding: 1rem 3rem;
                justify-content: flex-end;
            }

            header img {
                position: absolute;
                left: 2rem;
                top: -1.5em;
                height: 160px;
            } */

            ul {
                display: flex;
                list-style: none;
                justify-content: space-between;
            }

            li {
                border: 1px solid rgb(235, 230, 230);
                border-radius: 10px;
                padding: 0.5rem 1rem;
                margin: 0 1rem;
                cursor: pointer;
                transition: background-color 400ms ease-in-out, color 600ms ease;
            }

            li:hover, li:focus {
                background-color: rgb(235, 230, 230);
                color: rgb(41, 41, 41);
            }

            .main-content {
                width: 85%;
                margin: 3rem auto;
                color: black;
            }

            footer {
                background-color: rgb(17, 113, 126);
                padding: 1rem;
            }
        </style>
    </head>
    <body>
        <header>
            <img src='https://static.wixstatic.com/media/617af3_6670a712042b404b9804783e0fd48aaf~mv2.png/v1/crop/x_108,y_108,w_283,h_283/fill/w_396,h_396,al_c,lg_1,q_85/9C21AE83-0315-4705-A9A0-B4651F434E23.webp' alt='Zads'/>
            <ul>
                <li><a href='/'>About Zad's</a></li>
                <li><a href='/menu'>Menu</a></li>
                <li><a href='/collection'>Collection Order</a></li>
                <li><a href='/reservation'>Reservation</a></li>
                <li><a href='/contact'>Contact Us</a></li>
            </ul>
        </header>
        <div class='main-content'>
            @yield('content')
        </div>
        <footer>
            &copy; 2020 Zad's
        </footer>
    </body>
</html>
