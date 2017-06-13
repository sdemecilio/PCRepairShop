<?php    /**The MIT License (MIT)Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit GebregorgisPermission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.    */

?>
<html>
    <head>
        <title>Green River Repair Shop</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]>
        <script src="assets/js/ie/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ie9.css" />
        <![endif]-->
        
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/ie8.css" />
        <![endif]-->
        <link rel = "stylesheet" href = "css/background.css">
    </head>
    
    <body>
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Header -->
            <header id="header" class="alt">
                <h1>Green River PC Repair Shop</h1>
            </header>
            
            <!-- Nav -->
            <?php
                include ('indexMenu.php');
            ?>
            
            <!-- Main -->
            <div id="main">
                
                <!-- Introduction -->
                <section id="intro" class="main">
                    <div class="spotlight">
                        <div class="content">
                            <header class="major">
                                <h2>To contact a Tech Shop employee: </h2>
                            </header>
                            
                            <p>12401 SE 320th Street<br>
                            Auburn, WA 98092-3622<br>
                            T: 1-253-833-9111 ext. 2082</p>
                            <h2>Faculty Advisor</h2>
                            
                            <p>Spunky Robinson <img src = "images/star.png" class = "star" height = "15" width="15"><br>
                            Email: <a href = "mailto:arobinson@greenriver.edu">arobinson@greenriver.edu</a></p>
                        
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; 2017 Team SAS</a>.</p>
            </footer></div>
        
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script><!--[if lte IE 8]>
        <script src="assets/js/ie/respond.min.js"></script>
        <![endif]-->
        
        <script src="assets/js/main.js"></script>
    </body>
</html>