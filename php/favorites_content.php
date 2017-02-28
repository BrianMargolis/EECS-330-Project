<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}

switch ($period) {
    case "day":
        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 SONGS</h3>
                    <ol>
                        <li> ONE DANCE</li>
                        <p>Drake</p>
                        <li> 7 YEARS</li>
                        <p>Lukas Graham</p>
                        <li> CHEAP THRILLS</li>
                        <p>Sia</p>
                        <li> I TOOK A PILL IN IBIZA</li>
                        <p>Mike Posner</p>
                        <li> THIS IS WHAT YOU CAME FOR</li>
                        <p>Calvin Harris Ft. Rihanna</p>
                        <li> LUSH LIFE</li>
                        <p>Zara Larsson</p>
                        <li> CLOSER</li>
                        <p>The Chainsmokers Ft. Halsey</p>
                        <li> LOVE YOURSELF</li>
                        <p>Justin Bieber</p>
                        <li> WORK</li>
                        <p>Rihanna Ft. Drake</p>
                        <li> CAN'T STOP THE FEELING</li>
                        <p>Justin Timberlake</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ALBUMS</h3>
                    <ol>
                        <li> STARBOY</li>
                        <p>The Weeknd</p>
                        <li> I SEE YOU</li>
                        <p>The XXX</p>
                        <li> LA LA LAND</li>
                        <p>Original Motion Picture Soundtrack</p>
                        <li> MOANA</li>
                        <p>Original Motion Picture Soundtrack</p>
                        <li> 24K MAGIC</li>
                        <p>Bruno Mars</p>
                        <li> HAMILTON</li>
                        <p>Original Broadway Cast Recording</p>
                        <li> 4 YOUR EYEZ ONLY</li>
                        <p>J Cole</p>
                        <li> VIEWS</li>
                        <p>Drake</p>
                        <li> STONEY</li>
                        <p>Post Malone</p>
                        <li> TREATS</li>
                        <p>Original Motion Picture Soundtrack</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ARTISTS</h3>
                    <ol>
                        <li> THE WEEKND</li>
                        <p> Illinois, USA </p>
                        <li> ED SHEERAN</li>
                        <p> California, USA </p>
                        <li> THE CHAINSMOKERS</li>
                        <p> Nevada, USA </p>
                        <li> BRUNO MARS</li>
                        <p> Montana, USA </p>
                        <li> DRAKE</li>
                        <p> Illinois, USA </p>
                        <li> TWENTY ONE PILOTS</li>
                        <p> California, USA </p>
                        <li> ARIANA GRANDE</li>
                        <p> New York, USA </p>
                        <li> RIHANNA</li>
                        <p> Texas, USA </p>
                        <li> THE XXX</li>
                        <p> Illinois, USA </p>
                        <li> ADELE</li>
                        <p> Florida, USA </p>
                    </ol>
                </div>
            </div>
        </div>
        <?php

        break;
    case "week":
        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 SONGS</h3>
                    <ol>
                        <li>UPTOWN FUNK</li>
                        <p>Mark Ronson ft Bruno Mars</p>
                        <li>CHEERLEADER</li>
                        <p>Omi</p>
                        <li>TAKE ME TO CHURCH</li>
                        <p>Hozier</p>
                        <li>LOVE ME LIKE YOU DO</li>
                        <p>Ellie Goulding</p>
                        <li>SEE YOU AGAIN</li>
                        <p>Wiz Khalifia ft Charlie Puth</p>
                        <li>HELLO</li>
                        <p>Adele</p>
                        <li>LEAN ON</li>
                        <p>Major Lazer ft Mo & DJ Snake</p>
                        <li>HOLD BACK THE RIVER</li>
                        <p>James Bay</p>
                        <li>WHAT DO YOU MEAN</li>
                        <p>Justin Bieber</p>
                        <li>SORRY</li>
                        <p>Justin Bieber</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ALBUMS</h3>
                    <ol>
                        <li> 25</li>
                        <p>Adele</p>
                        <li>IN THE LONELY HOUR</li>
                        <p>Sam Smith</p>
                        <li>IF I CAN DREAM</li>
                        <p>Elvis Presley</p>
                        <li>PURPOSE</li>
                        <p>Justin Bieber</p>
                        <li>1989</li>
                        <p>Taylor Swift</p>
                        <li>I CRY WHEN I LAUGH</li>
                        <p>Jess Glynne</p>
                        <li>CHAOS AND THE CALM</li>
                        <p>James Bay</p>
                        <li>A HEAD FULL OF DREAMS</li>
                        <p>Coldplay</p>
                        <li>WANTED ON VOYAGE</li>
                        <p>George Ezra</p>
                        <li>GET WEIRD</li>
                        <p>Little Mix</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ARTISTS</h3>
                    <ol>
                        <li> BRUNO MARS</li>
                        <p> Hawaii, USA </p>
                        <li> ED SHEERAN</li>
                        <p> West Yorkshire, England </p>
                        <li> ADELE</li>
                        <p> Nevada, USA </p>
                        <li> THE WEEKND</li>
                        <p> Toronto, Canada </p>
                        <li> LADY GAGA</li>
                        <p> New York, USA </p>
                        <li> DRAKE</li>
                        <p> Toronto, Canada </p>
                        <li> BIG SEAN</li>
                        <p> Michigan, USA </p>
                        <li> MIGOS</li>
                        <p> Georgia, USA </p>
                        <li> THE CHAINSMOKERS</li>
                        <p> South Carolina, USA </p>
                        <li> BEYONCE</li>
                        <p> Texas, USA </p>
                    </ol>
                </div>
            </div>
        </div>
        <?php
        break;
    case "month":
        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 SONGS</h3>
                    <ol>
                        <li> SHAPE OF YOU</li>
                        <p>Ed Sheeran</p>
                        <li> I DON'T WANNA LIVE FOREVER</li>
                        <p>Zayn/Taylor Swift</p>
                        <li> BAD AND BOUJEE</li>
                        <p>Migos</p>
                        <li> CHAINED TO THE RHYTHM</li>
                        <p>Katy Perry</p>
                        <li> CLOSER</li>
                        <p>Chainsmokers</p>
                        <li> BAD THINGS</li>
                        <p>Machine Gun Kelly</p>
                        <li> THAT'S WHAT I LIKE</li>
                        <p>Bruno Mars</p>
                        <li> LOVE ON THE BRAIN</li>
                        <p>Rihanna</p>
                        <li> I FEEL IT COMING</li>
                        <p>The Weeknd ft Daft Punk</p>
                        <li> BOUNCE BACK</li>
                        <p>Big Sean</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ALBUMS</h3>
                    <ol>
                        <li> PROCESS</li>
                        <p>Sampha</p>
                        <li> MEMORIES ARE NOW</li>
                        <p>Jesca Hoop</p>
                        <li> GANG SIGNS & PRAYER</li>
                        <p>Stormzy</p>
                        <li> A SHADOW IN TIME</li>
                        <p>Willian Basinski</p>
                        <li> ELWAN</li>
                        <p>Tinariwen</p>
                        <li> DRUNK</li>
                        <p>Thundercat</p>
                        <li> NOT EVEN HAPPINESS</li>
                        <p>Julie Byrne</p>
                        <li> EMBERS</li>
                        <p>Throwing Snow</p>
                        <li> TY SEGALL</li>
                        <p>Ty Segall</p>
                        <li> FIN</li>
                        <p>Syd</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ARTISTS</h3>
                    <ol>
                        <li> MAGGIE ROGERS</li>
                        <p> South Carolina, USA </p>
                        <li> NONAME</li>
                        <p> Illinois, USA </p>
                        <li> D.R.A.M.</li>
                        <p> Virginia, USA </p>
                        <li> BISHOP BRIGGS</li>
                        <p> California, USA </p>
                        <li> MIDLAND</li>
                        <p> Texas, USA </p>
                        <li> ANIME</li>
                        <p> California, USA </p>
                        <li> JAMES TW</li>
                        <p> London, England </p>
                        <li> KHALID</li>
                        <p> California, USA </p>
                        <li> ALLISON CRUTCHFIELD</li>
                        <p> Florida, USA </p>
                        <li> GRIZ</li>
                        <p> New York, USA </p>
                    </ol>
                </div>
            </div>
        </div>
        <?php
        break;
}
?>