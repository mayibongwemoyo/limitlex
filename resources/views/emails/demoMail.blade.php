
<DOCTYPE! html>
    <!-- CSS -->
      
        
    <link rel="stylesheet" href="registration/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="registration/assets/css/form-elements.css">
    <link rel="stylesheet" href="registration/assets/css/style.css">


<link rel="stylesheet" href="<?=$config['uiblock'];?>uiBlock.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    
    <style> 
    
body{
/* The image used */
background-image: url("registration/assets/img/backgrounds/1.png");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}      
    
//filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='assets/img/backgrounds/1.png', sizingMethod='scale');
/////-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='assets/img/backgrounds/1.png', sizingMethod='scale')"; 

</style>
    
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- 
    on and touch icons -->
      <!-- Javascript Page Loader -->
<script type="text/javascript" src="registration/assets/js/pace.min.js" data-pace-options='{ "ajax": false }'></script>


<!--<script type="text/javascript" src="assets/js/page-loading.js"></script>-->
    <link rel="shortcut icon" href="../acc/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    
<script language="JavaScript">

function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


</script>
                            <script type="text/javascript">
function showForm_category() {
    var selopt = document.getElementById("opts_category").value;
    if (selopt == 24) {
        document.getElementById("f2_category").style.display = "block";


    }
    else
    {

        document.getElementById("f2_category").style.display = "none";

    }
}
</script>
<style>

/*label {
display: inline-block;
width: 140px;
height : 140px;
text-align: right;
} */	

#contact label{
display: inline-block;
width: 100px;
text-align: right;
}
#contact_submit{
padding-left: 100px;
}
#contact div{
margin-top: 1em;
}
textarea{
vertical-align: top;
height: 5em;
}

.error{
display: none;
margin-left: 10px;
}		

.error_show{
color: red;
margin-left: 10px;
}
input.invalid, textarea.invalid{
border: 2px solid red;
}

input.valid, textarea.valid{
border: 2px solid green;
}
</style>


<br>

    <div class="well container">
    
        <div class="container-fluid">
           
            
<!--cachemarkerBannerTop-->
    
      <?php
      
      ##ECHO TOP MENU ITEMS
      
      echo MenuItems();
      
      

    
    ?>
    
      <?php
    
    include_once '../meetings/includes/AdBanner.php';
    
    
    ##render banner
    echo FullpathBanner("../meetings/");
    
    ?>
    

<!--<center>
<img src="img/Sanganai_logo.png" height="120px" width="180px" style="left:0px;right:0px;display: inline-block;">
</center>-->




<div class="span8">

        <h2 class="text-center">Sanganai/Hlanganani Workshops Program</h2>
        <h6 class="text-center">Dates: 13 – 15 October 2022</h6>
        <h2 class="text-center">Time: 0900 – 1600hrs </h2>

    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
      </style>
    <table>
    <tr>
      <th>Date</th>
      <th>Topic</th>
      <th>Host</th>
      <th>Speakers</th>
      <th>Venue</th>
      <th>Registration</th>
    
    </tr>
    <tr>
      <td rowspan = "4">13/10/2022</td>
      <td>S1: Speed Networking Session 0900 -
    1030hrs
    </td>
      <td>Zimbabwe Tourism Authority</td>
      <td>Buyers & Exhibitors One on One 5 Minutes Networking</td>
      <td>ZITF Hall 2</td>
      <td>All registers exhibitors & buyers to  present  their  badges  at  Hall 2</td>
    
    </tr>
    <tr>
      <td>S2: Sanganai Sports Tourism Workshop 1000 -
    1500hrs
    </td>
      <td>Africa Sports Legacy</td>
      <td>One on One 5 Minutes Networking</td>
      <td>ZITF Hall 2A</td>
      <td>Contact: Fungai Mutseyekwa fungai@tayanatourism.com
    
    madiri@vyoltd.com
    </td>
    
    
    </tr>
    <tr>
      <td>S3:
    MeetInZim Bidding Promotion Launch Press Conference 1400 -
    1500hrs
    
    </td>
      <td>Zimbabwe Tourism Authority</td>
      <td>ZTA Chief Executive</td>
      <td>VIP
    Lounge
    </td>
      <td>Contact: Godfrey Koti Press - koti@ztazim.co.zw
    </td>
    
    
    </tr>
    <tr>
      <td>S4: Buyers & Media Welcome Cocktail 1800 –
    2100hrs
    
    </td>
      <td>Zimbabwe Tourism Authority</td>
      <td></td>
      <td></td>
      <td>By Invitation
    </td>
    
    
    </tr>
        <tr>
      <td rowspan = "5">14/10/2022</td>
      <td>S5: ZIMRA
    Breakfast 0700 -
    0900hrs
    </td>
      <td>ZIMRA</td>
      <td>TBA</td>
      <td>Holiday Inn</td>
      <td>Contact: Musasiyashe D. Kufakunesu
    
    MKufakunesu@zimra.co.zw
    </td>
    
    </tr>
    <tr>
      <td>S6: Speed Networking Session 0900 -
    1030hrs
    </td>
      <td>Zimbabwe Tourism Authority</td>
      <td>Buyers & Exhibitors One on One 5 Minutes Networking</td>
      <td>ZITF Hall 2</td>
      <td>All registers exhibitors and buyers to present their badges at Hall 2</td>
    
    </tr>
    <tr>
      <td>S7: Tourism Investment Conference 0900 -
    1500hrs
    
    </td>
      <td>ZTA –
    Investment Department
    </td>
      <td>TBA</td>
      <td>ZITF Hall 2</td>
      <td>Contact: Charleen Tawonezvi charleen@ztazim.co.zw</td>
    
    </tr>
    <tr>
      <td>S8:
    Ministerial Round Table 1400 -
    1630hrs
    
    
    </td>
      <td>Ministry of Environment, Climate, Tourism & Hospitality
    Industry
    
    </td>
      <td>Ministers</td>
      <td>Holiday Inn Bulawayo</td>
      <td>By Invitation</td>
    
    </tr>
    <tr>
      <td>S9: Official Opening 1800 -
    2100hrs
    
    
    
    </td>
      <td>Ministry of Environment, Climate, Tourism & Hospitality
    Industry
    
    </td>
      <td>Buyers & Exhibitors</td>
      <td>ZITF</td>
      <td>By Invitation</td>
    
    </tr>
    
    <tr>
      <td rowspan = "2">15/10/2022</td>
      <td>S10: Agro Tourism Conference 0900 -
    1500hrs
    
    </td>
      <td>Women’s Farming Syndicate Trust</td>
      <td>TBA</td>
      <td>ZITF Hall 2A</td>
      <td>Contact: Valerie Machingauta valerie.machingauta@gmail.com</td>
    
    </tr>
    <tr>
      <td>S11: Sanganai Family Fun Day
    1100 –
    1700hrs
    
    </td>
      <td>Zimbabwe Tourism Authority</td>
      <td>OPEN FOR THE PUBLIC</td>
      <td></td>
      <td>Contact:
    events@ztazim.co.zw
    
    </td>
    
    
    </tr>
    
    
    </tr>
    
    </table>
    