<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/logincheck.php';?>
<html>
    <head>
        <title>Shipping Schedule</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/shippingSchedule.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/shippingSchedule.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background12.jpg">
        
        <div id="maincontainer">
            <!--BODY STARTS-->

            <div id = "container">
                <div class = "SS_topic">
                    <label><h1><center>Shipping Schedule</center></h1></label><br/><br/>
                </div>
                <div class="tab">
                    <button class="tablinks" onclick="shipping(event, 'schedule')" id="defaultOpen">Schedule</button>
                    <button class="tablinks" onclick="shipping(event, 'vessel')">Vessel</button>
                    <button class="tablinks" onclick="shipping(event, 'ports')">Ports</button>
                    <button class="tablinks" onclick="shipping(event, 'carriers')">Carriers</button>
                </div>

                <div id="schedule" class="tabcontent" style = "border: 1px solid grey;">
                    <div id = "container2">
                        <form action="search.php" method="POST">
                            <div class = "schedule_1 left">
                                <label class = "top">Origin</label>
                                <br/><br/>
                                <input type = "text" name = "s_country" placeholder = "country"/>&nbsp;&nbsp;<input type = "text" name = "s_location" placeholder = "Location">
                                <br/>
                                <label>Name, Iocode, region, Country</label>
                            </div>

                            <div class = "schedule_2 left">
                                <label class = "top">Destination</label>
                                <br/><br/>
                                <input type = "text" name = "s_country" placeholder = "country"/>&nbsp;&nbsp;<input type = "text" name = "s_location" placeholder = "Location">
                                <br/><br/>
                            </div>

                            <div class = "schedule_3 left">
                                <label class = "top">Date</label>
                                <br/><br/>
                                <input type = "date">
                                <br/><br/>
                                <center>
                                    <input type = "radio" name = "place" checked>Depart by<input type = "radio" name = "place">Arrived by
                                </center>
                            </div>

                            <div class = "schedule_4 left">
                                <label class = "top">Range</label>
                                <br/><br/>
                                <select>
                                    <option>Week1</option>
                                    <option>Week2</option>
                                    <option>week3</option>
                                    <option>week4</option>
                                    <option>week5</option>
                                </select>
                                <br/><br/>
                            </div>

                            <center><input type = "submit" name = "submit" value = "SEARCH SCHEDULES" class = "search_button"></center>
                        </form>
                    </div>
                </div>


                <div id="vessel" class="tabcontent">
                    <div id = "container2">

                        <h1>Search by vessel</h1><br/>
                        <div class = "searchbyvessel">
                            <form action = "search.php" method = "POST">
                                <label>Please select the vessel name to trace the vessel schedules.</label><br/><br/>
                                <div style = "width: 30%;margin-bottom: 2%; margin-left: 20%;">
                                    <select>
                                        <option>A. OBELIX</option>
                                        <option>ALANA</option>
                                        <option>AMALIA C</option>
                                        <option>ANINA</option>
                                        <option>ANTHEA Y</option>
                                        <option>BEATE</option>
                                        <option>BOMAR SPRING</option>
                                        <option>CAPE CORTIA</option>
                                        <option>CITY OF BEIJIN</option>
                                        <option>CROATIA</option>
                                        <option>COSCO SANTHOS</option>
                                        <option>EDISON</option>
                                        <option>EUROP</option>
                                        <option>EVER BLISS</option>
                                        <option>EVER PRIMA</option>
                                    </select></div>
                                <div class = "vesselsearch">
                                    <label>Please select vessel and Continent of Origin and Destination to query the vessel berth time.</label>  
                                    <br/><br/>
                                    <label>Inquired period : </label><br> <label>From</label><input type = "date" name = "from">
                                    <br/>
                                    <label>To</label><input type = "date" name = "to">
                                    <br/>
                                    <label>Continent of Origin and Destination </label>
                                    <select>
                                        <option>Asia - Austrailia</option>
                                        <option>Asia - Europe</option>
                                        <option>Asia - North America</option>
                                        <option>Asia - South America</option>
                                        <option>Europe - North America</option>
                                        <option>Europe - Asia</option>
                                        <option>North America - Asia</option>
                                        <option>North America - Europe</option>
                                        <option>North America - South America</option>
                                        <option>South America - Asia</option>
                                        <option>South America - North America</option>
                                        <option>Europe - Africa</option>
                                        <option>Africa - Europe</option>
                                        <option>Africa - Asia</option>
                                        <option>Asia - Africa</option>
                                        <option>Caribbean Feeder Service</option>
                                        <option>Intra Feeder Service</option>
                                        <option>South America(West Coast)</option>
                                        <option>Intra Asia</option>
                                    </select><br/>
                                    <label>Line</label><input type = "text" name = "origin">
                                    <br/><button style ="margin-right: 30%;">Search</button>
                                    <br/>
                                    <label>Vessel/ Voyage</label><input type = "text" name = "vessel_name">
                                    <br/><button>Search</button>
                                    <br/>
                                    <input type = "submit" name = "submit_search" value = "Submit">
                                    <input type = "reset" value = "Reset">
                                </div>
                            </form>
                        </div>                          
                    </div>
                </div>

                <div id="ports" class="tabcontent">
                    <div id = "container2">
                        <form action = "search.php" method = "POST">
                            <h1>Search by Port</h1><br/>
                            <div class = "portsearch">
                                <label>Please select Port and Continent of Origin and Destination to query the vessel berth time.</label><br/><br/>
                                <label>Inquired period : </label><br> <label>From</label><input type = "date" name = "from">
                                <br/>
                                <label>To</label><input type = "date" name = "to">
                                <br/>
                                <label>Continent of Origin and Destination </label>
                                <select>
                                    <option>Asia - Austrailia</option>
                                    <option>Asia - Europe</option>
                                    <option>Asia - North America</option>
                                    <option>Asia - South America</option>
                                    <option>Europe - North America</option>
                                    <option>Europe - Asia</option>
                                    <option>North America - Asia</option>
                                    <option>North America - Europe</option>
                                    <option>North America - South America</option>
                                    <option>South America - Asia</option>
                                    <option>South America - North America</option>
                                    <option>Europe - Africa</option>
                                    <option>Africa - Europe</option>
                                    <option>Africa - Asia</option>
                                    <option>Asia - Africa</option>
                                    <option>Caribbean Feeder Service</option>
                                    <option>Intra Feeder Service</option>
                                    <option>South America(West Coast)</option>
                                    <option>Intra Asia</option>
                                </select><br/>
                                <label>Port</label><input type = "text" name = "port_name">
                                <br/><button>Search</button>
                                <br/>
                                <br/>
                                <input type = "submit" name = "submit_search" value = "Submit">
                                <input type = "reset" value = "Reset">
                            </div>
                        </form>
                    </div>
                </div>

                <div id="carriers" class="tabcontent">        
                    <ul>
                        <li>
                            <h1>Carriers</h1><br/>
                        </li>
                        <ul style = "list-style-type: disc">
                            <li><label><a href = "https://www.evergreen-line.com/">EverGreen Line</a></label></li>
                            <li><label><a href = "https://www.evergreen-marine.com/">EverGreen Marine</a></label></li>
                            <li><label><a href = "http://www.italiamarittima.it/">Italia Marittima</a></label></li>
                            <li><label><a href = "https://www.evergreen-marine.co.uk/">EverGreen Marine(UK)</a></label></li>
                            <li><label><a href = "https://www.evergreen-marine.com.sg/">EverGreen Marine(Singapore)</a></label></li>
                            <li><label><a href = "https://www.evergreen-marine.com.hk/">EverGreen Marine(Hong Kong)</a></label></li>
                        </ul>
                    </ul>                    
                </div>

                <script>
                    document.getElementById("defaultOpen").click();
                </script>
            </div>
            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>
        
    </body>
</html>
