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
                STUDY TABLE
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
                <h2 class="cont">This project is basically meant for creating an interactive and replenished platform for students from different organizations to access the courses we offer.</h2>
                <div class="slid"><span class="click"><a class="int" href="#abstract">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="b">
                <h1 class="numb">02</h1>
                <h1 class="head">WORKING</h1>
                <h2 class="cont">The users are added by an HR-manager, no registration option is required. If the user is logged in they should be directed to the course selection page. Here they can see the courses that are available to them, including the onboarding program.</h2>
                <div class="slid"><span class="click"><a class="int" href="#table">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="c">
                <h1 class="numb">03</h1>
                <h1 class="head">PORDUCTS</h1>
                <h2 class="cont">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati necessitatibus, repellendus, repellat doloremque incidunt delectus maiores asperiores accusantium rerum, exercitationem modi esse saepe similique enim quos. Impedit illo pariatur et!</h2>
                <div class="slid"><span class="click"><a class="int" href="#col">CLICK HERE</a></span></div>
            </button>
            <button class="btn" id="d">
                <h1 class="numb">04</h1>
                <h1 class="head">ABOUT US</h1>
                <h2 class="cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam totam necessitatibus enim labore corrupti, asperiores, veniam delectus distinctio quis fugit laudantium repudiandae consequuntur eaque aliquam quidem eius rerum officiis saepe.</h2>
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
                The purpose of the MY STUDY-TABLE System Software Requirements Specification is to describe the main functionality of MST in a clear and concise way. The document is to be continuously updated to reflect the changes to requirements during the implementation and utilization of the MY STUDY-TABLE System so that an accurate baseline of actual requirements is available at any time.
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