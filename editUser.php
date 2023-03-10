<?php include '../config.php' ?>
<?php
require_once '../Objects/UserController.php';
if(isset($_GET['id'])){
    $userEmail = $_GET['id'];
}
$user = new UserController;
$currentUser = $user->edit($userEmail);
if(isset($_POST['submit'])){
    $user->update($_POST,$userEmail);
}?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/editUserStyle.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php include '../header/header.php'?>
    <div id="mainPage">
    <div id="korniza">
        <form class="box" method="POST">
            <h1>Edit</h1>

            <div class="nameClass">
                <input type="text" required autocomplete="off" id="emri" name="userName" placeholder="Name" value="<?php echo $currentUser['userName']?>">
                <input type="text" required autocomplete="off" id="mbiemri" name="userSurname" placeholder="Surname" value="<?php echo $currentUser['userSurname']?>">
            </div>
            <div class="datelindja">
                <select id="dita" name="userDay">
                    <option value="0">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
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
                <select id="muaji" name="userMonth">
                    <option value="0">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select id="viti" name="userYear">
                    <option value="0">Year</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    
                </select>
            </div>
            <select id="gjinia" name="userGender">
                <option value="0">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" required autocomplete="off" id="password" name="userPassword" placeholder="Password" value="<?php echo $currentUser['userPassword']?>">
            <select name="userRole" id="role">
                <option value="0">Costumer</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" name="submit" id="loginButton">
                    <div><b>Update</b></div>
            </button>
        </form>
    </div>
</div>
    <?php include '../footer/footer.php'?>
</body>
</html>
