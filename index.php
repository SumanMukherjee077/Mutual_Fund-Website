<?php require('connection.php');?>
<html>
    <title>Big Bull</title>
    <body>
      
        <style>
            *{
                padding: 0;
                margin: 0;
                
            }
            #btn{
                text-align: center;
                height: 78px;
                background-color: rgb(2, 2, 2);
                
                
                
                
            }
            button{
                background-color: rgb(186, 154, 11);
                border-radius: 25px;
                font-size: 18px;
                height: 35px;
                width: 65px;
            }
            a{
                margin-right: 130px;
                font-size: 18px;
                
                text-decoration: none;
                color: aliceblue;
                padding-bottom: 20px;
            }
            #bb{
                display: inline;
                color: aliceblue;
                margin-right: 90px;
                font-size: 20px;
                font-family: serif;
            }
            #read
            {
                height:45px;
                width: 75px;
                background-color:red;
            }

            body
            {
               
             border-color: blue;  
             border-width: .25em;  
             border-style: double;  
            } 
          
          
            </style>
        

    <div id="btn">
            
    <img src="logo.png" alt="Bull" height="40px">

    <p id="bb">Big Bull</p>

    <a href="index.php">Home</a>
    <a href="calculator.html">Calculator</a>
    <a href="Bm.html">Best Mutual Funds</a>
    <a href="bp.html">Best Platforms</a>
    <a href="contact.html">Contact Us</a>
    <button  onclick="document.location='signup.php'">Signup</button>
    <button  onclick="document.location='login.php'">Login</button>

    </div>
    </body>
    <body>
        <div id="index">
            <h1>What is a Mutual Fund?</h1>
            <p class="content">Mutual fund is an investment vehicle where many investors pool
                their money to earn returns on their capital over a period.
                This corpus of funds is managed by an investment professional known as
                a fund manager or portfolio manager.
                It is his/her job to invest the corpus in different securities such
                as bonds, stocks, gold and other assets and seek to provide potential returns.
                The gains (or losses) on the investment are shared collectively by the
                investors in proportion to their contribution to the fund.</p>
            <center><img src="side.jpg" alt="side" height="400px" width="700px"></center>
            <h1>How Mutual Fund Companies Make Money?</h1>
            <p class="content">
                When comparing mutual funds, one important thing to check is the
                expenses they charge their investors. Mutual funds make their
                money by charging fees, and these can vary widely. There is often a
                reason for those variations in fees. If it is a managed fund,
                one or more professionals are actively
                tracking the fund's performance and deciding which assets to
                buy and which to sell from day to day. The fund's fees will
                reflect that. If it is a passive or index-based fund, constant
                decisions and adjustments are not necessary and the fees should be lower.
                Mutual fund fees in general have been on the decline since 1996, in large
                part because of competition from exchange-traded funds (ETFs),
                which have very low fees. The average expense ratio of equity mutual fund
                fees as of 2023 was 0.42%. That's a 60% decline from the
                average in 1996. (The total expense of a mutual fund is expressed
                as a percentage per year of the total amount invested.)

            </p>  


        </div>

<style>
    h1{
        text-align: center;
    }
    .content{
        font-size: 24px;
        text-align: justify;
        line-height: 1.8;
    }
</style> 
    <center>
    <button  onclick="document.location='second.html'" id="read">Read More</button>
    </center>         
</body>
</html>
    