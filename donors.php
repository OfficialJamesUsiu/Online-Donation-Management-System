<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We-Support || Raise Funds at an Ease</title>
    <link rel="stylesheet" href="assets/css/donors.css">
</head>

<body>
    <!-- navigation section -->
    <div class="nav-bar">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="We-Support logo">
        </a>
         
        <div class="nav-links">
            <a href="campaigns.php">CAMPAIGNS</a>
            <a href="donors.php">DONORS</a>
            <a href="faq.php">FAQS</a>
            <a href="Donors.pdf">Download</a>
        </div>

        <div class="btn-login-signup">
            <!-- <button type="submit" id="btn-login" onclick="window.location.href='we-supportdoc.pdf'">Download</button> -->
            <button type="submit" id="btn-login" onclick="window.location.href='login.php'">LOGIN</button>
            <button type="submit" id="btn-signup" onclick="window.location.href='signup.php'">SIGN UP</button>
        </div>
    </div>


    <!-- body part -->

    <div class="main-container">
        <div class="text-content">
            <h1>List of Donors</h1>
            <p>Here is a list of the Donors and the campaign they've Donated For:.</p>
        </div>

        <table>
            <tr>
                <th width="5%">S.N</th>
                <th width="15%">Donor Name</th>
                <th width="25%">Donor Email</th>
                <th width="25%">campaign Name</th>
                <th width="25%">campaign Phone</th>
                <th width="25%">campaign Type</th>
            </tr>
            <!-- logic to display donors -->
            <?php 
                    include 'includes/dbh.inc.php';
                    $sql = "SELECT * FROM donors,campaigns
                    WHERE donors.campaign_id = campaigns.campaign_id 
                    -- AND campaigns.campaign_name = donors.campaign_id
                    ORDER BY donor_id desc;";

                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);            
                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            static $counter = 1;
                            $donorId = $row['donor_id'];
                            $donorName = $row['donor_name'];
                            $donorEmail = $row['donor_email'];
                            $campaignName = $row['campaign_name'];
                            $campaignPhone = $row['campaignPhone'];
                            $campaignType = $row['campaign_type'];
                ?>
                <tr>
                    <td><?php echo $counter++;?></td>
                    <td><?php echo $donorName; ?></td>
                    <td><?php echo $donorEmail; ?></td>
                    <td><?php echo $campaignName; ?></td>
                    <td><?php echo $campaignPhone; ?></td>
                    <td><?php echo $campaignType; ?></td>                     
                </tr>
                <?php
                        }
                    }
                ?>

        </table>
    </div>

    <?php
        include_once 'footer.php';
    ?>