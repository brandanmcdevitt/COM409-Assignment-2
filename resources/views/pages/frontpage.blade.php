<?php

/*

This is the frontpage of our website.

The header.php and footer.php will be included in the top and bottom of this file.

*/
?>
    @include('inc.header')

    <div class="main-bg">

        <img src="images/fp-bg.jpg">
        <?php
        
        /*
        
        Creating a form to hold the drop-down select boxes for the departure/arrival 
        airports, date selection and a button to submit.
        
        These drop-down boxes will be populated from a database.
        
        */
        
        ?>
            <form>
                <select id="departures">
            <option value="select">Select</option>
            <option value="departure Airport">Departure Airport</option>
            </select>

                <select id="arrivals">
            <option value="select">Select</option>
            <option value="Arrival Airport">Arrival Airport</option>
            </select>

                <select id="dates">
            <option value="select">Select</option>
            <option value="dates">Dates</option>
            </select>

                <button id="search">Find My Holiday</button>
            </form>

            <div class="main-bg-words">
                <h1>Great Deals on<br />Winter Breaks</h1>
                <h2>With Up To</h2>
                <h1>£100 Off<br />Per Person*</h1>

            </div>
    </div>

    <a href="#" id="bnr">
        <div class="offer-banner">
            Click Here To Check Out Great Last Minute Offers
        </div>
    </a>

    <?php 

/*

The featured section will alllow the user to scroll through a list of latest offers.

These offers will be stored and we will use php to display the offers based on if they
are stored as an offer or not.

*/

?>

    <div class="featured">

        <h1>Featured Deals</h1>

        <div class="owl-carousel f-row">

            <div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/city-break.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        City Break
                    </div>
                    <div class="f-town">
                        Zurich, Switzerland
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
            </div>

            <div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/sunny-beach.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        Beach Holiday
                    </div>
                    <div class="f-town">
                        Albuferia, Portugal
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
            </div>

            <div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/northern-lights.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        City Break
                    </div>
                    <div class="f-town">
                        Reykjavik, Iceland
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
            </div>

        </div>

    </div>

    <?php

/*

Small section with bullet points on what our service offers.

*/

?>

        <div class="four-points-outer">
            <div class="four-points-inner">

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/baggage.png">
                    </div>
                    <div class="half-content">
                        22KG <br />Baggage
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/transport.png">
                    </div>
                    <div class="half-content">
                        Transfers <br />included
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/ccard.png">
                    </div>
                    <div class="half-content">
                        Zero Credit <br />Card Fees
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/wallet.png">
                    </div>
                    <div class="half-content">
                        £60 <br />Deposit
                    </div>

                </div>
            </div>
        </div>

        <div class="social">
            <h1>Spread The News</h1>

            <h4>Follow us on social media to keep up to date with latest offers and flight updates</h4>

            <div class="social-icons">

                <div class="si-item">
                    <a href="#"><img src="/images/facebook.png"></a>
                </div>

                <div class="si-item">
                    <a href="#"><img src="/images/twitter.png"></a>
                </div>

                <div class="si-item">
                    <a href="#"><img src="/images/linkedin.png"></a>
                </div>

            </div>
        </div>

        <?php 

/*

Here is where the footer.php file is included.

*/

?> @include('inc.footer')