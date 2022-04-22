<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Techware CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/as2/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?=ROOT?>/assets/as2/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=ROOT?>/assets/as2/bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap.min.css">
    

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/all.min.css">

</head>
<body>
<?php $this->view('includes/nav')?>
<div class="container">

<div class="page-header">
    <center><h1> Techware CRM <small> Admin Dashboard</small></h1></center>
</div>

<!-- Material Design Admin - START -->


<style>
   
    .bigicon {
        font-size:57px;
        color:white;
    }

    .panel{
        border-radius:0;        
    }

    .stats-item{        
        padding:10px;     
        min-height:77px;   

    }

    .header-item{
        font-size:17px;
        color:white;
    }

    .data-item {
        font-size: 19px;
        color: white;
    }
</style>

<div class="container">
    <br />

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div id="chart1">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">            
                <div class="panel text-center">
                    <div class="col-md-6 stats-item" style="background-color: #00AABF">
                        <i style="background-color: #00AABF" class="fa fa-line-chart bigicon"></i>
                    </div>
                    <div style="background-color: #00BCD4" class="col-md-6 stats-item">
                        <div class="header-item">Accounts</div>
                        <div class="data-item">175,773</div>
                    </div>
                </div>            
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="panel text-center">
                <div class="col-md-6 stats-item" style="background-color: #7DB043">
                    <i style="background-color: #7DB043" class="fa fa-eye bigicon"></i>
                </div>
                <div style="background-color: #8BC34A" class="col-md-6 stats-item">
                    <div class="header-item">Leads</div>
                    <div class="data-item">975,112</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="panel text-center">
                <div class="col-md-6 stats-item" style="background-color: #E68900">
                    <i style="background-color: #E68900" class="fa fa-comment-o bigicon"></i>
                </div>
                <div style="background-color: #FF9800" class="col-md-6 stats-item">
                    <div class="header-item">Opportunities</div>
                    <div class="data-item">124,554</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="panel text-center">
                <div class="col-md-6 stats-item" style="background-color: #57717D">
                    <i style="background-color: #57717D" class="fa fa-cloud-download bigicon"></i>
                </div>
                <div style="background-color: #607D8B" class="col-md-6 stats-item">
                    <div class="header-item">Cases</div>
                    <div class="data-item">11,745</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        // a function to generate some random data
        function getRandomArray(length, min, max) {
            var array = [];
            for (var i = 0; i < length; i++) {
                array.push(Math.floor(Math.random() * (max - min + 1)) + min);
            }
            return array;
        }
        // init the main chart
        $("#chart1").shieldChart({
            theme: "light",
            exportOptions: {
                image: false,
                print: false
            },
            primaryHeader: {
                text: "Performance Data"
            },
            axisX: {
                drawColor: 'white',
                ticksColor: 'white',
                axisTickText: {
                    enabled: false
                }
            },
            axisY: {
                drawColor: 'white',
                ticksColor: 'white',                
                plotStripWidth: 0,
                axisTickText: {
                    enabled: false
                }
            },
            tooltipSettings: {
                axisMarkers: {
                    enabled: true,
                    mode: 'x',
                    width: 2,
                    zIndex: 3,
                    drawColor: "grey"
                }
            },
            dataSeries: [
                {
                    seriesType: 'splinearea',
                    collectionAlias: 'Target',
                    data: getRandomArray(20, 30, 100),
                    color: '#F0DD2F'
                },
                {
                    seriesType: 'splinearea',
                    collectionAlias: 'Achieved',
                    data: getRandomArray(20, 15, 50),
                    color: '#E4E4E4'
                }
            ]
        });
    });
</script>

<!-- Material Design Admin - END -->

</div>

</body>
</html>