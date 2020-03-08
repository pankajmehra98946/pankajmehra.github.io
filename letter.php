<?php
include"connection.php";



?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!--Author      : @arboshiki-->
    <style type="text/css">


        #invoice{
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,.invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty,.invoice table .total,.invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #3989c6
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #3989c6;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px!important;
                overflow: hidden!important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice>div:last-child {
                page-break-before: always
            }
        }
    </style>
</head>
<body>
    <div id="invoice">

        <?php
        $id=$_GET['id'];


        $rel="SELECT *
        FROM ((appliedjobs
        INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
        INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.id=$id and  appliedjobs.status='Accpeted' ";

        $vall= mysqli_query($con, $rel);
        $fetch=mysqli_fetch_assoc($vall);

        ?>

        <div class="toolbar hidden-print">
            <div class="text-right">
                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" href="">
                                <img src="imageupload/<?php echo $fetch['image'] ?>" data-holder-rendered="true" height="150" width="100" />
                            </a>
                        </div>
                        <div class="col company-details">
                            <h2 class="name">
                                <label><?php echo $fetch['comname'] ?></label>
                                

                            </h2>
                            <div><?php echo $fetch['address'] ?></div>
                            <div><?php echo $fetch['mobile'] ?></div>
                            <div><?php echo $fetch['email'] ?></div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light"> <h4>TO</h4> </div>
                            <h6 class="to"><?php echo $fetch['firstname'] ?></h6>
                             <div class="address"><?php echo $fetch['usaddress'] ?></div>
                            <div class="address"><?php echo $fetch['mobileno'] ?></div>
                            <div class="email"><a href=""><?php echo $fetch['emailid'] ?></a></div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id">INVOICE</h1>
                            <div class="date">Date of Send: <?php echo $fetch['messenddate'] ?></div>
                            <div class="date">Due Date: 30/10/2018</div>
                        </div>
                    </div>
                    <!-- job discription-->
                    <section class="jd-header  ">
                        <div class="top">
                            <div class="jd-top-head">
                                <header>
                                    <h4 class="jd-header-title" >
                                        Job Discription
                                    </h4>
                                </header>
                                <div class="jd-header-comp-name">
                                    <a  title="WIPRO HR SERVICES INDIA PVT LTD Careers" class="pad-rt-8"><?php echo $fetch['comname']  ?>
                                </a>
                            </div>
                            <div class="jd-header-comp-name">
                                <a   class="pad-rt-8 text-info"><?php echo $fetch['jb_type']  ?>
                            </a>
                        </div>
                    </div>
                    <div class="left">
                        <div class="exp">
                            <em class="naukicon naukicon-bag"></em>
                            <i class="fas fa-briefcase"></i>
                            <span><?php echo $fetch['ex_min']  ?>- <?php echo $fetch['ex_max']  ?> years</span>
                        </div>
                        <div class="salary"><em class="naukicon naukicon-salary"></em>
                            <i class="fas fa-wallet"></i>
                            <span>₹ <?php echo $fetch['salary']  ?> - 3,00,000 P.A. </span>
                        </div>
                        <div class="loc">
                            <em class="naukicon naukicon-location">

                            </em>
                            <span class="location ">
                                <i class="fas fa-map-marker-alt"></i>
                                <a  title="J2Ee Jobs in Gurgaon">
                                    <?php echo $fetch['city']  ?>
                                </a>
                            </span>

                        </div>
                        <div class="text-success">Time and Venue
                        </div>
                        <div class="walkin">
                            <em class="naukicon naukicon-clock">

                            </em>
                            <span>4th March&nbsp;, 11 AM  onwards
                            </span>
                        </div>
                        <div class="venue">
                            <em class="text-danger">
                                Address:
                            </em>
                            <span><?php echo $fetch['address']  ?> </span>
                        </div>
                        <div class="contact">
                            <em class="text-danger">
                                Contact:
                            </em>
                            <span>Shrimi Singh&nbsp;</span>
                        </div>
                        <div class="email">
                            <em class="text-danger">
                                Emailid:
                            </em>
                            <span><?php echo $fetch['email']  ?></span>
                        </div>
                        <div class="mobile">
                            <em class="text-danger">
                                Contect Number:
                            </em>

                            <span><?php echo $fetch['mobile']  ?></span>
                        </div>
                        <div class="education">

                            <span class="text-uppercase text-success" >Education &nbsp;</span><br>
                            <label><?php echo $fetch['profile']  ?></label>

                        </div>
                        <div class="education">

                            <span class="text-uppercase text-success" >Skills &nbsp;</span><br>
                            <label><?php echo $fetch['skills']  ?></label>
                        </div>

                    </div>

                </div>

                <div class="bottom">
                    <div class="jd-stats">
                        <span class="stat">
                            <label class="badge badge-warning" >Posted: </label>
                            <span><?php echo $fetch['postdate']  ?></span>
                        </span>&nbsp;&nbsp;
                        <span class="stat">
                            <label class="badge badge-warning" >No of post: </label>
                            <span><?php echo $fetch['noofpost']  ?></span>
                        </span>&nbsp;&nbsp;
                        <span class="stat">
                            <label class="badge badge-warning" >Status: </label>
                            <span ><?php echo $fetch['status']  ?></span>
                        </span>
                    </div>

                </div>
                <div class="lightbox login-layer-modal">
                    <div class="crossLayer">
                        <span class="icon naukicon naukicon-CrossLayer">

                        </span>
                    </div>
                    <div class="drawer-content">

                    </div>
                </div>
            </section>





        </main>
        <div class="thanks"> <h5> Thank you!</h5></div>
        <div class="notices">
            <div>NOTICE:</div>
            <div class="notice">Please carry this call letter with your resume.</div>
        </div>
        <footer>
            Invoice was created of Pankaj
        </footer>
    </div>
    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
    <div></div>
</div>
</div>
<script type="text/javascript">
 $('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data) 
    {
        window.print();
        return true;
    }
});
</script>
</body>
</html>


