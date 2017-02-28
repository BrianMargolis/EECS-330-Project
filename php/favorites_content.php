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
    case "month":
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
}
?>