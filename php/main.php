<?php
    include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././css/if1.css">

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Monoton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Unlock&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">

    <!--Javascript-->
    <script src="../js/mainbtn.js"></script>
    <script src="../js/main.js"></script>

    <title>Document</title>
</head>
<script type="text/javascript"></script>  
<body>
    <script>
        function updateDiv()
        { 
            location.reload();
        }
    </script>
    <div class="t-front">
        <a id="main-btn" href="#holder">
            <span class="t-w">
                PROCHECK
            </span>
        </a>
        <br>
        <br>
        <h3 class="slogan">**SLOGAN WILL COME HERE**</h3>
    </div>
    <div class="holder" id="holder">
        <div class="container" id="a">
            <button class="btn">
                <h1 class="numb">01</h1>
                <h1 class="head">ABSTRACT</h1>
                <h2 class="cont">This project is basically meant for creating a platform to totally erase counterfeiting and make it possible for the users to use real and authentic products. This will lead to the removal of all fake products and only qualitatively rich products will prevail.</h2>
                <div class="slid"><span class="click"><a class="int" href="#abstract">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="b">
                <h1 class="numb">02</h1>
                <h1 class="head">WORKING</h1>
                <h2 class="cont">The actual implementation of the idea of PROCHECK is found in this part of the website. Data is inserted into the database and is checked by the database algorithm and is displyed to you as real or fake product. This section will display the product details.</h2>
                <div class="slid"><span class="click"><a class="int" href="#table">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="c">
                <h1 class="numb">03</h1>
                <h1 class="head">PORDUCTS</h1>
                <h2 class="cont">To avail this serveice the idea of PROCHECK has to be subscribed by the company. Then we provide the tags to be used by the companies inside their products and The end products are now PROCHECK powered.</h2>
                <div class="slid"><span class="click"><a class="int" href="#col">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="d">
                <h1 class="numb">04</h1>
                <h1 class="head">ABOUT US</h1>
                <h2 class="cont">This section is to give a short tribute to our team. We have put a lot of hardwork in debugging the hardware part. You can contact us from there to subscribe to PROCHECK to use it for your project.</h2>
                <div class="slid"><span class="click"><a class="int" href="#abt">CLICK HERE</a></span></div>
            </button>
        </div>
    </div>
    <div class="abstract" id="abstract">
        <div class="a-cont">
            <div class="head-cont">
                <h2 class="heading">ABSTRACT</h2>
            </div>
        </div>
        <div class="exp">
            <p class="a-desc">
            </p>
            <p class="a-desc">
            </p>
            <p class="a-desc">
            Counterfeit and duplicate products are causing a major downturn in the world market. In this situation, the reliability of products such as Bar code and QR code is rarely used. This technique also sometimes fails. Therefore, what technical methods are used to determine the reliability and reliability of a product is described. 
            </p>
            <p class="a-desc">
                Back in the time, product authenticity was one of the major drawbacks. People refrained from buying goods online, only because they were not sure about the quality of the delivered product. The system of dealing with the dealers directly made the problem even worse. Then Barcodes and QR codes were used to decide the quality of the product. With the rise in the demand and belief on the internet, online shopping got a boom and goods started selling. 
            </p>
            <p class="a-desc">
                So, we have come up with an idea to replace the system of barcodes or any other physical scanning medium. RFID: Radio Frequency Identification. RFID is a means of resolving information without using any physical medium (like paper, sticker, etc). So, it can’t be copied. Also, we have devised a salting algorithm to give extra surety of the product. Anti-counterfeiting is a conceptual solution that has received attention in the past few years.
            </p>
        </div>
        <iframe src="https://www.youtube.com/embed/PCjGsGC06pI" frameborder="0" class="you"></iframe>
    </div>
    <div class="work" id="table">
        <div class="a-cont">
            <div class="head-cont">
                <h2 class="heading">WORKING</h2>
            </div>
        </div>
        <?php
            $accept="select * from rfid_data";
            $acceptval=mysqli_query($con,$accept);
            $map="select * from r_table";
            $mapval=mysqli_query($con,$map);
            $final="select * from p_table";
            $finalval=mysqli_query($con,$final);
            while($rowa=mysqli_fetch_assoc($acceptval))
            {
                $flag=0;
                while($rowm=mysqli_fetch_assoc($mapval))
                {
                    if($rowa['RTAG_ID']==$rowm['tag_no'])
                    {
                        while($rowf=mysqli_fetch_assoc($finalval))
                        {
                            if($rowm['product_code']==$rowf['product_code'])
                            {
        ?>
                                <div class="disp-vid">
                                    <div class="cont-img">
                                        <img src="../img/1.jpg" alt="His photo" class="per">
                                    </div>
                                    <h2 class="pl-head"><?php echo $rowf['p_name'];?></h2>
                                    <h5 class="pl-desc"><?php echo $rowf['p_description'] ;?></h5>
                                    <div class="slids"><span class="click"><button class="rfer" onclick="updateDiv()"><span class="ints">Refresh</span></button></span></div>
                                </div>
        <?php
                                continue;
                            }
                            else
                            {
                                echo "Hi";
                            }
                        }
                    }
                    else
                    {
                        echo "Hi";
                    }
                }
            }
        ?>
    </div>
    <div class="col" id="col">
        <div class="a-cont">
            <div class="head-cont">
                <h2 class="heading">PRODUCTS</h2>
            </div>
        </div>
    </div>
    <div class="abt" id="abt">
        <div class="a-cont">
            <div class="head-cont">
                <h2 class="heading">ABOUT US</h2>
            </div>
        </div>
        <div class="teams">
            <div class="team">
                <h2>KOWSHAL</h2>
                <h3>19BCE1396</h3>
                <img src="" alt="" class="My img">
            </div>
            <div class="team">
                <h2>UTKARSH</h2>
                <h3>19BCE1631</h3>
                <img src="" alt="" class="My img">
            </div>
        </div>
    </div>
</body>
</html>