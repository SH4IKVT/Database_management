<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <style>
        body,html{
            background:#E2E8C0;
            height: 100%;
            width: 100vw;
        }
        a{
            text-decoration: none;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.2vw;
            color: white;
            font-weight: bold;
        }
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            border-bottom: 2px solid black;
            gap: 2vw;
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: blue;
            padding-top: 2vw;
            padding-bottom: 2vw;
            font-size: 2vw;
            font-weight: bold;
            height: 100%
            /* align-items: center; */
            border: 2px solid black;
            border-radius: 10px 100px / 120px;
            width: 100%;
            position: relative;
            overflow:hidden;
        }
        .accountnav
        {
            border-bottom: 3px solid black;
        }
        .nav1
        {   
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2vw;
            font-size: 1.2vmax;
            font-weight: bold;
            border-bottom: none;
        }
        .nav1 a{
            margin: 0 2vw;
        }
        .nav1 a:hover{
            border-bottom: 3px solid black;
            cursor: pointer;
        }
        .nav a{
            margin-right: 2vw;
            margin-top:1vh;
        }
        .nav a:hover{
            cursor: pointer;
        }
        .logoutbtn{
            display: flex;
            margin-right: 10px;
            font-size: 1.2vmax;
            margin: 0 2vw;
            justify-content: center;
            align-items: center;
            
        }
        .icon
        {
            height: 100px;
            width: 200px;
            margin-top: 1vh;
            margin-right: 2vw;
            margin-left: 2vw;
        }   
        .ri-menu-line{
            display: none;
        }
        .ri-menu-line:hover{
            cursor: pointer;
        }
        .page h1{
            font-size: 3vw;
            margin:0vw 2vw;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .left{
            height: 100%;
            width: 50%;
            margin: 2vw 2vw;
        }
        .right{
            height: 100%;
            width: 50%;
        }
        .page img{
            height: 100%;
            
        }
        .page span{
            color:#5D17EB;
        }
        form{
            color: white;
            font-weight: bold;
            font-size: 1.2vmax;
            padding: 20px;
            background-color: blue;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 9vw;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.2vw;
            color: black;
            font-weight: bold;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .updateform {
            margin: 2vh;
            height: fit;
            width: 40vw;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .accountdetails-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .submit-btn{
            font-size: 1.1vw;
            font-weight: bold;
            background-color: white;
            color: black;
            padding:1vw 1.2vw;
        }
        .submit-btn:hover{
            opacity: 0.6;
            cursor: pointer;
        }
        .accountdetails-container h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 50px;
        }
        .popup{
            font-size: 1.1vw;
            font-weight: bold;
            background-color: blue;
            color: white;
            padding:1vw 1.2vw; 
            border-radius: 20px;
        }
        @media (max-width:600px){
            .header{
                display: flex;
                flex-direction: column;
            }
            .nav{
                flex-direction: column;
                display: none;
                font-size: 2vh;
                background-color: #BF4F51;
                height: 100%;
                width: 100%;
            }
            .ri-menu-line{
                height: 3vw;
                width: 3vh;
                display: contents;
            }
            .header{
                align-items: center;
                justify-content: center;
                background-color: blue;
            }
            .nav1{
                flex-direction: column;
                background-color: blue;
                font-size: 2vh;
                width: 100%;
                height: ;
                gap: 1vh;
            } 
            .icon
            {
                height: 100px;
                width: 200px;
                border-radius: 4px;
            }  
            .nav1 a,logooutbtn{
                font-size: 5vmin;
                width: 100%;
                text-align: center;
            }
            .nav1 a:hover{
                cursor: pointer;
                background-color: ;
            }
        }
        </style>
        <script>
            // let btn = document.querySelector('#btn').addEventListener('click',console.log("clicked"));
            function togglemenu(){
                    if(document.querySelector('.nav').style.display=="contents")
                        document.querySelector('.nav').style.display="none";
                    else{
                        document.querySelector('.nav').style.display="contents";
                    }
                }
        </script>
        <div class="header">
            <img class="icon"src="../icons/Pp.jpg" alt="">
            <i id="btn" style="width: 3vw;" onclick="togglemenu();" class="ri-menu-line"></i>
            <nav class="nav">
                <ul class="nav1">       
                    <a class="homepagenav" href="homepage.php">Home</a>
                    <a class="accountnav" href="Account.php">Account</a>
                    <a class="paybillsnav"href="Paybills.php">Paybills</a>
                    <a class="sendqueries"href="sendqueries.php">Send queries</a>
                </ul>
                <a class="logoutbtn" title="Logout"  href="../login/index.php">
                    <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide" height="30" width="30"><desc>Log Out Streamline Icon: https://streamlinehq.com</desc><path d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295" stroke-width="2"></path><path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825" stroke-width="1"></path><path d="M14.115 7.5H5.295" stroke-width="1"></path></svg>
                    <span>Logout</span>
                </a>
            </nav>
        </div>
    <div class="page">
    <div class="accountdetails-container">
            <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    // Fetch admin details from the `admin_users` table
                    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email'");
                    $row = mysqli_fetch_array($query);
                    $rowdetails =$row;
                }
                $rowdetails;
                $userid;//will use that to search the admin's address id then modify it
                if(isset($_POST['updateform']))
                {
                    $address_id;
                    $newaddress_id;
                    if(isset($_SESSION['email']))
                    {
                        $email=$_SESSION['email'];
                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query))
                        {
                            $rowdetails = $row;
                            $userid = $row['id'];
                        }
                    }
                    $sql = "SELECT * FROM users WHERE id = $userid";
                    $result = mysqli_query($conn, $sql);
                    if ($result && mysqli_num_rows($result) > 0)
                    {
                        // Fetch the result 
                        $row = mysqli_fetch_assoc($result);
                        $newaddress_id = $row['address_id'];
                    }
                    $newfirstName=$_POST['firstName'];
                    $newlastName=$_POST['lastName'];
                    $newemail=$_POST['email'];
                    $newpincode = $_POST['pincode'];
                    $newdistrict = $_POST['district'];
                    $newstreetname = $_POST['streetname'];
                    $newphonenumber = $_POST['phonenumber'];
                    mysqli_begin_transaction($conn);
                    try
                    {
                        //method -: select the address_id then modify and also modify Admin_user details 
                        $checkAddressQuery = "SELECT address_id FROM address WHERE pincode = '$newpincode' AND district = '$newdistrict' AND street_name = '$newstreetname'";
                        $result = mysqli_query($conn, $checkAddressQuery);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            $row = mysqli_fetch_assoc($result);
                            $address_id = $row['address_id'];
                        } 
                        else
                        {
                            $insertAddressQuery = "INSERT INTO address (pincode, district, street_name) VALUES ('$newpincode', '$newdistrict', '$newstreetname')";
                            if (!mysqli_query($conn, $insertAddressQuery))
                            {
                                throw new Exception("Failed to insert address: " . mysqli_error($conn));
                            }
                            $address_id = mysqli_insert_id($conn);
                        }
                        $sql = "UPDATE `users` SET `firstName`='$newfirstName',`lastName`='$newlastName',`email`='$newemail',`address_id`='$address_id',`phone_number`='$newphonenumber' WHERE id=$userid";
                        $insertUserQuery = "UPDATE `users` SET `firstName`='$newfirstName',`lastName`='$newlastName',`email`='$newemail',`address_id`='$address_id',`phone_number`='$newphonenumber' WHERE id=$userid";
                        
                        if (!mysqli_query($conn, $insertUserQuery))
                        {
                            throw new Exception("Failed to insert user: " . mysqli_error($conn));
                        }
                        // Commit transaction
                        mysqli_commit($conn);
                        echo "<div class = 'popup'>The data is updated successfully </div>";
                    } catch (Exception $e){
                        // Roll back transaction if something failed
                        mysqli_rollback($conn);
                        echo "Error: " . $e->getMessage();
                    }
                }
            ?>
                <div class="svgbar">
                    <h1>Account Details</h1>
                    <svg class="updateformimg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="600.80709"
                        height="509.14517" viewBox="0 0 903.80709 509.14517" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M216.09567,704.318l-.95117-1.75879c12.75342-6.89746,28.62573-15.481,36.916-29.56738,8.17236-13.88623,8.35571-32.74268.47851-49.21094-6.70361-14.01562-19.01782-26.57226-35.61108-36.313-3.273-1.92138-6.70874-3.74218-10.0315-5.50341-8.03149-4.25635-16.33642-8.65821-23.18432-14.90284-9.43164-8.60107-16.56787-23.03466-11.249-35.89111a23.85567,23.85567,0,0,1,20.6775-14.46728l.11279,1.99707a21.86061,21.86061,0,0,0-18.94776,13.248c-4.94262,11.94727,1.83863,25.50489,10.75415,33.63574,6.66065,6.07374,14.85181,10.415,22.7732,14.61329,3.34155,1.771,6.79712,3.60254,10.10766,5.54589,16.93848,9.94336,29.52637,22.79786,36.40259,37.17432,8.1604,17.06055,7.94629,36.63672-.55908,51.08887C245.2114,688.57244,229.0676,697.30339,216.09567,704.318Z"
                            transform="translate(-148.09646 -195.42742)" fill="#f1f1f1" />
                        <ellipse cx="57.71992" cy="323.31703" rx="17.5" ry="8.5" fill="#f1f1f1" />
                        <ellipse cx="71.71992" cy="379.31703" rx="17.5" ry="8.5" fill="#f1f1f1" />
                        <ellipse cx="39.71992" cy="388.31703" rx="17.5" ry="8.5" fill="#f1f1f1" />
                        <ellipse cx="89.71992" cy="435.31703" rx="17.5" ry="8.5" fill="#f1f1f1" />
                        <ellipse cx="124.71992" cy="435.31703" rx="17.5" ry="8.5" fill="#f1f1f1" />
                        <rect id="bc1144e2-c94b-4f66-aa77-0b454dfd4174" data-name="Rectangle 62" x="341.01113" y="15.42942"
                            width="562.79595" height="267.05644" fill="#e6e6e6" />
                        <rect id="ad6bb9d5-2e55-4525-b077-6ac2d5f26b45" data-name="Rectangle 75" x="357.10447" y="38.32998"
                            width="530.61006" height="222.81354" fill="#fff" />
                        <rect id="a1fdfaec-ef9f-458a-9330-7bb8c38fec43" data-name="Rectangle 80" x="340.77116" width="562.79595"
                            height="23.90924" fill="#6c63ff" />
                        <circle id="ac9f2818-2064-46b1-8104-b7d94390836e" data-name="Ellipse 90" cx="358.5387" cy="11.05913"
                            r="4.43149" fill="#fff" />
                        <circle id="bd067119-2054-4d5f-9303-2e8fa40cc410" data-name="Ellipse 91" cx="375.35917" cy="11.05913"
                            r="4.43149" fill="#fff" />
                        <circle id="ee5e9ca0-6fca-449b-8f84-cf683813bd65" data-name="Ellipse 92" cx="392.18043" cy="11.05913"
                            r="4.43149" fill="#fff" />
                        <path id="acae6c4c-8028-4596-98db-d9926d2ed09f-689" data-name="Path 142"
                            d="M742.52881,286.63529a2.14688,2.14688,0,0,0,0,4.29376H860.33273a2.14688,2.14688,0,0,0,0-4.29376Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <path id="a061bcdc-636b-4d12-a036-d7339f47b36a-690" data-name="Path 143"
                            d="M742.52881,299.51779a2.14689,2.14689,0,0,0,0,4.29377H802.6701a2.14689,2.14689,0,0,0,0-4.29377Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <path id="e4e4593e-e83d-4128-8cd7-f0323b36c2f2-691" data-name="Path 142"
                            d="M739.56444,361.87112a2.14688,2.14688,0,0,0,0,4.29376H960.44737a2.14688,2.14688,0,0,0,0-4.29376Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <path id="bf45783c-1d79-4b4f-82bb-39fc8a52f7aa-692" data-name="Path 143"
                            d="M739.56444,374.75362a2.14689,2.14689,0,0,0,0,4.29377H902.78473a2.14689,2.14689,0,0,0,0-4.29377Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <path id="b544fc92-6fc6-4255-93fb-dee32d880d89-693" data-name="Path 142"
                            d="M739.56444,387.34466a2.14689,2.14689,0,0,0,0,4.29377H960.44737a2.14689,2.14689,0,0,0,0-4.29377Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <path id="e14bb681-aaa1-4454-9da9-28d0809a146c-694" data-name="Path 143"
                            d="M739.56444,400.22717a2.14689,2.14689,0,0,0,0,4.29377H902.78473a2.14689,2.14689,0,0,0,0-4.29377Z"
                            transform="translate(-148.09646 -195.42742)" fill="#e6e6e6" />
                        <circle cx="475.98887" cy="156.46229" r="18.69428" fill="#a0616a" />
                        <path
                            d="M618.16547,336.93427s8.724,2.33677,13.24179,3.2715,4.05043-1.71365,4.05043-1.71365,5.91986.77892,5.60828.15578,2.49256-3.89463-.77893-7.6335-2.33679-6.543-2.33679-6.543h-2.80414l-.77893-1.09051h-4.362s-4.8226-4.22888-13.39083-2.98259-18.701,4.54044-19.63575,9.68138c-.12678.6973-.29369,1.472-.48751,2.29025-2.34294,9.89144,2.63523,19.14638,7.79851,27.90255,1.26893,2.15193,7.40685,6.8444,7.24985,3.62493s-5.52527-10.44986-1.78641-10.91722S619.87911,343.00991,618.16547,336.93427Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M613.48045,412.325a65.38,65.38,0,0,1-10.69912-1.75788l.19683-3.728L604.615,377.197l.0148-.22735h32.93056l5.1679,27.29315.697,3.68251c-1.36375.53046-2.743,1.03058-4.15193,1.47-.01554,0-.01554.01517-.03034.01517-1.955.60612-3.9403,1.13658-5.94116,1.576a68.55812,68.55812,0,0,1-8.06189,1.24267,62.04526,62.04526,0,0,1-6.30374.30311C617.11736,412.55235,615.28373,412.4766,613.48045,412.325Z"
                            transform="translate(-148.09646 -195.42742)" fill="#6c63ff" />
                        <path
                            d="M592.30938,407.05128c-1.36375-.591-2.68237-1.2275-3.98544-1.8943l-.56089-.28794c-.37886-.197-.77252-.4092-1.15139-.62138q-.77363-.43178-1.50064-.86372c-.46988-.27287-.95455-.56071-1.42443-.84865-.03034-.01517-.04514-.03034-.07547-.03034-1.6368-1.04566-3.24326-2.12166-4.789-3.28848q-.38626-.29553-.77326-.591l-.27231-4.36448.39366-.24253L604.615,377.197l.36333-.22735.03033-.01508,3.72794.01508v13.88151c2.10667,3.04605,3.5311,9.426,4.41017,17.77612.12136,1.19726.22717,2.42476.33373,3.69769a65.38,65.38,0,0,1-10.69912-1.75788c-.37886-.07575-.74293-.16667-1.12179-.27277a62.70234,62.70234,0,0,1-6.51611-2.09132c-.6519-.24252-1.28827-.50012-1.92464-.75772l-.06068-.03034C592.88507,407.29371,592.58242,407.17254,592.30938,407.05128Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M586.61166,404.24766q-.77363-.43178-1.50064-.86372c-.46988-.27287-.95455-.56071-1.42443-.84865-.03034-.01517-.04514-.03034-.07547-.03034-1.6368-1.04566-3.24326-2.12166-4.789-3.28848q-.38626-.29553-.77326-.591c-.12062-.10609-.242-.197-.37886-.30311-.96935-.74255-1.90911-1.51544-2.81852-2.33375-.04514-.03033-.07548-.07584-.12135-.10609a10.42192,10.42192,0,0,1,3.04642-1.62153l1.07591.31827,7.66823,2.30341.04514,3.10664Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M651.1845,404.29316c-.45508.24243-.90941.485-1.36375.71222-.10656.06067-.19683.10609-.28785.1516-.60677.30311-1.19726.60612-1.80329.89406-.01554.01517-.04587.01517-.04587.03034-.03034.01517-.07548.03033-.10582.0455-1.36375.65163-2.743,1.25776-4.15267,1.81846-1.36375.53046-2.743,1.03058-4.15193,1.47-.01554,0-.01554.01517-.03034.01517-1.955.60612-3.9403,1.13658-5.94116,1.576a12.50562,12.50562,0,0,1,.48542-3.68252l.0148-.21218,1.30381-21.09495-1.74335-9.04724,5.00141-.74256L665.86906,391.033s-3.03089,3.03089-15.47262,9.48669C649.29634,401.09055,650.91145,402.9899,651.1845,404.29316Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M624.907,408.61214c-1.97052.18185-3.97064.27286-5.97076.27286-1.94018,0-3.86482-.07584-5.78947-.25769.12136,1.19726.22717,2.42476.33373,3.69769,1.80328.1516,3.63691.22735,5.45574.22735a62.04526,62.04526,0,0,0,6.30374-.30311,68.55812,68.55812,0,0,0,8.06189-1.24267,12.50562,12.50562,0,0,1,.48542-3.68252l.0148-.21218A62.99621,62.99621,0,0,1,624.907,408.61214Zm57.26792-85.04667A66.97189,66.97189,0,1,0,566.441,387.18384c.606.75772,1.2276,1.51545,1.864,2.24283.06068.06058.091.10609.13615.15151a63.82062,63.82062,0,0,0,4.98587,5.13737c.42474.394.86354.78806,1.30308,1.16692.04587.03025.07621.07576.12135.10609.90941.81831,1.84917,1.5912,2.81852,2.33375.13689.1061.25824.197.37886.30311q.38736.29553.77326.591c1.54578,1.16682,3.15224,2.24282,4.789,3.28848.03033,0,.04513.01517.07547.03034.46988.28794.95455.57578,1.42443.84865q.72813.43189,1.50064.86372c.37887.21218.77253.42436,1.15139.62138l.56089.28794c1.30307.6668,2.62169,1.30326,3.98544,1.8943.273.12126.57569.24243.84873.36369l.06068.03034c.63637.2576,1.27274.5152,1.92464.75772a62.70234,62.70234,0,0,0,6.51611,2.09132c.37886.1061.74293.197,1.12179.27277a65.38,65.38,0,0,0,10.69912,1.75788c1.80328.1516,3.63691.22735,5.45574.22735a62.04526,62.04526,0,0,0,6.30374-.30311,68.55812,68.55812,0,0,0,8.06189-1.24267c2.00086-.43945,3.98618-.96991,5.94116-1.576.0148,0,.0148-.01517.03034-.01517,1.40889-.43945,2.78818-.93957,4.15193-1.47,1.40963-.5607,2.78892-1.16683,4.15267-1.81846.03034-.01517.07548-.03033.10582-.0455,0-.01517.03033-.01517.04587-.03034.606-.28794,1.19652-.591,1.80329-.89406.091-.04551.18129-.09093.28785-.1516.45434-.22726.90867-.46979,1.36375-.71222.03034-.01517.04514-.03033.07548-.0455,1.19725-.66671,2.37971-1.36385,3.54664-2.1064.31818-.197.63636-.394.95455-.62138.46987-.28794.92421-.60613,1.36375-.9244.59123-.4092,1.18172-.83348,1.75815-1.273a4.67929,4.67929,0,0,0,.54535-.40911c1.40963-1.06083,2.77338-2.18224,4.07646-3.36433a66.91395,66.91395,0,0,0,18.67-71.98356Zm-19.80658,68.07378a64.7919,64.7919,0,0,1-5.15236,4.36448c-.39366.303-.8036.60613-1.212.87889-.3944.30311-.78806.59105-1.19726.86382-.34853.24252-.697.48495-1.06111.7123-.03034.03025-.07548.04542-.10582.07576-.25824.18184-.53055.34852-.78806.5152-.80359.50012-1.63679,1.00024-2.45519,1.47-.19683.1061-.37886.22727-.57569.33336-.10656.06067-.21237.12126-.33373.18184-.45433.2577-.90941.485-1.36375.72748-.06067.04541-.13615.06058-.19683.10609a.11229.11229,0,0,0-.06067.03025c-.31819.16677-.63637.31827-.95455.46978-.27305.13643-.53056.27277-.8036.394-1.10625.53046-2.24283,1.03049-3.37941,1.50028-1.19726.48495-2.40932.92449-3.63692,1.33359-.30338.1061-.62157.22736-.93975.31828-1.44.45461-2.8792.86381-4.3495,1.19717a62.99621,62.99621,0,0,1-8.89509,1.50027c-1.97052.18185-3.97064.27286-5.97076.27286-1.94018,0-3.86482-.07584-5.78947-.25769a62.3735,62.3735,0,0,1-10.16856-1.78821c-.12136-.03034-.25751-.06059-.37886-.09093a58.11093,58.11093,0,0,1-8.01676-2.72777c-.13615-.06059-.28784-.1061-.4092-.16668-.15169-.06068-.28784-.10609-.4092-.16677-.15169-.06058-.28784-.12117-.424-.18185-1.13658-.5-2.24282-1.04566-3.34907-1.60636l-.51575-.27277c-.98489-.5152-1.955-1.04566-2.90953-1.63671-.333-.18184-.68151-.39393-1.01523-.60612-.37886-.22735-.75772-.46978-1.12178-.7123q-.13542-.09088-.27231-.18185c-.84874-.57588-1.71227-1.15175-2.53067-1.773-.57569-.42437-1.13659-.83348-1.69748-1.273-.36406-.27276-.72738-.5607-1.0759-.86372-.22717-.16677-.45434-.36378-.68225-.5608-.30264-.2576-.606-.5152-.90867-.788-.46988-.37886-.90942-.80323-1.33416-1.19726a60.22928,60.22928,0,0,1-4.83417-5.00095c-.515-.57587-1.00043-1.15175-1.46957-1.75787a3.64682,3.64682,0,0,1-.30338-.37886,63.2983,63.2983,0,1,1,93.04807,6.74374Z"
                            transform="translate(-148.09646 -195.42742)" fill="#3f3d56" />
                        <polygon points="163.436 496.698 175.696 496.697 181.528 449.409 163.434 449.41 163.436 496.698"
                            fill="#a0616a" />
                        <path
                            d="M308.40551,688.12252l24.144-.001h.001A15.38731,15.38731,0,0,1,347.937,703.50777v.5l-39.53076.00147Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <polygon points="209.436 496.698 221.696 496.697 227.528 449.409 209.434 449.41 209.436 496.698"
                            fill="#a0616a" />
                        <path
                            d="M354.40551,688.12252l24.144-.001h.001A15.38731,15.38731,0,0,1,393.937,703.50777v.5l-39.53076.00147Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M274.333,505.26744a10.05579,10.05579,0,0,0-1.88328-15.30389l8.51818-34.70475-17.49238,6.233-5.40724,32.00063a10.11028,10.11028,0,0,0,16.26472,11.775Z"
                            transform="translate(-148.09646 -195.42742)" fill="#9e616a" />
                        <path
                            d="M404.47409,502.26744a10.05576,10.05576,0,0,1,1.88329-15.30389L397.8392,452.2588l17.49238,6.233,5.40723,32.00063a10.11027,10.11027,0,0,1-16.26472,11.775Z"
                            transform="translate(-148.09646 -195.42742)" fill="#9e616a" />
                        <polygon
                            points="142.367 285.513 159.36 484.578 184.224 482.311 194.175 328.461 203.033 389.379 204.807 486.145 227.307 484.645 239.801 380.545 236.736 279.728 151.319 271.078 142.367 285.513"
                            fill="#2f2e41" />
                        <circle cx="189.11211" cy="78.58245" r="25.78574" fill="#a0616a" />
                        <path
                            d="M329.04308,253.38125s12.03336,3.22321,18.26491,4.51252,5.58691-2.36371,5.58691-2.36371,8.1655,1.0744,7.73572.21487,3.43809-5.372-1.0744-10.52917-3.22322-9.025-3.22322-9.025h-3.86786l-1.07442-1.50418H345.374s-6.652-5.833-18.4705-4.114-25.79505,6.26281-27.08434,13.3539c-.17487.96182-.4051,2.03038-.67243,3.159-3.23171,13.64365,3.63487,26.40934,10.75677,38.48707,1.75029,2.96823,10.21656,9.44074,10,5s-7.62122-14.41389-2.46407-15.05854S331.40677,261.76163,329.04308,253.38125Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M310.376,308.60391h45.41173l32.10968,169.575s-27.99385,2.3937-43.99385,8.3937-42.59842-13.70585-42.59842-13.70585Z"
                            transform="translate(-148.09646 -195.42742)" fill="#6c63ff" />
                        <path
                            d="M316.04528,327.75369V308.60391l-5.14174-.03133-37.56693,23.885,8.15165,130.86273s9.64794,43.65782,24.28161,43.20506S331.687,350.43479,316.04528,327.75369Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M285.40354,336.07258l-12.06693-3.615s-8.93307,2.615-8.93307,11.615-7.69685,136.86794-7.69685,136.86794l24.45076,2.16092,5.24609-65.02886Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M352.40354,321.07258l-2.40535-12.46867,6.90535-1.03133,25,10s22.5,164.5,12.5,169.5-16.752,1.12615-16.752,1.12615S344.76032,366.8726,350.58193,350.47259Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path
                            d="M364.40354,320.07258l4.26656-1.85711s12.52311-6.20565,19.62828,6.32573,32.10516,152.53138,32.10516,152.53138l-20.57029,3.86794-15.37853-50.38368Z"
                            transform="translate(-148.09646 -195.42742)" fill="#2f2e41" />
                        <path d="M530.09646,704.57258h-381a1,1,0,1,1,0-2h381a1,1,0,0,1,0,2Z"
                            transform="translate(-148.09646 -195.42742)" fill="#cacaca" />
                    </svg>
                </div>
                <form class="updateform" method="POST">
                        <h1 style="text-align:center;">Profile Details</h1>
                        <label for="firstName"><strong>First Name:</strong></label>
                        <input type="text" id="firstName" name="firstName" value="<?php echo $rowdetails['firstName']; ?>" required>

                        <label for="lastName"><strong>Last Name:</strong></label>
                        <input type="text" id="lastName" name="lastName" value="<?php echo $rowdetails['lastName']; ?>" required>

                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" id="email" name="email" value="<?php echo $rowdetails['email']; ?>" required>

                        <label for="phonenumber"><strong>Phone number:</strong></label>
                        <?php
                            $userid;//will use that to search the admin's address id then modify it
                            $address_id;
                            if(isset($_SESSION['email']))
                            {
                                $email=$_SESSION['email'];
                                $query=mysqli_query($conn, "SELECT * FROM `users` WHERE users.email='$email'");
                                if($row=mysqli_fetch_array($query))
                                {
                                    $userid = $row['id'];
                                }
                            }
                        $sql = "SELECT address_id FROM users WHERE id = $userid";
                        $result = mysqli_query($conn, $sql);
                        if ($result && mysqli_num_rows($result) > 0)
                        {
                            // Fetch the result
                            $row = mysqli_fetch_assoc($result);
                            $address_id = $row['address_id'];
                        }
                        $sql = "SELECT pincode, district, street_name FROM address WHERE address_id = $address_id";
                        $result2 = mysqli_query($conn, $sql);
                        $pincode;
                        $district;
                        $streetname;
                        if ($result2 && mysqli_num_rows($result2) > 0) {
                            // Fetch the result
                            $row2 = mysqli_fetch_assoc($result2);
                            $pincode=$row2['pincode'];
                            $district=$row2['district'];
                            $streetname=$row2['street_name'];
                        }
                        else {
                            echo "No address found with ID $address_id.";
                        }
                        ?>
                        <input type="text" id="phonenumber" name="phonenumber" value="<?php echo $rowdetails['phone_number']; ?>" required>
                        <label for="pincode"><strong>Pincode:</strong></label>
                        <input type="text" id="pincode" name="pincode" value="<?php echo $pincode ?>" required>

                        <label for="district"><strong>District:</strong></label>
                        <input type="text" id="district" name="district" value="<?php echo $district; ?>" required>

                        <label for="streetname"><strong>Street name:</strong></label>
                        <input type="text" id="streetname" name="streetname" value="<?php echo $streetname; ?>" required>

                    <input class="submit-btn" type="submit" name="updateform" value="Update Profile">
                </form>                
        </div>
    </div>
    </div>
</body>
<style>
        footer{
            width: 100%;
            background-color: blue;
            color: white;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
<footer>
  <p>&copy; 2024 Example Website</p>
  <p>Contact Us:8927760330 <a href="mailto:example@example.com">example@example.com</a></p>
  <ul>
    <li><a href="#">About Us</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
  <p>Follow us on social media: 
    <a href="#" target="_blank">Facebook</a> | 
    <a href="#" target="_blank">Twitter</a> | 
    <a href="#" target="_blank">Instagram</a>
  </p>
</footer>
</html>