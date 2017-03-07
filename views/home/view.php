
<!-- Slideshow -->
<div class="slideshow">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow:
    hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="/images/pic1.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;"></div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;"></div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;"></div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;"></div>
                </div>
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="/images/pic2.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="/images/pic3.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>

    </div>
    <!-- #endregion Jssor Slider End -->
</div>

<h1><?=htmlspecialchars($this->review['title'])?></h1>
<p><strong>Posted on:</strong> <?=(new DateTime($this->review['date']))->format('d-M-Y')?></p>
<p><?=$this->review['content']?></p>
<hr>

<!-- Section -->

<section id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary">The Witcher 3</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <p class="osn"> The climactic third game in the fantasy RPG series, The Witcher 3: Wild Hunt is a unique combination of a non-linear story and an open world -- a character-driven, non-linear story experience focused on player choice, tactical combat and a rich, living environment. This world is populated with intelligent inhabitants and animated by new mechanics that make it a dynamic, living, breathing place. As players travel the world, witnessing many a sunrise or sunset, enduring torrential rains or sweltering heat, they see predators hunting their prey, villages defending themselves against monsters, lovers meeting by moonlight. The new in-game economy system varies the price of goods based on surrounding conditions or their place of origin, encouraging players to seek out through hunting and collecting items that are in demand. With a re-envisioned approach to the narrative, the game will be accessible to both newcomers and old time fans, and a tutorial eases players into the game. Combat has been redesigned in order to combine traditional RPG elements with the speed and precision of a dedicated fighting game. All of these gameplay features are integrated into a robust RPG system at the heart of the game.</p>
        <!-- Снимката да бъде от дясно на текста или както прецените че ще е по - добре визуализирана-->
        <img src="/images/Witcher3.jpg"
    </div>
</section>

<section id="three">
    <div class="container">
        <div class="row">
            <div class="media-center">
                <h2 class="text-primary-media">Media</h2>
                <hr>

            </div>

        </div>
    </div>

</section>

<section id="two">
    <div class="container">
        <div class="row">
            <div class="media-center">
                <h2 class="text-primary-media">Features</h2>
                <hr>
                <p class="osn"><strong>Beyond The Horizon:</strong> CD Projekt Red states that the world of The Witcher 3 is 35 times larger than that of The Witcher 2, with different regions based on various cultures and mythologies. Our demo showed off forests, coastal regions, and a few small towns, as well as the dynamic day and night cycle and weather systems. Those systems aren't just cosmetic; for example, your boat can be smashed apart on the rocky coasts if you try to take it out during a storm, and werewolves pose a significantly greater risk during the night. Your exploration of the world will be driven by a wide variety of main quests, side quests, and random events, which CD Projekt Red is attempting to blur together.</p> <br>
                <p class="osn"><strong>Side Quests That Mean Something:</strong> The majority of our demo focused on an optional side quest that involves Geralt helping a town plagued by murderous creature living in the nearby woods. The townsfolk are split on how to best handle the beast, and it's up to Geralt to investigate the killings, deduce what type of monster is responsible, and choose the best course of action. The side story contains several twists and interactions with the townsfolk, along with a challenging battle against the culprit – a mystical, tree-like monster called a leshen. Geralt ultimately gets paid for his services, but true to the series' intricate storytelling, the outcome of the mission is far from black and white, and Geralt isn't entirely happy with how things turn out. This is just one of countless sidequests that the player can freely skip.</p><br>
                <p class="osn"><strong>Monster Mash:</strong> The leshen in the demo is a formidable monster, but it's not considered a boss. CD Projekt Red says The Witcher 3 contains over 80 such creatures, each with their own characteristics. Before tracking to the leshen, Geralt checks his bestiary for help, which contains a wealth of information on the monster, including its size, the sounds it makes, its special abilities, and vulnerabilities. Defeating the leshen requires tracking down and destroying three totems in the woods to weaken the beast before taking it on.</p>

            </div>

        </div>
    </div>

</section>